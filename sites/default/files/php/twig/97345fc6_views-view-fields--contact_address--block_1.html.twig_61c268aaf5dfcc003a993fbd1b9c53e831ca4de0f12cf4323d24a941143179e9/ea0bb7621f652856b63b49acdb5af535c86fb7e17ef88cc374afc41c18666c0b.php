<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--contact_address--block_1.html.twig */
class __TwigTemplate_07c2d25477754b06232c03945c3dfaee3ce91f677aaf7ee564b6334bad32a3e1 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"col-sm-4\">
     <div class=\"";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_icon", array()), "content", array()), "html", null, true));
        echo "\">
          <strong>";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_label", array()), "content", array()), "html", null, true));
        echo "</strong><br>
          <a href=\"callto:";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_address", array()), "content", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_address", array()), "content", array()), "html", null, true));
        echo "</a>
     </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--contact_address--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div class="col-sm-4">*/
/*      <div class="{{ fields.field_icon.content }}">*/
/*           <strong>{{ fields.field_label.content }}</strong><br>*/
/*           <a href="callto:{{ fields.field_address.content }}">{{ fields.field_address.content }}</a>*/
/*      </div>*/
/* </div>*/
