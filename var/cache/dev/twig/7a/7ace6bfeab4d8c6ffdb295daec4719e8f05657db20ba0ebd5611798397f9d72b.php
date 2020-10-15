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

/* maleteo.html.twig */
class __TwigTemplate_f9a5771ab55863e1e3b5b3a89ebe1aa44e207fb504bcae94fc5e8faf24b7e5f9 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maleteo.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>

\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
\t</head>
\t<body>
\t\t";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 164
        echo "

\t\t";
        // line 166
        $this->displayBlock('javascripts', $context, $blocks);
        // line 167
        echo "\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
\t\t\t<header class=\"header\">
\t\t\t\t<picture class=\"logo-header\">
\t\t\t\t\t<img src=\"assets/img/logo.svg\" alt=\"Logo de Maleteo\">
\t\t\t\t</picture>
\t\t\t</header>

\t\t\t<section class=\"jumbotron\">
\t\t\t\t<article class=\"transparencia\">
\t\t\t\t\t<p>
\t\t\t\t\t\tGana dinero guardando equipaje a viajetos como tú
\t\t\t\t\t</p>
\t\t\t\t\t<article class=\"store-logo\">

\t\t\t\t\t\t<picture><img src=\"assets/img/app-store.svg\" alt=\"Logo de app store\" class=\"logo-logo\"></picture>

\t\t\t\t\t\t<picture><img src=\"assets/img/google-play.svg\" alt=\"Logo de google play\" class=\"logo-logo\"></picture>

\t\t\t\t\t</article>
\t\t\t\t</article>

\t\t\t</section>
\t\t\t<section class=\"como-funciona\">
\t\t\t\t<article>
\t\t\t\t\t<div class=\"titulo-funciona\">
\t\t\t\t\t\t<p>¿Cómo funciona?</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textos-funciona\">
\t\t\t\t\t\t<div class=\"paso\">
\t\t\t\t\t\t\t<div class=\"paso-circulo\">1</div>
\t\t\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"paso\">
\t\t\t\t\t\t\t<div class=\"paso-circulo\">2</div>
\t\t\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"paso\">
\t\t\t\t\t\t\t<div class=\"paso-circulo\">3</div>
\t\t\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</section>
\t\t\t<section class=\"campo-formulario\">
\t\t\t\t<div class=\"mobile\">
\t\t\t\t\t<img src=\"assets/img/iPhoneX.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"formulario\">
\t\t\t\t\t<form
\t\t\t\t\t\tid=\"registro\" name=\"registro\">
\t\t\t\t\t\t<!--onsubmit=\"return validarAlEnviar()\"-->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"titulo-medio\">Solicita una demo</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"name\">Nombre:</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"nombre\" placeholder=\"Vicent Chase\" required=\"required\" class=\"form-input\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"name\">Apellidos:</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"apellido\" placeholder=\"Vicent Chase\" required=\"required\" class=\"form-input\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p id=\"errorApellido\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"name\">Email:</label>
\t\t\t\t\t\t\t<input type=\"email\" id=\"email\" placeholder=\"blabla@bla.bla\" required=\"required\" class=\"form-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p>Ciudad:
\t\t\t\t\t\t\t\t<select name=\"Ciudad\" id=\"Ciudad\">
\t\t\t\t\t\t\t\t\t<option value=\"Madrid\" selected>Madrid</option>
\t\t\t\t\t\t\t\t\t<option value=\"Barcelona\" selected>Barcelona</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sevilla\" selected>Sevilla</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p><input style=\"display: inline;\" type=\"checkbox\" name=\"politica\" required=\"required\">Aceptas la
\t\t\t\t\t\t\t<a href=\"#\">politica de privacidad</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button id=\"boton\" type=\"submit\">Enviar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"opiniones\">
\t\t\t\t<title>Opiniones de otros guardianes</title>
\t\t\t\t<article class=\"texto-opiniones\">
\t\t\t\t\t<article class=\"texto\">
\t\t\t\t\t\t<article class=\"texto-solo\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<p>Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"texto-id\">
\t\t\t\t\t\t\t<p>Sergio Gamacho</p>
\t\t\t\t\t\t\t<p>Tetuán, Madrid</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"texto\">
\t\t\t\t\t\t<article class=\"texto-solo\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<p>Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"texto-id\">
\t\t\t\t\t\t\t<p>Sergio Gamacho</p>
\t\t\t\t\t\t\t<p>Tetuán, Madrid</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"texto\">
\t\t\t\t\t\t<article class=\"texto-solo\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<p>Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"texto-id\">
\t\t\t\t\t\t\t<p>Sergio Gamacho</p>
\t\t\t\t\t\t\t<p>Tetuán, Madrid</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t</article>
\t\t\t\t</article>
\t\t\t</section>

\t\t\t<footer>
\t\t\t\t<div class=\"logo-footer\">
\t\t\t\t\t<img src=\"assets/img/logo.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"creado-por\">
\t\t\t\t\t<h3>
\t\t\t\t\t\t<strong>Hecho por Alexander en Madrid</strong>
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</footer>


\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 166
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "maleteo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  270 => 166,  117 => 17,  110 => 16,  102 => 11,  95 => 10,  81 => 6,  72 => 167,  70 => 166,  66 => 164,  64 => 16,  59 => 13,  57 => 10,  53 => 8,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>

\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t\t{% endblock %}

\t</head>
\t<body>
\t\t{% block body %}

\t\t\t<header class=\"header\">
\t\t\t\t<picture class=\"logo-header\">
\t\t\t\t\t<img src=\"assets/img/logo.svg\" alt=\"Logo de Maleteo\">
\t\t\t\t</picture>
\t\t\t</header>

\t\t\t<section class=\"jumbotron\">
\t\t\t\t<article class=\"transparencia\">
\t\t\t\t\t<p>
\t\t\t\t\t\tGana dinero guardando equipaje a viajetos como tú
\t\t\t\t\t</p>
\t\t\t\t\t<article class=\"store-logo\">

\t\t\t\t\t\t<picture><img src=\"assets/img/app-store.svg\" alt=\"Logo de app store\" class=\"logo-logo\"></picture>

\t\t\t\t\t\t<picture><img src=\"assets/img/google-play.svg\" alt=\"Logo de google play\" class=\"logo-logo\"></picture>

\t\t\t\t\t</article>
\t\t\t\t</article>

\t\t\t</section>
\t\t\t<section class=\"como-funciona\">
\t\t\t\t<article>
\t\t\t\t\t<div class=\"titulo-funciona\">
\t\t\t\t\t\t<p>¿Cómo funciona?</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"textos-funciona\">
\t\t\t\t\t\t<div class=\"paso\">
\t\t\t\t\t\t\t<div class=\"paso-circulo\">1</div>
\t\t\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"paso\">
\t\t\t\t\t\t\t<div class=\"paso-circulo\">2</div>
\t\t\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"paso\">
\t\t\t\t\t\t\t<div class=\"paso-circulo\">3</div>
\t\t\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</section>
\t\t\t<section class=\"campo-formulario\">
\t\t\t\t<div class=\"mobile\">
\t\t\t\t\t<img src=\"assets/img/iPhoneX.png\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"formulario\">
\t\t\t\t\t<form
\t\t\t\t\t\tid=\"registro\" name=\"registro\">
\t\t\t\t\t\t<!--onsubmit=\"return validarAlEnviar()\"-->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p class=\"titulo-medio\">Solicita una demo</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"name\">Nombre:</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"nombre\" placeholder=\"Vicent Chase\" required=\"required\" class=\"form-input\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"name\">Apellidos:</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"apellido\" placeholder=\"Vicent Chase\" required=\"required\" class=\"form-input\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p id=\"errorApellido\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"name\">Email:</label>
\t\t\t\t\t\t\t<input type=\"email\" id=\"email\" placeholder=\"blabla@bla.bla\" required=\"required\" class=\"form-input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p>Ciudad:
\t\t\t\t\t\t\t\t<select name=\"Ciudad\" id=\"Ciudad\">
\t\t\t\t\t\t\t\t\t<option value=\"Madrid\" selected>Madrid</option>
\t\t\t\t\t\t\t\t\t<option value=\"Barcelona\" selected>Barcelona</option>
\t\t\t\t\t\t\t\t\t<option value=\"Sevilla\" selected>Sevilla</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p><input style=\"display: inline;\" type=\"checkbox\" name=\"politica\" required=\"required\">Aceptas la
\t\t\t\t\t\t\t<a href=\"#\">politica de privacidad</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button id=\"boton\" type=\"submit\">Enviar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"opiniones\">
\t\t\t\t<title>Opiniones de otros guardianes</title>
\t\t\t\t<article class=\"texto-opiniones\">
\t\t\t\t\t<article class=\"texto\">
\t\t\t\t\t\t<article class=\"texto-solo\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<p>Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"texto-id\">
\t\t\t\t\t\t\t<p>Sergio Gamacho</p>
\t\t\t\t\t\t\t<p>Tetuán, Madrid</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"texto\">
\t\t\t\t\t\t<article class=\"texto-solo\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<p>Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"texto-id\">
\t\t\t\t\t\t\t<p>Sergio Gamacho</p>
\t\t\t\t\t\t\t<p>Tetuán, Madrid</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t</article>
\t\t\t\t\t<article class=\"texto\">
\t\t\t\t\t\t<article class=\"texto-solo\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<p>Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios</p>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"texto-id\">
\t\t\t\t\t\t\t<p>Sergio Gamacho</p>
\t\t\t\t\t\t\t<p>Tetuán, Madrid</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t</article>
\t\t\t\t</article>
\t\t\t</section>

\t\t\t<footer>
\t\t\t\t<div class=\"logo-footer\">
\t\t\t\t\t<img src=\"assets/img/logo.svg\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"creado-por\">
\t\t\t\t\t<h3>
\t\t\t\t\t\t<strong>Hecho por Alexander en Madrid</strong>
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</footer>


\t\t{% endblock %}


\t\t{% block javascripts %}{% endblock %}
\t</body>
</html>
", "maleteo.html.twig", "/application/templates/maleteo.html.twig");
    }
}
