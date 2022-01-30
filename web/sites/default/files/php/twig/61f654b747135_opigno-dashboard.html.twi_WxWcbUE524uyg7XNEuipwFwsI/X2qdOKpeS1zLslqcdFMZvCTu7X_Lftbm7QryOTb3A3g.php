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

/* modules/contrib/opigno_dashboard/templates/opigno-dashboard.html.twig */
class __TwigTemplate_bfb4885ede737d9ae2d38ff9e8f7154aa9b6c66a6d42994bcba2f82a94bdf664 extends \Twig\Template
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
        echo "<base href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1, $this->source) . $this->sandbox->ensureToStringAllowed(($context["base_href"] ?? null), 1, $this->source)), "html", null, true);
        echo "\">

<script type=\"text/javascript\">
  window.appConfig = {
    columns: 3,
    positions: [[], [], [], []],
    apiBaseUrl: '";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source), "html", null, true);
        echo "',
    apiRouteName: '";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["route_name"] ?? null), 8, $this->source), "html", null, true);
        echo "',
    getPositioningUrl: '/opigno_dashboard/get-positioning',
    getDefaultPositioningUrl: '/opigno_dashboard/get-default-positioning',
    setPositioningUrl: '/opigno_dashboard/set-positioning',
    getBlocksContentUrl: '/opigno_dashboard/get-blocks',
    defaultConfig: '";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["default_config"] ?? null), 13, $this->source));
        echo "',
    defaultColumns: '";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["default_columns"] ?? null), 14, $this->source));
        echo "',
    socialFeedMobile: {
      title: '";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Your feed"));
        echo "',
      img: '";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["social_feed_mobile"] ?? null), "img", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "',
      newPostsAmount: '";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["social_feed_mobile"] ?? null), "new_posts_amount", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "',
    },
    loading: true,
    locales: {
      title: '";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "',
      manageYourDashboard: '";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Manage your dashboard"));
        echo "',
      remove: '";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("remove"));
        echo "',
      close: '";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("close"));
        echo "',
      saveBtn: '";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Save"));
        echo "',
      layout: '";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Layout"));
        echo "',
      oneColumn: '";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("1 column"));
        echo "',
      twoColumns: '";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("2 columns"));
        echo "',
      asymColumns: '";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("1/3-2/3 columns"));
        echo "',
      threeColumns: '";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("3 columns"));
        echo "',
      threeAsymColumns: '";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("3/12-5/12-4/12 columns"));
        echo "',
      addBlocks: '";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add blocks by dragging them below into the canvas"));
        echo "',
      restoreYourDashboard: '";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Restore your dashboard to default:"));
        echo "',
      restoreToDefault: '";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Restore to default"));
        echo "'
    }
  };
</script>

<app-root class=\"d-block dashboard\">";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Loading dashboard..."));
        echo "</app-root>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/opigno_dashboard/templates/opigno-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 40,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  78 => 18,  74 => 17,  70 => 16,  65 => 14,  61 => 13,  53 => 8,  49 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<base href=\"{{ base_path ~ base_href }}\">

<script type=\"text/javascript\">
  window.appConfig = {
    columns: 3,
    positions: [[], [], [], []],
    apiBaseUrl: '{{ base_path }}',
    apiRouteName: '{{ route_name }}',
    getPositioningUrl: '/opigno_dashboard/get-positioning',
    getDefaultPositioningUrl: '/opigno_dashboard/get-default-positioning',
    setPositioningUrl: '/opigno_dashboard/set-positioning',
    getBlocksContentUrl: '/opigno_dashboard/get-blocks',
    defaultConfig: '{{ default_config|raw }}',
    defaultColumns: '{{ default_columns|raw }}',
    socialFeedMobile: {
      title: '{{ 'Your feed'|t }}',
      img: '{{ social_feed_mobile.img }}',
      newPostsAmount: '{{ social_feed_mobile.new_posts_amount }}',
    },
    loading: true,
    locales: {
      title: '{{ 'Home'|t }}',
      manageYourDashboard: '{{ 'Manage your dashboard'|t }}',
      remove: '{{ 'remove'|t }}',
      close: '{{ 'close'|t }}',
      saveBtn: '{{ 'Save'|t }}',
      layout: '{{ 'Layout'|t }}',
      oneColumn: '{{ '1 column'|t }}',
      twoColumns: '{{ '2 columns'|t }}',
      asymColumns: '{{ '1/3-2/3 columns'|t }}',
      threeColumns: '{{ '3 columns'|t }}',
      threeAsymColumns: '{{ '3/12-5/12-4/12 columns'|t }}',
      addBlocks: '{{ 'Add blocks by dragging them below into the canvas'|t }}',
      restoreYourDashboard: '{{ 'Restore your dashboard to default:'|t }}',
      restoreToDefault: '{{ 'Restore to default'|t }}'
    }
  };
</script>

<app-root class=\"d-block dashboard\">{{ 'Loading dashboard...'|t }}</app-root>
", "modules/contrib/opigno_dashboard/templates/opigno-dashboard.html.twig", "/var/www/drupal/opigno-lms/web/modules/contrib/opigno_dashboard/templates/opigno-dashboard.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "raw" => 13, "t" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw', 't'],
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
