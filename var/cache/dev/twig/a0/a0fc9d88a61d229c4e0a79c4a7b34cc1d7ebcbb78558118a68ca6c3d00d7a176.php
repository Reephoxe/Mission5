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

/* @BootstrapMenu/dropdown.html.twig */
class __TwigTemplate_2fe7204be16ae706a1949c32cae46d02e9245f75c0e743d4d19c39bb3e0cc683 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropdown.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BootstrapMenu/dropdown.html.twig"));

        // line 1
        $context["data_attribute_name"] = "data-bs-toggle";
        // line 2
        echo "
";
        // line 3
        if (((isset($context["bootstrap_version"]) || array_key_exists("bootstrap_version", $context) ? $context["bootstrap_version"] : (function () { throw new RuntimeError('Variable "bootstrap_version" does not exist.', 3, $this->source); })()) == 4)) {
            // line 4
            echo "  ";
            $context["data_attribute_name"] = "data-toggle";
        }
        // line 6
        echo "
";
        // line 7
        ob_start();
        // line 8
        echo "  <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["data_attribute_name"]) || array_key_exists("data_attribute_name", $context) ? $context["data_attribute_name"] : (function () { throw new RuntimeError('Variable "data_attribute_name" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu_item"]) || array_key_exists("menu_item", $context) ? $context["menu_item"] : (function () { throw new RuntimeError('Variable "menu_item" does not exist.', 10, $this->source); })()), "label", [], "any", false, false, false, 10), "html", null, true);
        // line 11
        echo "</a>
    <div class=\"dropdown-menu\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu_item"], "items", [], "any", false, false, false, 13));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 14
            echo "        ";
            $context["menu_item"] = twig_array_merge($context["menu_item"], ["index" => twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 14)]);
            // line 15
            echo "        ";
            $this->loadTemplate("@BootstrapMenu/dropdown_item.html.twig", "@BootstrapMenu/dropdown.html.twig", 15)->display(twig_array_merge($context, ["menu_item" => $context["menu_item"]]));
            // line 16
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
  </li>
";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo twig_spaceless($___internal_parse_6_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BootstrapMenu/dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 7,  108 => 17,  94 => 16,  91 => 15,  88 => 14,  71 => 13,  67 => 11,  65 => 10,  62 => 9,  59 => 8,  57 => 7,  54 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set data_attribute_name = 'data-bs-toggle' %}

{% if bootstrap_version == 4 %}
  {% set data_attribute_name = 'data-toggle' %}
{% endif %}

{% apply spaceless %}
  <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" {{ data_attribute_name }}=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      {{- menu_item.label -}}
    </a>
    <div class=\"dropdown-menu\">
      {% for menu_item in menu_item.items %}
        {% set menu_item = menu_item|merge({ 'index': loop.index0 }) %}
        {% include '@BootstrapMenu/dropdown_item.html.twig' with { menu_item } %}
      {% endfor %}
    </div>
  </li>
{% endapply %}
", "@BootstrapMenu/dropdown.html.twig", "D:\\Symfony-Violet\\cineComments\\vendor\\camurphy\\bootstrap-menu-bundle\\Resources\\views\\dropdown.html.twig");
    }
}
