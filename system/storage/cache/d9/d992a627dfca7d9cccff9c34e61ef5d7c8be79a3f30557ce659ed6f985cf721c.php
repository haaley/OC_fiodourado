<?php

/* default/template/common/search.twig */
class __TwigTemplate_6452b55e7a8b4d4c8ce07f6cfa0b26e8defdb4e7d8fb4d0acfbcd3d13c4307e1 extends Twig_Template
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
        echo " <div id=\"search\" class=\"header-search\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" />
  <span>
    <button type=\"button\"><i class=\"fa fa-search\"></i></button>
  </span>
</div> 
";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/*  <div id="search" class="header-search">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" />*/
/*   <span>*/
/*     <button type="button"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div> */
/* */
