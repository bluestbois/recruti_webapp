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
     * @Route("/home/test/{id}/{Tid}", name="pass_test")
     * @param $id
     * @param $Tid
     * @param Request $request
     * @return Response
     */
    public function passTest($id, $Tid, Request $request): Response {
        $candidature = $this->getDoctrine()->getRepository(Candidature::class)->find($id);
        $tests = $candidature->getTest();

        if($this->getUser() == null) {
            return $this->render('403.html.twig');
        }
        if ($this->getUser() instanceof Candidate && $candidature->getCandidate()->getId() != $this->getUser()->getId()) {
            return $this->render('403.html.twig');
        }

        dump($this->getUser() instanceof Candidate);

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

                    dump($moy);
                    dump($data);

                    $candidature->setScore($data["moy"]);
                    $manager = $this->getDoctrine()->getManager();
                    $manager->remove($candidature);
                    $manager->persist($candidature);
                    $manager->flush();

                    /*return $this->render("frontoffice/test/test.html.twig", [
                        'test' => $test,
                        'form' => $form->createView(),
                        'data' => $data
                    ]);*/

                    /*return $this->redirectToRoute("pass_test", [
                        'id' => $id,
                        'Tid' => $Tid + 1
                    ]);*/
                }
            }

            return $this->render("frontoffice/test/test.html.twig", [
                'test' => $test,
                'form' => $form->createView()
            ]);
        }
        else
            if($Tid == count($tests) + 1){
                return $this->render("frontoffice/test/success.html.twig", [
                    'done' => True,
                    'score' => $this->getDoctrine()->getRepository(Candidature::class)->find($id)->getScore()
                ]);
            }

        return $this->render("frontoffice/base.html.twig");
    }

    /**
     * @Route ("/home/projects", name="front_project_index")
     */
    public function projects(): Response
    {
        return $this->render("frontoffice/project/index.html.twig",[
            'projects' => $this->getDoctrine()->getRepository(Project::class)->findAll()
        ]);
    }

}
