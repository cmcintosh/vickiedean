<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--company_details--block_1.html.twig */
class __TwigTemplate_b5894475ce7405de9f8d21236e2df3b7d3be8715ead6da75e34f351a3ca5fe7a extends Twig_Template
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
        echo " <li>
\t<i class=\"";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_icon", array()), "content", array()), "html", null, true));
        echo "\"></i>
\t\t<a href=\"//www.google.com/maps/?q=40.6700,+-73.9400\" target=\"_blank\">
\t\t\t";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_contact_info", array()), "content", array()), "html", null, true));
        echo "
\t\t</a>
</li>  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--company_details--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  46 => 2,  43 => 1,);
    }
}
/*  <li>*/
/* 	<i class="{{fields.field_icon.content}}"></i>*/
/* 		<a href="//www.google.com/maps/?q=40.6700,+-73.9400" target="_blank">*/
/* 			{{fields.field_contact_info.content}}*/
/* 		</a>*/
/* </li>  */
