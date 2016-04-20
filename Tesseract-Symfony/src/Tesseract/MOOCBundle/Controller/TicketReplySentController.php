<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ApprenantController
 *
 * 
 */
class TicketReplySentController extends Controller {

    public function indexAction($mail) {
        
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findAll();
        $nbr = count($notifications);

        $message = \Swift_Message::newInstance()
                ->setSubject('Tesseract Ticket Reponse')
                ->setFrom('tesseractcorpesprit@gmail.com')
                ->setTo($mail)
                ->setBody("test")
        /*
         * If you also want to include a plaintext version of the message
          ->addPart(
          $this->renderView(
          'Emails/registration.txt.twig',
          array('name' => $name)
          ),
          'text/plain'
          )
         */
        ;
        $this->get('mailer')->send($message);

       

        return $this->render("TesseractMOOCBundle:Admin:TicketReplySent.html.twig", array('mail' => $mail,
                    'notifications' => $notifications,
                    'nbrnot' => $nbr));
    }

}
