<?php

/* Library/changepassword.twig */
class __TwigTemplate_fbe5274e4c62c2eb41fa678052c8831a54a4bcf9936f1632d014eb0cf90f2759 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/changepassword.twig", 1)->display($context);
        // line 2
        echo "
 <div id=\"add\" style=\" margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Change Password</div>
                <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"></div>
            </div>  
                <div class=\"panel-body\" >
                    <form  class=\"form-horizontal\" method=\"post\" action=\"/change\">

                        <div id=\"div_firstname\" class=\"form-group required\">
                            <label for=\"first name\" class=\"control-label col-md-4  requiredField\"> Please input your current password <span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \">
                                <input  id=\"firstname\" maxlength=\"30\" name=\"currentpassword\" placeholder=\"Current password\" style=\"margin-bottom: 10px\" type=\"text\" />
                            </div>
                        </div>


                        <div id=\"div_email\" class=\"form-group required\">
                            <label for=\"email\" class=\"control-label col-md-4  requiredField\">New Password<span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \"> 
                                <input id=\"email\" name=\"newpassword\" placeholder=\"New Password\" style=\"margin-bottom: 10px\" type=\"password\" />
                            </div>
                        </div>

                        <div id=\"div_password\" class=\"form-group required\">
                             <label for=\"author\" class=\"control-label col-md-4  requiredField\">New Password <span class=\"asteriskField\">*</span> </label>
                             <div class=\"controls col-md-8 \">
                                <input id=\"password\" name=\"newpassword2\" placeholder=\"New Password\" style=\"margin-bottom: 10px\" type=\"password\" />
                            </div>
                        </div>
              
                        <div class=\"form-group\"> 
                            <div class=\"aab controls col-md-4 \"></div>
                            <div class=\"controls col-md-8 \">
                                <input type=\"submit\" name=\"AddBook\" value=\"Add\" id=\"Add\" />
                            </div>
                        </div> 
                        <div class=\"form-group\"> 
                            <div class=\"aab controls col-md-4 \"></div>
                            
                            ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
                            
                        </div>
                    </form> 
                </div>  
        </div>
    </div>


";
        // line 52
        $this->loadTemplate("/Library/common/footer.twig", "Library/changepassword.twig", 52)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/changepassword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 52,  64 => 43,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/*  <div id="add" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*         <div class="panel panel-warning">*/
/*             <div class="panel-heading">*/
/*                 <div class="panel-title">Change Password</div>*/
/*                 <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>*/
/*             </div>  */
/*                 <div class="panel-body" >*/
/*                     <form  class="form-horizontal" method="post" action="/change">*/
/* */
/*                         <div id="div_firstname" class="form-group required">*/
/*                             <label for="first name" class="control-label col-md-4  requiredField"> Please input your current password <span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input  id="firstname" maxlength="30" name="currentpassword" placeholder="Current password" style="margin-bottom: 10px" type="text" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                         <div id="div_email" class="form-group required">*/
/*                             <label for="email" class="control-label col-md-4  requiredField">New Password<span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 "> */
/*                                 <input id="email" name="newpassword" placeholder="New Password" style="margin-bottom: 10px" type="password" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_password" class="form-group required">*/
/*                              <label for="author" class="control-label col-md-4  requiredField">New Password <span class="asteriskField">*</span> </label>*/
/*                              <div class="controls col-md-8 ">*/
/*                                 <input id="password" name="newpassword2" placeholder="New Password" style="margin-bottom: 10px" type="password" />*/
/*                             </div>*/
/*                         </div>*/
/*               */
/*                         <div class="form-group"> */
/*                             <div class="aab controls col-md-4 "></div>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input type="submit" name="AddBook" value="Add" id="Add" />*/
/*                             </div>*/
/*                         </div> */
/*                         <div class="form-group"> */
/*                             <div class="aab controls col-md-4 "></div>*/
/*                             */
/*                             {{message}}*/
/*                             */
/*                         </div>*/
/*                     </form> */
/*                 </div>  */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% include '/Library/common/footer.twig' %}*/
