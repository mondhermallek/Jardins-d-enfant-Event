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

/* login.html.twig */
class __TwigTemplate_6cd9ea5ef50637cc919bfa6725f057e04c5939158b603d5fb48d8445157775ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

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


    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">



            <!-- search form (Optional) -->

            <!-- /.search form -->



            </span>

        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1  style=\"animation: alternate-reverse\">LEARN & PLAY</h1>

            <br>
            ";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "

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
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/WebBundle/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 208
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

    // line 93
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
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 93,  279 => 208,  274 => 206,  269 => 204,  157 => 94,  155 => 93,  94 => 35,  86 => 30,  82 => 29,  74 => 24,  67 => 20,  62 => 18,  57 => 16,  52 => 14,  37 => 1,);
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


    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">



            <!-- search form (Optional) -->

            <!-- /.search form -->



            </span>

        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1  style=\"animation: alternate-reverse\">LEARN & PLAY</h1>

            <br>
            {% block body %}  {% endblock %}


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

</html>", "login.html.twig", "C:\\wamp64\\www\\PiEvenement\\app\\Resources\\views\\login.html.twig");
    }
}
