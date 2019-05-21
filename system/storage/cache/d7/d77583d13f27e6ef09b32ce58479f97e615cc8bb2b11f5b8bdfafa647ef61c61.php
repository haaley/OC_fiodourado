<?php

/* default/template/account/login.twig */
class __TwigTemplate_daf089bee213420980c6d2963251043866be20bb7f5db3c34e69458cf60a1cb3 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"account-login\" class=\"container\">

  ";
        // line 4
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 5
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 7
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 8
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 10
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 11
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"form-fields1\">
            <h2>";
        // line 22
        echo (isset($context["text_new_customer"]) ? $context["text_new_customer"] : null);
        echo "</h2>
            <p><strong>";
        // line 23
        echo (isset($context["text_register"]) ? $context["text_register"] : null);
        echo "</strong></p>
            <p>";
        // line 24
        echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
        echo "</p>
            <div class=\"btncontinuar\">  <a href=\"";
        // line 25
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\" >";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a> </div>         

          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"form-fields1\">
            <h2>";
        // line 31
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
            <p><strong>";
        // line 32
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</strong></p>
            <form action=\"";
        // line 33
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 35
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 36
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 39
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 40
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\"  />
                <a href=\"";
        // line 41
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a>
              </div>
              <div class=\"btncontinuar\">  <input type=\"submit\" value=\"";
        // line 43
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\"  />  </div>            

              ";
        // line 45
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 46
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
              ";
        }
        // line 48
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 52
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
   
  </div>
</div>
";
        // line 57
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 57,  161 => 52,  155 => 48,  149 => 46,  147 => 45,  142 => 43,  135 => 41,  129 => 40,  125 => 39,  117 => 36,  113 => 35,  108 => 33,  104 => 32,  100 => 31,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  47 => 11,  42 => 10,  36 => 8,  33 => 7,  27 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-login" class="container">*/
/* */
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <div class="form-fields1">*/
/*             <h2>{{ text_new_customer }}</h2>*/
/*             <p><strong>{{ text_register }}</strong></p>*/
/*             <p>{{ text_register_account }}</p>*/
/*             <div class="btncontinuar">  <a href="{{ register }}" >{{ button_continue }}</a> </div>         */
/* */
/*           </div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <div class="form-fields1">*/
/*             <h2>{{ text_returning_customer }}</h2>*/
/*             <p><strong>{{ text_i_am_returning_customer }}</strong></p>*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" />*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*                 <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password"  />*/
/*                 <a href="{{ forgotten }}">{{ text_forgotten }}</a>*/
/*               </div>*/
/*               <div class="btncontinuar">  <input type="submit" value="{{ button_login }}"  />  </div>            */
/* */
/*               {% if redirect %}*/
/*               <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*               {% endif %}*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*    */
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
