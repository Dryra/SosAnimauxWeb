<?php

/* BackOfficeBundle::ProfilLayout.html.twig */
class __TwigTemplate_0b2446a56371fce630e8ea61c95f8d8a80a27e0bc32a6f40030fa27de8a0d72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><head>
    <meta charset=\"utf-8\">
    <title>Sweet Dreams - Profile</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fullcalendar.css"), "html", null, true);
        echo "\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chosen.css"), "html", null, true);
        echo "\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/colorpicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/glisse.css?1.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jgrowl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/elfinder/css/elfinder.css"), "html", null, true);
        echo "\" media=\"screen\">

    
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.tagsinput.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo_table.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jscrollpane.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/validationEngine.jquery.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.stepy.css"), "html", null, true);
        echo "\" />
    
\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icon/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    <!--[if lte IE 8]><script type=\"text/javascript\" src=\"/js/excanvas.min.js\"></script><![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/icons/favicon.ico"), "html", null, true);
        echo "\">
  </head>

  <body onload=\"initialize()\">

\t<!--Header Start-->
\t<div class=\"header\" >
    \t\t
           <a href=\"dashboard.html\" class=\"logo\"><h1>Le Nom De l'adherant</h1></a>
           
           <div class=\"pull-right\">
           
           
            
           <!--Button User Start-->  
\t\t   <div class=\"btn-group pull-right\" >
            <a class=\"btn btn-profile dropdown-toggle\" id=\"button-profile\" data-toggle=\"dropdown\" href=\"#\">
              <span class=\"name-user\"><strong>Bienvenue</strong>, Nom de l'adherent</span> 
              <span class=\"avatar\"><img src=\"images/users/1.jpg\" alt=\"\" ></span> 
              <span class=\"caret\"></span>
            </a>
            <div class=\"dropdown-menu\" id=\"prof_dropdown\">
            <div class=\"item_m\"><span class=\"caret\"></span></div>
            <ul class=\"clear_ul\" >
              <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\"><i class=\"icon-globe\"></i> Accueil</a></li>
              
              <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\"><i class=\"icon-off\"></i> Déconnexion</a></li>
            </ul>
            </div>
          </div>
          <!--Button User END-->  
          
          </div>
    </div>
    <!--Header END-->

    
    <!--Sidebar Start--> 
\t<div id=\"sidebar\">
      <ul class=\"menu-sidebar\">
       <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\" ><i class=\"icon-home\"></i> <span>Accueil</span></a></li>
                <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("utilisateurs");
        echo "\" ><i class=\"icon-group\"></i> <span>Utilisateurs </span></a></li>
      </ul>

    
    </div>
    <!--Sidebar END-->
    
    <!--Content Start-->
\t<div id=\"content\">
    
    \t    
\t <!--SpeedBar Start-->
     <div class=\"speedbar\">
     <div class=\"speedbar-content\">
     
     <ul class=\"menu-drop\">
     \t\t\t<li><a href=\"#\"><i class=\"icon-chevron-down\"></i></a>
               \t\t<ul>
                        <li><a href=\"index.html\">Accueil</a></li>
                        
                    </ul>  
                </li>
     </ul>
     
     <ul class=\"menu-speedbar\">
    \t  <li><a href=\"messages.html\">Mes Declarations</a></li>
          <li><a href=\"search.html\">Recherche</a></li>
          
          
     </ul>

     
     </div>
     </div>
     <!--SpeedBar END-->
     
     <!--Search Start-->   
     <div class=\"search\">
     <form class=\"search-form\">
     \t<input type=\"text\" name=\"\" value=\"\" placeholder=\"Enter keywords\">
     </form>
\t <div class=\"clear\"></div>\t
     </div>
     <!--Search END-->
     
     <!--CONTENT MAIN START-->
     <div class=\"content\">
        
        <!--LEFTBAR PROFILE START-->
        <div class=\"leftbar-profile\">
        <div class=\"p-avatar\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Adherant"), "getPhotourl", array(), "method"), "html", null, true);
        echo " \" alt=\"\"></div>
        <ul class=\"p-menu\">
          
          <div class=\"btn btn-warning\"><a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bloquer", array("id" => $this->getAttribute($this->getContext($context, "Adherant"), "getId", array(), "method"))), "html", null, true);
        echo "\"   onclick=\"\$.jGrowl('Ladhérent a été bloquée', { header: 'FAIT !' });\"> </i> Bloquer</a></div>
         <div class=\"btn btn-success\"> <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("debloquer", array("id" => $this->getAttribute($this->getContext($context, "Adherant"), "getId", array(), "method"))), "html", null, true);
        echo "\"   onclick=\"\$.jGrowl('Ladhérent a été debloquée', { header: 'FAIT !' });\"> </i> Activer</a></div>
        </ul>
        
        
        
        </div>
        
        
        <!--LEFTBAR PROFILE END-->
        
        <!--CONTENT PROFILE START-->
        <div class=\"content-profile\">
          <div class=\"summary-title\">";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Adherant"), "getNom", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Adherant"), "getPrenom", array(), "method"), "html", null, true);
        echo "  <span>(Adhérent)</span></div>
                  
          <div class=\"pull-left\">
          <div class=\"items-info-profile\">
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Age</span></div>
                 <div class=\"info-right-profile\">";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Adherant"), "getAge", array(), "method"), "html", null, true);
        echo " </div>
                 <div class=\"clear\"></div>
             </div>
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Ville:</span></div>
                 <div class=\"info-right-profile\">";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Adherant"), "getVille", array(), "method"), "html", null, true);
        echo " </div>
                 <div class=\"clear\"></div>
             </div>
             
          </div>
          
          <div class=\"summary-title items-info-profile pull-left\">Informations de contact</div>
          <div class=\"edit-link-profile\"><a href=\"#\">Edit</a></div>
          <div class=\"clear\"></div>
          
          <div class=\"items-info-profile\">
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Adresse Email:</span></div>
                 <div class=\"info-right-profile\">";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Adherant"), "getEmail", array(), "method"), "html", null, true);
        echo "  </div>
                 <div class=\"clear\"></div>
             </div>
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Numéro de Téléphone:</span></div>
                 <div class=\"info-right-profile\">";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "Adherant"), "getTelephone", array(), "method"), "html", null, true);
        echo "  </div>
                 <div class=\"clear\"></div>
             </div>
             
          </div>
          
          
          
          
          
        </div>  
        </div>
        <!--CONTENT PROFILE END-->
        <div class=\"clear\"></div>
     </div>
     <!--CONTENT MAIN END-->

    </div>
    <!--Content END-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
   
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>
   
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/graphtable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/autoresize.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.autotab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/elfinder/js/elfinder.min.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
\t<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/validation/languages/jquery.validationEngine-en.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
\t<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/validation/jquery.validationEngine.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jgrowl_minimized.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jscrollpane.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.stepy.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/raphael.2.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/justgage.1.0.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/glisse.js"), "html", null, true);
        echo "\"></script>
    
\t<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/application.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::ProfilLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 230,  424 => 228,  420 => 227,  416 => 226,  412 => 225,  408 => 224,  404 => 223,  400 => 222,  396 => 221,  392 => 220,  388 => 219,  380 => 217,  376 => 216,  372 => 215,  364 => 213,  356 => 211,  348 => 209,  344 => 208,  336 => 206,  331 => 204,  327 => 203,  323 => 202,  319 => 201,  310 => 198,  284 => 175,  276 => 170,  260 => 157,  226 => 134,  222 => 133,  216 => 130,  137 => 63,  110 => 39,  81 => 25,  77 => 24,  34 => 11,  70 => 23,  185 => 81,  124 => 81,  84 => 48,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 593,  726 => 576,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 343,  471 => 339,  464 => 335,  390 => 264,  352 => 210,  340 => 207,  329 => 212,  318 => 204,  308 => 199,  265 => 167,  259 => 166,  253 => 164,  249 => 163,  194 => 114,  190 => 113,  90 => 34,  76 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 218,  381 => 120,  379 => 119,  374 => 116,  368 => 214,  365 => 111,  362 => 110,  360 => 212,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 199,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 176,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 152,  247 => 78,  241 => 146,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 136,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 79,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 20,  63 => 19,  59 => 18,  38 => 10,  94 => 29,  89 => 27,  85 => 26,  75 => 17,  68 => 27,  56 => 24,  87 => 25,  21 => 2,  26 => 4,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 80,  158 => 67,  156 => 66,  151 => 63,  142 => 65,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 15,  40 => 8,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 49,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 24,  66 => 22,  55 => 17,  52 => 23,  50 => 20,  43 => 14,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 90,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 80,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 53,  86 => 33,  82 => 32,  80 => 27,  73 => 23,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 16,  48 => 22,  45 => 17,  42 => 7,  39 => 13,  36 => 5,  33 => 8,  30 => 10,);
    }
}
