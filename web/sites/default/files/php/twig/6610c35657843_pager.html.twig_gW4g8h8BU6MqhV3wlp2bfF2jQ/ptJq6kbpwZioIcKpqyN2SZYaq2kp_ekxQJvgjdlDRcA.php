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

/* core/themes/claro/templates/pager.html.twig */
class __TwigTemplate_ae85928c347ef831b03327b293f32f6e extends \Twig\Template
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
        // line 37
        if (($context["items"] ?? null)) {
            // line 38
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 38, $this->source), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 39, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 42
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42)) {
                // line 43
                echo "        ";
                ob_start();
                // line 44
                echo "        <li class=\"pager__item pager__item--action pager__item--first\">
          <a href=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 45), "href", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 45), "attributes", [], "any", false, false, true, 45), 45, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 48), "text", [], "any", true, true, true, 48)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 48), "text", [], "any", false, false, true, 48), 48, $this->source), t("First"))) : (t("First"))), ["«" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_3_));
                // line 53
                echo "      ";
            }
            // line 54
            echo "
      ";
            // line 56
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 56)) {
                // line 57
                echo "        ";
                ob_start();
                // line 58
                echo "        <li class=\"pager__item pager__item--action pager__item--previous\">
          <a href=\"";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 59), "href", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 59), "attributes", [], "any", false, false, true, 59), 59, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 60
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 62), "text", [], "any", true, true, true, 62)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 62), "text", [], "any", false, false, true, 62), 62, $this->source), t("Previous"))) : (t("Previous"))), ["‹" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_4_));
                // line 67
                echo "      ";
            }
            // line 68
            echo "
      ";
            // line 70
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 70)) {
                // line 71
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 73
            echo "
      ";
            // line 75
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 75));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 76
                echo "        ";
                ob_start();
                // line 77
                echo "        <li class=\"pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                echo " pager__item--number\">
          ";
                // line 78
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 79
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 80
                    echo "          ";
                } else {
                    // line 81
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 82
                    echo "          ";
                }
                // line 83
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "\" class=\"pager__link";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 83, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 83), 83, $this->source), "href", "title", "class"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>
            ";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 87, $this->source), "html", null, true);
                echo "
          </a>
        </li>
        ";
                $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_5_));
                // line 91
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
      ";
            // line 94
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 94)) {
                // line 95
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 97
            echo "
      ";
            // line 99
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 99)) {
                // line 100
                echo "        ";
                ob_start();
                // line 101
                echo "        <li class=\"pager__item pager__item--action pager__item--next\">
          <a href=\"";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 102), "href", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 102), "attributes", [], "any", false, false, true, 102), 102, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 105), "text", [], "any", true, true, true, 105)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 105), "text", [], "any", false, false, true, 105), 105, $this->source), t("Next"))) : (t("Next"))), ["›" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 100
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_6_));
                // line 110
                echo "      ";
            }
            // line 111
            echo "
      ";
            // line 113
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 113)) {
                // line 114
                echo "        ";
                ob_start();
                // line 115
                echo "        <li class=\"pager__item pager__item--action pager__item--last\">
          <a href=\"";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 116), "href", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "\" class=\"pager__link pager__link--action-link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 116), "attributes", [], "any", false, false, true, 116), 116, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 119), "text", [], "any", true, true, true, 119)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 119), "text", [], "any", false, false, true, 119), 119, $this->source), t("Last"))) : (t("Last"))), ["»" => ""]), "html", null, true);
                echo "
            </span>
          </a>
        </li>
        ";
                $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 114
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_7_));
                // line 124
                echo "      ";
            }
            // line 125
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 125,  281 => 124,  279 => 114,  271 => 119,  266 => 117,  258 => 116,  255 => 115,  252 => 114,  249 => 113,  246 => 111,  243 => 110,  241 => 100,  233 => 105,  228 => 103,  220 => 102,  217 => 101,  214 => 100,  211 => 99,  208 => 97,  204 => 95,  201 => 94,  198 => 92,  192 => 91,  190 => 76,  183 => 87,  178 => 85,  166 => 83,  163 => 82,  160 => 81,  157 => 80,  154 => 79,  152 => 78,  147 => 77,  144 => 76,  139 => 75,  136 => 73,  132 => 71,  129 => 70,  126 => 68,  123 => 67,  121 => 57,  113 => 62,  108 => 60,  100 => 59,  97 => 58,  94 => 57,  91 => 56,  88 => 54,  85 => 53,  83 => 43,  75 => 48,  70 => 46,  62 => 45,  59 => 44,  56 => 43,  53 => 42,  46 => 39,  41 => 38,  39 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 *
 * @todo review all uses of the replace() filter below in
 *   https://www.drupal.org/node/3053707 as the behavior it addresses will
 *   likely change when that issue is completed.
 */
#}
{% if items %}
  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
    <h4 id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
    <ul class=\"pager__items js-pager__items\">
      {# Print first item if we are not on the first page. #}
      {% if items.first %}
        {% apply spaceless %}
        <li class=\"pager__item pager__item--action pager__item--first\">
          <a href=\"{{ items.first.href }}\" class=\"pager__link pager__link--action-link\" title=\"{{ 'Go to first page'|t }}\"{{ items.first.attributes|without('href', 'title') }}>
            <span class=\"visually-hidden\">{{ 'First page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              {{ items.first.text|default('First'|t)|replace({'«': ''}) }}
            </span>
          </a>
        </li>
        {% endapply %}
      {% endif %}

      {# Print previous item if we are not on the first page. #}
      {% if items.previous %}
        {% apply spaceless %}
        <li class=\"pager__item pager__item--action pager__item--previous\">
          <a href=\"{{ items.previous.href }}\" class=\"pager__link pager__link--action-link\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel') }}>
            <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              {{ items.previous.text|default('Previous'|t)|replace({'‹': ''}) }}
            </span>
          </a>
        </li>
        {% endapply %}
      {% endif %}

      {# Add an ellipsis if there are further previous pages. #}
      {% if ellipses.previous %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}

      {# Now generate the actual pager piece. #}
      {% for key, item in items.pages %}
        {% apply spaceless %}
        <li class=\"pager__item{{ current == key ? ' pager__item--active' : '' }} pager__item--number\">
          {% if current == key %}
            {% set title = 'Current page'|t %}
          {% else %}
            {% set title = 'Go to page @key'|t({'@key': key}) %}
          {% endif %}
          <a href=\"{{ item.href }}\" class=\"pager__link{{ current == key ? ' is-active' }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title', 'class') }}>
            <span class=\"visually-hidden\">
              {{ current == key ? 'Current page'|t : 'Page'|t }}
            </span>
            {{ key }}
          </a>
        </li>
        {% endapply %}
      {% endfor %}

      {# Add an ellipsis if there are further next pages. #}
      {% if ellipses.next %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}

      {# Print next item if we are not on the last page. #}
      {% if items.next %}
        {% apply spaceless %}
        <li class=\"pager__item pager__item--action pager__item--next\">
          <a href=\"{{ items.next.href }}\" class=\"pager__link pager__link--action-link\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }}>
            <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              {{ items.next.text|default('Next'|t)|replace({'›': ''}) }}
            </span>
          </a>
        </li>
        {% endapply %}
      {% endif %}

      {# Print last item if we are not on the last page. #}
      {% if items.last %}
        {% apply spaceless %}
        <li class=\"pager__item pager__item--action pager__item--last\">
          <a href=\"{{ items.last.href }}\" class=\"pager__link pager__link--action-link\" title=\"{{ 'Go to last page'|t }}\"{{ items.last.attributes|without('href', 'title') }}>
            <span class=\"visually-hidden\">{{ 'Last page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              {{ items.last.text|default('Last'|t)|replace({'»': ''}) }}
            </span>
          </a>
        </li>
        {% endapply %}
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "core/themes/claro/templates/pager.html.twig", "/Users/myguest/Aventure_drupal/theming/web/core/themes/claro/templates/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37, "apply" => 43, "for" => 75, "set" => 79);
        static $filters = array("escape" => 38, "t" => 39, "without" => 45, "replace" => 48, "default" => 48, "spaceless" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'for', 'set'],
                ['escape', 't', 'without', 'replace', 'default', 'spaceless'],
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
