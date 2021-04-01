<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/", name="login")
     */
    public function index(): Response
    {
        return $this->redirectToRoute('app_login');
    }
    /**
     * @Route("/active", name="active")
     */
    public function indexx(): Response
    {
        return $this->render('frontoffice/login/active.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

}
