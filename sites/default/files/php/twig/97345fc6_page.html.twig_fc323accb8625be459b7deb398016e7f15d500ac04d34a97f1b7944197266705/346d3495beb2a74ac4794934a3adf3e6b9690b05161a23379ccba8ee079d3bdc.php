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
            'footer' => array($this, 'block_footer'),
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
        }
        // line 116
        echo "
";
        // line 118
        $this->displayBlock('main', $context, $blocks);
        // line 196
        echo "
";
        // line 198
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 199
            echo "  ";
            $this->displayBlock('slideshow', $context, $blocks);
        }
        // line 208
        echo "
";
        // line 210
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 211
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
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
        echo "      <header>
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
        echo "                      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 91
            echo "                        <button type=\"button\" class=\"navbar-toggle navbar-collapse\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"
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
        echo "                    </div>

                      ";
        // line 101
        echo " 
                      ";
        // line 102
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 103
            echo "                        <div class=\"navbar-collapse collapse\">
                              ";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
                        </div>
                      ";
        }
        // line 107
        echo "                  </div>
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
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">

      ";
        // line 122
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 123
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 128
            echo "      ";
        }
        // line 129
        echo "
      ";
        // line 131
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 132
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 137
            echo "      ";
        }
        // line 138
        echo "
      ";
        // line 140
        echo "      ";
        // line 141
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 142
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 143
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 144
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 145
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("row") : ("")));
        // line 148
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 151
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 152
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 158
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 159
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 162
            echo "        ";
        }
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 166
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 169
            echo "        ";
        }
        // line 170
        echo "
        ";
        // line 172
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 173
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 176
            echo "        ";
        }
        // line 177
        echo "
        ";
        // line 179
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 183
        echo "
      </section>

      ";
        // line 187
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 188
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 193
            echo "      ";
        }
        // line 194
        echo "  </div>
";
    }

    // line 123
    public function block_header($context, array $blocks = array())
    {
        // line 124
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 125
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 132
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 133
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 134
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 152
    public function block_highlighted($context, array $blocks = array())
    {
        // line 153
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 159
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 160
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 166
    public function block_action_links($context, array $blocks = array())
    {
        // line 167
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 173
    public function block_help($context, array $blocks = array())
    {
        // line 174
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 179
    public function block_content($context, array $blocks = array())
    {
        // line 180
        echo "          <a id=\"main-content\"></a>
          ";
        // line 181
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 188
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 189
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 190
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 199
    public function block_slideshow($context, array $blocks = array())
    {
        // line 200
        echo "    <div class=\"fluid_container\">
      <div class=\"camera_container\">        
          ";
        // line 202
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
        echo "
      </div>
      <div class=\"clear\"></div>
    </div>
  ";
    }

    // line 211
    public function block_footer($context, array $blocks = array())
    {
        // line 212
        echo "    <!--/ FOOTER SECTION-->  
    <div class=\"footer grey-bg\">
          ©2014 Stamp LLC. All Rights Reserved
          ";
        // line 215
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </div><!--/ Footer  End --> 
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
        return array (  396 => 215,  391 => 212,  388 => 211,  379 => 202,  375 => 200,  372 => 199,  365 => 190,  362 => 189,  359 => 188,  353 => 181,  350 => 180,  347 => 179,  340 => 174,  337 => 173,  330 => 167,  327 => 166,  320 => 160,  317 => 159,  310 => 153,  307 => 152,  300 => 134,  297 => 133,  294 => 132,  287 => 125,  284 => 124,  281 => 123,  276 => 194,  273 => 193,  270 => 188,  267 => 187,  262 => 183,  259 => 179,  256 => 177,  253 => 176,  250 => 173,  247 => 172,  244 => 170,  241 => 169,  238 => 166,  235 => 165,  232 => 163,  229 => 162,  226 => 159,  223 => 158,  220 => 156,  217 => 155,  214 => 152,  211 => 151,  205 => 148,  203 => 145,  202 => 144,  201 => 143,  200 => 142,  199 => 141,  197 => 140,  194 => 138,  191 => 137,  188 => 132,  185 => 131,  182 => 129,  179 => 128,  176 => 123,  173 => 122,  167 => 119,  164 => 118,  153 => 107,  147 => 104,  144 => 103,  142 => 102,  139 => 101,  135 => 99,  126 => 93,  122 => 91,  119 => 90,  115 => 88,  102 => 78,  97 => 75,  95 => 72,  94 => 71,  93 => 69,  91 => 68,  88 => 67,  82 => 211,  80 => 210,  77 => 208,  73 => 199,  71 => 198,  68 => 196,  66 => 118,  63 => 116,  59 => 67,  57 => 66,  55 => 64,);
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
/*       <header>*/
/*         <div class="top-line">*/
/*           <div class="container">*/
/*             <div {{ navbar_attributes.addClass(navbar_classes) }} role="navigation">*/
/*               <div class="mid-line">*/
/*                 <div id="stuck" class="stuck-menu">*/
/*                   <div class="container">*/
/*                     <div class="row">*/
/*                       <div class="col-xs-5">*/
/*                         <div id="logo" class="logo">*/
/*                           <img src="/themes/custom/vickie_dean_themes/image/catalog/logo.png" title="Contact Lens Store" alt="Contact Lens Store" class="img-responsive"/>*/
/*                         </div>*/
/*                       </div>                  */
/*                       {{ page.navigation }}*/
/*                       {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*                       {% if page.navigation_collapsible %}*/
/*                         <button type="button" class="navbar-toggle navbar-collapse" data-toggle="collapse" data-target=".navbar-collapse"*/
/*                           aria-expanded="false" aria-controls="navbar">*/
/*                           <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*                           <span class="icon-bar top-bar"></span>*/
/*                           <span class="icon-bar middle-bar"></span>*/
/*                           <span class="icon-bar bottom-bar"></span>*/
/*                         </button>*/
/*                       {% endif %}*/
/*                     </div>*/
/* */
/*                       {# Navigation (collapsible) #} */
/*                       {% if page.navigation_collapsible %}*/
/*                         <div class="navbar-collapse collapse">*/
/*                               {{ page.navigation_collapsible }}*/
/*                         </div>*/
/*                       {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'row'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/* */
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {# Slideshow #}*/
/* {% if page.slideshow %}*/
/*   {% block slideshow %}*/
/*     <div class="fluid_container">*/
/*       <div class="camera_container">        */
/*           {{ page.slideshow }}*/
/*       </div>*/
/*       <div class="clear"></div>*/
/*     </div>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Footer #}*/
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <!--/ FOOTER SECTION-->  */
/*     <div class="footer grey-bg">*/
/*           ©2014 Stamp LLC. All Rights Reserved*/
/*           {{ page.footer }}*/
/*     </div><!--/ Footer  End --> */
/*   {% endblock %}*/
/* {% endif %}*/
