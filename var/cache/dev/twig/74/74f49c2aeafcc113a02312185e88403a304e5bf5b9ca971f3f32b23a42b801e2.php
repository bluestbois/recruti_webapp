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

/* candidate/show.html.twig */
class __TwigTemplate_b5aa9dba3af8fa4ae37343af1f9e0d6557634a3a9b7c3c335035615983340960 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'gobackbtn' => [$this, 'block_gobackbtn'],
            'page_title' => [$this, 'block_page_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidate/show.html.twig", 1);
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

        echo "Candidate";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_gobackbtn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gobackbtn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gobackbtn"));

        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_index");
        echo "\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
        <i class=\"fas fa-arrow-left fa-sm text-white-50\"></i> Go back
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 12
        echo "    Candidate
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 25, $this->source); })()), "firstName", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>";
        // line 41
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 41, $this->source); })()), "birthday", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 41, $this->source); })()), "birthday", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 45, $this->source); })()), "gender", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 49, $this->source); })()), "nationality", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PhoneNumber</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 53, $this->source); })()), "phoneNumber", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 57, $this->source); })()), "address", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 61, $this->source); })()), "image", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LOE</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 65, $this->source); })()), "LOE", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 69, $this->source); })()), "experience", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn-sm shadow-sm btn btn-primary mt-2 mb-2 mr-2\"><i class=\"far fa-edit\"></i> Edit</button></a>
        ";
        // line 76
        echo twig_include($this->env, $context, "candidate/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidate/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 76,  236 => 75,  227 => 69,  220 => 65,  213 => 61,  206 => 57,  199 => 53,  192 => 49,  185 => 45,  178 => 41,  171 => 37,  164 => 33,  157 => 29,  150 => 25,  143 => 21,  136 => 16,  126 => 15,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Candidate{% endblock %}

{% block gobackbtn %}
    <a href=\"{{ path(\"candidate_index\") }}\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
        <i class=\"fas fa-arrow-left fa-sm text-white-50\"></i> Go back
    </a>
{% endblock %}

{% block page_title %}
    Candidate
{% endblock %}

{% block main %}

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ candidate.id }}</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>{{ candidate.firstName }}</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>{{ candidate.lastName }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ candidate.email }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ candidate.password }}</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>{{ candidate.birthday ? candidate.birthday|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ candidate.gender }}</td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td>{{ candidate.nationality }}</td>
            </tr>
            <tr>
                <th>PhoneNumber</th>
                <td>{{ candidate.phoneNumber }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ candidate.address }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ candidate.image }}</td>
            </tr>
            <tr>
                <th>LOE</th>
                <td>{{ candidate.LOE }}</td>
            </tr>
            <tr>
                <th>Experience</th>
                <td>{{ candidate.experience }}</td>
            </tr>
        </tbody>
    </table>

    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <a href=\"{{ path('candidate_edit', {'id': candidate.id}) }}\"><button type=\"button\" class=\"btn-sm shadow-sm btn btn-primary mt-2 mb-2 mr-2\"><i class=\"far fa-edit\"></i> Edit</button></a>
        {{ include('candidate/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "candidate/show.html.twig", "F:\\recruti_webapp\\templates\\candidate\\show.html.twig");
    }
}
