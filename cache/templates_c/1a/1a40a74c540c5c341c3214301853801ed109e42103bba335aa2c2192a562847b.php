<?php

/* Library/returnbook.twig */
class __TwigTemplate_8a3f1405a582b3e7bdb44979d4d5bc5a0effc821923b3c9afc24e83b3c0a689d extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/returnbook.twig", 1)->display($context);
        // line 2
        echo "

<div class=\"row\">
    <div class=\"container\">
        <div class=\"table-responsive\" style=\"margin-top:20px;\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "book_id", array()), "html", null, true);
        echo "
        
            ";
        // line 9
        if (((isset($context["info"]) ? $context["info"] : null) == (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 10
            echo "                 <p align=\"center\">You dont have any issued books.</p> 
            ";
        } else {
            // line 12
            echo "
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["booktitle"]) ? $context["booktitle"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                if (($this->getAttribute($context["row"], "in_date", array()) != true)) {
                    // line 14
                    echo "         
            <table class=\"table table-hover table-striped\">
                <thead style=\"background:#f2d72b;\">
                    <tr> 
                        <th>Book ID</th>
                        <th>Book Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <tr>            
                    <form action=\"/returned\" method=\"POST\">
                        <td><input type=\"hidden\" name=\"book_id\" value=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
                    echo "\" />";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "book_id", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
                    echo "</td>
                        <td><input type=\"date\" value=\"";
                    // line 29
                    echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
                    echo "\" name=\"in_date\" /></td>
                        <td>
                        <input type=\"hidden\" name=\"user_id\" value=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_id", array()), "html", null, true);
                    echo "\" />
                        <input type=\"submit\" name=\"submit\" value=\"Return\" id=\"issue\" class=\"btn btn-warning\" />
                        </td>
                    </form>
                 </tr>
                </tbody>
                ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 38
                echo "                    <p align=\"center\">You dont have any issued books.</p> 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </table>
        </div>
        ";
        }
        // line 43
        echo "        <div class=\"container\">
            <form action=\"/userpanel\" >
                    <button type=\"submit\" class=\"btn btn-info\">Go back</button>
            </form>
        </div>
    </div>
</div>

";
        // line 51
        $this->loadTemplate("/Library/common/footer.twig", "Library/returnbook.twig", 51)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/returnbook.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 51,  103 => 43,  98 => 40,  91 => 38,  78 => 31,  73 => 29,  69 => 28,  63 => 27,  48 => 14,  42 => 13,  39 => 12,  35 => 10,  33 => 9,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* */
/* <div class="row">*/
/*     <div class="container">*/
/*         <div class="table-responsive" style="margin-top:20px;">*/
/*             {{info.book_id}}*/
/*         */
/*             {% if info == empty %}*/
/*                  <p align="center">You dont have any issued books.</p> */
/*             {% else %}*/
/* */
/*             {% for row in booktitle if row.in_date != true %}*/
/*          */
/*             <table class="table table-hover table-striped">*/
/*                 <thead style="background:#f2d72b;">*/
/*                     <tr> */
/*                         <th>Book ID</th>*/
/*                         <th>Book Title</th>*/
/*                         <th></th>*/
/*                         <th></th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <tr>            */
/*                     <form action="/returned" method="POST">*/
/*                         <td><input type="hidden" name="book_id" value="{{row.book_id}}" />{{row.book_id}}</td>*/
/*                         <td>{{row.title}}</td>*/
/*                         <td><input type="date" value="{{date}}" name="in_date" /></td>*/
/*                         <td>*/
/*                         <input type="hidden" name="user_id" value="{{session.user_id}}" />*/
/*                         <input type="submit" name="submit" value="Return" id="issue" class="btn btn-warning" />*/
/*                         </td>*/
/*                     </form>*/
/*                  </tr>*/
/*                 </tbody>*/
/*                 {% else %}*/
/*                     <p align="center">You dont have any issued books.</p> */
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="container">*/
/*             <form action="/userpanel" >*/
/*                     <button type="submit" class="btn btn-info">Go back</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% include '/Library/common/footer.twig' %}*/
