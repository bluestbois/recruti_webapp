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

/* event/index.html.twig */
class __TwigTemplate_d910e50933723104c87a7edb2b5ddeb9e0d04695d45df7597241dcf33bfbb314 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_title' => [$this, 'block_page_title'],
            'custom_stylesheets' => [$this, 'block_custom_stylesheets'],
            'custom_js' => [$this, 'block_custom_js'],
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
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

        echo "Event index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 5
        echo "    Events List
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_custom_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        // line 8
        echo "    <!-- Custom styles for this page -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_custom_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_js"));

        // line 13
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        let data = [
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 18
            echo "            {
                \"ID\" : \"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\",
                \"Title\" : \"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "\",
                \"StartDate\" : \"";
            // line 21
            ((twig_get_attribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "\",
                \"EndDate\" : \"";
            // line 22
            ((twig_get_attribute($this->env, $this->source, $context["event"], "endDate", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "endDate", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "\",
                \"NOP\" : \"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "NOP", [], "any", false, false, false, 23), "html", null, true);
            echo "\",
                \"location\" : \"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 24), "html", null, true);
            echo "\",
                \"Action\":   document.createElement(\"div\").innerHTML = `<div style=\"display: flex; justify-content: center\">
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm shadow-sm btn-info mt-2 mb-2 ml-2\"><i class=\"fas fa-search\"></i></button></a>
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm shadow-sm mt-2 mb-2 ml-2\"><i class=\"far fa-edit\"></i></button></a>
                            </div>`
            },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        ]

        let table = \$('#dataTable').DataTable({
            \"columns\": [
                {
                    \"data\": \"ID\"
                },
                {
                    \"data\": \"Title\"
                },

                {
                    \"data\": \"StartDate\"
                },
                {
                    \"data\": \"EndDate\"
                },
                {
                    \"data\": \"NOP\"
                },
                {
                    \"data\": \"location\"
                },
                {
                    \"data\": \"Action\"
                }
            ]
        });
        table.rows.add(data).draw()
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 63
        echo "
    <div class=\"card shadow-lg h-75 m-4 mt-8\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Events List</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>StartDate</th>
                        <th>EndDate</th>
                        <th>NOP</th>
                        <th>Location</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_new");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\"><i class=\"far fa-plus-square\"></i> Create New</button></a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 91,  244 => 63,  234 => 62,  194 => 31,  184 => 27,  180 => 26,  175 => 24,  171 => 23,  167 => 22,  163 => 21,  159 => 20,  155 => 19,  152 => 18,  148 => 17,  142 => 14,  137 => 13,  127 => 12,  115 => 9,  112 => 8,  102 => 7,  91 => 5,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event index{% endblock %}
{% block page_title %}
    Events List
{% endblock %}
{% block custom_stylesheets %}
    <!-- Custom styles for this page -->
    <link href=\"{{ asset(\"vendor/datatables/dataTables.bootstrap4.min.css\") }}\" rel=\"stylesheet\">
{% endblock %}

{% block custom_js %}
    <script src=\"{{ asset(\"vendor/datatables/jquery.dataTables.min.js\") }}\"></script>
    <script src=\"{{ asset(\"vendor/datatables/dataTables.bootstrap4.min.js\") }}\"></script>
    <script>
        let data = [
            {% for event in events %}
            {
                \"ID\" : \"{{ event.id }}\",
                \"Title\" : \"{{ event.title }}\",
                \"StartDate\" : \"{{ event.startDate ? event.startDate|date('Y-m-d') : '' }}\",
                \"EndDate\" : \"{{ event.endDate ? event.endDate|date('Y-m-d') : '' }}\",
                \"NOP\" : \"{{ event.NOP }}\",
                \"location\" : \"{{ event.location }}\",
                \"Action\":   document.createElement(\"div\").innerHTML = `<div style=\"display: flex; justify-content: center\">
                                <a href=\"{{ path('event_show', {'id': event.id}) }}\"><button type=\"button\" class=\"btn btn-sm shadow-sm btn-info mt-2 mb-2 ml-2\"><i class=\"fas fa-search\"></i></button></a>
                                <a href=\"{{ path('event_edit', {'id': event.id}) }}\"><button type=\"button\" class=\"btn btn-sm shadow-sm mt-2 mb-2 ml-2\"><i class=\"far fa-edit\"></i></button></a>
                            </div>`
            },
            {% endfor %}
        ]

        let table = \$('#dataTable').DataTable({
            \"columns\": [
                {
                    \"data\": \"ID\"
                },
                {
                    \"data\": \"Title\"
                },

                {
                    \"data\": \"StartDate\"
                },
                {
                    \"data\": \"EndDate\"
                },
                {
                    \"data\": \"NOP\"
                },
                {
                    \"data\": \"location\"
                },
                {
                    \"data\": \"Action\"
                }
            ]
        });
        table.rows.add(data).draw()
    </script>
{% endblock %}
{% block main %}

    <div class=\"card shadow-lg h-75 m-4 mt-8\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Events List</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>StartDate</th>
                        <th>EndDate</th>
                        <th>NOP</th>
                        <th>Location</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <a href=\"{{ path('event_new') }}\"><button type=\"button\" class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\"><i class=\"far fa-plus-square\"></i> Create New</button></a>
    </div>

{% endblock %}
", "event/index.html.twig", "F:\\recruti_webapp\\templates\\event\\index.html.twig");
    }
}
