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

/* themes/custom/austry/templates/paragraph/slider/paragraph--slider.html.twig */
class __TwigTemplate_6858bf0ddf91072a1cf0e69cc9a3719e extends \Twig\Template
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
        echo "\t<section class=\"main-slider\">
\t\t<div class=\"swiper-container thm-swiper__slider\" data-swiper-options='{\"slidesPerView\": 1, \"loop\": true,
\t\t\t\t        \"effect\": \"fade\",
\t\t\t\t        \"pagination\": {
\t\t\t\t        \"el\": \"#main-slider-pagination\",
\t\t\t\t        \"type\": \"bullets\",
\t\t\t\t        \"clickable\": true
\t\t\t\t        },
\t\t\t\t        \"navigation\": {
\t\t\t\t        \"nextEl\": \"#main-slider__swiper-button-next\",
\t\t\t\t        \"prevEl\": \"#main-slider__swiper-button-prev\"
\t\t\t\t        },
\t\t\t\t        \"autoplay\": {
\t\t\t\t        \"delay\": 5000
\t\t\t\t        }}'>
\t\t\t";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "\t\t\t<div class=\"swiper-pagination\" id=\"main-slider-pagination\"></div>
\t\t\t<!-- If we need navigation buttons -->
\t\t\t<div class=\"main-slider__nav\">
\t\t\t\t<div class=\"swiper-button-prev\" id=\"main-slider__swiper-button-next\">
\t\t\t\t\t<i class=\"icon-left-arrow\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-button-next\" id=\"main-slider__swiper-button-prev\">
\t\t\t\t\t<i class=\"icon-right-arrow\"></i>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</section>
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 18, $this->source), "html", null, true);
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/austry/templates/paragraph/slider/paragraph--slider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  84 => 17,  67 => 20,  65 => 17,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block paragraph %}
\t<section class=\"main-slider\">
\t\t<div class=\"swiper-container thm-swiper__slider\" data-swiper-options='{\"slidesPerView\": 1, \"loop\": true,
\t\t\t\t        \"effect\": \"fade\",
\t\t\t\t        \"pagination\": {
\t\t\t\t        \"el\": \"#main-slider-pagination\",
\t\t\t\t        \"type\": \"bullets\",
\t\t\t\t        \"clickable\": true
\t\t\t\t        },
\t\t\t\t        \"navigation\": {
\t\t\t\t        \"nextEl\": \"#main-slider__swiper-button-next\",
\t\t\t\t        \"prevEl\": \"#main-slider__swiper-button-prev\"
\t\t\t\t        },
\t\t\t\t        \"autoplay\": {
\t\t\t\t        \"delay\": 5000
\t\t\t\t        }}'>
\t\t\t{% block content %}
\t\t\t\t{{ content }}
\t\t\t{% endblock %}
\t\t\t<div class=\"swiper-pagination\" id=\"main-slider-pagination\"></div>
\t\t\t<!-- If we need navigation buttons -->
\t\t\t<div class=\"main-slider__nav\">
\t\t\t\t<div class=\"swiper-button-prev\" id=\"main-slider__swiper-button-next\">
\t\t\t\t\t<i class=\"icon-left-arrow\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"swiper-button-next\" id=\"main-slider__swiper-button-prev\">
\t\t\t\t\t<i class=\"icon-right-arrow\"></i>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</section>
{% endblock paragraph %}
", "themes/custom/austry/templates/paragraph/slider/paragraph--slider.html.twig", "/Users/myguest/Aventure_drupal/theming/web/themes/custom/austry/templates/paragraph/slider/paragraph--slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
