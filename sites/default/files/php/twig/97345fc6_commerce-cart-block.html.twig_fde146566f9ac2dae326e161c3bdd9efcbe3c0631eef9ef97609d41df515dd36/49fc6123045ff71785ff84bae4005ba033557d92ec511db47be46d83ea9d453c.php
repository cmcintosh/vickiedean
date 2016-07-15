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
        $tags = array("if" => 21);
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
    ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_logo", array()), "content", array()), "html", null, true));
        echo "
  </div>
</div>
<div class=\"col-xs-7\">
  <div class=\"check\">
    <a class=\"check-btn\" href=\"#\" title=\"Checkout\"><b>Checkout</b>
      <i class=\"material-icons-check\"></i>
    </a>
  </div>
  <div class=\"box-cart\">
    <div id=\"cart\" class=\"cart toggle-wrap\">
      <div";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
        <div class=\"cart-block--summary toggle\">
          <a class=\"cart-block--link__expand\" href=\"";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\">
            <span class=\"cart-block--summary__icon\">";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
        echo "</span>
            <span class=\"cart-block--summary__count cart-total2\">Cart ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true));
        echo "</span>
          </a>
        </div>
        ";
        // line 21
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 22
            echo "        <div class=\"cart-block--contents\">
          <div class=\"cart-block--contents__inner\">
            <div class=\"cart-block--contents__items\">
              ";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
            </div>
            <div class=\"cart-block--contents__links\">
              ";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["links"]) ? $context["links"] : null), "html", null, true));
            echo "
            </div>
          </div>
        </div>
        ";
        }
        // line 33
        echo "      </div>
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
        return array (  101 => 33,  93 => 28,  87 => 25,  82 => 22,  80 => 21,  74 => 18,  70 => 17,  66 => 16,  61 => 14,  47 => 3,  43 => 1,);
    }
}
/* <div class="col-xs-5">*/
/*   <div id="logo" class="logo">*/
/*     {{fields.field_logo.content}}*/
/*   </div>*/
/* </div>*/
/* <div class="col-xs-7">*/
/*   <div class="check">*/
/*     <a class="check-btn" href="#" title="Checkout"><b>Checkout</b>*/
/*       <i class="material-icons-check"></i>*/
/*     </a>*/
/*   </div>*/
/*   <div class="box-cart">*/
/*     <div id="cart" class="cart toggle-wrap">*/
/*       <div{{ attributes}}>*/
/*         <div class="cart-block--summary toggle">*/
/*           <a class="cart-block--link__expand" href="{{ url }}">*/
/*             <span class="cart-block--summary__icon">{{ icon }}</span>*/
/*             <span class="cart-block--summary__count cart-total2">Cart {{ count }}</span>*/
/*           </a>*/
/*         </div>*/
/*         {% if content %}*/
/*         <div class="cart-block--contents">*/
/*           <div class="cart-block--contents__inner">*/
/*             <div class="cart-block--contents__items">*/
/*               {{ content }}*/
/*             </div>*/
/*             <div class="cart-block--contents__links">*/
/*               {{ links }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* <span class="separator"></span>*/
/* <div class="wishlist">*/
/*   <a href="#" id="wishlist-total" title="Wish List (0)">*/
/*     <i class="material-design-favorite22"></i>*/
/*     <span>Wishlist</span>*/
/*   </a>*/
/* </div>*/
/*  */
