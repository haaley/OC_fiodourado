<?php

/* __string_template__6a482d56adf5ebb0199ff0c6e8a90dd24dd5ed9e34e49a03532a292a13f9b5e8 */
class __TwigTemplate_f9d737c16323bce94f1c6d3bfbd383e01b39efe95e03da94eaf5879e529d4706 extends Twig_Template
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
        echo "<!-- mainmenu-area start -->
<div class=\"mainmenu-area\">
    ";
        // line 3
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 4
            echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    <div class=\"mainmenu\">
                        <nav>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 11
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">Inicio</a>
                                </li>
                                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "                                    ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 15
                    echo "                                        <li>
                                            <a href=\"";
                    // line 16
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
                                            <ul class=\"sub-menu\">
                                                ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 19
                        echo "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 20
                            echo "                                                        <li>
                                                            <a href=\"";
                            // line 21
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
                                                        </li>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 24
                        echo "                                                </ul>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "                                        </li>
                                    ";
                }
                // line 28
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                                <li>
                                    <a href=\"";
            // line 30
            echo (isset($context["return"]) ? $context["return"] : null);
            echo "\">";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 33
            echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
            echo "\">";
            echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
            echo "</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 36
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 45
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "__string_template__6a482d56adf5ebb0199ff0c6e8a90dd24dd5ed9e34e49a03532a292a13f9b5e8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  115 => 36,  107 => 33,  99 => 30,  96 => 29,  90 => 28,  86 => 26,  79 => 24,  68 => 21,  65 => 20,  60 => 19,  56 => 18,  49 => 16,  46 => 15,  43 => 14,  39 => 13,  34 => 11,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!-- mainmenu-area start -->*/
/* <div class="mainmenu-area">*/
/*     {% if categories %}*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12 col-sm-12">*/
/*                     <div class="mainmenu">*/
/*                         <nav>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{home}}">Inicio</a>*/
/*                                 </li>*/
/*                                 {% for category in categories %}*/
/*                                     {% if category.children %}*/
/*                                         <li>*/
/*                                             <a href="{{ category.href }}">{{ category.name }}</a>*/
/*                                             <ul class="sub-menu">*/
/*                                                 {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                                                     {% for child in children %}*/
/*                                                         <li>*/
/*                                                             <a href="{{ child.href }}">{{ child.name }}</a>*/
/*                                                         </li>*/
/*                                                     {% endfor %}*/
/*                                                 </ul>*/
/*                                             {% endfor %}*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                                 <li>*/
/*                                     <a href="{{ return }}">{{ text_return }}</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ sitemap }}">{{ text_sitemap }}</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ contact }}">{{ text_contact }}</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
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
