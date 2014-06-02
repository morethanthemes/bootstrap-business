<?php

/* core/modules/system/templates/field-multiple-value-form.html.twig */
class __TwigTemplate_43e67117279f13cf487413fe21326a144e125e8581f8d172982f9b3fc641ece9 extends Twig_Template
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
        // line 22
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 23
            echo "  <div class=\"form-item\">
    ";
            // line 24
            echo twig_render_var((isset($context["table"]) ? $context["table"] : null));
            echo "
    ";
            // line 25
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 26
                echo "      <div class=\"description\">";
                echo twig_render_var((isset($context["description"]) ? $context["description"] : null));
                echo "</div>
    ";
            }
            // line 28
            echo "    ";
            if ((isset($context["button"]) ? $context["button"] : null)) {
                // line 29
                echo "      <div class=\"clearfix\">";
                echo twig_render_var((isset($context["button"]) ? $context["button"] : null));
                echo "</div>
    ";
            }
            // line 31
            echo "  </div>
";
        } else {
            // line 33
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 34
                echo "    ";
                echo twig_render_var((isset($context["element"]) ? $context["element"] : null));
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/field-multiple-value-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 34,  49 => 33,  45 => 31,  39 => 29,  30 => 26,  28 => 25,  21 => 23,  60 => 51,  55 => 49,  50 => 48,  43 => 45,  40 => 44,  35 => 42,  31 => 41,  26 => 40,  24 => 24,  121 => 121,  117 => 119,  111 => 116,  108 => 115,  106 => 114,  99 => 110,  95 => 109,  90 => 107,  84 => 106,  80 => 105,  74 => 103,  65 => 91,  59 => 88,  56 => 87,  53 => 86,  48 => 47,  42 => 76,  36 => 28,  29 => 69,  19 => 22,);
    }
}
