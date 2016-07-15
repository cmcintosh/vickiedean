<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--testimonials--block_1.html.twig */
class __TwigTemplate_fc8d44b14280fe29a5f59a7456b897337f7c03db739fe6f5d83527659c763303 extends Twig_Template
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
        $tags = array("for" => 6, "set" => 8);
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
        echo "    <div class=\"text-center\">  
      <h3>Testimonials</h3>
      <div class=\"row\">
        <div class=\"col-sm-10 col-sm-offset-1\">
          <div class=\"testimonials\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "              ";
            // line 8
            $context["row_classes"] = array(0 => ((            // line 9
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 12
            echo "
                ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "          </div>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--testimonials--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  62 => 13,  59 => 12,  57 => 9,  56 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }
}
/*     <div class="text-center">  */
/*       <h3>Testimonials</h3>*/
/*       <div class="row">*/
/*         <div class="col-sm-10 col-sm-offset-1">*/
/*           <div class="testimonials">*/
/*             {% for row in rows %}*/
/*               {%*/
/*                 set row_classes = [*/
/*                   default_row_class ? 'views-row',*/
/*                 ]*/
/*               %}*/
/* */
/*                 {{ row.content }}*/
/* */
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
