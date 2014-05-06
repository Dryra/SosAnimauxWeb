<?php

/* BackOfficeBundle:Default:new.html.twig */
class __TwigTemplate_4682811f815856fb626a1249b9fae86114b4b2c3b04536edbeabb452ab7b9837 extends Twig_Template
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
        echo "   <div class=\"well\">
    <form method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 4
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        <div>
            ";
        // line 8
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "objet"), 'label', array("label" => "Objet du message"));
        echo "
            ";
        // line 10
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "objet"), 'errors');
        echo "
            ";
        // line 12
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "objet"), 'widget');
        echo "
        </div>

        <div>
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'label', array("label" => "Contenu du message"));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'widget');
        echo "
        </div>

        <div>
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idDestinataire"), 'label', array("label" => "Destinataire"));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idDestinataire"), 'errors');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "idDestinataire"), 'widget');
        echo "
        </div>

        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  185 => 81,  124 => 81,  84 => 48,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 593,  726 => 576,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 343,  471 => 339,  464 => 335,  390 => 264,  352 => 229,  340 => 220,  329 => 212,  318 => 204,  308 => 199,  265 => 167,  259 => 166,  253 => 164,  249 => 163,  194 => 114,  190 => 113,  90 => 34,  76 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 176,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 136,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 18,  38 => 10,  94 => 35,  89 => 20,  85 => 25,  75 => 17,  68 => 27,  56 => 24,  87 => 25,  21 => 2,  26 => 4,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 9,  40 => 8,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 49,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 36,  96 => 31,  83 => 25,  74 => 24,  66 => 22,  55 => 17,  52 => 23,  50 => 20,  43 => 12,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 90,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 80,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 53,  86 => 33,  82 => 32,  80 => 27,  73 => 19,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 16,  48 => 22,  45 => 17,  42 => 7,  39 => 19,  36 => 5,  33 => 8,  30 => 7,);
    }
}
