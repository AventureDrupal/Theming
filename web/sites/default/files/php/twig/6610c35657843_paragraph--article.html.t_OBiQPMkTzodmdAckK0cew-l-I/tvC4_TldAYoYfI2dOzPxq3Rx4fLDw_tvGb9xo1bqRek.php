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

/* themes/custom/austry/templates/paragraph/articles/article/paragraph--article.html.twig */
class __TwigTemplate_95dccb44554a5c410d50e53bf4dc4609 extends \Twig\Template
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
        echo "
\t";
        // line 51
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "\t\t<div class=\"news-one__single\">
\t\t\t<div class=\"news-one__img-box\">
\t\t\t\t<div class=\"news-one__img\">
\t\t\t\t\t";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_article_image", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"news-one__date\">
\t\t\t\t\t<p>";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<ul class=\"news-one__meta list-unstyled\" style=\"left:0px\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-user-circle\"></i>by Christine</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-comments\"></i>2 Comments</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"news-one__content\">
\t\t\t\t<h3 class=\"news-one__title\">
\t\t\t\t\t<a href=\"#\">";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_article_title", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "</a>
\t\t\t\t</h3>
\t\t\t\t<div class=\"news-one__bottom\">
\t\t\t\t\t";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_article_lien", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
\t\t\t\t\t<!--a href=\"news-details.html\" class=\"news-one__read-more\">Read More</!--a-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/austry/templates/paragraph/articles/article/paragraph--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 74,  90 => 71,  74 => 58,  68 => 55,  63 => 52,  56 => 51,  53 => 50,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
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
\t\t<div class=\"news-one__single\">
\t\t\t<div class=\"news-one__img-box\">
\t\t\t\t<div class=\"news-one__img\">
\t\t\t\t\t{{content.field_article_image}}
\t\t\t\t</div>
\t\t\t\t<div class=\"news-one__date\">
\t\t\t\t\t<p>{{ \"now\"|date(\"d/m/Y\") }}</p>
\t\t\t\t</div>
\t\t\t\t<ul class=\"news-one__meta list-unstyled\" style=\"left:0px\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-user-circle\"></i>by Christine</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-comments\"></i>2 Comments</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"news-one__content\">
\t\t\t\t<h3 class=\"news-one__title\">
\t\t\t\t\t<a href=\"#\">{{content.field_article_title}}</a>
\t\t\t\t</h3>
\t\t\t\t<div class=\"news-one__bottom\">
\t\t\t\t\t{{content.field_article_lien}}
\t\t\t\t\t<!--a href=\"news-details.html\" class=\"news-one__read-more\">Read More</!--a-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock %}
{% endblock paragraph %}
", "themes/custom/austry/templates/paragraph/articles/article/paragraph--article.html.twig", "/Users/myguest/Aventure_drupal/theming/web/themes/custom/austry/templates/paragraph/articles/article/paragraph--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49);
        static $filters = array("clean_class" => 44, "escape" => 55, "date" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'date'],
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
