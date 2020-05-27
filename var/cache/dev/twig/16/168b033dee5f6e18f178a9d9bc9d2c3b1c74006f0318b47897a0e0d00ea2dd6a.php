<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Homepage.html.twig */
class __TwigTemplate_217830a301942a2ceacfb8c1a4d49c5ed6425b6231f6a162cd0026656688fd20 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Homepage.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Learn and Play | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\"
          href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"), "html", null, true);
        echo "\">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <!-- Main Header -->
    <header class=\"main-header\">


        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Learn & Play</b>LTE</span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <!-- Menu toggle button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <!-- User Image -->
                                                <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/dist/img/mondher1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class=\"dropdown notifications-menu\">
                        <!-- Menu toggle button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class=\"menu\">
                                    <li><!-- start notification -->
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class=\"dropdown tasks-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class=\"progress xs\">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
                                                     aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <!-- The user image in the navbar-->
                            <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/dist/img/mondher1.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">Mondher Mallek</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/dist/img/mondher1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Mondher Mallek - Web Developer
                                    <small>Member since jun. 2020</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/dist/img/mondher1.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>Mondher Mallek</p>
                    <!-- Status -->
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
              <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->
            <ul class=\"sidebar-menu\" data-widget=\"tree\">
                <li class=\"header\">MAIN NAVIGATION</li>
                <li class=\"active treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Evenement</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">

                        <li class=\"active\"><a href=\"";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_AjoutE");
        echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter</a></li>
                        <li><a href=\"";
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_AfficherE");
        echo "\"><i class=\"fa fa-circle-o\"></i> Afficher</a></li>
                        <li><a href=\"";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_RechercheE");
        echo "\"><i class=\"fa fa-circle-o\"></i> Recherche</a></li>
                        <li><a href=\"";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_Mail");
        echo "\"><i class=\"fa fa-circle-o\"></i> Mail</a></li>

                    </ul>
                </li>
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"active treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-dashboard\"></i> <span>Participant</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_AfficheP");
        echo "\"><i class=\"fa fa-circle-o\"></i> Afficher</a></li>
                            <li><a href=\"";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_RechercheP");
        echo "\"><i class=\"fa fa-circle-o\"></i> Recherche</a></li>
                        </ul>
                    </li>
            <!-- Sidebar Menu -->

            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">

            <h1>
                Homepage
               <!-- <small>Optional description</small> -->
            </h1>
            <br>

            ";
        // line 309
        $this->displayBlock('body', $context, $blocks);
        // line 310
        echo "            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 311
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_AfficherE");
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Afficher</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class=\"content container-fluid\">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"pull-right hidden-xs\">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href=\"#\">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:;\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"pull-right-container\">
                    <span class=\"label label-danger pull-right\">70%</span>
                  </span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 309
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 309,  530 => 426,  525 => 424,  520 => 422,  406 => 311,  403 => 310,  401 => 309,  377 => 288,  373 => 287,  357 => 274,  353 => 273,  349 => 272,  345 => 271,  311 => 240,  258 => 190,  248 => 183,  160 => 98,  94 => 35,  86 => 30,  82 => 29,  74 => 24,  67 => 20,  62 => 18,  57 => 16,  52 => 14,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Learn and Play | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"stylesheet\" href=\"{{ asset('Bundle/WebBundle/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('Bundle/WebBundle/bower_components/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('Bundle/WebBundle/bower_components/Ionicons/css/ionicons.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('Bundle/WebBundle/dist/css/AdminLTE.min.css') }}\">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel=\"stylesheet\" href=\"{{ asset('Bundle/WebBundle/dist/css/skins/skin-blue.min.css') }}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset('Bundle/WebBundle/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('Bundle/WebBundle/https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\"
          href=\"{{ asset('Bundle/WebBundle/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') }}\">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <!-- Main Header -->
    <header class=\"main-header\">


        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Learn & Play</b>LTE</span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <!-- Menu toggle button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <!-- User Image -->
                                                <img src=\"{{ asset('Bundle/WebBundle/dist/img/mondher1.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class=\"dropdown notifications-menu\">
                        <!-- Menu toggle button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class=\"menu\">
                                    <li><!-- start notification -->
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class=\"dropdown tasks-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class=\"progress xs\">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
                                                     aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class=\"dropdown user user-menu\">
                        <!-- Menu Toggle Button -->
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <!-- The user image in the navbar-->
                            <img src=\"{{ asset('Bundle/WebBundle/dist/img/mondher1.jpg') }}\" class=\"user-image\" alt=\"User Image\">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class=\"hidden-xs\">Mondher Mallek</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- The user image in the menu -->
                            <li class=\"user-header\">
                                <img src=\"{{ asset('Bundle/WebBundle/dist/img/mondher1.jpg') }}\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Mondher Mallek - Web Developer
                                    <small>Member since jun. 2020</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"{{ asset('Bundle/WebBundle/dist/img/mondher1.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>Mondher Mallek</p>
                    <!-- Status -->
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
              <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->
            <ul class=\"sidebar-menu\" data-widget=\"tree\">
                <li class=\"header\">MAIN NAVIGATION</li>
                <li class=\"active treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Evenement</span>
                        <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                    </a>
                    <ul class=\"treeview-menu\">

                        <li class=\"active\"><a href=\"{{ path('evenement_AjoutE')}}\"><i class=\"fa fa-circle-o\"></i> Ajouter</a></li>
                        <li><a href=\"{{ path('evenement_AfficherE')}}\"><i class=\"fa fa-circle-o\"></i> Afficher</a></li>
                        <li><a href=\"{{ path('evenement_RechercheE')}}\"><i class=\"fa fa-circle-o\"></i> Recherche</a></li>
                        <li><a href=\"{{ path('evenement_Mail')}}\"><i class=\"fa fa-circle-o\"></i> Mail</a></li>

                    </ul>
                </li>
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"active treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-dashboard\"></i> <span>Participant</span>
                            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path('evenement_AfficheP')}}\"><i class=\"fa fa-circle-o\"></i> Afficher</a></li>
                            <li><a href=\"{{ path('evenement_RechercheP')}}\"><i class=\"fa fa-circle-o\"></i> Recherche</a></li>
                        </ul>
                    </li>
            <!-- Sidebar Menu -->

            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">

            <h1>
                Homepage
               <!-- <small>Optional description</small> -->
            </h1>
            <br>

            {% block body %}  {% endblock %}
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('evenement_AfficherE')}}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Afficher</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class=\"content container-fluid\">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"pull-right hidden-xs\">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href=\"#\">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:;\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"pull-right-container\">
                    <span class=\"label label-danger pull-right\">70%</span>
                  </span>
                            </h4>

                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src=\"{{ asset('Bundle/WebBundle/bower_components/jquery/dist/jquery.min.js') }}\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"{{ asset('Bundle/WebBundle/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('Bundle/WebBundle/dist/js/adminlte.min.js') }}\"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>", "Homepage.html.twig", "C:\\wamp64\\www\\PiEvenement\\app\\Resources\\views\\Homepage.html.twig");
    }
}
