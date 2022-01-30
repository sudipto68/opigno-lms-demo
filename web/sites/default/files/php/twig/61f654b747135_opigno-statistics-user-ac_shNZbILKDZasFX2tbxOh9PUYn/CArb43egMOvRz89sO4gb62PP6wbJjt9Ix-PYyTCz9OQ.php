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

/* modules/contrib/opigno_statistics/templates/opigno-statistics-user-achievement.html.twig */
class __TwigTemplate_51c4f8267eeb2cb17f57f81dbfa7832deff6744160ca11bcc3474e1ddee276b7 extends \Twig\Template
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
        // line 14
        echo "
<div class=\"link-box\">
  ";
        // line 16
        if (($context["img"] ?? null)) {
            // line 17
            echo "    <div class=\"link-box__type\">
      <img src=\"";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img"] ?? null), 18, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 18, $this->source), "html", null, true);
            echo "\">
    </div>
  ";
        }
        // line 21
        echo "
  <div class=\"link-box__content\">
    ";
        // line 23
        if ( !twig_test_empty(($context["url"] ?? null))) {
            // line 24
            echo "      <a class=\"link-box__link\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            echo "\"></a>
    ";
        }
        // line 26
        echo "    <div class=\"link-box__number\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 26, $this->source), "html", null, true);
        echo "</div>
    <div class=\"link-box__title\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 27, $this->source), "html", null, true);
        echo "</div>
    ";
        // line 28
        if ( !twig_test_empty(($context["subtitle"] ?? null))) {
            // line 29
            echo "      <div class=\"link-box__subtext\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subtitle"] ?? null), 29, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 31
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/opigno_statistics/templates/opigno-statistics-user-achievement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  79 => 29,  77 => 28,  73 => 27,  68 => 26,  62 => 24,  60 => 23,  56 => 21,  48 => 18,  45 => 17,  43 => 16,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the user achievement block.
 *
 * Available variables:
 * - count: the amount of achievements;
 * - img: the image link;
 * - text: the text to be displayed;
 * - subtitle: the text that should be displayed at the bottom (optional);
 * - url: the url the block should lead to.
 */
#}

<div class=\"link-box\">
  {% if img %}
    <div class=\"link-box__type\">
      <img src=\"{{ img }}\" alt=\"{{ text }}\">
    </div>
  {% endif %}

  <div class=\"link-box__content\">
    {% if url is not empty %}
      <a class=\"link-box__link\" href=\"{{ url }}\"></a>
    {% endif %}
    <div class=\"link-box__number\">{{ count }}</div>
    <div class=\"link-box__title\">{{ text }}</div>
    {% if subtitle is not empty %}
      <div class=\"link-box__subtext\">{{ subtitle }}</div>
    {% endif %}
  </div>
</div>
", "modules/contrib/opigno_statistics/templates/opigno-statistics-user-achievement.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/opigno_statistics/templates/opigno-statistics-user-achievement.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 18);
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
