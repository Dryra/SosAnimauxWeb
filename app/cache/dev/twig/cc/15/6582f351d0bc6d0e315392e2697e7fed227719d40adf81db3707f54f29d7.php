<?php

/* BackOfficeBundle::UtilisateursLayout.html.twig */
class __TwigTemplate_cc156582f351d0bc6d0e315392e2697e7fed227719d40adf81db3707f54f29d7 extends Twig_Template
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
        echo "\" class=\"active\"><i class=\"icon-group\"></i> <span>Utilisateurs </span></a></li>
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
                        <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Accueil</a></li>
                        
                    </ul>  
                </li>
     </ul>
     
     <ul class=\"menu-speedbar\">
    \t  
          
          
     </ul>

     
     </div>
     </div>
     <!--SpeedBar END-->
     
     <!--Search Start-->   
     <div class=\"search\">
     
\t <div class=\"clear\"></div>\t
     </div>
     <!--Search END-->
     
     <!--CONTENT MAIN START-->
     <div class=\"content\">
        
        <!--LEFTBAR PROFILE START-->
       
        
        
        <!--LEFTBAR PROFILE END-->
        
        <!--CONTENT PROFILE START-->
        <!--CONTENT MAIN START-->
     <div class=\"content\">
         <br>
        <p ><b><font size=\"5px\" color=\"blue\" > Liste des Adhérents</font></b></p>
        <!--Messages Start-->
          <div class=\"tab-pane\" id=\"inbox\">
\t\t\t\t\t<div class=\"message-list\">
                    <div class=\"action-message\">
                     <div class=\"btn-group\">
                      <button class=\"btn b2\"><i class=\"icon-share-alt padding-null\"></i></button>
                      <button class=\"btn b2\"><i class=\"icon-trash padding-null\"></i></button>
                      <button class=\"btn b2\"><i class=\"icon-pencil padding-null\"></i></button>
             \t\t </div>
                    </div>
                    <table class=\"table table-striped table-mod\" id=\"datatable_3\">
                    <thead>
                      <tr>
                        <th class=\"chex-table\"><input type=\"checkbox\" id=\"maincheck\" name=\"cc\"/><label for=\"maincheck\"><span></span></label></th>
                        <th class=\"min-width\"><i class=\"icon-star\"></i></th>
                        <th>Nom</th>
                                                        <th>EMail</th> 
                                                        <th>Ville</th>  
                                                        <th>Etat du Compte</th>
                                                        <th>Téléphone</th>
                      </tr>
                    </thead>
                    <tbody>
                        ";
        // line 159
        $context["var"] = 1;
        // line 160
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Adherant"));
        foreach ($context['_seq'] as $context["_key"] => $context["adh"]) {
            // line 161
            echo "                            
                      <tr>
                        <td class=\"chex-table\"><input type=\"checkbox\" name=\"numbers[]\" class=\"mc\" value=\"0\" id=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->getContext($context, "var"), "html", null, true);
            echo "\" /><label for=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "var"), "html", null, true);
            echo "\"><span></span></label></td>
                        <td class=\"min-width\"><a href=\"#\"><i class=\"icon-star\"></i></a></td>
                        <td>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getNom", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getEmail", array(), "method"), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getVille", array(), "method"), "html", null, true);
            echo "</td>
                                                            <td> ";
            // line 168
            if (($this->getAttribute($this->getContext($context, "adh"), "getEtat", array(), "method") == "1")) {
                echo " <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/green.png"), "html", null, true);
                echo "\" width=\"10px\" height=\"10px\" alt=\"Actif\" > ";
            } else {
                echo "  <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/blocked.png"), "html", null, true);
                echo "\" width=\"10px\" height=\"10px\" alt=\"Bloqué\" > ";
            }
            echo " </td>
                                                            <td>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "adh"), "getTelephone", array(), "method"), "html", null, true);
            echo " <div class=\"view-button\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil", array("id" => $this->getAttribute($this->getContext($context, "adh"), "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"btn  btn-mini\">Afficher</a></div>";
            if (($this->getAttribute($this->getContext($context, "adh"), "getEtat", array(), "method") == "1")) {
                echo "<div class=\"view-button\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bloquer", array("id" => $this->getAttribute($this->getContext($context, "adh"), "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn  btn-mini\"onclick=\"\$.jGrowl('Ladhérent a été bloquée', { header: 'FAIT !' });\" >Bloquer</a></div>
                                                           ";
            } else {
                // line 170
                echo " <div class=\"view-button\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("debloquer", array("id" => $this->getAttribute($this->getContext($context, "adh"), "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"btn  btn-mini\"onclick=\"\$.jGrowl('Ladhérent a été Activé', { header: 'FAIT !' });\" >Activer</a></div>";
            }
            // line 171
            echo "                                                            
                                                            </td>
                                                       
                      </tr>
                      ";
            // line 175
            $context["var"] = ($this->getContext($context, "var") + 1);
            // line 176
            echo "                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                    </tbody>
                    </table>
                    </div>
                </div> 
        
        <br>
        <br>
        <br>
        <p ><b><font size=\"5px\" color=\"blue\" > Liste des Prestataires</font></b></p>
        <!--Messages Start-->
          <div class=\"tab-pane\" id=\"inbox2\">
\t\t\t\t\t<div class=\"message-list\">
                    <div class=\"action-message\">
                     <div class=\"btn-group\">
                      <button class=\"btn b2\"><i class=\"icon-share-alt padding-null\"></i></button>
                      <button class=\"btn b2\"><i class=\"icon-trash padding-null\"></i></button>
                      <button class=\"btn b2\"><i class=\"icon-pencil padding-null\"></i></button>
             \t\t </div>
                    </div>
                    <table class=\"table table-striped table-mod\" id=\"datatable_4\">
                    <thead>
                      <tr>
                        <th class=\"chex-table\"><input type=\"checkbox\" id=\"maincheck2\" name=\"cc2\"/><label for=\"maincheck2\"><span></span></label></th>
                        <th class=\"min-width\"><i class=\"icon-star\"></i></th>
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
        // line 210
        $context["varp"] = 1;
        // line 211
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Prestataire"));
        foreach ($context['_seq'] as $context["_key"] => $context["pres"]) {
            // line 212
            echo "                            
                      <tr>
                        <td class=\"chex-table\"><input type=\"checkbox\" name=\"numbers2[]\" class=\"mc\" value=\"0\" id=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->getContext($context, "varp"), "html", null, true);
            echo "\" /><label for=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "varp"), "html", null, true);
            echo "\"><span></span></label></td>
                        <td class=\"min-width\"><a href=\"#\"><i class=\"icon-star\"></i></a></td>
                        <td>";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getNom", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getPrenom", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getDomaine", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getJourDisp", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getEmail", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getTel", array(), "method"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pres"), "getAdr", array(), "method"), "html", null, true);
            echo " <div class=\"view-button\"><a href=\"#\" class=\"btn  btn-mini\">Afficher</a></div></td>
                                                
                      </tr>
                      ";
            // line 224
            $context["varp"] = ($this->getContext($context, "varp") + 1);
            // line 225
            echo "                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pres'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                    </tbody>
                    </table>
                    </div>
                </div>
  
     </div>
     <!--CONTENT MAIN END-->

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
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
   
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>
   
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/graphtable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/autoresize.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.autotab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/elfinder/js/elfinder.min.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
\t<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/validation/languages/jquery.validationEngine-en.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
\t<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/validation/jquery.validationEngine.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jgrowl_minimized.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.jscrollpane.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.stepy.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/raphael.2.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/justgage.1.0.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/glisse.js"), "html", null, true);
        echo "\"></script>
    
\t<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/application.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>


";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::UtilisateursLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 277,  546 => 275,  542 => 274,  538 => 273,  534 => 272,  530 => 271,  526 => 270,  522 => 269,  518 => 268,  514 => 267,  510 => 266,  506 => 265,  502 => 264,  498 => 263,  494 => 262,  490 => 261,  486 => 260,  482 => 259,  470 => 256,  466 => 255,  462 => 254,  458 => 253,  449 => 250,  445 => 249,  441 => 248,  436 => 246,  432 => 245,  411 => 226,  405 => 225,  403 => 224,  397 => 221,  389 => 219,  385 => 218,  375 => 216,  359 => 211,  357 => 210,  316 => 176,  303 => 170,  292 => 169,  280 => 168,  272 => 166,  266 => 165,  255 => 161,  250 => 160,  248 => 159,  184 => 98,  429 => 230,  424 => 228,  420 => 227,  416 => 226,  412 => 225,  408 => 224,  404 => 223,  400 => 222,  396 => 221,  392 => 220,  388 => 219,  380 => 217,  376 => 216,  372 => 215,  364 => 212,  356 => 211,  348 => 209,  344 => 208,  336 => 206,  331 => 204,  327 => 203,  323 => 202,  319 => 201,  310 => 198,  284 => 175,  276 => 167,  260 => 157,  226 => 134,  222 => 133,  216 => 130,  137 => 63,  110 => 39,  81 => 25,  77 => 24,  34 => 11,  70 => 23,  185 => 81,  124 => 81,  84 => 48,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 593,  726 => 576,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 258,  471 => 339,  464 => 335,  390 => 264,  352 => 210,  340 => 207,  329 => 212,  318 => 204,  308 => 171,  265 => 167,  259 => 163,  253 => 164,  249 => 163,  194 => 114,  190 => 113,  90 => 34,  76 => 29,  480 => 162,  474 => 257,  469 => 158,  461 => 155,  457 => 153,  453 => 251,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 220,  387 => 122,  384 => 218,  381 => 217,  379 => 119,  374 => 116,  368 => 214,  365 => 111,  362 => 110,  360 => 212,  355 => 106,  341 => 105,  337 => 103,  322 => 177,  314 => 175,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 176,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 152,  247 => 78,  241 => 146,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 136,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 79,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 20,  63 => 19,  59 => 18,  38 => 10,  94 => 29,  89 => 27,  85 => 26,  75 => 17,  68 => 27,  56 => 24,  87 => 25,  21 => 2,  26 => 4,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 80,  158 => 67,  156 => 66,  151 => 63,  142 => 65,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 15,  40 => 8,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 49,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 24,  66 => 22,  55 => 17,  52 => 23,  50 => 20,  43 => 14,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 90,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 80,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 53,  86 => 33,  82 => 32,  80 => 27,  73 => 23,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 16,  48 => 22,  45 => 17,  42 => 7,  39 => 13,  36 => 5,  33 => 8,  30 => 10,);
    }
}
