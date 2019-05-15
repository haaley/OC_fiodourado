<?php

/* __string_template__3b336e51b1f7c20fc0036b208f0432cbb9175131c455e70ae513b416bd6f1a51 */
class __TwigTemplate_6457e2470d3586bcb661a1ef2cbc2c223f49560c6f251970f69c3dd9efc0592b extends Twig_Template
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

\t\t\t\t\t\t<div id=\"cart\" class=\"cart-total\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
        // line 56
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 57
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 58
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\"><span class=\"cart-icon\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-shopping-cart\"></i></span> <span class=\"cart-no\">";
            // line 59
            echo (isset($context["text_items"]) ? $context["text_items"] : null);
            echo "</span></a>
                        \t";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<div class=\"mini-cart-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-img-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart-img-photo\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 64
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"quantity\">";
                // line 65
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart-img-contaent\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 68
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 69
                echo $this->getAttribute($context["product"], "name", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 71
                echo $this->getAttribute($context["product"], "total", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pro-del\"><button type=\"button\" onclick=\"cart.remove('";
                // line 73
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" <i class=\"fa fa-times-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"cart-inner-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"total\">";
                echo $this->getAttribute($context["total"], "title", array());
                echo ": <span class=\"amount\">";
                echo $this->getAttribute($context["total"], "text", array());
                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"cart-button-top\"><a href=\"";
            // line 83
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
                   ";
        } else {
            // line 88
            echo "                <li>
                  <a href=\"";
            // line 89
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\"><span class=\"cart-icon\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-shopping-cart\"></i></span> <span class=\"cart-no\">";
            // line 90
            echo (isset($context["text_items"]) ? $context["text_items"] : null);
            echo "</span></a>
\t\t\t\t\t\t\t\t\t<div class=\"mini-cart-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-img-details\">
                       <p class=\"text-center\">";
            // line 93
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-inner-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"total\">";
                echo $this->getAttribute($context["total"], "title", array());
                echo ": <span class=\"amount\">";
                echo $this->getAttribute($context["total"], "text", array());
                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"cart-button-top\"><a href=\"";
            // line 100
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                </li>
                
                ";
        }
        // line 106
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__3b336e51b1f7c20fc0036b208f0432cbb9175131c455e70ae513b416bd6f1a51";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 106,  156 => 100,  153 => 99,  142 => 97,  138 => 96,  132 => 93,  126 => 90,  122 => 89,  119 => 88,  109 => 83,  106 => 82,  95 => 80,  91 => 79,  88 => 78,  75 => 73,  70 => 71,  65 => 69,  61 => 68,  55 => 65,  47 => 64,  42 => 61,  38 => 60,  34 => 59,  30 => 58,  27 => 57,  25 => 56,  19 => 52,);
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
/* 						<div id="cart" class="cart-total">*/
/* 							<ul>*/
/* 									{% if products or vouchers %}*/
/* 								*/
/* 								<li><a href="{{ cart }}"><span class="cart-icon"><i*/
/* 												class="fa fa-shopping-cart"></i></span> <span class="cart-no">{{ text_items }}</span></a>*/
/*                         	{% for product in products %}*/
/* 									<div class="mini-cart-content">*/
/* 										<div class="cart-img-details">*/
/* 											<div class="cart-img-photo">*/
/* 												<a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" /></a>*/
/* 												<span class="quantity">{{ product.quantity }}</span>*/
/* 											</div>*/
/* 											<div class="cart-img-contaent">*/
/* 												<a href="{{ product.href }}">*/
/* 													<p>{{ product.name }}</p>*/
/* 												</a>*/
/* 												<span>{{ product.total }}</span>*/
/* 											</div>*/
/* 											<div class="pro-del"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" <i class="fa fa-times-circle"></i></button>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="clear"></div>*/
/*                              {% endfor %}*/
/* 										<div class="cart-inner-bottom">*/
/* 												{% for total in totals %}*/
/* 											<p class="total">{{ total.title }}: <span class="amount">{{ total.text }}</span></p>*/
/* 											{% endfor %}*/
/* 											<div class="clear"></div>*/
/* 											<p class="cart-button-top"><a href="{{ checkout }}">{{ text_checkout }}</a></p>*/
/* 										</div>*/
/* 									</div>*/
/* 								</li>*/
/*                    {% else %}*/
/*                 <li>*/
/*                   <a href="{{ cart }}"><span class="cart-icon"><i*/
/* 												class="fa fa-shopping-cart"></i></span> <span class="cart-no">{{ text_items }}</span></a>*/
/* 									<div class="mini-cart-content">*/
/* 										<div class="cart-img-details">*/
/*                        <p class="text-center">{{ text_empty }}</p>*/
/* 										<div class="clear"></div>*/
/* 										<div class="cart-inner-bottom">*/
/* 												{% for total in totals %}*/
/* 											<p class="total">{{ total.title }}: <span class="amount">{{ total.text }}</span></p>*/
/* 											{% endfor %}*/
/* 											<div class="clear"></div>*/
/* 											<p class="cart-button-top"><a href="{{ checkout }}">{{ text_checkout }}</a></p>*/
/* 										</div>*/
/* 									</div>*/
/*                 </li>*/
/*                 */
/*                 {% endif %}*/
/* 							</ul>*/
/* 						</div>*/
