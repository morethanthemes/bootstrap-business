<?php

/* core/modules/node/templates/node-edit-form.html.twig */
class __TwigTemplate_4dd34b5a4b12a82f463757ea62afb35518459e873f733304521f16b0f7bcd320 extends Twig_Template
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
        // line 18
        echo "<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    ";
        // line 20
        echo twig_render_var(twig_without((isset($context["form"]) ? $context["form"] : null), "advanced", "actions"));
        echo "
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    ";
        // line 23
        echo twig_render_var($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "advanced"));
        echo "
  </div>
  <div class=\"layout-region layout-region-node-footer\">
    ";
        // line 26
        echo twig_render_var($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "actions"));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 26,  29 => 23,  23 => 20,  19 => 18,);
    }
}
