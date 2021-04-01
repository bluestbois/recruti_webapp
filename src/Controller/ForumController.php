<?php

namespace App\Controller;

use App\Entity\Forum;
use App\Entity\Post;
use App\Entity\Recruiter;
use App\Form\ForumType;
use App\Form\PostType;
use App\Repository\ForumRepository;
use App\Repository\PostRepository;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ForumController extends AbstractController
{
    /**
     * @Route("/dashbord/forum", name="dashbord_forum_index", methods={"GET"})
     */
    public function index(ForumRepository $forumRepository): Response
    {
        return $this->render('forum/index.html.twig', [
            'forums' => $forumRepository->findAll(),
        ]);
    }

    /**
     * @Route("/home/forum", name="home_forum_index", methods={"GET"})
     */
    public function indexFront(ForumRepository $forumRepository): Response
    {
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        return $this->render('frontoffice/forum/index.html.twig', [
            'forums' => $forumRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/home/forum/new", name="home_forum_new", methods={"GET","POST"})
     */
    public function newFront(Request $request, FlashyNotifier $flashy): Response
    {

        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $roles = $this->getUser()->getRoles();

            if ($roles[0] == 'ROLE_RECRUITER') {
                $forum->setRecruiter($this->getUser());
            } else if ($roles[0] == 'ROLE_CANDIDATE') {
                $forum->setCandidate($this->getUser());
            }

            $entityManager->persist($forum);
            $entityManager->flush();
            $flashy->success('Forum Created  !!!');
            return $this->redirectToRoute('home_forum_index');
        }

        return $this->render('frontoffice/forum/new.html.twig', [
            'forum' => $forum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/forum/new", name="dashbord_forum_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($forum);
            $entityManager->flush();
            return $this->redirectToRoute('dashbord_forum_index');
        }

        return $this->render('forum/new.html.twig', [
            'forum' => $forum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/forum/{id}", name="dashbord_forum_show", methods={"GET"})
     */
    public function show(Forum $forum, PostRepository $postRepository, ForumRepository $forumRepository): Response
    {

        return $this->render('forum/show.html.twig', [
            'forum' => $forum,
        ]);
    }

    /**
     * @Route("/home/forum/{id}", name="home_forum_show", methods={"GET","POST"})
     */
    public function showFront(Request $request, Forum $forum, ForumRepository $forumRepository, PostRepository $postRepository,FlashyNotifier $flashy): Response
    {

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);


            $roles = $this->getUser()->getRoles();
            if ($roles[0] == 'ROLE_CANDIDATE') {
                $post->setCandidate($this->getUser());
            } else if ($roles[0] == 'ROLE_RECRUITER') {
                $post->setRecruiter($this->getUser());
            }
            $forum = $entityManager->getRepository(Forum::class)->find($request->get('id'));

            $post->setForum($forum);
            $post->setCreatAt(new \DateTime('now'));

            $post->setNOC(0);
            $post->setViews(0);
            $entityManager->flush();
            $flashy->success('Post Created  !!!');
            return $this->redirectToRoute('home_forum_show', array('id' => $forum->getId()));
        }
        return $this->render('frontoffice/forum/show.html.twig', [
            'forum' => $forum,
            'forums' => $forumRepository->findAll(),
            'posts' => $postRepository->findAll(),
            'form' => $form->createView(),
            'post' => $post,


        ]);
    }

    /**
     * @Route("/dashbord/forum/{id}/edit", name="dashbord_forum_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Forum $forum): Response
    {
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dashbord_forum_index');
        }

        return $this->render('forum/edit.html.twig', [
            'forum' => $forum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/home/forum/{id}/edit", name="home_forum_edit", methods={"GET","POST"})
     */
    public function editFront(Request $request, Forum $forum, FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $flashy->primary('Forum Edited !!');
            return $this->redirectToRoute('home_forum_index');
        }

        return $this->render('frontoffice/forum/edit.html.twig', [
            'forum' => $forum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/forum/{id}", name="dashbord_forum_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Forum $forum, FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete' . $forum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($forum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dashbord_forum_index');
    }

    /**
     * @Route("/home/forum/{id}", name="home_forum_delete", methods={"DELETE"})
     */
    public function deleteFront(Request $request, Forum $forum, FlashyNotifier $flashy): Response
    {
        if ($this->isCsrfTokenValid('delete' . $forum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($forum);
            $entityManager->flush();
            $flashy->error('Forum Deleted !!!!!');
        }

        return $this->redirectToRoute('home_forum_index');
    }



}
