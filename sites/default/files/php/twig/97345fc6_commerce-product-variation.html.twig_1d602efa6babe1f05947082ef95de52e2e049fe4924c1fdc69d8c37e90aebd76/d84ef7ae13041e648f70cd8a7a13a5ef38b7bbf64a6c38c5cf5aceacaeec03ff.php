<?php

/* modules/commerce/modules/product/templates/commerce-product-variation.html.twig */
class __TwigTemplate_b53c3fd055298e99a7c238eb20e81b3db5cac9fcee7973389df0a14989f194c0 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 22
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["product_variation"]) ? $context["product_variation"] : null), "html", null, true));
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/commerce/modules/product/templates/commerce-product-variation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 24,  47 => 23,  43 => 22,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  **/
/*  * Default template for product variations.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapper.*/
/*  * - product_variation: The rendered product variation fields.*/
/*  *   Use 'product_variation' to print them all, or print a subset such as*/
/*  *   'product_variation.title'. Use the following code to exclude the*/
/*  *   printing of a given field:*/
/*  *   @code*/
/*  *   {{ product_variation|without('title') }}*/
/*  *   @endcode*/
/*  * - product_variation_entity: The product variation entity.*/
/*  * - url: The product URL.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>*/
/*   {{- product_variation -}}*/
/* </div>*/
/* */
