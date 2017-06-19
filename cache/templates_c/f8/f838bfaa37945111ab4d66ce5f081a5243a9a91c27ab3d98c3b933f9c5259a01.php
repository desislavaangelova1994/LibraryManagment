<?php

/* Library/bantable.twig */
class __TwigTemplate_da316ed6255ee815f2577dac513bdf61e1f44f4462e81c68925d60bee3ebd26e extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/bantable.twig", 1)->display($context);
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
\t\t\t\t<table class=\"table table-hover table-striped\" >
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr style=\"background:#f2d72b;\">
\t\t\t\t\t\t\t<th>User ID</th>
\t\t\t\t\t\t\t<th>Firstname</th>
\t\t\t\t\t\t\t<th>Lastname</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["banned"]) ? $context["banned"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 20
                echo "\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t    <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "user_id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t    <td><em>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "firstname", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t    <td><em>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "lastname", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t    <td><em>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "email", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<form action = \"/unban\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ban\" value=\"ban\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "user_id", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">UnBan</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t\t</table>
\t\t</div>
\t\t<a href=\"/users/1\" class=\"btn btn-default\">Go back</a>
\t</div>
</div>



";
        }
        // line 45
        echo " 
";
        // line 46
        $this->loadTemplate("/Library/common/footer.twig", "Library/bantable.twig", 46)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/bantable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 46,  94 => 45,  83 => 36,  70 => 29,  63 => 25,  59 => 24,  55 => 23,  51 => 22,  47 => 20,  43 => 19,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
/* 				<table class="table table-hover table-striped" >*/
/* 					<thead>*/
/* 						<tr style="background:#f2d72b;">*/
/* 							<th>User ID</th>*/
/* 							<th>Firstname</th>*/
/* 							<th>Lastname</th>*/
/* 							<th>Email</th>*/
/* 							<th></th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 				{% for row in banned %}*/
/* 				<tbody>*/
/* 					<tr>*/
/* 					    <td>{{row.user_id}}</td>*/
/* 					    <td><em>{{row.firstname}}</em></td>*/
/* 					    <td><em>{{row.lastname}}</em></td>*/
/* 					    <td><em>{{row.email}}</em></td>*/
/* 						<td>*/
/* 						<form action = "/unban" method="post">*/
/* 							<input type="hidden" name="ban" value="ban" />*/
/* 							<input type="hidden" name="user_id" value="{{row.user_id}}" />*/
/* 							<button type="submit" class="btn btn-danger">UnBan</button>*/
/* 						</form>*/
/* 						</td>*/
/* 					</tr>*/
/* 				</tbody>*/
/* 				{% endfor %}*/
/* 				</table>*/
/* 		</div>*/
/* 		<a href="/users/1" class="btn btn-default">Go back</a>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endif %}*/
/*  */
/* {% include '/Library/common/footer.twig' %}*/
