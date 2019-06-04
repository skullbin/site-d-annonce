<?php

/* ad/show.html.twig */
class __TwigTemplate_bb0f31145212db37585773fcbaadab0fda621d6d463485f0890ef79ff3bf5a5c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 3, $this->source); })()), "title", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t\t<div class=\"container\">
\t\t\t<h1>";
        // line 10
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 10, $this->source); })()), "title", [])), "html", null, true);
        echo "</h1>
\t\t\t<div class=\"card card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-8 \">
\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 14, $this->source); })()), "rooms", []), "html", null, true);
        echo " chambres ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 14, $this->source); })()), "price", []), "html", null, true);
        echo " € /nuit<br>
\t\t\t\t\t\tPas encore noté
\t\t\t\t\t\t<p class=\"mt-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Réserver !</a> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", []) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", []) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 19, $this->source); })()), "author", [])))) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 20, $this->source); })()), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier l'annonce</a>

\t\t\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 22, $this->source); })()), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-warning\" onclick=\"return confirm('Etes-vous sûr de vouloir la supprimer ?')\">Supprimer l'annonce</a>
\t\t\t\t\t\t\t";
        }
        // line 24
        echo "                         
                        </p>

\t\t\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 27, $this->source); })()), "coverImage", []), "html", null, true);
        echo "\" class=\"img-fluid\" >
\t\t\t\t\t\t<div class=\"text-left mt-3\">
\t\t\t\t\t\t\t<h4>";
        // line 29
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 29, $this->source); })()), "title", [])), "html", null, true);
        echo " </h4>
\t\t\t\t\t\t\t<p> ";
        // line 30
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 30, $this->source); })()), "content", []);
        echo " </p>


\t\t\t\t\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide col-6\" data-ride=\"carousel\">
\t\t\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 35, $this->source); })()), "images", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 36
            echo "\t\t\t\t\t\t\t<li data-target=\"#carouselExampleCaptions\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                echo "class=\"active\"";
            }
            echo "></li>
\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 40, $this->source); })()), "images", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                echo "active";
            }
            echo "\" >
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", []), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
            // line 44
            echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 44, $this->source); })()), "title", [])), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", []), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t


\t\t\t\t\t\t</div>\t

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 71, $this->source); })()), "author", []), "picture", []), "html", null, true);
        echo "\" class=\"img-fluid\" >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 74, $this->source); })()), "author", []), "slug", [])]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\tAuteur: ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 75, $this->source); })()), "author", []), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 75, $this->source); })()), "author", []), "lastName", []), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t<span class=\"badge badge-primary\">";
        // line 76
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 76, $this->source); })()), "author", []), "ads", [])), "html", null, true);
        echo " Annonces</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t</div>


\t\t\t\t</div>\t





\t\t\t</div>


\t\t</div>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 76,  256 => 75,  252 => 74,  246 => 71,  222 => 49,  204 => 45,  200 => 44,  195 => 42,  188 => 41,  171 => 40,  167 => 38,  146 => 36,  129 => 35,  121 => 30,  117 => 29,  112 => 27,  107 => 24,  102 => 22,  97 => 20,  93 => 19,  83 => 14,  76 => 10,  72 => 8,  63 => 7,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ ad.title }}{% endblock %}



\t{% block body %}

\t\t<div class=\"container\">
\t\t\t<h1>{{ ad.title | striptags }}</h1>
\t\t\t<div class=\"card card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-8 \">
\t\t\t\t\t\t{{ ad.rooms }} chambres {{ ad.price }} € /nuit<br>
\t\t\t\t\t\tPas encore noté
\t\t\t\t\t\t<p class=\"mt-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Réserver !</a> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if app.user and app.user == ad.author %} 
\t\t\t\t\t\t\t<a href=\"{{path('ads_edit',{'slug': ad.slug})}}\" class=\"btn btn-primary\">Modifier l'annonce</a>

\t\t\t\t\t\t\t<a href=\"{{path('ads_delete',{'slug': ad.slug})}}\" class=\"btn btn-warning\" onclick=\"return confirm('Etes-vous sûr de vouloir la supprimer ?')\">Supprimer l'annonce</a>
\t\t\t\t\t\t\t{% endif %}
                         
                        </p>

\t\t\t\t\t\t<img src=\"{{ ad.coverImage }}\" class=\"img-fluid\" >
\t\t\t\t\t\t<div class=\"text-left mt-3\">
\t\t\t\t\t\t\t<h4>{{ ad.title | striptags }} </h4>
\t\t\t\t\t\t\t<p> {{ ad.content | raw }} </p>


\t\t\t\t\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide col-6\" data-ride=\"carousel\">
\t\t\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t{% for image in ad.images %}
\t\t\t\t\t\t\t<li data-target=\"#carouselExampleCaptions\" data-slide-to=\"{{ loop.index0 }}\" {% if (loop.first) %}class=\"active\"{% endif %}></li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t{% for image in ad.images %}
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item {% if (loop.first) %}active{% endif %}\" >
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ image.url }}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ ad.title | striptags }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ image.caption }}</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t


\t\t\t\t\t\t</div>\t

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t<img src=\"{{ ad.author.picture }}\" class=\"img-fluid\" >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_show',{'slug': ad.author.slug})}}\">
\t\t\t\t\t\t\t\tAuteur: {{ ad.author.firstName }} {{ ad.author.lastName }}<br>
\t\t\t\t\t\t\t\t<span class=\"badge badge-primary\">{{ ad.author.ads | length }} Annonces</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t</div>


\t\t\t\t</div>\t





\t\t\t</div>


\t\t</div>


\t{% endblock %}


", "ad/show.html.twig", "C:\\laragon\\www\\formation-symfony4\\templates\\ad\\show.html.twig");
    }
}
