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

/* themes/custom/austry/templates/paragraph/skills/field--field-skills-content.html.twig */
class __TwigTemplate_cc09c051be6a45b34aa6ae5551f0841e extends \Twig\Template
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
        // line 41
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["field_name"] ?? null), 43, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_type"] ?? null), 44, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["label_display"] ?? null), 45, $this->source)), 4 => (((        // line 46
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 50
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 55
        echo "
";
        // line 56
        if (($context["label_hidden"] ?? null)) {
            // line 57
            echo "\t";
            if (($context["multiple"] ?? null)) {
                // line 58
                echo "\t\t<div class=\"services-one__bottom\">
\t\t\t<div class=\"services-one__carousel owl-carousel owl-theme thm-owl__carousel\" data-owl-options='{
\t\t\t\t\t\t\t\t\t\t                        \"loop\": true,
\t\t\t\t\t\t\t\t\t\t                        \"autoplay\": false,
\t\t\t\t\t\t\t\t\t\t                        \"margin\": 30,
\t\t\t\t\t\t\t\t\t\t                        \"nav\": true,
\t\t\t\t\t\t\t\t\t\t                        \"dots\": false,
\t\t\t\t\t\t\t\t\t\t                        \"smartSpeed\": 500,
\t\t\t\t\t\t\t\t\t\t                        \"autoplayTimeout\": 10000,
\t\t\t\t\t\t\t\t\t\t                        \"navText\": [\"<span class=\\\"icon-left-arrow\\\"></span>\",\"<span class=\\\"icon-right-arrow\\\"></span>\"],
\t\t\t\t\t\t\t\t\t\t                        \"responsive\": {
\t\t\t\t\t\t\t\t\t\t                            \"0\": {
\t\t\t\t\t\t\t\t\t\t                                \"items\": 1
\t\t\t\t\t\t\t\t\t\t                            },
\t\t\t\t\t\t\t\t\t\t                            \"768\": {
\t\t\t\t\t\t\t\t\t\t                                \"items\": 2
\t\t\t\t\t\t\t\t\t\t                            },
\t\t\t\t\t\t\t\t\t\t                            \"992\": {
\t\t\t\t\t\t\t\t\t\t                                \"items\": 3
\t\t\t\t\t\t\t\t\t\t                            },
\t\t\t\t\t\t\t\t\t\t                            \"1200\": {
\t\t\t\t\t\t\t\t\t\t                                \"items\": 3
\t\t\t\t\t\t\t\t\t\t                            }
\t\t\t\t\t\t\t\t\t\t                        }
\t\t\t\t\t\t\t\t\t\t                    }'>
\t\t\t\t";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 84
                    echo "\t\t\t\t\t";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t</div>
\t\t</div>
\t";
            } else {
                // line 89
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 90
                    echo "\t\t\t<div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item"], "method", false, false, true, 90), 90, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                    echo "</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "\t";
            }
        } else {
            // line 94
            echo "\t<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 94), 94, $this->source), "html", null, true);
            echo ">
\t\t<div";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 95), 95, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 95, $this->source), "html", null, true);
            echo "</div>
\t\t";
            // line 96
            if (($context["multiple"] ?? null)) {
                // line 97
                echo "\t\t\t<div class=\"field__items\">
\t\t\t";
            }
            // line 99
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 100
                echo "\t\t\t\t<div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 100), "addClass", [0 => "field__item"], "method", false, false, true, 100), 100, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                echo "</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t";
            if (($context["multiple"] ?? null)) {
                // line 103
                echo "\t\t\t</div>
\t\t";
            }
            // line 105
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/austry/templates/paragraph/skills/field--field-skills-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 105,  157 => 103,  154 => 102,  143 => 100,  138 => 99,  134 => 97,  132 => 96,  126 => 95,  121 => 94,  117 => 92,  106 => 90,  101 => 89,  96 => 86,  87 => 84,  83 => 83,  56 => 58,  53 => 57,  51 => 56,  48 => 55,  46 => 52,  45 => 50,  43 => 46,  42 => 45,  41 => 44,  40 => 43,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 *
 * @see template_preprocess_field()
 */
#}
{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
    label_display == 'inline' ? 'clearfix',
  ]
%}
{%
  set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}

{% if label_hidden %}
\t{% if multiple %}
\t\t<div class=\"services-one__bottom\">
\t\t\t<div class=\"services-one__carousel owl-carousel owl-theme thm-owl__carousel\" data-owl-options='{
\t\t\t\t\t\t\t\t\t\t                        \"loop\": true,
\t\t\t\t\t\t\t\t\t\t                        \"autoplay\": false,
\t\t\t\t\t\t\t\t\t\t                        \"margin\": 30,
\t\t\t\t\t\t\t\t\t\t                        \"nav\": true,
\t\t\t\t\t\t\t\t\t\t                        \"dots\": false,
\t\t\t\t\t\t\t\t\t\t                        \"smartSpeed\": 500,
\t\t\t\t\t\t\t\t\t\t                        \"autoplayTimeout\": 10000,
\t\t\t\t\t\t\t\t\t\t                        \"navText\": [\"<span class=\\\"icon-left-arrow\\\"></span>\",\"<span class=\\\"icon-right-arrow\\\"></span>\"],
\t\t\t\t\t\t\t\t\t\t                        \"responsive\": {
\t\t\t\t\t\t\t\t\t\t                            \"0\": {
\t\t\t\t\t\t\t\t\t\t                                \"items\": 1
\t\t\t\t\t\t\t\t\t\t                            },
\t\t\t\t\t\t\t\t\t\t                            \"768\": {
\t\t\t\t\t\t\t\t\t\t                                \"items\": 2
\t\t\t\t\t\t\t\t\t\t                            },
\t\t\t\t\t\t\t\t\t\t                            \"992\": {
\t\t\t\t\t\t\t\t\t\t                                \"items\": 3
\t\t\t\t\t\t\t\t\t\t                            },
\t\t\t\t\t\t\t\t\t\t                            \"1200\": {
\t\t\t\t\t\t\t\t\t\t                                \"items\": 3
\t\t\t\t\t\t\t\t\t\t                            }
\t\t\t\t\t\t\t\t\t\t                        }
\t\t\t\t\t\t\t\t\t\t                    }'>
\t\t\t\t{% for item in items %}
\t\t\t\t\t{{ item.content }}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t{% else %}
\t\t{% for item in items %}
\t\t\t<div{{attributes.addClass(classes,'field__item')}}>{{ item.content }}</div>
\t\t{% endfor %}
\t{% endif %}
{% else %}
\t<div{{attributes.addClass(classes)}}>
\t\t<div{{title_attributes.addClass(title_classes)}}>{{ label }}</div>
\t\t{% if multiple %}
\t\t\t<div class=\"field__items\">
\t\t\t{% endif %}
\t\t\t{% for item in items %}
\t\t\t\t<div{{item.attributes.addClass('field__item')}}>{{ item.content }}</div>
\t\t\t{% endfor %}
\t\t\t{% if multiple %}
\t\t\t</div>
\t\t{% endif %}
\t</div>
{% endif %}
", "themes/custom/austry/templates/paragraph/skills/field--field-skills-content.html.twig", "/Users/myguest/Aventure_drupal/theming/web/themes/custom/austry/templates/paragraph/skills/field--field-skills-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "if" => 56, "for" => 83);
        static $filters = array("clean_class" => 43, "escape" => 84);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape'],
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
