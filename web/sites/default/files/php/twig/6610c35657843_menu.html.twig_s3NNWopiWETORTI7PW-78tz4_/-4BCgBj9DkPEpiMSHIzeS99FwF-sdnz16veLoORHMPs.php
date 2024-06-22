<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/austry/templates/menu.html.twig */
class __TwigTemplate_db9784eb8d8ad961c74a44d0019743ec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "\t<div class=\"main-menu__right\">
\t\t<div class=\"main-menu__main-menu-box\">
\t\t\t<a href=\"#\" class=\"mobile-nav__toggler\">
\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t</a>
\t\t\t";
            // line 35
            $macros["menus"] = $this;
            // line 36
            echo "\t\t\t";
            if (($context["items"] ?? null)) {
                // line 37
                echo "\t\t\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 38
                    echo "\t\t\t\t\t<ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "main-menu__list"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo ">
\t\t\t\t\t";
                } else {
                    // line 40
                    echo "\t\t\t\t\t\t<ul class=\"main-menu__list\">
\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    echo "\t\t\t\t\t\t\t";
                    // line 44
                    $context["classes"] = [0 => "", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "is_expanded", [], "any", false, false, true, 46)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "is_collapsed", [], "any", false, false, true, 47)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 48
$context["item"], "in_active_trail", [], "any", false, false, true, 48)) ? ("menu-item--active-trail") : (""))];
                    // line 51
                    echo "\t\t\t\t\t\t\t<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo ">
\t\t\t\t\t\t\t\t";
                    // line 52
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), 52, $this->source)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53)) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 54), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 54, $context, $this->getSourceContext()));
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 56
                    echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"main-menu__search-cart-box\">
\t\t\t\t\t<div class=\"main-menu__search-box\">
\t\t\t\t\t\t<a href=\"#\" class=\"main-menu__search search-toggler icon-magnifying-glass\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"main-menu__cart-box\">
\t\t\t\t\t\t<a href=\"#\" class=\"main-menu__cart icon-shopping-cart\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 69
            echo "\t\t";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/austry/templates/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 69,  127 => 58,  120 => 56,  114 => 54,  112 => 53,  108 => 52,  103 => 51,  101 => 48,  100 => 47,  99 => 46,  98 => 44,  96 => 43,  91 => 42,  87 => 40,  81 => 38,  78 => 37,  75 => 36,  73 => 35,  66 => 30,  51 => 29,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/1.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
\t<div class=\"main-menu__right\">
\t\t<div class=\"main-menu__main-menu-box\">
\t\t\t<a href=\"#\" class=\"mobile-nav__toggler\">
\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t</a>
\t\t\t{% import _self as menus %}
\t\t\t{% if items %}
\t\t\t\t{% if menu_level == 0 %}
\t\t\t\t\t<ul{{attributes.addClass('main-menu__list')}}>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<ul class=\"main-menu__list\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% for item in items %}
\t\t\t\t\t\t\t{%
        set classes = [
          '',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
        ]
      %}
\t\t\t\t\t\t\t<li{{item.attributes.addClass(classes)}}>
\t\t\t\t\t\t\t\t{{ link(item.title, item.url) }}
\t\t\t\t\t\t\t\t{% if item.below %}
\t\t\t\t\t\t\t\t\t{{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"main-menu__search-cart-box\">
\t\t\t\t\t<div class=\"main-menu__search-box\">
\t\t\t\t\t\t<a href=\"#\" class=\"main-menu__search search-toggler icon-magnifying-glass\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"main-menu__cart-box\">
\t\t\t\t\t\t<a href=\"#\" class=\"main-menu__cart icon-shopping-cart\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endmacro %}
", "themes/custom/austry/templates/menu.html.twig", "/Users/myguest/Aventure_drupal/theming/web/themes/custom/austry/templates/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 36, "for" => 42, "set" => 44);
        static $filters = array("escape" => 38);
        static $functions = array("link" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
