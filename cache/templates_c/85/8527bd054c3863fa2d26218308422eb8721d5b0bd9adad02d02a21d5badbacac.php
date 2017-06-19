<?php

/* Library/displayuser.twig */
class __TwigTemplate_452de2be2f1c3a6d6c08ffbc5a248122918b25ec3a461cfa78e6da50b6b5a6f7 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/displayuser.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "access", array()) == true)) {
            // line 4
            echo "
<div class=\"row\">
\t<div class=\"container\">
\t<br>
\t\t<div class=\"table-responsive\">
\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["sucess"]) ? $context["sucess"] : null), "html", null, true);
            echo "
\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "
\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["ban"]) ? $context["ban"] : null), "html", null, true);
            echo "
\t\t\t\t<table class=\"table table-hover table-striped\" >
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr style=\"background:#f2d72b;\">
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Firstname</th>
\t\t\t\t\t\t\t<th>Lastname</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Acess Level</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 26
                echo "\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t    <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "user_id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t    <td><em>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "firstname", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t    <td><em>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "lastname", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t    <td><em>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "email", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "access_level", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t   
\t\t\t\t\t    <td>
\t\t\t\t\t\t\t<a href=\"/edit/";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "user_id", array()), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"color:#f2d72b;\"></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td> 
\t\t\t  \t\t\t\t<a href=\"/delete/";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "user_id", array()), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-trash\" onclick=\"return confirm('Are you sure you want to delete?');\" aria-hidden=\"true\" style=\"color:#f2d72b;\"></a>
\t\t\t  \t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
                echo "\" />

\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<form action = \"/ban\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ban\" value=\"ban\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "user_id", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Ban</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t</table>
\t\t\t\t<a href=\"/banned\" class=\"btn btn-warning\" align=\"center\">View Banned Users</a>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"container\">

\t\t";
            // line 60
            if (((isset($context["lastPage"]) ? $context["lastPage"] : null) > 1)) {
                // line 61
                echo "
\t\t";
                // line 62
                $context["extremePagesLimit"] = 3;
                // line 63
                echo "
\t\t";
                // line 64
                $context["nearbyPagesLimit"] = 2;
                // line 65
                echo "
\t\t<div class=\"pagination\">
\t\t    ";
                // line 67
                if (((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1)) {
                    // line 68
                    echo "\t\t        <li><a href=\"";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1), "html", null, true);
                    echo "\" style=\"color:black\">Previous</a></li>
\t\t    ";
                }
                // line 70
                echo "\t\t\t\t\t\t\t\t
\t\t   ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
                    // line 72
                    echo "\t\t\t\t<li ";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) == 1), "html", null, true);
                    echo ">
\t\t\t\t<a href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                    echo "\" style=\"color:black\">";
                    echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                    echo "</a></li>
\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['start'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "
\t\t    ";
                // line 76
                if (((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                    // line 77
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1), "html", null, true);
                    echo "\" style=\"color:black\">Next</a></li>
\t\t    ";
                }
                // line 79
                echo "\t\t</div>
\t\t";
            }
            // line 81
            echo "\t\t\t\t
\t</div>
</div>


";
        }
        // line 87
        echo " 
";
        // line 88
        $this->loadTemplate("/Library/common/footer.twig", "Library/displayuser.twig", 88)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/displayuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  199 => 87,  191 => 81,  187 => 79,  181 => 77,  179 => 76,  176 => 75,  166 => 73,  161 => 72,  157 => 71,  154 => 70,  148 => 68,  146 => 67,  142 => 65,  140 => 64,  137 => 63,  135 => 62,  132 => 61,  130 => 60,  120 => 52,  107 => 45,  98 => 39,  94 => 38,  88 => 35,  82 => 32,  78 => 31,  74 => 30,  70 => 29,  66 => 28,  62 => 26,  58 => 25,  41 => 11,  37 => 10,  33 => 9,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* {% if session.access == true %}*/
/* */
/* <div class="row">*/
/* 	<div class="container">*/
/* 	<br>*/
/* 		<div class="table-responsive">*/
/* 			{{sucess}}*/
/* 			{{success}}*/
/* 			{{ban}}*/
/* 				<table class="table table-hover table-striped" >*/
/* 					<thead>*/
/* 						<tr style="background:#f2d72b;">*/
/* 							<th>ID</th>*/
/* 							<th>Firstname</th>*/
/* 							<th>Lastname</th>*/
/* 							<th>Email</th>*/
/* 							<th>Acess Level</th>*/
/* 							<th></th>*/
/* 							<th></th>*/
/* 							<th></th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 				{% for row in users %}*/
/* 				<tbody>*/
/* 					<tr>*/
/* 					    <td>{{row.user_id}}</td>*/
/* 					    <td><em>{{row.firstname}}</em></td>*/
/* 					    <td><em>{{row.lastname}}</em></td>*/
/* 					    <td><em>{{row.email}}</em></td>*/
/* 					    <td>{{row.access_level}}</td>*/
/* 					   */
/* 					    <td>*/
/* 							<a href="/edit/{{row.user_id}}" class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#f2d72b;"></a>*/
/* 						</td>*/
/* 						<td> */
/* 			  				<a href="/delete/{{row.user_id}}" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure you want to delete?');" aria-hidden="true" style="color:#f2d72b;"></a>*/
/* 			  				<input type="hidden" name="user_id" value="{{user_id}}" />*/
/* */
/* 						</td>*/
/* 						<td>*/
/* 						<form action = "/ban" method="post">*/
/* 							<input type="hidden" name="ban" value="ban" />*/
/* 							<input type="hidden" name="user_id" value="{{row.user_id}}" />*/
/* 							<button type="submit" class="btn btn-danger">Ban</button>*/
/* 						</form>*/
/* 						</td>*/
/* 					</tr>*/
/* 				</tbody>*/
/* 				{% endfor %}*/
/* 				</table>*/
/* 				<a href="/banned" class="btn btn-warning" align="center">View Banned Users</a>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="row">*/
/* 	<div class="container">*/
/* */
/* 		{% if lastPage > 1 %}*/
/* */
/* 		{% set extremePagesLimit = 3 %}*/
/* */
/* 		{% set nearbyPagesLimit = 2 %}*/
/* */
/* 		<div class="pagination">*/
/* 		    {% if currentPage > 1 %}*/
/* 		        <li><a href="{{currentPage-1}}" style="color:black">Previous</a></li>*/
/* 		    {% endif %}*/
/* 								*/
/* 		   {% for start in 1..lastPage %}*/
/* 				<li {{ currentPage == 1 }}>*/
/* 				<a href="{{ start }}" style="color:black">{{ start }}</a></li>*/
/* 		    {% endfor %}*/
/* */
/* 		    {% if currentPage < lastPage %}*/
/* 				<li><a href="{{currentPage+1}}" style="color:black">Next</a></li>*/
/* 		    {% endif %}*/
/* 		</div>*/
/* 		{% endif %}*/
/* 				*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* {% endif %}*/
/*  */
/* {% include '/Library/common/footer.twig' %}*/
