<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--feature_product--block_1.html.twig */
class __TwigTemplate_b4a99a81bb099441365b4a8bac751466d1c4105a1b773c1d0a989aac52d63302 extends Twig_Template
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
        $tags = array("for" => 5, "set" => 7);
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
        echo "<div class=\"tab-content\">
\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"tab-featured-0\">
\t\t<div class=\"box clearfix\">
\t\t\t\t<div class=\"product-thumb transition options\">
\t\t\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "\t\t\t\t\t\t\t";
            // line 7
            $context["row_classes"] = array(0 => ((            // line 8
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 11
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--feature_product--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 11,  56 => 8,  55 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }
}
/* <div class="tab-content">*/
/* 	<div role="tabpanel" class="tab-pane" id="tab-featured-0">*/
/* 		<div class="box clearfix">*/
/* 				<div class="product-thumb transition options">*/
/* 						{% for row in rows %}*/
/* 							{%*/
/* 								set row_classes = [*/
/* 									default_row_class ? 'views-row',*/
/* 								]*/
/* 							%}*/
/* 						{{ row.content }}*/
/* 						{% endfor %}*/
/* 				</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/