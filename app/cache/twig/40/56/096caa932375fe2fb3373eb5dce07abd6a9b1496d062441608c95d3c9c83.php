<?php

/* addForm.html.twig */
class __TwigTemplate_4056096caa932375fe2fb3373eb5dce07abd6a9b1496d062441608c95d3c9c83 extends Twig_Template
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
        echo "\t\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("addMedoc");
        echo "\" method=\"post\" class=\"form w40\">
\t\t    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t    <input type=\"submit\" name=\"submit\" id=\"submit\" />
\t\t</form>
\t";
    }

    public function getTemplateName()
    {
        return "addForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  31 => 3,  28 => 2,);
    }
}
