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

/* modules/contrib/opigno_dashboard/templates/opigno-site-header.html.twig */
class __TwigTemplate_a58f8aab3ced9e926a5fc0cdc35166039eb64ca4af5a991f4bb82812fcab1ceb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'user_menu' => [$this, 'block_user_menu'],
            'dropdown_menu' => [$this, 'block_dropdown_menu'],
            'profile' => [$this, 'block_profile'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
<header class=\"page-header\" role=\"banner\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      ";
        // line 22
        if ( !($context["is_anonymous"] ?? null)) {
            // line 23
            echo "      <div class=\"col-lg-9 col-xxl-8 col-left\">
      ";
        } else {
            // line 25
            echo "      <div class=\"col-lg-12 col-xxl-12 col-left\">
      ";
        }
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        if ( !twig_test_empty(($context["logo"] ?? null))) {
            // line 29
            echo "          <div class=\"region region-branding\">
            <div class=\"block-system-branding-block\">
              <a class=\"home-link\" href=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\">
                <img class=\"logo\" src=\"";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 32, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\">
              </a>
            </div>
          </div>
        ";
        }
        // line 37
        echo "
        <div class=\"region-main-menu\">
          <nav>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu"] ?? null), 39, $this->source), "html", null, true);
        echo "</nav>
        </div>

        ";
        // line 43
        echo "        <div class=\"mobile-menu-btn\">
          <span></span>
          <span></span>
          <span></span>
        </div>

        ";
        // line 50
        echo "        <div class=\"mobile-header-wrapper\">
          <div class=\"mobile-header\">
            <nav>";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu"] ?? null), 52, $this->source), "html", null, true);
        echo "</nav>
              ";
        // line 54
        echo "            <div class=\"block-notifications\">
              <div class=\"block-notifications__item block-notifications__item--notifications\">
                <div class=\"dropdown\">
                  <a href=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("view.opigno_notifications.page_all"));
        echo "\">
                    <i class=\"fi fi-rr-bell\">
                      ";
        // line 59
        $context["classes"] = (((($context["notifications_count"] ?? null) != 0)) ? ("marker") : ("marker hidden"));
        // line 60
        echo "                      <span class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 60, $this->source), "html", null, true);
        echo "\"></span>
                    </i>
                  </a>
                </div>
              </div>

              ";
        // line 66
        $this->displayBlock('user_menu', $context, $blocks);
        // line 120
        echo "            </div>

            ";
        // line 122
        $this->displayBlock('profile', $context, $blocks);
        // line 130
        echo "            ";
        $this->displayBlock("dropdown_menu", $context, $blocks);
        echo "
          </div>
        </div>
      </div>

      ";
        // line 135
        if ( !($context["is_anonymous"] ?? null)) {
            // line 136
            echo "      <div class=\"col-lg-3 col-xxl-4 col-right\">
        ";
            // line 137
            $this->displayBlock("profile", $context, $blocks);
            echo "

        <div class=\"block-notifications\">
          <div class=\"block-notifications__item block-notifications__item--notifications\">
            <div class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fi fi-rr-bell\">
                  ";
            // line 144
            $context["classes"] = (((($context["notifications_count"] ?? null) != 0)) ? ("marker") : ("marker hidden"));
            // line 145
            echo "                  <span class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 145, $this->source), "html", null, true);
            echo "\"></span>
                </i>
              </a>

              <div class=\"dropdown-menu dropdown-menu-right ";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["notifications_count"] ?? null) == 0)) ? ("hidden") : ("")));
            echo "\">
                ";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["notifications"] ?? null), 150, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
          ";
            // line 154
            $this->displayBlock("user_menu", $context, $blocks);
            echo "
        </div>

      </div>
      ";
        }
        // line 159
        echo "
    </div>
  </div>
</header>
";
    }

    // line 66
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                ";
        // line 68
        echo "                <div class=\"block-notifications__item block-notifications__item--messages\">
                  <div class=\"dropdown\">
                    <a href=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("private_message.private_message_page"));
        echo "\">
                      <i class=\"fi fi-rr-envelope\">
                        ";
        // line 72
        $context["classes"] = (((($context["messages_count"] ?? null) != 0)) ? ("marker") : ("marker hidden"));
        // line 73
        echo "                        <span class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 73, $this->source), "html", null, true);
        echo "\"></span>
                      </i>
                    </a>
                  </div>
                </div>

                ";
        // line 80
        echo "                <div class=\"block-notifications__item block-notifications__item--user-menu\">
                  <div class=\"dropdown\">
                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                      <i class=\"fi fi-rr-angle-small-down\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                      <div class=\"user-menu-block\">
                        <div class=\"user-name\">
                          ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["dropdown_menu"] ?? null), "name", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
                          <span>";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["dropdown_menu"] ?? null), "role", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo "</span>
                        </div>

                        ";
        // line 93
        echo "                        ";
        $this->displayBlock('dropdown_menu', $context, $blocks);
        // line 115
        echo "                      </div>
                    </div>
                  </div>
                </div>
              ";
    }

    // line 93
    public function block_dropdown_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "                          <ul class=\"user-menu-list\">
                            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dropdown_menu"] ?? null), "links", [], "any", false, false, true, 95));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["link"]) {
            // line 96
            echo "                              <li class=\"user-menu-item ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 96, $this->source), "html", null, true);
            echo "\">
                                <a href=\"";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["link"], "path", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "\" class=\"user-menu-item-text\" target=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["link"], "external", [], "any", false, false, true, 97)) ? ("_blank") : ("_self")));
            echo "\">
                                  <i class=\"fi ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["link"], "icon_class", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "\"></i>
                                  ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
                                </a>
                              </li>

                              ";
            // line 104
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 104) && twig_get_attribute($this->env, $this->source, ($context["dropdown_menu"] ?? null), "is_admin", [], "any", false, false, true, 104))) {
                // line 105
                echo "                                <li class=\"user-menu-item\">
                                  <a href=\"#\" class=\"user-menu-item-text\" data-toggle=\"modal\" data-target=\"#aboutModal\">
                                    <i class=\"fi fi-rr-info\"></i>
                                    ";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
                echo "
                                  </a>
                                </li>
                              ";
            }
            // line 112
            echo "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                          </ul>
                        ";
    }

    // line 122
    public function block_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "              <div class=\"block-profile\">
                <a class=\"block-profile__link ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_user_page"] ?? null)) ? ("active") : ("")));
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_url"] ?? null), 124, $this->source), "html", null, true);
        echo "\">
                  <span class=\"profile-name\">";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_name"] ?? null), 125, $this->source), "html", null, true);
        echo "</span>
                  <span class=\"profile-pic\">";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 126, $this->source), "html", null, true);
        echo "</span>
                </a>
              </div>
            ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/opigno_dashboard/templates/opigno-site-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 126,  349 => 125,  343 => 124,  340 => 123,  336 => 122,  331 => 113,  317 => 112,  310 => 108,  305 => 105,  302 => 104,  295 => 99,  291 => 98,  285 => 97,  280 => 96,  263 => 95,  260 => 94,  256 => 93,  248 => 115,  245 => 93,  239 => 89,  235 => 88,  225 => 80,  215 => 73,  213 => 72,  208 => 70,  204 => 68,  202 => 67,  198 => 66,  190 => 159,  182 => 154,  175 => 150,  171 => 149,  163 => 145,  161 => 144,  151 => 137,  148 => 136,  146 => 135,  137 => 130,  135 => 122,  131 => 120,  129 => 66,  119 => 60,  117 => 59,  112 => 57,  107 => 54,  103 => 52,  99 => 50,  91 => 43,  85 => 39,  81 => 37,  71 => 32,  67 => 31,  63 => 29,  60 => 28,  58 => 27,  54 => 25,  50 => 23,  48 => 22,  42 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display the site header block.
 *
 * Available variables:
 * - logo: the site logo;
 * - menu: the main menu;
 * - is_user_page: if the current page is a user page or not;
 * - user_name: the user name;
 * - user_url: the url to the user profile page;
 * - user_picture: the rendered user profile picture;
 * - notifications_count: the amount of unread notifications + ILTs + LMs;
 * - notifications: rendered notifications dropdown block;
 * - dropdown_menu: the user dropdown menu.
 */
#}

<header class=\"page-header\" role=\"banner\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      {% if not is_anonymous %}
      <div class=\"col-lg-9 col-xxl-8 col-left\">
      {% else %}
      <div class=\"col-lg-12 col-xxl-12 col-left\">
      {% endif %}
        {# Logo. #}
        {% if logo is not empty %}
          <div class=\"region region-branding\">
            <div class=\"block-system-branding-block\">
              <a class=\"home-link\" href=\"{{ path('<front>') }}\">
                <img class=\"logo\" src=\"{{ logo }}\" alt=\"{{ 'Home'|t }}\">
              </a>
            </div>
          </div>
        {% endif %}

        <div class=\"region-main-menu\">
          <nav>{{ menu }}</nav>
        </div>

        {# Mobile menu. #}
        <div class=\"mobile-menu-btn\">
          <span></span>
          <span></span>
          <span></span>
        </div>

        {# Mobile header. #}
        <div class=\"mobile-header-wrapper\">
          <div class=\"mobile-header\">
            <nav>{{ menu }}</nav>
              {# Notifications block. #}
            <div class=\"block-notifications\">
              <div class=\"block-notifications__item block-notifications__item--notifications\">
                <div class=\"dropdown\">
                  <a href=\"{{ path('view.opigno_notifications.page_all') }}\">
                    <i class=\"fi fi-rr-bell\">
                      {% set classes = notifications_count != 0 ? 'marker' : 'marker hidden' %}
                      <span class=\"{{ classes }}\"></span>
                    </i>
                  </a>
                </div>
              </div>

              {% block user_menu %}
                {# Messages link. #}
                <div class=\"block-notifications__item block-notifications__item--messages\">
                  <div class=\"dropdown\">
                    <a href=\"{{ path('private_message.private_message_page') }}\">
                      <i class=\"fi fi-rr-envelope\">
                        {% set classes = messages_count != 0 ? 'marker' : 'marker hidden' %}
                        <span class=\"{{ classes }}\"></span>
                      </i>
                    </a>
                  </div>
                </div>

                {# User dropdown menu. #}
                <div class=\"block-notifications__item block-notifications__item--user-menu\">
                  <div class=\"dropdown\">
                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                      <i class=\"fi fi-rr-angle-small-down\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                      <div class=\"user-menu-block\">
                        <div class=\"user-name\">
                          {{ dropdown_menu.name }}
                          <span>{{ dropdown_menu.role }}</span>
                        </div>

                        {# Links section. #}
                        {% block dropdown_menu %}
                          <ul class=\"user-menu-list\">
                            {% for key, link in dropdown_menu.links %}
                              <li class=\"user-menu-item {{ key }}\">
                                <a href=\"{{ link.path }}\" class=\"user-menu-item-text\" target=\"{{ link.external ? '_blank' : '_self' }}\">
                                  <i class=\"fi {{ link.icon_class }}\"></i>
                                  {{ link.title }}
                                </a>
                              </li>

                              {# Add \"About\" link for admin. #}
                              {% if loop.first and dropdown_menu.is_admin %}
                                <li class=\"user-menu-item\">
                                  <a href=\"#\" class=\"user-menu-item-text\" data-toggle=\"modal\" data-target=\"#aboutModal\">
                                    <i class=\"fi fi-rr-info\"></i>
                                    {{ 'About'|t }}
                                  </a>
                                </li>
                              {% endif %}
                            {% endfor %}
                          </ul>
                        {% endblock %}
                      </div>
                    </div>
                  </div>
                </div>
              {% endblock %}
            </div>

            {% block profile %}
              <div class=\"block-profile\">
                <a class=\"block-profile__link {{ is_user_page ? 'active' }}\" href=\"{{ user_url }}\">
                  <span class=\"profile-name\">{{ user_name }}</span>
                  <span class=\"profile-pic\">{{ user_picture }}</span>
                </a>
              </div>
            {% endblock %}
            {{ block('dropdown_menu') }}
          </div>
        </div>
      </div>

      {% if not is_anonymous %}
      <div class=\"col-lg-3 col-xxl-4 col-right\">
        {{ block('profile') }}

        <div class=\"block-notifications\">
          <div class=\"block-notifications__item block-notifications__item--notifications\">
            <div class=\"dropdown\">
              <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fi fi-rr-bell\">
                  {% set classes = notifications_count != 0 ? 'marker' : 'marker hidden' %}
                  <span class=\"{{ classes }}\"></span>
                </i>
              </a>

              <div class=\"dropdown-menu dropdown-menu-right {{ notifications_count == 0 ? 'hidden' }}\">
                {{ notifications }}
              </div>
            </div>
          </div>
          {{ block('user_menu') }}
        </div>

      </div>
      {% endif %}

    </div>
  </div>
</header>
", "modules/contrib/opigno_dashboard/templates/opigno-site-header.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/opigno_dashboard/templates/opigno-site-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "set" => 59, "block" => 66, "for" => 95);
        static $filters = array("escape" => 32, "t" => 32);
        static $functions = array("path" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block', 'for'],
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
