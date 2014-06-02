<?php

/* core/modules/system/templates/textarea.html.twig */
class __TwigTemplate_53a952ddf85b347a7e265da355a163949718182f31db8522eb1715d19a644a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 16
        echo "<div";
        echo twig_render_var((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null));
        echo "><textarea";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["value"]) ? $context["value"] : null));
        echo "</textarea></div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 34,  49 => 33,  45 => 31,  39 => 29,  30 => 26,  28 => 25,  21 => 23,  60 => 51,  55 => 49,  50 => 48,  43 => 45,  40 => 44,  35 => 42,  31 => 41,  26 => 40,  24 => 24,  121 => 121,  117 => 119,  111 => 116,  108 => 115,  106 => 114,  99 => 110,  95 => 109,  90 => 107,  84 => 106,  80 => 105,  74 => 103,  65 => 91,  59 => 88,  56 => 87,  53 => 86,  48 => 47,  42 => 76,  36 => 28,  29 => 69,  19 => 16,);
    }
}
