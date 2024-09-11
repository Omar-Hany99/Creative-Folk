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

/* article-summaries.html */
class __TwigTemplate_ce5639441fc2e763336d6e5695d10494 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 2
            echo "<article class=\"summary\">
  <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "article/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "seo_title", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
    ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 4)) {
                // line 5
                echo "      <img src=\"";
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 5), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image_alt", [], "any", false, false, false, 5), "html", null, true);
                echo "\">
    ";
            } else {
                // line 7
                echo "      <img src=\"";
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "uploads/blank.png\" alt=\"\">
    ";
            }
            // line 9
            echo "    <div class=\"social\">
      <div class=\"like-count\"><span class=\"icon-heart-empty\"></span> ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "likes", [], "any", false, false, false, 10), "html", null, true);
            echo "</div>
      <div class=\"comment-count\"><span class=\"icon-comment\"></span> ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "comments", [], "any", false, false, false, 11), "html", null, true);
            echo "</div>
    </div>
    <h2>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</h2>
    <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
  </a>
  <p class=\"credit\">
    Posted in <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category_id", [], "any", false, false, false, 17), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "seo_category", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
    by <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "member/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "member_id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
  </p>
  ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 20) == twig_get_attribute($this->env, $this->source, $context["article"], "member_id", [], "any", false, false, false, 20))) {
                // line 21
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "work/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\" class=\"btn btn-primary\">Edit</a>
  ";
            }
            // line 22
            echo "</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "article-summaries.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 22,  113 => 21,  111 => 20,  102 => 18,  92 => 17,  86 => 14,  82 => 13,  77 => 11,  73 => 10,  70 => 9,  64 => 7,  54 => 5,  52 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for article in articles %}
<article class=\"summary\">
  <a href=\"{{ doc_root }}article/{{ article.id }}/{{ article.seo_title }}\">
    {% if article.image_file %}
      <img src=\"{{ doc_root }}uploads/{{ article.image_file }}\" alt=\"{{ article.image_alt }}\">
    {% else %}
      <img src=\"{{ doc_root }}uploads/blank.png\" alt=\"\">
    {% endif %}
    <div class=\"social\">
      <div class=\"like-count\"><span class=\"icon-heart-empty\"></span> {{ article.likes }}</div>
      <div class=\"comment-count\"><span class=\"icon-comment\"></span> {{ article.comments }}</div>
    </div>
    <h2>{{ article.title }}</h2>
    <p>{{ article.summary }}</p>
  </a>
  <p class=\"credit\">
    Posted in <a href=\"{{ doc_root }}category/{{ article.category_id }}/{{ article.seo_category }}\">{{ article.category }}</a>
    by <a href=\"{{ doc_root }}member/{{ article.member_id }}\">{{ article.author }}</a>
  </p>
  {% if session.id == article.member_id %}
    <a href=\"{{ doc_root }}work/{{ article.id }}\" class=\"btn btn-primary\">Edit</a>
  {% endif %}</article>
{% endfor %}", "article-summaries.html", "C:\\xampp\\htdocs\\omar\\phpbook\\section_d\\c17\\templates\\article-summaries.html");
    }
}
