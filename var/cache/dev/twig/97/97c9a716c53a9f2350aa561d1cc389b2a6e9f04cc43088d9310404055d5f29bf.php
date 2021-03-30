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

/* base.html.twig */
class __TwigTemplate_e205d81826005fbf1bcb23bee86d79bb38d77ec98501c3b1d7eb56c79607c599 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'custom_stylesheets' => [$this, 'block_custom_stylesheets'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
            'dashboard_title' => [$this, 'block_dashboard_title'],
            'sidebar_items' => [$this, 'block_sidebar_items'],
            'topbar' => [$this, 'block_topbar'],
            'page_title' => [$this, 'block_page_title'],
            'gobackbtn' => [$this, 'block_gobackbtn'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
            'custom_js' => [$this, 'block_custom_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "    </head>


    <body id=\"page-top\">
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 663
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

            <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

            ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "                <!-- Custom fonts for this template-->
                <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
                <link
                        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
                        rel=\"stylesheet\">

                <!-- Custom styles for this template-->
                <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style_sidebar.css"), "html", null, true);
        echo "\">
                ";
        // line 22
        $this->displayBlock('custom_stylesheets', $context, $blocks);
        // line 24
        echo "            ";
        
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

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "            <!-- Page Wrapper -->
            <div id=\"wrapper\">

                ";
        // line 34
        $this->displayBlock('sidebar', $context, $blocks);
        // line 358
        echo "
                <!-- Content Wrapper -->
                <div id=\"content-wrapper\" class=\"d-flex flex-column\">

                    <!-- Main Content -->
                    <div id=\"content\">

                        ";
        // line 365
        $this->displayBlock('topbar', $context, $blocks);
        // line 570
        echo "
                        <!-- Begin Page Content -->
                        <div class=\"container-fluid\">

                            <!-- Page Heading -->
                            <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                                <h1 class=\"h3 mb-0 text-gray-800\">
                                ";
        // line 577
        $this->displayBlock('page_title', $context, $blocks);
        // line 580
        echo "                                </h1>
                                <div>
                                    ";
        // line 582
        $this->displayBlock('gobackbtn', $context, $blocks);
        // line 586
        echo "                                </div>
                            </div>

                            ";
        // line 589
        $this->displayBlock('main', $context, $blocks);
        // line 593
        echo "                        <!-- /.container-fluid -->
                        </div>
                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class=\"sticky-footer bg-white\">
                        ";
        // line 600
        $this->displayBlock('footer', $context, $blocks);
        // line 607
        echo "                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class=\"scroll-to-top rounded\" href=\"#page-top\">
                <i class=\"fas fa-angle-up\"></i>
            </a>

            <!-- Logout Modal-->
            <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">×</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                            <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 641
        $this->displayBlock('js', $context, $blocks);
        // line 662
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "                <!-- Sidebar -->
                <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

                    <!-- Sidebar - Brand -->
                    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                        <div class=\"sidebar-brand-icon\">
                            <img style=\"width: 40px\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small_logo.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"sidebar-brand-text mx-3\">";
        // line 43
        $this->displayBlock('dashboard_title', $context, $blocks);
        echo "</div>
                    </a>

                    ";
        // line 46
        $this->displayBlock('sidebar_items', $context, $blocks);
        // line 354
        echo "
                </ul>
                <!-- End of Sidebar -->
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_dashboard_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard_title"));

        echo " Recrutini ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_sidebar_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_items"));

        // line 47
        echo "                        <!-- Divider -->
                        <hr class=\"sidebar-divider my-0\">

                        <!-- Nav Item - Dashboard -->
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                                <span>Dashboard</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider\">

                        <!-- Heading -->
                        <div class=\"sidebar-heading\">
                            People
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseZero2\"
                               aria-expanded=\"true\" aria-controls=\"collapseZero2\">
                                <i class=\"fas fa-fw fa-user-tie\"></i>
                                <span>Recruiters</span>
                            </a>
                            <div id=\"collapseZero2\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Recruiters</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruiter_new");
        echo "\">Add a new recruiter</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruiter_index");
        echo "\">Browse recruiters</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseZero3\"
                               aria-expanded=\"true\" aria-controls=\"collapseZero3\">
                                <i class=\"fas fa-fw fa-users\"></i>
                                <span>Candidates</span>
                            </a>
                            <div id=\"collapseZero3\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Candidates</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_new");
        echo "\">Add a new candidate</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidate_index");
        echo "\">Browse candidates</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider\">

                        <!-- Heading -->
                        <div class=\"sidebar-heading\">
                            Working
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseZero-1\"
                               aria-expanded=\"true\" aria-controls=\"collapseZero-1\">
                                <i class=\"fas fa-fw fa-clipboard-check\"></i>
                                <span>Candidatures</span>
                            </a>
                            <div id=\"collapseZero-1\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Candidatures</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_new");
        echo "\">Add a new candidature</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_index");
        echo "\">Browse candidatures</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseZero\"
                               aria-expanded=\"true\" aria-controls=\"collapseZero\">
                                <i class=\"fas fa-fw fa-briefcase\"></i>
                                <span>Fields</span>
                            </a>
                            <div id=\"collapseZero\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Fields</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("field_new");
        echo "\">Add a new field</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("field_index");
        echo "\">Browse fields</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseOne\"
                               aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                <i class=\"fas fa-fw fa-mail-bulk\"></i>
                                <span>Jobs</span>
                            </a>
                            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Jobs</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_new");
        echo "\">Add a new job</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_index");
        echo "\">Browse jobs</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                                <i class=\"fas fa-fw fa-tools\"></i>
                                <span>Projects</span>
                            </a>
                            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage your projects</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_new");
        echo "\">Add a project</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_index");
        echo "\">Browse projects</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo2\"
                               aria-expanded=\"true\" aria-controls=\"collapseTwo2\">
                                <i class=\"fas fa-fw fa-laptop-code\"></i>
                                <span>Freelance</span>
                            </a>
                            <div id=\"collapseTwo2\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage your freelance jobs</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("freelance_new");
        echo "\">Add a freelance job</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("freelance_index");
        echo "\">Browse jobs</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider d-none d-md-block\">

                        <!-- Heading -->
                        <div class=\"sidebar-heading\">
                            Socializing
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree\"
                               aria-expanded=\"true\" aria-controls=\"collapseThree\">
                                <i class=\"fas fa-fw fa-bullhorn\"></i>
                                <span>Forums</span>
                            </a>
                            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage forums</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_new");
        echo "\">Add a forum</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        echo "\">Browse forums</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree2\"
                               aria-expanded=\"true\" aria-controls=\"collapseThree2\">
                                <i class=\"fas fa-fw fa-scroll\"></i>
                                <span>Posts</span>
                            </a>
                            <div id=\"collapseThree2\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage posts</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_new");
        echo "\">Add a post</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 220
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_index");
        echo "\">Browse posts</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree3\"
                               aria-expanded=\"true\" aria-controls=\"collapseThree3\">
                                <i class=\"fas fa-fw fa-comments\"></i>
                                <span>Comments</span>
                            </a>
                            <div id=\"collapseThree3\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage comments</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_new");
        echo "\">Add a comment</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_index");
        echo "\">Browse comments</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree4\"
                               aria-expanded=\"true\" aria-controls=\"collapseThree4\">
                                <i class=\"fas fa-fw fa-tags\"></i>
                                <span>Tags</span>
                            </a>
                            <div id=\"collapseThree4\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage tags</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 251
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_new");
        echo "\">Add a tag</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_index");
        echo "\">Browse tags</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseFour\"
                               aria-expanded=\"true\" aria-controls=\"collapseFour\">
                                <i class=\"fas fa-fw fa-calendar-alt\"></i>
                                <span>Events</span>
                            </a>
                            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage events</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_new");
        echo "\">Add an event</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 268
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_index");
        echo "\">Browse events</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseFour2\"
                               aria-expanded=\"true\" aria-controls=\"collapseFour2\">
                                <i class=\"fas fa-fw fa-list\"></i>
                                <span>Event types</span>
                            </a>
                            <div id=\"collapseFour2\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage events</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_type_new");
        echo "\">Add an event</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_type_index");
        echo "\">Browse events</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider d-none d-md-block\">

                        <!-- Heading -->
                        <div class=\"sidebar-heading\">
                            Testing
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseFive\"
                               aria-expanded=\"true\" aria-controls=\"collapseFive\">
                                <i class=\"fas fa-fw fa-vials\"></i>
                                <span>Tests</span>
                            </a>
                            <div id=\"collapseFive\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage tests</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 307
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_new");
        echo "\">Add a new test</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 308
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_index");
        echo "\">Browse tests</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseSix\"
                               aria-expanded=\"true\" aria-controls=\"collapseSix\">
                                <i class=\"fas fa-fw fa-question\"></i>
                                <span>Questions</span>
                            </a>
                            <div id=\"collapseSix\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Questions</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 323
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_new");
        echo "\">Add questions</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 324
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">Browse questions</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseSeven\"
                               aria-expanded=\"true\" aria-controls=\"collapseSeven\">
                                <i class=\"fas fa-fw fa-shapes\"></i>
                                <span>Categories</span>
                            </a>
                            <div id=\"collapseSeven\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Questions</h6>
                                    <a class=\"collapse-item\" href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_categorie_new");
        echo "\">Add categorie</a>
                                    <a class=\"collapse-item\" href=\"";
        // line 340
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_categorie_index");
        echo "\">Browse categories</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider d-none d-md-block\">

                        <!-- Sidebar Toggler (Sidebar)
                        <div class=\"text-center d-none d-md-inline\">
                            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
                        </div>
                        -->
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 365
    public function block_topbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        // line 366
        echo "                        <!-- Topbar -->
                        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                                <i class=\"fa fa-bars\"></i>
                            </button>

                            <!-- Topbar Search -->
                            <form
                                    class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                           aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Topbar Navbar -->
                            <ul class=\"navbar-nav ml-auto\">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class=\"nav-item dropdown no-arrow d-sm-none\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-search fa-fw\"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                         aria-labelledby=\"searchDropdown\">
                                        <form class=\"form-inline mr-auto w-100 navbar-search\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                                       placeholder=\"Search for...\" aria-label=\"Search\"
                                                       aria-describedby=\"basic-addon2\">
                                                <div class=\"input-group-append\">
                                                    <button class=\"btn btn-primary\" type=\"button\">
                                                        <i class=\"fas fa-search fa-sm\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <!-- Nav Item - Alerts -->
                                <li class=\"nav-item dropdown no-arrow mx-1\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-bell fa-fw\"></i>
                                        <!-- Counter - Alerts -->
                                        <span class=\"badge badge-danger badge-counter\">3+</span>
                                    </a>
                                    <!-- Dropdown - Alerts -->
                                    <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                         aria-labelledby=\"alertsDropdown\">
                                        <h6 class=\"dropdown-header\">
                                            Alerts Center
                                        </h6>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"mr-3\">
                                                <div class=\"icon-circle bg-primary\">
                                                    <i class=\"fas fa-file-alt text-white\"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"small text-gray-500\">December 12, 2019</div>
                                                <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"mr-3\">
                                                <div class=\"icon-circle bg-success\">
                                                    <i class=\"fas fa-donate text-white\"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"small text-gray-500\">December 7, 2019</div>
                                                \$290.29 has been deposited into your account!
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"mr-3\">
                                                <div class=\"icon-circle bg-warning\">
                                                    <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"small text-gray-500\">December 2, 2019</div>
                                                Spending Alert: We've noticed unusually high spending for your account.
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                                    </div>
                                </li>

                                <!-- Nav Item - Messages -->
                                <li class=\"nav-item dropdown no-arrow mx-1\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-envelope fa-fw\"></i>
                                        <!-- Counter - Messages -->
                                        <span class=\"badge badge-danger badge-counter\">7</span>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                         aria-labelledby=\"messagesDropdown\">
                                        <h6 class=\"dropdown-header\">
                                            Message Center
                                        </h6>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"dropdown-list-image mr-3\">
                                                <img class=\"rounded-circle\" src=\"img/undraw_profile_1.svg\"
                                                     alt=\"\">
                                                <div class=\"status-indicator bg-success\"></div>
                                            </div>
                                            <div class=\"font-weight-bold\">
                                                <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                                    problem I've been having.</div>
                                                <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"dropdown-list-image mr-3\">
                                                <img class=\"rounded-circle\" src=\"img/undraw_profile_2.svg\"
                                                     alt=\"\">
                                                <div class=\"status-indicator\"></div>
                                            </div>
                                            <div>
                                                <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                                    would you like them sent to you?</div>
                                                <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"dropdown-list-image mr-3\">
                                                <img class=\"rounded-circle\" src=\"img/undraw_profile_3.svg\"
                                                     alt=\"\">
                                                <div class=\"status-indicator bg-warning\"></div>
                                            </div>
                                            <div>
                                                <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                                    the progress so far, keep up the good work!</div>
                                                <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"dropdown-list-image mr-3\">
                                                <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                                     alt=\"\">
                                                <div class=\"status-indicator bg-success\"></div>
                                            </div>
                                            <div>
                                                <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                                    told me that people say this to all dogs, even if they aren't good...</div>
                                                <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                                    </div>
                                </li>

                                <div class=\"topbar-divider d-none d-sm-block\"></div>

                                <!-- Nav Item - User Information -->
                                <li class=\"nav-item dropdown no-arrow\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                        <img class=\"img-profile rounded-circle\"
                                             src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile.svg"), "html", null, true);
        echo "\">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                         aria-labelledby=\"userDropdown\">
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Profile
                                        </a>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Settings
                                        </a>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Activity Log
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                            <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 577
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 578
        echo "                                     Dashboard
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 582
    public function block_gobackbtn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gobackbtn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gobackbtn"));

        // line 583
        echo "                                        <!-- <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a> -->
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 589
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 590
        echo "                            <div class=\"row\">
                            </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 600
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 601
        echo "                        <div class=\"container my-auto\">
                            <div class=\"copyright text-center my-auto\">
                                <span>Copyright &copy; Recrutini 2021</span>
                            </div>
                        </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 641
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 642
        echo "            <!-- Bootstrap core JavaScript-->
            <script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Core plugin JavaScript-->
            <script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Custom scripts for all pages-->
            <script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Page level plugins -->
            <script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Page level custom scripts -->
            <script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>

                ";
        // line 659
        $this->displayBlock('custom_js', $context, $blocks);
        // line 661
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 659
    public function block_custom_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_js"));

        // line 660
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1190 => 660,  1180 => 659,  1170 => 661,  1168 => 659,  1163 => 657,  1159 => 656,  1153 => 653,  1147 => 650,  1141 => 647,  1135 => 644,  1131 => 643,  1128 => 642,  1118 => 641,  1103 => 601,  1093 => 600,  1081 => 590,  1071 => 589,  1059 => 583,  1049 => 582,  1038 => 578,  1028 => 577,  988 => 540,  812 => 366,  802 => 365,  778 => 340,  774 => 339,  756 => 324,  752 => 323,  734 => 308,  730 => 307,  704 => 284,  700 => 283,  682 => 268,  678 => 267,  660 => 252,  656 => 251,  638 => 236,  634 => 235,  616 => 220,  612 => 219,  594 => 204,  590 => 203,  564 => 180,  560 => 179,  542 => 164,  538 => 163,  520 => 148,  516 => 147,  498 => 132,  494 => 131,  476 => 116,  472 => 115,  446 => 92,  442 => 91,  424 => 76,  420 => 75,  394 => 52,  387 => 47,  377 => 46,  358 => 43,  345 => 354,  343 => 46,  337 => 43,  332 => 41,  327 => 39,  321 => 35,  311 => 34,  301 => 662,  299 => 641,  263 => 607,  261 => 600,  252 => 593,  250 => 589,  245 => 586,  243 => 582,  239 => 580,  237 => 577,  228 => 570,  226 => 365,  217 => 358,  215 => 34,  210 => 31,  200 => 30,  190 => 23,  180 => 22,  170 => 24,  168 => 22,  164 => 21,  160 => 20,  151 => 14,  148 => 13,  138 => 12,  119 => 10,  109 => 25,  107 => 12,  102 => 10,  96 => 6,  86 => 5,  74 => 663,  72 => 30,  66 => 26,  64 => 5,  58 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

            <title>{% block title %}Dashboard{% endblock %}</title>

            {% block stylesheets %}
                <!-- Custom fonts for this template-->
                <link href=\"{{ asset(\"vendor/fontawesome-free/css/all.min.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
                <link
                        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
                        rel=\"stylesheet\">

                <!-- Custom styles for this template-->
                <link href=\"{{ asset(\"css/sb-admin-2.min.css\") }}\" rel=\"stylesheet\">
                <link rel=\"stylesheet\" href=\"{{ asset(\"css/style_sidebar.css\") }}\">
                {% block custom_stylesheets %}
                {% endblock %}
            {% endblock %}
        {% endblock %}
    </head>


    <body id=\"page-top\">
        {% block body %}
            <!-- Page Wrapper -->
            <div id=\"wrapper\">

                {% block sidebar %}
                <!-- Sidebar -->
                <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

                    <!-- Sidebar - Brand -->
                    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{ path(\"home\") }}\">
                        <div class=\"sidebar-brand-icon\">
                            <img style=\"width: 40px\" src=\"{{ asset(\"images/small_logo.png\") }}\">
                        </div>
                        <div class=\"sidebar-brand-text mx-3\">{% block dashboard_title %} Recrutini {% endblock %}</div>
                    </a>

                    {% block sidebar_items %}
                        <!-- Divider -->
                        <hr class=\"sidebar-divider my-0\">

                        <!-- Nav Item - Dashboard -->
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ path(\"home\") }}\">
                                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                                <span>Dashboard</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider\">

                        <!-- Heading -->
                        <div class=\"sidebar-heading\">
                            People
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseZero2\"
                               aria-expanded=\"true\" aria-controls=\"collapseZero2\">
                                <i class=\"fas fa-fw fa-user-tie\"></i>
                                <span>Recruiters</span>
                            </a>
                            <div id=\"collapseZero2\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Recruiters</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"recruiter_new\") }}\">Add a new recruiter</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"recruiter_index\") }}\">Browse recruiters</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseZero3\"
                               aria-expanded=\"true\" aria-controls=\"collapseZero3\">
                                <i class=\"fas fa-fw fa-users\"></i>
                                <span>Candidates</span>
                            </a>
                            <div id=\"collapseZero3\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Candidates</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"candidate_new\") }}\">Add a new candidate</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"candidate_index\") }}\">Browse candidates</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider\">

                        <!-- Heading -->
                        <div class=\"sidebar-heading\">
                            Working
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseZero-1\"
                               aria-expanded=\"true\" aria-controls=\"collapseZero-1\">
                                <i class=\"fas fa-fw fa-clipboard-check\"></i>
                                <span>Candidatures</span>
                            </a>
                            <div id=\"collapseZero-1\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Candidatures</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"candidature_new\") }}\">Add a new candidature</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"candidature_index\") }}\">Browse candidatures</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseZero\"
                               aria-expanded=\"true\" aria-controls=\"collapseZero\">
                                <i class=\"fas fa-fw fa-briefcase\"></i>
                                <span>Fields</span>
                            </a>
                            <div id=\"collapseZero\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Fields</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"field_new\") }}\">Add a new field</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"field_index\") }}\">Browse fields</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseOne\"
                               aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                <i class=\"fas fa-fw fa-mail-bulk\"></i>
                                <span>Jobs</span>
                            </a>
                            <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Jobs</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"job_new\") }}\">Add a new job</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"job_index\") }}\">Browse jobs</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                               aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                                <i class=\"fas fa-fw fa-tools\"></i>
                                <span>Projects</span>
                            </a>
                            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage your projects</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"project_new\") }}\">Add a project</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"project_index\") }}\">Browse projects</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo2\"
                               aria-expanded=\"true\" aria-controls=\"collapseTwo2\">
                                <i class=\"fas fa-fw fa-laptop-code\"></i>
                                <span>Freelance</span>
                            </a>
                            <div id=\"collapseTwo2\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage your freelance jobs</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"freelance_new\") }}\">Add a freelance job</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"freelance_index\") }}\">Browse jobs</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider d-none d-md-block\">

                        <!-- Heading -->
                        <div class=\"sidebar-heading\">
                            Socializing
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree\"
                               aria-expanded=\"true\" aria-controls=\"collapseThree\">
                                <i class=\"fas fa-fw fa-bullhorn\"></i>
                                <span>Forums</span>
                            </a>
                            <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage forums</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"forum_new\") }}\">Add a forum</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"forum_index\") }}\">Browse forums</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree2\"
                               aria-expanded=\"true\" aria-controls=\"collapseThree2\">
                                <i class=\"fas fa-fw fa-scroll\"></i>
                                <span>Posts</span>
                            </a>
                            <div id=\"collapseThree2\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage posts</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"post_new\") }}\">Add a post</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"post_index\") }}\">Browse posts</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree3\"
                               aria-expanded=\"true\" aria-controls=\"collapseThree3\">
                                <i class=\"fas fa-fw fa-comments\"></i>
                                <span>Comments</span>
                            </a>
                            <div id=\"collapseThree3\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage comments</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"comment_new\") }}\">Add a comment</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"comment_index\") }}\">Browse comments</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree4\"
                               aria-expanded=\"true\" aria-controls=\"collapseThree4\">
                                <i class=\"fas fa-fw fa-tags\"></i>
                                <span>Tags</span>
                            </a>
                            <div id=\"collapseThree4\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage tags</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"tag_new\") }}\">Add a tag</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"tag_index\") }}\">Browse tags</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseFour\"
                               aria-expanded=\"true\" aria-controls=\"collapseFour\">
                                <i class=\"fas fa-fw fa-calendar-alt\"></i>
                                <span>Events</span>
                            </a>
                            <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage events</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"event_new\") }}\">Add an event</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"event_index\") }}\">Browse events</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseFour2\"
                               aria-expanded=\"true\" aria-controls=\"collapseFour2\">
                                <i class=\"fas fa-fw fa-list\"></i>
                                <span>Event types</span>
                            </a>
                            <div id=\"collapseFour2\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage events</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"event_type_new\") }}\">Add an event</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"event_type_index\") }}\">Browse events</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider d-none d-md-block\">

                        <!-- Heading -->
                        <div class=\"sidebar-heading\">
                            Testing
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseFive\"
                               aria-expanded=\"true\" aria-controls=\"collapseFive\">
                                <i class=\"fas fa-fw fa-vials\"></i>
                                <span>Tests</span>
                            </a>
                            <div id=\"collapseFive\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage tests</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"test_new\") }}\">Add a new test</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"test_index\") }}\">Browse tests</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseSix\"
                               aria-expanded=\"true\" aria-controls=\"collapseSix\">
                                <i class=\"fas fa-fw fa-question\"></i>
                                <span>Questions</span>
                            </a>
                            <div id=\"collapseSix\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Questions</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"question_new\") }}\">Add questions</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"question_index\") }}\">Browse questions</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseSeven\"
                               aria-expanded=\"true\" aria-controls=\"collapseSeven\">
                                <i class=\"fas fa-fw fa-shapes\"></i>
                                <span>Categories</span>
                            </a>
                            <div id=\"collapseSeven\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                                <div class=\"bg-white py-2 collapse-inner rounded\">
                                    <h6 class=\"collapse-header\">Manage Questions</h6>
                                    <a class=\"collapse-item\" href=\"{{ path(\"test_categorie_new\") }}\">Add categorie</a>
                                    <a class=\"collapse-item\" href=\"{{ path(\"test_categorie_index\") }}\">Browse categories</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class=\"sidebar-divider d-none d-md-block\">

                        <!-- Sidebar Toggler (Sidebar)
                        <div class=\"text-center d-none d-md-inline\">
                            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
                        </div>
                        -->
                    {% endblock %}

                </ul>
                <!-- End of Sidebar -->
                {% endblock %}

                <!-- Content Wrapper -->
                <div id=\"content-wrapper\" class=\"d-flex flex-column\">

                    <!-- Main Content -->
                    <div id=\"content\">

                        {% block topbar %}
                        <!-- Topbar -->
                        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                                <i class=\"fa fa-bars\"></i>
                            </button>

                            <!-- Topbar Search -->
                            <form
                                    class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                           aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Topbar Navbar -->
                            <ul class=\"navbar-nav ml-auto\">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class=\"nav-item dropdown no-arrow d-sm-none\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-search fa-fw\"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                         aria-labelledby=\"searchDropdown\">
                                        <form class=\"form-inline mr-auto w-100 navbar-search\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                                       placeholder=\"Search for...\" aria-label=\"Search\"
                                                       aria-describedby=\"basic-addon2\">
                                                <div class=\"input-group-append\">
                                                    <button class=\"btn btn-primary\" type=\"button\">
                                                        <i class=\"fas fa-search fa-sm\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <!-- Nav Item - Alerts -->
                                <li class=\"nav-item dropdown no-arrow mx-1\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-bell fa-fw\"></i>
                                        <!-- Counter - Alerts -->
                                        <span class=\"badge badge-danger badge-counter\">3+</span>
                                    </a>
                                    <!-- Dropdown - Alerts -->
                                    <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                         aria-labelledby=\"alertsDropdown\">
                                        <h6 class=\"dropdown-header\">
                                            Alerts Center
                                        </h6>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"mr-3\">
                                                <div class=\"icon-circle bg-primary\">
                                                    <i class=\"fas fa-file-alt text-white\"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"small text-gray-500\">December 12, 2019</div>
                                                <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"mr-3\">
                                                <div class=\"icon-circle bg-success\">
                                                    <i class=\"fas fa-donate text-white\"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"small text-gray-500\">December 7, 2019</div>
                                                \$290.29 has been deposited into your account!
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"mr-3\">
                                                <div class=\"icon-circle bg-warning\">
                                                    <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class=\"small text-gray-500\">December 2, 2019</div>
                                                Spending Alert: We've noticed unusually high spending for your account.
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                                    </div>
                                </li>

                                <!-- Nav Item - Messages -->
                                <li class=\"nav-item dropdown no-arrow mx-1\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-envelope fa-fw\"></i>
                                        <!-- Counter - Messages -->
                                        <span class=\"badge badge-danger badge-counter\">7</span>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                         aria-labelledby=\"messagesDropdown\">
                                        <h6 class=\"dropdown-header\">
                                            Message Center
                                        </h6>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"dropdown-list-image mr-3\">
                                                <img class=\"rounded-circle\" src=\"img/undraw_profile_1.svg\"
                                                     alt=\"\">
                                                <div class=\"status-indicator bg-success\"></div>
                                            </div>
                                            <div class=\"font-weight-bold\">
                                                <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                                    problem I've been having.</div>
                                                <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"dropdown-list-image mr-3\">
                                                <img class=\"rounded-circle\" src=\"img/undraw_profile_2.svg\"
                                                     alt=\"\">
                                                <div class=\"status-indicator\"></div>
                                            </div>
                                            <div>
                                                <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                                    would you like them sent to you?</div>
                                                <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"dropdown-list-image mr-3\">
                                                <img class=\"rounded-circle\" src=\"img/undraw_profile_3.svg\"
                                                     alt=\"\">
                                                <div class=\"status-indicator bg-warning\"></div>
                                            </div>
                                            <div>
                                                <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                                    the progress so far, keep up the good work!</div>
                                                <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                            <div class=\"dropdown-list-image mr-3\">
                                                <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                                     alt=\"\">
                                                <div class=\"status-indicator bg-success\"></div>
                                            </div>
                                            <div>
                                                <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                                    told me that people say this to all dogs, even if they aren't good...</div>
                                                <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                            </div>
                                        </a>
                                        <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                                    </div>
                                </li>

                                <div class=\"topbar-divider d-none d-sm-block\"></div>

                                <!-- Nav Item - User Information -->
                                <li class=\"nav-item dropdown no-arrow\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                        <img class=\"img-profile rounded-circle\"
                                             src=\"{{ asset(\"img/undraw_profile.svg\") }}\">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                         aria-labelledby=\"userDropdown\">
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Profile
                                        </a>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Settings
                                        </a>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Activity Log
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                            <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->
                        {% endblock %}

                        <!-- Begin Page Content -->
                        <div class=\"container-fluid\">

                            <!-- Page Heading -->
                            <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                                <h1 class=\"h3 mb-0 text-gray-800\">
                                {% block page_title %}
                                     Dashboard
                                {% endblock %}
                                </h1>
                                <div>
                                    {% block gobackbtn %}
                                        <!-- <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a> -->
                                    {% endblock %}
                                </div>
                            </div>

                            {% block main %}
                            <div class=\"row\">
                            </div>
                            {% endblock %}
                        <!-- /.container-fluid -->
                        </div>
                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class=\"sticky-footer bg-white\">
                        {% block footer %}
                        <div class=\"container my-auto\">
                            <div class=\"copyright text-center my-auto\">
                                <span>Copyright &copy; Recrutini 2021</span>
                            </div>
                        </div>
                        {% endblock %}
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class=\"scroll-to-top rounded\" href=\"#page-top\">
                <i class=\"fas fa-angle-up\"></i>
            </a>

            <!-- Logout Modal-->
            <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">×</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                            <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            {% block js %}
            <!-- Bootstrap core JavaScript-->
            <script src=\"{{ asset(\"vendor/jquery/jquery.min.js\") }}\"></script>
            <script src=\"{{ asset(\"vendor/bootstrap/js/bootstrap.bundle.min.js\") }}\"></script>

            <!-- Core plugin JavaScript-->
            <script src=\"{{ asset(\"vendor/jquery-easing/jquery.easing.min.js\") }}\"></script>

            <!-- Custom scripts for all pages-->
            <script src=\"{{ asset(\"js/sb-admin-2.min.js\") }}\"></script>

            <!-- Page level plugins -->
            <script src=\"{{ asset(\"vendor/chart.js/Chart.min.js\") }}\"></script>

            <!-- Page level custom scripts -->
            <script src=\"{{ asset(\"js/demo/chart-area-demo.js\") }}\"></script>
            <script src=\"{{ asset(\"js/demo/chart-pie-demo.js\") }}\"></script>

                {% block custom_js %}
                {% endblock %}
            {% endblock %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "F:\\recruti_webapp\\templates\\base.html.twig");
    }
}
