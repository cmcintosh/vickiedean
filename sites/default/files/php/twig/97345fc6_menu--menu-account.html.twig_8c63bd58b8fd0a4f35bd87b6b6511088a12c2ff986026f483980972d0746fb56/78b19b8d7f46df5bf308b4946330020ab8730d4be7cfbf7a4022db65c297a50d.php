<?php

/* themes/custom/vickie_dean_themes/templates/menu/menu--menu-account.html.twig */
class __TwigTemplate_0aed045d3bd73a807dc02b77966c3b68f863fd308506bec745b33327a95c4a6c extends Twig_Template
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
        $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 38);
        $filters = array();
        $functions = array("link" => 44);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
                array(),
                array('link')
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

        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
        // line 55
        echo " 
";
    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 29
                echo "    <div class=\"box blog-categories\">
      <div class=\"box-heading\"><h3>Account</h3></div>
      <div class=\"box-content\">
        ";
                // line 32
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 33
                    echo "            <ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "list-unstyled", 1 => "menu"), "method"), "html", null, true));
                    echo ">
          ";
                } else {
                    // line 35
                    echo "          </div>
            <ul";
                    // line 36
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "dropdown-menu"), "method"), "html", null, true));
                    echo ">
          ";
                }
                // line 38
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "            ";
                    if ((((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 40
                        echo "              <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "expanded", 1 => "dropdown"), "method"), "html", null, true));
                        echo ">
              <a href=\"";
                        // line 41
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"dropdown-toggle\" data-target=\"#\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"caret\"></span></a>
            ";
                    } else {
                        // line 43
                        echo "              <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                        echo ">
              ";
                        // line 44
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
            ";
                    }
                    // line 46
                    echo "            ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 47
                        echo "              ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => "nav", 1 => "navbar-nav", 2 => "navbar-right"), "method"), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
            ";
                    }
                    // line 49
                    echo "            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "          </ul>
      </div>
    </div>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/menu/menu--menu-account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 51,  138 => 49,  132 => 47,  129 => 46,  124 => 44,  119 => 43,  112 => 41,  107 => 40,  104 => 39,  99 => 38,  94 => 36,  91 => 35,  85 => 33,  83 => 32,  78 => 29,  75 => 28,  72 => 27,  58 => 26,  53 => 55,  48 => 24,  45 => 19,  43 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     <div class="box blog-categories">*/
/*       <div class="box-heading"><h3>Account</h3></div>*/
/*       <div class="box-content">*/
/*         {% if menu_level == 0 %}*/
/*             <ul{{ attributes.addClass('list-unstyled','menu') }}>*/
/*           {% else %}*/
/*           </div>*/
/*             <ul{{ attributes.addClass('dropdown-menu') }}>*/
/*           {% endif %}*/
/*           {% for item in items %}*/
/*             {% if menu_level == 0 and item.is_expanded %}*/
/*               <li{{ item.attributes.addClass('expanded', 'dropdown') }}>*/
/*               <a href="{{ item.url }}" class="dropdown-toggle" data-target="#" data-toggle="dropdown">{{ item.title }} <span class="caret"></span></a>*/
/*             {% else %}*/
/*               <li{{ item.attributes }}>*/
/*               {{ link(item.title, item.url) }}*/
/*             {% endif %}*/
/*             {% if item.below %}*/
/*               {{ menus.menu_links(item.below, attributes.removeClass('nav', 'navbar-nav', 'navbar-right'), menu_level + 1) }}*/
/*             {% endif %}*/
/*             </li>*/
/*           {% endfor %}*/
/*           </ul>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endmacro %} */
/* */
