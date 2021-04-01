<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\Candidature;
use App\Entity\Project;
use mysql_xdevapi\Statement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Test;

use App\Repository\CandidateRepository;
use App\Repository\FreelanceRepository;
use App\Repository\ProjectRepository;
use App\Repository\RecruiterRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateIntervalToStringTransformer;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Entity\Job;
use App\Entity\Freelance;
use App\Entity\Membre;

class FrontController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->redirectToRoute('front_freelance_index');
    }

    /**
     * @Route ("/home/projects", name="front_project_index")
     */
    public function projects(PaginatorInterface $paginator,Request $request):Response
    {
        $project=$paginator->paginate(
            $this->getDoctrine()->getRepository(Project::class)->findAll(),
            $request->query->getInt('page',1),
            2
        );
        return $this->render("frontoffice/project/index.html.twig",[
            'projects' => $project
        ]);
    }

    /**
     * @Route ("/home/projects/members/{id}", name="front_project_members_index", methods={"GET"})
     */
    public function members(int $id){
        return $this->render("frontoffice/project/members.html.twig",[
            'members' => $this->getDoctrine()->getRepository(Member::class)->findOneBy($id)
        ]);
    }

    /**
     * @Route("/home/freelances", name="front_freelance_index")
     */
    public function freelance(PaginatorInterface $paginator,Request $request):Response
    {
        $freelance=$paginator->paginate(
            $this->getDoctrine()->getRepository(Freelance::class)->findAll(),
            $request->query->getInt('page',1),
            3
        );
        return $this->render("frontoffice/freelance/index.html.twig",[
            'freelances' => $freelance
        ] );
    }

    /**
     * @Route("/home/freelances/{id}", name="front_freelance_show", methods={"GET"})
     * @param $id
     * @return Response
     */
    public function comment(Freelance $freelance)
    {
        return $this->render('frontoffice/freelance//show.html.twig', [
            'freelance' => $freelance,
        ]);
    }

    /**
     * @Route ("/home/projects/stats", name="front_project_stats_index")
     * @param ProjectRepository $projectRepository
     * @return Response
     */
    public function statistiques(ProjectRepository $projectRepository): Response
    {
        $projects = $projectRepository->findAll();

        $projTitle = [];
        $projColor = [];
        $projCount = [];

        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($projects as $project){
            $projTitle[] = $project->getTitle();
            $projColor[] = $project->getColor();
            $projCount[] = count($project->getFreelances());
        }
        return $this->render('project/stats.html.twig',[
            'projTitle' => json_encode($projTitle),
            'projColor' => json_encode($projColor),
            'projCount' => json_encode($projCount),
        ]);
    }

    /**
     * @Route("/home/job", name="front_job_index")
     */
    public function job()
    {
        return $this->render("frontoffice/job/job.html.twig",[
            'jobs' => $this->getDoctrine()->getRepository(Job::class)->findAll()
        ] );
    }

    /**
     * @Route("/home/profiles", name="profiles")
     */
    public function profiles(RecruiterRepository $Rec,Request $request, PaginatorInterface $paginator )
    {
        $articles = $paginator->paginate(
        // Requête contenant les données à paginer (ici nos articles)
            $Rec->findAll(),
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            2// Nombre de résultats par page
        );

        return $this->render("frontoffice/profiles/profiles.html.twig",[
            'recruiters' => $articles

        ]);
    }

    /**
     * @Route("/home/profiless", name="profiless")
     */
    public function indexx(CandidateRepository $Rec,Request $request, PaginatorInterface $paginator )
    {
        $articles = $paginator->paginate(
        // Requête contenant les données à paginer (ici nos articles)
            $Rec->findAll(),
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4// Nombre de résultats par page
        );

        return $this->render("frontoffice/profiles/profiless.html.twig",[
            'candidates' => $articles

        ]);
    }

    /**
     * @Route("/home/test/{id}/{Tid}", name="pass_test")
     * @param $id
     * @param $Tid
     * @param Request $request
     * @param \Swift_Mailer $mailer
     * @return Response
     */
    public function passTest($id, $Tid, Request $request, \Swift_Mailer $mailer): Response {
        $candidature = $this->getDoctrine()->getRepository(Candidature::class)->find($id);
        if($candidature->getJob())
            $tests = $candidature->getJob()->getTests();
        else
            $tests = $candidature->getFreelance()->getTests();


        if($this->getUser() == null) {
            return $this->render('403.html.twig');
        }
        if ($this->getUser() instanceof Candidate && $candidature->getCandidate()->getId() != $this->getUser()->getId()) {
            return $this->render('403.html.twig');
        }

        if($Tid <= count($tests)) {
            $test = $tests[$Tid - 1];
            $questions = $tests[$Tid - 1]->getQuestions();
            $form = $this->createFormBuilder();

            foreach ($questions as $question) {
                $form->add($question->getId(), ChoiceType::class, [
                    'choices' => [
                        $question->getAnswerA() => 0,
                        $question->getAnswerB() => 1,
                        $question->getAnswerC() => 2
                    ],
                    'label' => $question->getStatement(),
                    'multiple' => false,
                    'expanded' => true
                ]);
            }
            $form->add('Submit', SubmitType::class);

            $form = $form->getForm();

            if ($form->handleRequest($request)) {
                if ($form->isSubmitted() && $form->isValid()) {
                    $data = $form->getData();
                    $score = 0;
                    $sum = 0;
                    $moy = $candidature->getScore();

                    foreach ($questions as $question) {
                        $score += $data[$question->getId()] == $question->getRightAnswer() ? $question->getPoints() : 0;
                        $sum += $question->getPoints();
                    }


                    $data["score"] = round($score / $sum, 2);
                    $data["moy"] = round(((($moy * ($Tid - 1)) + $data["score"]) / $Tid), 2);

                    dump($data);

                    $candidature->setScore($data["moy"]);
                    $manager = $this->getDoctrine()->getManager();
                    $manager->remove($candidature);
                    $manager->persist($candidature);
                    $manager->flush();

                    return $this->redirectToRoute("pass_test", [
                        'id' => $id,
                        'Tid' => $Tid + 1
                    ]);
                }
            }

            return $this->render("frontoffice/test/test.html.twig", [
                'test' => $test,
                'form' => $form->createView()
            ]);
        }
        else
            if($Tid == count($tests) + 1){
                $score = $this->getDoctrine()->getRepository(Candidature::class)->find($id)->getScore();

                $message = (new \Swift_Message('Test passed!'))
                    ->setFrom('recruritini@gmail.com')
                    ->setTo($this->getUser()->getEmail())
                    ->setBody(
                        $this->renderView(
                            'emails/test.html.twig', [
                            'score' => $score * 100
                        ]),
                        'text/html'
                    );
                $mailer->send($message);


                return $this->render("frontoffice/test/success.html.twig", [
                    'done' => True,
                    'score' => $score
                ]);
            }

        return $this->render("frontoffice/base.html.twig");
    }

}
