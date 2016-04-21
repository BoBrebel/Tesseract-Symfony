<?php

/* TesseractMOOCBundle:Apprenant:courses_by_categ.html.twig */
class __TwigTemplate_2f4262c561b18c1d4e9f09d32c38198cc388c9ab965393b9be5da516f56f4a79 extends Twig_Template
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
        echo "<ul>


    
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 6
            echo "        <li style=\"display:inline-block; margin-left: 100px;margin-top: 100px;\">

            <div class=\"card\" style=\"width: 300px; height: 300px;\" >
                <div class=\"card-image waves-effect waves-block waves-light\"  style=\"width: 300px; height: 200px;\">
                    <img style=\"height: 200px; width: 300px;\" class=\"activator\" src=\"../../uploads/pictures/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "affiche", array()), "html", null, true);
            echo "\">
                </div>
                <div class=\"card-content\" >
                    <span class=\"card-title activator grey-text text-darken-4\"> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "nom", array()), "html", null, true);
            echo "<i class=\"material-icons right\">more_vert</i></span>
                    </br>
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_subscribed_id", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\"> Subscribe</a>
                   |
                   <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_comments_id", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" class=\"modal-trigger\"> Comments</a>
                </div>
                <div class=\"card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\"> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "difficulte", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
                    <p> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "description", array()), "html", null, true);
            echo "</p>
                </div>
            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
<div class=\"navigation\">
    ";
        // line 28
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>
</ul>
";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:courses_by_categ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  74 => 26,  63 => 21,  59 => 20,  51 => 17,  46 => 15,  41 => 13,  35 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <ul>*/
/* */
/* */
/*     */
/*     {% for course in pagination %}*/
/*         <li style="display:inline-block; margin-left: 100px;margin-top: 100px;">*/
/* */
/*             <div class="card" style="width: 300px; height: 300px;" >*/
/*                 <div class="card-image waves-effect waves-block waves-light"  style="width: 300px; height: 200px;">*/
/*                     <img style="height: 200px; width: 300px;" class="activator" src="../../uploads/pictures/{{course.affiche}}">*/
/*                 </div>*/
/*                 <div class="card-content" >*/
/*                     <span class="card-title activator grey-text text-darken-4"> {{course.nom}}<i class="material-icons right">more_vert</i></span>*/
/*                     </br>*/
/*                     <a href="{{ path ('course_subscribed_id',{'id':course.id})}}"> Subscribe</a>*/
/*                    |*/
/*                    <a href="{{ path ('course_comments_id',{'id':course.id})}}" id="{{course.id}}" class="modal-trigger"> Comments</a>*/
/*                 </div>*/
/*                 <div class="card-reveal">*/
/*                     <span class="card-title grey-text text-darken-4"> {{course.difficulte}}<i class="material-icons right">close</i></span>*/
/*                     <p> {{course.description}}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </li>*/
/*     {% endfor %}*/
/* */
/* <div class="navigation">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* </ul>*/
/* */
