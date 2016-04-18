<?php

/* TesseractMOOCBundle:Admin:Admindashboard.html.twig */
class __TwigTemplate_83013ec4caac8a4abc42ddccf6deeab88f16291a216129c511d7bf73925c13c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TesseractMOOCBundle:Admin:Layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menubar' => array($this, 'block_menubar'),
            'content' => array($this, 'block_content'),
            'offcanvas' => array($this, 'block_offcanvas'),
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

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
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
                        <i class=\"fa fa-bell\"></i><sup class=\"badge style-danger\">4</sup>
                    </a>
                    <ul class=\"dropdown-menu animation-expand\">
                        <li class=\"dropdown-header\">Today's messages</li>
                        <li>
                            <a class=\"alert alert-callout alert-warning\" href=\"javascript:void(0);\">
                                <img class=\"pull-right img-circle dropdown-avatar\" src=\"../../assets/img/avatar2.jpg?1404026449\" alt=\"\" />
                                <strong>Alex Anistor</strong><br/>
                                <small>Testing functionality...</small>
                            </a>
                        </li>

                        <li class=\"dropdown-header\">Options</li>
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
                <a href=\"#\" class=\"active\">
                    <div class=\"gui-icon\"><i class=\"fa fa-home\"></i></div>
                    <span class=\"title\">Dashboard</span>
                </a>
            </li>
            <li>
                <a href=\"#\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-flag\"></i></div>
                    <span class=\"title\">Organisation Queries</span>
                </a>
            </li>
            <li>
                <a href=\"#\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-ban\"></i></div>
                    <span class=\"title\">Block Users</span>
                </a>
            </li>
            <li>
                <a href=\"#\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-share-alt\"></i></div>
                    <span class=\"title\">Social Media</span>
                </a>
            </li>
            <li>
                <a href=\"#\" >
                    <div class=\"gui-icon\"><i class=\"fa fa-ticket\"></i></div>
                    <span class=\"title\">Tickets</span>
                </a>
            </li>
            <li>
                <a href=\"#\" >
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

    // line 174
    public function block_content($context, array $blocks = array())
    {
        // line 175
        echo "    
    ";
    }

    // line 177
    public function block_offcanvas($context, array $blocks = array())
    {
        // line 178
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
                <li class=\"tile\">
                    <a class=\"tile-content ink-reaction\" href=\"#offcanvas-chat\" data-toggle=\"offcanvas\" data-backdrop=\"false\">
                        <div class=\"tile-icon\">
                            <img src=\"../../assets/img/avatar4.jpg?1404026791\" alt=\"\" />
                        </div>
                        <div class=\"tile-text\">
                            Alex Nelson
                            <small>123-123-3210</small>
                        </div>
                    </a>
                </li>
            </ul>
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
        return array (  238 => 178,  235 => 177,  230 => 175,  227 => 174,  165 => 115,  162 => 114,  132 => 87,  128 => 86,  123 => 84,  42 => 5,  39 => 4,  11 => 1,);
    }
}
