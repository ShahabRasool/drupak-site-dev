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

/* @tailpine/templates/headers/header--style4.html.twig */
class __TwigTemplate_392ba7e0fe5c4c46690ac81595e0ad66 extends Template
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
        yield "<div class=\"container max-w-[1920px] w-full mx-auto  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_fixed_class"] ?? null), "html", null, true);
        yield "\">
  <header
    class=\"relative flex items-center justify-between px-6 lg:px-10 py-4 bg-body-bg text-body shadow-md\"
    x-data=\"{ open: false, mobOpen: false, searchOpen: false }\"
    @click.away=\"searchOpen = false\"
    @keydown.escape=\"searchOpen = false\"
  >
    <!-- Branding: always left -->
    <div class=\"header_branding flex-shrink-0\">
      ";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 10), "html", null, true);
        yield "
    </div>

    <!-- Centered menu (only on desktop) -->
    <div class=\"hidden lg:!block absolute z-40 left-1/2 transform -translate-x-1/2\">
      ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 15), "html", null, true);
        yield "
    </div>

    <!-- Right-side content: actions and menu (menu only shows on mobile here) -->
    <div class=\"flex items-center gap-10 lg:gap-6\">
      <!-- Right Actions -->
      <div class=\"right-actions hidden md:!block\">
        ";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_right_actions", [], "any", false, false, true, 22), "html", null, true);
        yield "
      </div>

      <!-- Menu (visible only on mobile) -->
      <div class=\"lg:hidden\">
        ";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 27), "html", null, true);
        yield "
      </div>
    </div>
  </header>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header_fixed_class", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@tailpine/templates/headers/header--style4.html.twig";
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
        return array (  83 => 27,  75 => 22,  65 => 15,  57 => 10,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@tailpine/templates/headers/header--style4.html.twig", "/var/www/html/web/themes/contrib/tailpine/templates/headers/header--style4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 1];
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
