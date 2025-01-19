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

/* film/read.html.twig */
class __TwigTemplate_fc744eadffedefc7081fe1d17ed9ba33 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "film/read.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Lecture d'un film";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <main class=\"container mt-4\">
        <form action=\"/films/read?id=";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\" method=\"POST\">
        <div class=\"form-group mb-3\">
            <label for=\"id\" class=\"form-label\">Identifiant du film à lire</label>
            <input type=\"text\" id=\"id\" name=\"id\" class=\"form-control\" placeholder=\"Identifiant du film\" required>
            <button type='submit' class=\"btn btn-primary btn-lg\">Confirmer</button>
        </div>        
        </form>
    </main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "film/read.html.twig";
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
        return array (  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Lecture d'un film{% endblock %}

{% block content %}
    <main class=\"container mt-4\">
        <form action=\"/films/read?id={{ film.id }}\" method=\"POST\">
        <div class=\"form-group mb-3\">
            <label for=\"id\" class=\"form-label\">Identifiant du film à lire</label>
            <input type=\"text\" id=\"id\" name=\"id\" class=\"form-control\" placeholder=\"Identifiant du film\" required>
            <button type='submit' class=\"btn btn-primary btn-lg\">Confirmer</button>
        </div>        
        </form>
    </main>
{% endblock %}", "film/read.html.twig", "/var/www/filmoteca/src/views/film/read.html.twig");
    }
}
