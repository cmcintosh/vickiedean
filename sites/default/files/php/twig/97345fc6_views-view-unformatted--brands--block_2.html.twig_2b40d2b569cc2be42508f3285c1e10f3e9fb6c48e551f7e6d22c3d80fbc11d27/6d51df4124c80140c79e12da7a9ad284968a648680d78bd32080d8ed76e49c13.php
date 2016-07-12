<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--brands--block_2.html.twig */
class __TwigTemplate_5305346a8a8fbd6bc90c31fdbda6bcaf6fa7d76e45c192b2f6429140808791f9 extends Twig_Template
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
        $tags = array("for" => 4, "set" => 6);
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
        echo "<div id=\"content\" class=\"col-sm-9\">
 <h1>Find Your Favorite Brand</h1>
  <p class=\"brands\"><strong>Brand Index:</strong>
          ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 5
            echo "            ";
            // line 6
            $context["row_classes"] = array(0 => ((            // line 7
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 10
            echo "
              ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </p>
</div>  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-unformatted--brands--block_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  60 => 11,  57 => 10,  55 => 7,  54 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }
}
/* <div id="content" class="col-sm-9">*/
/*  <h1>Find Your Favorite Brand</h1>*/
/*   <p class="brands"><strong>Brand Index:</strong>*/
/*           {% for row in rows %}*/
/*             {%*/
/*               set row_classes = [*/
/*                 default_row_class ? 'views-row',*/
/*               ]*/
/*             %}*/
/* */
/*               {{ row.content }}*/
/* */
/*           {% endfor %}*/
/*   </p>*/
/* </div>  */
