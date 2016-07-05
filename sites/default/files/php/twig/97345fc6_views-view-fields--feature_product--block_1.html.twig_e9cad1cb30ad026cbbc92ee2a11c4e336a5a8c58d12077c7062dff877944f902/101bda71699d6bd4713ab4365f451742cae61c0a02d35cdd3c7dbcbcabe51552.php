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
\t<div class=\"product-option-wrap\">
\t\t<div class=\"product-options form-horizontal\">
\t\t\t<div class=\"options\">
\t\t\t\t<a class=\"ajax-overlay_close\" href='#'></a>
\t\t\t\t<h3>Available Options</h3>
\t\t\t\t<div class=\"form-group hidden\">
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" name=\"product_id\" value=\"36\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<label class=\"control-label col-sm-12\" for=\"input-option17011001\">
\t\t\t\t\tSize </label>
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<select name=\"option[17]\" id=\"input-option17011001\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">--- Please Select ---</option>
\t\t\t\t\t\t\t<option value=\"40\">Small (+\$20.00)
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t<option value=\"41\">Medium (+\$15.00)
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t<option value=\"42\">Large (+\$10.00)
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<button class=\"product-btn-add\" type=\"button\" onclick=\"cart.addPopup(\$(this),'36');\">
\t\t\t\t\t<span>Add to Cart</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"quick_info\">
\t\t<div id=\"quickview_featured_110010\" class=\"quickview-style\">
\t\t\t<div>
\t\t\t\t<div class=\"left col-sm-4\">
\t\t\t\t\t<div class=\"quickview_image image\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_product_image", array()), "content", array()), "html", null, true));
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"right col-sm-8\">
\t\t\t\t\t<h2>";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_product_name", array()), "content", array()), "html", null, true));
        echo " </h2>
\t\t\t\t\t<div class=\"inf\">
\t\t\t\t\t\t<p class=\"quickview_manufacture manufacture manufacture\">Brand: <a href=\"#\">";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_brand", array()), "content", array()), "html", null, true));
        echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"product_model model\">Model: ";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_model", array()), "content", array()), "html", null, true));
        echo "</p>
\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\$";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_price", array()), "content", array()), "html", null, true));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"product-btn-add\" data-toggle=\"tooltip\" title=\"Add to Cart\" type=\"button\" onclick=\"cart.add('36');\">
\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t<span>";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_button", array()), "content", array()), "html", null, true));
        echo "</span>
\t\t\t\t\t</button>
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
        // line 72
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
        // line 80
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
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_product_name", array()), "content", array()), "html", null, true));
        echo "</a>
\t\t</div>
\t\t<div class=\"price\">\$";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_price", array()), "content", array()), "html", null, true));
        echo " </div>
\t</div>
\t<div class=\"cart-button\">
\t\t<button class=\"product-btn-add\" type=\"button\" onclick=\"ajaxAdd(\$(this),36);\">
\t\t\t<i class=\"material-design-shopping231\"></i>
\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 95
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
        return array (  169 => 95,  161 => 90,  156 => 88,  145 => 80,  134 => 72,  115 => 56,  107 => 51,  102 => 49,  97 => 47,  92 => 45,  84 => 40,  43 => 1,);
    }
}
/* <div class="product-thumb transition options">*/
/* 	<div class="product-option-wrap">*/
/* 		<div class="product-options form-horizontal">*/
/* 			<div class="options">*/
/* 				<a class="ajax-overlay_close" href='#'></a>*/
/* 				<h3>Available Options</h3>*/
/* 				<div class="form-group hidden">*/
/* 					<div class="col-sm-8">*/
/* 						<input type="text" name="product_id" value="36" class="form-control"/>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group required">*/
/* 					<label class="control-label col-sm-12" for="input-option17011001">*/
/* 					Size </label>*/
/* 					<div class="col-sm-12">*/
/* 						<select name="option[17]" id="input-option17011001" class="form-control">*/
/* 							<option value="">--- Please Select ---</option>*/
/* 							<option value="40">Small (+$20.00)*/
/* 							</option>*/
/* 							<option value="41">Medium (+$15.00)*/
/* 							</option>*/
/* 							<option value="42">Large (+$10.00)*/
/* 							</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<button class="product-btn-add" type="button" onclick="cart.addPopup($(this),'36');">*/
/* 					<span>Add to Cart</span>*/
/* 				</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
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
/* 						<p class="quickview_manufacture manufacture manufacture">Brand: <a href="#">{{fields.field_brand.content}}</a>*/
/* 						</p>*/
/* 						<p class="product_model model">Model: {{fields.field_model.content}}</p>*/
/* 						<div class="price">*/
/* 							${{fields.field_price.content}}*/
/* 						</div>*/
/* 					</div>*/
/* 					<button class="product-btn-add" data-toggle="tooltip" title="Add to Cart" type="button" onclick="cart.add('36');">*/
/* 					<i class="fa fa-shopping-cart"></i>*/
/* 					<span>{{fields.field_button.content}}</span>*/
/* 					</button>*/
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
