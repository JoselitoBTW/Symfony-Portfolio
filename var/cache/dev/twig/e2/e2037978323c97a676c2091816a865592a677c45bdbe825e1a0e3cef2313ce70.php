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

/* folio/index.html.twig */
class __TwigTemplate_deef07152f399aeb6fa4b64eead3293d144fe0ab845af023f2f966278f806d08 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "folio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "folio/index.html.twig", 1);
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

        echo "Projets";
        
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
        echo "<section>
        <div class=\"album py-5 \">
            <div class=\"container\">
                <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 11
            echo "
                    <div class=\"col\">
                        <div class=\"card shadow-sm bg-light\">
                            <img class=\"m-2 rounded\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "image", [], "any", false, false, false, 14), "html", null, true);
            echo "\" alt=\"\">
                                <div class=\"card-body\">
                                <h4>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>
                                    <p class=\"card-text\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 17);
            echo "</p>
                                    <a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["projet"], "github", [], "any", false, false, false, 18);
            echo "\" target=\"_blank\">";
            echo twig_get_attribute($this->env, $this->source, $context["projet"], "github", [], "any", false, false, false, 18);
            echo "</a>
                                    <br>
                                    <a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["projet"], "weblink", [], "any", false, false, false, 20);
            echo "\" target=\"_blank\">";
            echo twig_get_attribute($this->env, $this->source, $context["projet"], "weblink", [], "any", false, false, false, 20);
            echo "</a>
                                    <br>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("folio_show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo " \" type=\"button\" class=\"btn btn-sm btn-outline-primary mt-3\">Voir le projet</a>
                                        </div>
                                        <small class=\"text-muted\">Ajouté le ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "createdAt", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
            echo "</small>
                                    </div>
                                </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </div>
            </div>
        </div>
</section>        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "folio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 32,  137 => 26,  132 => 24,  123 => 20,  116 => 18,  112 => 17,  108 => 16,  103 => 14,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Projets{% endblock %}

{% block body %}
<section>
        <div class=\"album py-5 \">
            <div class=\"container\">
                <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
                    {% for projet in projets %}

                    <div class=\"col\">
                        <div class=\"card shadow-sm bg-light\">
                            <img class=\"m-2 rounded\" src=\"{{ projet.image }}\" alt=\"\">
                                <div class=\"card-body\">
                                <h4>{{ projet.title }}</h4>
                                    <p class=\"card-text\">{{ projet.description | raw }}</p>
                                    <a href=\"{{ projet.github | raw }}\" target=\"_blank\">{{ projet.github | raw }}</a>
                                    <br>
                                    <a href=\"{{ projet.weblink | raw }}\" target=\"_blank\">{{ projet.weblink | raw }}</a>
                                    <br>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"btn-group\">
                                            <a href=\"{{ path('folio_show' , {'id': projet.id}) }} \" type=\"button\" class=\"btn btn-sm btn-outline-primary mt-3\">Voir le projet</a>
                                        </div>
                                        <small class=\"text-muted\">Ajouté le {{ projet.createdAt | date('d/m/Y')}}</small>
                                    </div>
                                </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
</section>        
{% endblock %}


    
  
", "folio/index.html.twig", "/Applications/MAMP/htdocs/PortfolioSymfony/folio/templates/folio/index.html.twig");
    }
}
