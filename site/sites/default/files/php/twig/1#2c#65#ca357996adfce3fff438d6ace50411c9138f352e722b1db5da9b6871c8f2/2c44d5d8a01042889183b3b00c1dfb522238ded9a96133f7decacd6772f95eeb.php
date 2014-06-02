<?php

/* core/modules/filter/templates/text-format-wrapper.html.twig */
class __TwigTemplate_2c65ca357996adfce3fff438d6ace50411c9138f352e722b1db5da9b6871c8f2 extends Twig_Template
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
        echo "<div class=\"text-format-wrapper form-item\">
  ";
        // line 17
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "
  ";
        // line 18
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 19
            echo "    <div";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            echo twig_render_var((isset($context["description"]) ? $context["description"] : null));
            echo "</div>
  ";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 17,  104 => 49,  101 => 48,  91 => 45,  89 => 44,  86 => 43,  82 => 41,  71 => 39,  67 => 38,  64 => 37,  62 => 36,  46 => 31,  32 => 26,  27 => 24,  54 => 33,  49 => 32,  45 => 31,  39 => 29,  30 => 25,  28 => 19,  21 => 22,  60 => 51,  55 => 49,  50 => 48,  43 => 45,  40 => 44,  35 => 27,  31 => 41,  26 => 18,  24 => 23,  121 => 121,  117 => 119,  111 => 116,  108 => 115,  106 => 50,  99 => 110,  95 => 47,  90 => 107,  84 => 106,  80 => 105,  74 => 103,  65 => 91,  59 => 35,  56 => 87,  53 => 86,  48 => 47,  42 => 30,  36 => 21,  29 => 69,  19 => 16,);
    }
}
