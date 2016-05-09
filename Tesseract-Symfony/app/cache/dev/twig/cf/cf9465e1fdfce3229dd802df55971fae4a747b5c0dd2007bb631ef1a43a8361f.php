<?php

/* TesseractMOOCBundle:Apprenant:iconeprofile.html.twig */
class __TwigTemplate_b0b1543dddfea2b142e84e3f93ba6691a40abdcf286d759b93b5cc2a53a6ba82 extends Twig_Template
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
