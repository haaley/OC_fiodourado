<?php

/* default/template/extension/module/banner.twig */
class __TwigTemplate_d29b43247e155d057a6f75170e1d07e6a976515c61b052281337ffc18a1c40c6 extends Twig_Template
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
        // line 17
        echo "
<div id=\"banner";
        // line 18
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"banner-area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- single-banner start -->
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 23
            echo "\t\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-12\">
\t\t\t\t\t<div class=\"single-banner\">
\t\t\t\t
\t\t\t\t\t";
            // line 26
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 27
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\"></a>
\t\t\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\">
\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t<!-- single-banner end -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\"><!--
  \$('#banner";
        // line 41
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
    effect: 'fade',
    autoplay: 2500,
    autoplayDisableOnInteraction: false
  });
--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 41,  66 => 34,  58 => 31,  50 => 29,  40 => 27,  38 => 26,  33 => 23,  29 => 22,  22 => 18,  19 => 17,);
    }
}
/* {# <div class="swiper-viewport">*/
/*   <div id="banner{{ module }}" class="swiper-container">*/
/*     <div class="swiper-wrapper">*/
/*       {% for banner in banners %}*/
/*       <div class="swiper-slide">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('#banner{{ module }}').swiper({*/
/*     effect: 'fade',*/
/*     autoplay: 2500,*/
/*     autoplayDisableOnInteraction: false*/
/*   });*/
/* --></script>  #}*/
/* */
/* <div id="banner{{ module }}" class="banner-area">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<!-- single-banner start -->*/
/* 					{% for banner in banners %}*/
/* 				<div class="col-md-5 col-sm-5 col-xs-12">*/
/* 					<div class="single-banner">*/
/* 				*/
/* 					{% if banner.link %}*/
/* 						<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}"></a>*/
/* 						{% else %}*/
/* 						<img src="{{ banner.image }}" alt="{{ banner.title }}">*/
/* 					{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 				  {% endfor %}*/
/* 				<!-- single-banner end -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<script type="text/javascript"><!--*/
/*   $('#banner{{ module }}').swiper({*/
/*     effect: 'fade',*/
/*     autoplay: 2500,*/
/*     autoplayDisableOnInteraction: false*/
/*   });*/
/* --></script>*/
