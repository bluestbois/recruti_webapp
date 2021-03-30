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

/* candidate/index.html.twig */
class __TwigTemplate_bbf420e8a5997af1cd1aa993195be08080d1c16d4b56d2ec4a423ae71728bb71 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidate/index.html.twig", 1);
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

        echo "Candidate index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 6
        echo "    Candidates List
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_custom_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        // line 10
        echo "    <!-- Custom styles for this page -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_custom_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_js"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        let data = [
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidates"]) || array_key_exists("candidates", $context) ? $context["candidates"] : (function () { throw new RuntimeError('Variable "candidates" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 20
            echo "            {
                \"ID\" : \"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\",
                \"FirstName\" : \"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "firstName", [], "any", false, false, false, 22), "html", null, true);
            echo "\",
                \"LastName\" : \"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "lastName", [], "any", false, false, false, 23), "html", null, true);
            echo "\",
                \"Email\" : \"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "email", [], "any", false, false, false, 24), "html", null, true);
            echo "\",
                \"Nationality\" : \"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "nationality", [], "any", false, false, false, 25), "html", null, true);
            echo "\",
                \"Phone\" : \"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidate"], "phoneNumber", [], "any", false, false, false, 26), "html", null, true);
            echo "\",
                \"Action\":   document.createElement(\"div\").innerHTML = `<div style=\"display: flex; justify-content: center\">
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_show", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm shadow-sm btn-info mt-2 mb-2 ml-2\"><i class=\"fas fa-search\"></i></button></a>
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm shadow-sm mt-2 mb-2 ml-2\"><i class=\"far fa-edit\"></i></button></a>
                            </div>`
            },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ]

        console.log(data)
        let table = \$('#dataTable').DataTable({
            \"columns\": [
                {
                    \"data\": \"ID\"
                },
                {
                    \"data\": \"FirstName\"
                },
                {
                    \"data\": \"LastName\"
                },
                {
                    \"data\": \"Email\"
                },
                {
                    \"data\": \"Nationality\"
                },
                {
                    \"data\": \"Phone\"
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

    // line 65
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 66
        echo "
    <div class=\"card shadow-lg h-75 m-4 mt-8\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Candidates List</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Firs tName</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Nationality</th>
                        <th>PhoneNumber</th>
                        <th>Actions</th>
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
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruiter_new");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\"><i class=\"far fa-plus-square\"></i> Create New</button></a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidate/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 93,  244 => 66,  234 => 65,  194 => 33,  184 => 29,  180 => 28,  175 => 26,  171 => 25,  167 => 24,  163 => 23,  159 => 22,  155 => 21,  152 => 20,  148 => 19,  142 => 16,  137 => 15,  127 => 14,  115 => 11,  112 => 10,  102 => 9,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Candidate index{% endblock %}

{% block page_title %}
    Candidates List
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
            {% for candidate in candidates %}
            {
                \"ID\" : \"{{ candidate.id }}\",
                \"FirstName\" : \"{{ candidate.firstName }}\",
                \"LastName\" : \"{{ candidate.lastName }}\",
                \"Email\" : \"{{ candidate.email }}\",
                \"Nationality\" : \"{{ candidate.nationality }}\",
                \"Phone\" : \"{{ candidate.phoneNumber }}\",
                \"Action\":   document.createElement(\"div\").innerHTML = `<div style=\"display: flex; justify-content: center\">
                                <a href=\"{{ path('candidate_show', {'id': candidate.id}) }}\"><button type=\"button\" class=\"btn btn-sm shadow-sm btn-info mt-2 mb-2 ml-2\"><i class=\"fas fa-search\"></i></button></a>
                                <a href=\"{{ path('candidate_edit', {'id': candidate.id}) }}\"><button type=\"button\" class=\"btn btn-sm shadow-sm mt-2 mb-2 ml-2\"><i class=\"far fa-edit\"></i></button></a>
                            </div>`
            },
            {% endfor %}
        ]

        console.log(data)
        let table = \$('#dataTable').DataTable({
            \"columns\": [
                {
                    \"data\": \"ID\"
                },
                {
                    \"data\": \"FirstName\"
                },
                {
                    \"data\": \"LastName\"
                },
                {
                    \"data\": \"Email\"
                },
                {
                    \"data\": \"Nationality\"
                },
                {
                    \"data\": \"Phone\"
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
            <h6 class=\"m-0 font-weight-bold text-primary\">Candidates List</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Firs tName</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Nationality</th>
                        <th>PhoneNumber</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <a href=\"{{ path('recruiter_new') }}\"><button type=\"button\" class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\"><i class=\"far fa-plus-square\"></i> Create New</button></a>
    </div>

{% endblock %}
", "candidate/index.html.twig", "F:\\recruti_webapp\\templates\\candidate\\index.html.twig");
    }
}
