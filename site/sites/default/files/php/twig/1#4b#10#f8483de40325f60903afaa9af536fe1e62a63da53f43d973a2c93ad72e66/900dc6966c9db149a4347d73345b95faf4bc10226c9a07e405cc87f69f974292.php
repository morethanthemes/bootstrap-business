<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_4b10f8483de40325f60903afaa9af536fe1e62a63da53f43d973a2c93ad72e66 extends Twig_Template
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
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
    ";
            // line 25
            echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 49,  21 => 24,  85 => 44,  79 => 43,  65 => 37,  50 => 32,  47 => 47,  28 => 27,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 33,  35 => 43,  26 => 25,  24 => 26,  51 => 48,  48 => 48,  46 => 47,  43 => 46,  41 => 46,  36 => 29,  34 => 23,  32 => 28,  25 => 41,  23 => 40,  19 => 23,);
    }
}
