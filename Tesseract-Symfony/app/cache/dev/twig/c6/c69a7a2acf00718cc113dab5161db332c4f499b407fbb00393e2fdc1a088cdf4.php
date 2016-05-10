<?php

/* TesseractMOOCBundle:LayoutApprenant:baset.html.twig */
class __TwigTemplate_30a33983143400e3193a11b4fc5e14e40e3d7b9e0e0eb449f103eb997186d099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scripting' => array($this, 'block_scripting'),
            'menu' => array($this, 'block_menu'),
            'cont' => array($this, 'block_cont'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- Character set configuration -->
        <meta charset=\"UTF-8\">

        <!-- Viewport configuration, scaling options -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

        <!-- Hide the browser UI -->
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">

        <!-- MS tile icons -->
        <meta name=\"msapplication-TileColor\" content=\"#69f0ae\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/mstile-144x144.png"), "html", null, true);
        echo "\">

        <!-- Android toolbar color -->
        <meta name=\"theme-color\" content=\"#69f0ae\">

        <!-- Apple touch icons -->
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-57x57.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-60x60.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-76x76.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-120x120.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-144x144.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-152x152.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-180x180.png"), "html", null, true);
        echo "\">

        <!-- Android touch icons -->
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/android-chrome-192x192.png"), "html", null, true);
        echo "\" sizes=\"192x192\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/favicon-96x96.png"), "html", null, true);
        echo "\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"16x16\">

        <!-- Web app manifest file -->
        <link rel=\"manifest\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/manifest.json"), "html", null, true);
        echo "\">

        <!-- Stylesheets -->
        <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/libs/materialize/css/materialize.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/libs/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/styles/css/wata.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/styles/css/wata.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/styles/forum.css"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!-- Site title -->
        <title>Tesseract coding</title>
        ";
        // line 49
        $this->displayBlock('scripting', $context, $blocks);
        // line 51
        echo "    </head>
    <body>
        <div id=\"wrapper\">



            <!-- Navigation bar -->
            <div class=\"navbar-fixed\" id=\"nav\">
                <nav>
                    <div class=\"nav-wrapper\">

                        <!-- Site name -->
                        <a href=\"/\" class=\"brand-logo\"><span><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/tcwlogo.png"), "html", null, true);
        echo "\"></span></a>

                        <!-- Mobile menu button -->
                        <a href=\"#\" data-activates=\"mobile-menu\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a>

                        <!-- Static menu -->
                        <ul class=\"right hide-on-med-and-down table-of-contents\">
                            ";
        // line 70
        $this->displayBlock('menu', $context, $blocks);
        // line 72
        echo "                        </ul>

                        <!-- Mobile menu, make sure it is equal to the statis menu -->
                        <ul class=\"side-nav\" id=\"mobile-menu\">
                            <li><a href=\"#triangles\">Home</a></li>
                            <li><a href=\"#services\">Services</a></li>
                            <li><a href=\"#works\">Works</a></li>
                            <li><a href=\"#about\">About</a></li>
                            <li><a href=\"#prices\">Organisation</a></li>
                            <li><a href=\"#blog\">Blog</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                            
        </div>
                            
                        </ul>
                    </div>
                </nav>
            </div>
            
            ";
        // line 91
        $this->displayBlock('cont', $context, $blocks);
        // line 92
        echo "            
            <!-- Footer section -->
            <footer class=\"page-footer\">
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        © 2016 tesseract | <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/ajax/pages/privacy-policy.html"), "html", null, true);
        echo "\" class=\"ajax-link\">Privacy policy</a>

                        <!-- Social icons -->
                        <span class=\"social right\">
                            <a href=\"#!\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#!\"><i class=\"fa fa-vk\"></i></a>
                            <a href=\"#!\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"#!\"><i class=\"fa fa-github\"></i></a>
                            <a href=\"#!\"><i class=\"fa fa-deviantart\"></i></a>
                        </span>
                    </div>
                </div>
            </footer>

        </div>

        <!-- Ajax box container, waiting for its turn -->
        <div id=\"ajax-box\" class=\"translate\"></div>

        <!-- Scripts -->
        <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/scripts/config.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/scripts/build.js"), "html", null, true);
        echo "\"></script>
              <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/scripts/mooc.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 49
    public function block_scripting($context, array $blocks = array())
    {
        // line 50
        echo "        ";
    }

    // line 70
    public function block_menu($context, array $blocks = array())
    {
        // line 71
        echo "                            ";
    }

    // line 91
    public function block_cont($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:LayoutApprenant:baset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 91,  239 => 71,  236 => 70,  232 => 50,  229 => 49,  222 => 120,  218 => 119,  214 => 118,  190 => 97,  183 => 92,  181 => 91,  160 => 72,  158 => 70,  148 => 63,  134 => 51,  132 => 49,  125 => 45,  121 => 44,  117 => 43,  113 => 42,  109 => 41,  103 => 38,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  79 => 29,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  55 => 23,  51 => 22,  47 => 21,  38 => 15,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <!-- Character set configuration -->*/
/*         <meta charset="UTF-8">*/
/* */
/*         <!-- Viewport configuration, scaling options -->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/* */
/*         <!-- Hide the browser UI -->*/
/*         <meta name="apple-mobile-web-app-capable" content="yes">*/
/* */
/*         <!-- MS tile icons -->*/
/*         <meta name="msapplication-TileColor" content="#69f0ae">*/
/*         <meta name="msapplication-TileImage" content="{{asset('bundles/mooc/favicons/mstile-144x144.png')}}">*/
/* */
/*         <!-- Android toolbar color -->*/
/*         <meta name="theme-color" content="#69f0ae">*/
/* */
/*         <!-- Apple touch icons -->*/
/*         <link rel="apple-touch-icon" sizes="57x57" href="{{asset('bundles/mooc/favicons/apple-touch-icon-57x57.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="60x60" href="{{asset('bundles/mooc/favicons/apple-touch-icon-60x60.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="72x72" href="{{asset('bundles/mooc/favicons/apple-touch-icon-72x72.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="76x76" href="{{asset('bundles/mooc/favicons/apple-touch-icon-76x76.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="114x114" href="{{asset('bundles/mooc/favicons/apple-touch-icon-114x114.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="120x120" href="{{asset('bundles/mooc/favicons/apple-touch-icon-120x120.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="144x144" href="{{asset('bundles/mooc/favicons/apple-touch-icon-144x144.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="152x152" href="{{asset('bundles/mooc/favicons/apple-touch-icon-152x152.png')}}">*/
/*         <link rel="apple-touch-icon" sizes="180x180" href="{{asset('bundles/mooc/favicons/apple-touch-icon-180x180.png')}}">*/
/* */
/*         <!-- Android touch icons -->*/
/*         <link rel="icon" type="image/png" href="{{asset('bundles/mooc/favicons/favicon-32x32.png')}}" sizes="32x32">*/
/*         <link rel="icon" type="image/png" href="{{asset('bundles/mooc/favicons/android-chrome-192x192.png')}}" sizes="192x192">*/
/*         <link rel="icon" type="image/png" href="{{asset('bundles/mooc/favicons/favicon-96x96.png')}}" sizes="96x96">*/
/*         <link rel="icon" type="image/png" href="{{asset('bundles/mooc/favicons/favicon-16x16.png')}}" sizes="16x16">*/
/* */
/*         <!-- Web app manifest file -->*/
/*         <link rel="manifest" href="{{asset('bundles/mooc/favicons/manifest.json')}}">*/
/* */
/*         <!-- Stylesheets -->*/
/*         <link rel="stylesheet" href="{{asset('bundles/mooc/libs/materialize/css/materialize.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('bundles/mooc/libs/font-awesome/css/font-awesome.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('bundles/mooc/styles/css/wata.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('bundles/mooc/styles/css/wata.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('bundles/mooc/styles/forum.css')}}">*/
/*         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*         <!-- Site title -->*/
/*         <title>Tesseract coding</title>*/
/*         {% block scripting %}*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <div id="wrapper">*/
/* */
/* */
/* */
/*             <!-- Navigation bar -->*/
/*             <div class="navbar-fixed" id="nav">*/
/*                 <nav>*/
/*                     <div class="nav-wrapper">*/
/* */
/*                         <!-- Site name -->*/
/*                         <a href="/" class="brand-logo"><span><img src="{{asset('bundles/mooc/images/tcwlogo.png')}}"></span></a>*/
/* */
/*                         <!-- Mobile menu button -->*/
/*                         <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>*/
/* */
/*                         <!-- Static menu -->*/
/*                         <ul class="right hide-on-med-and-down table-of-contents">*/
/*                             {% block menu %}*/
/*                             {% endblock %}*/
/*                         </ul>*/
/* */
/*                         <!-- Mobile menu, make sure it is equal to the statis menu -->*/
/*                         <ul class="side-nav" id="mobile-menu">*/
/*                             <li><a href="#triangles">Home</a></li>*/
/*                             <li><a href="#services">Services</a></li>*/
/*                             <li><a href="#works">Works</a></li>*/
/*                             <li><a href="#about">About</a></li>*/
/*                             <li><a href="#prices">Organisation</a></li>*/
/*                             <li><a href="#blog">Blog</a></li>*/
/*                             <li><a href="#contact">Contact</a></li>*/
/*                             */
/*         </div>*/
/*                             */
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             */
/*             {% block cont %}{% endblock %}*/
/*             */
/*             <!-- Footer section -->*/
/*             <footer class="page-footer">*/
/*                 <div class="footer-copyright">*/
/*                     <div class="container">*/
/*                         © 2016 tesseract | <a href="{{asset('bundles/mooc/ajax/pages/privacy-policy.html')}}" class="ajax-link">Privacy policy</a>*/
/* */
/*                         <!-- Social icons -->*/
/*                         <span class="social right">*/
/*                             <a href="#!"><i class="fa fa-facebook"></i></a>*/
/*                             <a href="#!"><i class="fa fa-vk"></i></a>*/
/*                             <a href="#!"><i class="fa fa-google-plus"></i></a>*/
/*                             <a href="#!"><i class="fa fa-github"></i></a>*/
/*                             <a href="#!"><i class="fa fa-deviantart"></i></a>*/
/*                         </span>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/* */
/*         </div>*/
/* */
/*         <!-- Ajax box container, waiting for its turn -->*/
/*         <div id="ajax-box" class="translate"></div>*/
/* */
/*         <!-- Scripts -->*/
/*         <script src="https://maps.googleapis.com/maps/api/js"></script>*/
/*         <script src="{{asset('bundles/mooc/scripts/config.js')}}"></script>*/
/*         <script src="{{asset('bundles/mooc/scripts/build.js')}}"></script>*/
/*               <script src="{{asset('bundles/mooc/scripts/mooc.js')}}"></script>*/
/*     </body>*/
/* </html>*/
