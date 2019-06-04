<?php

/* ad/_ad.html.twig */
class __TwigTemplate_9df3d4c5af829312177b197464b43600eb4d9ed0d6514b97cfeb83e30a3a2639 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        // line 1
        echo "\t\t\t\t\t\t<div class=\"col-4 mb-3\">

\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header text-center\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 4, $this->source); })()), "rooms", []), "html", null, true);
        echo " chambres ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 4, $this->source); })()), "price", []), "html", null, true);
        echo " €/nuit<br>Pas encore noté</h5>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 6, $this->source); })()), "coverImage", []), "html", null, true);
        echo "\"  style=\"height: 200px;width:100%;display:block\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
        // line 7
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 7, $this->source); })()), "title", [])), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 8, $this->source); })()), "introduction", []), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 9, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\" class=\"btn btn-primary mb-3\">En savoir plus</a>

\t\t\t\t\t\t\t\t\t";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "user", []) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "user", []) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 11, $this->source); })()), "author", [])))) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 12, $this->source); })()), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary mb-3\">Modifier l'annonce</a>
                               
                            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 14, $this->source); })()), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-warning mb-3\" onclick=\"return confirm('Etes-vous sûr de vouloir la supprimer ?')\">Supprimer l'annonce</a> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 17
        echo "

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  67 => 14,  62 => 12,  58 => 11,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t\t\t\t\t\t<div class=\"col-4 mb-3\">

\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header text-center\">{{ ad.rooms }} chambres {{ ad.price }} €/nuit<br>Pas encore noté</h5>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ ad.coverImage }}\"  style=\"height: 200px;width:100%;display:block\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ ad.title | striptags }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ ad.introduction }}</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('ads_show',{'slug':ad.slug}) }}\" class=\"btn btn-primary mb-3\">En savoir plus</a>

\t\t\t\t\t\t\t\t\t{% if app.user and app.user == ad.author %} 
\t\t\t\t\t\t\t<a href=\"{{path('ads_edit',{'slug': ad.slug})}}\" class=\"btn btn-primary mb-3\">Modifier l'annonce</a>
                               
                            <a href=\"{{path('ads_delete',{'slug': ad.slug})}}\" class=\"btn btn-warning mb-3\" onclick=\"return confirm('Etes-vous sûr de vouloir la supprimer ?')\">Supprimer l'annonce</a> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>", "ad/_ad.html.twig", "C:\\laragon\\www\\formation-symfony4\\templates\\ad\\_ad.html.twig");
    }
}
