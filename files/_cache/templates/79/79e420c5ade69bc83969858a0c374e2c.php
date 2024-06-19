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

/* @costs/config.html.twig */
class __TwigTemplate_74aba3852e9c13a3d3633a39383fb71d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@costs/config.html.twig", 35)->unwrap();
        // line 36
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("components/form/buttons.html.twig", "@costs/config.html.twig", 36)->unwrap();
        // line 37
        echo "
";
        // line 38
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (_twig_default_filter(($context["no_header"] ?? null), ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 38) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 38), false)) : (false))))) : (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 38) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 38), false)) : (false)))));
        // line 39
        $context["bg"] = "";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 40)) {
            // line 41
            $context["bg"] = "asset-deleted";
        }
        // line 43
        echo "
<div class=\"asset ";
        // line 44
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">

    ";
        // line 46
        echo twig_include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true, "no_header" => true]);
        echo "
    ";
        // line 47
        $context["params"] = (($context["params"]) ?? ([]));
        // line 48
        echo "
    <div class=\"card-body d-flex flex-wrap\">
        <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
                        <input type=\"hidden\" name=\"id\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\" />

                        <div class=\"d-flex flex-wrap\">

                            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isfield", ["taskdescription"], "method", false, false, false, 59)) {
            // line 60
            echo "                            ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["taskdescription", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 62
($context["item"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["taskdescription"] ?? null) : null), __("Add task description on cost", "cost")], 60, $context, $this->getSourceContext());
            // line 64
            echo "
                            ";
        }
        // line 66
        echo "
                        </div>

                    </div> ";
        // line 70
        echo "                </div> ";
        // line 71
        echo "            </div> ";
        // line 72
        echo "        </div> ";
        // line 73
        echo "    </div> ";
        // line 74
        echo "
    ";
        // line 75
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@costs/config.html.twig";
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
        return array (  115 => 75,  112 => 74,  110 => 73,  108 => 72,  106 => 71,  104 => 70,  99 => 66,  95 => 64,  93 => 62,  91 => 60,  89 => 59,  82 => 55,  78 => 54,  70 => 48,  68 => 47,  64 => 46,  59 => 44,  56 => 43,  53 => 41,  51 => 40,  49 => 39,  47 => 38,  44 => 37,  42 => 36,  40 => 35,  37 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "@costs/config.html.twig", "F:\\OSPanel\\domains\\glpi\\plugins\\costs\\templates\\config.html.twig");
    }
}
