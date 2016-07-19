<?php

/* themes/custom/vickie_dean_themes/templates/layouts/sitemap.html.twig */
class __TwigTemplate_7508b6b749860da2cf921780838d9c159208084ad83eff0a942c55568043d157 extends Twig_Template
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
        $tags = array("if" => 35, "for" => 42);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 25
        echo "<div id=\"page\" class=\"sitemap-wrapper\">
  <div class=\"container\">
    <ul class=\"breadcrumb\">
      <li><a href=\"/node\"></a></li>
      <li><a href=\"/sitemap\"></a><span>Site Map</span></li>
    </ul> 

    <div class=\"row site-map-page\"> <div id=\"content\" class=\"col-sm-12\"> <h1>Site Map</h1>
      <div class=\"row\">
        <div class=\"sitemap\">
        ";
        // line 35
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 36
            echo "          <div class=\"sitemap-message\">
            ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 40
        echo "
        ";
        // line 41
        if ((isset($context["sitemap_items"]) ? $context["sitemap_items"] : null)) {
            // line 42
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitemap_items"]) ? $context["sitemap_items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                echo "            <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "sitemap-box"), "method"), "html", null, true));
                echo ">
              <!-- Displaying specific menus. -->
                <div class=\"content\">
                  <div class=\"col-sm-6\">
                    ";
                // line 47
                if (($this->getAttribute($context["item"], "title", array()) == "Main navigation")) {
                    // line 48
                    echo "                      <h5>Categories</h5>
                    ";
                } elseif (($this->getAttribute(                // line 49
$context["item"], "title", array()) == "Account")) {
                    // line 50
                    echo "                      <h5>Pages</h5>
                    ";
                } else {
                    // line 52
                    echo "                      <h5>Information</h5>
                    ";
                }
                // line 54
                echo "                      ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "
                  </div>
                </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ((isset($context["additional"]) ? $context["additional"] : null)) {
            // line 62
            echo "          <div class=\"sitemap-additional\">
            ";
            // line 63
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["additional"]) ? $context["additional"] : null), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 66
        echo "        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/layouts/sitemap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 66,  122 => 63,  119 => 62,  117 => 61,  114 => 60,  111 => 59,  99 => 54,  95 => 52,  91 => 50,  89 => 49,  86 => 48,  84 => 47,  76 => 43,  71 => 42,  69 => 41,  66 => 40,  60 => 37,  57 => 36,  55 => 35,  43 => 25,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme implementation to display the sitemap.*/
/*  **/
/*  * Available variables:*/
/*  * - message: A configurable introductory message.*/
/*  * - sitemap_items: A keyed array of sitemap "boxes".*/
/*  *   The keys correspond to the available types of sitemap content, including:*/
/*  *   - front*/
/*  *   - books*/
/*  *   - individual menus*/
/*  *   - individual vocabularies*/
/*  *   Each items contains the following variables:*/
/*  *   - title: The subject of the box.*/
/*  *   - content: The content of the box.*/
/*  *   - attributes:  Optional attributes for the box.*/
/*  *   - options:  Options are set by sitemap.helper service.*/
/*  * - additional:*/
/*  **/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_sitemap()*/
/*  *//* */
/* #}*/
/* <div id="page" class="sitemap-wrapper">*/
/*   <div class="container">*/
/*     <ul class="breadcrumb">*/
/*       <li><a href="/node"></a></li>*/
/*       <li><a href="/sitemap"></a><span>Site Map</span></li>*/
/*     </ul> */
/* */
/*     <div class="row site-map-page"> <div id="content" class="col-sm-12"> <h1>Site Map</h1>*/
/*       <div class="row">*/
/*         <div class="sitemap">*/
/*         {% if message %}*/
/*           <div class="sitemap-message">*/
/*             {{ message }}*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         {% if sitemap_items %}*/
/*           {% for item in sitemap_items %}*/
/*             <div{{ item.attributes.addClass('sitemap-box') }}>*/
/*               <!-- Displaying specific menus. -->*/
/*                 <div class="content">*/
/*                   <div class="col-sm-6">*/
/*                     {% if item.title == "Main navigation" %}*/
/*                       <h5>Categories</h5>*/
/*                     {% elseif item.title == "Account" %}*/
/*                       <h5>Pages</h5>*/
/*                     {% else %}*/
/*                       <h5>Information</h5>*/
/*                     {% endif %}*/
/*                       {{ item.content }}*/
/*                   </div>*/
/*                 </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*         {% endif %}*/
/* */
/*         {% if additional %}*/
/*           <div class="sitemap-additional">*/
/*             {{ additional }}*/
/*           </div>*/
/*         {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
