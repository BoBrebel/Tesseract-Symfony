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

class TicketReplyController extends Controller {
    public function indexAction($id) {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository("TesseractMOOCBundle:Reclamation")->find($id);
        $mail = $ticket->getIdUtilisateur()->getEmail();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findAll();
        $nbr=count($notifications);
        
        return $this->render("TesseractMOOCBundle:Admin:TicketReply.html.twig",array('ticket'=>$ticket,
                                                                                   'mail'=>$mail,
                                                                                    'notifications'=>$notifications,
                                                                                        'nbrnot'=>$nbr));
        
        
    }
    
     public function sendMailAction($id) {
         
         $Request = $this->getRequest();
         if($Request->getMethod() == "POST") {
             $subject="Tesseract ticket response";
             $email=$Request->get("mail");
             $message=$Request->get("message");
             
             $mailer = $this->container->get('mailer');
             $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,ssl)
                     ->setUsername('tesseractcorpesprit@gmail.com')
                     ->setPassword('tesseract123');
             $mailer = \Swift_Mailer::newInstance($transport);
             $message = \Swift_Message::newInstance('test')
                     ->setSubject($subject)
                     ->setFrom('tesseractcorpesprit@gmail.com')
                     ->setTo($email)
                     ->setBody($message);
             $this->get('mailer')->send($message);
             
         }
       
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository("TesseractMOOCBundle:Reclamation")->find($id);
        $mail = $ticket->getIdUtilisateur()->getEmail();
        return $this->render("TesseractMOOCBundle:Admin:TicketReply.html.twig",array('ticket'=>$ticket,
                                                                                   'mail'=>$mail));
        
        
    }
}
