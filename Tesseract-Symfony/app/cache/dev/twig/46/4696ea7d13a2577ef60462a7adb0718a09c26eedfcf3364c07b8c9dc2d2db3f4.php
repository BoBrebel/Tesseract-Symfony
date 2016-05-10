<?php

/* TesseractMOOCBundle:Admin:LineChart.html.twig */
class __TwigTemplate_c9e921b413ff8cfd12e9dbcaaa8ec72a4fdc0e9022fef7f9777e11d53a44c713 extends Twig_Template
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
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>  
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script> 
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script> 
<script type=\"text/javascript\">
    ";
        // line 5
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo " 
</script>  
<div class=\"container-fluid\">
<div class=\"row\">
    
        <div class=\"card\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"card-head\">
                        <header>Site activity</header>
                    </div>
                    <div class=\"card-body height-8\">
                        <div id=\"linechart\" class=\"flot height-7\"></div> 
                    </div>

                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-head\">
                        <header>Today's stats</header>
                    </div>
                    <div class=\"card-body height-8\">
                        <strong>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
        echo "</strong> members
                        <span class=\"pull-right text-success text-sm\">0,18% <i class=\"md md-trending-up\"></i></span>
                        <div class=\"progress progress-hairline\">
                            <div class=\"progress-bar progress-bar-primary-dark\" style=\"width:10%\"></div>
                        </div>
                        291 bounce rates
                        <span class=\"pull-right text-danger text-sm\">21,08% <i class=\"md md-trending-down\"></i></span>
                        <div class=\"progress progress-hairline\">
                            <div class=\"progress-bar progress-bar-danger\" style=\"width:93%\"></div>
                        </div>
                        132 pages
                        <span class=\"pull-right text-success text-sm\">0,18% <i class=\"md md-trending-up\"></i></span>
                        <div class=\"progress progress-hairline\">
                            <div class=\"progress-bar progress-bar-primary-dark\" style=\"width:47%\"></div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle:Admin:LineChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 26,  25 => 5,  19 => 1,);
    }
}
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>  */
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script> */
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script> */
/* <script type="text/javascript">*/
/*     {{ chart(chart) }} */
/* </script>  */
/* <div class="container-fluid">*/
/* <div class="row">*/
/*     */
/*         <div class="card">*/
/*             <div class="row">*/
/*                 <div class="col-md-8">*/
/*                     <div class="card-head">*/
/*                         <header>Site activity</header>*/
/*                     </div>*/
/*                     <div class="card-body height-8">*/
/*                         <div id="linechart" class="flot height-7"></div> */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <div class="card-head">*/
/*                         <header>Today's stats</header>*/
/*                     </div>*/
/*                     <div class="card-body height-8">*/
/*                         <strong>{{nbr}}</strong> members*/
/*                         <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>*/
/*                         <div class="progress progress-hairline">*/
/*                             <div class="progress-bar progress-bar-primary-dark" style="width:10%"></div>*/
/*                         </div>*/
/*                         291 bounce rates*/
/*                         <span class="pull-right text-danger text-sm">21,08% <i class="md md-trending-down"></i></span>*/
/*                         <div class="progress progress-hairline">*/
/*                             <div class="progress-bar progress-bar-danger" style="width:93%"></div>*/
/*                         </div>*/
/*                         132 pages*/
/*                         <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>*/
/*                         <div class="progress progress-hairline">*/
/*                             <div class="progress-bar progress-bar-primary-dark" style="width:47%"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         */
/*     </div>*/
/* </div>*/
/* </div>*/
/* */
