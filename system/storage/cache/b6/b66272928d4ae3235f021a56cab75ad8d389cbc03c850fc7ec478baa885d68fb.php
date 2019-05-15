<?php

/* __string_template__be6800dc4992ea3440ee82af01903d64051081309d1f93b593066786af411cc1 */
class __TwigTemplate_3103f364c33e403f5df3d35396c05cadd2b8f6c2201ccb4882a5bd15a8593ca3 extends Twig_Template
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
<div id=\"account-register\" class=\"container\">
  ";
        // line 3
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 4
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 6
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 7
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 9
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1><i class=\"fa fa-user\"></i> ";
        // line 15
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 16
        echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
        echo "</p>
      <form action=\"";
        // line 17
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal form-register\">
        <fieldset id=\"account\">
          <legend>";
        // line 19
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>

        </fieldset>
        
       
      </form>
      ";
        // line 25
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
  </div>
  <div>
</legend> 

<div class=\"my-account-area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<form action=\"";
        // line 35
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t <div class=\"form-fields\">
\t\t\t\t\t\t\t<h2><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
        // line 37
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</h2>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-email\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>";
        // line 39
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 40
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 41
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 42
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 44
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label>Confirmar e-mail<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" />
\t\t\t\t\t\t\t\t</p>
                <p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<labe for=\"input-password\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i>";
        // line 50
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 51
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                  ";
        // line 52
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 53
            echo "                     <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                  ";
        }
        // line 55
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-confirm\">Confirmar senha<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 58
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
                  ";
        // line 59
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 60
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                  ";
        }
        // line 62
        echo "                </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-fields\">
\t\t\t\t\t\t\t\t<h2><i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
        // line 65
        echo (isset($context["text_your_details_pessoal"]) ? $context["text_your_details_pessoal"] : null);
        echo "</h2>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-firstname\">";
        // line 67
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 68
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                  ";
        // line 69
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 70
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                  ";
        }
        // line 72
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-lastname\">";
        // line 74
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 75
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                  ";
        // line 76
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 77
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                  ";
        }
        // line 79
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-telephone\">";
        // line 81
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 82
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 83
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 84
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                  ";
        }
        // line 86
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
                <div>
                  <div class=\"required\" style=\"display: ";
        // line 89
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                    <p class=\"col-md-6\">
                    <label>";
        // line 91
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "<span class=\"required\">*1</span></label>
                    <div>";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 93
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 94
                echo "                      <div class=\"radio\">
                        <label>
                          <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 96
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                          ";
                // line 97
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        </label>
                      </div>
                      ";
            } else {
                // line 101
                echo "                      <div class=\"radio\">
                        <label>
                          <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 103
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                          ";
                // line 104
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        </label>
                      </div>
                      ";
            }
            // line 108
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                    </div>
                    </p>
                  </div>
                  ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 113
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 114
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                    <label for=\"input-custom-field";
                // line 116
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*2</span></label>
                    <div>
                      <select name=\"custom_field[";
                // line 118
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                        <option value=\"\">";
                // line 119
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                        ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 121
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "location", array()), array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 122
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                        ";
                    } else {
                        // line 124
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                        ";
                    }
                    // line 126
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                      </select>
                      ";
                // line 128
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 129
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 131
                echo "                    </div>
                    </p>
                  </div>
                  ";
            }
            // line 135
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 136
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                    <label>";
                // line 138
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*3</span></label>
                    <div >
                      <div> ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 141
                    echo "                        <div class=\"radio\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 142
                        echo "                          <label>
                            <input type=\"radio\" name=\"custom_field[";
                        // line 143
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                            ";
                        // line 144
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                          </label>
                          ";
                    } else {
                        // line 147
                        echo "                          <label>
                            <input type=\"radio\" name=\"custom_field[";
                        // line 148
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                            ";
                        // line 149
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                          </label>
                          ";
                    }
                    // line 152
                    echo "                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "                      </div>
                      ";
                // line 155
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 156
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 158
                echo "                    </div>
                    </p>
                  </div>
                  ";
            }
            // line 162
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 163
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                    <label>";
                // line 165
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*4</span></label>
                    <div >
                      <div> ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 168
                    echo "                        <div class=\"checkbox\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 169
                        echo "                          <label>
                            <input type=\"checkbox\" name=\"custom_field[";
                        // line 170
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                            ";
                        // line 171
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                          </label>
                          ";
                    } else {
                        // line 174
                        echo "                          <label>
                            <input type=\"checkbox\" name=\"custom_field[";
                        // line 175
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                            ";
                        // line 176
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                          </label>
                          ";
                    }
                    // line 179
                    echo "                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "                      </div>
                      ";
                // line 182
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 183
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 185
                echo "                    </div>
                    </p>
                  </div>
                  ";
            }
            // line 189
            echo "                  
                  
                  ";
            // line 191
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 192
                echo "                  <p class=\"col-md-6\">
                  <div id=\"custom-field";
                // line 193
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                   <label for=\"input-custom-field";
                // line 194
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*5</span></label>
                    <div >
                      <input type=\"text\" name=\"custom_field[";
                // line 196
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                      ";
                // line 197
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 198
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 200
                echo "                    </div>
                  </div>
                  </p>
                  ";
            }
            // line 204
            echo "                  

                  ";
            // line 206
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 207
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label  for=\"input-custom-field";
                // line 209
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo " <span class=\"required\">*6</span></label>
                      <div >
                        <textarea name=\"custom_field[";
                // line 211
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
                        ";
                // line 212
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 213
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                        ";
                }
                // line 215
                echo "                      </div>
                    </p>
                  </div>
                  ";
            }
            // line 219
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 220
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label>";
                // line 222
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*7</span></label>
                      <div >
                        <button type=\"button\" id=\"button-custom-field";
                // line 224
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                // line 225
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo "  ";
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\" />
                        ";
                // line 226
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 227
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                        ";
                }
                // line 229
                echo "                      </div>
                    </p>
                  </div>
                  ";
            }
            // line 233
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 234
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label for=\"input-custom-field";
                // line 236
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*8</span></label>
                      <div>
                        <div class=\"input-group date\">
                          <input type=\"text\" name=\"custom_field[";
                // line 239
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                          <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                          </span></div>
                        ";
                // line 243
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 244
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                        ";
                }
                // line 246
                echo "                      </div>
                    </p>
                  </div>
                  ";
            }
            // line 250
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 251
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label for=\"input-custom-field";
                // line 253
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*9</span></label>
                      <div >
                        <div class=\"input-group time\">
                          <input type=\"text\" name=\"custom_field[";
                // line 256
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                          <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                          </span></div>
                        ";
                // line 260
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 261
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                        ";
                }
                // line 263
                echo "                      </div>
                    </p>
                  </div>
                  ";
            }
            // line 267
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 268
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label for=\"input-custom-field";
                // line 270
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*10</span></label>
                      <div>
                        <div class=\"input-group datetime\">
                          <input type=\"text\" name=\"custom_field[";
                // line 273
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                          <span class=\"input-group-btn\">
                          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                          </span></div>
                        ";
                // line 277
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 278
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                        ";
                }
                // line 280
                echo "                      </div>
                    </p>
                  </div>
                  ";
            }
            // line 284
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "                </div>

\t\t\t\t\t\t</div>
            <div class=\"form-fields\">
\t\t\t\t\t\t<fieldset>
          <legend>";
        // line 290
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 292
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 293
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 294
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
                ";
            // line 296
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" />
                ";
            // line 300
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
              </label>
              ";
        } else {
            // line 303
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" />
                ";
            // line 305
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
                ";
            // line 309
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
              </label>
              ";
        }
        // line 312
        echo "            </div>
          </div>
        </fieldset>
        </div>
             ";
        // line 316
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 317
            echo "        <div class=\"form-action3\">
          <div class=\"pull-right\">";
            // line 318
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
            ";
            // line 319
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 320
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 322
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 324
            echo "            &nbsp;
            <input type=\"submit\" value=\"";
            // line 325
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 329
            echo "        <div class=\"form-action3\">
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 331
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 335
        echo "
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

  </div>
</div>
<script type=\"text/javascript\">
<!--
  // Sort the custom fields
  \$('#account .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
      \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
      \$('#account .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
      \$('#account .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
      \$('#account .form-group:first').before(this);
    }
  });

  \$('input[name=\\'customer_group_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        \$('.custom-field').hide();
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('#custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
  \$('button[id^=\\'button-custom-field\\']').on('click', function() {
    var element = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(element).button('loading');
          },
          complete: function() {
            \$(element).button('reset');
          },
          success: function(json) {
            \$(element).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(element).parent().find('input').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
//--></script> 
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 446
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });

  \$('.time').datetimepicker({
    language: '";
        // line 451
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 456
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: true,
    pickTime: true
  });
//--></script>
";
        // line 461
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__be6800dc4992ea3440ee82af01903d64051081309d1f93b593066786af411cc1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1102 => 461,  1094 => 456,  1086 => 451,  1078 => 446,  965 => 335,  958 => 331,  954 => 329,  947 => 325,  944 => 324,  940 => 322,  936 => 320,  934 => 319,  930 => 318,  927 => 317,  925 => 316,  919 => 312,  913 => 309,  906 => 305,  902 => 303,  896 => 300,  889 => 296,  885 => 294,  883 => 293,  879 => 292,  874 => 290,  867 => 285,  861 => 284,  855 => 280,  849 => 278,  847 => 277,  828 => 273,  820 => 270,  812 => 268,  809 => 267,  803 => 263,  797 => 261,  795 => 260,  776 => 256,  768 => 253,  760 => 251,  757 => 250,  751 => 246,  745 => 244,  743 => 243,  724 => 239,  716 => 236,  708 => 234,  705 => 233,  699 => 229,  693 => 227,  691 => 226,  679 => 225,  671 => 224,  666 => 222,  658 => 220,  655 => 219,  649 => 215,  643 => 213,  641 => 212,  625 => 211,  618 => 209,  610 => 207,  608 => 206,  604 => 204,  598 => 200,  592 => 198,  590 => 197,  574 => 196,  567 => 194,  561 => 193,  558 => 192,  556 => 191,  552 => 189,  546 => 185,  540 => 183,  538 => 182,  535 => 181,  528 => 179,  522 => 176,  514 => 175,  511 => 174,  505 => 171,  497 => 170,  494 => 169,  491 => 168,  487 => 167,  482 => 165,  474 => 163,  471 => 162,  465 => 158,  459 => 156,  457 => 155,  454 => 154,  447 => 152,  441 => 149,  433 => 148,  430 => 147,  424 => 144,  416 => 143,  413 => 142,  410 => 141,  406 => 140,  401 => 138,  393 => 136,  390 => 135,  384 => 131,  378 => 129,  376 => 128,  373 => 127,  367 => 126,  359 => 124,  351 => 122,  348 => 121,  344 => 120,  340 => 119,  332 => 118,  325 => 116,  317 => 114,  314 => 113,  310 => 112,  305 => 109,  299 => 108,  292 => 104,  288 => 103,  284 => 101,  277 => 97,  273 => 96,  269 => 94,  266 => 93,  262 => 92,  258 => 91,  249 => 89,  244 => 86,  238 => 84,  236 => 83,  230 => 82,  226 => 81,  222 => 79,  216 => 77,  214 => 76,  208 => 75,  204 => 74,  200 => 72,  194 => 70,  192 => 69,  186 => 68,  182 => 67,  177 => 65,  172 => 62,  166 => 60,  164 => 59,  158 => 58,  153 => 55,  147 => 53,  145 => 52,  139 => 51,  135 => 50,  127 => 44,  121 => 42,  119 => 41,  113 => 40,  109 => 39,  104 => 37,  99 => 35,  86 => 25,  77 => 19,  72 => 17,  68 => 16,  64 => 15,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  37 => 7,  32 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-register" class="container">*/
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
/*       <h1><i class="fa fa-user"></i> {{ heading_title }}</h1>*/
/*       <p>{{ text_account_already }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal form-register">*/
/*         <fieldset id="account">*/
/*           <legend>{{ text_your_details }}</legend>*/
/* */
/*         </fieldset>*/
/*         */
/*        */
/*       </form>*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*   </div>*/
/*   <div>*/
/* </legend> */
/* */
/* <div class="my-account-area">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/* 					 <div class="form-fields">*/
/* 							<h2><i class="fa fa-user" aria-hidden="true"></i> {{ text_your_details }}</h2>*/
/* 								<p class="col-md-6">*/
/* 									<label for="input-email"><i class="fa fa-envelope" aria-hidden="true"></i>{{ entry_email }}<span class="required">*</span></label>*/
/* 									<input type="email" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                     <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								<p class="col-md-6">*/
/* 									<label>Confirmar e-mail<span class="required">*</span></label>*/
/* 									<input type="email" />*/
/* 								</p>*/
/*                 <p class="col-md-6">*/
/* 									<labe for="input-password"><i class="fa fa-lock" aria-hidden="true"></i>{{ entry_password }}<span class="required">*</span></label>*/
/* 									<input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*                   {% if error_password %}*/
/*                      <div class="text-danger">{{ error_password }}</div>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								<p class="col-md-6">*/
/* 									<label for="input-confirm">Confirmar senha<span class="required">*</span></label>*/
/* 									<input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control" />*/
/*                   {% if error_confirm %}*/
/*                   <div class="text-danger">{{ error_confirm }}</div>*/
/*                   {% endif %}*/
/*                 </p>*/
/* 						</div>*/
/* 						<div class="form-fields">*/
/* 								<h2><i class="fa fa-list" aria-hidden="true"></i> {{ text_your_details_pessoal }}</h2>*/
/* 								<p class="col-md-6">*/
/* 									<label for="input-firstname">{{ entry_firstname }}<span class="required">*</span></label>*/
/* 									<input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                   {% if error_firstname %}*/
/*                     <div class="text-danger">{{ error_firstname }}</div>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								<p class="col-md-6">*/
/* 									<label for="input-lastname">{{ entry_lastname }}<span class="required">*</span></label>*/
/* 									<input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*                   {% if error_lastname %}*/
/*                     <div class="text-danger">{{ error_lastname }}</div>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								<p class="col-md-6">*/
/* 									<label for="input-telephone">{{ entry_telephone }}<span class="required">*</span></label>*/
/* 									<input type="tel" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								*/
/*                 <div>*/
/*                   <div class="required" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*                     <p class="col-md-6">*/
/*                     <label>{{ entry_customer_group }}<span class="required">*1</span></label>*/
/*                     <div>{% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == customer_group_id %}*/
/*                       <div class="radio">*/
/*                         <label>*/
/*                           <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                           {{ customer_group.name }}*/
/*                         </label>*/
/*                       </div>*/
/*                       {% else %}*/
/*                       <div class="radio">*/
/*                         <label>*/
/*                           <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" />*/
/*                           {{ customer_group.name }}*/
/*                         </label>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     </p>*/
/*                   </div>*/
/*                   {% for custom_field in custom_fields %}*/
/*                   {% if custom_field.type == 'select' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                     <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*2</span></label>*/
/*                     <div>*/
/*                       <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                         <option value="">{{ text_select }}</option>*/
/*                         {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         {% if register_custom_field[custom_field.location][custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                         <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </select>*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'radio' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                     <label>{{ custom_field.name }}<span class="required">*3</span></label>*/
/*                     <div >*/
/*                       <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="radio">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                           <label>*/
/*                             <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                             {{ custom_field_value.name }}*/
/*                           </label>*/
/*                           {% else %}*/
/*                           <label>*/
/*                             <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                             {{ custom_field_value.name }}*/
/*                           </label>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'checkbox' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                     <label>{{ custom_field.name }}<span class="required">*4</span></label>*/
/*                     <div >*/
/*                       <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="checkbox">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
/*                           <label>*/
/*                             <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                             {{ custom_field_value.name }}*/
/*                           </label>*/
/*                           {% else %}*/
/*                           <label>*/
/*                             <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                             {{ custom_field_value.name }}*/
/*                           </label>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   */
/*                   */
/*                   {% if custom_field.type == 'text' %}*/
/*                   <p class="col-md-6">*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                    <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*5</span></label>*/
/*                     <div >*/
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                   </p>*/
/*                   {% endif %}*/
/*                   */
/* */
/*                   {% if custom_field.type == 'textarea' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label  for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }} <span class="required">*6</span></label>*/
/*                       <div >*/
/*                         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'file' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label>{{ custom_field.name }}<span class="required">*7</span></label>*/
/*                       <div >*/
/*                         <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'date' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*8</span></label>*/
/*                       <div>*/
/*                         <div class="input-group date">*/
/*                           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                           <span class="input-group-btn">*/
/*                           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                           </span></div>*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'time' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*9</span></label>*/
/*                       <div >*/
/*                         <div class="input-group time">*/
/*                           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                           <span class="input-group-btn">*/
/*                           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                           </span></div>*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'time' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*10</span></label>*/
/*                       <div>*/
/*                         <div class="input-group datetime">*/
/*                           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                           <span class="input-group-btn">*/
/*                           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                           </span></div>*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/* */
/* 						</div>*/
/*             <div class="form-fields">*/
/* 						<fieldset>*/
/*           <legend>{{ text_newsletter }}</legend>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_newsletter }}</label>*/
/*             <div class="col-sm-10"> {% if newsletter %}*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="newsletter" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="newsletter" value="0" />*/
/*                 {{ text_no }}*/
/*               </label>*/
/*               {% else %}*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="newsletter" value="1" />*/
/*                 {{ text_yes }}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="newsletter" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*               </label>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         </div>*/
/*              {% if text_agree %}*/
/*         <div class="form-action3">*/
/*           <div class="pull-right">{{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             &nbsp;*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="form-action3">*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/*   </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* <!--*/
/*   // Sort the custom fields*/
/*   $('#account .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/*       $('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/*       $('#account .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') == $('#account .form-group').length) {*/
/*       $('#account .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/*       $('#account .form-group:first').before(this);*/
/*     }*/
/*   });*/
/* */
/*   $('input[name=\'customer_group_id\']').on('change', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         $('.custom-field').hide();*/
/*         $('.custom-field').removeClass('required');*/
/* */
/*         for (i = 0; i < json.length; i++) {*/
/*           custom_field = json[i];*/
/* */
/*           $('#custom-field' + custom_field['custom_field_id']).show();*/
/* */
/*           if (custom_field['required']) {*/
/*             $('#custom-field' + custom_field['custom_field_id']).addClass('required');*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('input[name=\'customer_group_id\']:checked').trigger('change');*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/*   $('button[id^=\'button-custom-field\']').on('click', function() {*/
/*     var element = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function() {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function() {*/
/*             $(element).button('loading');*/
/*           },*/
/*           complete: function() {*/
/*             $(element).button('reset');*/
/*           },*/
/*           success: function(json) {*/
/*             $(element).parent().find('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $(element).parent().find('input').val(json['code']);*/
/*             }*/
/*           },*/
/*           error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickTime: false*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* //--></script>*/
/* {{ footer }}*/
