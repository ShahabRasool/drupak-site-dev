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

/* @tailpine/includes/footer-menu-links-two.html.twig */
class __TwigTemplate_342fe1b6b544a2d82c018805aa12cc99 extends Template
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
        yield "<!-- 1st -->
<div class=\"grid grid-cols-4 col-start-1 col-span-4 md:grid md:grid-cols-8 xl:grid-cols-12 md:col-start-1 md:col-span-8 xl:col-span-12\">
<div class=\"col-start-1 col-span-3 md:col-start-1 md:col-span-5 xl:col-start-1 xl:col-span-4\">
  <h6 class=\"font-black text-xl leading-[1.375rem] mb-[7px] tracking-[3%]\">
    How
  </h6>
  <p class=\"font-normal leading-[1.375rem] text-sm mb-[7px] tracking-[3%] pt-[clamp(12px,2vw,5px)] mt-[5px]\" style=\"max-width:100%; padding:0;\">
    Build Every Component Using SDC Architecture
  </p>
</div>

\t<div class=\"col-start-4 col-span-1 md:col-start-6 xl:col-start-5 md:col-span-3 xl:col-span-4 md:text-end xl:text-center\">
\t\t";
        // line 13
        if ((($tmp = ($context["logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "\t\t\t<div class=\"col-span-4 md:col-span-2 xl:col-span-3 w-20 md:w-40 flex justify-center md:justify-end xl:justify-center\">
\t\t\t\t<a href=\"";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" rel=\"home\" class=\"inline-block\">
\t\t\t\t\t<img src=\"";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site logo"));
            yield "\" class=\"w-auto  h-auto\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        // line 20
        yield "\t</div>
\t<div
\t\tclass=\"when mt-4 col-span-3 md:col-span-4 xl:col-span-4 xl:text-end\">
\t\t";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 23), "tailpine_when", [], "any", false, false, true, 23), "html", null, true);
        yield "
\t\t<h6 class=\"font-black text-xl leading-5.5 mb=[7px] tracking-[3%]\">WHEN</h6>
\t\t<p class=\"leading-5.5 text-sm mb=[7px] tracking-[3%] pt-[clamp(12px, 2vw, 5px)] mt=[5px]\" style=\"max-width:100%;padding:0;text-align:end !important;\">11 NOV 2025</p>
\t</div>
</div>

<!-- 2nd -->
<div class=\"pt-[clamp(54px,3vw,35px)] grid grid-cols-4 col-start-1 col-span-4 gap-5 md:grid md:grid-cols-8 md:col-start-1 md:col-span-8 xl:grid xl:grid-cols-12 xl:col-start-1 xl:col-span-12 xl:gap-8 \">
\t<div class=\"col-start-1 col-span-2 md:col-start-1 md:col-span-4 xl:col-start-1 xl:col-span-4\">
\t\t";
        // line 33
        yield "\t\t<h2 id=\"block-tailpine-footerone-menu\" class=\"font-bold text-xl tracking-[3%] leading-5.5 mb-[10px] border-body-bg border-b md:pb-[15px] pb-[15px]\">QUICK LINKS</h2>
\t\t<ul data-component-id=\"tailpine:footerone\" class=\"menuflexflex-colgap-2.5\">
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary  text-md tracking-wide font-normal  opacity-70\">
\t\t\t\t\tHome Page
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-md tracking-wide font-normal  opacity-70\">
\t\t\t\t\tAbout Us
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-md tracking-wide font-normal  opacity-70\">
\t\t\t\t\tServices
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-md tracking-wide font-normal  opacity-70\">
\t\t\t\t\tContact Us
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-md tracking-wide font-normal  opacity-70\">
\t\t\t\t\tHire a drupal
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"col-start-3 col-span-2 md:col-start-5 md:col-span-4 xl:col-start-5 xl:col-span-4\">
\t\t<h2 id=\"block-tailpine-footertwo-menu\" class=\"font-bold text-xl tracking-[3%] leading-5.5 mb-[10px] border-body-bg border-b md:pb-[15px] pb-[15px]\">INFO</h2>
\t\t<ul data-component-id=\"tailpine:footertwo\" class=\"menuflexflex-colgap-2.5\">
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tAccessibility
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tPrivacy Policy
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tCookie Policy
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tThe Cyber Security
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tTerms os use
\t\t\t\t</a>
\t\t\t</li>

\t\t</ul>
\t</div>
\t<div class=\"col-start-1 col-span-4 md:col-start-1 md:col-span-4 xl:col-start-9 xl:col-span-4\">
\t\t<h2 id=\"block-tailpine-footerthree-menu\" class=\"font-bold text-xl tracking-[3%] leading-5.5 mb-[10px] border-body-bg border-b md:pb-[15px] pb-[15px]\">Explore</h2>
\t\t<ul data-component-id=\"tailpine:footerthree\" class=\"menuflexflex-colgap-2.5\">
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tFeatures
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tEnterprise
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tSecurity
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tPress kit
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item\">
\t\t\t\t<a href=\"\" target=\"\" class=\"text-body-bg hover:text-primary text-sm md:text-lg font-normal  opacity-70\">
\t\t\t\t\tPricing
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
<!-- 3rd -->
<div class=\"grid grid-cols-4 col-start-1 col-span-4 gap-5 md:grid md:grid-cols-8 md:col-start-1 md:col-span-8 xl:grid xl:grid-cols-12 xl:col-start-1 xl:col-span-12 xl:gap-8 \">
\t<div class=\"col-start-1 col-span-4 mt-9 md:col-start-1 md:col-span-4 md:mt-11 xl:col-start-1 xl:col-span-3 xl:mt-3 items-center flex gap-x-3\">
\t\t<h2 class=\"text-xs font-normal leading-5.5 tracking-[3%]\">DEVELOPED BY</h2>
\t\t<a class=\" hover:underline duration-200 text-lg hover:text-primary\" href=\"https://drupak.com\" >Drupak</a>
\t</div>
\t<div class=\"copyright col-start-1 col-span-4 mt-9 md:col-start-6 md:col-span-4 md:mt-11 xl:col-start-10 xl:col-span-3 xl-mt-3\">
\t\t<p style=\"line-height: 0; max-width: 100%; padding: 0px; text-align: end !important;\"> ©2025 <a class=\"text-primary\" href=\"https://www.drupal.org/project/tailpine\">Tailpine</a></p>
\t</div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logo", "front_page", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@tailpine/includes/footer-menu-links-two.html.twig";
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
        return array (  95 => 33,  83 => 23,  78 => 20,  69 => 16,  63 => 15,  60 => 14,  58 => 13,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@tailpine/includes/footer-menu-links-two.html.twig", "/var/www/html/web/themes/contrib/tailpine/templates/includes/footer-menu-links-two.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 13];
        static $filters = ["escape" => 15, "t" => 15];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
