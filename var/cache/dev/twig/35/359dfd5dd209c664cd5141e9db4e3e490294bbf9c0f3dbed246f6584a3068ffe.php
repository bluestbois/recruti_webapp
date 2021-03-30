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

/* question/_form.html.twig */
class __TwigTemplate_60b7a5c6af8beca3e072aa1f1fc00073a02edf8258544f682a0930b01728f6df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "statement", [], "any", false, false, false, 2), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "statement"]]);
        // line 5
        echo "
    <div class=\"alert alert-danger\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "statement", [], "any", false, false, false, 7), 'errors');
        echo "
    </div>

    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "answerA", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "First answer"]]);
        // line 13
        echo "
    <div class=\"alert alert-danger\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "answerA", [], "any", false, false, false, 15), 'errors');
        echo "
    </div>

    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "answerB", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Second answer"]]);
        // line 21
        echo "
    <div class=\"alert alert-danger\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "answerB", [], "any", false, false, false, 23), 'errors');
        echo "
    </div>

    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "answerC", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Third answer"]]);
        // line 29
        echo "
    <div class=\"alert alert-danger\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "answerC", [], "any", false, false, false, 31), 'errors');
        echo "
    </div>

    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "rightAnswer", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Right answer"]]);
        // line 37
        echo "

    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "points", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control w-100 mt-2 mb-2", "placeholder" => "Points"]]);
        // line 42
        echo "
    <div class=\"alert alert-danger\">
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "points", [], "any", false, false, false, 44), 'errors');
        echo "
    </div>

    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "Test", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control w-100 mt-2 mb-2"]]);
        // line 49
        echo "
<div style=\"width: 100%; display:flex; justify-content: flex-end\">
    <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
        <i class=\"fas fa-";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 52, $this->source); })()), "save")) : ("save")), "html", null, true);
        echo "\"></i>
        ";
        // line 53
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 53, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "
    </button>
</div>
";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 56,  124 => 53,  120 => 52,  115 => 49,  113 => 47,  107 => 44,  103 => 42,  101 => 39,  97 => 37,  95 => 34,  89 => 31,  85 => 29,  83 => 26,  77 => 23,  73 => 21,  71 => 18,  65 => 15,  61 => 13,  59 => 10,  53 => 7,  49 => 5,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    {{ form_widget(form.statement, { 'attr': {
        'class': 'form-control w-100 mt-2 mb-2',
        'placeholder': 'statement'
    } }) }}
    <div class=\"alert alert-danger\">
        {{ form_errors(form.statement) }}
    </div>

    {{ form_widget(form.answerA, { 'attr': {
        'class': 'form-control w-100 mt-2 mb-2',
        'placeholder': 'First answer'
    } }) }}
    <div class=\"alert alert-danger\">
        {{ form_errors(form.answerA) }}
    </div>

    {{ form_widget(form.answerB, { 'attr': {
        'class': 'form-control w-100 mt-2 mb-2',
        'placeholder': 'Second answer'
    } }) }}
    <div class=\"alert alert-danger\">
        {{ form_errors(form.answerB) }}
    </div>

    {{ form_widget(form.answerC, { 'attr': {
        'class': 'form-control w-100 mt-2 mb-2',
        'placeholder': 'Third answer'
    } }) }}
    <div class=\"alert alert-danger\">
        {{ form_errors(form.answerC) }}
    </div>

    {{ form_row(form.rightAnswer, { 'attr': {
        'class': 'form-control w-100 mt-2 mb-2',
        'placeholder': 'Right answer'
    } }) }}

    {{ form_widget(form.points, { 'attr': {
        'class': 'form-control w-100 mt-2 mb-2',
        'placeholder': 'Points'
    } }) }}
    <div class=\"alert alert-danger\">
        {{ form_errors(form.points) }}
    </div>

    {{ form_row(form.Test, { 'attr': {
        'class': 'form-control w-100 mt-2 mb-2'
    } }) }}
<div style=\"width: 100%; display:flex; justify-content: flex-end\">
    <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
        <i class=\"fas fa-{{ icon|default('save') }}\"></i>
        {{ button_label|default('Save') }}
    </button>
</div>
{{ form_end(form) }}
", "question/_form.html.twig", "F:\\recruti_webapp\\templates\\question\\_form.html.twig");
    }
}
