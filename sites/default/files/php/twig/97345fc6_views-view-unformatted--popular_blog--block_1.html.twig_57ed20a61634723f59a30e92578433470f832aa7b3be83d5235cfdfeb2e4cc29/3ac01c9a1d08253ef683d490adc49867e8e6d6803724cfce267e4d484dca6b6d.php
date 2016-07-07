<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--popular_blog--block_1.html.twig */
class __TwigTemplate_935b2f6e0b4c7473659677f103b7d56f5bf0842d9ee7e6bc90451c3ca91fa2ab extends Twig_Template
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
        $tags = array("for" => 8, "set" => 10);
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
        echo "<div class=\"container\">
\t<div class=\"box blog_articles\">
\t\t\t<div class=\"box-heading\">
\t\t\t\t<h3>Popular Articles</h3>
\t\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "\t\t\t\t\t";
            // line 10
            $context["row_classes"] = array(0 => ((            // line 11
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 14
            echo "\t\t\t\t";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--popular_blog--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  61 => 14,  59 => 11,  58 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }
}
/* <div class="container">*/
/* 	<div class="box blog_articles">*/
/* 			<div class="box-heading">*/
/* 				<h3>Popular Articles</h3>*/
/* 			</div>*/
/* 		<div class="box-content">*/
/* 			<div class="row">*/
/* 				{% for row in rows %}*/
/* 					{%*/
/* 						set row_classes = [*/
/* 							default_row_class ? 'views-row',*/
/* 						]*/
/* 					%}*/
/* 				{{ row.content }}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
