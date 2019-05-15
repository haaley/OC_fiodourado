<?php

/* __string_template__55d3ceeaf5090c3f5563a52e20c45493f45753705d0260f3299770119cb9c2ff */
class __TwigTemplate_2628a7ce090b0389d4d409cf79f017a5fa077285c09bc84e5f46fc3afa4665df extends Twig_Template
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
<div class=\"my-account-area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<form action=\"";
        // line 6
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t <div class=\"form-fields\">
\t\t\t\t\t\t\t<h2><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
        // line 8
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</h2>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-email\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>";
        // line 10
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 11
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 12
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 13
            echo "                    <label class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</label>
                  ";
        }
        // line 15
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label>Confirmar e-mail<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"confirm_Email\" value=\"";
        // line 18
        echo (isset($context["confirm_Email"]) ? $context["confirm_Email"] : null);
        echo "\"/>
                  ";
        // line 19
        if ((isset($context["error_confirm_email"]) ? $context["error_confirm_email"] : null)) {
            // line 20
            echo "                     <label class=\"text-danger\">";
            echo (isset($context["error_confirm_email"]) ? $context["error_confirm_email"] : null);
            echo "</label>
                  ";
        }
        // line 22
        echo "\t\t\t\t\t\t\t\t</p>
                <p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<labe for=\"input-password\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i>";
        // line 24
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 25
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                  ";
        // line 26
        if ((isset($context["error_password_email"]) ? $context["error_password_email"] : null)) {
            // line 27
            echo "                     <label class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</label>
                  ";
        }
        // line 29
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-confirm\">Confirmar senha<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 32
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
                  ";
        // line 33
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 34
            echo "                  <label class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</label>
                  ";
        }
        // line 36
        echo "                </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-fields\">
\t\t\t\t\t\t\t\t<h2><i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
        // line 39
        echo (isset($context["text_your_details_pessoal"]) ? $context["text_your_details_pessoal"] : null);
        echo "</h2>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-firstname\">";
        // line 41
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 42
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                  ";
        // line 43
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 44
            echo "                    <label class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</label>
                  ";
        }
        // line 46
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-lastname\">";
        // line 48
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 49
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                  ";
        // line 50
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 51
            echo "                    <label class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</label>
                  ";
        }
        // line 53
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label for=\"input-telephone\">";
        // line 55
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 56
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 57
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 58
            echo "                  <label class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</label>
                  ";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
                <div>
                  <div class=\"required\" style=\"display: ";
        // line 63
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
                    <p class=\"col-md-6\">
                      <label>";
        // line 65
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "<span class=\"required\">*</span></label>
                      ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 67
            echo "                        ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 68
                echo "                        <div class=\"radio\">
                          <label>
                            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 70
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                            ";
                // line 71
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                          </label>
                        </div>
                        ";
            } else {
                // line 75
                echo "                        <label class=\"radio\">
                          <label>
                            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 77
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                            ";
                // line 78
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                          </label>
                        </label>
                        ";
            }
            // line 82
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </p>
                  </div>
                  ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 86
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 87
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label for=\"input-custom-field";
                // line 89
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*2</span></label>
                      <select name=\"custom_field[";
                // line 90
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                        <option value=\"\">";
                // line 91
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                        ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 93
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "location", array()), array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 94
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                        ";
                    } else {
                        // line 96
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                        ";
                    }
                    // line 98
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "                      </select>
                      ";
                // line 100
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 101
                    echo "                      <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                      ";
                }
                // line 103
                echo "                    </p>
                  </div>
                  ";
            }
            // line 106
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 107
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                    <label>";
                // line 109
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*</span></label>
                    <div> ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 111
                    echo "                        <div class=\"radio\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 112
                        echo "                          <label>
                            <input type=\"radio\" name=\"custom_field[";
                        // line 113
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                            ";
                        // line 114
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                          </label>
                          ";
                    } else {
                        // line 117
                        echo "                          <label>
                            <input type=\"radio\" name=\"custom_field[";
                        // line 118
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                            ";
                        // line 119
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                          </label>
                          ";
                    }
                    // line 122
                    echo "                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                      </div>
                      ";
                // line 125
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 126
                    echo "                      <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                      ";
                }
                // line 128
                echo "                    </p>
                  </div>
                  ";
            }
            // line 131
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 132
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label>";
                // line 134
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*</span></label>
                      <div> ";
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 136
                    echo "                          <div class=\"checkbox\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 137
                        echo "                            <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 138
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                              ";
                        // line 139
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                            </label>
                            ";
                    } else {
                        // line 142
                        echo "                            <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 143
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                              ";
                        // line 144
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                            </label>
                            ";
                    }
                    // line 147
                    echo "                          </div>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                        </div>
                        ";
                // line 150
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 151
                    echo "                        <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                        ";
                }
                // line 153
                echo "                    </p>
                  </div>
                  ";
            }
            // line 156
            echo "                 ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 157
                echo "                 <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label for=\"input-custom-field";
                // line 159
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*</span></label>
                      <input type=\"text\" name=\"custom_field[";
                // line 160
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
                // line 161
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 162
                    echo "                      <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                      ";
                }
                // line 164
                echo "                    </p>
                  </div>
                  ";
            }
            // line 167
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 168
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label  for=\"input-custom-field";
                // line 170
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo " <span class=\"required\">*</span></label>
                        <textarea name=\"custom_field[";
                // line 171
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
                // line 172
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 173
                    echo "                        <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                        ";
                }
                // line 175
                echo "                    </p>
                  </div>
                  ";
            }
            // line 178
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 179
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label>";
                // line 181
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*</span></label>
                      <button type=\"button\" id=\"button-custom-field";
                // line 182
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                // line 183
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
                // line 184
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 185
                    echo "                        <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                        ";
                }
                // line 187
                echo "                   </p>
                  </div>
                  ";
            }
            // line 190
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 191
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label for=\"input-custom-field";
                // line 193
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*</span></label>
                      <div class=\"input-group date\">
                          <input type=\"text\" name=\"custom_field[";
                // line 195
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
                // line 199
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 200
                    echo "                        <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                        ";
                }
                // line 202
                echo "                     </p>
                  </div>
                  ";
            }
            // line 205
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 206
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label for=\"input-custom-field";
                // line 208
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*</span></label>
                      <div class=\"input-group time\">
                          <input type=\"text\" name=\"custom_field[";
                // line 210
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
                // line 214
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 215
                    echo "                        <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                        ";
                }
                // line 217
                echo "                   </p>
                  </div>
                  ";
            }
            // line 220
            echo "                  ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 221
                echo "                  <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                    <p class=\"col-md-6\">
                      <label for=\"input-custom-field";
                // line 223
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "<span class=\"required\">*</span></label>
                      <div class=\"input-group datetime\">
                          <input type=\"text\" name=\"custom_field[";
                // line 225
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
                // line 229
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 230
                    echo "                        <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                        ";
                }
                // line 232
                echo "                    </p>
                  </div>
                  ";
            }
            // line 235
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                </div>

\t\t\t\t\t\t</div>
            <div class=\"form-fields\">
\t\t\t\t\t\t<fieldset>
          <legend>";
        // line 241
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">";
        // line 243
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
            <div class=\"col-sm-9\"> ";
        // line 244
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 245
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
                ";
            // line 247
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" />
                ";
            // line 251
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
              </label>
              ";
        } else {
            // line 254
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" />
                ";
            // line 256
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
                ";
            // line 260
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
              </label>
              ";
        }
        // line 263
        echo "            </div>
          </div>
        </fieldset>
        </div>
             ";
        // line 267
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 268
            echo "        <div class=\"form-action3\">
          <div class=\"pull-right\">";
            // line 269
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
            ";
            // line 270
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 271
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 273
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 275
            echo "            &nbsp;
            <input type=\"submit\" value=\"";
            // line 276
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 280
            echo "        <div class=\"form-action3\">
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 282
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 286
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
        // line 397
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });

  \$('.time').datetimepicker({
    language: '";
        // line 402
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 407
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: true,
    pickTime: true
  });
//--></script>
";
        // line 412
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__55d3ceeaf5090c3f5563a52e20c45493f45753705d0260f3299770119cb9c2ff";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1017 => 412,  1009 => 407,  1001 => 402,  993 => 397,  880 => 286,  873 => 282,  869 => 280,  862 => 276,  859 => 275,  855 => 273,  851 => 271,  849 => 270,  845 => 269,  842 => 268,  840 => 267,  834 => 263,  828 => 260,  821 => 256,  817 => 254,  811 => 251,  804 => 247,  800 => 245,  798 => 244,  794 => 243,  789 => 241,  782 => 236,  776 => 235,  771 => 232,  765 => 230,  763 => 229,  744 => 225,  737 => 223,  729 => 221,  726 => 220,  721 => 217,  715 => 215,  713 => 214,  694 => 210,  687 => 208,  679 => 206,  676 => 205,  671 => 202,  665 => 200,  663 => 199,  644 => 195,  637 => 193,  629 => 191,  626 => 190,  621 => 187,  615 => 185,  613 => 184,  601 => 183,  593 => 182,  589 => 181,  581 => 179,  578 => 178,  573 => 175,  567 => 173,  565 => 172,  549 => 171,  543 => 170,  535 => 168,  532 => 167,  527 => 164,  521 => 162,  519 => 161,  503 => 160,  497 => 159,  489 => 157,  486 => 156,  481 => 153,  475 => 151,  473 => 150,  470 => 149,  463 => 147,  457 => 144,  449 => 143,  446 => 142,  440 => 139,  432 => 138,  429 => 137,  426 => 136,  422 => 135,  418 => 134,  410 => 132,  407 => 131,  402 => 128,  396 => 126,  394 => 125,  391 => 124,  384 => 122,  378 => 119,  370 => 118,  367 => 117,  361 => 114,  353 => 113,  350 => 112,  347 => 111,  343 => 110,  339 => 109,  331 => 107,  328 => 106,  323 => 103,  317 => 101,  315 => 100,  312 => 99,  306 => 98,  298 => 96,  290 => 94,  287 => 93,  283 => 92,  279 => 91,  271 => 90,  265 => 89,  257 => 87,  254 => 86,  250 => 85,  246 => 83,  240 => 82,  233 => 78,  229 => 77,  225 => 75,  218 => 71,  214 => 70,  210 => 68,  207 => 67,  203 => 66,  199 => 65,  190 => 63,  185 => 60,  179 => 58,  177 => 57,  171 => 56,  167 => 55,  163 => 53,  157 => 51,  155 => 50,  149 => 49,  145 => 48,  141 => 46,  135 => 44,  133 => 43,  127 => 42,  123 => 41,  118 => 39,  113 => 36,  107 => 34,  105 => 33,  99 => 32,  94 => 29,  88 => 27,  86 => 26,  80 => 25,  76 => 24,  72 => 22,  66 => 20,  64 => 19,  60 => 18,  55 => 15,  49 => 13,  47 => 12,  41 => 11,  37 => 10,  32 => 8,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
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
/*                     <label class="text-danger">{{ error_email }}</label>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								<p class="col-md-6">*/
/* 									<label>Confirmar e-mail<span class="required">*</span></label>*/
/* 									<input type="email" name="confirm_Email" value="{{ confirm_Email }}"/>*/
/*                   {% if error_confirm_email %}*/
/*                      <label class="text-danger">{{ error_confirm_email }}</label>*/
/*                   {% endif %}*/
/* 								</p>*/
/*                 <p class="col-md-6">*/
/* 									<labe for="input-password"><i class="fa fa-lock" aria-hidden="true"></i>{{ entry_password }}<span class="required">*</span></label>*/
/* 									<input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*                   {% if error_password_email %}*/
/*                      <label class="text-danger">{{ error_password }}</label>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								<p class="col-md-6">*/
/* 									<label for="input-confirm">Confirmar senha<span class="required">*</span></label>*/
/* 									<input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control" />*/
/*                   {% if error_confirm %}*/
/*                   <label class="text-danger">{{ error_confirm }}</label>*/
/*                   {% endif %}*/
/*                 </p>*/
/* 						</div>*/
/* 						<div class="form-fields">*/
/* 								<h2><i class="fa fa-list" aria-hidden="true"></i> {{ text_your_details_pessoal }}</h2>*/
/* 								<p class="col-md-6">*/
/* 									<label for="input-firstname">{{ entry_firstname }}<span class="required">*</span></label>*/
/* 									<input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                   {% if error_firstname %}*/
/*                     <label class="text-danger">{{ error_firstname }}</label>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								<p class="col-md-6">*/
/* 									<label for="input-lastname">{{ entry_lastname }}<span class="required">*</span></label>*/
/* 									<input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*                   {% if error_lastname %}*/
/*                     <label class="text-danger">{{ error_lastname }}</label>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								<p class="col-md-6">*/
/* 									<label for="input-telephone">{{ entry_telephone }}<span class="required">*</span></label>*/
/* 									<input type="tel" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <label class="text-danger">{{ error_telephone }}</label>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								*/
/*                 <div>*/
/*                   <div class="required" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*                     <p class="col-md-6">*/
/*                       <label>{{ entry_customer_group }}<span class="required">*</span></label>*/
/*                       {% for customer_group in customer_groups %}*/
/*                         {% if customer_group.customer_group_id == customer_group_id %}*/
/*                         <div class="radio">*/
/*                           <label>*/
/*                             <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                             {{ customer_group.name }}*/
/*                           </label>*/
/*                         </div>*/
/*                         {% else %}*/
/*                         <label class="radio">*/
/*                           <label>*/
/*                             <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" />*/
/*                             {{ customer_group.name }}*/
/*                           </label>*/
/*                         </label>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                     </p>*/
/*                   </div>*/
/*                   {% for custom_field in custom_fields %}*/
/*                   {% if custom_field.type == 'select' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*2</span></label>*/
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
/*                       <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                       {% endif %}*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'radio' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                     <label>{{ custom_field.name }}<span class="required">*</span></label>*/
/*                     <div> {% for custom_field_value in custom_field.custom_field_value %}*/
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
/*                       <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                       {% endif %}*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'checkbox' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label>{{ custom_field.name }}<span class="required">*</span></label>*/
/*                       <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                           <div class="checkbox">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
/*                             <label>*/
/*                               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                               {{ custom_field_value.name }}*/
/*                             </label>*/
/*                             {% else %}*/
/*                             <label>*/
/*                               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                               {{ custom_field_value.name }}*/
/*                             </label>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                         {% endif %}*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                  {% if custom_field.type == 'text' %}*/
/*                  <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*</span></label>*/
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                       {% endif %}*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'textarea' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label  for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }} <span class="required">*</span></label>*/
/*                         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                         {% endif %}*/
/*                     </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'file' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label>{{ custom_field.name }}<span class="required">*</span></label>*/
/*                       <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                         {% endif %}*/
/*                    </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'date' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*</span></label>*/
/*                       <div class="input-group date">*/
/*                           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                           <span class="input-group-btn">*/
/*                           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                           </span></div>*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                         {% endif %}*/
/*                      </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'time' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*</span></label>*/
/*                       <div class="input-group time">*/
/*                           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                           <span class="input-group-btn">*/
/*                           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                           </span></div>*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                         {% endif %}*/
/*                    </p>*/
/*                   </div>*/
/*                   {% endif %}*/
/*                   {% if custom_field.type == 'time' %}*/
/*                   <div id="custom-field{{ custom_field.custom_field_id }}"  data-sort="{{ custom_field.sort_order }}">*/
/*                     <p class="col-md-6">*/
/*                       <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}<span class="required">*</span></label>*/
/*                       <div class="input-group datetime">*/
/*                           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                           <span class="input-group-btn">*/
/*                           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                           </span></div>*/
/*                         {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                         <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                         {% endif %}*/
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
/*             <label class="col-sm-3 control-label">{{ entry_newsletter }}</label>*/
/*             <div class="col-sm-9"> {% if newsletter %}*/
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
/* */
