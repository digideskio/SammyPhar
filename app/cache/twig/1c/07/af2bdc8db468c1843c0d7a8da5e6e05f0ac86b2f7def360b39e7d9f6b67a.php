<?php

/* modifyMedoc.html.twig */
class __TwigTemplate_1c07af2bdc8db468c1843c0d7a8da5e6e05f0ac86b2f7def360b39e7d9f6b67a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("head.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo " \t\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifyMedoc", array("medoc" => $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form w40\">
\t\t    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t    <input type=\"submit\" name=\"submit\" id=\"submit\" />
\t\t</form>
\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteMedoc", array("medoc" => $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "id"))), "html", null, true);
        echo "\"> supprimer </a>
 \t";
    }

    public function getTemplateName()
    {
        return "modifyMedoc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  36 => 4,  31 => 3,  28 => 2,);
    }
}
