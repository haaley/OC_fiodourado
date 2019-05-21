<?php

/* default/template/checkout/guest.twig */
class __TwigTemplate_2465fb3651392a34b31b34d0f03aa35503dd19fbcacea0d893db607886e539c6 extends Twig_Template
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
        <input type=\"text\" name=\"firstname\" value=\"";
        // line 27
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 30
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
        <input type=\"text\" name=\"lastname\" value=\"";
        // line 31
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-email\">";
        // line 34
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"";
        // line 35
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-payment-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-telephone\">";
        // line 38
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
        <input type=\"text\" name=\"telephone\" value=\"";
        // line 39
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
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
                        echo "          ";
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 50
                            echo "          <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
          ";
                        } else {
                            // line 52
                            echo "          <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
          ";
                        }
                        // line 54
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "        </select>
      </div>
      ";
                }
                // line 58
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 59
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 60
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 61
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
          ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 63
                        echo "          <div class=\"radio\"> ";
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 64
                            echo "            <label>
              <input type=\"radio\" name=\"custom_field[";
                            // line 65
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
              ";
                            // line 66
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
            </label>
            ";
                        } else {
                            // line 69
                            echo "            <label>
              <input type=\"radio\" name=\"custom_field[";
                            // line 70
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
              ";
                            // line 71
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "
            </label>
            ";
                        }
                        // line 74
                        echo "          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "        </div>
      </div>
      ";
                }
                // line 79
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 80
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 81
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 82
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
          ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 84
                        echo "          <div class=\"checkbox\"> ";
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 85
                            echo "            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                            // line 86
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
              ";
                            // line 87
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
            ";
                        } else {
                            // line 89
                            echo "            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                            // line 90
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
              ";
                            // line 91
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
            ";
                        }
                        // line 93
                        echo "          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "        </div>
      </div>
      ";
                }
                // line 98
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 99
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 100
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 101
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 104
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 105
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 106
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 107
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "</textarea>
      </div>
      ";
                }
                // line 110
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 111
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 112
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 114
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 115
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    }
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
      </div>
      ";
                }
                // line 118
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 119
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 120
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 122
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
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
                // line 129
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 130
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 131
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 133
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
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
                // line 140
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 141
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 142
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 144
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
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
                // line 151
                echo "      ";
            }
            // line 152
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 157
        echo (isset($context["text_your_address"]) ? $context["text_your_address"] : null);
        echo "</legend>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-company\">";
        // line 159
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
        <input type=\"text\" name=\"company\" value=\"";
        // line 160
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-address-1\">";
        // line 163
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
        <input type=\"text\" name=\"address_1\" value=\"";
        // line 164
        echo (isset($context["address_1"]) ? $context["address_1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-address-2\">";
        // line 167
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
        <input type=\"text\" name=\"address_2\" value=\"";
        // line 168
        echo (isset($context["address_2"]) ? $context["address_2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-city\">";
        // line 171
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
        <input type=\"text\" name=\"city\" value=\"";
        // line 172
        echo (isset($context["city"]) ? $context["city"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-payment-city\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-postcode\">";
        // line 175
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 176
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-country\">";
        // line 179
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 181
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
          ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 183
            echo "          ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 184
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          ";
            } else {
                // line 186
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          ";
            }
            // line 188
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "        </select>
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-zone\">";
        // line 192
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
      ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 197
            echo "      ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 198
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 199
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 200
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <select name=\"custom_field[";
                    // line 201
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 202
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
          ";
                    // line 203
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 204
                        echo "          ";
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 205
                            echo "          <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
          ";
                        } else {
                            // line 207
                            echo "          <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
          ";
                        }
                        // line 209
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 210
                    echo "        </select>
      </div>
      ";
                }
                // line 213
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 214
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 215
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 216
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
          ";
                    // line 217
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 218
                        echo "          <div class=\"radio\"> ";
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 219
                            echo "            <label>
              <input type=\"radio\" name=\"custom_field[";
                            // line 220
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
              ";
                            // line 221
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
            ";
                        } else {
                            // line 223
                            echo "            <label>
              <input type=\"radio\" name=\"custom_field[";
                            // line 224
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
              ";
                            // line 225
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
            ";
                        }
                        // line 227
                        echo "          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 229
                    echo "        </div>
      </div>
      ";
                }
                // line 232
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 233
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 234
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 235
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
          ";
                    // line 236
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 237
                        echo "          <div class=\"checkbox\"> ";
                        if (($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 238
                            echo "            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                            // line 239
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
              ";
                            // line 240
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
            ";
                        } else {
                            // line 242
                            echo "            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                            // line 243
                            echo $this->getAttribute($context["custom_field"], "location", array());
                            echo "][";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
              ";
                            // line 244
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
            ";
                        }
                        // line 246
                        echo "          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 248
                    echo "        </div>
      </div>
      ";
                }
                // line 251
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
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
        <input type=\"text\" name=\"custom_field[";
                    // line 254
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 257
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 258
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 259
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 260
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
                    echo "</textarea>
      </div>
      ";
                }
                // line 263
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 264
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 265
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 267
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 268
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    }
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
      </div>
      ";
                }
                // line 271
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 272
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 273
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 275
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
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
                // line 282
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 283
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 284
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 286
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
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
                // line 293
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 294
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 295
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 297
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    if ($this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        echo $this->getAttribute((isset($context["guest_custom_field"]) ? $context["guest_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    } else {
                        echo $this->getAttribute($context["custom_field"], "value", array());
                    }
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
                // line 304
                echo "      ";
            }
            // line 305
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "    </fieldset>
    ";
        // line 307
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
  </div>
</div>
";
        // line 310
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 311
            echo "<div class=\"checkbox\">
  <label>
    ";
            // line 313
            if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
                // line 314
                echo "    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" />
    ";
            } else {
                // line 316
                echo "    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" />
    ";
            }
            // line 318
            echo "    ";
            echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
            echo "
  </label>
</div>
";
        }
        // line 322
        echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 324
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-guest\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
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
          } else {
            \$('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');
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
            \$(node).parent().find('.text-danger').remove();

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
        // line 448
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });

  \$('.time').datetimepicker({
    language: '";
        // line 453
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 458
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
          \$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().addClass('required');
        } else {
          \$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 481
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == '";
        // line 487
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\" selected=\"selected\">";
        // line 494
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
        return "default/template/checkout/guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1360 => 494,  1350 => 487,  1341 => 481,  1315 => 458,  1307 => 453,  1299 => 448,  1170 => 324,  1166 => 322,  1158 => 318,  1154 => 316,  1150 => 314,  1148 => 313,  1144 => 311,  1142 => 310,  1136 => 307,  1133 => 306,  1127 => 305,  1124 => 304,  1102 => 297,  1095 => 295,  1088 => 294,  1085 => 293,  1063 => 286,  1056 => 284,  1049 => 283,  1046 => 282,  1024 => 275,  1017 => 273,  1010 => 272,  1007 => 271,  993 => 268,  985 => 267,  980 => 265,  973 => 264,  970 => 263,  952 => 260,  946 => 259,  939 => 258,  936 => 257,  918 => 254,  912 => 253,  905 => 252,  902 => 251,  897 => 248,  890 => 246,  885 => 244,  877 => 243,  874 => 242,  869 => 240,  861 => 239,  858 => 238,  855 => 237,  851 => 236,  847 => 235,  843 => 234,  836 => 233,  833 => 232,  828 => 229,  821 => 227,  816 => 225,  808 => 224,  805 => 223,  800 => 221,  792 => 220,  789 => 219,  786 => 218,  782 => 217,  778 => 216,  774 => 215,  767 => 214,  764 => 213,  759 => 210,  753 => 209,  745 => 207,  737 => 205,  734 => 204,  730 => 203,  726 => 202,  718 => 201,  712 => 200,  705 => 199,  702 => 198,  699 => 197,  695 => 196,  688 => 192,  683 => 189,  677 => 188,  669 => 186,  661 => 184,  658 => 183,  654 => 182,  650 => 181,  645 => 179,  637 => 176,  633 => 175,  625 => 172,  621 => 171,  613 => 168,  609 => 167,  601 => 164,  597 => 163,  589 => 160,  585 => 159,  580 => 157,  574 => 153,  568 => 152,  565 => 151,  543 => 144,  536 => 142,  529 => 141,  526 => 140,  504 => 133,  497 => 131,  490 => 130,  487 => 129,  465 => 122,  458 => 120,  451 => 119,  448 => 118,  434 => 115,  426 => 114,  421 => 112,  414 => 111,  411 => 110,  393 => 107,  387 => 106,  380 => 105,  377 => 104,  359 => 101,  353 => 100,  346 => 99,  343 => 98,  338 => 95,  331 => 93,  326 => 91,  318 => 90,  315 => 89,  310 => 87,  302 => 86,  299 => 85,  296 => 84,  292 => 83,  288 => 82,  284 => 81,  277 => 80,  274 => 79,  269 => 76,  262 => 74,  256 => 71,  248 => 70,  245 => 69,  239 => 66,  231 => 65,  228 => 64,  225 => 63,  221 => 62,  217 => 61,  213 => 60,  206 => 59,  203 => 58,  198 => 55,  192 => 54,  184 => 52,  176 => 50,  173 => 49,  169 => 48,  165 => 47,  157 => 46,  151 => 45,  144 => 44,  141 => 43,  138 => 42,  134 => 41,  127 => 39,  123 => 38,  115 => 35,  111 => 34,  103 => 31,  99 => 30,  91 => 27,  87 => 26,  83 => 24,  77 => 23,  70 => 19,  66 => 18,  62 => 16,  55 => 12,  51 => 11,  47 => 9,  44 => 8,  40 => 7,  36 => 6,  28 => 5,  24 => 4,  19 => 1,);
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
/*         <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-payment-firstname" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/*         <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-payment-lastname" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-email">{{ entry_email }}</label>*/
/*         <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-payment-email" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-telephone">{{ entry_telephone }}</label>*/
/*         <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-payment-telephone" class="form-control" />*/
/*       </div>*/
/*       {% for custom_field in custom_fields %}*/
/*       {% if custom_field.location == 'account' %}*/
/*       {% if custom_field.type == 'select' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           {% if guest_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == guest_custom_field[custom_field.custom_field_id] %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*           {% else %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'radio' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="radio"> {% if guest_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == guest_custom_field[custom_field.custom_field_id] %}*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*               {{ custom_field_value.name }}*/
/*             </label>*/
/*             {% else %}*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}*/
/*             </label>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'checkbox' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="checkbox"> {% if guest_custom_field[custom_field.custom_field_id] and  custom_field_value.custom_field_value_id in guest_custom_field[custom_field.custom_field_id] %}*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*               {{ custom_field_value.name }}</label>*/
/*             {% else %}*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'text' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'textarea' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'file' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <br />*/
/*         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% endif %}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'date' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group date">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
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
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
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
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </fieldset>*/
/*   </div>*/
/*   <div class="col-sm-6">*/
/*     <fieldset id="address">*/
/*       <legend>{{ text_your_address }}</legend>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-payment-company">{{ entry_company }}</label>*/
/*         <input type="text" name="company" value="{{ company }}" placeholder="{{ entry_company }}" id="input-payment-company" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-address-1">{{ entry_address_1 }}</label>*/
/*         <input type="text" name="address_1" value="{{ address_1 }}" placeholder="{{ entry_address_1 }}" id="input-payment-address-1" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-payment-address-2">{{ entry_address_2 }}</label>*/
/*         <input type="text" name="address_2" value="{{ address_2 }}" placeholder="{{ entry_address_2 }}" id="input-payment-address-2" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-city">{{ entry_city }}</label>*/
/*         <input type="text" name="city" value="{{ city }}" placeholder="{{ entry_city }}" id="input-payment-city" class="form-control" />*/
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
/*           {% if guest_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == guest_custom_field[custom_field.custom_field_id] %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*           {% else %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'radio' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="radio"> {% if guest_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == guest_custom_field[custom_field.custom_field_id] %}*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*               {{ custom_field_value.name }}</label>*/
/*             {% else %}*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'checkbox' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="checkbox"> {% if guest_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in guest_custom_field[custom_field.custom_field_id] %}*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*               {{ custom_field_value.name }}</label>*/
/*             {% else %}*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'text' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'textarea' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'file' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <br />*/
/*         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% endif %}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'date' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group date">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
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
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
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
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if guest_custom_field[custom_field.custom_field_id] %}{{ guest_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
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
/* {% if shipping_required %}*/
/* <div class="checkbox">*/
/*   <label>*/
/*     {% if shipping_address %}*/
/*     <input type="checkbox" name="shipping_address" value="1" checked="checked" />*/
/*     {% else %}*/
/*     <input type="checkbox" name="shipping_address" value="1" />*/
/*     {% endif %}*/
/*     {{ entry_shipping }}*/
/*   </label>*/
/* </div>*/
/* {% endif %}*/
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_continue }}" id="button-guest" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
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
/*           } else {*/
/*             $('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');*/
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
/*             $(node).parent().find('.text-danger').remove();*/
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
/* //--></script>*/
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
/*           $('#collapse-payment-address input[name=\'postcode\']').parent().parent().addClass('required');*/
/*         } else {*/
/*           $('#collapse-payment-address input[name=\'postcode\']').parent().parent().removeClass('required');*/
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
