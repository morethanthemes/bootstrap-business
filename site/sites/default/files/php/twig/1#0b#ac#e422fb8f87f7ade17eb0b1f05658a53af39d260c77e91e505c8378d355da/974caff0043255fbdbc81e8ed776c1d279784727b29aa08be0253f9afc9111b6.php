<?php

/* core/modules/rdf/templates/rdf-metadata.html.twig */
class __TwigTemplate_0bace422fb8f87f7ade17eb0b1f05658a53af39d260c77e91e505c8378d355da extends Twig_Template
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
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metadata"]) ? $context["metadata"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
            // line 16
            echo "  <span";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo "></span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/rdf/templates/rdf-metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 16,  95 => 29,  89 => 26,  86 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 18,  64 => 15,  60 => 14,  57 => 13,  55 => 12,  49 => 10,  41 => 7,  36 => 6,  34 => 5,  30 => 4,  19 => 15,);
    }
}
