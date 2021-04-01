<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\Candidature;
use App\Entity\Freelance;
use App\Entity\Job;
use App\Entity\Recruiter;
use App\Form\CandidatureType;
use App\Repository\CandidatureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/candidature")
 */
class CandidatureController extends AbstractController
{
    /**
     * @Route("/", name="candidature_index", methods={"GET"})
     */
    public function index(CandidatureRepository $candidatureRepository): Response
    {
        return $this->render('candidature/index.html.twig', [
            'candidatures' => $candidatureRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="candidature_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $candidature = new Candidature();
        $form = $this->createForm(CandidatureType::class, $candidature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidature);
            $entityManager->flush();

            return $this->redirectToRoute('candidature_index');
        }

        return $this->render('candidature/new.html.twig', [
            'candidature' => $candidature,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="candidature_show", methods={"GET"})
     */
    public function show(Candidature $candidature): Response
    {
        return $this->render('candidature/show.html.twig', [
            'candidature' => $candidature,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="candidature_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Candidature $candidature): Response
    {
        $form = $this->createForm(CandidatureType::class, $candidature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('candidature_index');
        }

        return $this->render('candidature/edit.html.twig', [
            'candidature' => $candidature,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="candidature_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Candidature $candidature): Response
    {
        if ($this->isCsrfTokenValid('delete'.$candidature->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($candidature);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profile');
    }
    /**
     * @Route("/new/{cand}/{id}", name="cand_new", methods={"GET","POST"})
     */
    public function cand(int $id,int $cand): Response
    {
        if($this->getUser() == null) {
            return $this->render('403.html.twig');
        }
        if ($this->getUser() instanceof Recruiter) {
            return $this->render('403.html.twig');
        }

        $candidature = new Candidature();
        $entityManager = $this->getDoctrine()->getManager();
        $value = $entityManager->getRepository(Candidate::class)->find($cand);
        $candidature->setCandidate($value);
        $value1 = $entityManager->getRepository(Job::class)->find($id);
        $candidature->setJob($value1);
        $candidature->setDate(new \DateTime());
        $candidature->setScore(0);
        $entityManager->persist($candidature);
        $entityManager->flush();

        return $this->redirectToRoute('pass_test',[
            'id' => $candidature->getId(),
            'Tid' => 1
        ]);
    }
    /**
     * @Route("/new/{candi}/{id}", name="candi_new", methods={"GET","POST"})
     */
    public function candi(int $id,int $candi): Response
    {
        $candidature1 = new Candidature();
        $entityManager = $this->getDoctrine()->getManager();
        $value = $entityManager->getRepository(Candidate::class)->find($candi);
        $candidature1->setCandidate($value);
        $value1 = $entityManager->getRepository(Freelance::class)->find($id);
        $candidature1->setFreelance($value1);
        $candidature1->setDate(new \DateTime());

        $entityManager->persist($candidature1);
        $entityManager->flush();

        return $this->redirectToRoute('pass_test',[
            'id' => $candidature1->getId(),
            'Tid' => 1
        ]);
    }
}
