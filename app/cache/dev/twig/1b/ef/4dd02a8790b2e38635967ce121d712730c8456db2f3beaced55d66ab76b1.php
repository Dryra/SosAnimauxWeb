<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_1bef4dd02a8790b2e38635967ce121d712730c8456db2f3beaced55d66ab76b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
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
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ($this->getContext($context, "is_writable")) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ($this->getContext($context, "is_writable")) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "parameters"), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ($this->getContext($context, "welcome_url")) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "welcome_url"), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  749 => 479,  727 => 476,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  386 => 159,  378 => 157,  371 => 156,  358 => 151,  345 => 147,  343 => 146,  328 => 139,  326 => 138,  307 => 128,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  232 => 88,  210 => 77,  152 => 46,  363 => 153,  332 => 116,  324 => 113,  321 => 135,  291 => 102,  274 => 110,  263 => 95,  231 => 83,  212 => 78,  174 => 65,  104 => 37,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  428 => 230,  418 => 224,  410 => 221,  383 => 207,  353 => 328,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 118,  205 => 108,  188 => 90,  170 => 84,  175 => 58,  161 => 63,  446 => 197,  439 => 195,  431 => 189,  415 => 180,  401 => 172,  394 => 168,  373 => 156,  361 => 152,  351 => 120,  342 => 137,  338 => 135,  335 => 134,  325 => 129,  320 => 127,  315 => 131,  300 => 105,  289 => 113,  286 => 112,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  207 => 75,  200 => 72,  197 => 69,  191 => 67,  178 => 59,  172 => 57,  165 => 83,  153 => 77,  150 => 55,  134 => 39,  113 => 40,  97 => 41,  127 => 35,  53 => 11,  23 => 4,  100 => 36,  58 => 15,  287 => 183,  279 => 181,  275 => 105,  146 => 90,  65 => 17,  969 => 664,  803 => 501,  798 => 499,  794 => 498,  790 => 497,  786 => 496,  782 => 495,  778 => 494,  774 => 493,  770 => 492,  766 => 491,  762 => 490,  758 => 489,  754 => 488,  750 => 487,  742 => 485,  738 => 484,  734 => 483,  730 => 482,  722 => 480,  718 => 479,  714 => 478,  710 => 475,  705 => 475,  701 => 474,  697 => 473,  693 => 472,  676 => 458,  672 => 345,  668 => 344,  664 => 342,  586 => 379,  545 => 291,  422 => 226,  367 => 339,  334 => 141,  244 => 101,  233 => 87,  225 => 91,  213 => 78,  202 => 94,  198 => 121,  181 => 65,  167 => 72,  155 => 47,  114 => 40,  306 => 286,  302 => 125,  234 => 142,  228 => 166,  129 => 79,  118 => 49,  551 => 277,  546 => 275,  542 => 274,  538 => 273,  534 => 272,  530 => 271,  526 => 270,  522 => 406,  518 => 268,  514 => 267,  510 => 266,  506 => 265,  502 => 264,  498 => 263,  494 => 262,  490 => 261,  486 => 260,  482 => 259,  470 => 256,  466 => 255,  462 => 202,  458 => 253,  449 => 198,  445 => 249,  441 => 196,  436 => 235,  432 => 245,  411 => 244,  405 => 225,  403 => 224,  397 => 213,  389 => 160,  385 => 218,  375 => 216,  359 => 211,  357 => 123,  316 => 176,  303 => 106,  292 => 169,  280 => 168,  272 => 166,  266 => 165,  255 => 101,  250 => 160,  248 => 97,  184 => 63,  429 => 188,  424 => 228,  420 => 227,  416 => 245,  412 => 222,  408 => 176,  404 => 223,  400 => 214,  396 => 221,  392 => 220,  388 => 219,  380 => 158,  376 => 205,  372 => 215,  364 => 212,  356 => 198,  348 => 140,  344 => 119,  336 => 206,  331 => 140,  327 => 114,  323 => 128,  319 => 201,  310 => 227,  284 => 175,  276 => 111,  260 => 157,  226 => 84,  222 => 83,  216 => 79,  137 => 63,  110 => 38,  81 => 23,  77 => 25,  34 => 4,  70 => 19,  185 => 74,  124 => 81,  84 => 27,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 485,  772 => 613,  768 => 612,  746 => 478,  726 => 481,  716 => 569,  696 => 552,  686 => 468,  621 => 483,  478 => 258,  471 => 253,  464 => 335,  390 => 264,  352 => 197,  340 => 145,  329 => 188,  318 => 111,  308 => 287,  265 => 105,  259 => 103,  253 => 100,  249 => 163,  194 => 68,  190 => 76,  90 => 37,  76 => 28,  480 => 162,  474 => 257,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 261,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 218,  381 => 217,  379 => 215,  374 => 116,  368 => 214,  365 => 197,  362 => 110,  360 => 212,  355 => 329,  341 => 118,  337 => 103,  322 => 177,  314 => 175,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 152,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 76,  169 => 107,  140 => 58,  132 => 51,  128 => 49,  107 => 37,  61 => 23,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 172,  238 => 98,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 135,  219 => 136,  217 => 134,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 21,  59 => 22,  38 => 5,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 14,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 106,  196 => 92,  183 => 115,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 89,  138 => 88,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 29,  62 => 16,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 21,  69 => 26,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 6,  29 => 3,  209 => 87,  203 => 73,  199 => 93,  193 => 80,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 90,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 80,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 28,  99 => 23,  95 => 39,  92 => 31,  86 => 48,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 10,  45 => 11,  42 => 7,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
