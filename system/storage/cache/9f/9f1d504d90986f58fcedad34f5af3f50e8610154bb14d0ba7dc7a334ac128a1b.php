<?php

/* __string_template__0172377224b08a0a1f25dcdbdea8921e3b0c5363d4c8642a0254853f2415fd53 */
class __TwigTemplate_d330b7f14e7a300252f70808ff8ef0f7bad2be9f068c5d6aeff9653eef33453f extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
    <html
    dir=\"";
        // line 7
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\"> <!--<![endif]-->
    <head>
        <meta charset=\"UTF-8\"/>
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
        <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
        <title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
        <base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
        ";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "            <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\"/>
        ";
        }
        // line 17
        echo "        ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "            <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\"/>
        ";
        }
        // line 20
        echo "        <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
        <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" media=\"screen\" rel=\"stylesheet\"/>
        <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <link
        href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\"/>
        <!--template fonts
                                                                                        \t\t============================================ -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link
        href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">

        <!-- Favicon
                                                                                        \t\t============================================ -->
        <link href=\"img/favicon.png\" rel=\"shortcut icon\" type=\"image/x-icon\">

        <!-- CSS  -->

        <!-- Bootstrap CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\"> <!-- font-awesome CSS
                                                                                                                                    \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/font-awesome.min.css\" rel=\"stylesheet\">

        <!-- owl.carousel CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/owl.carousel.css\" rel=\"stylesheet\">

        <!-- owl.theme CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/owl.theme.css\" rel=\"stylesheet\">

        <!-- owl.transitions CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/owl.transitions.css\" rel=\"stylesheet\">

        <!-- fancybox CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/fancybox/jquery.fancybox.css\" rel=\"stylesheet\">

        <!-- animate CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/animate.css\" rel=\"stylesheet\">

        <!-- meanmenu CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/meanmenu.min.css\" media=\"all\" rel=\"stylesheet\"/>

        <!-- normalize CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/normalize.css\" rel=\"stylesheet\">

        <!-- RS-slider CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/lib/rs-plugin/css/settings.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\"/>

        <!-- main CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/main.css\" rel=\"stylesheet\">

        <!-- style CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/style.css\" rel=\"stylesheet\">

        <!-- responsive CSS
                                                                                        \t\t============================================ -->
        <link
        href=\"catalog/view/javascript/bootstrap/css/responsive.css\" rel=\"stylesheet\">

        <!-- modernizr js
                                                                                        \t\t============================================ -->
        <script src=\"catalog/view/javascript/bootstrap/js/vendor/modernizr-2.8.3.min.js\"></script>
        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 106
            echo "            <link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 109
            echo "            <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "        <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 113
            echo "            <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 116
            echo "            ";
            echo $context["analytic"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    </head>
    <body>

        <header
            class=\"header-home\">
            <!-- header-top-area start -->
            <div class=\"header-top-area hidden-xs\">
                <div class=\"container\">
                    <div
                        class=\"row\">
                        <!-- header-top-left start -->
                        <div class=\"col-lg-6 col-md-6 col-sm-7\">
                            <div class=\"header-top-left\">
                                <div class=\"top-message\">Bem vindo a Fio Dourado</div>
                                <div class=\"phone-number\">
                                    Ligue para suporte:
                                    <span>(98)98851-8508</span>
                                </div>
                            </div>
                        </div>
                        <!-- header-top-left end -->
                        <!-- header-top-right start -->
                        <div class=\"col-lg-6 col-md-6 col-sm-5\">
                            <div class=\"header-top-right\">
                                <div class=\"top-menu\">
                                    <ul>
                                        <li><a href=\"";
        // line 144
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">Minha Conta</a></li>
                                        <li><a href=\"";
        // line 145
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">Minha Lista de desejos</a></li>
                                        <li><a href=\"index.php?route=checkout/cart\">Carrinho</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 147
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">Entrar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        } else {
            // line 150
            echo "                                        <li><a href=\"";
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">Sair</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        }
        // line 152
        echo "                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- header-top-right end -->
                    </div>
                </div>
            </div>
            <!-- header-top-area end -->
            <!-- header-mid-area start -->
            <div class=\"header-mid-area\">
                <div class=\"container\">
                    <div
                        class=\"row\">
                        <!-- logo start -->
                        <div class=\"col-lg-6 col-md-6 col-sm-4 col-xs-12\">
                            <div class=\"logo\">
                                <a href=\"index.html\"><img alt=\"\" src=\"img/logo/logo.png\"/></a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div
                            class=\"col-lg-6 col-md-6 col-sm-8 col-xs-12\">
                            <!-- cart-total start -->

                            ";
        // line 177
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "

                            <!-- cart-total end -->
                            <!-- header-search start -->
                        ";
        // line 181
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
                            <!-- header-search end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-mid-area end -->
            <!-- mainmenu-area start -->
            ";
        // line 189
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
            <!-- mobile-menu-area start -->
            <div class=\"mobile-menu-area\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"mobile-menu\">
                                <nav id=\"dropdown\">
                                    <ul>
                                        <li>
                                            <a href=\"index.html\">Inicio</a>
                                        </li>
                                        <li>
                                            <a href=\"about-us.html\">Sobre</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Produtos</a>
                                            <ul>
                                                <li><a href=\"shop.html\">Camisas</a></li>
                                                <li><a href=\"shop-list.html\">Canecas</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=\"contact.html\">Contato</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->
        </header>


        <!-- <div class=\"container\">
                                                                                            <div class=\"row\">
                                                                                              <div class=\"col-sm-4\">
                                                                                                <div id=\"logo\">";
        // line 228
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 229
            echo "                                                                                                  <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
                                                                                                  ";
        }
        // line 230
        echo "</div>
                                                                                              </div>
                                                                                              <div class=\"col-sm-5\">";
        // line 232
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
                                                                                              <div class=\"col-sm-3\">";
        // line 233
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
                                                                                            </div>
                                                                                          </div>
                                                                                          -->
";
    }

    public function getTemplateName()
    {
        return "__string_template__0172377224b08a0a1f25dcdbdea8921e3b0c5363d4c8642a0254853f2415fd53";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 233,  384 => 232,  380 => 230,  372 => 229,  360 => 228,  318 => 189,  307 => 181,  300 => 177,  273 => 152,  267 => 150,  261 => 148,  259 => 147,  254 => 145,  250 => 144,  222 => 118,  213 => 116,  208 => 115,  197 => 113,  193 => 112,  190 => 111,  181 => 109,  176 => 108,  163 => 106,  159 => 105,  72 => 20,  66 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  37 => 7,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/*     <html*/
/*     dir="{{ direction }}" lang="{{ lang }}"> <!--<![endif]-->*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <meta content="width=device-width, initial-scale=1" name="viewport">*/
/*         <meta content="IE=edge" http-equiv="X-UA-Compatible">*/
/*         <title>{{ title }}</title>*/
/*         <base href="{{ base }}"/>*/
/*         {% if description %}*/
/*             <meta name="description" content="{{ description }}"/>*/
/*         {% endif %}*/
/*         {% if keywords %}*/
/*             <meta name="keywords" content="{{ keywords }}"/>*/
/*         {% endif %}*/
/*         <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/*         <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet"/>*/
/*         <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/*         <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>*/
/*         <link*/
/*         href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css"/>*/
/*         <!--template fonts*/
/*                                                                                         		============================================ -->*/
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/*         <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>*/
/*         <link*/
/*         href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/* */
/*         <!-- Favicon*/
/*                                                                                         		============================================ -->*/
/*         <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon">*/
/* */
/*         <!-- CSS  -->*/
/* */
/*         <!-- Bootstrap CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- font-awesome CSS*/
/*                                                                                                                                     		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/font-awesome.min.css" rel="stylesheet">*/
/* */
/*         <!-- owl.carousel CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/owl.carousel.css" rel="stylesheet">*/
/* */
/*         <!-- owl.theme CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/owl.theme.css" rel="stylesheet">*/
/* */
/*         <!-- owl.transitions CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/owl.transitions.css" rel="stylesheet">*/
/* */
/*         <!-- fancybox CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/fancybox/jquery.fancybox.css" rel="stylesheet">*/
/* */
/*         <!-- animate CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/animate.css" rel="stylesheet">*/
/* */
/*         <!-- meanmenu CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/meanmenu.min.css" media="all" rel="stylesheet"/>*/
/* */
/*         <!-- normalize CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/normalize.css" rel="stylesheet">*/
/* */
/*         <!-- RS-slider CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/lib/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css"/>*/
/* */
/*         <!-- main CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/main.css" rel="stylesheet">*/
/* */
/*         <!-- style CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/style.css" rel="stylesheet">*/
/* */
/*         <!-- responsive CSS*/
/*                                                                                         		============================================ -->*/
/*         <link*/
/*         href="catalog/view/javascript/bootstrap/css/responsive.css" rel="stylesheet">*/
/* */
/*         <!-- modernizr js*/
/*                                                                                         		============================================ -->*/
/*         <script src="catalog/view/javascript/bootstrap/js/vendor/modernizr-2.8.3.min.js"></script>*/
/*         {% for style in styles %}*/
/*             <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}"/>*/
/*         {% endfor %}*/
/*         {% for script in scripts %}*/
/*             <script src="{{ script }}" type="text/javascript"></script>*/
/*         {% endfor %}*/
/*         <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/*         {% for link in links %}*/
/*             <link href="{{ link.href }}" rel="{{ link.rel }}"/>*/
/*         {% endfor %}*/
/*         {% for analytic in analytics %}*/
/*             {{ analytic }}*/
/*         {% endfor %}*/
/*     </head>*/
/*     <body>*/
/* */
/*         <header*/
/*             class="header-home">*/
/*             <!-- header-top-area start -->*/
/*             <div class="header-top-area hidden-xs">*/
/*                 <div class="container">*/
/*                     <div*/
/*                         class="row">*/
/*                         <!-- header-top-left start -->*/
/*                         <div class="col-lg-6 col-md-6 col-sm-7">*/
/*                             <div class="header-top-left">*/
/*                                 <div class="top-message">Bem vindo a Fio Dourado</div>*/
/*                                 <div class="phone-number">*/
/*                                     Ligue para suporte:*/
/*                                     <span>(98)98851-8508</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- header-top-left end -->*/
/*                         <!-- header-top-right start -->*/
/*                         <div class="col-lg-6 col-md-6 col-sm-5">*/
/*                             <div class="header-top-right">*/
/*                                 <div class="top-menu">*/
/*                                     <ul>*/
/*                                         <li><a href="{{account}}">Minha Conta</a></li>*/
/*                                         <li><a href="{{wishlist}}">Minha Lista de desejos</a></li>*/
/*                                         <li><a href="index.php?route=checkout/cart">Carrinho</a></li>*/
/* 																				 {% if not logged and account != 'guest' %}*/
/* 																				<li><a href="{{login}}">Entrar</a></li>*/
/* 																				 {% else %}*/
/*                                         <li><a href="{{logout}}">Sair</a></li>*/
/* 																				 {% endif %}*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- header-top-right end -->*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- header-top-area end -->*/
/*             <!-- header-mid-area start -->*/
/*             <div class="header-mid-area">*/
/*                 <div class="container">*/
/*                     <div*/
/*                         class="row">*/
/*                         <!-- logo start -->*/
/*                         <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">*/
/*                             <div class="logo">*/
/*                                 <a href="index.html"><img alt="" src="img/logo/logo.png"/></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- logo end -->*/
/*                         <div*/
/*                             class="col-lg-6 col-md-6 col-sm-8 col-xs-12">*/
/*                             <!-- cart-total start -->*/
/* */
/*                             {{ cart }}*/
/* */
/*                             <!-- cart-total end -->*/
/*                             <!-- header-search start -->*/
/*                         {{ search }}*/
/*                             <!-- header-search end -->*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- header-mid-area end -->*/
/*             <!-- mainmenu-area start -->*/
/*             {{menu}}*/
/*             <!-- mobile-menu-area start -->*/
/*             <div class="mobile-menu-area">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class="mobile-menu">*/
/*                                 <nav id="dropdown">*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <a href="index.html">Inicio</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="about-us.html">Sobre</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">Produtos</a>*/
/*                                             <ul>*/
/*                                                 <li><a href="shop.html">Camisas</a></li>*/
/*                                                 <li><a href="shop-list.html">Canecas</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="contact.html">Contato</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </nav>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- mobile-menu-area end -->*/
/*         </header>*/
/* */
/* */
/*         <!-- <div class="container">*/
/*                                                                                             <div class="row">*/
/*                                                                                               <div class="col-sm-4">*/
/*                                                                                                 <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*                                                                                                   <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*                                                                                                   {% endif %}</div>*/
/*                                                                                               </div>*/
/*                                                                                               <div class="col-sm-5">{{ search }}</div>*/
/*                                                                                               <div class="col-sm-3">{{ cart }}</div>*/
/*                                                                                             </div>*/
/*                                                                                           </div>*/
/*                                                                                           -->*/
/* */
