<?php

/* TesseractMOOCBundle:Admin:SocialMedia.html.twig */
class __TwigTemplate_8c544c1976e1f96a4390126a28e379c924dff19c4027da541e3a28e17016a127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:Admin:Admindashboard.html.twig", "TesseractMOOCBundle:Admin:SocialMedia.html.twig", 1);
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
        echo "    <h1>hey Social</h1>

";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Admin:SocialMedia.html.twig";
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
/*     <h1>hey Social</h1>*/
/* */
/* {% endblock %}*/
