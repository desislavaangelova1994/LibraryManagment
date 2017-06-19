<?php

/* Library/edituser.twig */
class __TwigTemplate_0b7655f3d9e011c2c41ac2474817bb3259415045294761e360b7d8c6b61ca87d extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/edituser.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "access", array()) == true)) {
            // line 4
            echo "
    <div id=\"add\" style=\" margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Edit User</div>
                <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"></div>
            </div>  

            <div class=\"panel-body\" >
                

                  
                    <form  class=\"form-horizontal\" method=\"post\" action=\"/edit1/";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
            echo "\" >
                    
                        <input type=\"hidden\" name=\"user_id\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
            echo "\" />
                       
                        <div id=\"div_firstname\" class=\"form-group required\">
                            <label for=\"first name\" class=\"control-label col-md-4  requiredField\">Firstname: <span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \">
                                                 
                            <input  id=\"firstname\" maxlength=\"30\" name=\"firstname\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "firstname", array()), "html", null, true);
            echo "\" style=\"margin-bottom: 10px\" type=\"text\" />           
                          
                            </div>
                        </div>

                        <div id=\"div_lastname\" class=\"form-group required\">
                            <label for=\"lastname\" class=\"control-label col-md-4  requiredField\"> Last Name <span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \">
                                <input  id=\"lastname\" name=\"lastname\" style=\"margin-bottom: 10px\" type=\"text\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "lastname", array()), "html", null, true);
            echo "\" />
                            </div>     
                        </div>

                        <div id=\"div_email\" class=\"form-group required\">
                            <label for=\"email\" class=\"control-label col-md-4  requiredField\">Email<span class=\"asteriskField\">*</span> </label>
                            <div class=\"controls col-md-8 \"> 
                                <input id=\"email\" name=\"email\" style=\"margin-bottom: 10px\" type=\"email\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "email", array()), "html", null, true);
            echo "\" />
                            </div>
                        </div>
                        
                        <div id=\"div_accesslevel\" class=\"form-group required\"> 
                            <label for=\"acesslevel\" class=\"control-label col-md-4  requiredField\"><span class=\"asteriskField\">*</span> </label> 
                            <div class=\"controls col-md-8 \">
                                <div class=\"btn-group\">                                
                                    <select name=\"access\">
                                        <option value=\"1\">Administrator</option>
                                        <option value=\"0\">User</option>
                                    </select>                               
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class=\"form-group\"> 
                            <div class=\"aab controls col-md-4 \"></div>
                            <div class=\"controls col-md-8 \">
                                <input class=\"btn btn-default\" type=\"submit\" name=\"edituser\" value=\"Edit\" id=\"edit\" />
                            </div>
                        </div>

                        <div class=\"form-group\"> 
                            <div class=\"aab controls col-md-4 \"></div>
                        </div> 
                         
                    </form>
                    ";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "
                
                    <a href=\"/users/1\" class=\"btn btn-default\">Go back</a>
               
            </div>
                

        </div>
    </div> 
";
        }
        // line 78
        echo "

";
        // line 80
        $this->loadTemplate("/Library/common/footer.twig", "Library/edituser.twig", 80)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/edituser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 80,  120 => 78,  107 => 68,  75 => 39,  65 => 32,  54 => 24,  45 => 18,  40 => 16,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* {% if session.access == true %}*/
/* */
/*     <div id="add" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">*/
/*                 <div class="panel-title">Edit User</div>*/
/*                 <div style="float:right; font-size: 85%; position: relative; top:-10px"></div>*/
/*             </div>  */
/* */
/*             <div class="panel-body" >*/
/*                 */
/* */
/*                   */
/*                     <form  class="form-horizontal" method="post" action="/edit1/{{user_id}}" >*/
/*                     */
/*                         <input type="hidden" name="user_id" value="{{user_id}}" />*/
/*                        */
/*                         <div id="div_firstname" class="form-group required">*/
/*                             <label for="first name" class="control-label col-md-4  requiredField">Firstname: <span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 ">*/
/*                                                  */
/*                             <input  id="firstname" maxlength="30" name="firstname" value="{{getRow.firstname}}" style="margin-bottom: 10px" type="text" />           */
/*                           */
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div id="div_lastname" class="form-group required">*/
/*                             <label for="lastname" class="control-label col-md-4  requiredField"> Last Name <span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input  id="lastname" name="lastname" style="margin-bottom: 10px" type="text" value="{{getRow.lastname}}" />*/
/*                             </div>     */
/*                         </div>*/
/* */
/*                         <div id="div_email" class="form-group required">*/
/*                             <label for="email" class="control-label col-md-4  requiredField">Email<span class="asteriskField">*</span> </label>*/
/*                             <div class="controls col-md-8 "> */
/*                                 <input id="email" name="email" style="margin-bottom: 10px" type="email" value="{{getRow.email}}" />*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div id="div_accesslevel" class="form-group required"> */
/*                             <label for="acesslevel" class="control-label col-md-4  requiredField"><span class="asteriskField">*</span> </label> */
/*                             <div class="controls col-md-8 ">*/
/*                                 <div class="btn-group">                                */
/*                                     <select name="access">*/
/*                                         <option value="1">Administrator</option>*/
/*                                         <option value="0">User</option>*/
/*                                     </select>                               */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         */
/*                         <div class="form-group"> */
/*                             <div class="aab controls col-md-4 "></div>*/
/*                             <div class="controls col-md-8 ">*/
/*                                 <input class="btn btn-default" type="submit" name="edituser" value="Edit" id="edit" />*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group"> */
/*                             <div class="aab controls col-md-4 "></div>*/
/*                         </div> */
/*                          */
/*                     </form>*/
/*                     {{error}}*/
/*                 */
/*                     <a href="/users/1" class="btn btn-default">Go back</a>*/
/*                */
/*             </div>*/
/*                 */
/* */
/*         </div>*/
/*     </div> */
/* {% endif %}*/
/* */
/* */
/* {% include '/Library/common/footer.twig' %}*/
