<?php

/* __string_template__e8ca7bd4aa6600d41cb3ad821dc4cb0522ba6f811649ee7c8856f906b8dfe1a6 */
class __TwigTemplate_3acf4f226fa7f1129616d1b3bee0bf8ad4c5ebebf6774329819ea7a51ae9be0c extends Twig_Template
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
          <div class=\"col-md-9\">
      <form action=\"";
        // line 7
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-fields\">
          <h2><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>";
        // line 9
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</h2>
              <p class=\"col-md-6\">
                      <label for=\"input-firstname\">";
        // line 11
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "<span class=\"required\">*</span></label>
                      <input type=\"text\" name=\"firstname\" value=\"";
        // line 12
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                      ";
        // line 13
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 14
            echo "                        <label class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</label>
                      ";
        }
        // line 16
        echo "              </p>
              <p class=\"col-md-6\">
                <label for=\"input-lastname\">";
        // line 18
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "<span class=\"required\">*</span></label>
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 19
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                ";
        // line 20
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 21
            echo "                  <label class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</label>
                ";
        }
        // line 23
        echo "              </p>
              <p class=\"col-md-6\">
                <label for=\"input-company\">";
        // line 25
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
                <input type=\"text\" name=\"company\" value=\"";
        // line 26
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company\" class=\"form-control\" />
              </p>
              <p class=\"col-md-6\">
                <label for=\"input-address-1\">";
        // line 29
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "<span class=\"required\">*</span></label>
                <input type=\"text\" name=\"address_1\" value=\"";
        // line 30
        echo (isset($context["address_1"]) ? $context["address_1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1\" class=\"form-control\" />
                  ";
        // line 31
        if ((isset($context["error_address_1"]) ? $context["error_address_1"] : null)) {
            // line 32
            echo "                  <label class=\"text-danger\">";
            echo (isset($context["error_address_1"]) ? $context["error_address_1"] : null);
            echo "</label>
                ";
        }
        // line 34
        echo "              </p>
              <p class=\"col-md-6\">
                <label for=\"input-address-2\">";
        // line 36
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "<span class=\"required\">*</span></label>
                <input type=\"text\" name=\"address_2\" value=\"";
        // line 37
        echo (isset($context["address_2"]) ? $context["address_2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2\" class=\"form-control\" />
              </p>
              <p class=\"col-md-6\">
                <label for=\"input-city\">";
        // line 40
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "<span class=\"required\">*</span></label>
                <input type=\"text\" name=\"city\" value=\"";
        // line 41
        echo (isset($context["city"]) ? $context["city"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city\" class=\"form-control\" />
                  ";
        // line 42
        if ((isset($context["error_city"]) ? $context["error_city"] : null)) {
            // line 43
            echo "                  <label class=\"text-danger\">";
            echo (isset($context["error_city"]) ? $context["error_city"] : null);
            echo "</label>
                ";
        }
        // line 45
        echo "              </p>
              <p class=\"col-md-6\">
                <label for=\"input-postcode\">";
        // line 47
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "<span class=\"required\">*</span></label>
                <input type=\"text\" name=\"postcode\" value=\"";
        // line 48
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
                  ";
        // line 49
        if ((isset($context["error_postcode"]) ? $context["error_postcode"] : null)) {
            // line 50
            echo "                  <label class=\"text-danger\">";
            echo (isset($context["error_postcode"]) ? $context["error_postcode"] : null);
            echo "</label>
                ";
        }
        // line 52
        echo "              </p>
              <p class=\"col-md-6 required\">
                <label for=\"input-country\">";
        // line 54
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "<span class=\"required\">*</span></label>
                  <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
                    <option value=\"\">";
        // line 56
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo " </option>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 58
            echo "                    ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 59
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 61
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            }
            // line 63
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </select>
                ";
        // line 65
        if ((isset($context["error_country"]) ? $context["error_country"] : null)) {
            // line 66
            echo "                  <label class=\"text-danger\">";
            echo (isset($context["error_country"]) ? $context["error_country"] : null);
            echo "</label>
                ";
        }
        // line 68
        echo "              </p>
              <p class=\"col-md-6 required\">
                <label for=\"input-zone\">";
        // line 70
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "<span class=\"required\">*</span></label>
                  <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                  ";
        // line 73
        if ((isset($context["error_zone"]) ? $context["error_zone"] : null)) {
            // line 74
            echo "                  <label class=\"text-danger\">";
            echo (isset($context["error_zone"]) ? $context["error_zone"] : null);
            echo "</label>
                  ";
        }
        // line 76
        echo "              </p>

          ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 79
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 80
                echo "          <p class=\"col-md-6 required\">
          <div class=\"form-group";
                // line 81
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 82
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">oi";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                // line 84
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 85
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 87
                    echo "                ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 88
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                ";
                    } else {
                        // line 90
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                ";
                    }
                    // line 92
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "              </select>
              ";
                // line 94
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 95
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 97
                echo "            </div>
          </div>
          </p>
          ";
            }
            // line 101
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 102
                echo "          <p class=\"col-md-6 required\">
          <div class=\"form-group";
                // line 103
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\">oi";
                // line 104
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 107
                    echo "                <div class=\"radio\"> ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 108
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 109
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                    ";
                        // line 110
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                  </label>
                  ";
                    } else {
                        // line 113
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 114
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                    ";
                        // line 115
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                  </label>
                  ";
                    }
                    // line 118
                    echo "                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "              </div>
              ";
                // line 121
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 122
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 124
                echo "            </div>
          </div>
          </p>
          ";
            }
            // line 128
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 129
                echo "          <p class=\"col-md-6 required\">
          <div class=\"form-group";
                // line 130
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\">oi";
                // line 131
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 134
                    echo "                <div class=\"checkbox\"> ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 135
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 136
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                    ";
                        // line 137
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                  </label>
                  ";
                    } else {
                        // line 140
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 141
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                    ";
                        // line 142
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                  </label>
                  ";
                    }
                    // line 145
                    echo "                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "              </div>
              ";
                // line 148
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 149
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 151
                echo "            </div>
          </div>
          </p>
          ";
            }
            // line 155
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 156
                echo "          <p class=\"col-md-6 required\">
          <div class=\"form-group";
                // line 157
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 158
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">4";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                // line 160
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 164
                echo "            </div>
          </div>
          ";
            }
            // line 167
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 168
                echo "          <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 169
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">5";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
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
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
              ";
                // line 172
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 173
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 175
                echo "            </div>
          </div>
          </p>
          ";
            }
            // line 179
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 180
                echo "          <p class=\"col-md-6 required\">
          <div class=\"form-group";
                // line 181
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\">6";
                // line 182
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 184
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 185
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo "  ";
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\" />
              ";
                // line 186
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 187
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 189
                echo "            </div>
          </div>
          </p>
          ";
            }
            // line 193
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 194
                echo "          <p class=\"col-md-6 required\">
          <div class=\"form-group";
                // line 195
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 196
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">7";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                // line 199
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                </span>
              </div>
              ";
                // line 204
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 205
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 207
                echo "            </div>
          </div>
          </p>
          ";
            }
            // line 211
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 212
                echo "          <p class=\"col-md-6 required\">
          <div class=\"form-group";
                // line 213
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 214
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\"8>";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                // line 217
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                </span>
              </div>
              ";
                // line 222
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 223
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 225
                echo "            </div>
          </div>
          </p>
          ";
            }
            // line 229
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 230
                echo "          <p class=\"col-md-6 required\">
          <div class=\"form-group";
                // line 231
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 232
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">9";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                // line 235
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                </span>
              </div>
              ";
                // line 240
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 241
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 243
                echo "            </div>
          </div>
          </p>
          ";
            }
            // line 247
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "          
        
        </div>
        <div class=\"form-fields\">
            <label class=\"col-sm-4 control-label\">";
        // line 252
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>
            <div class=\"col-sm-8\"> ";
        // line 253
        if ((isset($context["default"]) ? $context["default"] : null)) {
            // line 254
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"1\" checked=\"checked\" />
                ";
            // line 256
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"0\" />
                ";
            // line 260
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
              </label>
              ";
        } else {
            // line 263
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"1\" />
                ";
            // line 265
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"0\" checked=\"checked\" />
                ";
            // line 269
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
              </label>
              ";
        }
        // line 272
        echo "            </div>
          </div>


        <div class=\"form-action3\">
          <div class=\"pull-left\">
            <a href=\"";
        // line 278
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
          </div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 281
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        
      </form>
        </div>
      ";
        // line 287
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    
    ";
        // line 289
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  // Sort the custom fields
  \$('.form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length-2) {
      \$('.form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
    }
    
    if (\$(this).attr('data-sort') > \$('.form-group').length-2) {
      \$('.form-group:last').after(this);
    }
    
    if (\$(this).attr('data-sort') == \$('.form-group').length-2) {
      \$('.form-group:last').after(this);
    }
    
    if (\$(this).attr('data-sort') < -\$('.form-group').length-2) {
      \$('.form-group:first').before(this);
    }
  });
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
              \$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
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
        // line 369
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 374
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: '";
        // line 380
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: false
  });
//--></script> 
<script type=\"text/javascript\"><!--
  \$('select[name=\\'country_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=account/account/country&country_id=' + this.value,
      dataType: 'json',
      beforeSend: function() {
        \$('select[name=\\'country_id\\']').prop('disabled', true);
      },
      complete: function() {
        \$('select[name=\\'country_id\\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          \$('input[name=\\'postcode\\']').parent().parent().addClass('required');
        } else {
          \$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 402
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == '";
        // line 408
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\" selected=\"selected\">";
        // line 415
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
        }

        \$('select[name=\\'zone_id\\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('select[name=\\'country_id\\']').trigger('change');
//--></script>
";
        // line 428
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__e8ca7bd4aa6600d41cb3ad821dc4cb0522ba6f811649ee7c8856f906b8dfe1a6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1056 => 428,  1040 => 415,  1030 => 408,  1021 => 402,  996 => 380,  987 => 374,  979 => 369,  896 => 289,  891 => 287,  882 => 281,  874 => 278,  866 => 272,  860 => 269,  853 => 265,  849 => 263,  843 => 260,  836 => 256,  832 => 254,  830 => 253,  826 => 252,  820 => 248,  814 => 247,  808 => 243,  802 => 241,  800 => 240,  780 => 235,  772 => 232,  764 => 231,  761 => 230,  758 => 229,  752 => 225,  746 => 223,  744 => 222,  724 => 217,  716 => 214,  708 => 213,  705 => 212,  702 => 211,  696 => 207,  690 => 205,  688 => 204,  668 => 199,  660 => 196,  652 => 195,  649 => 194,  646 => 193,  640 => 189,  634 => 187,  632 => 186,  620 => 185,  612 => 184,  607 => 182,  599 => 181,  596 => 180,  593 => 179,  587 => 175,  581 => 173,  579 => 172,  563 => 171,  556 => 169,  547 => 168,  544 => 167,  539 => 164,  533 => 162,  531 => 161,  515 => 160,  508 => 158,  500 => 157,  497 => 156,  494 => 155,  488 => 151,  482 => 149,  480 => 148,  477 => 147,  470 => 145,  464 => 142,  456 => 141,  453 => 140,  447 => 137,  439 => 136,  436 => 135,  433 => 134,  429 => 133,  424 => 131,  416 => 130,  413 => 129,  410 => 128,  404 => 124,  398 => 122,  396 => 121,  393 => 120,  386 => 118,  380 => 115,  372 => 114,  369 => 113,  363 => 110,  355 => 109,  352 => 108,  349 => 107,  345 => 106,  340 => 104,  332 => 103,  329 => 102,  326 => 101,  320 => 97,  314 => 95,  312 => 94,  309 => 93,  303 => 92,  295 => 90,  287 => 88,  284 => 87,  280 => 86,  276 => 85,  268 => 84,  261 => 82,  253 => 81,  250 => 80,  247 => 79,  243 => 78,  239 => 76,  233 => 74,  231 => 73,  225 => 70,  221 => 68,  215 => 66,  213 => 65,  210 => 64,  204 => 63,  196 => 61,  188 => 59,  185 => 58,  181 => 57,  177 => 56,  172 => 54,  168 => 52,  162 => 50,  160 => 49,  154 => 48,  150 => 47,  146 => 45,  140 => 43,  138 => 42,  132 => 41,  128 => 40,  120 => 37,  116 => 36,  112 => 34,  106 => 32,  104 => 31,  98 => 30,  94 => 29,  86 => 26,  82 => 25,  78 => 23,  72 => 21,  70 => 20,  64 => 19,  60 => 18,  56 => 16,  50 => 14,  48 => 13,  42 => 12,  38 => 11,  33 => 9,  28 => 7,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="my-account-area">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/*           <div class="col-md-9">*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <div class="form-fields">*/
/*           <h2><i class="fa fa-map-marker" aria-hidden="true"></i>{{ text_address }}</h2>*/
/*               <p class="col-md-6">*/
/*                       <label for="input-firstname">{{ entry_firstname }}<span class="required">*</span></label>*/
/*                       <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                       {% if error_firstname %}*/
/*                         <label class="text-danger">{{ error_firstname }}</label>*/
/*                       {% endif %}*/
/*               </p>*/
/*               <p class="col-md-6">*/
/*                 <label for="input-lastname">{{ entry_lastname }}<span class="required">*</span></label>*/
/*                 <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*                 {% if error_lastname %}*/
/*                   <label class="text-danger">{{ error_lastname }}</label>*/
/*                 {% endif %}*/
/*               </p>*/
/*               <p class="col-md-6">*/
/*                 <label for="input-company">{{ entry_company }}</label>*/
/*                 <input type="text" name="company" value="{{ company }}" placeholder="{{ entry_company }}" id="input-company" class="form-control" />*/
/*               </p>*/
/*               <p class="col-md-6">*/
/*                 <label for="input-address-1">{{ entry_address_1 }}<span class="required">*</span></label>*/
/*                 <input type="text" name="address_1" value="{{ address_1 }}" placeholder="{{ entry_address_1 }}" id="input-address-1" class="form-control" />*/
/*                   {% if error_address_1 %}*/
/*                   <label class="text-danger">{{ error_address_1 }}</label>*/
/*                 {% endif %}*/
/*               </p>*/
/*               <p class="col-md-6">*/
/*                 <label for="input-address-2">{{ entry_address_2 }}<span class="required">*</span></label>*/
/*                 <input type="text" name="address_2" value="{{ address_2 }}" placeholder="{{ entry_address_2 }}" id="input-address-2" class="form-control" />*/
/*               </p>*/
/*               <p class="col-md-6">*/
/*                 <label for="input-city">{{ entry_city }}<span class="required">*</span></label>*/
/*                 <input type="text" name="city" value="{{ city }}" placeholder="{{ entry_city }}" id="input-city" class="form-control" />*/
/*                   {% if error_city %}*/
/*                   <label class="text-danger">{{ error_city }}</label>*/
/*                 {% endif %}*/
/*               </p>*/
/*               <p class="col-md-6">*/
/*                 <label for="input-postcode">{{ entry_postcode }}<span class="required">*</span></label>*/
/*                 <input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode" class="form-control" />*/
/*                   {% if error_postcode %}*/
/*                   <label class="text-danger">{{ error_postcode }}</label>*/
/*                 {% endif %}*/
/*               </p>*/
/*               <p class="col-md-6 required">*/
/*                 <label for="input-country">{{ entry_country }}<span class="required">*</span></label>*/
/*                   <select name="country_id" id="input-country" class="form-control">*/
/*                     <option value="">{{ text_select }} </option>*/
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == country_id %}*/
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 {% if error_country %}*/
/*                   <label class="text-danger">{{ error_country }}</label>*/
/*                 {% endif %}*/
/*               </p>*/
/*               <p class="col-md-6 required">*/
/*                 <label for="input-zone">{{ entry_zone }}<span class="required">*</span></label>*/
/*                   <select name="zone_id" id="input-zone" class="form-control">*/
/*                   </select>*/
/*                   {% if error_zone %}*/
/*                   <label class="text-danger">{{ error_zone }}</label>*/
/*                   {% endif %}*/
/*               </p>*/
/* */
/*           {% for custom_field in custom_fields %}*/
/*           {% if custom_field.type == 'select' %}*/
/*           <p class="col-md-6 required">*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">oi{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
/*                 <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           </p>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'radio' %}*/
/*           <p class="col-md-6 required">*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">oi{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="radio"> {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
/*                   <label>*/
/*                     <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                     {{ custom_field_value.name }}*/
/*                   </label>*/
/*                   {% else %}*/
/*                   <label>*/
/*                     <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                     {{ custom_field_value.name }}*/
/*                   </label>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           </p>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'checkbox' %}*/
/*           <p class="col-md-6 required">*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">oi{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="checkbox"> {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %}*/
/*                   <label>*/
/*                     <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                     {{ custom_field_value.name }}*/
/*                   </label>*/
/*                   {% else %}*/
/*                   <label>*/
/*                     <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                     {{ custom_field_value.name }}*/
/*                   </label>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           </p>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'text' %}*/
/*           <p class="col-md-6 required">*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">4{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'textarea' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">5{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           </p>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'file' %}*/
/*           <p class="col-md-6 required">*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">6{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}  {{ address_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           </p>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'date' %}*/
/*           <p class="col-md-6 required">*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">7{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span>*/
/*               </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           </p>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'time' %}*/
/*           <p class="col-md-6 required">*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}"8>{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span>*/
/*               </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           </p>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'time' %}*/
/*           <p class="col-md-6 required">*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">9{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span>*/
/*               </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           </p>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*           */
/*         */
/*         </div>*/
/*         <div class="form-fields">*/
/*             <label class="col-sm-4 control-label">{{ entry_default }}</label>*/
/*             <div class="col-sm-8"> {% if default %}*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="default" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="default" value="0" />*/
/*                 {{ text_no }}*/
/*               </label>*/
/*               {% else %}*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="default" value="1" />*/
/*                 {{ text_yes }}*/
/*               </label>*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="default" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*               </label>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/* */
/* */
/*         <div class="form-action3">*/
/*           <div class="pull-left">*/
/*             <a href="{{ back }}" class="btn btn-default">{{ button_back }}</a>*/
/*           </div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*         */
/*       </form>*/
/*         </div>*/
/*       {{ content_bottom }}*/
/*     */
/*     {{ column_right }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   // Sort the custom fields*/
/*   $('.form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('.form-group').length-2) {*/
/*       $('.form-group').eq(parseInt($(this).attr('data-sort'))+2).before(this);*/
/*     }*/
/*     */
/*     if ($(this).attr('data-sort') > $('.form-group').length-2) {*/
/*       $('.form-group:last').after(this);*/
/*     }*/
/*     */
/*     if ($(this).attr('data-sort') == $('.form-group').length-2) {*/
/*       $('.form-group:last').after(this);*/
/*     }*/
/*     */
/*     if ($(this).attr('data-sort') < -$('.form-group').length-2) {*/
/*       $('.form-group:first').before(this);*/
/*     }*/
/*   });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/*   $('button[id^=\'button-custom-field\']').on('click', function() {*/
/*     var element = this;*/
/*     */
/*     $('#form-upload').remove();*/
/*     */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/*     */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/*     */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/*     */
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
/*               $(element).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
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
/*   $('.datetime').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: false*/
/*   });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/*   $('select[name=\'country_id\']').on('change', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=account/account/country&country_id=' + this.value,*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('select[name=\'country_id\']').prop('disabled', true);*/
/*       },*/
/*       complete: function() {*/
/*         $('select[name=\'country_id\']').prop('disabled', false);*/
/*       },*/
/*       success: function(json) {*/
/*         if (json['postcode_required'] == '1') {*/
/*           $('input[name=\'postcode\']').parent().parent().addClass('required');*/
/*         } else {*/
/*           $('input[name=\'postcode\']').parent().parent().removeClass('required');*/
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
/*           html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/*         }*/
/* */
/*         $('select[name=\'zone_id\']').html(html);*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('select[name=\'country_id\']').trigger('change');*/
/* //--></script>*/
/* {{ footer }}*/
