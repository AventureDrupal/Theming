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

/* core/modules/field_ui/templates/field-ui-table.html.twig */
class __TwigTemplate_28fbfb91ac5916b04d9dc2f17657e126 extends \Twig\Template
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
        // line 45
        echo "<div id=\"field-display-overview-wrapper\">
  ";
        // line 46
        $this->loadTemplate("table.html.twig", "core/modules/field_ui/templates/field-ui-table.html.twig", 46)->display($context);
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/field_ui/templates/field-ui-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 47,  42 => 46,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a Field UI table.
 *
 * Available variables:
 * - attributes: HTML attributes to apply to the <table> tag.
 * - caption: A localized string for the <caption> tag.
 * - colgroups: Column groups. Each group contains the following properties:
 *   - attributes: HTML attributes to apply to the <col> tag.
 *     Note: Drupal currently supports only one table header row, see
 *     https://www.drupal.org/node/893530 and
 *     http://api.drupal.org/api/drupal/includes!theme.inc/function/theme_table/7#comment-5109.
 * - header: Table header cells. Each cell contains the following properties:
 *   - tag: The HTML tag name to use; either 'th' or 'td'.
 *   - attributes: HTML attributes to apply to the tag.
 *   - content: A localized string for the title of the column.
 *   - field: Field name (required for column sorting).
 *   - sort: Default sort order for this column (\"asc\" or \"desc\").
 * - sticky: A flag indicating whether to use a \"sticky\" table header.
 * - rows: Table rows. Each row contains the following properties:
 *   - attributes: HTML attributes to apply to the <tr> tag.
 *   - data: Table cells.
 *   - no_striping: A flag indicating that the row should receive no
 *     'even / odd' styling. Defaults to FALSE.
 *   - cells: Table cells of the row. Each cell contains the following keys:
 *     - tag: The HTML tag name to use; either 'th' or 'td'.
 *     - attributes: Any HTML attributes, such as \"colspan\", to apply to the
 *       table cell.
 *     - content: The string to display in the table cell.
 *     - active_table_sort: A boolean indicating whether the cell is the active
         table sort.
 * - footer: Table footer rows, in the same format as the rows variable.
 * - empty: The message to display in an extra row if table does not have
 *   any rows.
 * - no_striping: A boolean indicating that the row should receive no striping.
 * - header_columns: The number of columns in the header.
 *
 * @see template_preprocess_field_ui_table()
 *
 * @ingroup themeable
 */
#}
{# Add Ajax wrapper. #}
<div id=\"field-display-overview-wrapper\">
  {% include 'table.html.twig' %}
</div>
", "core/modules/field_ui/templates/field-ui-table.html.twig", "/Users/myguest/Aventure_drupal/theming/web/core/modules/field_ui/templates/field-ui-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 46);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
