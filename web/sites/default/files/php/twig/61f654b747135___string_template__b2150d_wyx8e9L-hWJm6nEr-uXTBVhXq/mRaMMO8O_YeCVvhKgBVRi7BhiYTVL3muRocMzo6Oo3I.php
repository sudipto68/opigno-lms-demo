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

/* __string_template__b2150d5cda691e130865a6bc0c95685a808dae3a061cb6882a587d4b2fe93186 */
class __TwigTemplate_6286d497cd999a799f5b117c5fcae927e96c445012ead09582457f6e74ac29fe extends \Twig\Template
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
        echo "<div class=\"back-btn d-none d-lg-block ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["js_button"] ?? null), 1, $this->source), "html", null, true);
        echo "\"><a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["context"] ?? null), 1, $this->source), "html", null, true);
        echo "\"><i class=\"fi fi-rr-angle-small-left d-lg-none\"></i><i class=\"fi fi-rr-arrow-left d-none d-lg-block\"></i>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["context_title"] ?? null), 1, $this->source), "html", null, true);
        echo "</a></div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b2150d5cda691e130865a6bc0c95685a808dae3a061cb6882a587d4b2fe93186";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"back-btn d-none d-lg-block {{js_button}}\"><a href=\"{{context}}\"><i class=\"fi fi-rr-angle-small-left d-lg-none\"></i><i class=\"fi fi-rr-arrow-left d-none d-lg-block\"></i>{{context_title}}</a></div>", "__string_template__b2150d5cda691e130865a6bc0c95685a808dae3a061cb6882a587d4b2fe93186", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
