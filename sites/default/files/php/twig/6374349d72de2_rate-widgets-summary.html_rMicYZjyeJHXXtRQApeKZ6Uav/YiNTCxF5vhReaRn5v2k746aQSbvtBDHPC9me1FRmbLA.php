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

/* modules/rate/templates/rate-widgets-summary.html.twig */
class __TwigTemplate_93e1109668cb0ba147b39013dcee4fa22cfd011269dfe3448daeeff6926f0893 extends \Twig\Template
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
        if (((((twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "rate_count", [], "any", true, true, true, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "rate_count", [], "any", false, false, true, 1))) : ("")) == 0) || twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "rate_count", [], "any", true, true, true, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "rate_count", [], "any", false, false, true, 1))) : (""))))) {
            // line 2
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No votes have been submitted yet."));
            echo "
";
        } else {
            // line 4
            echo "  ";
            echo t("@results.rate_count votes with an average rating of @results.rate_average.", array("@results.rate_count" => twig_get_attribute($this->env, $this->source,             // line 5
($context["results"] ?? null), "rate_count", [], "any", false, false, true, 5), "@results.rate_average" => twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "rate_average", [], "any", false, false, true, 5), ));
        }
    }

    public function getTemplateName()
    {
        return "modules/rate/templates/rate-widgets-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/rate/templates/rate-widgets-summary.html.twig", "/home/christse/public_html/classes/cs160/sec4/team2/drupal/modules/rate/templates/rate-widgets-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "trans" => 4);
        static $filters = array("default" => 1, "trans" => 2, "escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['default', 'trans', 'escape'],
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
