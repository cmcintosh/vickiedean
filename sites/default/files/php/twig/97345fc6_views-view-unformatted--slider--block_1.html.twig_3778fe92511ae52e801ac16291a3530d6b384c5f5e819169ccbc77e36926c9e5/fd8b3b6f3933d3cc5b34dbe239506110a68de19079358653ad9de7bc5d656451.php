<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--slider--block_1.html.twig */
class __TwigTemplate_c53b2cef2be54bbca32a3e38bf1c21777331f5a1ac02ea067e01bee926d8915c extends Twig_Template
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
        $tags = array("for" => 4, "set" => 6);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set'),
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
        echo "<div class=\"fluid_container\">
    <div class=\"camera_container\">
        <div id=\"camera_wrap_0\"> 
\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 5
            echo "\t\t\t\t";
            // line 6
            $context["row_classes"] = array(0 => ((            // line 7
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 10
            echo "\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t</div>
\t</div>
</div>             ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--slider--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 10,  55 => 7,  54 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }
}
/* <div class="fluid_container">*/
/*     <div class="camera_container">*/
/*         <div id="camera_wrap_0"> */
/* 			{% for row in rows %}*/
/* 				{%*/
/* 					set row_classes = [*/
/* 					    default_row_class ? 'views-row',*/
/* 					]*/
/* 				%}*/
/* 			{{ row.content }}*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>             */
