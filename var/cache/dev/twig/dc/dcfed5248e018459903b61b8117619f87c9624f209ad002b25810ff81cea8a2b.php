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

/* test/_upload_form.html.twig */
class __TwigTemplate_39dcf6c5800f63332d29d5bb9bac7d6f41fdab310cf346bd1ff98b429123291f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/_upload_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/_upload_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["upload"]) || array_key_exists("upload", $context) ? $context["upload"] : (function () { throw new RuntimeError('Variable "upload" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

<div class=\"modal-body\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["upload"]) || array_key_exists("upload", $context) ? $context["upload"] : (function () { throw new RuntimeError('Variable "upload" does not exist.', 4, $this->source); })()), "File", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-control-file", "id" => "upload"]]);
        // line 7
        echo "
</div>

<div class=\"modal-footer\">
    <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
        <i class=\"fas fa-";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 12, $this->source); })()), "save")) : ("save")), "html", null, true);
        echo "\"></i>
        ";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 13, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "
    </button>
</div>

";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["upload"]) || array_key_exists("upload", $context) ? $context["upload"] : (function () { throw new RuntimeError('Variable "upload" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test/_upload_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  62 => 13,  58 => 12,  51 => 7,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(upload) }}

<div class=\"modal-body\">
    {{ form_widget(upload.File, { 'attr': {
        'class': 'form-control-file',
        'id': 'upload'
    } }) }}
</div>

<div class=\"modal-footer\">
    <button class=\"btn btn-primary btn-sm shadow-sm mt-2 mb-2\">
        <i class=\"fas fa-{{ icon|default('save') }}\"></i>
        {{ button_label|default('Save') }}
    </button>
</div>

{{ form_end(upload) }}
", "test/_upload_form.html.twig", "F:\\Esprit\\recruti_webapp\\templates\\test\\_upload_form.html.twig");
    }
}
