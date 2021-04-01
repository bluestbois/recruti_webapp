<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Form\ResetPassType;
use App\Repository\CandidateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use src\Controller\RegistrationController;
use Symfony\Component\HttpFoundation\Request;



class SigninController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        return $this->redirectToRoute('app_login');
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    /**
     * @Route("/forgottenpass",name="forgottenpass")
     */
    public function frogottenPass(Request $request, CandidateRepository $usersRepo, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator)
    {
        $form = $this->createForm(ResetPassType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $donnees = $form->getData();;
            $user = $usersRepo->findOneByEmail($donnees['email']);
        if(!$user){
            $this->addFlash('danger','email not found');
            return $this->redirectToRoute('app_login');
        }
        $token = $tokenGenerator->generateToken();
        try{
            $user->setResetToken($token);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
        }catch(\exception $e){
            $this->addFlash('warning','error : '.$e->getMessage());
            return $this->redirectToRoute('app_login');
        }
        $url = $this->generateUrl('app_resetpass',['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);

        $message = (new \Swift_Message('Forgotten password'))
        ->setFrom('recruritini@gmail.com')
        ->setTo($user->getEmail())
        ->setBody(
            "<div class=alert alert-secondary>
    <strong>click on the link down below : </strong></div>".$url, 'text/html'
        );
        $mailer->send($message);
        $this->addFlash('message','check your email');
        return $this->redirectToRoute('app_login');
        }
        return $this->render('security/ResetPass.html.twig', ['emailForm' => $form->createView()]) ;
    }

    /**
     * @Route("/resetpass/{token}", name="app_resetpass")
     */
    public function resetPassword($token, Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->getDoctrine()->getRepository(Candidate::class)->findOneBy(['reset_token'=>$token]);
        if(!$user){
            $this->addFlash('danger', 'Token inconnu');
            return $this->redirectToRoute('app_login');
        }
        if($request->isMethod('Post')){
            $user->setResetToken(null);
            $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('password')));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('message', 'Password successfully changed');
            return $this->redirectToRoute('app_login');
        }else{
            return $this->render('security/Reset.html.twig', ['token'=> $token]);
        }

    }
}
