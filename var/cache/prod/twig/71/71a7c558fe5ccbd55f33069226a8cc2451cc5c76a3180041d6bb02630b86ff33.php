<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* film/show.html.twig */
class __TwigTemplate_6776b0115412ede17ea98c3da634250c4398e556b2d2513892b68c1031b6f65a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "film/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Un film ";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t\t<h2 class=\"text-center bg-light p-3\">Détails pour le film : ";
        echo twig_escape_filter($this->env, ($context["film"] ?? null), "html", null, true);
        echo " </h2>
\t\t
\t\t<table class=\"table w-75 mx-auto\">
\t\t\t<tbody>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">id : </td>
\t\t\t\t\t<td class=\"col-8\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">Titre : </td>
\t\t\t\t\t<td class=\"col-8\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">Année : </td>
\t\t\t\t\t<td class=\"col-8\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "year", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">Commentaires pour ce film : </td>
\t\t\t\t\t";
        // line 23
        if ((twig_length_filter($this->env, ($context["comments"] ?? null)) > 0)) {
            // line 24
            echo "\t\t\t\t\t\t<td class=\"col\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 27
                echo "\t\t\t\t\t\t\t\t<td class=\"row\">
\t\t\t\t\t\t\t\t";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 28), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 28), "short", "none", "", null, "gregorian", "fr"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t<td class=\"col-8\"><em>Pas encore de commentaires pour ce film</em></td>
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>\t
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "film/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 36,  118 => 34,  113 => 31,  102 => 28,  99 => 27,  95 => 26,  91 => 24,  89 => 23,  82 => 19,  75 => 15,  68 => 11,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "film/show.html.twig", "D:\\Symfony-Violet\\cineComments\\templates\\film\\show.html.twig");
    }
}
