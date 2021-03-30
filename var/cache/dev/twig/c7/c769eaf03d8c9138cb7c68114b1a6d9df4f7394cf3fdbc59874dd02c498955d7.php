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

/* event/_form.html.twig */
class __TwigTemplate_b2c3f20ac75eefab6b48facefa71ad934743e6fe6d95d51a20d38c34d870dcca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Title"]]);
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "description", [], "any", false, false, false, 3), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Description"]]);
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "startDate", [], "any", false, false, false, 4), 'label', ["label" => "Start Date"]);
        echo "
    <div class=\"row m-2\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "startDate", [], "any", false, false, false, 6), "day", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "startDate", [], "any", false, false, false, 7), "month", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "startDate", [], "any", false, false, false, 8), "year", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
    </div>
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "endDate", [], "any", false, false, false, 10), 'label', ["label" => "End Date"]);
        echo "
    <div class=\"row m-2\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "endDate", [], "any", false, false, false, 12), "day", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "endDate", [], "any", false, false, false, 13), "month", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "endDate", [], "any", false, false, false, 14), "year", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
    </div>
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "Type", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control w-100 mt-2 mb-2"]]);
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "NOP", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Numbre Of Participants"]]);
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Candidate", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control w-100 mt-2 mb-2"]]);
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "location", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Lacation"]]);
        echo "
<div style=\"width: 100%; display:flex; justify-content: flex-end\">
    <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
        <i class=\"fas fa-";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 22, $this->source); })()), "save")) : ("save")), "html", null, true);
        echo "\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 23, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "
    </button>
</div>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "event/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 26,  113 => 23,  109 => 22,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  86 => 14,  82 => 13,  78 => 12,  73 => 10,  68 => 8,  64 => 7,  60 => 6,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
{{form_widget(form.title,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Title'}})}}
    {{form_widget(form.description,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Description'}})}}
    {{ form_label(form.startDate, \"Start Date\") }}
    <div class=\"row m-2\">
        {{form_widget(form.startDate.day,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.startDate.month,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.startDate.year,{'attr': {'class': 'form-control w-25 m-2'}})}}
    </div>
    {{ form_label(form.endDate, \"End Date\") }}
    <div class=\"row m-2\">
        {{form_widget(form.endDate.day,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.endDate.month,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.endDate.year,{'attr': {'class': 'form-control w-25 m-2'}})}}
    </div>
    {{form_row(form.Type,{'attr': {'class': 'form-control w-100 mt-2 mb-2'}})}}
    {{form_widget(form.NOP,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Numbre Of Participants'}})}}
    {{form_row(form.Candidate,{'attr': {'class': 'form-control w-100 mt-2 mb-2'}})}}
    {{form_widget(form.location,{'attr': {'class': 'form-control w-100 mt-2 mb-2','placeholder': 'Lacation'}})}}
<div style=\"width: 100%; display:flex; justify-content: flex-end\">
    <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
        <i class=\"fas fa-{{ icon|default('save') }}\"></i>
        {{ button_label|default('Save') }}
    </button>
</div>
{{ form_end(form) }}
", "event/_form.html.twig", "F:\\recruti_webapp\\templates\\event\\_form.html.twig");
    }
}
