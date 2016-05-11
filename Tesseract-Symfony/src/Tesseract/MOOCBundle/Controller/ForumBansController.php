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
class ForumBansController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        
        
        $query = $em->createQuery('Select s,c  from TesseractMOOCBundle:CommentaireSujet c join c.idSujet s ');
        $suj_com=$query->getResult();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);

        return $this->render("TesseractMOOCBundle:Admin:ForumBans.html.twig",array('suj_com'=>$suj_com, 'notifications'=>$notifications,
                                                                                        'nbrnot'=>$nbr));
    }

}
