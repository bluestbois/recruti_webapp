<?php

namespace App\Controller;
use App\controller\CandidateController;
use App\Entity\Candidature;
use App\Entity\Candidate;
use App\Entity\Followers;
use App\Entity\Recruiter;
use App\Form\CandidateType;
use App\Form\CandidatureType;
use App\Form\SettingsType;
use App\Repository\CandidatureRepository;
use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index(): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
    /**
     * @Route("/profile", name="profile")
     */
    public function candidature()
    {
        return $this->render('profile/index.html.twig', [
            'candidatures' => $this->getDoctrine()->getRepository(Candidature::class)->findAll(),
            'candidates' => $this->getDoctrine()->getRepository(Candidate::class)->findAll(),
        ]);
    }
/*
    /**
     * @Route("/setting", name="setting")
     */
   /* public function setting(): Response
    {
        return $this->render('profile/settings.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
    */
    /**
     * @Route("/profile/settings", name="settings")
     */
    public function settings(Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(SettingsType::class, $user );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('message','Profile Updated');
            return $this->redirectToRoute('settings');
        }

        return $this->render('profile/settings.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/profile/settings/pass", name="pass")
     */
    public function pass(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        if($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();
            if($request->request->get('pass') == $request->get('pass1'))
            {
                $user->setPassword($passwordEncoder->encodePassword($user, $request->get('pass')));
                $em->flush();
                $this->addFlash('message', 'Password updated');
                return $this->redirectToRoute('pass');

            }else {
                $this->addFlash('error', 'passwords are not identical');
                  }
        }


        return $this->render('profile/settingss.html.twig');
    }

    /**
     * @Route("/{id}/cdprofile", name="cdprofile")
     * @param Id $id
     */
    public function indexx(int $id): Response
    {

        $manager=$this->getDoctrine()->getManager();
        $user=$manager->getRepository(Candidate::class)->find($id);
        return $this->render('frontoffice/profiles/cdprofile.html.twig', [
            'controller_name' => 'profileController', 'candidate'=>$user,
        ]);
    }


}
