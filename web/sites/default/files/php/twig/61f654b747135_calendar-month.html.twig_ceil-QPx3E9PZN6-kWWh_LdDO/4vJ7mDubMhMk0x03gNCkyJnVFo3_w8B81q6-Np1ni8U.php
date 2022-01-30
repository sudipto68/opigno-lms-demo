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

/* modules/contrib/calendar/templates/calendar-month.html.twig */
class __TwigTemplate_fee3c6ef4408f6df376920fe1f6e00f4dc629eb6caa14b6d76f191423944f828 extends \Twig\Template
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
        // line 20
        echo "<div class=\"calendar-calendar\"><div class=\"month-view\">
<table class=\"full\">
  <thead>
    <tr>
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["day_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
            // line 25
            echo "        <th class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "class", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "header_id", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\">
          ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "data", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
        </th>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tr>
  </thead>
  <tbody>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 33
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "data", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tbody>
</table>
</div></div>
<!--
todo decide what we will do with this.
<script>
try {
  // ie hack to make the single day row expand to available space
  if (\$.browser.msie ) {
    var multiday_height = \$('tr.multi-day')[0].clientHeight; // Height of a multi-day row
    \$('tr[iehint]').each(function(index) {
      var iehint = this.getAttribute('iehint');
      // Add height of the multi day rows to the single day row - seems that 80% height works best
      var height = this.clientHeight + (multiday_height * .8 * iehint); 
      this.style.height = height + 'px';
    });
  }
}catch(e){
  // swallow 
}
</script>-->";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-month.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  74 => 33,  70 => 32,  65 => 29,  56 => 26,  49 => 25,  45 => 24,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template to display a view as a calendar month.
 *
 * Available variables:
 * - day_names: An array of the day of week names for the table header.
 * - rows: An array of data for each day of the week.
 * - view: The view.
 * - calendar_links: Array of formatted links to other calendar displays - year, month, week, day.
 * - display_type: year, month, day, or week.
 * - block: Whether or not this calendar is in a block.
 * - min_date_formatted: The minimum date for this calendar in the format YYYY-MM-DD HH:MM:SS.
 * - max_date_formatted: The maximum date for this calendar in the format YYYY-MM-DD HH:MM:SS.
 * - date_id: a css id that is unique for this date, it is in the form: calendar-nid-field_name-delta
 *
 * @ingroup themeable
 */
#}
<div class=\"calendar-calendar\"><div class=\"month-view\">
<table class=\"full\">
  <thead>
    <tr>
      {% for cell in day_names %}
        <th class=\"{{ cell.class }}\" id=\"{{ cell.header_id }}\">
          {{ cell.data }}
        </th>
      {% endfor %}
    </tr>
  </thead>
  <tbody>
    {% for row in rows %}
      {{ row.data }}
    {% endfor %}
  </tbody>
</table>
</div></div>
<!--
todo decide what we will do with this.
<script>
try {
  // ie hack to make the single day row expand to available space
  if (\$.browser.msie ) {
    var multiday_height = \$('tr.multi-day')[0].clientHeight; // Height of a multi-day row
    \$('tr[iehint]').each(function(index) {
      var iehint = this.getAttribute('iehint');
      // Add height of the multi day rows to the single day row - seems that 80% height works best
      var height = this.clientHeight + (multiday_height * .8 * iehint); 
      this.style.height = height + 'px';
    });
  }
}catch(e){
  // swallow 
}
</script>-->", "modules/contrib/calendar/templates/calendar-month.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/calendar/templates/calendar-month.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 24);
        static $filters = array("escape" => 25);
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
