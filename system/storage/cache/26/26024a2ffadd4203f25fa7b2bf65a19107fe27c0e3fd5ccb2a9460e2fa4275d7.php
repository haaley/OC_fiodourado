<?php

/* default/template/product/category.twig */
class __TwigTemplate_18a223957fa08be74965350a4638f44e6390ac8172ec6ea485c7b8134b8cd721 extends Twig_Template
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

<div class=\"shop-header-area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t<div class=\"shop-header-title\">
\t\t\t\t\t\t<h1>Shop All Products</h1>
\t\t\t\t\t\t<div class=\"shop-menu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">All</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Clothes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dress</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Handbag</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Hats</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Men</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Women</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

<div class=\"shop-area\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- shop-left-sidebar start -->
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
\t\t\t\t\t<!-- widget-categories start -->
\t\t\t\t\t<aside class=\"widget widget-categories\">
\t\t\t\t\t\t<h3 class=\"sidebar-title\">Categories</h3>
\t\t\t\t\t\t<ul class=\"sidebar-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">Clothes</a> <span class=\"count\">(14)</span></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Men</a> <span class=\"count\">(9)</span></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Shoes</a> <span class=\"count\">(2)</span></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Sunglasses</a> <span class=\"count\">(2)</span></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Women</a> <span class=\"count\">(8)</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t\t<!-- widget-categories end -->
\t\t\t\t\t<!-- shop-filter start -->
\t\t\t\t\t<aside class=\"widget shop-filter\">
\t\t\t\t\t\t<h3 class=\"sidebar-title\">price</h3>
\t\t\t\t\t\t<div class=\"info_widget\">
\t\t\t\t\t\t\t<div class=\"price_filter\">
\t\t\t\t\t\t\t\t<div id=\"slider-range\" class=\"ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\"><div class=\"ui-slider-range ui-widget-header ui-corner-all\" style=\"left: 3.75%; width: 90.8929%;\"></div><span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\" style=\"left: 3.75%;\"></span><span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\" style=\"left: 94.6429%;\"></span></div>
\t\t\t\t\t\t\t\t<div class=\"price_slider_amount\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"amount\" name=\"price\" placeholder=\"Add Your Price\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Filter\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>
\t\t\t\t\t<!-- shop-filter end -->
\t\t\t\t\t<!-- filter-by start -->
\t\t\t\t\t<aside class=\"widget filter-by\">
\t\t\t\t\t\t<h3 class=\"sidebar-title\">Filter by</h3>
\t\t\t\t\t\t<ul class=\"sidebar-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">L</a> <span class=\"count\">(1)</span></li>
\t\t\t\t\t\t\t<li><a href=\"#\">M</a> <span class=\"count\">(1)</span></li>
\t\t\t\t\t\t\t<li><a href=\"#\">S</a> <span class=\"count\">(1)</span></li>
\t\t\t\t\t\t\t<li><a href=\"#\">XL</a> <span class=\"count\">(1)</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t\t<!-- filter-by end -->
\t\t\t\t\t<!-- widget-tags start -->
\t\t\t\t\t<aside class=\"widget widget-tags\">
\t\t\t\t\t\t<h3 class=\"sidebar-title\">Tags</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">asian</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">brown</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">euro</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">fashion</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">france</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">hat</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">travel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">white</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">t-shirt</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">teen</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t\t<!-- widget-tags end -->
\t\t\t\t\t<!-- widget-recent start -->
\t\t\t\t\t<aside class=\"widget top-product-widget\">
\t\t\t\t\t\t<h3 class=\"sidebar-title\">Top rated products</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/15.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/16.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-info\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Curabitur vulputate</a></h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£90.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price\">£120.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/women/8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/women/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-info\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Aliquam lobortis est</a></h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£70.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price\">£100.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-info\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Pellentesque posuere</a></h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£50.00</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</aside>
\t\t\t\t\t<!-- widget-recent end -->
\t\t\t\t</div>
\t\t\t\t<!-- blog-left-sidebar end -->
\t\t\t\t<div class=\"col-lg-9 col-md-9 col-sm-12 col-xs-12\">
\t\t\t\t\t<!-- toolbar start -->
\t\t\t\t\t<div class=\"toolbar\">
\t\t\t\t\t\t<div class=\"view-mode\">
\t\t\t\t\t\t\t<a class=\"active\" href=\"shop.html\"><i class=\"fa fa-th-large\"></i></a>
\t\t\t\t\t\t\t<a class=\"list\" href=\"shop-list.html\"><i class=\"fa fa-th-list\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"show-result\">
\t\t\t\t\t\t\t<p> Showing 1–12 of 19 results</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"toolbar-form\">
\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t<div class=\"tolbar-select\">
\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t<option value=\"volvo\">Sort by popularity</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"saab\">Default sorting</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"mercedes\">Sort by average rating</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"audi\">Sort by newness</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"audi\">Sort by price: low to high</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"audi\">Sort by price: high to low</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- toolbar end -->
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"grid-view\">
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<span class=\"sale-text\">Sale</span>
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/17.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/18.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Convallis quam sit</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£90.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<span class=\"sale-text\">Sale</span>
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Vestibulum suscipit</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£50.00</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price\">£80.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/women/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/women/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Pellentesque posuere</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£100.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/women/7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/women/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Pellentesque posuere</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£100.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Vestibulum dictum magna</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£150.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/women/8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/women/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Light house shoes</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£90.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<span class=\"sale-text\">Sale</span>
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/women/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/women/7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Kaoreet lobortis</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£60.00</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price\">£100.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<span class=\"sale-text\">Sale</span>
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Tincidunt malesuada</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£90.00</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price\">£120.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/women/6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/women/9.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Condimentum posuere</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£130.00</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price\">£180.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/women/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/women/7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Lorem ipsum dolor sit amet</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£150.00</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price\">£180.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<span class=\"sale-text\">Sale</span>
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/7.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/8.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Sport Adidas shoes</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£100.00</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price\">£130.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t\t<!-- single-product start -->
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"single-product\">
\t\t\t\t\t\t\t\t\t<span class=\"sale-text\">Sale</span>
\t\t\t\t\t\t\t\t\t<div class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"primary-image\" src=\"img/product/6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"secondary-image\" src=\"img/product/13.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add to Wishlist\"><i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"compare-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Compare\"><i class=\"fa fa-exchange\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickviewbtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"Quick View\"><i class=\"fa fa-search-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"product-name\"><a href=\"#\">Sport Adidas shoes</a></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"pro-rating\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-star\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"new-price\">£130.00</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"old-price\">£150.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- single-product end -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- pagination start -->
\t\t\t\t\t<div class=\"shop-pagination\">
\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"active\">1</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- pagination end -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        // line 879
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  760 => 879,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* <div class="shop-header-area">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-12 col-sm-12">*/
/* 					<div class="shop-header-title">*/
/* 						<h1>Shop All Products</h1>*/
/* 						<div class="shop-menu">*/
/* 							<ul>*/
/* 								<li><a href="#">All</a></li>*/
/* 								<li><a href="#">Clothes</a></li>*/
/* 								<li><a href="#">Dress</a></li>*/
/* 								<li><a href="#">Handbag</a></li>*/
/* 								<li><a href="#">Hats</a></li>*/
/* 								<li><a href="#">Men</a></li>*/
/* 								<li><a href="#">Women</a></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <div class="shop-area">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<!-- shop-left-sidebar start -->*/
/* 				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/* 					<!-- widget-categories start -->*/
/* 					<aside class="widget widget-categories">*/
/* 						<h3 class="sidebar-title">Categories</h3>*/
/* 						<ul class="sidebar-menu">*/
/* 							<li><a href="#">Clothes</a> <span class="count">(14)</span></li>*/
/* 							<li><a href="#">Men</a> <span class="count">(9)</span></li>*/
/* 							<li><a href="#">Shoes</a> <span class="count">(2)</span></li>*/
/* 							<li><a href="#">Sunglasses</a> <span class="count">(2)</span></li>*/
/* 							<li><a href="#">Women</a> <span class="count">(8)</span></li>*/
/* 						</ul>*/
/* 					</aside>*/
/* 					<!-- widget-categories end -->*/
/* 					<!-- shop-filter start -->*/
/* 					<aside class="widget shop-filter">*/
/* 						<h3 class="sidebar-title">price</h3>*/
/* 						<div class="info_widget">*/
/* 							<div class="price_filter">*/
/* 								<div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 3.75%; width: 90.8929%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 3.75%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 94.6429%;"></span></div>*/
/* 								<div class="price_slider_amount">*/
/* 									<input type="text" id="amount" name="price" placeholder="Add Your Price">*/
/* 									<input type="submit" value="Filter">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</aside>*/
/* 					<!-- shop-filter end -->*/
/* 					<!-- filter-by start -->*/
/* 					<aside class="widget filter-by">*/
/* 						<h3 class="sidebar-title">Filter by</h3>*/
/* 						<ul class="sidebar-menu">*/
/* 							<li><a href="#">L</a> <span class="count">(1)</span></li>*/
/* 							<li><a href="#">M</a> <span class="count">(1)</span></li>*/
/* 							<li><a href="#">S</a> <span class="count">(1)</span></li>*/
/* 							<li><a href="#">XL</a> <span class="count">(1)</span></li>*/
/* 						</ul>*/
/* 					</aside>*/
/* 					<!-- filter-by end -->*/
/* 					<!-- widget-tags start -->*/
/* 					<aside class="widget widget-tags">*/
/* 						<h3 class="sidebar-title">Tags</h3>*/
/* 						<ul>*/
/* 							<li><a href="#">asian</a></li>*/
/* 							<li><a href="#">brown</a></li>*/
/* 							<li><a href="#">euro</a></li>*/
/* 							<li><a href="#">fashion</a></li>*/
/* 							<li><a href="#">france</a></li>*/
/* 							<li><a href="#">hat</a></li>*/
/* 							<li><a href="#">travel</a></li>*/
/* 							<li><a href="#">white</a></li>*/
/* 							<li><a href="#">t-shirt</a></li>*/
/* 							<li><a href="#">teen</a></li>*/
/* 						</ul>*/
/* 					</aside>*/
/* 					<!-- widget-tags end -->*/
/* 					<!-- widget-recent start -->*/
/* 					<aside class="widget top-product-widget">*/
/* 						<h3 class="sidebar-title">Top rated products</h3>*/
/* 						<ul>*/
/* 							<li>*/
/* 								<div class="single-product">*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/15.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/16.jpg" alt="">*/
/* 										</a>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<div class="pro-info">*/
/* 											<h2 class="product-name"><a href="#">Curabitur vulputate</a></h2>*/
/* 											<div class="price-box">*/
/* 												<span class="new-price">£90.00</span>*/
/* 												<span class="old-price">£120.00</span>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li>*/
/* 								<div class="single-product">*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/women/8.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/women/1.jpg" alt="">*/
/* 										</a>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<div class="pro-info">*/
/* 											<h2 class="product-name"><a href="#">Aliquam lobortis est</a></h2>*/
/* 											<div class="price-box">*/
/* 												<span class="new-price">£70.00</span>*/
/* 												<span class="old-price">£100.00</span>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li>*/
/* 								<div class="single-product">*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/6.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/7.jpg" alt="">*/
/* 										</a>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<div class="pro-info">*/
/* 											<h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>*/
/* 											<div class="price-box">*/
/* 												<span class="new-price">£50.00</span>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</aside>*/
/* 					<!-- widget-recent end -->*/
/* 				</div>*/
/* 				<!-- blog-left-sidebar end -->*/
/* 				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">*/
/* 					<!-- toolbar start -->*/
/* 					<div class="toolbar">*/
/* 						<div class="view-mode">*/
/* 							<a class="active" href="shop.html"><i class="fa fa-th-large"></i></a>*/
/* 							<a class="list" href="shop-list.html"><i class="fa fa-th-list"></i></a>*/
/* 						</div>*/
/* 						<div class="show-result">*/
/* 							<p> Showing 1–12 of 19 results</p>*/
/* 						</div>*/
/* 						<div class="toolbar-form">*/
/* 							<form action="#">*/
/* 								<div class="tolbar-select">*/
/* 									<select>*/
/* 										<option value="volvo">Sort by popularity</option>*/
/* 										<option value="saab">Default sorting</option>*/
/* 										<option value="mercedes">Sort by average rating</option>*/
/* 										<option value="audi">Sort by newness</option>*/
/* 										<option value="audi">Sort by price: low to high</option>*/
/* 										<option value="audi">Sort by price: high to low</option>*/
/* 									</select>*/
/* 								</div>*/
/* 							</form>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- toolbar end -->*/
/* 					<div class="clear"></div>*/
/* 					<div class="row">*/
/* 						<div class="grid-view">*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<span class="sale-text">Sale</span>*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/17.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/18.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Convallis quam sit</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£90.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<span class="sale-text">Sale</span>*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/1.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/2.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Vestibulum suscipit</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£50.00</span>*/
/* 											<span class="old-price">£80.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/women/2.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/women/1.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£100.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/women/7.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/women/2.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£100.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/3.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/4.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Vestibulum dictum magna</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£150.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/women/8.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/women/3.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Light house shoes</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£90.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<span class="sale-text">Sale</span>*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/women/4.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/women/7.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Kaoreet lobortis</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£60.00</span>*/
/* 											<span class="old-price">£100.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<span class="sale-text">Sale</span>*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/5.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/6.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Tincidunt malesuada</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£90.00</span>*/
/* 											<span class="old-price">£120.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/women/6.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/women/9.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Condimentum posuere</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£130.00</span>*/
/* 											<span class="old-price">£180.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/women/5.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/women/7.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£150.00</span>*/
/* 											<span class="old-price">£180.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<span class="sale-text">Sale</span>*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/7.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/8.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Sport Adidas shoes</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£100.00</span>*/
/* 											<span class="old-price">£130.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 							<!-- single-product start -->*/
/* 							<div class="col-lg-4 col-md-4 col-sm-4">*/
/* 								<div class="single-product">*/
/* 									<span class="sale-text">Sale</span>*/
/* 									<div class="product-img">*/
/* 										<a href="#">*/
/* 											<img class="primary-image" src="img/product/6.jpg" alt="">*/
/* 											<img class="secondary-image" src="img/product/13.jpg" alt="">*/
/* 										</a>*/
/* 										<div class="actions">*/
/* 											<div class="action-buttons">*/
/* 												<div class="add-to-cart">*/
/* 													<a href="#">Add to cart</a>*/
/* 												</div>*/
/* 												<div class="add-to-links">*/
/* 													<div class="add-to-wishlist">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-star"></i>*/
/* 														</a>*/
/* 													</div>*/
/* 													<div class="compare-button">*/
/* 														<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-exchange"></i></a>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="quickviewbtn">*/
/* 													<a href="#" data-toggle="tooltip" title="" data-original-title="Quick View"><i class="fa fa-search-plus"></i></a>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="product-content">*/
/* 										<h2 class="product-name"><a href="#">Sport Adidas shoes</a></h2>*/
/* 										<div class="pro-rating">*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 											<a href="#"><i class="fa fa-star"></i></a>*/
/* 										</div>*/
/* 										<div class="price-box">*/
/* 											<span class="new-price">£130.00</span>*/
/* 											<span class="old-price">£150.00</span>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- single-product end -->*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- pagination start -->*/
/* 					<div class="shop-pagination">*/
/* 						<div class="pagination">*/
/* 							<ul>*/
/* 								<li class="active">1</li>*/
/* 								<li><a href="#">2</a></li>*/
/* 								<li><a href="#">3</a></li>*/
/* 								<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- pagination end -->*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {# <div id="product-category" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2>{{ heading_title }}</h2>*/
/*       {% if thumb or description %}*/
/*       <div class="row"> {% if thumb %}*/
/*         <div class="col-sm-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-sm-10">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*       <hr>*/
/*       {% endif %}*/
/*       {% if categories %}*/
/*       <h3>{{ text_refine }}</h3>*/
/*       {% if categories|length <= 5 %}*/
/*       <div class="row">*/
/*         <div class="col-sm-3">*/
/*           <ul>*/
/*             {% for category in categories %}*/
/*             <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {% else %}*/
/*       <div class="row">{% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/*         <div class="col-sm-3">*/
/*           <ul>*/
/*             {% for child in category %}*/
/*             <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       <br />*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% if products %}*/
/*       <div class="row">*/
/*         <div class="col-md-2 col-sm-6 hidden-xs">*/
/*           <div class="btn-group btn-group-sm">*/
/*             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-sm-6">*/
/*           <div class="form-group"><a href="{{ compare }}" id="compare-total" class="btn btn-link">{{ text_compare }}</a></div>*/
/*         </div>*/
/*         <div class="col-md-4 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*             <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row"> {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-thumb">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*             <div>*/
/*               <div class="caption">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                 <p>{{ product.description }}</p>*/
/*                 {% if product.price %}*/
/*                 <p class="price"> {% if not product.special %}*/
/*                   {{ product.price }}*/
/*                   {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                   {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %}*/
/*                 </p>*/
/*                 {% endif %}*/
/*                 {% if product.rating %}*/
/*                 <div class="rating"> {% for i in 1..5 %}*/
/*                   {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="button-group">*/
/*                 <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*     {{ column_right }}*/
/*   </div>*/
/* </div> #}*/
/* {{ footer }}*/
