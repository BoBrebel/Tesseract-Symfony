<?php

/* TesseractMOOCBundle:Registration:registerorg.html.twig */
class __TwigTemplate_846d89a34c023031ed3d3bfa95f23e67e4a17221c55349fb9c61aad4d7c69e78 extends Twig_Template
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
        echo "
     
                            
<form method=\"POST\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formm"]) ? $context["formm"] : $this->getContext($context, "formm")), 'widget');
        echo "
    ";
        // line 21
        echo "</form>
  ";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Registration:registerorg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 21,  25 => 5,  19 => 1,);
    }
}
