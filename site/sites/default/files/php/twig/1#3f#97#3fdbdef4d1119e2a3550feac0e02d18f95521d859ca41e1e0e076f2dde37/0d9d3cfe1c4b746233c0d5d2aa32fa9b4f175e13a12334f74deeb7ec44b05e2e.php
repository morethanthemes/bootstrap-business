<?php

/* themes/bootstrap-business/templates/page.html.twig */
class __TwigTemplate_3f973fdbdef4d1119e2a3550feac0e02d18f95521d859ca41e1e0e076f2dde37 extends Twig_Template
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
        echo "<div id=\"toTop\"><span class=\"glyphicon glyphicon-chevron-up\"></span></div>

";
        // line 3
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_first") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_second")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_third"))) {
            // line 4
            echo "<!-- #pre-header -->
<div id=\"pre-header\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #pre-header-inside -->
        <div id=\"pre-header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
            // line 12
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_first")) {
                // line 13
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 14
                echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_first"));
                echo "
                    </div>
                    ";
            }
            // line 17
            echo "                </div>
                
                <div class=\"col-md-4\">
                    ";
            // line 20
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_second")) {
                // line 21
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 22
                echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_second"));
                echo "
                    </div>
                    ";
            }
            // line 25
            echo "                </div>

                <div class=\"col-md-4\">
                    ";
            // line 28
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_third")) {
                // line 29
                echo "
                    <div class=\"pre-header-area\">
                    ";
                // line 31
                echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_third"));
                echo "
                    </div>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #pre-header-inside -->

    </div>
    <div class=\"toggle-control\"><a href=\"javascript:showPreHeader()\"><span class=\"glyphicon glyphicon-plus\"></span></a></div>
</div>
<!-- EOF: #pre-header -->    
";
        }
        // line 44
        echo "
";
        // line 45
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right"))) {
            // line 46
            echo "<!-- #header-top -->
<div id=\"header-top\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-top-inside -->
        <div id=\"header-top-inside\" class=\"clearfix\">
            <div class=\"row\">
            
            ";
            // line 54
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left")) {
                // line 55
                echo "            <div class=\"";
                echo twig_render_var((isset($context["header_top_left_grid_class"]) ? $context["header_top_left_grid_class"] : null));
                echo "\">
                <!-- #header-top-left -->
                <div id=\"header-top-left\" class=\"clearfix\">
                    ";
                // line 58
                echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left"));
                echo "
                </div>
                <!-- EOF:#header-top-left -->
            </div>
            ";
            }
            // line 63
            echo "            
            ";
            // line 64
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right")) {
                // line 65
                echo "            <div class=\"";
                echo twig_render_var((isset($context["header_top_right_grid_class"]) ? $context["header_top_right_grid_class"] : null));
                echo "\">
                <!-- #header-top-right -->
                <div id=\"header-top-right\" class=\"clearfix\">
                    ";
                // line 68
                echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right"));
                echo "
                </div>
                <!-- EOF:#header-top-right -->
            </div>
            ";
            }
            // line 73
            echo "            
            </div>
        </div>
        <!-- EOF: #header-top-inside -->

    </div>
</div>
<!-- EOF: #header-top -->    
";
        }
        // line 82
        echo "
<!-- header -->
<header id=\"header\" role=\"banner\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-inside -->
        <div id=\"header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                ";
        // line 92
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 93
            echo "                <div id=\"logo\">
                  <a href=\"";
            // line 94
            echo twig_render_var((isset($context["front_page"]) ? $context["front_page"] : null));
            echo "\" title=\"";
            echo twig_render_var(t("Home"));
            echo "\" rel=\"home\" id=\"logo\">
                    <img src=\"";
            // line 95
            echo twig_render_var((isset($context["logo"]) ? $context["logo"] : null));
            echo "\" alt=\"";
            echo twig_render_var(t("Home"));
            echo "\" />
                  </a>
                </div>
                ";
        }
        // line 99
        echo "
                ";
        // line 100
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 101
            echo "                  ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 102
                echo "                    <div id=\"site-name\"";
                if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">
                      <strong>
                        <a href=\"";
                // line 104
                echo twig_render_var((isset($context["front_page"]) ? $context["front_page"] : null));
                echo "\" title=\"";
                echo twig_render_var(t("Home"));
                echo "\" rel=\"home\"><span>";
                echo twig_render_var((isset($context["site_name"]) ? $context["site_name"] : null));
                echo "</span></a>
                      </strong>
                    </div>
                  ";
                // line 108
                echo "                  ";
            } else {
                // line 109
                echo "                    <h1 id=\"site-name\"";
                if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                    echo " class=\"visually-hidden\" ";
                }
                echo ">
                      <a href=\"";
                // line 110
                echo twig_render_var((isset($context["front_page"]) ? $context["front_page"] : null));
                echo "\" title=\"";
                echo twig_render_var(t("Home"));
                echo "\" rel=\"home\"><span>";
                echo twig_render_var((isset($context["site_name"]) ? $context["site_name"] : null));
                echo "</span></a>
                    </h1>
                  ";
            }
            // line 113
            echo "                ";
        }
        // line 114
        echo "                
                ";
        // line 115
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 116
            echo "                <div id=\"site-slogan\"";
            if ((isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null)) {
                echo " class=\"visually-hidden\"";
            }
            echo ">
                ";
            // line 117
            echo twig_render_var((isset($context["site_slogan"]) ? $context["site_slogan"] : null));
            echo "
                </div>
                ";
        }
        // line 120
        echo "                
                ";
        // line 121
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header"));
        echo "


                </div>
            </div>
        </div>
        <!-- EOF: #header-inside -->

    </div>
</header>
<!-- EOF: #header --> 

<!-- #main-navigation --> 
<div id=\"main-navigation\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #main-navigation-inside -->
        <div id=\"main-navigation-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav role=\"navigation\" class=\"clearfix\">
                        ";
        // line 142
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation")) {
            // line 143
            echo "                        ";
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation"));
            echo "
                        ";
        } else {
            // line 145
            echo "                            ";
            if ((isset($context["main_menu"]) ? $context["main_menu"] : null)) {
                // line 146
                echo "                            ";
                echo twig_render_var((isset($context["main_menu"]) ? $context["main_menu"] : null));
                echo "
                            ";
            }
            // line 148
            echo "                        ";
        }
        // line 149
        echo "                    </nav>
                </div>
            </div>
        </div>
        <!-- EOF: #main-navigation-inside -->

    </div>
</div>
<!-- EOF: #main-navigation -->

";
        // line 159
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner")) {
            // line 160
            echo "<!-- #banner -->
<div id=\"banner\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #banner-inside -->
        <div id=\"banner-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                ";
            // line 168
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner"));
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        

    </div>
</div>
<!-- EOF:#banner -->
";
        }
        // line 178
        echo "
<!-- #page -->
<div id=\"page\" class=\"clearfix\">
    ";
        // line 181
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted")) {
            // line 182
            echo "    <!-- #top-content -->
    <div id=\"top-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #top-content-inside -->
            <div id=\"top-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 190
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted"));
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#top-content-inside -->

        </div>
    </div>
    <!-- EOF: #top-content -->
    ";
        }
        // line 200
        echo "
    <!-- #main-content -->
    <div id=\"main-content\">
        <div class=\"container\">
        
            <!-- #messages-console -->
            ";
        // line 206
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 207
            echo "            <div id=\"messages-console\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 210
            echo twig_render_var((isset($context["messages"]) ? $context["messages"] : null));
            echo "
                    </div>
                </div>
            </div>
            ";
        }
        // line 215
        echo "            <!-- EOF: #messages-console -->
            
            <div class=\"row\">
                ";
        // line 218
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first")) {
            // line 219
            echo "                <aside class=\"";
            echo twig_render_var((isset($context["sidebar_grid_class"]) ? $context["sidebar_grid_class"] : null));
            echo "\">  
                    <!--#sidebar-first-->
                    <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                    ";
            // line 222
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first"));
            echo "
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                ";
        }
        // line 227
        echo "

                <section class=\"";
        // line 229
        echo twig_render_var((isset($context["main_grid_class"]) ? $context["main_grid_class"] : null));
        echo "\">

                    <!-- #main -->
                    <div id=\"main\" class=\"clearfix\">
                    
                        <!-- #breadcrumb -->
                        <div id=\"breadcrumb\" class=\"clearfix\">
                            <!-- #breadcrumb-inside -->
                            <div id=\"breadcrumb-inside\" class=\"clearfix\">
                            ";
        // line 238
        echo twig_render_var((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
        echo "
                            </div>
                            <!-- EOF: #breadcrumb-inside -->
                        </div>
                        <!-- EOF: #breadcrumb -->

                        ";
        // line 244
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promoted")) {
            // line 245
            echo "                        <!-- #promoted -->
                            <div id=\"promoted\" class=\"clearfix\">
                                <div id=\"promoted-inside\" class=\"clearfix\">
                                ";
            // line 248
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promoted"));
            echo "
                                </div>
                            </div>
                        <!-- EOF: #promoted -->
                        ";
        }
        // line 253
        echo "
                        <!-- EOF:#content-wrapper -->
                        <div id=\"content-wrapper\">

                            ";
        // line 257
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
                            ";
        // line 258
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 259
            echo "                              <h1 class=\"title page-title\">
                                ";
            // line 260
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "
                              </h1>
                            ";
        }
        // line 263
        echo "                            ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "
                            
                            ";
        // line 265
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 266
            echo "                              <nav class=\"tabs\" role=\"navigation\">
                                ";
            // line 267
            echo twig_render_var((isset($context["tabs"]) ? $context["tabs"] : null));
            echo "
                              </nav>
                            ";
        }
        // line 270
        echo "                            
                            ";
        // line 271
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help"));
        echo "

                            <!-- #action links -->
                            ";
        // line 274
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 275
            echo "                              <ul class=\"action-links\">
                                ";
            // line 276
            echo twig_render_var((isset($context["action_links"]) ? $context["action_links"] : null));
            echo "
                              </ul>
                            ";
        }
        // line 279
        echo "                            <!-- EOF: #action links -->

                          ";
        // line 281
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"));
        echo "
                          ";
        // line 282
        echo twig_render_var((isset($context["feed_icons"]) ? $context["feed_icons"] : null));
        echo "

                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>
                
                ";
        // line 292
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second")) {
            // line 293
            echo "                <aside class=\"";
            echo twig_render_var((isset($context["sidebar_grid_class"]) ? $context["sidebar_grid_class"] : null));
            echo "\">
                    <!--#sidebar-second-->
                    <section id=\"sidebar-second\" class=\"sidebar clearfix\">
                    ";
            // line 296
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second"));
            echo "
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                ";
        }
        // line 301
        echo "        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->
    
    ";
        // line 308
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_content")) {
            // line 309
            echo "    <!-- #bottom-content -->
    <div id=\"bottom-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #bottom-content-inside -->
            <div id=\"bottom-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 317
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_content"));
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
    ";
        }
        // line 327
        echo "
</div>
<!-- EOF:#page -->

";
        // line 331
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth"))) {
            // line 332
            echo "<!-- #footer -->
<footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">
    
        <!-- #footer-inside -->
        <div id=\"footer-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
            // line 340
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first")) {
                // line 341
                echo "                    <div class=\"footer-area\">
                    ";
                // line 342
                echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first"));
                echo "
                    </div>
                    ";
            }
            // line 345
            echo "                </div>
                
                <div class=\"col-md-3\">
                    ";
            // line 348
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second")) {
                // line 349
                echo "                    <div class=\"footer-area\">
                    ";
                // line 350
                echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second"));
                echo "
                    </div>
                    ";
            }
            // line 353
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 356
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third")) {
                // line 357
                echo "                    <div class=\"footer-area\">
                    ";
                // line 358
                echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third"));
                echo "
                    </div>
                    ";
            }
            // line 361
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 364
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth")) {
                // line 365
                echo "                    <div class=\"footer-area\">
                    ";
                // line 366
                echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth"));
                echo "
                    </div>
                    ";
            }
            // line 369
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
";
        }
        // line 378
        echo "
<footer id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #subfooter-inside -->
        <div id=\"subfooter-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- #subfooter-left -->
                    <div class=\"subfooter-area\">
                    ";
        // line 388
        if ((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null)) {
            // line 389
            echo "                    <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
                    ";
            // line 390
            echo twig_render_var((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null));
            echo "
                    </nav>
                    ";
        }
        // line 392
        echo "                    

                    ";
        // line 394
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer")) {
            // line 395
            echo "                    ";
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer"));
            echo "
                    ";
        }
        // line 397
        echo "
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap-business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 397,  699 => 395,  697 => 394,  693 => 392,  687 => 390,  684 => 389,  682 => 388,  670 => 378,  659 => 369,  653 => 366,  650 => 365,  648 => 364,  643 => 361,  637 => 358,  634 => 357,  632 => 356,  627 => 353,  621 => 350,  618 => 349,  616 => 348,  611 => 345,  605 => 342,  602 => 341,  600 => 340,  590 => 332,  588 => 331,  582 => 327,  569 => 317,  559 => 309,  557 => 308,  548 => 301,  540 => 296,  533 => 293,  531 => 292,  518 => 282,  514 => 281,  510 => 279,  504 => 276,  501 => 275,  499 => 274,  493 => 271,  490 => 270,  484 => 267,  481 => 266,  479 => 265,  473 => 263,  467 => 260,  464 => 259,  462 => 258,  458 => 257,  452 => 253,  444 => 248,  439 => 245,  437 => 244,  428 => 238,  416 => 229,  412 => 227,  404 => 222,  397 => 219,  395 => 218,  390 => 215,  382 => 210,  377 => 207,  375 => 206,  367 => 200,  354 => 190,  344 => 182,  342 => 181,  337 => 178,  324 => 168,  314 => 160,  312 => 159,  300 => 149,  297 => 148,  291 => 146,  288 => 145,  282 => 143,  280 => 142,  256 => 121,  253 => 120,  247 => 117,  240 => 116,  238 => 115,  235 => 114,  232 => 113,  222 => 110,  215 => 109,  212 => 108,  202 => 104,  194 => 102,  191 => 101,  189 => 100,  186 => 99,  177 => 95,  171 => 94,  168 => 93,  166 => 92,  154 => 82,  143 => 73,  135 => 68,  128 => 65,  126 => 64,  123 => 63,  115 => 58,  108 => 55,  106 => 54,  96 => 46,  94 => 45,  91 => 44,  79 => 34,  73 => 31,  69 => 29,  67 => 28,  62 => 25,  56 => 22,  53 => 21,  51 => 20,  46 => 17,  40 => 14,  37 => 13,  35 => 12,  25 => 4,  54 => 40,  43 => 38,  39 => 37,  26 => 34,  24 => 33,  23 => 3,  95 => 29,  89 => 26,  86 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 18,  64 => 15,  60 => 14,  57 => 13,  55 => 12,  49 => 10,  41 => 7,  36 => 6,  34 => 36,  30 => 4,  19 => 1,);
    }
}
