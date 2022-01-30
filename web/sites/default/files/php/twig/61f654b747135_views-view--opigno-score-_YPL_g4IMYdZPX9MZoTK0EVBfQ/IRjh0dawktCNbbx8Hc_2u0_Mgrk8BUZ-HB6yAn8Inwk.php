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

/* themes/contrib/aristotle/templates/views/views-view--opigno-score-modules.html.twig */
class __TwigTemplate_689709c5e25b0a49e8d68b3c7ea357be35f4b34a22f7d6d6b8c8d9455ff89b18 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "views-view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("views-view.html.twig", "themes/contrib/aristotle/templates/views/views-view--opigno-score-modules.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "title", [], "any", false, false, true, 3) && (($context["display_id"] ?? null) != "opigno_not_evaluated"))) {
            // line 4
            echo "    <h2 class=\"content-box__title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "title", [], "any", false, false, true, 4), 4, $this->source));
            echo "</h2>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/aristotle/templates/views/views-view--opigno-score-modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"views-view.html.twig\" %}
{% block title %}
  {% if view.title and display_id != 'opigno_not_evaluated' %}
    <h2 class=\"content-box__title\">{{ view.title|raw }}</h2>
  {% endif %}
{% endblock %}
", "themes/contrib/aristotle/templates/views/views-view--opigno-score-modules.html.twig", "/var/www/drupal/opigno-lms/web/themes/contrib/aristotle/templates/views/views-view--opigno-score-modules.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("raw" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw'],
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
