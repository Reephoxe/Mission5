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

/* @BootstrapMenu/dropdown_item.html.twig */
class __TwigTemplate_0bb9e306decdff85021c64d64862c6d91a644664b316913f90d4fc34bddc327a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropdown_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropdown_item.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 2, $this->source); })()), "is_divider", [], "any", false, false, false, 2)) {
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 3, $this->source); })()), "index", [], "any", false, false, false, 3) > 0)) {
                // line 4
                echo "      <div class=\"dropdown-divider\"></div>
    ";
            }
            // line 6
            echo "
    ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "label", [], "any", true, true, false, 7)) {
                // line 8
                echo "      <h6 class=\"dropdown-header\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 8, $this->source); })()), "label", [], "any", false, false, false, 8), "html", null, true);
                echo "</h6>
    ";
            }
            // line 10
            echo "  ";
        } else {
            // line 11
            echo "    <a class=\"dropdown-item\" ";
            $this->loadTemplate("@BootstrapMenu/href.html.twig", "@BootstrapMenu/dropdown_item.html.twig", 11)->display(twig_array_merge($context, ["menu_item" => (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 11, $this->source); })())]));
            echo ">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 12, $this->source); })()), "label", [], "any", false, false, false, 12), "html", null, true);
            // line 13
            echo "</a>
  ";
        }
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_7_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BootstrapMenu/dropdown_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 1,  75 => 13,  73 => 12,  69 => 11,  66 => 10,  60 => 8,  58 => 7,  55 => 6,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
  {% if menu_item.is_divider %}
    {% if menu_item.index > 0 %}
      <div class=\"dropdown-divider\"></div>
    {% endif %}

    {% if menu_item.label is defined %}
      <h6 class=\"dropdown-header\">{{ menu_item.label }}</h6>
    {% endif %}
  {% else %}
    <a class=\"dropdown-item\" {% include '@BootstrapMenu/href.html.twig' with { menu_item } %}>
      {{- menu_item.label -}}
    </a>
  {% endif %}
{% endapply %}
", "@BootstrapMenu/dropdown_item.html.twig", "D:\\Symfony-Violet\\cineComments\\vendor\\camurphy\\bootstrap-menu-bundle\\Resources\\views\\dropdown_item.html.twig");
    }
}
