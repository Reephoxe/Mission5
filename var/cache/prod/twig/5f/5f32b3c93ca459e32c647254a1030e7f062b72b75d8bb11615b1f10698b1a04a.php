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
class __TwigTemplate_b7290d492374ee9a5af46a80621ebe3af448344a41ea76bf7a7572fe167491ea extends Template
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
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "is_divider", [], "any", false, false, false, 2)) {
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "index", [], "any", false, false, false, 3) > 0)) {
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "label", [], "any", false, false, false, 8), "html", null, true);
                echo "</h6>
    ";
            }
            // line 10
            echo "  ";
        } else {
            // line 11
            echo "    <a class=\"dropdown-item\" ";
            $this->loadTemplate("@BootstrapMenu/href.html.twig", "@BootstrapMenu/dropdown_item.html.twig", 11)->display(twig_array_merge($context, ["menu_item" => ($context["menu_item"] ?? null)]));
            echo ">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "label", [], "any", false, false, false, 12), "html", null, true);
            // line 13
            echo "</a>
  ";
        }
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_5_);
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
        return array (  74 => 1,  69 => 13,  67 => 12,  63 => 11,  60 => 10,  54 => 8,  52 => 7,  49 => 6,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BootstrapMenu/dropdown_item.html.twig", "D:\\Symfony-Violet\\cineComments\\vendor\\camurphy\\bootstrap-menu-bundle\\Resources\\views\\dropdown_item.html.twig");
    }
}
