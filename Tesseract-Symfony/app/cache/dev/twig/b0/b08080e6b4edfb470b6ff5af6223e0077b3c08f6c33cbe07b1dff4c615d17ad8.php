<?php

/* TesseractMOOCBundle:Default:home.html.twig */
class __TwigTemplate_22b0459d5b462b051a37de4972db4600d2843d6b7723164ee080cdd97b4c3bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle::layoutnew.html.twig", "TesseractMOOCBundle:Default:home.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle::layoutnew.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Default:home.html.twig";
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
/* {% extends "TesseractMOOCBundle::layoutnew.html.twig" %}*/
