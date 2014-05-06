<?php

/* FrontOfficeBundle::AboutLayout.html.twig */
class __TwigTemplate_ed5ca660afd3414dec45f491bddf7e4ebcb4e6b790e643459cdb0fa8127a3135 extends Twig_Template
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
<html lang=\"en\">
<head>
<title>Pet Clinic | About</title>
<meta charset=\"utf-8\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/js/superfish.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/css/css2/bootstrap2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/css/css2/icon/font-awesome.css"), "html", null, true);
        echo "\">
<script>
\$(function () {
    function equalHeight(group) {
        var tallest = 0;
        group.each(function () {
            var thisHeight = \$(this)
                .height();
            if (thisHeight > tallest) {
                tallest = thisHeight;
            }
        });
        group.height(tallest);
    }
    equalHeight(\$(\".box-1 .inner\"));
})
</script>
<!--[if lt IE 9]>
<script src=\"js/html5.js\"></script>
<link rel=\"stylesheet\" href=\"css/ie.css\"> 
<![endif]-->
</head>
<body id=\"page1\">
<!-- Header -->




<header>
<!--SpeedBar Start-->
     <div class=\"speedbar\">
     <div class=\"speedbar-content\">
     
     <ul class=\"menu-drop\">
     \t\t\t<li><a href=\"#\"><i class=\"icon-chevron-down\"></i></a>
               \t\t<ul>
                        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("animaux");
        echo "\">Animaux</a></li>
                        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\">Services</a></li>
                        <li><a href=\"#\">Pensions</a></li>
                        <li><a href=\"#\">Adoption</a></li>
\t\t\t\t\t\t
                        
                    </ul>  
                </li>
     </ul>
     
     <ul class=\"menu-speedbar\">
    \t <li><a href=\"dashboard.html\" Class=\"btn\"><font color=\"black\">Connexion</font></a></li>
    \t <li><a href=\"charts.html\" Class=\"btn\"><font color=\"black\">Inscription</font></a></li>
         
     </ul>

     
     </div>
     </div>
     <!--SpeedBar END-->


  <div class=\"inner\">
    <h1 class=\"logo\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Sos Animaux</a></h1>
    <div class=\"fright\">
      <div class=\"header-meta\">
        
        <div class=\"col-elem\"> <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/images/catwavin.png"), "html", null, true);
        echo "\" width=\"50px\" height=\"50px\"> </div>
      </div>
      <nav>
        <ul class=\"sf-menu\">
          <li class=\"current\"><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">A Propos</a></li>
          <li> <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\">services</a>
            <ul>
              <li><a href=\"#\">Pensions</a></li>
              <li><a href=\"#\">Prestataires</a></li>
              
                
            </ul>
          </li>
          <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("animaux");
        echo "\">Animaux</a>
\t\t  <ul>
              <li><a href=\"#\">Consultation</a></li>
              <li><a href=\"#\">Adoption</a></li>
\t\t\t  <li><a href=\"#\">Recherche</a></li>
              
                
            </ul>
\t\t\t</li>
          <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">contact</a></li>
        </ul>
      </nav>
    </div>
    <div class=\"clear\"></div>
  </div>
  
</header>
<!-- Content -->
<section id=\"content\">
  <div class=\"container_24\">
    <div class=\"indent-bot-2 boxes-bg\">
      <article class=\"grid_6\">
        <div class=\"box-1\">
          <div class=\"inner\">
            <h3>Microchip implant</h3>
            <p> Vivamus hendrerit mauris ut dui. gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique. </p>
            <div class=\"btn-container\">
              <div class=\"button-box\"> <a href=\"#\" class=\"button\">read more</a> </div>
            </div>
          </div>
        </div>
      </article>
      <article class=\"grid_6\">
        <div class=\"box-1\">
          <div class=\"inner\">
            <h3>Ultrasound</h3>
            <p class=\"p0\"> <strong class=\"str-1\"> Vivamus hendrerit mauris ut dui gravida ut viverra </strong> </p>
            <p> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis. cursus. </p>
            <div class=\"btn-container\">
              <div class=\"button-box\"> <a href=\"#\" class=\"button\">read more</a> </div>
            </div>
          </div>
        </div>
      </article>
      <article class=\"grid_6\">
        <div class=\"box-1\">
          <div class=\"inner\">
            <h3>Transport service</h3>
            <p> Vivamus hendrerit mauris ut dui. gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique. </p>
            <div class=\"btn-container\">
              <div class=\"button-box\"> <a href=\"#\" class=\"button\">read more</a> </div>
            </div>
          </div>
        </div>
      </article>
      <article class=\"grid_6\">
        <div class=\"box-1\">
          <div class=\"inner\">
            <h3>Vaccinations</h3>
            <p class=\"p0\"> <strong class=\"str-1\"> Vivamus hendrerit mauris ut gravida ut viverra </strong> </p>
            <p> Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. </p>
            <div class=\"btn-container\">
              <div class=\"button-box\"> <a href=\"#\" class=\"button\">read more</a> </div>
            </div>
          </div>
        </div>
      </article>
      <div class=\"clear\"></div>
      <div class=\"wrapper indent-bot-1\">
        <article class=\"grid_7 suffix_1\">
          <h2>About our clinic:</h2>
          <p class=\"p1\"> <strong class=\"str-3\"> Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique. </strong> </p>
          <p> Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis sem, sit amet dictum velit velit eu magna. Nunc viverra nisi sed orci tincidunt at hendrerit orci luctus. Andisse tincidunt, ipsum at semper facilisis. </p>
          <div class=\"alignright\"> <a href=\"#\" class=\"link\">read more</a> </div>
        </article>
        <article class=\"grid_16\">
          <h2>Meet our team:</h2>
          <div class=\"wrapper\">
            <div class=\"grid_4 alpha\"> <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/images/page2-img1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-indent-bot\">
              <div class=\"author\"> <em> Thom Green </em> (surgeon) </div>
            </div>
            <div class=\"grid_4\"> <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/images/page2-img2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-indent-bot\">
              <div class=\"author\"> <em> Linda Nelson </em> (nurse) </div>
            </div>
            <div class=\"grid_4\"> <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/images/page2-img3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-indent-bot\">
              <div class=\"author\"> <em> Sara Black </em> (diagnostician) </div>
            </div>
            <div class=\"grid_4 omega\"> <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/images/page2-img4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-indent-bot\">
              <div class=\"author\"> <em> John Smith </em> (immunologist) </div>
            </div>
          </div>
        </article>
      </div>
      <div class=\"hr-border\"></div>
      <div class=\"a1\">
        <h2>Testimonials:</h2>
        <div>
          <div class=\"grid_6 alpha\">
            <blockquote class=\"quote-1\">
              <div class=\"quote-1-inner\"> <span class=\"str-1\">Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus orci mi iaculis sem sit.</span> </div>
            </blockquote>
            <div class=\"author alignright indents-1\"> <em> Richard Cox </em> (manager) </div>
          </div>
          <div class=\"grid_6\">
            <blockquote class=\"quote-1\">
              <div class=\"quote-1-inner\"> <strong>Sed sed felis arcu, vel vehicula augue.</strong><br>
                Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus orci mi iaculis sem sit amet dictum velit velit eu. </div>
            </blockquote>
            <div class=\"author alignright indents-1\"> <em> April Jeckson </em> (housewife) </div>
          </div>
          <div class=\"grid_6\">
            <blockquote class=\"quote-1\">
              <div class=\"quote-1-inner\"> <strong>Maecenas faucibus sagittis cursus.</strong><br>
                Fusce tincidunt, tellus eget tristique cursus orci mi iaculis sem sit. amet.dictum velit velit eu magna. Nunc viverra nisi sed orci tin. </div>
            </blockquote>
            <div class=\"author alignright indents-1\"> <em> Alan Pool </em> (lawyer) </div>
          </div>
          <div class=\"grid_6 omega\">
            <blockquote class=\"quote-1\">
              <div class=\"quote-1-inner\"> <strong>Fusce tincidunt, tellus eget tristique cursus orci mi</strong><br>
                iaculis sem sit. amet.dictum velit velit eu magna. Nunc viverra nisi sed orci tincidunt at hendrerit orci luctus. Andisse tincidunt, ipsu. </div>
            </blockquote>
            <div class=\"author alignright indents-1\"> <em> Serg Brin </em> (manager) </div>
          </div>
          <div class=\"clear\"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<footer>
  <div class=\"copyright\"> &copy; 2012 <strong class=\"footer-logo\">Pet clinic</strong>
    <div>Website Template by <a target=\"_blank\" href=\"http://www.templatemonster.com/\">TemplateMonster.com</a></div>
  </div>
  <ul class=\"social-list\">
    <li><a href=\"#\"><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/images/social-link-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
    <li><a href=\"#\"><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/images/social-link-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
    <li><a href=\"#\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/images/social-link-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
    <li><a href=\"#\"><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/images/social-link-4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
  </ul>
</footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle::AboutLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 226,  302 => 225,  234 => 169,  228 => 166,  129 => 79,  118 => 74,  551 => 277,  546 => 275,  542 => 274,  538 => 273,  534 => 272,  530 => 271,  526 => 270,  522 => 269,  518 => 268,  514 => 267,  510 => 266,  506 => 265,  502 => 264,  498 => 263,  494 => 262,  490 => 261,  486 => 260,  482 => 259,  470 => 256,  466 => 255,  462 => 254,  458 => 253,  449 => 250,  445 => 249,  441 => 248,  436 => 246,  432 => 245,  411 => 226,  405 => 225,  403 => 224,  397 => 221,  389 => 219,  385 => 218,  375 => 216,  359 => 211,  357 => 210,  316 => 176,  303 => 170,  292 => 169,  280 => 168,  272 => 166,  266 => 165,  255 => 161,  250 => 160,  248 => 159,  184 => 98,  429 => 230,  424 => 228,  420 => 227,  416 => 226,  412 => 225,  408 => 224,  404 => 223,  400 => 222,  396 => 221,  392 => 220,  388 => 219,  380 => 217,  376 => 216,  372 => 215,  364 => 212,  356 => 211,  348 => 209,  344 => 208,  336 => 206,  331 => 204,  327 => 203,  323 => 202,  319 => 201,  310 => 227,  284 => 175,  276 => 167,  260 => 157,  226 => 134,  222 => 133,  216 => 130,  137 => 63,  110 => 39,  81 => 25,  77 => 24,  34 => 8,  70 => 23,  185 => 81,  124 => 81,  84 => 48,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 593,  726 => 576,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 258,  471 => 339,  464 => 335,  390 => 264,  352 => 210,  340 => 207,  329 => 212,  318 => 204,  308 => 171,  265 => 167,  259 => 163,  253 => 164,  249 => 163,  194 => 114,  190 => 113,  90 => 34,  76 => 29,  480 => 162,  474 => 257,  469 => 158,  461 => 155,  457 => 153,  453 => 251,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 220,  387 => 122,  384 => 218,  381 => 217,  379 => 119,  374 => 116,  368 => 214,  365 => 111,  362 => 110,  360 => 212,  355 => 106,  341 => 105,  337 => 103,  322 => 177,  314 => 175,  312 => 98,  309 => 97,  305 => 95,  298 => 224,  294 => 90,  285 => 89,  283 => 176,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 152,  247 => 78,  241 => 146,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 172,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 136,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 79,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 20,  63 => 19,  59 => 18,  38 => 9,  94 => 29,  89 => 27,  85 => 26,  75 => 17,  68 => 27,  56 => 24,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 80,  158 => 67,  156 => 97,  151 => 63,  142 => 65,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 15,  40 => 8,  37 => 13,  22 => 2,  246 => 175,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 49,  115 => 43,  111 => 70,  108 => 36,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 24,  66 => 22,  55 => 17,  52 => 23,  50 => 20,  43 => 11,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 90,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 88,  141 => 48,  133 => 80,  130 => 41,  125 => 78,  122 => 80,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 53,  86 => 48,  82 => 47,  80 => 27,  73 => 23,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 16,  48 => 22,  45 => 17,  42 => 7,  39 => 13,  36 => 5,  33 => 8,  30 => 7,);
    }
}
