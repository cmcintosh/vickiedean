<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--general_info--block_1.html.twig */
class __TwigTemplate_d05a5da19d06373580329e2aca101c7265825f56a344cfbdddbfa8919c9adddf extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_heading", array()), "content", array()) != "Contact Us")) {
            // line 2
            echo "\t<div class=\"col-xs-12 col-md-4 cols\">
\t\t<h4>
\t\t\t<i class=\"";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_icon", array()), "content", array()), "html", null, true));
            echo "\"></i>
\t\t\t";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_heading", array()), "content", array()), "html", null, true));
            echo "
\t\t</h4>
\t\t<p>";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_description", array()), "content", array()), "html", null, true));
            echo "</p>
\t</div>
";
        }
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_heading", array()), "content", array()) == "Contact Us")) {
            // line 12
            echo "\t<div class=\"col-xs-12 col-md-4 cols\">
\t\t<h4>
\t\t\t<i class=\"";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_icon", array()), "content", array()), "html", null, true));
            echo "\"></i>
\t\t\t";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_heading", array()), "content", array()), "html", null, true));
            echo "
\t\t</h4>
\t\t<p>";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_description", array()), "content", array()), "html", null, true));
            echo "</p>
\t\t<a href=\"#\" class=\"btn\">get in touch</a>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--general_info--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  77 => 15,  73 => 14,  69 => 12,  67 => 11,  64 => 10,  58 => 7,  53 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% if fields.field_heading.content != 'Contact Us' %}*/
/* 	<div class="col-xs-12 col-md-4 cols">*/
/* 		<h4>*/
/* 			<i class="{{fields.field_icon.content}}"></i>*/
/* 			{{fields.field_heading.content}}*/
/* 		</h4>*/
/* 		<p>{{fields.field_description.content}}</p>*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* {% if fields.field_heading.content == 'Contact Us' %}*/
/* 	<div class="col-xs-12 col-md-4 cols">*/
/* 		<h4>*/
/* 			<i class="{{fields.field_icon.content}}"></i>*/
/* 			{{fields.field_heading.content}}*/
/* 		</h4>*/
/* 		<p>{{fields.field_description.content}}</p>*/
/* 		<a href="#" class="btn">get in touch</a>*/
/* 	</div>*/
/* {% endif %}*/
