<?php

/* __string_template__93721781c7dfa9266e66bdbe3e827252e72bdac5fbfcb9defaf3584477ff88e4 */
class __TwigTemplate_ffafa673352e575f99f14854d37c7e3ecffce9cbc2c4bc0843cade54f5d90059 extends Twig_Template
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
<div class=\"container\" id=\"account-account\">
    ";
        // line 3
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 4
            echo "        <div class=\"alert alert-success alert-dismissible\">
            <i class=\"fa fa-check-circle\"></i>
            ";
            // line 6
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
    ";
        }
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\" id=\"content\">";
        // line 9
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <h2>";
        // line 10
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                <li>
                    <a href=\"";
        // line 13
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 16
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 19
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 22
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a>
                </li>
            </ul>
            ";
        // line 25
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 26
            echo "                <h2>";
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</h2>
                <ul class=\"list-unstyled\">
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 29
                echo "                        <li>
                            <a href=\"";
                // line 30
                echo $this->getAttribute($context["credit_card"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["credit_card"], "name", array());
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </ul>
            ";
        }
        // line 35
        echo "            <h2>";
        echo (isset($context["text_my_orders"]) ? $context["text_my_orders"] : null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                <li>
                    <a href=\"";
        // line 38
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 41
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a>
                </li>
                ";
        // line 43
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 44
            echo "                    <li>
                        <a href=\"";
            // line 45
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a>
                    </li>
                ";
        }
        // line 48
        echo "                <li>
                    <a href=\"";
        // line 49
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 52
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 55
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a>
                </li>
            </ul>
            <h2>";
        // line 58
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                ";
        // line 60
        if ( !(isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 61
            echo "                    <li>
                        <a href=\"";
            // line 62
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null);
            echo "</a>
                    </li>
                ";
        } else {
            // line 65
            echo "                    <li>
                        <a href=\"";
            // line 66
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null);
            echo "</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 69
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\">";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a>
                    </li>
                ";
        }
        // line 72
        echo "            </ul>
            <h2>";
        // line 73
        echo (isset($context["text_my_newsletter"]) ? $context["text_my_newsletter"] : null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                <li>
                    <a href=\"";
        // line 76
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a>
                </li>
            </ul>
            ";
        // line 79
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    </div>
</div>
";
        // line 82
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__93721781c7dfa9266e66bdbe3e827252e72bdac5fbfcb9defaf3584477ff88e4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 82,  226 => 79,  218 => 76,  212 => 73,  209 => 72,  201 => 69,  193 => 66,  190 => 65,  182 => 62,  179 => 61,  177 => 60,  172 => 58,  164 => 55,  156 => 52,  148 => 49,  145 => 48,  137 => 45,  134 => 44,  132 => 43,  125 => 41,  117 => 38,  110 => 35,  106 => 33,  95 => 30,  92 => 29,  88 => 28,  82 => 26,  80 => 25,  72 => 22,  64 => 19,  56 => 16,  48 => 13,  42 => 10,  38 => 9,  35 => 8,  30 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container" id="account-account">*/
/*     {% if success %}*/
/*         <div class="alert alert-success alert-dismissible">*/
/*             <i class="fa fa-check-circle"></i>*/
/*             {{ success }}</div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*         <div class="col-sm-12" id="content">{{ content_top }}*/
/*             <h2>{{ text_my_account }}</h2>*/
/*             <ul class="list-unstyled">*/
/*                 <li>*/
/*                     <a href="{{ edit }}">{{ text_edit }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ password }}">{{ text_password }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ address }}">{{ text_address }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ wishlist }}">{{ text_wishlist }}</a>*/
/*                 </li>*/
/*             </ul>*/
/*             {% if credit_cards %}*/
/*                 <h2>{{ text_credit_card }}</h2>*/
/*                 <ul class="list-unstyled">*/
/*                     {% for credit_card in credit_cards %}*/
/*                         <li>*/
/*                             <a href="{{ credit_card.href }}">{{ credit_card.name }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*             <h2>{{ text_my_orders }}</h2>*/
/*             <ul class="list-unstyled">*/
/*                 <li>*/
/*                     <a href="{{ order }}">{{ text_order }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ download }}">{{ text_download }}</a>*/
/*                 </li>*/
/*                 {% if reward %}*/
/*                     <li>*/
/*                         <a href="{{ reward }}">{{ text_reward }}</a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 <li>*/
/*                     <a href="{{ return }}">{{ text_return }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ transaction }}">{{ text_transaction }}</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ recurring }}">{{ text_recurring }}</a>*/
/*                 </li>*/
/*             </ul>*/
/*             <h2>{{ text_my_affiliate }}</h2>*/
/*             <ul class="list-unstyled">*/
/*                 {% if not tracking %}*/
/*                     <li>*/
/*                         <a href="{{ affiliate }}">{{ text_affiliate_add }}</a>*/
/*                     </li>*/
/*                 {% else %}*/
/*                     <li>*/
/*                         <a href="{{ affiliate }}">{{ text_affiliate_edit }}</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ tracking }}">{{ text_tracking }}</a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*             <h2>{{ text_my_newsletter }}</h2>*/
/*             <ul class="list-unstyled">*/
/*                 <li>*/
/*                     <a href="{{ newsletter }}">{{ text_newsletter }}</a>*/
/*                 </li>*/
/*             </ul>*/
/*             {{ content_bottom }}</div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
