<?php

namespace Tesseract\MOOCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TesseractMOOCBundle:Default:index.html.twig');
    }
}
