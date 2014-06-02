<?php

/* core/modules/filter/templates/filter-guidelines.html.twig */
class __TwigTemplate_d6f515211d48ff6db92dc58ced45abeef4ca0e32f9452260b5528de6132e5fd2 extends Twig_Template
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
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  <h4 class=\"label\">";
        // line 23
        echo twig_render_var(twig_escape_filter($this->env, $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "name")));
        echo "</h4>
  ";
        // line 24
        echo twig_render_var((isset($context["tips"]) ? $context["tips"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 34,  49 => 33,  45 => 31,  39 => 29,  30 => 26,  28 => 24,  21 => 23,  60 => 51,  55 => 49,  50 => 48,  43 => 45,  40 => 44,  35 => 42,  31 => 41,  26 => 40,  24 => 23,  121 => 121,  117 => 119,  111 => 116,  108 => 115,  106 => 114,  99 => 110,  95 => 109,  90 => 107,  84 => 106,  80 => 105,  74 => 103,  65 => 91,  59 => 88,  56 => 87,  53 => 86,  48 => 47,  42 => 76,  36 => 28,  29 => 69,  19 => 22,);
    }
}
