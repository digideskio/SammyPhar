<?php

/* head.html.twig */
class __TwigTemplate_624d593618cd3f89ddd62b9e610b767cd9cba033f562f78a9dd9daa0a886710b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("index.twig")->display($context);
        // line 2
        echo "<!doctype html>
<!--[if lte IE 7]> <html class=\"no-js ie67 ie678\" lang=\"fr\"> <![endif]-->
<!--[if IE 8]> <html class=\"no-js ie8 ie678\" lang=\"fr\"> <![endif]-->
<!--[if IE 9]> <html class=\"no-js ie9\" lang=\"fr\"> <![endif]-->
<!--[if gt IE 9]> <!-->
<html class=\"no-js\" lang=\"fr\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\"> <!--<![endif]-->
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><![endif]-->
\t\t<title>SammyPhar Management </title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<!--[if lt IE 9]>
\t\t<script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->
\t\t<link rel=\"stylesheet\" href=\"../css/knacss.css\" media=\"all\">
\t\t<link rel=\"stylesheet\" href=\"../css/styles.css\" media=\"all\">
\t</head>
\t<body>
\t<header id=\"header\" role=\"banner\" class=\"line pam\">
\t</header>
\t\t";
        // line 22
        $this->env->loadTemplate("menu.html.twig")->display($context);
        // line 23
        echo "\t\t<div id=\"main\" role=\"main\" class=\"mod pam\">
\t\t\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "\t\t</div>
\t\t<footer> powered by EZS</footer>
\t</body>
</html>";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  58 => 24,  51 => 26,  49 => 24,  46 => 23,  44 => 22,  22 => 2,  20 => 1,);
    }
}
