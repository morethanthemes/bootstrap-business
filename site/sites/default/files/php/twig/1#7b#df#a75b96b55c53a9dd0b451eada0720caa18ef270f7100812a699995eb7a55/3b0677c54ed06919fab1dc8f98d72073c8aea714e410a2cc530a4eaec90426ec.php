<?php

/* core/modules/system/templates/admin-page.html.twig */
class __TwigTemplate_7bdfa75b96b55c53a9dd0b451eada0720caa18ef270f7100812a699995eb7a55 extends Twig_Template
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
        // line 17
        echo "<div class=\"admin clearfix\">
  ";
        // line 18
        echo twig_render_var((isset($context["system_compact_link"]) ? $context["system_compact_link"] : null));
        echo "
  ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : null));
        foreach ($context['_seq'] as $context["position"] => $context["container"]) {
            // line 20
            echo "    <div class=\"";
            echo twig_render_var((isset($context["position"]) ? $context["position"] : null));
            echo " clearfix\">
      ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["container"]) ? $context["container"] : null), "blocks"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 22
                echo "        ";
                echo twig_render_var((isset($context["block"]) ? $context["block"] : null));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['container'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 26,  48 => 24,  39 => 22,  35 => 21,  30 => 20,  26 => 19,  22 => 18,  19 => 17,);
    }
}
