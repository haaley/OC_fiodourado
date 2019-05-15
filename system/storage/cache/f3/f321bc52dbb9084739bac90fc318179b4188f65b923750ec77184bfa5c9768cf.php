<?php

/* default/template/common/menu.twig */
class __TwigTemplate_13d0a2d2574bc56b757a1f48377fcf12fe257bb7dd33f190af8625b5076416b8 extends Twig_Template
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

<!-- mainmenu-area start -->
\t\t<div class=\"mainmenu-area\">
    ";
        // line 5
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 6
            echo "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"mainmenu\">
\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t<ul>  
                <li><a href=\"";
            // line 12
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">Inicio</a></li>      
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "                  ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 15
                    echo "\t\t\t\t\t\t\t\t\t<li>
                   <a href=\"";
                    // line 16
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
                    ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 19
                        echo "                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 20
                            echo "                       <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "\t\t\t\t\t\t\t\t\t\t</ul>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t</li>
                  ";
                }
                // line 26
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                  <li><a href=\"";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a></li>
                  <li><a href=\"";
            // line 28
            echo (isset($context["return"]) ? $context["return"] : null);
            echo "\">";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a></li>
                  <li><a href=\"";
            // line 29
            echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
            echo "\">";
            echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contato</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
      ";
        }
        // line 38
        echo "\t\t</div>


";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 38,  106 => 29,  100 => 28,  93 => 27,  87 => 26,  83 => 24,  76 => 22,  65 => 20,  60 => 19,  56 => 18,  49 => 16,  46 => 15,  43 => 14,  39 => 13,  35 => 12,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* */
/* */
/* <!-- mainmenu-area start -->*/
/* 		<div class="mainmenu-area">*/
/*     {% if categories %}*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-md-12 col-sm-12">*/
/* 						<div class="mainmenu">*/
/* 							<nav>*/
/* 								<ul>  */
/*                 <li><a href="{{home}}">Inicio</a></li>      */
/*                 {% for category in categories %}*/
/*                   {% if category.children %}*/
/* 									<li>*/
/*                    <a href="{{ category.href }}">{{ category.name }}</a>*/
/* 										<ul class="sub-menu">*/
/*                     {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                       {% for child in children %}*/
/*                        <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                       {% endfor %}*/
/* 										</ul>*/
/*                     {% endfor %}*/
/* 									</li>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*                   <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*                   <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*                   <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/* 									<li><a href="#">Contato</a></li>*/
/* 								</ul>*/
/* 							</nav>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/*       {% endif %}*/
/* 		</div>*/
/* */
/* */
/* {# <div class="container">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}*/
/*             </div>*/
/*             <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a>*/
/*           </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*         <li> TESTE</li>*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div> #}*/
/* */
