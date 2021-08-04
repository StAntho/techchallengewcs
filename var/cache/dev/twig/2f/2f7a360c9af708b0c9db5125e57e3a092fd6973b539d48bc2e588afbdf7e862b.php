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

/* home/index.html.twig */
class __TwigTemplate_9d614654dafee5200bedf99c61440913374bbfacb9c939d932758e8cff280583 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste d'équipage";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "            <!-- Main section -->
            <main>
            
            <!-- New member form -->
            ";
        // line 10
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10), "update"))) {
            // line 11
            echo "                <h2>Modifier un(e) Argonaute</h2>
                ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "new-member-form"]]);
            echo "
                    ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'row', ["label" => "Modifier le nom de l'argonaute"]);
            echo "
                    <button type=\"submit\">Modifier</button>
                ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_end');
            echo "
            ";
        } else {
            // line 17
            echo "                <h2>Ajouter un(e) Argonaute</h2>
                ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "new-member-form"]]);
            echo "
                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'row', ["attr" => ["placeholder" => "Charalampos"], "label" => "Nom de l'argonaute"]);
            echo "
                    <button type=\"submit\">Envoyer</button>
                ";
            // line 21
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
            echo "
            ";
        }
        // line 23
        echo "
            
            ";
        // line 27
        echo "            
            <!-- Member list -->
            <h2>Membres de l'équipage</h2>
            <section class=\"member-list\">
            ";
        // line 31
        if (twig_test_empty((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "                <div id=\"emptyShip\">
                    <p>Aucun Argonaute n'est inscrit</p>
                </div>
            ";
        } else {
            // line 36
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all"]) || array_key_exists("all", $context) ? $context["all"] : (function () { throw new RuntimeError('Variable "all" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["argonaute"]) {
                // line 37
                echo "                <div class=\"member-item\">
                <div class=\"crud\">
                    <small class=\"text-muted\"><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["argonaute"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">Modifier</a></small> |
                    <small class=\"text-muted\"><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["argonaute"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cet argonaute ?')\">
                    Supprimer 
                    </a></small>
                </div>
                <h3>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["argonaute"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</h3>
                <h4><small class=\"text-muted\">Inscrit le ";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["argonaute"], "registeredAt", [], "any", false, false, false, 45), "d/m/Y \\à H\\hi"), "html", null, true);
                echo "</small></h4>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['argonaute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        }
        // line 49
        echo "            </section>
            </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 49,  166 => 48,  157 => 45,  153 => 44,  146 => 40,  142 => 39,  138 => 37,  133 => 36,  127 => 32,  125 => 31,  119 => 27,  115 => 23,  110 => 21,  105 => 19,  101 => 18,  98 => 17,  93 => 15,  88 => 13,  84 => 12,  81 => 11,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste d'équipage{% endblock %}

{% block content %}
            <!-- Main section -->
            <main>
            
            <!-- New member form -->
            {% if app.request.get('_route') == 'update' %}
                <h2>Modifier un(e) Argonaute</h2>
                {{ form_start(form, {attr:{'class':\"new-member-form\"} }) }}
                    {{ form_row(form.name, {'label':'Modifier le nom de l\\'argonaute'}) }}
                    <button type=\"submit\">Modifier</button>
                {{ form_end(form) }}
            {% else %}
                <h2>Ajouter un(e) Argonaute</h2>
                {{ form_start(form, {attr:{'class':\"new-member-form\"} }) }}
                    {{ form_row(form.name, {attr:{'placeholder':\"Charalampos\"}, 'label':'Nom de l\\'argonaute' }) }}
                    <button type=\"submit\">Envoyer</button>
                {{ form_end(form) }}
            {% endif %}

            
            {# <section class=\"registration\">
            </section> #}
            
            <!-- Member list -->
            <h2>Membres de l'équipage</h2>
            <section class=\"member-list\">
            {% if all is empty %}
                <div id=\"emptyShip\">
                    <p>Aucun Argonaute n'est inscrit</p>
                </div>
            {% else %}
                {% for argonaute in all %}
                <div class=\"member-item\">
                <div class=\"crud\">
                    <small class=\"text-muted\"><a href=\"{{ path('update', {id:argonaute.id} ) }}\">Modifier</a></small> |
                    <small class=\"text-muted\"><a href=\"{{ path('delete', {id:argonaute.id} ) }}\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cet argonaute ?')\">
                    Supprimer 
                    </a></small>
                </div>
                <h3>{{argonaute.name}}</h3>
                <h4><small class=\"text-muted\">Inscrit le {{ argonaute.registeredAt | date(\"d/m/Y \\\\à H\\\\hi\")}}</small></h4>
                </div>
                {% endfor %}
            {% endif %}
            </section>
            </main>

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\symfony\\TechChallenge\\templates\\home\\index.html.twig");
    }
}
