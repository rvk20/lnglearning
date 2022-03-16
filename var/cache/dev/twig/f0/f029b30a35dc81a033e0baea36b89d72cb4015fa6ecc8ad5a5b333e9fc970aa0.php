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

/* words_learned/index.html.twig */
class __TwigTemplate_7aa1b4ed2fb35b919764b43a7eadc6a4f012f0bd2c101b75b3a666572fd16479 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "words_learned/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "words_learned/index.html.twig"));

        $this->parent = $this->loadTemplate("baseuser.html.twig", "words_learned/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Poznane słówka";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
  margin-left: auto;
  margin-right: auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</br>
</br>
<div id=\"accordion\">
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingOne\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Wykonane sesje</h1>
        </button>
      </h5>
    </div>

    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
      <div class=\"card-body\">
        
        <table id=\"table_id\" class=\"display\">
   <thead>
  <tr>
    <th>Nazwa kursu</th>
    <th>Typ</th>
    <th>Poprawność</th>
    <th>Poziom trudności</th>
    <th>Data</th>
  </tr>
  </thead>
  ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 57
            echo "  <tbody id=\"myTable\">
  <tr>
    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "type", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "correct", [], "any", false, false, false, 61), "html", null, true);
            echo "/5</td>
    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "level", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "date", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
  </tr>
  
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "  
  </tbody>
  
</table>

<div class=\"navigation\" style=\"margin-left: auto;
    margin-right: auto;
    width: 35em\">
";
        // line 74
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["words"]) || array_key_exists("words", $context) ? $context["words"] : (function () { throw new RuntimeError('Variable "words" does not exist.', 74, $this->source); })()));
        echo "
</div>

      </div>
    </div>
  </div>
  </br>
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingTwo\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Nauczone słówka</h1>
        </button>
      </h5>
    </div>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
      <div class=\"card-body\">
         
         
<table id=\"table_id\" class=\"display\">
   <thead>
  <tr>
    <th>Słowo</th>
    <th>Język</th>
  </tr>
  </thead>
  ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["words"]) || array_key_exists("words", $context) ? $context["words"] : (function () { throw new RuntimeError('Variable "words" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
            // line 101
            echo "  <tbody id=\"myTable\">
  <tr>
    <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["word"], "word", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["word"], "language", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
  </tr>
  
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "  
  </tbody>
  
</table>

<div class=\"navigation\" style=\"margin-left: auto;
    margin-right: auto;
    width: 20em\">
";
        // line 115
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["words"]) || array_key_exists("words", $context) ? $context["words"] : (function () { throw new RuntimeError('Variable "words" does not exist.', 115, $this->source); })()));
        echo "
</div>

      </div>
    </div>
  </div>
  
    

  
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "words_learned/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 115,  235 => 107,  225 => 104,  221 => 103,  217 => 101,  213 => 100,  184 => 74,  174 => 66,  164 => 63,  160 => 62,  156 => 61,  152 => 60,  148 => 59,  144 => 57,  140 => 56,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseuser.html.twig' %}

{% block title %}Poznane słówka{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30%;
  margin-left: auto;
  margin-right: auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</br>
</br>
<div id=\"accordion\">
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingOne\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Wykonane sesje</h1>
        </button>
      </h5>
    </div>

    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
      <div class=\"card-body\">
        
        <table id=\"table_id\" class=\"display\">
   <thead>
  <tr>
    <th>Nazwa kursu</th>
    <th>Typ</th>
    <th>Poprawność</th>
    <th>Poziom trudności</th>
    <th>Data</th>
  </tr>
  </thead>
  {% for session in sessions %}
  <tbody id=\"myTable\">
  <tr>
    <td>{{ session.name }}</td>
    <td>{{ session.type }}</td>
    <td>{{ session.correct }}/5</td>
    <td>{{ session.level }}</td>
    <td>{{ session.date }}</td>
  </tr>
  
   {% endfor %}  
  </tbody>
  
</table>

<div class=\"navigation\" style=\"margin-left: auto;
    margin-right: auto;
    width: 35em\">
{{ knp_pagination_render(words) }}
</div>

      </div>
    </div>
  </div>
  </br>
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingTwo\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Nauczone słówka</h1>
        </button>
      </h5>
    </div>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
      <div class=\"card-body\">
         
         
<table id=\"table_id\" class=\"display\">
   <thead>
  <tr>
    <th>Słowo</th>
    <th>Język</th>
  </tr>
  </thead>
  {% for word in words %}
  <tbody id=\"myTable\">
  <tr>
    <td>{{ word.word }}</td>
    <td>{{ word.language }}</td>
  </tr>
  
   {% endfor %}  
  </tbody>
  
</table>

<div class=\"navigation\" style=\"margin-left: auto;
    margin-right: auto;
    width: 20em\">
{{ knp_pagination_render(words) }}
</div>

      </div>
    </div>
  </div>
  
    

  
</div>
{% endblock %}
", "words_learned/index.html.twig", "/sfprojects/jobeet/langlearning/templates/words_learned/index.html.twig");
    }
}
