<?php

/* core/modules/color/templates/color-scheme-form.html.twig */
class __TwigTemplate_df6b091f09b077d6dd1130118341272b88927786975138f98460ebb07525ab90 extends Twig_Template
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
        echo "<div class=\"color-form clearfix\">
  ";
        // line 19
        echo twig_render_var($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "scheme"));
        echo "
  <div id=\"palette\" class=\"clearfix\">
    ";
        // line 21
        echo twig_render_var($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "palette"));
        echo "
  </div>
  ";
        // line 23
        echo twig_render_var(twig_without((isset($context["form"]) ? $context["form"] : null), "scheme", "palette"));
        echo "
  <h2>";
        // line 24
        echo twig_render_var(t("Preview"));
        echo "</h2>
  ";
        // line 25
        echo twig_render_var((isset($context["html_preview"]) ? $context["html_preview"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/color/templates/color-scheme-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 25,  36 => 24,  32 => 23,  27 => 21,  22 => 19,  19 => 18,);
    }
}
