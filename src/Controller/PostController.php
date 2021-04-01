<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\Comment;
use App\Entity\Forum;
use App\Entity\Post;
use App\Entity\Recruiter;
use App\Form\CommentType;
use App\Form\PostType;
use App\Repository\CandidateRepository;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Repository\RecruiterRepository;
use App\Repository\TagRepository;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;


class PostController extends AbstractController
{
    /**
     * @Route("/dashbord/post", name="dashbord_post_index", methods={"GET"})
     */
    public function index(PostRepository $postRepository, PaginatorInterface $paginator,Request $request): Response
    {

        $donnee = $this->getDoctrine()->getRepository(Post::class)->findAll();

        $post= $paginator->paginate(
            $donnee,
            $request->query->getInt('page', 1),
            5
        );


        return $this->render('post/index.html.twig', [
            'posts' => $post,
            /* 'tags' => $tagRepository->findAll(),
             'forums' => $forumRepository->findAll(),
             'candidates' => $candidateRepository->findAll(),
             'recruiters' => $recruiterRepository->findAll(),*/
        ]);
    }

    /**
     * @Route("/home/post", name="home_post_index", methods={"GET"})
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
        $entityManager = $this->getDoctrine()->getManager();
        // $forum = $entityManager->getRepository(Forum::class)->find($request->get('7'));
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($post);

            $post->setCreatAt(new \DateTime('now'));
            $post->setForum(7);

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
    public function newFront(Request $request,FlashyNotifier $flashy ): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        echo("oki");
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $post->setCreatAt(new \DateTime('now'));
            $post->setNOC(0);
            $post->setViews(0);
            $roles = $this->getUser()->getRoles();
            if ($roles[0] == 'ROLE_CANDIDATE') {
                $post->setCandidate($this->getUser());
            } else if ($roles[0] == 'ROLE_RECRUITER') {
                $post->setRecruiter($this->getUser());
            }
            $forum = $entityManager->getRepository(Forum::class)->find($request->get('forum_id'));

            $post->setForum($forum);
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($post);
            $entityManager->flush();
            $flashy->success('Post Created  !!!');
            return $this->redirectToRoute('home_forum_show',array('id'=>$forum->getId()));
        }

        return $this->render('frontoffice/post/new.html.twig', [
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
     * @Route("/home/post/{id}", name="home_post_show", methods={"GET","POST"})
     */
    public function showFront(Request $request,FlashyNotifier  $flashy,Post $post, PostRepository $postRepository, CandidateRepository $candidateRepository, RecruiterRepository $recruiterRepository, CommentRepository $commentRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        $post->setViews($post->getViews()+1);

        if ($form->isSubmitted() && $form->isValid() ) {


            $comment->setDate(new \DateTime('now'));

            $post = $entityManager->getRepository(Post::class)->find($request->get('id'));


            $roles = $this->getUser()->getRoles();
            if ($roles[0] == 'ROLE_CANDIDATE') {
                $comment->setCandidate($this->getUser());
            } else if ($roles[0] == 'ROLE_RECRUITER') {
                $comment->setRecruiter($this->getUser());
            }

            $comment->setPost($post);

            $post->setNoc($post->getNOC()+1);
            $flashy->success('Comment Created  !!!');

            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirectToRoute('home_post_show',array('id'=>$post->getId()));
        }
        $entityManager->flush();
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
     * @Route("/home/post/{id}/edit", name="home_post_edit", methods={"GET","POST"})
     */
    public function editFront(Request $request, Post $post,FlashyNotifier $flashy): Response
    {
        $forum=$post->getForum();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $flashy->primary('Post Edited !!');
            return $this->redirectToRoute('home_forum_show',array('id'=>$forum->getId()));
        }

        return $this->render('frontoffice/post/edit.html.twig', [
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
    /**
     * @Route("/home/post/{id}", name="home_post_delete", methods={"DELETE"})
     */
    public function deleteFront(Request $request, Post $post,FlashyNotifier $flashy): Response
    {
        $forum = $post->getForum();
        if ($this->isCsrfTokenValid('delete' . $post->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($post);
            $entityManager->flush();
            $flashy->error('Post Deleted !!!!!');
        }

        return $this->redirectToRoute('home_forum_show',array('id'=>$forum->getId()));
    }

}
