<?php

namespace App\Controller;

use App\Entity\Freelance;
use App\Entity\Member;
use App\Entity\Candidature;
use App\Entity\Project;
use App\Form\MemberType;
use App\Repository\CandidateRepository;
use App\Repository\MemberRepository;
use Proxies\__CG__\App\Entity\Candidate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class MemberController extends AbstractController
{
    /**
     * @Route("/member", name="member")
     */
    public function index(): Response
    {
        return $this->render('member/index.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }
    /**
     * @Route("/member/new/{id}/{proj}", name="member_new", methods={"GET","POST"})
     */
    public function new(int $id,int $proj,CandidateRepository $candidateRepository,Request $request): Response
    {
            $member = new Member();
            $entityManager = $this->getDoctrine()->getManager();
            $value = $entityManager->getRepository(Candidature::class)->find($id);
        /**$candidatcheck = $candidateRepository->findOneBy(['email'=>$member->getCandidature()->getCandidate()->getEmail()]);
            $member->setPseudo($candidatcheck);
          $candidatcheck->get
         */
        $member->setCandidature($value);
        $value1 = $entityManager->getRepository(Project::class)->find($proj);
        $member->setProject($value1);

        $form = $this->createForm(MemberType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($member);
            $entityManager->flush();

            return $this->redirectToRoute('freelance_index');
        }

        return $this->render('member/new.html.twig', [
            'member' => $member,
            'form' => $form->createView(),
        ]);

    }
    /**
     * @Route("/add", name="member_add", methods={"GET","POST"})
     */
    public function add(Request $request): Response
    {
        $member = new Member();
        $form = $this->createForm(MemberType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($member);
            $entityManager->flush();

            return $this->redirectToRoute('freelance_index');
        }

        return $this->render('member/new.html.twig', [
            'freelance' => $member,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="member_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Member $member): Response
    {
        if ($this->isCsrfTokenValid('delete'.$member->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($member);
            $entityManager->flush();
        }

        return $this->redirectToRoute('project_index');
    }
}
