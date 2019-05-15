<?php

/* default/template/checkout/login.twig */
class __TwigTemplate_98f1696e649b0cd0763db5a406c92fa66ee71b6b02c529328776f5790a5462d8 extends Twig_Template
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
        // line 1
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>";
        // line 3
        echo (isset($context["text_new_customer"]) ? $context["text_new_customer"] : null);
        echo "</h2>
    <p>";
        // line 4
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</p>
    <div class=\"radio\">
      <label> ";
        // line 6
        if (((isset($context["account"]) ? $context["account"] : null) == "register")) {
            // line 7
            echo "        <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        ";
        } else {
            // line 9
            echo "        <input type=\"radio\" name=\"account\" value=\"register\" />
        ";
        }
        // line 11
        echo "        ";
        echo (isset($context["text_register"]) ? $context["text_register"] : null);
        echo "
      </label>
    </div>
    ";
        // line 14
        if ((isset($context["checkout_guest"]) ? $context["checkout_guest"] : null)) {
            // line 15
            echo "    <div class=\"radio\">
      <label> ";
            // line 16
            if (((isset($context["account"]) ? $context["account"] : null) == "guest")) {
                // line 17
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        ";
            } else {
                // line 19
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" />
        ";
            }
            // line 21
            echo "        ";
            echo (isset($context["text_guest"]) ? $context["text_guest"] : null);
            echo "
      </label>
    </div>
    ";
        }
        // line 25
        echo "    <p>";
        echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
        echo "</p>
    <input type=\"button\" value=\"";
        // line 26
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-account\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
  <div class=\"col-sm-6\">
    <h2>";
        // line 29
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
    <p>";
        // line 30
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</p>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 32
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 33
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-password\">";
        // line 36
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 37
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
      <a href=\"";
        // line 38
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a></div>
    <input type=\"button\" value=\"";
        // line 39
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" id=\"button-login\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  112 => 38,  108 => 37,  104 => 36,  98 => 33,  94 => 32,  89 => 30,  85 => 29,  77 => 26,  72 => 25,  64 => 21,  60 => 19,  56 => 17,  54 => 16,  51 => 15,  49 => 14,  42 => 11,  38 => 9,  34 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/*   <div class="col-sm-6">*/
/*     <h2>{{ text_new_customer }}</h2>*/
/*     <p>{{ text_checkout }}</p>*/
/*     <div class="radio">*/
/*       <label> {% if account == 'register' %}*/
/*         <input type="radio" name="account" value="register" checked="checked" />*/
/*         {% else %}*/
/*         <input type="radio" name="account" value="register" />*/
/*         {% endif %}*/
/*         {{ text_register }}*/
/*       </label>*/
/*     </div>*/
/*     {% if checkout_guest %}*/
/*     <div class="radio">*/
/*       <label> {% if account == 'guest' %}*/
/*         <input type="radio" name="account" value="guest" checked="checked" />*/
/*         {% else %}*/
/*         <input type="radio" name="account" value="guest" />*/
/*         {% endif %}*/
/*         {{ text_guest }}*/
/*       </label>*/
/*     </div>*/
/*     {% endif %}*/
/*     <p>{{ text_register_account }}</p>*/
/*     <input type="button" value="{{ button_continue }}" id="button-account" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/*   <div class="col-sm-6">*/
/*     <h2>{{ text_returning_customer }}</h2>*/
/*     <p>{{ text_i_am_returning_customer }}</p>*/
/*     <div class="form-group">*/
/*       <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*       <input type="text" name="email" value="" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*       <input type="password" name="password" value="" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*       <a href="{{ forgotten }}">{{ text_forgotten }}</a></div>*/
/*     <input type="button" value="{{ button_login }}" id="button-login" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* */
