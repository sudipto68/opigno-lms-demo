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

/* themes/contrib/aristotle/templates/views/views-view.html.twig */
class __TwigTemplate_e0ede34530a623c20af2ea744bc57c362be5ff9ac702822564c9bb3036258f50 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "
";
        // line 37
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["id"] ?? null), 40, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 41
($context["display_id"] ?? null), 41, $this->source)), 4 => ((        // line 42
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 42, $this->source))) : (""))];
        // line 45
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        echo ">
  ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 46, $this->source), "html", null, true);
        echo "
  ";
        // line 47
        $this->displayBlock('title', $context, $blocks);
        // line 52
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 52, $this->source), "html", null, true);
        echo "

  ";
        // line 54
        if (($context["header"] ?? null)) {
            // line 55
            echo "    <div class=\"content-box__info\">
      ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 56, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 59
        echo "
  ";
        // line 60
        if (($context["exposed"] ?? null)) {
            // line 61
            echo "    <div class=\"view-filters form-group\">
      ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 62, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (($context["attachment_before"] ?? null)) {
            // line 67
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 68, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 71
        echo "
  ";
        // line 72
        if (($context["rows"] ?? null)) {
            // line 73
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 73, $this->source), "html", null, true);
            echo "
    ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 74, $this->source), "html", null, true);
            echo "

  ";
        } elseif (        // line 76
($context["empty"] ?? null)) {
            // line 77
            echo "    <div class=\"view-empty\">
      ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 78, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 81
        echo "
  ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 82, $this->source), "html", null, true);
        echo "

  ";
        // line 84
        if (($context["attachment_after"] ?? null)) {
            // line 85
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 86, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 89
        echo "
  ";
        // line 90
        if (($context["footer"] ?? null)) {
            // line 91
            echo "    <div class=\"view-footer\">
      ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 92, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 95
        echo "</div>
";
    }

    // line 47
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "title", [], "any", false, false, true, 48)) {
            // line 49
            echo "    <h2 class=\"content-box__title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "title", [], "any", false, false, true, 49), 49, $this->source));
            echo "</h2>
  ";
        }
        // line 51
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/aristotle/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 51,  176 => 49,  173 => 48,  169 => 47,  164 => 95,  158 => 92,  155 => 91,  153 => 90,  150 => 89,  144 => 86,  141 => 85,  139 => 84,  134 => 82,  131 => 81,  125 => 78,  122 => 77,  120 => 76,  115 => 74,  110 => 73,  108 => 72,  105 => 71,  99 => 68,  96 => 67,  94 => 66,  91 => 65,  85 => 62,  82 => 61,  80 => 60,  77 => 59,  71 => 56,  68 => 55,  66 => 54,  60 => 52,  58 => 47,  54 => 46,  49 => 45,  47 => 42,  46 => 41,  45 => 40,  44 => 39,  43 => 37,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   JavaScript.
 *
 * @ingroup templates
 *
 * @see template_preprocess_views_view()
 */
#}

{%
  set classes = [
    'view',
    'view-' ~ id|clean_class,
    'view-id-' ~ id,
    'view-display-id-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div {{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% block title %}
  {% if view.title %}
    <h2 class=\"content-box__title\">{{ view.title|raw }}</h2>
  {% endif %}
  {% endblock %}
  {{ title_suffix }}

  {% if header %}
    <div class=\"content-box__info\">
      {{ header }}
    </div>
  {% endif %}

  {% if exposed %}
    <div class=\"view-filters form-group\">
      {{ exposed }}
    </div>
  {% endif %}

  {% if attachment_before %}
    <div class=\"attachment attachment-before\">
      {{ attachment_before }}
    </div>
  {% endif %}

  {% if rows %}
    {{ rows }}
    {{ more }}

  {% elseif empty %}
    <div class=\"view-empty\">
      {{ empty }}
    </div>
  {% endif %}

  {{ pager }}

  {% if attachment_after %}
    <div class=\"attachment attachment-after\">
      {{ attachment_after }}
    </div>
  {% endif %}

  {% if footer %}
    <div class=\"view-footer\">
      {{ footer }}
    </div>
  {% endif %}
</div>
", "themes/contrib/aristotle/templates/views/views-view.html.twig", "/var/www/drupal/opigno-lms/web/themes/contrib/aristotle/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 37, "block" => 47, "if" => 54);
        static $filters = array("clean_class" => 39, "escape" => 45, "raw" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw'],
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
