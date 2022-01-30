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

/* modules/contrib/opigno_dashboard/templates/opigno-about-block.html.twig */
class __TwigTemplate_55fe7fd4c69f297432b02b0c24719c14b8dec675e1446173cc481e9aa703382f extends \Twig\Template
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
        echo "
<div id=\"aboutModal\" class=\"modal modal-permanent fade\" tabindex=\"-1\" role=\"dialog\" aria-label=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About Opigno"));
        echo "\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h2 class=\"modal-title\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
        echo "</h2>
        <a class=\"close close-x\" href=\"#\" type=\"button\" data-dismiss=\"modal\" aria-label=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
        echo "\">
          <i class=\"fi fi-rr-cross-small\"></i>
        </a>
      </div>

      <div class=\"modal-body\">
        ";
        // line 24
        if ( !twig_test_empty(($context["logo"] ?? null))) {
            // line 25
            echo "          <img class=\"opigno-logo\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 25, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Logo"));
            echo "\">
        ";
        }
        // line 27
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["texts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 28
            echo "          <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["text"], 28, $this->source), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        ";
        if ( !twig_test_empty(($context["version"] ?? null))) {
            // line 31
            echo "          <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((t("Version") . ": ") . $this->sandbox->ensureToStringAllowed(($context["version"] ?? null), 31, $this->source)), "html", null, true);
            echo "</p>
        ";
        }
        // line 33
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/opigno_dashboard/templates/opigno-about-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  89 => 31,  86 => 30,  77 => 28,  72 => 27,  64 => 25,  62 => 24,  53 => 18,  49 => 17,  42 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display the \"About Opigno\" popup.
 *
 * Available varaibles:
 * - logo: the site logo;
 * - texts: the list of text paragraphs;
 * - version: the platform version.
 */
#}

<div id=\"aboutModal\" class=\"modal modal-permanent fade\" tabindex=\"-1\" role=\"dialog\" aria-label=\"{{ 'About Opigno'|t }}\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h2 class=\"modal-title\">{{ 'About'|t }}</h2>
        <a class=\"close close-x\" href=\"#\" type=\"button\" data-dismiss=\"modal\" aria-label=\"{{ 'Close'|t }}\">
          <i class=\"fi fi-rr-cross-small\"></i>
        </a>
      </div>

      <div class=\"modal-body\">
        {% if logo is not empty %}
          <img class=\"opigno-logo\" src=\"{{ logo }}\" alt=\"{{ 'Logo'|t }}\">
        {% endif %}
        {% for text in texts %}
          <p>{{ text }}</p>
        {% endfor %}
        {% if version is not empty %}
          <p>{{ 'Version'|t ~ ': ' ~ version }}</p>
        {% endif %}
      </div>
    </div>
  </div>
</div>
", "modules/contrib/opigno_dashboard/templates/opigno-about-block.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/opigno_dashboard/templates/opigno-about-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "for" => 27);
        static $filters = array("t" => 13, "escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape'],
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
