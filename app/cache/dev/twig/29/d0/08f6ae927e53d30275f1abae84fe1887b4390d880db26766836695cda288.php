<?php

/* BackOfficeBundle::login.html.twig */
class __TwigTemplate_29d008f6ae927e53d30275f1abae84fe1887b4390d880db26766836695cda288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hel' => array($this, 'block_hel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"  class=\"body-error\"><head>
        <meta charset=\"utf-8\">
        <title>SoSAnimauxBackOffice - Login</title>
        <!-- http://themeforest.net/user/dimka_ua_kh/portfolio -->

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Le styles -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"css/login.css\" rel=\"stylesheet\">
        <link href=\"css/bootstrap.css\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"css/icon/font-awesome.css\">
        <link rel=\"stylesheet\" href=\"css/bootstrap-responsive.css\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icon/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        <!--[if lte IE 8]><script type=\"text/javascript\" src=\"/js/excanvas.min.js\"></script><![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"/images/icons/favicon.ico\">'));


    </head>

    <body>






        <!-- http://themeforest.net/user/dimka_ua_kh/portfolio -->
        <div id=\"container_demo\" >
            <a class=\"hiddenanchor\" id=\"toregister\"></a>
            <a class=\"hiddenanchor\" id=\"tologin\"></a>
            <div id=\"wrapper\">
                <div id=\"login\" class=\"animate form position\">
                    <form action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-login\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
                        <div class=\"content-login\">
                            <a href=\"#\" class=\"logo\"></a>

                            <div class=\"inputs\">
                                <i class=\"icon-user first-icon\"></i><input <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" required=\"required\"   class=\"first-input\" placeholder=\"Login\" />

                                <div class=\"clear\"></div>
                                <i class=\"icon-key\"></i><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class=\"last-input\" placeholder=\"Mot de passe\" />
                            </div>

                            <div class=\"remember\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"  checked=\"checked\" />
                                <label for=\"c2\"><span></span> Se Souvenir de moi</label>
                            </div>
                            <div class=\"link\"><a href=\"#\">Mot de passe Oublié</a></div>
                            <div class=\"clear\"></div>
                            <div class=\"button-login\"><input type=\"submit\" class=\"btn btn-large\" value=\"Sign In\" ></div>
                        </div>

                        <div class=\"footer-login\">
                            <div class=\"pull-left \">Pas de Compte ?</div>
                            <div class=\"pull-right\"><a href=\"#toregister\" class=\"to_register\">Créer un compte</a></div>
                            <div class=\"clear\"></div>
                        </div>

                    </form>



                    <div class=\"info-message\">
                        <div class=\"alert alert-info\">        
                            Besoin d'un nouveau compte ";
        // line 80
        $this->displayBlock('hel', $context, $blocks);
        // line 81
        echo " ? Cliquez sur Créer un compte !
                        </div>
                    </div>

                </div>

                <div id=\"register\" class=\"animate form position\">
                    <form action=\"dashboard.html\" class=\"form-login\"> 
                        <div class=\"content-login\">
                            <a href=\"#\" class=\"logo\"></a>

                            <div class=\"inputs\">
                                <i class=\"icon-user first-icon\"></i><input name=\"\" type=\"text\" class=\"first-input\" placeholder=\"username\" />
                                <div class=\"clear\"></div>
                                <i class=\"icon-envelope-alt\"></i><input name=\"\" type=\"text\" class=\"intermediate-input\" placeholder=\"email\" />
                                <div class=\"clear\"></div>
                                <i class=\"icon-key\"></i><input name=\"\" type=\"password\" class=\"last-input\" placeholder=\"password\" />
                            </div>

                            <div class=\"button-login\"><input type=\"submit\" class=\"btn btn-large\" value=\"Create Account\"></div>

                            <div class=\"or\"><span>or</span></div>
                            <div class=\"buttons-soc\">
                                <a href=\"#\"><span><i class=\"icon-twitter\"></i> Connect with Twitter</span></a>
                                <a href=\"#\" class=\"facebook\"><span><i class=\"icon-facebook\"></i> Connect with Facebook</span></a>
                                <div class=\"clear\"></div>
                            </div>

                        </div>

                        <div class=\"footer-login\">
                           
                            <div class=\"pull-right\"><a href=\"#tologin\" class=\"to_register\">Sign In</a></div>
                            <div class=\"clear\"></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>  





        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"js/jquery.min.js\"></script>

    </body>
</html>


";
    }

    // line 80
    public function block_hel($context, array $blocks = array())
    {
        // line 81
        echo " ";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 81,  182 => 80,  124 => 81,  122 => 80,  92 => 53,  84 => 48,  80 => 47,  50 => 20,  46 => 19,  37 => 13,  33 => 12,  20 => 1,);
    }
}
