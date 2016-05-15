<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;
use Tesseract\MOOCBundle\Entity\BanForum;

/**
 * Description of ApprenantController
 *
 * 
 */
class ForumBansController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        
        
        $query = $em->createQuery('Select s,c  from TesseractMOOCBundle:CommentaireSujet c join c.idSujet s order by s.date');
        $suj_com=$query->getResult();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);

        return $this->render("TesseractMOOCBundle:Admin:ForumBans.html.twig",array('suj_com'=>$suj_com, 'notifications'=>$notifications,
                                                                                        'nbrnot'=>$nbr));
    }

    public function banAction($id) {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findBy(array('idUtilisateur' => $this->getUser()->getId(),
            'vue' => 'non'));

        $nbr = count($notifications);
        $user=$em->getRepository("TesseractMOOCBundle:Utilisateur")->find($id);


        $forumban= new BanForum();

        $forumban->setIdUtilisateur($user);

        $forumban->setCause("Forum Misbehave");

        $forumban->setDate(new \DateTime("now"));

        $forumban->setDuree(7);

        $em->persist($forumban);
        $em->flush();






        return $this->render("TesseractMOOCBundle:Admin:ForumBan.html.twig",array('user'=>$user,'notifications'=>$notifications,
            'nbrnot'=>$nbr));
    }

}
