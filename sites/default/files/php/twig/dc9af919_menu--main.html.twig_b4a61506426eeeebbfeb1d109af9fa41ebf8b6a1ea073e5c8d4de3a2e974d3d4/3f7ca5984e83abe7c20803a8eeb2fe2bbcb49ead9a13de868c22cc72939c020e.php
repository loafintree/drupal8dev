<?php

/* themes/light_skeleton/template/menu/menu--main.html.twig */
class __TwigTemplate_dbcd858eb2a662be8a70bb48e39679f14cafea7ef75d35f47a728cabf943a0bc extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 25, "if" => 27, "for" => 34, "set" => 36);
        $filters = array();
        $functions = array("link" => 45);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
    }

    // line 25
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "    ";
            $context["menus"] = $this;
            // line 27
            echo "    ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 28
                echo "        ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 29
                    echo "            <ul id=\"menu\" ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "navbar-list"), "method"), "html", null, true));
                    echo ">
        ";
                    // line 31
                    echo "            ";
                    // line 32
                    echo "            ";
                    // line 33
                    echo "        ";
                }
                // line 34
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "            ";
                    // line 36
                    $context["classes"] = array(0 => "navbar-item", 1 => "navbar-link", 2 => (($this->getAttribute(                    // line 38
$context["item"], "is_expanded", array())) ? ("expanded") : ("")), 3 => (($this->getAttribute(                    // line 39
$context["item"], "is_collapsed", array())) ? ("collapsed") : ("")), 4 => (($this->getAttribute(                    // line 40
$context["item"], "in_active_trail", array())) ? ("navbar-link") : ("")), 5 => (($this->getAttribute(                    // line 41
$context["item"], "below", array())) ? ("parent") : ("")));
                    // line 44
                    echo "            <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                    echo ">
                ";
                    // line 45
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
                ";
                    // line 46
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 47
                        echo "                    ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
                ";
                    }
                    // line 49
                    echo "            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "        </ul>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/light_skeleton/template/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 51,  120 => 49,  114 => 47,  112 => 46,  108 => 45,  103 => 44,  101 => 41,  100 => 40,  99 => 39,  98 => 38,  97 => 36,  95 => 35,  90 => 34,  87 => 33,  85 => 32,  83 => 31,  78 => 29,  75 => 28,  72 => 27,  69 => 26,  55 => 25,  48 => 23,  45 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *   - is_expanded: TRUE if the link has visible children within the current*/
/*  *     menu tree.*/
/*  *   - is_collapsed: TRUE if the link has children within the current menu tree*/
/*  *     that are not currently visible.*/
/*  *   - in_active_trail: TRUE if the link is in the active trail.*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*     {% import _self as menus %}*/
/*     {% if items %}*/
/*         {% if menu_level == 0 %}*/
/*             <ul id="menu" {{ attributes.addClass('navbar-list') }}>*/
/*         {#{% else %}#}*/
/*             {# We should add a sub nav class#}*/
/*             {#<ul class="main-nav__sub">#}*/
/*         {% endif %}*/
/*         {% for item in items %}*/
/*             {%*/
/*             set classes = [*/
/*             'navbar-item', 'navbar-link',*/
/*             item.is_expanded ? 'expanded',*/
/*             item.is_collapsed ? 'collapsed',*/
/*             item.in_active_trail ? 'navbar-link',*/
/*             item.below ? 'parent'*/
/*             ]*/
/*             %}*/
/*             <li{{ item.attributes.addClass(classes) }}>*/
/*                 {{ link(item.title, item.url) }}*/
/*                 {% if item.below %}*/
/*                     {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endmacro %}*/
