<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--slider--block_1.html.twig */
class __TwigTemplate_dd4654aa2f224511e028b0df7d3554fbed6b47dbf21583a00ab6308e694d760a extends Twig_Template
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
        echo "<div title=\"slide-1\">
\t";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_slide_background", array()), "content", array()), "html", null, true));
        echo "
\t<div class=\"camera_caption fadeIn\">
\t\t<h2>";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_description", array()), "content", array()), "html", null, true));
        echo "</h2>
\t\t<a class=\"slide_btn\" href=\"#\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_button", array()), "content", array()), "html", null, true));
        echo "</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--slider--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }
}
/* <div title="slide-1">*/
/* 	{{ fields.field_slide_background.content }}*/
/* 	<div class="camera_caption fadeIn">*/
/* 		<h2>{{ fields.field_description.content }}</h2>*/
/* 		<a class="slide_btn" href="#">{{ fields.field_button.content }}</a>*/
/* 	</div>*/
/* </div>*/