<?php

/* core/modules/system/templates/table.html.twig */
class __TwigTemplate_284b2ccd22fe7bae679dfca06a259f46a9f74c730b32f35b89b46d92cf7fb677 extends Twig_Template
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
        // line 39
        echo "<table";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 40
        if ((isset($context["caption"]) ? $context["caption"] : null)) {
            // line 41
            echo "    <caption>";
            echo twig_render_var((isset($context["caption"]) ? $context["caption"] : null));
            echo "</caption>
  ";
        }
        // line 43
        echo "
  ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colgroups"]) ? $context["colgroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 45
            echo "    ";
            if ($this->getAttribute((isset($context["colgroup"]) ? $context["colgroup"] : null), "cols")) {
                // line 46
                echo "      <colgroup";
                echo twig_render_var($this->getAttribute((isset($context["colgroup"]) ? $context["colgroup"] : null), "attributes"));
                echo ">
        ";
                // line 47
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["colgroup"]) ? $context["colgroup"] : null), "cols"));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 48
                    echo "          <col";
                    echo twig_render_var($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "attributes"));
                    echo " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "      </colgroup>
    ";
            } else {
                // line 52
                echo "      <colgroup";
                echo twig_render_var($this->getAttribute((isset($context["colgroup"]) ? $context["colgroup"] : null), "attributes"));
                echo " />
    ";
            }
            // line 54
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
  ";
        // line 56
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 57
            echo "    <thead>
      <tr>
        ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 60
                echo "          <";
                echo twig_render_var($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"));
                echo twig_render_var($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "attributes"));
                echo ">";
                // line 61
                echo twig_render_var($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "content"));
                // line 62
                echo "</";
                echo twig_render_var($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"));
                echo ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "      </tr>
    </thead>
  ";
        }
        // line 67
        echo "
  ";
        // line 68
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 69
            echo "    <tbody>
      ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 71
                echo "        <tr";
                echo twig_render_var($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"));
                echo ">
          ";
                // line 72
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "cells"));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 73
                    echo "            <";
                    echo twig_render_var($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"));
                    echo twig_render_var($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "attributes"));
                    echo ">";
                    // line 74
                    echo twig_render_var($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "content"));
                    // line 75
                    echo "</";
                    echo twig_render_var($this->getAttribute((isset($context["cell"]) ? $context["cell"] : null), "tag"));
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    </tbody>
  ";
        }
        // line 81
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 81,  154 => 79,  147 => 77,  138 => 75,  136 => 74,  131 => 73,  127 => 72,  122 => 71,  118 => 70,  115 => 69,  113 => 68,  110 => 67,  105 => 64,  96 => 62,  94 => 61,  89 => 60,  85 => 59,  81 => 57,  79 => 56,  76 => 55,  70 => 54,  64 => 52,  60 => 50,  51 => 48,  47 => 47,  42 => 46,  39 => 45,  35 => 44,  32 => 43,  26 => 41,  24 => 40,  29 => 21,  23 => 18,  19 => 39,);
    }
}
