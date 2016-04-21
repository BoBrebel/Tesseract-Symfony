<?php

/* TesseractMOOCBundle:Apprenant:iconeprofile.html.twig */
class __TwigTemplate_b81584b52a0d90eb362bbeeff065869160514aac8ae3ab70c8262950b8373289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<img id=\"img-profile\" src=\"../../uploads/pictures/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()), "html", null, true);
        echo "\">


";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:iconeprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <img id="img-profile" src="../../uploads/pictures/{{user.photo}}">*/
/* */
/* */
/* */
