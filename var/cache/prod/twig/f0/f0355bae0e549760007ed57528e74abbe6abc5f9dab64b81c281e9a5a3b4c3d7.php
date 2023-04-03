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

/* home/index.html.twig */
class __TwigTemplate_fd9a2f0414822fe8936c07c6d59b8d5f7c06bc5fa0da8e2d05cf842aa86abdce extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<br/>
\t<h2 class=\"text-center bg-light p-3\">Liste de films</h2>
\t<p class=\"text-center m-3\">Cliquez sur un titre pour voir les commentaires concernant ce film.</p>
\t<table class=\"table w-50 mx-auto\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Year</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["films"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            echo "\t
\t\t\t<tr>
\t\t\t\t<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film", ["id" => twig_get_attribute($this->env, $this->source, $context["film"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo " </a></td>
\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "year", [], "any", false, false, false, 19), "html", null, true);
            echo " </td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</tbody>
\t</table>
\t<div class='d-flex justify-content-center'>
\t\t";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["films"] ?? null), "pagination.twig.html");
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  93 => 22,  84 => 19,  78 => 18,  71 => 16,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "D:\\Symfony-Violet\\cineComments\\templates\\home\\index.html.twig");
    }
}
