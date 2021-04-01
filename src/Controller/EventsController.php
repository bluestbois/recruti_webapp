<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\EventType;
use App\Repository\EventRepository;
use App\Repository\EventTypeRepository;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/Events")
 */
class EventsController extends AbstractController
{

    /**
     * @Route("/", name="events_index", methods={"GET"})
     */
    public function index(EventRepository $eventRepository,EventTypeRepository $eventTypeRepository): Response
    {
        return $this->render('frontoffice/events/index.html.twig', [
            'events' => $eventRepository->findAll(),
            'eventsType' => $eventTypeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="join_event",methods={"GET","SET"})
     * @param $id
     * @return Response
     */
    public function join($id): Response {
        $EM = $this->getDoctrine()->getManager();
        $EM->persist($this->getDoctrine()->getRepository(Event::class)->find($id)->addCandidate($this->getUser()));
        $EM->flush();
        return $this->redirectToRoute('events_index');
    }



}
