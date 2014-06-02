<?php

/* core/modules/filter/templates/filter-tips.html.twig */
class __TwigTemplate_41f608f640254c7aedf4cf10f6a521a92f737493c709635735430651fac3d78d extends Twig_Template
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
        // line 21
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 22
            echo "  <h2>";
            echo twig_render_var(t("Text Formats"));
            echo "</h2>
";
        }
        // line 24
        echo "
";
        // line 25
        if (twig_length_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null))) {
            // line 26
            echo "  ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 27
                echo "    <div class=\"compose-tips\">
  ";
            }
            // line 29
            echo "
  ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tips"]) ? $context["tips"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tip"]) {
                // line 31
                echo "    ";
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 32
                    echo "      <div";
                    echo twig_render_var($this->getAttribute((isset($context["tip"]) ? $context["tip"] : null), "attributes"));
                    echo ">
      <h3>";
                    // line 33
                    echo twig_render_var($this->getAttribute((isset($context["tip"]) ? $context["tip"] : null), "name"));
                    echo "</h3>
    ";
                }
                // line 35
                echo "
    ";
                // line 36
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["tip"]) ? $context["tip"] : null), "list"))) {
                    // line 37
                    echo "      <ul class=\"tips\">
      ";
                    // line 38
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tip"]) ? $context["tip"] : null), "list"));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 39
                        echo "        <li";
                        echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"));
                        echo ">";
                        echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tip"));
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "      </ul>
    ";
                }
                // line 43
                echo "
    ";
                // line 44
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 45
                    echo "      </div>
    ";
                }
                // line 47
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
  ";
            // line 49
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 50
                echo "    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  101 => 48,  91 => 45,  89 => 44,  86 => 43,  82 => 41,  71 => 39,  67 => 38,  64 => 37,  62 => 36,  46 => 31,  32 => 26,  27 => 24,  54 => 33,  49 => 32,  45 => 31,  39 => 29,  30 => 25,  28 => 24,  21 => 22,  60 => 51,  55 => 49,  50 => 48,  43 => 45,  40 => 44,  35 => 27,  31 => 41,  26 => 40,  24 => 23,  121 => 121,  117 => 119,  111 => 116,  108 => 115,  106 => 50,  99 => 110,  95 => 47,  90 => 107,  84 => 106,  80 => 105,  74 => 103,  65 => 91,  59 => 35,  56 => 87,  53 => 86,  48 => 47,  42 => 30,  36 => 28,  29 => 69,  19 => 21,);
    }
}
