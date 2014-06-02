<?php

/* core/modules/views/templates/views-view-table.html.twig */
class __TwigTemplate_fa6aab3742c0a9d9a793e54439808be06391d624f9892118f41ec5e65740a1c4 extends Twig_Template
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
        // line 29
        echo "<table";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 30
        if ((isset($context["caption_needed"]) ? $context["caption_needed"] : null)) {
            // line 31
            echo "    <caption>
    ";
            // line 32
            if ((isset($context["caption"]) ? $context["caption"] : null)) {
                // line 33
                echo "      ";
                echo twig_render_var((isset($context["caption"]) ? $context["caption"] : null));
                echo "
    ";
            } else {
                // line 35
                echo "      ";
                echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
                echo "
    ";
            }
            // line 37
            echo "    ";
            if (((!twig_test_empty((isset($context["summary"]) ? $context["summary"] : null))) || (!twig_test_empty((isset($context["description"]) ? $context["description"] : null))))) {
                // line 38
                echo "      <details>
        ";
                // line 39
                if ((!twig_test_empty((isset($context["summary"]) ? $context["summary"] : null)))) {
                    // line 40
                    echo "          <summary>";
                    echo twig_render_var((isset($context["summary"]) ? $context["summary"] : null));
                    echo "</summary>
        ";
                }
                // line 42
                echo "        ";
                if ((!twig_test_empty((isset($context["description"]) ? $context["description"] : null)))) {
                    // line 43
                    echo "          ";
                    echo twig_render_var((isset($context["description"]) ? $context["description"] : null));
                    echo "
        ";
                }
                // line 45
                echo "      </details>
    ";
            }
            // line 47
            echo "    </caption>
  ";
        }
        // line 49
        echo "  ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 50
            echo "    <thead>
      <tr>
        ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 53
                echo "          <th";
                echo twig_render_var($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "attributes"));
                echo " scope=\"col\">
            ";
                // line 54
                echo twig_render_var($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "content"));
                echo "
          </th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      </tr>
    </thead>
  ";
        }
        // line 60
        echo "  <tbody>
    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 62
            echo "      <tr";
            echo twig_render_var($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"));
            echo ">
        ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "columns"));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 64
                echo "          <td";
                echo twig_render_var($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "attributes"));
                echo ">
            ";
                // line 65
                echo twig_render_var($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "content"));
                echo "
          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 70,  134 => 68,  125 => 65,  120 => 64,  116 => 63,  111 => 62,  107 => 61,  104 => 60,  99 => 57,  90 => 54,  85 => 53,  81 => 52,  77 => 50,  74 => 49,  70 => 47,  66 => 45,  60 => 43,  57 => 42,  51 => 40,  49 => 39,  46 => 38,  43 => 37,  37 => 35,  31 => 33,  29 => 32,  26 => 31,  28 => 19,  24 => 30,  21 => 16,  19 => 29,);
    }
}
