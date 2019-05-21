<?php

/* default/template/common/search.twig */
class __TwigTemplate_f0a3cf7c806ffca15f539601859f939ee4bfeefe11e816544e2d113dcd2e7fda extends Twig_Template
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
