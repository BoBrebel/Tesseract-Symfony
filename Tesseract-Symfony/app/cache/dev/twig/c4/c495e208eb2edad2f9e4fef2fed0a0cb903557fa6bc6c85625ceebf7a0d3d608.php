<?php

/* TesseractMOOCBundle:Admin:Tickets.html.twig */
class __TwigTemplate_28035d91f7a2a1b1bf6da5af57affbccf7868d2a454dfbc8cd7962bdb3628ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:Admin:Admindashboard.html.twig", "TesseractMOOCBundle:Admin:Tickets.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table no-margin\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sender</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>State</th>
                                <th>Description</th>
                                <th>Respond</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 22
            echo "                                <tr>

                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getId", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getIdUtilisateur", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getSujet", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "getDate", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getEtat", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getDescription", array(), "method"), "html", null, true);
            echo "</td>
                                    <td><a class= \"btn ink-reaction btn-floating-action btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_tickets_reply", array("id" => $this->getAttribute($context["t"], "getId", array(), "method"))), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                        </tbody>
                    </table>
                </div><!--end .table-responsive -->
            </div><!--end .card-body -->
        </div><!--end .card -->
    </div><!--end .col -->


";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Admin:Tickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 24,  54 => 22,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "TesseractMOOCBundle:Admin:Admindashboard.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <div class="col-lg-12">*/
/*         <div class="card">*/
/*             <div class="card-body">*/
/*                 <div class="table-responsive">*/
/*                     <table class="table no-margin">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>ID</th>*/
/*                                 <th>Sender</th>*/
/*                                 <th>Subject</th>*/
/*                                 <th>Date</th>*/
/*                                 <th>State</th>*/
/*                                 <th>Description</th>*/
/*                                 <th>Respond</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for t in tickets%}*/
/*                                 <tr>*/
/* */
/*                                     <td>{{t.getId()}}</td>*/
/*                                     <td>{{t.getIdUtilisateur()}}</td>*/
/*                                     <td>{{t.getSujet()}}</td>*/
/*                                     <td>{{t.getDate()|date('Y-m-d')}}</td>*/
/*                                     <td>{{t.getEtat()}}</td>*/
/*                                     <td>{{t.getDescription()}}</td>*/
/*                                     <td><a class= "btn ink-reaction btn-floating-action btn-primary" href="{{ path('tesseract_mooc_admin_tickets_reply',{'id':t.getId()})}}"><i class="fa fa-reply"></i></a></td>*/
/*                                 </tr>*/
/*                             {%endfor%}*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </div><!--end .table-responsive -->*/
/*             </div><!--end .card-body -->*/
/*         </div><!--end .card -->*/
/*     </div><!--end .col -->*/
/* */
/* */
/* {% endblock %}*/
/* */
