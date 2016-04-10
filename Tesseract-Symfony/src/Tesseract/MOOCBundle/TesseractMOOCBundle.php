<?php

namespace Tesseract\MOOCBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TesseractMOOCBundle extends Bundle
{
    public function getParent() {
       return 'FOSUserBundle' ;
    }
}
