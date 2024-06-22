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

/* themes/custom/austry/templates/html.html.twig */
class __TwigTemplate_4bb211609f13c1f0ea57b67bc2503dfe extends \Twig\Template
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
        // line 27
        $context["body_classes"] = [0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 3 => ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 34
        echo "<!DOCTYPE html>
<html";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 35, $this->source), "html", null, true);
        echo ">
\t<head>
\t\t<head-placeholder token=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 37, $this->source), "html", null, true);
        echo "\">
\t\t\t<title>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 38, $this->source), " | "));
        echo "</title>
\t\t\t<css-placeholder token=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 39, $this->source), "html", null, true);
        echo "\">
\t\t\t\t<js-placeholder token=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 40, $this->source), "html", null, true);
        echo "\"></head>
\t\t\t\t<style>
\t\t\t\t\t.main-header {
\t\t\t\t\t\tz-index: 1;
\t\t\t\t\t}
\t\t\t\t\t.toolbar-menu {
\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\tz-index: 2000;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t<body";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t";
        // line 55
        echo "\t\t\t\t\t<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
\t\t\t\t\t\t";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 58, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 59, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 60, $this->source), "html", null, true);
        echo "
\t\t\t\t\t<js-bottom-placeholder token=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 61, $this->source), "html", null, true);
        echo "\"></body>
\t\t\t\t</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/austry/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 61,  98 => 60,  94 => 59,  90 => 58,  85 => 56,  82 => 55,  78 => 50,  65 => 40,  61 => 39,  57 => 38,  53 => 37,  48 => 35,  45 => 34,  43 => 31,  42 => 30,  41 => 29,  40 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
  ]
%}
<!DOCTYPE html>
<html{{html_attributes}}>
\t<head>
\t\t<head-placeholder token=\"{{ placeholder_token }}\">
\t\t\t<title>{{ head_title|safe_join(' | ') }}</title>
\t\t\t<css-placeholder token=\"{{ placeholder_token }}\">
\t\t\t\t<js-placeholder token=\"{{ placeholder_token }}\"></head>
\t\t\t\t<style>
\t\t\t\t\t.main-header {
\t\t\t\t\t\tz-index: 1;
\t\t\t\t\t}
\t\t\t\t\t.toolbar-menu {
\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\tz-index: 2000;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t<body{{attributes.addClass(body_classes)}}>
\t\t\t\t\t{#
\t\t\t\t\t      Keyboard navigation/accessibility link to main content section in
\t\t\t\t\t      page.html.twig.
\t\t\t\t\t    #}
\t\t\t\t\t<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
\t\t\t\t\t\t{{ 'Skip to main content'|t }}
\t\t\t\t\t</a>
\t\t\t\t\t{{ page_top }}
\t\t\t\t\t{{ page }}
\t\t\t\t\t{{ page_bottom }}
\t\t\t\t\t<js-bottom-placeholder token=\"{{ placeholder_token }}\"></body>
\t\t\t\t</html>
", "themes/custom/austry/templates/html.html.twig", "/Users/myguest/Aventure_drupal/theming/web/themes/custom/austry/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27);
        static $filters = array("clean_class" => 29, "escape" => 35, "safe_join" => 38, "t" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'safe_join', 't'],
                []
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
