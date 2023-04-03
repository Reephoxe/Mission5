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
class __TwigTemplate_97b7f19a9dbb10ff981ecc0ddec73a63087180dc29d71280c35f99540d24421b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "film/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Un film ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "\t\t<h2 class=\"text-center bg-light p-3\">Détails pour le film : ";
        echo twig_escape_filter($this->env, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " </h2>
\t\t
\t\t<table class=\"table w-75 mx-auto\">
\t\t\t<tbody>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">id : </td>
\t\t\t\t\t<td class=\"col-8\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">Titre : </td>
\t\t\t\t\t<td class=\"col-8\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">Année : </td>
\t\t\t\t\t<td class=\"col-8\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 19, $this->source); })()), "year", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">Commentaires pour ce film : </td>
\t\t\t\t\t";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 23, $this->source); })())) > 0)) {
            // line 24
            echo "\t\t\t\t\t\t<td class=\"col\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 26, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  152 => 36,  148 => 34,  143 => 31,  132 => 28,  129 => 27,  125 => 26,  121 => 24,  119 => 23,  112 => 19,  105 => 15,  98 => 11,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
\t{% block title %}Un film {% endblock %}

\t{% block main %}
\t\t<h2 class=\"text-center bg-light p-3\">Détails pour le film : {{ film }} </h2>
\t\t
\t\t<table class=\"table w-75 mx-auto\">
\t\t\t<tbody>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">id : </td>
\t\t\t\t\t<td class=\"col-8\">{{ film.id }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">Titre : </td>
\t\t\t\t\t<td class=\"col-8\">{{ film.title }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">Année : </td>
\t\t\t\t\t<td class=\"col-8\">{{ film.year }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"row\">
\t\t\t\t\t<td class=\"col-4\">Commentaires pour ce film : </td>
\t\t\t\t\t{% if comments|length > 0 %}
\t\t\t\t\t\t<td class=\"col\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t{% for comment in comments %}
\t\t\t\t\t\t\t\t<td class=\"row\">
\t\t\t\t\t\t\t\t{{ comment.comment }} - {{ comment.createdAt|format_datetime('short', 'none',  locale='fr') }}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<td class=\"col-8\"><em>Pas encore de commentaires pour ce film</em></td>
\t\t\t\t\t{% endif %}
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>\t
\t\t
\t{% endblock %}
", "film/show.html.twig", "D:\\Symfony-Violet\\cineComments\\templates\\film\\show.html.twig");
    }
}
