<?php

/* themes/custom/vickie_dean_themes/templates/system/page.html.twig */
class __TwigTemplate_00057bac7a1e22d85a43a890059285c8372f92890d19bd5c93f68a17e67ea165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top_schedule' => array($this, 'block_top_schedule'),
            'top_navigation' => array($this, 'block_top_navigation'),
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'features' => array($this, 'block_features'),
            'slideshow' => array($this, 'block_slideshow'),
            'feature_top' => array($this, 'block_feature_top'),
            'products' => array($this, 'block_products'),
            'partners' => array($this, 'block_partners'),
            'general_info' => array($this, 'block_general_info'),
            'footer_link_right' => array($this, 'block_footer_link_right'),
            'footer_link_left' => array($this, 'block_footer_link_left'),
            'footer_address' => array($this, 'block_footer_address'),
            'footer_social' => array($this, 'block_footer_social'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 68, "block" => 69, "set" => 86);
        $filters = array("clean_class" => 94, "t" => 107);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block', 'set'),
                array('clean_class', 't'),
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

        // line 64
        echo "<header>
  <div class=\"top-line\">
    <div class=\"container\">
      ";
        // line 68
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_schedule", array())) {
            // line 69
            echo "          ";
            $this->displayBlock('top_schedule', $context, $blocks);
            // line 72
            echo "        ";
        }
        // line 73
        echo "
      ";
        // line 75
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_navigation", array())) {
            // line 76
            echo "          ";
            $this->displayBlock('top_navigation', $context, $blocks);
            // line 82
            echo "        ";
        }
        // line 83
        echo "    </div>
  </div>

";
        // line 86
        $context["container"] = "container";
        // line 88
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 89
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 123
            echo "  ";
        }
        // line 124
        echo "</header>
  ";
        // line 126
        echo "  ";
        $this->displayBlock('main', $context, $blocks);
        // line 221
        echo "
<div id=\"page\">

  ";
        // line 225
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features", array())) {
            // line 226
            echo "    ";
            $this->displayBlock('features', $context, $blocks);
            // line 235
            echo "  ";
        }
        // line 236
        echo "
  ";
        // line 238
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 239
            echo "    ";
            $this->displayBlock('slideshow', $context, $blocks);
            // line 242
            echo "  ";
        }
        // line 243
        echo "
  ";
        // line 245
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature_top", array())) {
            // line 246
            echo "    ";
            $this->displayBlock('feature_top', $context, $blocks);
            // line 251
            echo "  ";
        }
        // line 252
        echo "
  ";
        // line 254
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "products", array())) {
            // line 255
            echo "    ";
            $this->displayBlock('products', $context, $blocks);
            // line 268
            echo "  ";
        }
        // line 269
        echo "
  <section class=\"bottom\"> 
    ";
        // line 272
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "partners", array())) {
            // line 273
            echo "      ";
            $this->displayBlock('partners', $context, $blocks);
            // line 276
            echo "    ";
        }
        // line 277
        echo "
    ";
        // line 279
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "general_info", array())) {
            // line 280
            echo "      ";
            $this->displayBlock('general_info', $context, $blocks);
            // line 291
            echo "    ";
        }
        // line 292
        echo "  </section> 

  <footer>
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 298
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_right", array())) {
            // line 299
            echo "          ";
            $this->displayBlock('footer_link_right', $context, $blocks);
            // line 306
            echo "        ";
        }
        // line 307
        echo "
        ";
        // line 309
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_left", array())) {
            // line 310
            echo "          ";
            $this->displayBlock('footer_link_left', $context, $blocks);
            // line 317
            echo "        ";
        }
        // line 318
        echo "
        ";
        // line 320
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_address", array())) {
            // line 321
            echo "          ";
            $this->displayBlock('footer_address', $context, $blocks);
            // line 332
            echo "        ";
        }
        // line 333
        echo "
        ";
        // line 335
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_social", array())) {
            // line 336
            echo "          ";
            $this->displayBlock('footer_social', $context, $blocks);
            // line 342
            echo "        ";
        }
        // line 343
        echo "      </div>
    </div>
    <div class=\"container\">
      <div class=\"copyright\">
        Powered By <a href=\"http://www.opencart.com\">OpenCart</a><br/> Contact Lens Store &copy; 2016 
      </div>
    </div>
  </footer>
</div>";
    }

    // line 69
    public function block_top_schedule($context, array $blocks = array())
    {
        echo "  
            ";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_schedule", array()), "html", null, true));
        echo "
          ";
    }

    // line 76
    public function block_top_navigation($context, array $blocks = array())
    {
        echo "  
              <nav id=\"top-links\" class=\"nav toggle-wrap\">
                <a class=\"toggle material-design-settings49\" href='#'></a>
                    ";
        // line 79
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_navigation", array()), "html", null, true));
        echo "
              </nav>
          ";
    }

    // line 89
    public function block_navbar($context, array $blocks = array())
    {
        // line 90
        echo "    ";
        // line 91
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 93
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-inverse")), 2 => (($this->getAttribute($this->getAttribute(        // line 94
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 97
        echo "                <div class=\"mid-line\">
                  <div id=\"stuck\" class=\"stuck-menu\">
                    <div class=\"container\">
                      <div class=\"row\">
                                
                        ";
        // line 102
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
                        ";
        // line 104
        echo "                        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 105
            echo "                          <button type=\"button\" class=\"navbar-toggle navbar-collapse\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"
                            aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
                            <span class=\"icon-bar top-bar\"></span>
                            <span class=\"icon-bar middle-bar\"></span>
                            <span class=\"icon-bar bottom-bar\"></span>
                          </button>
                        ";
        }
        // line 113
        echo "                      </div>

                        ";
        // line 115
        echo " 
                        ";
        // line 116
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 117
            echo "                                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
                        ";
        }
        // line 119
        echo "                    </div>
                  </div>
                </div>
    ";
    }

    // line 126
    public function block_main($context, array $blocks = array())
    {
        // line 127
        echo "    <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">

        ";
        // line 130
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 131
            echo "          ";
            $this->displayBlock('header', $context, $blocks);
            // line 153
            echo "        ";
        }
        // line 154
        echo "
        ";
        // line 156
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 157
            echo "          ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 162
            echo "        ";
        }
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        // line 166
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 167
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 168
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 169
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 170
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("row") : ("")));
        // line 173
        echo "        <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

          ";
        // line 176
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 177
            echo "            ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 180
            echo "          ";
        }
        // line 181
        echo "
          ";
        // line 183
        echo "          ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 184
            echo "            ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 187
            echo "          ";
        }
        // line 188
        echo "
          ";
        // line 190
        echo "          ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 191
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 194
            echo "          ";
        }
        // line 195
        echo "
          ";
        // line 197
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 198
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 201
            echo "          ";
        }
        // line 202
        echo "
          ";
        // line 204
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 208
        echo "
        </section>

        ";
        // line 212
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 213
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 218
            echo "        ";
        }
        // line 219
        echo "    </div>
  ";
    }

    // line 131
    public function block_header($context, array $blocks = array())
    {
        // line 132
        echo "            <!-- <div class=\"col-sm-12\" role=\"heading\">
              <div class=\"navigation\">
                <div class=\"container\">
                  <div class=\"wrapp\">
                    <div class=\"megamenu\">-->
                  <div class=\"container\">
                      ";
        // line 138
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
                    <!-- </div> -->
                    <div id=\"search\" class=\"search\">
                      <div class=\"search__cnt\">
                        <input id=\"search__input\" class=\"search__input\" type=\"text\" name=\"search\" value=\"\" placeholder=\"\"/>
                        <button id=\"search__btn\" class=\"search__btn\" type=\"button\"><span>Search</span></button>
                      </div>
                      <i class=\"tog_btn\"></i>
                    </div>
                  </div>
                  <!-- </div>
                </div>
              </div>
            </div> -->
          ";
    }

    // line 157
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 158
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 159
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 177
    public function block_highlighted($context, array $blocks = array())
    {
        // line 178
        echo "              <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
            ";
    }

    // line 184
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 185
        echo "              ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
            ";
    }

    // line 191
    public function block_action_links($context, array $blocks = array())
    {
        // line 192
        echo "              <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
            ";
    }

    // line 198
    public function block_help($context, array $blocks = array())
    {
        // line 199
        echo "              ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
    }

    // line 204
    public function block_content($context, array $blocks = array())
    {
        // line 205
        echo "            <a id=\"main-content\"></a>
              ";
        // line 206
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          ";
    }

    // line 213
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 214
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 215
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 226
    public function block_features($context, array $blocks = array())
    {
        // line 227
        echo "      <div class=\"container\">
        <div class=\"row\"> 
          <div id=\"content\" class=\"col-sm-12\">     
           ";
        // line 230
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features", array()), "html", null, true));
        echo "
         </div>
       </div>
     </div>
    ";
    }

    // line 239
    public function block_slideshow($context, array $blocks = array())
    {
        echo "     
           ";
        // line 240
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
        echo "
    ";
    }

    // line 246
    public function block_feature_top($context, array $blocks = array())
    {
        // line 247
        echo "      <div id=\"banner0\" class=\"banners row\">
        ";
        // line 248
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature_top", array()), "html", null, true));
        echo "
      </div>
    ";
    }

    // line 255
    public function block_products($context, array $blocks = array())
    {
        // line 256
        echo "      <section id=\"container\">
        <div class=\"container\">
          <div class=\"row\"> 
            <div id=\"content\" class=\"col-sm-12\">
              <div role=\"tabpanel\" class=\"module_tab module_tab__0\">
                ";
        // line 261
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "products", array()), "html", null, true));
        echo "
              </div>
            </div>
          </div>
        </div>
      </section>
    ";
    }

    // line 273
    public function block_partners($context, array $blocks = array())
    {
        echo "     
          ";
        // line 274
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "partners", array()), "html", null, true));
        echo "
      ";
    }

    // line 280
    public function block_general_info($context, array $blocks = array())
    {
        // line 281
        echo "        <div class=\"box_html \">
          <div class=\"content-block\">
            <div class=\"container\">
              <div class=\"row\">     
                ";
        // line 285
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "general_info", array()), "html", null, true));
        echo "
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 299
    public function block_footer_link_right($context, array $blocks = array())
    {
        // line 300
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-3\">
              <div class=\"footer_box\">
                  ";
        // line 302
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_right", array()), "html", null, true));
        echo "
              </div>
            </div>
          ";
    }

    // line 310
    public function block_footer_link_left($context, array $blocks = array())
    {
        // line 311
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-3\">
              <div class=\"footer_box\">
                  ";
        // line 313
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_left", array()), "html", null, true));
        echo "
              </div>
            </div>
          ";
    }

    // line 321
    public function block_footer_address($context, array $blocks = array())
    {
        // line 322
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-4\">
              <div class=\"footer_box\">
                <address>
                  <ul>
                    ";
        // line 326
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_address", array()), "html", null, true));
        echo "
                  </ul>
                </address>
             </div>
           </div>
          ";
    }

    // line 336
    public function block_footer_social($context, array $blocks = array())
    {
        // line 337
        echo "                <p class=\"newsletter-description\">Social Media Links</p>
                ";
        // line 338
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_social", array()), "html", null, true));
        echo "
            </div>
          </div>
          ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 338,  703 => 337,  700 => 336,  690 => 326,  684 => 322,  681 => 321,  673 => 313,  669 => 311,  666 => 310,  658 => 302,  654 => 300,  651 => 299,  641 => 285,  635 => 281,  632 => 280,  626 => 274,  621 => 273,  610 => 261,  603 => 256,  600 => 255,  593 => 248,  590 => 247,  587 => 246,  581 => 240,  576 => 239,  567 => 230,  562 => 227,  559 => 226,  552 => 215,  549 => 214,  546 => 213,  540 => 206,  537 => 205,  534 => 204,  527 => 199,  524 => 198,  517 => 192,  514 => 191,  507 => 185,  504 => 184,  497 => 178,  494 => 177,  487 => 159,  484 => 158,  481 => 157,  462 => 138,  454 => 132,  451 => 131,  446 => 219,  443 => 218,  440 => 213,  437 => 212,  432 => 208,  429 => 204,  426 => 202,  423 => 201,  420 => 198,  417 => 197,  414 => 195,  411 => 194,  408 => 191,  405 => 190,  402 => 188,  399 => 187,  396 => 184,  393 => 183,  390 => 181,  387 => 180,  384 => 177,  381 => 176,  375 => 173,  373 => 170,  372 => 169,  371 => 168,  370 => 167,  369 => 166,  367 => 165,  364 => 163,  361 => 162,  358 => 157,  355 => 156,  352 => 154,  349 => 153,  346 => 131,  343 => 130,  337 => 127,  334 => 126,  327 => 119,  321 => 117,  319 => 116,  316 => 115,  312 => 113,  303 => 107,  299 => 105,  296 => 104,  292 => 102,  285 => 97,  283 => 94,  282 => 93,  281 => 91,  279 => 90,  276 => 89,  269 => 79,  262 => 76,  256 => 70,  251 => 69,  239 => 343,  236 => 342,  233 => 336,  230 => 335,  227 => 333,  224 => 332,  221 => 321,  218 => 320,  215 => 318,  212 => 317,  209 => 310,  206 => 309,  203 => 307,  200 => 306,  197 => 299,  194 => 298,  187 => 292,  184 => 291,  181 => 280,  178 => 279,  175 => 277,  172 => 276,  169 => 273,  166 => 272,  162 => 269,  159 => 268,  156 => 255,  153 => 254,  150 => 252,  147 => 251,  144 => 246,  141 => 245,  138 => 243,  135 => 242,  132 => 239,  129 => 238,  126 => 236,  123 => 235,  120 => 226,  117 => 225,  112 => 221,  109 => 126,  106 => 124,  103 => 123,  100 => 89,  98 => 88,  96 => 86,  91 => 83,  88 => 82,  85 => 76,  82 => 75,  79 => 73,  76 => 72,  73 => 69,  70 => 68,  65 => 64,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity: */
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * */
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  * */
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* <header>*/
/*   <div class="top-line">*/
/*     <div class="container">*/
/*       {# Top Schedule #}*/
/*         {% if page.top_schedule %}*/
/*           {% block top_schedule %}  */
/*             {{ page.top_schedule }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*       {# Top Navigation #}*/
/*         {% if page.top_navigation %}*/
/*           {% block top_navigation %}  */
/*               <nav id="top-links" class="nav toggle-wrap">*/
/*                 <a class="toggle material-design-settings49" href='#'></a>*/
/*                     {{ page.top_navigation }}*/
/*               </nav>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/*     </div>*/
/*   </div>*/
/* */
/* {% set container = 'container' %}*/
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-inverse',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*                 <div class="mid-line">*/
/*                   <div id="stuck" class="stuck-menu">*/
/*                     <div class="container">*/
/*                       <div class="row">*/
/*                                 */
/*                         {{ page.navigation }}*/
/*                         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*                         {% if page.navigation_collapsible %}*/
/*                           <button type="button" class="navbar-toggle navbar-collapse" data-toggle="collapse" data-target=".navbar-collapse"*/
/*                             aria-expanded="false" aria-controls="navbar">*/
/*                             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*                             <span class="icon-bar top-bar"></span>*/
/*                             <span class="icon-bar middle-bar"></span>*/
/*                             <span class="icon-bar bottom-bar"></span>*/
/*                           </button>*/
/*                         {% endif %}*/
/*                       </div>*/
/* */
/*                         {# Navigation (collapsible) #} */
/*                         {% if page.navigation_collapsible %}*/
/*                                 {{ page.navigation_collapsible }}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* </header>*/
/*   {# Main #}*/
/*   {% block main %}*/
/*     <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/* */
/*         {# Header #}*/
/*         {% if page.header %}*/
/*           {% block header %}*/
/*             <!-- <div class="col-sm-12" role="heading">*/
/*               <div class="navigation">*/
/*                 <div class="container">*/
/*                   <div class="wrapp">*/
/*                     <div class="megamenu">-->*/
/*                   <div class="container">*/
/*                       {{ page.header }}*/
/*                     <!-- </div> -->*/
/*                     <div id="search" class="search">*/
/*                       <div class="search__cnt">*/
/*                         <input id="search__input" class="search__input" type="text" name="search" value="" placeholder=""/>*/
/*                         <button id="search__btn" class="search__btn" type="button"><span>Search</span></button>*/
/*                       </div>*/
/*                       <i class="tog_btn"></i>*/
/*                     </div>*/
/*                   </div>*/
/*                   <!-- </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div> -->*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Sidebar First #}*/
/*         {% if page.sidebar_first %}*/
/*           {% block sidebar_first %}*/
/*             <aside class="col-sm-3" role="complementary">*/
/*               {{ page.sidebar_first }}*/
/*             </aside>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {%*/
/*           set content_classes = [*/
/*             page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*             page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*             page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*             page.sidebar_first is empty and page.sidebar_second is empty ? 'row'*/
/*           ]*/
/*         %}*/
/*         <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*           {# Highlighted #}*/
/*           {% if page.highlighted %}*/
/*             {% block highlighted %}*/
/*               <div class="highlighted">{{ page.highlighted }}</div>*/
/*             {% endblock %}*/
/*           {% endif %}*/
/* */
/*           {# Breadcrumbs #}*/
/*           {% if breadcrumb %}*/
/*             {% block breadcrumb %}*/
/*               {{ breadcrumb }}*/
/*             {% endblock %}*/
/*           {% endif %}*/
/* */
/*           {# Action Links #}*/
/*           {% if action_links %}*/
/*             {% block action_links %}*/
/*               <ul class="action-links">{{ action_links }}</ul>*/
/*             {% endblock %}*/
/*           {% endif %}*/
/* */
/*           {# Help #}*/
/*           {% if page.help %}*/
/*             {% block help %}*/
/*               {{ page.help }}*/
/*             {% endblock %}*/
/*           {% endif %}*/
/* */
/*           {# Content #}*/
/*           {% block content %}*/
/*             <a id="main-content"></a>*/
/*               {{ page.content }}*/
/*           {% endblock %}*/
/* */
/*         </section>*/
/* */
/*         {# Sidebar Second #}*/
/*         {% if page.sidebar_second %}*/
/*           {% block sidebar_second %}*/
/*             <aside class="col-sm-3" role="complementary">*/
/*               {{ page.sidebar_second }}*/
/*             </aside>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/*     </div>*/
/*   {% endblock %}*/
/* */
/* <div id="page">*/
/* */
/*   {# Features #}*/
/*   {% if page.features %}*/
/*     {% block features %}*/
/*       <div class="container">*/
/*         <div class="row"> */
/*           <div id="content" class="col-sm-12">     */
/*            {{ page.features }}*/
/*          </div>*/
/*        </div>*/
/*      </div>*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* */
/*   {# Slideshow #}*/
/*   {% if page.slideshow %}*/
/*     {% block slideshow %}     */
/*            {{ page.slideshow }}*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* */
/*   {# Feature Top #}*/
/*   {% if page.feature_top %}*/
/*     {% block feature_top %}*/
/*       <div id="banner0" class="banners row">*/
/*         {{ page.feature_top }}*/
/*       </div>*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* */
/*   {# Products #}*/
/*   {% if page.products %}*/
/*     {% block products %}*/
/*       <section id="container">*/
/*         <div class="container">*/
/*           <div class="row"> */
/*             <div id="content" class="col-sm-12">*/
/*               <div role="tabpanel" class="module_tab module_tab__0">*/
/*                 {{ page.products }}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </section>*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* */
/*   <section class="bottom"> */
/*     {# Partners #}*/
/*     {% if page.partners %}*/
/*       {% block partners %}     */
/*           {{ page.partners }}*/
/*       {% endblock %}*/
/*     {% endif %}*/
/* */
/*     {# General Info #}*/
/*     {% if page.general_info %}*/
/*       {% block general_info %}*/
/*         <div class="box_html ">*/
/*           <div class="content-block">*/
/*             <div class="container">*/
/*               <div class="row">     */
/*                 {{ page.general_info }}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endblock %}*/
/*     {% endif %}*/
/*   </section> */
/* */
/*   <footer>*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         {# Footer Link Right #}*/
/*         {% if page.footer_link_right %}*/
/*           {% block footer_link_right %}*/
/*             <div class="col-xs-6 col-sm-6 col-md-3">*/
/*               <div class="footer_box">*/
/*                   {{ page.footer_link_right }}*/
/*               </div>*/
/*             </div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Footer Link Left #}*/
/*         {% if page.footer_link_left %}*/
/*           {% block footer_link_left %}*/
/*             <div class="col-xs-6 col-sm-6 col-md-3">*/
/*               <div class="footer_box">*/
/*                   {{ page.footer_link_left }}*/
/*               </div>*/
/*             </div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Footer Address #}*/
/*         {% if page.footer_address %}*/
/*           {% block footer_address %}*/
/*             <div class="col-xs-6 col-sm-6 col-md-4">*/
/*               <div class="footer_box">*/
/*                 <address>*/
/*                   <ul>*/
/*                     {{ page.footer_address }}*/
/*                   </ul>*/
/*                 </address>*/
/*              </div>*/
/*            </div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Footer Social #}*/
/*         {% if page.footer_social %}*/
/*           {% block footer_social %}*/
/*                 <p class="newsletter-description">Social Media Links</p>*/
/*                 {{ page.footer_social }}*/
/*             </div>*/
/*           </div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     <div class="container">*/
/*       <div class="copyright">*/
/*         Powered By <a href="http://www.opencart.com">OpenCart</a><br/> Contact Lens Store &copy; 2016 */
/*       </div>*/
/*     </div>*/
/*   </footer>*/
/* </div>*/
