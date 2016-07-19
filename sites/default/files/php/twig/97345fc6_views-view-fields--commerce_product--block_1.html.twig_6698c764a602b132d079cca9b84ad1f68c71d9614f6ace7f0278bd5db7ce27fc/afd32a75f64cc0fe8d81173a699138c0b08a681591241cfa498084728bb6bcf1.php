<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--commerce_product--block_1.html.twig */
class __TwigTemplate_f019aee0a51c2302752aa8fbb4e81aa2f2760eeb23289d5c9c44868a600d18cf extends Twig_Template
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
\t<div class=\"quick_info\">
\t\t<div id=\"quickview_featured_110010\" class=\"quickview-style\">
\t\t\t<div>
\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t<div class=\"quickview_image image\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_product_image", array()), "content", array()), "html", null, true));
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t<h2>";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_product_name", array()), "content", array()), "html", null, true));
        echo " </h2>
\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">
\t\t\t\t\t\t\tBrand: <a href=\"#\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_brand", array()), "content", array()), "html", null, true));
        echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"product_model model\">
\t\t\t\t\t\t\tModel: ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_model", array()), "content", array()), "html", null, true));
        echo "</p>
\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_price", array()), "content", array()), "html", null, true));
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
 
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_products", array()), "content", array()), "html", null, true));
        echo "
\t\t\t\t\t
\t\t\t\t\t<ul class=\"product-buttons\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('36');\">
\t\t\t\t\t\t<i class=\"material-icons-favorite_border\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('36');\"><i class=\"material-icons-sort\"></i></button>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"quickview_description description\">
\t\t\t\t\t\t<p>";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_description", array()), "content", array()), "html", null, true));
        echo "</p> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"image\">
\t\t<a class=\"lazy lazy-loaded\" style=\"padding-bottom: 100%\" href=\"#\">
\t\t  ";
        // line 50
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
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_product_name", array()), "content", array()), "html", null, true));
        echo "</a>
\t\t</div>
\t\t<div class=\"price\">";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_price", array()), "content", array()), "html", null, true));
        echo " </div>
\t</div>

\t<div class=\"cart-button\">
\t\t";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_products", array()), "content", array()), "html", null, true));
        echo "
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
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--commerce_product--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 64,  131 => 60,  126 => 58,  115 => 50,  103 => 41,  84 => 25,  77 => 21,  72 => 19,  66 => 16,  60 => 13,  52 => 8,  43 => 1,);
    }
}
/* <div class="product-thumb transition options">*/
/* 	<div class="quick_info">*/
/* 		<div id="quickview_featured_110010" class="quickview-style">*/
/* 			<div>*/
/* 				<div class="left col-sm-4">*/
/* 					<div class="quickview_image image">*/
/* 						<a href="#">*/
/* 							{{fields.field_product_image.content}}*/
/* 						</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="right col-sm-8">*/
/* 					<h2>{{fields.field_product_name.content}} </h2>*/
/* 					<div class="inf">*/
/* 						<p class="quickview_manufacture manufacture manufacture">*/
/* 							Brand: <a href="#">{{fields.field_brand.content}}</a>*/
/* 						</p>*/
/* 						<p class="product_model model">*/
/* 							Model: {{fields.field_model.content}}</p>*/
/* 						<div class="price">*/
/* 							{{fields.field_price.content}} */
/* 						</div>*/
/* 					</div>*/
/*  */
/* 					{{fields.field_products.content}}*/
/* 					*/
/* 					<ul class="product-buttons">*/
/* 						<li>*/
/* 						<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('36');">*/
/* 						<i class="material-icons-favorite_border"></i>*/
/* 						</button>*/
/* 						</li>*/
/* 						<li>*/
/* 						<button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('36');"><i class="material-icons-sort"></i></button>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<div class="clear"></div>*/
/* 				</div>*/
/* 				<div class="col-sm-12">*/
/* 					<div class="quickview_description description">*/
/* 						<p>{{fields.field_description.content}}</p> */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
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
/* 		<div class="price">{{fields.field_price.content}} </div>*/
/* 	</div>*/
/* */
/* 	<div class="cart-button">*/
/* 		{{fields.field_products.content}}*/
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
