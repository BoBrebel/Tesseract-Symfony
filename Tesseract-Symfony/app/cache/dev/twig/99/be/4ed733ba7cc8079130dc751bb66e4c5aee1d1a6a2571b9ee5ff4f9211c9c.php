<?php

/* TesseractMOOCBundle:Admin:Layout.html.twig */
class __TwigTemplate_99be4ed733ba7cc8079130dc751bb66e4c5aee1d1a6a2571b9ee5ff4f9211c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
    </head>
    <body class=\"menubar-hoverable header-fixed \">
        <header id=\"header\">
            ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "\t</header>
        <div id=\"base\">
\t\t<div class=\"offcanvas\">
\t\t\t
                        
\t\t</div>
\t\t<div id=\"content\">
\t\t\t";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "\t\t</div>
\t\t<div id=\"menubar\" class=\"menubar-inverse \">
\t\t\t
                        ";
        // line 34
        $this->displayBlock('menubar', $context, $blocks);
        // line 35
        echo "\t\t</div>
\t\t<div class=\"offcanvas\">
\t\t\t
                        ";
        // line 38
        $this->displayBlock('offcanvas', $context, $blocks);
        // line 39
        echo "\t\t</div>
\t</div>
        }
        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
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

    // line 22
    public function block_header($context, array $blocks = array())
    {
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
    }

    // line 34
    public function block_menubar($context, array $blocks = array())
    {
    }

    // line 38
    public function block_offcanvas($context, array $blocks = array())
    {
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/AdminAssets/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Put App.js last in your javascript imports -->
            <script src=\"";
        // line 49
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
        return array (  163 => 49,  157 => 46,  153 => 45,  149 => 44,  144 => 43,  141 => 42,  136 => 38,  131 => 34,  126 => 30,  121 => 22,  115 => 16,  111 => 15,  107 => 14,  103 => 13,  100 => 12,  97 => 11,  91 => 5,  85 => 51,  83 => 42,  78 => 39,  76 => 38,  71 => 35,  69 => 34,  64 => 31,  62 => 30,  53 => 23,  51 => 22,  43 => 18,  41 => 11,  32 => 5,  26 => 1,);
    }
}
