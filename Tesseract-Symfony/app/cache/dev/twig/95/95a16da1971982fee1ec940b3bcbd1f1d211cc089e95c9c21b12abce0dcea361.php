<?php

/* TesseractMOOCBundle:Apprenant:affichermatieres.html.twig */
class __TwigTemplate_f006d815850ae4cd8b46d8913047f974e82789c5226e1f9f4370cf81d54b2ae6 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            echo "    <li><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tesseract_afficher_cours_categ", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "'><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:affichermatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
/* {% for i in item %}*/
/*     <li><a href='{{path('tesseract_afficher_cours_categ',{'id':i.id})}}'><span>{{i.nom}}</span></a></li>*/
/*     {% endfor %}*/
