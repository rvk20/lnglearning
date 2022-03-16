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

/* addwords/index.html.twig */
class __TwigTemplate_1b58527a913f436fb0efadcdd185894967b3b27a46f48f665fff90380b276a26 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addwords/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addwords/index.html.twig"));

        $this->parent = $this->loadTemplate("baseuser.html.twig", "addwords/index.html.twig", 1);
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

        echo "Dodaj słówka";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>



<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>





<div class=\"example-wrapper\" style=\"display: block;
  text-align: center;
  
  width: 50%;
  
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \"> 
  
<h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Dodawanie słówek</h1>
</br>
 <input type=\"text\" id=\"txtName\"/>
</br>
</br>
<a class=\"btn btn-primary btn-sm\" href = \"javascript:;\" onclick = \"this.href='add?filter=' + document.getElementById('txtName').value \">Szukaj</a>


</br>
</br>



<div id=\"tableid\">

<table id=\"table_id\" class=\"display\">
   <thead>
  <tr>
    <th>Słowo</th>
    <th>Tłumaczenie</th>
    <th>Język</th>
    <th></th>
  </tr>
  </thead>
  ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["words"]) || array_key_exists("words", $context) ? $context["words"] : (function () { throw new RuntimeError('Variable "words" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
            // line 74
            echo "  <tbody id=\"myTable\">
  <tr>
   <form name = \"myform\" method=\"POST\">
    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["word"], "word", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["word"], "translation", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["word"], "language", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
    <td style=\"text-align: center;\"><button name=\"submit\" class=\"btn btn-secondary btn-sm\" type=\"submit\" value=";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["word"], "Id", [], "any", false, false, false, 80), "html", null, true);
            echo " style=\"align: center; font-size: 15px;\" class=\"zsk2\">Dodaj</button></td>
    </form>
  </tr>
  
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  
  </tbody>
</table>

</div>
</br>

<div class=\"navigation\" >
";
        // line 92
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["words"]) || array_key_exists("words", $context) ? $context["words"] : (function () { throw new RuntimeError('Variable "words" does not exist.', 92, $this->source); })()));
        echo "
</div>

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "addwords/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 92,  186 => 84,  175 => 80,  171 => 79,  167 => 78,  163 => 77,  158 => 74,  154 => 73,  88 => 9,  78 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseuser.html.twig' %}

{% block title %}Dodaj słówka{% endblock %}




{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>



<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>





<div class=\"example-wrapper\" style=\"display: block;
  text-align: center;
  
  width: 50%;
  
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \"> 
  
<h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Dodawanie słówek</h1>
</br>
 <input type=\"text\" id=\"txtName\"/>
</br>
</br>
<a class=\"btn btn-primary btn-sm\" href = \"javascript:;\" onclick = \"this.href='add?filter=' + document.getElementById('txtName').value \">Szukaj</a>


</br>
</br>



<div id=\"tableid\">

<table id=\"table_id\" class=\"display\">
   <thead>
  <tr>
    <th>Słowo</th>
    <th>Tłumaczenie</th>
    <th>Język</th>
    <th></th>
  </tr>
  </thead>
  {% for word in words %}
  <tbody id=\"myTable\">
  <tr>
   <form name = \"myform\" method=\"POST\">
    <td>{{ word.word }}</td>
    <td>{{ word.translation }}</td>
    <td>{{ word.language }}</td>
    <td style=\"text-align: center;\"><button name=\"submit\" class=\"btn btn-secondary btn-sm\" type=\"submit\" value={{ word.Id }} style=\"align: center; font-size: 15px;\" class=\"zsk2\">Dodaj</button></td>
    </form>
  </tr>
  
   {% endfor %}  
  </tbody>
</table>

</div>
</br>

<div class=\"navigation\" >
{{ knp_pagination_render(words) }}
</div>

</div>


{% endblock %}

", "addwords/index.html.twig", "/sfprojects/jobeet/langlearning/templates/addwords/index.html.twig");
    }
}
