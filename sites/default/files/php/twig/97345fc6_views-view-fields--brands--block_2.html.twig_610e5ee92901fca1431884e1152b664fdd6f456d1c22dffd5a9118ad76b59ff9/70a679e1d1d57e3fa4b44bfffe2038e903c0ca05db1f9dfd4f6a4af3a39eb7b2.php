<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--brands--block_2.html.twig */
class __TwigTemplate_3fddf6fc38f72fafb79e11b235b8dc5cc0011ca78e0308dbafddffd2add96f28 extends Twig_Template
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
        $tags = array("set" => 1, "for" => 4, "if" => 5);
        $filters = array("merge" => 7);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('merge'),
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
        $context["items"] = $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "name_1", array()), "content", array());
        // line 2
        $context["array"] = array(0 => (isset($context["items"]) ? $context["items"] : null));
        // line 3
        $context["newArray"] = array();
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array"]) ? $context["array"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 5
            echo "   ";
            if (!twig_in_filter($context["items"], (isset($context["newArray"]) ? $context["newArray"] : null))) {
                // line 6
                echo "     &nbsp;&nbsp;&nbsp; ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["items"], "html", null, true));
                echo "
   ";
                // line 7
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) ? $context["newArray"] : null), array(0 => $context["items"]));
                // line 8
                echo "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--brands--block_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  61 => 7,  56 => 6,  53 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% set items = fields.name_1.content %}*/
/* {% set array = [items] %}*/
/* {% set newArray = [] %}*/
/* {% for items in array %}*/
/*    {% if items not in newArray %}*/
/*      &nbsp;&nbsp;&nbsp; {{items}}*/
/*    {% set newArray = newArray|merge([items]) %}*/
/*    {% endif %}*/
/* {% endfor %}*/
