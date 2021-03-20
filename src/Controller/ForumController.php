<?php

namespace App\Controller;

use App\Entity\Forum;
use App\Entity\Post;
use App\Form\ForumType;
use App\Form\PostType;
use App\Repository\ForumRepository;
use App\Repository\PostRepository;
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
     * @Route("/home/forum", name="front_forum_index", methods={"GET"})
     */
    public function indexFront(ForumRepository $forumRepository): Response
    {
        return $this->render('frontoffice/forum/index.html.twig', [
            'forums' => $forumRepository->findAll(),
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
    public function show(Forum $forum,PostRepository $postRepository,ForumRepository $forumRepository): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        return $this->render('frontoffice/forum/show.html.twig', [
            'forum' => $forum,
            'post' => $post,
            'posts' => $postRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/home/forum/{id}", name="frontforumshow", methods={"GET"})
     */
    public function showFront(Forum $forum,ForumRepository $forumRepository, PostRepository $postRepository): Response
    {
        return $this->render('frontoffice/forum/show.html.twig', [
            'forum' => $forum,
            'forums' => $forumRepository->findAll(),
            'posts' => $postRepository->findAll(),

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
     * @Route("/dashbord/forum/{id}", name="dashbord_forum_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Forum $forum): Response
    {
        if ($this->isCsrfTokenValid('delete'.$forum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($forum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dashbord_forum_index');
    }
    /**
     * @Route("/home/forum/new", name="home_forum_new", methods={"GET","POST"})
     */
    public function newFront(Request $request): Response
    {
        echo ("oki");
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($forum);
            $entityManager->flush();

            return $this->redirectToRoute('home_forum_index');
        }

        return $this->render('frontoffice/forum/new.html.twig', [
            'forum' => $forum,
            'form' => $form->createView(),
        ]);
    }


}
