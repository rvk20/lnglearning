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

/* wordteststart/index.html.twig */
class __TwigTemplate_cb8a89a4e74415c1a38248b292d37b17630705610071f9046e8573415cf2112f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wordteststart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wordteststart/index.html.twig"));

        $this->parent = $this->loadTemplate("baseuser.html.twig", "wordteststart/index.html.twig", 1);
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

        echo "Test słówek";
        
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

<div class=\"example-wrapper\" style=\"display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \"> 

<div style=\"text-align: center;\tpadding: .8em 1.2em;\">
    <h1> ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " </h1>
    </br>
    <form name = \"myform\" autocomplete=\"off\" method=\"POST\">
    <input name=\"answer\" type=\"text\" id=\"txtName\"/>
    </br>
    </br>
    <button name=\"submit\" type=\"submit\" class=\"btn btn-lg btn-primary\" style=\"align: center; font-size: 15px;\">OK</button>
    </form>
    </br>
    <p style=\"font-size:160%;\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "
    </br>
    ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["mark"]) || array_key_exists("mark", $context) ? $context["mark"] : (function () { throw new RuntimeError('Variable "mark" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "
    </br>
    </p>
   <p style=\"color:red; font-size:160%;\"> ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["correctansword"]) || array_key_exists("correctansword", $context) ? $context["correctansword"] : (function () { throw new RuntimeError('Variable "correctansword" does not exist.', 39, $this->source); })()), "html", null, true);
        echo " </p>
   
 



</div>
 
</div>
<div class=\"example-wrapper\" style=\"display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \"> 
<div style=\"text-align: center;\tpadding: .8em 1.2em;\">
Wybierz głos:
</br>
</br>
<select id='voiceList'></select> <br><br>
 
<button id='btnSpeak' class=\"btn btn-info\" >Mów!</button>
</div>
   </div>  
 <script>
       
        var btnSpeak = document.querySelector('#btnSpeak');
        var voiceList = document.querySelector('#voiceList');
        var synth = window.speechSynthesis;
        var voices = [];
        var lang = \"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\";
        PopulateVoices();
        if(speechSynthesis !== undefined){
            speechSynthesis.onvoiceschanged = PopulateVoices;
        }

        btnSpeak.addEventListener('click', ()=> {
            var toSpeak = new SpeechSynthesisUtterance(\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["correctansword"]) || array_key_exists("correctansword", $context) ? $context["correctansword"] : (function () { throw new RuntimeError('Variable "correctansword" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "\");
            var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
            voices.forEach((voice)=>{
                if(voice.name === selectedVoiceName){
                    toSpeak.voice = voice;
                }
            });
            synth.speak(toSpeak);
        });
  
        function PopulateVoices(){
            voices = synth.getVoices();
            var selectedIndex = voiceList.selectedIndex < 0 ? 0 : voiceList.selectedIndex;
            voiceList.innerHTML = '';
            voices.forEach((voice)=>{
              if(lang == \"Angielski\")
                {
                  if(voice.name == \"English (Scotland)\" || voice.name == \"English (Great Britain)\" || voice.name == \"English (America)\" || voice.name == \"English (Caribbean)\" || voice.name == \"English (Received Pronunciation)\" || voice.name == \"English (Lancaster)\" || voice.name == \"English (West Midlands)\")
                  {
                  var listItem = document.createElement('option');
                  listItem.textContent = voice.name;
                  listItem.setAttribute('data-lang', voice.lang);
                  listItem.setAttribute('data-name', voice.name);
                  voiceList.appendChild(listItem);
                  }
                }
              else if(lang == \"Hiszpański\")
              {
                  if(voice.name == \"Spanish (Latin America)\" || voice.name == \"Spanish (Spain)\" )
                  {
                  var listItem = document.createElement('option');
                  listItem.textContent = voice.name;
                  listItem.setAttribute('data-lang', voice.lang);
                  listItem.setAttribute('data-name', voice.name);
                  voiceList.appendChild(listItem);
                  }
              }
              
              
            });

            voiceList.selectedIndex = selectedIndex;
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wordteststart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 82,  171 => 75,  132 => 39,  126 => 36,  121 => 34,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseuser.html.twig' %}

{% block title %}Test słówek{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\" style=\"display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \"> 

<div style=\"text-align: center;\tpadding: .8em 1.2em;\">
    <h1> {{ question }} </h1>
    </br>
    <form name = \"myform\" autocomplete=\"off\" method=\"POST\">
    <input name=\"answer\" type=\"text\" id=\"txtName\"/>
    </br>
    </br>
    <button name=\"submit\" type=\"submit\" class=\"btn btn-lg btn-primary\" style=\"align: center; font-size: 15px;\">OK</button>
    </form>
    </br>
    <p style=\"font-size:160%;\">{{ answer }}
    </br>
    {{ mark }}
    </br>
    </p>
   <p style=\"color:red; font-size:160%;\"> {{ correctansword }} </p>
   
 



</div>
 
</div>
<div class=\"example-wrapper\" style=\"display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \"> 
<div style=\"text-align: center;\tpadding: .8em 1.2em;\">
Wybierz głos:
</br>
</br>
<select id='voiceList'></select> <br><br>
 
<button id='btnSpeak' class=\"btn btn-info\" >Mów!</button>
</div>
   </div>  
 <script>
       
        var btnSpeak = document.querySelector('#btnSpeak');
        var voiceList = document.querySelector('#voiceList');
        var synth = window.speechSynthesis;
        var voices = [];
        var lang = \"{{language}}\";
        PopulateVoices();
        if(speechSynthesis !== undefined){
            speechSynthesis.onvoiceschanged = PopulateVoices;
        }

        btnSpeak.addEventListener('click', ()=> {
            var toSpeak = new SpeechSynthesisUtterance(\"{{correctansword}}\");
            var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
            voices.forEach((voice)=>{
                if(voice.name === selectedVoiceName){
                    toSpeak.voice = voice;
                }
            });
            synth.speak(toSpeak);
        });
  
        function PopulateVoices(){
            voices = synth.getVoices();
            var selectedIndex = voiceList.selectedIndex < 0 ? 0 : voiceList.selectedIndex;
            voiceList.innerHTML = '';
            voices.forEach((voice)=>{
              if(lang == \"Angielski\")
                {
                  if(voice.name == \"English (Scotland)\" || voice.name == \"English (Great Britain)\" || voice.name == \"English (America)\" || voice.name == \"English (Caribbean)\" || voice.name == \"English (Received Pronunciation)\" || voice.name == \"English (Lancaster)\" || voice.name == \"English (West Midlands)\")
                  {
                  var listItem = document.createElement('option');
                  listItem.textContent = voice.name;
                  listItem.setAttribute('data-lang', voice.lang);
                  listItem.setAttribute('data-name', voice.name);
                  voiceList.appendChild(listItem);
                  }
                }
              else if(lang == \"Hiszpański\")
              {
                  if(voice.name == \"Spanish (Latin America)\" || voice.name == \"Spanish (Spain)\" )
                  {
                  var listItem = document.createElement('option');
                  listItem.textContent = voice.name;
                  listItem.setAttribute('data-lang', voice.lang);
                  listItem.setAttribute('data-name', voice.name);
                  voiceList.appendChild(listItem);
                  }
              }
              
              
            });

            voiceList.selectedIndex = selectedIndex;
        }
    </script>

{% endblock %}
", "wordteststart/index.html.twig", "/sfprojects/jobeet/langlearning/templates/wordteststart/index.html.twig");
    }
}
