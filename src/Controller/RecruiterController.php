<?php

namespace App\Controller;

use App\Entity\Recruiter;
use App\Form\RecruiterType;
use App\Repository\RecruiterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/recruiter")
 */
class RecruiterController extends AbstractController
{
    /**
     * @Route("/", name="recruiter_index", methods={"GET"})
     */
    public function index(RecruiterRepository $recruiterRepository): Response
    {
        return $this->render('recruiter/index.html.twig', [
            'recruiters' => $recruiterRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="recruiter_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $recruiter = new Recruiter();
        $form = $this->createForm(RecruiterType::class, $recruiter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($recruiter);
            $entityManager->flush();

            return $this->redirectToRoute('recruiter_index');
        }

        return $this->render('recruiter/new.html.twig', [
            'recruiter' => $recruiter,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="recruiter_show", methods={"GET"})
     */
    public function show(Recruiter $recruiter): Response
    {
        return $this->render('recruiter/show.html.twig', [
            'recruiter' => $recruiter,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="recruiter_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Recruiter $recruiter): Response
    {
        $form = $this->createForm(RecruiterType::class, $recruiter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recruiter_index');
        }

        return $this->render('recruiter/edit.html.twig', [
            'recruiter' => $recruiter,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="recruiter_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Recruiter $recruiter): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recruiter->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($recruiter);
            $entityManager->flush();
        }

        return $this->redirectToRoute('recruiter_index');
    }
}
