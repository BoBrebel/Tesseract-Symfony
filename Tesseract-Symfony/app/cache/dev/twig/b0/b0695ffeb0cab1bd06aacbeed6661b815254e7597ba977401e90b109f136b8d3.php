<?php

/* TesseractMOOCBundle:LayoutApprenant:layoutsubscribe.html.twig */
class __TwigTemplate_bbac0ca61f080fda74fdb3edd03281fc496d5535f5ada0eced3d0033f686bd9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'video' => array($this, 'block_video'),
            'contenu' => array($this, 'block_contenu'),
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
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/scripts/jquery.js"), "html", null, true);
        echo "\"></script>
        
    </head>
    <body>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js\"></script>
      <nav>
    <div class=\"nav-wrapper\">
      <div class=\"col s12\">
          ";
        // line 20
        $this->displayBlock('nav', $context, $blocks);
        // line 21
        echo "         
      </div>
    </div>
  </nav>
          <div style=\"height: 100%;width: 40%; display: inline-block ; \" >
              
                ";
        // line 27
        $this->displayBlock('video', $context, $blocks);
        // line 28
        echo "              
          </div>
                <div style=\"height: 100%;width: 60%; float: right;\">
                    
                      ";
        // line 32
        $this->displayBlock('contenu', $context, $blocks);
        // line 33
        echo "                    
                </div>
           <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terminer_cours_chap_appr", array("id" => $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "idCours", array()), "id", array()))), "html", null, true);
        echo "\">Next</a>
    </body>
</html>";
    }

    // line 20
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 27
    public function block_video($context, array $blocks = array())
    {
        echo " ";
    }

    // line 32
    public function block_contenu($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:LayoutApprenant:layoutsubscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  83 => 27,  77 => 20,  70 => 35,  66 => 33,  64 => 32,  58 => 28,  56 => 27,  48 => 21,  46 => 20,  34 => 11,  22 => 1,);
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
/*         <script type="text/javascript"  src="{{asset('bundles/mooc/scripts/jquery.js')}}"></script>*/
/*         */
/*     </head>*/
/*     <body>*/
/*         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>*/
/*       <nav>*/
/*     <div class="nav-wrapper">*/
/*       <div class="col s12">*/
/*           {% block nav %} {% endblock %}*/
/*          */
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/*           <div style="height: 100%;width: 40%; display: inline-block ; " >*/
/*               */
/*                 {% block video %} {% endblock %}*/
/*               */
/*           </div>*/
/*                 <div style="height: 100%;width: 60%; float: right;">*/
/*                     */
/*                       {% block contenu %} {% endblock %}*/
/*                     */
/*                 </div>*/
/*            <a href="{{path('terminer_cours_chap_appr',{'id':session.idCours.id})}}">Next</a>*/
/*     </body>*/
/* </html>*/
