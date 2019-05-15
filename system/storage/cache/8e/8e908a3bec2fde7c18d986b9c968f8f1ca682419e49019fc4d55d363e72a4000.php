<?php

/* default/template/account/download.twig */
class __TwigTemplate_f100981c2163724819b17de6dcee0543425bccfa1377b618317da33c13ae5c4b extends Twig_Template
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
<div id=\"account-download\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      ";
        // line 18
        if ((isset($context["downloads"]) ? $context["downloads"] : null)) {
            // line 19
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 23
            echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 24
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>
              <td class=\"text-center\">";
            // line 25
            echo (isset($context["column_size"]) ? $context["column_size"] : null);
            echo "</td>
              <td class=\"text-center\">";
            // line 26
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
          ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["downloads"]) ? $context["downloads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 32
                echo "          <tr>
            <td class=\"text-center\">";
                // line 33
                echo $this->getAttribute($context["download"], "order_id", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 34
                echo $this->getAttribute($context["download"], "name", array());
                echo "</td>
            <td class=\"text-center\">";
                // line 35
                echo $this->getAttribute($context["download"], "size", array());
                echo "</td>
            <td class=\"text-center\">";
                // line 36
                echo $this->getAttribute($context["download"], "date_added", array());
                echo "</td>
            <td class=\"text-center\"><a href=\"";
                // line 37
                echo $this->getAttribute($context["download"], "href", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_download"]) ? $context["button_download"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-cloud-download\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 44
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 45
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        } else {
            // line 48
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 50
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 51
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 53
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    ";
        // line 55
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  </div>
</div>
";
        // line 58
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/download.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 58,  177 => 55,  172 => 53,  165 => 51,  162 => 50,  156 => 48,  150 => 45,  146 => 44,  140 => 40,  129 => 37,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  110 => 32,  106 => 31,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-download" class="container">*/
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
/*       {% if downloads %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-center">{{ column_order_id }}</td>*/
/*               <td class="text-left">{{ column_name }}</td>*/
/*               <td class="text-center">{{ column_size }}</td>*/
/*               <td class="text-center">{{ column_date_added }}</td>*/
/*               <td></td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           {% for download in downloads %}*/
/*           <tr>*/
/*             <td class="text-center">{{ download.order_id }}</td>*/
/*             <td class="text-left">{{ download.name }}</td>*/
/*             <td class="text-center">{{ download.size }}</td>*/
/*             <td class="text-center">{{ download.date_added }}</td>*/
/*             <td class="text-center"><a href="{{ download.href }}" data-toggle="tooltip" title="{{ button_download }}" class="btn btn-primary"><i class="fa fa-cloud-download"></i></a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*     {{ column_right }}*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
