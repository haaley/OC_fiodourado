<?php

/* default/template/extension/module/featured.twig */
class __TwigTemplate_00b1e64be94a90a18706b54ceef9a37bce00405695dceb915bc2370a0c90bf96 extends Twig_Template
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
        // line 43
        echo "

<div class=\"features-area pad-60\">
\t\t<div class=\"container\">
\t\t\t<!-- section-heading start -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-heading\">
\t\t\t\t\t\t<h1>PRODUTOS EM DESTAQUE</h1>
\t\t\t\t\t\t<div class=\"title-icon\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-angle-left\"></i> <i class=\"fa fa-angle-right\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- section-heading end -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"features-tab\">
\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t<ul class=\"product-nav\" role=\"tablist\">
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\"
\t\t\t\t\t\t\t\t\tdata-toggle=\"tab\">homem</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\"
\t\t\t\t\t\t\t\t\tdata-toggle=\"tab\">mulher</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#messages\" aria-controls=\"messages\" role=\"tab\"
\t\t\t\t\t\t\t\t\tdata-toggle=\"tab\">infantil</a></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<!-- Tab panes -->
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"features-curosel\">
\t\t\t\t\t\t\t\t\t  ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 82
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"";
            // line 83
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"";
            // line 84
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
            // line 89
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"wishlist.add('";
            // line 93
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"Adicionar à lista de desejos\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"compare.add('";
            // line 100
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\" data-toggle=\"tooltip\" title=\"visualizar\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"";
            // line 107
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">";
            // line 116
            echo $this->getAttribute($context["product"], "price", array());
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- features-area end -->";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 123,  122 => 116,  108 => 107,  98 => 100,  88 => 93,  81 => 89,  73 => 84,  69 => 83,  65 => 82,  59 => 78,  55 => 77,  19 => 43,);
    }
}
/* {# <h3>{{ heading_title }}</h3>*/
/* <div class="row">*/
/*   {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         <p>{{ product.description }}</p>*/
/*         {% if product.rating %}*/
/*         <div class="rating">*/
/*           {% for i in 1..5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="button-group">*/
/*         <button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div> #}*/
/* */
/* */
/* <div class="features-area pad-60">*/
/* 		<div class="container">*/
/* 			<!-- section-heading start -->*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<div class="section-heading">*/
/* 						<h1>PRODUTOS EM DESTAQUE</h1>*/
/* 						<div class="title-icon">*/
/* 							<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- section-heading end -->*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<div class="features-tab">*/
/* 						<!-- Nav tabs -->*/
/* 						<ul class="product-nav" role="tablist">*/
/* 							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"*/
/* 									data-toggle="tab">homem</a></li>*/
/* 							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab"*/
/* 									data-toggle="tab">mulher</a></li>*/
/* 							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab"*/
/* 									data-toggle="tab">infantil</a></li>*/
/* 						</ul>*/
/* */
/* 						<!-- Tab panes -->*/
/* 						<div class="tab-content">*/
/* 							<div role="tabpanel" class="tab-pane active" id="home">*/
/* 								<div class="row">*/
/* 									<div class="features-curosel">*/
/* 									  {% for product in products %}*/
/* 										<!-- single-product start -->*/
/* 										<div class="col-lg-3 col-md-3">*/
/* 											<div class="single-product">*/
/* 												<div class="product-img">*/
/* 													<a href="{{ product.href }}">*/
/* 														<img class="primary-image" src="{{ product.thumb }}" alt="" />*/
/* 														<img class="secondary-image" src="{{ product.thumb }}" alt="" />*/
/* 													</a>*/
/* 													<div class="actions">*/
/* 														<div class="action-buttons">*/
/* 															<div class="add-to-cart">*/
/* 																<button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i>*/
/* 															</div>*/
/* 															<div class="add-to-links">*/
/* 																<div class="add-to-wishlist">*/
/* 																	<a href="wishlist.add('{{ product.product_id }}');" data-toggle="tooltip"*/
/* 																		title="Adicionar à lista de desejos"><i*/
/* 																			class="fa fa-star"></i>*/
/* 																	</a>*/
/* 																</div>*/
/* 															</div>*/
/* 															<div class="quickviewbtn">*/
/* 																<a href="compare.add('{{ product.product_id }}');" data-toggle="tooltip" title="visualizar"><i*/
/* 																		class="fa fa-search-plus"></i></a>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="product-content">*/
/* 													<h2 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h2>*/
/* 													<div class="pro-rating">*/
/* 														<a href="#"><i class="fa fa-star"></i></a>*/
/* 														<a href="#"><i class="fa fa-star"></i></a>*/
/* 														<a href="#"><i class="fa fa-star"></i></a>*/
/* 														<a href="#"><i class="fa fa-star"></i></a>*/
/* 														<a href="#"><i class="fa fa-star"></i></a>*/
/* 													</div>*/
/* 													<div class="price-box">*/
/* 														<span class="new-price">{{ product.price }}</span>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<!-- single-product end -->*/
/* 									 {% endfor %}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- features-area end -->*/
