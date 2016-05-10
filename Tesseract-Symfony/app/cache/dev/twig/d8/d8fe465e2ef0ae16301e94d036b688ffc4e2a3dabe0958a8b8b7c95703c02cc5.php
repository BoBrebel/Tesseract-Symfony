<?php

/* TesseractMOOCBundle:Admin:OrganisationQueries.html.twig */
class __TwigTemplate_c7a37cc220b11743b09898a3eda09b2e0f56a84033fa2a6080141a6299d823c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:Admin:Admindashboard.html.twig", "TesseractMOOCBundle:Admin:OrganisationQueries.html.twig", 1);
        $this->blocks = array(
            'addstylesheets' => array($this, 'block_addstylesheets'),
            'content' => array($this, 'block_content'),
            'addjavascripts' => array($this, 'block_addjavascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle:Admin:Admindashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_addstylesheets($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "   
    <ul class=\"list-comments\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orgs"]) ? $context["orgs"] : $this->getContext($context, "orgs")));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 8
            echo "            <li style=\"margin-bottom:5px\">
                <div class=\"card style-default-light\">
                    <div class=\"comment-avatar\"><img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["o"], "getPhoto", array(), "method")), "html", null, true);
            echo "\"></div>
                    <div class=\"card-body\">
                        <h4 class=\"comment-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "getNom", array(), "method"), "html", null, true);
            echo " <small>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "getEmail", array(), "method"), "html", null, true);
            echo "</small></h4>
                        <a class=\"btn btn-default-dark stick-top-right\" href=\"#\"style=\"background-color:#0aa89e;border-color:#0aa89e;height: 100%;width: 20%;padding-top: 3%\">Reply</a>
                        <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "getAdress", array(), "method"), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </li>
           

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
";
    }

    // line 23
    public function block_addjavascripts($context, array $blocks = array())
    {
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Admin:OrganisationQueries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  80 => 23,  75 => 21,  62 => 14,  55 => 12,  50 => 10,  46 => 8,  42 => 7,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends "TesseractMOOCBundle:Admin:Admindashboard.html.twig" %}*/
/* {% block addstylesheets %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*    */
/*     <ul class="list-comments">*/
/*         {% for o in orgs%}*/
/*             <li style="margin-bottom:5px">*/
/*                 <div class="card style-default-light">*/
/*                     <div class="comment-avatar"><img src="{{ asset(o.getPhoto()) }}"></div>*/
/*                     <div class="card-body">*/
/*                         <h4 class="comment-title">{{o.getNom()}} <small>{{o.getEmail()}}</small></h4>*/
/*                         <a class="btn btn-default-dark stick-top-right" href="#"style="background-color:#0aa89e;border-color:#0aa89e;height: 100%;width: 20%;padding-top: 3%">Reply</a>*/
/*                         <p>{{o.getAdress()}}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*            */
/* */
/*             {%endfor%}*/
/*     </ul>*/
/* {% endblock %}*/
/* {% block addjavascripts %}*/
/* */
/* {% endblock %}*/
