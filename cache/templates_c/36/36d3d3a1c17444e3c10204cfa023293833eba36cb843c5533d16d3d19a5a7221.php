<?php

/* Library/forgottenpassword.twig */
class __TwigTemplate_281bdbca9222323eee4106f78d48cc53803319f571b47fdfb0beb243b5ab84c9 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/forgottenpassword.twig", 1)->display($context);
        // line 2
        echo "
  <!-- /.content-section-a -->

<div id=\"issuebookbox\" style=\" margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\"  style=\"background-color:#f2d72b;\">
            <div class=\"panel-title\">Forgotten Password</div>
        </div>  
        <div class=\"panel-body\" >
            <form  class=\"form-horizontal\" method=\"post\" action=\"/forgotpost\">

                <div id=\"div_isbn\" class=\"form-group required\">
                    <label for=\"isbn\" class=\"control-label col-md-4  requiredField\">Email <span class=\"asteriskField\">*</span> </label>
                    <div class=\"controls col-md-8 \">
                        <input name=\"email\" type=\"text\"  />
                    </div>
                </div>
                
                <div class=\"form-group\"> 
                    <div class=\"aab controls col-md-4 \"></div>
                        <div class=\"controls col-md-8 \">
                        \t<input type=\"submit\" name=\"submit\" value=\"Forgotten password\" class=\"btn btn-warning\"/>
                \t\t</div>
                </div> 
                <p align=\"center\"> ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "</p>
            </form>
              
        <a href=\"/home\" class=\"btn btn-info\">Go back</a>

        </div>
    </div>
        <!-- /.container -->

</div>
    <!-- /.banner -->

";
        // line 38
        $this->loadTemplate("/Library/common/footer.twig", "Library/forgottenpassword.twig", 38)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/forgottenpassword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 38,  47 => 26,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/*   <!-- /.content-section-a -->*/
/* */
/* <div id="issuebookbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading"  style="background-color:#f2d72b;">*/
/*             <div class="panel-title">Forgotten Password</div>*/
/*         </div>  */
/*         <div class="panel-body" >*/
/*             <form  class="form-horizontal" method="post" action="/forgotpost">*/
/* */
/*                 <div id="div_isbn" class="form-group required">*/
/*                     <label for="isbn" class="control-label col-md-4  requiredField">Email <span class="asteriskField">*</span> </label>*/
/*                     <div class="controls col-md-8 ">*/
/*                         <input name="email" type="text"  />*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="form-group"> */
/*                     <div class="aab controls col-md-4 "></div>*/
/*                         <div class="controls col-md-8 ">*/
/*                         	<input type="submit" name="submit" value="Forgotten password" class="btn btn-warning"/>*/
/*                 		</div>*/
/*                 </div> */
/*                 <p align="center"> {{ success }}{{ error }}</p>*/
/*             </form>*/
/*               */
/*         <a href="/home" class="btn btn-info">Go back</a>*/
/* */
/*         </div>*/
/*     </div>*/
/*         <!-- /.container -->*/
/* */
/* </div>*/
/*     <!-- /.banner -->*/
/* */
/* {% include '/Library/common/footer.twig' %}*/
