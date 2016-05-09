<?php

/* TesseractMOOCBundle:Apprenant:commentairecours.html.twig */
class __TwigTemplate_17a0606b03543251666f4413426400701b667bf24abc0c036310788b80273dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:LayoutApprenant:layoutCommentaires.html.twig", "TesseractMOOCBundle:Apprenant:commentairecours.html.twig", 1);
        $this->blocks = array(
            'iconeprofile' => array($this, 'block_iconeprofile'),
            'matieres' => array($this, 'block_matieres'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle:LayoutApprenant:layoutCommentaires.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_iconeprofile($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->loadTemplate("TesseractMOOCBundle:Apprenant:iconeprofile.html.twig", "TesseractMOOCBundle:Apprenant:commentairecours.html.twig", 3)->display($context);
        // line 4
        echo "
";
    }

    // line 7
    public function block_matieres($context, array $blocks = array())
    {
        echo " 
    ";
        // line 8
        $this->loadTemplate("TesseractMOOCBundle:Apprenant:affichermatieres.html.twig", "TesseractMOOCBundle:Apprenant:commentairecours.html.twig", 8)->display($context);
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo " 
 ";
        // line 11
        $this->loadTemplate("TesseractMOOCBundle:Apprenant:resumecours.html.twig", "TesseractMOOCBundle:Apprenant:commentairecours.html.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:commentairecours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  50 => 10,  46 => 8,  41 => 7,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {%  extends "TesseractMOOCBundle:LayoutApprenant:layoutCommentaires.html.twig"%}*/
/* {% block iconeprofile %}*/
/*     {% include 'TesseractMOOCBundle:Apprenant:iconeprofile.html.twig' %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block matieres %} */
/*     {% include 'TesseractMOOCBundle:Apprenant:affichermatieres.html.twig' %}*/
/* {% endblock %}*/
/* {% block body %} */
/*  {% include 'TesseractMOOCBundle:Apprenant:resumecours.html.twig' %}*/
/* {% endblock %}*/
/* */
