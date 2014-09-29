<?php

/* medocs.html.twig */
class __TwigTemplate_f24d8191f537bf4a8db75d805921a18cba1c4b5080eff7f8e78bdacc629811a4 extends Twig_Template
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
        echo " \t\t<table class=\"striped alternate\" summary=\"\">
\t\t\t<caption> Médicaments</caption>
\t\t\t<thead>
\t\t\t \t<th>Nom </th>
\t\t\t \t<th>Date de création </th>
\t\t\t \t<th>Vendu </th>
\t\t\t \t<th>Prix € </th>
\t\t\t \t<th><input type=\"checkbox\" name=\"vendu\" id=\"\"> </th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medocs"]) ? $context["medocs"] : $this->getContext($context, "medocs")));
        foreach ($context['_seq'] as $context["_key"] => $context["medoc"]) {
            // line 14
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("viewMedoc", array("medoc" => $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "name"), "html", null, true);
            echo "</a>  </td>
\t\t\t\t\t<td> ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "date"), "m/d/Y"), "html", null, true);
            echo " </td>
\t\t\t\t\t<td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "sell"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "price"), "html", null, true);
            echo " €</td>
\t\t\t\t\t<td> <input type=\"checkbox\" name=\"vendu\" id=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medoc"]) ? $context["medoc"] : $this->getContext($context, "medoc")), "id"), "html", null, true);
            echo "\"> </td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t</tbody>
\t\t</table>
\t";
    }

    public function getTemplateName()
    {
        return "medocs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  50 => 15,  47 => 14,  43 => 13,  31 => 3,  28 => 2,);
    }
}
