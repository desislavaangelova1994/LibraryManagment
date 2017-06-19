<?php

/* Library/index.twig */
class __TwigTemplate_9efc94bbf93d9591117ba2dbbaaf95c5d692f2810480ab819875a6b70d143bc2 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/index.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "access", array()) == false)) {
            // line 4
            echo "
    <!-- Header -->
    <a name=\"about\"></a>
    <div class=\"intro-header\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"intro-message\">
                        <h1>Library Management System</h1>
                        <h3>Login</h3>
                        <hr class=\"intro-divider\">
                        <ul class=\"list-inline intro-social-buttons\">
                        <h2>";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<form class=\"form-inline\" method=\"POST\" action=\"/login\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" placeholder=\"email\" class=\"form-control mx-sm-3\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"password\"  name=\"password\" placeholder=\"password\" class=\"form-control mx-sm-3\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"send\" class=\"btn btn-default\"/>

\t\t\t\t\t\t\t</form>
                                <a style=\"color:white\" href=\"/forgot\">I've forgotten my password</a>
                            </div>
\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "
                        </ul>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <h2>Kinguin</h2>
                        </div>
                        <div class=\"col-lg-6\">
                            <ul class=\"list-inline banner-social-buttons\">
                                <li>
                                    <a href=\"https://twitter.com/kinguinnet?lang=bg\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-twitter fa-fw\"></i> <span class=\"network-name\">Twitter</span></a>
                                </li>
                                <li>
                                    <a href=\"https://www.facebook.com/KinguinBG/?fref=ts\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-facebook fa-fw\"></i> <span class=\"network-name\">Facebook</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

";
        }
        // line 60
        echo "
";
        // line 61
        $this->loadTemplate("/Library/common/footer.twig", "Library/index.twig", 61)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 61,  90 => 60,  57 => 30,  41 => 17,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* {% if session.access == false %}*/
/* */
/*     <!-- Header -->*/
/*     <a name="about"></a>*/
/*     <div class="intro-header">*/
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <div class="intro-message">*/
/*                         <h1>Library Management System</h1>*/
/*                         <h3>Login</h3>*/
/*                         <hr class="intro-divider">*/
/*                         <ul class="list-inline intro-social-buttons">*/
/*                         <h2>{{error}}</h2>*/
/* 							<form class="form-inline" method="POST" action="/login">*/
/* 								<div class="form-group">*/
/* 									<input type="text" name="email" placeholder="email" class="form-control mx-sm-3" />*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<input type="password"  name="password" placeholder="password" class="form-control mx-sm-3"/>*/
/* 								</div>*/
/* 									<input type="submit" name="send" class="btn btn-default"/>*/
/* */
/* 							</form>*/
/*                                 <a style="color:white" href="/forgot">I've forgotten my password</a>*/
/*                             </div>*/
/* 							{{success}}*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-lg-6">*/
/*                             <h2>Kinguin</h2>*/
/*                         </div>*/
/*                         <div class="col-lg-6">*/
/*                             <ul class="list-inline banner-social-buttons">*/
/*                                 <li>*/
/*                                     <a href="https://twitter.com/kinguinnet?lang=bg" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="https://www.facebook.com/KinguinBG/?fref=ts" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*         <!-- /.container -->*/
/* */
/*     </div>*/
/*     <!-- /.intro-header -->*/
/* */
/* {% endif %}*/
/* */
/* {% include '/Library/common/footer.twig' %}*/
