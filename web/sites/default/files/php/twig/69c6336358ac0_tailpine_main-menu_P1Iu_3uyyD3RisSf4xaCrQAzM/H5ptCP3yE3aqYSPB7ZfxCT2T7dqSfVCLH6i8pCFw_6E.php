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

/* tailpine:main-menu */
class __TwigTemplate_67492933a320b7a4a7e2571f2a017383 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->normalizeProps($context, "tailpine:main-menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.tailpine--main-menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "tailpine:main-menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "tailpine:main-menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->preprocessProps($context, "tailpine:main-menu"));
        yield "<nav
  class=\"font-semibold\"
  x-data=\"{ mobOpen: false }\"
>
  <!-- Main Menu -->
  <ul
    class=\"absolute bg-body-bg border-t-1 lg:border-none border-gray-2 lg:border-0 pb-10 lg:pb-0 lg:bg-transparent w-full lg:w-auto lg:!block  lg:static top-16  left-0 right-0 px-2 text-start mt-4 lg:m-0 flex-col items-start lg:flex lg:flex-row lg:items-center lg:gap-2 z-40  transition-all duration-300 [&[x-cloak]]:!hidden\"
     :class=\"{ 'hidden': !mobOpen, 'flex': mobOpen}\"
      x-show=\"true\"
      x-transition:enter=\"transition ease-out duration-200\"
      x-transition:enter-start=\"opacity-0 scale-95\"
      x-transition:enter-end=\"opacity-100 scale-100\"
      x-transition:leave=\"transition ease-in duration-200\"
      x-transition:leave-start=\"opacity-100 scale-100\"
      x-transition:leave-end=\"opacity-0 scale-95\"
      x-cloak
  >

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["nested"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            yield "      <li
        class=\"relative my-1 lg:m-0 w-full lg:w-fit inline-block\"
        x-data=\"{ open: false }\"
        @mouseenter=\"window.innerWidth >= 1024 ? open = true : null\"
        @mouseleave=\"window.innerWidth >= 1024 ? open = false : null\"
        @click=\"window.innerWidth < 1024 ? open = !open : null\"
        @focusin=\"window.innerWidth >= 1024 ? open = true : null\"
        @focusout=\"window.innerWidth >= 1024 ? open = false : null\"
        @click.away=\"open = false\"
        x-on:keydown.escape=\"open = false\"
        @focusout=\"await \$nextTick();!\$el.contains(\$focus.focused()) && (open = false)\"
      >
        <!-- Main menu item -->
        <div class=\"menu_with_icon  pr-5 flex items-center w-full justify-between  hover:text-primary transition-all duration-500  cursor-pointer ";
            // line 33
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, true, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "text-primary";
            }
            yield "\">
          ";
            // line 35
            yield "          ";
            if ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 35)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 35), "toString", [], "method", false, false, true, 35) == "<nolink>"))) {
                // line 36
                yield "            <span class=\"block w-full pl-5 py-2\">
              ";
                // line 37
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 37), "html", null, true);
                yield "
            </span>
          ";
            } else {
                // line 40
                yield "            <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), "html", null, true);
                yield "\" target=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, true, 40), "html", null, true);
                yield "\" class=\"block w-full pl-5 py-2\">
              ";
                // line 41
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 41), "html", null, true);
                yield "
            </a>
          ";
            }
            // line 44
            yield "
          ";
            // line 45
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 45))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "            <button
              @click=\"open = !open; \$event.stopPropagation();\"
              class=\"whitespace-nowrap w-full rounded flex items-center justify-end cursor-pointer\"
              :aria-expanded=\"open.toString()\"
              aria-haspopup=\"true\"
              :aria-controls=\"'";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["submenuId"] ?? null), "html", null, true);
                yield "'\"
              aria-label=\"Toggle submenu for ";
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), "html", null, true);
                yield "\"
              tabindex=\"0\"
            >
              <svg
                xmlns=\"http://www.w3.org/2000/svg\"
                class=\"w-5 h-5 ml-4 transform transition-transform duration-300 bg-gray-400 lg:bg-transparent\"
                :class=\"open ? 'rotate-180' : 'rotate-0'\"
                fill=\"none\"
                viewBox=\"0 0 24 24\"
                stroke=\"currentColor\"
              >
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
              </svg>
            </button>
          ";
            }
            // line 67
            yield "        </div>

        <!-- Submenu -->
        ";
            // line 70
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 70))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "          <ul
            x-show=\"open\"
            x-transition
            class=\"left-0 top-full mt-1 w-9/10 mx-5 lg:mx-0 lg:w-48 relative lg:absolute bg-gray-200 text-body shadow-lg z-40 border border-gray-400 \"
          >
            ";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->getTemplateForMacro("macro_render_submenu", $context, 76, $this->getSourceContext())->macro_render_submenu(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 76)]));
                yield "
          </ul>
        ";
            }
            // line 79
            yield "      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "    <li class=\"md:hidden pl-4 mt-2 list-none relative\">
       ";
        // line 82
        if ((((($context["selected__header_template"] ?? null) == "style2") || (($context["selected__header_template"] ?? null) == "style4")) || (($context["selected__header_template"] ?? null) == "style6"))) {
            // line 83
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@tailpine/components/navigation/account-menu/account-menu.twig", ["items" => ($context["account_menu"] ?? null)]));
            yield "
      ";
        }
        // line 85
        yield "    </li>
  </ul>

  <!-- Mobile Menu Toggle Button -->
  <div class=\"lg:hidden flex items-center\">
    <button
      class=\"h-6 flex items-center justify-between flex-col gap-0.5 cursor-pointer\"
      @click=\"mobOpen = !mobOpen\"
    >
      <div
        class=\"topLine w-8 h-1 bg-body transition-transform duration-300\"
        :class=\"{ 'rotate-45 translate-y-2': mobOpen }\"
      ></div>
      <div
        class=\"midLine w-8 h-1 bg-body transition-opacity duration-300\"
        :class=\"{ 'opacity-0': mobOpen }\"
      ></div>
      <div
        class=\"bottomLine w-8 h-1 bg-body transition-transform duration-300\"
        :class=\"{ '-rotate-45 -translate-y-3': mobOpen }\"
      ></div>
    </button>
  </div>
</nav>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["nested", "submenuId", "selected__header_template", "account_menu", "_self", "children"]);        yield from [];
    }

    // line 110
    public function macro_render_submenu($children = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "children" => $children,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 111
            yield "  ";
            $macros["menus"] = $this;
            // line 112
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["children"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 113
                yield "    <li
      class=\"relative border- border-body font-medium\"
      x-data=\"{ open: false }\"
      @mouseenter=\"window.innerWidth >= 1024 ? open = true : null\"
      @mouseleave=\"window.innerWidth >= 1024 ? open = false : null\"
      @focusin=\"window.innerWidth >= 1024 ? open = true : null\"
      @focusout=\"window.innerWidth >= 1024 ? open = false : null\"
      @click.away=\"open = false\"
      @click=\"window.innerWidth < 1024 ? open = !open : null\"
      @focusout=\"await \$nextTick();!\$el.contains(\$focus.focused()) && (open = false)\"
    >
      <div class=\"pr-3 flex justify-between items-center hover:bg-primary hover:text-body-bg rounded cursor-pointer ";
                // line 124
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "class", [], "any", false, false, true, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "text-primary";
                }
                yield "\">
        ";
                // line 126
                yield "        ";
                if ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, true, 126)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, true, 126), "toString", [], "method", false, false, true, 126) == "<nolink>"))) {
                    // line 127
                    yield "          <span class=\"block w-full px-4 py-2\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, true, 127), "html", null, true);
                    yield "</span>
        ";
                } else {
                    // line 129
                    yield "          <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, true, 129), "html", null, true);
                    yield "\" target=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "target", [], "any", false, false, true, 129), "html", null, true);
                    yield "\" class=\"block w-full px-4 py-2\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, true, 129), "html", null, true);
                    yield "</a>
        ";
                }
                // line 131
                yield "        ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, true, 131))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 132
                    yield "          <button
              @click=\"open = !open; \$event.stopPropagation();\"
              class=\"whitespace-nowrap w-full rounded flex items-center justify-end cursor-pointer\"
              :aria-expanded=\"open.toString()\"
              aria-haspopup=\"true\"
              :aria-controls=\"'";
                    // line 137
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["submenuId"] ?? null), "html", null, true);
                    yield "'\"
              aria-label=\"Toggle submenu for ";
                    // line 138
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 138), "html", null, true);
                    yield "\"
              tabindex=\"0\"
            >
            <svg
              xmlns=\"http://www.w3.org/2000/svg\"
              class=\"w-4 h-4 transform transition-transform duration-300 bg-gray-400 lg:bg-transparent\"
              :class=\"open ? 'rotate-90' : 'rotate-0'\"
              fill=\"none\"
              viewBox=\"0 0 24 24\"
              stroke=\"currentColor\"
            >
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
          </button>
        ";
                }
                // line 153
                yield "      </div>

      ";
                // line 155
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, true, 155))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 156
                    yield "        <ul
          x-show=\"open\"
          x-transition
          @mouseenter=\"open = true\"
          @mouseleave=\"open = false\"
          @focusin=\"open = true\"
          @focusout=\"open = false\"
          @click.away=\"open = false\"
          x-on:keydown.escape=\"open = false\"
          @click=\"open = !open\"
          @focusout=\"await \$nextTick();!\$el.contains(\$focus.focused()) && (open = false)\"
          class=\"left-full top-0 lg:w-48 w-9/10 mx-5 lg:mx-0 lg:absolute bg-gray-200 text-body  shadow-lg z-40 my-2 pb-1 lg:pb-0 lg:my-0 \"
        >
          ";
                    // line 169
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_render_submenu", $context, 169, $this->getSourceContext())->macro_render_submenu(...[CoreExtension::getAttribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, true, 169)]));
                    yield "
        </ul>
      ";
                }
                // line 172
                yield "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tailpine:main-menu";
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
        return array (  339 => 172,  333 => 169,  318 => 156,  316 => 155,  312 => 153,  294 => 138,  290 => 137,  283 => 132,  280 => 131,  270 => 129,  264 => 127,  261 => 126,  255 => 124,  242 => 113,  237 => 112,  234 => 111,  222 => 110,  191 => 85,  185 => 83,  183 => 82,  180 => 81,  173 => 79,  167 => 76,  160 => 71,  158 => 70,  153 => 67,  135 => 52,  131 => 51,  124 => 46,  122 => 45,  119 => 44,  113 => 41,  106 => 40,  100 => 37,  97 => 36,  94 => 35,  88 => 33,  73 => 20,  69 => 19,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tailpine:main-menu", "themes/contrib/tailpine/components/navigation/main-menu/main-menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 19, "if" => 33, "macro" => 110, "import" => 111];
        static $filters = ["escape" => 37];
        static $functions = ["include" => 83];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'macro', 'import'],
                ['escape'],
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
