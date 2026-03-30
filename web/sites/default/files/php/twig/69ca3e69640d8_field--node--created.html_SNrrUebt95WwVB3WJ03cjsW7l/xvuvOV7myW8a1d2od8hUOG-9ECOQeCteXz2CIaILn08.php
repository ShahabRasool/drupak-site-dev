<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/tailpine/templates/field/field--node--created.html.twig */
class __TwigTemplate_d6b72dbaada055e05c458b112d1fa7f8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        if ((($tmp =  !($context["is_inline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "  ";
            yield from $this->load("field.html.twig", 29)->unwrap()->yield($context);
        } else {
            // line 32
            $context["classes"] = ["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass(            // line 34
($context["field_name"] ?? null))), ("field--type-" . \Drupal\Component\Utility\Html::getClass(            // line 35
($context["field_type"] ?? null))), ("field--label-" .             // line 36
($context["label_display"] ?? null))];
            // line 39
            yield "
\t";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "tailpine:nodecreated", ["attributes" =>             // line 41
($context["attributes"] ?? null), "items" =>             // line 42
($context["items"] ?? null)]));
            // line 43
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_inline", "field_name", "field_type", "label_display", "attributes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/tailpine/templates/field/field--node--created.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  62 => 43,  60 => 42,  59 => 41,  58 => 40,  55 => 39,  53 => 36,  52 => 35,  51 => 34,  50 => 32,  46 => 29,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/tailpine/templates/field/field--node--created.html.twig", "/var/www/html/web/themes/contrib/tailpine/templates/field/field--node--created.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 28, "include" => 29, "set" => 32];
        static $filters = ["clean_class" => 34];
        static $functions = ["include" => 40];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'set'],
                ['clean_class'],
                ['include'],
                $this->source
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
