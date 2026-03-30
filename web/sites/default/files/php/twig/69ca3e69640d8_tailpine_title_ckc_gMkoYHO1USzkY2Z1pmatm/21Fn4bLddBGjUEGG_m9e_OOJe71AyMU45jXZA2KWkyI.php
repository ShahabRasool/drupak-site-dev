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

/* tailpine:title */
class __TwigTemplate_1a1ba7a49b6ce38fdb9a67961c378b19 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->normalizeProps($context, "tailpine:title"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.tailpine--title"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "tailpine:title"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "tailpine:title"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->preprocessProps($context, "tailpine:title"));
        // line 17
        $context["heading_tag"] = ((array_key_exists("heading_level", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_level"] ?? null), "h1")) : ("h1"));
        // line 18
        yield "
";
        // line 20
        $context["title_classes"] = Twig\Extension\CoreExtension::merge(["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 22
($context["field_name"] ?? null))), ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 23
($context["field_type"] ?? null))), ("field--label-" .         // line 24
($context["label_display"] ?? null)), (((($tmp =         // line 25
($context["is_inline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("inline-block") : ("block")), "text-gray-900 dark:text-gray-100", "font-bold", "leading-tight"], ((        // line 29
($context["title_utility_classes"] ?? null)) ? ($context["title_utility_classes"]) : ([])));
        // line 31
        yield "
";
        // line 32
        if ((($tmp = ($context["is_inline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "  <span";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 33), "html", null, true);
            yield ">";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 35), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "</span>
";
        } else {
            // line 39
            yield "  <";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_tag"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 39), "html", null, true);
            yield ">";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 41), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_tag"] ?? null), "html", null, true);
            yield ">
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["heading_level", "field_name", "field_type", "label_display", "is_inline", "title_utility_classes", "attributes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tailpine:title";
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
        return array (  100 => 43,  94 => 41,  90 => 40,  85 => 39,  81 => 37,  75 => 35,  71 => 34,  67 => 33,  65 => 32,  62 => 31,  60 => 29,  59 => 25,  58 => 24,  57 => 23,  56 => 22,  55 => 20,  52 => 18,  50 => 17,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tailpine:title", "themes/contrib/tailpine/components/fields/title/title.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 17, "if" => 32, "for" => 34];
        static $filters = ["default" => 17, "merge" => 29, "clean_class" => 22, "escape" => 33];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['default', 'merge', 'clean_class', 'escape'],
                [],
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
