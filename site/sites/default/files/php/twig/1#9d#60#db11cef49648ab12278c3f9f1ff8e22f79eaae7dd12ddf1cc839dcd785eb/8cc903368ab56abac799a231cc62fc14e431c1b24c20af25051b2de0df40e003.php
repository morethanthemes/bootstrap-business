<?php

/* core/modules/system/templates/pager.html.twig */
class __TwigTemplate_9d60db11cef49648ab12278c3f9f1ff8e22f79eaae7dd12ddf1cc839dcd785eb extends Twig_Template
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
        // line 14
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 15
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Pages"));
            echo "</h2>
  ";
            // line 16
            echo twig_render_var((isset($context["items"]) ? $context["items"] : null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 21,  27 => 20,  21 => 15,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 63,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  46 => 48,  43 => 47,  41 => 46,  36 => 22,  30 => 43,  28 => 42,  29 => 30,  26 => 16,  24 => 41,  19 => 14,);
    }
}
