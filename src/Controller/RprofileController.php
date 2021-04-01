<?php

namespace App\Controller;

use App\Entity\Followers;
use App\Entity\Recruiter;
use App\Form\RsettingsType;
use App\Form\SettingsType;
use App\Repository\RecruiterRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RprofileController extends AbstractController
{
    /**
     * @Route("/{id}/rprofile", name="rprofile")
     * @param Id $id
     */
    public function index(int $id): Response
    {
        $f=0;
        $f1=0;
        $manager=$this->getDoctrine()->getManager();
        $followers=$manager->getRepository(Followers::class)->findBy(['idRecruiter'=>$id]);
        $following=$manager->getRepository(Followers::class)->findBy(['idFollower'=>$id]);
        foreach ($followers as $fo){
            $f=$f+1;
        }
        foreach ($following as $fo1){
            $f1=$f1+1;
        }
        $user=$manager->getRepository(Recruiter::class)->find($id);
        return $this->render('rprofile/index.html.twig', [
            'controller_name' => 'RprofileController', 'recruiter'=>$user, 'follower'=>$f, 'following'=>$f1,
        ]);
    }

    /**
     * @Route("/{id}/rprofile/followers", name="rprofile_followers")
     * @param Id $id
     */
    public function followers(int $id): Response
    {
        $users=[];
        $manager=$this->getDoctrine()->getManager();
        $followers=$manager->getRepository(Followers::class)->findBy(['idRecruiter'=>$id]);
        foreach ($followers as $f){
            $user=$manager->getRepository(Recruiter::class)->find($f->getIdFollower());
            array_push($users,$user);
        }
        return $this->render("rprofile/followers.html.twig",[
            'followers' => $users]);
    }
    /**
     * @Route("/{id}/rprofile/following", name="rprofile_following")
     * @param Id $id
     */
    public function following(int $id): Response
    {
        $users=[];
        $manager=$this->getDoctrine()->getManager();
        $followers=$manager->getRepository(Followers::class)->findBy(['idFollower'=>$id]);
        foreach ($followers as $f){
            $user=$manager->getRepository(Recruiter::class)->find($f->getIdRecruiter());
            array_push($users,$user);
        }
        return $this->render("rprofile/following.html.twig",[
            'following' => $users, 'id'=>$id]);
    }
    /**
     * @Route("/{id}/rprofile/follow", name="rprofile_follow")
     * @param Id $id
     */
    public function follow(int $id,RecruiterRepository $Rec,Request $request, PaginatorInterface $paginator): Response
    {
        $following=false;
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // returns your User object, or null if the user is not authenticated
        // use inline documentation to tell your editor your exact User class
        /** @var \App\Entity\User $user */
        $userId = $this->getUser()->getId();
        if ($userId==$id)
        {
            $this->addFlash('danger', 'You cant follow yourself ');
            $articles = $paginator->paginate(
            // Requête contenant les données à paginer (ici nos articles)
                $Rec->findAll(),
                $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                3// Nombre de résultats par page
            );
            return $this->render("frontoffice/profiles/profiles.html.twig", [
                'recruiters' => $articles

            ]);
        }
        $manager=$this->getDoctrine()->getManager();
        $userToFollow= $manager->getRepository(Recruiter::class)->find($id)->getName();
        $followers=$manager->getRepository(Followers::class)->findBy(['idRecruiter'=>$id]);
        foreach ($followers as $f){
           if ($f->getIdFollower()==$userId){
               $following=true;
           }
        }
        if ($following) {
            $this->addFlash('warning', 'You are already following '.$userToFollow);
            $articles = $paginator->paginate(
            // Requête contenant les données à paginer (ici nos articles)
                $Rec->findAll(),
                $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                3// Nombre de résultats par page
            );
            return $this->render("frontoffice/profiles/profiles.html.twig", [
                'recruiters' => $articles

            ]);
        }
        else
        {
            $follower = new Followers();
            $follower->setIdRecruiter($id);
            $follower->setIdFollower($userId);
            $manager->persist($follower);
            $manager->flush();
            $this->addFlash('success', 'You are now following '.$userToFollow);
            $articles = $paginator->paginate(
            // Requête contenant les données à paginer (ici nos articles)
                $Rec->findAll(),
                $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                2// Nombre de résultats par page
            );
            return $this->render("frontoffice/profiles/profiles.html.twig", [
                'recruiters' => $articles

            ]);
        }
    }

    /**
     * @Route("/{id}/rprofile/unfollow", name="rprofile_unfollow")
     * @param Id $id
     */
    public function unfollow(int $id): Response
    {
        $manager=$this->getDoctrine()->getManager();
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // returns your User object, or null if the user is not authenticated
        // use inline documentation to tell your editor your exact User class
        /** @var \App\Entity\User $user */
        $userId = $this->getUser()->getId();
        $following=$manager->getRepository(Followers::class)->findBy(['idFollower'=>$userId, 'idRecruiter'=>$id]);
        $manager->remove($following[0]);
        $manager->flush();
        $users=[];
        $followers=$manager->getRepository(Followers::class)->findBy(['idFollower'=>$userId]);
        foreach ($followers as $f){
            $user=$manager->getRepository(Recruiter::class)->find($f->getIdRecruiter());
            array_push($users,$user);
        }
        return $this->render("rprofile/following.html.twig",[
            'following' => $users, 'id'=>$userId]);
    }
    /**
     * @Route("/rprofile/Rsettings", name="Rsettings")
     */
    public function rsettings(Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(RsettingsType::class, $user );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('message','Profile Updated');
            return $this->redirectToRoute('Rsettings');
        }

        return $this->render('rprofile/Rsettings.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
