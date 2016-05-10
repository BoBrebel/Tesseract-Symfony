<?php

/* TesseractMOOCBundle:Admin:Admindashboard.html.twig */
class __TwigTemplate_3987b7f658afc02ba2c4d88a4002adfa328fcdc1ecaf59fc8f5eea283a9878ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:Admin:Layout.html.twig", "TesseractMOOCBundle:Admin:Admindashboard.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menubar' => array($this, 'block_menubar'),
            'content' => array($this, 'block_content'),
            'offcanvas' => array($this, 'block_offcanvas'),
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
                            <span class=\"text-lg text-bold text-primary\">Admin Dashboard</span>
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
            <ul class=\"header-nav header-nav-options\">
                <li class=\"dropdown hidden-xs\">
                    <a href=\"javascript:void(0);\" class=\"btn btn-icon-toggle btn-default\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell\"></i><sup class=\"badge style-danger\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nbrnot"]) ? $context["nbrnot"] : $this->getContext($context, "nbrnot")), "html", null, true);
        echo "</sup>
                    </a>
                    <ul class=\"dropdown-menu animation-expand\">
                        <li class=\"dropdown-header\">Today's messages</li>
                         ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 31
            echo "                        <li>
                            <a class=\"alert alert-callout alert-warning\" href=\"javascript:void(0);\">
                                <img class=\"pull-right img-circle dropdown-avatar\" src=\"../../assets/img/avatar2.jpg?1404026449\" alt=\"\" />
                                <strong>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "getIdUtilisateur", array(), "method"), "html", null, true);
            echo "</strong><br/>
                                <small>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "getNotification", array(), "method"), "html", null, true);
            echo "</small>
                            </a>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        <li class=\"dropdown-header\">Options</li>
                        <li><a href=\"../../html/pages/login.html\">View all messages <span class=\"pull-right\"><i class=\"fa fa-arrow-right\"></i></span></a></li>
                        <li><a href=\"../../html/pages/login.html\">Mark as read <span class=\"pull-right\"><i class=\"fa fa-arrow-right\"></i></span></a></li>
                    </ul><!--end .dropdown-menu -->
                </li><!--end .dropdown -->
                <li class=\"dropdown hidden-xs\">
                    <a href=\"javascript:void(0);\" class=\"btn btn-icon-toggle btn-default\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-area-chart\"></i>
                    </a>
                    <ul class=\"dropdown-menu animation-expand\">
                        <li class=\"dropdown-header\">Server load</li>
                        <li class=\"dropdown-progress\">
                            <a href=\"javascript:void(0);\">
                                <div class=\"dropdown-label\">
                                    <span class=\"text-light\">Server load <strong>Today</strong></span>
                                    <strong class=\"pull-right\">93%</strong>
                                </div>
                                <div class=\"progress\"><div class=\"progress-bar progress-bar-danger\" style=\"width: 93%\"></div></div>
                            </a>
                        </li><!--end .dropdown-progress -->
                        <li class=\"dropdown-progress\">
                            <a href=\"javascript:void(0);\">
                                <div class=\"dropdown-label\">
                                    <span class=\"text-light\">Server load <strong>Yesterday</strong></span>
                                    <strong class=\"pull-right\">30%</strong>
                                </div>
                                <div class=\"progress\"><div class=\"progress-bar progress-bar-success\" style=\"width: 30%\"></div></div>
                            </a>
                        </li><!--end .dropdown-progress -->
                        <li class=\"dropdown-progress\">
                            <a href=\"javascript:void(0);\">
                                <div class=\"dropdown-label\">
                                    <span class=\"text-light\">Server load <strong>Lastweek</strong></span>
                                    <strong class=\"pull-right\">74%</strong>
                                </div>
                                <div class=\"progress\"><div class=\"progress-bar progress-bar-warning\" style=\"width: 74%\"></div></div>
                            </a>
                        </li><!--end .dropdown-progress -->
                    </ul><!--end .dropdown-menu -->
                </li>

            </ul>
            <ul class=\"header-nav header-nav-profile\">
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0);\" class=\"dropdown-toggle ink-reaction\" data-toggle=\"dropdown\">
                        <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Resources/userbob.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <span class=\"profile-info\">
                            ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                            <small>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</small>
                        </span>
                    </a>
                    <ul class=\"dropdown-menu animation-dock\">
                        <li class=\"dropdown-header\">Config</li>
                        <li><a href=\"./profile\">My profile</a></li>
                        <li><a href=\"../../html/pages/blog/post.html\">My blog <span class=\"badge style-danger pull-right\">16</span></a></li>
                        <li><a href=\"../../html/pages/calendar.html\">My appointments</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"../../html/pages/locked.html\"><i class=\"fa fa-fw fa-lock\"></i> Lock</a></li>
                        <li><a href=\"../../html/pages/login.html\"><i class=\"fa fa-fw fa-power-off text-danger\"></i> Logout</a></li>
                    </ul><!--end .dropdown-menu -->
                </li>

            </ul>
            <ul class=\"header-nav header-nav-toggle\">
                <li>
                    <a class=\"btn btn-icon-toggle btn-default\" href=\"#offcanvas-search\" data-toggle=\"offcanvas\" data-backdrop=\"false\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
";
    }

    // line 114
    public function block_menubar($context, array $blocks = array())
    {
        // line 115
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
        // line 130
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_dashboard");
        echo "\" class=\"active\">
                    <div class=\"gui-icon\"><i class=\"fa fa-home\"></i></div>
                    <span class=\"title\">Dashboard</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_org_qry");
        echo "\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-flag\"></i></div>
                    <span class=\"title\">Organisation Queries</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_block_users");
        echo "\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-ban\"></i></div>
                    <span class=\"title\">Block Users</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_social_media");
        echo "\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-share-alt\"></i></div>
                    <span class=\"title\">Social Media</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_tickets");
        echo "\" id=\"btn-tickets\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-ticket\"></i></div>
                    <span class=\"title\">Tickets</span>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 160
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

    // line 175
    public function block_content($context, array $blocks = array())
    {
        // line 176
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("TesseractMOOCBundle:Graphe:index"), array());
        // line 177
        echo "
";
    }

    // line 179
    public function block_offcanvas($context, array $blocks = array())
    {
        // line 180
        echo "
    <div id=\"offcanvas-search\" class=\"offcanvas-pane width-8\">
        <div class=\"offcanvas-head\">
            <header class=\"text-primary\">Search</header>
            <div class=\"offcanvas-tools\">
                <a class=\"btn btn-icon-toggle btn-default-light pull-right\" data-dismiss=\"offcanvas\">
                    <i class=\"md md-close\"></i>
                </a>
            </div>
        </div>
        <div class=\"offcanvas-body no-padding\">
            <ul class=\"list \">
                <li class=\"tile divider-full-bleed\">
                    <div class=\"tile-content\">
                        <div class=\"tile-text\"><strong>A</strong></div>
                    </div>
                </li>
                ";
        // line 197
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("TesseractMOOCBundle:Utilisateur:list"), array());
        // line 198
        echo "            </ul>
        </div><!--end .offcanvas-body -->
    </div>
    <div id=\"offcanvas-chat\" class=\"offcanvas-pane style-default-light width-12\">
        <div class=\"offcanvas-head style-default-bright\">
            <header class=\"text-primary\">Chat with Ann Laurens</header>
            <div class=\"offcanvas-tools\">
                <a class=\"btn btn-icon-toggle btn-default-light pull-right\" data-dismiss=\"offcanvas\">
                    <i class=\"md md-close\"></i>
                </a>
                <a class=\"btn btn-icon-toggle btn-default-light pull-right\" href=\"#offcanvas-search\" data-toggle=\"offcanvas\" data-backdrop=\"false\">
                    <i class=\"md md-arrow-back\"></i>
                </a>
            </div>
            <form class=\"form\">
                <div class=\"form-group floating-label\">
                    <textarea name=\"sidebarChatMessage\" id=\"sidebarChatMessage\" class=\"form-control autosize\" rows=\"1\"></textarea>
                    <label for=\"sidebarChatMessage\">Leave a message</label>
                </div>
            </form>
        </div>
        <div class=\"offcanvas-body\">
            <ul class=\"list-chats\">
                <li>
                    <div class=\"chat\">
                        <div class=\"chat-avatar\"><img class=\"img-circle\" src=\"../../assets/img/avatar1.jpg?1403934956\" alt=\"\" /></div>
                        <div class=\"chat-body\">
                            Yes, it is indeed very beautiful.
                            <small>10:03 pm</small>
                        </div>
                    </div><!--end .chat -->
                </li>
            </ul>
        </div><!--end .offcanvas-body -->
    </div>

";
    }

    // line 235
    public function block_jsdependencies($context, array $blocks = array())
    {
        // line 236
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
    <!--
            Flot provides different JavaScript files some charts. Check their website to see which ones you need.
            The example page uses the following additional includes.
    -->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.orderBars.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Admin:Admindashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 245,  356 => 244,  352 => 243,  348 => 242,  344 => 241,  335 => 236,  332 => 235,  292 => 198,  290 => 197,  271 => 180,  268 => 179,  263 => 177,  261 => 176,  258 => 175,  240 => 160,  231 => 154,  222 => 148,  213 => 142,  204 => 136,  195 => 130,  178 => 115,  175 => 114,  145 => 87,  141 => 86,  136 => 84,  89 => 39,  79 => 35,  75 => 34,  70 => 31,  66 => 30,  59 => 26,  35 => 4,  32 => 3,  11 => 1,);
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
/*                             <span class="text-lg text-bold text-primary">Admin Dashboard</span>*/
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
/*             <ul class="header-nav header-nav-options">*/
/*                 <li class="dropdown hidden-xs">*/
/*                     <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">*/
/*                         <i class="fa fa-bell"></i><sup class="badge style-danger">{{nbrnot}}</sup>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu animation-expand">*/
/*                         <li class="dropdown-header">Today's messages</li>*/
/*                          {% for n in notifications%}*/
/*                         <li>*/
/*                             <a class="alert alert-callout alert-warning" href="javascript:void(0);">*/
/*                                 <img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar2.jpg?1404026449" alt="" />*/
/*                                 <strong>{{n.getIdUtilisateur()}}</strong><br/>*/
/*                                 <small>{{n.getNotification()}}</small>*/
/*                             </a>*/
/*                         </li>*/
/*                         {%endfor%}*/
/*                         <li class="dropdown-header">Options</li>*/
/*                         <li><a href="../../html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>*/
/*                         <li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>*/
/*                     </ul><!--end .dropdown-menu -->*/
/*                 </li><!--end .dropdown -->*/
/*                 <li class="dropdown hidden-xs">*/
/*                     <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">*/
/*                         <i class="fa fa-area-chart"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu animation-expand">*/
/*                         <li class="dropdown-header">Server load</li>*/
/*                         <li class="dropdown-progress">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <div class="dropdown-label">*/
/*                                     <span class="text-light">Server load <strong>Today</strong></span>*/
/*                                     <strong class="pull-right">93%</strong>*/
/*                                 </div>*/
/*                                 <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>*/
/*                             </a>*/
/*                         </li><!--end .dropdown-progress -->*/
/*                         <li class="dropdown-progress">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <div class="dropdown-label">*/
/*                                     <span class="text-light">Server load <strong>Yesterday</strong></span>*/
/*                                     <strong class="pull-right">30%</strong>*/
/*                                 </div>*/
/*                                 <div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>*/
/*                             </a>*/
/*                         </li><!--end .dropdown-progress -->*/
/*                         <li class="dropdown-progress">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <div class="dropdown-label">*/
/*                                     <span class="text-light">Server load <strong>Lastweek</strong></span>*/
/*                                     <strong class="pull-right">74%</strong>*/
/*                                 </div>*/
/*                                 <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>*/
/*                             </a>*/
/*                         </li><!--end .dropdown-progress -->*/
/*                     </ul><!--end .dropdown-menu -->*/
/*                 </li>*/
/* */
/*             </ul>*/
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
/*                         <li><a href="./profile">My profile</a></li>*/
/*                         <li><a href="../../html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>*/
/*                         <li><a href="../../html/pages/calendar.html">My appointments</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>*/
/*                         <li><a href="../../html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>*/
/*                     </ul><!--end .dropdown-menu -->*/
/*                 </li>*/
/* */
/*             </ul>*/
/*             <ul class="header-nav header-nav-toggle">*/
/*                 <li>*/
/*                     <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                     </a>*/
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
/* {% render controller('TesseractMOOCBundle:Graphe:index') %}*/
/* */
/* {% endblock %}*/
/* {% block offcanvas %}*/
/* */
/*     <div id="offcanvas-search" class="offcanvas-pane width-8">*/
/*         <div class="offcanvas-head">*/
/*             <header class="text-primary">Search</header>*/
/*             <div class="offcanvas-tools">*/
/*                 <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">*/
/*                     <i class="md md-close"></i>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="offcanvas-body no-padding">*/
/*             <ul class="list ">*/
/*                 <li class="tile divider-full-bleed">*/
/*                     <div class="tile-content">*/
/*                         <div class="tile-text"><strong>A</strong></div>*/
/*                     </div>*/
/*                 </li>*/
/*                 {% render controller('TesseractMOOCBundle:Utilisateur:list') %}*/
/*             </ul>*/
/*         </div><!--end .offcanvas-body -->*/
/*     </div>*/
/*     <div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">*/
/*         <div class="offcanvas-head style-default-bright">*/
/*             <header class="text-primary">Chat with Ann Laurens</header>*/
/*             <div class="offcanvas-tools">*/
/*                 <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">*/
/*                     <i class="md md-close"></i>*/
/*                 </a>*/
/*                 <a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">*/
/*                     <i class="md md-arrow-back"></i>*/
/*                 </a>*/
/*             </div>*/
/*             <form class="form">*/
/*                 <div class="form-group floating-label">*/
/*                     <textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize" rows="1"></textarea>*/
/*                     <label for="sidebarChatMessage">Leave a message</label>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <div class="offcanvas-body">*/
/*             <ul class="list-chats">*/
/*                 <li>*/
/*                     <div class="chat">*/
/*                         <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>*/
/*                         <div class="chat-body">*/
/*                             Yes, it is indeed very beautiful.*/
/*                             <small>10:03 pm</small>*/
/*                         </div>*/
/*                     </div><!--end .chat -->*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!--end .offcanvas-body -->*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {% block jsdependencies %}*/
/*     <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.min.js') }}"></script>*/
/*     <!--*/
/*             Flot provides different JavaScript files some charts. Check their website to see which ones you need.*/
/*             The example page uses the following additional includes.*/
/*     -->*/
/*     <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.time.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.resize.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.orderBars.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/flot/jquery.flot.pie.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>*/
/* {% endblock %}*/
/* */
