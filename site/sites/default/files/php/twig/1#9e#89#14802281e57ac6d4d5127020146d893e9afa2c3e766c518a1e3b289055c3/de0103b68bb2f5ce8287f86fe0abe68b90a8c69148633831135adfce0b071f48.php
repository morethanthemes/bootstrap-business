<?php

/* core/modules/system/templates/breadcrumb.html.twig */
class __TwigTemplate_9e8914802281e57ac6d4d5127020146d893e9afa2c3e766c518a1e3b289055c3 extends Twig_Template
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
        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <nav class=\"breadcrumb\" role=\"navigation\">
    <h2 class=\"visually-hidden\">";
            // line 14
            echo twig_render_var(t("You are here"));
            echo "</h2>
    <ol>
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "      <li>";
                echo twig_render_var((isset($context["item"]) ? $context["item"] : null));
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 17,  112 => 105,  104 => 101,  98 => 98,  95 => 97,  92 => 96,  86 => 93,  83 => 92,  80 => 91,  74 => 89,  72 => 88,  62 => 83,  56 => 81,  42 => 19,  40 => 73,  29 => 16,  27 => 69,  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 49,  21 => 13,  85 => 44,  79 => 43,  65 => 84,  50 => 32,  47 => 47,  28 => 27,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 80,  35 => 72,  26 => 25,  24 => 14,  51 => 48,  48 => 76,  46 => 47,  43 => 46,  41 => 46,  36 => 29,  34 => 23,  32 => 28,  25 => 41,  23 => 68,  19 => 12,);
    }
}
