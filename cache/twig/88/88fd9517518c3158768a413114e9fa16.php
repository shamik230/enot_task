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

/* Base/main.twig */
class __TwigTemplate_a13cf9d091e9a93c57c82aa316bf9f2b extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body>
\t<h1>Converter</h1>
\t<hr>
\t";
        // line 12
        if (($context["isAuth"] ?? null)) {
            // line 13
            echo "\t\t<a href=\"";
            echo ($context["baseUrl"] ?? null);
            echo "home\">Home</a> |
\t\t<a href=\"";
            // line 14
            echo ($context["baseUrl"] ?? null);
            echo "logout\">Log out</a> |
\t";
        } else {
            // line 16
            echo "\t\t<a href=\"";
            echo ($context["baseUrl"] ?? null);
            echo "\">Login</a> |
\t\t<a href=\"";
            // line 17
            echo ($context["baseUrl"] ?? null);
            echo "register\">Register</a> |
\t";
        }
        // line 19
        echo "\t<hr>
\t";
        // line 20
        echo ($context["content"] ?? null);
        echo "
\t<hr>
</body>
</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Base/main.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  78 => 20,  75 => 19,  70 => 17,  65 => 16,  60 => 14,  55 => 13,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Base/main.twig", "C:\\Users\\shamil\\Projects\\php\\converter\\Modules\\Base\\main.twig");
    }
}
