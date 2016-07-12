<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--brands--block_1.html.twig */
class __TwigTemplate_7e842738e2876ae011fc854904ed0722d3229989179aedd2208d1945917485cf extends Twig_Template
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
        echo "
<div class=\"manufacturer-list\">
\t<div class=\"manufacturer-heading\">
\t\t<span> 
\t\t\t";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "name_1", array()), "content", array()), "html", null, true));
        echo " 
\t\t</span>
\t</div>
\t<div class=\"manufacturer-content\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "name", array()), "content", array()), "html", null, true));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--brands--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  49 => 5,  43 => 1,);
    }
}
/* */
/* <div class="manufacturer-list">*/
/* 	<div class="manufacturer-heading">*/
/* 		<span> */
/* 			{{fields.name_1.content}} */
/* 		</span>*/
/* 	</div>*/
/* 	<div class="manufacturer-content">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-6">*/
/* 				{{fields.name.content}}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
