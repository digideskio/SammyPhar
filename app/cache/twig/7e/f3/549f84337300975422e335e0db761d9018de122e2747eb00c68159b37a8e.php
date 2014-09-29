<?php

/* medocsCsvView.html.twig */
class __TwigTemplate_7ef3549f84337300975422e335e0db761d9018de122e2747eb00c68159b37a8e extends Twig_Template
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
        echo " \t\t<form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("addCsv");
        echo "\">
 \t\t\t<input type=\"submit\" value=\"valider\">
 \t\t</form>
 \t\t<table class=\"striped alternate\" summary=\"\">
\t\t\t<caption> Médicaments</caption>
\t\t\t<thead>
\t\t\t \t<th>Nom </th>
\t\t\t \t<th>Prix € </th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medocs"]) ? $context["medocs"] : $this->getContext($context, "medocs")));
        foreach ($context['_seq'] as $context["_key"] => $context["medoc"]) {
            // line 14
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "name"), "html", null, true);
            echo " </td>
\t\t\t\t\t<td> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "price"), "html", null, true);
            echo " €</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t</tbody>
\t\t</table>
 \t";
    }

    public function getTemplateName()
    {
        return "medocsCsvView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  56 => 16,  52 => 15,  49 => 14,  45 => 13,  31 => 3,  28 => 2,);
    }
}
