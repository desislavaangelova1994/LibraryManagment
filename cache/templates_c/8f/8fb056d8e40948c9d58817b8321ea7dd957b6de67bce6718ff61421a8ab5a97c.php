<?php

/* Library/viewrecommendedbooks.twig */
class __TwigTemplate_5a7dceb39169520a47d3b2de098cb8c18a8751d24bda00f9ac5890e1711623bf extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/viewrecommendedbooks.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"row\">
\t<div class=\"container\">
\t<br>
\t<p align=\"center\" style=\"font-size:30px;font-family:'Gloria Hallelujah', cursive;\">Recommended books</p>
\t\t<div class=\"table-responsive\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["sucess"]) ? $context["sucess"] : null), "html", null, true);
        echo "
\t\t\t<table class=\"table table-hover table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr style=\"background:#f2d72b;\">
\t\t\t\t\t\t<th>Firstname</th>
\t\t\t\t\t\t<th>Lastname</th>
\t\t\t\t\t\t<th>Book's Title</th>
\t\t\t\t\t\t<th>Book's Author</th>
\t\t\t\t\t\t<th>Book's Photo</th>\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            echo "\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"color:#a59a7a\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "firstname", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td style=\"color:#a59a7a\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "lastname", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td >";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "photo", array()), "html", null, true);
            echo "\" class=\"thumbnail\"/></td>
\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</table>

\t\t\t\t\t";
        // line 33
        if (((isset($context["lastPage"]) ? $context["lastPage"] : null) > 1)) {
            // line 34
            echo "
\t    \t\t\t";
            // line 35
            $context["extremePagesLimit"] = 3;
            // line 36
            echo "
\t    \t\t\t";
            // line 37
            $context["nearbyPagesLimit"] = 2;
            // line 38
            echo "
\t    \t\t\t<div class=\"pagination\">
\t            \t";
            // line 40
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1)) {
                // line 41
                echo "\t\t            \t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1), "html", null, true);
                echo "\">Previous</a></li>
\t\t            \t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t
\t\t            \t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
                // line 45
                echo "\t\t\t\t\t\t\t<li ";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) == 1), "html", null, true);
                echo ">
\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                echo "</a></li>
\t\t            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['start'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
\t\t            \t";
            // line 49
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                // line 50
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1), "html", null, true);
                echo "\">Next</a></li>
\t            \t";
            }
            // line 52
            echo "\t            \t</div>
\t    \t";
        }
        // line 54
        echo "\t    \t
            
           <a href=\"/adminpanel\" class=\"btn btn-info\">Go back</a>
            
        
\t</div>
</div>


";
        // line 63
        $this->loadTemplate("/Library/common/footer.twig", "Library/viewrecommendedbooks.twig", 63)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/viewrecommendedbooks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 63,  143 => 54,  139 => 52,  133 => 50,  131 => 49,  128 => 48,  118 => 46,  113 => 45,  109 => 44,  106 => 43,  100 => 41,  98 => 40,  94 => 38,  92 => 37,  89 => 36,  87 => 35,  84 => 34,  82 => 33,  78 => 31,  67 => 26,  63 => 25,  59 => 24,  55 => 23,  51 => 22,  47 => 20,  43 => 19,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* <div class="row">*/
/* 	<div class="container">*/
/* 	<br>*/
/* 	<p align="center" style="font-size:30px;font-family:'Gloria Hallelujah', cursive;">Recommended books</p>*/
/* 		<div class="table-responsive">*/
/* 		{{sucess}}*/
/* 			<table class="table table-hover table-striped">*/
/* 				<thead>*/
/* 					<tr style="background:#f2d72b;">*/
/* 						<th>Firstname</th>*/
/* 						<th>Lastname</th>*/
/* 						<th>Book's Title</th>*/
/* 						<th>Book's Author</th>*/
/* 						<th>Book's Photo</th>					*/
/* 					</tr>*/
/* 				</thead>*/
/* 			{% for row in data %}*/
/* 				<tbody>*/
/* 					<tr>*/
/* 						<td style="color:#a59a7a">{{row.firstname}}</td>*/
/* 						<td style="color:#a59a7a">{{row.lastname}}</td>*/
/* 						<td>{{row.title}}</td>*/
/* 					    <td >{{row.author}}</td>*/
/* 					    <td><img src="{{row.photo}}" class="thumbnail"/></td>*/
/* 			*/
/* 					</tr>*/
/* 				</tbody>*/
/* 			{% endfor %}*/
/* 			</table>*/
/* */
/* 					{% if lastPage > 1 %}*/
/* */
/* 	    			{% set extremePagesLimit = 3 %}*/
/* */
/* 	    			{% set nearbyPagesLimit = 2 %}*/
/* */
/* 	    			<div class="pagination">*/
/* 	            	{% if currentPage > 1 %}*/
/* 		            	<li><a href="{{currentPage-1}}">Previous</a></li>*/
/* 		            	{% endif %}*/
/* 								*/
/* 		            	{% for start in 1..lastPage %}*/
/* 							<li {{ currentPage == 1 }}>*/
/* 							<a href="{{ start }}">{{ start }}</a></li>*/
/* 		            	{% endfor %}*/
/* */
/* 		            	{% if currentPage < lastPage %}*/
/* 						<li><a href="{{currentPage+1}}">Next</a></li>*/
/* 	            	{% endif %}*/
/* 	            	</div>*/
/* 	    	{% endif %}*/
/* 	    	*/
/*             */
/*            <a href="/adminpanel" class="btn btn-info">Go back</a>*/
/*             */
/*         */
/* 	</div>*/
/* </div>*/
/* */
/* */
/* {% include '/Library/common/footer.twig' %}*/
