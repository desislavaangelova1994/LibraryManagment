<?php

/* Library/displaybook.twig */
class __TwigTemplate_883f315d912c90765773ed29e66aeedc466aeb40a5416ad8b7535484a6a9ed6c extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/displaybook.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "access", array()) == true)) {
            // line 4
            echo "
<div class=\"row\">
\t<div class=\"container\">
\t\t<div class=\"col-md-3\" style=\"padding-left:0px\">
\t\t\t<br>
\t\t\t<form method=\"post\" action=\"/searchdb\" class=\"form-horizontal\" align=\"left\">
\t\t\t\t\t<div class=\"input-group stylish-input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"search for a book...\" />
\t\t\t\t\t\t<span class=\"input-group-addon\" >
\t\t\t\t\t\t\t<button type=\"submit\" id=\"button\" style=\"background:transparent;border:0;\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</span>  
\t\t\t\t\t</div>
\t\t\t</form> ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "
\t\t\t<br>
\t\t</div>
\t</div>
</div>

<div class=\"row\">
\t<div class=\"container\">
\t\t<div class=\"table-responsive\">
\t
\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["sucess"]) ? $context["sucess"] : null), "html", null, true);
            echo "
\t\t\t\t<table class=\"table table-hover table-striped\" >
\t\t\t\t\t<thead >
\t\t\t\t\t\t<tr style=\"background:#f2d72b;\">
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Photo</th>
\t\t\t\t\t\t\t<th>ISBN</th>
\t\t\t\t\t\t\t<th>Category</th>
\t\t\t\t\t\t\t<th>Format</th>
\t\t\t\t\t\t\t<th>Author</th>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 46
                echo "\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t    ";
                // line 49
                if (($this->getAttribute($context["row"], "photo", array()) == "No Image")) {
                    // line 50
                    echo "\t\t\t\t\t\t    <td><img style=\"width:128px;height:184px;\" src=\"/Library/img/nophoto.jpg\" class=\"thumbnail\" /></td>
\t\t\t\t\t\t    ";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t    <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "photo", array()), "html", null, true);
                    echo "\" class=\"thumbnail\" /></td>
\t\t\t\t\t\t    ";
                }
                // line 54
                echo "\t\t\t\t\t\t    <td><em>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ISBN", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "format", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "status", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td>
\t\t\t\t\t\t\t\t<a href=\"/bookedit/";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\" style=\"color:#f2d72b;\"></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t  \t\t\t\t<a href=\"/deletebook/";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-trash\" onclick=\"return confirm('Are you sure you want to delete?');\" aria-hidden=\"true\" style=\"color:#f2d72b;\"></a>
\t\t\t\t  \t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
                echo "\" />

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t</table>

\t\t\t";
            // line 74
            if (((isset($context["lastPage"]) ? $context["lastPage"] : null) > 1)) {
                // line 75
                echo "
\t    \t\t\t";
                // line 76
                $context["extremePagesLimit"] = 3;
                // line 77
                echo "
\t    \t\t\t";
                // line 78
                $context["nearbyPagesLimit"] = 2;
                // line 79
                echo "
\t    \t\t\t<div class=\"pagination\">
\t            \t\t";
                // line 81
                if (((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1)) {
                    // line 82
                    echo "\t            \t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1), "html", null, true);
                    echo "\">Previous</a></li>
\t            \t\t";
                }
                // line 84
                echo "
\t            \t\t";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
                    // line 86
                    echo "\t\t\t\t\t\t\t<li ";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) == 1), "html", null, true);
                    echo ">
\t\t\t\t\t\t\t<a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["start"], "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t</li>
\t            \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['start'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "
\t            \t\t";
                // line 91
                if (((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                    // line 92
                    echo "\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1), "html", null, true);
                    echo "\">Next</a></li>
\t            \t\t";
                }
                // line 94
                echo "\t            \t</div>
\t    \t";
            }
            // line 96
            echo "\t\t</div>
\t</div>
";
        }
        // line 99
        echo " 
";
        // line 100
        $this->loadTemplate("/Library/common/footer.twig", "Library/displaybook.twig", 100)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/displaybook.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 100,  222 => 99,  217 => 96,  213 => 94,  207 => 92,  205 => 91,  202 => 90,  191 => 87,  186 => 86,  182 => 85,  179 => 84,  173 => 82,  171 => 81,  167 => 79,  165 => 78,  162 => 77,  160 => 76,  157 => 75,  155 => 74,  151 => 72,  139 => 66,  135 => 65,  129 => 62,  124 => 60,  120 => 59,  116 => 58,  112 => 57,  108 => 56,  104 => 55,  99 => 54,  93 => 52,  89 => 50,  87 => 49,  83 => 48,  79 => 46,  75 => 45,  55 => 28,  42 => 18,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* {% if session.access == true %}*/
/* */
/* <div class="row">*/
/* 	<div class="container">*/
/* 		<div class="col-md-3" style="padding-left:0px">*/
/* 			<br>*/
/* 			<form method="post" action="/searchdb" class="form-horizontal" align="left">*/
/* 					<div class="input-group stylish-input-group">*/
/* 						<input type="text" name="search" class="form-control" placeholder="search for a book..." />*/
/* 						<span class="input-group-addon" >*/
/* 							<button type="submit" id="button" style="background:transparent;border:0;">*/
/* 								<span class="glyphicon glyphicon-search"></span>*/
/* 							</button>*/
/* 						</span>  */
/* 					</div>*/
/* 			</form> {{error}}*/
/* 			<br>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="container">*/
/* 		<div class="table-responsive">*/
/* 	*/
/* 			{{sucess}}*/
/* 				<table class="table table-hover table-striped" >*/
/* 					<thead >*/
/* 						<tr style="background:#f2d72b;">*/
/* 							<th>ID</th>*/
/* 							<th>Photo</th>*/
/* 							<th>ISBN</th>*/
/* 							<th>Category</th>*/
/* 							<th>Format</th>*/
/* 							<th>Author</th>*/
/* 							<th>Title</th>*/
/* 							<th>Description</th>*/
/* 							<th>Status</th>*/
/* 							<th></th>*/
/* 							<th></th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 				{% for row in books %}*/
/* 					<tbody>*/
/* 						<tr>*/
/* 						    <td>{{row.book_id}}</td>*/
/* 						    {% if row.photo == "No Image" %}*/
/* 						    <td><img style="width:128px;height:184px;" src="/Library/img/nophoto.jpg" class="thumbnail" /></td>*/
/* 						    {% else %}*/
/* 						    <td><img src="{{row.photo}}" class="thumbnail" /></td>*/
/* 						    {% endif %}*/
/* 						    <td><em>{{row.ISBN}}</em></td>*/
/* 						    <td><em>{{row.category}}</em></td>*/
/* 						    <td><em>{{row.format}}</em></td>*/
/* 						    <td><em>{{row.author}}</em></td>*/
/* 						    <td><em>{{row.title}}</em></td>*/
/* 						    <td><em>{{row.description}}</em></td>*/
/* 						    <td><em>{{row.status}}</em></td>*/
/* 						    <td>*/
/* 								<a href="/bookedit/{{row.book_id}}" class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#f2d72b;"></a>*/
/* 							</td>*/
/* 							<td>*/
/* 				  				<a href="/deletebook/{{row.book_id}}" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure you want to delete?');" aria-hidden="true" style="color:#f2d72b;"></a>*/
/* 				  				<input type="hidden" name="user_id" value="{{user_id}}" />*/
/* */
/* 							</td>*/
/* 						</tr>*/
/* 					</tbody>*/
/* 				{% endfor %}*/
/* 				</table>*/
/* */
/* 			{% if lastPage > 1 %}*/
/* */
/* 	    			{% set extremePagesLimit = 3 %}*/
/* */
/* 	    			{% set nearbyPagesLimit = 2 %}*/
/* */
/* 	    			<div class="pagination">*/
/* 	            		{% if currentPage > 1 %}*/
/* 	            		<li><a href="{{currentPage-1}}">Previous</a></li>*/
/* 	            		{% endif %}*/
/* */
/* 	            		{% for start in 1..lastPage %}*/
/* 							<li {{ currentPage == 1 }}>*/
/* 							<a href="{{ start }}">{{ start }}</a>*/
/* 							</li>*/
/* 	            		{% endfor %}*/
/* */
/* 	            		{% if currentPage < lastPage %}*/
/* 						<li><a href="{{currentPage+1}}">Next</a></li>*/
/* 	            		{% endif %}*/
/* 	            	</div>*/
/* 	    	{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endif %}*/
/*  */
/* {% include '/Library/common/footer.twig' %}*/
