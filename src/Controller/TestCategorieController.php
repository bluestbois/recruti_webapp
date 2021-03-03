<?php

namespace App\Controller;

use App\Entity\TestCategorie;
use App\Form\TestCategorieType;
use App\Repository\TestCategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test/categorie")
 */
class TestCategorieController extends AbstractController
{
    /**
     * @Route("/", name="test_categorie_index", methods={"GET"})
     */
    public function index(TestCategorieRepository $testCategorieRepository): Response
    {
        return $this->render('test_categorie/index.html.twig', [
            'test_categories' => $testCategorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="test_categorie_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $testCategorie = new TestCategorie();
        $form = $this->createForm(TestCategorieType::class, $testCategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($testCategorie);
            $entityManager->flush();

            return $this->redirectToRoute('test_categorie_index');
        }

        return $this->render('test_categorie/new.html.twig', [
            'test_categorie' => $testCategorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="test_categorie_show", methods={"GET"})
     */
    public function show(TestCategorie $testCategorie): Response
    {
        return $this->render('test_categorie/show.html.twig', [
            'test_categorie' => $testCategorie,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="test_categorie_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TestCategorie $testCategorie): Response
    {
        $form = $this->createForm(TestCategorieType::class, $testCategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('test_categorie_index');
        }

        return $this->render('test_categorie/edit.html.twig', [
            'test_categorie' => $testCategorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="test_categorie_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TestCategorie $testCategorie): Response
    {
        if ($this->isCsrfTokenValid('delete'.$testCategorie->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($testCategorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('test_categorie_index');
    }
}
