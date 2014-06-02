<?php

/* core/modules/datetime/templates/datetime-form.html.twig */
class __TwigTemplate_3b2b77c56654f7d28fdf26a4910f500014ae39519f92526437f9e427f58cc08a extends Twig_Template
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
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 16
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/datetime/templates/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 16,  35 => 26,  29 => 23,  23 => 20,  19 => 15,);
    }
}
