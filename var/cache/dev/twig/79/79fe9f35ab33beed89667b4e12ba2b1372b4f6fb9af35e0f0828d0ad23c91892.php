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
class __TwigTemplate_40a6796a8dc4c6684c2b1d67a7fa060fb8ad88985e4b6f84356334bb2c27ec28 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/href.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/href.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "  href=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "route", [], "any", true, true, false, 2)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 2, $this->source); })()), "route", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 2, $this->source); })()), "route_parameters", [], "any", false, false, false, 2)), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "url", [], "any", true, true, false, 2)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 2, $this->source); })()), "url", [], "any", false, false, false, 2), "html", null, true);
        } else {
            echo "#";
        }
        echo "\"
";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_8_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  57 => 1,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
  href=\"{% if menu_item.route is defined %}{{ path(menu_item.route, menu_item.route_parameters) }}{% elseif menu_item.url is defined %}{{ menu_item.url }}{% else %}#{% endif %}\"
{% endapply %}
", "@BootstrapMenu/href.html.twig", "D:\\Symfony-Violet\\cineComments\\vendor\\camurphy\\bootstrap-menu-bundle\\Resources\\views\\href.html.twig");
    }
}
