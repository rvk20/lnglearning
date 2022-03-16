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

/* style.css */
class __TwigTemplate_4e66878611360579c9c96a54b8cc4a7acfeb7e85889db665e542934e721bfbba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "style.css"));

        // line 1
        echo "
@import url('https://fonts.googleapis.com/css2?family=Handlee&family=Patrick+Hand&family=Sriracha&display=swap');

body{
\tmargin: 0;
\tfont-family: 'Sriracha', sans-serif;
}

p, blockquote {
\tfont-size: .9em;
\tline-height: 1.6em;
}

ul{
\tlist-style-type : none;
\tmargin: 0;
\tpadding: 0;
}

.contener{
\ttext-align: center;
\tpadding: .8em 1.2em;
}

.logo{
\twidth: 50px;
\tposition: absolute;
\tleft: 10px;
}

.logo1{
\tposition: relative;
\tleft: 5px;
\twidth: 35px;
}

header{
display: flex;
justify-content: space-between;\t
}

.hide-mobile{ 
\tdisplay: none;
}

.menu {
\twidth: 25px;
\tmargin-top: 40%;
}

h1, .subhead{
\tfont-size: 2em;
}

.green-contener{
\twidth: 100%;
\tbackground: #23c465;
\tcolor: white;
\tmargin-top: 10%;
\tpadding: 4em 0;
\tborder-top-left-radius: 40px;
\ttransform: skewY(-2deg);
}

.green-contener ul{
\ttransform: skewY(2deg);
}

.green-contener ul li{
\tmargin-bottom: 3em;
}

.green-contener ul li p{
\tpadding: 0 .5em;
}

h2{
\tmargin-top: 7%;
}


.zsk{
\tbackground: #2f6ced;
\twidth: calc(100% - 1em);
\tdisplay: block;
\tcolor: white;
\tborder-radius:20px;
\tpadding: .5em;
\ttext-decoration: none;
\tfont-size: 1.5em;
\tmargin: 4% auto 7%;
\tposition: relative;
}

.footer-logowanie{
\tbackground: #d9d9d9;
\tbackground: #2b2b2b;
\tcolor: white;
\tpadding: 3em 0;
\tposition: absolute;
\tbottom: 0;
\twidth: 100%;

}

.footer-contener{
\tbackground: #d9d9d9;
\tbackground: #2b2b2b;
\tcolor: white;
\tpadding: 3em 0;
}

ul.footer-link {
\tmargin: 0 auto;
}

ul.footer-link li{
\tdisplay: inline-block;
}

ul.footer-link li a{
\tcolor: #adb4ba;
}

nav ul {
\tposition: fixed;
\twidth: 60%;
\ttop: 0;
\tright: 0;
\ttext-align: left;
\tbackground: #333333;
\theight: 100%;
\tz-index: 7;
\tpadding-top: 3em;
\topacity: 0.97;
}


nav ul li a{
\tcolor: white;
\ttext-decoration: none;
\tdisplay: block;
\twidth: 100%;
\tpadding: 1em 2em;
\tbackground-color: #707070;
}


nav ul li a:hover{
\tbackground-color: #b4b6b8
}

.exit-menu{
\tmargin-bottom: 1em;
\tmargin-top: -1.3em;
\ttext-align: right;
\tpadding: 0 1.4em;
}

.exit-menu img{
\twidth : 15px;
\tcursor: pointer;
}

.glowna{
\ttext-align: center;
\theight: 350px;
}
.glowna h1{
\tfont-size: 2em;
\tpadding-top: 10px;
\tpadding-bottom: 10px;
}
.glowna a{
\tcolor: black;
\tdisplay: block;
\tmargin: -5% auto;
}


.contener-table{
\t
\ttext-align: center; 
\t border-collapse: collapse;
\t margin: 25px 0;
\t font-size: 0.9em;
\t min-width: 400px;
}
.contener-table thead tr{
\tbackground-color: rgb(35, 196, 101);
\tcolor: #ffffff;
\ttext-align: left;
\tfont-weight: bold;
}

.contener-table th,
.contener-table td{
\tpadding: 12px 15px; 
}

.contener-table tbody tr{
\tborder-bottom: 1px solid #dddddd;
}

.contener-table tbody tr:nth-of-type(even){
\tbackground-color: #f3f3f3;\t
}

.tabela .calosc{
border-width: 1px;
border-style: solid;
border-color: black;
margin-left: 7%;
margin-right: 7%;
font-size: 20px;
padding-top:  0px;
}

.tabela .zsk2{
\tbackground: #23c465;
\twidth: calc(100% - 1em);
\twidth: 14%;
\tdisplay: block;
\tcolor: white;
\tborder-radius:20px;
\tpadding: .5em;
\ttext-decoration: none;
\tfont-size: 1em;
\tmargin: 4% auto 7%;
\tposition: relative;
}

.zaloguj{
\tbackground: #23c465;
\twidth: 220px;
\tdisplay: block;
\tcolor: white;
\tborder: none;
\tborder-radius:20px;
\tpadding: .5em;
\ttext-decoration: none;
\tfont-size: 1.5em;
\tmargin: 1% auto 7%;
\tposition: relative;
\t
}

#login{
\tdisplay: block;
\tposition:relative; 
\ttop: -10px;
\t
}
.haslo{
\tdisplay: block;
\tposition:relative; 
\ttop:2%;
}

@media only screen and (min-width: 650px){
\t
\th1{
\t\tfont-size: 3em;
\t\tpadding: 0;
\t\t
\t}
\t.logo{
\t\twidth: 55px;
\t}
\t.przypis{
\t\tfont-size: 1.4em;
\t\tmargin-bottom: 3%;
\t}
\t
\t.green-contener {
\t\tmargin: 0;\t\t
\t}
\t
\t.green-contener ul{
\t\tdisplay: flex;
\t\tmargin-top: -1em;
\t\talign-items: center;
\t}
\t.green-contener ul li{
\t\tmargin-bottom: 0;
\t}
\t.green-contener ul li p{
\t\tpadding: 0 .8em;
\t}
\t.tabela .calosc{

\tmargin-left: 15%;
\tmargin-right: 15%;
}

}

@media only screen and (min-width: 875px){

\t.logo{
\t\twidth: 60px;
\t}
\t.przypis{
\t\tmargin-bottom: 3%;
\t}
\t.green-contener ul{
\t\tmargin: 0 0 4% 0;
\t}
\tnav ul li a:hover{
\t\tbackground-color: inherit;
\t}
\t.tabela .calosc{

\tmargin-left: 20%;
\tmargin-right: 20%;
\t}
}
@media only screen and (min-width: 1329px){
\t.logo{
\t\twidth: 70px;
\t}
\t.zsk{
\t\twidth: 50%;
\t}
\t
\t.zaloguj{
\t\twidth:15%;
\t}
\t
\t.contener{
\t\twidth: 80%;
\t\tmargin: 0 auto;
\t}
\t
\t.show-desktop{
\t\tdisplay: block;
\t\tmargin: 0 auto 13% auto;
\t}
\t.hide-desktop{
\t\tdisplay: none;
\t}
\tnav ul{
\t\tposition: inherit;
\t\twidth: auto;
\t\tbackground: none;
\t\theight: auto;
\t\tdisplay: flex;
\t\tpadding-top: 0;
\t}
\t
\tnav ul li{
\t\tfloat: left;
\t}
\t
\tnav ul li a{
\t\tcolor: black;
\t\tbackground-color: inherit;
\t\ttext-align: center;
\t\tpadding: 0;
\t\tmargin: 1em 1em;
\t\t
\t}
\t
\tnav ul li a:hover{
\t\tbackground-color: inherit;
\t}
\t
\t.tabela .calosc{

\tmargin-left: 20%;
\tmargin-right: 20%;
}
\t
}

@media only screen and (min-width: 1600px){
\t.contener{
\t\twidth: 70%;
\t}
\t
\t.green-contener{
\t\tpadding: 7em 0 2em;
\t}
\t.green-contener ul li p, blockquote{
\t\tfont-size: 1.3em;
\t}
\t
\th2{
\t\tmargin-top: 4em;
\t}
\t.tabela .calosc{

\tmargin-left: 30%;
\tmargin-right: 30%;
}
\t
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
@import url('https://fonts.googleapis.com/css2?family=Handlee&family=Patrick+Hand&family=Sriracha&display=swap');

body{
\tmargin: 0;
\tfont-family: 'Sriracha', sans-serif;
}

p, blockquote {
\tfont-size: .9em;
\tline-height: 1.6em;
}

ul{
\tlist-style-type : none;
\tmargin: 0;
\tpadding: 0;
}

.contener{
\ttext-align: center;
\tpadding: .8em 1.2em;
}

.logo{
\twidth: 50px;
\tposition: absolute;
\tleft: 10px;
}

.logo1{
\tposition: relative;
\tleft: 5px;
\twidth: 35px;
}

header{
display: flex;
justify-content: space-between;\t
}

.hide-mobile{ 
\tdisplay: none;
}

.menu {
\twidth: 25px;
\tmargin-top: 40%;
}

h1, .subhead{
\tfont-size: 2em;
}

.green-contener{
\twidth: 100%;
\tbackground: #23c465;
\tcolor: white;
\tmargin-top: 10%;
\tpadding: 4em 0;
\tborder-top-left-radius: 40px;
\ttransform: skewY(-2deg);
}

.green-contener ul{
\ttransform: skewY(2deg);
}

.green-contener ul li{
\tmargin-bottom: 3em;
}

.green-contener ul li p{
\tpadding: 0 .5em;
}

h2{
\tmargin-top: 7%;
}


.zsk{
\tbackground: #2f6ced;
\twidth: calc(100% - 1em);
\tdisplay: block;
\tcolor: white;
\tborder-radius:20px;
\tpadding: .5em;
\ttext-decoration: none;
\tfont-size: 1.5em;
\tmargin: 4% auto 7%;
\tposition: relative;
}

.footer-logowanie{
\tbackground: #d9d9d9;
\tbackground: #2b2b2b;
\tcolor: white;
\tpadding: 3em 0;
\tposition: absolute;
\tbottom: 0;
\twidth: 100%;

}

.footer-contener{
\tbackground: #d9d9d9;
\tbackground: #2b2b2b;
\tcolor: white;
\tpadding: 3em 0;
}

ul.footer-link {
\tmargin: 0 auto;
}

ul.footer-link li{
\tdisplay: inline-block;
}

ul.footer-link li a{
\tcolor: #adb4ba;
}

nav ul {
\tposition: fixed;
\twidth: 60%;
\ttop: 0;
\tright: 0;
\ttext-align: left;
\tbackground: #333333;
\theight: 100%;
\tz-index: 7;
\tpadding-top: 3em;
\topacity: 0.97;
}


nav ul li a{
\tcolor: white;
\ttext-decoration: none;
\tdisplay: block;
\twidth: 100%;
\tpadding: 1em 2em;
\tbackground-color: #707070;
}


nav ul li a:hover{
\tbackground-color: #b4b6b8
}

.exit-menu{
\tmargin-bottom: 1em;
\tmargin-top: -1.3em;
\ttext-align: right;
\tpadding: 0 1.4em;
}

.exit-menu img{
\twidth : 15px;
\tcursor: pointer;
}

.glowna{
\ttext-align: center;
\theight: 350px;
}
.glowna h1{
\tfont-size: 2em;
\tpadding-top: 10px;
\tpadding-bottom: 10px;
}
.glowna a{
\tcolor: black;
\tdisplay: block;
\tmargin: -5% auto;
}


.contener-table{
\t
\ttext-align: center; 
\t border-collapse: collapse;
\t margin: 25px 0;
\t font-size: 0.9em;
\t min-width: 400px;
}
.contener-table thead tr{
\tbackground-color: rgb(35, 196, 101);
\tcolor: #ffffff;
\ttext-align: left;
\tfont-weight: bold;
}

.contener-table th,
.contener-table td{
\tpadding: 12px 15px; 
}

.contener-table tbody tr{
\tborder-bottom: 1px solid #dddddd;
}

.contener-table tbody tr:nth-of-type(even){
\tbackground-color: #f3f3f3;\t
}

.tabela .calosc{
border-width: 1px;
border-style: solid;
border-color: black;
margin-left: 7%;
margin-right: 7%;
font-size: 20px;
padding-top:  0px;
}

.tabela .zsk2{
\tbackground: #23c465;
\twidth: calc(100% - 1em);
\twidth: 14%;
\tdisplay: block;
\tcolor: white;
\tborder-radius:20px;
\tpadding: .5em;
\ttext-decoration: none;
\tfont-size: 1em;
\tmargin: 4% auto 7%;
\tposition: relative;
}

.zaloguj{
\tbackground: #23c465;
\twidth: 220px;
\tdisplay: block;
\tcolor: white;
\tborder: none;
\tborder-radius:20px;
\tpadding: .5em;
\ttext-decoration: none;
\tfont-size: 1.5em;
\tmargin: 1% auto 7%;
\tposition: relative;
\t
}

#login{
\tdisplay: block;
\tposition:relative; 
\ttop: -10px;
\t
}
.haslo{
\tdisplay: block;
\tposition:relative; 
\ttop:2%;
}

@media only screen and (min-width: 650px){
\t
\th1{
\t\tfont-size: 3em;
\t\tpadding: 0;
\t\t
\t}
\t.logo{
\t\twidth: 55px;
\t}
\t.przypis{
\t\tfont-size: 1.4em;
\t\tmargin-bottom: 3%;
\t}
\t
\t.green-contener {
\t\tmargin: 0;\t\t
\t}
\t
\t.green-contener ul{
\t\tdisplay: flex;
\t\tmargin-top: -1em;
\t\talign-items: center;
\t}
\t.green-contener ul li{
\t\tmargin-bottom: 0;
\t}
\t.green-contener ul li p{
\t\tpadding: 0 .8em;
\t}
\t.tabela .calosc{

\tmargin-left: 15%;
\tmargin-right: 15%;
}

}

@media only screen and (min-width: 875px){

\t.logo{
\t\twidth: 60px;
\t}
\t.przypis{
\t\tmargin-bottom: 3%;
\t}
\t.green-contener ul{
\t\tmargin: 0 0 4% 0;
\t}
\tnav ul li a:hover{
\t\tbackground-color: inherit;
\t}
\t.tabela .calosc{

\tmargin-left: 20%;
\tmargin-right: 20%;
\t}
}
@media only screen and (min-width: 1329px){
\t.logo{
\t\twidth: 70px;
\t}
\t.zsk{
\t\twidth: 50%;
\t}
\t
\t.zaloguj{
\t\twidth:15%;
\t}
\t
\t.contener{
\t\twidth: 80%;
\t\tmargin: 0 auto;
\t}
\t
\t.show-desktop{
\t\tdisplay: block;
\t\tmargin: 0 auto 13% auto;
\t}
\t.hide-desktop{
\t\tdisplay: none;
\t}
\tnav ul{
\t\tposition: inherit;
\t\twidth: auto;
\t\tbackground: none;
\t\theight: auto;
\t\tdisplay: flex;
\t\tpadding-top: 0;
\t}
\t
\tnav ul li{
\t\tfloat: left;
\t}
\t
\tnav ul li a{
\t\tcolor: black;
\t\tbackground-color: inherit;
\t\ttext-align: center;
\t\tpadding: 0;
\t\tmargin: 1em 1em;
\t\t
\t}
\t
\tnav ul li a:hover{
\t\tbackground-color: inherit;
\t}
\t
\t.tabela .calosc{

\tmargin-left: 20%;
\tmargin-right: 20%;
}
\t
}

@media only screen and (min-width: 1600px){
\t.contener{
\t\twidth: 70%;
\t}
\t
\t.green-contener{
\t\tpadding: 7em 0 2em;
\t}
\t.green-contener ul li p, blockquote{
\t\tfont-size: 1.3em;
\t}
\t
\th2{
\t\tmargin-top: 4em;
\t}
\t.tabela .calosc{

\tmargin-left: 30%;
\tmargin-right: 30%;
}
\t
}
", "style.css", "/sfprojects/jobeet/langlearning/templates/style.css");
    }
}
