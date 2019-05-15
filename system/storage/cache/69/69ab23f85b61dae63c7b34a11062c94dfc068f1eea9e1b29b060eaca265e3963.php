<?php

/* __string_template__d1f4346894e3f4dcc0bf7a84c16eb9efa0e24a811095dac3de66b57762c1437e */
class __TwigTemplate_73d511c612ce1125cfdbc8c80eaeed4f44712e1e8459605cc0da8e6440fd9620 extends Twig_Template
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
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 15
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label>Confirmar e-mail<span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"confirm_Email\"/>
                  ";
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
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 27
            echo "                     <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
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
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
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
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
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
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
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
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
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
                echo "                        <div class=\"radio\">
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
                        </div>
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
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
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
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
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
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
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
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
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
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
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
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
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
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
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
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
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
                    echo "                        <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
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
        return "__string_template__d1f4346894e3f4dcc0bf7a84c16eb9efa0e24a811095dac3de66b57762c1437e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1006 => 412,  998 => 407,  990 => 402,  982 => 397,  869 => 286,  862 => 282,  858 => 280,  851 => 276,  848 => 275,  844 => 273,  840 => 271,  838 => 270,  834 => 269,  831 => 268,  829 => 267,  823 => 263,  817 => 260,  810 => 256,  806 => 254,  800 => 251,  793 => 247,  789 => 245,  787 => 244,  783 => 243,  778 => 241,  771 => 236,  765 => 235,  760 => 232,  754 => 230,  752 => 229,  733 => 225,  726 => 223,  718 => 221,  715 => 220,  710 => 217,  704 => 215,  702 => 214,  683 => 210,  676 => 208,  668 => 206,  665 => 205,  660 => 202,  654 => 200,  652 => 199,  633 => 195,  626 => 193,  618 => 191,  615 => 190,  610 => 187,  604 => 185,  602 => 184,  590 => 183,  582 => 182,  578 => 181,  570 => 179,  567 => 178,  562 => 175,  556 => 173,  554 => 172,  538 => 171,  532 => 170,  524 => 168,  521 => 167,  516 => 164,  510 => 162,  508 => 161,  492 => 160,  486 => 159,  478 => 157,  475 => 156,  470 => 153,  464 => 151,  462 => 150,  459 => 149,  452 => 147,  446 => 144,  438 => 143,  435 => 142,  429 => 139,  421 => 138,  418 => 137,  415 => 136,  411 => 135,  407 => 134,  399 => 132,  396 => 131,  391 => 128,  385 => 126,  383 => 125,  380 => 124,  373 => 122,  367 => 119,  359 => 118,  356 => 117,  350 => 114,  342 => 113,  339 => 112,  336 => 111,  332 => 110,  328 => 109,  320 => 107,  317 => 106,  312 => 103,  306 => 101,  304 => 100,  301 => 99,  295 => 98,  287 => 96,  279 => 94,  276 => 93,  272 => 92,  268 => 91,  260 => 90,  254 => 89,  246 => 87,  243 => 86,  239 => 85,  235 => 83,  229 => 82,  222 => 78,  218 => 77,  214 => 75,  207 => 71,  203 => 70,  199 => 68,  196 => 67,  192 => 66,  188 => 65,  179 => 63,  174 => 60,  168 => 58,  166 => 57,  160 => 56,  156 => 55,  152 => 53,  146 => 51,  144 => 50,  138 => 49,  134 => 48,  130 => 46,  124 => 44,  122 => 43,  116 => 42,  112 => 41,  107 => 39,  102 => 36,  96 => 34,  94 => 33,  88 => 32,  83 => 29,  77 => 27,  75 => 26,  69 => 25,  65 => 24,  61 => 22,  55 => 15,  49 => 13,  47 => 12,  41 => 11,  37 => 10,  32 => 8,  27 => 6,  19 => 1,);
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
/*                     <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %}*/
/* 								</p>*/
/* 								<p class="col-md-6">*/
/* 									<label>Confirmar e-mail<span class="required">*</span></label>*/
/* 									<input type="email" name="confirm_Email"/>*/
/*                   {#% if error_confirm_email %}*/
/*                   <label class="text-danger">{{ error_confirm_email }}</labe>*/
/*                   {% endif %#}*/
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
/*                         <div class="radio">*/
/*                           <label>*/
/*                             <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" />*/
/*                             {{ customer_group.name }}*/
/*                           </label>*/
/*                         </div>*/
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
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
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
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
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
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
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
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
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
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
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
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
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
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
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
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
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
/*                         <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
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
