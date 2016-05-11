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

class OrganisationQueriesController extends Controller {
    public function indexAction() {
         $em = $this->getDoctrine()->getManager();
        $orgs = $em->getRepository("TesseractMOOCBundle:Organisation")->findBy(array('enabled' => '-1'));
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        
        $nbr=count($notifications);
       
        return $this->render("TesseractMOOCBundle:Admin:OrganisationQueries.html.twig",array('orgs'=> $orgs ,
                                                                                            'notifications'=>$notifications,
                                                                                        'nbrnot'=>$nbr));
        
    }
    public function replyAction($reply,$id) {
         $em = $this->getDoctrine()->getManager();
        $orgs = $em->getRepository("TesseractMOOCBundle:Organisation")->findBy(array('enabled' => '-1'));
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' =>$this->getUser()->getId(),
                                                                                           'vue'=>'non' ));
        
        $nbr=count($notifications);
         if($reply == 'Accept'){
            $org=$em->getRepository("TesseractMOOCBundle:Organisation")->find($id);
            $org->setEnabled(1);
            $em->persist($org);
            $em->flush();
        }
        if($reply == 'Refuse'){
            $org=$em->getRepository("TesseractMOOCBundle:Organisation")->find($id);
            $org->setEnabled(0);
            $em->persist($org);
            $em->flush();
        }
       $orgs = $em->getRepository("TesseractMOOCBundle:Organisation")->findBy(array('enabled' => '-1'));
        return $this->render("TesseractMOOCBundle:Admin:OrganisationQueries.html.twig",array('orgs'=> $orgs ,
                                                                                            'notifications'=>$notifications,
                                                                                        'nbrnot'=>$nbr));
        
    }
}
