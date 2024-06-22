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

/* themes/custom/austry/templates/page.html.twig */
class __TwigTemplate_44a0ec8849ca891ec66040c72bb9bcd2 extends \Twig\Template
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
        echo "<div class=\"preloader\">
\t<div class=\"preloader__image\"></div>
</div>

<div class=\"page-wrapper\">
\t<header class=\"main-header\">
\t\t<div class=\"main-header__top\">
\t\t\t<div class=\"main-header__top-wrapper\">
\t\t\t\t<div class=\"main-header__top-inner\">
\t\t\t\t\t<div class=\"main-header__top-left\">
\t\t\t\t\t\t<p class=\"main-header__top-text\">80 Broklyn Golden Street, New York. USA</p>
\t\t\t\t\t\t<div class=\"main-header__social\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-p\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"main-header__top-right\">
\t\t\t\t\t\t<ul class=\"list-unstyled main-header__contact-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-email\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a href=\"needhelp@company.com\">needhelp@company.com</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-clock\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t<p>Mon - Sat 8:00 - 6:30, Sunday - CLOSED</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<nav class=\"main-menu\">
\t\t\t<div class=\"main-menu__wrapper\">
\t\t\t\t<div class=\"main-menu__btn\">
\t\t\t\t\t<a href=\"contact.html\">Get a free quote</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"main-menu__call\">
\t\t\t\t\t<div class=\"main-menu__call-icon\">
\t\t\t\t\t\t<span class=\"icon-phone-ringing\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"main-menu__call-content\">
\t\t\t\t\t\t<p class=\"main-menu__call-sub-title\">Call Anytime</p>
\t\t\t\t\t\t<h5 class=\"main-menu__call-number\">
\t\t\t\t\t\t\t<a href=\"tel:922460088\">+ 92 (246) 0088</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"main-menu__wrapper-inner\">
\t\t\t\t\t<div class=\"main-menu__wrapper-inner-content\">
\t\t\t\t\t\t";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t<div class=\"stricky-header stricked-menu main-menu\">
\t\t<div class=\"sticky-header__content\"></div>
\t\t<!-- /.sticky-header__content -->
\t</div>
\t<!-- /.stricky-header -->


\t";
        // line 129
        echo "

\t";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        echo "

\t";
        // line 134
        echo "

\t<div class=\"search-popup\">
\t\t<div class=\"search-popup__overlay search-toggler\"></div>
\t\t<!-- /.search-popup__overlay -->
\t\t<div
\t\t\tclass=\"search-popup__content\">
\t\t\t<!--form action=\"#\">
\t\t\t\t\t\t                <label for=\"search\" class=\"sr-only\">search here</label>
\t\t\t\t\t\t                <input type=\"text\" id=\"search\" placeholder=\"Search Here...\" />
\t\t\t\t\t\t                <button type=\"submit\" aria-label=\"search submit\" class=\"thm-btn\">
\t\t\t\t\t\t                    <i class=\"icon-magnifying-glass\"></i>
\t\t\t\t\t\t                </button>
\t\t\t\t\t\t            </form-->
\t\t\t";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t<!-- /.search-popup__content -->
\t</div>

\t";
        // line 153
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 153)) {
            // line 154
            echo "\t\t<!--footer role=\"contentinfo\">
\t\t\t\t\t";
            // line 156
            echo "\t\t\t\t</footer-->
\t\t<footer class=\"site-footer\">
\t\t\t<div class=\"site-footer__img\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"site-footer__top\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-6 wow fadeInUp\" data-wow-delay=\"100ms\">
\t\t\t\t\t\t\t<div class=\"footer-widget__column footer-widget__about\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget__logo\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/sites/default/files/logo-1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer-widget__about-text-box\">
\t\t\t\t\t\t\t\t\t<p class=\"footer-widget__about-text\">There are many of simple lorem available for
\t\t\t\t\t\t\t\t\t\t                                        not, but the majority alteration.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer-widget__about-btn-box\">
\t\t\t\t\t\t\t\t\t<a href=\"contact.html\" class=\"footer-widget__about-btn thm-btn\">Contact</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-6 col-md-6 wow fadeInUp\" data-wow-delay=\"200ms\">
\t\t\t\t\t\t\t<div class=\"footer-widget__column footer-widget__links\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget__title-box\">
\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget__title\">Links</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"footer-widget__links-list list-unstyled\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Meet Our Team</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"news.html\">News & Media</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"projects-1.html\">Our Projects</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contacts</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-6 wow fadeInUp\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"footer-widget__contact\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget__title-box\">
\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget__title\">Contact</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"footer-widget__contact-text\">30 Road Broklyn Street, 600
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tNew York, USA
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<ul class=\"footer-widget__Contact-list list-unstyled\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-email\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"needhelp@company.com\">needhelp@company.com</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-telephone\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9288008960\">+92 ( 8800 ) - 8960</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-6 col-md-6 wow fadeInUp\" data-wow-delay=\"400ms\">
\t\t\t\t\t\t\t<div class=\"footer-widget__newsletter\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget__title-box\">
\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget__title\">Newsletter</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer-widget__newsletter-form-box\">
\t\t\t\t\t\t\t\t\t<form class=\"footer-widget__newsletter-form mc-form\" data-url=\"MC_FORM_URL\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer-widget__newsletter-form-input-box\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email Address\" name=\"EMAIL\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"footer-widget__newsletter-btn\"><img src=\"assets/images/icon/paper-plan-icon.png\" alt=\"\"></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<div class=\"mc-form__response\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"site-footer__social\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-p\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"site-footer__bottom\">
\t\t\t\t\t<p class=\"site-footer__bottom-text\">© Copyright 2023 by
\t\t\t\t\t\t<a href=\"#\">Austry.com</a>
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-unstyled site-footer__bottom-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"about.html\">Help</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"about.html\">Privacy Policy</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t";
        }
        // line 283
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/austry/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 283,  168 => 156,  165 => 154,  163 => 153,  155 => 148,  139 => 134,  134 => 131,  130 => 129,  114 => 115,  110 => 114,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"preloader\">
\t<div class=\"preloader__image\"></div>
</div>

<div class=\"page-wrapper\">
\t<header class=\"main-header\">
\t\t<div class=\"main-header__top\">
\t\t\t<div class=\"main-header__top-wrapper\">
\t\t\t\t<div class=\"main-header__top-inner\">
\t\t\t\t\t<div class=\"main-header__top-left\">
\t\t\t\t\t\t<p class=\"main-header__top-text\">80 Broklyn Golden Street, New York. USA</p>
\t\t\t\t\t\t<div class=\"main-header__social\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-p\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"main-header__top-right\">
\t\t\t\t\t\t<ul class=\"list-unstyled main-header__contact-list\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-email\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a href=\"needhelp@company.com\">needhelp@company.com</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-clock\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t<p>Mon - Sat 8:00 - 6:30, Sunday - CLOSED</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<nav class=\"main-menu\">
\t\t\t<div class=\"main-menu__wrapper\">
\t\t\t\t<div class=\"main-menu__btn\">
\t\t\t\t\t<a href=\"contact.html\">Get a free quote</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"main-menu__call\">
\t\t\t\t\t<div class=\"main-menu__call-icon\">
\t\t\t\t\t\t<span class=\"icon-phone-ringing\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"main-menu__call-content\">
\t\t\t\t\t\t<p class=\"main-menu__call-sub-title\">Call Anytime</p>
\t\t\t\t\t\t<h5 class=\"main-menu__call-number\">
\t\t\t\t\t\t\t<a href=\"tel:922460088\">+ 92 (246) 0088</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"main-menu__wrapper-inner\">
\t\t\t\t\t<div class=\"main-menu__wrapper-inner-content\">
\t\t\t\t\t\t{{ page.header }}
\t\t\t\t\t\t{{ page.primary_menu }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t<div class=\"stricky-header stricked-menu main-menu\">
\t\t<div class=\"sticky-header__content\"></div>
\t\t<!-- /.sticky-header__content -->
\t</div>
\t<!-- /.stricky-header -->


\t{# page.highlighted #}


\t{{ page.content }}

\t{# /.layout-content #}


\t<div class=\"search-popup\">
\t\t<div class=\"search-popup__overlay search-toggler\"></div>
\t\t<!-- /.search-popup__overlay -->
\t\t<div
\t\t\tclass=\"search-popup__content\">
\t\t\t<!--form action=\"#\">
\t\t\t\t\t\t                <label for=\"search\" class=\"sr-only\">search here</label>
\t\t\t\t\t\t                <input type=\"text\" id=\"search\" placeholder=\"Search Here...\" />
\t\t\t\t\t\t                <button type=\"submit\" aria-label=\"search submit\" class=\"thm-btn\">
\t\t\t\t\t\t                    <i class=\"icon-magnifying-glass\"></i>
\t\t\t\t\t\t                </button>
\t\t\t\t\t\t            </form-->
\t\t\t{{page.search}}
\t\t</div>
\t\t<!-- /.search-popup__content -->
\t</div>

\t{% if page.footer %}
\t\t<!--footer role=\"contentinfo\">
\t\t\t\t\t{# page.footer #}
\t\t\t\t</footer-->
\t\t<footer class=\"site-footer\">
\t\t\t<div class=\"site-footer__img\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"site-footer__top\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-6 wow fadeInUp\" data-wow-delay=\"100ms\">
\t\t\t\t\t\t\t<div class=\"footer-widget__column footer-widget__about\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget__logo\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/sites/default/files/logo-1.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer-widget__about-text-box\">
\t\t\t\t\t\t\t\t\t<p class=\"footer-widget__about-text\">There are many of simple lorem available for
\t\t\t\t\t\t\t\t\t\t                                        not, but the majority alteration.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer-widget__about-btn-box\">
\t\t\t\t\t\t\t\t\t<a href=\"contact.html\" class=\"footer-widget__about-btn thm-btn\">Contact</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-6 col-md-6 wow fadeInUp\" data-wow-delay=\"200ms\">
\t\t\t\t\t\t\t<div class=\"footer-widget__column footer-widget__links\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget__title-box\">
\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget__title\">Links</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"footer-widget__links-list list-unstyled\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"team.html\">Meet Our Team</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"news.html\">News & Media</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"projects-1.html\">Our Projects</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contacts</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-lg-6 col-md-6 wow fadeInUp\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"footer-widget__contact\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget__title-box\">
\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget__title\">Contact</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"footer-widget__contact-text\">30 Road Broklyn Street, 600
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tNew York, USA
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<ul class=\"footer-widget__Contact-list list-unstyled\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-email\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"needhelp@company.com\">needhelp@company.com</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-telephone\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:9288008960\">+92 ( 8800 ) - 8960</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-6 col-md-6 wow fadeInUp\" data-wow-delay=\"400ms\">
\t\t\t\t\t\t\t<div class=\"footer-widget__newsletter\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget__title-box\">
\t\t\t\t\t\t\t\t\t<h4 class=\"footer-widget__title\">Newsletter</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer-widget__newsletter-form-box\">
\t\t\t\t\t\t\t\t\t<form class=\"footer-widget__newsletter-form mc-form\" data-url=\"MC_FORM_URL\">
\t\t\t\t\t\t\t\t\t\t<div class=\"footer-widget__newsletter-form-input-box\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email Address\" name=\"EMAIL\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"footer-widget__newsletter-btn\"><img src=\"assets/images/icon/paper-plan-icon.png\" alt=\"\"></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<div class=\"mc-form__response\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"site-footer__social\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-p\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"site-footer__bottom\">
\t\t\t\t\t<p class=\"site-footer__bottom-text\">© Copyright 2023 by
\t\t\t\t\t\t<a href=\"#\">Austry.com</a>
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-unstyled site-footer__bottom-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"about.html\">Help</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"about.html\">Privacy Policy</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t{% endif %}

</div>
{# /.layout-container #}
", "themes/custom/austry/templates/page.html.twig", "/Users/myguest/Aventure_drupal/theming/web/themes/custom/austry/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 153);
        static $filters = array("escape" => 114);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
