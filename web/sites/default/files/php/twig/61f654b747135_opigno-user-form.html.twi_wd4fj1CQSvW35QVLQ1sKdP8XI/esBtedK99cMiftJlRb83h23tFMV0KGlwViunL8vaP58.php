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

/* modules/contrib/opigno_dashboard/templates/opigno-user-form.html.twig */
class __TwigTemplate_ac193b1df98c9c0022460554a48b76c21c12c65b4104d85bf8f86b705bdd63a6 extends \Twig\Template
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
        // line 1
        echo "<div class=\"user-form-wrapper\">
  ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_build_id", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "
  ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_token", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
  ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_id", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "

  ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user_picture", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "

  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_first_name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_last_name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "

  ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", false, false, true, 11), "mail", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
  ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", false, false, true, 12), "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
  ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", false, false, true, 13), "pass", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "

  ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", false, false, true, 15), 15, $this->source), "mail", "name", "pass", "notify"), "html", null, true);
        echo "
  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 16, $this->source), "field_private_profile", "field_last_name", "field_first_name", "actions", "footer", "language", "timezone", "contact", "account", "user_picture", "form_id", "form_token", "form_build_id"), "html", null, true);
        echo "

  ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_private_profile", [], "any", false, false, true, 18)) {
            // line 19
            echo "  <div class=\"form-item\">
    <div class=\"label\">
      ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_private_profile", [], "any", false, false, true, 21), "label", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "
    </div>
    <div class=\"field\">
      ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_private_profile", [], "any", false, false, true, 24), "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        $context["notify"] = twig_trim_filter($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", false, false, true, 29), "notify", [], "any", false, false, true, 29), "notify", [], "any", false, false, true, 29), 29, $this->source)));
        // line 30
        echo "  ";
        if (($context["notify"] ?? null)) {
            // line 31
            echo "  <div class=\"form-item\">
    <div class=\"label\">
      ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "account", [], "any", false, false, true, 33), "notify", [], "any", false, false, true, 33), "label", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
    </div>
    <div class=\"field\">
      ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["notify"] ?? null), 36, $this->source));
            echo "
    </div>
  </div>
  ";
        }
        // line 40
        echo "
  ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "language", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "

  <div class=\"form-item\">
    <div class=\"label\">
      ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, true, 45), "label", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"field\">
      ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, true, 48), "contact", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
    </div>
  </div>
  ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "timezone", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "

  ";
        // line 54
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "footer", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "

  ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/opigno_dashboard/templates/opigno-user-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 56,  162 => 54,  157 => 51,  151 => 48,  145 => 45,  138 => 41,  135 => 40,  128 => 36,  122 => 33,  118 => 31,  115 => 30,  113 => 29,  110 => 28,  103 => 24,  97 => 21,  93 => 19,  91 => 18,  86 => 16,  82 => 15,  77 => 13,  73 => 12,  69 => 11,  64 => 9,  60 => 8,  55 => 6,  50 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"user-form-wrapper\">
  {{ form.form_build_id }}
  {{ form.form_token }}
  {{ form.form_id }}

  {{ form.user_picture }}

  {{ form.field_first_name }}
  {{ form.field_last_name }}

  {{ form.account.mail }}
  {{ form.account.name }}
  {{ form.account.pass }}

  {{ form.account|without('mail','name','pass','notify') }}
  {{ form|without('field_private_profile', 'field_last_name', 'field_first_name', 'actions','footer','language','timezone','contact','account','user_picture','form_id','form_token','form_build_id',) }}

  {% if form.field_private_profile %}
  <div class=\"form-item\">
    <div class=\"label\">
      {{ form.field_private_profile.label }}
    </div>
    <div class=\"field\">
      {{ form.field_private_profile.content }}
    </div>
  </div>
  {% endif %}

  {% set notify = form.account.notify.notify|render|trim %}
  {% if notify %}
  <div class=\"form-item\">
    <div class=\"label\">
      {{ form.account.notify.label }}
    </div>
    <div class=\"field\">
      {{ notify|raw }}
    </div>
  </div>
  {% endif %}

  {{ form.language }}

  <div class=\"form-item\">
    <div class=\"label\">
      {{ form.contact.label }}
    </div>
    <div class=\"field\">
      {{ form.contact.contact }}
    </div>
  </div>
  {{ form.timezone }}

  {#{{ form.field_private_profile }}#}
  {{ form.footer }}

  {{ form.actions }}
</div>
", "modules/contrib/opigno_dashboard/templates/opigno-user-form.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/opigno_dashboard/templates/opigno-user-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "set" => 29);
        static $filters = array("escape" => 2, "without" => 15, "trim" => 29, "render" => 29, "raw" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'without', 'trim', 'render', 'raw'],
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
