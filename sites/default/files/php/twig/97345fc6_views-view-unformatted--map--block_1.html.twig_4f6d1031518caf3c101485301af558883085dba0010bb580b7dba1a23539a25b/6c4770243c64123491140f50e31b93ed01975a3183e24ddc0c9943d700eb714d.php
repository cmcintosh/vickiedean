<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--map--block_1.html.twig */
class __TwigTemplate_c284641dd85140e84dc53b1fd4c359989ac51439410eb3c1a28626d5ca5f2482 extends Twig_Template
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
        $tags = array("for" => 11, "set" => 13);
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
\t<li><a href=\"http://vickiedean.dev/\">Contact Us</a></li>
</ul>
<div class=\"row\"> 
\t<div id=\"content\" class=\"col-sm-12 contact_page\">
\t\t<h1 class=\"no-line\">Contact Us</h1>
\t\t\t\t<div class=\"map\">
\t<!-- <div id=\"google-map\" class=\"map_model\" data-zoom=\"14\" data-y=\"40.6700\" data-x=\" -73.9400\" data-disable-ui=\"false\" data-scrollwheel=\"false\" data-draggable=\"true\" style=\"height:440px; width: 100%\">
\t</div> -->
\t\t\t\t    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "\t\t\t\t      ";
            // line 13
            $context["row_classes"] = array(0 => ((            // line 14
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 17
            echo "
\t\t\t\t        ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "

\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</div>
\t</div>
</div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--map--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  67 => 18,  64 => 17,  62 => 14,  61 => 13,  59 => 12,  55 => 11,  43 => 1,);
    }
}
/* <ul class="breadcrumb">*/
/* 	<li><a href="http://vickiedean.dev/"><i class="fa fa-home"></i></a></li>*/
/* 	<li><a href="http://vickiedean.dev/">Contact Us</a></li>*/
/* </ul>*/
/* <div class="row"> */
/* 	<div id="content" class="col-sm-12 contact_page">*/
/* 		<h1 class="no-line">Contact Us</h1>*/
/* 				<div class="map">*/
/* 	<!-- <div id="google-map" class="map_model" data-zoom="14" data-y="40.6700" data-x=" -73.9400" data-disable-ui="false" data-scrollwheel="false" data-draggable="true" style="height:440px; width: 100%">*/
/* 	</div> -->*/
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
/* 				</div>*/
/* 	</div>*/
/* </div>*/
/*   */
