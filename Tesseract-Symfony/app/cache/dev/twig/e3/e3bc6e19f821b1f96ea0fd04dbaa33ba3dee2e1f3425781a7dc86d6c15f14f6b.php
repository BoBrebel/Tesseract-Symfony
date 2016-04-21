<?php

/* TesseractMOOCBundle:Apprenant:profile.html.twig */
class __TwigTemplate_ca7ce70b9ad43ffc7ac62dee95b7516e6e18ac36005429452fcd5bdbc7128c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:LayoutApprenant:layoutprofile.html.twig", "TesseractMOOCBundle:Apprenant:profile.html.twig", 1);
        $this->blocks = array(
            'iconeprofile' => array($this, 'block_iconeprofile'),
            'matieres' => array($this, 'block_matieres'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle:LayoutApprenant:layoutprofile.html.twig";
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
        $this->loadTemplate("TesseractMOOCBundle:Apprenant:iconeprofile.html.twig", "TesseractMOOCBundle:Apprenant:profile.html.twig", 3)->display($context);
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
        $this->loadTemplate("TesseractMOOCBundle:Apprenant:affichermatieres.html.twig", "TesseractMOOCBundle:Apprenant:profile.html.twig", 8)->display($context);
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo " 
   ";
        // line 11
        $this->loadTemplate("TesseractMOOCBundle:Apprenant:formprofile.html.twig", "TesseractMOOCBundle:Apprenant:profile.html.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:profile.html.twig";
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
/* {%  extends "TesseractMOOCBundle:LayoutApprenant:layoutprofile.html.twig"%}*/
/* {% block iconeprofile %}*/
/*     {% include 'TesseractMOOCBundle:Apprenant:iconeprofile.html.twig' %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block matieres %} */
/*     {% include 'TesseractMOOCBundle:Apprenant:affichermatieres.html.twig' %}*/
/* {% endblock %}*/
/* {% block body %} */
/*    {% include 'TesseractMOOCBundle:Apprenant:formprofile.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
