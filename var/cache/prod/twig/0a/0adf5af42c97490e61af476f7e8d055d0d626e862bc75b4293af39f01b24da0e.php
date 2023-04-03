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

/* @BootstrapMenu/href.html.twig */
class __TwigTemplate_a1e9ccec943a98494022b25e6a260b779b0b8c01a2b35ac1a3b184c372d2b087 extends Template
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
        // line 1
        ob_start(function () { return ''; });
        // line 2
        echo "  href=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "route", [], "any", true, true, false, 2)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "route", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "route_parameters", [], "any", false, false, false, 2)), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "url", [], "any", true, true, false, 2)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "url", [], "any", false, false, false, 2), "html", null, true);
        } else {
            echo "#";
        }
        echo "\"
";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_6_);
    }

    public function getTemplateName()
    {
        return "@BootstrapMenu/href.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BootstrapMenu/href.html.twig", "D:\\Symfony-Violet\\cineComments\\vendor\\camurphy\\bootstrap-menu-bundle\\Resources\\views\\href.html.twig");
    }
}
