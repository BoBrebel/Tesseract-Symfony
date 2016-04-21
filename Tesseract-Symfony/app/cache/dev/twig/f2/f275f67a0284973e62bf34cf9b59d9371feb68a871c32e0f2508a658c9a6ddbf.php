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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table no-margin\">
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 22
            echo "                                <tr>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getUsername", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getEmail", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getNom", array(), "method"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "isSuperAdmin", array()), "html", null, true);
            echo "</td>
                                    <td><a class= \"btn ink-reaction btn-floating-action btn-primary\" href=\"#\"><i class=\"fa fa-ban\"></i></a></td>
                                    <td><a class= \"btn ink-reaction btn-floating-action btn-primary\" href=\"#\"><i class=\"fa fa-user\"></i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        return array (  85 => 32,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  55 => 22,  51 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "TesseractMOOCBundle:Admin:Admindashboard.html.twig" %}*/
/* {% block content %}*/
/*     <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <div class="card">*/
/*             <div class="card-body">*/
/*                 <div class="table-responsive">*/
/*                     <table class="table no-margin">*/
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
/*                                     <td>{{u.isSuperAdmin}}</td>*/
/*                                     <td><a class= "btn ink-reaction btn-floating-action btn-primary" href="#"><i class="fa fa-ban"></i></a></td>*/
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
