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

/* candidate/_form.html.twig */
class __TwigTemplate_154c5212e553e067d70d48538b313fad58b106363cecfd27676e309504a5752a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "firstName", [], "any", false, false, false, 2), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "First name"]]);
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "lastName", [], "any", false, false, false, 3), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Last name"]]);
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Email"]]);
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "password", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Password"]]);
        echo "

    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "birthday", [], "any", false, false, false, 7), 'label', ["label" => "Birthday"]);
        echo "
    <div class=\"row m-2\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "birthday", [], "any", false, false, false, 9), "day", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "birthday", [], "any", false, false, false, 10), "month", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "birthday", [], "any", false, false, false, 11), "year", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
    </div>

    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "gender", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Gender"]]);
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nationality", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Nationality"]]);
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "phoneNumber", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Phone number"]]);
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "address", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Address"]]);
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Image"]]);
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "LOE", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Level of education"]]);
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "experience", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Experience"]]);
        echo "

    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nationalities", [], "any", false, false, false, 22), 'label', ["label" => "Nationalities"]);
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nationalities", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2"]]);
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "events", [], "any", false, false, false, 24), 'label', ["label" => "Events"]);
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "events", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2"]]);
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "projects", [], "any", false, false, false, 26), 'label', ["label" => "Projects"]);
        echo "
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "projects", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2"]]);
        echo "

    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
            <i class=\"fas fa-";
        // line 31
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 31, $this->source); })()), "save")) : ("save")), "html", null, true);
        echo "\"></i>
            ";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "
        </button>
    </div>
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "candidate/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 35,  143 => 32,  139 => 31,  132 => 27,  128 => 26,  124 => 25,  120 => 24,  116 => 23,  112 => 22,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  77 => 11,  73 => 10,  69 => 9,  64 => 7,  59 => 5,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    {{form_widget(form.firstName,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'First name'}})}}
    {{form_widget(form.lastName,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Last name'}})}}
    {{form_widget(form.email,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Email'}})}}
    {{form_widget(form.password,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Password'}})}}

    {{ form_label(form.birthday, \"Birthday\") }}
    <div class=\"row m-2\">
        {{form_widget(form.birthday.day,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.birthday.month,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.birthday.year,{'attr': {'class': 'form-control w-25 m-2'}})}}
    </div>

    {{form_widget(form.gender,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Gender'}})}}
    {{form_widget(form.nationality,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Nationality'}})}}
    {{form_widget(form.phoneNumber,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Phone number'}})}}
    {{form_widget(form.address,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Address'}})}}
    {{form_widget(form.image,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Image'}})}}
    {{form_widget(form.LOE,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Level of education'}})}}
    {{form_widget(form.experience,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Experience'}})}}

    {{ form_label(form.nationalities, \"Nationalities\") }}
    {{form_widget(form.nationalities,{'attr': {'class': 'form-control w-100 mt-2 mb-2'}})}}
    {{ form_label(form.events, \"Events\") }}
    {{form_widget(form.events,{'attr': {'class': 'form-control w-100 mt-2 mb-2'}})}}
    {{ form_label(form.projects, \"Projects\") }}
    {{form_widget(form.projects,{'attr': {'class': 'form-control w-100 mt-2 mb-2'}})}}

    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
            <i class=\"fas fa-{{ icon|default('save') }}\"></i>
            {{ button_label|default('Save') }}
        </button>
    </div>
{{ form_end(form) }}
", "candidate/_form.html.twig", "F:\\recruti_webapp\\templates\\candidate\\_form.html.twig");
    }
}
