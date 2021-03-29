<?php

namespace App\Controller;

use App\Entity\Member;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateIntervalToStringTransformer;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Test;
use App\Entity\Project;
use App\Entity\Freelance;
use App\Entity\Membre;


class FrontController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('frontoffice/front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/home/test/{id}", name="carry_out_test")
     * @param $id
     * @return Response
     */
    public function carryOutTest($id){
        $test = $this->getDoctrine()->getRepository(Test::class)->find($id);
        return $this->render('frontoffice/test/test.html.twig',[
            'name' => $test->getTitle(),
            'description' => $test->getDescription(),
            'questions' => $test->getQuestions()
        ]);
    }
    /**
     * @Route ("/home/projects", name="front_project_index")
     */
    public function projects(){
        return $this->render("frontoffice/project/index.html.twig",[
            'projects' => $this->getDoctrine()->getRepository(Project::class)->findAll()
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
    public function freelance()
    {
        return $this->render("frontoffice/freelance/index.html.twig",[
            'freelances' => $this->getDoctrine()->getRepository(Freelance::class)->findAll()
            ] );
    }
    /**
     * @Route("/home/freelances/{id}", name="front_freelance_show", methods={"GET"})
     * @param $id
     * @return Response
     */
    public function comment($id)
    {
        $freelance = $this->getDoctrine()->getRepository(Freelance::class)->findOneBy(['Freelance' => $id]);
        return $this->render('frontoffice/freelance/show.html.twig', [
            'freelances' => $freelance,
        ]);
    }
    /**
     * @Route("/favorites/ajout/{id}", name="addFavorite")
     */
    public function ajoutFavoris(Freelance $freelance)
    {

        $freelance->addFavorite($this->getCandidate());

        $em = $this->getDoctrine()->getManager();
        $em->persist($freelance);
        $em->flush();
        return $this->redirectToRoute('front_freelance_index');
    }

    /**
     * @Route("/favorites/retrait/{id}", name="removeFavorite")
     */
    public function retraitFavoris(Freelance $freelance)
    {

        $freelance->removeFavorite($this->getCandidate());

        $em = $this->getDoctrine()->getManager();
        $em->persist($freelance);
        $em->flush();
        return $this->redirectToRoute('front_freelance_index');
    }
    /**
     * @Route ("/home/projects/stats", name="front_project_stats_index")
     */
    public function statistiques(ProjectRepository $projectRepository){
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
        return $this->render('frontoffice/project/stats.html.twig',[
            'projTitle' => json_encode($projTitle),
            'projColor' => json_encode($projColor),
            'projCount' => json_encode($projCount),
        ]);
    }

}
