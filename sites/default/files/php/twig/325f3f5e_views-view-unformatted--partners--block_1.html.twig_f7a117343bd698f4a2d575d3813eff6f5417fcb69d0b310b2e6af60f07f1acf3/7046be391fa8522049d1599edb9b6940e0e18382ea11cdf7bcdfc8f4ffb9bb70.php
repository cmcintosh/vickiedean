<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--partners--block_1.html.twig */
class __TwigTemplate_c2f3ce53b9353bbc9763e7285ee5b6fa2696073201e988a9202bba49770787bd extends Twig_Template
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
        $tags = array("for" => 7, "set" => 9);
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
        echo "<div class=\"box_html \">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div class=\"brand-list\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "\t\t\t\t\t\t\t";
            // line 9
            $context["row_classes"] = array(0 => ((            // line 10
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 13
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</div> 
</div>\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--partners--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  60 => 13,  58 => 10,  57 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }
}
/* <div class="box_html ">*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12">*/
/* 				<div class="brand-list">*/
/* 					<ul>*/
/* 						{% for row in rows %}*/
/* 							{%*/
/* 								set row_classes = [*/
/* 								    default_row_class ? 'views-row',*/
/* 								]*/
/* 							%}*/
/* 						{{ row.content }}*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		*/
/* 	</div> */
/* </div>	*/
