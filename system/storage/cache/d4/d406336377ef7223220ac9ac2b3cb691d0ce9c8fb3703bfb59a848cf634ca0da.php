<?php

/* default/template/checkout/cart.twig */
class __TwigTemplate_857b016fcc170397a4ac3ab36e3e45a5114edd0b84f4166560bffb324cfa6ec4 extends Twig_Template
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
<div class=\"container\" id=\"checkout-cart\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li>
                <a href=\"";
            // line 6
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
    ";
        // line 10
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 11
            echo "        <div class=\"alert alert-info\">
            <i class=\"fa fa-info-circle\"></i>
            ";
            // line 13
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
            <button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>
        </div>
    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
        <h1>";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "
            ";
        // line 19
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
            // line 20
            echo "                &nbsp;
            ";
        }
        // line 22
        echo "        </h1>
        <form action=\"";
        // line 23
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <td class=\"text-center\">";
        // line 28
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 29
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 30
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 31
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 32
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 33
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 38
            echo "                            <tr>
                                <td class=\"text-center\">
                                    ";
            // line 40
            if ($this->getAttribute($context["product"], "thumb", array())) {
                // line 41
                echo "                                        <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\"/></a>
                                    ";
            }
            // line 43
            echo "                                </td>
                                <td class=\"text-left\">
                                    <a href=\"";
            // line 45
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a>
                                    ";
            // line 46
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                // line 47
                echo "                                        <span class=\"text-danger\">***</span>
                                    ";
            }
            // line 49
            echo "                                    ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 50
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 51
                    echo "                                            <br/>
                                            <small>";
                    // line 52
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ":
                                                ";
                    // line 53
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                                    ";
            }
            // line 56
            echo "                                    ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                // line 57
                echo "                                        <br/>
                                        <small>";
                // line 58
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small>
                                    ";
            }
            // line 60
            echo "                                    ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                // line 61
                echo "                                        <br/>
                                        <span class=\"label label-info\">";
                // line 62
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span>
                                        <small>";
                // line 63
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small>
                                    ";
            }
            // line 65
            echo "                                </td>
                                <td class=\"text-left\">";
            // line 66
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
                                <td class=\"text-left\">
                                    <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                        <input type=\"text\" name=\"quantity[";
            // line 69
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                                            <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 71
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-refresh\"></i>
                                            </button>
                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 74
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\">
                                                <i class=\"fa fa-times-circle\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td class=\"text-right\">";
            // line 80
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
                                <td class=\"text-right\">";
            // line 81
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 85
            echo "                            <tr>
                                <td></td>
                                <td class=\"text-left\">";
            // line 87
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
                                <td class=\"text-left\"></td>
                                <td class=\"text-left\">
                                    <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                        <input class=\"form-control\" disabled=\"disabled\" name=\"\" size=\"1\" type=\"text\" value=\"1\"/>
                                        <span class=\"input-group-btn\">
                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 93
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\">
                                                <i class=\"fa fa-times-circle\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td class=\"text-right\">";
            // line 99
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                                <td class=\"text-right\">";
            // line 100
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                    </tbody>
                </table>
                ";
        // line 105
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 106
            echo "                    <div class=\"alert alert-success alert-dismissible\">
                        <i class=\"fa fa-check-circle\"></i>
                        ";
            // line 108
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                        <button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>
                    </div>
                ";
        }
        // line 112
        echo "                ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 113
            echo "                    <div class=\"alert alert-danger alert-dismissible\">
                        <i class=\"fa fa-exclamation-circle\"></i>
                        ";
            // line 115
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                        <button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>
                    </div>
                </div>
                <divclass=\"buttonsclearfix\">
                    <divclass=\"gggg\">
                        <divclass=\"pull-left\">
                            <ahref=\"";
            // line 122
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\"class=\"btnbtn-default\">";
            echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
            echo "</a>
                        </div>
                        <divclass=\"pull-right\">
                            <ahref=\"";
            // line 125
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\"class=\"btnbtn-primary\">";
            echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
            echo "</a>
                        </div>
                    </div>
                </div>
                ";
            // line 129
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "</div>
            ";
            // line 130
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "</div>=======<divclass=\"row\">";
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "<divid=\"content\"class=\"";
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">";
            echo (isset($context["content_top"]) ? $context["content_top"] : null);
            echo "<h1>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "&nbsp;(";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo ")</h1>
                <formaction=\"";
            // line 131
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\"method=\"post\"enctype=\"multipart/form-data\">
                    <divclass=\"table-responsive\">
                        <tableclass=\"tabletable-bordered\">
                            <thead>
                                <tr>
                                    <tdclass=\"text-center\">";
            // line 136
            echo (isset($context["column_image"]) ? $context["column_image"] : null);
            echo "</td>
                                    <tdclass=\"text-left\">";
            // line 137
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>
                                    <tdclass=\"text-left\">";
            // line 138
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</td>
                                    <tdclass=\"text-left\">";
            // line 139
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</td>
                                    <tdclass=\"text-right\">";
            // line 140
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</td>
                                    <tdclass=\"text-right\">";
            // line 141
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <tdclass=\"text-center\">
                                        <ahref=\"";
            // line 147
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
            echo "\"><imgsrc=\"";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
            echo "\"alt=\"";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
            echo "\"title=\"";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
            echo "\"class=\"img-thumbnail\"/></a>
                                    </td>
                                    <tdclass=\"text-left\">
                                        <ahref=\"";
            // line 150
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
            echo "\">";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
            echo "</a>
                                        <spanclass=\"text-danger\">***</span><br/><small>";
            // line 151
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "name", array());
            echo ":";
            echo $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value", array());
            echo "</small><br/><small>";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "reward", array());
            echo "</small><br/><spanclass=\"labellabel-info\">";
            echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
            echo "</span>
                                        <small>";
            // line 152
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "recurring", array());
            echo "</small>
                                    </td>
                                    <tdclass=\"text-left\">";
            // line 154
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "model", array());
            echo "</td>
                                    <tdclass=\"text-left\">
                                        <divclass=\"input-groupbtn-block\"style=\"max-width:200px;\"><inputtype=\"text\"name=\"quantity[";
            // line 156
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "cart_id", array());
            echo "]\"value=\"";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity", array());
            echo "\"size=\"1\"class=\"form-control\"/><spanclass=\"input-group-btn\">
                                                <buttontype=\"submit\"data-toggle=\"tooltip\"title=\"";
            // line 157
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\"class=\"btnbtn-primary\">
                                                    <iclass=\"fafa-refresh\"></i>
                                                </button>
                                                <buttontype=\"button\"data-toggle=\"tooltip\"title=\"";
            // line 160
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\"class=\"btnbtn-danger\"onclick=\"cart.remove('";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "cart_id", array());
            echo "');\">
                                                    <iclass=\"fafa-times-circle\"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </td>
                                    <tdclass=\"text-right\">";
            // line 166
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array());
            echo "</td>
                                    <tdclass=\"text-right\">";
            // line 167
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "total", array());
            echo "</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <tdclass=\"text-left\">";
            // line 171
            echo $this->getAttribute((isset($context["voucher"]) ? $context["voucher"] : null), "description", array());
            echo "</td>
                                    <tdclass=\"text-left\"></td>
                                    <tdclass=\"text-left\">
                                        <divclass=\"input-groupbtn-block\"style=\"max-width:200px;\"><inputclass=\"form-control\"disabled=\"disabled\"name=\"\"size=\"1\"type=\"text\"value=\"1\"/><spanclass=\"input-group-btn\">
                                                <buttontype=\"button\"data-toggle=\"tooltip\"title=\"";
            // line 175
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\"class=\"btnbtn-danger\"onclick=\"voucher.remove('";
            echo $this->getAttribute((isset($context["voucher"]) ? $context["voucher"] : null), "key", array());
            echo "');\">
                                                    <iclass=\"fafa-times-circle\"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </td>
                                    <tdclass=\"text-right\">";
            // line 181
            echo $this->getAttribute((isset($context["voucher"]) ? $context["voucher"] : null), "amount", array());
            echo "</td>
                                    <tdclass=\"text-right\">";
            // line 182
            echo $this->getAttribute((isset($context["voucher"]) ? $context["voucher"] : null), "amount", array());
            echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
                <h2>";
            // line 188
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</h2>
                <p>";
            // line 189
            echo (isset($context["text_next_choice"]) ? $context["text_next_choice"] : null);
            echo "</p>
                <divclass=\"panel-group\"id=\"accordion\">";
            // line 190
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "</div><br/><divclass=\"row\">
                    <divclass=\"col-sm-4col-sm-offset-8\">
                        <tableclass=\"tabletable-bordered\">
                            <tr>
                                <tdclass=\"text-right\">
                                    <strong>";
            // line 195
            echo $this->getAttribute((isset($context["total"]) ? $context["total"] : null), "title", array());
            echo ":</strong>
                                </td>
                                <tdclass=\"text-right\">";
            // line 197
            echo $this->getAttribute((isset($context["total"]) ? $context["total"] : null), "text", array());
            echo "</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <divclass=\"buttonsclearfix\">
                    <divclass=\"pull-left\">
                        <ahref=\"";
            // line 204
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\"class=\"btnbtn-default\">";
            echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
            echo "</a>
                    </div>
                    <divclass=\"pull-right\">
                        <ahref=\"";
            // line 207
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\"class=\"btnbtn-primary\">";
            echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
            echo "</a>
                    </div>
                </div>
                ";
            // line 210
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "</div>
            ";
            // line 211
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "</div>>>
    ";
        }
        // line 213
        echo "    ";
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 214
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 215
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 216
            echo "        ";
            $context["class"] = "col-sm-9";
            // line 217
            echo "    ";
        } else {
            // line 218
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 219
            echo "    ";
        }
        // line 220
        echo "    ";
        if ((isset($context["weight"]) ? $context["weight"] : null)) {
        }
        // line 221
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 222
            echo "        ";
            if ($this->getAttribute($context["product"], "thumb", array())) {
            }
            // line 223
            echo "        ";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
            }
            // line 224
            echo "        ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 225
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 226
                echo "        ";
            }
            // line 227
            echo "        ";
            if ($this->getAttribute($context["product"], "reward", array())) {
            }
            // line 228
            echo "        ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
            }
            // line 229
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "    ";
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 232
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "    ";
        }
        // line 234
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">>>>> 936cec9118035a16959d65b3c3f910c65c7af937
</div>
";
        // line 236
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  660 => 236,  648 => 234,  645 => 233,  636 => 232,  633 => 231,  624 => 230,  618 => 229,  614 => 228,  610 => 227,  607 => 226,  598 => 225,  595 => 224,  591 => 223,  587 => 222,  582 => 221,  578 => 220,  575 => 219,  572 => 218,  569 => 217,  566 => 216,  563 => 215,  560 => 214,  557 => 213,  552 => 211,  548 => 210,  540 => 207,  532 => 204,  522 => 197,  517 => 195,  509 => 190,  505 => 189,  501 => 188,  492 => 182,  488 => 181,  477 => 175,  470 => 171,  463 => 167,  459 => 166,  448 => 160,  442 => 157,  436 => 156,  431 => 154,  426 => 152,  416 => 151,  410 => 150,  398 => 147,  389 => 141,  385 => 140,  381 => 139,  377 => 138,  373 => 137,  369 => 136,  361 => 131,  347 => 130,  343 => 129,  334 => 125,  326 => 122,  316 => 115,  312 => 113,  309 => 112,  302 => 108,  298 => 106,  296 => 105,  292 => 103,  283 => 100,  279 => 99,  268 => 93,  259 => 87,  255 => 85,  250 => 84,  241 => 81,  237 => 80,  226 => 74,  220 => 71,  213 => 69,  207 => 66,  204 => 65,  199 => 63,  195 => 62,  192 => 61,  189 => 60,  184 => 58,  181 => 57,  178 => 56,  175 => 55,  167 => 53,  163 => 52,  160 => 51,  155 => 50,  152 => 49,  148 => 47,  146 => 46,  140 => 45,  136 => 43,  124 => 41,  122 => 40,  118 => 38,  114 => 37,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  79 => 23,  76 => 22,  72 => 20,  70 => 19,  66 => 18,  59 => 17,  52 => 13,  48 => 11,  46 => 10,  43 => 9,  32 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container" id="checkout-cart">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li>*/
/*                 <a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     {% if attention %}*/
/*         <div class="alert alert-info">*/
/*             <i class="fa fa-info-circle"></i>*/
/*             {{ attention }}*/
/*             <button class="close" data-dismiss="alert" type="button">&times;</button>*/
/*         </div>*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*         <h1>{{ heading_title }}*/
/*             {% if weight %}*/
/*                 &nbsp;*/
/*             {% endif %}*/
/*         </h1>*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-bordered">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <td class="text-center">{{ column_image }}</td>*/
/*                             <td class="text-left">{{ column_name }}</td>*/
/*                             <td class="text-left">{{ column_model }}</td>*/
/*                             <td class="text-left">{{ column_quantity }}</td>*/
/*                             <td class="text-right">{{ column_price }}</td>*/
/*                             <td class="text-right">{{ column_total }}</td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for product in products %}*/
/*                             <tr>*/
/*                                 <td class="text-center">*/
/*                                     {% if product.thumb %}*/
/*                                         <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail"/></a>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td class="text-left">*/
/*                                     <a href="{{ product.href }}">{{ product.name }}</a>*/
/*                                     {% if not product.stock %}*/
/*                                         <span class="text-danger">***</span>*/
/*                                     {% endif %}*/
/*                                     {% if product.option %}*/
/*                                         {% for option in product.option %}*/
/*                                             <br/>*/
/*                                             <small>{{ option.name }}:*/
/*                                                 {{ option.value }}</small>*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                     {% if product.reward %}*/
/*                                         <br/>*/
/*                                         <small>{{ product.reward }}</small>*/
/*                                     {% endif %}*/
/*                                     {% if product.recurring %}*/
/*                                         <br/>*/
/*                                         <span class="label label-info">{{ text_recurring_item }}</span>*/
/*                                         <small>{{ product.recurring }}</small>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td class="text-left">{{ product.model }}</td>*/
/*                                 <td class="text-left">*/
/*                                     <div class="input-group btn-block" style="max-width: 200px;">*/
/*                                         <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control"/>*/
/*                                         <span class="input-group-btn">*/
/*                                             <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary">*/
/*                                                 <i class="fa fa-refresh"></i>*/
/*                                             </button>*/
/*                                             <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="cart.remove('{{ product.cart_id }}');">*/
/*                                                 <i class="fa fa-times-circle"></i>*/
/*                                             </button>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </td>*/
/*                                 <td class="text-right">{{ product.price }}</td>*/
/*                                 <td class="text-right">{{ product.total }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         {% for voucher in vouchers %}*/
/*                             <tr>*/
/*                                 <td></td>*/
/*                                 <td class="text-left">{{ voucher.description }}</td>*/
/*                                 <td class="text-left"></td>*/
/*                                 <td class="text-left">*/
/*                                     <div class="input-group btn-block" style="max-width: 200px;">*/
/*                                         <input class="form-control" disabled="disabled" name="" size="1" type="text" value="1"/>*/
/*                                         <span class="input-group-btn">*/
/*                                             <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="voucher.remove('{{ voucher.key }}');">*/
/*                                                 <i class="fa fa-times-circle"></i>*/
/*                                             </button>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </td>*/
/*                                 <td class="text-right">{{ voucher.amount }}</td>*/
/*                                 <td class="text-right">{{ voucher.amount }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                 {% if success %}*/
/*                     <div class="alert alert-success alert-dismissible">*/
/*                         <i class="fa fa-check-circle"></i>*/
/*                         {{ success }}*/
/*                         <button class="close" data-dismiss="alert" type="button">&times;</button>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if error_warning %}*/
/*                     <div class="alert alert-danger alert-dismissible">*/
/*                         <i class="fa fa-exclamation-circle"></i>*/
/*                         {{ error_warning }}*/
/*                         <button class="close" data-dismiss="alert" type="button">&times;</button>*/
/*                     </div>*/
/*                 </div>*/
/*                 <divclass="buttonsclearfix">*/
/*                     <divclass="gggg">*/
/*                         <divclass="pull-left">*/
/*                             <ahref="{{continue}}"class="btnbtn-default">{{button_shopping}}</a>*/
/*                         </div>*/
/*                         <divclass="pull-right">*/
/*                             <ahref="{{checkout}}"class="btnbtn-primary">{{button_checkout}}</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {{content_bottom}}</div>*/
/*             {{column_right}}</div>=======<divclass="row">{{column_left}}<divid="content"class="{{class}}">{{content_top}}<h1>{{heading_title}}&nbsp;({{weight}})</h1>*/
/*                 <formaction="{{action}}"method="post"enctype="multipart/form-data">*/
/*                     <divclass="table-responsive">*/
/*                         <tableclass="tabletable-bordered">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <tdclass="text-center">{{column_image}}</td>*/
/*                                     <tdclass="text-left">{{column_name}}</td>*/
/*                                     <tdclass="text-left">{{column_model}}</td>*/
/*                                     <tdclass="text-left">{{column_quantity}}</td>*/
/*                                     <tdclass="text-right">{{column_price}}</td>*/
/*                                     <tdclass="text-right">{{column_total}}</td>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <tdclass="text-center">*/
/*                                         <ahref="{{product.href}}"><imgsrc="{{product.thumb}}"alt="{{product.name}}"title="{{product.name}}"class="img-thumbnail"/></a>*/
/*                                     </td>*/
/*                                     <tdclass="text-left">*/
/*                                         <ahref="{{product.href}}">{{product.name}}</a>*/
/*                                         <spanclass="text-danger">***</span><br/><small>{{option.name}}:{{option.value}}</small><br/><small>{{product.reward}}</small><br/><spanclass="labellabel-info">{{text_recurring_item}}</span>*/
/*                                         <small>{{product.recurring}}</small>*/
/*                                     </td>*/
/*                                     <tdclass="text-left">{{product.model}}</td>*/
/*                                     <tdclass="text-left">*/
/*                                         <divclass="input-groupbtn-block"style="max-width:200px;"><inputtype="text"name="quantity[{{product.cart_id}}]"value="{{product.quantity}}"size="1"class="form-control"/><spanclass="input-group-btn">*/
/*                                                 <buttontype="submit"data-toggle="tooltip"title="{{button_update}}"class="btnbtn-primary">*/
/*                                                     <iclass="fafa-refresh"></i>*/
/*                                                 </button>*/
/*                                                 <buttontype="button"data-toggle="tooltip"title="{{button_remove}}"class="btnbtn-danger"onclick="cart.remove('{{product.cart_id}}');">*/
/*                                                     <iclass="fafa-times-circle"></i>*/
/*                                                 </button>*/
/*                                             </span>*/
/*                                         </div>*/
/*                                     </td>*/
/*                                     <tdclass="text-right">{{product.price}}</td>*/
/*                                     <tdclass="text-right">{{product.total}}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <td></td>*/
/*                                     <tdclass="text-left">{{voucher.description}}</td>*/
/*                                     <tdclass="text-left"></td>*/
/*                                     <tdclass="text-left">*/
/*                                         <divclass="input-groupbtn-block"style="max-width:200px;"><inputclass="form-control"disabled="disabled"name=""size="1"type="text"value="1"/><spanclass="input-group-btn">*/
/*                                                 <buttontype="button"data-toggle="tooltip"title="{{button_remove}}"class="btnbtn-danger"onclick="voucher.remove('{{voucher.key}}');">*/
/*                                                     <iclass="fafa-times-circle"></i>*/
/*                                                 </button>*/
/*                                             </span>*/
/*                                         </div>*/
/*                                     </td>*/
/*                                     <tdclass="text-right">{{voucher.amount}}</td>*/
/*                                     <tdclass="text-right">{{voucher.amount}}</td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </form>*/
/*                 <h2>{{text_next}}</h2>*/
/*                 <p>{{text_next_choice}}</p>*/
/*                 <divclass="panel-group"id="accordion">{{module}}</div><br/><divclass="row">*/
/*                     <divclass="col-sm-4col-sm-offset-8">*/
/*                         <tableclass="tabletable-bordered">*/
/*                             <tr>*/
/*                                 <tdclass="text-right">*/
/*                                     <strong>{{total.title}}:</strong>*/
/*                                 </td>*/
/*                                 <tdclass="text-right">{{total.text}}</td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*                 <divclass="buttonsclearfix">*/
/*                     <divclass="pull-left">*/
/*                         <ahref="{{continue}}"class="btnbtn-default">{{button_shopping}}</a>*/
/*                     </div>*/
/*                     <divclass="pull-right">*/
/*                         <ahref="{{checkout}}"class="btnbtn-primary">{{button_checkout}}</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 {{content_bottom}}</div>*/
/*             {{column_right}}</div>>>*/
/*     {% endif %}*/
/*     {% if column_left and column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*         {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*         {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     {% if weight %}{% endif %}*/
/*     {% for product in products %}*/
/*         {% if product.thumb %}{% endif %}*/
/*         {% if not product.stock %}{% endif %}*/
/*         {% if product.option %}*/
/*             {% for option in product.option %}{% endfor %}*/
/*         {% endif %}*/
/*         {% if product.reward %}{% endif %}*/
/*         {% if product.recurring %}{% endif %}*/
/*     {% endfor %}*/
/*     {% for voucher in vouchers %}{% endfor %}*/
/*     {% if modules %}*/
/*         {% for module in modules %}{% endfor %}*/
/*     {% endif %}*/
/*     {% for total in totals %}{% endfor %}>>>>> 936cec9118035a16959d65b3c3f910c65c7af937*/
/* </div>*/
/* {{ footer }}*/
/* */
