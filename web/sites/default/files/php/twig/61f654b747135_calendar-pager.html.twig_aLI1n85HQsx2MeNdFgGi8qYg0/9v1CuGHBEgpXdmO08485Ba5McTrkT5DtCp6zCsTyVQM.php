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

/* modules/contrib/calendar/templates/calendar-pager.html.twig */
class __TwigTemplate_1f6c180e7200004b71b00958b0376c49f1e41277b975c6ae3b2f983aac7752bc extends \Twig\Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 12) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 12)) &&  !($context["exclude"] ?? null))) {
            // line 13
            echo "    <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
        <h4 class=\"visually-hidden\">";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
        <ul class=\"js-pager__items\">
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 16)) {
                // line 17
                echo "                <li class=\"pager__item pager__item--previous\">
                    <a href=\"";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18), "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18), "attributes", [], "any", false, false, true, 18), 18, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
                        <span aria-hidden=\"true\">";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 19), "text", [], "any", true, true, true, 19)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 19), "text", [], "any", false, false, true, 19), 19, $this->source), t("‹‹"))) : (t("‹‹"))), "html", null, true);
                echo "</span>
                        <span>";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 24
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 24)) {
                // line 25
                echo "                <li class=\"pager__item pager__item--current\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</li>
            ";
            }
            // line 27
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 27)) {
                // line 28
                echo "                <li class=\"pager__item pager__item--next\">
                    <a href=\"";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 29), "url", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 29), "attributes", [], "any", false, false, true, 29), 29, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
                        <span>";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
                echo "</span>
                        <span aria-hidden=\"true\">";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 31), "text", [], "any", true, true, true, 31)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 31), "text", [], "any", false, false, true, 31), 31, $this->source), t("››"))) : (t("››"))), "html", null, true);
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 35
            echo "        </ul>
    </nav>
";
        }
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/calendar/templates/calendar-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  107 => 35,  100 => 31,  96 => 30,  88 => 29,  85 => 28,  82 => 27,  76 => 25,  73 => 24,  66 => 20,  62 => 19,  54 => 18,  51 => 17,  49 => 16,  44 => 14,  41 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a calendar pager.
 *
 * Available variables:
 * - items: List of pager items.
 *
 * @ingroup themeable
 */
#}
{% if (items.previous or items.next) and not exclude %}
    <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
        <h4 class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
        <ul class=\"js-pager__items\">
            {% if items.previous %}
                <li class=\"pager__item pager__item--previous\">
                    <a href=\"{{ items.previous.url }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel') }}>
                        <span aria-hidden=\"true\">{{ items.previous.text|default('‹‹'|t) }}</span>
                        <span>{{ 'Previous'|t }}</span>
                    </a>
                </li>
            {% endif %}
            {% if items.current %}
                <li class=\"pager__item pager__item--current\">{{ items.current }}</li>
            {% endif %}
            {% if items.next %}
                <li class=\"pager__item pager__item--next\">
                    <a href=\"{{ items.next.url }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }}>
                        <span>{{ 'Next'|t }}</span>
                        <span aria-hidden=\"true\">{{ items.next.text|default('››'|t) }}</span>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}

", "modules/contrib/calendar/templates/calendar-pager.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/calendar/templates/calendar-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("t" => 14, "escape" => 18, "without" => 18, "default" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'without', 'default'],
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
