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

/* Converter/Views/index.twig */
class __TwigTemplate_905a41c21541c380f53db583d3814336 extends Template
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
        echo "<h2>Converter</h2>
<form method=\"post\">
    <label for=\"currency\">Choose a currency:</label>
    <select id=\"currency\" name=\"currency\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 6
            echo "            <option value=\"";
            echo (($__internal_compile_0 = $context["currency"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["charcode"] ?? null) : null);
            echo "\">";
            echo (($__internal_compile_1 = $context["currency"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </select>

    <br>

    <label for=\"amount\">Enter amount:</label>
    <input type=\"number\" id=\"amount\" name=\"amount\" required>

    <br>

    <input type=\"checkbox\" id=\"convertFromRuble\" name=\"convertFromRuble\" value=\"1\">
    <label for=\"convertFromRuble\">Convert from Ruble</label>

    <br>

    <button type=\"submit\">Convert</button>
</form>

";
        // line 25
        if ((array_key_exists("rate", $context) && array_key_exists("convertedAmount", $context))) {
            // line 26
            echo "    <p>Exchange Rate: ";
            echo ($context["rate"] ?? null);
            echo "</p>
    <p>Converted Amount: ";
            // line 27
            echo ($context["convertedAmount"] ?? null);
            echo "</p>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Converter/Views/index.twig";
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
        return array (  84 => 27,  79 => 26,  77 => 25,  58 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Converter/Views/index.twig", "C:\\Users\\shamil\\Projects\\php\\converter\\Modules\\Converter\\Views\\index.twig");
    }
}
