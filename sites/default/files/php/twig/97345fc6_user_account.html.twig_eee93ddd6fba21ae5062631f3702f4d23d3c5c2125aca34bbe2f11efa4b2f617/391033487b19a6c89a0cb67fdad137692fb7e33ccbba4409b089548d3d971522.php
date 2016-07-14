<?php

/* modules/order_forms/templates/user_account.html.twig */
class __TwigTemplate_4c94dfd2bb6b4451ffccd29077522304511c9ea123ea989cf383998b661e8193 extends Twig_Template
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
        echo "<div class=\"simple_blog-category\">
  <div id=\"page\">
     <div class=\"container\">
        <ul class=\"breadcrumb\">
          <li><a href=\"/front\"><i class=\"fa fa-home\"></i></a></li>
          <li><a href=\"#\">Account</a></li>
          <li><a href=\"#\">Login</a></li>
        </ul>
      <div class=\"row\"> 
        <div id=\"content\" class=\"col-sm-12\"> 
          <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"well\" data-match-height=\"match\">
                    <div class=\"heading\">
                        <i class=\"material-design-add184\"></i>
                        <div class=\"extra-wrap\">
                            <h2>New Customer</h2>
                            <strong>Register Account</strong>
                        </div>
                    </div>
                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                    <a href=\"#\" class=\"btn btn-primary\">Continue</a>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"well\" data-match-height=\"match\">
                    <div class=\"heading\">
                        <i class=\"material-design-man460\"></i>
                        <h2>Returning Customer</h2>
                        <strong>I am a returning customer</strong>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\" for=\"input-email\">E-Mail Address</label>
                        ";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "html", null, true));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\" for=\"input-password\">Password</label>
                        ";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pass", array()), "html", null, true));
        echo "
                        <br/>
                        <a class=\"link\"> ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "recovery", array()), "html", null, true));
        echo " </a>
                    </div>
                    ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "actions", array()), "submit", array()), "html", null, true));
        echo "
                </div>
            </div> 
           </div>
        </div>
      </div>
    </div>
  </div>  
</div>     ";
    }

    public function getTemplateName()
    {
        return "modules/order_forms/templates/user_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  90 => 40,  85 => 38,  78 => 34,  43 => 1,);
    }
}
/* <div class="simple_blog-category">*/
/*   <div id="page">*/
/*      <div class="container">*/
/*         <ul class="breadcrumb">*/
/*           <li><a href="/front"><i class="fa fa-home"></i></a></li>*/
/*           <li><a href="#">Account</a></li>*/
/*           <li><a href="#">Login</a></li>*/
/*         </ul>*/
/*       <div class="row"> */
/*         <div id="content" class="col-sm-12"> */
/*           <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 <div class="well" data-match-height="match">*/
/*                     <div class="heading">*/
/*                         <i class="material-design-add184"></i>*/
/*                         <div class="extra-wrap">*/
/*                             <h2>New Customer</h2>*/
/*                             <strong>Register Account</strong>*/
/*                         </div>*/
/*                     </div>*/
/*                     <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>*/
/*                     <a href="#" class="btn btn-primary">Continue</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-6">*/
/*                 <div class="well" data-match-height="match">*/
/*                     <div class="heading">*/
/*                         <i class="material-design-man460"></i>*/
/*                         <h2>Returning Customer</h2>*/
/*                         <strong>I am a returning customer</strong>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="control-label" for="input-email">E-Mail Address</label>*/
/*                         {{ form.email }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="control-label" for="input-password">Password</label>*/
/*                         {{ form.pass }}*/
/*                         <br/>*/
/*                         <a class="link"> {{ form.recovery }} </a>*/
/*                     </div>*/
/*                     {{ form.actions.submit }}*/
/*                 </div>*/
/*             </div> */
/*            </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>  */
/* </div>     */
