<?php

/* TesseractMOOCBundle:Apprenant:affichercours.html.twig */
class __TwigTemplate_51f19c6d7b3ae98714ee79677789fa2fcb30b0cad4146454015d02602b7246c3 extends Twig_Template
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
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 5
            echo "    <li style=\"display:inline-block; margin-left: 100px;margin-top: 100px;\">
    <div style=\"background-color: white ;width: 200px;box-shadow: 0 2px 2px rgba(0,0,0,0.15);\">
        <div  style=\"background-color: yellow ; height: 150px; \">
            <img src=\"../../uploads/pictures/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "affiche", array()), "html", null, true);
            echo "\" style=\"height: 150px; width: 200px;\"> 
        </div>
        <span style=\"font-family: \"Roboto\", sans-serif;font-weight: normal;\" >
          ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "nom", array()), "html", null, true);
            echo "
    </span>
    </br>
    <span style=\"font-family: \"Roboto\", sans-serif;font-weight: normal;\">
           ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "difficulte", array()), "html", null, true);
            echo "
</span> 
<span style=\"font-family: \"Roboto\", sans-serif;font-weight: normal;\">
    (125)
</span> 
<input type=\"submit\" value=\"sybuscribe\" style=\"width: 200px;\">
</div>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
<div class=\"navigation\">
";
        // line 26
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>
</ul>";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:affichercours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  61 => 24,  46 => 15,  39 => 11,  33 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <ul>*/
/*     */
/* */
/* {% for course in pagination %}*/
/*     <li style="display:inline-block; margin-left: 100px;margin-top: 100px;">*/
/*     <div style="background-color: white ;width: 200px;box-shadow: 0 2px 2px rgba(0,0,0,0.15);">*/
/*         <div  style="background-color: yellow ; height: 150px; ">*/
/*             <img src="../../uploads/pictures/{{course.affiche}}" style="height: 150px; width: 200px;"> */
/*         </div>*/
/*         <span style="font-family: "Roboto", sans-serif;font-weight: normal;" >*/
/*           {{course.nom}}*/
/*     </span>*/
/*     </br>*/
/*     <span style="font-family: "Roboto", sans-serif;font-weight: normal;">*/
/*            {{course.difficulte}}*/
/* </span> */
/* <span style="font-family: "Roboto", sans-serif;font-weight: normal;">*/
/*     (125)*/
/* </span> */
/* <input type="submit" value="sybuscribe" style="width: 200px;">*/
/* </div>*/
/* </li>*/
/* {% endfor %}*/
/* */
/* <div class="navigation">*/
/* {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* </ul>*/
