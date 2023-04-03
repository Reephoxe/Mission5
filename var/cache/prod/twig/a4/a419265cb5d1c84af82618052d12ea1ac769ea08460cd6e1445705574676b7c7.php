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

/* @BootstrapMenu/link.html.twig */
class __TwigTemplate_d6ab78a6ec6ba9fc2ac5840e240ca665e9563f33ca26ae33a2386d27d0712e74 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "label", [], "any", true, true, false, 2) && (twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "route", [], "any", true, true, false, 2) || twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "url", [], "any", true, true, false, 2)))) {
            // line 3
            echo "  <li class=\"nav-item\">
    <a class=\"nav-link\" ";
            // line 4
            $this->loadTemplate("@BootstrapMenu/href.html.twig", "@BootstrapMenu/link.html.twig", 4)->display(twig_array_merge($context, ["menu_item" => ($context["menu_item"] ?? null)]));
            echo ">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menu_item"] ?? null), "label", [], "any", false, false, false, 5), "html", null, true);
            // line 6
            echo "</a>
  </li>
  ";
        }
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_7_);
    }

    public function getTemplateName()
    {
        return "@BootstrapMenu/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 1,  50 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@BootstrapMenu/link.html.twig", "D:\\Symfony-Violet\\cineComments\\vendor\\camurphy\\bootstrap-menu-bundle\\Resources\\views\\link.html.twig");
    }
}
