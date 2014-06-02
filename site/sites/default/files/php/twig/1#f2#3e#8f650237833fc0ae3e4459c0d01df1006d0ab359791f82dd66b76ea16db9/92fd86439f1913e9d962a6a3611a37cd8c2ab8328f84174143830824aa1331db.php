<?php

/* core/modules/system/templates/feed-icon.html.twig */
class __TwigTemplate_f23e8f650237833fc0ae3e4459c0d01df1006d0ab359791f82dd66b76ea16db9 extends Twig_Template
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
        // line 18
        echo "<a href=\"";
        echo twig_render_var((isset($context["url"]) ? $context["url"] : null));
        echo "\"";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["icon"]) ? $context["icon"] : null));
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 35,  56 => 33,  51 => 31,  37 => 28,  32 => 27,  25 => 24,  23 => 23,  31 => 21,  27 => 20,  21 => 22,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 63,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  46 => 48,  43 => 47,  41 => 29,  36 => 22,  30 => 26,  28 => 42,  29 => 30,  26 => 16,  24 => 41,  19 => 18,);
    }
}
