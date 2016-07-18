<?php

/* modules/commerce/modules/product/templates/commerce-product.html.twig */
class __TwigTemplate_9e6b2c3601f7a7b73bb979f95c454202914f53c621f7984d18ebe23d33ff6068 extends Twig_Template
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
        $filters = array("without" => 23);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('without'),
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
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["product"]) ? $context["product"] : null), "variation_attributes"), "html", null, true));
        // line 24
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "modules/commerce/modules/product/templates/commerce-product.html.twig";
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
/*  * Default product template.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapper.*/
/*  * - product: The rendered product fields.*/
/*  *   Use 'product' to print them all, or print a subset such as*/
/*  *   'product.title'. Use the following code to exclude the*/
/*  *   printing of a given field:*/
/*  *   @code*/
/*  *   {{ product|without('title') }}*/
/*  *   @endcode*/
/*  * - product_entity: The product entity.*/
/*  * - product_url: The product URL.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <article{{ attributes }}>*/
/*   {{- product|without('variation_attributes') -}}*/
/* </article>*/
/* */
