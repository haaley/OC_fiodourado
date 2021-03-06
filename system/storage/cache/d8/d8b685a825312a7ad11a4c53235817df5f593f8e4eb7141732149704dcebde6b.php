<?php

/* __string_template__0af9fb6e134d39fd28429ba7ecf2d016eacef029516c18db11d627f8e2f575ab */
class __TwigTemplate_2b0d4749ff0f7ba0863934eae61dd143b1be6dbadc927cb76a496da75917f501 extends Twig_Template
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
<div class=\"container\" id=\"checkout-checkout\">
    ";
        // line 3
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 4
            echo "        <div class=\"alert alert-danger alert-dismissible\">
            <i class=\"fa fa-exclamation-circle\"></i>
            ";
            // line 6
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
            <button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>
        </div>
    ";
        }
        // line 10
        echo "    <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
        ";
        // line 11
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "        ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "        ";
        } else {
            // line 16
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "        ";
        }
        // line 18
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
            <div class=\"section-heading\">
                <h1>";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                <div class=\"title-icon\">
                    <span>
                        <i class=\"fa fa-angle-left\"></i>
                        <i class=\"fa fa-angle-right\"></i>
                    </span>
                </div>
            </div>
            <div class=\"panel-group\" id=\"accordion\">
                <div class=\"checkout-form\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 31
        echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
        echo "</h3>
                    </div>
                    <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
                        <div class=\"checkbox-form\" style=\"border-top: none\"></div>
                    </div>
                </div>
                ";
        // line 37
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 38
            echo "                    <div class=\"checkout-form\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
            // line 40
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</h3>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
                            <div class=\"checkbox-form\" style=\"border-top: none\"></div>
                        </div>
                    </div>
                ";
        } else {
            // line 47
            echo "                    <div class=\"checkout-form\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
            // line 49
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "</h3>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
                            <div class=\"checkbox-form\" style=\"border-top: none\"></div>
                        </div>
                    </div>
                ";
        }
        // line 56
        echo "                ";
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 57
            echo "                    <div class=\"checkout-form\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
            // line 59
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</h3>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
                            <div class=\"checkbox-form\" style=\"border-top: none\"></div>
                        </div>
                    </div>
                    <div class=\"checkout-form\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
            // line 67
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</h3>
                        </div>
                        <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
                            <div class=\"checkbox-form\" style=\"border-top: none\"></div>
                        </div>
                    </div>
                ";
        }
        // line 74
        echo "                <div class=\"checkout-form\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 76
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "</h3>
                    </div>
                    <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
                        <div class=\"checkbox-form\" style=\"border-top: none\"></div>
                    </div>
                </div>
                <div class=\"checkout-form\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 84
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "</h3>
                    </div>
                    <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
                        <div class=\"checkbox-form\" style=\"border-top: none\"></div>
                    </div>
                </div>
            </div>
            ";
        // line 91
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
        </div>
        ";
        // line 93
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    </div>
</div>
<script
    type=\"text/javascript\">
    <!--
    \$('#collapse-checkout-option').on('change', 'input[name=\\'account\\']', function () {
        if (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
            if (this.value == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 102
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 104
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            }
        } else {
            if (this.value == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 108
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 110
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
            }
        }
    });";
        // line 113
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            echo "\$(document).ready(function () {
            \$.ajax({
                url: 'index.php?route=checkout/login',
                dataType: 'html',
                success: function (html) {
                    \$('#collapse-checkout-option .checkbox-form').html(html);
                    \$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 119
            echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                    \$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
    ";
        } else {
            // line 128
            echo "        \$(document).ready(function () {
            \$.ajax({
                url: 'index.php?route=checkout/payment_address',
                dataType: 'html',
                success: function (html) {
                    \$('#collapse-payment-address .checkbox-form').html(html);
                    \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 134
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                    \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });";
        }
        // line 142
        echo "    // Checkout
    \$('#collapse-checkout-option').on('click', '#button-account', function () {
        \$.ajax({
            url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
            dataType: 'html',
            beforeSend: function () {
                \$('#button-account').button('loading');
            },
            complete: function () {
                \$('#button-account').button('reset');
            },
            success: function (html) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');
                \$('#collapse-payment-address .checkbox-form').html(html);
                if (\$('input[name=\\'account\\']:checked').val() == 'register') {
                    \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 158
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                } else {
                    \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 160
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                }
                \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    // Login
    \$('#collapse-checkout-option').on('click', '#button-login', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/login/save',
            type: 'post',
            data: \$('#collapse-checkout-option :input'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-login').button('loading');
            },
            complete: function () {
                \$('#button-login').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#collapse-checkout-option .checkbox-form').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    // Highlight any found errors
                    \$('input[name=\\'email\\']').parent().addClass('has-error');
                    \$('input[name=\\'password\\']').parent().addClass('has-error');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    // Register
    \$('#collapse-payment-address').on('click', '#button-register', function () {
        \$.ajax({
            url: 'index.php?route=checkout/register/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-register').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-register').button('reset');
                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .checkbox-form').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));
                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }
                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    ";
        // line 230
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 231
            echo "                        var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');
                        if (shipping_address) {
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_method',
                                dataType: 'html',
                                success: function (html) { // Add the shipping address
                                    \$.ajax({
                                        url: 'index.php?route=checkout/shipping_address',
                                        dataType: 'html',
                                        success: function (html) {
                                            \$('#collapse-shipping-address .checkbox-form').html(html);
                                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 242
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                        },
                                        error: function (xhr, ajaxOptions, thrownError) {
                                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                        }
                                    });
                                    \$('#collapse-shipping-method .checkbox-form').html(html);
                                    \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 249
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                                    \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 251
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                                    \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 252
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                                    \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 253
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        } else {
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function (html) {
                                    \$('#collapse-shipping-address .checkbox-form').html(html);
                                    \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 265
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                                    \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 267
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                                    \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 268
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                                    \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 269
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        }
                    ";
        } else {
            // line 277
            echo "                        \$.ajax({
                            url: 'index.php?route=checkout/payment_method',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-method .checkbox-form').html(html);
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 282
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 284
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });";
        }
        // line 289
        echo "\$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-register').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-address .checkbox-form').html(html);
                            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 297
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    // Payment Address
    \$('#collapse-payment-address').on('click', '#button-payment-address', function () {
        \$.ajax({
            url: 'index.php?route=checkout/payment_address/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-address').button('loading');
            },
            complete: function () {
                \$('#button-payment-address').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .checkbox-form').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));
                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }
                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } else {
                    ";
        // line 343
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 344
            echo "                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-shipping-address .checkbox-form').html(html);
                                \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 349
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 351
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 352
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 353
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        }).done(function () {
                            \$.ajax({
                                url: 'index.php?route=checkout/payment_address',
                                dataType: 'html',
                                success: function (html) {
                                    \$('#collapse-payment-address .checkbox-form').html(html);
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        });
                    ";
        } else {
            // line 371
            echo "                        \$.ajax({
                            url: 'index.php?route=checkout/payment_method',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-method .checkbox-form').html(html);
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 376
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 378
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        }).done(function () {
                            \$.ajax({
                                url: 'index.php?route=checkout/payment_address',
                                dataType: 'html',
                                success: function (html) {
                                    \$('#collapse-payment-address .checkbox-form').html(html);
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        });";
        }
        // line 395
        echo "                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    // Shipping Address
    \$('#collapse-shipping-address').on('click', '#button-shipping-address', function () {
        \$.ajax({
            url: 'index.php?route=checkout/shipping_address/save',
            type: 'post',
            data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-address').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-address').button('reset');
                    if (json['error']['warning']) {
                        \$('#collapse-shipping-address .checkbox-form').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                    for (i in json['error']) {
                        var element = \$('#input-shipping-' + i.replace('_', '-'));
                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }
                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-shipping-address').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-shipping-method .checkbox-form').html(html);
                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 441
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 443
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 444
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function (html) {
                                    \$('#collapse-shipping-address .checkbox-form').html(html);
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address .checkbox-form').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    // Guest
    \$('#collapse-payment-address').on('click', '#button-guest', function () {
        \$.ajax({
            url: 'index.php?route=checkout/guest/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-guest').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-guest').button('reset');
                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .checkbox-form').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));
                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }
                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    ";
        // line 509
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 510
            echo "                        var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');
                        if (shipping_address) {
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_method',
                                dataType: 'html',
                                complete: function () {
                                    \$('#button-guest').button('reset');
                                },
                                success: function (html) { // Add the shipping address
                                    \$.ajax({
                                        url: 'index.php?route=checkout/guest_shipping',
                                        dataType: 'html',
                                        success: function (html) {
                                            \$('#collapse-shipping-address .checkbox-form').html(html);
                                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 524
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                        },
                                        error: function (xhr, ajaxOptions, thrownError) {
                                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                        }
                                    });
                                    \$('#collapse-shipping-method .checkbox-form').html(html);
                                    \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 531
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                                    \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 533
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                                    \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 534
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        } else {
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                complete: function () {
                                    \$('#button-guest').button('reset');
                                },
                                success: function (html) {
                                    \$('#collapse-shipping-address .checkbox-form').html(html);
                                    \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 549
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                                    \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 551
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                                    \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 552
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                                    \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 553
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        }
                    ";
        } else {
            // line 561
            echo "                        \$.ajax({
                            url: 'index.php?route=checkout/payment_method',
                            dataType: 'html',
                            complete: function () {
                                \$('#button-guest').button('reset');
                            },
                            success: function (html) {
                                \$('#collapse-payment-method .checkbox-form').html(html);
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 569
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 571
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });";
        }
        // line 577
        echo "                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    // Guest Shipping
    \$('#collapse-shipping-address').on('click', '#button-guest-shipping', function () {
        \$.ajax({
            url: 'index.php?route=checkout/guest_shipping/save',
            type: 'post',
            data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-guest-shipping').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-guest-shipping').button('reset');
                    if (json['error']['warning']) {
                        \$('#collapse-shipping-address .checkbox-form').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                    for (i in json['error']) {
                        var element = \$('#input-shipping-' + i.replace('_', '-'));
                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }
                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-guest-shipping').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-shipping-method .checkbox-form').html(html);
                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 623
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i>');
                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 625
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 626
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    \$('#collapse-shipping-method').on('click', '#button-shipping-method', function () {
        \$.ajax({
            url: 'index.php?route=checkout/shipping_method/save',
            type: 'post',
            data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-method').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-method').button('reset');
                    if (json['error']['warning']) {
                        \$('#collapse-shipping-method .checkbox-form').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-shipping-method').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-method .checkbox-form').html(html);
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 666
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                            \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 668
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    \$('#collapse-payment-method').on('click', '#button-payment-method', function () {
        \$.ajax({
            url: 'index.php?route=checkout/payment_method/save',
            type: 'post',
            data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-method').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-payment-method').button('reset');
                    if (json['error']['warning']) {
                        \$('#collapse-payment-method .checkbox-form').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/confirm',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-payment-method').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-checkout-confirm .checkbox-form').html(html);
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 708
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                            \$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //
    -->
</script>
";
        // line 725
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__0af9fb6e134d39fd28429ba7ecf2d016eacef029516c18db11d627f8e2f575ab";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  980 => 725,  960 => 708,  917 => 668,  912 => 666,  869 => 626,  865 => 625,  860 => 623,  812 => 577,  803 => 571,  798 => 569,  788 => 561,  777 => 553,  773 => 552,  769 => 551,  764 => 549,  746 => 534,  742 => 533,  737 => 531,  727 => 524,  711 => 510,  709 => 509,  641 => 444,  637 => 443,  632 => 441,  584 => 395,  564 => 378,  559 => 376,  552 => 371,  531 => 353,  527 => 352,  523 => 351,  518 => 349,  511 => 344,  509 => 343,  460 => 297,  450 => 289,  441 => 284,  436 => 282,  429 => 277,  418 => 269,  414 => 268,  410 => 267,  405 => 265,  390 => 253,  386 => 252,  382 => 251,  377 => 249,  367 => 242,  354 => 231,  352 => 230,  279 => 160,  274 => 158,  256 => 142,  245 => 134,  237 => 128,  225 => 119,  216 => 113,  210 => 110,  205 => 108,  198 => 104,  193 => 102,  181 => 93,  176 => 91,  166 => 84,  155 => 76,  151 => 74,  141 => 67,  130 => 59,  126 => 57,  123 => 56,  113 => 49,  109 => 47,  99 => 40,  95 => 38,  93 => 37,  84 => 31,  70 => 20,  62 => 18,  59 => 17,  56 => 16,  53 => 15,  50 => 14,  47 => 13,  44 => 12,  42 => 11,  37 => 10,  30 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container" id="checkout-checkout">*/
/*     {% if error_warning %}*/
/*         <div class="alert alert-danger alert-dismissible">*/
/*             <i class="fa fa-exclamation-circle"></i>*/
/*             {{ error_warning }}*/
/*             <button class="close" data-dismiss="alert" type="button">&times;</button>*/
/*         </div>*/
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
/*             <div class="section-heading">*/
/*                 <h1>{{ heading_title }}</h1>*/
/*                 <div class="title-icon">*/
/*                     <span>*/
/*                         <i class="fa fa-angle-left"></i>*/
/*                         <i class="fa fa-angle-right"></i>*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="panel-group" id="accordion">*/
/*                 <div class="checkout-form">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">{{ text_checkout_option }}</h3>*/
/*                     </div>*/
/*                     <div class="panel-collapse collapse" id="collapse-checkout-option">*/
/*                         <div class="checkbox-form" style="border-top: none"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if not logged and account != 'guest' %}*/
/*                     <div class="checkout-form">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">{{ text_checkout_account }}</h3>*/
/*                         </div>*/
/*                         <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*                             <div class="checkbox-form" style="border-top: none"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <div class="checkout-form">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">{{ text_checkout_payment_address }}</h3>*/
/*                         </div>*/
/*                         <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*                             <div class="checkbox-form" style="border-top: none"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if shipping_required %}*/
/*                     <div class="checkout-form">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">{{ text_checkout_shipping_address }}</h3>*/
/*                         </div>*/
/*                         <div class="panel-collapse collapse" id="collapse-shipping-address">*/
/*                             <div class="checkbox-form" style="border-top: none"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="checkout-form">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">{{ text_checkout_shipping_method }}</h3>*/
/*                         </div>*/
/*                         <div class="panel-collapse collapse" id="collapse-shipping-method">*/
/*                             <div class="checkbox-form" style="border-top: none"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <div class="checkout-form">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">{{ text_checkout_payment_method }}</h3>*/
/*                     </div>*/
/*                     <div class="panel-collapse collapse" id="collapse-payment-method">*/
/*                         <div class="checkbox-form" style="border-top: none"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="checkout-form">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">{{ text_checkout_confirm }}</h3>*/
/*                     </div>*/
/*                     <div class="panel-collapse collapse" id="collapse-checkout-confirm">*/
/*                         <div class="checkbox-form" style="border-top: none"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {{ content_bottom }}*/
/*         </div>*/
/*         {{ column_right }}*/
/*     </div>*/
/* </div>*/
/* <script*/
/*     type="text/javascript">*/
/*     <!--*/
/*     $('#collapse-checkout-option').on('change', 'input[name=\'account\']', function () {*/
/*         if ($('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {*/
/*             if (this.value == 'register') {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/*             } else {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*             }*/
/*         } else {*/
/*             if (this.value == 'register') {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_account }}');*/
/*             } else {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_address }}');*/
/*             }*/
/*         }*/
/*     });{% if not logged %}$(document).ready(function () {*/
/*             $.ajax({*/
/*                 url: 'index.php?route=checkout/login',*/
/*                 dataType: 'html',*/
/*                 success: function (html) {*/
/*                     $('#collapse-checkout-option .checkbox-form').html(html);*/
/*                     $('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_option }} <i class="fa fa-caret-down"></i></a>');*/
/*                     $('a[href=\'#collapse-checkout-option\']').trigger('click');*/
/*                 },*/
/*                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                 }*/
/*             });*/
/*         });*/
/*     {% else %}*/
/*         $(document).ready(function () {*/
/*             $.ajax({*/
/*                 url: 'index.php?route=checkout/payment_address',*/
/*                 dataType: 'html',*/
/*                 success: function (html) {*/
/*                     $('#collapse-payment-address .checkbox-form').html(html);*/
/*                     $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                     $('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*                 },*/
/*                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                 }*/
/*             });*/
/*         });{% endif %}*/
/*     // Checkout*/
/*     $('#collapse-checkout-option').on('click', '#button-account', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').val(),*/
/*             dataType: 'html',*/
/*             beforeSend: function () {*/
/*                 $('#button-account').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-account').button('reset');*/
/*             },*/
/*             success: function (html) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/*                 $('#collapse-payment-address .checkbox-form').html(html);*/
/*                 if ($('input[name=\'account\']:checked').val() == 'register') {*/
/*                     $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/*                 } else {*/
/*                     $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                 }*/
/*                 $('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     // Login*/
/*     $('#collapse-checkout-option').on('click', '#button-login', 'click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/login/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-checkout-option :input'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-login').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-login').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#collapse-checkout-option .checkbox-form').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     // Highlight any found errors*/
/*                     $('input[name=\'email\']').parent().addClass('has-error');*/
/*                     $('input[name=\'password\']').parent().addClass('has-error');*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     // Register*/
/*     $('#collapse-payment-address').on('click', '#button-register', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/register/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-register').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-register').button('reset');*/
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-payment-address .checkbox-form').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-payment-' + i.replace('_', '-'));*/
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().addClass('has-error');*/
/*                 } else {*/
/*                     {% if shipping_required %}*/
/*                         var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/*                         if (shipping_address) {*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/shipping_method',*/
/*                                 dataType: 'html',*/
/*                                 success: function (html) { // Add the shipping address*/
/*                                     $.ajax({*/
/*                                         url: 'index.php?route=checkout/shipping_address',*/
/*                                         dataType: 'html',*/
/*                                         success: function (html) {*/
/*                                             $('#collapse-shipping-address .checkbox-form').html(html);*/
/*                                             $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                         },*/
/*                                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                         }*/
/*                                     });*/
/*                                     $('#collapse-shipping-method .checkbox-form').html(html);*/
/*                                     $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                                     $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/*                                     $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                                     $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                                     $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                                 },*/
/*                                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                         } else {*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/shipping_address',*/
/*                                 dataType: 'html',*/
/*                                 success: function (html) {*/
/*                                     $('#collapse-shipping-address .checkbox-form').html(html);*/
/*                                     $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                     $('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/*                                     $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                                     $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                                     $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                                 },*/
/*                                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                         }*/
/*                     {% else %}*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/payment_method',*/
/*                             dataType: 'html',*/
/*                             success: function (html) {*/
/*                                 $('#collapse-payment-method .checkbox-form').html(html);*/
/*                                 $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/*                                 $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });{% endif %}$.ajax({*/
/*                         url: 'index.php?route=checkout/payment_address',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-register').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-payment-address .checkbox-form').html(html);*/
/*                             $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     // Payment Address*/
/*     $('#collapse-payment-address').on('click', '#button-payment-address', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/payment_address/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-payment-address').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-payment-address').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-payment-address .checkbox-form').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-payment-' + i.replace('_', '-'));*/
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().parent().addClass('has-error');*/
/*                 } else {*/
/*                     {% if shipping_required %}*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_address',*/
/*                             dataType: 'html',*/
/*                             success: function (html) {*/
/*                                 $('#collapse-shipping-address .checkbox-form').html(html);*/
/*                                 $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 $('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/*                                 $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                                 $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                                 $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         }).done(function () {*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/payment_address',*/
/*                                 dataType: 'html',*/
/*                                 success: function (html) {*/
/*                                     $('#collapse-payment-address .checkbox-form').html(html);*/
/*                                 },*/
/*                                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                         });*/
/*                     {% else %}*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/payment_method',*/
/*                             dataType: 'html',*/
/*                             success: function (html) {*/
/*                                 $('#collapse-payment-method .checkbox-form').html(html);*/
/*                                 $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/*                                 $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         }).done(function () {*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/payment_address',*/
/*                                 dataType: 'html',*/
/*                                 success: function (html) {*/
/*                                     $('#collapse-payment-address .checkbox-form').html(html);*/
/*                                 },*/
/*                                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                         });{% endif %}*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     // Shipping Address*/
/*     $('#collapse-shipping-address').on('click', '#button-shipping-address', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/shipping_address/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-shipping-address').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-shipping-address').button('reset');*/
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-shipping-address .checkbox-form').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-shipping-' + i.replace('_', '-'));*/
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().parent().addClass('has-error');*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-shipping-address').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-shipping-method .checkbox-form').html(html);*/
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                             $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/shipping_address',*/
/*                                 dataType: 'html',*/
/*                                 success: function (html) {*/
/*                                     $('#collapse-shipping-address .checkbox-form').html(html);*/
/*                                 },*/
/*                                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     }).done(function () {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/payment_address',*/
/*                             dataType: 'html',*/
/*                             success: function (html) {*/
/*                                 $('#collapse-payment-address .checkbox-form').html(html);*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     // Guest*/
/*     $('#collapse-payment-address').on('click', '#button-guest', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/guest/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-guest').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-guest').button('reset');*/
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-payment-address .checkbox-form').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-payment-' + i.replace('_', '-'));*/
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().addClass('has-error');*/
/*                 } else {*/
/*                     {% if shipping_required %}*/
/*                         var shipping_address = $('#collapse-payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/*                         if (shipping_address) {*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/shipping_method',*/
/*                                 dataType: 'html',*/
/*                                 complete: function () {*/
/*                                     $('#button-guest').button('reset');*/
/*                                 },*/
/*                                 success: function (html) { // Add the shipping address*/
/*                                     $.ajax({*/
/*                                         url: 'index.php?route=checkout/guest_shipping',*/
/*                                         dataType: 'html',*/
/*                                         success: function (html) {*/
/*                                             $('#collapse-shipping-address .checkbox-form').html(html);*/
/*                                             $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                         },*/
/*                                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                         }*/
/*                                     });*/
/*                                     $('#collapse-shipping-method .checkbox-form').html(html);*/
/*                                     $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                                     $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/*                                     $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                                     $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                                 },*/
/*                                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                         } else {*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/guest_shipping',*/
/*                                 dataType: 'html',*/
/*                                 complete: function () {*/
/*                                     $('#button-guest').button('reset');*/
/*                                 },*/
/*                                 success: function (html) {*/
/*                                     $('#collapse-shipping-address .checkbox-form').html(html);*/
/*                                     $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                     $('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/*                                     $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                                     $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                                     $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                                 },*/
/*                                 error: function (xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                         }*/
/*                     {% else %}*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/payment_method',*/
/*                             dataType: 'html',*/
/*                             complete: function () {*/
/*                                 $('#button-guest').button('reset');*/
/*                             },*/
/*                             success: function (html) {*/
/*                                 $('#collapse-payment-method .checkbox-form').html(html);*/
/*                                 $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/*                                 $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function (xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });{% endif %}*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     // Guest Shipping*/
/*     $('#collapse-shipping-address').on('click', '#button-guest-shipping', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/guest_shipping/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-guest-shipping').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-guest-shipping').button('reset');*/
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-shipping-address .checkbox-form').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/*                     for (i in json['error']) {*/
/*                         var element = $('#input-shipping-' + i.replace('_', '-'));*/
/*                         if ($(element).parent().hasClass('input-group')) {*/
/*                             $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         } else {*/
/*                             $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                         }*/
/*                     }*/
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().addClass('has-error');*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-guest-shipping').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-shipping-method .checkbox-form').html(html);*/
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i>');*/
/*                             $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     $('#collapse-shipping-method').on('click', '#button-shipping-method', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/shipping_method/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-shipping-method input[type=\'radio\']:checked, #collapse-shipping-method textarea'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-shipping-method').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-shipping-method').button('reset');*/
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-shipping-method .checkbox-form').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_method',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-shipping-method').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-payment-method .checkbox-form').html(html);*/
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                             $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     $('#collapse-payment-method').on('click', '#button-payment-method', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/payment_method/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-method input[type=\'radio\']:checked, #collapse-payment-method input[type=\'checkbox\']:checked, #collapse-payment-method textarea'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-payment-method').button('loading');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     $('#button-payment-method').button('reset');*/
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-payment-method .checkbox-form').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/confirm',*/
/*                         dataType: 'html',*/
/*                         complete: function () {*/
/*                             $('#button-payment-method').button('reset');*/
/*                         },*/
/*                         success: function (html) {*/
/*                             $('#collapse-checkout-confirm .checkbox-form').html(html);*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_confirm }} <i class="fa fa-caret-down"></i></a>');*/
/*                             $('a[href=\'#collapse-checkout-confirm\']').trigger('click');*/
/*                         },*/
/*                         error: function (xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     //*/
/*     -->*/
/* </script>*/
/* {{ footer }}*/
/* */
