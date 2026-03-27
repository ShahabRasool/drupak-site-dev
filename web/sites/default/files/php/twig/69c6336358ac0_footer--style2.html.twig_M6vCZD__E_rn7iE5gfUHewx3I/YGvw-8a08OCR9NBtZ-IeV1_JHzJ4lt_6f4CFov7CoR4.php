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

/* @tailpine/templates/footer-styles/footer--style2.html.twig */
class __TwigTemplate_d2bbf15603886a10007400cad51fcaa5 extends Template
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
        yield "<footer
\tclass=\"max-w-[1920px] mx-auto w-full bg-secondary text-body-bg font-roboto px-[clamp(20px,5vw,100px)] pt-[clamp(37px,5vw,76px)] pb-[clamp(52px,5vw,80px)] grid grid-cols-4 col-start-1 col-span-4 md:grid md:grid-cols-8 md:col-start-1 md:col-span-8 xl:grid xl:grid-cols-12 xl:col-start-1 xl:col-span-12  style-two\" x-data x-init=\"
\t\t\t\t\t\t\t\t\tif (\$el.classList.contains('style-two')) {
\t\t\t\t\t\t\t\t\t\t\$el.querySelectorAll('nav h2').forEach(el => {
\t\t\t\t\t\t\t\t\t\t\tel.classList.add(
\t\t\t\t\t\t\t\t\t\t\t\t'font-bold',
\t\t\t\t\t\t\t\t\t\t\t\t'text-xl',
\t\t\t\t\t\t\t\t\t\t\t\t'tracking-[3%]',
\t\t\t\t\t\t\t\t\t\t\t\t'leading-5.5',
\t\t\t\t\t\t\t\t\t\t\t\t'font-bold',
\t\t\t\t\t\t\t\t\t\t\t\t'mb-[10px]',
\t\t\t\t\t\t\t\t\t\t\t\t'border-body-bg',
\t\t\t\t\t\t\t\t\t\t\t\t'border-b',
\t\t\t\t\t\t\t\t\t\t\t\t'md:pb-[15px]',
\t\t\t\t                'pb-[15px]'

\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tif (\$el.classList.contains('style-two')) {
\t\t\t\t\t\t\t\t\t\t\$el.querySelectorAll('nav ul li a').forEach(el => {
\t\t\t\t\t\t\t\t\t\t\tel.classList.add(
\t\t\t\t\t\t\t\t\t\t\t\t'font-normal',
\t\t\t\t\t\t\t\t\t\t\t\t'opacity-70'
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif (\$el.classList.contains('style-two')) {
\t\t\t\t\t\t\t\t\t\$el.querySelectorAll('.copyright p').forEach(el => {
\t\t\t\t\t\t\t\t\tel.style.setProperty('text-align', 'end', 'important');
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t      \t\tconst updateAlignmentTwo = () => {
\t\t\t\t\t\t\t\tconst shouldApply = \$el.classList.contains('style-two') && window.innerWidth < 768;
\t\t\t\t\t\t\t\t\$el.querySelectorAll('.copyright p').forEach(el => {
\t\t\t\t\t\t\t\t  if (shouldApply) {
\t\t\t\t\t\t\t\t    el.style.setProperty('text-align', 'center', 'important');
\t\t\t\t\t\t\t\t  } else {
\t\t\t\t\t\t\t\t    el.classList.remove('font-normal');
\t\t\t\t\t\t\t\t      el.style.setProperty('text-align', 'end', 'important');
\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t\t// Initial run
\t\t\t\t\t\t\t\tupdateAlignmentTwo();

\t\t\t\t\t\t\t\t// Update on resize
\t\t\t\t\t\t\t\twindow.addEventListener('resize', updateAlignmentTwo);


\t\t\t\t\t\t\t\tconst updateAlignment = () => {
\t\t\t\t\t\t\t\tconst shouldApply = \$el.classList.contains('style-two') && window.innerWidth < 1280;
\t\t\t\t\t\t\t\t\$el.querySelectorAll('.when p').forEach(el => {
\t\t\t\t\t\t\t\t  if (shouldApply) {
\t\t\t\t\t\t\t\t    el.classList.add('font-normal');
\t\t\t\t\t\t\t\t    el.style.setProperty('text-align', 'start', 'important');
\t\t\t\t\t\t\t\t  } else {
\t\t\t\t\t\t\t\t    el.classList.remove('font-normal');
\t\t\t\t\t\t\t\t      el.style.setProperty('text-align', 'end', 'important');
\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t\t// Initial run
\t\t\t\t\t\t\t\tupdateAlignment();

\t\t\t\t\t\t\t\t// Update on resize
\t\t\t\t\t\t\t\twindow.addEventListener('resize', updateAlignment);\">
            ";
        // line 70
        yield from $this->load("@tailpine/includes/footer-menu-links-two.html.twig", 70)->unwrap()->yield($context);
        // line 71
        yield "

</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@tailpine/templates/footer-styles/footer--style2.html.twig";
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
        return array (  117 => 71,  115 => 70,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@tailpine/templates/footer-styles/footer--style2.html.twig", "/var/www/html/web/themes/contrib/tailpine/templates/footer-styles/footer--style2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 70];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
