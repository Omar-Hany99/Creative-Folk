<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* category.html */
class __TwigTemplate_74a7a2fa0821ba2f106ef141c3bbad07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "category.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
        echo " on Creative Folk";
    }

    // line 3
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 3), "html_attr");
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<main class=\"container\" id=\"content\">
  <section class=\"header\">
    <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
  </section>
  <section class=\"grid\">
    ";
        // line 12
        echo twig_include($this->env, $context, "article-summaries.html");
        echo "
  </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "category.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  75 => 9,  71 => 8,  67 => 6,  63 => 5,  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %}{{ category.name }} on Creative Folk{% endblock %}
{% block description %}{{ category.description|e('html_attr') }}{% endblock %}

{% block content %}
<main class=\"container\" id=\"content\">
  <section class=\"header\">
    <h1>{{ category.name }}</h1>
    <p>{{ category.description }}</p>
  </section>
  <section class=\"grid\">
    {{ include('article-summaries.html') }}
  </section>
</main>
{% endblock %}", "category.html", "C:\\xampp\\htdocs\\omar\\phpbook\\section_d\\c17\\templates\\category.html");
    }
}
