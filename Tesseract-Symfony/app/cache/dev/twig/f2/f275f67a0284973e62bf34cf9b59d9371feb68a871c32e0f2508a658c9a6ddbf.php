<?php

/* TesseractMOOCBundle:Admin:BlockUsers.html.twig */
class __TwigTemplate_0c32f529639593e1d2f997d291573ff8c19452250b0ec9053ff02b95bf38affa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:Admin:Admindashboard.html.twig", "TesseractMOOCBundle:Admin:BlockUsers.html.twig", 1);
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
        echo "    <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table no-margin\" id=\"table1\">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Mail</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Score</th>
                                <th>Ban</th>
                                <th>Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 25
            echo "                                <tr>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getUsername", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getEmail", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getNom", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "isSuperAdmin", array(), "method"), "html", null, true);
            echo "</td>
                                    <td><a class= \"btn ink-reaction btn-floating-action btn-primary\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_block_user", array("id" => $this->getAttribute($context["u"], "getId", array(), "method"))), "html", null, true);
            echo "\"><i class=\"fa fa-ban\"></i></a></td>
                                    <td><a class= \"btn ink-reaction btn-floating-action btn-primary\" href=\"#\"><i class=\"fa fa-user\"></i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                        </tbody>
                    </table>
                </div><!--end .table-responsive -->
            </div><!--end .card-body -->
        </div><!--end .card -->
    </div><!--end .col -->
</div>
";
    }

    // line 44
    public function block_addjavascripts($context, array $blocks = array())
    {
        // line 45
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
        return "TesseractMOOCBundle:Admin:BlockUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 45,  112 => 44,  100 => 35,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  67 => 25,  63 => 24,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "TesseractMOOCBundle:Admin:Admindashboard.html.twig" %}*/
/* {% block addstylesheets %}*/
/* <link type="text/css" rel="stylesheet" href="{{ asset('bundles/mooc/AdminAssets/css/theme-default/libs/DataTables/jquery.dataTables.css') }}" />*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <div class="card">*/
/*             <div class="card-body">*/
/*                 <div class="table-responsive">*/
/*                     <table class="table no-margin" id="table1">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Username</th>*/
/*                                 <th>Mail</th>*/
/*                                 <th>Name</th>*/
/*                                 <th>Surname</th>*/
/*                                 <th>Score</th>*/
/*                                 <th>Ban</th>*/
/*                                 <th>Profile</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for u in users%}*/
/*                                 <tr>*/
/*                                     <td>{{u.getUsername()}}</td>*/
/*                                     <td>{{u.getEmail()}}</td>*/
/*                                     <td>{{u.getPrenom()}}</td>*/
/*                                     <td>{{u.getNom()}}</td>*/
/*                                     <td>{{u.isSuperAdmin()}}</td>*/
/*                                     <td><a class= "btn ink-reaction btn-floating-action btn-primary" href="{{ path('tesseract_mooc_admin_block_user',{'id':u.getId()})}}"><i class="fa fa-ban"></i></a></td>*/
/*                                     <td><a class= "btn ink-reaction btn-floating-action btn-primary" href="#"><i class="fa fa-user"></i></a></td>*/
/*                                 </tr>*/
/*                             {%endfor%}*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </div><!--end .table-responsive -->*/
/*             </div><!--end .card-body -->*/
/*         </div><!--end .card -->*/
/*     </div><!--end .col -->*/
/* </div>*/
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
