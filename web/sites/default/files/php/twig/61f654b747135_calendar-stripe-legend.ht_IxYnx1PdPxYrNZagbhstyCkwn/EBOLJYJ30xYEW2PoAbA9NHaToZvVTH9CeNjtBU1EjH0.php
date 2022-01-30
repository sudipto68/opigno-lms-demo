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

/* modules/contrib/calendar/templates/calendar-stripe-legend.html.twig */
class __TwigTemplate_4e32b16ddf5bdf241f457457e25f581526fa19fc04fa5658972d939bc6947268 extends \Twig\Template
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
        // line 17
        echo "<div class=\"calendar calendar-legend\">
  <table>
    <thead>
      <tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 22
            echo "          <td class=\"calendar-legend\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["header"], "label", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </tr>
    </thead>
    <tbody>
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 28
            echo "        <tr>
          <td>";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</td>
          <td><div style=\"background-color:";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "stripe", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ";color:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "stripe", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ";\" class=\"calendar-legend\" title=\"Key: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "stripe", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo " &nbsp;</div></td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-stripe-legend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  74 => 30,  70 => 29,  67 => 28,  63 => 27,  58 => 24,  49 => 22,  45 => 21,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template to display a stripe legend for a calendar view.
 *
 * Available variables:
 * - headers: the header labels
 * - rows: an associative array holding all rows, each row defines:
 *   - label: the label of the entity of the current row
 *   - stripe: the hex code of the color
 *
 * @see template_preprocess_calendar_stripe_legend()
 *
 * @ingroup themeable
 */
#}
<div class=\"calendar calendar-legend\">
  <table>
    <thead>
      <tr>
        {% for header in headers %}
          <td class=\"calendar-legend\">{{ header.label }}</td>
        {% endfor %}
      </tr>
    </thead>
    <tbody>
      {% for row in rows %}
        <tr>
          <td>{{ row.label }}</td>
          <td><div style=\"background-color:{{ row.stripe }};color:{{ row.stripe }};\" class=\"calendar-legend\" title=\"Key: {{ row.label }}\">{{ row.stripe }} &nbsp;</div></td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>
", "modules/contrib/calendar/templates/calendar-stripe-legend.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/calendar/templates/calendar-stripe-legend.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
