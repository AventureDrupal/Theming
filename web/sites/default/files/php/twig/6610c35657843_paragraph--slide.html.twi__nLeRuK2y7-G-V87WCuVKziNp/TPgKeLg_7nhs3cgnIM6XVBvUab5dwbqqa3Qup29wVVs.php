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

/* themes/custom/austry/templates/paragraph/slider/paragraph--slide.html.twig */
class __TwigTemplate_bd2c6323a681fb1ff5c2f3a68806559e extends \Twig\Template
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
        // line 1
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
\t";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "
";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    
\t\t<div class=\"swiper-slide\">
\t\t\t<div class=\"image-layer\">
            ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
            </div>
\t\t\t<!-- /.image-layer -->

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t<div class=\"main-slider__content\">
\t\t\t\t\t\t\t<h2 class=\"main-slider__title\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t<p class=\"main-slider__text\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 16), 16, $this->source));
        echo "</p>
\t\t\t\t\t\t\t";
        // line 17
        if ((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lien", [], "any", false, false, true, 17)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null)) {
            // line 18
            echo "\t\t\t\t\t\t\t<div class=\"main-slider__btn-box\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lien", [], "any", false, false, true, 19)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), 19, $this->source), "html", null, true);
            echo "\" class=\"thm-btn main-slider__btn\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_lien", [], "any", false, false, true, 19)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#title"] ?? null) : null), 19, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/austry/templates/paragraph/slider/paragraph--slide.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  91 => 19,  88 => 18,  86 => 17,  82 => 16,  78 => 15,  67 => 7,  62 => 4,  58 => 3,  53 => 28,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block paragraph %}

\t{% block content %}
    
\t\t<div class=\"swiper-slide\">
\t\t\t<div class=\"image-layer\">
            {{content.field_image}}
            </div>
\t\t\t<!-- /.image-layer -->

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t<div class=\"main-slider__content\">
\t\t\t\t\t\t\t<h2 class=\"main-slider__title\">{{content.field_title}}</h2>
\t\t\t\t\t\t\t<p class=\"main-slider__text\">{{content.field_description|raw}}</p>
\t\t\t\t\t\t\t{% if content.field_lien[0]['#url'] %}
\t\t\t\t\t\t\t<div class=\"main-slider__btn-box\">
\t\t\t\t\t\t\t\t<a href=\"{{content.field_lien[0]['#url']}}\" class=\"thm-btn main-slider__btn\">{{content.field_lien[0]['#title']}}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endblock paragraph %}
", "themes/custom/austry/templates/paragraph/slider/paragraph--slide.html.twig", "/Users/myguest/Aventure_drupal/theming/web/themes/custom/austry/templates/paragraph/slider/paragraph--slide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "if" => 17);
        static $filters = array("escape" => 7, "raw" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape', 'raw'],
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
