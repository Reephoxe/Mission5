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
class __TwigTemplate_4438e3fded1b39fe2264a8fedff837cde66573dba0614434ff16b2b0d8fbde66 extends Template
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
        $context["data_attribute_name"] = "data-bs-toggle";
        // line 2
        echo "
";
        // line 3
        if ((($context["bootstrap_version"] ?? null) == 4)) {
            // line 4
            echo "  ";
            $context["data_attribute_name"] = "data-toggle";
        }
        // line 6
        echo "
";
        // line 7
        ob_start(function () { return ''; });
        // line 8
        echo "  <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" ";
        // line 9
        echo twig_escape_filter($this->env, ($context["data_attribute_name"] ?? null), "html", null, true);
        echo "=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "label", [], "any", false, false, false, 10), "html", null, true);
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
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo twig_spaceless($___internal_parse_4_);
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
        return array (  107 => 7,  102 => 17,  88 => 16,  85 => 15,  82 => 14,  65 => 13,  61 => 11,  59 => 10,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BootstrapMenu/dropdown.html.twig", "D:\\Symfony-Violet\\cineComments\\vendor\\camurphy\\bootstrap-menu-bundle\\Resources\\views\\dropdown.html.twig");
    }
}
