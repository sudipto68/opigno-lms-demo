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

/* modules/contrib/calendar/templates/calendar-datebox.html.twig */
class __TwigTemplate_f9a11c8f6aa28ea11632df4ecdf6ff5a842fa31262e3905550a3a06c0f5bd02b extends \Twig\Template
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
        // line 21
        echo "<div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["granularity"] ?? null), 21, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 21, $this->source), "html", null, true);
        echo "\">
  ";
        // line 22
        if ( !twig_test_empty(($context["selected"] ?? null))) {
            // line 23
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 23, $this->source), "html", null, true);
            echo "
  ";
        } else {
            // line 25
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["day"] ?? null), 25, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-datebox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 27,  54 => 25,  48 => 23,  46 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template to display the date box in a calendar.
 *
 * Available variables:
 * - view: The view.
 * - granularity: The type of calendar this box is in -- year, month, day, or week.
 * - mini: Whether or not this is a mini calendar.
 * - class: The class for this box -- mini-on, mini-off, or day.
 * - day:  The day of the month.
 * - date: The current date, in the form YYYY-MM-DD.
 * - link: A formatted link to the calendar day view for this day.
 * - url:  The url to the calendar day view for this day.
 * - selected: Whether or not this day has any items.
 * - items: An array of items for this day.
 *
 * @ingroup themeable
 */
#}
<div class=\"{{ granularity }} {{ class }}\">
  {% if selected is not empty %}
    {{ link }}
  {% else %}
    {{ day }}
  {% endif %}
</div>
", "modules/contrib/calendar/templates/calendar-datebox.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/calendar/templates/calendar-datebox.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22);
        static $filters = array("escape" => 21);
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
