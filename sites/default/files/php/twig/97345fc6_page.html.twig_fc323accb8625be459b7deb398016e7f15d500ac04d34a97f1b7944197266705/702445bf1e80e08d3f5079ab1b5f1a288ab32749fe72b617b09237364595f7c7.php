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
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'features' => array($this, 'block_features'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
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
        $tags = array("if" => 68, "block" => 69, "set" => 86, "include" => 245);
        $filters = array("clean_class" => 94, "t" => 107);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'block', 'set', 'include'),
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
        // line 216
        echo "
<div id=\"page\">

  ";
        // line 220
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features", array())) {
            // line 221
            echo "    ";
            $this->displayBlock('features', $context, $blocks);
            // line 230
            echo "  ";
        }
        // line 231
        echo " ";
        // line 232
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 233
            echo "    ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 250
            echo "  ";
        }
        // line 251
        echo "  ";
        // line 252
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 253
            echo "    ";
            $this->displayBlock('slideshow', $context, $blocks);
            // line 256
            echo "  ";
        }
        // line 257
        echo "
  ";
        // line 259
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature_top", array())) {
            // line 260
            echo "    ";
            $this->displayBlock('feature_top', $context, $blocks);
            // line 265
            echo "  ";
        }
        // line 266
        echo "
  ";
        // line 268
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "products", array())) {
            // line 269
            echo "    ";
            $this->displayBlock('products', $context, $blocks);
            // line 282
            echo "  ";
        }
        // line 283
        echo "
  <section class=\"bottom\"> 
    ";
        // line 286
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "partners", array())) {
            // line 287
            echo "      ";
            $this->displayBlock('partners', $context, $blocks);
            // line 290
            echo "    ";
        }
        // line 291
        echo "
    ";
        // line 293
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "general_info", array())) {
            // line 294
            echo "      ";
            $this->displayBlock('general_info', $context, $blocks);
            // line 305
            echo "    ";
        }
        // line 306
        echo "  </section> 

  <footer>
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 312
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_right", array())) {
            // line 313
            echo "          ";
            $this->displayBlock('footer_link_right', $context, $blocks);
            // line 320
            echo "        ";
        }
        // line 321
        echo "
        ";
        // line 323
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_left", array())) {
            // line 324
            echo "          ";
            $this->displayBlock('footer_link_left', $context, $blocks);
            // line 331
            echo "        ";
        }
        // line 332
        echo "
        ";
        // line 334
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_address", array())) {
            // line 335
            echo "          ";
            $this->displayBlock('footer_address', $context, $blocks);
            // line 346
            echo "        ";
        }
        // line 347
        echo "
        ";
        // line 349
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_social", array())) {
            // line 350
            echo "          ";
            $this->displayBlock('footer_social', $context, $blocks);
            // line 356
            echo "        ";
        }
        // line 357
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
            // line 157
            echo "        ";
        }
        // line 158
        echo " 
        ";
        // line 160
        echo "        ";
        // line 161
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 162
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 163
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 164
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 165
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("row") : ("")));
        // line 168
        echo "        <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

          ";
        // line 171
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 172
            echo "            ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 175
            echo "          ";
        }
        // line 176
        echo "
          ";
        // line 178
        echo "          ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 179
            echo "            ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 182
            echo "          ";
        }
        // line 183
        echo "
          ";
        // line 185
        echo "          ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 186
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 189
            echo "          ";
        }
        // line 190
        echo "
          ";
        // line 192
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 193
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 196
            echo "          ";
        }
        // line 197
        echo "
          ";
        // line 199
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 203
        echo "
        </section>

        ";
        // line 207
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 208
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 213
            echo "        ";
        }
        // line 214
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
                  <div class=\"navigation\">
                    <div class=\"container\">
                      <div class=\"wrapp\">
                          ";
        // line 140
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

    // line 172
    public function block_highlighted($context, array $blocks = array())
    {
        // line 173
        echo "              <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
            ";
    }

    // line 179
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 180
        echo "              ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
            ";
    }

    // line 186
    public function block_action_links($context, array $blocks = array())
    {
        // line 187
        echo "              <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
            ";
    }

    // line 193
    public function block_help($context, array $blocks = array())
    {
        // line 194
        echo "              ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
    }

    // line 199
    public function block_content($context, array $blocks = array())
    {
        // line 200
        echo "            <a id=\"main-content\"></a>
              ";
        // line 201
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          ";
    }

    // line 208
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 209
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 210
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 221
    public function block_features($context, array $blocks = array())
    {
        // line 222
        echo "      <div class=\"container\">
        <div class=\"row\"> 
          <div id=\"content\" class=\"col-sm-12\">     
           ";
        // line 225
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features", array()), "html", null, true));
        echo "
         </div>
       </div>
     </div>
    ";
    }

    // line 233
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 234
        echo "    <div class=\"simple_blog-category layout\">
        <div class=\"container\">
          <ul class=\"breadcrumb\">
            <li><a href=\"/front\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#\">Account</a></li>
            <li><a href=\"#\">Login</a></li>
          </ul>
            <div class=\"row\">
              <aside class=\"col-sm-3\" id=\"colum-left\">
                ";
        // line 243
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
              </aside>
              ";
        // line 245
        $this->loadTemplate("affiliate_account.html.twig", "themes/custom/vickie_dean_themes/templates/system/page.html.twig", 245)->display($context);
        // line 246
        echo "            </div>
        </div>
    </div>
    ";
    }

    // line 253
    public function block_slideshow($context, array $blocks = array())
    {
        echo "     
           ";
        // line 254
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
        echo "
    ";
    }

    // line 260
    public function block_feature_top($context, array $blocks = array())
    {
        // line 261
        echo "      <div id=\"banner0\" class=\"banners row\">
        ";
        // line 262
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature_top", array()), "html", null, true));
        echo "
      </div>
    ";
    }

    // line 269
    public function block_products($context, array $blocks = array())
    {
        // line 270
        echo "      <section id=\"container\">
        <div class=\"container\">
          <div class=\"row\"> 
            <div id=\"content\" class=\"col-sm-12\">
              <div role=\"tabpanel\" class=\"module_tab module_tab__0\">
                ";
        // line 275
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "products", array()), "html", null, true));
        echo "
              </div>
            </div>
          </div>
        </div>
      </section>
    ";
    }

    // line 287
    public function block_partners($context, array $blocks = array())
    {
        echo "     
          ";
        // line 288
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "partners", array()), "html", null, true));
        echo "
      ";
    }

    // line 294
    public function block_general_info($context, array $blocks = array())
    {
        // line 295
        echo "        <div class=\"box_html \">
          <div class=\"content-block\">
            <div class=\"container\">
              <div class=\"row\">     
                ";
        // line 299
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "general_info", array()), "html", null, true));
        echo "
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 313
    public function block_footer_link_right($context, array $blocks = array())
    {
        // line 314
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-3\">
              <div class=\"footer_box\">
                  ";
        // line 316
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_right", array()), "html", null, true));
        echo "
              </div>
            </div>
          ";
    }

    // line 324
    public function block_footer_link_left($context, array $blocks = array())
    {
        // line 325
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-3\">
              <div class=\"footer_box\">
                  ";
        // line 327
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_left", array()), "html", null, true));
        echo "
              </div>
            </div>
          ";
    }

    // line 335
    public function block_footer_address($context, array $blocks = array())
    {
        // line 336
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-4\">
              <div class=\"footer_box\">
                <address>
                  <ul>
                    ";
        // line 340
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_address", array()), "html", null, true));
        echo "
                  </ul>
                </address>
             </div>
           </div>
          ";
    }

    // line 350
    public function block_footer_social($context, array $blocks = array())
    {
        // line 351
        echo "                <p class=\"newsletter-description\">Social Media Links</p>
                ";
        // line 352
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
        return array (  725 => 352,  722 => 351,  719 => 350,  709 => 340,  703 => 336,  700 => 335,  692 => 327,  688 => 325,  685 => 324,  677 => 316,  673 => 314,  670 => 313,  660 => 299,  654 => 295,  651 => 294,  645 => 288,  640 => 287,  629 => 275,  622 => 270,  619 => 269,  612 => 262,  609 => 261,  606 => 260,  600 => 254,  595 => 253,  588 => 246,  586 => 245,  581 => 243,  570 => 234,  567 => 233,  558 => 225,  553 => 222,  550 => 221,  543 => 210,  540 => 209,  537 => 208,  531 => 201,  528 => 200,  525 => 199,  518 => 194,  515 => 193,  508 => 187,  505 => 186,  498 => 180,  495 => 179,  488 => 173,  485 => 172,  464 => 140,  454 => 132,  451 => 131,  446 => 214,  443 => 213,  440 => 208,  437 => 207,  432 => 203,  429 => 199,  426 => 197,  423 => 196,  420 => 193,  417 => 192,  414 => 190,  411 => 189,  408 => 186,  405 => 185,  402 => 183,  399 => 182,  396 => 179,  393 => 178,  390 => 176,  387 => 175,  384 => 172,  381 => 171,  375 => 168,  373 => 165,  372 => 164,  371 => 163,  370 => 162,  369 => 161,  367 => 160,  364 => 158,  361 => 157,  358 => 131,  355 => 130,  349 => 127,  346 => 126,  339 => 119,  333 => 117,  331 => 116,  328 => 115,  324 => 113,  315 => 107,  311 => 105,  308 => 104,  304 => 102,  297 => 97,  295 => 94,  294 => 93,  293 => 91,  291 => 90,  288 => 89,  281 => 79,  274 => 76,  268 => 70,  263 => 69,  251 => 357,  248 => 356,  245 => 350,  242 => 349,  239 => 347,  236 => 346,  233 => 335,  230 => 334,  227 => 332,  224 => 331,  221 => 324,  218 => 323,  215 => 321,  212 => 320,  209 => 313,  206 => 312,  199 => 306,  196 => 305,  193 => 294,  190 => 293,  187 => 291,  184 => 290,  181 => 287,  178 => 286,  174 => 283,  171 => 282,  168 => 269,  165 => 268,  162 => 266,  159 => 265,  156 => 260,  153 => 259,  150 => 257,  147 => 256,  144 => 253,  141 => 252,  139 => 251,  136 => 250,  133 => 233,  130 => 232,  128 => 231,  125 => 230,  122 => 221,  119 => 220,  114 => 216,  111 => 126,  108 => 124,  105 => 123,  102 => 89,  100 => 88,  98 => 86,  93 => 83,  90 => 82,  87 => 76,  84 => 75,  81 => 73,  78 => 72,  75 => 69,  73 => 68,  70 => 67,  65 => 64,);
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
/*  */
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
/*  */
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
/*  {# Sidebar First #}*/
/*   {% if page.sidebar_first %}*/
/*     {% block sidebar_first %}*/
/*     <div class="simple_blog-category layout">*/
/*         <div class="container">*/
/*           <ul class="breadcrumb">*/
/*             <li><a href="/front"><i class="fa fa-home"></i></a></li>*/
/*             <li><a href="#">Account</a></li>*/
/*             <li><a href="#">Login</a></li>*/
/*           </ul>*/
/*             <div class="row">*/
/*               <aside class="col-sm-3" id="colum-left">*/
/*                 {{ page.sidebar_first }}*/
/*               </aside>*/
/*               {% include 'affiliate_account.html.twig' %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/*   {% endif %}*/
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
