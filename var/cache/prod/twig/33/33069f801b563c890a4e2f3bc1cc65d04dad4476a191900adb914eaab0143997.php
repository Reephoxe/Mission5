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

/* @EasyAdmin/page/content.html.twig */
class __TwigTemplate_681abf507eb70595deacc4447c5d78edf4506017e6c715f68f9357e63996aa55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'page_content' => [$this, 'block_page_content'],
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 2), "@EasyAdmin/page/content.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_e9218e64e2eaa0ce40a7d1b6fb95105c7b3be833a1f4a328bcf57a1cb3ff1a58"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3);
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-content";
    }

    // line 8
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("page_title", $context, $blocks);
    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("page_content", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  71 => 15,  65 => 12,  59 => 8,  52 => 5,  48 => 2,  46 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/content.html.twig", "D:\\Symfony-Violet\\cineComments\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\content.html.twig");
    }
}
