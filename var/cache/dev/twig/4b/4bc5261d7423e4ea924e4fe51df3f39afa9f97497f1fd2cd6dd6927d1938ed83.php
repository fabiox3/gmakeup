<?php

/* base.html.twig */
class __TwigTemplate_d8084cf4c55f6741eaa6f431bdb583bd6f3ec24a2cd6e62fa27120a4c37a7516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]><html class=\"ie ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang=\"en\"> <!--<![endif]-->
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"description\" content=\"name of web site\">
        <meta name=\"author\" content=\"FriendsLaboratory\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- STYLES -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/fontello.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/skeleton.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/base.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/fotorama.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/owl.carousel.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/animate.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/magnific-popup.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/datepicker.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/timepicker.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/style.css\" />
        <!--[if lt IE 9]> <script type=\"text/javascript\" src=\"js/modernizr.custom.js\"></script> <![endif]-->
        <!-- /STYLES -->
    </head>
    <body>
        <div class=\"makeup_fl_wrapper_all\">
            <div class=\"makeup_fl_content\">
                <div class=\"container\">
                        <div class=\"makeup_fl_ver_menu sticky_sidebar\">
                            <div class=\"vertical_menu\">
                                <div class=\"makeup_fl_ver_menu_in\">
                                    <div class=\"makeup_fl_logo\">
                                        <img src=\"img/logo.png\" alt=\"\" />
                                    </div>
                                    <div class=\"makeup_fl_nav_list\">
                                        <ul>
                                            <li><a href=\"/\"><span>Homepage</span></a></li>
                                            <li><a href=\"/chi-sono\"><span>Chi sono</span></a></li>
                                            <li><a href=\"/servizi\"><span>Servizi</span></a></li>
                                            <li><a href=\"/gallery\"><span>Gallery</span></a></li>
                                            <li><a href=\"/blog\"><span>Blog</span></a></li>
                                            <li><a href=\"/contatti\"><span>Contatti</span></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"makeup_fl_booking_btn\">
                                        <div class=\"btn_s_a\"><a href=\"/\"><i class=\"fas fa-home\"></i></a></div>
                                        <div class=\"btn_b\"><a href=\"/booking\" class=\"ajax-popup-link\">Prenota Online</a></div>
                                        <div class=\"btn_s_b\"><a href=\"/modal/test\" class=\"ajax-popup-link\"><i class=\"fas fa-clock\"></i></a></div>
                                    </div>
                                    <div class=\"makeup_fl_social_icons\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest-square\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"makeup_fl_cright\">
                                        <span>Copyright 2018</span>
                                    </div>
                                    <div class=\"makeup_fl_totop_wrapper\">
                                        <div class=\"rotating\"></div>
                                        <a href=\"#\" class=\"totop\"><i class=\"fas fa-angle-up\" style=\"padding: 0px 0px 6px 6px\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        
                        <!-- CONTENT IN -->
                        <div class=\"makeup_fl_content_in sticky_sidebar\">
                            <div class=\"makeup_fl_content_in_qq\">
                                <div class=\"makeup_fl_header\">
                                    <div class=\"makeup_fl_logo\">
                                        <img src=\"img/logo.png\" alt=\"\" />
                                    </div>
                                    <div class=\"makeup_fl_header_trigger\">
                                        <a href=\"#\"></a>
                                        <span class=\"one\"></span>
                                        <span class=\"two\"></span>
                                        <span class=\"three\"></span>
                                    </div>
                                    <div class=\"makeup_fl_booking_btn\">
                                        <div class=\"btn_s_a\"><a href=\"/\"><i class=\"fas fa-home\"></i></a></div>
                                        <div class=\"btn_b\"><a href=\"/booking\" class=\"ajax-popup-link\">Prenota Online</a></div>
                                        <div class=\"btn_s_b\"><a href=\"modal/opening.html\" class=\"ajax-popup-link\"><i class=\"fas fa-clock\"></i></a></div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <div class=\"makeup_fl_header_nav_list\">
                                        <ul>
                                            <li class=\"mversion\">
                                                <div class=\"makeup_fl_booking_btn\">
                                                    <div class=\"btn_s_a\"><a href=\"/\"><i class=\"fas fa-home\"></i></a></div>
                                                    <div class=\"btn_b\"><a href=\"/booking\" class=\"ajax-popup-link\">Prenota Online</a></div>
                                                    <div class=\"btn_s_b\"><a href=\"modal/opening.html\" class=\"ajax-popup-link\"><i class=\"fas fa-clock\"></i></a></div>
                                                </div>
                                            </li>
                                            <li><a href=\"/\"><span>Homepage</span><br /><span class=\"row\"></span></a></li>
                                            <li><a href=\"/chi-sono\"><span>Chi sono</span></a></li>
                                            <li><a href=\"/servizi\"><span>Servizi</span></a></li>
                                            <li><a href=\"/gallery\"><span>Gallery</span></a></li>
                                            <li><a href=\"/blog\"><span>Blog</span></a></li>
                                            <li><a href=\"/contatti\"><span>Contatti</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- CONTENT WRAP -->
                                ";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "                                ";
        $this->displayBlock('javascripts', $context, $blocks);
        echo " 
                                <!-- /CONTENT WRAP -->
                                <div class=\"makeup_fl_footer\">
                                    <div class=\"social_icons\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest-square\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"cright\">
                                        <span>&copy; Copyright 2018</span>
                                    </div>
                                    <div class=\"makeup_fl_totop_wrapper\">
                                        <div class=\"rotating\"></div>
                                         <a href=\"#\" class=\"totop\"><i class=\"fas fa-angle-up\" style=\"padding: 0px 0px 6px 6px\">></i></a>
                                    </div>
                                </div>
                            
                            </div>
                        </div>                    
                </div>
            </div>
        </div>    
        <script type=\"text/javascript\" src=\"js/jquery.js\"></script>
        <script type=\"text/javascript\" src=\"js/carousel.js\"></script>
        <script type=\"text/javascript\" src=\"js/plugins.js\"></script>
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
        <!--[if lt IE 10]> <script type=\"text/javascript\" src=\"js/ie8.js\"></script> <![endif]-->
        <script type=\"text/javascript\" src=\"js/init.js\"></script>
    </body>
</html>                
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 112,  211 => 111,  193 => 12,  148 => 112,  146 => 111,  46 => 14,  41 => 12,  28 => 1,);
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
<!--[if lt IE 7 ]><html class=\"ie ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang=\"en\"> <!--<![endif]-->
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"description\" content=\"name of web site\">
        <meta name=\"author\" content=\"FriendsLaboratory\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!-- STYLES -->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/fontello.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/skeleton.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/base.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/fotorama.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/owl.carousel.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/animate.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/magnific-popup.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/datepicker.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/timepicker.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/style.css\" />
        <!--[if lt IE 9]> <script type=\"text/javascript\" src=\"js/modernizr.custom.js\"></script> <![endif]-->
        <!-- /STYLES -->
    </head>
    <body>
        <div class=\"makeup_fl_wrapper_all\">
            <div class=\"makeup_fl_content\">
                <div class=\"container\">
                        <div class=\"makeup_fl_ver_menu sticky_sidebar\">
                            <div class=\"vertical_menu\">
                                <div class=\"makeup_fl_ver_menu_in\">
                                    <div class=\"makeup_fl_logo\">
                                        <img src=\"img/logo.png\" alt=\"\" />
                                    </div>
                                    <div class=\"makeup_fl_nav_list\">
                                        <ul>
                                            <li><a href=\"/\"><span>Homepage</span></a></li>
                                            <li><a href=\"/chi-sono\"><span>Chi sono</span></a></li>
                                            <li><a href=\"/servizi\"><span>Servizi</span></a></li>
                                            <li><a href=\"/gallery\"><span>Gallery</span></a></li>
                                            <li><a href=\"/blog\"><span>Blog</span></a></li>
                                            <li><a href=\"/contatti\"><span>Contatti</span></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"makeup_fl_booking_btn\">
                                        <div class=\"btn_s_a\"><a href=\"/\"><i class=\"fas fa-home\"></i></a></div>
                                        <div class=\"btn_b\"><a href=\"/booking\" class=\"ajax-popup-link\">Prenota Online</a></div>
                                        <div class=\"btn_s_b\"><a href=\"/modal/test\" class=\"ajax-popup-link\"><i class=\"fas fa-clock\"></i></a></div>
                                    </div>
                                    <div class=\"makeup_fl_social_icons\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest-square\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"makeup_fl_cright\">
                                        <span>Copyright 2018</span>
                                    </div>
                                    <div class=\"makeup_fl_totop_wrapper\">
                                        <div class=\"rotating\"></div>
                                        <a href=\"#\" class=\"totop\"><i class=\"fas fa-angle-up\" style=\"padding: 0px 0px 6px 6px\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        
                        <!-- CONTENT IN -->
                        <div class=\"makeup_fl_content_in sticky_sidebar\">
                            <div class=\"makeup_fl_content_in_qq\">
                                <div class=\"makeup_fl_header\">
                                    <div class=\"makeup_fl_logo\">
                                        <img src=\"img/logo.png\" alt=\"\" />
                                    </div>
                                    <div class=\"makeup_fl_header_trigger\">
                                        <a href=\"#\"></a>
                                        <span class=\"one\"></span>
                                        <span class=\"two\"></span>
                                        <span class=\"three\"></span>
                                    </div>
                                    <div class=\"makeup_fl_booking_btn\">
                                        <div class=\"btn_s_a\"><a href=\"/\"><i class=\"fas fa-home\"></i></a></div>
                                        <div class=\"btn_b\"><a href=\"/booking\" class=\"ajax-popup-link\">Prenota Online</a></div>
                                        <div class=\"btn_s_b\"><a href=\"modal/opening.html\" class=\"ajax-popup-link\"><i class=\"fas fa-clock\"></i></a></div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <div class=\"makeup_fl_header_nav_list\">
                                        <ul>
                                            <li class=\"mversion\">
                                                <div class=\"makeup_fl_booking_btn\">
                                                    <div class=\"btn_s_a\"><a href=\"/\"><i class=\"fas fa-home\"></i></a></div>
                                                    <div class=\"btn_b\"><a href=\"/booking\" class=\"ajax-popup-link\">Prenota Online</a></div>
                                                    <div class=\"btn_s_b\"><a href=\"modal/opening.html\" class=\"ajax-popup-link\"><i class=\"fas fa-clock\"></i></a></div>
                                                </div>
                                            </li>
                                            <li><a href=\"/\"><span>Homepage</span><br /><span class=\"row\"></span></a></li>
                                            <li><a href=\"/chi-sono\"><span>Chi sono</span></a></li>
                                            <li><a href=\"/servizi\"><span>Servizi</span></a></li>
                                            <li><a href=\"/gallery\"><span>Gallery</span></a></li>
                                            <li><a href=\"/blog\"><span>Blog</span></a></li>
                                            <li><a href=\"/contatti\"><span>Contatti</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- CONTENT WRAP -->
                                {% block body %}{% endblock %}
                                {% block javascripts %}{% endblock %} 
                                <!-- /CONTENT WRAP -->
                                <div class=\"makeup_fl_footer\">
                                    <div class=\"social_icons\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest-square\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"cright\">
                                        <span>&copy; Copyright 2018</span>
                                    </div>
                                    <div class=\"makeup_fl_totop_wrapper\">
                                        <div class=\"rotating\"></div>
                                         <a href=\"#\" class=\"totop\"><i class=\"fas fa-angle-up\" style=\"padding: 0px 0px 6px 6px\">></i></a>
                                    </div>
                                </div>
                            
                            </div>
                        </div>                    
                </div>
            </div>
        </div>    
        <script type=\"text/javascript\" src=\"js/jquery.js\"></script>
        <script type=\"text/javascript\" src=\"js/carousel.js\"></script>
        <script type=\"text/javascript\" src=\"js/plugins.js\"></script>
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
        <!--[if lt IE 10]> <script type=\"text/javascript\" src=\"js/ie8.js\"></script> <![endif]-->
        <script type=\"text/javascript\" src=\"js/init.js\"></script>
    </body>
</html>                
", "base.html.twig", "/home/fabio/gmakeup/app/Resources/views/base.html.twig");
    }
}
