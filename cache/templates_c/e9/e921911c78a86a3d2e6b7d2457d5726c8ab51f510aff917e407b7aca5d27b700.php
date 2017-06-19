<?php

/* mail/signup.twig */
class __TwigTemplate_5f71ff4b6fd4e9cf4efcce2ddb26d045c48bf6a1366a55f8ad2e6ffa9e441499 extends Twig_Template
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
        $this->loadTemplate("/mail/header.twig", "mail/signup.twig", 1)->display($context);
        // line 2
        echo "

<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#FFFAFA\">
  <tr>
    <td align=\"center\" valign=\"top\" bgcolor=\"#FFFAFA\" style=\"background-color: #FFFAFA;\">

      <br>

      <!-- 600px container (white background) -->
      <table border=\"0\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\" class=\"container\" style=\"width:600px;max-width:600px\">
        <tr>
          <td class=\"container-padding header\" align=\"left\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#00BFFF;padding-left:24px;padding-right:24px\">
            Контактна форма
          </td>
        </tr>
        <tr>
          <td class=\"container-padding content\" align=\"left\" style=\"padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#E0FFFF\">
            <br>

<div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550\">Registration</div>
<br>

<div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333\">
  
  <br><br>

  <br><br>
  Email: ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  <br><br>
  Phone: ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["content1"]) ? $context["content1"] : null), "html", null, true);
        echo "
  <br><br>
  Subject: ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["content2"]) ? $context["content2"] : null), "html", null, true);
        echo "
  
</div>

";
        // line 38
        $this->loadTemplate("/mail/footer.twig", "mail/signup.twig", 38)->display($context);
    }

    public function getTemplateName()
    {
        return "mail/signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 38,  61 => 34,  56 => 32,  51 => 30,  21 => 2,  19 => 1,);
    }
}
/* {% include "/mail/header.twig" %}*/
/* */
/* */
/* <!-- 100% background wrapper (grey background) -->*/
/* <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFAFA">*/
/*   <tr>*/
/*     <td align="center" valign="top" bgcolor="#FFFAFA" style="background-color: #FFFAFA;">*/
/* */
/*       <br>*/
/* */
/*       <!-- 600px container (white background) -->*/
/*       <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">*/
/*         <tr>*/
/*           <td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#00BFFF;padding-left:24px;padding-right:24px">*/
/*             Контактна форма*/
/*           </td>*/
/*         </tr>*/
/*         <tr>*/
/*           <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#E0FFFF">*/
/*             <br>*/
/* */
/* <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">Registration</div>*/
/* <br>*/
/* */
/* <div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333">*/
/*   */
/*   <br><br>*/
/* */
/*   <br><br>*/
/*   Email: {{content}}*/
/*   <br><br>*/
/*   Phone: {{content1}}*/
/*   <br><br>*/
/*   Subject: {{content2}}*/
/*   */
/* </div>*/
/* */
/* {% include "/mail/footer.twig" %}*/
