<?php

/* core/modules/views/templates/views-view-list.html.twig */
class __TwigTemplate_fbf9bd2ea63a01dcc8c429f9ae8f711c85e56dfc577c4d1d9022cb14dda8f219 extends Twig_Template
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
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 22
            echo "<div";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
";
        }
        // line 24
        echo "  ";
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 25
            echo "    <h3>";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</h3>
  ";
        }
        // line 27
        echo "
  <";
        // line 28
        echo twig_render_var($this->getAttribute((isset($context["list"]) ? $context["list"] : null), "type"));
        echo twig_render_var($this->getAttribute((isset($context["list"]) ? $context["list"] : null), "attributes"));
        echo ">

    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 31
            echo "      <li";
            echo twig_render_var($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"));
            echo ">";
            echo twig_render_var($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "content"));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
  </";
        // line 34
        echo twig_render_var($this->getAttribute((isset($context["list"]) ? $context["list"] : null), "type"));
        echo ">

";
        // line 36
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 37
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 37,  68 => 36,  63 => 34,  60 => 33,  49 => 31,  45 => 30,  39 => 28,  36 => 27,  30 => 25,  27 => 24,  21 => 22,  19 => 21,);
    }
}
