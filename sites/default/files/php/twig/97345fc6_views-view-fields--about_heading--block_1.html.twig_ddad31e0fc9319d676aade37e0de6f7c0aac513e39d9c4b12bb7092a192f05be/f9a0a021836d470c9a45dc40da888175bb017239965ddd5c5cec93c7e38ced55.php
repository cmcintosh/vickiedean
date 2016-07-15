<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--about_heading--block_1.html.twig */
class __TwigTemplate_a57b3830b15154e670e3e2b7bcde29f003adc418a786de1a9507e042f96a626a extends Twig_Template
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

        // line 1
        echo "<ul class=\"breadcrumb\">
     <li><a href=\"http://vickiedean.dev/\"><i class=\"fa fa-home\"></i></a></li>
    <li><a href=\"\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_heading", array()), "content", array()), "html", null, true));
        echo "</a></li>
</ul>
<h1 class=\"text-center\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_heading", array()), "content", array()), "html", null, true));
        echo "</h1>
<div class=\"text-center\">
     <h4> ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_sub_heading", array()), "content", array()), "html", null, true));
        echo " </h4>
     <p> ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_description", array()), "content", array()), "html", null, true));
        echo " </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--about_heading--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  52 => 5,  47 => 3,  43 => 1,);
    }
}
/* <ul class="breadcrumb">*/
/*      <li><a href="http://vickiedean.dev/"><i class="fa fa-home"></i></a></li>*/
/*     <li><a href="">{{ fields.field_heading.content }}</a></li>*/
/* </ul>*/
/* <h1 class="text-center">{{ fields.field_heading.content }}</h1>*/
/* <div class="text-center">*/
/*      <h4> {{ fields.field_sub_heading.content }} </h4>*/
/*      <p> {{ fields.field_description.content }} </p>*/
/* </div>*/
/* */
