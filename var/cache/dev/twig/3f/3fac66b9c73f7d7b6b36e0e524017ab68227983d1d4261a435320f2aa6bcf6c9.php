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

/* frontoffice/login/index.html.twig */
class __TwigTemplate_2615bb05a44cfd794eb364b8c0b0e3ae601f7b38b95477ad5db5a427e7191d43 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'signin' => [$this, 'block_signin'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/login/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/login/index.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html>
<head>
    <meta char=\"UTF-8\">
    <title>WorkWise Html Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/animate.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/line-awesome.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/line-awesome-font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/slick/slick.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/slick/slick-theme.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/responsive.css\">
</head>


<body class=\"sign-in\">


<div class=\"wrapper\">


    <div class=\"sign-in-page\">
        <div class=\"signin-popup\">
            <div class=\"signin-pop\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"cmp-info\">
                            <div class=\"cm-logo\">
                                <img src=\"images/cm-logo.png\" alt=\"\">
                                <p>Workwise,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
                            </div><!--cm-logo end-->
                            <img src=\"images/cm-main-img.png\" alt=\"\">
                        </div><!--cmp-info end-->
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"login-sec\">
                            <ul class=\"sign-control\">
                                <li data-tab=\"tab-1\" class=\"current\"><a href=\"#\" title=\"\">Sign in</a></li>
                                <li data-tab=\"tab-2\"><a href=\"#\" title=\"\">Sign up</a></li>
                            </ul>
                            <div class=\"sign_in_sec current\" id=\"tab-1\">

                                <h3>Sign in</h3>
                                ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "                                <div class=\"login-resources\">
                                    <h4>Login Via Social Account</h4>
                                    <ul>
                                        <li><a href=\"#\" title=\"\" class=\"fb\"><i class=\"fa fa-facebook\"></i>Login Via Facebook</a></li>
                                        <li><a href=\"#\" title=\"\" class=\"tw\"><i class=\"fa fa-twitter\"></i>Login Via Twitter</a></li>
                                    </ul>
                                </div><!--login-resources end-->
                            </div><!--sign_in_sec end-->
                            <div class=\"sign_in_sec\" id=\"tab-2\">
                                <div class=\"signup-tab\">
                                    <i class=\"fa fa-long-arrow-left\"></i>
                                    <h2>johndoe@example.com</h2>
                                    <ul>
                                        <li data-tab=\"tab-3\" class=\"current\"><a href=\"#\" title=\"\">User</a></li>
                                        <li data-tab=\"tab-4\"><a href=\"#\" title=\"\">Company</a></li>
                                    </ul>
                                </div><!--signup-tab end-->
                                <div class=\"dff-tab current\" id=\"tab-3\">
                                    ";
        // line 71
        $this->displayBlock('signin', $context, $blocks);
        // line 73
        echo "                                </div><!--dff-tab end-->
                                <div class=\"dff-tab\" id=\"tab-4\">
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"company-name\" placeholder=\"Company Name\">
                                                    <i class=\"la la-building\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"E-mail\" placeholder=\"E-mail\">
                                                    <i class=\"la la-globe\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"password\" name=\"password\" placeholder=\"Password\">
                                                    <i class=\"la la-lock\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"password\" name=\"repeat-password\" placeholder=\"Repeat Password\">
                                                    <i class=\"la la-lock\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"Address\" placeholder=\"Address\">
                                                    <i class=\"la la-home\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"Phone number\" placeholder=\"Phone number\">
                                                    <i class=\"la la-phone\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"description\" placeholder=\"description\">
                                                    <i class=\"la la-align-justify\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <select>
                                                        <option>Field</option>
                                                    </select>
                                                    <i class=\"la la-dropbox\"></i>
                                                    <span><i class=\"fa fa-ellipsis-h\"></i></span>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"checky-sec st2\">
                                                    <div class=\"fgt-sec\">
                                                        <input type=\"checkbox\" name=\"cc\" id=\"c3\">
                                                        <label for=\"c3\">
                                                            <span></span>
                                                        </label>
                                                        <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                    </div><!--fgt-sec end-->
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <button type=\"submit\" value=\"submit\" >  <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Get Started</a></button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--dff-tab end-->
                            </div>
                        </div><!--login-sec end-->
                    </div>
                </div>
            </div><!--signin-pop end-->
        </div><!--signin-popup end-->

    </div><!--sign-in-page end-->


</div><!--theme-layout end-->



<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"js/popper.js\"></script>
<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"lib/slick/slick.min.js\"></script>
<script type=\"text/javascript\" src=\"js/script.js\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_signin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "signin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "signin"));

        // line 72
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 72,  247 => 71,  237 => 52,  227 => 51,  190 => 140,  121 => 73,  119 => 71,  99 => 53,  97 => 51,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html>
<head>
    <meta char=\"UTF-8\">
    <title>WorkWise Html Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/animate.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/line-awesome.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/line-awesome-font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/slick/slick.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/slick/slick-theme.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/responsive.css\">
</head>


<body class=\"sign-in\">


<div class=\"wrapper\">


    <div class=\"sign-in-page\">
        <div class=\"signin-popup\">
            <div class=\"signin-pop\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"cmp-info\">
                            <div class=\"cm-logo\">
                                <img src=\"images/cm-logo.png\" alt=\"\">
                                <p>Workwise,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
                            </div><!--cm-logo end-->
                            <img src=\"images/cm-main-img.png\" alt=\"\">
                        </div><!--cmp-info end-->
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"login-sec\">
                            <ul class=\"sign-control\">
                                <li data-tab=\"tab-1\" class=\"current\"><a href=\"#\" title=\"\">Sign in</a></li>
                                <li data-tab=\"tab-2\"><a href=\"#\" title=\"\">Sign up</a></li>
                            </ul>
                            <div class=\"sign_in_sec current\" id=\"tab-1\">

                                <h3>Sign in</h3>
                                {% block body %}
                                {% endblock %}
                                <div class=\"login-resources\">
                                    <h4>Login Via Social Account</h4>
                                    <ul>
                                        <li><a href=\"#\" title=\"\" class=\"fb\"><i class=\"fa fa-facebook\"></i>Login Via Facebook</a></li>
                                        <li><a href=\"#\" title=\"\" class=\"tw\"><i class=\"fa fa-twitter\"></i>Login Via Twitter</a></li>
                                    </ul>
                                </div><!--login-resources end-->
                            </div><!--sign_in_sec end-->
                            <div class=\"sign_in_sec\" id=\"tab-2\">
                                <div class=\"signup-tab\">
                                    <i class=\"fa fa-long-arrow-left\"></i>
                                    <h2>johndoe@example.com</h2>
                                    <ul>
                                        <li data-tab=\"tab-3\" class=\"current\"><a href=\"#\" title=\"\">User</a></li>
                                        <li data-tab=\"tab-4\"><a href=\"#\" title=\"\">Company</a></li>
                                    </ul>
                                </div><!--signup-tab end-->
                                <div class=\"dff-tab current\" id=\"tab-3\">
                                    {% block signin %}
                                    {% endblock %}
                                </div><!--dff-tab end-->
                                <div class=\"dff-tab\" id=\"tab-4\">
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"company-name\" placeholder=\"Company Name\">
                                                    <i class=\"la la-building\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"E-mail\" placeholder=\"E-mail\">
                                                    <i class=\"la la-globe\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"password\" name=\"password\" placeholder=\"Password\">
                                                    <i class=\"la la-lock\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"password\" name=\"repeat-password\" placeholder=\"Repeat Password\">
                                                    <i class=\"la la-lock\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"Address\" placeholder=\"Address\">
                                                    <i class=\"la la-home\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"Phone number\" placeholder=\"Phone number\">
                                                    <i class=\"la la-phone\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <input type=\"text\" name=\"description\" placeholder=\"description\">
                                                    <i class=\"la la-align-justify\"></i>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"sn-field\">
                                                    <select>
                                                        <option>Field</option>
                                                    </select>
                                                    <i class=\"la la-dropbox\"></i>
                                                    <span><i class=\"fa fa-ellipsis-h\"></i></span>
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <div class=\"checky-sec st2\">
                                                    <div class=\"fgt-sec\">
                                                        <input type=\"checkbox\" name=\"cc\" id=\"c3\">
                                                        <label for=\"c3\">
                                                            <span></span>
                                                        </label>
                                                        <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                    </div><!--fgt-sec end-->
                                                </div>
                                            </div>
                                            <div class=\"col-lg-12 no-pdd\">
                                                <button type=\"submit\" value=\"submit\" >  <a href=\"{{ path('home') }}\"> Get Started</a></button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--dff-tab end-->
                            </div>
                        </div><!--login-sec end-->
                    </div>
                </div>
            </div><!--signin-pop end-->
        </div><!--signin-popup end-->

    </div><!--sign-in-page end-->


</div><!--theme-layout end-->



<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"js/popper.js\"></script>
<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"lib/slick/slick.min.js\"></script>
<script type=\"text/javascript\" src=\"js/script.js\"></script>
</body>
</html>
", "frontoffice/login/index.html.twig", "F:\\recruti_webapp\\templates\\frontoffice\\login\\index.html.twig");
    }
}
