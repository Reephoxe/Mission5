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

/* base.html.twig */
class __TwigTemplate_8ad43d121e71ec5b03f6ef3eb236d8e144e51e4f13941ced51fbb14df0fde038 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo " ";
        // line 10
        echo "    </head>
    <body>
        <div class=\"container\">
        ";
        // line 13
        $this->displayBlock('nav', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo " ";
        // line 46
        echo "

    

        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo " 
    </body>
     
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <!-- Core theme CSS (includes Bootstrap)-->
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 13
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "         <!-- Responsive navbar-->
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">CineComments</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                        <!--
                        <li class=\"nav-item\"><a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Lesfilms</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test");
        echo "\">Test</a></li>
                        -->
                        ";
        // line 25
        echo $this->extensions['Camurphy\BootstrapMenuBundle\Twig\Extension\MenuExtension']->renderMenu($this->env, "main");
        echo "
        
                    </ul>
                </div>
            </div>
        </nav>
        ";
    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "            <div class=\"container\">
            ";
        // line 34
        $this->displayBlock('main', $context, $blocks);
        // line 42
        echo " ";
        // line 43
        echo "            </div> <!-- body-container -->

        ";
    }

    // line 34
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "            <div class=\"row\">
                <div class=\"col-12\">
                <p>
                    <i>MAIN</i>
                </p>
                </div>
            </div>
            ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "            <!-- Bootstrap core JS-->
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
            <!-- Core theme JS-->
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 54,  178 => 51,  174 => 50,  163 => 35,  159 => 34,  153 => 43,  151 => 42,  149 => 34,  146 => 33,  142 => 32,  131 => 25,  126 => 23,  122 => 22,  114 => 17,  109 => 14,  105 => 13,  99 => 8,  96 => 7,  92 => 6,  85 => 5,  77 => 55,  75 => 50,  69 => 46,  67 => 45,  64 => 32,  62 => 13,  57 => 10,  55 => 9,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "D:\\Symfony-Violet\\cineComments\\templates\\base.html.twig");
    }
}
