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

/* frontoffice/base.html.twig */
class __TwigTemplate_bd2f374c003dcadf7e20bb058cd7611dd586387453e18339299650329fee120f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'custom_stylesheets' => [$this, 'block_custom_stylesheets'],
            'body' => [$this, 'block_body'],
            'navbar' => [$this, 'block_navbar'],
            'user_settings' => [$this, 'block_user_settings'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    </head>

    <body>
    ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 219
        echo "    </body>

    ";
        // line 221
        $this->displayBlock('javascripts', $context, $blocks);
        // line 230
        echo "
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/line-awesome.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/line-awesome-font-awesome.min.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick-theme.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
                ";
        // line 22
        $this->displayBlock('custom_stylesheets', $context, $blocks);
        // line 24
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_custom_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_stylesheets"));

        // line 23
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "        ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 213
        echo "

        ";
        // line 215
        $this->displayBlock('main', $context, $blocks);
        // line 217
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 30
        echo "            <header style=\"z-index: 1000; margin-bottom: 30px;\">
            <div class=\"container\">
                <div class=\"header-data\">
                    <div class=\"logo\">
                        <a href=\"#\" title=\"\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div><!--logo end-->
                    <div class=\"search-bar\">
                        <form>
                            <input type=\"text\" name=\"search\" placeholder=\"Search...\">
                            <button type=\"submit\"><i class=\"la la-search\"></i></button>
                        </form>
                    </div><!--search-bar end-->
                    <nav>
                        <ul>
                            <li>
                                <a href=\"#\" title=\"\">
                                    <span><i class=\"la la-home\"></i></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_project_index");
        echo "\" title=\"\">
                                    <span><i class=\"la la-puzzle-piece\"></i></span>
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href=\"\" title=\"\">
                                    <span><i class=\"la la-laptop\"></i></span>
                                    Freelance
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" title=\"\">
                                    <span><i class=\"la la-briefcase\"></i></span>
                                    Jobs
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" title=\"\">
                                    <span><i class=\"la la-calendar\"></i></span>
                                    Events
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" title=\"\" class=\"not-box-open\">
                                    <span><i class=\"la la-envelope\"></i></span>
                                    Forum
                                </a>
                                <div class=\"notification-box msg\">
                                    <div class=\"nt-title\">
                                        <h4>Setting</h4>
                                        <a href=\"#\" title=\"\">Clear all</a>
                                    </div>
                                    <div class=\"nott-list\">
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resources/ny-img1.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resources/ny-img2.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resources/ny-img3.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"view-all-nots\">
                                            <a href=\"#\" title=\"\">View All Messsages</a>
                                        </div>
                                    </div><!--nott-list end-->
                                </div><!--notification-box end-->
                            </li>
                            <li>
                                <a href=\"#\" title=\"\" class=\"not-box-open\">
                                    <span><i class=\"la la-bolt\"></i></span>
                                    Notification
                                </a>
                                <div class=\"notification-box\">
                                    <div class=\"nt-title\">
                                        <h4>Setting</h4>
                                        <a href=\"#\" title=\"\">Clear all</a>
                                    </div>
                                    <div class=\"nott-list\">
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resources/ny-img1.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resources/ny-img2.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resources/ny-img3.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resources/ny-img2.png"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"view-all-nots\">
                                            <a href=\"#\" title=\"\">View All Notification</a>
                                        </div>
                                    </div><!--nott-list end-->
                                </div><!--notification-box end-->
                            </li>
                        </ul>
                    </nav><!--nav end-->
                    <div class=\"menu-btn\">
                        <a href=\"#\" title=\"\"><i class=\"fa fa-bars\"></i></a>
                    </div><!--menu-btn end-->
                    <div class=\"user-account\">
                        <div class=\"user-info\">
                            <img src=\"http://via.placeholder.com/30x30\" alt=\"\">
                            <a href=\"#\" title=\"\">John</a>
                            <i class=\"la la-sort-down\"></i>
                        </div>

                        ";
        // line 186
        $this->displayBlock('user_settings', $context, $blocks);
        // line 207
        echo "
                    </div>
                </div><!--header-data end-->
            </div>
        </header><!--header end-->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_user_settings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_settings"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_settings"));

        // line 187
        echo "                        <div class=\"user-account-settingss\">
                            <h3><a href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index");
        echo "\">Go to dashboard</a></h3>

                            <h3>Custom Status</h3>
                            <div class=\"search_form\">
                                <form>
                                    <input type=\"text\" name=\"search\">
                                    <button type=\"submit\">Ok</button>
                                </form>
                            </div><!--search_form end-->
                            <h3>Setting</h3>
                            <ul class=\"us-links\">
                                <li><a href=\"profile-account-setting.html\" title=\"\">Account Setting</a></li>
                                <li><a href=\"#\" title=\"\">Privacy</a></li>
                                <li><a href=\"#\" title=\"\">Faqs</a></li>
                                <li><a href=\"#\" title=\"\">Terms & Conditions</a></li>
                            </ul>
                            <h3 class=\"tc\"><a href=\"sign-in.html\" title=\"\">Logout</a></h3>
                        </div><!--user-account-settingss end-->
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 216
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 221
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 222
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mCustomScrollbar.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollbar.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  533 => 228,  529 => 227,  525 => 226,  521 => 225,  517 => 224,  513 => 223,  508 => 222,  498 => 221,  488 => 216,  478 => 215,  449 => 188,  446 => 187,  436 => 186,  421 => 207,  419 => 186,  391 => 161,  379 => 152,  367 => 143,  355 => 134,  325 => 107,  312 => 97,  299 => 87,  260 => 51,  240 => 34,  234 => 30,  224 => 29,  213 => 217,  211 => 215,  207 => 213,  204 => 29,  194 => 28,  184 => 23,  174 => 22,  164 => 24,  162 => 22,  158 => 21,  154 => 20,  150 => 19,  146 => 18,  142 => 17,  138 => 16,  134 => 15,  130 => 14,  126 => 13,  121 => 12,  111 => 11,  92 => 8,  80 => 230,  78 => 221,  74 => 219,  72 => 28,  67 => 25,  64 => 11,  60 => 8,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('css/animate.css') }}\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('css/bootstrap.min.css') }}\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('css/line-awesome.css') }}\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('css/line-awesome-font-awesome.min.css') }}\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('css/font-awesome.min.css') }}\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('css/jquery.mCustomScrollbar.min.css') }}\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('lib/slick/slick.css') }}\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('lib/slick/slick-theme.css') }}\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('css/style.css') }}\">
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('css/responsive.css') }}\">
                {% block custom_stylesheets %}
                {% endblock %}
        {% endblock %}
    </head>

    <body>
    {% block body %}
        {% block navbar %}
            <header style=\"z-index: 1000; margin-bottom: 30px;\">
            <div class=\"container\">
                <div class=\"header-data\">
                    <div class=\"logo\">
                        <a href=\"#\" title=\"\"><img src=\"{{ asset ('images/logo.png') }}\" alt=\"\"></a>
                    </div><!--logo end-->
                    <div class=\"search-bar\">
                        <form>
                            <input type=\"text\" name=\"search\" placeholder=\"Search...\">
                            <button type=\"submit\"><i class=\"la la-search\"></i></button>
                        </form>
                    </div><!--search-bar end-->
                    <nav>
                        <ul>
                            <li>
                                <a href=\"#\" title=\"\">
                                    <span><i class=\"la la-home\"></i></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path(\"front_project_index\") }}\" title=\"\">
                                    <span><i class=\"la la-puzzle-piece\"></i></span>
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href=\"\" title=\"\">
                                    <span><i class=\"la la-laptop\"></i></span>
                                    Freelance
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" title=\"\">
                                    <span><i class=\"la la-briefcase\"></i></span>
                                    Jobs
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" title=\"\">
                                    <span><i class=\"la la-calendar\"></i></span>
                                    Events
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" title=\"\" class=\"not-box-open\">
                                    <span><i class=\"la la-envelope\"></i></span>
                                    Forum
                                </a>
                                <div class=\"notification-box msg\">
                                    <div class=\"nt-title\">
                                        <h4>Setting</h4>
                                        <a href=\"#\" title=\"\">Clear all</a>
                                    </div>
                                    <div class=\"nott-list\">
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"{{ asset ('images/resources/ny-img1.png') }}\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"{{ asset('images/resources/ny-img2.png') }}\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"{{ asset('images/resources/ny-img3.png') }}\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"view-all-nots\">
                                            <a href=\"#\" title=\"\">View All Messsages</a>
                                        </div>
                                    </div><!--nott-list end-->
                                </div><!--notification-box end-->
                            </li>
                            <li>
                                <a href=\"#\" title=\"\" class=\"not-box-open\">
                                    <span><i class=\"la la-bolt\"></i></span>
                                    Notification
                                </a>
                                <div class=\"notification-box\">
                                    <div class=\"nt-title\">
                                        <h4>Setting</h4>
                                        <a href=\"#\" title=\"\">Clear all</a>
                                    </div>
                                    <div class=\"nott-list\">
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"{{ asset ('images/resources/ny-img1.png') }}\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"{{ asset('images/resources/ny-img2.png') }}\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"{{ asset('images/resources/ny-img3.png') }}\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"notfication-details\">
                                            <div class=\"noty-user-img\">
                                                <img src=\"{{ asset('images/resources/ny-img2.png') }}\" alt=\"\">
                                            </div>
                                            <div class=\"notification-info\">
                                                <h3><a href=\"#\" title=\"\">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div><!--notification-info -->
                                        </div>
                                        <div class=\"view-all-nots\">
                                            <a href=\"#\" title=\"\">View All Notification</a>
                                        </div>
                                    </div><!--nott-list end-->
                                </div><!--notification-box end-->
                            </li>
                        </ul>
                    </nav><!--nav end-->
                    <div class=\"menu-btn\">
                        <a href=\"#\" title=\"\"><i class=\"fa fa-bars\"></i></a>
                    </div><!--menu-btn end-->
                    <div class=\"user-account\">
                        <div class=\"user-info\">
                            <img src=\"http://via.placeholder.com/30x30\" alt=\"\">
                            <a href=\"#\" title=\"\">John</a>
                            <i class=\"la la-sort-down\"></i>
                        </div>

                        {% block user_settings %}
                        <div class=\"user-account-settingss\">
                            <h3><a href=\"{{ path(\"post_index\") }}\">Go to dashboard</a></h3>

                            <h3>Custom Status</h3>
                            <div class=\"search_form\">
                                <form>
                                    <input type=\"text\" name=\"search\">
                                    <button type=\"submit\">Ok</button>
                                </form>
                            </div><!--search_form end-->
                            <h3>Setting</h3>
                            <ul class=\"us-links\">
                                <li><a href=\"profile-account-setting.html\" title=\"\">Account Setting</a></li>
                                <li><a href=\"#\" title=\"\">Privacy</a></li>
                                <li><a href=\"#\" title=\"\">Faqs</a></li>
                                <li><a href=\"#\" title=\"\">Terms & Conditions</a></li>
                            </ul>
                            <h3 class=\"tc\"><a href=\"sign-in.html\" title=\"\">Logout</a></h3>
                        </div><!--user-account-settingss end-->
                        {% endblock %}

                    </div>
                </div><!--header-data end-->
            </div>
        </header><!--header end-->
        {% endblock %}


        {% block main %}
        {% endblock %}

    {% endblock %}
    </body>

    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset ('js/jquery.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('js/popper.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('js/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('js/jquery.mCustomScrollbar.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('lib/slick/slick.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('js/scrollbar.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('js/script.js') }}\"></script>
    {% endblock %}

</html>
", "frontoffice/base.html.twig", "F:\\recruti_webapp\\templates\\frontoffice\\base.html.twig");
    }
}
