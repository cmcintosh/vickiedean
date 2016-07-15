<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--mid_line--block_1.html.twig */
class __TwigTemplate_aaa1daeb135c2c02cf4d856940406733f2f1cc9cfc77e83a115caf6c6f945323 extends Twig_Template
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
        echo "<div class=\"col-xs-5\">
\t<div id=\"logo\" class=\"logo\">
\t\t";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_logo", array()), "content", array()), "html", null, true));
        echo "
\t</div>
</div>
<div class=\"col-xs-7\">
\t<div class=\"check\">
\t\t<a class=\"check-btn\" href=\"#\" title=\"Checkout\"><b>";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_checkout", array()), "content", array()), "html", null, true));
        echo "</b>
\t\t\t<i class=\"material-icons-check\"></i>
\t\t</a>
\t</div>
\t<div class=\"box-cart\">
\t\t<div id=\"cart\" class=\"cart toggle-wrap\">
\t\t\t<button type=\"button\" data-loading-text=\"Loading...\" class=\"toggle\">
\t\t\t\t<i class=\"material-icons-shopping_cart\"></i>
\t\t\t\t<strong>";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_cart", array()), "content", array()), "html", null, true));
        echo "</strong>
\t\t\t\t<span id=\"cart-total2\" class=\"cart-total2\">0</span>
\t\t\t</button>
\t\t\t<ul class=\"pull-right toggle_cont\">
\t\t\t\t<li>
\t\t\t\t\t<p class=\"text-center\">Your shopping cart is empty!</p>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div> 
</div>
<span class=\"separator\"></span>
<div class=\"wishlist\">
\t<a href=\"#\" id=\"wishlist-total\" title=\"Wish List (0)\">
\t\t<i class=\"material-design-favorite22\"></i>
\t\t<span>";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_wishlist", array()), "content", array()), "html", null, true));
        echo "</span>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--mid_line--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  66 => 16,  55 => 8,  47 => 3,  43 => 1,);
    }
}
/* <div class="col-xs-5">*/
/* 	<div id="logo" class="logo">*/
/* 		{{fields.field_logo.content}}*/
/* 	</div>*/
/* </div>*/
/* <div class="col-xs-7">*/
/* 	<div class="check">*/
/* 		<a class="check-btn" href="#" title="Checkout"><b>{{fields.field_checkout.content}}</b>*/
/* 			<i class="material-icons-check"></i>*/
/* 		</a>*/
/* 	</div>*/
/* 	<div class="box-cart">*/
/* 		<div id="cart" class="cart toggle-wrap">*/
/* 			<button type="button" data-loading-text="Loading..." class="toggle">*/
/* 				<i class="material-icons-shopping_cart"></i>*/
/* 				<strong>{{fields.field_cart.content}}</strong>*/
/* 				<span id="cart-total2" class="cart-total2">0</span>*/
/* 			</button>*/
/* 			<ul class="pull-right toggle_cont">*/
/* 				<li>*/
/* 					<p class="text-center">Your shopping cart is empty!</p>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</div> */
/* </div>*/
/* <span class="separator"></span>*/
/* <div class="wishlist">*/
/* 	<a href="#" id="wishlist-total" title="Wish List (0)">*/
/* 		<i class="material-design-favorite22"></i>*/
/* 		<span>{{fields.field_wishlist.content}}</span>*/
/* 	</a>*/
/* </div>*/
/* */
