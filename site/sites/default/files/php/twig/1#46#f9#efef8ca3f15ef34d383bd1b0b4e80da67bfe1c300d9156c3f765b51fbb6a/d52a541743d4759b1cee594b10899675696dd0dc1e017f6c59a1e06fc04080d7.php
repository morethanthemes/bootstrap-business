<?php

/* core/modules/system/templates/checkboxes.html.twig */
class __TwigTemplate_46f9efef8ca3f15ef34d383bd1b0b4e80da67bfe1c300d9156c3f765b51fbb6a extends Twig_Template
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
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 17,);
    }
}
