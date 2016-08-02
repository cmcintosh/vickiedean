<?php

/* themes/custom/vickie_dean_themes/templates/system/commerce-cart-block.html.twig */
class __TwigTemplate_a67fde4fdaeb07b7e895c1e84cec6d70a98181a39badacd170a05c776e5ebe44 extends Twig_Template
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
        $tags = array("if" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
  <div id=\"logo\" class=\"logo\">
    <a href=\"/node\"><img src=\"/themes/custom/vickie_dean_themes/image/catalog/logo.png\"/></a>
  </div>
</div>
<div class=\"col-xs-7\">
  <div class=\"check\">
    <a class=\"check-btn\" href=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\" title=\"Checkout\"><b>Checkout</b>
      <i class=\"material-icons-check\"></i>
    </a>
  </div>
  <div class=\"page\">
    <div class=\"box-cart\">
      <div id=\"cart\" class=\"cart toggle-wrap\">
        <div";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
          <div class=\"cart-block--summary toggle\">
            <a class=\"cart-block--link__expand\" href=\"";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\">
              <button type=\"button\" data-loading-text=\"Loading...\" class=\"toggle\">
              <span class=\"cart-block--summary__icon\">";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
        echo "</span>
              <strong class=\"white\">Cart</strong>
              <span id=\"cart-total2\" class=\"cart-total2\">";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true));
        echo "</span>
              </button>
            </a>
          </div>
          ";
        // line 25
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 26
            echo "          <div class=\"cart-block--contents\">
            <div class=\"cart-block--contents__inner\">
              <div class=\"cart-block--contents__items\">
                ";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
              </div>
              <div class=\"text-right\">
                <a class=\"cart-remove-btn material-design-visibility1\" href=\"/cart\"><span> View Cart</span></a>
                <a class=\"cart-remove-btn material-design-forward18\" href=\"/checkout\"><span>Checkout</span></a>
              </div>
            </div>
          </div>
          ";
        }
        // line 38
        echo "        </div>
      </div>
  </div>
</div>
<span class=\"separator\"></span>
<div class=\"wishlist\">
  <a href=\"#\" id=\"wishlist-total\" title=\"Wish List (0)\">
    <i class=\"material-design-favorite22\"></i>
    <span>Wishlist</span>
  </a>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/system/commerce-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  91 => 29,  86 => 26,  84 => 25,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  52 => 8,  43 => 1,);
    }
}
/* <div class="col-xs-5">*/
/*   <div id="logo" class="logo">*/
/*     <a href="/node"><img src="/themes/custom/vickie_dean_themes/image/catalog/logo.png"/></a>*/
/*   </div>*/
/* </div>*/
/* <div class="col-xs-7">*/
/*   <div class="check">*/
/*     <a class="check-btn" href="{{ url }}" title="Checkout"><b>Checkout</b>*/
/*       <i class="material-icons-check"></i>*/
/*     </a>*/
/*   </div>*/
/*   <div class="page">*/
/*     <div class="box-cart">*/
/*       <div id="cart" class="cart toggle-wrap">*/
/*         <div{{ attributes}}>*/
/*           <div class="cart-block--summary toggle">*/
/*             <a class="cart-block--link__expand" href="{{ url }}">*/
/*               <button type="button" data-loading-text="Loading..." class="toggle">*/
/*               <span class="cart-block--summary__icon">{{ icon }}</span>*/
/*               <strong class="white">Cart</strong>*/
/*               <span id="cart-total2" class="cart-total2">{{ count }}</span>*/
/*               </button>*/
/*             </a>*/
/*           </div>*/
/*           {% if content %}*/
/*           <div class="cart-block--contents">*/
/*             <div class="cart-block--contents__inner">*/
/*               <div class="cart-block--contents__items">*/
/*                 {{ content }}*/
/*               </div>*/
/*               <div class="text-right">*/
/*                 <a class="cart-remove-btn material-design-visibility1" href="/cart"><span> View Cart</span></a>*/
/*                 <a class="cart-remove-btn material-design-forward18" href="/checkout"><span>Checkout</span></a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <span class="separator"></span>*/
/* <div class="wishlist">*/
/*   <a href="#" id="wishlist-total" title="Wish List (0)">*/
/*     <i class="material-design-favorite22"></i>*/
/*     <span>Wishlist</span>*/
/*   </a>*/
/* </div>*/
/*  */
