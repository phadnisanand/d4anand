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

/* themes/drupal_tailwind_theme/templates/views/views-view-unformatted--accordion.html.twig */
class __TwigTemplate_3b1bd89de43b6fc0b38a93e81dc07148 extends Template
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
        // line 18
        yield "
";
        // line 19
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "  <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h3>
";
        }
        // line 22
        yield "

";
        // line 24
        $context["accordions"] = [];
        // line 25
        yield "
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            yield "  ";
            $context["accordions"] = Twig\Extension\CoreExtension::merge(($context["accordions"] ?? null), [["title" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source,             // line 28
$context["row"], "content", [], "any", false, false, true, 28)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 28), "#row", [], "array", false, false, true, 28)), "_entity", [], "any", false, false, true, 28), "field_title", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), "content" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 29
$context["row"], "content", [], "any", false, false, true, 29)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 29), "#row", [], "array", false, false, true, 29)), "_entity", [], "any", false, false, true, 29), "field_content", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29)]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@drupal_tailwind_theme/components/accordion/accordion.twig", ["items" =>         // line 34
($context["accordions"] ?? null)]));
        // line 35
        yield "

<!--
\t<div class=\"space-y-3\">
\t";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@drupal_tailwind_theme/components/accordion/accordion.twig", ["items" => [["title" => "FAQ 1", "content" => "Answer 1 from Drupal field."], ["title" => "FAQ 2", "content" => "Answer 2 from Drupal field."], ["title" => "FAQ 3", "content" => "Answer 3 from Drupal field."]]]));
        // line 54
        yield "
\t</div>
-->";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/drupal_tailwind_theme/templates/views/views-view-unformatted--accordion.html.twig";
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
        return array (  91 => 54,  89 => 39,  83 => 35,  81 => 34,  80 => 33,  77 => 32,  71 => 29,  70 => 28,  68 => 27,  64 => 26,  61 => 25,  59 => 24,  55 => 22,  49 => 20,  47 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/drupal_tailwind_theme/templates/views/views-view-unformatted--accordion.html.twig", "C:\\xampp\\htdocs\\www\\drupal11\\my_site_name_dir\\web\\themes\\drupal_tailwind_theme\\templates\\views\\views-view-unformatted--accordion.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 19, "set" => 24, "for" => 26];
        static $filters = ["escape" => 20, "merge" => 27];
        static $functions = ["include" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'merge'],
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
