<?php

/* core/modules/comment/templates/comment-wrapper.html.twig */
class __TwigTemplate_0775bbe0f22b749a5960e34f0ea0e91524749b3a9bd60be3587a3d67498eaed9 extends Twig_Template
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
        // line 38
        echo "<section";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 39
        if (((isset($context["comments"]) ? $context["comments"] : null) && (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "entityType") != "node") || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "bundle") != "forum")))) {
            // line 40
            echo "    ";
            echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
            echo "
    <h2 class=\"title\">";
            // line 41
            echo twig_render_var(t("Comments"));
            echo "</h2>
    ";
            // line 42
            echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
            echo "
  ";
        }
        // line 44
        echo "
  ";
        // line 45
        echo twig_render_var((isset($context["comments"]) ? $context["comments"] : null));
        echo "

  ";
        // line 47
        if ((isset($context["form"]) ? $context["form"] : null)) {
            // line 48
            echo "    <h2 class=\"title comment-form\">";
            echo twig_render_var(t("Add new comment"));
            echo "</h2>
    ";
            // line 49
            echo twig_render_var((isset($context["form"]) ? $context["form"] : null));
            echo "
  ";
        }
        // line 51
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "core/modules/comment/templates/comment-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 51,  55 => 49,  50 => 48,  43 => 45,  40 => 44,  35 => 42,  31 => 41,  26 => 40,  24 => 39,  121 => 121,  117 => 119,  111 => 116,  108 => 115,  106 => 114,  99 => 110,  95 => 109,  90 => 107,  84 => 106,  80 => 105,  74 => 103,  65 => 91,  59 => 88,  56 => 87,  53 => 86,  48 => 47,  42 => 76,  36 => 73,  29 => 69,  19 => 38,);
    }
}
