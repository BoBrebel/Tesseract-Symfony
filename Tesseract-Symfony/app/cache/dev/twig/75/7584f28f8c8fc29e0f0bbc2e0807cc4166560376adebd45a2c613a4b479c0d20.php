<?php

/* TesseractMOOCBundle:Apprenant:apprenant.html.twig */
class __TwigTemplate_231fdd6e19433d9a60b2eeecb6f65a21aff63976d35aa8065496c659f07f7b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:LayoutApprenant:layoutapprenant.html.twig", "TesseractMOOCBundle:Apprenant:apprenant.html.twig", 1);
        $this->blocks = array(
            'iconeprofile' => array($this, 'block_iconeprofile'),
            'matieres' => array($this, 'block_matieres'),
            'afficherMatieres' => array($this, 'block_afficherMatieres'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle:LayoutApprenant:layoutapprenant.html.twig";
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
        $this->loadTemplate("TesseractMOOCBundle:Apprenant:iconeprofile.html.twig", "TesseractMOOCBundle:Apprenant:apprenant.html.twig", 3)->display($context);
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
        $this->loadTemplate("TesseractMOOCBundle:Apprenant:affichermatieres.html.twig", "TesseractMOOCBundle:Apprenant:apprenant.html.twig", 8)->display($context);
    }

    // line 11
    public function block_afficherMatieres($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->loadTemplate("TesseractMOOCBundle:Apprenant:affichercours.html.twig", "TesseractMOOCBundle:Apprenant:apprenant.html.twig", 12)->display($context);
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:apprenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  50 => 11,  46 => 8,  41 => 7,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {%  extends "TesseractMOOCBundle:LayoutApprenant:layoutapprenant.html.twig"%}*/
/* {% block iconeprofile %}*/
/*     {% include 'TesseractMOOCBundle:Apprenant:iconeprofile.html.twig' %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block matieres %} */
/*     {% include 'TesseractMOOCBundle:Apprenant:affichermatieres.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block afficherMatieres %}*/
/*     {% include 'TesseractMOOCBundle:Apprenant:affichercours.html.twig' %}*/
/* {% endblock %}*/
