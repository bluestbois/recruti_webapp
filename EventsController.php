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
        return $this->render('events/index.html.twig', [
            'events' => $eventRepository->findAll(),
            'eventsType' => $eventTypeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="join_event",methods={"GET","SET"})
     */
    public function join
    (Event $event): Response
    {
        return $this->render('events/index.html.twig', [
            'controller_name' => 'EventsController'
            , 'event' => $event,

        ]);
    }



}
