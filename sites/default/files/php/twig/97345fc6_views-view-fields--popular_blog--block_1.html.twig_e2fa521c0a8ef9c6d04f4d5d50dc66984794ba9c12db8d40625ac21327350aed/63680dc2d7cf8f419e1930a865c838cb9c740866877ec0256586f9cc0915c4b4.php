<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--popular_blog--block_1.html.twig */
class __TwigTemplate_a80b11824804232a379d778f55d939c17656f2996ad8fc31cf319d430753a3be extends Twig_Template
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
        $tags = array("if" => 1);
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
        if (($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_popular_blog", array()), "content", array()) == "True")) {
            // line 2
            echo "\t<div class=\"col-sm-4\">
\t\t<div class=\"article-title\">
\t\t\t";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
            echo "
\t\t</div>
\t\t<div class=\"article-description\">
\t\t\t";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
            echo "
\t\t</div>
\t</div>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--popular_blog--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% if fields.field_popular_blog.content == 'True' %}*/
/* 	<div class="col-sm-4">*/
/* 		<div class="article-title">*/
/* 			{{fields.title.content}}*/
/* 		</div>*/
/* 		<div class="article-description">*/
/* 			{{fields.body.content}}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endif %}*/
