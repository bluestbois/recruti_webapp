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

/* project/_form.html.twig */
class __TwigTemplate_8f7bc1cb9a14c2ceaa1a0ecf9be3e745e078c2b20081db8179cfd36075debb3b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Project title"]]);
        echo "
    <div class=\"alert alert-danger\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "description", [], "any", false, false, false, 4), 'errors');
        echo "
    </div>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Project description"]]);
        echo "
    <div class=\"alert alert-danger\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), 'errors');
        echo "
    </div>
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "date", [], "any", false, false, false, 10), 'label', ["label" => "Date"]);
        echo "
    <div class=\"row m-2\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12), "day", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "date", [], "any", false, false, false, 13), "month", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "date", [], "any", false, false, false, 14), "year", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control w-25 m-2"]]);
        echo "
    </div>
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "Recruiter", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control w-100 mt-2 mb-2"]]);
        echo "
    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
            <i class=\"fas fa-";
        // line 19
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 19, $this->source); })()), "save")) : ("save")), "html", null, true);
        echo "\"></i>
            ";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 20, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "
        </button>
</div>
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "project/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  95 => 20,  91 => 19,  85 => 16,  80 => 14,  76 => 13,  72 => 12,  67 => 10,  62 => 8,  57 => 6,  52 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    {{ form_widget(form.title,{'attr': {'class': 'form-control w-100 mt-2 mb-2', 'placeholder': 'Project title'}})}}
    <div class=\"alert alert-danger\">
        {{ form_errors(form.description) }}
    </div>
    {{form_widget(form.description,{'attr': {'class': 'form-control w-100 mt-2 mb-2', 'placeholder': 'Project description'}})}}
    <div class=\"alert alert-danger\">
        {{ form_errors(form.description) }}
    </div>
    {{ form_label(form.date, \"Date\") }}
    <div class=\"row m-2\">
        {{form_widget(form.date.day,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.date.month,{'attr': {'class': 'form-control w-25 m-2'}})}}
        {{form_widget(form.date.year,{'attr': {'class': 'form-control w-25 m-2'}})}}
    </div>
    {{form_row(form.Recruiter,{'attr': {'class': 'form-control w-100 mt-2 mb-2'}})}}
    <div style=\"width: 100%; display:flex; justify-content: flex-end\">
        <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
            <i class=\"fas fa-{{ icon|default('save') }}\"></i>
            {{ button_label|default('Save') }}
        </button>
</div>
{{ form_end(form) }}
", "project/_form.html.twig", "F:\\recruti_webapp\\templates\\project\\_form.html.twig");
    }
}
