<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Form\TagType;
use App\Repository\PostRepository;
use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TagController extends AbstractController
{
    /**
     * @Route("/dashbord/tag", name="dashbord_tag_index", methods={"GET"})
     */
    public function index(TagRepository $tagRepository): Response
    {
        return $this->render('tag/index.html.twig', [
            'tags' => $tagRepository->findAll(),
        ]);
    }

    /**
     * @Route("/dashbord/tag/new", name="dashbord_tag_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tag = new Tag();
        $form = $this->createForm(TagType::class, $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tag);
            $entityManager->flush();

            return $this->redirectToRoute('dashbord_tag_index');
        }

        return $this->render('tag/new.html.twig', [
            'tag' => $tag,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/tag/{id}", name="dashbord_tag_show", methods={"GET"})
     */
    public function show(Tag $tag): Response
    {
        return $this->render('tag/show.html.twig', [
            'tag' => $tag,
        ]);
    }

    /**
     * @Route("/dashbord/tag/{id}/edit", name="dashbord_tag_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tag $tag): Response
    {
        $form = $this->createForm(TagType::class, $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dashbord_tag_index');
        }

        return $this->render('tag/edit.html.twig', [
            'tag' => $tag,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/dashbord/tag/{id}", name="dashbord_tag_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tag $tag): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tag->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tag);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dashbord_tag_index');
    }
    /**
     * @Route ("/dashbord/tag/recherche",name="recherchePost")
     */
    function recherche( Request $request){
        $em= $this->getDoctrine()->getManager();
        $tags=$em->getRepository(Tag::class)->findAll();
        if($request->isMethod("POST"))
        {
            $title=$request->get('title');
            $tag=$em->getRepository('Tag')->findBy((array('title'=>$title)));
        }
        return $this->render('tag/index.html.twig',
            ['tag'=>$tags]);

    }
    /**
     * @Route("/stats",name="stats")
     */
    public function statistique(TagRepository $tagRepo)
    {
        $tags =$tagRepo->findAll();

        $tagTitle=[];
        $tagColor=[];
        $tagCount=[];
        foreach ($tags as $tag)
        {
            $tagTitle[]=$tag->getTitle();
            $tagColor[]=$tag->getColors();
            $tagCount[]=count($tag->getPost());

        }
        return $this->render('tag/stats.html.twig', [
            'tagTitle'=>json_encode($tagTitle),
            'tagColor'=>json_encode($tagColor),
            'tagCount'=>json_encode($tagCount)

        ]);
    }
}
