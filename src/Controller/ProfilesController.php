<?php

namespace App\Controller;

use App\Repository\RecruiterRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Recruiter;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;


class ProfilesController extends AbstractController
{
    /**
     * @Route("/profiles", name="profiles")
     */
    public function index(RecruiterRepository $Rec,Request $request, PaginatorInterface $paginator )
    {
        $articles = $paginator->paginate(
             // Requête contenant les données à paginer (ici nos articles)
            $Rec->findAll(),
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3// Nombre de résultats par page
        );

        return $this->render("frontoffice/profiles/profiles.html.twig",[
            'recruiters' => $articles

        ]);
    }

}
