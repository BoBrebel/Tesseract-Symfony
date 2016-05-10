<?php

/* TesseractMOOCBundle:Default:home.html.twig */
class __TwigTemplate_0cd00f23f44a4c1b824a0368fa67b802e9bd2d51edb470aa4463b0f45d460ea4 extends Twig_Template
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
