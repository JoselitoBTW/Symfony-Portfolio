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

/* base.html.twig */
class __TwigTemplate_24b414729b9cc3b07157868f770b9eb7b5400a7b8b264db32ff7ec44d1b2fa3d extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>

    <body>
        
            <header class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom\">
                ";
        // line 25
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "                ";
        } else {
            // line 27
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("folio_admin");
            echo "\" class=\"d-flex align-items-center col-md-3 mb-2 mb-md-0 text-white text-decoration-none\">
                        <img class=\"rounded-circle ms-3\" src=\"https://cdn-icons-png.flaticon.com/512/149/149071.png\" width=\"40\" height=\"40\" alt=\"\">
                    </a>
                ";
        }
        // line 31
        echo "
                <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\">
                    <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link px-2 link-primary\">Accueil <i class=\"fas fa-home\"></i></a></li>
                    <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("folio");
        echo "\" class=\"nav-link px-2 link-primary\">Projets <i class=\"fas fa-folder-open\"></i></a></li>
                        ";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "                        ";
        } else {
            // line 37
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("folio_create");
            echo "\" class=\"nav-link px-2 link-primary\">Ajouter un projet <i class=\"fas fa-plus\"></i></a></li>
                        ";
        }
        // line 39
        echo "                </ul>

                ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "                    <div class=\"col-md-3 me-3 text-end\">
                        <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connexion</a>
                    </div>
                ";
        } else {
            // line 46
            echo "                    <div class=\"col-md-3 me-3 text-end\">
                        <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" class=\"btn btn-danger\">Déconnexion <i class=\"fas fa-sign-out-alt\"></i></a>
                    </div>
            </header>
                ";
        }
        // line 51
        echo "
            <div class=\"container\">     
                ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "       </div>
</body>  


    <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 mb-0 border-top col-12\">
        <div class=\"col-md-4 d-flex align-items-center\">
        <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1\">
            <svg class=\"bi\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"></use></svg>
        </a>
        <span class=\"text-muted\">© 2021 Company, Inc</span>
        </div>

        <div class=\"col\">
            <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
            <li class=\"ms-3\"><a class=\"text-muted\" href=\"https://twitter.com/?lang=fr\" target=\"_blank\"><i class=\"fab fa-twitter\"></i><use xlink:href=\"#twitter\"></use></svg></a></li>
            <li class=\"ms-3\"><a class=\"text-muted\" href=\"https://www.instagram.com/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i><use xlink:href=\"#instagram\"></use></svg></a></li>
            <li class=\"ms-3\"><a class=\"text-muted\" href=\"https://fr-fr.facebook.com/\" target=\"_blank\"><i class=\"fab fa-facebook\"></i><use xlink:href=\"#facebook\"></use></svg></a></li>
            </ul>
        </div>   
    </footer>    
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio-Symfony";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lux/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\">
            <link rel=\"icon\" href=\"https://us.123rf.com/450wm/inkdrop/inkdrop1910/inkdrop191006614/132480584-police-de-texte-%C3%A0-effet-de-glitch-n%C3%A9on-d%C3%A9form%C3%A9e-de-la-lettre-p-rendu-3d.jpg?ver=6\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        // line 17
        echo "            <script src=\"//cdn.ckeditor.com/4.17.1/full/ckeditor.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 53,  226 => 17,  224 => 16,  214 => 15,  201 => 10,  199 => 9,  189 => 8,  170 => 5,  139 => 54,  137 => 53,  133 => 51,  126 => 47,  123 => 46,  117 => 43,  114 => 42,  112 => 41,  108 => 39,  102 => 37,  99 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 31,  77 => 27,  74 => 26,  72 => 25,  65 => 20,  63 => 15,  60 => 14,  57 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Portfolio-Symfony{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
            <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lux/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" integrity=\"sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm\" crossorigin=\"anonymous\">
            <link rel=\"icon\" href=\"https://us.123rf.com/450wm/inkdrop/inkdrop1910/inkdrop191006614/132480584-police-de-texte-%C3%A0-effet-de-glitch-n%C3%A9on-d%C3%A9form%C3%A9e-de-la-lettre-p-rendu-3d.jpg?ver=6\" />
        {% endblock %}

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
            <script src=\"//cdn.ckeditor.com/4.17.1/full/ckeditor.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </head>

    <body>
        
            <header class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom\">
                {% if not app.user %}
                {% else %}
                    <a href=\"{{ path('folio_admin') }}\" class=\"d-flex align-items-center col-md-3 mb-2 mb-md-0 text-white text-decoration-none\">
                        <img class=\"rounded-circle ms-3\" src=\"https://cdn-icons-png.flaticon.com/512/149/149071.png\" width=\"40\" height=\"40\" alt=\"\">
                    </a>
                {% endif %}

                <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\">
                    <li><a href=\"{{ path('home') }}\" class=\"nav-link px-2 link-primary\">Accueil <i class=\"fas fa-home\"></i></a></li>
                    <li><a href=\"{{ path('folio')}}\" class=\"nav-link px-2 link-primary\">Projets <i class=\"fas fa-folder-open\"></i></a></li>
                        {% if not app.user %}
                        {% else %}
                    <li><a href=\"{{ path('folio_create') }}\" class=\"nav-link px-2 link-primary\">Ajouter un projet <i class=\"fas fa-plus\"></i></a></li>
                        {% endif %}
                </ul>

                {% if not app.user %}
                    <div class=\"col-md-3 me-3 text-end\">
                        <a href=\"{{ path('security_login') }}\" class=\"btn btn-primary\">Connexion</a>
                    </div>
                {% else %}
                    <div class=\"col-md-3 me-3 text-end\">
                        <a href=\"{{ path('security_logout') }}\" class=\"btn btn-danger\">Déconnexion <i class=\"fas fa-sign-out-alt\"></i></a>
                    </div>
            </header>
                {% endif %}

            <div class=\"container\">     
                {% block body %}{% endblock %}
       </div>
</body>  


    <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 mb-0 border-top col-12\">
        <div class=\"col-md-4 d-flex align-items-center\">
        <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1\">
            <svg class=\"bi\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"></use></svg>
        </a>
        <span class=\"text-muted\">© 2021 Company, Inc</span>
        </div>

        <div class=\"col\">
            <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
            <li class=\"ms-3\"><a class=\"text-muted\" href=\"https://twitter.com/?lang=fr\" target=\"_blank\"><i class=\"fab fa-twitter\"></i><use xlink:href=\"#twitter\"></use></svg></a></li>
            <li class=\"ms-3\"><a class=\"text-muted\" href=\"https://www.instagram.com/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i><use xlink:href=\"#instagram\"></use></svg></a></li>
            <li class=\"ms-3\"><a class=\"text-muted\" href=\"https://fr-fr.facebook.com/\" target=\"_blank\"><i class=\"fab fa-facebook\"></i><use xlink:href=\"#facebook\"></use></svg></a></li>
            </ul>
        </div>   
    </footer>    
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/PortfolioSymfony/folio/templates/base.html.twig");
    }
}
