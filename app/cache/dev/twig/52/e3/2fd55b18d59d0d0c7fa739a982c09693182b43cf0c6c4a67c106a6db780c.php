<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_52e32fd55b18d59d0d0c7fa739a982c09693182b43cf0c6c4a67c106a6db780c extends Twig_Template
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
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\">
        Search
    </h3>
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "ip"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((($this->getContext($context, "m") == $this->getContext($context, "method"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "m"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"text\" name=\"start\" id=\"start\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "start"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"text\" name=\"end\" id=\"end\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "end"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                <option";
            echo ((($this->getContext($context, "l") == $this->getContext($context, "limit"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "l"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  749 => 479,  727 => 476,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  386 => 159,  378 => 157,  371 => 156,  358 => 151,  345 => 147,  343 => 146,  328 => 139,  326 => 138,  307 => 128,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  232 => 88,  210 => 77,  152 => 46,  363 => 153,  332 => 116,  324 => 113,  321 => 135,  291 => 102,  274 => 110,  263 => 95,  231 => 83,  212 => 78,  174 => 65,  104 => 32,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  428 => 230,  418 => 224,  410 => 221,  383 => 207,  353 => 149,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 118,  205 => 108,  188 => 90,  170 => 84,  175 => 58,  161 => 63,  446 => 197,  439 => 195,  431 => 189,  415 => 180,  401 => 172,  394 => 168,  373 => 156,  361 => 152,  351 => 120,  342 => 137,  338 => 135,  335 => 134,  325 => 129,  320 => 127,  315 => 131,  300 => 105,  289 => 113,  286 => 112,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  207 => 75,  200 => 72,  197 => 69,  191 => 67,  178 => 59,  172 => 57,  165 => 83,  153 => 77,  150 => 55,  134 => 39,  113 => 48,  97 => 41,  127 => 35,  53 => 15,  23 => 4,  100 => 39,  58 => 18,  287 => 183,  279 => 181,  275 => 105,  146 => 90,  65 => 11,  969 => 664,  803 => 501,  798 => 499,  794 => 498,  790 => 497,  786 => 496,  782 => 495,  778 => 494,  774 => 493,  770 => 492,  766 => 491,  762 => 490,  758 => 489,  754 => 488,  750 => 487,  742 => 485,  738 => 484,  734 => 483,  730 => 482,  722 => 480,  718 => 479,  714 => 478,  710 => 475,  705 => 475,  701 => 474,  697 => 473,  693 => 472,  676 => 458,  672 => 345,  668 => 344,  664 => 342,  586 => 379,  545 => 291,  422 => 226,  367 => 155,  334 => 141,  244 => 101,  233 => 87,  225 => 91,  213 => 78,  202 => 94,  198 => 121,  181 => 65,  167 => 72,  155 => 47,  114 => 40,  306 => 107,  302 => 125,  234 => 142,  228 => 166,  129 => 79,  118 => 49,  551 => 277,  546 => 275,  542 => 274,  538 => 273,  534 => 272,  530 => 271,  526 => 270,  522 => 406,  518 => 268,  514 => 267,  510 => 266,  506 => 265,  502 => 264,  498 => 263,  494 => 262,  490 => 261,  486 => 260,  482 => 259,  470 => 256,  466 => 255,  462 => 202,  458 => 253,  449 => 198,  445 => 249,  441 => 196,  436 => 235,  432 => 245,  411 => 244,  405 => 225,  403 => 224,  397 => 213,  389 => 160,  385 => 218,  375 => 216,  359 => 211,  357 => 123,  316 => 176,  303 => 106,  292 => 169,  280 => 168,  272 => 166,  266 => 165,  255 => 101,  250 => 160,  248 => 97,  184 => 63,  429 => 188,  424 => 228,  420 => 227,  416 => 245,  412 => 222,  408 => 176,  404 => 223,  400 => 214,  396 => 221,  392 => 220,  388 => 219,  380 => 158,  376 => 205,  372 => 215,  364 => 212,  356 => 198,  348 => 140,  344 => 119,  336 => 206,  331 => 140,  327 => 114,  323 => 128,  319 => 201,  310 => 227,  284 => 175,  276 => 111,  260 => 157,  226 => 84,  222 => 83,  216 => 79,  137 => 63,  110 => 22,  81 => 23,  77 => 20,  34 => 5,  70 => 24,  185 => 74,  124 => 81,  84 => 27,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 485,  772 => 613,  768 => 612,  746 => 478,  726 => 481,  716 => 569,  696 => 552,  686 => 468,  621 => 483,  478 => 258,  471 => 253,  464 => 335,  390 => 264,  352 => 197,  340 => 145,  329 => 188,  318 => 111,  308 => 171,  265 => 105,  259 => 103,  253 => 100,  249 => 163,  194 => 68,  190 => 76,  90 => 42,  76 => 27,  480 => 162,  474 => 257,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 261,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 218,  381 => 217,  379 => 215,  374 => 116,  368 => 214,  365 => 197,  362 => 110,  360 => 212,  355 => 150,  341 => 118,  337 => 103,  322 => 177,  314 => 175,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 152,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 76,  169 => 107,  140 => 58,  132 => 51,  128 => 49,  107 => 39,  61 => 12,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 172,  238 => 98,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 135,  219 => 136,  217 => 134,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 32,  21 => 2,  26 => 6,  93 => 27,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 106,  196 => 92,  183 => 115,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 89,  138 => 88,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 7,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 7,  22 => 3,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 22,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 87,  203 => 73,  199 => 93,  193 => 80,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 90,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 80,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 28,  99 => 23,  95 => 34,  92 => 28,  86 => 48,  82 => 19,  80 => 27,  73 => 33,  64 => 21,  60 => 19,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 13,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
