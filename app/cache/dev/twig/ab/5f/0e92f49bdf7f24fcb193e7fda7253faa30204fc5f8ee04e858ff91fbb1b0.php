<?php

/* BackOfficeBundle::Dashboard.html.twig */
class __TwigTemplate_ab5f0e92f49bdf7f24fcb193e7fda7253faa30204fc5f8ee04e858ff91fbb1b0 extends Twig_Template
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
        <title>Sweet Dreams - Dashboard</title>

        <!-- http://www.scriptgates.com - more free script -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        
        
        
        
        
        
        
         <!-- Le styles -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" media=\"screen\"  />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fullcalendar.css"), "html", null, true);
        echo "\" media=\"screen\"  />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chosen.css"), "html", null, true);
        echo "\" media=\"screen\"  />
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\" >
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/colorpicker.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/glisse.css?1.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jgrowl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/elfinder/css/elfinder.css"), "html", null, true);
        echo "\" media=\"screen\">


        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.tagsinput.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo_table.css"), "html", null, true);
        echo "\" >
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jscrollpane.css"), "html", null, true);
        echo "\" >
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/validationEngine.jquery.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.stepy.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icon/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\">


        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        <!--[if lte IE 8]><script type=\"text/javascript\" src=\"/js/excanvas.min.js\"></script><![endif]-->

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/images/icons/favicon.ico"), "html", null, true);
        echo "\">


                
        
        
        
        
        
        
    </head>

    <body>
        
      

        <!-- http://themeforest.net/user/dimka_ua_kh/portfolio -->
        <!--Header Start-->
        <div class=\"header\" >

            <a href=\"dashboard.html\" class=\"logo\"><h1>SWEET DREAMS</h1></a>

            <div class=\"pull-right\">

                <!--Notifications Start-->  
                <div class=\"notifications-head\">

                    <!--Messages Start-->

                    <!--Messages END--> 

                    <!--Recent Activity Start-->

                    <!--Recent Activity END--> 

                </div><!--Notifications END-->

                <!--Button User Start-->  
                <div class=\"btn-group pull-right\" >
                    <a class=\"btn btn-profile dropdown-toggle\" id=\"button-profile\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"name-user\"><strong>Welcome</strong>, Alan Cook</span> 
                        <span class=\"avatar\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/users/1.jpg"), "html", null, true);
        echo "\" alt=\"\" ></span> 
                        <span class=\"caret\"></span>
                    </a>
                    <div class=\"dropdown-menu\" id=\"prof_dropdown\">
                        <div class=\"item_m\"><span class=\"caret\"></span></div>
                        <ul class=\"clear_ul\" >
                            <li><a href=\"#\"><i class=\"icon-globe\"></i> Home</a></li>
                            <li><a href=\"#\"><i class=\"icon-comments\"></i> Messages</a></li>
                            <li><a href=\"#\"><i class=\"icon-cog\"></i> Settings</a></li>
                            <li><a href=\"index.html\"><i class=\"icon-off\"></i> Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <!--Button User END-->  

            </div>
        </div>
        <!--Header END-->


        <!--Sidebar Start--> 
        <div id=\"sidebar\">
            <ul class=\"menu-sidebar\">
                <li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\" class=\"active\"><i class=\"icon-home\"></i> <span>General</span></a></li>
                <li><a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("utilisateurs");
        echo "\"><i class=\"icon-group\"></i> <span>Utilisateurs </span></a></li>
                
            </ul>


        </div>
        <!--Sidebar END-->

        <!--Content Start-->
        <div id=\"content\">


            <!--SpeedBar Start-->
            <div class=\"speedbar\">
                <div class=\"speedbar-content\">



                    <ul class=\"menu-speedbar\">

                        <li><button data-target=\"#header-modal\" data-toggle=\"modal\" class=\"btn btn-warning\">Bloquer un Adhérant</button></li>
                        <li><button data-target=\"#header-modal2\" data-toggle=\"modal\" class=\"btn btn-success\">Ajouter un Adhérant</button></li>
<li><a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("utilisateurs");
        echo "\"><i class=\"btn btn-success\">Utilisateurs</i> </a></li>
                    </ul>

                    <div id=\"header-modal\" class=\"modal hide\">
                        <div class=\"modal-header\">
                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\">&times;</button>
                            Liste des Adhérents
                        </div>
                        <div class=\"modal-body\">
                            <!--Recent Users Start-->
                            <div class=\"grid span6\">
                                <form class=\"search-form\">
                        <input type=\"text\"  name=\"\" value=\"\" placeholder=\"Enter keywords\">
                    </form>
                                <div class=\"grid-title\">
                                    <div class=\"pull-left\">Liste Adhérents</div>

                                    <div class=\"pull-right\"><div class=\"grid-title-load\">

                                            </div>
                                        </div>
                                    <div class=\"clear\"></div>   
                                </div>

                                <div class=\"users\">

                                    <div class=\"user c_bg-2\">
                 ";
        // line 163
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Adherant"));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 164
            echo "                                            <div class=\"user-avatar\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ad"), "getPhotourl", array(), "method"), "html", null, true);
            echo "\" alt=\"\"></div>
                                            <div class=\"user-info\">
                                                <div class=\"user-name\">";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ad"), "getNom", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ad"), "getPrenom", array(), "method"), "html", null, true);
            echo " <span class=\"label label-success\">Actif</span> </div>
                                                <div class=\"user-email\"><a href=\"#\">";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ad"), "getEmail", array(), "method"), "html", null, true);
            echo "</a></div>
                                                <div class=\"user-date\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ad"), "getVille", array(), "method"), "html", null, true);
            echo "</div>
                                            </div>
                                            <ul class=\"user-actions\">
                                                <li><a href=\"#\"><i class=\"icon-remove\"></i></a></li>

                                            </ul>
                                            <div class=\"clear\"></div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                        </div>

                                    </div>

                                </div>
                                <!--Recent Users END-->
                            </div>
                            <div class=\"modal-footer\">
                                <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                            </div>
                        </div>

                        <!--Ajout Adhérent-->

                        <div id=\"header-modal2\" class=\"modal hide\">
                            <div class=\"modal-header\">
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\">&times;</button>
                                Ajouter un Adhérant
                            </div>
                            <div class=\"modal-body\">



                                <form  action=\"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\" id=\"formID\" class=\"formular\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo "  >

                                    <div class=\"formRow\">
                                        <label>Nom : </label>
                                        <div class=\"formRight\">
                                            ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "
                                            
                                        </div>
                                    </div>

                                    <div class=\"formRow\">
                                        <label>Prénom : </label>
                                        <div class=\"formRight\">
                                           ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget');
        echo "
                                             
                                        </div>
                                    </div>

                                    <div class=\"formRow\">
                                        <label>Email: </label>
                                        <div class=\"formRight\">
                                           ";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
        echo "
                                            
                                        </div>
                                    </div>


                                    <div class=\"formRow\">
                                        <label>Mot de passe: </label>
                                        <div class=\"formRight\">
                                           ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "mdp"), 'widget');
        echo "
                                            
                                        </div>
                                    </div>
                                    








                                    <!--Country-->  
                                    <div class=\"formRow\">
                                        <label>Ville :</label>
                                        <div class=\"formRight\">
                                            <select class=\"chzn-select chosen_select\"  >
                                                <option value=\"\"></option> 
                                                <option value=\"Tunis\">Tunis</option> 
                                                <option value=\"Sfax\">Sfax</option> 
                                                <option value=\"Kelibia\">Kelibian</option> 
                                                <option value=\"Gafsa\">Gafsa</option> 
                                                <option value=\"Gabes\">Gabes</option> 
                                                <option value=\"Sidi Bouzid\">Sidi Bouzid</option> 


                                            </select>  
                                        </div>
                                    </div>

                                    <!-- Fin Country-->  
                                    <br>
                                    <br>
                                    <br>
                                    ";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
<input type=\"submit\" class=\"btn btn-large btn-primary\" value=\"Valider & Envoyer !\">

                                </form>




                            </div>
                            <div class=\"modal-footer\">
                                <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                            </div>
                        </div>


                        <!--Fin Ajout Adhérent-->





                    </div>
                </div>
                <!--SpeedBar END-->

                <!--Search Start-->   
                <div class=\"search\">
                    
                    <div class=\"clear\"></div>\t
                </div>
                <!--Search END-->

                <!--CONTENT MAIN START-->
                <div class=\"content\">

                    <!--ButtonsBar Start -->
                    <div class=\"buttons-bar\">
                        <div class=\"clear\"></div>\t
                        <div class=\"pull-left\">
                            <a href=\"#Animaux\" class=\"btn\">Animaux</a><span class=\"inf_link\">3</span>
                            <a href=\"#adher\" class=\"btn\">Adhérents</a>
                            <a href=\"#Prestataires\" class=\"btn\">Prestataires</a>
                        </div>
                        <div class=\"pull-right\">
                            <a href=\"#\" class=\"btn\"><i class=\"icon-cog\"></i> Options</a>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <!--ButtonsBar END -->
                    <script>

                        var d = new Date();

                        document.getElementById('los').innerHTML = d;
                        </script>
                        <!--Statistics Box Start-->
                        <div class=\"grid\">
                            <div class=\"grid-title\">
                                <div class=\"pull-left\">Statistiques</div>
                                <div class=\"pull-right\">
                                    <div class=\"stat-input-date\">
                                        <input type=\"text\" name=\"regular\" id=\"los\" class=\"input-date-min\" value=\"\">
                                        <div class=\"fieldIcon\"><i class=\"icon-calendar\"></i></div>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>   
                            </div>

                            <!-- Information data -->
                            <div class=\"information-data\">
                                <div class=\"data\">
                                    <p class=\"date-figures\">";
        // line 335
        echo twig_escape_filter($this->env, $this->getContext($context, "nbadherants"), "html", null, true);
        echo "</p>
                                    <p class=\"date-title\" >Adhérents</p>
                                </div>
                                <div class=\"data\">
                                    <p class=\"date-figures\">";
        // line 339
        echo twig_escape_filter($this->env, $this->getContext($context, "nbprestataires"), "html", null, true);
        echo "</p>
                                    <p class=\"date-title\">Prestataires</p>
                                </div>
                                <div class=\"data\">
                                    <p class=\"date-figures\">";
        // line 343
        echo twig_escape_filter($this->env, $this->getContext($context, "nbanimaux"), "html", null, true);
        echo "</p>
                                    <p class=\"date-title\">Animals</p>
                                </div>
                                <div class=\"data data-last\">
                                    <p class=\"date-figures\">95%</p>
                                    <p class=\"date-title\">Updates</p>
                                </div>
                                <div class=\"data\">
                                    <p class=\"date-figures\">165</p>
                                    <p class=\"date-title\">Views</p>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                            <!-- Information data end -->
                            <div class=\"grid-content overflow\">
                                <table class=\"chart2\">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Views</th>
                                            <th>Money (\$)</th>
                                            <th>Sales</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>250</td>
                                            <td>580</td>
                                            <td>686</td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>280</td>
                                            <td>450</td>
                                            <td>546</td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>400</td>
                                            <td>500</td>
                                            <td>600</td>
                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <td>350</td>
                                            <td>600</td>
                                            <td>703</td>
                                        </tr>
                                        <tr>
                                            <th>5</th>
                                            <td>410</td>
                                            <td>560</td>
                                            <td>800</td>
                                        </tr>
                                        <tr>
                                            <th>6</th>
                                            <td>210</td>
                                            <td>620</td>
                                            <td>750</td>
                                        </tr>
                                        <tr>
                                            <th>7</th>
                                            <td>265</td>
                                            <td>500</td>
                                            <td>820</td>
                                        </tr>
                                        <tr>
                                            <th>8</th>
                                            <td>310</td>
                                            <td>650</td>
                                            <td>801</td>
                                        </tr>
                                        <tr>
                                            <th>9</th>
                                            <td>450</td>
                                            <td>660</td>
                                            <td>756</td>
                                        </tr>
                                        <tr>
                                            <th>10</th>
                                            <td>433</td>
                                            <td>600</td>
                                            <td>900</td>
                                        </tr>
                                        <tr>
                                            <th>11</th>
                                            <td>400</td>
                                            <td>650</td>
                                            <td>800</td>
                                        </tr>
                                        <tr>
                                            <th>12</th>
                                            <td>360</td>
                                            <td>800</td>
                                            <td>930</td>
                                        </tr>
                                        <tr>
                                            <th>13</th>
                                            <td>410</td>
                                            <td>750</td>
                                            <td>800</td>
                                        </tr>
                                        <tr>
                                            <th>14</th>
                                            <td>440</td>
                                            <td>650</td>
                                            <td>860</td>
                                        </tr>

                                    </tbody>
                                </table>

                                <div class=\"filter-statistics\">
                                    <div class=\"pull-left\">
                                        <div class=\"filter\"><input type=\"text\" name=\"\" value=\"14\"> <span>Show</span></div>
                                        <div class=\"filter\"><input type=\"text\" name=\"\" value=\"200\" class=\"input_size_2\"> <span>Step</span></div>
                                    </div>

                                    <div class=\"pull-right\"><a href=\"#\" class=\"btn\">View All</a></div>
                                    <div class=\"clear\"></div>
                                </div>

                            </div>
                        </div>
                        <!--Statistics Box END-->

                        <!--Chat Start-->
                        <div class=\"grid\">


                            <div id=\"gallery-controls\">
                                <a href=\"#\" id=\"gallery-prev\"></a><a href=\"#\" id=\"gallery-next\"></a>
                            </div>
                            <div class=\"clear\"></div>
                            <div class=\"reserved-space-users\"></div>

                            <div id=\"chat-messages\">

                                <div class=\"chat-message c_bg-2\">
                                    <div class=\"c_avatar\"><img src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/users/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                                    <div class=\"c_actions\">
                                        <div class=\"btn-group chat-menu\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span>+</span></a>
                                            <div class=\"dropdown-menu\">
                                                <div class=\"chat-menu-links\"><a href=\"#\">Del</a> <a href=\"#\">Reply</a> <a href=\"#\">Spam</a></div>
                                                <div class=\"triangle-3\"></div>
                                            </div>
                                        </div>        
                                    </div>
                                    <div class=\"c_mes\">
                                        <div class=\"c_author\">Alan Cook <span>- Today at 11:48</span></div>
                                        <div class=\"c_text\">This is Photoshop's version  of Lorem Ipsum.</div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <div class=\"chat-message\">
                                    <div class=\"c_avatar\"><img src=\"images/users/11.jpg\" alt=\"\"></div>
                                    <div class=\"c_actions\">
                                        <div class=\"btn-group chat-menu\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span>+</span></a>
                                            <div class=\"dropdown-menu\">
                                                <div class=\"chat-menu-links\"><a href=\"#\">Del</a> <a href=\"#\">Reply</a> <a href=\"#\">Spam</a></div>
                                                <div class=\"triangle-3\"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class=\"c_mes\">
                                        <div class=\"c_author\">Maria Clark <span>- Today at 11:48</span></div>
                                        <div class=\"c_text\">This is Photoshop's version  of Lorem Ipsum.</div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>

                                <form class=\"c_form\">
                                    <div class=\"form-textarea\"><textarea name=\"\" class=\"span\"></textarea></div>
                                    <input type=\"submit\" class=\"btn\" value=\"Send\">
                                    <div class=\"clear\"></div>
                                </form>

                            </div>


                        </div>
                        <!--Chat END-->

                        <div class=\"row-fluid\">
                            <!--Tabs Start-->
                            
                            <!--Tabs END-->

                            <!--Pie Chart-->
                            <div class=\"span5 grid-transparent\">
                                <div class=\"summary-title\">Indicator CPU</div>
                                
                                <div class=\"pie-chart\"><div id=\"g1\"></div></div>
                                <script>
                                    var g1;
                                    window.onload = function() {
                                        var g1 = new JustGage({
                                            id: \"g1\",
                                            value: ";
        // line 545
        echo twig_escape_filter($this->env, $this->getContext($context, "nbadherants"), "html", null, true);
        echo ",
                                            min: 0,
                                            max: 100,
                                            title: \" \",
                                            label: \"Adhérents\"
                                        });
                                        setInterval(function() {
                                            g1.refresh(";
        // line 552
        echo twig_escape_filter($this->env, $this->getContext($context, "nbadherants"), "html", null, true);
        echo ");
                                        }, 2500);
                                    };
                                    </script>
                                </div>
                                <!--Pie END-->
                                
                                <!--Pie Chart-->
                            <div class=\"span5 grid-transparent\">
                                <div class=\"summary-title\">Indicator CPU</div>
                                
                                <div class=\"pie-chart\"><div id=\"g2\"></div></div>
                                <script>
                                    var g2;
                                    window.onload = function() {
                                        var g2 = new JustGage2({
                                            id: \"g2\",
                                            value: ";
        // line 569
        echo twig_escape_filter($this->env, $this->getContext($context, "nbadherants"), "html", null, true);
        echo ",
                                            min: 0,
                                            max: 100,
                                            title: \" \",
                                            label: \"Prestataires\"
                                        });
                                        setInterval(function() {
                                            g2.refresh(";
        // line 576
        echo twig_escape_filter($this->env, $this->getContext($context, "nbadherants"), "html", null, true);
        echo ");
                                        }, 2500);
                                    };
                                    </script>
                                </div>
                                <!--Pie END-->
                                
                                
                            </div>


                            <div class=\"row-fluid\">
                                <!--Table 1 Start-->
                                <div class=\"grid span6\">
                                    <div class=\"grid-title\">
                                        <div class=\"pull-left\" id=\"Prestataires\">Prestataires</div>
                                        <div class=\"pull-right\">
                                            <input type=\"text\" name=\"regular\" class=\"min-input\" value=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->getContext($context, "nbprestataires"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"clear\"></div>   
                                    </div>
<form class=\"search-form\">
                        <input type=\"text\" id=\"search2\" name=\"\" value=\"\" placeholder=\"Enter keywords\">
                    </form>
                                    <table id=\"table2\" class=\"table table-striped table-mod\">
                                        <thead>
                                            <tr>
                                                <th>Nom Complet</th>
                                                <th>Domaine</th>
                                                <th>Journée</th>
                                                <th>Email</th>
                                                <th>Téléphone</th>
                                                <th>Adresse</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                ";
        // line 612
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Prestataire"));
        foreach ($context['_seq'] as $context["_key"] => $context["pres"]) {
            // line 613
            echo "                                                <tr>
                                                    <td>";
            // line 614
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getNom", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 615
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getDomaine", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 616
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getJourDisp", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 617
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getEmail", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 618
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getTel", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 619
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getAdr", array(), "method"), "html", null, true);
            echo " <div class=\"view-button\"><a href=\"#\" class=\"btn  btn-mini\">Afficher</a></div></td>
                                                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pres'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 622
        echo "                                            </tbody>
                                        </table>

                                    </div>
                                    <!--Table 1 END-->



                                    <!--Table 2 END-->
                                </div>


                                <div class=\"row-fluid\">
                                    <!--Table 2 Start-->
                                    <div class=\"grid span6\">
                                        <div class=\"grid-title\">
                                            <div class=\"pull-left\" id=\"Animaux\">Animaux</div>
                                            <div class=\"pull-right\">
                                                <input type=\"text\" name=\"regular\" class=\"min-input\" value=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->getContext($context, "nbanimaux"), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"clear\"></div>   
                                        </div>
<form class=\"search-form\">
                        <input type=\"text\" id=\"search1\" name=\"\" value=\"\" placeholder=\"Enter keywords\">
                    </form>
                                        <table id=\"table1\" class=\"table table-striped table-mod\">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Race</th> 
                                                    <th>Espèce</th>       
                                                    <th>Age</th>
                                                    <th>Poids</th>
                                                    <th>Couleur</th>
                                                    <th>Vaccin</th>
                                                    <th>Etat</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                ";
        // line 662
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Animal"));
        foreach ($context['_seq'] as $context["_key"] => $context["ani"]) {
            // line 663
            echo "                                                    <tr>
                                                        <td>";
            // line 664
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ani"), "getNom", array(), "method"), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 665
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ani"), "getRace", array(), "method"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 666
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ani"), "getEspece", array(), "method"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 667
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ani"), "getAge", array(), "method"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 668
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ani"), "getPoids", array(), "method"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 669
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ani"), "getCouleur", array(), "method"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 670
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ani"), "getVaccin", array(), "method"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 671
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ani"), "getEtat", array(), "method"), "html", null, true);
            echo "</td>

                                                    </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ani'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "                                                </tbody>
                                            </table>

                                        </div>
                                        <!--Table 2 END-->
                                        <!--Table 2 Start-->
                                        <div class=\"grid span6\" id=\"adher\">
                                            <div class=\"grid-title\">
                                                <div class=\"pull-left\">Adhérents</div>
                                                <div class=\"pull-right\">
                                                    <input type=\"text\" name=\"regular\" class=\"min-input\" value=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->getContext($context, "nbadherants"), "html", null, true);
        echo "\">
                                                </div>
                                                <div class=\"clear\"></div>   
                                            </div>
<form class=\"search-form\">
                        <input type=\"text\" id=\"search\" name=\"\" value=\"\" placeholder=\"Enter keywords\">
                    </form>
                                            <table id=\"table\" class=\"table table-striped table-mod\">
                                                <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>EMail</th> 
                                                        <th>Ville</th>  
                                                        <th>Etat de Compte</th>
                                                        <th>Téléphone</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                ";
        // line 704
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Adherant"));
        foreach ($context['_seq'] as $context["_key"] => $context["adh"]) {
            // line 705
            echo "                                                        <tr>
                                                            <td>";
            // line 706
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getNom", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 707
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getEmail", array(), "method"), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 708
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getVille", array(), "method"), "html", null, true);
            echo "</td>
                                                            <td> ";
            // line 709
            if (($this->getAttribute($this->getContext($context, "adh"), "getEtat", array(), "method") == "1")) {
                echo " Activé ";
            } else {
                echo " Bloqué ";
            }
            echo " </td>
                                                            <td>";
            // line 710
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getTelephone", array(), "method"), "html", null, true);
            echo " <div class=\"view-button\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil", array("id" => $this->getAttribute($this->getContext($context, "adh"), "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"btn  btn-mini\">Afficher</a></div><div class=\"view-button\"><a href=\"\" class=\"btn  btn-mini\"onclick=\"\$.jGrowl('Ladhérent a été bloquée', { header: 'FAIT !' });\" >Bloquer</a></div></td>
                                                        </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 713
        echo "                                                    </tbody>
                                                </table>

                                            </div>


                                        </div>
                                        <!--CONTENT MAIN END-->

                                    </div>
                                    <!--Content END-->

                                    <!-- Le javascript
                                    ================================================== -->
                                    <!-- Placed at the end of the document so the pages load faster -->
                     <script src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

                                    <script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>

                                    <script src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/graphtable.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 743
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/autoresize.jquery.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.autotab.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/elfinder/js/elfinder.min.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
                                    <script src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/validation/languages/jquery.validationEngine-en.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
                                    <script src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/validation/jquery.validationEngine.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
                                    <script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jgrowl_minimized.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jscrollpane.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.stepy.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/raphael.2.1.0.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/justgage.1.0.1.min.js"), "html", null, true);
        echo "\"></script>
                                     <script src=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/justgage.1.0.2.min.js"), "html", null, true);
        echo "\"></script>
                                    <script src=\"";
        // line 759
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/glisse.js"), "html", null, true);
        echo "\"></script>

                                    <script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/application.js"), "html", null, true);
        echo "\"></script>

                                    <script>
                                        var \$rows = \$('#table tr');
\$('#search').keyup(function() {
    var val = \$.trim(\$(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    \$rows.show().filter(function() {
        var text = \$(this).text().replace(/\\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});

                                        </script>
   
                                        
                                                                             <script>
                                        var \$rows2 = \$('#table1 tr');
\$('#search1').keyup(function() {
    var val2 = \$.trim(\$(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    \$rows2.show().filter(function() {
        var text2 = \$(this).text().replace(/\\s+/g, ' ').toLowerCase();
        return !~text2.indexOf(val2);
    }).hide();
});
                                        </script>
                                        
                                        <script>
                                        var \$rows3 = \$('#table2 tr');
\$('#search2').keyup(function() {
    var val3 = \$.trim(\$(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    \$rows3.show().filter(function() {
        var text3 = \$(this).text().replace(/\\s+/g, ' ').toLowerCase();
        return !~text3.indexOf(val3);
    }).hide();
});
                                        </script>
                                    
                                    
                                    
                                    
                            </body>
                        </html>


";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::Dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 593,  726 => 576,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 343,  471 => 339,  464 => 335,  390 => 264,  352 => 229,  340 => 220,  329 => 212,  318 => 204,  308 => 199,  265 => 167,  259 => 166,  253 => 164,  249 => 163,  194 => 114,  190 => 113,  90 => 34,  76 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 176,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 136,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 35,  89 => 20,  85 => 25,  75 => 17,  68 => 27,  56 => 24,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 49,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 36,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 23,  50 => 10,  43 => 20,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 90,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 21,  86 => 33,  82 => 32,  80 => 19,  73 => 19,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 22,  45 => 17,  42 => 7,  39 => 19,  36 => 5,  33 => 4,  30 => 7,);
    }
}
