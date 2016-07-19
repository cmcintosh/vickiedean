<?php

/* themes/custom/vickie_dean_themes/templates/system/page--cart.html.twig */
class __TwigTemplate_2b35b18b79fd9e37e309c0f25d52148a3a7cf4842380593dfcf9699a7181d426 extends Twig_Template
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
        // line 67
        echo " 
        ";
        // line 68
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
        // line 224
        echo "<div id=\"page\">

  ";
        // line 227
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features", array())) {
            // line 228
            echo "    ";
            $this->displayBlock('features', $context, $blocks);
            // line 237
            echo "  ";
        }
        // line 238
        echo "
  ";
        // line 240
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 241
            echo "    ";
            $this->displayBlock('slideshow', $context, $blocks);
            // line 244
            echo "  ";
        }
        // line 245
        echo "
  ";
        // line 247
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature_top", array())) {
            // line 248
            echo "    ";
            $this->displayBlock('feature_top', $context, $blocks);
            // line 253
            echo "  ";
        }
        // line 254
        echo "
  ";
        // line 256
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "products", array())) {
            // line 257
            echo "    ";
            $this->displayBlock('products', $context, $blocks);
            // line 270
            echo "  ";
        }
        // line 271
        echo "
  <section class=\"bottom\"> 
    ";
        // line 274
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "partners", array())) {
            // line 275
            echo "      ";
            $this->displayBlock('partners', $context, $blocks);
            // line 278
            echo "    ";
        }
        // line 279
        echo "
    ";
        // line 281
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "general_info", array())) {
            // line 282
            echo "      ";
            $this->displayBlock('general_info', $context, $blocks);
            // line 293
            echo "    ";
        }
        // line 294
        echo "  </section> 

  <footer>
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 300
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_right", array())) {
            // line 301
            echo "          ";
            $this->displayBlock('footer_link_right', $context, $blocks);
            // line 308
            echo "        ";
        }
        // line 309
        echo "
        ";
        // line 311
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_left", array())) {
            // line 312
            echo "          ";
            $this->displayBlock('footer_link_left', $context, $blocks);
            // line 319
            echo "        ";
        }
        // line 320
        echo "
        ";
        // line 322
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_address", array())) {
            // line 323
            echo "          ";
            $this->displayBlock('footer_address', $context, $blocks);
            // line 334
            echo "        ";
        }
        // line 335
        echo "
        ";
        // line 337
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_social", array())) {
            // line 338
            echo "          ";
            $this->displayBlock('footer_social', $context, $blocks);
            // line 344
            echo "        ";
        }
        // line 345
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
        echo "        ";
        // line 128
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 129
            echo "          ";
            $this->displayBlock('header', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 158
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 159
            echo "          ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 164
            echo "        ";
        }
        // line 165
        echo "    <div id=\"page1\">
      <div role=\"main\" class=\"main-container ";
        // line 166
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
        ";
        // line 168
        echo "        ";
        // line 169
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 170
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 171
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 172
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 173
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("row") : ("")));
        // line 176
        echo "        <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

          ";
        // line 179
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 180
            echo "            ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 183
            echo "          ";
        }
        // line 184
        echo "
          ";
        // line 186
        echo "          ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 187
            echo "            ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 190
            echo "          ";
        }
        // line 191
        echo "
          ";
        // line 193
        echo "          ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 194
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 197
            echo "          ";
        }
        // line 198
        echo "
          ";
        // line 200
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 201
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 204
            echo "          ";
        }
        // line 205
        echo "
          ";
        // line 207
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 211
        echo "
        </section>
      </div>
    </div>
        ";
        // line 216
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 217
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 222
            echo "        ";
        }
        // line 223
        echo "  ";
    }

    // line 129
    public function block_header($context, array $blocks = array())
    {
        // line 130
        echo "            <!-- <div class=\"col-sm-12\" role=\"heading\">
              <div class=\"navigation\">
                <div class=\"container\">
                  <div class=\"wrapp\">
                    <div class=\"megamenu\">-->
                  <div class=\"navigation\">
                    <div class=\"container\">
                      <div class=\"wrapp\">
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
                    </div>
                  </div>
                  <!-- </div>
                </div>
              </div>
            </div> -->
          ";
    }

    // line 159
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 160
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 161
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 180
    public function block_highlighted($context, array $blocks = array())
    {
        // line 181
        echo "              <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
            ";
    }

    // line 187
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 188
        echo "              ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
            ";
    }

    // line 194
    public function block_action_links($context, array $blocks = array())
    {
        // line 195
        echo "              <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
            ";
    }

    // line 201
    public function block_help($context, array $blocks = array())
    {
        // line 202
        echo "              ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
    }

    // line 207
    public function block_content($context, array $blocks = array())
    {
        // line 208
        echo "            <a id=\"main-content\"></a>
              ";
        // line 209
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          ";
    }

    // line 217
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 218
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 219
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 228
    public function block_features($context, array $blocks = array())
    {
        // line 229
        echo "      <div class=\"container\">
        <div class=\"row\"> 
          <div id=\"content\" class=\"col-sm-12\">     
           ";
        // line 232
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features", array()), "html", null, true));
        echo "
         </div>
       </div>
     </div>
    ";
    }

    // line 241
    public function block_slideshow($context, array $blocks = array())
    {
        echo "     
           ";
        // line 242
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
        echo "
    ";
    }

    // line 248
    public function block_feature_top($context, array $blocks = array())
    {
        // line 249
        echo "      <div id=\"banner0\" class=\"banners row\">
        ";
        // line 250
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature_top", array()), "html", null, true));
        echo "
      </div>
    ";
    }

    // line 257
    public function block_products($context, array $blocks = array())
    {
        // line 258
        echo "      <section id=\"container\">
        <div class=\"container\">
          <div class=\"row\"> 
            <div id=\"content\" class=\"col-sm-12\">
              <div role=\"tabpanel\" class=\"module_tab module_tab__0\">
                ";
        // line 263
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "products", array()), "html", null, true));
        echo "
              </div>
            </div>
          </div>
        </div>
      </section>
    ";
    }

    // line 275
    public function block_partners($context, array $blocks = array())
    {
        echo "     
          ";
        // line 276
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "partners", array()), "html", null, true));
        echo "
      ";
    }

    // line 282
    public function block_general_info($context, array $blocks = array())
    {
        // line 283
        echo "        <div class=\"box_html \">
          <div class=\"content-block\">
            <div class=\"container\">
              <div class=\"row\">     
                ";
        // line 287
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "general_info", array()), "html", null, true));
        echo "
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 301
    public function block_footer_link_right($context, array $blocks = array())
    {
        // line 302
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-3\">
              <div class=\"footer_box\">
                  ";
        // line 304
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_right", array()), "html", null, true));
        echo "
              </div>
            </div>
          ";
    }

    // line 312
    public function block_footer_link_left($context, array $blocks = array())
    {
        // line 313
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-3\">
              <div class=\"footer_box\">
                  ";
        // line 315
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_left", array()), "html", null, true));
        echo "
              </div>
            </div>
          ";
    }

    // line 323
    public function block_footer_address($context, array $blocks = array())
    {
        // line 324
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-4\">
              <div class=\"footer_box\">
                <address>
                  <ul>
                    ";
        // line 328
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_address", array()), "html", null, true));
        echo "
                  </ul>
                </address>
             </div>
           </div>
          ";
    }

    // line 338
    public function block_footer_social($context, array $blocks = array())
    {
        // line 339
        echo "                <p class=\"newsletter-description\">Social Media Links</p>
                ";
        // line 340
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_social", array()), "html", null, true));
        echo "
            </div>
          </div>
          ";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/system/page--cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  711 => 340,  708 => 339,  705 => 338,  695 => 328,  689 => 324,  686 => 323,  678 => 315,  674 => 313,  671 => 312,  663 => 304,  659 => 302,  656 => 301,  646 => 287,  640 => 283,  637 => 282,  631 => 276,  626 => 275,  615 => 263,  608 => 258,  605 => 257,  598 => 250,  595 => 249,  592 => 248,  586 => 242,  581 => 241,  572 => 232,  567 => 229,  564 => 228,  557 => 219,  554 => 218,  551 => 217,  545 => 209,  542 => 208,  539 => 207,  532 => 202,  529 => 201,  522 => 195,  519 => 194,  512 => 188,  509 => 187,  502 => 181,  499 => 180,  492 => 161,  489 => 160,  486 => 159,  465 => 138,  455 => 130,  452 => 129,  448 => 223,  445 => 222,  442 => 217,  439 => 216,  433 => 211,  430 => 207,  427 => 205,  424 => 204,  421 => 201,  418 => 200,  415 => 198,  412 => 197,  409 => 194,  406 => 193,  403 => 191,  400 => 190,  397 => 187,  394 => 186,  391 => 184,  388 => 183,  385 => 180,  382 => 179,  376 => 176,  374 => 173,  373 => 172,  372 => 171,  371 => 170,  370 => 169,  368 => 168,  364 => 166,  361 => 165,  358 => 164,  355 => 159,  352 => 158,  349 => 156,  346 => 155,  343 => 129,  340 => 128,  338 => 127,  335 => 126,  328 => 119,  322 => 117,  320 => 116,  317 => 115,  313 => 113,  304 => 107,  300 => 105,  297 => 104,  293 => 102,  286 => 97,  284 => 94,  283 => 93,  282 => 91,  280 => 90,  277 => 89,  270 => 79,  263 => 76,  257 => 70,  252 => 69,  240 => 345,  237 => 344,  234 => 338,  231 => 337,  228 => 335,  225 => 334,  222 => 323,  219 => 322,  216 => 320,  213 => 319,  210 => 312,  207 => 311,  204 => 309,  201 => 308,  198 => 301,  195 => 300,  188 => 294,  185 => 293,  182 => 282,  179 => 281,  176 => 279,  173 => 278,  170 => 275,  167 => 274,  163 => 271,  160 => 270,  157 => 257,  154 => 256,  151 => 254,  148 => 253,  145 => 248,  142 => 247,  139 => 245,  136 => 244,  133 => 241,  130 => 240,  127 => 238,  124 => 237,  121 => 228,  118 => 227,  114 => 224,  111 => 126,  108 => 124,  105 => 123,  102 => 89,  100 => 88,  98 => 86,  93 => 83,  90 => 82,  87 => 76,  84 => 75,  81 => 73,  78 => 72,  75 => 69,  73 => 68,  70 => 67,  65 => 64,);
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
/*       {# Top Schedule #} */
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
/*         {# Header #}*/
/*         {% if page.header %}*/
/*           {% block header %}*/
/*             <!-- <div class="col-sm-12" role="heading">*/
/*               <div class="navigation">*/
/*                 <div class="container">*/
/*                   <div class="wrapp">*/
/*                     <div class="megamenu">-->*/
/*                   <div class="navigation">*/
/*                     <div class="container">*/
/*                       <div class="wrapp">*/
/*                           {{ page.header }}*/
/*                           <!-- </div> -->*/
/*                           <div id="search" class="search">*/
/*                             <div class="search__cnt">*/
/*                               <input id="search__input" class="search__input" type="text" name="search" value="" placeholder=""/>*/
/*                               <button id="search__btn" class="search__btn" type="button"><span>Search</span></button>*/
/*                             </div>*/
/*                             <i class="tog_btn"></i>*/
/*                           </div>*/
/*                       </div>*/
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
/*     <div id="page1">*/
/*       <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
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
/*       </div>*/
/*     </div>*/
/*         {# Sidebar Second #}*/
/*         {% if page.sidebar_second %}*/
/*           {% block sidebar_second %}*/
/*             <aside class="col-sm-3" role="complementary">*/
/*               {{ page.sidebar_second }}*/
/*             </aside>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/*   {% endblock %}*/
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
