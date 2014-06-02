<?php

/* core/modules/node/templates/node.html.twig */
class __TwigTemplate_6cb90e9eec2bc965750dcc8c4ea48d6da628a66d93aa8bf28a061084d6dc3af2 extends Twig_Template
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
        // line 78
        echo "<article id=\"node-";
        echo twig_render_var($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id"));
        echo "\" class=\"";
        echo twig_render_var($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class"));
        echo " clearfix\"";
        echo twig_render_var(twig_without((isset($context["attributes"]) ? $context["attributes"] : null), "id", "class"));
        echo ">

  ";
        // line 80
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
  ";
        // line 81
        if ((!(isset($context["page"]) ? $context["page"] : null))) {
            // line 82
            echo "    <h2";
            echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
            echo ">
      <a href=\"";
            // line 83
            echo twig_render_var((isset($context["node_url"]) ? $context["node_url"] : null));
            echo "\" rel=\"bookmark\">";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "</a>
    </h2>
  ";
        }
        // line 86
        echo "  ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "

  ";
        // line 88
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 89
            echo "    <footer>
      ";
            // line 90
            echo twig_render_var((isset($context["user_picture"]) ? $context["user_picture"] : null));
            echo "
      <p class=\"submitted\">";
            // line 91
            echo twig_render_var((isset($context["submitted"]) ? $context["submitted"] : null));
            echo "</p>
    </footer>
  ";
        }
        // line 94
        echo "
  <div";
        // line 95
        echo twig_render_var((isset($context["content_attributes"]) ? $context["content_attributes"] : null));
        echo ">
    ";
        // line 96
        echo twig_render_var(twig_without((isset($context["content"]) ? $context["content"] : null), "links"));
        echo "
  </div>

  ";
        // line 99
        echo twig_render_var($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links"));
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 99,  76 => 96,  72 => 95,  69 => 94,  63 => 91,  59 => 90,  56 => 89,  54 => 88,  48 => 86,  40 => 83,  33 => 81,  29 => 80,  35 => 82,  30 => 21,  26 => 20,  21 => 19,  19 => 78,);
    }
}
