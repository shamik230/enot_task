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

/* Users/Views/login.twig */
class __TwigTemplate_7603bd8bf341f74f78b03910576edc30 extends Template
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
        echo "<form method=\"post\">
\t<div>
\t\t<div>Login</div>
\t\t<div><input type=\"text\" name=\"login\"></div>
\t</div>
\t<div>
\t\t<div>Password</div>
\t\t<div><input type=\"password\" name=\"password\"></div>
\t</div>
\t<button>Enter</button>
\t";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "\t\t<div>Please check login or password</div>
\t";
        }
        // line 14
        echo "</form>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Users/Views/login.twig";
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
        return array (  55 => 14,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Users/Views/login.twig", "C:\\Users\\shamil\\Projects\\php\\converter\\Modules\\Users\\Views\\login.twig");
    }
}
