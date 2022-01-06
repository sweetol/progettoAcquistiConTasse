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

/* cart.html3.twig */
class __TwigTemplate_62272cb44a7cded27e1a9d1f51d5d221 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html3.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html3.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart.html3.twig", 1);
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
\t\t<a class=\"flex-sm-fill text-sm-center nav-link\"
\t\t\taria-current=\"page\" href=\"/catalogo\"><div class=\"fa fa-list\"> Products</div></a> <a
\t\t\tclass=\"flex-sm-fill text-sm-center nav-link active\" href=\"/cart\"> <div class=\"fa fa-shopping-cart\" > Cart (";
        // line 12
        echo "{{ mainCtrl.quantity }}";
        echo ") 
\t\t\t</div></a>
\t</nav>

\t<br />

\t<div class=\"row\">
\t\t<div class=\"col-12 mark text-right font-weight-bold\">
\t\t\tSales Taxes:
\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["taxes"]) || array_key_exists("taxes", $context) ? $context["taxes"] : (function () { throw new RuntimeError('Variable "taxes" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-12 mark text-right font-weight-bold\">
\t\t\tTotal:
\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-12 mark text-right font-weight-bold\">
\t\t\t<button ng-click=\"mainCtrl.emptyCart()\"
\t\t\t\ttype=\"button\" class=\"btn btn-danger fa fa-trash\">Empty Cart</button>
\t\t</div>
\t</div>

\t<br />

\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prodotti"]) || array_key_exists("prodotti", $context) ? $context["prodotti"] : (function () { throw new RuntimeError('Variable "prodotti" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chunks"]) {
            // line 40
            echo "\t<div class=\"row\">

\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["chunks"]);
            foreach ($context['_seq'] as $context["_key"] => $context["prodotto"]) {
                // line 43
                echo "\t\t<div class=\"col-4\">

\t\t\t<div class=\"card text-dark bg-light mb-3\" style=\"max-width: 18rem;\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h6>
\t\t\t\t\t\t";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "nome", [], "any", false, false, false, 48), "html", null, true);
                echo "
\t\t\t\t\t</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h7 class=\"card-title\"> ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "descrizione", [], "any", false, false, false, 52), "html", null, true);
                echo " </h7>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "descrizione", [], "any", false, false, false, 54), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tNet Price:
\t\t\t\t\t\t";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "prezzoNetto", [], "any", false, false, false, 58), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tSales Tax:
\t\t\t\t\t\t";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "tax", [], "any", false, false, false, 62), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "quantity", [], "any", false, false, false, 66), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tTotal:
\t\t\t\t\t\t";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prodotto"], "totale", [], "any", false, false, false, 70), "html", null, true);
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
            // line 77
            echo "\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chunks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart.html3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 80,  185 => 77,  172 => 70,  165 => 66,  158 => 62,  151 => 58,  144 => 54,  139 => 52,  132 => 48,  125 => 43,  121 => 42,  117 => 40,  113 => 39,  98 => 27,  89 => 21,  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"container\">
\t<br />

\t<nav class=\"nav nav-pills flex-column flex-sm-row\">
\t\t<a class=\"flex-sm-fill text-sm-center nav-link\"
\t\t\taria-current=\"page\" href=\"/catalogo\"><div class=\"fa fa-list\"> Products</div></a> <a
\t\t\tclass=\"flex-sm-fill text-sm-center nav-link active\" href=\"/cart\"> <div class=\"fa fa-shopping-cart\" > Cart ({% verbatim %}{{ mainCtrl.quantity }}{% endverbatim %}) 
\t\t\t</div></a>
\t</nav>

\t<br />

\t<div class=\"row\">
\t\t<div class=\"col-12 mark text-right font-weight-bold\">
\t\t\tSales Taxes:
\t\t\t{{ taxes }}
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-12 mark text-right font-weight-bold\">
\t\t\tTotal:
\t\t\t{{ total }}
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-12 mark text-right font-weight-bold\">
\t\t\t<button ng-click=\"mainCtrl.emptyCart()\"
\t\t\t\ttype=\"button\" class=\"btn btn-danger fa fa-trash\">Empty Cart</button>
\t\t</div>
\t</div>

\t<br />

\t{% for chunks in prodotti %}
\t<div class=\"row\">

\t\t{% for prodotto in chunks %}
\t\t<div class=\"col-4\">

\t\t\t<div class=\"card text-dark bg-light mb-3\" style=\"max-width: 18rem;\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h6>
\t\t\t\t\t\t{{ prodotto.nome }}
\t\t\t\t\t</h6>
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
\t\t\t\t\t\tQuantity:
\t\t\t\t\t\t{{ prodotto.quantity }}
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\tTotal:
\t\t\t\t\t\t{{ prodotto.totale }}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t{% endfor %}
\t</div>

\t{% endfor %}

</div>

{% endblock %}", "cart.html3.twig", "C:\\Users\\Vito\\git\\progettoAcquistiConTasse\\templates\\cart.html3.twig");
    }
}
