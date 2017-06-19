<?php

/* Library/profile.twig */
class __TwigTemplate_491dcb53d901adabd7fd3bc0ef74a63303beb1113aeba4f87cc98c1666a4fb18 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/profile.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container-fluid text-center\"> 
\t<div class=\"row\">
\t\t<div class=\"container\" style=\"margin-top:20px; margin-bottom:20px\">
\t\t\t\t<div align=\"center\" >
\t\t\t\t\t<p>Hello , ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : null), "html", null, true);
        echo " !</p>
\t\t\t\t\t<a class=\"btn btn-link\" href=\"/changepassword\">Change Password</a>
\t\t\t\t</div>
\t\t</div>
\t</div>\t\t\t
</div>



";
        // line 16
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "access", array()) == 1)) {
            // line 17
            echo "
";
        } else {
            // line 19
            echo "\t<div class=\"container-fluid text-center\"> 
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<p style=\"font-size:20px; font-family:'Leckerli One', cursive;\">What have i read <i class=\"fa fa-question\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container-fluid text-center\" style=\"border:1px solid black;background-color:orange;\"> 
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["issuedBooks"]) ? $context["issuedBooks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 31
                if (($this->getAttribute($context["row"], "user_id", array()) == true)) {
                    // line 32
                    echo "\t\t\t\t\t\t\t<p><em style=\"font-size:20px\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
                    echo "</em> by 
\t\t\t\t\t\t\t<em style=\"font-size:15px\">";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
                    echo "</em>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 36
$context["row"], "user_id", array()) == false)) {
                    // line 37
                    echo "
\t\t\t\t\t\t\t<p>You dont have any books taken</p>

\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t</div>\t
\t\t\t</div>\t\t
\t</div>
";
        }
        // line 47
        echo "

<div class=\"container-fluid text-center\"> 
\t<div class=\"row\" style=\"background-color:#dddddd;\">
\t\t\t\t<br />
\t\t<div class=\"col-xs-4\" style=\"width: 100%; height: 20px; border-bottom: 1px solid #d4d6d8; text-align: center\">
\t\t\t<span style=\"font-size: 20px; background-color: #dddddd; padding: 0 10px;\"><em>
\t\t\t    \t\t\t\tTop 5 Issued Books </em><!--Padding is optional-->
\t\t\t</span>
\t\t</div>
\t\t<br>
\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookinfo"]) ? $context["bookinfo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 59
            echo "\t\t<div class=\"col-md-2\" align=\"center\" style=\"margin-left: 50px;\">
\t\t\t<br>
\t\t\t<p><a target=\"_blank\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "photo", array()), "html", null, true);
            echo "\"><img  src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "photo", array()), "html", null, true);
            echo "\" class=\"thumbnail\" style=\"display:block\"></img></a></p>
\t\t\t<h4>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</h4>
\t\t\t<p style=\"color:orange\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
            echo "</p>\t
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t<br />

\t\t";
        // line 68
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "access", array()) == "1")) {
            // line 69
            echo "\t\t<div class=\"col-md-12\" style=\"margin-bottom:10px;\">
\t\t\t<a href=\"/books/1\" class=\"btn btn-warning\" >View More  <i class=\"fa fa-book\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t\t";
        } elseif (($this->getAttribute(        // line 72
(isset($context["session"]) ? $context["session"] : null), "access", array()) == "2")) {
            // line 73
            echo "\t\t<div class=\"col-md-12\" style=\"margin-bottom:10px;\">
\t\t\t<a href=\"/issue/1\" class=\"btn btn-warning\" >View More  <i class=\"fa fa-book\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t\t";
        }
        // line 77
        echo "\t\t<br>
\t</div>
</div>

";
        // line 81
        $this->loadTemplate("/Library/common/footer.twig", "Library/profile.twig", 81)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 81,  160 => 77,  154 => 73,  152 => 72,  147 => 69,  145 => 68,  141 => 66,  132 => 63,  128 => 62,  122 => 61,  118 => 59,  114 => 58,  101 => 47,  95 => 43,  88 => 41,  82 => 37,  80 => 36,  74 => 33,  69 => 32,  67 => 31,  64 => 30,  60 => 29,  48 => 19,  44 => 17,  42 => 16,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* <div class="container-fluid text-center"> */
/* 	<div class="row">*/
/* 		<div class="container" style="margin-top:20px; margin-bottom:20px">*/
/* 				<div align="center" >*/
/* 					<p>Hello , {{ firstname }} {{ lastname }} !</p>*/
/* 					<a class="btn btn-link" href="/changepassword">Change Password</a>*/
/* 				</div>*/
/* 		</div>*/
/* 	</div>			*/
/* </div>*/
/* */
/* */
/* */
/* {% if session.access == 1 %}*/
/* */
/* {% else %}*/
/* 	<div class="container-fluid text-center"> */
/* 			<div class="row">*/
/* 				<div class="container">*/
/* 					<p style="font-size:20px; font-family:'Leckerli One', cursive;">What have i read <i class="fa fa-question" aria-hidden="true"></i></p>*/
/* 					</div>*/
/* 					</div>*/
/* 					</div>*/
/* 					<div class="container-fluid text-center" style="border:1px solid black;background-color:orange;"> */
/* 			<div class="row">*/
/* 				<div class="container">*/
/* 					{% for row in issuedBooks %}*/
/* 											*/
/* 						{% if row.user_id == true %}*/
/* 							<p><em style="font-size:20px">{{row.title}}</em> by */
/* 							<em style="font-size:15px">{{row.author}}</em>*/
/* 							</p>*/
/* */
/* 						{% elseif row.user_id == false %}*/
/* */
/* 							<p>You dont have any books taken</p>*/
/* */
/* 						{% endif %}*/
/* 					*/
/* 					{% endfor %}*/
/* 				</div>	*/
/* 			</div>		*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* */
/* <div class="container-fluid text-center"> */
/* 	<div class="row" style="background-color:#dddddd;">*/
/* 				<br />*/
/* 		<div class="col-xs-4" style="width: 100%; height: 20px; border-bottom: 1px solid #d4d6d8; text-align: center">*/
/* 			<span style="font-size: 20px; background-color: #dddddd; padding: 0 10px;"><em>*/
/* 			    				Top 5 Issued Books </em><!--Padding is optional-->*/
/* 			</span>*/
/* 		</div>*/
/* 		<br>*/
/* 		{% for row in bookinfo %}*/
/* 		<div class="col-md-2" align="center" style="margin-left: 50px;">*/
/* 			<br>*/
/* 			<p><a target="_blank" href="{{row.photo}}"><img  src="{{row.photo}}" class="thumbnail" style="display:block"></img></a></p>*/
/* 			<h4>{{row.title}}</h4>*/
/* 			<p style="color:orange">{{row.author}}</p>	*/
/* 		</div>*/
/* 		{% endfor %}*/
/* 		<br />*/
/* */
/* 		{% if session.access == "1" %}*/
/* 		<div class="col-md-12" style="margin-bottom:10px;">*/
/* 			<a href="/books/1" class="btn btn-warning" >View More  <i class="fa fa-book" aria-hidden="true"></i></a>*/
/* 		</div>*/
/* 		{% elseif session.access == "2" %}*/
/* 		<div class="col-md-12" style="margin-bottom:10px;">*/
/* 			<a href="/issue/1" class="btn btn-warning" >View More  <i class="fa fa-book" aria-hidden="true"></i></a>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		<br>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include '/Library/common/footer.twig' %}*/
