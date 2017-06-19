<?php

/* Library/userpanel.twig */
class __TwigTemplate_07018754e974fd3b4f04b1d49b0648d5d4d12f7e3d51671983ed8bdb72daa871 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/userpanel.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "access", array()) == true)) {
            // line 4
            echo "
<div class=\"container-fluid text-center\">  
\t<div class=\"row\">
\t\t<div class=\"intro\">
\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t<div class=\"quote\">
\t\t\t\t\t<br>
\t\t\t\t\t\t<p><i class=\"fa fa-quote-left fa-1x\" aria-hidden=\"true\"></i> <em>Whether I'm at the office, at home,<br> or on the road, I always have a stack of books I'm looking forward to reading  ..</em> <i class=\"fa fa-quote-right fa-1x\" aria-hidden=\"true\"></i></p>
\t\t\t\t\t\t<p align=\"right\" style=\"font-size:30px\"><em>-Bill Gates</em></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\" style=\"background-color:#091933\">
\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-md-4 col-md-offset-4\" style=\"padding-top:50px\">
\t\t\t\t\t\t<p align=\"center\" style=\"color:red\">";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["successfullyreturned"]) ? $context["successfullyreturned"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["recommended"]) ? $context["recommended"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<h3 style=\"color:white\"><em>What are you reading?</em></h3>
\t\t\t\t\t\t<p style=\"color:orange\"><em>Recommend a book to the library.</em></p>
\t\t\t\t\t\t\t<form action=\"/search\" class=\"form-horizontal\" method=\"post\" accept-charset=\"utf-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group stylish-input-group\">
\t\t\t\t\t\t\t\t    <input name=\"search\" id=\"search\" class=\"form-control\" type=\"text\" placeholder=\"Suggest us a book...\" />
\t\t\t\t\t\t\t\t        <span class=\"input-group-addon\" style=\"color:orange\" >
\t\t\t\t\t\t\t\t           \t<button type=\"submit\" id=\"button\" style=\"background:transparent;border:0;\">
\t\t\t\t\t\t\t\t            <span class=\"glyphicon glyphicon-search\"></span>
\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t        </span>     
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t

\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
            echo "

\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<div class=\"col-md-4 col-md-offset-4\" >
\t\t\t\t\t\t<div id=\"results\" class=\"panel-heading\" >
\t\t\t\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["title"]) ? $context["title"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 47
                echo "\t\t\t\t\t\t\t<form method=\"post\" action=\"/recommend\">
\t\t\t\t\t\t\t\t<div class=\"panel panel-warning\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"panel-title\"><p><input type=\"hidden\" name=\"title\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "\" />";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</p></div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "authors", array()), 0, array()), "html", null, true);
                echo " </h4>
\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "authors", array()), 1, array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p style=\"white-space: nowrap;overflow: hidden; text-overflow: ellipsis;\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "description", array()), "html", null, true);
                echo "</p>\t\t\t
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "infoLink", array()), "html", null, true);
                echo "\"><img class=\"thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "imageLinks", array()), "thumbnail", array()), "html", null, true);
                echo "\" ><input type=\"hidden\" name=\"author\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "authors", array()), 0, array()), "html", null, true);
                echo "\" /><input type=\"hidden\" name=\"photo\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "imageLinks", array()), "thumbnail", array()), "html", null, true);
                echo "\" /></img></a>
\t\t\t\t\t\t\t\t\t\t";
                // line 56
                if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "access", array()) == 2)) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-circle\"><i class=\"glyphicon glyphicon-heart\"> Recommend</i></button>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_id\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_id", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"isbn\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "industryIdentifiers", array()), 1, array()), "identifier", array()), "html", null, true);
                echo "\"  />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t</div>
\t

\t<div class=\"row\">
\t\t<br />
\t\t\t<div class=\"col-xs-4\" style=\"width: 100%; height: 20px; border-bottom: 1px solid #d4d6d8; text-align: center\">
\t \t\t\t<span style=\"font-size: 20px; background-color: #F3F5F6; padding: 0 10px;\"><em>
\t    \t\t\t\tTop 5 Issued Books </em><!--Padding is optional-->
\t  \t\t\t</span>
\t\t\t</div>
\t\t\t<br>
\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookinfo"]) ? $context["bookinfo"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 80
                echo "\t\t\t<div class=\"col-md-2\" align=\"center\" style=\"margin-left: 50px;\">
\t\t\t\t<br>
\t\t\t\t\t<p><a target=\"_blank\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "photo", array()), "html", null, true);
                echo "\"><img  src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "photo", array()), "html", null, true);
                echo "\" class=\"thumbnail\" style=\"display:block\"></img></a></p>
\t\t\t\t\t<h4>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t<p style=\"color:orange\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
                echo "</p>\t
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t<br />

\t\t\t<div class=\"col-md-12\">
\t\t\t<a href=\"/issue/1\" class=\"btn btn-warning\" >View More  <i class=\"fa fa-book\" aria-hidden=\"true\"></i></a>
\t\t\t</div>
\t\t\t<br>
\t</div>
</div>
<br>




";
        }
        // line 101
        $this->loadTemplate("/Library/common/footer.twig", "Library/userpanel.twig", 101)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/userpanel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 101,  183 => 87,  174 => 84,  170 => 83,  164 => 82,  160 => 80,  156 => 79,  139 => 64,  129 => 60,  124 => 59,  120 => 57,  118 => 56,  108 => 55,  104 => 54,  100 => 53,  96 => 52,  89 => 50,  84 => 47,  80 => 46,  72 => 41,  46 => 22,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* {% if session.access == true %}*/
/* */
/* <div class="container-fluid text-center">  */
/* 	<div class="row">*/
/* 		<div class="intro">*/
/* 			<div class="col-md-6 col-sm-6">*/
/* 				<div class="quote">*/
/* 					<br>*/
/* 						<p><i class="fa fa-quote-left fa-1x" aria-hidden="true"></i> <em>Whether I'm at the office, at home,<br> or on the road, I always have a stack of books I'm looking forward to reading  ..</em> <i class="fa fa-quote-right fa-1x" aria-hidden="true"></i></p>*/
/* 						<p align="right" style="font-size:30px"><em>-Bill Gates</em></p>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row" style="background-color:#091933">*/
/* 		<div class="col-md-12">*/
/* 				<div class="container">*/
/* 					<div class="col-md-4 col-md-offset-4" style="padding-top:50px">*/
/* 						<p align="center" style="color:red">{{ successfullyreturned }} {{ recommended }} {{ success }}</p>*/
/* 						<h3 style="color:white"><em>What are you reading?</em></h3>*/
/* 						<p style="color:orange"><em>Recommend a book to the library.</em></p>*/
/* 							<form action="/search" class="form-horizontal" method="post" accept-charset="utf-8">*/
/* 								<div class="input-group stylish-input-group">*/
/* 								    <input name="search" id="search" class="form-control" type="text" placeholder="Suggest us a book..." />*/
/* 								        <span class="input-group-addon" style="color:orange" >*/
/* 								           	<button type="submit" id="button" style="background:transparent;border:0;">*/
/* 								            <span class="glyphicon glyphicon-search"></span>*/
/* 								            </button>*/
/* 								        </span>     */
/* 								</div>*/
/* 							</form>*/
/* 					*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 		*/
/* */
/* 			{{empty}}*/
/* */
/* 				<div class="list-group">*/
/* 					<div class="col-md-4 col-md-offset-4" >*/
/* 						<div id="results" class="panel-heading" >*/
/* 						{% for result in title %}*/
/* 							<form method="post" action="/recommend">*/
/* 								<div class="panel panel-warning" align="center">*/
/* 										<div class="panel-heading">*/
/* 										        <div class="panel-title"><p><input type="hidden" name="title" value="{{ result.title }}" />{{ result.title }}</p></div>*/
/* 										</div>		*/
/* 										<h4>{{ result.authors.0 }} </h4>*/
/* 										<h4>{{ result.authors.1 }}</h4>*/
/* 										<p style="white-space: nowrap;overflow: hidden; text-overflow: ellipsis;">{{ result.description }}</p>			*/
/* 										<a target="_blank" href="{{ result.infoLink }}"><img class="thumbnail" src="{{ result.imageLinks.thumbnail }}" ><input type="hidden" name="author" value="{{ result.authors.0 }}" /><input type="hidden" name="photo" value="{{ result.imageLinks.thumbnail }}" /></img></a>*/
/* 										{% if session.access == 2 %}*/
/* 										<button type="submit" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-heart"> Recommend</i></button>*/
/* 										{% endif %}*/
/* 										<input type="hidden" name="user_id" value="{{session.user_id}}" />*/
/* 										<input type="hidden" name="isbn" value="{{ result.industryIdentifiers.1.identifier }}"  />*/
/* 								</div>*/
/* 							</form>*/
/* 						{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* */
/* 	<div class="row">*/
/* 		<br />*/
/* 			<div class="col-xs-4" style="width: 100%; height: 20px; border-bottom: 1px solid #d4d6d8; text-align: center">*/
/* 	 			<span style="font-size: 20px; background-color: #F3F5F6; padding: 0 10px;"><em>*/
/* 	    				Top 5 Issued Books </em><!--Padding is optional-->*/
/* 	  			</span>*/
/* 			</div>*/
/* 			<br>*/
/* 			{% for row in bookinfo %}*/
/* 			<div class="col-md-2" align="center" style="margin-left: 50px;">*/
/* 				<br>*/
/* 					<p><a target="_blank" href="{{row.photo}}"><img  src="{{row.photo}}" class="thumbnail" style="display:block"></img></a></p>*/
/* 					<h4>{{row.title}}</h4>*/
/* 					<p style="color:orange">{{row.author}}</p>	*/
/* 			</div>*/
/* 			{% endfor %}*/
/* 			<br />*/
/* */
/* 			<div class="col-md-12">*/
/* 			<a href="/issue/1" class="btn btn-warning" >View More  <i class="fa fa-book" aria-hidden="true"></i></a>*/
/* 			</div>*/
/* 			<br>*/
/* 	</div>*/
/* </div>*/
/* <br>*/
/* */
/* */
/* */
/* */
/* {% endif %}*/
/* {% include '/Library/common/footer.twig' %}*/
