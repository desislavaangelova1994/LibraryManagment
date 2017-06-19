<?php

/* Library/issuebook.twig */
class __TwigTemplate_8b9f3a3497c1729d7fc27e9913ff6704dd22dc6c9e94ccb1dd379987af40972c extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/issuebook.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        if (((isset($context["ban"]) ? $context["ban"] : null) == $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_id", array()))) {
            // line 4
            echo "\t
\t<div class=\"row\">
\t\t<div class=\"container\">
\t\t\t<p align=\"center\" style=\"font-size:30px;color:red;\"> You have been BANNED !<br>
\t\t\tYou are not allowed to issue any more books! <br>
\t\t\tFor more information contact the admin.</p>
\t\t</div>
\t</div>
";
        } else {
            // line 13
            echo "
<div class=\"row\">
\t<div class=\"container\">
\t";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "
\t\t<div class=\"col-md-3\" style=\"padding-left:0px\">
\t\t\t<br>
\t\t\t<form method=\"post\" action=\"/searchdb\" class=\"form-horizontal\">
\t\t\t\t<div class=\"input-group stylish-input-group\">
\t\t\t\t\t<input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"search for a book...\" />
\t\t\t\t\t<span class=\"input-group-addon\" >
\t\t\t\t\t\t<button type=\"submit\" id=\"button\" style=\"background:transparent;border:0;\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</span>  
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<br>
\t\t</div>
\t</div>
</div>


<div class=\"row\">
\t<div class=\"container\">
\t\t<div class=\"table-responsive\">

\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["sucess"]) ? $context["sucess"] : null), "html", null, true);
            echo "
\t\t\t<table class=\"table table-hover table-striped\" >
\t\t\t\t<thead style=\"background:#f2d72b;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Photo</th>
\t\t\t\t\t\t<th>ISBN</th>
\t\t\t\t\t\t<th>Category</th>
\t\t\t\t\t\t<th>Format</th>
\t\t\t\t\t\t<th>Author</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 56
                echo "\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t    <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t    ";
                // line 59
                if (($this->getAttribute($context["row"], "photo", array()) == "No Image")) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t<td><img style=\"width:128px;height:184px;\" src=\"/Library/img/nophoto.jpg\" class=\"thumbnail\" /></td>
\t\t\t\t\t\t\t";
                } else {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t<td><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "photo", array()), "html", null, true);
                    echo "\" class=\"thumbnail\" /></td>
\t\t\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t\t    <td><em>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ISBN", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "category", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "format", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "description", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    <td><em>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "status", array()), "html", null, true);
                echo "</em></td>
\t\t\t\t\t\t    ";
                // line 71
                if (($this->getAttribute($context["row"], "status", array()) == "Not Available")) {
                    // line 72
                    echo "\t\t\t\t\t\t    <td>-
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                } else {
                    // line 75
                    echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"/issuebook/";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> Issue Book</a>
\t\t\t\t  \t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
                    // line 77
                    echo twig_escape_filter($this->env, (isset($context["user_id"]) ? $context["user_id"] : null), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t\t\t</table>
\t\t</div>
\t</div>
</div>
<div class=\"container\">
\t<div class=\"row\">

\t\t\t";
            // line 91
            if (((isset($context["lastPage"]) ? $context["lastPage"] : null) > 1)) {
                // line 92
                echo "
\t    \t\t\t";
                // line 93
                $context["extremePagesLimit"] = 3;
                // line 94
                echo "
\t    \t\t\t";
                // line 95
                $context["nearbyPagesLimit"] = 2;
                // line 96
                echo "
\t    \t\t\t<div class=\"pagination\">
\t            \t\t";
                // line 98
                if (((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1)) {
                    // line 99
                    echo "\t            \t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1), "html", null, true);
                    echo "\">Previous</a></li>
\t            \t\t";
                }
                // line 101
                echo "
\t            \t\t";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) ? $context["lastPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
                    // line 103
                    echo "\t\t\t\t\t\t\t<li ";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) == 1), "html", null, true);
                    echo ">
\t\t\t\t\t\t\t<a href=\"";
                    // line 104
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
                // line 107
                echo "
\t            \t\t";
                // line 108
                if (((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                    // line 109
                    echo "\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1), "html", null, true);
                    echo "\">Next</a></li>
\t            \t\t";
                }
                // line 111
                echo "\t            \t</div>
\t    \t";
            }
            // line 113
            echo "\t</div>
</div>

<div class=\"container\">
\t<div class=\"row\">
\t\t<form action=\"/userpanel\" >
\t\t    <button type=\"submit\" class=\"btn btn-info\">Go back</button>
\t\t</form>
\t</div>
</div>
\t\t
";
        }
        // line 125
        echo "


 
";
        // line 129
        $this->loadTemplate("/Library/common/footer.twig", "Library/issuebook.twig", 129)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/issuebook.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 129,  254 => 125,  240 => 113,  236 => 111,  230 => 109,  228 => 108,  225 => 107,  214 => 104,  209 => 103,  205 => 102,  202 => 101,  196 => 99,  194 => 98,  190 => 96,  188 => 95,  185 => 94,  183 => 93,  180 => 92,  178 => 91,  169 => 84,  160 => 80,  154 => 77,  150 => 76,  147 => 75,  142 => 72,  140 => 71,  136 => 70,  132 => 69,  128 => 68,  124 => 67,  120 => 66,  116 => 65,  111 => 64,  105 => 62,  101 => 60,  99 => 59,  95 => 58,  91 => 56,  87 => 55,  68 => 39,  42 => 16,  37 => 13,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* {% if  ban == session.user_id  %}*/
/* 	*/
/* 	<div class="row">*/
/* 		<div class="container">*/
/* 			<p align="center" style="font-size:30px;color:red;"> You have been BANNED !<br>*/
/* 			You are not allowed to issue any more books! <br>*/
/* 			For more information contact the admin.</p>*/
/* 		</div>*/
/* 	</div>*/
/* {% else %}*/
/* */
/* <div class="row">*/
/* 	<div class="container">*/
/* 	{{success}}*/
/* 		<div class="col-md-3" style="padding-left:0px">*/
/* 			<br>*/
/* 			<form method="post" action="/searchdb" class="form-horizontal">*/
/* 				<div class="input-group stylish-input-group">*/
/* 					<input type="text" name="search" class="form-control" placeholder="search for a book..." />*/
/* 					<span class="input-group-addon" >*/
/* 						<button type="submit" id="button" style="background:transparent;border:0;">*/
/* 							<span class="glyphicon glyphicon-search"></span>*/
/* 						</button>*/
/* 					</span>  */
/* 				</div>*/
/* 			</form>*/
/* 			<br>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <div class="row">*/
/* 	<div class="container">*/
/* 		<div class="table-responsive">*/
/* */
/* 			{{sucess}}*/
/* 			<table class="table table-hover table-striped" >*/
/* 				<thead style="background:#f2d72b;">*/
/* 					<tr>*/
/* 						<th>ID</th>*/
/* 						<th>Photo</th>*/
/* 						<th>ISBN</th>*/
/* 						<th>Category</th>*/
/* 						<th>Format</th>*/
/* 						<th>Author</th>*/
/* 						<th>Title</th>*/
/* 						<th>Description</th>*/
/* 						<th>Status</th>*/
/* 						<th></th>*/
/* 						</tr>*/
/* 				</thead>*/
/* 				{% for row in books %}*/
/* 					<tbody>*/
/* 						<tr>*/
/* 						    <td>{{row.book_id}}</td>*/
/* 						    {% if row.photo == "No Image" %}*/
/* 								<td><img style="width:128px;height:184px;" src="/Library/img/nophoto.jpg" class="thumbnail" /></td>*/
/* 							{% else %}*/
/* 								<td><img src="{{row.photo}}" class="thumbnail" /></td>*/
/* 							{% endif %}*/
/* 						    <td><em>{{row.ISBN}}</em></td>*/
/* 						    <td><em>{{row.category}}</em></td>*/
/* 						    <td><em>{{row.format}}</em></td>*/
/* 						    <td><em>{{row.author}}</em></td>*/
/* 						    <td><em>{{row.title}}</em></td>*/
/* 						    <td><em>{{row.description}}</em></td>*/
/* 						    <td><em>{{row.status}}</em></td>*/
/* 						    {% if row.status == "Not Available" %}*/
/* 						    <td>-*/
/* 							</td>*/
/* 							{% else %}*/
/* 							<td>*/
/* 								<a href="/issuebook/{{row.book_id}}" class="btn btn-warning"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Issue Book</a>*/
/* 				  				<input type="hidden" name="user_id" value="{{user_id}}" />*/
/* 							</td>*/
/* 							{% endif %}*/
/* 							*/
/* 						</tr>*/
/* 					</tbody>*/
/* 				{% endfor %}*/
/* 				</table>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="container">*/
/* 	<div class="row">*/
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
/* 	</div>*/
/* </div>*/
/* */
/* <div class="container">*/
/* 	<div class="row">*/
/* 		<form action="/userpanel" >*/
/* 		    <button type="submit" class="btn btn-info">Go back</button>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* 		*/
/* {% endif %}*/
/* */
/* */
/* */
/*  */
/* {% include '/Library/common/footer.twig' %}*/
