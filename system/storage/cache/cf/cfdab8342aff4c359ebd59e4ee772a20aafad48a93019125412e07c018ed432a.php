<?php

/* __string_template__9ea3570d62030364e68b324646b72f32fb74f3307b3f6cacce771a2c06d8fa29 */
class __TwigTemplate_77f4a25f12610726a83943224693972f991715b196b964f39a4fd13869260888 extends Twig_Template
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
        echo "    <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
        ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <h2>";
        // line 17
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                <li>
                    <a href=\"";
        // line 20
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 23
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 26
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 29
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a>
                </li>
            </ul>
            ";
        // line 32
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 33
            echo "                <h2>";
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</h2>
                <ul class=\"list-unstyled\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 36
                echo "                        <li>
                            <a href=\"";
                // line 37
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
            // line 40
            echo "                </ul>
            ";
        }
        // line 42
        echo "            <h2>";
        echo (isset($context["text_my_orders"]) ? $context["text_my_orders"] : null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                <li>
                    <a href=\"";
        // line 45
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 48
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a>
                </li>
                ";
        // line 50
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 51
            echo "                    <li>
                        <a href=\"";
            // line 52
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a>
                    </li>
                ";
        }
        // line 55
        echo "                <li>
                    <a href=\"";
        // line 56
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 59
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a>
                </li>
                <li>
                    <a href=\"";
        // line 62
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a>
                </li>
            </ul>
            <h2>";
        // line 65
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                ";
        // line 67
        if ( !(isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 68
            echo "                    <li>
                        <a href=\"";
            // line 69
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null);
            echo "</a>
                    </li>
                ";
        } else {
            // line 72
            echo "                    <li>
                        <a href=\"";
            // line 73
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null);
            echo "</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 76
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\">";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a>
                    </li>
                ";
        }
        // line 79
        echo "            </ul>
            <h2>";
        // line 80
        echo (isset($context["text_my_newsletter"]) ? $context["text_my_newsletter"] : null);
        echo "</h2>
            <ul class=\"list-unstyled\">
                <li>
                    <a href=\"";
        // line 83
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a>
                </li>
            </ul>
            ";
        // line 86
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
        ";
        // line 87
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 89
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__9ea3570d62030364e68b324646b72f32fb74f3307b3f6cacce771a2c06d8fa29";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 89,  255 => 87,  251 => 86,  243 => 83,  237 => 80,  234 => 79,  226 => 76,  218 => 73,  215 => 72,  207 => 69,  204 => 68,  202 => 67,  197 => 65,  189 => 62,  181 => 59,  173 => 56,  170 => 55,  162 => 52,  159 => 51,  157 => 50,  150 => 48,  142 => 45,  135 => 42,  131 => 40,  120 => 37,  117 => 36,  113 => 35,  107 => 33,  105 => 32,  97 => 29,  89 => 26,  81 => 23,  73 => 20,  67 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  40 => 9,  35 => 8,  30 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container" id="account-account">*/
/*     {% if success %}*/
/*         <div class="alert alert-success alert-dismissible">*/
/*             <i class="fa fa-check-circle"></i>*/
/*             {{ success }}</div>*/
/*     {% endif %}*/
/*     <div class="row">{{ column_left }}*/
/*         {% if column_left and column_right %}*/
/*             {% set class = 'col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*             {% set class = 'col-sm-9' %}*/
/*         {% else %}*/
/*             {% set class = 'col-sm-12' %}*/
/*         {% endif %}*/
/*         <div id="content" class="{{ class }}">{{ content_top }}*/
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
/*         {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
