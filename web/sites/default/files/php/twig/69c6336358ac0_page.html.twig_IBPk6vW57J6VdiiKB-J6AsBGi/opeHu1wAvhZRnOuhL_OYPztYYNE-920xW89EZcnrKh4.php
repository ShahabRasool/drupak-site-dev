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

/* themes/contrib/tailpine/templates/layout/page.html.twig */
class __TwigTemplate_cef3671747df10fc87c0e5bb47507a0d extends Template
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
        // line 45
        yield "
";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tailpine/fixed-header"), "html", null, true);
        yield "
<div class=\"layout-container min-h-screen flex flex-col\">
  <!-- :small_blue_diamond: Header -->
  <header role=\"banner\" class=\"w-full mx-auto\">
    <div class=\"flex items-center w-full flex-col justify-start \">
      ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 51), "html", null, true);
        yield "
      ";
        // line 52
        yield from $this->load((("@tailpine/templates/headers/" . ($context["header_template"] ?? null)) . ".html.twig"), 52)->unwrap()->yield($context);
        // line 53
        yield "    </div>
    ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "            <div class=\"\">
              ";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 56), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 59
        yield "  </header>
  <!-- :small_blue_diamond: Main Content Area -->
  <main role=\"main\" class=\"flex-1\">
    <div class=\"w-full mx-auto \">
      <div class=\"grid grid-cols-12 \">
        <!-- Left Sidebar -->
        ";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "          <aside class=\"col-span-12 md:col-span-3 \" role=\"complementary\">
            ";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 67), "html", null, true);
            yield "
          </aside>
        ";
        }
        // line 70
        yield "        <!-- Main Content -->
        <section
          class=\"
            ";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 73) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 73))) {
            // line 74
            yield "              col-span-12 md:col-span-7
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 75) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 75))) {
            // line 76
            yield "              col-span-12 md:col-span-9
            ";
        } else {
            // line 78
            yield "              col-span-12
            ";
        }
        // line 80
        yield "          \"
          role=\"main\"
        >
          ";
        // line 83
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 83), 0, [], "any", false, false, true, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "            <div class=\"\">
              ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 85), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 88
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 88), "html", null, true);
        yield "
          ";
        // line 89
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 89), "html", null, true);
        yield "
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 91), "html", null, true);
        yield "
        </section>
        <!-- Right Sidebar -->
        ";
        // line 94
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "          <aside class=\"col-span-12 md:col-span-2 \" role=\"complementary\">
            ";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 96), "html", null, true);
            yield "
          </aside>
        ";
        }
        // line 99
        yield "      </div>
    </div>
  </main>
  <!-- :small_blue_diamond: Footer -->
  <footer role=\"contentinfo\" class=\"\">
    <div class=\"\">
      ";
        // line 105
        yield from $this->load((("@tailpine/templates/footer-styles/" . ($context["footer_template"] ?? null)) . ".html.twig"), 105)->unwrap()->yield($context);
        // line 106
        yield "    </div>
  </footer>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "header_template", "footer_template"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/tailpine/templates/layout/page.html.twig";
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
        return array (  167 => 106,  165 => 105,  157 => 99,  151 => 96,  148 => 95,  146 => 94,  140 => 91,  135 => 89,  130 => 88,  124 => 85,  121 => 84,  119 => 83,  114 => 80,  110 => 78,  106 => 76,  104 => 75,  101 => 74,  99 => 73,  94 => 70,  88 => 67,  85 => 66,  83 => 65,  75 => 59,  69 => 56,  66 => 55,  64 => 54,  61 => 53,  59 => 52,  55 => 51,  47 => 46,  44 => 45,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/tailpine/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/tailpine/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 52, "if" => 54];
        static $filters = ["escape" => 46];
        static $functions = ["attach_library" => 46];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library'],
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
