<?php

/* TesseractMOOCBundle:Admin:Tickets.html.twig */
class __TwigTemplate_4d4c4fe0ed3be76a6a51b351da26b15873dee59eca3b85b9c4a3fa11d1bbcffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:Admin:Admindashboard.html.twig", "TesseractMOOCBundle:Admin:Tickets.html.twig", 1);
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
        // line 3
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/css/theme-default/libs/DataTables/jquery.dataTables.css"), "html", null, true);
        echo "\" />
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table no-margin\" id=\"table1\">
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 24
            echo "                                <tr>

                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getId", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getIdUtilisateur", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getSujet", array(), "method"), "html", null, true);
            echo "</td>
                                    <td class=\"sort-numeric\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "getDate", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getEtat", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "getDescription", array(), "method"), "html", null, true);
            echo "</td>
                                    <td><a class= \"btn ink-reaction btn-floating-action btn-primary\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_tickets_reply", array("id" => $this->getAttribute($context["t"], "getId", array(), "method"))), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                        </tbody>
                    </table>
                </div><!--end .table-responsive -->
            </div><!--end .card-body -->
        </div><!--end .card -->
    </div><!--end .col -->


";
    }

    // line 45
    public function block_addjavascripts($context, array $blocks = array())
    {
        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/DataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script text=\"text/javascript\">
        \$(document).ready(function(){
            \$('#table1').DataTable();
    });
        
    </script>
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
        return array (  119 => 46,  116 => 45,  103 => 35,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 24,  62 => 23,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "TesseractMOOCBundle:Admin:Admindashboard.html.twig" %}*/
/* {% block addstylesheets %}*/
/* <link type="text/css" rel="stylesheet" href="{{ asset('bundles/mooc/AdminAssets/css/theme-default/libs/DataTables/jquery.dataTables.css') }}" />*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="col-lg-12">*/
/*         <div class="card">*/
/*             <div class="card-body">*/
/*                 <div class="table-responsive">*/
/*                     <table class="table no-margin" id="table1">*/
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
/*                                     <td class="sort-numeric">{{t.getDate()|date('Y-m-d')}}</td>*/
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
/* {% block addjavascripts %}*/
/*     <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/DataTables/jquery.dataTables.min.js') }}"></script>*/
/*     <script text="text/javascript">*/
/*         $(document).ready(function(){*/
/*             $('#table1').DataTable();*/
/*     });*/
/*         */
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
