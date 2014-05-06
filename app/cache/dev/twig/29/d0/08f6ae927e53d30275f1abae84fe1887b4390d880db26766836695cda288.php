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
        return array (  185 => 81,  124 => 81,  84 => 48,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 593,  726 => 576,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 343,  471 => 339,  464 => 335,  390 => 264,  352 => 229,  340 => 220,  329 => 212,  318 => 204,  308 => 199,  265 => 167,  259 => 166,  253 => 164,  249 => 163,  194 => 114,  190 => 113,  90 => 34,  76 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 176,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 136,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 35,  89 => 20,  85 => 25,  75 => 17,  68 => 27,  56 => 24,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 9,  40 => 8,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 49,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 36,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 23,  50 => 20,  43 => 20,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 90,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 80,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 53,  86 => 33,  82 => 32,  80 => 47,  73 => 19,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 22,  45 => 17,  42 => 7,  39 => 19,  36 => 5,  33 => 12,  30 => 7,);
    }
}
