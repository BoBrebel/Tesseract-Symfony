<?php

/* TesseractMOOCBundle:LayoutApprenant:layoutapprenant.html.twig */
class __TwigTemplate_3dacaf9d4cb4079ebcda86eaa62b4b3daf2feb5d196537bcf8aaf72b5ab5e9f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'iconeprofile' => array($this, 'block_iconeprofile'),
            'matieres' => array($this, 'block_matieres'),
            'afficherMatieres' => array($this, 'block_afficherMatieres'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>

        <!--Import Google Icon Font-->
        <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Import materialize.css-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css\"  media=\"screen,projection\"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>  

        <script type=\"text/javascript\"  src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/scripts/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"  src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/scripts/redirection.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/styles/css/cssh.css"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/styles/css/cssh.css"), "html", null, true);
        echo "\">




        <ul id=\"dropdown1\" class=\"dropdown-content\">
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tesseract_profile_apprenant");
        echo "\">My profiles</a></li>
            <li><a href=\"#!\">My Messages</a></li>
            <li><a href=\"#!\">My Courses</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
        </ul>


        <nav>



            <div class=\"nav-wrapper\">
                <a href=\"#!\" class=\"brand-logo\">Tesseract Coding</a>



                <ul class=\"right hide-on-med-and-down\">
                    ";
        // line 45
        echo "                    <!-- Dropdown Trigger -->
                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">";
        // line 46
        $this->displayBlock('iconeprofile', $context, $blocks);
        echo "<i class=\"material-icons right\">arrow_drop_down</i></a></li>
                </ul>
                <form>
                    <div class=\"input-field\"style=\"width: 400px;position: relative; right: -30%;\">
                        <input id=\"search\" type=\"search\" required>
                        <label for=\"search\"><i class=\"material-icons\">search</i></label>
                        <i class=\"material-icons\">close</i>
                    </div>
                </form>
            </div>

        </nav>




    </body>
    <div id=\"wrap\">

        <div id='cssmenu' style=\"height: 100%;border-right: 4px solid #1b9bff;\">
            <ul>
                <li><a href='#'><span>Courses</span></a></li>
                    ";
        // line 72
        echo "                    ";
        $this->displayBlock('matieres', $context, $blocks);
        // line 73
        echo "            </ul>
        </div>

        </br>               

        <div id=\"block\" > 

            <div style=\"height: 100%\">

            ";
        // line 82
        $this->displayBlock('afficherMatieres', $context, $blocks);
        // line 83
        echo "        </div>   





    </div>

</div>
</body>   


</html>";
    }

    // line 46
    public function block_iconeprofile($context, array $blocks = array())
    {
    }

    // line 72
    public function block_matieres($context, array $blocks = array())
    {
        echo " ";
    }

    // line 82
    public function block_afficherMatieres($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:LayoutApprenant:layoutapprenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 82,  149 => 72,  144 => 46,  128 => 83,  126 => 82,  115 => 73,  112 => 72,  87 => 46,  84 => 45,  67 => 29,  60 => 25,  51 => 19,  47 => 18,  39 => 13,  35 => 12,  22 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/* */
/*         <!--Import Google Icon Font-->*/
/*         <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*         <!--Import materialize.css-->*/
/*         <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css"  media="screen,projection"/>*/
/* */
/*         <!--Let browser know website is optimized for mobile-->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  */
/* */
/*         <script type="text/javascript"  src="{{asset('bundles/mooc/scripts/jquery.js')}}"></script>*/
/*         <script type="text/javascript"  src="{{asset('bundles/mooc/scripts/redirection.js')}}"></script>*/
/*     </head>*/
/*     <body>*/
/*         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/mooc/styles/css/cssh.css')}}"></script>*/
/*         <link rel="stylesheet" href="{{asset('bundles/mooc/styles/css/cssh.css')}}">*/
/* */
/* */
/* */
/* */
/*         <ul id="dropdown1" class="dropdown-content">*/
/*             <li><a href="{{path('tesseract_profile_apprenant')}}">My profiles</a></li>*/
/*             <li><a href="#!">My Messages</a></li>*/
/*             <li><a href="#!">My Courses</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="{{ path('fos_user_security_logout') }}">Logout</a></li>*/
/*         </ul>*/
/* */
/* */
/*         <nav>*/
/* */
/* */
/* */
/*             <div class="nav-wrapper">*/
/*                 <a href="#!" class="brand-logo">Tesseract Coding</a>*/
/* */
/* */
/* */
/*                 <ul class="right hide-on-med-and-down">*/
/*                     {#    <li><a href="sass.html">Sass</a></li>*/
/*                         <li><a href="badges.html">Components</a></li>#}*/
/*                     <!-- Dropdown Trigger -->*/
/*                     <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{% block iconeprofile %}{% endblock %}<i class="material-icons right">arrow_drop_down</i></a></li>*/
/*                 </ul>*/
/*                 <form>*/
/*                     <div class="input-field"style="width: 400px;position: relative; right: -30%;">*/
/*                         <input id="search" type="search" required>*/
/*                         <label for="search"><i class="material-icons">search</i></label>*/
/*                         <i class="material-icons">close</i>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/* */
/*         </nav>*/
/* */
/* */
/* */
/* */
/*     </body>*/
/*     <div id="wrap">*/
/* */
/*         <div id='cssmenu' style="height: 100%;border-right: 4px solid #1b9bff;">*/
/*             <ul>*/
/*                 <li><a href='#'><span>Courses</span></a></li>*/
/*                     {#<li><a href='#'><span>Home</span></a></li>*/
/*                    */
/*                     <li><a href='#'><span>About</span></a></li>*/
/*                     <li class='last'><a href='#'><span>Contact</span></a></li>#}*/
/*                     {% block matieres %} {% endblock %}*/
/*             </ul>*/
/*         </div>*/
/* */
/*         </br>               */
/* */
/*         <div id="block" > */
/* */
/*             <div style="height: 100%">*/
/* */
/*             {% block afficherMatieres %}{% endblock %}*/
/*         </div>   */
/* */
/* */
/* */
/* */
/* */
/*     </div>*/
/* */
/* </div>*/
/* </body>   */
/* */
/* */
/* </html>*/
