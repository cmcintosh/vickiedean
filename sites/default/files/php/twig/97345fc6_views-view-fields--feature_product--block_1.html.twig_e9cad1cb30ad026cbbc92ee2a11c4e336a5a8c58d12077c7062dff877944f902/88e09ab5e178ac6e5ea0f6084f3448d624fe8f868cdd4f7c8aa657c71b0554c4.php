<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--feature_product--block_1.html.twig */
class __TwigTemplate_02265178e3aa67dcea8ae757dad45ab9516c5a149496f42d8df4bd615821f226 extends Twig_Template
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
        echo "<div class=\"product-thumb transition options\">
\t<div class=\"image\">
\t\t<a class=\"lazy lazy-loaded\" style=\"padding-bottom: 100%\" href=\"#\">
\t\t  ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_product_image", array()), "content", array()), "html", null, true));
        echo "
\t\t</a>
\t\t<a class=\"quickview\" data-rel=\"details\" href=\"#quickview_featured_110010\">
\t\t\t<i class=\"material-icons-remove_red_eye\"></i>
\t\t</a>
\t</div>
\t<div class=\"caption\">
\t\t<div class=\"name\">
\t\t\t<a href=\"#\">";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_product_name", array()), "content", array()), "html", null, true));
        echo "</a>
\t\t</div>
\t\t<div class=\"price\">\$";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_price", array()), "content", array()), "html", null, true));
        echo " </div>
\t</div>
\t<div class=\"cart-button\">
\t\t<button class=\"product-btn-add\" type=\"button\" onclick=\"ajaxAdd(\$(this),36);\">
\t\t\t<i class=\"material-design-shopping231\"></i>
\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_button", array()), "content", array()), "html", null, true));
        echo "</span>
\t\t</button>
\t</div>
\t<div class=\"cart-buttons\">
\t\t<button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('36');\">
\t\t\t<i class=\"material-icons-favorite_border\"></i>
\t\t</button>
\t\t<button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('36');\">
\t\t\t<i class=\"material-icons-sort\"></i>
\t\t</button>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--feature_product--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  64 => 14,  59 => 12,  48 => 4,  43 => 1,);
    }
}
/* <div class="product-thumb transition options">*/
/* 	<div class="image">*/
/* 		<a class="lazy lazy-loaded" style="padding-bottom: 100%" href="#">*/
/* 		  {{fields.field_product_image.content}}*/
/* 		</a>*/
/* 		<a class="quickview" data-rel="details" href="#quickview_featured_110010">*/
/* 			<i class="material-icons-remove_red_eye"></i>*/
/* 		</a>*/
/* 	</div>*/
/* 	<div class="caption">*/
/* 		<div class="name">*/
/* 			<a href="#">{{fields.field_product_name.content}}</a>*/
/* 		</div>*/
/* 		<div class="price">${{fields.field_price.content}} </div>*/
/* 	</div>*/
/* 	<div class="cart-button">*/
/* 		<button class="product-btn-add" type="button" onclick="ajaxAdd($(this),36);">*/
/* 			<i class="material-design-shopping231"></i>*/
/* 			<span class="hidden-xs hidden-sm hidden-md">{{fields.field_button.content}}</span>*/
/* 		</button>*/
/* 	</div>*/
/* 	<div class="cart-buttons">*/
/* 		<button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('36');">*/
/* 			<i class="material-icons-favorite_border"></i>*/
/* 		</button>*/
/* 		<button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('36');">*/
/* 			<i class="material-icons-sort"></i>*/
/* 		</button>*/
/* 	</div>*/
/* </div>*/
/* */
