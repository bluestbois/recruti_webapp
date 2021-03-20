<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use App\Form\CommentType;
use App\Form\PostType;
use App\Repository\CandidateRepository;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Repository\RecruiterRepository;
use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PostController extends AbstractController
{
    /**
     * @Route("/dashbord/post", name="dashbord_post_index", methods={"GET"})
     */
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('post/index.html.twig', [
            'posts' => $postRepository->findAll(),
            /* 'tags' => $tagRepository->findAll(),
             'forums' => $forumRepository->findAll(),
             'candidates' => $candidateRepository->findAll(),
             'recruiters' => $recruiterRepository->findAll(),*/
        ]);
    }

    /**
     * @Route("/home/post", name="front_index_post", methods={"GET"})
     */
    public function index_front(PostRepository $postRepository, TagRepository $tagRepository): Response
    {
        return $this->render('frontoffice/post/index.html.twig', [
            'posts' => $postRepository->findAll(),
            'tags' => $tagRepository->findAll(),
        ]);
    }

    /**
     * @Route("/dashbord/post/new", name="dashbord_post_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);

            $post->setCreatAt(new \DateTime('now'));


            $entityManager->flush();

            return $this->redirectToRoute('dashbord_post_index');
        }

        return $this->render('post/new.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/home/post/new", name="home_post_new", methods={"GET","POST"})
     */
    public function newFront(Request $request): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);

            $post->setLikes(0);
            $post->setNOC(0);
            $post->setViews(0);
            $post->setCreatAt(new \DateTime('now'));


            $entityManager->flush();

            return $this->redirectToRoute('dashbord_post_index');
        }

        return $this->render('post/new.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/post/{id}", name="dashbord_post_show", methods={"GET"})
     */
    public function show(Post $post): Response
    {
        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * @Route("/home/post/{id}", name="front_post_show", methods={"GET"})
     */
    public function showFront(Post $post, PostRepository $postRepository,CandidateRepository $candidateRepository,RecruiterRepository $recruiterRepository,CommentRepository $commentRepository): Response
    {

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

       // $form->handleRequest($request);
        return $this->render('frontoffice/post/show.html.twig', [
            'post' => $post,
            'posts' => $postRepository->findAll(),
            'comments' => $commentRepository->findAll(),
            'Candidates' => $candidateRepository->findAll(),
            'Recruiters' => $recruiterRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/post/{id}/edit", name="dashbord_post_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Post $post): Response
    {

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dashbord_post_index');
        }

        return $this->render('post/edit.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/post/{id}", name="dashbord_post_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Post $post): Response
    {
        if ($this->isCsrfTokenValid('delete' . $post->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($post);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dashbord_post_index');
    }

}
