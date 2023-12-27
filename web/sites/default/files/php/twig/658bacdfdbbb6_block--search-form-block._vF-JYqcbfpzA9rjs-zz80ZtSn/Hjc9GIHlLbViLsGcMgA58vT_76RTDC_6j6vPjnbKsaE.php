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

/* themes/custom/austry/templates/block--search-form-block.html.twig */
class __TwigTemplate_6b2861aa1f9626e9d06542bd0ce97425daa98b3426227261e87b3c18ecbb3b1d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        $context["classes"] = [0 => "block", 1 => "block-search", 2 => "container-inline"];
        // line 37
        echo "<div>
  ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "</div>
";
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        // line 40
        echo "     <!--form action=\"#\">
                <label for=\"search\" class=\"sr-only\">search here</label>
                <input type=\"text\" id=\"search\" placeholder=\"Search Here...\" />
                <button type=\"submit\" aria-label=\"search submit\" class=\"thm-btn\">
                    <i class=\"icon-magnifying-glass\"></i>
                </button>
            </form-->
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/austry/templates/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 40,  56 => 39,  52 => 38,  47 => 48,  45 => 38,  42 => 37,  40 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the search form block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values, including:
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - in_preview: Whether the plugin is being rendered in preview mode.
 * - content: The content of this block.
 * - attributes: A list HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template. Includes:
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 * @see search_preprocess_block()
 */
#}
{%
  set classes = [
    'block',
    'block-search',
    'container-inline',
  ]
%}
<div>
  {% block content %}
    {# content #}
     <!--form action=\"#\">
                <label for=\"search\" class=\"sr-only\">search here</label>
                <input type=\"text\" id=\"search\" placeholder=\"Search Here...\" />
                <button type=\"submit\" aria-label=\"search submit\" class=\"thm-btn\">
                    <i class=\"icon-magnifying-glass\"></i>
                </button>
            </form-->
  {% endblock %}
</div>
", "themes/custom/austry/templates/block--search-form-block.html.twig", "/Users/myguest/Aventure_drupal/theming/web/themes/custom/austry/templates/block--search-form-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "block" => 38);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                [],
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
