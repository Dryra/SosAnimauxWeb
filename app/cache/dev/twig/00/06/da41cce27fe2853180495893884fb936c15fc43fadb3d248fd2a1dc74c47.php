<?php

/* FrontOfficeBundle::ProfilLayout.html.twig */
class __TwigTemplate_0006da41cce27fe2853180495893884fb936c15fc43fadb3d248fd2a1dc74c47 extends Twig_Template
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
    <link href=\"css/style.css\" rel=\"stylesheet\">
    <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
    
    <link rel=\"stylesheet\" href=\"css/jquery-ui-1.8.16.custom.css\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"css/fullcalendar.css\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"css/chosen.css\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"css/datepicker.css\" >
    <link rel=\"stylesheet\" href=\"css/colorpicker.css\">
    <link rel=\"stylesheet\" href=\"css/glisse.css?1.css\">
    <link rel=\"stylesheet\" href=\"css/jquery.jgrowl.css\">
    <link rel=\"stylesheet\" href=\"js/elfinder/css/elfinder.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"css/jquery.tagsinput.css\" />
    <link rel=\"stylesheet\" href=\"css/demo_table.css\" >
    <link rel=\"stylesheet\" href=\"css/jquery.jscrollpane.css\" >
    <link rel=\"stylesheet\" href=\"css/validationEngine.jquery.css\">
    <link rel=\"stylesheet\" href=\"css/jquery.stepy.css\" />
    
\t<link rel=\"stylesheet\" href=\"css/icon/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap-responsive.css\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    <!--[if lte IE 8]><script type=\"text/javascript\" src=\"/js/excanvas.min.js\"></script><![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"/images/icons/favicon.ico\">
  </head>

  <body onload=\"initialize()\">

\t<!--Header Start-->
\t<div class=\"header\" >
    \t\t
           <a href=\"dashboard.html\" class=\"logo\"><h1>Le Nom De l'adherant</h1></a>
           
           <div class=\"pull-right\">
           
           <!--Notifications Start-->  
           <div class=\"notifications-head\">
           
           <!--Messages Start-->
           <div class=\"btn-group m_left hide-mobile\" >
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
    \t     \t<span class=\"notification\">20</span><span class=\"triangle-1\"></span><i class=\"icon-comments\"></i><span class=\"caret\"></span>
            </a>
            <div class=\"dropdown-menu\">
            
              <span class=\"triangle-2\"></span>
              <div class=\"ichat\">
               <div class=\"ichat-messages\">
               \t<div class=\"ichat-title\">
                  <div class=\"pull-left\">Nouveaux Messages</div>
                  <div class=\"pull-right\"><span>Mise A jour</span></div>
                  <div class=\"clear\"></div>
                </div>
                
                <div class=\"imessage\">
                  <div class=\"iavatar\"><img src=\"images/users/1.jpg\" alt=\"\"></div>
                  <div class=\"imes\">
                  \t<div class=\"iauthor\">Ahmed Drira</div>
                    <div class=\"itext\">D'accord. Merci.</div>
                  </div>
                  <div class=\"idelete\"><a href=\"#\"><span><i class=\"icon-remove\"></i></span></a></div>
                  <div class=\"clear\"></div>
                </div>
                <div class=\"imessage\">
                  <div class=\"iavatar\"><img src=\"images/users/6.jpg\" alt=\"\"></div>
                  <div class=\"imes\">
                  \t<div class=\"iauthor\">Emma Clark</div>
                    <div class=\"itext\">Will you pay by credit card?</div>
                  </div>
                  <div class=\"idelete\"><a href=\"#\"><span><i class=\"icon-remove\"></i></span></a></div>
                  <div class=\"clear\"></div>
                </div>
                <div class=\"imessage\">
                  <div class=\"iavatar\"><img src=\"images/users/2.jpg\" alt=\"\"></div>
                  <div class=\"imes\">
                  \t<div class=\"iauthor\">Blake Washington</div>
                    <div class=\"itext\">Can I help you?</div>
                  </div>
                  <div class=\"idelete\"><a href=\"#\"><span><i class=\"icon-remove\"></i></span></a></div>
                  <div class=\"clear\"></div>
                </div>
                
                <div class=\"ichat-link\"><a href=\"#\">InBox</a> <a href=\"#\">OutBox</a> <a href=\"#\">Spam</a> <a href=\"#\">Trash</a>
                <div class=\"clear\"></div>
                </div>
                
                </div>
                <a href=\"#\" class=\"iview\">View all</a><a href=\"#\" class=\"imark\">Mark all read</a>
               
              </div>
            
            </div>
          </div>
          <!--Messages END--> 
          
          <!--Recent Activity Start-->
           <div class=\"btn-group pull-left hide-mobile\" >
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
    \t     \t<span class=\"notification\">77</span><span class=\"triangle-1\"></span><i class=\"icon-bell\"></i><span class=\"caret\"></span>
            </a>
            <div class=\"dropdown-menu\">
            
              <span class=\"triangle-2\"></span>
              <div class=\"ichat\">
               <div class=\"ichat-messages\">
               \t<div class=\"ichat-title\">
                  <div class=\"pull-left\">Recent Activity</div>
                  <div class=\"pull-right\"><span>Update 14*</span></div>
                  <div class=\"clear\"></div>
                </div>
                
                <div class=\"r_activity\">
                <div class=\"imessage\">
                  <div class=\"r_icon\"><a href=\"#\"><i class=\"icon-camera\"></i></a></div>
                  <div class=\"r_info\">
                  \t<div class=\"r_name\"><strong>Alan Cook</strong> a new photo</div>
                    <div class=\"r_text\"><i class=\"icon-time\"></i> 3 hours ago</div>
                    <div class=\"r_link\"><a href=\"#\">View...</a></div>
                  </div>
                  <div class=\"clear\"></div>
                </div>
                <div class=\"imessage\">
                  <div class=\"r_icon\"><a href=\"#\"><i class=\"icon-thumbs-up\"></i></a></div>
                  <div class=\"r_info\">
                  \t<div class=\"r_name\"><strong>Isaac Donaldson</strong> like: BMW E36</div>
                    <div class=\"r_text\"><i class=\"icon-time\"></i> 5 hours ago</div>
                    <div class=\"r_link\"><a href=\"#\">View...</a></div>
                  </div>
                  <div class=\"clear\"></div>
                </div>
                <div class=\"imessage\">
                  <div class=\"r_icon\"><a href=\"#\"><i class=\"icon-user\"></i></a></div>
                  <div class=\"r_info\">
                  \t<div class=\"r_name\">Registered new user</div>
                    <div class=\"r_text\"><i class=\"icon-time\"></i> 15th of May - 06:21</div>
                    <div class=\"r_link\"><a href=\"#\">View...</a></div>
                  </div>
                  <div class=\"clear\"></div>
                </div>
                </div>
               
                
                </div>
                <a href=\"#\" class=\"iview\">View all</a><a href=\"#\" class=\"imark\">Mark all read</a>
               
              </div>
            
            </div>
          </div>
          <!--Recent Activity END--> 
            
          </div><!--Notifications END-->
            
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
              <li><a href=\"#\"><i class=\"icon-globe\"></i> Accueil</a></li>
              <li><a href=\"#\"><i class=\"icon-comments\"></i> Messages</a></li>
              <li><a href=\"#\"><i class=\"icon-cog\"></i> Options</a></li>
              <li><a href=\"index.html\"><i class=\"icon-off\"></i> Déconnexion</a></li>
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
       <li><a href=\"index.html\"><i class=\"icon-home\"></i> <span>Accueil</span></a></li>
       
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
                        <li><a href=\"index.html\">Accueil</a></li>
                        
                    </ul>  
                </li>
     </ul>
     
     <ul class=\"menu-speedbar\">
    \t  <li><a href=\"messages.html\">Mes Declarations</a></li>
          <li><a href=\"search.html\">Recherche</a></li>
          
          
     </ul>

     
     </div>
     </div>
     <!--SpeedBar END-->
     
     <!--Search Start-->   
     <div class=\"search\">
     <form class=\"search-form\">
     \t<input type=\"text\" name=\"\" value=\"\" placeholder=\"Enter keywords\">
     </form>
\t <div class=\"clear\"></div>\t
     </div>
     <!--Search END-->
     
     <!--CONTENT MAIN START-->
     <div class=\"content\">
        
        <!--LEFTBAR PROFILE START-->
        <div class=\"leftbar-profile\">
        <div class=\"p-avatar\"><img src=\"images/users/1.jpg\" alt=\"\"></div>
        <ul class=\"p-menu\">
          <li><a href=\"#\"><i class=\"icon-home\"></i> Profile Dashboard</a></li>
          <li><a href=\"#\"><i class=\"icon-comments\"></i> Message</a></li>
          <li><a href=\"#\"><i class=\"icon-cog\"></i> Settings</a></li>
          <li><a href=\"#\"><i class=\"icon-group\"></i> Friends</a></li>
          <li><a href=\"#\"><i class=\"icon-globe\"></i> Online</a></li>
          <li><a href=\"#\"><i class=\"icon-off\"></i> Sign Out</a></li>
        </ul>
        
        <div class=\"p-activity\">
        \t<div class=\"p-activity-head\">Recent Activity</div>
            
            <div class=\"p-action\">
                <div class=\"p-action-icon\"><i class=\"icon-comment\"></i></div>
                <div class=\"p-action-info\">
                    <div>Comented on</div>
                    <div><a href=\"#\">Rebound - The Drib...</a></div>
                    <div>10 day ago</div>
                </div>
            </div>
             <div class=\"p-action\">
                <div class=\"p-action-icon\"><i class=\"icon-heart\"></i></div>
                <div class=\"p-action-info\">
                    <div>Alan Cook like the news</div>
                    <div><a href=\"#\">Rebound - The Drib...</a></div>
                    <div>10 day ago</div>
                </div>
            </div>
             <div class=\"p-action\">
                <div class=\"p-action-icon\"><i class=\"icon-group\"></i></div>
                <div class=\"p-action-info\">
                    <div>Started to chat with</div>
                    <div><a href=\"#\">iPhone 5 16GB White</a></div>
                    <div>about 5 hours ago</div>
                </div>
            </div>
        </div>
        
        </div>
        <!--LEFTBAR PROFILE END-->
        
        <!--CONTENT PROFILE START-->
        <div class=\"content-profile\">
          <div class=\"summary-title\">Alan Cook <span>(online)</span></div>
          <div class=\"info-profile\"><span>Status:</span> Sometimes I am so glad that I do not read or watch the news</div>
                  
          <div class=\"pull-left\">
          <div class=\"items-info-profile\">
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Birthday:</span></div>
                 <div class=\"info-right-profile\">September 1, 1985</div>
                 <div class=\"clear\"></div>
             </div>
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>City:</span></div>
                 <div class=\"info-right-profile\">London, UK</div>
                 <div class=\"clear\"></div>
             </div>
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Relationship status:</span></div>
                 <div class=\"info-right-profile\">Married</div>
                 <div class=\"clear\"></div>
             </div>
          </div>
          
          <div class=\"summary-title items-info-profile pull-left\">Contact information</div>
          <div class=\"edit-link-profile\"><a href=\"#\">Edit</a></div>
          <div class=\"clear\"></div>
          
          <div class=\"items-info-profile\">
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Current city:</span></div>
                 <div class=\"info-right-profile\">New York City </div>
                 <div class=\"clear\"></div>
             </div>
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Mobile:</span></div>
                 <div class=\"info-right-profile\">+7 (2344) 783 32 22 </div>
                 <div class=\"clear\"></div>
             </div>
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Skype:</span></div>
                 <div class=\"info-right-profile\">AlanCook</div>
                 <div class=\"clear\"></div>
             </div>
             <div class=\"info-profile\">
                 <div class=\"info-left-profile\"><span>Website:</span></div>
                 <div class=\"info-right-profile\"><a href=\"http://themeforest.net/user/dimka_ua_kh/portfolio\">themeforest.net</a></div>
                 <div class=\"clear\"></div>
             </div>
          </div>
          
          <div class=\"summary-title items-info-profile pull-left\">About Me</div>
          <div class=\"edit-link-profile\"><a href=\"#\">Edit</a></div>
          <div class=\"clear\"></div>
          
          
          <div class=\"items-info-profile\">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
          
          <div class=\"summary-title items-info-profile pull-left\">Adress</div>
          <div class=\"edit-link-profile\"><a href=\"#\">Edit</a></div>
          <div class=\"clear\"></div>
          
          <div class=\"items-info-profile\">
             <iframe class=\"map-profile\" src=\"https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D0%BB%D0%BE%D0%BD%D0%B4%D0%BE%D0%BD&amp;aq=&amp;sll=49.987204,36.273107&amp;sspn=0.421618,0.578156&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9B%D0%BE%D0%BD%D0%B4%D0%BE%D0%BD,+%D0%92%D0%B5%D0%BB%D0%B8%D0%BA%D0%BE%D0%B1%D1%80%D0%B8%D1%82%D0%B0%D0%BD%D0%B8%D1%8F&amp;ll=51.480955,-0.126257&amp;spn=0.008018,0.008583&amp;z=14&amp;output=embed\"></iframe>          
           </div>
          
          <div class=\"summary-title items-info-profile pull-left\">Other info</div>
          <div class=\"edit-link-profile\"><a href=\"#\">Edit</a></div>
          <div class=\"clear\"></div>
          
          <div class=\"items-info-profile\">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

          </div>
          
        </div>  
        </div>
        <!--CONTENT PROFILE END-->
        <div class=\"clear\"></div>
     </div>
     <!--CONTENT MAIN END-->

    </div>
    <!--Content END-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/jquery-ui.min.js\"></script>
   
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/bootstrap-datepicker.js\"></script>
    <script src=\"js/bootstrap-colorpicker.js\"></script>
    <script src=\"js/google-code-prettify/prettify.js\"></script>
   
    <script src=\"js/jquery.flot.min.js\"></script>
    <script src=\"js/jquery.flot.pie.js\"></script>
    <script src=\"js/jquery.flot.orderBars.js\"></script>
    <script src=\"js/jquery.flot.resize.js\"></script>
    <script src=\"js/graphtable.js\"></script>
    <script src=\"js/fullcalendar.min.js\"></script>
    <script src=\"js/chosen.jquery.min.js\"></script>
    <script src=\"js/autoresize.jquery.min.js\"></script>
    <script src=\"js/jquery.tagsinput.min.js\"></script>
    <script src=\"js/jquery.autotab.js\"></script>
    <script src=\"js/elfinder/js/elfinder.min.js\" charset=\"utf-8\"></script>
\t<script src=\"js/tiny_mce/tiny_mce.js\"></script>
    <script src=\"js/validation/languages/jquery.validationEngine-en.js\" charset=\"utf-8\"></script>
\t<script src=\"js/validation/jquery.validationEngine.js\" charset=\"utf-8\"></script>
    <script src=\"js/jquery.jgrowl_minimized.js\"></script>
    <script src=\"js/jquery.dataTables.min.js\"></script>
    <script src=\"js/jquery.mousewheel.js\"></script>
    <script src=\"js/jquery.jscrollpane.min.js\"></script>
    <script src=\"js/jquery.stepy.min.js\"></script>
    <script src=\"js/jquery.validate.min.js\"></script>
    <script src=\"js/raphael.2.1.0.min.js\"></script>
    <script src=\"js/justgage.1.0.1.min.js\"></script>
\t<script src=\"js/glisse.js\"></script>
    
\t<script src=\"js/application.js\"></script>


  </body>
</html>


";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle::ProfilLayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  287 => 183,  279 => 181,  275 => 180,  146 => 90,  65 => 21,  969 => 664,  803 => 501,  798 => 499,  794 => 498,  790 => 497,  786 => 496,  782 => 495,  778 => 494,  774 => 493,  770 => 492,  766 => 491,  762 => 490,  758 => 489,  754 => 488,  750 => 487,  742 => 485,  738 => 484,  734 => 483,  730 => 482,  722 => 480,  718 => 479,  714 => 478,  710 => 477,  705 => 475,  701 => 474,  697 => 473,  693 => 472,  676 => 458,  672 => 457,  668 => 456,  664 => 455,  586 => 379,  545 => 345,  422 => 249,  367 => 206,  334 => 188,  244 => 101,  233 => 96,  225 => 91,  213 => 88,  202 => 122,  198 => 121,  181 => 77,  167 => 72,  155 => 69,  114 => 40,  306 => 226,  302 => 225,  234 => 142,  228 => 166,  129 => 79,  118 => 74,  551 => 277,  546 => 275,  542 => 274,  538 => 273,  534 => 272,  530 => 271,  526 => 270,  522 => 269,  518 => 268,  514 => 267,  510 => 266,  506 => 265,  502 => 264,  498 => 263,  494 => 262,  490 => 261,  486 => 260,  482 => 259,  470 => 256,  466 => 255,  462 => 254,  458 => 253,  449 => 250,  445 => 249,  441 => 248,  436 => 246,  432 => 245,  411 => 244,  405 => 225,  403 => 224,  397 => 221,  389 => 219,  385 => 218,  375 => 216,  359 => 211,  357 => 210,  316 => 176,  303 => 170,  292 => 169,  280 => 168,  272 => 166,  266 => 165,  255 => 161,  250 => 160,  248 => 159,  184 => 98,  429 => 253,  424 => 228,  420 => 227,  416 => 245,  412 => 225,  408 => 224,  404 => 223,  400 => 222,  396 => 221,  392 => 220,  388 => 219,  380 => 217,  376 => 216,  372 => 215,  364 => 212,  356 => 198,  348 => 196,  344 => 208,  336 => 206,  331 => 204,  327 => 203,  323 => 202,  319 => 201,  310 => 227,  284 => 175,  276 => 167,  260 => 157,  226 => 134,  222 => 133,  216 => 130,  137 => 63,  110 => 39,  81 => 25,  77 => 24,  34 => 8,  70 => 23,  185 => 78,  124 => 81,  84 => 48,  20 => 1,  1110 => 761,  1105 => 759,  1101 => 758,  1097 => 757,  1093 => 756,  1089 => 755,  1085 => 754,  1081 => 753,  1077 => 752,  1073 => 751,  1069 => 750,  1065 => 749,  1061 => 748,  1057 => 747,  1053 => 746,  1049 => 745,  1045 => 744,  1041 => 743,  1037 => 742,  1033 => 741,  1029 => 740,  1025 => 739,  1021 => 738,  1017 => 737,  1013 => 736,  1008 => 734,  1004 => 733,  1000 => 732,  996 => 731,  991 => 729,  987 => 728,  970 => 713,  959 => 710,  951 => 709,  947 => 708,  943 => 707,  937 => 706,  934 => 705,  930 => 704,  908 => 685,  896 => 675,  886 => 671,  882 => 670,  878 => 669,  874 => 668,  870 => 667,  866 => 666,  862 => 665,  858 => 664,  855 => 663,  851 => 662,  826 => 640,  806 => 622,  797 => 619,  793 => 618,  789 => 617,  785 => 616,  781 => 615,  775 => 614,  772 => 613,  768 => 612,  746 => 486,  726 => 481,  716 => 569,  696 => 552,  686 => 545,  621 => 483,  478 => 258,  471 => 339,  464 => 335,  390 => 264,  352 => 197,  340 => 207,  329 => 212,  318 => 204,  308 => 171,  265 => 167,  259 => 163,  253 => 164,  249 => 163,  194 => 120,  190 => 113,  90 => 34,  76 => 29,  480 => 162,  474 => 257,  469 => 158,  461 => 155,  457 => 153,  453 => 251,  444 => 149,  440 => 261,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 220,  387 => 122,  384 => 218,  381 => 217,  379 => 215,  374 => 116,  368 => 214,  365 => 111,  362 => 110,  360 => 212,  355 => 106,  341 => 192,  337 => 103,  322 => 177,  314 => 175,  312 => 98,  309 => 97,  305 => 95,  298 => 224,  294 => 90,  285 => 89,  283 => 182,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 152,  247 => 78,  241 => 146,  229 => 140,  220 => 70,  214 => 69,  177 => 76,  169 => 107,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 13,  273 => 96,  269 => 168,  254 => 92,  243 => 88,  240 => 172,  238 => 98,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 135,  219 => 136,  217 => 134,  208 => 68,  204 => 72,  179 => 114,  159 => 70,  143 => 66,  135 => 53,  119 => 42,  102 => 31,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  38 => 9,  94 => 29,  89 => 27,  85 => 26,  75 => 17,  68 => 27,  56 => 18,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 12,  31 => 4,  28 => 8,  201 => 92,  196 => 90,  183 => 115,  171 => 73,  166 => 71,  163 => 71,  158 => 67,  156 => 97,  151 => 68,  142 => 89,  138 => 88,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 28,  69 => 25,  47 => 15,  40 => 11,  37 => 11,  22 => 2,  246 => 175,  157 => 98,  145 => 46,  139 => 45,  131 => 84,  123 => 47,  120 => 49,  115 => 43,  111 => 70,  108 => 36,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 24,  66 => 22,  55 => 17,  52 => 17,  50 => 20,  43 => 14,  41 => 7,  35 => 5,  32 => 9,  29 => 9,  209 => 87,  203 => 78,  199 => 67,  193 => 80,  189 => 79,  187 => 116,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 90,  162 => 57,  154 => 58,  149 => 51,  147 => 67,  144 => 88,  141 => 48,  133 => 80,  130 => 41,  125 => 78,  122 => 80,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 53,  86 => 48,  82 => 47,  80 => 27,  73 => 23,  64 => 26,  60 => 19,  57 => 11,  54 => 10,  51 => 16,  48 => 16,  45 => 13,  42 => 7,  39 => 13,  36 => 10,  33 => 10,  30 => 7,);
    }
}
