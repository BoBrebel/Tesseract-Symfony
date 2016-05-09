<?php

/* TesseractMOOCBundle:Admin:OrganisationQueries.html.twig */
class __TwigTemplate_e0c336a5baa0b2cca1bc41abe854f63254c30aa4e714c8f64011149b00b826fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:Admin:Admindashboard.html.twig", "TesseractMOOCBundle:Admin:OrganisationQueries.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle:Admin:Admindashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>hey org</h1>

";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Admin:OrganisationQueries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "TesseractMOOCBundle:Admin:Admindashboard.html.twig" %}*/
/* {% block content %}*/
/*     <h1>hey org</h1>*/
/* */
/* {% endblock %}*/
