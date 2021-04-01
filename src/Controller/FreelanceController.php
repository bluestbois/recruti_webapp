<?php

namespace App\Controller;

use App\Entity\Freelance;
use App\Form\FreelanceType;
use App\Repository\FreelanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/freelance")
 */
class FreelanceController extends AbstractController
{
    /**
     * @Route("/", name="freelance_index", methods={"GET"})
     */
    public function index(FreelanceRepository $freelanceRepository): Response
    {
        return $this->render('freelance/index.html.twig', [
            'freelances' => $freelanceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="freelance_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $freelance = new Freelance();
        $form = $this->createForm(FreelanceType::class, $freelance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($freelance);
            $entityManager->flush();

            return $this->redirectToRoute('freelance_index');
        }

        return $this->render('freelance/new.html.twig', [
            'freelance' => $freelance,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="freelance_show", methods={"GET"})
     */
    public function show(Freelance $freelance): Response
    {
        return $this->render('freelance/show.html.twig', [
            'freelance' => $freelance,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="freelance_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Freelance $freelance): Response
    {
        $form = $this->createForm(FreelanceType::class, $freelance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('freelance_index');
        }

        return $this->render('freelance/edit.html.twig', [
            'freelance' => $freelance,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="freelance_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Freelance $freelance): Response
    {
        if ($this->isCsrfTokenValid('delete'.$freelance->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($freelance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('freelance_index');
    }

}
