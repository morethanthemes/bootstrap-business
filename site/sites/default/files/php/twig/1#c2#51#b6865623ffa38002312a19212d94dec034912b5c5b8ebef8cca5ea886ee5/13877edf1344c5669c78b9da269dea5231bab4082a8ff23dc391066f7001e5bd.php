<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_c251b6865623ffa38002312a19212d94dec034912b5c5b8ebef8cca5ea886ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 44
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 45
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
  ";
        // line 46
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 47
            echo "    <h2";
            echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
            echo ">";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "</h2>
  ";
        }
        // line 49
        echo "  ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "

  <div";
        // line 51
        echo twig_render_var((isset($context["content_attributes"]) ? $context["content_attributes"] : null));
        echo ">
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "  </div>
</div>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "      ";
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 52,  31 => 47,  20 => 44,  81 => 46,  68 => 41,  64 => 39,  45 => 51,  39 => 49,  30 => 28,  33 => 17,  112 => 105,  104 => 101,  98 => 98,  95 => 97,  92 => 96,  86 => 93,  83 => 92,  80 => 91,  74 => 43,  72 => 88,  62 => 83,  56 => 81,  42 => 19,  40 => 73,  29 => 46,  27 => 69,  76 => 58,  70 => 56,  67 => 54,  60 => 53,  55 => 37,  21 => 13,  85 => 44,  79 => 43,  65 => 84,  50 => 32,  47 => 47,  28 => 27,  77 => 44,  71 => 39,  66 => 54,  63 => 36,  57 => 52,  54 => 80,  35 => 72,  26 => 25,  24 => 14,  51 => 55,  48 => 35,  46 => 47,  43 => 46,  41 => 46,  36 => 31,  34 => 23,  32 => 29,  25 => 45,  23 => 27,  19 => 26,);
    }
}
