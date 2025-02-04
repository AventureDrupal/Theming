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

/* core/modules/image/templates/image-resize-summary.html.twig */
class __TwigTemplate_777a907086c636420aff065e877589fd extends \Twig\Template
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
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 18) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 18))) {
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "×";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        } else {
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 21)) {
                // line 22
                echo "    ";
                echo t("width @data.width", array("@data.width" => twig_get_attribute($this->env, $this->source,                 // line 23
($context["data"] ?? null), "width", [], "any", false, false, true, 23), ));
                // line 25
                echo "  ";
            } elseif (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 25)) {
                // line 26
                echo "    ";
                echo t("height @data.height", array("@data.height" => twig_get_attribute($this->env, $this->source,                 // line 27
($context["data"] ?? null), "height", [], "any", false, false, true, 27), ));
                // line 29
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-resize-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 29,  57 => 27,  55 => 26,  52 => 25,  50 => 23,  48 => 22,  46 => 21,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a summary of an image resize effect.
 *
 * Available variables:
 * - data: The current configuration for this resize effect, including:
 *   - width: The width of the resized image.
 *   - height: The height of the resized image.
 * - effect: The effect information, including:
 *   - id: The effect identifier.
 *   - label: The effect name.
 *   - description: The effect description.
 *
 * @ingroup themeable
 */
#}
{% if data.width and data.height -%}
  {{ data.width }}×{{ data.height }}
{%- else -%}
  {% if data.width %}
    {% trans %}
      width {{ data.width }}
    {% endtrans %}
  {% elseif data.height %}
    {% trans %}
      height {{ data.height }}
    {% endtrans %}
  {% endif %}
{%- endif %}
", "core/modules/image/templates/image-resize-summary.html.twig", "/Users/myguest/Aventure_drupal/theming/web/core/modules/image/templates/image-resize-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "trans" => 22);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
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
