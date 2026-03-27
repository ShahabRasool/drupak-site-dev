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

/* tailpine:image */
class __TwigTemplate_327f3f1c1d0804e423ddd9ee9c7e419e extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->normalizeProps($context, "tailpine:image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.tailpine--image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "tailpine:image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "tailpine:image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->preprocessProps($context, "tailpine:image"));
        // line 21
        yield "
";
        // line 22
        $context["image_attributes"] = ((($context["attributes"] ?? null)) ? ($context["attributes"]) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 23
        yield "
";
        // line 24
        if ((($tmp = ($context["src"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "  ";
            $context["image_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["image_attributes"] ?? null), "setAttribute", ["src",             // line 26
($context["src"] ?? null)], "method", false, false, true, 25), "setAttribute", ["alt", ((            // line 27
($context["alt"] ?? null)) ? ($context["alt"]) : (""))], "method", false, false, true, 26), "setAttribute", ["title", ((            // line 28
($context["title"] ?? null)) ? ($context["title"]) : (""))], "method", false, false, true, 27), "setAttribute", ["loading", ((            // line 29
($context["loading"] ?? null)) ? ($context["loading"]) : ("lazy"))], "method", false, false, true, 28);
            // line 31
            yield "  ";
            if ((($tmp = ($context["width"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "    ";
                $context["image_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["image_attributes"] ?? null), "setAttribute", ["width", ($context["width"] ?? null)], "method", false, false, true, 32);
                // line 33
                yield "  ";
            }
            // line 34
            yield "  ";
            if ((($tmp = ($context["height"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "    ";
                $context["image_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["image_attributes"] ?? null), "setAttribute", ["height", ($context["height"] ?? null)], "method", false, false, true, 35);
                // line 36
                yield "  ";
            }
        }
        // line 38
        yield "
";
        // line 40
        $context["align_classes"] = ["start" => "mr-auto", "center" => "mx-auto", "end" => "ml-auto"];
        // line 46
        yield "
";
        // line 48
        $context["image_classes"] = Twig\Extension\CoreExtension::merge([(((($tmp =         // line 49
($context["style_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("image-style-" . \Drupal\Component\Utility\Html::getClass(($context["style_name"] ?? null)))) : ("")), (((($tmp = ((        // line 50
array_key_exists("responsive", $context)) ? (Twig\Extension\CoreExtension::default(($context["responsive"] ?? null), true)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("max-w-full h-auto") : ("h-auto")), "object-cover", "shadow-sm", (((($tmp =         // line 53
($context["align"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = ($context["align_classes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["align_classes"] ?? null), ($context["align"] ?? null), [], "array", false, false, true, 53))) : (""))], ((        // line 54
($context["image_utility_classes"] ?? null)) ? ($context["image_utility_classes"]) : ([])));
        // line 56
        yield "
<img";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["image_attributes"] ?? null), "addClass", [($context["image_classes"] ?? null)], "method", false, false, true, 57), "html", null, true);
        yield ">
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "src", "alt", "title", "loading", "width", "height", "style_name", "responsive", "align", "image_utility_classes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tailpine:image";
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
        return array (  103 => 57,  100 => 56,  98 => 54,  97 => 53,  96 => 50,  95 => 49,  94 => 48,  91 => 46,  89 => 40,  86 => 38,  82 => 36,  79 => 35,  76 => 34,  73 => 33,  70 => 32,  67 => 31,  65 => 29,  64 => 28,  63 => 27,  62 => 26,  60 => 25,  58 => 24,  55 => 23,  53 => 22,  50 => 21,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tailpine:image", "themes/contrib/tailpine/components/fields/image/image.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 22, "if" => 24];
        static $filters = ["merge" => 54, "clean_class" => 49, "default" => 50, "escape" => 57];
        static $functions = ["create_attribute" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'clean_class', 'default', 'escape'],
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
