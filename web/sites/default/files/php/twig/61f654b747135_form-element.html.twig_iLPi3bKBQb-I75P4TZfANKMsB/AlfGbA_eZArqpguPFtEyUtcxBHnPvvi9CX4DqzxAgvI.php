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

/* themes/contrib/aristotle/templates/form/form-element.html.twig */
class __TwigTemplate_1b3d836e4c8c5cb06971d1790daf79df03a419fa99b5bc23c6dd30bfa6fe3ba8 extends \Twig\Template
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
        // line 7
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 10
($context["type"] ?? null), 10, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 11
($context["name"] ?? null), 11, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 12
($context["name"] ?? null), 12, $this->source))), 5 => ((!twig_in_filter(        // line 13
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 6 => (((        // line 14
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 15
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 19
        $context["description_classes"] = [0 => "description", 1 => (((        // line 21
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 24
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
  ";
        // line 25
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before"])) {
            // line 26
            echo "    <div class=\"label\">
      ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 27, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 30
        echo "  <div class=\"field\">
    ";
        // line 31
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 32
            echo "      <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 32, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 34
        echo "    ";
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 34))) {
            // line 35
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo ">
        ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 39
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 39, $this->source), "html", null, true);
        echo "
    ";
        // line 40
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 41
            echo "      <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 41, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 43
        echo "    ";
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "after", 1 => "invisible"])) {
            // line 44
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 44, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 46
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 47
            echo "      <div class=\"form-item--error-message\">
        ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 48, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 51
        echo "    ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 51))) {
            // line 52
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 52), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ">
        ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 56
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/aristotle/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 56,  133 => 53,  128 => 52,  125 => 51,  119 => 48,  116 => 47,  113 => 46,  107 => 44,  104 => 43,  98 => 41,  96 => 40,  91 => 39,  85 => 36,  80 => 35,  77 => 34,  71 => 32,  69 => 31,  66 => 30,  60 => 27,  57 => 26,  55 => 25,  50 => 24,  48 => 21,  47 => 19,  45 => 15,  44 => 14,  43 => 13,  42 => 12,  41 => 11,  40 => 10,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @see core/modules/system/templates/form-element.html.twig
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-type-' ~ type|clean_class,
    'form-item-' ~ name|clean_class,
    'js-form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'form-disabled',
    errors ? 'form-item--error',
  ]
%}
{%
  set description_classes = [
    'description',
    description_display == 'invisible' ? 'visually-hidden',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {% if label_display in ['before'] %}
    <div class=\"label\">
      {{ label }}
    </div>
  {% endif %}
  <div class=\"field\">
    {% if prefix is not empty %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {{ children }}
    {% if suffix is not empty %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if label_display in ['after', 'invisible'] %}
      {{ label }}
    {% endif %}
    {% if errors %}
      <div class=\"form-item--error-message\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <div{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </div>
    {% endif %}
  </div>
</div>
", "themes/contrib/aristotle/templates/form/form-element.html.twig", "/var/www/drupal/opigno-lms/web/themes/contrib/aristotle/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "if" => 25);
        static $filters = array("clean_class" => 10, "escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
