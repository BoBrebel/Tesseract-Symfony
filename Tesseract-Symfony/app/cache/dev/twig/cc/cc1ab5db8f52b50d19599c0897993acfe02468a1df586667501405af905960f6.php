<?php

/* TesseractMOOCBundle:Apprenant:formprofile.html.twig */
class __TwigTemplate_d6877b0891be78a371dd366fee7054ce5e103088f50410b2cbc249acf5923f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " 
<div class=\"col s12 m8 offset-m2 l6 offset-l3\">
    <div class=\"card-panel grey lighten-5 z-depth-1\">
        <div class=\"row valign-wrapper\">
            <div class=\"col s2\">
                <img src=\"../../uploads/pictures/";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photo", array()), "html", null, true);
        echo "\" alt=\"\" id=\"afficheappr\" class=\"circle responsive-img\"> <!-- notice the \"circle\" class -->
            </div>
            <div class=\"col s10\">
                <span class=\"black-text\">
                    Welcome ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
                </span>
            </div>
        </div>
    </div>
</div>
<form method=\"POST\"> 
     ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    <div class=\"row\">

        <div class=\"input-field col s6\">
            <label for=\"user_name\">User Name</label>
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("id" => "user_name", "value" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())));
        echo "

        </div>
    </div>
    <div class=\"row\">

        <div class=\"input-field col s6\">
            <label for=\"first_name\">First Name</label>
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("id" => "first_name", "value" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array())));
        echo "

        </div>
    </div>
    <div class=\"row\">

        <div class=\"input-field col s6\">
            <label for=\"last_name\">Last Name</label>
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("id" => "last_name", "value" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())));
        echo "

        </div>
    </div>
    <div class=\"row\">

        <div class=\"input-field col s6\">
            <label id=\"testtt\" for=\"adresse\">Adresse</label>
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("id" => "adresse", "value" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array())));
        echo "

        </div>

    </div>
             
    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget', array("id" => "ddn"));
        echo "
    <div class=\"row\">
        <div class=\"file-field input-field\">
            <div class=\"btn\">
                <span>File</span>
                <input type=\"file\" id=\"profilepic\">
            </div>
            <div class=\"file-path-wrapper\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'widget');
        echo "
            
        </div>
    </div>

    <div style=\"text-align: center\">
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "update", array()), 'row');
        echo "
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Apprenant:formprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 66,  104 => 60,  93 => 52,  84 => 46,  73 => 38,  62 => 30,  51 => 22,  43 => 17,  33 => 10,  26 => 6,  19 => 1,);
    }
}
/*  */
/* <div class="col s12 m8 offset-m2 l6 offset-l3">*/
/*     <div class="card-panel grey lighten-5 z-depth-1">*/
/*         <div class="row valign-wrapper">*/
/*             <div class="col s2">*/
/*                 <img src="../../uploads/pictures/{{user.photo}}" alt="" id="afficheappr" class="circle responsive-img"> <!-- notice the "circle" class -->*/
/*             </div>*/
/*             <div class="col s10">*/
/*                 <span class="black-text">*/
/*                     Welcome {{user.username}}*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <form method="POST"> */
/*      {{ form_row(form._token) }}*/
/*     <div class="row">*/
/* */
/*         <div class="input-field col s6">*/
/*             <label for="user_name">User Name</label>*/
/*             {{form_widget(form.username,{ 'id': 'user_name','value' : user.username})}}*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/* */
/*         <div class="input-field col s6">*/
/*             <label for="first_name">First Name</label>*/
/*             {{form_widget(form.nom,{ 'id': 'first_name','value' : user.nom})}}*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/* */
/*         <div class="input-field col s6">*/
/*             <label for="last_name">Last Name</label>*/
/*             {{form_widget(form.prenom,{ 'id': 'last_name','value' : user.prenom})}}*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/* */
/*         <div class="input-field col s6">*/
/*             <label id="testtt" for="adresse">Adresse</label>*/
/*             {{form_widget(form.adresse,{ 'id': 'adresse','value' : user.adresse})}}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*              */
/*     {{form_widget(form.dateNaissance,{ 'id': 'ddn'})}}*/
/*     <div class="row">*/
/*         <div class="file-field input-field">*/
/*             <div class="btn">*/
/*                 <span>File</span>*/
/*                 <input type="file" id="profilepic">*/
/*             </div>*/
/*             <div class="file-path-wrapper">*/
/*                 {{form_widget(form.photo)}}*/
/*             */
/*         </div>*/
/*     </div>*/
/* */
/*     <div style="text-align: center">*/
/*         {{form_row(form.update)}}*/
/*     </div>*/
/* </form>*/
