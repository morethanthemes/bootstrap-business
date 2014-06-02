<?php

/* core/modules/system/templates/admin-block.html.twig */
class __TwigTemplate_f649c13c2411f1b4731d693fd59eea002454f8757abda203082789805a5aec55 extends Twig_Template
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
        echo "<div class=\"admin-panel\">
  ";
        // line 18
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title")) {
            // line 19
            echo "    <h3>";
            echo twig_render_var($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title"));
            echo "</h3>
  ";
        }
        // line 21
        echo "  ";
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content")) {
            // line 22
            echo "    <div class=\"body\">";
            echo twig_render_var($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content"));
            echo "</div>
  ";
        } elseif ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description")) {
            // line 24
            echo "    <div class=\"description\">";
            echo twig_render_var($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description"));
            echo "</div>
  ";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 26,  33 => 22,  24 => 19,  55 => 26,  48 => 24,  39 => 24,  35 => 21,  30 => 21,  26 => 19,  22 => 18,  19 => 17,);
    }
}
