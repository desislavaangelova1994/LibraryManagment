<?php

/* /Library/common/header.twig */
class __TwigTemplate_0a4ea53389301c0e93874ead725b65a37e127095bed8c4c23fb50cdc1402838b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <title>Library Management System</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Library Management\">
        <meta name=\"author\" content=\"Desislava Angelova\">
        <meta name=\"description\" content=\"The Library Management System is a software used to manage the catalog of a library.It helps to keep the record of the books available and issued in the library. It keeps record of different categories like Games,Design,Web Development and etc.The software classifies the books subject wise.Easy way to enter new books.\">
        <meta name=\"keywords\" content=\"library,system,online management,kinguin,books,online\">

        <link rel=\"icon\" href=\"/Library/images/favicon-32x32.png\">

        <!-- Bootstrap Core CSS -->
        <link href=\"/Library/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <!-- <link href=\"/Library/css/form.css\" rel=\"stylesheet\"> -->
        <link href=\"/Library/css/landing-page.css\" rel=\"stylesheet\">

        <!--FONTS-->
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"/font-awesome/css/font-awesome.min.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Leckerli+One|Shadows+Into+Light\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!-- [if lt IE 9]> -->
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <!-- <![endif] -->

    </head>

<body style=\"background-color: #F3F5F6\">

";
        // line 43
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "access", array()) == 1)) {
            // line 44
            echo "     <!-- Navigation -->
     <nav class=\"navbar navbar-default\" role=\"navigation\" style=\"margin-bottom: 0px\">
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a  class=\"navbar-brand topnav\" href=\"/adminpanel\">Library Management</a>
            </div>

               
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><em>Add</em>
                    <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/adduser\"><em>Add User</em></a></li>
                            <li><a href=\"/addbook\"><em>Add Book</em></a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><em>Manage</em>
                    <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/users/1\"><em>Users</em></a></li>
                            <li><a href=\"/books/1\"><em>Books</em></a></li>
                        </ul>
                    </li>
                    <li><a href=\"/issuedbooks/1\"><em>Issued Books</em></a></li>
                    <li><a href=\"/recommends/1\"><em>Recommended Books</em></a></li>
                </ul>
                <ul class=\"lang nav navbar-nav navbar-right\">
                    <li><a href=\"\">EN</a></li>
                    <li><a href=\"\"> BG</a></li>
                    <li align=\"right\"><a href=\"/profile\"><em>Hello ";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : null), "html", null, true);
            echo " </em></a></li>
                    <li><a href=\"/logout\"><em>Logout</em></a></li>
                </ul>
            </div>             
                   
               
            <!-- /.navbar-collapse -->
            
        <!-- /.container -->
    </nav>

    ";
        } elseif (($this->getAttribute(        // line 95
(isset($context["session"]) ? $context["session"] : null), "access", array()) == 2)) {
            // line 96
            echo "


   <nav class=\"navbar navbar-default\" role=\"navigation\" style=\"margin-bottom: 0px\" >
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand topnav\" href=\"/userpanel\">Library Management <i class=\"fa fa-book\" aria-hidden=\"true\"></i></a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"/issue/1\"><em>Issue Book</em></a></li>
                    <li><a href=\"/returnbook\"><em>Return Book</em></a></li>   
                    <li><a href=\"/myrecommendedbooks\"><em>My Recommended books</em></a></li>                 
                </ul>
                <ul class=\"lang nav navbar-nav navbar-right\">
                    <li align=\"right\"><a href=\"/profile\"><em>Hello ";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : null), "html", null, true);
            echo "</em></a></li>
                    <li><a href=\"/logout\"><em>Logout</em></a></li>
                </ul>
            <!-- /.navbar-collapse -->
            </div>
          </nav>
    ";
        }
        // line 126
        echo "


";
    }

    public function getTemplateName()
    {
        return "/Library/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 126,  150 => 119,  125 => 96,  123 => 95,  107 => 84,  65 => 44,  63 => 43,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         <title>Library Management System</title>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="Library Management">*/
/*         <meta name="author" content="Desislava Angelova">*/
/*         <meta name="description" content="The Library Management System is a software used to manage the catalog of a library.It helps to keep the record of the books available and issued in the library. It keeps record of different categories like Games,Design,Web Development and etc.The software classifies the books subject wise.Easy way to enter new books.">*/
/*         <meta name="keywords" content="library,system,online management,kinguin,books,online">*/
/* */
/*         <link rel="icon" href="/Library/images/favicon-32x32.png">*/
/* */
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="/Library/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <!-- <link href="/Library/css/form.css" rel="stylesheet"> -->*/
/*         <link href="/Library/css/landing-page.css" rel="stylesheet">*/
/* */
/*         <!--FONTS-->*/
/*         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">*/
/*         <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">*/
/*         <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">*/
/*         <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Leckerli+One|Shadows+Into+Light" rel="stylesheet">*/
/* */
/*         <!-- Custom Fonts -->*/
/*         <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!-- [if lt IE 9]> -->*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <!-- <![endif] -->*/
/* */
/*     </head>*/
/* */
/* <body style="background-color: #F3F5F6">*/
/* */
/* {% if session.access == 1 %}*/
/*      <!-- Navigation -->*/
/*      <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0px">*/
/*         */
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a  class="navbar-brand topnav" href="/adminpanel">Library Management</a>*/
/*             </div>*/
/* */
/*                */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#"><em>Add</em>*/
/*                     <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/adduser"><em>Add User</em></a></li>*/
/*                             <li><a href="/addbook"><em>Add Book</em></a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown" href="#"><em>Manage</em>*/
/*                     <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="/users/1"><em>Users</em></a></li>*/
/*                             <li><a href="/books/1"><em>Books</em></a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li><a href="/issuedbooks/1"><em>Issued Books</em></a></li>*/
/*                     <li><a href="/recommends/1"><em>Recommended Books</em></a></li>*/
/*                 </ul>*/
/*                 <ul class="lang nav navbar-nav navbar-right">*/
/*                     <li><a href="">EN</a></li>*/
/*                     <li><a href=""> BG</a></li>*/
/*                     <li align="right"><a href="/profile"><em>Hello {{ firstname }} {{ lastname }} </em></a></li>*/
/*                     <li><a href="/logout"><em>Logout</em></a></li>*/
/*                 </ul>*/
/*             </div>             */
/*                    */
/*                */
/*             <!-- /.navbar-collapse -->*/
/*             */
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/*     {% elseif session.access == 2 %}*/
/* */
/* */
/* */
/*    <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0px" >*/
/*         */
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand topnav" href="/userpanel">Library Management <i class="fa fa-book" aria-hidden="true"></i></a>*/
/*             </div>*/
/* */
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li><a href="/issue/1"><em>Issue Book</em></a></li>*/
/*                     <li><a href="/returnbook"><em>Return Book</em></a></li>   */
/*                     <li><a href="/myrecommendedbooks"><em>My Recommended books</em></a></li>                 */
/*                 </ul>*/
/*                 <ul class="lang nav navbar-nav navbar-right">*/
/*                     <li align="right"><a href="/profile"><em>Hello {{ firstname }} {{ lastname }}</em></a></li>*/
/*                     <li><a href="/logout"><em>Logout</em></a></li>*/
/*                 </ul>*/
/*             <!-- /.navbar-collapse -->*/
/*             </div>*/
/*           </nav>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* */
