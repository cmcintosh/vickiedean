<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--our_team--block_1.html.twig */
class __TwigTemplate_ee9f945723c661770cb12da21389f1e5beae1ccf1ee7b7e1c5c46448a03b90ca extends Twig_Template
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
        echo "<div class=\"col-sm-3\">
     <figure class=\"thumbnail featured-thumbnail\">
          <a title=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_name", array()), "content", array()), "html", null, true));
        echo "\" href=\"#\">
               ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()), "html", null, true));
        echo "
          </a>
     </figure>
     <h5>
          <a title=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_name", array()), "content", array()), "html", null, true));
        echo "\" href=\"#\">
               ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_name", array()), "content", array()), "html", null, true));
        echo "
          </a>
     </h5>
     <p>";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_position", array()), "content", array()), "html", null, true));
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--our_team--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  62 => 9,  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div class="col-sm-3">*/
/*      <figure class="thumbnail featured-thumbnail">*/
/*           <a title="{{fields.field_name.content}}" href="#">*/
/*                {{fields.field_image.content}}*/
/*           </a>*/
/*      </figure>*/
/*      <h5>*/
/*           <a title="{{fields.field_name.content}}" href="#">*/
/*                {{fields.field_name.content}}*/
/*           </a>*/
/*      </h5>*/
/*      <p>{{fields.field_position.content}}</p>*/
/* </div>*/
