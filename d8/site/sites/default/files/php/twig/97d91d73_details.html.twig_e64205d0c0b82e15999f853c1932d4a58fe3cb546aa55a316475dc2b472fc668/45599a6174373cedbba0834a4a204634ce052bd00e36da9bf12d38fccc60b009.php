<?php

/* core/themes/classy/templates/form/details.html.twig */
class __TwigTemplate_b021fa5b9fd3a26299420ee186089994f7500b3107ad66bc7c6bc1a1b993c407 extends Twig_Template
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
        $tags = array("if" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        echo "<details";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        // line 18
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 19
            echo "<summary";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["summary_attributes"]) ? $context["summary_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</summary>";
        }
        // line 21
        echo "<div class=\"details-wrapper\">
    ";
        // line 22
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 23
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 27
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 28
            echo "<div class=\"details-description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "</div>";
        }
        // line 30
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        }
        // line 33
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        }
        // line 36
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  84 => 34,  82 => 33,  79 => 31,  77 => 30,  72 => 28,  70 => 27,  64 => 24,  61 => 23,  59 => 22,  56 => 21,  49 => 19,  47 => 18,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a details element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the details element.*/
/*  * - errors: (optional) Any errors for this details element, may not be set.*/
/*  * - title: (optional) The title of the element, may not be set.*/
/*  * - description: (optional) The description of the element, may not be set.*/
/*  * - children: (optional) The children of the element, may not be set.*/
/*  * - value: (optional) The value of the element, may not be set.*/
/*  **/
/*  * @see template_preprocess_details()*/
/*  *//* */
/* #}*/
/* <details{{ attributes }}>*/
/*   {%- if title -%}*/
/*     <summary{{ summary_attributes }}>{{ title }}</summary>*/
/*   {%- endif -%}*/
/*   <div class="details-wrapper">*/
/*     {% if errors %}*/
/*       <div class="form-item--error-message">*/
/*         <strong>{{ errors }}</strong>*/
/*       </div>*/
/*     {% endif %}*/
/*     {%- if description -%}*/
/*       <div class="details-description">{{ description }}</div>*/
/*     {%- endif -%}*/
/*     {%- if children -%}*/
/*       {{ children }}*/
/*     {%- endif -%}*/
/*     {%- if value -%}*/
/*       {{ value }}*/
/*     {%- endif -%}*/
/*   </div>*/
/* </details>*/
/* */
