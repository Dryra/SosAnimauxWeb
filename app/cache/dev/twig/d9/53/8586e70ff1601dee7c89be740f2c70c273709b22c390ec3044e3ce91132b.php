<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_d9538586e70ff1601dee7c89be740f2c70c273709b22c390ec3044e3ce91132b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  939 => 243,  936 => 242,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  876 => 218,  873 => 217,  865 => 213,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  783 => 177,  780 => 176,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  550 => 94,  547 => 93,  524 => 90,  512 => 84,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  467 => 72,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  377 => 37,  366 => 33,  311 => 14,  299 => 8,  271 => 374,  245 => 335,  215 => 280,  186 => 239,  126 => 147,  350 => 26,  810 => 492,  807 => 491,  796 => 183,  792 => 488,  788 => 486,  749 => 162,  727 => 476,  706 => 473,  702 => 472,  698 => 471,  694 => 138,  690 => 469,  682 => 467,  679 => 466,  677 => 465,  649 => 122,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 92,  517 => 404,  386 => 159,  378 => 157,  371 => 35,  358 => 151,  345 => 147,  343 => 146,  328 => 139,  326 => 138,  307 => 128,  296 => 121,  293 => 6,  290 => 5,  281 => 411,  232 => 88,  210 => 270,  152 => 46,  363 => 32,  332 => 20,  324 => 113,  321 => 135,  291 => 102,  274 => 110,  263 => 365,  231 => 83,  212 => 279,  174 => 217,  104 => 90,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 119,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 105,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 96,  552 => 293,  548 => 292,  541 => 290,  533 => 284,  531 => 283,  527 => 91,  525 => 280,  519 => 278,  515 => 85,  509 => 83,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  465 => 249,  463 => 248,  459 => 69,  454 => 244,  448 => 240,  438 => 236,  428 => 59,  418 => 224,  410 => 221,  383 => 207,  353 => 328,  347 => 191,  317 => 185,  313 => 15,  304 => 181,  297 => 104,  295 => 178,  288 => 4,  205 => 108,  188 => 90,  170 => 84,  175 => 58,  161 => 202,  446 => 197,  439 => 195,  431 => 189,  415 => 180,  401 => 172,  394 => 168,  373 => 156,  361 => 152,  351 => 120,  342 => 23,  338 => 135,  335 => 21,  325 => 129,  320 => 127,  315 => 131,  300 => 105,  289 => 113,  286 => 112,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  207 => 269,  200 => 72,  197 => 249,  191 => 246,  178 => 59,  172 => 57,  165 => 83,  153 => 77,  150 => 55,  134 => 161,  113 => 40,  97 => 41,  127 => 35,  53 => 11,  23 => 4,  100 => 36,  58 => 15,  287 => 183,  279 => 181,  275 => 105,  146 => 181,  65 => 17,  969 => 664,  803 => 501,  798 => 184,  794 => 498,  790 => 497,  786 => 496,  782 => 495,  778 => 494,  774 => 493,  770 => 492,  766 => 491,  762 => 490,  758 => 489,  754 => 488,  750 => 487,  742 => 485,  738 => 484,  734 => 483,  730 => 482,  722 => 480,  718 => 479,  714 => 478,  710 => 149,  705 => 475,  701 => 474,  697 => 141,  693 => 472,  676 => 458,  672 => 345,  668 => 344,  664 => 342,  586 => 379,  545 => 291,  422 => 226,  367 => 339,  334 => 141,  244 => 101,  233 => 304,  225 => 298,  213 => 78,  202 => 266,  198 => 121,  181 => 232,  167 => 72,  155 => 47,  114 => 111,  306 => 286,  302 => 125,  234 => 142,  228 => 166,  129 => 148,  118 => 49,  551 => 277,  546 => 275,  542 => 274,  538 => 273,  534 => 272,  530 => 271,  526 => 270,  522 => 406,  518 => 268,  514 => 267,  510 => 266,  506 => 265,  502 => 264,  498 => 263,  494 => 262,  490 => 77,  486 => 260,  482 => 259,  470 => 73,  466 => 255,  462 => 202,  458 => 253,  449 => 198,  445 => 249,  441 => 196,  436 => 235,  432 => 245,  411 => 244,  405 => 49,  403 => 48,  397 => 213,  389 => 160,  385 => 41,  375 => 216,  359 => 211,  357 => 123,  316 => 16,  303 => 106,  292 => 169,  280 => 168,  272 => 166,  266 => 366,  255 => 353,  250 => 341,  248 => 336,  184 => 233,  429 => 188,  424 => 228,  420 => 227,  416 => 245,  412 => 222,  408 => 50,  404 => 223,  400 => 47,  396 => 221,  392 => 220,  388 => 42,  380 => 158,  376 => 205,  372 => 215,  364 => 212,  356 => 198,  348 => 140,  344 => 24,  336 => 206,  331 => 140,  327 => 114,  323 => 128,  319 => 201,  310 => 227,  284 => 175,  276 => 395,  260 => 363,  226 => 84,  222 => 297,  216 => 79,  137 => 63,  110 => 38,  81 => 30,  77 => 25,  34 => 4,  70 => 19,  185 => 74,  124 => 132,  84 => 41,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 305,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 292,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 282,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 266,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 257,  959 => 710,  951 => 709,  947 => 249,  943 => 707,  937 => 706,  934 => 241,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 219,  874 => 668,  870 => 667,  866 => 666,  862 => 212,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 182,  789 => 617,  785 => 178,  781 => 615,  775 => 485,  772 => 172,  768 => 612,  746 => 161,  726 => 481,  716 => 569,  696 => 140,  686 => 468,  621 => 483,  478 => 74,  471 => 253,  464 => 71,  390 => 43,  352 => 197,  340 => 145,  329 => 188,  318 => 111,  308 => 13,  265 => 105,  259 => 103,  253 => 342,  249 => 163,  194 => 248,  190 => 76,  90 => 27,  76 => 31,  480 => 75,  474 => 257,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 261,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 218,  381 => 217,  379 => 215,  374 => 36,  368 => 34,  365 => 197,  362 => 110,  360 => 212,  355 => 27,  341 => 118,  337 => 22,  322 => 177,  314 => 175,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 84,  258 => 354,  252 => 152,  247 => 78,  241 => 93,  229 => 87,  220 => 290,  214 => 69,  177 => 76,  169 => 210,  140 => 58,  132 => 51,  128 => 49,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 135,  219 => 136,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 106,  196 => 92,  183 => 115,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 89,  138 => 88,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 87,  203 => 73,  199 => 265,  193 => 80,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 80,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 28,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}