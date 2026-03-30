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

/* drupak:aboutus */
class __TwigTemplate_ff94d147ad451442aef7b260aef98bbf extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->normalizeProps($context, "drupak:aboutus"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.drupak--aboutus"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "drupak:aboutus"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "drupak:aboutus"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->preprocessProps($context, "drupak:aboutus"));
        yield "<section
\tclass=\"about-us bg-secondary  container-px flex flex-col xl:flex-row justify-between gap-25 lg:gap-18 items-center max-w-480 mx-auto\">

\t<!-- IMAGE WRAPPER -->
\t<div
\t\tclass=\"about-image relative w-full xl:w-[50%] py-[clamp(2.5rem,2vw+2rem,5rem)] bg-center bg-cover bg-no-repeat\">

\t\t<!-- SVG BACKGROUND -->
\t\t<svg viewbox=\"0 0 578 607\" class=\"absolute inset-0 z-0 w-full h-full pointer-events-none\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">

\t\t\t<path d=\"M0 0H126.438L424.469 303.5H302.547L0 0Z\" fill=\"var(--color-primary)\" fill-opacity=\"0.4\"/>
\t\t\t<path d=\"M578 154.015H451.563L307.062 303.5H428.984L578 154.015Z\" fill=\"var(--color-primary)\" fill-opacity=\"0.4\"/>
\t\t\t<path d=\"M401.891 104.187C401.891 131.706 379.652 154.015 352.219 154.015C324.786 154.015 302.547 131.706 302.547 104.187C302.547 76.6671 324.786 54.3582 352.219 54.3582C379.652 54.3582 401.891 76.6671 401.891 104.187Z\" fill=\"var(--color-primary)\" fill-opacity=\"0.4\"/>
\t\t\t<path d=\"M578 607H451.562L153.531 303.5H275.453L578 607Z\" fill=\"var(--color-primary)\" fill-opacity=\"0.4\"/>
\t\t\t<path d=\"M0 452.985H126.438L270.938 303.5H149.016L0 452.985Z\" fill=\"var(--color-primary)\" fill-opacity=\"0.4\"/>
\t\t\t<path d=\"M176.109 502.813C176.109 475.294 198.348 452.985 225.781 452.985C253.214 452.985 275.453 475.294 275.453 502.813C275.453 530.333 253.214 552.642 225.781 552.642C198.348 552.642 176.109 530.333 176.109 502.813Z\" fill=\"var(--color-primary)\" fill-opacity=\"0.4\"/>
\t\t</svg>

\t\t<!-- IMAGE -->
\t\t<img src=\"";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true);
        yield "\" class=\"relative z-10 w-full h-full object-cover\" alt=\"\">

\t</div>

\t<!-- TEXT SIDE -->
\t<div class=\"about-description flex flex-col gap-12 w-full xl:w-[50%]\">

\t\t<div class=\"content font-oxanium\">
\t\t\t<h2 class=\"text-text/90 text-h2\">";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h2>
\t\t\t<h3 class=\"text-para text-text/70\">";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
        yield "</h3>
\t\t</div>

\t\t<!-- BUTTON -->
          ";
        // line 34
        yield "
\t</div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["image", "title", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "drupak:aboutus";
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
        return array (  92 => 34,  85 => 29,  81 => 28,  70 => 20,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "drupak:aboutus", "themes/custom/drupak/components/aboutus/aboutus.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 20];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
