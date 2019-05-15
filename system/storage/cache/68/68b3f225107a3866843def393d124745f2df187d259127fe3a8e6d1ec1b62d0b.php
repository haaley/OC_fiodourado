<?php

/* install/step_2.twig */
class __TwigTemplate_a3647cb0f8b4d71c3022df6777dda03fed04ab15da54d6019caf01b8a250666f extends Twig_Template
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
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">2
          <small>/4</small>
        </h1>
        <h3>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "
          <br>
          <small>";
        // line 11
        echo (isset($context["text_step_2"]) ? $context["text_step_2"] : null);
        echo "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\"/></div>
      </div>
    </div>
  </header>
  ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 24
        echo "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <p>";
        // line 27
        echo (isset($context["text_install_php"]) ? $context["text_install_php"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 32
        echo (isset($context["text_setting"]) ? $context["text_setting"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 33
        echo (isset($context["text_current"]) ? $context["text_current"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 34
        echo (isset($context["text_required"]) ? $context["text_required"] : null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 35
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 40
        echo (isset($context["text_version"]) ? $context["text_version"] : null);
        echo "</td>
                <td>";
        // line 41
        echo (isset($context["php_version"]) ? $context["php_version"] : null);
        echo "</td>
                <td>5.6+</td>
                <td class=\"text-center\">
                  ";
        // line 44
        if ((isset($context["version"]) ? $context["version"] : null)) {
            // line 45
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 47
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 48
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 51
        echo (isset($context["text_global"]) ? $context["text_global"] : null);
        echo "</td>
                <td>";
        // line 52
        if ((isset($context["register_globals"]) ? $context["register_globals"] : null)) {
            // line 53
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 55
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 56
        echo "</td>
                <td>";
        // line 57
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 59
        if ( !(isset($context["register_globals"]) ? $context["register_globals"] : null)) {
            // line 60
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 62
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 63
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 66
        echo (isset($context["text_magic"]) ? $context["text_magic"] : null);
        echo "</td>
                <td>";
        // line 67
        if ((isset($context["magic_quotes_gpc"]) ? $context["magic_quotes_gpc"] : null)) {
            // line 68
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 70
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 71
        echo "</td>
                <td>";
        // line 72
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">
                  ";
        // line 74
        if ( !(isset($context["error_magic_quotes_gpc"]) ? $context["error_magic_quotes_gpc"] : null)) {
            // line 75
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 77
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 78
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 81
        echo (isset($context["text_file_upload"]) ? $context["text_file_upload"] : null);
        echo "</td>
                <td>";
        // line 82
        if ((isset($context["file_uploads"]) ? $context["file_uploads"] : null)) {
            // line 83
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 85
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 86
        echo "</td>
                <td>";
        // line 87
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 88
        if ((isset($context["file_uploads"]) ? $context["file_uploads"] : null)) {
            // line 89
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 91
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 92
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 95
        echo (isset($context["text_session"]) ? $context["text_session"] : null);
        echo "</td>
                <td>";
        // line 96
        if ((isset($context["session_auto_start"]) ? $context["session_auto_start"] : null)) {
            // line 97
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 99
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 100
        echo "</td>
                <td>";
        // line 101
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 102
        if ( !(isset($context["session_auto_start"]) ? $context["session_auto_start"] : null)) {
            // line 103
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 105
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 106
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 111
        echo (isset($context["text_install_extension"]) ? $context["text_install_extension"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 116
        echo (isset($context["text_extension"]) ? $context["text_extension"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 117
        echo (isset($context["text_current"]) ? $context["text_current"] : null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 118
        echo (isset($context["text_required"]) ? $context["text_required"] : null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 119
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 124
        echo (isset($context["text_db"]) ? $context["text_db"] : null);
        echo "</td>
                <td>";
        // line 125
        if ((isset($context["db"]) ? $context["db"] : null)) {
            // line 126
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 128
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 129
        echo "</td>
                <td>";
        // line 130
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 131
        if ((isset($context["db"]) ? $context["db"] : null)) {
            // line 132
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 134
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 135
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 138
        echo (isset($context["text_gd"]) ? $context["text_gd"] : null);
        echo "</td>
                <td>";
        // line 139
        if ((isset($context["gd"]) ? $context["gd"] : null)) {
            // line 140
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 142
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 143
        echo "</td>
                <td>";
        // line 144
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 145
        if ((isset($context["gd"]) ? $context["gd"] : null)) {
            // line 146
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 148
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 149
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 152
        echo (isset($context["text_curl"]) ? $context["text_curl"] : null);
        echo "</td>
                <td>";
        // line 153
        if ((isset($context["curl"]) ? $context["curl"] : null)) {
            // line 154
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 156
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 157
        echo "</td>
                <td>";
        // line 158
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 159
        if ((isset($context["curl"]) ? $context["curl"] : null)) {
            // line 160
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 162
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 163
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 166
        echo (isset($context["text_openssl"]) ? $context["text_openssl"] : null);
        echo "</td>
                <td>";
        // line 167
        if ((isset($context["openssl"]) ? $context["openssl"] : null)) {
            // line 168
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 170
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 171
        echo "</td>
                <td>";
        // line 172
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 173
        if ((isset($context["openssl"]) ? $context["openssl"] : null)) {
            // line 174
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 176
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 177
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 180
        echo (isset($context["text_zlib"]) ? $context["text_zlib"] : null);
        echo "</td>
                <td>";
        // line 181
        if ((isset($context["zlib"]) ? $context["zlib"] : null)) {
            // line 182
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 184
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 185
        echo "</td>
                <td>";
        // line 186
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 187
        if ((isset($context["zlib"]) ? $context["zlib"] : null)) {
            // line 188
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 190
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 191
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 194
        echo (isset($context["text_zip"]) ? $context["text_zip"] : null);
        echo "</td>
                <td>";
        // line 195
        if ((isset($context["zip"]) ? $context["zip"] : null)) {
            // line 196
            echo "                    ";
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "
                  ";
        } else {
            // line 198
            echo "                    ";
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "
                  ";
        }
        // line 199
        echo "</td>
                <td>";
        // line 200
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</td>
                <td class=\"text-center\">";
        // line 201
        if ((isset($context["zip"]) ? $context["zip"] : null)) {
            // line 202
            echo "                    <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 204
            echo "                    <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 205
        echo "</td>
              </tr>
              ";
        // line 207
        if ( !(isset($context["iconv"]) ? $context["iconv"] : null)) {
            // line 208
            echo "                <tr>
                  <td>";
            // line 209
            echo (isset($context["text_mbstring"]) ? $context["text_mbstring"] : null);
            echo "</td>
                  <td>";
            // line 210
            if ((isset($context["mbstring"]) ? $context["mbstring"] : null)) {
                // line 211
                echo "                      ";
                echo (isset($context["text_on"]) ? $context["text_on"] : null);
                echo "
                    ";
            } else {
                // line 213
                echo "                      ";
                echo (isset($context["text_off"]) ? $context["text_off"] : null);
                echo "
                    ";
            }
            // line 214
            echo "</td>
                  <td>";
            // line 215
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "</td>
                  <td class=\"text-center\">";
            // line 216
            if ((isset($context["mbstring"]) ? $context["mbstring"] : null)) {
                // line 217
                echo "                      <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                    ";
            } else {
                // line 219
                echo "                      <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                    ";
            }
            // line 220
            echo "</td>
                </tr>
              ";
        }
        // line 223
        echo "            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 226
        echo (isset($context["text_install_file"]) ? $context["text_install_file"] : null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td><b>";
        // line 231
        echo (isset($context["text_file"]) ? $context["text_file"] : null);
        echo "</b></td>
                <td><b>";
        // line 232
        echo (isset($context["text_status"]) ? $context["text_status"] : null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 237
        echo (isset($context["catalog_config"]) ? $context["catalog_config"] : null);
        echo "</td>
                <td>";
        // line 238
        if ( !(isset($context["error_catalog_config"]) ? $context["error_catalog_config"] : null)) {
            // line 239
            echo "                    <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 241
            echo "                    <span class=\"text-danger\">";
            echo (isset($context["error_catalog_config"]) ? $context["error_catalog_config"] : null);
            echo "</span>
                  ";
        }
        // line 242
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 245
        echo (isset($context["admin_config"]) ? $context["admin_config"] : null);
        echo "</td>
                <td>";
        // line 246
        if ( !(isset($context["error_admin_config"]) ? $context["error_admin_config"] : null)) {
            // line 247
            echo "                    <span class=\"text-success\">";
            echo (isset($context["text_writable"]) ? $context["text_writable"] : null);
            echo "</span>
                  ";
        } else {
            // line 249
            echo "                    <span class=\"text-danger\">";
            echo (isset($context["error_admin_config"]) ? $context["error_admin_config"] : null);
            echo "</span>
                  ";
        }
        // line 250
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 256
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 258
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\"/>
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 263
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "</div>
  </div>
</div>
";
        // line 266
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "install/step_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  688 => 266,  682 => 263,  674 => 258,  667 => 256,  659 => 250,  653 => 249,  647 => 247,  645 => 246,  641 => 245,  636 => 242,  630 => 241,  624 => 239,  622 => 238,  618 => 237,  610 => 232,  606 => 231,  598 => 226,  593 => 223,  588 => 220,  584 => 219,  580 => 217,  578 => 216,  574 => 215,  571 => 214,  565 => 213,  559 => 211,  557 => 210,  553 => 209,  550 => 208,  548 => 207,  544 => 205,  540 => 204,  536 => 202,  534 => 201,  530 => 200,  527 => 199,  521 => 198,  515 => 196,  513 => 195,  509 => 194,  504 => 191,  500 => 190,  496 => 188,  494 => 187,  490 => 186,  487 => 185,  481 => 184,  475 => 182,  473 => 181,  469 => 180,  464 => 177,  460 => 176,  456 => 174,  454 => 173,  450 => 172,  447 => 171,  441 => 170,  435 => 168,  433 => 167,  429 => 166,  424 => 163,  420 => 162,  416 => 160,  414 => 159,  410 => 158,  407 => 157,  401 => 156,  395 => 154,  393 => 153,  389 => 152,  384 => 149,  380 => 148,  376 => 146,  374 => 145,  370 => 144,  367 => 143,  361 => 142,  355 => 140,  353 => 139,  349 => 138,  344 => 135,  340 => 134,  336 => 132,  334 => 131,  330 => 130,  327 => 129,  321 => 128,  315 => 126,  313 => 125,  309 => 124,  301 => 119,  297 => 118,  293 => 117,  289 => 116,  281 => 111,  274 => 106,  270 => 105,  266 => 103,  264 => 102,  260 => 101,  257 => 100,  251 => 99,  245 => 97,  243 => 96,  239 => 95,  234 => 92,  230 => 91,  226 => 89,  224 => 88,  220 => 87,  217 => 86,  211 => 85,  205 => 83,  203 => 82,  199 => 81,  194 => 78,  190 => 77,  186 => 75,  184 => 74,  179 => 72,  176 => 71,  170 => 70,  164 => 68,  162 => 67,  158 => 66,  153 => 63,  149 => 62,  145 => 60,  143 => 59,  138 => 57,  135 => 56,  129 => 55,  123 => 53,  121 => 52,  117 => 51,  112 => 48,  108 => 47,  104 => 45,  102 => 44,  96 => 41,  92 => 40,  84 => 35,  80 => 34,  76 => 33,  72 => 32,  64 => 27,  60 => 26,  56 => 24,  48 => 20,  46 => 19,  35 => 11,  30 => 9,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">2*/
/*           <small>/4</small>*/
/*         </h1>*/
/*         <h3>{{ heading_title }}*/
/*           <br>*/
/*           <small>{{ text_step_2 }}</small>*/
/*         </h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart"/></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="row">*/
/*     <div class="col-sm-9">*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <p>{{ text_install_php }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td width="35%"><b>{{ text_setting }}</b></td>*/
/*                 <td width="25%"><b>{{ text_current }}</b></td>*/
/*                 <td width="25%"><b>{{ text_required }}</b></td>*/
/*                 <td width="15%" class="text-center"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_version }}</td>*/
/*                 <td>{{ php_version }}</td>*/
/*                 <td>5.6+</td>*/
/*                 <td class="text-center">*/
/*                   {% if version %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_global }}</td>*/
/*                 <td>{% if register_globals %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if not register_globals %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_magic }}</td>*/
/*                 <td>{% if magic_quotes_gpc %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">*/
/*                   {% if not error_magic_quotes_gpc %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_file_upload }}</td>*/
/*                 <td>{% if file_uploads %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if file_uploads %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_session }}</td>*/
/*                 <td>{% if session_auto_start %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_off }}</td>*/
/*                 <td class="text-center">{% if not session_auto_start %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_extension }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td width="35%"><b>{{ text_extension }}</b></td>*/
/*                 <td width="25%"><b>{{ text_current }}</b></td>*/
/*                 <td width="25%"><b>{{ text_required }}</b></td>*/
/*                 <td width="15%" class="text-center"><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ text_db }}</td>*/
/*                 <td>{% if db %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if db %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_gd }}</td>*/
/*                 <td>{% if gd %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if gd %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_curl }}</td>*/
/*                 <td>{% if curl %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if curl %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_openssl }}</td>*/
/*                 <td>{% if openssl %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if openssl %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_zlib }}</td>*/
/*                 <td>{% if zlib %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if zlib %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ text_zip }}</td>*/
/*                 <td>{% if zip %}*/
/*                     {{ text_on }}*/
/*                   {% else %}*/
/*                     {{ text_off }}*/
/*                   {% endif %}</td>*/
/*                 <td>{{ text_on }}</td>*/
/*                 <td class="text-center">{% if zip %}*/
/*                     <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                   {% else %}*/
/*                     <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               {% if not iconv %}*/
/*                 <tr>*/
/*                   <td>{{ text_mbstring }}</td>*/
/*                   <td>{% if mbstring %}*/
/*                       {{ text_on }}*/
/*                     {% else %}*/
/*                       {{ text_off }}*/
/*                     {% endif %}</td>*/
/*                   <td>{{ text_on }}</td>*/
/*                   <td class="text-center">{% if mbstring %}*/
/*                       <span class="text-success"><i class="fa fa-check-circle"></i></span>*/
/*                     {% else %}*/
/*                       <span class="text-danger"><i class="fa fa-minus-circle"></i></span>*/
/*                     {% endif %}</td>*/
/*                 </tr>*/
/*               {% endif %}*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <p>{{ text_install_file }}</p>*/
/*         <fieldset>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td><b>{{ text_file }}</b></td>*/
/*                 <td><b>{{ text_status }}</b></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               <tr>*/
/*                 <td>{{ catalog_config }}</td>*/
/*                 <td>{% if not error_catalog_config %}*/
/*                     <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                     <span class="text-danger">{{ error_catalog_config }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*               <tr>*/
/*                 <td>{{ admin_config }}</td>*/
/*                 <td>{% if not error_admin_config %}*/
/*                     <span class="text-success">{{ text_writable }}</span>*/
/*                   {% else %}*/
/*                     <span class="text-danger">{{ error_admin_config }}</span>*/
/*                   {% endif %}</td>*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary"/>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*     <div class="col-sm-3">{{ column_left }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
