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

/* frontoffice/front/index.html.twig */
class __TwigTemplate_60475ac70285ad840266f210ee287b9e163e68b9a34bc74430f4c285aa43ef07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "frontoffice/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontoffice/front/index.html.twig"));

        $this->parent = $this->loadTemplate("frontoffice/base.html.twig", "frontoffice/front/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello FrontController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "           <div class=\"wrapper\">

            <main>
                <div class=\"main-section\">
                    <div class=\"container\">
                        <div class=\"main-section-data\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-4 pd-left-none no-pd\">
                                    <div class=\"main-left-sidebar no-margin\">
                                        <div class=\"user-data full-width\">
                                            <div class=\"user-profile\">
                                                <div class=\"username-dt\">
                                                    <div class=\"usr-pic\">
                                                        <img src=\"http://via.placeholder.com/100x100\" alt=\"\">
                                                    </div>
                                                </div><!--username-dt end-->
                                                <div class=\"user-specs\">
                                                    <h3>John Doe</h3>
                                                    <span>Graphic Designer at Self Employed</span>
                                                </div>
                                            </div><!--user-profile end-->
                                            <ul class=\"user-fw-status\">
                                                <li>
                                                    <a href=\"#\" title=\"\">View Profile</a>
                                                </li>
                                            </ul>
                                        </div><!--user-data end-->
                                    </div><!--main-left-sidebar end-->
                                </div>
                                <div class=\"col-lg-6 col-md-8 no-pd\">
                                    <div class=\"main-ws-sec\">
                                        <div class=\"post-topbar\">
                                            <div class=\"user-picy\">
                                                <img src=\"http://via.placeholder.com/100x100\" alt=\"\">
                                            </div>
                                            <div class=\"post-st\">
                                                <ul>
                                                        <div class=\"post-project-fields\">
                                                            <form>
                                                                <div class=\"row\">
                                                                    <div class=\"col-lg-12\">
                                                                        <input type=\"text\" name=\"title\" placeholder=\"Title\">
                                                                    </div>
                                                                    <div class=\"col-lg-12\">
                                                                        <div class=\"inp-field\">
                                                                            <select>
                                                                                <option>Category</option>
                                                                                <option>Category 1</option>
                                                                                <option>Category 2</option>
                                                                                <option>Category 3</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-lg-12\">
                                                                        <input type=\"text\" name=\"skills\" placeholder=\"Skills\">
                                                                    </div>
                                                                    <div class=\"col-lg-6\">
                                                                        <div class=\"price-br\">
                                                                            <input type=\"text\" name=\"price1\" placeholder=\"Price\">
                                                                            <i class=\"la la-dollar\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-lg-6\">
                                                                        <div class=\"inp-field\">
                                                                            <select>
                                                                                <option>Full Time</option>
                                                                                <option>Half time</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-lg-12\">
                                                                        <textarea name=\"description\" placeholder=\"Description\"></textarea>
                                                                    </div>
                                                                    <div class=\"col-lg-12\">
                                                                        <ul>
                                                                            <li><button class=\"active\" type=\"submit\" value=\"post\">Post</button></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div><!--post-project-fields end-->



                                                </ul>
                                            </div><!--post-st end-->
                                        </div><!--post-topbar end-->
                                        <div class=\"posts-section\">
                                            <div class=\"post-bar\">
                                                <div class=\"post_topbar\">
                                                    <div class=\"usy-dt\">
                                                        <img src=\"http://via.placeholder.com/50x50\" alt=\"\">
                                                        <div class=\"usy-name\">
                                                            <h3>John Doe</h3>
                                                            <span><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/clock.png"), "html", null, true);
        echo "\" alt=\"\">3 min ago</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"ed-opts\">
                                                        <a href=\"#\" title=\"\" class=\"ed-opts-open\"><i class=\"la la-ellipsis-v\"></i></a>
                                                        <ul class=\"ed-options\">
                                                            <li><a href=\"#\" title=\"\">Edit Post</a></li>
                                                            <li><a href=\"#\" title=\"\">Unsaved</a></li>
                                                            <li><a href=\"#\" title=\"\">Unbid</a></li>
                                                            <li><a href=\"#\" title=\"\">Close</a></li>
                                                            <li><a href=\"#\" title=\"\">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"epi-sec\">
                                                    <ul class=\"descp\">
                                                        <li><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon8.png"), "html", null, true);
        echo "\" alt=\"\"><span>Epic Coder</span></li>
                                                        <li><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon9.png"), "html", null, true);
        echo "\" alt=\"\"><span>India</span></li>
                                                    </ul>
                                                    <ul class=\"bk-links\">
                                                        <li><a href=\"#\" title=\"\"><i class=\"la la-bookmark\"></i></a></li>
                                                        <li><a href=\"#\" title=\"\"><i class=\"la la-envelope\"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"job_descp\">
                                                    <h3>Senior Wordpress Developer</h3>
                                                    <ul class=\"job-dt\">
                                                        <li><a href=\"#\" title=\"\">Full Time</a></li>
                                                        <li><span>\$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href=\"#\" title=\"\">view more</a></p>
                                                    <ul class=\"skill-tags\">
                                                        <li><a href=\"#\" title=\"\">HTML</a></li>
                                                        <li><a href=\"#\" title=\"\">PHP</a></li>
                                                        <li><a href=\"#\" title=\"\">CSS</a></li>
                                                        <li><a href=\"#\" title=\"\">Javascript</a></li>
                                                        <li><a href=\"#\" title=\"\">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"job-status-bar\">
                                                    <ul class=\"like-com\">
                                                        <li>
                                                            <a href=\"#\"><i class=\"la la-heart\"></i> Like</a>
                                                            <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/liked-img.png"), "html", null, true);
        echo "\" alt=\"\">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href=\"#\" title=\"\" class=\"com\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/com.png"), "html", null, true);
        echo "\" alt=\"\"> Comment 15</a></li>
                                                    </ul>
                                                    <a><i class=\"la la-eye\"></i>Views 50</a>
                                                </div>
                                            </div><!--post-bar end-->
                                            <div class=\"process-comm\">
                                                <div class=\"spinner\">
                                                    <div class=\"bounce1\"></div>
                                                    <div class=\"bounce2\"></div>
                                                    <div class=\"bounce3\"></div>
                                                </div>
                                            </div><!--process-comm end-->
                                        </div><!--posts-section end-->
                                    </div><!--main-ws-sec end-->
                                </div>
                                <div class=\"col-lg-3 pd-right-none no-pd\">
                                    <div class=\"right-sidebar\">
                                        <div class=\"widget widget-about\">
                                            <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/wd-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                                            <h3>Track Time on Workwise</h3>
                                            <span>Pay only for the Hours worked</span>
                                            <div class=\"sign_link\">
                                                <h3><a href=\"#\" title=\"\">Sign up</a></h3>
                                                <a href=\"#\" title=\"\">Learn More</a>
                                            </div>
                                        </div><!--widget-about end-->

                                        <div class=\"widget widget-jobs\">
                                            <div class=\"sd-title\">
                                                <h3>Famous Job</h3>
                                                <i class=\"la la-ellipsis-v\"></i>
                                            </div>
                                            <div class=\"jobs-list\">
                                                <div class=\"job-info\">
                                                    <div class=\"job-details\">
                                                        <h3>Junior Seo Designer</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                    </div>
                                                    <div class=\"hr-rate\">
                                                        <span>\$25/hr</span>
                                                    </div>
                                                </div><!--job-info end-->
                                            </div><!--jobs-list end-->
                                        </div><!--widget-jobs end-->
                                    </div><!--right-sidebar end-->
                                </div>
                            </div>
                        </div><!-- main-section-data end-->
                    </div>
                </div>
            </main>

            <div class=\"post-popup pst-pj\">
                <div class=\"post-project\">
                    <h3>Post a project</h3>
                    <div class=\"post-project-fields\">

                    </div><!--post-project-fields end-->
                    <a href=\"#\" title=\"\"><i class=\"la la-times-circle-o\"></i></a>
                </div><!--post-project end-->
            </div><!--post-project-popup end-->



        </div><!--theme-layout end-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontoffice/front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 165,  243 => 147,  237 => 144,  208 => 118,  204 => 117,  185 => 101,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontoffice/base.html.twig' %}

{% block title %}Hello FrontController!{% endblock %}

{% block main %}
           <div class=\"wrapper\">

            <main>
                <div class=\"main-section\">
                    <div class=\"container\">
                        <div class=\"main-section-data\">
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-md-4 pd-left-none no-pd\">
                                    <div class=\"main-left-sidebar no-margin\">
                                        <div class=\"user-data full-width\">
                                            <div class=\"user-profile\">
                                                <div class=\"username-dt\">
                                                    <div class=\"usr-pic\">
                                                        <img src=\"http://via.placeholder.com/100x100\" alt=\"\">
                                                    </div>
                                                </div><!--username-dt end-->
                                                <div class=\"user-specs\">
                                                    <h3>John Doe</h3>
                                                    <span>Graphic Designer at Self Employed</span>
                                                </div>
                                            </div><!--user-profile end-->
                                            <ul class=\"user-fw-status\">
                                                <li>
                                                    <a href=\"#\" title=\"\">View Profile</a>
                                                </li>
                                            </ul>
                                        </div><!--user-data end-->
                                    </div><!--main-left-sidebar end-->
                                </div>
                                <div class=\"col-lg-6 col-md-8 no-pd\">
                                    <div class=\"main-ws-sec\">
                                        <div class=\"post-topbar\">
                                            <div class=\"user-picy\">
                                                <img src=\"http://via.placeholder.com/100x100\" alt=\"\">
                                            </div>
                                            <div class=\"post-st\">
                                                <ul>
                                                        <div class=\"post-project-fields\">
                                                            <form>
                                                                <div class=\"row\">
                                                                    <div class=\"col-lg-12\">
                                                                        <input type=\"text\" name=\"title\" placeholder=\"Title\">
                                                                    </div>
                                                                    <div class=\"col-lg-12\">
                                                                        <div class=\"inp-field\">
                                                                            <select>
                                                                                <option>Category</option>
                                                                                <option>Category 1</option>
                                                                                <option>Category 2</option>
                                                                                <option>Category 3</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-lg-12\">
                                                                        <input type=\"text\" name=\"skills\" placeholder=\"Skills\">
                                                                    </div>
                                                                    <div class=\"col-lg-6\">
                                                                        <div class=\"price-br\">
                                                                            <input type=\"text\" name=\"price1\" placeholder=\"Price\">
                                                                            <i class=\"la la-dollar\"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-lg-6\">
                                                                        <div class=\"inp-field\">
                                                                            <select>
                                                                                <option>Full Time</option>
                                                                                <option>Half time</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-lg-12\">
                                                                        <textarea name=\"description\" placeholder=\"Description\"></textarea>
                                                                    </div>
                                                                    <div class=\"col-lg-12\">
                                                                        <ul>
                                                                            <li><button class=\"active\" type=\"submit\" value=\"post\">Post</button></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div><!--post-project-fields end-->



                                                </ul>
                                            </div><!--post-st end-->
                                        </div><!--post-topbar end-->
                                        <div class=\"posts-section\">
                                            <div class=\"post-bar\">
                                                <div class=\"post_topbar\">
                                                    <div class=\"usy-dt\">
                                                        <img src=\"http://via.placeholder.com/50x50\" alt=\"\">
                                                        <div class=\"usy-name\">
                                                            <h3>John Doe</h3>
                                                            <span><img src=\"{{ asset('images/clock.png') }}\" alt=\"\">3 min ago</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"ed-opts\">
                                                        <a href=\"#\" title=\"\" class=\"ed-opts-open\"><i class=\"la la-ellipsis-v\"></i></a>
                                                        <ul class=\"ed-options\">
                                                            <li><a href=\"#\" title=\"\">Edit Post</a></li>
                                                            <li><a href=\"#\" title=\"\">Unsaved</a></li>
                                                            <li><a href=\"#\" title=\"\">Unbid</a></li>
                                                            <li><a href=\"#\" title=\"\">Close</a></li>
                                                            <li><a href=\"#\" title=\"\">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class=\"epi-sec\">
                                                    <ul class=\"descp\">
                                                        <li><img src=\"{{ asset('images/icon8.png') }}\" alt=\"\"><span>Epic Coder</span></li>
                                                        <li><img src=\"{{ asset('images/icon9.png') }}\" alt=\"\"><span>India</span></li>
                                                    </ul>
                                                    <ul class=\"bk-links\">
                                                        <li><a href=\"#\" title=\"\"><i class=\"la la-bookmark\"></i></a></li>
                                                        <li><a href=\"#\" title=\"\"><i class=\"la la-envelope\"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"job_descp\">
                                                    <h3>Senior Wordpress Developer</h3>
                                                    <ul class=\"job-dt\">
                                                        <li><a href=\"#\" title=\"\">Full Time</a></li>
                                                        <li><span>\$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href=\"#\" title=\"\">view more</a></p>
                                                    <ul class=\"skill-tags\">
                                                        <li><a href=\"#\" title=\"\">HTML</a></li>
                                                        <li><a href=\"#\" title=\"\">PHP</a></li>
                                                        <li><a href=\"#\" title=\"\">CSS</a></li>
                                                        <li><a href=\"#\" title=\"\">Javascript</a></li>
                                                        <li><a href=\"#\" title=\"\">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"job-status-bar\">
                                                    <ul class=\"like-com\">
                                                        <li>
                                                            <a href=\"#\"><i class=\"la la-heart\"></i> Like</a>
                                                            <img src=\"{{ asset('images/liked-img.png') }}\" alt=\"\">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href=\"#\" title=\"\" class=\"com\"><img src=\"{{ asset('images/com.png') }}\" alt=\"\"> Comment 15</a></li>
                                                    </ul>
                                                    <a><i class=\"la la-eye\"></i>Views 50</a>
                                                </div>
                                            </div><!--post-bar end-->
                                            <div class=\"process-comm\">
                                                <div class=\"spinner\">
                                                    <div class=\"bounce1\"></div>
                                                    <div class=\"bounce2\"></div>
                                                    <div class=\"bounce3\"></div>
                                                </div>
                                            </div><!--process-comm end-->
                                        </div><!--posts-section end-->
                                    </div><!--main-ws-sec end-->
                                </div>
                                <div class=\"col-lg-3 pd-right-none no-pd\">
                                    <div class=\"right-sidebar\">
                                        <div class=\"widget widget-about\">
                                            <img src=\"{{ asset('images/wd-logo.png') }}\" alt=\"\">
                                            <h3>Track Time on Workwise</h3>
                                            <span>Pay only for the Hours worked</span>
                                            <div class=\"sign_link\">
                                                <h3><a href=\"#\" title=\"\">Sign up</a></h3>
                                                <a href=\"#\" title=\"\">Learn More</a>
                                            </div>
                                        </div><!--widget-about end-->

                                        <div class=\"widget widget-jobs\">
                                            <div class=\"sd-title\">
                                                <h3>Famous Job</h3>
                                                <i class=\"la la-ellipsis-v\"></i>
                                            </div>
                                            <div class=\"jobs-list\">
                                                <div class=\"job-info\">
                                                    <div class=\"job-details\">
                                                        <h3>Junior Seo Designer</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                    </div>
                                                    <div class=\"hr-rate\">
                                                        <span>\$25/hr</span>
                                                    </div>
                                                </div><!--job-info end-->
                                            </div><!--jobs-list end-->
                                        </div><!--widget-jobs end-->
                                    </div><!--right-sidebar end-->
                                </div>
                            </div>
                        </div><!-- main-section-data end-->
                    </div>
                </div>
            </main>

            <div class=\"post-popup pst-pj\">
                <div class=\"post-project\">
                    <h3>Post a project</h3>
                    <div class=\"post-project-fields\">

                    </div><!--post-project-fields end-->
                    <a href=\"#\" title=\"\"><i class=\"la la-times-circle-o\"></i></a>
                </div><!--post-project end-->
            </div><!--post-project-popup end-->



        </div><!--theme-layout end-->
{% endblock %}
", "frontoffice/front/index.html.twig", "F:\\recruti_webapp\\templates\\frontoffice\\front\\index.html.twig");
    }
}
