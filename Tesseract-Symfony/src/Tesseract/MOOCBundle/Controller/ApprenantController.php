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
 * @author haikal
 */
class ApprenantController extends Controller {

    public function indexAction() {
        $user = $this->getUser();
        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();
        // $courses = $em->getRepository("TesseractMOOCBundle:Cours")->findAll();
//     $dql = "SELECT a FROM TesseractMOOCBundle:Cours a";
//     $query = $em->createQuery($dql);
//     
//     $paginator = $this->get('knp_paginator');
//     $pagination= $paginator->pa

        $dql = "SELECT a FROM TesseractMOOCBundle:Cours a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->get('page', 1), 6);

        return $this->render('TesseractMOOCBundle:Apprenant:apprenant.html.twig', array('user' => $user, 'item' => $items, 'pagination' => $pagination));
    }

    public function profileApprenantAction() {
        $user = $this->getUser();
        $utilisateur = new \Tesseract\MOOCBundle\Entity\Utilisateur();
        $form = $this->createForm(new \Tesseract\MOOCBundle\Form\CurrentUserType(), $utilisateur);
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("TesseractMOOCBundle:Matiere")->findAll();
        $utilisateur = $em->getRepository("TesseractMOOCBundle:Utilisateur")->find($user->getId());
        return $this->render('TesseractMOOCBundle:Apprenant:profile.html.twig', array('form' =>$form->createView(), 'user' => $user, 'item' => $items));
    }
public function updatePhoto() {
    
    
    
}    

}
