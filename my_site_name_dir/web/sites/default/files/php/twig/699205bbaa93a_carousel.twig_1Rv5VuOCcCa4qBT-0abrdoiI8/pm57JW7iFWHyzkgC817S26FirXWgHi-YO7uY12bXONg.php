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

/* @drupal_tailwind_theme/components/carousel/carousel.twig */
class __TwigTemplate_a728b0cc8524dbed8286e0f038e2738f extends Template
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
        yield "<div class=\"carousel w-full\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["slides"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 3
            yield "    ";
            $context["index"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 3);
            // line 4
            yield "    ";
            $context["prev"] = (((($context["index"] ?? null) == 1)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null))) : ((($context["index"] ?? null) - 1)));
            // line 5
            yield "    ";
            $context["next"] = (((($context["index"] ?? null) == Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null)))) ? (1) : ((($context["index"] ?? null) + 1)));
            // line 6
            yield "
    <div id=\"slide";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["index"] ?? null), "html", null, true);
            yield "\" class=\"carousel-item relative w-full\">
      <img src=\"";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, true, 8), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "alt", [], "any", false, false, true, 8), "html", null, true);
            yield "\" class=\"w-full\" />

      <div class=\"absolute left-5 right-5 top-1/2 flex -translate-y-1/2 justify-between\">
        <a href=\"#slide";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prev"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-circle\">❮</a>
        <a href=\"#slide";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["next"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-circle\">❯</a>
      </div>
    </div>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["slides", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@drupal_tailwind_theme/components/carousel/carousel.twig";
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
        return array (  110 => 16,  92 => 12,  88 => 11,  80 => 8,  76 => 7,  73 => 6,  70 => 5,  67 => 4,  64 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@drupal_tailwind_theme/components/carousel/carousel.twig", "C:\\xampp\\htdocs\\www\\drupal11\\my_site_name_dir\\web\\themes\\drupal_tailwind_theme\\components\\carousel\\carousel.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 2, "set" => 3];
        static $filters = ["length" => 4, "escape" => 7];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['length', 'escape'],
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
