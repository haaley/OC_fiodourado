<?php

/* __string_template__ad9efc8999d76245dbc2f0cf9dc332a5b2ee824b93dfe532094672db3a765a4f */
class __TwigTemplate_df88a5ae0cac05b810a7aff39ad0d3a515389769b9edbb2f1b8f94468cefc7aa extends Twig_Template
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
        // line 52
        echo "

<div class=\"cart-total\" id=\"cart\">
    <ul>
        ";
        // line 56
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 57
            echo "
            <li>
                <a href=\"";
            // line 59
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">
                    <span class=\"cart-icon\">
                        <i class=\"fa fa-shopping-cart\"></i>
                    </span>
                    <span class=\"cart-no\">";
            // line 63
            echo (isset($context["text_items"]) ? $context["text_items"] : null);
            echo "</span>
                </a>
                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 66
                echo "                    <div class=\"mini-cart-content\">
                        <div class=\"cart-img-details\">
                            <div class=\"cart-img-photo\">
                                <a href=\"";
                // line 69
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/></a>
                                <span class=\"quantity\">";
                // line 70
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</span>
                            </div>
                            <div class=\"cart-img-contaent\">
                                <a href=\"";
                // line 73
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
                                    <p>";
                // line 74
                echo $this->getAttribute($context["product"], "name", array());
                echo "</p>
                                </a>
                                <span>";
                // line 76
                echo $this->getAttribute($context["product"], "total", array());
                echo "</span>
                            </div>
                            <div class=\"pro-del\">
                                <button</i type=\"button\" onclick=\"cart.remove('";
                // line 79
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" <i class=\"fa fa-times-circle\">></button>
                            </div>
                        </div>
                        <div class=\"clear\"></div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                    <div class=\"cart-inner-bottom\">
                        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 86
                echo "                            <p class=\"total\">";
                echo $this->getAttribute($context["total"], "title", array());
                echo ":
                                <span class=\"amount\">";
                // line 87
                echo $this->getAttribute($context["total"], "text", array());
                echo "</span>
                            </p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                        <div class=\"clear\"></div>
                        <p class=\"cart-button-top\">
                            <a href=\"";
            // line 92
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
                            
                        </p>
                    </div>
                </div>
            </li>
        ";
        } else {
            // line 99
            echo "            <li>
                <a href=\"";
            // line 100
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">
                    <span class=\"cart-icon\">
                        <i class=\"fa fa-shopping-cart\"></i>
                    </span>
                    <span class=\"cart-no\">";
            // line 104
            echo (isset($context["text_items"]) ? $context["text_items"] : null);
            echo "</span>
                </a>
                <div class=\"mini-cart-content\">
                    <div class=\"cart-img-details\">
                        <p class=\"text-center\">";
            // line 108
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                        <div class=\"clear\"></div>
                        <div class=\"cart-inner-bottom\">
                            ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 112
                echo "                                <p class=\"total\">";
                echo $this->getAttribute($context["total"], "title", array());
                echo ":
                                    <span class=\"amount\">";
                // line 113
                echo $this->getAttribute($context["total"], "text", array());
                echo "</span>
                                </p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                            <div class=\"clear\"></div>
                            <p class=\"cart-button-top\">
                                <a href=\"";
            // line 118
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
                            </p>
                        </div>
                    </div>
                </li>

            ";
        }
        // line 125
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__ad9efc8999d76245dbc2f0cf9dc332a5b2ee824b93dfe532094672db3a765a4f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 125,  176 => 118,  172 => 116,  163 => 113,  158 => 112,  154 => 111,  148 => 108,  141 => 104,  134 => 100,  131 => 99,  119 => 92,  115 => 90,  106 => 87,  101 => 86,  97 => 85,  94 => 84,  81 => 79,  75 => 76,  70 => 74,  66 => 73,  60 => 70,  52 => 69,  47 => 66,  43 => 65,  38 => 63,  31 => 59,  27 => 57,  25 => 56,  19 => 52,);
    }
}
/* {# <div id="cart" class="-group btnbtn-block">*/
/*   <button type="button" data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">{{ text_items }}</span></button>*/
/*   <ul class="dropdown-menu pull-right">*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*       <table class="table table-striped">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*           <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="text-right">x {{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table class="table table-bordered">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-right"><strong>{{ total.title }}</strong></td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <p class="text-right"><a href="{{ cart }}"><strong><i class="fa fa-shopping-cart"></i> {{ text_cart }}</strong></a>&nbsp;&nbsp;&nbsp;<a href="{{ checkout }}"><strong><i class="fa fa-share"></i> {{ text_checkout }}</strong></a></p>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div> #}*/
/* */
/* */
/* <div class="cart-total" id="cart">*/
/*     <ul>*/
/*         {% if products or vouchers %}*/
/* */
/*             <li>*/
/*                 <a href="{{ cart }}">*/
/*                     <span class="cart-icon">*/
/*                         <i class="fa fa-shopping-cart"></i>*/
/*                     </span>*/
/*                     <span class="cart-no">{{ text_items }}</span>*/
/*                 </a>*/
/*                 {% for product in products %}*/
/*                     <div class="mini-cart-content">*/
/*                         <div class="cart-img-details">*/
/*                             <div class="cart-img-photo">*/
/*                                 <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}"/></a>*/
/*                                 <span class="quantity">{{ product.quantity }}</span>*/
/*                             </div>*/
/*                             <div class="cart-img-contaent">*/
/*                                 <a href="{{ product.href }}">*/
/*                                     <p>{{ product.name }}</p>*/
/*                                 </a>*/
/*                                 <span>{{ product.total }}</span>*/
/*                             </div>*/
/*                             <div class="pro-del">*/
/*                                 <button</i type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" <i class="fa fa-times-circle">></button>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     {% endfor %}*/
/*                     <div class="cart-inner-bottom">*/
/*                         {% for total in totals %}*/
/*                             <p class="total">{{ total.title }}:*/
/*                                 <span class="amount">{{ total.text }}</span>*/
/*                             </p>*/
/*                         {% endfor %}*/
/*                         <div class="clear"></div>*/
/*                         <p class="cart-button-top">*/
/*                             <a href="{{ checkout }}">{{ text_checkout }}</a>*/
/*                             */
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*         {% else %}*/
/*             <li>*/
/*                 <a href="{{ cart }}">*/
/*                     <span class="cart-icon">*/
/*                         <i class="fa fa-shopping-cart"></i>*/
/*                     </span>*/
/*                     <span class="cart-no">{{ text_items }}</span>*/
/*                 </a>*/
/*                 <div class="mini-cart-content">*/
/*                     <div class="cart-img-details">*/
/*                         <p class="text-center">{{ text_empty }}</p>*/
/*                         <div class="clear"></div>*/
/*                         <div class="cart-inner-bottom">*/
/*                             {% for total in totals %}*/
/*                                 <p class="total">{{ total.title }}:*/
/*                                     <span class="amount">{{ total.text }}</span>*/
/*                                 </p>*/
/*                             {% endfor %}*/
/*                             <div class="clear"></div>*/
/*                             <p class="cart-button-top">*/
/*                                 <a href="{{ checkout }}">{{ text_checkout }}</a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/* */
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* */
