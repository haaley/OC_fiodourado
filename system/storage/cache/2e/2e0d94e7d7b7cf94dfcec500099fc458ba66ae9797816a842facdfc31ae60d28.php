<?php

/* __string_template__662c2c7ce1ce7d4aa2ed01527f18cfcaa6f25d6b51adcb46a9f71bca76d8a503 */
class __TwigTemplate_fb126722863bb46741f4059294003d3924e7de2532e97b412cc2fd5cd502ed09 extends Twig_Template
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
<div id=\"account-address\" class=\"container\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"col-md-9\">
          <form action=\"";
        // line 7
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
            <div class=\"form-fields\">
              <h2>";
        // line 9
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</h2>
            
                <p class=\"col-md-6\">
                        <label for=\"input-firstname\">";
        // line 12
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "<span class=\"required\">*</span></label>
                        <input type=\"text\" name=\"firstname\" value=\"";
        // line 13
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                        ";
        // line 14
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 15
            echo "                          <label class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</label>
                        ";
        }
        // line 17
        echo "                </p>
                <p class=\"col-md-6\">
                  <label for=\"input-lastname\">";
        // line 19
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "<span class=\"required\">*</span></label>
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 20
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                  ";
        // line 21
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 22
            echo "                    <label class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</label>
                  ";
        }
        // line 24
        echo "                </p>
                <p class=\"col-md-6\">
                  <label for=\"input-company\">";
        // line 26
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
                  <input type=\"text\" name=\"company\" value=\"";
        // line 27
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company\" class=\"form-control\" />
                </p>
                <p class=\"col-md-6\">
                  <label for=\"input-address-1\">";
        // line 30
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "<span class=\"required\">*</span></label>
                  <input type=\"text\" name=\"address_1\" value=\"";
        // line 31
        echo (isset($context["address_1"]) ? $context["address_1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1\" class=\"form-control\" />
                    ";
        // line 32
        if ((isset($context["error_address_1"]) ? $context["error_address_1"] : null)) {
            // line 33
            echo "                    <label class=\"text-danger\">";
            echo (isset($context["error_address_1"]) ? $context["error_address_1"] : null);
            echo "</label>
                  ";
        }
        // line 35
        echo "                </p>
                <p class=\"col-md-6\">
                  <label for=\"input-address-2\">";
        // line 37
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
                  <input type=\"text\" name=\"address_2\" value=\"";
        // line 38
        echo (isset($context["address_2"]) ? $context["address_2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2\" class=\"form-control\" />
                </p>
                <p class=\"col-md-6\">
                  <label for=\"input-city\">";
        // line 41
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "<span class=\"required\">*</span></label>
                  <input type=\"text\" name=\"city\" value=\"";
        // line 42
        echo (isset($context["city"]) ? $context["city"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city\" class=\"form-control\" />
                    ";
        // line 43
        if ((isset($context["error_city"]) ? $context["error_city"] : null)) {
            // line 44
            echo "                    <label class=\"text-danger\">";
            echo (isset($context["error_city"]) ? $context["error_city"] : null);
            echo "</label>
                  ";
        }
        // line 46
        echo "                </p>
                <p class=\"col-md-6\">
                  <label for=\"input-postcode\">";
        // line 48
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "<span class=\"required\">*</span></label>
                  <input type=\"text\" name=\"postcode\" value=\"";
        // line 49
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
                    ";
        // line 50
        if ((isset($context["error_postcode"]) ? $context["error_postcode"] : null)) {
            // line 51
            echo "                    <label class=\"text-danger\">";
            echo (isset($context["error_postcode"]) ? $context["error_postcode"] : null);
            echo "</label>
                  ";
        }
        // line 53
        echo "                </p>
                <p class=\"col-md-6\">
                  <label for=\"input-country\">";
        // line 55
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "<span class=\"required\">*</span></label>
                    <select name=\"country_id\" id=\"input-country\">
                      <option value=\"\">";
        // line 57
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo " </option>
                      ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 59
            echo "                      ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 60
                echo "                      <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 62
                echo "                      <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                      ";
            }
            // line 64
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                  </select>
                  ";
        // line 66
        if ((isset($context["error_country"]) ? $context["error_country"] : null)) {
            // line 67
            echo "                    <label class=\"text-danger\">";
            echo (isset($context["error_country"]) ? $context["error_country"] : null);
            echo "</label>
                  ";
        }
        // line 69
        echo "                </p>
                <p class=\"col-md-6\">
                  <label for=\"input-zone\">";
        // line 71
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                    <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
                    </select>
                    ";
        // line 74
        if ((isset($context["error_zone"]) ? $context["error_zone"] : null)) {
            // line 75
            echo "                    <label class=\"text-danger\">";
            echo (isset($context["error_zone"]) ? $context["error_zone"] : null);
            echo "</label>
                    ";
        }
        // line 77
        echo "                <p>


                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 81
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 82
                echo "                <div data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <p class=\"col-md-6\">
                    <label for=\"input-custom-field";
                // line 84
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">1";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                      <select name=\"custom_field[";
                // line 85
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                        <option value=\"\">";
                // line 86
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                        ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 88
                    echo "                        ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 89
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                        ";
                    } else {
                        // line 91
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                        ";
                    }
                    // line 93
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                      </select>
                    ";
                // line 95
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 96
                    echo "                    <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                    ";
                }
                // line 98
                echo "                  </p>
                </div>
                ";
            }
            // line 101
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 102
                echo "                <div data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <p class=\"col-md-6\">
                    <label>";
                // line 104
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                    
                      <div> ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 107
                    echo "                        <div class=\"radio\"> ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 108
                        echo "                          <label>
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
                        echo "                          <label>
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
                    echo "                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "                    
                    ";
                // line 121
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 122
                    echo "                    <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                    ";
                }
                // line 124
                echo "                  </p>
                </div>
                ";
            }
            // line 127
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 128
                echo "                <div data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <p class=\"col-md-6\">
                    <label>";
                // line 130
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                    
                      <div> ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 133
                    echo "                        <div class=\"checkbox\"> ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 134
                        echo "                          <label>
                            <input type=\"checkbox\" name=\"custom_field[";
                        // line 135
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />
                            ";
                        // line 136
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                          </label>
                          ";
                    } else {
                        // line 139
                        echo "                          <label>
                            <input type=\"checkbox\" name=\"custom_field[";
                        // line 140
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
                            ";
                        // line 141
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                          </label>
                          ";
                    }
                    // line 144
                    echo "                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "                      </div>
                      ";
                // line 147
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 148
                    echo "                      <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                      ";
                }
                // line 150
                echo "                  </p>
                </div>
                ";
            }
            // line 153
            echo "                
                ";
            // line 154
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 155
                echo "                <div  data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <p class=\"col-md-6\">
                    <label  for=\"input-custom-field";
                // line 157
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                    
                      <input type=\"text\" name=\"custom_field[";
                // line 159
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
                // line 160
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 161
                    echo "                      <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                      ";
                }
                // line 163
                echo "                  
                  </p> 
                </div>
                ";
            }
            // line 167
            echo "
                ";
            // line 168
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 169
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <p class=\"col-md-6\">
                    <label for=\"input-custom-field";
                // line 171
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                    <textarea name=\"custom_field[";
                // line 172
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
                // line 173
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 174
                    echo "                      <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                      ";
                }
                // line 176
                echo "                  </p>
                </div>
                ";
            }
            // line 179
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 180
                echo "                <div data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <p class=\"col-md-6\">
                    <label >";
                // line 182
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                      <button type=\"button\" id=\"button-custom-field";
                // line 183
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
                      <input type=\"hidden\" name=\"custom_field[";
                // line 184
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
                // line 185
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 186
                    echo "                      <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                      ";
                }
                // line 188
                echo "                  </p>
                </div>
                ";
            }
            // line 191
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 192
                echo "                <div data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <p class=\"col-md-6\">
                    <label for=\"input-custom-field";
                // line 194
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">8";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                      <div class=\"input-group date\">
                        <input type=\"text\" name=\"custom_field[";
                // line 196
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
                // line 201
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 202
                    echo "                      <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                      ";
                }
                // line 204
                echo "                  </p>
                </div>
                ";
            }
            // line 207
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 208
                echo "                <div data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <p class=\"col-md-6\">
                    <label for=\"input-custom-field";
                // line 210
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">9";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                      <div class=\"input-group time\">
                        <input type=\"text\" name=\"custom_field[";
                // line 212
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
                // line 217
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 218
                    echo "                      <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                      ";
                }
                // line 220
                echo "                  </p>
                </div>
                ";
            }
            // line 223
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 224
                echo "                <div data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                <p class=\"col-md-6\">
                  <label for=\"input-custom-field";
                // line 226
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                // line 228
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
                // line 233
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 234
                    echo "                    <label class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</label>
                    ";
                }
                // line 236
                echo "                  </p>
                </div>
                ";
            }
            // line 239
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "              
            </div>

            <div class=\"form-fields\">
              <label class=\"col-sm-2 control-label\">";
        // line 244
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>
              <div class=\"col-sm-10\"> ";
        // line 245
        if ((isset($context["default"]) ? $context["default"] : null)) {
            // line 246
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"default\" value=\"1\" checked=\"checked\" />
                  ";
            // line 248
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"default\" value=\"0\" />
                  ";
            // line 252
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                </label>
                ";
        } else {
            // line 255
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"default\" value=\"1\" />
                  ";
            // line 257
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"default\" value=\"0\" checked=\"checked\" />
                  ";
            // line 261
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                </label>
                ";
        }
        // line 264
        echo "              </div>
            </div>
            
            <div class=\"form-action3\">
              <div class=\"pull-left\">
                <a href=\"";
        // line 269
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a>
              </div>
              <div class=\"pull-right\">
                <input type=\"submit\" value=\"";
        // line 272
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\" />
              </div>
            </div>
          
          </form>
        </div>
        ";
        // line 278
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
      </div>
      ";
        // line 280
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
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
        // line 360
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 365
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: '";
        // line 371
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
        // line 393
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == '";
        // line 399
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\" selected=\"selected\">";
        // line 406
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
        // line 419
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__662c2c7ce1ce7d4aa2ed01527f18cfcaa6f25d6b51adcb46a9f71bca76d8a503";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1009 => 419,  993 => 406,  983 => 399,  974 => 393,  949 => 371,  940 => 365,  932 => 360,  849 => 280,  844 => 278,  835 => 272,  827 => 269,  820 => 264,  814 => 261,  807 => 257,  803 => 255,  797 => 252,  790 => 248,  786 => 246,  784 => 245,  780 => 244,  774 => 240,  768 => 239,  763 => 236,  757 => 234,  755 => 233,  735 => 228,  728 => 226,  722 => 224,  719 => 223,  714 => 220,  708 => 218,  706 => 217,  686 => 212,  679 => 210,  673 => 208,  670 => 207,  665 => 204,  659 => 202,  657 => 201,  637 => 196,  630 => 194,  624 => 192,  621 => 191,  616 => 188,  610 => 186,  608 => 185,  596 => 184,  588 => 183,  584 => 182,  578 => 180,  575 => 179,  570 => 176,  564 => 174,  562 => 173,  546 => 172,  540 => 171,  530 => 169,  528 => 168,  525 => 167,  519 => 163,  513 => 161,  511 => 160,  495 => 159,  488 => 157,  482 => 155,  480 => 154,  477 => 153,  472 => 150,  466 => 148,  464 => 147,  461 => 146,  454 => 144,  448 => 141,  440 => 140,  437 => 139,  431 => 136,  423 => 135,  420 => 134,  417 => 133,  413 => 132,  408 => 130,  402 => 128,  399 => 127,  394 => 124,  388 => 122,  386 => 121,  383 => 120,  376 => 118,  370 => 115,  362 => 114,  359 => 113,  353 => 110,  345 => 109,  342 => 108,  339 => 107,  335 => 106,  330 => 104,  324 => 102,  321 => 101,  316 => 98,  310 => 96,  308 => 95,  305 => 94,  299 => 93,  291 => 91,  283 => 89,  280 => 88,  276 => 87,  272 => 86,  264 => 85,  258 => 84,  252 => 82,  249 => 81,  245 => 80,  240 => 77,  234 => 75,  232 => 74,  226 => 71,  222 => 69,  216 => 67,  214 => 66,  211 => 65,  205 => 64,  197 => 62,  189 => 60,  186 => 59,  182 => 58,  178 => 57,  173 => 55,  169 => 53,  163 => 51,  161 => 50,  155 => 49,  151 => 48,  147 => 46,  141 => 44,  139 => 43,  133 => 42,  129 => 41,  121 => 38,  117 => 37,  113 => 35,  107 => 33,  105 => 32,  99 => 31,  95 => 30,  87 => 27,  83 => 26,  79 => 24,  73 => 22,  71 => 21,  65 => 20,  61 => 19,  57 => 17,  51 => 15,  49 => 14,  43 => 13,  39 => 12,  33 => 9,  28 => 7,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-address" class="container">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         <div class="col-md-9">*/
/*           <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*             <div class="form-fields">*/
/*               <h2>{{ text_address }}</h2>*/
/*             */
/*                 <p class="col-md-6">*/
/*                         <label for="input-firstname">{{ entry_firstname }}<span class="required">*</span></label>*/
/*                         <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                         {% if error_firstname %}*/
/*                           <label class="text-danger">{{ error_firstname }}</label>*/
/*                         {% endif %}*/
/*                 </p>*/
/*                 <p class="col-md-6">*/
/*                   <label for="input-lastname">{{ entry_lastname }}<span class="required">*</span></label>*/
/*                   <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*                   {% if error_lastname %}*/
/*                     <label class="text-danger">{{ error_lastname }}</label>*/
/*                   {% endif %}*/
/*                 </p>*/
/*                 <p class="col-md-6">*/
/*                   <label for="input-company">{{ entry_company }}</label>*/
/*                   <input type="text" name="company" value="{{ company }}" placeholder="{{ entry_company }}" id="input-company" class="form-control" />*/
/*                 </p>*/
/*                 <p class="col-md-6">*/
/*                   <label for="input-address-1">{{ entry_address_1 }}<span class="required">*</span></label>*/
/*                   <input type="text" name="address_1" value="{{ address_1 }}" placeholder="{{ entry_address_1 }}" id="input-address-1" class="form-control" />*/
/*                     {% if error_address_1 %}*/
/*                     <label class="text-danger">{{ error_address_1 }}</label>*/
/*                   {% endif %}*/
/*                 </p>*/
/*                 <p class="col-md-6">*/
/*                   <label for="input-address-2">{{ entry_address_2 }}</label>*/
/*                   <input type="text" name="address_2" value="{{ address_2 }}" placeholder="{{ entry_address_2 }}" id="input-address-2" class="form-control" />*/
/*                 </p>*/
/*                 <p class="col-md-6">*/
/*                   <label for="input-city">{{ entry_city }}<span class="required">*</span></label>*/
/*                   <input type="text" name="city" value="{{ city }}" placeholder="{{ entry_city }}" id="input-city" class="form-control" />*/
/*                     {% if error_city %}*/
/*                     <label class="text-danger">{{ error_city }}</label>*/
/*                   {% endif %}*/
/*                 </p>*/
/*                 <p class="col-md-6">*/
/*                   <label for="input-postcode">{{ entry_postcode }}<span class="required">*</span></label>*/
/*                   <input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode" class="form-control" />*/
/*                     {% if error_postcode %}*/
/*                     <label class="text-danger">{{ error_postcode }}</label>*/
/*                   {% endif %}*/
/*                 </p>*/
/*                 <p class="col-md-6">*/
/*                   <label for="input-country">{{ entry_country }}<span class="required">*</span></label>*/
/*                     <select name="country_id" id="input-country">*/
/*                       <option value="">{{ text_select }} </option>*/
/*                       {% for country in countries %}*/
/*                       {% if country.country_id == country_id %}*/
/*                       <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                   </select>*/
/*                   {% if error_country %}*/
/*                     <label class="text-danger">{{ error_country }}</label>*/
/*                   {% endif %}*/
/*                 </p>*/
/*                 <p class="col-md-6">*/
/*                   <label for="input-zone">{{ entry_zone }}</label>*/
/*                     <select name="zone_id" id="input-zone" class="form-control">*/
/*                     </select>*/
/*                     {% if error_zone %}*/
/*                     <label class="text-danger">{{ error_zone }}</label>*/
/*                     {% endif %}*/
/*                 <p>*/
/* */
/* */
/*                 {% for custom_field in custom_fields %}*/
/*                 {% if custom_field.type == 'select' %}*/
/*                 <div data-sort="{{ custom_field.sort_order }}">*/
/*                   <p class="col-md-6">*/
/*                     <label for="input-custom-field{{ custom_field.custom_field_id }}">1{{ custom_field.name }}</label>*/
/*                       <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                         <option value="">{{ text_select }}</option>*/
/*                         {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
/*                         <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </select>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                     {% endif %}*/
/*                   </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'radio' %}*/
/*                 <div data-sort="{{ custom_field.sort_order }}">*/
/*                   <p class="col-md-6">*/
/*                     <label>{{ custom_field.name }}</label>*/
/*                     */
/*                       <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="radio"> {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
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
/*                     */
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                     {% endif %}*/
/*                   </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'checkbox' %}*/
/*                 <div data-sort="{{ custom_field.sort_order }}">*/
/*                   <p class="col-md-6">*/
/*                     <label>{{ custom_field.name }}</label>*/
/*                     */
/*                       <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="checkbox"> {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %}*/
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
/*                       <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                       {% endif %}*/
/*                   </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 */
/*                 {% if custom_field.type == 'text' %}*/
/*                 <div  data-sort="{{ custom_field.sort_order }}">*/
/*                   <p class="col-md-6">*/
/*                     <label  for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                     */
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                       {% endif %}*/
/*                   */
/*                   </p> */
/*                 </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if custom_field.type == 'textarea' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <p class="col-md-6">*/
/*                     <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                     <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                       {% endif %}*/
/*                   </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'file' %}*/
/*                 <div data-sort="{{ custom_field.sort_order }}">*/
/*                   <p class="col-md-6">*/
/*                     <label >{{ custom_field.name }}</label>*/
/*                       <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                       <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}  {{ address_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                       {% endif %}*/
/*                   </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'date' %}*/
/*                 <div data-sort="{{ custom_field.sort_order }}">*/
/*                   <p class="col-md-6">*/
/*                     <label for="input-custom-field{{ custom_field.custom_field_id }}">8{{ custom_field.name }}</label>*/
/*                       <div class="input-group date">*/
/*                         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                         </span>*/
/*                       </div>*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                       {% endif %}*/
/*                   </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'time' %}*/
/*                 <div data-sort="{{ custom_field.sort_order }}">*/
/*                   <p class="col-md-6">*/
/*                     <label for="input-custom-field{{ custom_field.custom_field_id }}">9{{ custom_field.name }}</label>*/
/*                       <div class="input-group time">*/
/*                         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                         </span>*/
/*                       </div>*/
/*                       {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                       {% endif %}*/
/*                   </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'time' %}*/
/*                 <div data-sort="{{ custom_field.sort_order }}">*/
/*                 <p class="col-md-6">*/
/*                   <label for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                       </span>*/
/*                     </div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <label class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</label>*/
/*                     {% endif %}*/
/*                   </p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               */
/*             </div>*/
/* */
/*             <div class="form-fields">*/
/*               <label class="col-sm-2 control-label">{{ entry_default }}</label>*/
/*               <div class="col-sm-10"> {% if default %}*/
/*                 <label class="radio-inline">*/
/*                   <input type="radio" name="default" value="1" checked="checked" />*/
/*                   {{ text_yes }}*/
/*                 </label>*/
/*                 <label class="radio-inline">*/
/*                   <input type="radio" name="default" value="0" />*/
/*                   {{ text_no }}*/
/*                 </label>*/
/*                 {% else %}*/
/*                 <label class="radio-inline">*/
/*                   <input type="radio" name="default" value="1" />*/
/*                   {{ text_yes }}*/
/*                 </label>*/
/*                 <label class="radio-inline">*/
/*                   <input type="radio" name="default" value="0" checked="checked" />*/
/*                   {{ text_no }}*/
/*                 </label>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             */
/*             <div class="form-action3">*/
/*               <div class="pull-left">*/
/*                 <a href="{{ back }}" class="btn btn-default">{{ button_back }}</a>*/
/*               </div>*/
/*               <div class="pull-right">*/
/*                 <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*               </div>*/
/*             </div>*/
/*           */
/*           </form>*/
/*         </div>*/
/*         {{ content_bottom }}*/
/*       </div>*/
/*       {{ column_right }}*/
/*     </div>*/
/*   </div>*/
/*   </div>*/
/* */
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
