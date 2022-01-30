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

/* themes/custom/inslms_test/templates/menu/menu--main.html.twig */
class __TwigTemplate_daff62e7e7cee87ffe6e3595c85be1ca7f2a10bfc60d0cb46152fc51fa1dde46 extends \Twig\Template
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
        // line 23
        echo "
";
        // line 24
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["management_menu"] ?? null)], 25, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 27
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__management_menu__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "management_menu" => $__management_menu__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 28
            echo "  ";
            $macros["menus"] = $this;
            // line 29
            echo "  ";
            // line 30
            echo "  ";
            if ((($context["logged_in"] ?? null) != "1")) {
                // line 31
                echo "    ";
                if (($context["items"] ?? null)) {
                    // line 32
                    echo "      ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 33
                        echo "        <ul ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "main-menu"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                        echo ">
      ";
                    } else {
                        // line 35
                        echo "        <ul>
      ";
                    }
                    // line 37
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 38
                        echo "        <li ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 38), "addClass", [0 => "main-menu__item"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                        echo ">
          ";
                        // line 39
                        ob_start();
                        // line 40
                        echo "            <span>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                        echo "</span>
          ";
                        $context["link_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 42
                        echo "
          ";
                        // line 43
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_html"] ?? null), 43, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 43), 43, $this->source), ["class" => [0 => "main-menu__link", 1 => twig_lower_filter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), 43, $this->source), [" " => "_"]))], "title" => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43)]), "html", null, true);
                        echo "

          ";
                        // line 45
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 45)) {
                            // line 46
                            echo "            ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 46), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 46, $context, $this->getSourceContext()));
                            echo "
          ";
                        }
                        // line 48
                        echo "        </li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "      ";
                    if (($context["management_menu"] ?? null)) {
                        // line 51
                        echo "      <li class=\"main-menu__item management\">
        <div class=\"dropdown\">
          <a href=\"javascript:void();\" id=\"dropdownManagement\" class=\"main-menu__link d-flex align-items-center\" data-toggle=\"dropdown\">";
                        // line 53
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Management"));
                        echo "</a>
          <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownManagement\">
            <div class=\"container d-flex\">
              <div class=\"info\">
                <h2>";
                        // line 57
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Management"));
                        echo "</h2>
              </div>
              <div class=\"menu-wrapper\">
                ";
                        // line 60
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["management_menu"] ?? null), 60, $this->source), "html", null, true);
                        echo "
              </div>
            </div>
          </div>
        </div>
      </li>
      ";
                    }
                    // line 67
                    echo "      </ul>
    ";
                }
                // line 69
                echo "  ";
                // line 70
                echo "  ";
            } else {
                // line 71
                echo "    <ul>
      <li class=\"main-menu__item\">
        <a href=\"/user/login\" title=\"Login\" class=\"main-menu__link login\" data-drupal-link-system-path=\"user/login\">
          <span>Sign In</span>
        </a>
      </li>
    </ul>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/inslms_test/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 71,  168 => 70,  166 => 69,  162 => 67,  152 => 60,  146 => 57,  139 => 53,  135 => 51,  132 => 50,  125 => 48,  119 => 46,  117 => 45,  112 => 43,  109 => 42,  103 => 40,  101 => 39,  96 => 38,  91 => 37,  87 => 35,  81 => 33,  78 => 32,  75 => 31,  72 => 30,  70 => 29,  67 => 28,  51 => 27,  44 => 25,  42 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display the main menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}

{% import _self as menus %}
{{ menus.menu_links(items, attributes, 0, management_menu) }}

{% macro menu_links(items, attributes, menu_level, management_menu) %}
  {% import _self as menus %}
  {# Menu for logged in users #}
  {% if logged_in != '1' %}
    {% if items %}
      {% if menu_level == 0 %}
        <ul {{ attributes.addClass('main-menu') }}>
      {% else %}
        <ul>
      {% endif %}
      {% for item in items %}
        <li {{ item.attributes.addClass('main-menu__item') }}>
          {% set link_html  %}
            <span>{{ item.title }}</span>
          {% endset %}

          {{ link(link_html, item.url, {'class':['main-menu__link', item.title|replace({' ': '_'})|lower], 'title': item.title }) }}

          {% if item.below %}
            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
          {% endif %}
        </li>
      {% endfor %}
      {% if management_menu %}
      <li class=\"main-menu__item management\">
        <div class=\"dropdown\">
          <a href=\"javascript:void();\" id=\"dropdownManagement\" class=\"main-menu__link d-flex align-items-center\" data-toggle=\"dropdown\">{{ 'Management'|t }}</a>
          <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownManagement\">
            <div class=\"container d-flex\">
              <div class=\"info\">
                <h2>{{ 'Management'|t }}</h2>
              </div>
              <div class=\"menu-wrapper\">
                {{ management_menu }}
              </div>
            </div>
          </div>
        </div>
      </li>
      {% endif %}
      </ul>
    {% endif %}
  {# Menu for Anonymous users #}
  {% else %}
    <ul>
      <li class=\"main-menu__item\">
        <a href=\"/user/login\" title=\"Login\" class=\"main-menu__link login\" data-drupal-link-system-path=\"user/login\">
          <span>Sign In</span>
        </a>
      </li>
    </ul>
    {% endif %}
{% endmacro %}
", "themes/custom/inslms_test/templates/menu/menu--main.html.twig", "/var/www/drupal/opigno-lms/web/themes/custom/inslms_test/templates/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 24, "macro" => 27, "if" => 30, "for" => 37, "set" => 39);
        static $filters = array("escape" => 33, "lower" => 43, "replace" => 43, "t" => 53);
        static $functions = array("link" => 43);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'lower', 'replace', 't'],
                ['link']
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
