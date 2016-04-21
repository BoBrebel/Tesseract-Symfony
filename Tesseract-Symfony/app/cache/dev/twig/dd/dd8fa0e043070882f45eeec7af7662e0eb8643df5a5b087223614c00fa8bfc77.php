<?php

/* TesseractMOOCBundle:Admin:Layout.html.twig */
class __TwigTemplate_fad9ba9d25757d29bddd1d0124a05ce92a546150f92439fa7a21479b37f1c2f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'menubar' => array($this, 'block_menubar'),
            'offcanvas' => array($this, 'block_offcanvas'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"keywords\" content=\"your,keywords\">
        <meta name=\"description\" content=\"Short explanation about this website\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 19
        $this->displayBlock('script', $context, $blocks);
        // line 20
        echo "    </head>
    <body class=\"menubar-hoverable header-fixed \">
        <header id=\"header\">
            ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "\t</header>
        <div id=\"base\">
\t\t<div class=\"offcanvas\">
\t\t\t
                        
\t\t</div>
\t\t<div id=\"content\" class=\"container-fluid\">
\t\t\t";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t\t</div>
\t\t<div id=\"menubar\" class=\"menubar-inverse \">
\t\t\t
                        ";
        // line 35
        $this->displayBlock('menubar', $context, $blocks);
        // line 36
        echo "\t\t</div>
\t\t<div class=\"offcanvas\">
\t\t\t
                        ";
        // line 39
        $this->displayBlock('offcanvas', $context, $blocks);
        // line 40
        echo "\t\t</div>
\t</div>
        }
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Admin Dashboard";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700,800' rel='stylesheet' type='text/css'/>
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/css/theme-default/bootstrap.css"), "html", null, true);
        echo "\" />
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/css/theme-default/materialadmin.css"), "html", null, true);
        echo "\" />
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/css/theme-default/font-awesome.min.css"), "html", null, true);
        echo "\" /> <!--Font Awesome Icon Font-->
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/css/theme-default/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" /> <!--Material Design Iconic Font-->
        ";
    }

    // line 19
    public function block_script($context, array $blocks = array())
    {
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
    }

    // line 35
    public function block_menubar($context, array $blocks = array())
    {
    }

    // line 39
    public function block_offcanvas($context, array $blocks = array())
    {
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/Admin.js"), "html", null, true);
        echo "\"></script>

            <!-- Put App.js last in your javascript imports -->
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/core/source/App.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Admin:Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 51,  171 => 48,  167 => 47,  163 => 46,  159 => 45,  154 => 44,  151 => 43,  146 => 39,  141 => 35,  136 => 31,  131 => 23,  126 => 19,  120 => 16,  116 => 15,  112 => 14,  108 => 13,  105 => 12,  102 => 11,  96 => 5,  90 => 53,  88 => 43,  83 => 40,  81 => 39,  76 => 36,  74 => 35,  69 => 32,  67 => 31,  58 => 24,  56 => 23,  51 => 20,  49 => 19,  44 => 18,  42 => 11,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Admin Dashboard{% endblock %}</title>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="keywords" content="your,keywords">*/
/*         <meta name="description" content="Short explanation about this website">*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700,800' rel='stylesheet' type='text/css'/>*/
/*             <link type="text/css" rel="stylesheet" href="{{ asset('bundles/mooc/AdminAssets/css/theme-default/bootstrap.css') }}" />*/
/*             <link type="text/css" rel="stylesheet" href="{{ asset('bundles/mooc/AdminAssets/css/theme-default/materialadmin.css') }}" />*/
/*             <link type="text/css" rel="stylesheet" href="{{ asset('bundles/mooc/AdminAssets/css/theme-default/font-awesome.min.css') }}" /> <!--Font Awesome Icon Font-->*/
/*             <link type="text/css" rel="stylesheet" href="{{ asset('bundles/mooc/AdminAssets/css/theme-default/material-design-iconic-font.min.css') }}" /> <!--Material Design Iconic Font-->*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% block script %}{% endblock %}*/
/*     </head>*/
/*     <body class="menubar-hoverable header-fixed ">*/
/*         <header id="header">*/
/*             {% block header %}{% endblock %}*/
/* 	</header>*/
/*         <div id="base">*/
/* 		<div class="offcanvas">*/
/* 			*/
/*                         */
/* 		</div>*/
/* 		<div id="content" class="container-fluid">*/
/* 			{% block content %}{% endblock %}*/
/* 		</div>*/
/* 		<div id="menubar" class="menubar-inverse ">*/
/* 			*/
/*                         {% block menubar %}{% endblock %}*/
/* 		</div>*/
/* 		<div class="offcanvas">*/
/* 			*/
/*                         {% block offcanvas %}{% endblock %}*/
/* 		</div>*/
/* 	</div>*/
/*         }*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/bootstrap/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/mooc/AdminAssets/js/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/mooc/AdminAssets/js/Admin.js') }}"></script>*/
/* */
/*             <!-- Put App.js last in your javascript imports -->*/
/*             <script src="{{ asset('bundles/mooc/AdminAssets/js/core/source/App.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
