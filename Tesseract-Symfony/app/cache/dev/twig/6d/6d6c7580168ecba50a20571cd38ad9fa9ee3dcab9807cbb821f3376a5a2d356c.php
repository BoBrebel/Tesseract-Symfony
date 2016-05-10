<?php

/* TesseractMOOCBundle:Admin:Layout.html.twig */
class __TwigTemplate_ecba51cd90a4a31bd69a298d069f3466ec9fb2c5f8a98a1feef608a6b6bcbb2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'addstylesheets' => array($this, 'block_addstylesheets'),
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'menubar' => array($this, 'block_menubar'),
            'offcanvas' => array($this, 'block_offcanvas'),
            'javascripts' => array($this, 'block_javascripts'),
            'addjavascripts' => array($this, 'block_addjavascripts'),
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
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 21
        $this->displayBlock('script', $context, $blocks);
        // line 22
        echo "    </head>
    <body class=\"menubar-hoverable header-fixed \">
        <header id=\"header\">
            ";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "\t</header>
        <div id=\"base\">
\t\t<div class=\"offcanvas\">
\t\t\t
                        
\t\t</div>
\t\t<div id=\"content\" class=\"container-fluid\">
\t\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "\t\t</div>
\t\t<div id=\"menubar\" class=\"menubar-inverse \">
\t\t\t
                        ";
        // line 37
        $this->displayBlock('menubar', $context, $blocks);
        // line 38
        echo "\t\t</div>
\t\t<div class=\"offcanvas\">
\t\t\t
                        ";
        // line 41
        $this->displayBlock('offcanvas', $context, $blocks);
        // line 42
        echo "\t\t</div>
\t</div>
        }
        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
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
        // line 17
        $this->displayBlock('addstylesheets', $context, $blocks);
        // line 18
        echo "    
        ";
    }

    // line 17
    public function block_addstylesheets($context, array $blocks = array())
    {
        // line 18
        echo "        ";
    }

    // line 21
    public function block_script($context, array $blocks = array())
    {
    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    // line 37
    public function block_menubar($context, array $blocks = array())
    {
    }

    // line 41
    public function block_offcanvas($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/Admin.js"), "html", null, true);
        echo "\"></script>

            <!-- Put App.js last in your javascript imports -->
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/core/source/App.min.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 54
        $this->displayBlock('addjavascripts', $context, $blocks);
        // line 55
        echo "        ";
    }

    // line 54
    public function block_addjavascripts($context, array $blocks = array())
    {
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
        return array (  201 => 54,  197 => 55,  195 => 54,  191 => 53,  185 => 50,  181 => 49,  177 => 48,  173 => 47,  168 => 46,  165 => 45,  160 => 41,  155 => 37,  150 => 33,  145 => 25,  140 => 21,  136 => 18,  133 => 17,  128 => 18,  126 => 17,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  107 => 12,  104 => 11,  98 => 5,  92 => 56,  90 => 45,  85 => 42,  83 => 41,  78 => 38,  76 => 37,  71 => 34,  69 => 33,  60 => 26,  58 => 25,  53 => 22,  51 => 21,  46 => 20,  44 => 11,  35 => 5,  29 => 1,);
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
/*         {% block addstylesheets %}*/
/*         {% endblock %}    */
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
/*             {% block addjavascripts %}{% endblock %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
