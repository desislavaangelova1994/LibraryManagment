<?php

/* Library/viewissuedbooks.twig */
class __TwigTemplate_751bd37df94d4a54d9953d811d6c56cf6dc8249ab4cab2f8bdf2a8bdeae2fa2f extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/viewissuedbooks.twig", 1)->display($context);
        // line 2
        echo "

<div class=\"row\">
\t<div class=\"container\">
\t<br>
\t<p align=\"center\" style=\"font-size:30px;font-family:'Gloria Hallelujah', cursive;\">Issued books</p>
\t\t<div class=\"table-responsive\">
\t\t";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["sucess"]) ? $context["sucess"] : null), "html", null, true);
        echo "
\t\t\t<table class=\"table table-hover table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr style=\"background:#f2d72b;\">
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Firstname</th>
\t\t\t\t\t\t<th>Lastname</th>
\t\t\t\t\t\t<th>Book Title</th>
\t\t\t\t\t\t<th>Issued Date</th>
\t\t\t\t\t\t<th>Return Date</th>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 23
            echo "\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td >";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "firstname", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "lastname", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "issue_date", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td style=\"color:red\">";
            // line 30
            if (($this->getAttribute($context["row"], "in_date", array()) == null)) {
                echo " - ";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "in_date", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t</table>

\t\t\t";
        // line 36
        if (((isset($context["lastPage"]) ? $context["lastPage"] : null) > 1)) {
            // line 37
            echo "
\t    \t<div class=\"pagination\">
\t            \t";
            // line 39
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1)) {
                // line 40
                echo "\t            \t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1), "html", null, true);
                echo "\" style=\"color:black\">Previous</a></li>
\t            \t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t
\t            \t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
                // line 44
                echo "\t\t\t\t\t\t<li ";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) == 1), "html", null, true);
                echo ">
\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "\" style=\"color:black\">";
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "</a></li>
\t            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['start'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
\t            \t";
            // line 48
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                // line 49
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1), "html", null, true);
                echo "\" style=\"color:black\">Next</a></li>
\t            \t";
            }
            // line 51
            echo "\t        </div>

\t    \t";
        }
        // line 54
        echo "
\t    </div>
</div>

";
        // line 58
        $this->loadTemplate("/Library/common/footer.twig", "Library/viewissuedbooks.twig", 58)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/viewissuedbooks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  145 => 54,  140 => 51,  134 => 49,  132 => 48,  129 => 47,  119 => 45,  114 => 44,  110 => 43,  107 => 42,  101 => 40,  99 => 39,  95 => 37,  93 => 36,  89 => 34,  74 => 30,  70 => 29,  66 => 28,  62 => 27,  58 => 26,  54 => 25,  50 => 23,  46 => 22,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* */
/* <div class="row">*/
/* 	<div class="container">*/
/* 	<br>*/
/* 	<p align="center" style="font-size:30px;font-family:'Gloria Hallelujah', cursive;">Issued books</p>*/
/* 		<div class="table-responsive">*/
/* 		{{sucess}}*/
/* 			<table class="table table-hover table-striped">*/
/* 				<thead>*/
/* 					<tr style="background:#f2d72b;">*/
/* 						<th>ID</th>*/
/* 						<th>Firstname</th>*/
/* 						<th>Lastname</th>*/
/* 						<th>Book Title</th>*/
/* 						<th>Issued Date</th>*/
/* 						<th>Return Date</th>*/
/* 						*/
/* 					</tr>*/
/* 				</thead>*/
/* 			{% for row in results %}*/
/* 				<tbody>*/
/* 					<tr>*/
/* 						<td>{{row.id}}</td>*/
/* 					    <td >{{row.firstname}}</td>*/
/* 					    <td>{{row.lastname}}</td>*/
/* 					    <td>{{row.title}}</td>*/
/* 					    <td>{{row.issue_date}}</td>*/
/* 					    <td style="color:red">{% if row.in_date == null %} - {% else %}{{row.in_date}} {% endif %}</td>*/
/* 					</tr>*/
/* 				</tbody>*/
/* 			{% endfor %}*/
/* 			</table>*/
/* */
/* 			{% if lastPage > 1 %}*/
/* */
/* 	    	<div class="pagination">*/
/* 	            	{% if currentPage > 1 %}*/
/* 	            	<li><a href="{{currentPage-1}}" style="color:black">Previous</a></li>*/
/* 	            	{% endif %}*/
/* 							*/
/* 	            	{% for start in 1..lastPage %}*/
/* 						<li {{ currentPage == 1 }}>*/
/* 						<a href="{{ start }}" style="color:black">{{ start }}</a></li>*/
/* 	            	{% endfor %}*/
/* */
/* 	            	{% if currentPage < lastPage %}*/
/* 					<li><a href="{{currentPage+1}}" style="color:black">Next</a></li>*/
/* 	            	{% endif %}*/
/* 	        </div>*/
/* */
/* 	    	{% endif %}*/
/* */
/* 	    </div>*/
/* </div>*/
/* */
/* {% include '/Library/common/footer.twig' %}*/
/* */
