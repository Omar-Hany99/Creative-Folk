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

/* layout.html */
class __TwigTemplate_e6f2f2ee3a7e483ef2f48ed09bd2e47a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "css/styles.css\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/favicon.ico\">
  </head>
  <body>
    <header>
      <a class=\"skip-link\" href=\"#content\">Skip to content</a>
      <nav class=\"member-menu\">
        <div class=\"container\">
          ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 18) == 0)) {
            // line 19
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "login\" class=\"nav-item nav-link\">Log in</a> /
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "register\" class=\"nav-item nav-link\">Register</a>
          ";
        } else {
            // line 22
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "member/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "forename", [], "any", false, false, false, 22), "html", null, true);
            echo "</a> /
            ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 23) == "admin")) {
                // line 24
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "admin/index\">Admin</a> /
            ";
            }
            // line 26
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "logout\">Logout</a>
          ";
        }
        // line 28
        echo "        </div>
      </nav>
      <div class=\"container\">
        <div class=\"logo\">
          <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/logo.png\" alt=\"Creative Folk\"></a>
        </div>
        <nav>
          <button id=\"toggle-navigation\" aria-expanded=\"false\">
            <span class=\"icon-menu\"></span><span class=\"hidden\">Menu</span>
          </button>
          <ul id=\"menu\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 40
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["link"], "navigation", [], "any", false, false, false, 40) == 1)) {
                // line 41
                echo "              <li><a href=\"";
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "category/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "seo_name", [], "any", false, false, false, 41), "html", null, true);
                echo "\"
              ";
                // line 42
                if ((($context["section"] ?? null) == twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 42))) {
                    echo " class=\"on\"";
                }
                echo ">
                ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 43), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 45
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            <li><a href=\"";
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "search\">
              <span class=\"icon-search\"></span><span class=\"search-text\">Search</span>
            </a></li>
          </ul>
        </nav>
      </div><!-- /.container -->
    </header>
    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "    <footer>
      <div class=\"container\">
        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "contact\">Omar Hany</a>
        <span class=\"copyright\">&copy; Creative Folk ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
      </div>
    </footer>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "js/site.js\"></script>
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Creative Folk";
    }

    // line 7
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hire ceatives";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 53,  198 => 7,  191 => 6,  184 => 60,  178 => 57,  174 => 56,  170 => 54,  168 => 53,  157 => 46,  151 => 45,  146 => 43,  140 => 42,  131 => 41,  128 => 40,  124 => 39,  112 => 32,  106 => 28,  100 => 26,  94 => 24,  92 => 23,  83 => 22,  78 => 20,  73 => 19,  71 => 18,  61 => 11,  55 => 8,  51 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Creative Folk{% endblock %}</title>
    <meta name=\"description\" content=\"{% block description %}Hire ceatives{% endblock %}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ doc_root }}css/styles.css\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ doc_root }}img/favicon.ico\">
  </head>
  <body>
    <header>
      <a class=\"skip-link\" href=\"#content\">Skip to content</a>
      <nav class=\"member-menu\">
        <div class=\"container\">
          {% if session.id == 0 %}
            <a href=\"{{ doc_root }}login\" class=\"nav-item nav-link\">Log in</a> /
            <a href=\"{{ doc_root }}register\" class=\"nav-item nav-link\">Register</a>
          {% else %}
            <a href=\"{{ doc_root }}member/{{ session.id }}\">{{ session.forename }}</a> /
            {% if session.role == 'admin' %}
              <a href=\"{{ doc_root }}admin/index\">Admin</a> /
            {% endif %}
            <a href=\"{{ doc_root }}logout\">Logout</a>
          {% endif %}
        </div>
      </nav>
      <div class=\"container\">
        <div class=\"logo\">
          <a href=\"{{ doc_root }}\"><img src=\"{{ doc_root }}img/logo.png\" alt=\"Creative Folk\"></a>
        </div>
        <nav>
          <button id=\"toggle-navigation\" aria-expanded=\"false\">
            <span class=\"icon-menu\"></span><span class=\"hidden\">Menu</span>
          </button>
          <ul id=\"menu\">
            {% for link in navigation %}
            {% if (link.navigation == 1) %}
              <li><a href=\"{{ doc_root }}category/{{ link.id }}/{{ link.seo_name }}\"
              {% if (section == link.id) %} class=\"on\"{% endif %}>
                {{ link.name }}</a></li>
            {% endif %}
            {% endfor %}
            <li><a href=\"{{ doc_root }}search\">
              <span class=\"icon-search\"></span><span class=\"search-text\">Search</span>
            </a></li>
          </ul>
        </nav>
      </div><!-- /.container -->
    </header>
    {% block content %}{% endblock %}
    <footer>
      <div class=\"container\">
        <a href=\"{{ doc_root }}contact\">Omar Hany</a>
        <span class=\"copyright\">&copy; Creative Folk {{ 'now'|date('Y') }}</span>
      </div>
    </footer>
    <script src=\"{{ doc_root }}js/site.js\"></script>
  </body>
</html>", "layout.html", "C:\\xampp\\htdocs\\omar\\phpbook\\section_d\\c17\\templates\\layout.html");
    }
}
