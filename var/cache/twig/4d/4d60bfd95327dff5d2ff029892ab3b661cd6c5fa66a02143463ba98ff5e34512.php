<?php

/* layout.html.twig */
class __TwigTemplate_0f15317b353e2492234d5238e4147a701580eb96b9f3c38bee27e0a59f6480db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ead1d332a75d7aef047dfaf3f25ba901a909f72b74d8f658c9238d9f7ecae0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead1d332a75d7aef047dfaf3f25ba901a909f72b74d8f658c9238d9f7ecae0c6->enter($__internal_ead1d332a75d7aef047dfaf3f25ba901a909f72b74d8f658c9238d9f7ecae0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_33e1ff49c466c2ab5a3a72adc926b739194f2e86da7a6d1496359550f4b5ffe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e1ff49c466c2ab5a3a72adc926b739194f2e86da7a6d1496359550f4b5ffe9->enter($__internal_33e1ff49c466c2ab5a3a72adc926b739194f2e86da7a6d1496359550f4b5ffe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apple-icon.png"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " | Music Match</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />
    
    ";
        // line 14
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 32
        echo "
</head>
    <body>
        <!--Navbar  -->
        <nav class=\"navbar navbar-toggleable-md fixed-top navbar-transparent\" color-on-scroll=\"287\">
            <div class=\"container\">
                <div class=\"navbar-translate\">
                    <button class=\"navbar-toggler navbar-toggler-right navbar-burger\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggler\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                    </button>

                    ";
        // line 45
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 46
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardDisplay", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\">Music Match</a>
                    ";
        } else {
            // line 48
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Music Match</a>
                    ";
        }
        // line 50
        echo "                </div>
                
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav ml-auto\" >
                        ";
        // line 54
        if ( !$this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 55
            echo "                        <li class=\"nav-item\">
                            <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" class=\"btn btn-danger btn-round\">Inscription</a>
                        </li>
                        <li class=\"nav-item\">
                            <button class=\"btn btn-primary btn-round\" data-toggle=\"modal\" data-target=\"#connexion\">Connexion</button>
                        </li>
                        ";
        } else {
            // line 62
            echo "                        <form class=\"form-inline my-2 my-lg-0\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
            echo "\" method=\"get\">
                            <input class=\"form-control mr-sm-2\" type=\"text\"  name=\"q\" placeholder=\"Search\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()), "html", null, true);
            echo "
                            </a>
                            <ul class=\"dropdown-menu p-2\">
                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("display", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\" class=\"dropdown-item\">Profil</a>
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardLibrary", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\" class=\"dropdown-item\">Bibliothèque</a>                                
                                <a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardfriend");
            echo "\" class=\"dropdown-item\">Amis</a>                                
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                            </ul>
                        </li>
                        ";
        }
        // line 79
        echo "                    </ul>
                </div>
            </div>
        </nav> <!-- End of Nav-->
        
        <div class=\"container message_error\">
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 86
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 87
                echo "                    ";
                if (($context["type"] == "error")) {
                    // line 88
                    echo "                        ";
                    $context["type"] = "danger";
                    // line 89
                    echo "                    ";
                }
                // line 90
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo $context["flash"];
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </div>
        
        
        
        ";
        // line 97
        $this->displayBlock('content', $context, $blocks);
        // line 100
        echo "        
        
        <!--Connexion  -->
        <div class=\"modal fade\" id=\"connexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content card card-register\">
                    <div class=\"modal-body\">
                        <h3 class=\"title\">Welcome</h3>
                        <form method=\"post\" action=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"register-form\">
                            <label>Email</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\">
                            </div>
                            <label>Password</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"text\" id=\"mdp\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-danger btn-block btn-round\">Log In</button>
                        </form>
                        <div class=\"forgot\">
                            <a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forgottenPass");
        echo "\" class=\"btn btn-link btn-danger\">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- succes message ajex -->
        <div class=\"panel-ajax\"></div>
        
        ";
        // line 136
        $this->displayBlock('script', $context, $blocks);
        // line 170
        echo "        
    </body>
</html>";
        
        $__internal_ead1d332a75d7aef047dfaf3f25ba901a909f72b74d8f658c9238d9f7ecae0c6->leave($__internal_ead1d332a75d7aef047dfaf3f25ba901a909f72b74d8f658c9238d9f7ecae0c6_prof);

        
        $__internal_33e1ff49c466c2ab5a3a72adc926b739194f2e86da7a6d1496359550f4b5ffe9->leave($__internal_33e1ff49c466c2ab5a3a72adc926b739194f2e86da7a6d1496359550f4b5ffe9_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c4f0517c71bee7774fb99ca69434873a10221db3e94aeaf966d4192a36531a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4f0517c71bee7774fb99ca69434873a10221db3e94aeaf966d4192a36531a5->enter($__internal_9c4f0517c71bee7774fb99ca69434873a10221db3e94aeaf966d4192a36531a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2197f89bdda8ddb4d0876c2771fc2facb24c1548943eae869c539ea6eaa2685a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2197f89bdda8ddb4d0876c2771fc2facb24c1548943eae869c539ea6eaa2685a->enter($__internal_2197f89bdda8ddb4d0876c2771fc2facb24c1548943eae869c539ea6eaa2685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_2197f89bdda8ddb4d0876c2771fc2facb24c1548943eae869c539ea6eaa2685a->leave($__internal_2197f89bdda8ddb4d0876c2771fc2facb24c1548943eae869c539ea6eaa2685a_prof);

        
        $__internal_9c4f0517c71bee7774fb99ca69434873a10221db3e94aeaf966d4192a36531a5->leave($__internal_9c4f0517c71bee7774fb99ca69434873a10221db3e94aeaf966d4192a36531a5_prof);

    }

    // line 14
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_efaccb3fa28afea86fe7800d23b3b46540d32ea28b42f2f1d329073b5ce52c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaccb3fa28afea86fe7800d23b3b46540d32ea28b42f2f1d329073b5ce52c19->enter($__internal_efaccb3fa28afea86fe7800d23b3b46540d32ea28b42f2f1d329073b5ce52c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_472a0eec078d4601a3a37b5ce821bfb64f00ae2d5a9f68693e42d358e2fc6340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472a0eec078d4601a3a37b5ce821bfb64f00ae2d5a9f68693e42d358e2fc6340->enter($__internal_472a0eec078d4601a3a37b5ce821bfb64f00ae2d5a9f68693e42d358e2fc6340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 15
        echo "    <!--Animate.css  -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/paper-kit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Courgette|Indie+Flower|Bangers|Roboto\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main_1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_472a0eec078d4601a3a37b5ce821bfb64f00ae2d5a9f68693e42d358e2fc6340->leave($__internal_472a0eec078d4601a3a37b5ce821bfb64f00ae2d5a9f68693e42d358e2fc6340_prof);

        
        $__internal_efaccb3fa28afea86fe7800d23b3b46540d32ea28b42f2f1d329073b5ce52c19->leave($__internal_efaccb3fa28afea86fe7800d23b3b46540d32ea28b42f2f1d329073b5ce52c19_prof);

    }

    // line 97
    public function block_content($context, array $blocks = array())
    {
        $__internal_4362b8c6833346b951acc995b65eb0ea920abb0787e2eb00a7d54fc208b74359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4362b8c6833346b951acc995b65eb0ea920abb0787e2eb00a7d54fc208b74359->enter($__internal_4362b8c6833346b951acc995b65eb0ea920abb0787e2eb00a7d54fc208b74359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1a22edac25d395f0bacef9e3b9aa0ffc075807e599a4a1c524cc2a3157746a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a22edac25d395f0bacef9e3b9aa0ffc075807e599a4a1c524cc2a3157746a99->enter($__internal_1a22edac25d395f0bacef9e3b9aa0ffc075807e599a4a1c524cc2a3157746a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 98
        echo "        
        ";
        
        $__internal_1a22edac25d395f0bacef9e3b9aa0ffc075807e599a4a1c524cc2a3157746a99->leave($__internal_1a22edac25d395f0bacef9e3b9aa0ffc075807e599a4a1c524cc2a3157746a99_prof);

        
        $__internal_4362b8c6833346b951acc995b65eb0ea920abb0787e2eb00a7d54fc208b74359->leave($__internal_4362b8c6833346b951acc995b65eb0ea920abb0787e2eb00a7d54fc208b74359_prof);

    }

    // line 136
    public function block_script($context, array $blocks = array())
    {
        $__internal_95730c9550ee93344b0c12abe7f79519d0becd0154be0fdfecfa88ed7af2f6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95730c9550ee93344b0c12abe7f79519d0becd0154be0fdfecfa88ed7af2f6a9->enter($__internal_95730c9550ee93344b0c12abe7f79519d0becd0154be0fdfecfa88ed7af2f6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_276484f5fb4a3c05d54a65c5bf622e625dba313b02e210a14dc0fba5a20733ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276484f5fb4a3c05d54a65c5bf622e625dba313b02e210a14dc0fba5a20733ce->enter($__internal_276484f5fb4a3c05d54a65c5bf622e625dba313b02e210a14dc0fba5a20733ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo "                    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        
        <!-- Core JS Files -->
        <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-1.12.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Switches -->
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
        
        <!--  Plugins for Slider -->
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.js"), "html", null, true);
        echo "\"></script>

        <!--  Plugins for DateTimePicker -->
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

        <!--  Paper Kit Initialization and functions -->
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/paper-kit.js?v=2.0.0"), "html", null, true);
        echo "\"></script>
        
        <script>
            var ajaxAddTrack = \"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_addTrack");
        echo "\";
            var ajaxRemoveTrack = \"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_removeTrack");
        echo "\";
            var ajaxAddFriend = \"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_addFriend");
        echo "\";
            var ajaxRemoveFriend = \"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_removeFriend");
        echo "\";
        </script>
        
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_276484f5fb4a3c05d54a65c5bf622e625dba313b02e210a14dc0fba5a20733ce->leave($__internal_276484f5fb4a3c05d54a65c5bf622e625dba313b02e210a14dc0fba5a20733ce_prof);

        
        $__internal_95730c9550ee93344b0c12abe7f79519d0becd0154be0fdfecfa88ed7af2f6a9->leave($__internal_95730c9550ee93344b0c12abe7f79519d0becd0154be0fdfecfa88ed7af2f6a9_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 168,  421 => 165,  417 => 164,  413 => 163,  409 => 162,  403 => 159,  397 => 156,  393 => 155,  387 => 152,  381 => 149,  375 => 146,  371 => 145,  367 => 144,  363 => 143,  346 => 136,  335 => 98,  326 => 97,  314 => 30,  305 => 24,  300 => 22,  296 => 21,  292 => 20,  288 => 19,  284 => 18,  279 => 15,  270 => 14,  252 => 9,  240 => 170,  238 => 136,  225 => 126,  204 => 108,  194 => 100,  192 => 97,  186 => 93,  180 => 92,  169 => 90,  166 => 89,  163 => 88,  160 => 87,  155 => 86,  151 => 85,  143 => 79,  136 => 75,  131 => 73,  127 => 72,  123 => 71,  117 => 68,  113 => 67,  104 => 62,  95 => 56,  92 => 55,  90 => 54,  84 => 50,  78 => 48,  72 => 46,  70 => 45,  55 => 32,  53 => 14,  45 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/logo1.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('img/apple-icon.png') }}\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

    <title>{% block title '' %} | Music Match</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />
    
    {% block stylesheet %}
    <!--Animate.css  -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/paper-kit.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/demo.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/dashboard.css') }}\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Courgette|Indie+Flower|Bangers|Roboto\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/main_1.css') }}\" rel=\"stylesheet\" />
    

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    {% endblock %}

</head>
    <body>
        <!--Navbar  -->
        <nav class=\"navbar navbar-toggleable-md fixed-top navbar-transparent\" color-on-scroll=\"287\">
            <div class=\"container\">
                <div class=\"navbar-translate\">
                    <button class=\"navbar-toggler navbar-toggler-right navbar-burger\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggler\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                        <span class=\"navbar-toggler-bar\"></span>
                    </button>

                    {% if  user_manager.user %}
                        <a class=\"navbar-brand\" href=\"{{ path('dashboardDisplay', { username : user_manager.user.username }) }}\">Music Match</a>
                    {% else %}
                        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Music Match</a>
                    {% endif %}
                </div>
                
                <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                    <ul class=\"navbar-nav ml-auto\" >
                        {% if  not user_manager.user %}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('register') }}\" class=\"btn btn-danger btn-round\">Inscription</a>
                        </li>
                        <li class=\"nav-item\">
                            <button class=\"btn btn-primary btn-round\" data-toggle=\"modal\" data-target=\"#connexion\">Connexion</button>
                        </li>
                        {% else %}
                        <form class=\"form-inline my-2 my-lg-0\" action=\"{{ path('search') }}\" method=\"get\">
                            <input class=\"form-control mr-sm-2\" type=\"text\"  name=\"q\" placeholder=\"Search\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"{{ path('display', { username : user_manager.user.username }) }}\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ user_manager.user.username }}
                            </a>
                            <ul class=\"dropdown-menu p-2\">
                                <a href=\"{{ path('display', { username : user_manager.user.username }) }}\" class=\"dropdown-item\">Profil</a>
                                <a href=\"{{ path('dashboardLibrary', { username : user_manager.user.username }) }}\" class=\"dropdown-item\">Bibliothèque</a>                                
                                <a href=\"{{ path('dashboardfriend')}}\" class=\"dropdown-item\">Amis</a>                                
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"{{ path('logout') }}\" class=\"dropdown-item\">Déconnexion</a>
                            </ul>
                        </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav> <!-- End of Nav-->
        
        <div class=\"container message_error\">
            {% for type, flashes in app.session.flashbag.all %}
                {% for flash in flashes %}
                    {%  if type == 'error' %}
                        {% set type = 'danger' %}
                    {% endif %}
                    <div class=\"alert alert-{{ type }}\">{{ flash|raw }}</div>
                {% endfor %}
            {%  endfor %}
        </div>
        
        
        
        {% block content %}
        
        {% endblock %}
        
        
        <!--Connexion  -->
        <div class=\"modal fade\" id=\"connexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content card card-register\">
                    <div class=\"modal-body\">
                        <h3 class=\"title\">Welcome</h3>
                        <form method=\"post\" action=\"{{ path('login') }}\" class=\"register-form\">
                            <label>Email</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\">
                            </div>
                            <label>Password</label>
                            <div class=\"input-group form-group-no-border\">
                                <span class=\"input-group-addon\">
                                    <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"text\" id=\"mdp\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-danger btn-block btn-round\">Log In</button>
                        </form>
                        <div class=\"forgot\">
                            <a href=\"{{ path('forgottenPass') }}\" class=\"btn btn-link btn-danger\">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- succes message ajex -->
        <div class=\"panel-ajax\"></div>
        
        {% block script %}                    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        
        <!-- Core JS Files -->
        <script src=\"{{ asset('js/jquery-3.2.1.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/jquery-ui-1.12.1.custom.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/tether.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>

        <!-- Switches -->
        <script src=\"{{ asset('js/bootstrap-switch.min.js') }}\"></script>
        
        <!--  Plugins for Slider -->
        <script src=\"{{ asset('js/nouislider.js') }}\"></script>

        <!--  Plugins for DateTimePicker -->
        <script src=\"{{ asset('js/moment.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>

        <!--  Paper Kit Initialization and functions -->
        <script src=\"{{ asset('js/paper-kit.js?v=2.0.0') }}\"></script>
        
        <script>
            var ajaxAddTrack = \"{{ path('ajax_addTrack') }}\";
            var ajaxRemoveTrack = \"{{ path('ajax_removeTrack') }}\";
            var ajaxAddFriend = \"{{ path('ajax_addFriend') }}\";
            var ajaxRemoveFriend = \"{{ path('ajax_removeFriend') }}\";
        </script>
        
        <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
        
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\layout.html.twig");
    }
}
