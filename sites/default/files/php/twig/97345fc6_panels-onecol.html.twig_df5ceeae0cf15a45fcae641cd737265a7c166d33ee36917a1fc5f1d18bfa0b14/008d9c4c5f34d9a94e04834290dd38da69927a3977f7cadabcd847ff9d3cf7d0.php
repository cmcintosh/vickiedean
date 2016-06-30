<?php

/* themes/custom/vickie_dean_themes/templates/layouts/panels-onecol.html.twig */
class __TwigTemplate_8fb89506019ba76587190bd8c44f97342679114661e796f0745ec8da50bebcc1 extends Twig_Template
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
        $tags = array("if" => 16);
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

        // line 15
        echo "<div id=\"page\">
\t<div class=\"panel-1col\" ";
        // line 16
        if ((isset($context["css_id"]) ? $context["css_id"] : null)) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["css_id"]) ? $context["css_id"] : null), "html", null, true));
        }
        echo ">
\t  <div class=\"panel-panel\">
\t    ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "middle", array()), "html", null, true));
        echo "
\t  </div>
\t</div> 
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/layouts/panels-onecol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  46 => 16,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template for a one column panel layout.*/
/*  **/
/*  * This template provides a very simple "one column" panel display layout.*/
/*  **/
/*  * Variables:*/
/*  * - $id: An optional CSS id to use for the layout.*/
/*  * - $content: An array of content, each item in the array is keyed to one*/
/*  *   panel of the layout. This layout supports the following sections:*/
/*  *   - content.middle: The only panel in the layout.*/
/*  *//* */
/* #}*/
/* <div id="page">*/
/* 	<div class="panel-1col" {% if css_id %}{{ css_id }}{% endif %}>*/
/* 	  <div class="panel-panel">*/
/* 	    {{ content.middle }}*/
/* 	  </div>*/
/* 	</div> */
/* </div>*/
