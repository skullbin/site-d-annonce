<?php

/* partials/header.html.twig */
class __TwigTemplate_bce2da18a75f4e9c2f6b32b7c236e7094843e552f403d8f1ffe02192cd646b37 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"#\">Navbar</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\">Nos Annonces</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Pricing</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">About</a>
      </li>
    </ul>

  <ul class=\"navbar-nav ml-auto\">

";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->source); })()), "user", [])) {
            // line 26
            echo "     <div class=\"dropdown mr-5\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
     ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "user", []), "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "user", []), "lastName", []), "html", null, true);
            echo "
  </button>
  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
    <a class=\"dropdown-item\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\">Mon compte</a>
    <a class=\"dropdown-item\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_create");
            echo "\">Ajouter une annonce</a>
    <a class=\"dropdown-item\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\">Modifier le profil</a>
     <a class=\"dropdown-item\" href=\"#\">Mes réservations</a>
      <a class=\"dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
            echo "\">Modifier le mot de passe</a>
       <a class=\"dropdown-item\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
            echo "\">Déconnexion</a>
  </div>
</div>
";
        } else {
            // line 40
            echo "
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
            echo "\">Inscription</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\">Connexion</a>
      </li>
";
        }
        // line 48
        echo "
    </ul>


  </div>
</nav>

";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 55, $this->source); })()), "flashes", []));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 56
            echo "<div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " alert-dismissible fade show\" role=\"alert\">
  
  ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 59
                echo "    ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 61,  138 => 59,  134 => 58,  128 => 56,  124 => 55,  115 => 48,  109 => 45,  103 => 42,  99 => 40,  92 => 36,  88 => 35,  83 => 33,  79 => 32,  75 => 31,  67 => 28,  63 => 26,  61 => 25,  46 => 13,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"#\">Navbar</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('ads_index') }}\">Nos Annonces</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Pricing</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">About</a>
      </li>
    </ul>

  <ul class=\"navbar-nav ml-auto\">

{% if (app.user) %}
     <div class=\"dropdown mr-5\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
     {{app.user.firstName}} {{app.user.lastName}}
  </button>
  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
    <a class=\"dropdown-item\" href=\"{{path('account_index')}}\">Mon compte</a>
    <a class=\"dropdown-item\" href=\"{{path('ads_create')}}\">Ajouter une annonce</a>
    <a class=\"dropdown-item\" href=\"{{path('account_profile')}}\">Modifier le profil</a>
     <a class=\"dropdown-item\" href=\"#\">Mes réservations</a>
      <a class=\"dropdown-item\" href=\"{{path('account_password')}}\">Modifier le mot de passe</a>
       <a class=\"dropdown-item\" href=\"{{path('account_logout')}}\">Déconnexion</a>
  </div>
</div>
{% else %}

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('account_register') }}\">Inscription</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('account_login') }}\">Connexion</a>
      </li>
{% endif %}

    </ul>


  </div>
</nav>

{% for label,messages in app.flashes %}
<div class=\"alert alert-{{label}} alert-dismissible fade show\" role=\"alert\">
  
  {% for message in messages %}
    {{message }}
  {% endfor %}
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>

{% endfor %}", "partials/header.html.twig", "C:\\laragon\\www\\formation-symfony4\\templates\\partials\\header.html.twig");
    }
}
