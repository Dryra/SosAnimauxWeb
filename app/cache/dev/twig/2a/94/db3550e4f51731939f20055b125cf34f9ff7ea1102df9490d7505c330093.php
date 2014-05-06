<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2a94db3550e4f51731939f20055b125cf34f9ff7ea1102df9490d7505c330093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => $this->getContext($context, "token"))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => $this->getContext($context, "token"))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  161 => 63,  446 => 197,  439 => 195,  431 => 189,  415 => 180,  401 => 172,  394 => 168,  373 => 156,  361 => 146,  351 => 141,  342 => 137,  338 => 135,  335 => 134,  325 => 129,  320 => 127,  315 => 125,  300 => 121,  289 => 113,  286 => 112,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  207 => 75,  200 => 72,  197 => 71,  191 => 67,  178 => 66,  172 => 64,  165 => 60,  153 => 56,  150 => 55,  134 => 54,  113 => 48,  97 => 41,  127 => 60,  53 => 12,  23 => 4,  100 => 39,  58 => 17,  287 => 183,  279 => 181,  275 => 105,  146 => 90,  65 => 21,  969 => 664,  803 => 501,  798 => 499,  794 => 498,  790 => 497,  786 => 496,  782 => 495,  778 => 494,  774 => 493,  770 => 492,  766 => 491,  762 => 490,  758 => 489,  754 => 488,  750 => 487,  742 => 485,  738 => 484,  734 => 483,  730 => 482,  722 => 480,  718 => 479,  714 => 478,  710 => 477,  705 => 475,  701 => 474,  697 => 473,  693 => 472,  676 => 458,  672 => 457,  668 => 456,  664 => 455,  586 => 379,  545 => 345,  422 => 184,  367 => 206,  334 => 188,  244 => 101,  233 => 87,  225 => 91,  213 => 78,  202 => 122,  198 => 121,  181 => 65,  167 => 72,  155 => 69,  114 => 40,  306 => 226,  302 => 225,  234 => 142,  228 => 166,  129 => 79,  118 => 49,  551 => 277,  546 => 275,  542 => 274,  538 => 273,  534 => 272,  530 => 271,  526 => 270,  522 => 269,  518 => 268,  514 => 267,  510 => 266,  506 => 265,  502 => 264,  498 => 263,  494 => 262,  490 => 261,  486 => 260,  482 => 259,  470 => 256,  466 => 255,  462 => 202,  458 => 253,  449 => 198,  445 => 249,  441 => 196,  436 => 246,  432 => 245,  411 => 244,  405 => 225,  403 => 224,  397 => 221,  389 => 219,  385 => 218,  375 => 216,  359 => 211,  357 => 210,  316 => 176,  303 => 122,  292 => 169,  280 => 168,  272 => 166,  266 => 165,  255 => 161,  250 => 160,  248 => 94,  184 => 98,  429 => 188,  424 => 228,  420 => 227,  416 => 245,  412 => 225,  408 => 176,  404 => 223,  400 => 222,  396 => 221,  392 => 220,  388 => 219,  380 => 160,  376 => 216,  372 => 215,  364 => 212,  356 => 198,  348 => 140,  344 => 208,  336 => 206,  331 => 204,  327 => 203,  323 => 128,  319 => 201,  310 => 227,  284 => 175,  276 => 167,  260 => 157,  226 => 84,  222 => 133,  216 => 79,  137 => 63,  110 => 22,  81 => 23,  77 => 24,  34 => 7,  70 => 19,  185 => 66,  124 => 81,  84 => 24,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 486,  726 => 481,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 258,  471 => 339,  464 => 335,  390 => 264,  352 => 197,  340 => 207,  329 => 131,  318 => 204,  308 => 171,  265 => 167,  259 => 163,  253 => 164,  249 => 163,  194 => 70,  190 => 113,  90 => 27,  76 => 25,  480 => 162,  474 => 257,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 261,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 220,  387 => 164,  384 => 218,  381 => 217,  379 => 215,  374 => 116,  368 => 214,  365 => 111,  362 => 110,  360 => 212,  355 => 143,  341 => 192,  337 => 103,  322 => 177,  314 => 175,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 182,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 152,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 76,  169 => 107,  140 => 58,  132 => 51,  128 => 49,  107 => 39,  61 => 17,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 172,  238 => 98,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 135,  219 => 136,  217 => 134,  208 => 68,  204 => 72,  179 => 114,  159 => 70,  143 => 66,  135 => 62,  119 => 40,  102 => 40,  71 => 21,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 34,  89 => 27,  85 => 32,  75 => 17,  68 => 27,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 29,  88 => 32,  78 => 26,  46 => 13,  27 => 3,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 115,  171 => 73,  166 => 71,  163 => 71,  158 => 62,  156 => 58,  151 => 59,  142 => 89,  138 => 88,  136 => 56,  121 => 50,  117 => 19,  105 => 34,  91 => 33,  62 => 19,  49 => 14,  24 => 7,  25 => 35,  19 => 1,  79 => 18,  72 => 21,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 98,  145 => 46,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 30,  96 => 37,  83 => 33,  74 => 27,  66 => 22,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 87,  203 => 73,  199 => 67,  193 => 80,  189 => 79,  187 => 116,  182 => 80,  176 => 63,  173 => 65,  168 => 61,  164 => 90,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 88,  141 => 51,  133 => 80,  130 => 46,  125 => 51,  122 => 80,  116 => 39,  112 => 42,  109 => 34,  106 => 45,  103 => 28,  99 => 31,  95 => 28,  92 => 53,  86 => 48,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 19,  57 => 12,  54 => 16,  51 => 16,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
