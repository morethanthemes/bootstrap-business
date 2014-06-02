<?php

/* core/modules/system/templates/image.html.twig */
class __TwigTemplate_87146bd2b925e4fd2d334e039873984a359fdacc971b93e3e25f63e5c7d949f8 extends Twig_Template
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
        // line 14
        echo "<img";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo " />
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 30,  26 => 28,  24 => 27,  19 => 14,);
    }
}
