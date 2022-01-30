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

/* modules/contrib/opigno_dashboard/templates/opigno-dashboard-user-statistics-block.html.twig */
class __TwigTemplate_0a0f5b8675f82645497c9df4225216501bac9b207bf17fcbfc52d11d72aea351 extends \Twig\Template
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
<div class=\"content-box profile-info\">
  <div class=\"edit-link\">
    <a href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.user.edit_form", ["user" => ($context["uid"] ?? null)]), "html", null, true);
        echo "\">
      <i class=\"fi fi-rr-edit\"></i>
    </a>
  </div>

  <div class=\"profile-info__body\">
    <div class=\"profile-info__pic\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 23, $this->source), "html", null, true);
        echo "</div>
    <a href=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.user.canonical", ["user" => ($context["uid"] ?? null)]), "html", null, true);
        echo "\">
      <h2 class=\"profile-info__name\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_name"] ?? null), 25, $this->source), "html", null, true);
        echo "</h2>
    </a>
    <div class=\"profile-info__type\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["role"] ?? null), 27, $this->source), "html", null, true);
        echo "</div>
  </div>

  <div class=\"profile-info__statistics\">
    <div class=\"filter\">
      <div class=\"filter__label\">";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Trends"));
        echo "</div>
      <select name=\"filterRange\" id=\"filterRange\" class=\"form-select selectpicker\">
        <option value=\"7\">";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last 7 days"));
        echo "</option>
        <option value=\"30\">";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last 30 days"));
        echo "</option>
      </select>
    </div>
    ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["stats"] ?? null), 38, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/opigno_dashboard/templates/opigno-dashboard-user-statistics-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  83 => 35,  79 => 34,  74 => 32,  66 => 27,  61 => 25,  57 => 24,  53 => 23,  44 => 17,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display the User statistics block.
 *
 * Available variables:
 * - user_name: the user name;
 * - uid: the user ID;
 * - user_picture: the rendered user profile picture;
 * - role: the user role;
 * - stats: user trainings stats.
 */
#}

<div class=\"content-box profile-info\">
  <div class=\"edit-link\">
    <a href=\"{{ path('entity.user.edit_form', { 'user': uid }) }}\">
      <i class=\"fi fi-rr-edit\"></i>
    </a>
  </div>

  <div class=\"profile-info__body\">
    <div class=\"profile-info__pic\">{{ user_picture }}</div>
    <a href=\"{{ path('entity.user.canonical', { 'user': uid }) }}\">
      <h2 class=\"profile-info__name\">{{ user_name }}</h2>
    </a>
    <div class=\"profile-info__type\">{{ role }}</div>
  </div>

  <div class=\"profile-info__statistics\">
    <div class=\"filter\">
      <div class=\"filter__label\">{{ 'Trends'|t }}</div>
      <select name=\"filterRange\" id=\"filterRange\" class=\"form-select selectpicker\">
        <option value=\"7\">{{ 'Last 7 days'|t }}</option>
        <option value=\"30\">{{ 'Last 30 days'|t }}</option>
      </select>
    </div>
    {{ stats }}
  </div>
</div>
", "modules/contrib/opigno_dashboard/templates/opigno-dashboard-user-statistics-block.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/opigno_dashboard/templates/opigno-dashboard-user-statistics-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17, "t" => 32);
        static $functions = array("path" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                ['path']
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
