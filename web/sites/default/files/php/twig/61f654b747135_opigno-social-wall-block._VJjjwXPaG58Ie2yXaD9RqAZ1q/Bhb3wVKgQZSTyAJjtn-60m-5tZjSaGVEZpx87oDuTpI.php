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

/* modules/contrib/opigno_social/templates/opigno-social-wall-block.html.twig */
class __TwigTemplate_25d44f4e2cc5c32814b9f992533d1949db02ea9ff3dfe5deef54f8e56707cd08 extends \Twig\Template
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
<div class=\"feed-section-title d-xl-none\">
  <a class=\"close-btn\" href=\"#\">
    <i class=\"fi fi-rr-angle-small-left\"></i>
      ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back"));
        echo "
  </a>
  <h2>";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Feed"));
        echo "</h2>
</div>
<div class=\"feed-section\">
  <div class=\"content-box comment-form__container\">
    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user"] ?? null), 24, $this->source), "html", null, true);
        echo "
    ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["create_post_form"] ?? null), 25, $this->source), "html", null, true);
        echo "
    ";
        // line 26
        if ( !twig_test_empty(($context["attachment_links"] ?? null))) {
            // line 27
            echo "      <div class=\"awards-list\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attachment_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 29
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["link"], 29, $this->source), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </div>
    ";
        }
        // line 33
        echo "  </div>

  <div class=\"btn-new-post__wrapper hidden\">
    ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_posts_link"] ?? null), 36, $this->source), "html", null, true);
        echo "
  </div>
  <div class=\"opigno-pinned-post\"></div>
  ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["posts"] ?? null), 39, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/opigno_social/templates/opigno-social-wall-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  92 => 36,  87 => 33,  83 => 31,  74 => 29,  70 => 28,  67 => 27,  65 => 26,  61 => 25,  57 => 24,  50 => 20,  45 => 18,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the Social wall block.
 *
 * Available variables:
 * - user: the current user picture;
 * - create_post_form: the form to create a new post;
 * - attachment_links: form attachment links;
 * - posts: the list of posts available for the current user;
 * - new_posts_link: the link to scroll to the new posts.
 */
#}

<div class=\"feed-section-title d-xl-none\">
  <a class=\"close-btn\" href=\"#\">
    <i class=\"fi fi-rr-angle-small-left\"></i>
      {{ 'Back'|t }}
  </a>
  <h2>{{ 'Feed'|t }}</h2>
</div>
<div class=\"feed-section\">
  <div class=\"content-box comment-form__container\">
    {{ user }}
    {{ create_post_form }}
    {% if attachment_links is not empty %}
      <div class=\"awards-list\">
        {% for link in attachment_links %}
          {{ link }}
        {% endfor %}
      </div>
    {% endif %}
  </div>

  <div class=\"btn-new-post__wrapper hidden\">
    {{ new_posts_link }}
  </div>
  <div class=\"opigno-pinned-post\"></div>
  {{ posts }}
</div>
", "modules/contrib/opigno_social/templates/opigno-social-wall-block.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/opigno_social/templates/opigno-social-wall-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26, "for" => 28);
        static $filters = array("t" => 18, "escape" => 24);
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
