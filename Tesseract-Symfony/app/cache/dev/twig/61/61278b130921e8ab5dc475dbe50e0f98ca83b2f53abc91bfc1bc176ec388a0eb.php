<?php

/* TesseractMOOCBundle:Default:index.html.twig */
class __TwigTemplate_761332298506462fe9f14d68b81503dd0e51d2b0b9bba2a74096db0c6ab95b3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle::baset.html.twig", "TesseractMOOCBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle::baset.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "TesseractMOOCBundle::baset.html.twig" %}*/
