<?php

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalanderController extends AbstractController
{
    /**
     * @Route("/calander", name="calender")
     */
    public function index(EventRepository $calendar): Response
    {
        $events = $calendar->findAll();

        $rdv =[];
        foreach ($events as $event ){
            $rdv[] = [

                'id'=> $event->getid(),
                'title'=> $event->gettitle(),
                'description'=> $event->getdescription(),
                'startDate'=> $event->getstartDate()->format('Y-m-d'),
                'endDate'=> $event->getendDate()->format('Y-m-d'),
                'Type'=> $event->getType(),
                'NOP'=> $event->getNOP(),
                'location'=> $event->getlocation(),
            ];


        }
        $data = json_encode($rdv);
        return $this->render('calander/index.html.twig', compact('data')
        );
    }
}
