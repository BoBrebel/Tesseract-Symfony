<?php

/* TesseractMOOCBundle:Apprenant:resumecours.html.twig */
class __TwigTemplate_a5206cbd8458554bc1096927bafa6296bb6e3a51591f42c358d04bea6cd8b220 extends Twig_Template
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
<div>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nom", array()), "html", null, true);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "video", array()), "html", null, true);
        echo "

</div>

<div class=\"video-container\" style=\"width: 800px;height: 300px;\">
    <iframe width=\"800\" height=\"200\" src=\"https://www.youtube.com/embed/watch?v=BEhMjZGJQ-Y&index=18&list=PLL24PCE8BNk23eR2_tWZ30u8XZ7OEdMom\" frameborder=\"0\" allowfullscreen></iframe>
</div>

<div style=\"z-index: 1003; display: block; opacity: 1; bottom: 0px;\" id=\"modal3\" class=\"modal bottom-sheet open\">
    <div class=\"modal-content\">
        <h4>Comments</h4>
        <ul class=\"collection\">
             <li>
                <form method=\"POST\">
                <div class=\"row\">
                    <div class=\"input-field col s12\">
                        <textarea id=\"textarea1\" class=\"materialize-textarea\" length=\"120\"></textarea>
                        <label for=\"textarea1\">add comment</label>
                    </div>
                    <input type=\"submit\" value=\"submit\">
                </div>
                </form>

            </li>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "
                <li class=\"collection-item avatar\">
                    <img src=\"../../uploads/pictures/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "photo", array()), "html", null, true);
            echo "\" alt=\"\" class=\"circle\">
                    <span class=\"title\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "username", array()), "html", null, true);
            echo "</span>
                    <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "commentaire", array()), "html", null, true);
            echo "<br>

                    </p>
                    <p> Le ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y-m-d\\TH:i:sP"), "html", null, true);
            echo "

                    </p>

                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "           
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:resumecours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 42,  76 => 36,  70 => 33,  66 => 32,  62 => 31,  58 => 29,  54 => 28,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* <div>*/
/*     {{cours.nom}}*/
/*     {{cours.video}}*/
/* */
/* </div>*/
/* */
/* <div class="video-container" style="width: 800px;height: 300px;">*/
/*     <iframe width="800" height="200" src="https://www.youtube.com/embed/watch?v=BEhMjZGJQ-Y&index=18&list=PLL24PCE8BNk23eR2_tWZ30u8XZ7OEdMom" frameborder="0" allowfullscreen></iframe>*/
/* </div>*/
/* */
/* <div style="z-index: 1003; display: block; opacity: 1; bottom: 0px;" id="modal3" class="modal bottom-sheet open">*/
/*     <div class="modal-content">*/
/*         <h4>Comments</h4>*/
/*         <ul class="collection">*/
/*              <li>*/
/*                 <form method="POST">*/
/*                 <div class="row">*/
/*                     <div class="input-field col s12">*/
/*                         <textarea id="textarea1" class="materialize-textarea" length="120"></textarea>*/
/*                         <label for="textarea1">add comment</label>*/
/*                     </div>*/
/*                     <input type="submit" value="submit">*/
/*                 </div>*/
/*                 </form>*/
/* */
/*             </li>*/
/*             {% for item in pagination %}*/
/* */
/*                 <li class="collection-item avatar">*/
/*                     <img src="../../uploads/pictures/{{item.photo}}" alt="" class="circle">*/
/*                     <span class="title">{{item.username}}</span>*/
/*                     <p>{{item.commentaire }}<br>*/
/* */
/*                     </p>*/
/*                     <p> Le {{item.date|date('Y-m-d\\TH:i:sP')}}*/
/* */
/*                     </p>*/
/* */
/*                 </li>*/
/*             {% endfor %}*/
/*            */
/*         </ul>*/
/*     </div>*/
/* </div>*/
