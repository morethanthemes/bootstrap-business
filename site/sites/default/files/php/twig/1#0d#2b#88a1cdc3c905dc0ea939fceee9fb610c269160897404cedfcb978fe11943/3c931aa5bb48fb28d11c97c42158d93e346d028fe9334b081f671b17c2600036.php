<?php

/* themes/bootstrap-business/templates/comment.html.twig */
class __TwigTemplate_0d2b88a1cdc3c905dc0ea939fceee9fb610c269160897404cedfcb978fe11943 extends Twig_Template
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
        // line 65
        echo "<article class=\"";
        echo twig_render_var($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class"));
        echo " clearfix\" role=\"article\"";
        echo twig_render_var(twig_without((isset($context["attributes"]) ? $context["attributes"] : null), "class", "role"));
        echo ">

  <header class=\"comment-header\">
    <div class=\"attribution\">
      ";
        // line 69
        echo twig_render_var((isset($context["user_picture"]) ? $context["user_picture"] : null));
        echo "

      <div class=\"submitted\">
        <p class=\"commenter-name\">
          ";
        // line 73
        echo twig_render_var((isset($context["author"]) ? $context["author"] : null));
        echo "
        </p>
        <p class=\"comment-time\">
          ";
        // line 76
        echo twig_render_var((isset($context["created"]) ? $context["created"] : null));
        echo "
        </p>
        <p class=\"comment-permalink\">
          ";
        // line 79
        echo twig_render_var((isset($context["permalink"]) ? $context["permalink"] : null));
        echo "
        </p>
        ";
        // line 86
        echo "        ";
        if ((isset($context["parent"]) ? $context["parent"] : null)) {
            // line 87
            echo "        <p class=\"comment-parent visually-hidden\">
          ";
            // line 88
            echo twig_render_var((isset($context["parent"]) ? $context["parent"] : null));
            echo "
        </p>
        ";
        }
        // line 91
        echo "      </div>
    </div> <!-- /.attribution -->
  </header> <!-- /.comment-header -->

  <div class=\"comment-text\">
    <div class=\"comment-arrow\"></div>

    ";
        // line 103
        echo "    <span class=\"hidden new\" data-comment-timestamp=\"";
        echo twig_render_var((isset($context["new_indicator_timestamp"]) ? $context["new_indicator_timestamp"] : null));
        echo "\"></span>

    ";
        // line 105
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
    <h3";
        // line 106
        echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
        echo "</h3>
    ";
        // line 107
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "

    <div";
        // line 109
        echo twig_render_var((isset($context["content_attributes"]) ? $context["content_attributes"] : null));
        echo ">
      ";
        // line 110
        echo twig_render_var(twig_without((isset($context["content"]) ? $context["content"] : null), "links"));
        echo "
    </div> <!-- /.content -->

    <footer class=\"comment-footer\">
      ";
        // line 114
        if ((isset($context["signature"]) ? $context["signature"] : null)) {
            // line 115
            echo "      <div class=\"user-signature clearfix\">
        ";
            // line 116
            echo twig_render_var((isset($context["signature"]) ? $context["signature"] : null));
            echo "
      </div>
      ";
        }
        // line 119
        echo "
      <nav>
        ";
        // line 121
        echo twig_render_var($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links"));
        echo "
      </nav>
    </footer> <!-- /.comment-footer -->
  </div> <!-- /.comment-text -->

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap-business/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 121,  117 => 119,  111 => 116,  108 => 115,  106 => 114,  99 => 110,  95 => 109,  90 => 107,  84 => 106,  80 => 105,  74 => 103,  65 => 91,  59 => 88,  56 => 87,  53 => 86,  48 => 79,  42 => 76,  36 => 73,  29 => 69,  19 => 65,);
    }
}
