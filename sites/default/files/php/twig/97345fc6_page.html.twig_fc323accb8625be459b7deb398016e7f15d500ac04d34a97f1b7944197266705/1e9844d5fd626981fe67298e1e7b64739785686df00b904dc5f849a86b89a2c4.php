<?php

/* themes/custom/vickie_dean_themes/templates/system/page.html.twig */
class __TwigTemplate_00057bac7a1e22d85a43a890059285c8372f92890d19bd5c93f68a17e67ea165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        $tags = array("if" => 66, "block" => 67, "set" => 76);
        $filters = array("clean_class" => 84, "t" => 97);
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
";
        // line 66
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_navigation", array())) {
            // line 67
            echo "    ";
            $this->displayBlock('top_navigation', $context, $blocks);
            // line 74
            echo "  ";
        }
        // line 75
        echo "
";
        // line 76
        $context["container"] = "container";
        // line 78
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 79
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 115
            echo "  ";
        }
        // line 116
        echo "</header>
  ";
        // line 118
        echo "  ";
        $this->displayBlock('main', $context, $blocks);
        // line 211
        echo "
<div id=\"page\">

  ";
        // line 215
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 216
            echo "    ";
            $this->displayBlock('slideshow', $context, $blocks);
            // line 219
            echo "  ";
        }
        // line 220
        echo "
  ";
        // line 222
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature_top", array())) {
            // line 223
            echo "    ";
            $this->displayBlock('feature_top', $context, $blocks);
            // line 228
            echo "  ";
        }
        // line 229
        echo "
  ";
        // line 231
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "products", array())) {
            // line 232
            echo "    ";
            $this->displayBlock('products', $context, $blocks);
            // line 235
            echo "  ";
        }
        // line 236
        echo "
  <section class=\"bottom\"> 
    ";
        // line 239
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "partners", array())) {
            // line 240
            echo "      ";
            $this->displayBlock('partners', $context, $blocks);
            // line 243
            echo "    ";
        }
        // line 244
        echo "
    ";
        // line 246
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "general_info", array())) {
            // line 247
            echo "      ";
            $this->displayBlock('general_info', $context, $blocks);
            // line 258
            echo "    ";
        }
        // line 259
        echo "  </section> 

  <footer>
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 265
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_right", array())) {
            // line 266
            echo "          ";
            $this->displayBlock('footer_link_right', $context, $blocks);
            // line 273
            echo "        ";
        }
        // line 274
        echo "
        ";
        // line 276
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_left", array())) {
            // line 277
            echo "          ";
            $this->displayBlock('footer_link_left', $context, $blocks);
            // line 284
            echo "        ";
        }
        // line 285
        echo "
        ";
        // line 287
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_address", array())) {
            // line 288
            echo "          ";
            $this->displayBlock('footer_address', $context, $blocks);
            // line 299
            echo "        ";
        }
        // line 300
        echo "
        ";
        // line 302
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_social", array())) {
            // line 303
            echo "          ";
            $this->displayBlock('footer_social', $context, $blocks);
            // line 309
            echo "        ";
        }
        // line 310
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

    // line 67
    public function block_top_navigation($context, array $blocks = array())
    {
        echo "  
    <div class=\"top-line\">
      <div class=\"container\"> 
        ";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_navigation", array()), "html", null, true));
        echo "
      </div>
    </div>
    ";
    }

    // line 79
    public function block_navbar($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        // line 81
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 83
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-inverse")), 2 => (($this->getAttribute($this->getAttribute(        // line 84
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 87
        echo "                <div class=\"mid-line\">
                  <div id=\"stuck\" class=\"stuck-menu\">
                    <div class=\"container\">
                      <div class=\"row\">
                                
                        ";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
                        ";
        // line 94
        echo "                        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 95
            echo "                          <button type=\"button\" class=\"navbar-toggle navbar-collapse\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"
                            aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
                            <span class=\"icon-bar top-bar\"></span>
                            <span class=\"icon-bar middle-bar\"></span>
                            <span class=\"icon-bar bottom-bar\"></span>
                          </button>
                        ";
        }
        // line 103
        echo "                      </div>

                        ";
        // line 105
        echo " 
                        ";
        // line 106
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 107
            echo "                          <div class=\"navbar-collapse collapse\">
                                ";
            // line 108
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
                          </div>
                        ";
        }
        // line 111
        echo "                    </div>
                  </div>
                </div>
    ";
    }

    // line 118
    public function block_main($context, array $blocks = array())
    {
        // line 119
        echo "    <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">

        ";
        // line 122
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 123
            echo "          ";
            $this->displayBlock('header', $context, $blocks);
            // line 143
            echo "        ";
        }
        // line 144
        echo "
        ";
        // line 146
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 147
            echo "          ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 152
            echo "        ";
        }
        // line 153
        echo "
        ";
        // line 155
        echo "        ";
        // line 156
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 157
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 158
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 159
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 160
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("row") : ("")));
        // line 163
        echo "        <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

          ";
        // line 166
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 167
            echo "            ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 170
            echo "          ";
        }
        // line 171
        echo "
          ";
        // line 173
        echo "          ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 174
            echo "            ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 177
            echo "          ";
        }
        // line 178
        echo "
          ";
        // line 180
        echo "          ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 181
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 184
            echo "          ";
        }
        // line 185
        echo "
          ";
        // line 187
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 188
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 191
            echo "          ";
        }
        // line 192
        echo "
          ";
        // line 194
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 198
        echo "
        </section>

        ";
        // line 202
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 203
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 208
            echo "        ";
        }
        // line 209
        echo "    </div>
  ";
    }

    // line 123
    public function block_header($context, array $blocks = array())
    {
        // line 124
        echo "            <!-- <div class=\"col-sm-12\" role=\"heading\">
              <div class=\"navigation\">
                <div class=\"container\">
                  <div class=\"wrapp\">
                    <div class=\"megamenu\">-->
                      ";
        // line 129
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
                  <!-- </div>
                </div>
              </div>
            </div> -->
          ";
    }

    // line 147
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 148
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 149
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 167
    public function block_highlighted($context, array $blocks = array())
    {
        // line 168
        echo "              <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
            ";
    }

    // line 174
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 175
        echo "              ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
            ";
    }

    // line 181
    public function block_action_links($context, array $blocks = array())
    {
        // line 182
        echo "              <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
            ";
    }

    // line 188
    public function block_help($context, array $blocks = array())
    {
        // line 189
        echo "              ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
    }

    // line 194
    public function block_content($context, array $blocks = array())
    {
        // line 195
        echo "            <a id=\"main-content\"></a>
            ";
        // line 196
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          ";
    }

    // line 203
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 204
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 205
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 216
    public function block_slideshow($context, array $blocks = array())
    {
        echo "     
           ";
        // line 217
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
        echo "
    ";
    }

    // line 223
    public function block_feature_top($context, array $blocks = array())
    {
        // line 224
        echo "      <div id=\"banner0\" class=\"banners row\">
        ";
        // line 225
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature_top", array()), "html", null, true));
        echo "
      </div>
    ";
    }

    // line 232
    public function block_products($context, array $blocks = array())
    {
        // line 233
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "products", array()), "html", null, true));
        echo "
    ";
    }

    // line 240
    public function block_partners($context, array $blocks = array())
    {
        echo "     
          ";
        // line 241
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "partners", array()), "html", null, true));
        echo "
      ";
    }

    // line 247
    public function block_general_info($context, array $blocks = array())
    {
        // line 248
        echo "        <div class=\"box_html \">
          <div class=\"content-block\">
            <div class=\"container\">
              <div class=\"row\">     
                ";
        // line 252
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "general_info", array()), "html", null, true));
        echo "
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 266
    public function block_footer_link_right($context, array $blocks = array())
    {
        // line 267
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-3\">
              <div class=\"footer_box\">
                  ";
        // line 269
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_right", array()), "html", null, true));
        echo "
              </div>
            </div>
          ";
    }

    // line 277
    public function block_footer_link_left($context, array $blocks = array())
    {
        // line 278
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-3\">
              <div class=\"footer_box\">
                  ";
        // line 280
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_link_left", array()), "html", null, true));
        echo "
              </div>
            </div>
          ";
    }

    // line 288
    public function block_footer_address($context, array $blocks = array())
    {
        // line 289
        echo "            <div class=\"col-xs-6 col-sm-6 col-md-4\">
              <div class=\"footer_box\">
                <address>
                  <ul>
                    ";
        // line 293
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_address", array()), "html", null, true));
        echo "
                  </ul>
                </address>
             </div>
           </div>
          ";
    }

    // line 303
    public function block_footer_social($context, array $blocks = array())
    {
        // line 304
        echo "                <p class=\"newsletter-description\">Social Media Links</p>
                ";
        // line 305
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
        return array (  639 => 305,  636 => 304,  633 => 303,  623 => 293,  617 => 289,  614 => 288,  606 => 280,  602 => 278,  599 => 277,  591 => 269,  587 => 267,  584 => 266,  574 => 252,  568 => 248,  565 => 247,  559 => 241,  554 => 240,  547 => 233,  544 => 232,  537 => 225,  534 => 224,  531 => 223,  525 => 217,  520 => 216,  513 => 205,  510 => 204,  507 => 203,  501 => 196,  498 => 195,  495 => 194,  488 => 189,  485 => 188,  478 => 182,  475 => 181,  468 => 175,  465 => 174,  458 => 168,  455 => 167,  448 => 149,  445 => 148,  442 => 147,  424 => 129,  417 => 124,  414 => 123,  409 => 209,  406 => 208,  403 => 203,  400 => 202,  395 => 198,  392 => 194,  389 => 192,  386 => 191,  383 => 188,  380 => 187,  377 => 185,  374 => 184,  371 => 181,  368 => 180,  365 => 178,  362 => 177,  359 => 174,  356 => 173,  353 => 171,  350 => 170,  347 => 167,  344 => 166,  338 => 163,  336 => 160,  335 => 159,  334 => 158,  333 => 157,  332 => 156,  330 => 155,  327 => 153,  324 => 152,  321 => 147,  318 => 146,  315 => 144,  312 => 143,  309 => 123,  306 => 122,  300 => 119,  297 => 118,  290 => 111,  284 => 108,  281 => 107,  279 => 106,  276 => 105,  272 => 103,  263 => 97,  259 => 95,  256 => 94,  252 => 92,  245 => 87,  243 => 84,  242 => 83,  241 => 81,  239 => 80,  236 => 79,  228 => 70,  221 => 67,  209 => 310,  206 => 309,  203 => 303,  200 => 302,  197 => 300,  194 => 299,  191 => 288,  188 => 287,  185 => 285,  182 => 284,  179 => 277,  176 => 276,  173 => 274,  170 => 273,  167 => 266,  164 => 265,  157 => 259,  154 => 258,  151 => 247,  148 => 246,  145 => 244,  142 => 243,  139 => 240,  136 => 239,  132 => 236,  129 => 235,  126 => 232,  123 => 231,  120 => 229,  117 => 228,  114 => 223,  111 => 222,  108 => 220,  105 => 219,  102 => 216,  99 => 215,  94 => 211,  91 => 118,  88 => 116,  85 => 115,  82 => 79,  80 => 78,  78 => 76,  75 => 75,  72 => 74,  69 => 67,  66 => 66,  63 => 64,);
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
/* {# Top Navigation #}*/
/*   {% if page.top_navigation %}*/
/*     {% block top_navigation %}  */
/*     <div class="top-line">*/
/*       <div class="container"> */
/*         {{ page.top_navigation }}*/
/*       </div>*/
/*     </div>*/
/*     {% endblock %}*/
/*   {% endif %}*/
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
/*                           <div class="navbar-collapse collapse">*/
/*                                 {{ page.navigation_collapsible }}*/
/*                           </div>*/
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
/*                       {{ page.header }}*/
/*                     <!-- </div> -->*/
/*                     <div id="search" class="search">*/
/*                       <div class="search__cnt">*/
/*                         <input id="search__input" class="search__input" type="text" name="search" value="" placeholder=""/>*/
/*                         <button id="search__btn" class="search__btn" type="button"><span>Search</span></button>*/
/*                       </div>*/
/*                       <i class="tog_btn"></i>*/
/*                     </div>*/
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
/*             {{ page.content }}*/
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
/*         {{ page.products }}*/
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
