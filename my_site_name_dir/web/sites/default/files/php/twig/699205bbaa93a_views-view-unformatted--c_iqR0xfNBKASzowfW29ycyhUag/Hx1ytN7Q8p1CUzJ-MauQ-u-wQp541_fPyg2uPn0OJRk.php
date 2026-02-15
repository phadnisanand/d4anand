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

/* themes/drupal_tailwind_theme/templates/views/views-view-unformatted--carousel.html.twig */
class __TwigTemplate_225fd7722b939f7fcb49286ee283f774 extends Template
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
        // line 23
        $context["slides"] = [];
        // line 24
        yield "
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            yield "
";
            // line 27
            $context["media"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, true, true, 27), "#row", [], "array", false, true, true, 27), "_entity", [], "any", false, true, true, 27), "field_image", [], "any", false, true, true, 27), "entity", [], "any", true, true, true, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27), "#row", [], "array", false, false, true, 27)), "_entity", [], "any", false, false, true, 27), "field_image", [], "any", false, false, true, 27), "entity", [], "any", false, false, true, 27)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27), "#row", [], "array", false, false, true, 27)), "_entity", [], "any", false, false, true, 27), "field_image", [], "any", false, false, true, 27), "entity", [], "any", false, false, true, 27)) : (null));
            // line 28
            yield "
";
            // line 29
            if ((($tmp = ($context["media"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "  ";
                $context["image"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "field_media_image", [], "any", false, true, true, 30), 0, [], "array", true, true, true, 30) &&  !(null === (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "field_media_image", [], "any", false, false, true, 30)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "field_media_image", [], "any", false, false, true, 30), 0, [], "array", false, false, true, 30))))) ? ((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "field_media_image", [], "any", false, false, true, 30)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["media"] ?? null), "field_media_image", [], "any", false, false, true, 30), 0, [], "array", false, false, true, 30))) : (null));
                // line 31
                yield "  ";
                if ((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 32
                    yield "\t";
                    $context["slides"] = Twig\Extension\CoreExtension::merge(($context["slides"] ?? null), [["image" => $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 33
($context["image"] ?? null), "entity", [], "any", false, false, true, 33), "uri", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33)), "alt" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source,                     // line 34
$context["row"], "content", [], "any", false, false, true, 34)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 34), "#row", [], "array", false, false, true, 34)), "_entity", [], "any", false, false, true, 34), "field_image", [], "any", false, false, true, 34), "alt", [], "any", false, false, true, 34)]]);
                    // line 36
                    yield "  ";
                }
            }
            // line 38
            yield "  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "
";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@drupal_tailwind_theme/components/carousel/carousel.twig", ["slides" =>         // line 42
($context["slides"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/drupal_tailwind_theme/templates/views/views-view-unformatted--carousel.html.twig";
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
        return array (  103 => 42,  102 => 41,  99 => 40,  92 => 38,  88 => 36,  86 => 34,  85 => 33,  83 => 32,  80 => 31,  77 => 30,  75 => 29,  72 => 28,  70 => 27,  67 => 26,  63 => 25,  60 => 24,  58 => 23,  55 => 22,  49 => 20,  47 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/drupal_tailwind_theme/templates/views/views-view-unformatted--carousel.html.twig", "C:\\xampp\\htdocs\\www\\drupal11\\my_site_name_dir\\web\\themes\\drupal_tailwind_theme\\templates\\views\\views-view-unformatted--carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 19, "set" => 23, "for" => 25];
        static $filters = ["escape" => 20, "merge" => 32];
        static $functions = ["file_url" => 33, "include" => 41];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'merge'],
                ['file_url', 'include'],
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
