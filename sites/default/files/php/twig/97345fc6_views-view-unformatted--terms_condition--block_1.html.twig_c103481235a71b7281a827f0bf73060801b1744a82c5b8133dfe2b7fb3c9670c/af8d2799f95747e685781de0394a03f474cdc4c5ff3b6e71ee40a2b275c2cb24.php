<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--terms_condition--block_1.html.twig */
class __TwigTemplate_48af8ec583c49509e03180bf6cc518c95c6401013a79cd73107597e3518e1b42 extends Twig_Template
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
        $tags = array("for" => 9, "set" => 11);
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
        echo "<ul class=\"breadcrumb\">
\t<li><a href=\"http://vickiedean.dev/\"><i class=\"fa fa-home\"></i></a></li>
\t<li><a href=\"http://vickiedean.dev/\">Terms &amp; Conditions</a></li>
</ul>
<div class=\"row\"> 
\t<div id=\"content\" class=\"col-sm-12\"> 
\t\t<h1 class=\"text-center\">Terms &amp; Conditions</h1>
\t\t<div class=\"row terms_conditions_page\">
\t\t\t\t    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "\t\t\t\t      ";
            // line 11
            $context["row_classes"] = array(0 => ((            // line 12
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 15
            echo "
\t\t\t\t        ";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "

\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</div>
\t</div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--terms_condition--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  65 => 16,  62 => 15,  60 => 12,  59 => 11,  57 => 10,  53 => 9,  43 => 1,);
    }
}
/* <ul class="breadcrumb">*/
/* 	<li><a href="http://vickiedean.dev/"><i class="fa fa-home"></i></a></li>*/
/* 	<li><a href="http://vickiedean.dev/">Terms &amp; Conditions</a></li>*/
/* </ul>*/
/* <div class="row"> */
/* 	<div id="content" class="col-sm-12"> */
/* 		<h1 class="text-center">Terms &amp; Conditions</h1>*/
/* 		<div class="row terms_conditions_page">*/
/* 				    {% for row in rows %}*/
/* 				      {%*/
/* 				        set row_classes = [*/
/* 				          default_row_class ? 'views-row',*/
/* 				        ]*/
/* 				      %}*/
/* */
/* 				        {{ row.content }}*/
/* */
/* 				    {% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/*  */
