<?php

/* TesseractMOOCBundle:Utilisateur:list.html.twig */
class __TwigTemplate_179f9285a25220c46596623e829ffcafce6dfcabc54fd29efcc876e66937b1c5 extends Twig_Template
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
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "        <li class=\"tile\">
            <a class=\"tile-content ink-reaction\" href=\"#offcanvas-chat\" data-toggle=\"offcanvas\" data-backdrop=\"false\">
                <div class=\"tile-icon\">
                    <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["entity"], "photo", array())), "html", null, true);
            echo "\" alt=\"\" />
                </div>
                <div class=\"tile-text\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "
                    <small>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telephone", array()), "html", null, true);
            echo "</small>
                </div>
            </a>
        </li>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Utilisateur:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  43 => 10,  37 => 9,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/*     {% for entity in entities %}*/
/*         <li class="tile">*/
/*             <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">*/
/*                 <div class="tile-icon">*/
/*                     <img src="{{ asset(entity.photo) }}" alt="" />*/
/*                 </div>*/
/*                 <div class="tile-text">*/
/*                     {{ entity.nom }} {{ entity.prenom }}*/
/*                     <small>{{ entity.telephone }}</small>*/
/*                 </div>*/
/*             </a>*/
/*         </li>*/
/* */
/* */
/*     {% endfor %}*/
/* */
/* */
