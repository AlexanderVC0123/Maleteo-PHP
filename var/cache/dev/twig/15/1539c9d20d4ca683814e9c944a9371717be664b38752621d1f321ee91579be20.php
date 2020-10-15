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
class __TwigTemplate_d2b1109318a91103cadfc76d48991d774a9d51194c79e0358a2a3459b6aa3750 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maleteo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maleteo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t<link rel=\"stylesheet\" href=\"css/style.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
\t<header class=\"header\">
\t\t<picture class=\"logo-header\">
\t\t\t<img src=\"assets/img/logo.svg\" alt=\"Logo de Maleteo\">
\t\t</picture>
\t</header>

\t<section class=\"jumbotron\">
\t\t<article class=\"transparencia\">
\t\t\t<p>
\t\t\t\tGana dinero guardando equipaje a viajetos como tú
\t\t\t</p>
\t\t\t<article class=\"store-logo\">

\t\t\t\t<picture><img src=\"assets/img/app-store.svg\" alt=\"Logo de app store\" class=\"logo-logo\"></picture>

\t\t\t\t<picture><img src=\"assets/img/google-play.svg\" alt=\"Logo de google play\" class=\"logo-logo\"></picture>

\t\t\t</article>
\t\t</article>

\t</section>
\t<section class=\"como-funciona\">
\t\t<article>
\t\t\t<div class=\"titulo-funciona\">
\t\t\t\t<p>¿Cómo funciona?</p>
\t\t\t</div>
\t\t\t<div class=\"textos-funciona\">
\t\t\t\t<div class=\"paso\">
\t\t\t\t\t<div class=\"paso-circulo\">1</div>
\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"paso\">
\t\t\t\t\t<div class=\"paso-circulo\">2</div>
\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"paso\">
\t\t\t\t\t<div class=\"paso-circulo\">3</div>
\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</article>
\t</section>
\t<section class=\"campo-formulario\">
\t\t<div class=\"mobile\">
\t\t\t<img src=\"assets/img/iPhoneX.png\" alt=\"\" class=\"img-mobile\">
\t\t</div>
\t\t<div class=\"formulario\">
\t\t\t<form id=\"registro\" name=\"registro\">

\t\t\t\t<div>
\t\t\t\t\t<p class=\"titulo-solicita\">Solicita una demo</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"name\">Nombre:</label>
\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre\" required=\"required\" class=\"form-input\">

\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"name\">Apellidos:</label>
\t\t\t\t\t<input type=\"text\" id=\"apellidos\" name=\"apellidos\" placeholder=\"Apellidos\" required=\"required\" class=\"form-input\">

\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<label for=\"name\">Email:</label>
\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" placeholder=\"blabla@bla.bla\" required=\"required\" class=\"form-input\">
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<p>Ciudad:
\t\t\t\t\t\t<select name=\"ciudad\" id=\"Ciudad\" class=\"select-city\">
\t\t\t\t\t\t\t<option value=\"Madrid\" selected>Madrid</option>
\t\t\t\t\t\t\t<option value=\"Barcelona\" selected>Barcelona</option>
\t\t\t\t\t\t\t<option value=\"Sevilla\" selected>Sevilla</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"acept-priv\">
\t\t\t\t<p><input style=\"display: inline;\" type=\"checkbox\" name=\"politica\" required=\"required\" value=\"1\">Aceptas la
\t\t\t\t\t<a href=\"#\">politica de privacidad</a>
\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input id=\"boton\" type=\"submit\"></input>
\t\t\t</div>
\t\t</form>
\t</div>
</section>

<section class=\"opiniones\">
\t<title>Opiniones de otros guardianes</title>

\t<article class=\"texto-opiniones\">
\t\t
\t\t
\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) || array_key_exists("comentarios", $context) ? $context["comentarios"] : (function () { throw new RuntimeError('Variable "comentarios" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
            // line 115
            echo "\t\t\t<article class=\"texto\">
\t\t\t<article class=\"texto-solo\"><p> ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "comentario", [], "any", false, false, false, 116), "html", null, true);
            echo "</p></article>
\t\t\t<article class=\"texto-id\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "nombre", [], "any", false, false, false, 117), "html", null, true);
            echo "</article>
\t\t\t<article class=\"texto-city\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opinion"], "Ciudad", [], "any", false, false, false, 118), "html", null, true);
            echo "</article>

\t\t\t</article>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t\t
\t\t
\t</article>

</section>


<section class=\"deja-coment\">
\t<article class=\"titulo-coment\">
\t\t<p>Déjanos tu comentario</p>
\t</article>
\t<form>
\t\t<article class=\"nom-comentario\">
\t\t\t<label for=\"name\">Nombre:
\t\t\t</label>
\t\t\t<input type=\"text\" id=\"nom-coment\" name=\"nom-coment\" placeholder=\"Nombre\" required=\"required\">
\t\t\t
\t\t\t<label for=\"ciudad\">Ciudad:
\t\t\t</label>
\t\t\t<input type=\"text\" id=\"ciud-coment\" name=\"ciud-coment\" placeholder=\"Ciudad\" required=\"required\">

\t\t</article>
\t\t<textarea placeholder=\"Deja aquí tu comentario...\" name=\"text-comentario\" cols=\"60\" rows=\"9\" class=\"area-coment\"></textarea>
\t\t<div>
\t\t\t<input id=\"boton-coment\" name=\"boton-coment\" type=\"submit\"></input>
\t\t</div>
\t</form>
</section>
<footer>
<div class=\"logo-footer\">
\t<img src=\"assets/img/logo.svg\" alt=\"\">
</div>
<div class=\"creado-por\">
\t<h3>
\t\t<strong>Hecho por Alexander en Madrid</strong>
\t</h3>
</div></footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "maleteo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 122,  208 => 118,  204 => 117,  200 => 116,  197 => 115,  193 => 114,  90 => 13,  83 => 12,  75 => 8,  68 => 7,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Welcome!
{% endblock %}


{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"css/style.css\">
{% endblock %}


{% block body %}

\t<header class=\"header\">
\t\t<picture class=\"logo-header\">
\t\t\t<img src=\"assets/img/logo.svg\" alt=\"Logo de Maleteo\">
\t\t</picture>
\t</header>

\t<section class=\"jumbotron\">
\t\t<article class=\"transparencia\">
\t\t\t<p>
\t\t\t\tGana dinero guardando equipaje a viajetos como tú
\t\t\t</p>
\t\t\t<article class=\"store-logo\">

\t\t\t\t<picture><img src=\"assets/img/app-store.svg\" alt=\"Logo de app store\" class=\"logo-logo\"></picture>

\t\t\t\t<picture><img src=\"assets/img/google-play.svg\" alt=\"Logo de google play\" class=\"logo-logo\"></picture>

\t\t\t</article>
\t\t</article>

\t</section>
\t<section class=\"como-funciona\">
\t\t<article>
\t\t\t<div class=\"titulo-funciona\">
\t\t\t\t<p>¿Cómo funciona?</p>
\t\t\t</div>
\t\t\t<div class=\"textos-funciona\">
\t\t\t\t<div class=\"paso\">
\t\t\t\t\t<div class=\"paso-circulo\">1</div>
\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"paso\">
\t\t\t\t\t<div class=\"paso-circulo\">2</div>
\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"paso\">
\t\t\t\t\t<div class=\"paso-circulo\">3</div>
\t\t\t\t\t<div class=\"paso-titulo\">Date de alta</div>
\t\t\t\t\t<div class=\"paso-texto\">Una olla de algo más vaca que carnero, salpicón 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        las mas noches, duelos y quebrantos los sábados.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</article>
\t</section>
\t<section class=\"campo-formulario\">
\t\t<div class=\"mobile\">
\t\t\t<img src=\"assets/img/iPhoneX.png\" alt=\"\" class=\"img-mobile\">
\t\t</div>
\t\t<div class=\"formulario\">
\t\t\t<form id=\"registro\" name=\"registro\">

\t\t\t\t<div>
\t\t\t\t\t<p class=\"titulo-solicita\">Solicita una demo</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"name\">Nombre:</label>
\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" placeholder=\"Nombre\" required=\"required\" class=\"form-input\">

\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"name\">Apellidos:</label>
\t\t\t\t\t<input type=\"text\" id=\"apellidos\" name=\"apellidos\" placeholder=\"Apellidos\" required=\"required\" class=\"form-input\">

\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<label for=\"name\">Email:</label>
\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" placeholder=\"blabla@bla.bla\" required=\"required\" class=\"form-input\">
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<p>Ciudad:
\t\t\t\t\t\t<select name=\"ciudad\" id=\"Ciudad\" class=\"select-city\">
\t\t\t\t\t\t\t<option value=\"Madrid\" selected>Madrid</option>
\t\t\t\t\t\t\t<option value=\"Barcelona\" selected>Barcelona</option>
\t\t\t\t\t\t\t<option value=\"Sevilla\" selected>Sevilla</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"acept-priv\">
\t\t\t\t<p><input style=\"display: inline;\" type=\"checkbox\" name=\"politica\" required=\"required\" value=\"1\">Aceptas la
\t\t\t\t\t<a href=\"#\">politica de privacidad</a>
\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input id=\"boton\" type=\"submit\"></input>
\t\t\t</div>
\t\t</form>
\t</div>
</section>

<section class=\"opiniones\">
\t<title>Opiniones de otros guardianes</title>

\t<article class=\"texto-opiniones\">
\t\t
\t\t
\t\t{% for opinion in comentarios %}
\t\t\t<article class=\"texto\">
\t\t\t<article class=\"texto-solo\"><p> {{opinion.comentario}}</p></article>
\t\t\t<article class=\"texto-id\">{{opinion.nombre}}</article>
\t\t\t<article class=\"texto-city\">{{opinion.Ciudad}}</article>

\t\t\t</article>
\t\t{% endfor %}
\t\t
\t\t
\t</article>

</section>


<section class=\"deja-coment\">
\t<article class=\"titulo-coment\">
\t\t<p>Déjanos tu comentario</p>
\t</article>
\t<form>
\t\t<article class=\"nom-comentario\">
\t\t\t<label for=\"name\">Nombre:
\t\t\t</label>
\t\t\t<input type=\"text\" id=\"nom-coment\" name=\"nom-coment\" placeholder=\"Nombre\" required=\"required\">
\t\t\t
\t\t\t<label for=\"ciudad\">Ciudad:
\t\t\t</label>
\t\t\t<input type=\"text\" id=\"ciud-coment\" name=\"ciud-coment\" placeholder=\"Ciudad\" required=\"required\">

\t\t</article>
\t\t<textarea placeholder=\"Deja aquí tu comentario...\" name=\"text-comentario\" cols=\"60\" rows=\"9\" class=\"area-coment\"></textarea>
\t\t<div>
\t\t\t<input id=\"boton-coment\" name=\"boton-coment\" type=\"submit\"></input>
\t\t</div>
\t</form>
</section>
<footer>
<div class=\"logo-footer\">
\t<img src=\"assets/img/logo.svg\" alt=\"\">
</div>
<div class=\"creado-por\">
\t<h3>
\t\t<strong>Hecho por Alexander en Madrid</strong>
\t</h3>
</div></footer>
{% endblock %}

", "maleteo.html.twig", "/application/templates/maleteo.html.twig");
    }
}
