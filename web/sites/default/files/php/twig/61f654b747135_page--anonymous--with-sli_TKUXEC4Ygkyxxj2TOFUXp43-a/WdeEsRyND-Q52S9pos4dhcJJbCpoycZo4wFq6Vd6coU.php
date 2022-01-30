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

/* themes/custom/inslms_test/templates/page/page--anonymous--with-slider.html.twig */
class __TwigTemplate_d64179ee6069787545270647c5530d1a03904a467aa789dfa12be35585a2393a extends \Twig\Template
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
        // line 48
        echo "<div class=\"layout-container\">
<header class=\"page-header\" role=\"banner\">
  <div class=\"container\">
      <div class=\"header-content\">
        ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
      </div>
  </div>
</header>



<main role=\"main\">
<div class=\"container\">

  <div class=\"hero_section\">
      ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
  </div>

  <div class=\"learning_topic_section\">
    ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "learning_topic", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
  </div>

   <div class=\"about_us_section\">
    ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_us", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "
  </div>

  <div class=\"layout-content\">
      ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
  </div>
</div>
</main>

<footer class=\"site-footer\">
  <div class=\"container\">
    <div class=\"footer_wrapper\">
    <div class=\"footer_left_wrapper\">
    ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_left", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"footer_middle_wrapper\">
    ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"footer_right_wrapper\">
    ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_right", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "
    </div>
    </div>
  <div>
</footer>
</div>
";
        // line 132
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/inslms_test/templates/page/page--anonymous--with-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 132,  104 => 90,  98 => 87,  92 => 84,  80 => 75,  73 => 71,  66 => 67,  59 => 63,  45 => 52,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
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
 * - messages: Status and error messages. Should be displayed prominently.
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
 *
 * @ingroup themeable
 */
#}
<div class=\"layout-container\">
<header class=\"page-header\" role=\"banner\">
  <div class=\"container\">
      <div class=\"header-content\">
        {{page.header_top}}
      </div>
  </div>
</header>



<main role=\"main\">
<div class=\"container\">

  <div class=\"hero_section\">
      {{page.hero}}
  </div>

  <div class=\"learning_topic_section\">
    {{page.learning_topic}}
  </div>

   <div class=\"about_us_section\">
    {{page.about_us}}
  </div>

  <div class=\"layout-content\">
      {{ page.content }}
  </div>
</div>
</main>

<footer class=\"site-footer\">
  <div class=\"container\">
    <div class=\"footer_wrapper\">
    <div class=\"footer_left_wrapper\">
    {{page.footer_left}}
    </div>
    <div class=\"footer_middle_wrapper\">
    {{page.footer_middle}}
    </div>
    <div class=\"footer_right_wrapper\">
    {{page.footer_right}}
    </div>
    </div>
  <div>
</footer>
</div>
{# <div class=\"main\" role=\"main\">
\t<div class=\"container\">

    <div class=\"hero_section\">
      {{page.hero}}
    </div>

    <section class=\"main_content\">
    {{page.content}}
    </section>

  
    Show messages only to logged in users
    {% if logged_in %}
\t\t<div class=\"message-wrapper\">
\t\t\t{{ page.status_messages }}
\t\t</div>
    {% endif %}


    <img src = \"{{ content_hero_image }}\" />
    
    <div class=\"learning-topics-wrapper\">
      <h2>Learning Topics</h2>
     
      <img src = \"{{ learning_topic_image }}\" />

    </div>
    <div class=\"our-story-wrapper\">
      
      <img src = \"{{ our_story_image }}\" />
    </div>

\t\t{{ page.content }}
\t</div>
</div> #}

{# <div id=\"popup-demo\">

</div> #}", "themes/custom/inslms_test/templates/page/page--anonymous--with-slider.html.twig", "/var/www/drupal/opigno-lms/web/themes/custom/inslms_test/templates/page/page--anonymous--with-slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
