<?php

/* menu.html.twig */
class __TwigTemplate_4b478b3dbd4fd65d4a1341509e5c675d75c5f6f89b9698c6397382a616deb0b0 extends Twig_Template
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
        echo "<aside class=\"mod left w20 mrs pam aside\">
\t\t<ul id=\"menu\">
\t\t\t<li class=\"btn_menu\"><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"> accueil </a></li>
\t\t\t<li class=\"btn_menu\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("addMedocForm");
        echo "\"> ajouter </a></li>
\t\t\t<li class=\"btn_menu\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("viewCsv");
        echo "\"> importer csv </a></li>
\t\t</ul>
</aside> ";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,  61 => 25,  58 => 24,  51 => 26,  49 => 24,  46 => 23,  44 => 22,  22 => 2,  20 => 1,  77 => 22,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  50 => 15,  47 => 14,  43 => 13,  31 => 5,  28 => 2,);
    }
}
