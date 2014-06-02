<?php

/* core/modules/views/templates/views-mini-pager.html.twig */
class __TwigTemplate_a24cf75e4e72fb276ca85a1cb3192781ea382bb5e68d7626c74aaca98c558777 extends Twig_Template
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
        // line 14
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 15
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Pages"));
            echo "</h2>
  ";
            // line 16
            echo twig_render_var((isset($context["items"]) ? $context["items"] : null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 16,  21 => 15,  19 => 14,);
    }
}
