<?php

/* __string_template__2a6f294be90645c2cd381b61569b28b4a874d1835364ee9e38cc31b5b0cf9d25 */
class __TwigTemplate_c0437d71509b3c0e0ebda863cff794246a536e8e740289bb6b8ecb14e4b517b3 extends Twig_Template
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
<div id=\"checkout-checkout\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 26
        echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        // line 32
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 33
            echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">oio";
            // line 35
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
              <div class=\"panel-body\"></div>
            </div>
          </div>
        ";
        } else {
            // line 42
            echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">huh";
            // line 44
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "</h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
              <div class=\"panel-body\"></div>
            </div>
          </div>
        ";
        }
        // line 51
        echo "        ";
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 52
            echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">";
            // line 54
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
              <div class=\"panel-body\"></div>
            </div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">";
            // line 62
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
              <div class=\"panel-body\"></div>
            </div>
          </div>
        ";
        }
        // line 69
        echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 71
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 79
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
      </div>
      ";
        // line 86
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    ";
        // line 88
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('#collapse-checkout-option').on('change', 'input[name=\\'account\\']', function() {
    if (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
        if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 95
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
        } else {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 97
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
        }
    } else {
        if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 101
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
        } else {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 103
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
        }
    }
  });
  ";
        // line 107
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 108
            echo "  \$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-checkout-option .panel-body').html(html);
            \$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 114
            echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
            \$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  ";
        } else {
            // line 123
            echo "  \$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-payment-address .panel-body').html(html);
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 129
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
            \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  ";
        }
        // line 138
        echo "  // Checkout
  \$('#collapse-checkout-option').on('click', '#button-account', function() {
    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
        dataType: 'html',
        beforeSend: function() {
            \$('#button-account').button('loading');
        },
        complete: function() {
            \$('#button-account').button('reset');
        },
        success: function(html) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');
            \$('#collapse-payment-address .panel-body').html(html);
            if (\$('input[name=\\'account\\']:checked').val() == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 154
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 156
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            }
            \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  // Login
  \$('#collapse-checkout-option').on('click', '#button-login', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/login/save',
        type: 'post',
        data: \$('#collapse-checkout-option :input'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-login').button('loading');
        },
        complete: function() {
            \$('#button-login').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                // Highlight any found errors
                \$('input[name=\\'email\\']').parent().addClass('has-error');
                \$('input[name=\\'password\\']').parent().addClass('has-error');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  // Register
  \$('#collapse-payment-address').on('click', '#button-register', function() {
    \$.ajax({
        url: 'index.php?route=checkout/register/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-register').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-register').button('reset');
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
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
        // line 226
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 227
            echo "                var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');
                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        success: function(html) {
                            // Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);
                                    \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 239
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                            \$('#collapse-shipping-method .panel-body').html(html);
                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 246
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 248
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 249
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 250
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);
                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 262
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                            \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 264
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 265
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 266
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
              ";
        } else {
            // line 274
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 279
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 281
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
              ";
        }
        // line 288
        echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-register').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-address .panel-body').html(html);
                        \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 296
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  // Payment Address
  \$('#collapse-payment-address').on('click', '#button-payment-address', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
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
        // line 342
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 343
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/shipping_address',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-shipping-address .panel-body').html(html);
                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 348
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                        \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 350
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 351
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 352
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });
              ";
        } else {
            // line 370
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 375
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 377
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });
              ";
        }
        // line 395
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  // Shipping Address
  \$('#collapse-shipping-address').on('click', '#button-shipping-address', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-address').button('reset');
                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
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
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);
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
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  // Guest
  \$('#collapse-payment-address').on('click', '#button-guest', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-guest').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest').button('reset');
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
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
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');
                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            // Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);
                                    \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 525
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                            \$('#collapse-shipping-method .panel-body').html(html);
                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 532
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 534
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 535
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);
                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 550
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                            \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 552
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 553
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 554
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
              ";
        } else {
            // line 562
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 570
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 572
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
              ";
        }
        // line 579
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  // Guest Shipping
  \$('#collapse-shipping-address').on('click', '#button-guest-shipping', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-guest-shipping').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').button('reset');
                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
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
                    complete: function() {
                        \$('#button-guest-shipping').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);
                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 625
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i>');
                        \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 627
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 628
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  \$('#collapse-shipping-method').on('click', '#button-shipping-method', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-method').button('reset');
                if (json['error']['warning']) {
                    \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 668
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 670
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
  \$('#collapse-payment-method').on('click', '#button-payment-method', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_method/save',
        type: 'post',
        data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-payment-method').button('reset');
                if (json['error']['warning']) {
                    \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/confirm',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-payment-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-checkout-confirm .panel-body').html(html);
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 710
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                        \$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
//--></script>
";
        // line 725
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__2a6f294be90645c2cd381b61569b28b4a874d1835364ee9e38cc31b5b0cf9d25";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  992 => 725,  974 => 710,  931 => 670,  926 => 668,  883 => 628,  879 => 627,  874 => 625,  826 => 579,  816 => 572,  811 => 570,  801 => 562,  790 => 554,  786 => 553,  782 => 552,  777 => 550,  759 => 535,  755 => 534,  750 => 532,  740 => 525,  723 => 510,  721 => 509,  653 => 444,  649 => 443,  644 => 441,  596 => 395,  575 => 377,  570 => 375,  563 => 370,  542 => 352,  538 => 351,  534 => 350,  529 => 348,  522 => 343,  520 => 342,  471 => 296,  461 => 288,  451 => 281,  446 => 279,  439 => 274,  428 => 266,  424 => 265,  420 => 264,  415 => 262,  400 => 250,  396 => 249,  392 => 248,  387 => 246,  377 => 239,  363 => 227,  361 => 226,  288 => 156,  283 => 154,  265 => 138,  253 => 129,  245 => 123,  233 => 114,  225 => 108,  223 => 107,  216 => 103,  211 => 101,  204 => 97,  199 => 95,  189 => 88,  184 => 86,  174 => 79,  163 => 71,  159 => 69,  149 => 62,  138 => 54,  134 => 52,  131 => 51,  121 => 44,  117 => 42,  107 => 35,  103 => 33,  101 => 32,  92 => 26,  85 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="checkout-checkout" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <div class="panel-group" id="accordion">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_option }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-checkout-option">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% if not logged and account != 'guest' %}*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">oio{{ text_checkout_account }}</h4>*/
/*             </div>*/
/*             <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*               <div class="panel-body"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% else %}*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">huh{{ text_checkout_payment_address }}</h4>*/
/*             </div>*/
/*             <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*               <div class="panel-body"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if shipping_required %}*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">{{ text_checkout_shipping_address }}</h4>*/
/*             </div>*/
/*             <div class="panel-collapse collapse" id="collapse-shipping-address">*/
/*               <div class="panel-body"></div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">{{ text_checkout_shipping_method }}</h4>*/
/*             </div>*/
/*             <div class="panel-collapse collapse" id="collapse-shipping-method">*/
/*               <div class="panel-body"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_payment_method }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-payment-method">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_confirm }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-checkout-confirm">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*     {{ column_right }}*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('#collapse-checkout-option').on('change', 'input[name=\'account\']', function() {*/
/*     if ($('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {*/
/*         if (this.value == 'register') {*/
/*             $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/*         } else {*/
/*             $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*         }*/
/*     } else {*/
/*         if (this.value == 'register') {*/
/*             $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_account }}');*/
/*         } else {*/
/*             $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_address }}');*/
/*         }*/
/*     }*/
/*   });*/
/*   {% if not logged %}*/
/*   $(document).ready(function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/login',*/
/*         dataType: 'html',*/
/*         success: function(html) {*/
/*             $('#collapse-checkout-option .panel-body').html(html);*/
/*             $('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_option }} <i class="fa fa-caret-down"></i></a>');*/
/*             $('a[href=\'#collapse-checkout-option\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   {% else %}*/
/*   $(document).ready(function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_address',*/
/*         dataType: 'html',*/
/*         success: function(html) {*/
/*             $('#collapse-payment-address .panel-body').html(html);*/
/*             $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*             $('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   {% endif %}*/
/*   // Checkout*/
/*   $('#collapse-checkout-option').on('click', '#button-account', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').val(),*/
/*         dataType: 'html',*/
/*         beforeSend: function() {*/
/*             $('#button-account').button('loading');*/
/*         },*/
/*         complete: function() {*/
/*             $('#button-account').button('reset');*/
/*         },*/
/*         success: function(html) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/*             $('#collapse-payment-address .panel-body').html(html);*/
/*             if ($('input[name=\'account\']:checked').val() == 'register') {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/*             } else {*/
/*                 $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*             }*/
/*             $('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   // Login*/
/*   $('#collapse-checkout-option').on('click', '#button-login', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/login/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-checkout-option :input'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('#button-login').button('loading');*/
/*         },*/
/*         complete: function() {*/
/*             $('#button-login').button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#collapse-checkout-option .panel-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 // Highlight any found errors*/
/*                 $('input[name=\'email\']').parent().addClass('has-error');*/
/*                 $('input[name=\'password\']').parent().addClass('has-error');*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   // Register*/
/*   $('#collapse-payment-address').on('click', '#button-register', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/register/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('#button-register').button('loading');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-register').button('reset');*/
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*                 for (i in json['error']) {*/
/*                     var element = $('#input-payment-' + i.replace('_', '-'));*/
/*                     if ($(element).parent().hasClass('input-group')) {*/
/*                         $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     } else {*/
/*                         $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     }*/
/*                 }*/
/*                 // Highlight any found errors*/
/*                 $('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*               {% if shipping_required %}*/
/*                 var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/*                 if (shipping_address) {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                             // Add the shipping address*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/shipping_address',*/
/*                                 dataType: 'html',*/
/*                                 success: function(html) {*/
/*                                     $('#collapse-shipping-address .panel-body').html(html);*/
/*                                     $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 },*/
/*                                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                             $('#collapse-shipping-method .panel-body').html(html);*/
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                             $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_address',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                             $('#collapse-shipping-address .panel-body').html(html);*/
/*                             $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                             $('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*               {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/*                         $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                         $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/*                         $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*               {% endif %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_address',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-register').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-address .panel-body').html(html);*/
/*                         $('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   // Payment Address*/
/*   $('#collapse-payment-address').on('click', '#button-payment-address', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_address/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('#button-payment-address').button('loading');*/
/*         },*/
/*         complete: function() {*/
/*             $('#button-payment-address').button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*                 for (i in json['error']) {*/
/*                     var element = $('#input-payment-' + i.replace('_', '-'));*/
/*                     if ($(element).parent().hasClass('input-group')) {*/
/*                         $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     } else {*/
/*                         $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     }*/
/*                 }*/
/*                 // Highlight any found errors*/
/*                 $('.text-danger').parent().parent().addClass('has-error');*/
/*             } else {*/
/*               {% if shipping_required %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_address',*/
/*                     dataType: 'html',*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-address .panel-body').html(html);*/
/*                         $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                         $('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/*                         $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                         $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                         $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_address',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                             $('#collapse-payment-address .panel-body').html(html);*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 });*/
/*               {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/*                         $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                         $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/*                         $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_address',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                             $('#collapse-payment-address .panel-body').html(html);*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 });*/
/*               {% endif %}*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   // Shipping Address*/
/*   $('#collapse-shipping-address').on('click', '#button-shipping-address', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/shipping_address/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('#button-shipping-address').button('loading');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-shipping-address').button('reset');*/
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*                 for (i in json['error']) {*/
/*                     var element = $('#input-shipping-' + i.replace('_', '-'));*/
/*                     if ($(element).parent().hasClass('input-group')) {*/
/*                         $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     } else {*/
/*                         $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     }*/
/*                 }*/
/*                 // Highlight any found errors*/
/*                 $('.text-danger').parent().parent().addClass('has-error');*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-shipping-address').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-method .panel-body').html(html);*/
/*                         $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                         $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/*                         $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                         $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_address',*/
/*                             dataType: 'html',*/
/*                             success: function(html) {*/
/*                                 $('#collapse-shipping-address .panel-body').html(html);*/
/*                             },*/
/*                             error: function(xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_address',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                             $('#collapse-payment-address .panel-body').html(html);*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   // Guest*/
/*   $('#collapse-payment-address').on('click', '#button-guest', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/guest/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('#button-guest').button('loading');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-guest').button('reset');*/
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*                 for (i in json['error']) {*/
/*                     var element = $('#input-payment-' + i.replace('_', '-'));*/
/*                     if ($(element).parent().hasClass('input-group')) {*/
/*                         $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     } else {*/
/*                         $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     }*/
/*                 }*/
/*                 // Highlight any found errors*/
/*                 $('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*               {% if shipping_required %}*/
/*                 var shipping_address = $('#collapse-payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/*                 if (shipping_address) {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         complete: function() {*/
/*                             $('#button-guest').button('reset');*/
/*                         },*/
/*                         success: function(html) {*/
/*                             // Add the shipping address*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/guest_shipping',*/
/*                                 dataType: 'html',*/
/*                                 success: function(html) {*/
/*                                     $('#collapse-shipping-address .panel-body').html(html);*/
/*                                     $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 },*/
/*                                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/*                             $('#collapse-shipping-method .panel-body').html(html);*/
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                             $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/guest_shipping',*/
/*                         dataType: 'html',*/
/*                         complete: function() {*/
/*                             $('#button-guest').button('reset');*/
/*                         },*/
/*                         success: function(html) {*/
/*                             $('#collapse-shipping-address .panel-body').html(html);*/
/*                             $('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                             $('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/*                             $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/*                             $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                             $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*               {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-guest').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/*                         $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                         $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/*                         $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*               {% endif %}*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   // Guest Shipping*/
/*   $('#collapse-shipping-address').on('click', '#button-guest-shipping', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/guest_shipping/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('#button-guest-shipping').button('loading');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-guest-shipping').button('reset');*/
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*                 for (i in json['error']) {*/
/*                     var element = $('#input-shipping-' + i.replace('_', '-'));*/
/*                     if ($(element).parent().hasClass('input-group')) {*/
/*                         $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     } else {*/
/*                         $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     }*/
/*                 }*/
/*                 // Highlight any found errors*/
/*                 $('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-guest-shipping').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-method .panel-body').html(html);*/
/*                         $('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i>');*/
/*                         $('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/*                         $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/*                         $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   $('#collapse-shipping-method').on('click', '#button-shipping-method', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/shipping_method/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-method input[type=\'radio\']:checked, #collapse-shipping-method textarea'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('#button-shipping-method').button('loading');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-shipping-method').button('reset');*/
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-shipping-method').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/*                         $('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                         $('a[href=\'#collapse-payment-method\']').trigger('click');*/
/*                         $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/*   $('#collapse-payment-method').on('click', '#button-payment-method', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_method/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-method input[type=\'radio\']:checked, #collapse-payment-method input[type=\'checkbox\']:checked, #collapse-payment-method textarea'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('#button-payment-method').button('loading');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-payment-method').button('reset');*/
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/confirm',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-payment-method').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-checkout-confirm .panel-body').html(html);*/
/*                         $('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_confirm }} <i class="fa fa-caret-down"></i></a>');*/
/*                         $('a[href=\'#collapse-checkout-confirm\']').trigger('click');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/*   });*/
/* //--></script>*/
/* {{ footer }}*/
