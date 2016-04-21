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

class BlockUsersController extends Controller {
    public function indexAction() {
       $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("TesseractMOOCBundle:Utilisateur")->findAll();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findAll();
        
        $nbr=count($notifications);
        
        return $this->render("TesseractMOOCBundle:Admin:BlockUsers.html.twig",array('users'=>$users,
                                                                                    'notifications'=>$notifications,
                                                                                        'nbrnot'=>$nbr));
        
        
    }
}
