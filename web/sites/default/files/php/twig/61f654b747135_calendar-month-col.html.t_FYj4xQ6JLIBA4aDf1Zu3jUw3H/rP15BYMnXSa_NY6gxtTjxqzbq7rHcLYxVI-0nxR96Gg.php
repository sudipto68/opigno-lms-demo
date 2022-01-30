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

/* modules/contrib/opigno_calendar/templates/calendar-month-col.html.twig */
class __TwigTemplate_5d4def0a6166ceee41a4e40167d51d991ecef9dbfb9856dd848130231dd1a549 extends \Twig\Template
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
        // line 12
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", false, false, true, 12)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "single-day no-entry") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            // line 13
            echo "  <td
    id=\"";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, true, 14), 14, $this->source) . "_empty"), "html", null, true);
            echo "\"
    date-date=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "date", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\"
    data-day-of-month=\"";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "day_of_month", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\"
    headers=\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "header_id", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\"
    class=\"";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\"
    colspan=\"";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "colspan", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\"
    rowspan=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rowspan", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\">
    <div class=\"inner\">
      <div class=\"date-box\"><span class=\"date-day\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "date", [], "any", false, false, true, 22), 22, $this->source), "d"), "html", null, true);
            echo "</span>
        <span class=\"date-month\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "date", [], "any", false, false, true, 23), 23, $this->source), "F")));
            echo "</span>
        <span class=\"date-year\">";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "date", [], "any", false, false, true, 24), 24, $this->source), "Y"), "html", null, true);
            echo "</span>
      </div>
      <h4 class=\"title\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No Event"));
            echo "</h4>
    </div>
  </td>
";
        } else {
            // line 30
            echo "  <td
    id=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\"
    date-date=\"";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "date", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "\"
    data-day-of-month=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "day_of_month", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\"
    headers=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "header_id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\"
    class=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\"
    colspan=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "colspan", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\"
    rowspan=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rowspan", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">
    <div class=\"inner\">
      ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "entry", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
    </div>
  </td>
";
        }
        // line 43
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/opigno_calendar/templates/calendar-month-col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  125 => 39,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  93 => 30,  86 => 26,  81 => 24,  77 => 23,  73 => 22,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  41 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template to display a column.
 *
 * Available variables:
 * - item: The item to render within a td element.
 *
 * @ingroup themeable
 */
#}
{% if item.class starts with 'single-day no-entry' %}
  <td
    id=\"{{ item.id ~ '_empty'}}\"
    date-date=\"{{ item.date }}\"
    data-day-of-month=\"{{ item.day_of_month }}\"
    headers=\"{{ item.header_id }}\"
    class=\"{{ item.class }}\"
    colspan=\"{{ item.colspan }}\"
    rowspan=\"{{ item.rowspan }}\">
    <div class=\"inner\">
      <div class=\"date-box\"><span class=\"date-day\">{{ item.date|date(\"d\") }}</span>
        <span class=\"date-month\">{{ item.date|date(\"F\")|t }}</span>
        <span class=\"date-year\">{{ item.date|date(\"Y\") }}</span>
      </div>
      <h4 class=\"title\">{{ \"No Event\"|t }}</h4>
    </div>
  </td>
{% else %}
  <td
    id=\"{{ item.id }}\"
    date-date=\"{{ item.date }}\"
    data-day-of-month=\"{{ item.day_of_month }}\"
    headers=\"{{ item.header_id }}\"
    class=\"{{ item.class }}\"
    colspan=\"{{ item.colspan }}\"
    rowspan=\"{{ item.rowspan }}\">
    <div class=\"inner\">
      {{ item.entry }}
    </div>
  </td>
{% endif %}

", "modules/contrib/opigno_calendar/templates/calendar-month-col.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/opigno_calendar/templates/calendar-month-col.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("escape" => 14, "date" => 22, "t" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date', 't'],
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
