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

/* job/_form.html.twig */
class __TwigTemplate_14e09b917fd785ed52733e334a63d39942c5c3f0135e1da52dab37ad3b0e9d6b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/_form.html.twig"));

        // line 1
        echo "widget";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
     ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Title"]]);
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "date", [], "any", false, false, false, 3), 'label', ["label" => "Date"]);
        echo "
    <div class=\"row m-2\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "date", [], "any", false, false, false, 5), "day", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "date", [], "any", false, false, false, 6), "month", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "date", [], "any", false, false, false, 7), "year", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
    </div>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Description"]]);
        echo "

    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "Recruiter", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Recruiter"]]);
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
        return "job/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  85 => 15,  81 => 14,  75 => 11,  70 => 9,  65 => 7,  61 => 6,  57 => 5,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("widget{{ form_start(form) }}
     {{ form_widget(form.title,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Title'}})}}
    {{ form_label(form.date, \"Date\") }}
    <div class=\"row m-2\">
        {{form_widget(form.date.day,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.date.month,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.date.year,{'attr': {'class': 'form-control w-25 m-2'}})}}
    </div>
    {{ form_widget(form.description,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Description'}})}}

    {{ form_row(form.Recruiter,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Recruiter'}})}}
<div style=\"width: 100%; display:flex; justify-content: flex-end\">
    <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
        <i class=\"fas fa-{{ icon|default('save') }}\"></i>
        {{ button_label|default('Save') }}
    </button>
</div>
{{ form_end(form) }}
", "job/_form.html.twig", "F:\\recruti_webapp\\templates\\job\\_form.html.twig");
    }
}
