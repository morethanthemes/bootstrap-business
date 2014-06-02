<?php

/* core/modules/system/templates/item-list.html.twig */
class __TwigTemplate_93736bd6a1548841884aadaab97ccae8f360f3b9be0fa8f334efcfd2a71539c1 extends Twig_Template
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
        // line 21
        if (((isset($context["items"]) ? $context["items"] : null) || (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 22
            echo "<div class=\"item-list\">";
            // line 23
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 24
                echo "<h3>";
                echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
                echo "</h3>";
            }
            // line 26
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 27
                echo "<";
                echo twig_render_var((isset($context["list_type"]) ? $context["list_type"] : null));
                echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
                echo ">";
                // line 28
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "<li";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "value"));
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "</";
                echo twig_render_var((isset($context["list_type"]) ? $context["list_type"] : null));
                echo ">";
            } else {
                // line 33
                echo twig_render_var((isset($context["empty"]) ? $context["empty"] : null));
            }
            // line 35
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 35,  56 => 33,  51 => 31,  37 => 28,  32 => 27,  25 => 24,  23 => 23,  31 => 21,  27 => 20,  21 => 22,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 63,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  46 => 48,  43 => 47,  41 => 29,  36 => 22,  30 => 26,  28 => 42,  29 => 30,  26 => 16,  24 => 41,  19 => 21,);
    }
}
