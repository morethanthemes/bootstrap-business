<?php

/* core/modules/block/templates/block-list.html.twig */
class __TwigTemplate_bcf81328d8e0349334b50e1ebfe1ba9b3cc15036123d0c0e0156d30ea6f41ced extends Twig_Template
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
        // line 16
        echo "<div class=\"layout-block-list clearfix\">
  <div class=\"layout-region block-list-primary\">
    ";
        // line 18
        echo twig_render_var(twig_without((isset($context["form"]) ? $context["form"] : null), "place_blocks"));
        echo "
  </div>
  <div class=\"layout-region block-list-secondary\">
    ";
        // line 21
        echo twig_render_var($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "place_blocks"));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 21,  23 => 18,  19 => 16,);
    }
}
