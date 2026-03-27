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

/* tailpine:input */
class __TwigTemplate_e4e008e4d03089f88f5cc4744ba1d358 extends Template
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
            'children' => [$this, 'block_children'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->normalizeProps($context, "tailpine:input"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.tailpine--input"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "tailpine:input"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "tailpine:input"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->preprocessProps($context, "tailpine:input"));
        // line 21
        $context["classes"] = [];
        // line 22
        yield "
";
        // line 23
        if ((($context["type"] ?? null) == "file")) {
            // line 24
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["block", "w-full", "text-base", "text-gray-900", "border", "border-gray-300", "cursor-pointer", "!bg-white", "dark:!bg-gray-900", "dark:text-gray-100", "dark:border-gray-700", "focus:outline-none", "focus:ring-2", "focus:ring-primary", "transition-all", "px-4", "py-3", "hover:border-gray-400"]);
        } elseif ((        // line 44
($context["type"] ?? null) == "number")) {
            // line 45
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["!bg-white", "dark:!bg-gray-900", "border", "border-gray-300", "dark:border-gray-700", "text-gray-900", "dark:text-gray-100", "text-base", "focus:ring-2", "focus:ring-primary", "focus:border-primary", "block", "w-full", "px-4", "py-3", "transition-all", "hover:border-gray-400"]);
        } elseif ((        // line 64
($context["type"] ?? null) == "checkbox")) {
            // line 65
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["w-5", "h-5", "text-primary", "!bg-white", "dark:!bg-gray-900", "border", "border-gray-300", "dark:border-gray-700", "focus:ring-2", "focus:ring-primary", "transition-all", "cursor-pointer", "hover:border-gray-400"]);
        } elseif ((        // line 80
($context["type"] ?? null) == "radio")) {
            // line 81
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["w-5", "h-5", "text-primary", "!bg-white", "dark:!bg-gray-900", "border", "border-gray-300", "dark:border-gray-700", "focus:ring-2", "focus:ring-primary", "transition-all", "cursor-pointer", "hover:border-gray-400"]);
        } elseif ((        // line 96
($context["type"] ?? null) == "submit")) {
            // line 97
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["bg-primary", "text-white", "hover:opacity-90", "focus:ring-2", "focus:ring-primary", "focus:ring-offset-2", "font-semibold", "text-base", "px-8", "py-3", "transition-all", "cursor-pointer", "inline-flex", "items-center", "justify-center", "shadow-sm", "hover:shadow-md"]);
        } else {
            // line 117
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["!bg-white", "dark:!bg-gray-900", "border", "border-gray-300", "dark:border-gray-700", "text-gray-900", "dark:text-gray-100", "text-base", "focus:ring-2", "focus:ring-primary", "focus:border-primary", "block", "w-full", "px-4", "py-3", "transition-all", "placeholder:text-gray-400", "dark:placeholder:text-gray-600", "hover:border-gray-400"]);
        }
        // line 139
        yield "
<input";
        // line 140
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ((array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["attributes"] ?? null), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 140), "html", null, true);
        yield " />
";
        // line 141
        yield from $this->unwrap()->yieldBlock('children', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "attributes", "children"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_children(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 142
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tailpine:input";
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
        return array (  105 => 142,  93 => 141,  89 => 140,  86 => 139,  82 => 117,  78 => 97,  76 => 96,  73 => 81,  71 => 80,  68 => 65,  66 => 64,  63 => 45,  61 => 44,  58 => 24,  56 => 23,  53 => 22,  51 => 21,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tailpine:input", "themes/contrib/tailpine/components/forms/input/input.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 21, "if" => 23, "block" => 141];
        static $filters = ["merge" => 24, "escape" => 140, "default" => 140];
        static $functions = ["create_attribute" => 140];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'escape', 'default'],
                ['create_attribute'],
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
