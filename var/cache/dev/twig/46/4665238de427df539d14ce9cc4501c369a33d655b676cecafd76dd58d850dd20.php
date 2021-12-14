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

/* folio/create.html.twig */
class __TwigTemplate_565a26260ab152b405064a6ef6b140a4726f319c84b02ad91754c56c3a484b44 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "folio/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "folio/create.html.twig"));

        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 11, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "folio/create.html.twig", 1);
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

        // line 4
        echo "  ";
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    Modifier un projet
  ";
        } else {
            // line 7
            echo "    Ajouter un projet
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "      <h1>Modification du projet</h1>
    ";
        } else {
            // line 17
            echo "      <h1>Ajout d'un projet</h1>
    ";
        }
        // line 19
        echo "
<div class=\" col-6\">

      ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 22, $this->source); })()), 'form_start');
        echo "

      ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Titre du projet", "name" => "editor"]]);
        echo "
      ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'row', ["attr" => ["placeholder" => "Description du projet"]]);
        echo "
      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26), 'row', ["attr" => ["placeholder" => "Image du projet"]]);
        echo "
      ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 27, $this->source); })()), "github", [], "any", false, false, false, 27), 'row', ["attr" => ["placeholder" => "Github du projet"]]);
        echo "
      ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 28, $this->source); })()), "weblink", [], "any", false, false, false, 28), 'row', ["attr" => ["placeholder" => "Lien du projet"]]);
        echo " 

      <button type=\"submit\" class=\"btn btn-success mt-3\">
          ";
        // line 31
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "          Enregistrer les modifications
          ";
        } else {
            // line 34
            echo "          Ajouter le projet
            ";
        }
        // line 36
        echo "      </button>

       ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProjet"]) || array_key_exists("formProjet", $context) ? $context["formProjet"] : (function () { throw new RuntimeError('Variable "formProjet" does not exist.', 38, $this->source); })()), 'form_end');
        echo "

</div>
          <script>
              CKEDITOR.replace('projet[description]');
          </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "folio/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 38,  154 => 36,  150 => 34,  146 => 32,  144 => 31,  138 => 28,  134 => 27,  130 => 26,  126 => 25,  122 => 24,  117 => 22,  112 => 19,  108 => 17,  104 => 15,  101 => 14,  91 => 13,  79 => 7,  75 => 5,  72 => 4,  62 => 3,  51 => 1,  49 => 11,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  {% if editMode %}
    Modifier un projet
  {% else %}
    Ajouter un projet
  {% endif %}
{% endblock %}

{% form_theme formProjet 'bootstrap_4_layout.html.twig' %}

{% block body %}
    {% if editMode %}
      <h1>Modification du projet</h1>
    {% else %}
      <h1>Ajout d'un projet</h1>
    {% endif %}

<div class=\" col-6\">

      {{ form_start(formProjet) }}

      {{ form_row(formProjet.title, {'attr': {'placeholder': \"Titre du projet\", 'name': \"editor\"}} )}}
      {{ form_row(formProjet.description, {'attr': {'placeholder': \"Description du projet\"}}) }}
      {{ form_row(formProjet.image, {'attr': {'placeholder': \"Image du projet\" }}) }}
      {{ form_row(formProjet.github, {'attr': {'placeholder': \"Github du projet\" }}) }}
      {{ form_row(formProjet.weblink, {'attr': {'placeholder': \"Lien du projet\"}}) }} 

      <button type=\"submit\" class=\"btn btn-success mt-3\">
          {% if editMode %}
          Enregistrer les modifications
          {% else %}
          Ajouter le projet
            {% endif %}
      </button>

       {{ form_end(formProjet) }}

</div>
          <script>
              CKEDITOR.replace('projet[description]');
          </script>

{% endblock %}
", "folio/create.html.twig", "/Applications/MAMP/htdocs/PortfolioSymfony/folio/templates/folio/create.html.twig");
    }
}
