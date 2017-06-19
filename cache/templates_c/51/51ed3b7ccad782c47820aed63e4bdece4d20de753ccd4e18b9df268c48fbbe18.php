<?php

/* Library/myrecommendedbooks.twig */
class __TwigTemplate_40b9f6a14a2575ebede958971975dc4c6413379178dc56481f3feebb5abeb6df extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/myrecommendedbooks.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"row\">
\t<div class=\"container\">
    ";
        // line 5
        if (((isset($context["info"]) ? $context["info"] : null) == (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 6
            echo "\t\t<p align=\"center\">You dont have any recommended books.</p>

    ";
        } else {
            // line 9
            echo "    </div>
</div>

<div class=\"row\">
\t<div class=\"container\">
\t\t<div class=\"table-responsive\">
     \t<br>
\t\t    <table class=\"table table-hover table-striped\"  >
\t\t\t\t<thead >
\t\t\t\t\t<tr style=\"background:#f2d72b;\">
\t\t\t\t\t\t<th>Photo</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Author</th>
\t\t\t\t\t\t<th>ISBN</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 27
                echo "\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "photo", array()), "html", null, true);
                echo "\" class=\"thumbnail\"></img></td>
\t\t\t\t\t    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t    <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ISBN", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t    <td>
\t\t\t\t\t\t    <form method=\"post\" action=\"/deleterecomendation\">
\t\t\t\t  \t\t\t\t<input type=\"hidden\" name=\"ID\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ID", array()), "html", null, true);
                echo "\" />
\t\t\t\t  \t\t\t\t<button class=\"btn btn-danger\" type=\"submit\"  onclick=\"return confirm('Are you sure you want to delete?');\" aria-hidden=\"true\" > <i class=\"fa fa-trash-o fa-lg\"></i>Delete</a></button>
\t\t\t\t  \t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t</table>
\t
    ";
        }
        // line 45
        echo "        <form action=\"/userpanel\" >
                <button type=\"submit\" class=\"btn btn-info\">Go back</button>
        </form>
    </div>
</div>



";
        // line 53
        $this->loadTemplate("/Library/common/footer.twig", "Library/myrecommendedbooks.twig", 53)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/myrecommendedbooks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 53,  96 => 45,  91 => 42,  78 => 35,  72 => 32,  68 => 31,  64 => 30,  60 => 29,  56 => 27,  52 => 26,  33 => 9,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* <div class="row">*/
/* 	<div class="container">*/
/*     {% if info == empty %}*/
/* 		<p align="center">You dont have any recommended books.</p>*/
/* */
/*     {% else %}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="container">*/
/* 		<div class="table-responsive">*/
/*      	<br>*/
/* 		    <table class="table table-hover table-striped"  >*/
/* 				<thead >*/
/* 					<tr style="background:#f2d72b;">*/
/* 						<th>Photo</th>*/
/* 						<th>Title</th>*/
/* 						<th>Author</th>*/
/* 						<th>ISBN</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% for row in info %}*/
/* 				<tbody>*/
/* 					<tr>*/
/* 						<td><img src="{{row.photo}}" class="thumbnail"></img></td>*/
/* 					    <td>{{row.title}}</td>*/
/* 					    <td>{{row.author}}</td>*/
/* 					    <td>{{row.ISBN}}</td>*/
/* 					    <td>*/
/* 						    <form method="post" action="/deleterecomendation">*/
/* 				  				<input type="hidden" name="ID" value="{{row.ID}}" />*/
/* 				  				<button class="btn btn-danger" type="submit"  onclick="return confirm('Are you sure you want to delete?');" aria-hidden="true" > <i class="fa fa-trash-o fa-lg"></i>Delete</a></button>*/
/* 				  			</form>*/
/* 						</td>*/
/* 					</tr>*/
/* 				</tbody>*/
/* 					{% endfor %}*/
/* 			</table>*/
/* 	*/
/*     {% endif %}*/
/*         <form action="/userpanel" >*/
/*                 <button type="submit" class="btn btn-info">Go back</button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% include '/Library/common/footer.twig' %}*/
