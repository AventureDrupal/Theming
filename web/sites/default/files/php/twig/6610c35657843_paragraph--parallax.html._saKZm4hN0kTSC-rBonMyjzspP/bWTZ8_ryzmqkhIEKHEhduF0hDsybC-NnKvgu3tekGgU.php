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

/* themes/custom/austry/templates/paragraph/parallax/paragraph--parallax.html.twig */
class __TwigTemplate_d2fc23595616c8b688b64ec149e684cd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : (""))];
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "\t\t<section class=\"trusted-one\">
\t\t\t<div class=\"trusted-one__bg jarallax\" data-jarallax data-speed=\"0.2\" data-imgposition=\"50% 0%\" style=\"background-image:url(/sites/default/files/styles/parallax_image/public/2024-03/images-bulding_0.jpg?itok=ylzh4M5b)\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"trusted-one__inner\">
\t\t\t\t\t<div class=\"trusted-one__video-link\">
\t\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lien_video", [], "any", false, false, true, 56)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 56, $this->source), "html", null, true);
        echo "\" class=\"video-popup\">
\t\t\t\t\t\t\t<div class=\"trusted-one__video-icon\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-play\"></span>
\t\t\t\t\t\t\t\t<i class=\"ripple\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 64
        echo "
\t\t\t\t\t";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_parallax_titre", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
\t\t\t\t\t<div class=\"trusted-one__btn-box\">
\t\t\t\t\t\t<a href=\"";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_parallax_lien", [], "any", false, false, true, 67)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), "uri", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "\" class=\"trusted-one__btn thm-btn\">
\t\t\t\t\t\t\t";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_parallax_lien", [], "any", false, false, true, 68)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#title"] ?? null) : null), 68, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/austry/templates/paragraph/parallax/paragraph--parallax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 68,  86 => 67,  81 => 65,  78 => 64,  68 => 56,  61 => 51,  53 => 50,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
\t{% block content %}
\t\t<section class=\"trusted-one\">
\t\t\t<div class=\"trusted-one__bg jarallax\" data-jarallax data-speed=\"0.2\" data-imgposition=\"50% 0%\" style=\"background-image:url(/sites/default/files/styles/parallax_image/public/2024-03/images-bulding_0.jpg?itok=ylzh4M5b)\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"trusted-one__inner\">
\t\t\t\t\t<div class=\"trusted-one__video-link\">
\t\t\t\t\t\t<a href=\"{{content.field_lien_video[0]['#title']}}\" class=\"video-popup\">
\t\t\t\t\t\t\t<div class=\"trusted-one__video-icon\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-play\"></span>
\t\t\t\t\t\t\t\t<i class=\"ripple\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t{# content.field_parallax_image#}

\t\t\t\t\t{{content.field_parallax_titre}}
\t\t\t\t\t<div class=\"trusted-one__btn-box\">
\t\t\t\t\t\t<a href=\"{{content.field_parallax_lien[0]['#url'].uri}}\" class=\"trusted-one__btn thm-btn\">
\t\t\t\t\t\t\t{{content.field_parallax_lien[0][\"#title\"]}}
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endblock %}
{% endblock paragraph %}
", "themes/custom/austry/templates/paragraph/parallax/paragraph--parallax.html.twig", "/Users/myguest/Aventure_drupal/theming/web/themes/custom/austry/templates/paragraph/parallax/paragraph--parallax.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49);
        static $filters = array("clean_class" => 44, "escape" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
