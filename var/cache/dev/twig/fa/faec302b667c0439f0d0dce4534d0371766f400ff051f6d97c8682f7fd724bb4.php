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

/* paneladmin/index.html.twig */
class __TwigTemplate_dde58d4e28c438738bf90e2e85cb24c70480d6f1401dc90b767b0d35c0ae9fd5 extends Template
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
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paneladmin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paneladmin/index.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "paneladmin/index.html.twig", 1);
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

        echo "Panel administratora";
        
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

<div class=\"example-wrapper\">
   

  
    

</br>
</br>
<div id=\"accordion\">
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingOne\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Dodawanie słów</h1>
        </button>
      </h5>
    </div>

    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
      <div class=\"card-body\">
        

        <div class=\"example-wrapper\" style=\"display: block;
        margin-left: auto;
        margin-right: auto;
        width: 60%;
        border: 0;
        padding-top: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        \">
        <form method=\"POST\" style=\"padding: .8em 1.2em;\">
        Słowo:
        <input type=\"text\" name=\"word\" id=\"word\" class=\"form-control\">
        </br>
        Tłumaczenie:
        <input type=\"text\" name=\"translation\" id=\"translation\" class=\"form-control\">
        </br>
        Język:
        <select class=\"form-control form-control-sm\" name=\"language\" id=\"language\">
            <option>Angielski</option>
            <option>Hiszpański</option>
        </select>
        </br>
        <button class=\"btn btn-lg btn-primary\" type=\"submit\" name='addword'>
        Dodaj
    </button>
    </div>
    </form>


      </div>
    </div>
  </div>
  </br>
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingTwo\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Dodawanie sprawdzianów</h1>
        </button>
      </h5>
    </div>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
      <div class=\"card-body\">
         
         
        <div class=\"example-wrapper\" style=\"display: block;
        margin-left: auto;
        margin-right: auto;
        width: 60%;
        border: 0;
        padding-top: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        \">
        <form method=\"POST\" style=\"padding: .8em 1.2em;\">
        Typ:
        <select class=\"form-control form-control-sm\" name=\"type\" id=\"language\">
            <option value='Reading'>Czytanie ze zrozumieniem</option>
            <option value='Listening'>Słuchanie ze zrozumieniem</option>
            <option value='Orthography'>Sprawdzian ortografii</option>
        </select>
        </br>
        Nazwa:
        <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\">
        </br>
        Tekst:
        <textarea type=\"text\" name=\"text\" id=\"text\" class=\"form-control\"></textarea>
        </br>
        Język:
        <select class=\"form-control form-control-sm\" name=\"language\" id=\"language\">
            <option>Angielski</option>
            <option>Hiszpański</option>
        </select>
        </br>
         Poziom:
        <select class=\"form-control form-control-sm\" name=\"level\" id=\"level\">
            <option>Bardzo łatwy</option>
            <option>Łatwy</option>
            <option>Średni</option>
            <option>Trudny</option>
        </select>
        </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question1\" id=\"question1\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc1\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer11\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer21\" class=\"form-control\">
        
    </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question2\" id=\"question\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc2\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer12\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer22\" class=\"form-control\">
        
    </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question3\" id=\"question3\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc3\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer13\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer23\" class=\"form-control\">
        
    </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question4\" id=\"question1\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc4\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer14\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer24\" class=\"form-control\">
        
    </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question5\" id=\"question1\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc5\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer15\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer25\" class=\"form-control\">
        </br>
        <button class=\"btn btn-lg btn-primary\" type=\"submit\" name='addText'>
        Dodaj
    </button>
    </div>
    </form>


      </div>
      </div>
      </div>
      </br>

<div class=\"card\">
    <div class=\"card-header\" id=\"headingTree\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"false\" aria-controls=\"collapseTree\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Użytkownicy</h1>
        </button>
      </h5>
    </div>
    <div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordion\">
      <div class=\"card-body\">

      <div class=\"example-wrapper\" style=\"display: block;
        margin-left: auto;
        margin-right: auto;
        width: 33%;
        border: 0;
        padding-top: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        \">

<table id=\"table_id\" class=\"display\">
  
  ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 222, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 223
            echo "  <tbody id=\"myTable\">
  <tr>
   <form name = \"myform\" method=\"POST\">
    <td>";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 226), "html", null, true);
            echo "</td>
    <td style=\"text-align: center;\"><button name=\"usun\" class=\"btn btn-secondary btn-sm\" type=\"submit\" value=";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 227), "html", null, true);
            echo " style=\"align: center; font-size: 15px;\" class=\"zsk2\">Usuń</button></td>
    </form>
  </tr>
  
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "  
  </tbody>
</table>

</div>
</br>

<div class=\"navigation\" >
";
        // line 239
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 239, $this->source); })()));
        echo "
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
        return "paneladmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 239,  330 => 231,  319 => 227,  315 => 226,  310 => 223,  306 => 222,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseadmin.html.twig' %}

{% block title %}Panel administratora{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
   

  
    

</br>
</br>
<div id=\"accordion\">
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingOne\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Dodawanie słów</h1>
        </button>
      </h5>
    </div>

    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
      <div class=\"card-body\">
        

        <div class=\"example-wrapper\" style=\"display: block;
        margin-left: auto;
        margin-right: auto;
        width: 60%;
        border: 0;
        padding-top: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        \">
        <form method=\"POST\" style=\"padding: .8em 1.2em;\">
        Słowo:
        <input type=\"text\" name=\"word\" id=\"word\" class=\"form-control\">
        </br>
        Tłumaczenie:
        <input type=\"text\" name=\"translation\" id=\"translation\" class=\"form-control\">
        </br>
        Język:
        <select class=\"form-control form-control-sm\" name=\"language\" id=\"language\">
            <option>Angielski</option>
            <option>Hiszpański</option>
        </select>
        </br>
        <button class=\"btn btn-lg btn-primary\" type=\"submit\" name='addword'>
        Dodaj
    </button>
    </div>
    </form>


      </div>
    </div>
  </div>
  </br>
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingTwo\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Dodawanie sprawdzianów</h1>
        </button>
      </h5>
    </div>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
      <div class=\"card-body\">
         
         
        <div class=\"example-wrapper\" style=\"display: block;
        margin-left: auto;
        margin-right: auto;
        width: 60%;
        border: 0;
        padding-top: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        \">
        <form method=\"POST\" style=\"padding: .8em 1.2em;\">
        Typ:
        <select class=\"form-control form-control-sm\" name=\"type\" id=\"language\">
            <option value='Reading'>Czytanie ze zrozumieniem</option>
            <option value='Listening'>Słuchanie ze zrozumieniem</option>
            <option value='Orthography'>Sprawdzian ortografii</option>
        </select>
        </br>
        Nazwa:
        <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\">
        </br>
        Tekst:
        <textarea type=\"text\" name=\"text\" id=\"text\" class=\"form-control\"></textarea>
        </br>
        Język:
        <select class=\"form-control form-control-sm\" name=\"language\" id=\"language\">
            <option>Angielski</option>
            <option>Hiszpański</option>
        </select>
        </br>
         Poziom:
        <select class=\"form-control form-control-sm\" name=\"level\" id=\"level\">
            <option>Bardzo łatwy</option>
            <option>Łatwy</option>
            <option>Średni</option>
            <option>Trudny</option>
        </select>
        </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question1\" id=\"question1\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc1\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer11\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer21\" class=\"form-control\">
        
    </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question2\" id=\"question\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc2\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer12\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer22\" class=\"form-control\">
        
    </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question3\" id=\"question3\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc3\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer13\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer23\" class=\"form-control\">
        
    </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question4\" id=\"question1\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc4\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer14\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer24\" class=\"form-control\">
        
    </br>
        <hr>
        Pytanie:
        <input type=\"text\" name=\"question5\" id=\"question1\" class=\"form-control\">
        </br>
        Odpowiedź prawidłowa:
        <input type=\"text\" name=\"answerc5\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer15\" class=\"form-control\">
        </br>
        Odpowiedź:
        <input type=\"text\" name=\"answer25\" class=\"form-control\">
        </br>
        <button class=\"btn btn-lg btn-primary\" type=\"submit\" name='addText'>
        Dodaj
    </button>
    </div>
    </form>


      </div>
      </div>
      </div>
      </br>

<div class=\"card\">
    <div class=\"card-header\" id=\"headingTree\">
      <h5 class=\"mb-0\">
        <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"false\" aria-controls=\"collapseTree\">
          <h1 class=\"h3 mb-3 font-weight-normal\" style=\"font-family: 'Garamond';\">Użytkownicy</h1>
        </button>
      </h5>
    </div>
    <div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordion\">
      <div class=\"card-body\">

      <div class=\"example-wrapper\" style=\"display: block;
        margin-left: auto;
        margin-right: auto;
        width: 33%;
        border: 0;
        padding-top: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
        padding-left: 30px;
        \">

<table id=\"table_id\" class=\"display\">
  
  {% for user in users %}
  <tbody id=\"myTable\">
  <tr>
   <form name = \"myform\" method=\"POST\">
    <td>{{ user.username }}</td>
    <td style=\"text-align: center;\"><button name=\"usun\" class=\"btn btn-secondary btn-sm\" type=\"submit\" value={{ user.id }} style=\"align: center; font-size: 15px;\" class=\"zsk2\">Usuń</button></td>
    </form>
  </tr>
  
   {% endfor %}  
  </tbody>
</table>

</div>
</br>

<div class=\"navigation\" >
{{ knp_pagination_render(users) }}
</div>
    </div>
</div>
</div>




{% endblock %}
", "paneladmin/index.html.twig", "/sfprojects/jobeet/langlearning/templates/paneladmin/index.html.twig");
    }
}
