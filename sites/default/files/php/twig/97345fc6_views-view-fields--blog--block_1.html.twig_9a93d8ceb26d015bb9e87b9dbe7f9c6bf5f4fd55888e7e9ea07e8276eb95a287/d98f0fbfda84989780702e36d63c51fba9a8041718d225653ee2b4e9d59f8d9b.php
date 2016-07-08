<?php

/* themes/custom/vickie_dean_themes/templates/views/views-view-fields--blog--block_1.html.twig */
class __TwigTemplate_bbacbbeced542ee1c7a303962ff5cad84628ee3037b1d625c139691245db4533 extends Twig_Template
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
        echo "<article class=\"blog_article\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t<figure class=\"article-image\">
\t\t\t";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()), "html", null, true));
        echo "
\t\t\t</figure>
\t\t</div>
\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t<h2 class=\"article-title\">
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "
\t\t\t</h2>
\t\t\t<div class=\"article-sub-title\">
\t\t\t\t<span class=\"article-date material-design-clock100\">";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_date", array()), "content", array()), "html", null, true));
        echo "</span>
\t\t\t\t<span class=\"article-comments material-design-add183\"><a href=\"#\">3 Comments</a></span>
\t\t\t\t<span class=\"article-author material-design-user157\"><a href=\"#\">";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_author", array()), "content", array()), "html", null, true));
        echo "</a></span>
\t\t\t</div>
\t\t\t<div class=\"article-description\">
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a class=\"btn\" href=\"#\">";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_button", array()), "content", array()), "html", null, true));
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
</article>";
    }

    public function getTemplateName()
    {
        return "themes/custom/vickie_dean_themes/templates/views/views-view-fields--blog--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  74 => 18,  68 => 15,  63 => 13,  57 => 10,  49 => 5,  43 => 1,);
    }
}
/* <article class="blog_article">*/
/* 	<div class="row">*/
/* 		<div class="col-sm-12 col-md-6">*/
/* 			<figure class="article-image">*/
/* 			{{fields.field_image.content}}*/
/* 			</figure>*/
/* 		</div>*/
/* 		<div class="col-sm-12 col-md-6">*/
/* 			<h2 class="article-title">*/
/* 				{{fields.title.content}}*/
/* 			</h2>*/
/* 			<div class="article-sub-title">*/
/* 				<span class="article-date material-design-clock100">{{fields.field_date.content}}</span>*/
/* 				<span class="article-comments material-design-add183"><a href="#">3 Comments</a></span>*/
/* 				<span class="article-author material-design-user157"><a href="#">{{fields.field_author.content}}</a></span>*/
/* 			</div>*/
/* 			<div class="article-description">*/
/* 				{{fields.body.content}}*/
/* 			</div>*/
/* 			<div>*/
/* 				<a class="btn" href="#">{{fields.field_button.content}}</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </article>*/
