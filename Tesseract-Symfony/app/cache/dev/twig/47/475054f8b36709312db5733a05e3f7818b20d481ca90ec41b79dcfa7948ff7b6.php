<?php

/* TesseractMOOCBundle:Default:index.html.twig */
class __TwigTemplate_e1f4788f67d618f230c4576cdd39f9fd805b1cb2200b609419b54b7efd2b0301 extends Twig_Template
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
