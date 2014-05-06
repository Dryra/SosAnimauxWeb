<?php

/* WebProfilerBundle:Collector:config.html.twig */
class __TwigTemplate_3c5d60be112853503258f171a01cc7f4c4bc2254469577c045648a2510b3bd0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"http://symfony.com/\">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\" />
            <span>
                ";
        // line 9
        if ($this->getAttribute($this->getContext($context, "collector"), "applicationname")) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "applicationname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "applicationversion"), "html", null, true);
            echo "
                ";
        } else {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
            echo "
                ";
        }
        // line 14
        echo "            </span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        ";
        if ($this->getAttribute($this->getContext($context, "collector"), "applicationname")) {
            // line 19
            echo "            <div class=\"sf-toolbar-info-piece\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "applicationname"), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "applicationversion"), "html", null, true);
            echo "</b>
            </div>
        ";
        }
        // line 23
        echo "        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"http://symfony.com/doc/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
        echo "/index.html\" rel=\"help\">Symfony Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">
            <img width=\"26\" height=\"28\" alt=\"PHP\" src=\"data:image/png;base64,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\" />
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        ob_start();
        // line 39
        echo "        ";
        ob_start();
        // line 40
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "phpversion"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 46
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasxdebug")) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 47
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasaccelerator")) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "sapiName"), "html", null, true);
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 54
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 56
        echo "
    ";
        // line 58
        echo "    ";
        ob_start();
        echo "sf-toolbar-status sf-toolbar-status-";
        echo (($this->getAttribute($this->getContext($context, "collector"), "debug")) ? ("green") : ("red"));
        $context["debug_status_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "    ";
        ob_start();
        // line 60
        echo "        <img width=\"21\" height=\"28\" alt=\"Environment\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-info-piece-additional-detail ";
        // line 61
        echo twig_escape_filter($this->env, $this->getContext($context, "debug_status_class"), "html", null, true);
        echo "\"> </span>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "</span>
        ";
        // line 63
        if ((("n/a" != $this->getAttribute($this->getContext($context, "collector"), "appname")) || ("n/a" != $this->getAttribute($this->getContext($context, "collector"), "env")))) {
            // line 64
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-info-with-delimiter\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "appname"), "html", null, true);
            echo "</span>
                <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "env"), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 69
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        ";
        ob_start();
        // line 72
        echo "            ";
        if (("n/a" != $this->getAttribute($this->getContext($context, "collector"), "appname"))) {
            // line 73
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Name</b>
                    <span>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "appname"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 78
        echo "            ";
        if (("n/a" != $this->getAttribute($this->getContext($context, "collector"), "env"))) {
            // line 79
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "env"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 84
        echo "            ";
        if (("n/a" != $this->getAttribute($this->getContext($context, "collector"), "debug"))) {
            // line 85
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getContext($context, "debug_status_class"), "html", null, true);
            echo "\">";
            echo (($this->getAttribute($this->getContext($context, "collector"), "debug")) ? ("en") : ("dis"));
            echo "abled</span>
                </div>
            ";
        }
        // line 90
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    ";
        // line 93
        if ($this->getContext($context, "profiler_url")) {
            // line 94
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "profiler_url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "token"), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 96
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "token"), "html", null, true);
            echo "
                    ";
        }
        // line 98
        echo "                </span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 101
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 102
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 105
    public function block_menu($context, array $blocks = array())
    {
        // line 106
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\" alt=\"Configuration\"></span>
    <strong>Config</strong>
</span>
";
    }

    // line 112
    public function block_panel($context, array $blocks = array())
    {
        // line 113
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            ";
        // line 120
        if ($this->getAttribute($this->getContext($context, "collector"), "applicationname")) {
            // line 121
            echo "                <th>Application</th>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "applicationname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "applicationversion"), "html", null, true);
            echo " (on Symfony ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
            echo ")</td>
            ";
        } else {
            // line 124
            echo "                <th>Symfony version</th>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "symfonyversion"), "html", null, true);
            echo "</td>
            ";
        }
        // line 127
        echo "        </tr>
        ";
        // line 128
        if (("n/a" != $this->getAttribute($this->getContext($context, "collector"), "appname"))) {
            // line 129
            echo "            <tr>
                <th>Application name</th>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "appname"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 134
        echo "        ";
        if (("n/a" != $this->getAttribute($this->getContext($context, "collector"), "env"))) {
            // line 135
            echo "            <tr>
                <th>Environment</th>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "env"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 140
        echo "        ";
        if (("n/a" != $this->getAttribute($this->getContext($context, "collector"), "debug"))) {
            // line 141
            echo "            <tr>
                <th>Debug</th>
                <td>";
            // line 143
            echo (($this->getAttribute($this->getContext($context, "collector"), "debug")) ? ("enabled") : ("disabled"));
            echo "</td>
            </tr>
        ";
        }
        // line 146
        echo "    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "phpversion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 160
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasxdebug")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 164
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 168
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasxcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 172
        echo (($this->getAttribute($this->getContext($context, "collector"), "hasapc")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>";
        // line 176
        echo (($this->getAttribute($this->getContext($context, "collector"), "haszendopcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 180
        echo (($this->getAttribute($this->getContext($context, "collector"), "haseaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 188
        if ($this->getAttribute($this->getContext($context, "collector"), "bundles")) {
            // line 189
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 195
            $context["bundles"] = $this->getAttribute($this->getContext($context, "collector"), "bundles");
            // line 196
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "bundles"))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 197
                echo "            <tr>
                <th>";
                // line 198
                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                echo "</th>
                <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "bundles"), $this->getContext($context, "name"), array(), "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 197,  439 => 195,  431 => 189,  415 => 180,  401 => 172,  394 => 168,  373 => 156,  361 => 146,  351 => 141,  342 => 137,  338 => 135,  335 => 134,  325 => 129,  320 => 127,  315 => 125,  300 => 121,  289 => 113,  286 => 112,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  207 => 75,  200 => 72,  197 => 71,  191 => 69,  178 => 64,  172 => 62,  165 => 60,  153 => 56,  150 => 55,  134 => 47,  113 => 38,  97 => 41,  127 => 60,  53 => 12,  23 => 4,  100 => 27,  58 => 17,  287 => 183,  279 => 181,  275 => 105,  146 => 90,  65 => 21,  969 => 664,  803 => 501,  798 => 499,  794 => 498,  790 => 497,  786 => 496,  782 => 495,  778 => 494,  774 => 493,  770 => 492,  766 => 491,  762 => 490,  758 => 489,  754 => 488,  750 => 487,  742 => 485,  738 => 484,  734 => 483,  730 => 482,  722 => 480,  718 => 479,  714 => 478,  710 => 477,  705 => 475,  701 => 474,  697 => 473,  693 => 472,  676 => 458,  672 => 457,  668 => 456,  664 => 455,  586 => 379,  545 => 345,  422 => 184,  367 => 206,  334 => 188,  244 => 101,  233 => 87,  225 => 91,  213 => 78,  202 => 122,  198 => 121,  181 => 65,  167 => 72,  155 => 69,  114 => 40,  306 => 226,  302 => 225,  234 => 142,  228 => 166,  129 => 79,  118 => 74,  551 => 277,  546 => 275,  542 => 274,  538 => 273,  534 => 272,  530 => 271,  526 => 270,  522 => 269,  518 => 268,  514 => 267,  510 => 266,  506 => 265,  502 => 264,  498 => 263,  494 => 262,  490 => 261,  486 => 260,  482 => 259,  470 => 256,  466 => 255,  462 => 202,  458 => 253,  449 => 198,  445 => 249,  441 => 196,  436 => 246,  432 => 245,  411 => 244,  405 => 225,  403 => 224,  397 => 221,  389 => 219,  385 => 218,  375 => 216,  359 => 211,  357 => 210,  316 => 176,  303 => 122,  292 => 169,  280 => 168,  272 => 166,  266 => 165,  255 => 161,  250 => 160,  248 => 94,  184 => 98,  429 => 188,  424 => 228,  420 => 227,  416 => 245,  412 => 225,  408 => 176,  404 => 223,  400 => 222,  396 => 221,  392 => 220,  388 => 219,  380 => 160,  376 => 216,  372 => 215,  364 => 212,  356 => 198,  348 => 140,  344 => 208,  336 => 206,  331 => 204,  327 => 203,  323 => 128,  319 => 201,  310 => 227,  284 => 175,  276 => 167,  260 => 157,  226 => 84,  222 => 133,  216 => 79,  137 => 63,  110 => 22,  81 => 23,  77 => 24,  34 => 7,  70 => 19,  185 => 66,  124 => 81,  84 => 24,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 486,  726 => 481,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 258,  471 => 339,  464 => 335,  390 => 264,  352 => 197,  340 => 207,  329 => 131,  318 => 204,  308 => 171,  265 => 167,  259 => 163,  253 => 164,  249 => 163,  194 => 70,  190 => 113,  90 => 27,  76 => 28,  480 => 162,  474 => 257,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 261,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 220,  387 => 164,  384 => 218,  381 => 217,  379 => 215,  374 => 116,  368 => 214,  365 => 111,  362 => 110,  360 => 212,  355 => 143,  341 => 192,  337 => 103,  322 => 177,  314 => 175,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 182,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 152,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 76,  169 => 107,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 12,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 172,  238 => 98,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 135,  219 => 136,  217 => 134,  208 => 68,  204 => 72,  179 => 114,  159 => 70,  143 => 66,  135 => 62,  119 => 40,  102 => 33,  71 => 21,  67 => 18,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 27,  85 => 32,  75 => 17,  68 => 27,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 29,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 115,  171 => 73,  166 => 71,  163 => 71,  158 => 79,  156 => 58,  151 => 68,  142 => 89,  138 => 88,  136 => 56,  121 => 46,  117 => 19,  105 => 34,  91 => 27,  62 => 19,  49 => 13,  24 => 7,  25 => 35,  19 => 2,  79 => 18,  72 => 21,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 98,  145 => 46,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 70,  108 => 19,  101 => 43,  98 => 30,  96 => 30,  83 => 25,  74 => 27,  66 => 22,  55 => 17,  52 => 14,  50 => 10,  43 => 9,  41 => 10,  35 => 5,  32 => 9,  29 => 3,  209 => 87,  203 => 73,  199 => 67,  193 => 80,  189 => 79,  187 => 116,  182 => 80,  176 => 63,  173 => 65,  168 => 61,  164 => 90,  162 => 59,  154 => 58,  149 => 51,  147 => 54,  144 => 88,  141 => 51,  133 => 80,  130 => 46,  125 => 78,  122 => 80,  116 => 39,  112 => 42,  109 => 34,  106 => 45,  103 => 28,  99 => 31,  95 => 28,  92 => 53,  86 => 48,  82 => 28,  80 => 30,  73 => 20,  64 => 17,  60 => 19,  57 => 12,  54 => 16,  51 => 16,  48 => 9,  45 => 10,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
