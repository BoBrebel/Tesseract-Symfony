<?php

/* TesseractMOOCBundle:Admin:TicketReply.html.twig */
class __TwigTemplate_4269af941713886bf63f9108ae0b6a3dd7cf1b4467d7541510cf6cbbb9baa283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TesseractMOOCBundle:Admin:Admindashboard.html.twig", "TesseractMOOCBundle:Admin:TicketReply.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TesseractMOOCBundle:Admin:Admindashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                    <div class=\"form-group floating-label\">
                        <input type=\"text\" class=\"form-control\" id=\"regular2\" name=\"mail\" readonly>
                        <label for=\"regular2\"> to: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "</label>
                    </div>
                    
                    <div class=\"form-group floating-label\">
                        <textarea name=\"message\" id=\"textarea2\" class=\"form-control\" rows=\"3\" placeholder=\"\"></textarea>
                        <label for=\"textarea2\">Reply</label>
                    </div>
                    <div class=\"form-group floating-label\">
                       
                        <a class= \"btn ink-reaction btn-floating-action btn-primary\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tesseract_mooc_admin_tickets_sendMail", array("mail" => (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")))), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i></a></td>
                        <label for=\"regular2\"></label>
                    </div> 
                    
            </div><!--end .card-body -->
        </div><!--end .card -->
    </div><!--end .col -->

";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Admin:TicketReply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "TesseractMOOCBundle:Admin:Admindashboard.html.twig" %}*/
/* {% block content %}*/
/*     <div class="col-lg-12">*/
/*         <div class="card">*/
/*             <div class="card-body">*/
/*                     <div class="form-group floating-label">*/
/*                         <input type="text" class="form-control" id="regular2" name="mail" readonly>*/
/*                         <label for="regular2"> to: {{mail}}</label>*/
/*                     </div>*/
/*                     */
/*                     <div class="form-group floating-label">*/
/*                         <textarea name="message" id="textarea2" class="form-control" rows="3" placeholder=""></textarea>*/
/*                         <label for="textarea2">Reply</label>*/
/*                     </div>*/
/*                     <div class="form-group floating-label">*/
/*                        */
/*                         <a class= "btn ink-reaction btn-floating-action btn-primary" href="{{ path('tesseract_mooc_admin_tickets_sendMail',{'mail':mail})}}"><i class="fa fa-reply"></i></a></td>*/
/*                         <label for="regular2"></label>*/
/*                     </div> */
/*                     */
/*             </div><!--end .card-body -->*/
/*         </div><!--end .card -->*/
/*     </div><!--end .col -->*/
/* */
/* {% endblock %}*/
