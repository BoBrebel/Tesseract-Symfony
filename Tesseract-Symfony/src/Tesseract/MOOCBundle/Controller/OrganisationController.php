<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tesseract\MOOCBundle\Controller;

/**
 * Description of OrganisationController
 *
 * @author haikal
 */
class OrganisationController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller {

    function inscriptionOrganisationAction(\Symfony\Component\HttpFoundation\Request $request) {
        $organisation = new \Tesseract\MOOCBundle\Entity\Organisation();
        $form = $this->createForm(new \Tesseract\MOOCBundle\Form\OrganisationForm(), $organisation);

        // $requet = $this->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($organisation);
            $em->flush();

            return $this->render("TesseractMOOCBundle::layoutwada.html.twig", array('formm' => $form->createView()));
        }

        return $this->render("TesseractMOOCBundle::layoutwada.html.twig", array('formm' => $form->createView(), 'test' => "hakim"));
    }

}
