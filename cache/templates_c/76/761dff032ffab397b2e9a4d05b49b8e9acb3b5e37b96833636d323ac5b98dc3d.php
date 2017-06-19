<?php

/* Library/issueform.twig */
class __TwigTemplate_9f0a2385403b67b4c37c44db9f0a26b870848b90db4b3b991d31bc30346adf99 extends Twig_Template
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
        $this->loadTemplate("/Library/common/header.twig", "Library/issueform.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"row\">
    <div class=\"container\">
        <div class=\"mainbox col-md-4 col-md-offset-3  \" align=\"center\" style=\"padding-top:10px;\">
            <ul><p style=\"font-size:20px;font-family:'Gloria Hallelujah', cursive;\">You are about to issue:</p></ul>
            <ul><i class=\"fa fa-hand-o-down fa-2x\" aria-hidden=\"true\"></i></ul>
            <ul><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "photo", array()), "html", null, true);
        echo "\" class=\"thumbnail\" /></ul>
        \t<ul>ISBN:";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "ISBN", array()), "html", null, true);
        echo "</ul>
            <ul><h4>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "title", array()), "html", null, true);
        echo "</h4></ul>
        \t<ul>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "author", array()), "html", null, true);
        echo "</ul>
        </div>
    </div>
</div>

<div id=\"issuebookbox\" style=\"margin-top:20px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\"  style=\"background-color:#f2d72b;\">
            <div class=\"panel-title\">Issue Book</div>
        </div>  
        <div class=\"panel-body\" >
            <form  class=\"form-horizontal\" method=\"post\" action=\"/issuedata\">

                <div id=\"div_isbn\" class=\"form-group required\">
                    <label for=\"isbn\" class=\"control-label col-md-4  requiredField\">Issue Date <span class=\"asteriskField\">*</span> </label>
                    <div class=\"controls col-md-8 \">
                        <input name=\"issuedate\" type=\"date\" id=\"issuedate\" />
                    </div>
                </div>
                
                <input type=\"hidden\" name=\"returndate\" type=\"date\" id=\"returndate\"/>
                <input type=\"hidden\" name=\"book_id\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["getRow"]) ? $context["getRow"] : null), "book_id", array()), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"user_id\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "user_id", array()), "html", null, true);
        echo "\" />
              
                <div class=\"form-group\"> 
                    <div class=\"aab controls col-md-4 \"></div>
                        <div class=\"controls col-md-8 \">
                        \t<button class=\"btn btn-warning\" type=\"submit\" name=\"submit\" id=\"issue\"><i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> Issue </button>
                \t\t</div>
                </div> 
            </form>

            <form action=\"/userpanel\" >
                <button type=\"submit\" class=\"btn btn-info\">Go back</button>
            </form>
            <br>
            <div class=\"container\" >    
            <p><em>* You are suppose to return the book maximum 30 days after the issued date!</em> </p>   
            </div>  
        </div>
        
    </div>
</div>

    <script type=\"text/javascript\">
   \t\tfunction setInputDate(_id){
\t    var _dat = document.querySelector(_id);
\t    var hoy = new Date(),
\t        d = hoy.getDate(),
\t        m = hoy.getMonth()+1, 
\t        y = hoy.getFullYear(),
\t        data;

\t    if(d < 10){
\t        d = \"0\"+d;
\t    };
\t    if(m < 10){
\t        m = \"0\"+m;
\t    };

\t    data = y+\"-\"+m+\"-\"+d;
\t    console.log(data);
\t    _dat.value = data;
\t\t};

        function setReturnDate(_id){
        var _dat = document.querySelector(_id);
        var hoy = new Date(),
            d = hoy.getDate(),
            m = hoy.getMonth()+2, 
            y = hoy.getFullYear(),
            data;

        if(d < 10){
            d = \"0\"+d;
        };
        if(m < 10){
            m = \"0\"+m;
        };

        data = y+\"-\"+m+\"-\"+d;
        console.log(data);
        _dat.value = data;
        };

        setReturnDate(\"#returndate\");
\t\tsetInputDate(\"#issuedate\");
\t</script>

";
        // line 100
        $this->loadTemplate("/Library/common/footer.twig", "Library/issueform.twig", 100)->display($context);
    }

    public function getTemplateName()
    {
        return "Library/issueform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 100,  69 => 33,  65 => 32,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% include '/Library/common/header.twig' %}*/
/* */
/* <div class="row">*/
/*     <div class="container">*/
/*         <div class="mainbox col-md-4 col-md-offset-3  " align="center" style="padding-top:10px;">*/
/*             <ul><p style="font-size:20px;font-family:'Gloria Hallelujah', cursive;">You are about to issue:</p></ul>*/
/*             <ul><i class="fa fa-hand-o-down fa-2x" aria-hidden="true"></i></ul>*/
/*             <ul><img src="{{getRow.photo}}" class="thumbnail" /></ul>*/
/*         	<ul>ISBN:{{getRow.ISBN}}</ul>*/
/*             <ul><h4>{{getRow.title}}</h4></ul>*/
/*         	<ul>{{getRow.author}}</ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="issuebookbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading"  style="background-color:#f2d72b;">*/
/*             <div class="panel-title">Issue Book</div>*/
/*         </div>  */
/*         <div class="panel-body" >*/
/*             <form  class="form-horizontal" method="post" action="/issuedata">*/
/* */
/*                 <div id="div_isbn" class="form-group required">*/
/*                     <label for="isbn" class="control-label col-md-4  requiredField">Issue Date <span class="asteriskField">*</span> </label>*/
/*                     <div class="controls col-md-8 ">*/
/*                         <input name="issuedate" type="date" id="issuedate" />*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <input type="hidden" name="returndate" type="date" id="returndate"/>*/
/*                 <input type="hidden" name="book_id" value="{{getRow.book_id}}" />*/
/*                 <input type="hidden" name="user_id" value="{{session.user_id}}" />*/
/*               */
/*                 <div class="form-group"> */
/*                     <div class="aab controls col-md-4 "></div>*/
/*                         <div class="controls col-md-8 ">*/
/*                         	<button class="btn btn-warning" type="submit" name="submit" id="issue"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Issue </button>*/
/*                 		</div>*/
/*                 </div> */
/*             </form>*/
/* */
/*             <form action="/userpanel" >*/
/*                 <button type="submit" class="btn btn-info">Go back</button>*/
/*             </form>*/
/*             <br>*/
/*             <div class="container" >    */
/*             <p><em>* You are suppose to return the book maximum 30 days after the issued date!</em> </p>   */
/*             </div>  */
/*         </div>*/
/*         */
/*     </div>*/
/* </div>*/
/* */
/*     <script type="text/javascript">*/
/*    		function setInputDate(_id){*/
/* 	    var _dat = document.querySelector(_id);*/
/* 	    var hoy = new Date(),*/
/* 	        d = hoy.getDate(),*/
/* 	        m = hoy.getMonth()+1, */
/* 	        y = hoy.getFullYear(),*/
/* 	        data;*/
/* */
/* 	    if(d < 10){*/
/* 	        d = "0"+d;*/
/* 	    };*/
/* 	    if(m < 10){*/
/* 	        m = "0"+m;*/
/* 	    };*/
/* */
/* 	    data = y+"-"+m+"-"+d;*/
/* 	    console.log(data);*/
/* 	    _dat.value = data;*/
/* 		};*/
/* */
/*         function setReturnDate(_id){*/
/*         var _dat = document.querySelector(_id);*/
/*         var hoy = new Date(),*/
/*             d = hoy.getDate(),*/
/*             m = hoy.getMonth()+2, */
/*             y = hoy.getFullYear(),*/
/*             data;*/
/* */
/*         if(d < 10){*/
/*             d = "0"+d;*/
/*         };*/
/*         if(m < 10){*/
/*             m = "0"+m;*/
/*         };*/
/* */
/*         data = y+"-"+m+"-"+d;*/
/*         console.log(data);*/
/*         _dat.value = data;*/
/*         };*/
/* */
/*         setReturnDate("#returndate");*/
/* 		setInputDate("#issuedate");*/
/* 	</script>*/
/* */
/* {% include '/Library/common/footer.twig' %}*/
