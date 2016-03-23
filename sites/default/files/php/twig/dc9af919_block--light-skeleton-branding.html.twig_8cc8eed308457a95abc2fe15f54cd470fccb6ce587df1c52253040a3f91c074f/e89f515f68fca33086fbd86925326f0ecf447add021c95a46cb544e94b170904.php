<?php

/* themes/light_skeleton/template/block/block--light-skeleton-branding.html.twig */
class __TwigTemplate_32afb77e969b91066c5071154663146901232d6f113d1868417164e6425970ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/light_skeleton/template/block/block--light-skeleton-branding.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "if" => 18);
        $filters = array("t" => 19);
        $functions = array("path" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array('path')
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

        // line 16
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 19
            echo "        <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" id=\"logo\" class=\"site-branding__logo\">
            <img class=\"logo\" src=\"";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
        </a>
    ";
        }
        // line 23
        echo "    ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 24
            echo "            ";
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 25
                echo "                <h2 class=\"display_inline\">
                    <a href=\"";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">
                        <span>";
                // line 27
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</span> </a>
                </h2>
                <div class=\"clear\"></div>
            ";
            }
            // line 31
            echo "            ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 32
                echo "                <h5 class=\"site_slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</h5>
            ";
            }
            // line 34
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "themes/light_skeleton/template/block/block--light-skeleton-branding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  101 => 32,  98 => 31,  91 => 27,  85 => 26,  82 => 25,  79 => 24,  76 => 23,  68 => 20,  61 => 19,  58 => 18,  55 => 17,  51 => 1,  49 => 16,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass('site-branding') %}*/
/* {% block content %}*/
/*     {% if site_logo %}*/
/*         <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home" id="logo" class="site-branding__logo">*/
/*             <img class="logo" src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*         </a>*/
/*     {% endif %}*/
/*     {% if site_name or site_slogan %}*/
/*             {% if site_name %}*/
/*                 <h2 class="display_inline">*/
/*                     <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">*/
/*                         <span>{{ site_name }}</span> </a>*/
/*                 </h2>*/
/*                 <div class="clear"></div>*/
/*             {% endif %}*/
/*             {% if site_slogan %}*/
/*                 <h5 class="site_slogan">{{ site_slogan }}</h5>*/
/*             {% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
