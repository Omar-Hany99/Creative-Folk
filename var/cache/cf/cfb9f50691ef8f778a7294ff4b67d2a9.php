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

/* article.html */
class __TwigTemplate_2181fe861ca985c9b6827df617e06ea6 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "article.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 3
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "summary", [], "any", false, false, false, 3), "html_attr");
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<main class=\"article container\" id=\"content\">
  <section class=\"image\">
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 7)) {
            // line 8
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 8), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
    ";
        } else {
            // line 10
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "uploads/blank.png\" alt=\"\">
    ";
        }
        // line 12
        echo "  </section>
  <section class=\"text\">
    <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
    <div class=\"social\">
      <div class=\"like-count\">
        ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 17) == 0)) {
            // line 18
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "login/\"><span class=\"icon-heart-empty\"></span></a>
        ";
        } else {
            // line 20
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "like/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
          ";
            // line 21
            if (($context["liked"] ?? null)) {
                // line 22
                echo "            <span class=\"icon-heart\"></span></a>
          ";
            } else {
                // line 24
                echo "            <span class=\"icon-heart-empty\"></span>
          ";
            }
            // line 26
            echo "          </a>
        ";
        }
        // line 28
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "likes", [], "any", false, false, false, 28), "html", null, true);
        echo "
      </div>
      <div class=\"comment-count\">
        <span class=\"icon-comment\"></span> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comments", [], "any", false, false, false, 31), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"date\">";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "created", [], "any", false, false, false, 34), "F d, Y"), "html", null, true);
        echo "</div>
    <div class=\"content\">";
        // line 35
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 35);
        echo "</div>
    <p class=\"credit\">
      Posted in <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "category/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category_id", [], "any", false, false, false, 37), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "seo_category", [], "any", false, false, false, 37), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "seo_category", [], "any", false, false, false, 37), "html", null, true);
        echo "</a>
      by <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "member/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "member_id", [], "any", false, false, false, 38), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 38), "html", null, true);
        echo "</a>
    </p>
  </section>

  <section class=\"comments\">
    <h2>Comments</h2>
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 45
            echo "    <div class=\"comment\">
      <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "picture", [], "any", false, false, false, 46), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 46), "html", null, true);
            echo "\" />
      <b>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 47), "html", null, true);
            echo "</b><br>
      ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "posted", [], "any", false, false, false, 48), "H:i a - F d, Y"), "html", null, true);
            echo "<br>
      <p>";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 49);
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 53) > 0)) {
            // line 54
            echo "    <form action=\"\" method=\"post\">
      <label for=\"comment\">Add comment: </label>
      <textarea name=\"comment\" id=\"comment\" class=\"form-control\"></textarea>
      ";
            // line 57
            if ((($context["error"] ?? null) == true)) {
                echo "<div class=\"error\">";
                echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
                echo "</div>";
            }
            // line 58
            echo "      <br><input type=\"submit\" value=\"Save comment\" class=\"btn btn-primary\">
    </form>
    ";
        } else {
            // line 61
            echo "    <p>You must <a href=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "login\">log in to make a comment</a>.</p>
    ";
        }
        // line 63
        echo "  </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "article.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 63,  225 => 61,  220 => 58,  214 => 57,  209 => 54,  207 => 53,  204 => 52,  195 => 49,  191 => 48,  187 => 47,  179 => 46,  176 => 45,  172 => 44,  159 => 38,  149 => 37,  144 => 35,  140 => 34,  134 => 31,  127 => 28,  123 => 26,  119 => 24,  115 => 22,  113 => 21,  106 => 20,  100 => 18,  98 => 17,  92 => 14,  88 => 12,  82 => 10,  72 => 8,  70 => 7,  66 => 5,  62 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %}{{ article.title }}{% endblock %}
{% block description %}{{ article.summary|e('html_attr') }}{% endblock %}
{% block content %}
<main class=\"article container\" id=\"content\">
  <section class=\"image\">
    {% if article.image_file %}
      <img src=\"{{ doc_root }}uploads/{{ article.image_file }}\" alt=\"{{ article.image_alt }}\">
    {% else %}
      <img src=\"{{ doc_root }}uploads/blank.png\" alt=\"\">
    {% endif %}
  </section>
  <section class=\"text\">
    <h2>{{ article.title }}</h2>
    <div class=\"social\">
      <div class=\"like-count\">
        {% if session.id == 0 %}
          <a href=\"{{ doc_root }}login/\"><span class=\"icon-heart-empty\"></span></a>
        {% else %}
          <a href=\"{{ doc_root }}like/{{ article.id }}\">
          {% if liked %}
            <span class=\"icon-heart\"></span></a>
          {% else %}
            <span class=\"icon-heart-empty\"></span>
          {% endif %}
          </a>
        {% endif %}
        {{ article.likes }}
      </div>
      <div class=\"comment-count\">
        <span class=\"icon-comment\"></span> {{ article.comments }}
      </div>
    </div>
    <div class=\"date\">{{ article.created|date('F d, Y') }}</div>
    <div class=\"content\">{{ article.content|raw}}</div>
    <p class=\"credit\">
      Posted in <a href=\"{{ doc_root }}category/{{ article.category_id }}/{{ article.seo_category }}\">{{ article.seo_category }}</a>
      by <a href=\"{{ doc_root }}member/{{ article.member_id }}\">{{ article.author }}</a>
    </p>
  </section>

  <section class=\"comments\">
    <h2>Comments</h2>
    {% for comment in comments %}
    <div class=\"comment\">
      <img src=\"{{ doc_root }}uploads/{{ comment.picture }}\" alt=\"{{ comment.author }}\" />
      <b>{{ comment.author }}</b><br>
      {{ comment.posted|date('H:i a - F d, Y') }}<br>
      <p>{{ comment.comment|raw }}</p>
    </div>
    {% endfor %}

    {% if session.id > 0 %}
    <form action=\"\" method=\"post\">
      <label for=\"comment\">Add comment: </label>
      <textarea name=\"comment\" id=\"comment\" class=\"form-control\"></textarea>
      {% if error == true %}<div class=\"error\">{{ error }}</div>{% endif %}
      <br><input type=\"submit\" value=\"Save comment\" class=\"btn btn-primary\">
    </form>
    {% else %}
    <p>You must <a href=\"{{ doc_root }}login\">log in to make a comment</a>.</p>
    {% endif %}
  </section>
</main>
{% endblock %}", "article.html", "C:\\xampp\\htdocs\\omar\\phpbook\\section_d\\c17\\templates\\article.html");
    }
}
