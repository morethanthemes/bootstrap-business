<?php

/* themes/bootstrap-business/templates/node.html.twig */
class __TwigTemplate_488cbf95ca85b832eec7778f6dbab007b1d8ddbf5e2a99c24362fc8aa6baf0a5 extends Twig_Template
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
        // line 1
        echo "<article id=\"node-";
        echo twig_render_var($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id"));
        echo "\" class=\"";
        echo twig_render_var($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class"));
        echo " clearfix\" role=\"article\"";
        echo twig_render_var(twig_without((isset($context["attributes"]) ? $context["attributes"] : null), "id", "class", "role"));
        echo ">

  <header>
    ";
        // line 4
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
    ";
        // line 5
        if ((!(isset($context["page"]) ? $context["page"] : null))) {
            // line 6
            echo "      <h2";
            echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
            echo ">
        <a href=\"";
            // line 7
            echo twig_render_var((isset($context["node_url"]) ? $context["node_url"] : null));
            echo "\">";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "</a>
      </h2>
    ";
        }
        // line 10
        echo "    ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "

    ";
        // line 12
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 13
            echo "      <div class=\"meta submitted\">
        ";
            // line 14
            echo twig_render_var((isset($context["user_picture"]) ? $context["user_picture"] : null));
            echo "
        <span class=\"glyphicon glyphicon-calendar\"></span> ";
            // line 15
            echo twig_render_var((isset($context["submitted"]) ? $context["submitted"] : null));
            echo "
      </div>
    ";
        }
        // line 18
        echo "  </header>

  <div class=\"content clearfix\"";
        // line 20
        echo twig_render_var((isset($context["content_attributes"]) ? $context["content_attributes"] : null));
        echo ">
    ";
        // line 21
        echo twig_render_var(twig_without((isset($context["content"]) ? $context["content"] : null), "links"));
        echo "
  </div>

  ";
        // line 24
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links")) {
            // line 25
            echo "    <footer class=\"link-wrapper\">
      ";
            // line 26
            echo twig_render_var($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links"));
            echo "
    </footer>
  ";
        }
        // line 29
        echo "
</article>";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap-business/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  89 => 26,  86 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 18,  64 => 15,  60 => 14,  57 => 13,  55 => 12,  49 => 10,  41 => 7,  36 => 6,  34 => 5,  30 => 4,  19 => 1,);
    }
}
