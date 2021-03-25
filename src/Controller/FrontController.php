<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Test;
use App\Entity\Job;

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
     * @Route("/home/job", name="front_job_index")
     */
    public function job()
    {
        return $this->render("frontoffice/job/index.html.twig",[
            'jobs' => $this->getDoctrine()->getRepository(Job::class)->findAll()
        ] );
    }
}
