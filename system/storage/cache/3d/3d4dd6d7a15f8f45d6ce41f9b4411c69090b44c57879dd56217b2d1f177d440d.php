<?php

/* __string_template__df6603e7537adc049aac770467dd66b6a9c8cd7e43927b1acc6bc97499593836 */
class __TwigTemplate_bf7e15e30023f250595a890399952dc31fb31e4ef3c23fa97cb7c89bf157fb59 extends Twig_Template
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
    <fieldset id=\"account\">
      <legend>";
        // line 4
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
      <div class=\"form-group\" style=\"display: ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <label class=\"control-label\">";
        // line 6
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 8
            echo "        ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 9
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 11
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
            ";
                // line 12
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
          </label>
        </div>
        ";
            } else {
                // line 16
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 18
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
            ";
                // line 19
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
          </label>
        </div>
        ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-firstname\">";
        // line 26
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 27
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 30
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 31
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-email\">";
        // line 34
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 35
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-payment-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-telephone\">";
        // line 38
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
        <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 39
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\" />
      </div>
      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 42
            echo "      ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 43
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 44
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 45
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <select name=\"custom_field[";
                    // line 46
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 47
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
          ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 49
                        echo "          <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "        </select>
      </div>
      ";
                }
                // line 54
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 55
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 56
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 57
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 58
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 60
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
              ";
                        // line 61
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
            </label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "        </div>
      </div>
      ";
                }
                // line 68
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 69
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 70
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 71
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 72
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 74
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
              ";
                        // line 75
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
            </label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "        </div>
      </div>
      ";
                }
                // line 82
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 83
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 84
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 85
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 88
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 89
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 90
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 91
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
      </div>
      ";
                }
                // line 94
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 95
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 96
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 98
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 99
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
      </div>
      ";
                }
                // line 102
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 103
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 104
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 106
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 113
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 114
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 115
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 117
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 124
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 125
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 126
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 128
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 135
                echo "      ";
            }
            // line 136
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "    </fieldset>
    <fieldset>
      <legend>";
        // line 139
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-password\">";
        // line 141
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 142
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-payment-password\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-confirm\">";
        // line 145
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
        <input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 146
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-payment-confirm\" class=\"form-control\" />
      </div>
    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 152
        echo (isset($context["text_your_address"]) ? $context["text_your_address"] : null);
        echo "</legend>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-company\">";
        // line 154
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 155
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-address-1\">";
        // line 158
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 159
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-address-2\">";
        // line 162
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 163
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-city\">";
        // line 166
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 167
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-payment-city\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-postcode\">";
        // line 170
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 171
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-country\">";
        // line 174
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 176
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
          ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 178
            echo "          ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 179
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          ";
            } else {
                // line 181
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          ";
            }
            // line 183
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "        </select>
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-zone\">";
        // line 187
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
      ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 192
            echo "      ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 193
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 194
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 195
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <select name=\"custom_field[";
                    // line 196
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 197
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
          ";
                    // line 198
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 199
                        echo "          <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 201
                    echo "        </select>
      </div>
      ";
                }
                // line 204
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 205
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 206
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 207
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 208
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 210
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
              ";
                        // line 211
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "        </div>
      </div>
      ";
                }
                // line 217
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 218
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 219
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 220
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 221
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 223
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
              ";
                        // line 224
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
            </label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 228
                    echo "        </div>
      </div>
      ";
                }
                // line 231
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 232
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 233
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 234
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 237
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 238
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 239
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 240
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
      </div>
      ";
                }
                // line 243
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 244
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 245
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 247
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 248
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
      </div>
      ";
                }
                // line 251
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 252
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 253
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 255
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 262
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 263
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 264
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 266
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 273
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 274
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 275
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 277
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 284
                echo "      ";
            }
            // line 285
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "    </fieldset>
    ";
        // line 287
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
  </div>
</div>
<div class=\"checkbox\">
  <label for=\"newsletter\">
    <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" />
    ";
        // line 293
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "
  </label>
</div>
";
        // line 296
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 297
            echo "<div class=\"checkbox\">
  <label>
    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" />
    ";
            // line 300
            echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
            echo "
  </label>
</div>
";
        }
        // line 304
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 305
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">";
            // line 306
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo " 
    &nbsp;
    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    <input type=\"button\" value=\"";
            // line 309
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        } else {
            // line 313
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
            // line 315
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        }
        // line 318
        echo " 
<script type=\"text/javascript\"><!--
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

  \$('#address .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
      \$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#address .form-group').length) {
      \$('#address .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') == \$('#address .form-group').length) {
      \$('#address .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
      \$('#address .form-group:first').before(this);
    }
  });

  \$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        \$('#collapse-payment-address .custom-field').hide();
        \$('#collapse-payment-address .custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('#payment-custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
  \$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
    var node = this;

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
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
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
        // line 438
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });

  \$('.time').datetimepicker({
    language: '";
        // line 443
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 448
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: true,
    pickTime: true
  });
//--></script> 
<script type=\"text/javascript\"><!--
  \$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
      dataType: 'json',
      beforeSend: function() {
        \$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
      },
      complete: function() {
        \$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          \$('#collapse-payment-address input[name=\\'postcode\\']').parent().addClass('required');
        } else {
          \$('#collapse-payment-address input[name=\\'postcode\\']').parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 471
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == '";
        // line 477
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
            html += '<option value=\"0\" selected=\"selected\">";
        // line 484
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
        }

        \$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//--></script>";
    }

    public function getTemplateName()
    {
        return "__string_template__df6603e7537adc049aac770467dd66b6a9c8cd7e43927b1acc6bc97499593836";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1224 => 484,  1214 => 477,  1205 => 471,  1179 => 448,  1171 => 443,  1163 => 438,  1041 => 318,  1032 => 315,  1028 => 313,  1019 => 309,  1013 => 306,  1010 => 305,  1008 => 304,  1001 => 300,  996 => 297,  994 => 296,  988 => 293,  979 => 287,  976 => 286,  970 => 285,  967 => 284,  949 => 277,  942 => 275,  935 => 274,  932 => 273,  914 => 266,  907 => 264,  900 => 263,  897 => 262,  879 => 255,  872 => 253,  865 => 252,  862 => 251,  852 => 248,  844 => 247,  839 => 245,  832 => 244,  829 => 243,  815 => 240,  809 => 239,  802 => 238,  799 => 237,  785 => 234,  779 => 233,  772 => 232,  769 => 231,  764 => 228,  754 => 224,  746 => 223,  742 => 221,  736 => 220,  732 => 219,  725 => 218,  722 => 217,  717 => 214,  708 => 211,  700 => 210,  696 => 208,  690 => 207,  686 => 206,  679 => 205,  676 => 204,  671 => 201,  660 => 199,  656 => 198,  652 => 197,  644 => 196,  638 => 195,  631 => 194,  628 => 193,  625 => 192,  621 => 191,  614 => 187,  609 => 184,  603 => 183,  595 => 181,  587 => 179,  584 => 178,  580 => 177,  576 => 176,  571 => 174,  563 => 171,  559 => 170,  553 => 167,  549 => 166,  543 => 163,  539 => 162,  533 => 159,  529 => 158,  523 => 155,  519 => 154,  514 => 152,  505 => 146,  501 => 145,  495 => 142,  491 => 141,  486 => 139,  482 => 137,  476 => 136,  473 => 135,  455 => 128,  448 => 126,  441 => 125,  438 => 124,  420 => 117,  413 => 115,  406 => 114,  403 => 113,  385 => 106,  378 => 104,  371 => 103,  368 => 102,  358 => 99,  350 => 98,  345 => 96,  338 => 95,  335 => 94,  321 => 91,  315 => 90,  308 => 89,  305 => 88,  291 => 85,  285 => 84,  278 => 83,  275 => 82,  270 => 79,  260 => 75,  252 => 74,  248 => 72,  242 => 71,  238 => 70,  231 => 69,  228 => 68,  223 => 65,  213 => 61,  205 => 60,  201 => 58,  195 => 57,  191 => 56,  184 => 55,  181 => 54,  176 => 51,  165 => 49,  161 => 48,  157 => 47,  149 => 46,  143 => 45,  136 => 44,  133 => 43,  130 => 42,  126 => 41,  121 => 39,  117 => 38,  111 => 35,  107 => 34,  101 => 31,  97 => 30,  91 => 27,  87 => 26,  83 => 24,  77 => 23,  70 => 19,  66 => 18,  62 => 16,  55 => 12,  51 => 11,  47 => 9,  44 => 8,  40 => 7,  36 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/*   <div class="col-sm-6">*/
/*     <fieldset id="account">*/
/*       <legend>{{ text_your_details }}</legend>*/
/*       <div class="form-group" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*         <label class="control-label">{{ entry_customer_group }}</label>*/
/*         {% for customer_group in customer_groups %}*/
/*         {% if customer_group.customer_group_id == customer_group_id %}*/
/*         <div class="radio">*/
/*           <label>*/
/*             <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*             {{ customer_group.name }}*/
/*           </label>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="radio">*/
/*           <label>*/
/*             <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" />*/
/*             {{ customer_group.name }}*/
/*           </label>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-firstname">{{ entry_firstname }}</label>*/
/*         <input type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-payment-firstname" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/*         <input type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-payment-lastname" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-email">{{ entry_email }}</label>*/
/*         <input type="text" name="email" value="" placeholder="{{ entry_email }}" id="input-payment-email" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-telephone">{{ entry_telephone }}</label>*/
/*         <input type="text" name="telephone" value="" placeholder="{{ entry_telephone }}" id="input-payment-telephone" class="form-control" />*/
/*       </div>*/
/*       {% for custom_field in custom_fields %}*/
/*       {% if custom_field.location == 'account' %}*/
/*       {% if custom_field.type == 'select' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'radio' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="radio">*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}*/
/*             </label>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'checkbox' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}*/
/*             </label>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'text' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'textarea' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'file' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <br />*/
/*         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'date' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group date">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'time' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group time">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'time' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group datetime">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </fieldset>*/
/*     <fieldset>*/
/*       <legend>{{ text_your_password }}</legend>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-password">{{ entry_password }}</label>*/
/*         <input type="password" name="password" value="" placeholder="{{ entry_password }}" id="input-payment-password" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-confirm">{{ entry_confirm }}</label>*/
/*         <input type="password" name="confirm" value="" placeholder="{{ entry_confirm }}" id="input-payment-confirm" class="form-control" />*/
/*       </div>*/
/*     </fieldset>*/
/*   </div>*/
/*   <div class="col-sm-6">*/
/*     <fieldset id="address">*/
/*       <legend>{{ text_your_address }}</legend>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-payment-company">{{ entry_company }}</label>*/
/*         <input type="text" name="company" value="" placeholder="{{ entry_company }}" id="input-payment-company" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-address-1">{{ entry_address_1 }}</label>*/
/*         <input type="text" name="address_1" value="" placeholder="{{ entry_address_1 }}" id="input-payment-address-1" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-payment-address-2">{{ entry_address_2 }}</label>*/
/*         <input type="text" name="address_2" value="" placeholder="{{ entry_address_2 }}" id="input-payment-address-2" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-city">{{ entry_city }}</label>*/
/*         <input type="text" name="city" value="" placeholder="{{ entry_city }}" id="input-payment-city" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-postcode">{{ entry_postcode }}</label>*/
/*         <input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-payment-postcode" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-country">{{ entry_country }}</label>*/
/*         <select name="country_id" id="input-payment-country" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for country in countries %}*/
/*           {% if country.country_id == country_id %}*/
/*           <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*           {% else %}*/
/*           <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-zone">{{ entry_zone }}</label>*/
/*         <select name="zone_id" id="input-payment-zone" class="form-control">*/
/*         </select>*/
/*       </div>*/
/*       {% for custom_field in custom_fields %}*/
/*       {% if custom_field.location == 'address' %}*/
/*       {% if custom_field.type == 'select' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'radio' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="radio">*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'checkbox' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}*/
/*             </label>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'text' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'textarea' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'file' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <br />*/
/*         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'date' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group date">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'time' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group time">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'time' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group datetime">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </fieldset>*/
/*     {{ captcha }}*/
/*   </div>*/
/* </div>*/
/* <div class="checkbox">*/
/*   <label for="newsletter">*/
/*     <input type="checkbox" name="newsletter" value="1" id="newsletter" />*/
/*     {{ entry_newsletter }}*/
/*   </label>*/
/* </div>*/
/* {% if shipping_required %}*/
/* <div class="checkbox">*/
/*   <label>*/
/*     <input type="checkbox" name="shipping_address" value="1" checked="checked" />*/
/*     {{ entry_shipping }}*/
/*   </label>*/
/* </div>*/
/* {% endif %}*/
/* {% if text_agree %}*/
/* <div class="buttons clearfix">*/
/*   <div class="pull-right">{{ text_agree }} */
/*     &nbsp;*/
/*     <input type="checkbox" name="agree" value="1" />*/
/*     <input type="button" value="{{ button_continue }}" id="button-register" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* {% else %}*/
/* <div class="buttons clearfix">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_continue }}" id="button-register" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* {% endif %} */
/* <script type="text/javascript"><!--*/
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
/*   $('#address .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#address .form-group').length) {*/
/*       $('#address .form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#address .form-group').length) {*/
/*       $('#address .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') == $('#address .form-group').length) {*/
/*       $('#address .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('#address .form-group').length) {*/
/*       $('#address .form-group:first').before(this);*/
/*     }*/
/*   });*/
/* */
/*   $('#collapse-payment-address input[name=\'customer_group_id\']').on('change', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         $('#collapse-payment-address .custom-field').hide();*/
/*         $('#collapse-payment-address .custom-field').removeClass('required');*/
/* */
/*         for (i = 0; i < json.length; i++) {*/
/*           custom_field = json[i];*/
/* */
/*           $('#payment-custom-field' + custom_field['custom_field_id']).show();*/
/* */
/*           if (custom_field['required']) {*/
/*             $('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('#collapse-payment-address input[name=\'customer_group_id\']:checked').trigger('change');*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/*   $('#collapse-payment-address button[id^=\'button-payment-custom-field\']').on('click', function() {*/
/*     var node = this;*/
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
/*             $(node).button('loading');*/
/*           },*/
/*           complete: function() {*/
/*             $(node).button('reset');*/
/*           },*/
/*           success: function(json) {*/
/*             $('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $(node).parent().find('input[name^=\'custom_field\']').val(json['code']);*/
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
/* //--></script> */
/* <script type="text/javascript"><!--*/
/*   $('#collapse-payment-address select[name=\'country_id\']').on('change', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('#collapse-payment-address select[name=\'country_id\']').prop('disabled', true);*/
/*       },*/
/*       complete: function() {*/
/*         $('#collapse-payment-address select[name=\'country_id\']').prop('disabled', false);*/
/*       },*/
/*       success: function(json) {*/
/*         if (json['postcode_required'] == '1') {*/
/*           $('#collapse-payment-address input[name=\'postcode\']').parent().addClass('required');*/
/*         } else {*/
/*           $('#collapse-payment-address input[name=\'postcode\']').parent().removeClass('required');*/
/*         }*/
/* */
/*         html = '<option value="">{{ text_select }}</option>';*/
/* */
/*         if (json['zone'] && json['zone'] != '') {*/
/*           for (i = 0; i < json['zone'].length; i++) {*/
/*             html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/*             if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/*               html += ' selected="selected"';*/
/*             }*/
/* */
/*             html += '>' + json['zone'][i]['name'] + '</option>';*/
/*           }*/
/*         } else {*/
/*             html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/*         }*/
/* */
/*         $('#collapse-payment-address select[name=\'zone_id\']').html(html);*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('#collapse-payment-address select[name=\'country_id\']').trigger('change');*/
/* //--></script>*/
