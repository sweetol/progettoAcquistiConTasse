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

/* catalogo.html2.twig */
class __TwigTemplate_a586cd3f9e79e3f50a0b286c3d66f893 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogo.html2.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogo.html2.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "catalogo.html2.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container\">
\t<br />

\t<nav class=\"nav nav-pills flex-column flex-sm-row\">
\t\t<a class=\"flex-sm-fill text-sm-center nav-link active\"
\t\t\taria-current=\"page\" href=\"/catalogo\"><div class=\"fa fa-list\"> Products</div></a> <a
\t\t\tclass=\"flex-sm-fill text-sm-center nav-link\" href=\"/cart\"> <div class=\"fa fa-shopping-cart\" > Cart ( ";
        // line 12
        echo " {{ mainCtrl.quantity }} ";
        echo " ) 
\t\t\t</div></a>
\t</nav>

\t<br />

\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prodotti"]) || array_key_exists("prodotti", $context) ? $context["prodotti"] : (function () { throw new RuntimeError('Variable "prodotti" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chunks"]) {
            // line 19
            echo "\t<div class=\"row\">

\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["chunks"]);
            foreach ($context['_seq'] as $context["_key"] => $context["prodotto"]) {
                // line 22
                echo "\t\t<div class=\"col-4\">

\t\t\t<div class=\"card text-dark bg-light mb-3\" style=\"max-width: 18rem;\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", false, false, false, 29), "html", null, true);
                echo "
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<button 
\t\t\t\t\t\t\tng-click=\"mainCtrl.addToCart(";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo ",1)\"
\t\t\t\t\t\t\ttype=\"button\" class=\"btn btn-primary btn-sm\">+</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h7 class=\"card-title\"> ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "descrizione", [], "any", false, false, false, 40), "html", null, true);
                echo " </h7>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "descrizione", [], "any", false, false, false, 42), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tNet Price:
\t\t\t\t\t\t";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "prezzoNetto", [], "any", false, false, false, 46), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tSales Tax:
\t\t\t\t\t\t";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "tax", [], "any", false, false, false, 50), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tTotal:
\t\t\t\t\t\t";
                // line 54
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["prodotto"], "tax", [], "any", false, false, false, 54) + twig_get_attribute($this->env, $this->source, $context["prodotto"], "prezzoNetto", [], "any", false, false, false, 54)), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prodotto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chunks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "catalogo.html2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 64,  163 => 61,  150 => 54,  143 => 50,  136 => 46,  129 => 42,  124 => 40,  115 => 34,  107 => 29,  98 => 22,  94 => 21,  90 => 19,  86 => 18,  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"container\">
\t<br />

\t<nav class=\"nav nav-pills flex-column flex-sm-row\">
\t\t<a class=\"flex-sm-fill text-sm-center nav-link active\"
\t\t\taria-current=\"page\" href=\"/catalogo\"><div class=\"fa fa-list\"> Products</div></a> <a
\t\t\tclass=\"flex-sm-fill text-sm-center nav-link\" href=\"/cart\"> <div class=\"fa fa-shopping-cart\" > Cart ( {% verbatim %} {{ mainCtrl.quantity }} {% endverbatim %} ) 
\t\t\t</div></a>
\t</nav>

\t<br />

\t{% for chunks in prodotti %}
\t<div class=\"row\">

\t\t{% for prodotto in chunks %}
\t\t<div class=\"col-4\">

\t\t\t<div class=\"card text-dark bg-light mb-3\" style=\"max-width: 18rem;\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t{{ prodotto.nome }}
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<button 
\t\t\t\t\t\t\tng-click=\"mainCtrl.addToCart({{ prodotto.id }},1)\"
\t\t\t\t\t\t\ttype=\"button\" class=\"btn btn-primary btn-sm\">+</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h7 class=\"card-title\"> {{ prodotto.descrizione }} </h7>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t{{ prodotto.descrizione }}
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tNet Price:
\t\t\t\t\t\t{{ prodotto.prezzoNetto }}
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tSales Tax:
\t\t\t\t\t\t{{ prodotto.tax }}
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tTotal:
\t\t\t\t\t\t{{ prodotto.tax + prodotto.prezzoNetto }}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t{% endfor %}
\t</div>

\t{% endfor %}

</div>

{% endblock %}", "catalogo.html2.twig", "C:\\Users\\Vito\\git\\progettoAcquistiConTasse\\templates\\catalogo.html2.twig");
    }
}
