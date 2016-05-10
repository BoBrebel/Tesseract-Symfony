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

class TicketsController extends Controller {
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $tickets = $em->getRepository("TesseractMOOCBundle:Reclamation")->findAll();
         
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        
        $nbr=count($notifications);
        return $this->render("TesseractMOOCBundle:Admin:Tickets.html.twig",array('tickets'=>$tickets,
                                                                                'notifications'=>$notifications,
                                                                                        'nbrnot'=>$nbr));
        
        
    }
}
