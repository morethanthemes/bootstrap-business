<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_320356a843ae0a87b2b78f2dc2195b7385d0d845b858a212e2b6d5b3b17d0f40 extends Twig_Template
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
        // line 66
        echo "  <header id=\"branding\" class=\"clearfix\">
    <div class=\"branding__inner\">
      ";
        // line 68
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
      ";
        // line 69
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 70
            echo "        <h1 class=\"page-title\">";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</h1>
      ";
        }
        // line 72
        echo "      ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "
      ";
        // line 73
        if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
            // line 74
            echo "        ";
            echo twig_render_var((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null));
            echo "
      ";
        }
        // line 76
        echo "    </div>
  </header>

  <div id=\"page\">
    ";
        // line 80
        if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
            // line 81
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo twig_render_var((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null));
            echo "</div>
    ";
        }
        // line 83
        echo "
    ";
        // line 84
        echo twig_render_var((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
        echo "

    <main id=\"content\" class=\"clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\"></a></div>
      ";
        // line 88
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 89
            echo "        <div id=\"console\" class=\"clearfix\">";
            echo twig_render_var((isset($context["messages"]) ? $context["messages"] : null));
            echo "</div>
      ";
        }
        // line 91
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help")) {
            // line 92
            echo "        <div id=\"help\">
          ";
            // line 93
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help"));
            echo "
        </div>
      ";
        }
        // line 96
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 97
            echo "        <ul class=\"action-links\">
          ";
            // line 98
            echo twig_render_var((isset($context["action_links"]) ? $context["action_links"] : null));
            echo "
        </ul>
      ";
        }
        // line 101
        echo "      ";
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"));
        echo "
    </main>

    <footer id=\"footer\" role=\"contentinfo\">
      ";
        // line 105
        echo twig_render_var((isset($context["feed_icons"]) ? $context["feed_icons"] : null));
        echo "
    </footer>

  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 105,  104 => 101,  98 => 98,  95 => 97,  92 => 96,  86 => 93,  83 => 92,  80 => 91,  74 => 89,  72 => 88,  62 => 83,  56 => 81,  42 => 74,  40 => 73,  29 => 70,  27 => 69,  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 49,  21 => 24,  85 => 44,  79 => 43,  65 => 84,  50 => 32,  47 => 47,  28 => 27,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 80,  35 => 72,  26 => 25,  24 => 26,  51 => 48,  48 => 76,  46 => 47,  43 => 46,  41 => 46,  36 => 29,  34 => 23,  32 => 28,  25 => 41,  23 => 68,  19 => 66,);
    }
}
