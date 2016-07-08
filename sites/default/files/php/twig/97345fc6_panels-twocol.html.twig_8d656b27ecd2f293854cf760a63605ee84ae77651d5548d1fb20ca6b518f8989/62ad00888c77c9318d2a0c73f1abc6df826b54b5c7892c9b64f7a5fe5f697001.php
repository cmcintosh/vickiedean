<?php

/* themes/custom/vickie_dean_themes/templates/layouts/panels-twocol.html.twig */
class __TwigTemplate_acbdb03ba4deff57d392b573961fc5721541fd81c97a07c82933e8bd5d80a3d9 extends Twig_Template
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
        $tags = array("if" => 19);
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

        // line 17
        echo "<div class=\"simple_blog-category\">
\t<div id=\"page\">
\t\t<div class=\"panel-2col\" ";
        // line 19
        if ((isset($context["css_id"]) ? $context["css_id"] : null)) {
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["css_id"]) ? $context["css_id"] : null), "html", null, true));
        }
        echo ">
\t\t\t<div class=\"container\">
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"http://vickiedean.dev/\"><i class=\"fa fa-home\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"http://vickiedean.dev/\">Blog</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<aside id=\"column-left\" class=\"col-sm-3 \">
\t\t\t\t\t    <div class=\"panel-panel\">
\t\t\t\t\t   \t\t";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "left", array()), "html", null, true));
        echo "
\t\t\t\t\t    </div>
\t\t\t\t    </aside>
\t\t\t\t\t<div class=\"panel-panel\">
\t\t\t\t\t    ";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "right", array()), "html", null, true));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
</div>
 ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/layouts/panels-twocol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 36,  65 => 32,  47 => 19,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template for a 2 column panel layout.*/
/*  **/
/*  * This template provides a two column panel display layout, with*/
/*  * each column roughly equal in width.*/
/*  **/
/*  * Variables:*/
/*  * - $id: An optional CSS id to use for the layout.*/
/*  * - $content: An array of content, each item in the array is keyed to one*/
/*  *   panel of the layout. This layout supports the following sections:*/
/*  *   - $content['left']: Content in the left column.*/
/*  *   - $content['right']: Content in the right column.*/
/*  *//* */
/* #}*/
/* <div class="simple_blog-category">*/
/* 	<div id="page">*/
/* 		<div class="panel-2col" {% if css_id %}{{ css_id }}{% endif %}>*/
/* 			<div class="container">*/
/* 				<ul class="breadcrumb">*/
/* 					<li>*/
/* 						<a href="http://vickiedean.dev/"><i class="fa fa-home"></i></a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="http://vickiedean.dev/">Blog</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<div class="row">*/
/* 					<aside id="column-left" class="col-sm-3 ">*/
/* 					    <div class="panel-panel">*/
/* 					   		{{ content.left }}*/
/* 					    </div>*/
/* 				    </aside>*/
/* 					<div class="panel-panel">*/
/* 					    {{ content.right }}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>	*/
/* </div>*/
/*  */
