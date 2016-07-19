<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--newsletter--block_1.html.twig */
class __TwigTemplate_5b813bcfc3fe18db21e570a518754b13fce109b2f0ef37c239830d87de32a3d2 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"newsletter-popup\" style=\"background-image: url(/sites/default/files/2016-06/slide1.jpg)\">
\t<div class=\"box-content\">\t 
\t\t<h2>";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_heading", array()), "content", array()), "html", null, true));
        echo "</h2>
\t\t<p>";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_description", array()), "content", array()), "html", null, true));
        echo "</p>
\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"tm-newsletter-popup-form\">
\t\t\t<div class=\"tm-login-form\">
\t\t\t\t<input type=\"text\" name=\"tm_newsletter_popup_email\" value=\"\" placeholder=\"Enter your e-mail\" id=\"input-tm-newsletter-popup-email\" class=\"form-control\"/>
\t\t\t\t<button type=\"submit\" id=\"tm-newsletter-popup-button\" class=\"newsletter-popup-btn\">
\t\t\t\t\t";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_button", array()), "content", array()), "html", null, true));
        echo "
\t\t\t\t</button>
\t\t\t\t<label class=\"control-label\" for=\"input-tm-newsletter-popup-email\"></label>
\t\t\t\t<span id=\"tm-newsletter-popup_error\" class=\"newsletter-error\"></span>
\t\t\t\t<span id=\"tm-newsletter-popup_success\" class=\"newsletter-success\"></span>
\t\t\t</div>
\t\t</form>
\t</div>
\t<a href=\"#\" id=\"newsletter-popup-close-btn\" class=\"newsletter-popup-close-btn material-design-close47\"></a>
\t<a href='#' id=\"newsletter-popup-dont-show\" class=\"newsletter-popup-dont-show\">
\tDon't show this message again </a>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--newsletter--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  51 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div class="newsletter-popup" style="background-image: url(/sites/default/files/2016-06/slide1.jpg)">*/
/* 	<div class="box-content">	 */
/* 		<h2>{{fields.field_heading.content}}</h2>*/
/* 		<p>{{fields.field_description.content}}</p>*/
/* 		<form method="post" enctype="multipart/form-data" id="tm-newsletter-popup-form">*/
/* 			<div class="tm-login-form">*/
/* 				<input type="text" name="tm_newsletter_popup_email" value="" placeholder="Enter your e-mail" id="input-tm-newsletter-popup-email" class="form-control"/>*/
/* 				<button type="submit" id="tm-newsletter-popup-button" class="newsletter-popup-btn">*/
/* 					{{fields.field_button.content}}*/
/* 				</button>*/
/* 				<label class="control-label" for="input-tm-newsletter-popup-email"></label>*/
/* 				<span id="tm-newsletter-popup_error" class="newsletter-error"></span>*/
/* 				<span id="tm-newsletter-popup_success" class="newsletter-success"></span>*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* 	<a href="#" id="newsletter-popup-close-btn" class="newsletter-popup-close-btn material-design-close47"></a>*/
/* 	<a href='#' id="newsletter-popup-dont-show" class="newsletter-popup-dont-show">*/
/* 	Don't show this message again </a>*/
/* </div>*/
