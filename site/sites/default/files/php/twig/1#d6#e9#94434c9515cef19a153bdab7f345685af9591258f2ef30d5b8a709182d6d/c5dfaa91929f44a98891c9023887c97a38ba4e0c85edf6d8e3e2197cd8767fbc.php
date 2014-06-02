<?php

/* core/modules/system/templates/field.html.twig */
class __TwigTemplate_d6e994434c9515cef19a153bdab7f345685af9591258f2ef30d5b8a709182d6d extends Twig_Template
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
        // line 32
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 33
        if ((!(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 34
            echo "    <div class=\"field-label\"";
            echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
            echo ">";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo ":&nbsp;</div>
  ";
        }
        // line 36
        echo "  <div class=\"field-items\"";
        echo twig_render_var((isset($context["content_attributes"]) ? $context["content_attributes"] : null));
        echo ">
    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 38
            echo "      <div class=\"field-item\"";
            echo twig_render_var($this->getAttribute((isset($context["item_attributes"]) ? $context["item_attributes"] : null), (isset($context["delta"]) ? $context["delta"] : null), array(), "array"));
            echo ">";
            echo twig_render_var((isset($context["item"]) ? $context["item"] : null));
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 40,  43 => 38,  39 => 37,  26 => 34,  24 => 33,  23 => 16,  95 => 29,  89 => 26,  86 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 18,  64 => 15,  60 => 14,  57 => 13,  55 => 12,  49 => 10,  41 => 7,  36 => 6,  34 => 36,  30 => 4,  19 => 32,);
    }
}
