<?php

/* core/modules/datetime/templates/datetime-wrapper.html.twig */
class __TwigTemplate_1f5b326c0328546d867136869132bb63a8d4a9e5cc7568738dbfdbf6e60c244d extends Twig_Template
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
        // line 17
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 18
            echo "  <h4";
            echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
            echo ">";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</h4>
";
        }
        // line 20
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "
";
        // line 21
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 22
            echo "  <div class=\"description\">";
            echo twig_render_var((isset($context["description"]) ? $context["description"] : null));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/datetime/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 21,  21 => 18,  24 => 16,  35 => 22,  29 => 20,  23 => 20,  19 => 17,);
    }
}
