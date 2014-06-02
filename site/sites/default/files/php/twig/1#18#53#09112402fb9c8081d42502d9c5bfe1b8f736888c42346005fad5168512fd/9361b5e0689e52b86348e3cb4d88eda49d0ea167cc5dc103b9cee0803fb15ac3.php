<?php

/* core/modules/views/templates/views-view-grid.html.twig */
class __TwigTemplate_185309112402fb9c8081d42502d9c5bfe1b8f736888c42346005fad5168512fd extends Twig_Template
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
        // line 25
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 26
            echo "  <h3>";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</h3>
";
        }
        // line 28
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
";
        // line 29
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "alignment") == "horizontal")) {
            // line 30
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 31
                echo "  <div";
                echo twig_render_var($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"));
                echo ">
    ";
                // line 32
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "content"));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 33
                    echo "    <div";
                    echo twig_render_var($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "attributes"));
                    echo ">
      ";
                    // line 34
                    echo twig_render_var($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "content"));
                    echo "
    </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 40
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 41
                echo "  <div";
                echo twig_render_var($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "attributes"));
                echo ">
    ";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "content"));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 43
                    echo "      <div";
                    echo twig_render_var($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"));
                    echo ">
        ";
                    // line 44
                    echo twig_render_var($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "content"));
                    echo "
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 50
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 50,  98 => 47,  89 => 44,  84 => 43,  80 => 42,  75 => 41,  70 => 40,  62 => 37,  53 => 34,  48 => 33,  44 => 32,  39 => 31,  34 => 30,  32 => 29,  27 => 28,  21 => 26,  19 => 25,);
    }
}
