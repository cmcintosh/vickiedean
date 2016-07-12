<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--brands--block_1.html.twig */
class __TwigTemplate_efb037cbd2d644c99e40b2f5df047939a7219ef78ddbd30ed6cd300b2ec246bb extends Twig_Template
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
        $tags = array("for" => 2, "set" => 4);
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
        echo "<div id=\"content\" class=\"col-sm-10\">
\t          ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo "\t            ";
            // line 4
            $context["row_classes"] = array(0 => ((            // line 5
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 8
            echo "
\t              ";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "

\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--brands--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  58 => 9,  55 => 8,  53 => 5,  52 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div id="content" class="col-sm-10">*/
/* 	          {% for row in rows %}*/
/* 	            {%*/
/* 	              set row_classes = [*/
/* 	                default_row_class ? 'views-row',*/
/* 	              ]*/
/* 	            %}*/
/* */
/* 	              {{ row.content }}*/
/* */
/* 	          {% endfor %}*/
/* </div>  */
