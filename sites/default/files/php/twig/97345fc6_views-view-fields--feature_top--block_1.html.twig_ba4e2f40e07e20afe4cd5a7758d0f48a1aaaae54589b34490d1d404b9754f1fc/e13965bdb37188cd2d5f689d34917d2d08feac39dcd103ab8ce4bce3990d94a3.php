<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--feature_top--block_1.html.twig */
class __TwigTemplate_d18a277dcb18e3b36d9b6cbf45014b40c7d07a4ec4515b212b6752ab37d905ab extends Twig_Template
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
        echo "<div class=\"col-sm-6 banner-2\">
\t<div class=\"banner-box\">
\t\t<a class=\"clearfix\" href=\"#\">
\t\t\t";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_background_product", array()), "content", array()), "html", null, true));
        echo "
\t\t\t<div class=\"s-desc\">
\t\t\t\t<h2>";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_heading", array()), "content", array()), "html", null, true));
        echo "</h2>
\t\t\t\t<div class=\"btn\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_button", array()), "content", array()), "html", null, true));
        echo "</div>
\t\t\t</div>
\t\t</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--feature_top--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  48 => 4,  43 => 1,);
    }
}
/* <div class="col-sm-6 banner-2">*/
/* 	<div class="banner-box">*/
/* 		<a class="clearfix" href="#">*/
/* 			{{fields.field_background_product.content}}*/
/* 			<div class="s-desc">*/
/* 				<h2>{{fields.field_heading.content}}</h2>*/
/* 				<div class="btn">{{fields.field_button.content}}</div>*/
/* 			</div>*/
/* 		</a>*/
/* 	</div>*/
/* </div>*/
