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
        $tags = array("if" => 4);
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

        // line 1
        echo "<div title=\"slide-3\" data-src=\"/themes/custom/vickie_dean_themes/image/loader.GIF\">
\t<div class=\"camera_caption fadeIn\">
\t\t<div class=\"picture\"> ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_slide_background", array()), "content", array()), "html", null, true));
        echo " </div>
\t\t";
        // line 4
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_sub_text", array()), "content", array()))) {
            // line 5
            echo "\t\t\t<h2>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_description", array()), "content", array()), "html", null, true));
            echo "</h2>
\t\t\t<a class=\"slide_btn\" href=\"#\">";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_button", array()), "content", array()), "html", null, true));
            echo "</a>
\t\t   ";
        } else {
            // line 8
            echo "\t\t    <h2>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_description", array()), "content", array()), "html", null, true));
            echo "</h2>
\t\t    <p>";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_sub_text", array()), "content", array()), "html", null, true));
            echo "</p>
\t\t\t<a class=\"slide_btn\" href=\"#\">";
            // line 10
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_button", array()), "content", array()), "html", null, true));
            echo "</a>
\t\t";
        }
        // line 12
        echo "\t</div>
</div>  ";
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
        return array (  77 => 12,  72 => 10,  68 => 9,  63 => 8,  58 => 6,  53 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div title="slide-3" data-src="/themes/custom/vickie_dean_themes/image/loader.GIF">*/
/* 	<div class="camera_caption fadeIn">*/
/* 		<div class="picture"> {{ fields.field_slide_background.content }} </div>*/
/* 		{% if fields.field_sub_text.content is empty  %}*/
/* 			<h2>{{ fields.field_description.content }}</h2>*/
/* 			<a class="slide_btn" href="#">{{ fields.field_button.content }}</a>*/
/* 		   {% else %}*/
/* 		    <h2>{{ fields.field_description.content }}</h2>*/
/* 		    <p>{{ fields.field_sub_text.content }}</p>*/
/* 			<a class="slide_btn" href="#">{{ fields.field_button.content }}</a>*/
/* 		{% endif %}*/
/* 	</div>*/
/* </div>  */
