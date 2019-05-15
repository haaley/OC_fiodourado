<?php

/* default/template/common/header.twig */
class __TwigTemplate_845fa08af7c924314b5275819eb60c020d8d1d725bbbda494c2808904bf5cecb extends Twig_Template
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
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
\t<!--template fonts
\t\t============================================ -->
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">

\t<!-- Favicon
\t\t============================================ -->
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"img/favicon.png\">

\t<!-- CSS  -->

\t<!-- Bootstrap CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\">

\t<!-- font-awesome CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/font-awesome.min.css\">

\t<!-- owl.carousel CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/owl.carousel.css\">

\t<!-- owl.theme CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/owl.theme.css\">

\t<!-- owl.transitions CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/owl.transitions.css\">

\t<!-- fancybox CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/fancybox/jquery.fancybox.css\">

\t<!-- animate CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/animate.css\">

\t<!-- meanmenu CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/meanmenu.min.css\" media=\"all\" />

\t<!-- normalize CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/normalize.css\">

\t<!-- RS-slider CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/bootstrap/lib/rs-plugin/css/settings.css\" media=\"screen\" />

\t<!-- main CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/main.css\">

\t<!-- style CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/style.css\">

\t<!-- responsive CSS
\t\t============================================ -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/bootstrap/css/responsive.css\">

\t<!-- modernizr js
\t\t============================================ -->
\t<script src=\"catalog/view/javascript/bootstrap/js/vendor/modernizr-2.8.3.min.js\"></script>
";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 93
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 96
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 100
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 103
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</head>
<body>

<header class=\"header-home\">
\t\t<!-- header-top-area start -->
\t\t<div class=\"header-top-area hidden-xs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- header-top-left start -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-7\">
\t\t\t\t\t\t<div class=\"header-top-left\">
\t\t\t\t\t\t\t<div class=\"top-message\">Bem vindo a Fio Dourado</div>
\t\t\t\t\t\t\t<div class=\"phone-number\"> Ligue para suporte: <span>(98)98851-8508</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- header-top-left end -->
\t\t\t\t\t<!-- header-top-right start -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-5\">
\t\t\t\t\t\t<div class=\"header-top-right\">
\t\t\t\t\t\t\t<div class=\"top-menu\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"my-account.html\">Minha Conta</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"wishlist.html\">Minha Lista de desejos</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Carrinho</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- header-top-right end -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- header-top-area end -->
\t\t<!-- header-mid-area start -->
\t\t<div class=\"header-mid-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- logo start -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-4 col-xs-12\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"img/logo/logo.png\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- logo end -->
\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-8 col-xs-12\">
\t\t\t\t\t\t<!-- cart-total start -->
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 153
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- cart-total end -->
\t\t\t\t\t\t<!-- header-search start -->
      ";
        // line 157
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
\t\t\t\t\t\t<!-- header-search end -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- header-mid-area end -->
\t\t<!-- mainmenu-area start -->
";
        // line 165
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
\t\t<!-- mobile-menu-area start -->
\t\t<div class=\"mobile-menu-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"mobile-menu\">
\t\t\t\t\t\t\t<nav id=\"dropdown\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Inicio</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"about-us.html\">Sobre</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Produtos</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Camisas</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop-list.html\">Canecas</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contato</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- mobile-menu-area end -->
\t</header>



  <!-- <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div id=\"logo\">";
        // line 198
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
            // line 199
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 200
        echo "</div>
      </div>
      <div class=\"col-sm-5\">";
        // line 202
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      <div class=\"col-sm-3\">";
        // line 203
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
    </div>
  </div>
  -->";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 203,  333 => 202,  329 => 200,  321 => 199,  309 => 198,  273 => 165,  262 => 157,  255 => 153,  205 => 105,  197 => 103,  193 => 102,  182 => 100,  178 => 99,  175 => 98,  166 => 96,  162 => 95,  149 => 93,  145 => 92,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* 	<!--template fonts*/
/* 		============================================ -->*/
/* 	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/* 	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>*/
/* <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/* */
/* 	<!-- Favicon*/
/* 		============================================ -->*/
/* 	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">*/
/* */
/* 	<!-- CSS  -->*/
/* */
/* 	<!-- Bootstrap CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/bootstrap.min.css">*/
/* */
/* 	<!-- font-awesome CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/font-awesome.min.css">*/
/* */
/* 	<!-- owl.carousel CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/owl.carousel.css">*/
/* */
/* 	<!-- owl.theme CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/owl.theme.css">*/
/* */
/* 	<!-- owl.transitions CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/owl.transitions.css">*/
/* */
/* 	<!-- fancybox CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/fancybox/jquery.fancybox.css">*/
/* */
/* 	<!-- animate CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/animate.css">*/
/* */
/* 	<!-- meanmenu CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/meanmenu.min.css" media="all" />*/
/* */
/* 	<!-- normalize CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/normalize.css">*/
/* */
/* 	<!-- RS-slider CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" type="text/css" href="catalog/view/javascript/bootstrap/lib/rs-plugin/css/settings.css" media="screen" />*/
/* */
/* 	<!-- main CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/main.css">*/
/* */
/* 	<!-- style CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/style.css">*/
/* */
/* 	<!-- responsive CSS*/
/* 		============================================ -->*/
/* 	<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/responsive.css">*/
/* */
/* 	<!-- modernizr js*/
/* 		============================================ -->*/
/* 	<script src="catalog/view/javascript/bootstrap/js/vendor/modernizr-2.8.3.min.js"></script>*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/* */
/* <header class="header-home">*/
/* 		<!-- header-top-area start -->*/
/* 		<div class="header-top-area hidden-xs">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<!-- header-top-left start -->*/
/* 					<div class="col-lg-6 col-md-6 col-sm-7">*/
/* 						<div class="header-top-left">*/
/* 							<div class="top-message">Bem vindo a Fio Dourado</div>*/
/* 							<div class="phone-number"> Ligue para suporte: <span>(98)98851-8508</span></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- header-top-left end -->*/
/* 					<!-- header-top-right start -->*/
/* 					<div class="col-lg-6 col-md-6 col-sm-5">*/
/* 						<div class="header-top-right">*/
/* 							<div class="top-menu">*/
/* 								<ul>*/
/* 									<li><a href="my-account.html">Minha Conta</a></li>*/
/* 									<li><a href="wishlist.html">Minha Lista de desejos</a></li>*/
/* 									<li><a href="cart.html">Carrinho</a></li>*/
/* 									<li><a href="#">Entrar</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- header-top-right end -->*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- header-top-area end -->*/
/* 		<!-- header-mid-area start -->*/
/* 		<div class="header-mid-area">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<!-- logo start -->*/
/* 					<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">*/
/* 						<div class="logo">*/
/* 							<a href="index.html"><img src="img/logo/logo.png" alt="" /></a>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- logo end -->*/
/* 					<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">*/
/* 						<!-- cart-total start -->*/
/* 						*/
/* 							{{ cart }}*/
/* 						*/
/* 						<!-- cart-total end -->*/
/* 						<!-- header-search start -->*/
/*       {{ search }}*/
/* 						<!-- header-search end -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- header-mid-area end -->*/
/* 		<!-- mainmenu-area start -->*/
/* {{menu}}*/
/* 		<!-- mobile-menu-area start -->*/
/* 		<div class="mobile-menu-area">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-md-12">*/
/* 						<div class="mobile-menu">*/
/* 							<nav id="dropdown">*/
/* 								<ul>*/
/* 									<li><a href="index.html">Inicio</a></li>*/
/* 									<li><a href="about-us.html">Sobre</a></li>*/
/* 									<li><a href="#">Produtos</a>*/
/* 										<ul>*/
/* 											<li><a href="shop.html">Camisas</a></li>*/
/* 											<li><a href="shop-list.html">Canecas</a></li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li><a href="contact.html">Contato</a></li>*/
/* 								</ul>*/
/* 							</nav>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- mobile-menu-area end -->*/
/* 	</header>*/
/* */
/* */
/* */
/*   <!-- <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-4">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*       <div class="col-sm-5">{{ search }}</div>*/
/*       <div class="col-sm-3">{{ cart }}</div>*/
/*     </div>*/
/*   </div>*/
/*   -->*/
