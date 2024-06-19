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

/* @costs/billable_dropdown.html.twig */
class __TwigTemplate_586a7879e513e5285c36126ee399f9ea extends Template
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
        // line 34
        echo "
";
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@costs/billable_dropdown.html.twig", 35)->unwrap();
        // line 36
        echo "
<div id=\"billeable_dropdown\">

    ";
        // line 39
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["cost_billable",         // line 41
($context["billable"] ?? null), __("Billable", "cost"),         // line 43
($context["options"] ?? null)], 39, $context, $this->getSourceContext());
        // line 44
        echo "

</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@costs/billable_dropdown.html.twig";
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
        return array (  51 => 44,  49 => 43,  48 => 41,  47 => 39,  42 => 36,  40 => 35,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "@costs/billable_dropdown.html.twig", "F:\\OSPanel\\domains\\glpi\\plugins\\costs\\templates\\billable_dropdown.html.twig");
    }
}
