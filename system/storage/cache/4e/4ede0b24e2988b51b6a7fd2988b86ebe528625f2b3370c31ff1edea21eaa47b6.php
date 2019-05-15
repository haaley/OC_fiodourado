<?php

/* default/template/extension/module/carousel.twig */
class __TwigTemplate_f35898695d59d6f79a66017d33c0e3789c2f018010f69d2ee34d680d2dfefa11 extends Twig_Template
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
        echo "
";
        // line 29
        echo "
<!-- brand-area start -->
\t<div class=\"brand-area pad-60\">
\t\t<div class=\"container\">
\t\t\t<!-- section-heading start -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"section-heading\">
\t\t\t\t\t\t<h1>Nossas artes</h1>
\t\t\t\t\t\t<div class=\"title-icon\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-angle-left\"></i> <i class=\"fa fa-angle-right\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- section-heading end -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"brand-curosel\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 48
            echo "\t\t\t\t\t<!-- single-brand start -->
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<div class=\"single-brand\">
\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo $this->getAttribute($context["banner"], "link", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["banner"], "image", array());
            echo "\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- single-brand end -->
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- brand-area end -->";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 56,  51 => 51,  46 => 48,  42 => 47,  22 => 29,  19 => 1,);
    }
}
/* */
/* {# */
/* <div class="swiper-viewport">*/
/*   <div id="carousel{{ module }}" class="swiper-container">*/
/*     <div class="swiper-wrapper">*/
/*       {% for banner in banners %}*/
/*       <div class="swiper-slide text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/*   <div class="swiper-pagination carousel{{ module }}"></div>*/
/*   <div class="swiper-pager">*/
/*     <div class="swiper-button-next"></div>*/
/*     <div class="swiper-button-prev"></div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('#carousel{{ module }}').swiper({*/
/*     mode: 'horizontal',*/
/*     slidesPerView: 5,*/
/*     pagination: '.carousel{{ module }}',*/
/*     paginationClickable: true,*/
/*     nextButton: '.swiper-button-next',*/
/*     prevButton: '.swiper-button-prev',*/
/*     autoplay: 2500,*/
/*     loop: true*/
/*   });*/
/* --></script> #}*/
/* */
/* <!-- brand-area start -->*/
/* 	<div class="brand-area pad-60">*/
/* 		<div class="container">*/
/* 			<!-- section-heading start -->*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<div class="section-heading">*/
/* 						<h1>Nossas artes</h1>*/
/* 						<div class="title-icon">*/
/* 							<span><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- section-heading end -->*/
/* 			<div class="row">*/
/* 				<div class="brand-curosel">*/
/*         {% for banner in banners %}*/
/* 					<!-- single-brand start -->*/
/* 					<div class="col-md-2">*/
/* 						<div class="single-brand">*/
/* 							<a href="{{banner.link}}"><img src="{{ banner.image }}" alt="" /></a>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- single-brand end -->*/
/*           {% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- brand-area end -->*/
