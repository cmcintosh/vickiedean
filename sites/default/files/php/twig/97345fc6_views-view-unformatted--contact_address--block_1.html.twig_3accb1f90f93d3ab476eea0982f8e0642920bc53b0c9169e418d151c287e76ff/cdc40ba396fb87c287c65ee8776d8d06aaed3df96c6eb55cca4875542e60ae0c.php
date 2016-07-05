<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--contact_address--block_1.html.twig */
class __TwigTemplate_71216b0894e2a8233cc795e794f29d29ce80274fea57d838f60ae612d4bfaea5 extends Twig_Template
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
        echo "<div class=\"row\"> 
\t<div id=\"content\" class=\"col-sm-12 contact_page\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<a href=\"./\">
\t\t\t\t\t\t\t<img src=\"themes/custom/vickie_dean_themes/image/catalog/logo1.png\" alt=\"Contact Lens Store\" title=\"Contact Lens Store\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
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
\t\t\t</div>
\t\t</div>
\t</div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--contact_address--block_1.html.twig";
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
/* <div class="row"> */
/* 	<div id="content" class="col-sm-12 contact_page">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-body">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-4">*/
/* 						<a href="./">*/
/* 							<img src="themes/custom/vickie_dean_themes/image/catalog/logo1.png" alt="Contact Lens Store" title="Contact Lens Store" class="img-thumbnail"/>*/
/* 						</a>*/
/* 					</div>*/
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
/* 				</div> */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/*  */
