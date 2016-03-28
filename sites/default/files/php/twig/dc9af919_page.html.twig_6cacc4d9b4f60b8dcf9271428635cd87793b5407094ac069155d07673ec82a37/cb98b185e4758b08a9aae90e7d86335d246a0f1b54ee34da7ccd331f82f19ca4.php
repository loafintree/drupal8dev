<?php

/* themes/custom/skelly/template/page.html.twig */
class __TwigTemplate_696a6ff4771b06af137822e14704cbcbe793d20dd85aafd4acd1767cea976f20 extends Twig_Template
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
        $tags = array("if" => 74, "set" => 102);
        $filters = array("t" => 62);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        echo "
<div id=\"page-wrapper\">
    <div id=\"page\">
        <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
            <div class=\"section clearfix\">
                ";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "
                <div class=\"no-mobile\">";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "</div>
                <nav id=\"navigation\" class=\"navbar replaceme menu original\">
                <div class=\"menu-header\">";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo " &nbsp; <div id=\"nav-icon\"></div></div>
                    <div class=\"container\">
                    ";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
                    </div>
                </nav>
            </div>
        </header>
        ";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 75
            echo "            <div class=\"highlighted\">
                <aside class=\"section clearfix\" role=\"complementary\">
                    ";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
                </aside>
            </div>
        ";
        }
        // line 81
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array())) {
            // line 82
            echo "            <div class=\"featured-top\">
                <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
                    ";
            // line 84
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array()), "html", null, true));
            echo "
                </aside>
            </div>
        ";
        }
        // line 88
        echo "        <div id=\"main-wrapper\" class=\" clearfix\">
            <div id=\"main\" class=\"clearfix\">
                ";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
                ";
        // line 91
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 92
            echo "                    <div id=\"sidebar-first\" class=\"three columns keep_left\">
                        <aside class=\"section\" role=\"complementary\">
                            ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                ";
        }
        // line 98
        echo "                ";
        // line 99
        echo "                    <section class=\"section\">
                        <a id=\"main-content\" tabindex=\"-1\"></a>
                        ";
        // line 101
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()))) {
            // line 102
            echo "                            ";
            $context["col_class"] = "six columns";
            // line 103
            echo "                        ";
        } elseif (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()))) {
            // line 104
            echo "                            ";
            $context["col_class"] = "eight columns";
            // line 105
            echo "                        ";
        } else {
            // line 106
            echo "                            ";
            $context["col_class"] = "ten";
            // line 107
            echo "                        ";
        }
        // line 108
        echo "
                        <div class=\"";
        // line 109
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
        echo "\">
                            ";
        // line 110
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                        </div>
                    </section>
                ";
        // line 114
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 115
            echo "                    <div id=\"sidebar-second\" class=\"three columns keep_right\">
                        <aside class=\"section\" role=\"complementary\">
                            ";
            // line 117
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                ";
        }
        // line 121
        echo "            </div>
        </div>
        <div class=\"clearfix\"></div>
        <footer class=\"site-footer\">
            <div class=\"layout-container\">
                ";
        // line 126
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()))) {
            // line 127
            echo "                    <div class=\"site-footer__top clearfix\">


                        ";
            // line 131
            echo "                        ";
            // line 132
            echo "                            ";
            // line 133
            echo "                        ";
            // line 134
            echo "                            ";
            // line 135
            echo "                        ";
            // line 136
            echo "                            ";
            // line 137
            echo "                        ";
            // line 138
            echo "                        ";
            // line 139
            echo "                        ";
            // line 140
            echo "
                        ";
            // line 142
            echo "                        ";
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()))) {
                // line 143
                echo "                            ";
                $context["col_class"] = "four";
                // line 144
                echo "
                        ";
            } else {
                // line 146
                echo "                            ";
                $context["col_class"] = "ten";
                // line 147
                echo "                        ";
            }
            // line 148
            echo "                            <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
            echo " columns\">
                                  ";
            // line 149
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
                                </div>
                            <div class=\"";
            // line 151
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
            echo " columns\">

                            ";
            // line 153
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
                         </div>
                            <div class=\"";
            // line 155
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
            echo " columns\">
                            ";
            // line 156
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
                             </div>
                    </div>
                ";
        }
        // line 160
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 161
            echo "                    <div class=\"site-footer__bottom container page_footer\">
                        ";
            // line 162
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 165
        echo "            </div>
        </footer>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/skelly/template/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 165,  264 => 162,  261 => 161,  258 => 160,  251 => 156,  247 => 155,  242 => 153,  237 => 151,  232 => 149,  227 => 148,  224 => 147,  221 => 146,  217 => 144,  214 => 143,  211 => 142,  208 => 140,  206 => 139,  204 => 138,  202 => 137,  200 => 136,  198 => 135,  196 => 134,  194 => 133,  192 => 132,  190 => 131,  185 => 127,  183 => 126,  176 => 121,  169 => 117,  165 => 115,  162 => 114,  156 => 110,  152 => 109,  149 => 108,  146 => 107,  143 => 106,  140 => 105,  137 => 104,  134 => 103,  131 => 102,  129 => 101,  125 => 99,  123 => 98,  116 => 94,  112 => 92,  110 => 91,  106 => 90,  102 => 88,  95 => 84,  91 => 82,  88 => 81,  81 => 77,  77 => 75,  75 => 74,  67 => 69,  62 => 67,  57 => 65,  53 => 64,  48 => 62,  43 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template normally located in the*/
/*  * core/modules/system directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/* */
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.highlighted: Items for the highlighted region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.featured_top: Items for the featured top region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.featured_bottom_first: Items for the first featured bottom region.*/
/*  * - page.featured_bottom_second: Items for the second featured bottom region.*/
/*  * - page.featured_bottom_third: Items for the third featured bottom region.*/
/*  * - page.footer_first: Items for the first footer column.*/
/*  * - page.footer_second: Items for the second footer column.*/
/*  * - page.footer_third: Items for the third footer column.*/
/*  * - page.footer_fourth: Items for the fourth footer column.*/
/*  * - page.footer_fifth: Items for the fifth footer column.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see bartik_preprocess_page()*/
/* * @see html.html.twig*/
/* *//* */
/* #}*/
/* */
/* <div id="page-wrapper">*/
/*     <div id="page">*/
/*         <header id="header" class="header" role="banner" aria-label="{{ 'Site header'|t}}">*/
/*             <div class="section clearfix">*/
/*                 {{ page.secondary_menu }}*/
/*                 <div class="no-mobile">{{ page.header }}</div>*/
/*                 <nav id="navigation" class="navbar replaceme menu original">*/
/*                 <div class="menu-header">{{ page.header }} &nbsp; <div id="nav-icon"></div></div>*/
/*                     <div class="container">*/
/*                     {{ page.primary_menu }}*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*         </header>*/
/*         {% if page.highlighted %}*/
/*             <div class="highlighted">*/
/*                 <aside class="section clearfix" role="complementary">*/
/*                     {{ page.highlighted }}*/
/*                 </aside>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if page.featured_top %}*/
/*             <div class="featured-top">*/
/*                 <aside class="featured-top__inner section layout-container clearfix" role="complementary">*/
/*                     {{ page.featured_top }}*/
/*                 </aside>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div id="main-wrapper" class=" clearfix">*/
/*             <div id="main" class="clearfix">*/
/*                 {{ page.breadcrumb }}*/
/*                 {% if page.sidebar_first %}*/
/*                     <div id="sidebar-first" class="three columns keep_left">*/
/*                         <aside class="section" role="complementary">*/
/*                             {{ page.sidebar_first }}*/
/*                         </aside>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {#<main id="content" class="column main-content" role="main">#}*/
/*                     <section class="section">*/
/*                         <a id="main-content" tabindex="-1"></a>*/
/*                         {%  if page.sidebar_second and page.sidebar_first %}*/
/*                             {% set col_class = 'six columns' %}*/
/*                         {%  elseif page.sidebar_second or page.sidebar_first %}*/
/*                             {% set col_class = 'eight columns' %}*/
/*                         {% else %}*/
/*                             {% set col_class = 'ten' %}*/
/*                         {% endif %}*/
/* */
/*                         <div class="{{ col_class }}">*/
/*                             {{ page.content }}*/
/*                         </div>*/
/*                     </section>*/
/*                 {#</main>#}*/
/*                 {% if page.sidebar_second %}*/
/*                     <div id="sidebar-second" class="three columns keep_right">*/
/*                         <aside class="section" role="complementary">*/
/*                             {{ page.sidebar_second }}*/
/*                         </aside>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         <footer class="site-footer">*/
/*             <div class="layout-container">*/
/*                 {% if page.footer_first or page.footer_second or page.footer_third %}*/
/*                     <div class="site-footer__top clearfix">*/
/* */
/* */
/*                         {# TODO: We should came this more modular, where if theres is only two sidebar change the class to six. Here is an issue where I talk about this http://drupal.stackexchange.com/questions/180122/can-i-use-multiple-if-statement-in-with-with-same-validation-in-twig/180147#}*/
/*                         {#{%  if page.footer_first and page.footer_second %}#}*/
/*                             {#{% set col_class = 'six' %}#}*/
/*                         {#{%  if page.footer_first and page.footer_third %}#}*/
/*                             {#{% set col_class = 'six' %}#}*/
/*                         {#{%  if page.footer_second and page.footer_third %}#}*/
/*                             {#{% set col_class = 'six' %}#}*/
/*                         {#&#123;&#35; If we have 2 columns&#35;&#125;#}*/
/*                         {#{%  elseif page.footer_first or page.footer_second or footer_third %}#}*/
/*                         {#{% set col_class = 'eight' %}#}*/
/* */
/*                         {# If we have 3 columns#}*/
/*                         {%  if page.footer_first and page.footer_second and page.footer_third %}*/
/*                             {% set col_class = 'four' %}*/
/* */
/*                         {% else %}*/
/*                             {% set col_class = 'ten' %}*/
/*                         {% endif %}*/
/*                             <div class="{{ col_class }} columns">*/
/*                                   {{ page.footer_first }}*/
/*                                 </div>*/
/*                             <div class="{{ col_class }} columns">*/
/* */
/*                             {{ page.footer_second }}*/
/*                          </div>*/
/*                             <div class="{{ col_class }} columns">*/
/*                             {{ page.footer_third }}*/
/*                              </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if page.footer %}*/
/*                     <div class="site-footer__bottom container page_footer">*/
/*                         {{ page.footer }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </footer>*/
/*     </div>*/
/* </div>*/
/* */
