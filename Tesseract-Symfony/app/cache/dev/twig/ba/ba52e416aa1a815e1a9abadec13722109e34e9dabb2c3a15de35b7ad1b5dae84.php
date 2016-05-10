<?php

/* TesseractMOOCBundle:Organisation:index.html.twig */
class __TwigTemplate_ded6fee216221bf801ac4b61de53e208975335e71d4bec85ea9aa2f6f6b3afc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:Admin:Layout.html.twig", "TesseractMOOCBundle:Organisation:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menubar' => array($this, 'block_menubar'),
            'content' => array($this, 'block_content'),
            'jsdependencies' => array($this, 'block_jsdependencies'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle:Admin:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"headerbar\">
        <div class=\"headerbar-left\">
            <ul class=\"header-nav header-nav-options\">
                <li class=\"header-nav-brand\" >
                    <div class=\"brand-holder\">
                        <a href=\"#\">
                            <span class=\"text-lg text-bold text-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thisOrg"]) ? $context["thisOrg"] : $this->getContext($context, "thisOrg")), "Nom", array()), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a class=\"btn btn-icon-toggle menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                        <i class=\"fa fa-bars\"></i>
                    </a>
                </li>

            </ul>
        </div>
        <div class=\"headerbar-right\">

            <ul class=\"header-nav header-nav-profile\">
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0);\" class=\"dropdown-toggle ink-reaction\" data-toggle=\"dropdown\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Resources/userbob.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <span class=\"profile-info\">
                            ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                            <small>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</small>
                        </span>
                    </a>
                    <ul class=\"dropdown-menu animation-dock\">
                        <li class=\"dropdown-header\">Config</li>
                        <li><a href=\"./profile\">My profile</a></li> ";
        // line 36
        echo "                        <li class=\"divider\"></li>
                        <li><a href=\"../../html/pages/locked.html\"><i class=\"fa fa-fw fa-lock\"></i> Lock</a></li>
                        <li><a href=\"../../html/pages/login.html\"><i class=\"fa fa-fw fa-power-off text-danger\"></i> Logout</a></li>
                    </ul><!--end .dropdown-menu -->
                </li>

            </ul>
        </div>
    </div>
";
    }

    // line 47
    public function block_menubar($context, array $blocks = array())
    {
        // line 48
        echo "    <div class=\"menubar-fixed-panel\">
        <div>
            <a class=\"btn btn-icon-toggle btn-default menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                <i class=\"fa fa-bars\"></i>
            </a>
        </div>
        <div class=\"expanded\">
            <a href=\"../../html/dashboards/dashboard.html\">
                <span class=\"text-lg text-bold text-primary \">MATERIAL&nbsp;ADMIN</span>
            </a>
        </div>
    </div>
    <div class=\"menubar-scroll-panel\">
        <ul id=\"main-menu\" class=\"gui-controls \">
            <li>
                <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_dashboard");
        echo "\" class=\"active\">
                    <div class=\"gui-icon\"><i class=\"fa fa-home\"></i></div>
                    <span class=\"title\">Dashboard</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_org_qry");
        echo "\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-flag\"></i></div>
                    <span class=\"title\">Organisation Queries</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_block_users");
        echo "\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-ban\"></i></div>
                    <span class=\"title\">Block Users</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_social_media");
        echo "\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-share-alt\"></i></div>
                    <span class=\"title\">Social Media</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_tickets");
        echo "\" id=\"btn-tickets\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-ticket\"></i></div>
                    <span class=\"title\">Tickets</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_forum_bans");
        echo "\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-comment-o\"></i></div>
                    <span class=\"title\">Forum Bans</span>
                </a>
            </li>
        </ul>
        <div class=\"menubar-foot-panel\">
            <small class=\"no-linebreak hidden-folded\">
                <span class=\"opacity-75\">Copyright &copy; 2014</span> <strong>Tesseract Corp</strong>
            </small>
        </div>
    </div><!--end .menubar-scroll-panel-->

";
    }

    // line 108
    public function block_content($context, array $blocks = array())
    {
        // line 109
        echo "    ";
        // line 110
        echo "
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card-head pull-right\">
                            <header>Analytics</header>
                        </div>
                        <div class=\"card-body height-8 pull-right\">
                            <strong>";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["coachesNbr"]) ? $context["coachesNbr"] : $this->getContext($context, "coachesNbr")), "html", null, true);
        echo "</strong> Coach Members 
                            <span class=\" text-success text-sm  pull-right\" >";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["coachP"]) ? $context["coachP"] : $this->getContext($context, "coachP")), "html", null, true);
        echo " <i class=\"md md-trending-up\"></i></span>
                            <div class=\"progress progress-hairline\">
                                <div class=\"progress-bar progress-bar-primary-dark  pull-right\" style=\"width:";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["coachP"]) ? $context["coachP"] : $this->getContext($context, "coachP")), "html", null, true);
        echo "%\"></div>
                            </div>
                            291 bounce rates
                            <span class=\" text-danger text-sm  pull-right\">21,08% <i class=\"md md-trending-down\"></i></span>
                            <div class=\"progress progress-hairline  pull-right\">
                                <div class=\"progress-bar progress-bar-danger  pull-right\" style=\"width:93%\"></div>
                            </div>
                            132 pages
                            <span class=\" text-success text-sm  pull-right\">0,18% <i class=\"md md-trending-up\"></i></span>
                            <div class=\"progress progress-hairline  pull-right\">
                                <div class=\"progress-bar progress-bar-primary-dark  pull-right\" style=\"width:47%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    ";
    }

    // line 148
    public function block_jsdependencies($context, array $blocks = array())
    {
        // line 149
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
        <!--
                Flot provides different JavaScript files some charts. Check their website to see which ones you need.
                The example page uses the following additional includes.
        -->
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.orderBars.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Organisation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 158,  254 => 157,  250 => 156,  246 => 155,  242 => 154,  233 => 149,  230 => 148,  202 => 124,  197 => 122,  193 => 121,  180 => 110,  178 => 109,  175 => 108,  157 => 93,  148 => 87,  139 => 81,  130 => 75,  121 => 69,  112 => 63,  95 => 48,  92 => 47,  79 => 36,  71 => 30,  67 => 29,  62 => 27,  42 => 10,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "TesseractMOOCBundle:Admin:Layout.html.twig" %}*/
/* */
/* {% block header %}*/
/*     <div class="headerbar">*/
/*         <div class="headerbar-left">*/
/*             <ul class="header-nav header-nav-options">*/
/*                 <li class="header-nav-brand" >*/
/*                     <div class="brand-holder">*/
/*                         <a href="#">*/
/*                             <span class="text-lg text-bold text-primary">{{thisOrg.Nom}}</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">*/
/*                         <i class="fa fa-bars"></i>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*         </div>*/
/*         <div class="headerbar-right">*/
/* */
/*             <ul class="header-nav header-nav-profile">*/
/*                 <li class="dropdown">*/
/*                     <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">*/
/*                         <img src="{{ asset('Resources/userbob.jpg') }}" alt="" />*/
/*                         <span class="profile-info">*/
/*                             {{ app.user.username }}*/
/*                             <small>{{ app.user.email }}</small>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu animation-dock">*/
/*                         <li class="dropdown-header">Config</li>*/
/*                         <li><a href="./profile">My profile</a></li> {#Verify and change !!!!!#}*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>*/
/*                         <li><a href="../../html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>*/
/*                     </ul><!--end .dropdown-menu -->*/
/*                 </li>*/
/* */
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block menubar %}*/
/*     <div class="menubar-fixed-panel">*/
/*         <div>*/
/*             <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">*/
/*                 <i class="fa fa-bars"></i>*/
/*             </a>*/
/*         </div>*/
/*         <div class="expanded">*/
/*             <a href="../../html/dashboards/dashboard.html">*/
/*                 <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="menubar-scroll-panel">*/
/*         <ul id="main-menu" class="gui-controls ">*/
/*             <li>*/
/*                 <a href="{{ path('tesseract_mooc_admin_dashboard') }}" class="active">*/
/*                     <div class="gui-icon"><i class="fa fa-home"></i></div>*/
/*                     <span class="title">Dashboard</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('tesseract_mooc_admin_org_qry') }}" >*/
/*                     <div class="gui-icon"><i class="fa fa-flag"></i></div>*/
/*                     <span class="title">Organisation Queries</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('tesseract_mooc_admin_block_users') }}" >*/
/*                     <div class="gui-icon"><i class="fa fa-ban"></i></div>*/
/*                     <span class="title">Block Users</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('tesseract_mooc_admin_social_media') }}" >*/
/*                     <div class="gui-icon"><i class="fa fa-share-alt"></i></div>*/
/*                     <span class="title">Social Media</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('tesseract_mooc_admin_tickets') }}" id="btn-tickets" >*/
/*                     <div class="gui-icon"><i class="fa fa-ticket"></i></div>*/
/*                     <span class="title">Tickets</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('tesseract_mooc_admin_forum_bans') }}" >*/
/*                     <div class="gui-icon"><i class="fa fa-comment-o"></i></div>*/
/*                     <span class="title">Forum Bans</span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*         <div class="menubar-foot-panel">*/
/*             <small class="no-linebreak hidden-folded">*/
/*                 <span class="opacity-75">Copyright &copy; 2014</span> <strong>Tesseract Corp</strong>*/
/*             </small>*/
/*         </div>*/
/*     </div><!--end .menubar-scroll-panel-->*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {#{% render controller('TesseractMOOCBundle:Graphe:index') %}#}*/
/* */
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/* */
/*             <div class="card">*/
/*                 <div class="row">*/
/*                     <div class="col-md-4">*/
/*                         <div class="card-head pull-right">*/
/*                             <header>Analytics</header>*/
/*                         </div>*/
/*                         <div class="card-body height-8 pull-right">*/
/*                             <strong>{{coachesNbr}}</strong> Coach Members */
/*                             <span class=" text-success text-sm  pull-right" >{{coachP}} <i class="md md-trending-up"></i></span>*/
/*                             <div class="progress progress-hairline">*/
/*                                 <div class="progress-bar progress-bar-primary-dark  pull-right" style="width:{{coachP}}%"></div>*/
/*                             </div>*/
/*                             291 bounce rates*/
/*                             <span class=" text-danger text-sm  pull-right">21,08% <i class="md md-trending-down"></i></span>*/
/*                             <div class="progress progress-hairline  pull-right">*/
/*                                 <div class="progress-bar progress-bar-danger  pull-right" style="width:93%"></div>*/
/*                             </div>*/
/*                             132 pages*/
/*                             <span class=" text-success text-sm  pull-right">0,18% <i class="md md-trending-up"></i></span>*/
/*                             <div class="progress progress-hairline  pull-right">*/
/*                                 <div class="progress-bar progress-bar-primary-dark  pull-right" style="width:47%"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     {% endblock %}*/
/*     {% block jsdependencies %}*/
/*         <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.min.js') }}"></script>*/
/*         <!--*/
/*                 Flot provides different JavaScript files some charts. Check their website to see which ones you need.*/
/*                 The example page uses the following additional includes.*/
/*         -->*/
/*         <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.time.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.resize.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.orderBars.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.pie.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>*/
/*     {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     {#{% extends '::base.html.twig' %}*/
/*     */
/*     {% block body -%}*/
/*         <h1>Organisation list</h1>*/
/*     */
/*         <table class="records_list">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Nom</th>*/
/*                     <th>Adress</th>*/
/*                     <th>Email</th>*/
/*                     <th>Matricule</th>*/
/*                     <th>Photo</th>*/
/*                     <th>Enabled</th>*/
/*                     <th>Id</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('organisation_show', { 'id': entity.id }) }}">{{ entity.nom }}</a></td>*/
/*                     <td>{{ entity.adress }}</td>*/
/*                     <td>{{ entity.email }}</td>*/
/*                     <td>{{ entity.matricule }}</td>*/
/*                     <td>{{ entity.photo }}</td>*/
/*                     <td>{{ entity.enabled }}</td>*/
/*                     <td>{{ entity.id }}</td>*/
/*                     <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('organisation_show', { 'id': entity.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('organisation_edit', { 'id': entity.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     */
/*             <ul>*/
/*             <li>*/
/*                 <a href="{{ path('organisation_new') }}">*/
/*                     Create a new entry*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*         {% endblock %}*/
/*     #}*/
