<?php

namespace App\Controller;

use App\Entity\Member;
use App\Entity\Project;
use App\Form\ProjectType;
use App\Repository\ProjectRepository;
use App\Repository\MemberRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/project")
 */
class ProjectController extends AbstractController
{
    /**
     * @Route("/", name="project_index", methods={"GET"})
     */
    public function index(ProjectRepository $projectRepository): Response
    {
        return $this->render('project/index.html.twig', [
            'projects' => $projectRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="project_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($project);
            $entityManager->flush();

            return $this->redirectToRoute('project_index');
        }

        return $this->render('project/new.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_show", methods={"GET"})
     */
    public function show(Project $project): Response
    {
        return $this->render('project/show.html.twig', [
            'project' => $project,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="project_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Project $project): Response
    {
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('project_index');
        }

        return $this->render('project/edit.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Project $project): Response
    {
        if ($this->isCsrfTokenValid('delete'.$project->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($project);
            $entityManager->flush();
        }

        return $this->redirectToRoute('project_index');
    }
    /**
     * @Route ("stats", name="project_stats")
     */
    public function statistiques(ProjectRepository $projectRepository){
        $projects = $projectRepository->findAll();

        $projTitle = [];
        $projColor = [];
        $projCount = [];

        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($projects as $project){
            $projTitle[] = $project->getTitle();
            $projColor[] = $project->getColor();
            $projCount[] = count($project->getFreelances());
        }
        return $this->render('project/stats.html.twig',[
            'projTitle' => json_encode($projTitle),
            'projColor' => json_encode($projColor),
            'projCount' => json_encode($projCount),
        ]);
    }
    /**
     * @Route("/home/projects/members/{id}", name="front_project_members_index")
     * @param $id
     * @return Response
     */
    public function members($id){
        $member = $this->getDoctrine()->getRepository(Member::class)->findBy(['Project' => $id]);
        $project= $this->getDoctrine()->getRepository(Member::class)->findOneBy(['Project' => $id]);
        return $this->render('frontoffice/project/members.html.twig' , [
            'members' => $member, 'project'=> $project
        ]);
    }

}
