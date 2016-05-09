<?php

/* TesseractMOOCBundle:Apprenant:subs.html.twig */
class __TwigTemplate_c5b3799e42db81c7b8d86b9fa23f2d30870d180e2a87275d8cd17527a8ba52b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:LayoutApprenant:layoutsubscribe.html.twig", "TesseractMOOCBundle:Apprenant:subs.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'video' => array($this, 'block_video'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle:LayoutApprenant:layoutsubscribe.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, ($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "nbr", array()) + 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "     <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficher_cours_chap_appr", array("idcours" => $this->getAttribute($context["item"], "idCours", array()), "idchapitre" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"breadcrumb\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "</a>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 13
    public function block_video($context, array $blocks = array())
    {
        echo " 


";
    }

    // line 20
    public function block_contenu($context, array $blocks = array())
    {
        // line 21
        echo "                      
                        
                        
                      ";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:subs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  63 => 20,  54 => 13,  40 => 7,  36 => 6,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {%  extends "TesseractMOOCBundle:LayoutApprenant:layoutsubscribe.html.twig"%}*/
/* */
/* */
/* {% block nav %}*/
/* */
/*     {% for item in pagination | slice(0,session.nbr+1)%}*/
/*      <a href="{{path('afficher_cours_chap_appr',{'idcours':item.idCours,'idchapitre':item.id})}}" class="breadcrumb">{{item.nom}}</a>*/
/*     */
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block video %} */
/* */
/* */
/* {% endblock %}*/
/*               */
/*        */
/*                     */
/*                       {% block contenu %}*/
/*                       */
/*                         */
/*                         */
/*                       {% endblock %}*/
/* */
/* */
