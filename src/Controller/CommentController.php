<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\Recruiter;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;
//MercurySeries\FlashyBundle\MercurySeriesFlashyBundle

class CommentController extends AbstractController
{
    /**
     * @Route("/dashbord/comment", name="dashbord_comment_index", methods={"GET"})
     */
    public function index(CommentRepository $commentRepository): Response
    {
        return $this->render('comment/index.html.twig', [
            'comments' => $commentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/home/front/comment", name="home_comment_index", methods={"GET"})
     */
    public function indexComment(CommentRepository $commentRepository): Response
    {
        return $this->render('frontoffice/comment/index.html.twig', [
            'comments' => $commentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/dashbord/comment/new", name="dashbord_comment_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('dashbord_comment_index');
        }

        return $this->render('comment/new.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/home/comment/new", name="home_comment_new", methods={"GET","POST"})
     */
    public function newFront( Request $request,FlashyNotifier $flashy ): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {

            
            $comment->setDate(new \DateTime('now'));

            $post = $entityManager->getRepository(Post::class)->find($request->get('post_id'));


            $roles = $this->getUser()->getRoles();
            if ($roles[0] == 'ROLE_CANDIDATE') {
                $comment->setCandidate($this->getUser());
            } else if ($roles[0] == 'ROLE_RECRUITER') {
                $comment->setRecruiter($this->getUser());
            }

            $comment->setPost($post);
            $post->setNoc($post->getNOC()+1);
            $flashy->success('Comment Created  !!!');
            $entityManager = $this->getDoctrine()->getManager();


            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('home_post_show',array('id'=>$post->getId()));
        }

        return $this->render('frontoffice/comment/new.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/comment/{id}", name="dashbord_comment_show", methods={"GET"})
     */
    public function show(Comment $comment): Response
    {
        return $this->render('comment/show.html.twig', [
            'comment' => $comment,
        ]);
    }
    /**
     * @Route("/homd/comment/{id}", name="home_comment_show", methods={"GET"})
     */
    public function showFront(Comment $comment): Response
    {
        return $this->render('comment/show.html.twig', [
            'comment' => $comment,
        ]);
    }

    /**
     * @Route("/dashbord/comment/{id}/edit", name="dashbord_comment_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Comment $comment): Response
    {
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dashbord_comment_index');
        }

        return $this->render('comment/edit.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/home/comment/{id}/edit", name="home_comment_edit", methods={"GET","POST"})
     */
    public function editFront(Request $request, Comment $comment,FlashyNotifier $flashy): Response
    {
        $post=$comment->getPost();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $flashy->primary('Comment Edited !!');
            return $this->redirectToRoute('home_post_show',array('id'=>$post->getId()));
        }

        return $this->render('frontoffice/comment/edit.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/comment/{id}", name="dashbord_comment_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Comment $comment): Response
    {
        if ($this->isCsrfTokenValid('delete' . $comment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dashbord_comment_index');
    }

    /**
     * @Route("/home/comment/{id}", name="home_comment_delete", methods={"DELETE"})
     */
    public function deleteFront(Request $request, Comment $comment,FlashyNotifier $flashy): Response
    {
        $post = $comment->getPost();
        if ($this->isCsrfTokenValid('delete' . $comment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comment);
            $post->setNoc($post->getNOC()-1);
            $entityManager->flush();
            $flashy->error('Comment Deleted !!!!!');
        }

        return $this->redirectToRoute('home_post_show',array('id'=>$post->getId()));
    }
}
