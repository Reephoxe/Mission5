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

/* @KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig */
class __TwigTemplate_fb940f3d7f4199bcb4c3a45c2cb5e1ed71203a87860644c9be0546e1adfed4d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"float-end\">
        ";
        // line 12
        if (($context["sorted"] ?? null)) {
            // line 13
            echo "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 14
                echo "                <i class=\"material-icons\">expand_more</i>
            ";
            } else {
                // line 16
                echo "                <i class=\"material-icons\">expand_less</i>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            <i class=\"material-icons\">unfold_more</i>
        ";
        }
        // line 21
        echo "    </span>
    ";
        // line 22
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  74 => 21,  70 => 19,  67 => 18,  63 => 16,  59 => 14,  56 => 13,  54 => 12,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bootstrap_v5_md_sortable_link.html.twig", "D:\\Symfony-Violet\\cineComments\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bootstrap_v5_md_sortable_link.html.twig");
    }
}
