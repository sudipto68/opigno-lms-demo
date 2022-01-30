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

/* modules/contrib/opigno_statistics/templates/opigno-user-stats-block.html.twig */
class __TwigTemplate_2fc38522552257a10dfd3ed2df6bd96ff278e7dd2589737702a0cf72e0332cd1 extends \Twig\Template
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
        // line 10
        echo "
<ul class=\"statistics-list opigno-user-statistics\">
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "    <li class=\"statistics-list__item\">
      <span class=\"title\">";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</span>
      <div>
        <span class=\"number\">";
            // line 16
            (((twig_first($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, true, 16))) == "0")) ? (print ("-")) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, true, 16), "html", null, true))));
            echo "</span>

        ";
            // line 18
            if ((twig_first($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["item"], "progress", [], "any", false, false, true, 18))) == "-")) {
                // line 19
                echo "          ";
                $context["progress_class"] = "progress down";
                // line 20
                echo "        ";
            } elseif ((twig_first($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["item"], "progress", [], "any", false, false, true, 20))) == "0")) {
                // line 21
                echo "          ";
                $context["progress_class"] = "progress";
                // line 22
                echo "        ";
            } else {
                // line 23
                echo "          ";
                $context["progress_class"] = "progress up";
                // line 24
                echo "        ";
            }
            // line 25
            echo "        <span class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["progress_class"] ?? null), 25, $this->source), "html", null, true);
            echo "\">
          ";
            // line 26
            if ((preg_match("/^\\d+\$/", twig_get_attribute($this->env, $this->source, $context["item"], "progress", [], "any", false, false, true, 26)) && (twig_get_attribute($this->env, $this->source, $context["item"], "progress", [], "any", false, false, true, 26) > 0))) {
                // line 27
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("+" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "progress", [], "any", false, false, true, 27), 27, $this->source)), "html", null, true);
                echo "
          ";
            } elseif ((twig_first($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source,             // line 28
$context["item"], "progress", [], "any", false, false, true, 28))) == "0")) {
                // line 29
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("-");
                echo "
          ";
            } else {
                // line 31
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "progress", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 33
            echo "          <i class=\"fi fi-rr-arrow-right\"></i>
        </span>
      </div>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/opigno_statistics/templates/opigno-user-stats-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  106 => 33,  100 => 31,  94 => 29,  92 => 28,  87 => 27,  85 => 26,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  60 => 18,  55 => 16,  50 => 14,  47 => 13,  43 => 12,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display user stats block.
 *
 * Available variables:
 * - stats: array of user statistics data.
 */
#}

<ul class=\"statistics-list opigno-user-statistics\">
  {% for item in stats %}
    <li class=\"statistics-list__item\">
      <span class=\"title\">{{ item.title }}</span>
      <div>
        <span class=\"number\">{{ item.amount|trim|first == '0' ? '-' : item.amount }}</span>

        {% if item.progress|trim|first == '-' %}
          {% set progress_class = 'progress down' %}
        {% elseif item.progress|trim|first == '0' %}
          {% set progress_class = 'progress' %}
        {% else %}
          {% set progress_class = 'progress up' %}
        {% endif %}
        <span class=\"{{ progress_class }}\">
          {% if item.progress matches '/^\\\\d+\$/' and item.progress > 0 %}
            {{ '+' ~ item.progress }}
          {% elseif item.progress|trim|first == '0' %}
            {{ '-' }}
          {% else %}
            {{ item.progress }}
          {% endif %}
          <i class=\"fi fi-rr-arrow-right\"></i>
        </span>
      </div>
    </li>
  {% endfor %}
</ul>
", "modules/contrib/opigno_statistics/templates/opigno-user-stats-block.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/opigno_statistics/templates/opigno-user-stats-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "if" => 18, "set" => 19);
        static $filters = array("escape" => 14, "first" => 16, "trim" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'first', 'trim'],
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
