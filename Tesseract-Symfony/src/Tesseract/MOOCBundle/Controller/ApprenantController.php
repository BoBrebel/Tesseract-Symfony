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
        
        
        return $this->render('TesseractMOOCBundle:Apprenant:apprenant.html.twig');
    }
}
