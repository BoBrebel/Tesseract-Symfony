<?php

/* TesseractMOOCBundle:Registration:registerorg.html.twig */
class __TwigTemplate_c252dd29f5ddf9976529c127b970ffd4cc160d6cdf7f5896ad176fdc7358b740 extends Twig_Template
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
        // line 6
        echo "   ";
        // line 7
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formm"]) ? $context["formm"] : $this->getContext($context, "formm")), "nom", array()), 'row');
        echo "
    
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formm"]) ? $context["formm"] : $this->getContext($context, "formm")), "adress", array()), 'row');
        echo "
    
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formm"]) ? $context["formm"] : $this->getContext($context, "formm")), "email", array()), 'row');
        echo "
    
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formm"]) ? $context["formm"] : $this->getContext($context, "formm")), "matricule", array()), 'row');
        echo "
    
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formm"]) ? $context["formm"] : $this->getContext($context, "formm")), "photo", array()), 'row');
        echo "
        </br></br>
        <div  style=\"text-align:center\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formm"]) ? $context["formm"] : $this->getContext($context, "formm")), "Register", array()), 'row');
        echo "
        </div>
        
</form>
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
        return array (  54 => 18,  48 => 15,  43 => 13,  38 => 11,  33 => 9,  27 => 7,  25 => 6,  19 => 1,);
    }
}
