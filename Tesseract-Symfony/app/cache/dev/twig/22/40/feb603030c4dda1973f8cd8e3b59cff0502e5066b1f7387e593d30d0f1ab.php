<?php

/* TesseractMOOCBundle:Default:test.html.twig */
class __TwigTemplate_2240feb603030c4dda1973f8cd8e3b59cff0502e5066b1f7387e593d30d0f1ab extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Default:test.html.twig";
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
