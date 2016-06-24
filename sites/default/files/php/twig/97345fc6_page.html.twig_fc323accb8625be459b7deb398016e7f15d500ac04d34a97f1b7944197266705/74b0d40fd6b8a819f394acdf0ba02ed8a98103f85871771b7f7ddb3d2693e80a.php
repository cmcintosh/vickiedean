<?php

/* themes/custom/vickie_dean_themes/templates/system/page.html.twig */
class __TwigTemplate_00057bac7a1e22d85a43a890059285c8372f92890d19bd5c93f68a17e67ea165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        $tags = array("set" => 64, "if" => 66, "block" => 67);
        $filters = array("clean_class" => 72, "t" => 93);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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
        $context["container"] = "container";
        // line 66
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 67
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 115
            echo "  ";
        }
        // line 116
        echo "
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
    public function block_navbar($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        // line 69
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 71
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-inverse")), 2 => (($this->getAttribute($this->getAttribute(        // line 72
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 75
        echo "        <header>
          <div class=\"top-line\">
            <div class=\"container\">
              <div ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " role=\"navigation\">
                <div class=\"mid-line\">
                  <div id=\"stuck\" class=\"stuck-menu\">
                    <div class=\"container\">
                      <div class=\"row\">
                        <div class=\"col-xs-5\">
                          <div id=\"logo\" class=\"logo\">
                            <img src=\"/themes/custom/vickie_dean_themes/image/catalog/logo.png\" title=\"Contact Lens Store\" alt=\"Contact Lens Store\" class=\"img-responsive\"/>
                          </div>
                        </div>                  
                        ";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
                        ";
        // line 90
        echo "                        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 91
            echo "                          <button type=\"button\" class=\"navbar-toggle navbar-collapse\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"
                            aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">";
            // line 93
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
                            <span class=\"icon-bar top-bar\"></span>
                            <span class=\"icon-bar middle-bar\"></span>
                            <span class=\"icon-bar bottom-bar\"></span>
                          </button>
                        ";
        }
        // line 99
        echo "                      </div>

                        ";
        // line 101
        echo " 
                        ";
        // line 102
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 103
            echo "                          <div class=\"navbar-collapse collapse\">
                                ";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
                          </div>
                        ";
        }
        // line 107
        echo "                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
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
        echo "            <div class=\"col-sm-12\" role=\"heading\">
              <div class=\"navigation\">
                <div class=\"container\">
                  <div class=\"wrapp\">
                    <div class=\"megamenu\">
                      ";
        // line 129
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
                    </div>
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
            </div>
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
        return array (  623 => 305,  620 => 304,  617 => 303,  607 => 293,  601 => 289,  598 => 288,  590 => 280,  586 => 278,  583 => 277,  575 => 269,  571 => 267,  568 => 266,  558 => 252,  552 => 248,  549 => 247,  543 => 241,  538 => 240,  531 => 233,  528 => 232,  521 => 225,  518 => 224,  515 => 223,  509 => 217,  504 => 216,  497 => 205,  494 => 204,  491 => 203,  485 => 196,  482 => 195,  479 => 194,  472 => 189,  469 => 188,  462 => 182,  459 => 181,  452 => 175,  449 => 174,  442 => 168,  439 => 167,  432 => 149,  429 => 148,  426 => 147,  408 => 129,  401 => 124,  398 => 123,  393 => 209,  390 => 208,  387 => 203,  384 => 202,  379 => 198,  376 => 194,  373 => 192,  370 => 191,  367 => 188,  364 => 187,  361 => 185,  358 => 184,  355 => 181,  352 => 180,  349 => 178,  346 => 177,  343 => 174,  340 => 173,  337 => 171,  334 => 170,  331 => 167,  328 => 166,  322 => 163,  320 => 160,  319 => 159,  318 => 158,  317 => 157,  316 => 156,  314 => 155,  311 => 153,  308 => 152,  305 => 147,  302 => 146,  299 => 144,  296 => 143,  293 => 123,  290 => 122,  284 => 119,  281 => 118,  270 => 107,  264 => 104,  261 => 103,  259 => 102,  256 => 101,  252 => 99,  243 => 93,  239 => 91,  236 => 90,  232 => 88,  219 => 78,  214 => 75,  212 => 72,  211 => 71,  210 => 69,  208 => 68,  205 => 67,  193 => 310,  190 => 309,  187 => 303,  184 => 302,  181 => 300,  178 => 299,  175 => 288,  172 => 287,  169 => 285,  166 => 284,  163 => 277,  160 => 276,  157 => 274,  154 => 273,  151 => 266,  148 => 265,  141 => 259,  138 => 258,  135 => 247,  132 => 246,  129 => 244,  126 => 243,  123 => 240,  120 => 239,  116 => 236,  113 => 235,  110 => 232,  107 => 231,  104 => 229,  101 => 228,  98 => 223,  95 => 222,  92 => 220,  89 => 219,  86 => 216,  83 => 215,  78 => 211,  75 => 118,  72 => 116,  69 => 115,  66 => 67,  64 => 66,  62 => 64,);
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
/*  * Site identity:*/
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
/*         <header>*/
/*           <div class="top-line">*/
/*             <div class="container">*/
/*               <div {{ navbar_attributes.addClass(navbar_classes) }} role="navigation">*/
/*                 <div class="mid-line">*/
/*                   <div id="stuck" class="stuck-menu">*/
/*                     <div class="container">*/
/*                       <div class="row">*/
/*                         <div class="col-xs-5">*/
/*                           <div id="logo" class="logo">*/
/*                             <img src="/themes/custom/vickie_dean_themes/image/catalog/logo.png" title="Contact Lens Store" alt="Contact Lens Store" class="img-responsive"/>*/
/*                           </div>*/
/*                         </div>                  */
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
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </header>*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* */
/*   {# Main #}*/
/*   {% block main %}*/
/*     <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/* */
/*         {# Header #}*/
/*         {% if page.header %}*/
/*           {% block header %}*/
/*             <div class="col-sm-12" role="heading">*/
/*               <div class="navigation">*/
/*                 <div class="container">*/
/*                   <div class="wrapp">*/
/*                     <div class="megamenu">*/
/*                       {{ page.header }}*/
/*                     </div>*/
/*                     <div id="search" class="search">*/
/*                       <div class="search__cnt">*/
/*                         <input id="search__input" class="search__input" type="text" name="search" value="" placeholder=""/>*/
/*                         <button id="search__btn" class="search__btn" type="button"><span>Search</span></button>*/
/*                       </div>*/
/*                       <i class="tog_btn"></i>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
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
