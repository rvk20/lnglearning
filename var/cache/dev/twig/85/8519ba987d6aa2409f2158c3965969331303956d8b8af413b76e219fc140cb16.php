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

/* listeningcomp/test.html.twig */
class __TwigTemplate_128cc45a3534f0e1ea37b1a91cabba49cffd930d37644ba49c772fb3bface31d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listeningcomp/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listeningcomp/test.html.twig"));

        $this->parent = $this->loadTemplate("baseuser.html.twig", "listeningcomp/test.html.twig", 1);
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

        echo "Sprawdzian słuchania";
        
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
        echo "
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






<select id='voiceList' style=\"display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;\"></select> <br><br>
 
<button id='btnSpeak' class=\"btn btn-primary btn-lg btn-block\" >Czytaj</button>
</br>
</br>
</br>

<form name = \"myform\" autocomplete=\"off\" method=\"POST\">
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 42
            echo "<b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 42), "html", null, true);
            echo "</b>
</br>
</br>
<input type=\"radio\" name=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "correct1", [], "any", false, false, false, 45), "html", null, true);
            echo "\" class=\"form-check-input\"><label class=\"form-check-label\" for=\"exampleCheck1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "answer1", [], "any", false, false, false, 45), "html", null, true);
            echo "</label>
</br>
</br>
<input type=\"radio\" name=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "correct2", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"form-check-input\"><label class=\"form-check-label\" for=\"exampleCheck1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "answer2", [], "any", false, false, false, 48), "html", null, true);
            echo "</label>
</br>
</br>
<input type=\"radio\" name=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "correct3", [], "any", false, false, false, 51), "html", null, true);
            echo "\" class=\"form-check-input\"><label class=\"form-check-label\" for=\"exampleCheck1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "answer3", [], "any", false, false, false, 51), "html", null, true);
            echo "</label>
</br>
</br>
</br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo " 
<button name=\"submit\" type=\"submit\" class=\"btn btn-lg btn-primary\" style=\"display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;\">Zapisz</button>
    </form> 

</div>

</div>
   </div>  
 <script>
       
        var btnSpeak = document.querySelector('#btnSpeak');
        var voiceList = document.querySelector('#voiceList');
        var synth = window.speechSynthesis;
        var voices = [];
        var lang = \"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\";
        vcs();
        if(speechSynthesis !== undefined){
            speechSynthesis.onvoiceschanged = vcs;
        }

        btnSpeak.addEventListener('click', ()=> {
            var toSpeak = new SpeechSynthesisUtterance(\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "\");
            var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
            voices.forEach((voice)=>{
                if(voice.name === selectedVoiceName){
                    toSpeak.voice = voice;
                }
            });
            synth.speak(toSpeak);
        });
  
        function vcs(){
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
        return "listeningcomp/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 79,  190 => 72,  171 => 55,  156 => 51,  146 => 48,  136 => 45,  129 => 42,  125 => 41,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseuser.html.twig' %}

{% block title %}Sprawdzian słuchania{% endblock %}

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






<select id='voiceList' style=\"display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;\"></select> <br><br>
 
<button id='btnSpeak' class=\"btn btn-primary btn-lg btn-block\" >Czytaj</button>
</br>
</br>
</br>

<form name = \"myform\" autocomplete=\"off\" method=\"POST\">
{% for q in quiz %}
<b>{{q.question}}</b>
</br>
</br>
<input type=\"radio\" name=\"{{q.id}}\" value=\"{{q.correct1}}\" class=\"form-check-input\"><label class=\"form-check-label\" for=\"exampleCheck1\">{{q.answer1}}</label>
</br>
</br>
<input type=\"radio\" name=\"{{q.id}}\" value=\"{{q.correct2}}\" class=\"form-check-input\"><label class=\"form-check-label\" for=\"exampleCheck1\">{{q.answer2}}</label>
</br>
</br>
<input type=\"radio\" name=\"{{q.id}}\" value=\"{{q.correct3}}\" class=\"form-check-input\"><label class=\"form-check-label\" for=\"exampleCheck1\">{{q.answer3}}</label>
</br>
</br>
</br>
{% endfor %} 
<button name=\"submit\" type=\"submit\" class=\"btn btn-lg btn-primary\" style=\"display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;\">Zapisz</button>
    </form> 

</div>

</div>
   </div>  
 <script>
       
        var btnSpeak = document.querySelector('#btnSpeak');
        var voiceList = document.querySelector('#voiceList');
        var synth = window.speechSynthesis;
        var voices = [];
        var lang = \"{{language}}\";
        vcs();
        if(speechSynthesis !== undefined){
            speechSynthesis.onvoiceschanged = vcs;
        }

        btnSpeak.addEventListener('click', ()=> {
            var toSpeak = new SpeechSynthesisUtterance(\"{{text}}\");
            var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
            voices.forEach((voice)=>{
                if(voice.name === selectedVoiceName){
                    toSpeak.voice = voice;
                }
            });
            synth.speak(toSpeak);
        });
  
        function vcs(){
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
", "listeningcomp/test.html.twig", "/sfprojects/jobeet/langlearning/templates/listeningcomp/test.html.twig");
    }
}
