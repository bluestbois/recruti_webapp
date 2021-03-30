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

/* recruiter/_form.html.twig */
class __TwigTemplate_95f3fdf5bcabf28f4eb64892c28666d16e5976fc6864e959aebfdb8a1fda4455 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruiter/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruiter/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Name"]]);
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "E-mail"]]);
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "password", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Password"]]);
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "address", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Address"]]);
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Description"]]);
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Profile picture"]]);
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "phoneNumber", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Phone number"]]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "field", [], "any", false, false, false, 10), 'row', ["attr" => ["class" => "form-control w-100 mt-2 mb-2"]]);
        echo "

    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
            <i class=\"fas fa-";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 14, $this->source); })()), "save")) : ("save")), "html", null, true);
        echo "\"></i>
            ";
        // line 15
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 15, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "
        </button>
    </div>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruiter/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  87 => 15,  83 => 14,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

    {{ form_widget(form.name,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Name'}})}}
    {{ form_widget(form.email,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'E-mail'}})}}
    {{ form_widget(form.password,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Password'}})}}
    {{ form_widget(form.address,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Address'}})}}
    {{ form_widget(form.description,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Description'}})}}
    {{ form_widget(form.image,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Profile picture'}})}}
    {{ form_widget(form.phoneNumber,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Phone number'}})}}
    {{ form_row(form.field,{'attr': {'class': 'form-control w-100 mt-2 mb-2'}})}}

    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
            <i class=\"fas fa-{{ icon|default('save') }}\"></i>
            {{ button_label|default('Save') }}
        </button>
    </div>
{{ form_end(form) }}
", "recruiter/_form.html.twig", "F:\\recruti_webapp\\templates\\recruiter\\_form.html.twig");
    }
}
