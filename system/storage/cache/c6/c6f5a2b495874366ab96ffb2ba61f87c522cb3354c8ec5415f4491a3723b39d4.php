<?php

/* default/template/information/contact.twig */
class __TwigTemplate_b5aa3c31d2c81fe3a28333c5a8c0e799c5e32e5c5e6251eaef5aed2e91079337 extends Twig_Template
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




<div class=\"contact-area\">
\t\t<div class=\"container\">
\t\t\t\t<!-- contact-info start -->
          <div class=\"col-md-12\">
\t\t\t\t\t<div class=\"breadcrumb\">
\t\t\t\t\t\t<ul>
             ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "             <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t<h3>Informações de Contato</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i> <strong>Address</strong>
\t\t\t\t\t\t\t\t1234 Pall Mall Street, London England
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i> <strong>Phone</strong>
\t\t\t\t\t\t\t\t(800) 0123 4567 890
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"fa fa-mobile\"></i> <strong>Email</strong>
\t\t\t\t\t\t\t\t<a href=\"#\">admin@themepure.net</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- contact-info end -->
\t\t\t\t<div class=\"col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"contact-form\">
\t\t\t\t\t\t<h3><i class=\"fa fa-envelope-o\"></i> ";
        // line 40
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</h3>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<form action=\"";
        // line 42
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" type=\"text\" value\"";
        // line 44
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" placeholder=\"Nome (obrigatório)\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<input name=\"email\" type=\"email\" value=\"";
        // line 47
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" placeholder=\"Email (required)\" />
                     ";
        // line 48
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 49
            echo "                     <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                      ";
        }
        // line 51
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t<input name=\"subject\" type=\"text\" placeholder=\"Subject\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 56
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
                     ";
        // line 57
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 58
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>
                      ";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Submit Form\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- contact-area end -->

";
        // line 71
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "









";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 71,  122 => 60,  116 => 58,  114 => 57,  110 => 56,  103 => 51,  97 => 49,  95 => 48,  91 => 47,  85 => 44,  80 => 42,  75 => 40,  48 => 15,  37 => 13,  33 => 12,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* */
/* */
/* */
/* <div class="contact-area">*/
/* 		<div class="container">*/
/* 				<!-- contact-info start -->*/
/*           <div class="col-md-12">*/
/* 					<div class="breadcrumb">*/
/* 						<ul>*/
/*              {% for breadcrumb in breadcrumbs %}*/
/*              <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*              {% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-6 col-sm-12 col-xs-12">*/
/* 					<div class="contact-info">*/
/* 						<h3>Informações de Contato</h3>*/
/* 						<ul>*/
/* 							<li>*/
/* 								<i class="fa fa-map-marker"></i> <strong>Address</strong>*/
/* 								1234 Pall Mall Street, London England*/
/* 							</li>*/
/* 							<li>*/
/* 								<i class="fa fa-envelope"></i> <strong>Phone</strong>*/
/* 								(800) 0123 4567 890*/
/* 							</li>*/
/* 							<li>*/
/* 								<i class="fa fa-mobile"></i> <strong>Email</strong>*/
/* 								<a href="#">admin@themepure.net</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- contact-info end -->*/
/* 				<div class="col-md-6 col-sm-12 col-xs-12">*/
/* 					<div class="contact-form">*/
/* 						<h3><i class="fa fa-envelope-o"></i> {{ entry_name }}</h3>*/
/* 						<div class="row">*/
/* 							<form action="{{ action }}" method="POST">*/
/* 								<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 									<input name="name" type="text" value"{{ name }}" id="input-name" placeholder="Nome (obrigatório)" />*/
/* 								</div>*/
/* 								<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 									<input name="email" type="email" value="{{ email }}" id="input-email" placeholder="Email (required)" />*/
/*                      {% if error_email %}*/
/*                      <div class="text-danger">{{ error_email }}</div>*/
/*                       {% endif %}*/
/* 								</div>*/
/* 								<div class="col-md-12 col-sm-12 col-xs-12">*/
/* 									<input name="subject" type="text" placeholder="Subject" />*/
/* 								</div>*/
/* 								<div class="col-md-12 col-sm-12 col-xs-12">*/
/*                     <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*                      {% if error_enquiry %}*/
/*                     <div class="text-danger">{{ error_enquiry }}</div>*/
/*                       {% endif %}*/
/* 									<input type="submit" value="Submit Form" />*/
/* 								</div>*/
/* 							</form>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- contact-area end -->*/
/* */
/* {{ footer }}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {# */
/* <div id="information-contact" class="container">*/
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
/*       <h1>{{ heading_title }}</h1>*/
/*       <h3>{{ text_location }}</h3>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*           <div class="row">*/
/*             {% if image %}*/
/*             <div class="col-sm-3"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail" /></div>*/
/*             {% endif %}*/
/*             <div class="col-sm-3"><strong>{{ store }}</strong><br />*/
/*               <address>*/
/*               {{ address }}*/
/*               </address>*/
/*               {% if geocode %}*/
/*               <a href="https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3"><strong>{{ text_telephone }}</strong><br>*/
/*               {{ telephone }}<br />*/
/*               <br />*/
/*               {% if fax %}*/
/*               <strong>{{ text_fax }}</strong><br>*/
/*               {{ fax }}*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               {% if open %}*/
/*               <strong>{{ text_open }}</strong><br />*/
/*               {{ open }}<br />*/
/*               <br />*/
/*               {% endif %}*/
/*               {% if comment %}*/
/*               <strong>{{ text_comment }}</strong><br />*/
/*               {{ comment }}*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if locations %}*/
/*       <h3>{{ text_store }}</h3>*/
/*       <div class="panel-group" id="accordion">*/
/*         {% for location in locations %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ location.name }} <i class="fa fa-caret-down"></i></a></h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/*             <div class="panel-body">*/
/*               <div class="row">*/
/*                 {% if location.image %}*/
/*                 <div class="col-sm-3"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}" class="img-thumbnail" /></div>*/
/*                 {% endif %}*/
/*                 <div class="col-sm-3"><strong>{{ location.name }}</strong><br />*/
/*                   <address>*/
/*                   {{ location.address }}*/
/*                   </address>*/
/*                   {% if location.geocode %}*/
/*                   <a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3"> <strong>{{ text_telephone }}</strong><br>*/
/*                   {{ location.telephone }}<br />*/
/*                   <br />*/
/*                   {% if location.fax %}*/
/*                   <strong>{{ text_fax }}</strong><br>*/
/*                   {{ location.fax }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/*                   {% if location.open %}*/
/*                   <strong>{{ text_open }}</strong><br />*/
/*                   {{ location.open }}<br />*/
/*                   <br />*/
/*                   {% endif %}*/
/*                   {% if location.comment %}*/
/*                   <strong>{{ text_comment }}</strong><br />*/
/*                   {{ location.comment }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_contact }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*               {% if error_enquiry %}*/
/*               <div class="text-danger">{{ error_enquiry }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-right">*/
/*             <input class="btn btn-primary" type="submit" value="{{ button_submit }}" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div> #}*/
/* */
