<?php


namespace App\Notifications;

// On importe les classes nécessaires à l'envoi d'e-mail et à Twig
use Swift_Message;
use Swift_Mailer;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use App\Entity\Recruiter;


class CreationCompteNotification
{
    /**
     * Propriété contenant le module d'envoi de mail
     *
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * Propriété contenant l'environnement twig
     *
     * @var Environment
     */
    private $renderer;

    /**
     * Constructeur de classe
     * @param Swift_Mailer $mailer
     * @param Environment $renderer
     */
    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    /**
     * Méthode de notification (envoi de mail)
     *
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function notify()
    {


            $message= (new \Swift_Message('[Recrutini] : Nouveau compte'))
                ->setFrom('recruritini@gmail.com')
                ->setTo('wael.bouatay@esprit.tn')
                ->setBody(
                    $this->renderer->render('emails/ajout_compte.html.twig'
                        ),
                    'text/html');




        // On envoie le mail
        $this->mailer->send($message);
    }
}