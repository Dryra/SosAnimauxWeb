<?php

/* FrontOfficeBundle::ContactLayout.html.twig */
class __TwigTemplate_7859d675769ddf7e73ad8c9913671df1b1dbda5656470406533675b53487f083 extends Twig_Template
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
<title>Pet Clinic | Contacts</title>
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
\$(function(){
\tfunction equalHeight(group) {
\t\tvar tallest = 0;
\t\tgroup.each(function() {
\t\t\tvar thisHeight = \$(this).height();
\t\t\tif(thisHeight > tallest) {
\t\t\t\ttallest = thisHeight;
\t\t\t}
\t\t});
\t\tgroup.height(tallest);
\t}\t
\tequalHeight(\$(\".box-1 .inner\"));
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
                        <li><a href=\"dashboard.html\">Animaux</a></li>
                        <li><a href=\"charts.html\">Services</a></li>
                        <li><a href=\"gallery.html\">Pensions</a></li>
                        <li><a href=\"calendar.html\">Adoption</a></li>
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
    <h1 class=\"logo\"><a href=\"index.html\">Sos Animaux</a></h1>
    <div class=\"fright\">
      <div class=\"header-meta\">
        
        <div class=\"col-elem\"> <img src=\"images/catwavin.png\" width=\"50px\" height=\"50px\"> </div>
      </div>
      <nav>
        <ul class=\"sf-menu\">
          <li class=\"current\"><a href=\"index.html\">Accueil</a></li>
          <li><a href=\"about.html\">A Propos</a></li>
          <li> <a href=\"services.html\">services</a>
            <ul>
              <li><a href=\"#\">Pensions</a></li>
              <li><a href=\"#\">Prestataires</a></li>
              
                
            </ul>
          </li>
          <li><a href=\"links.html\">Animaux</a>
\t\t  <ul>
              <li><a href=\"#\">Consultation</a></li>
              <li><a href=\"#\">Adoption</a></li>
\t\t\t  <li><a href=\"#\">Recherche</a></li>
              
                
            </ul>
\t\t\t</li>
          <li><a href=\"contacts.html\">contact</a></li>
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
      <div class=\"wrapper\">
        <article class=\"grid_7 suffix_1\">
          <h2>Contact info:</h2>
          <div class=\"map-container img-box\">
            <iframe src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe>
          </div>
          <strong class=\"str-4\">Pet clinic</strong>
          <dl class=\"adress\">
            <dt>8901 Marmora Road, Glasgow, D04 89GR</dt>
            <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><a href=\"#\">mail@demolink.org</a></dd>
          </dl>
        </article>
        <article class=\"grid_16\">
          <h2>Contact form:</h2>
          <form action=\"#\" id=\"contact-form\" method=\"post\">
            <fieldset>
              <label class=\"name\"> <span>Full name:</span>
                <input type=\"text\">
              </label>
              <label class=\"email\"> <span>Email:</span>
                <input type=\"email\">
              </label>
              <label class=\"message\"> <span>Message:</span>
                <textarea></textarea>
              </label>
              <div class=\"btns\"> <a class=\"link\">Clear</a> <a class=\"link\">Send</a> </div>
            </fieldset>
          </form>
        </article>
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
    <li><a href=\"#\"><img src=\"images/social-link-1.jpg\" alt=\"\"></a></li>
    <li><a href=\"#\"><img src=\"images/social-link-2.jpg\" alt=\"\"></a></li>
    <li><a href=\"#\"><img src=\"images/social-link-3.jpg\" alt=\"\"></a></li>
    <li><a href=\"#\"><img src=\"images/social-link-4.jpg\" alt=\"\"></a></li>
  </ul>
</footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle::ContactLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  969 => 664,  803 => 501,  798 => 499,  794 => 498,  790 => 497,  786 => 496,  782 => 495,  778 => 494,  774 => 493,  770 => 492,  766 => 491,  762 => 490,  758 => 489,  754 => 488,  750 => 487,  742 => 485,  738 => 484,  734 => 483,  730 => 482,  722 => 480,  718 => 479,  714 => 478,  710 => 477,  705 => 475,  701 => 474,  697 => 473,  693 => 472,  676 => 458,  672 => 457,  668 => 456,  664 => 455,  586 => 379,  545 => 345,  422 => 249,  367 => 206,  334 => 188,  244 => 101,  233 => 96,  225 => 91,  213 => 88,  202 => 83,  198 => 82,  181 => 77,  167 => 72,  155 => 69,  114 => 40,  306 => 226,  302 => 225,  234 => 169,  228 => 166,  129 => 79,  118 => 74,  551 => 277,  546 => 275,  542 => 274,  538 => 273,  534 => 272,  530 => 271,  526 => 270,  522 => 269,  518 => 268,  514 => 267,  510 => 266,  506 => 265,  502 => 264,  498 => 263,  494 => 262,  490 => 261,  486 => 260,  482 => 259,  470 => 256,  466 => 255,  462 => 254,  458 => 253,  449 => 250,  445 => 249,  441 => 248,  436 => 246,  432 => 245,  411 => 244,  405 => 225,  403 => 224,  397 => 221,  389 => 219,  385 => 218,  375 => 216,  359 => 211,  357 => 210,  316 => 176,  303 => 170,  292 => 169,  280 => 168,  272 => 166,  266 => 165,  255 => 161,  250 => 160,  248 => 159,  184 => 98,  429 => 253,  424 => 228,  420 => 227,  416 => 245,  412 => 225,  408 => 224,  404 => 223,  400 => 222,  396 => 221,  392 => 220,  388 => 219,  380 => 217,  376 => 216,  372 => 215,  364 => 212,  356 => 198,  348 => 196,  344 => 208,  336 => 206,  331 => 204,  327 => 203,  323 => 202,  319 => 201,  310 => 227,  284 => 175,  276 => 167,  260 => 157,  226 => 134,  222 => 133,  216 => 130,  137 => 63,  110 => 39,  81 => 25,  77 => 24,  34 => 8,  70 => 23,  185 => 78,  124 => 81,  84 => 48,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 486,  726 => 481,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 258,  471 => 339,  464 => 335,  390 => 264,  352 => 197,  340 => 207,  329 => 212,  318 => 204,  308 => 171,  265 => 167,  259 => 163,  253 => 164,  249 => 163,  194 => 114,  190 => 113,  90 => 34,  76 => 29,  480 => 162,  474 => 257,  469 => 158,  461 => 155,  457 => 153,  453 => 251,  444 => 149,  440 => 261,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 220,  387 => 122,  384 => 218,  381 => 217,  379 => 215,  374 => 116,  368 => 214,  365 => 111,  362 => 110,  360 => 212,  355 => 106,  341 => 192,  337 => 103,  322 => 177,  314 => 175,  312 => 98,  309 => 97,  305 => 95,  298 => 224,  294 => 90,  285 => 89,  283 => 176,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 152,  247 => 78,  241 => 146,  229 => 73,  220 => 70,  214 => 69,  177 => 76,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 172,  238 => 98,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 90,  219 => 136,  217 => 89,  208 => 68,  204 => 72,  179 => 69,  159 => 70,  143 => 66,  135 => 53,  119 => 42,  102 => 31,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  38 => 9,  94 => 29,  89 => 27,  85 => 26,  75 => 17,  68 => 27,  56 => 24,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 12,  31 => 4,  28 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 71,  158 => 67,  156 => 97,  151 => 68,  142 => 65,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 15,  40 => 11,  37 => 13,  22 => 2,  246 => 175,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 49,  115 => 43,  111 => 70,  108 => 36,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 24,  66 => 22,  55 => 17,  52 => 23,  50 => 20,  43 => 11,  41 => 7,  35 => 5,  32 => 9,  29 => 3,  209 => 87,  203 => 78,  199 => 67,  193 => 80,  189 => 79,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 90,  162 => 57,  154 => 58,  149 => 51,  147 => 67,  144 => 88,  141 => 48,  133 => 80,  130 => 41,  125 => 78,  122 => 80,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 53,  86 => 48,  82 => 47,  80 => 27,  73 => 23,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 16,  48 => 22,  45 => 13,  42 => 7,  39 => 13,  36 => 10,  33 => 8,  30 => 7,);
    }
}