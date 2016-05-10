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
        $users = $em->getRepository("TesseractMOOCBundle:Utilisateur")->findBy(array('locked' => '0'));
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        
        $nbr=count($notifications);
        
        return $this->render("TesseractMOOCBundle:Admin:BlockUsers.html.twig",array('users'=>$users,
                                                                                    'notifications'=>$notifications,
                                                                                        'nbrnot'=>$nbr));
        
        
    }
    
    public function blockAction($id) {
         
       $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("TesseractMOOCBundle:Utilisateur")->findBy(array('locked' => '0'));
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findAll();
        $user = $em->getRepository("TesseractMOOCBundle:Utilisateur")->find($id);
        $user->setLocked(true);
        $em->persist($user);
        $em->flush();
        
     
        
        $nbr=count($notifications);
        
        return $this->render("TesseractMOOCBundle:Admin:BlockUsers.html.twig",array('users'=>$users,
                                                                                    'notifications'=>$notifications,
                                                                                        'nbrnot'=>$nbr));
        
        
    }
}
