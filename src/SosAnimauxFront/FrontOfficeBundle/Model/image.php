<?php

namespace SosAnimauxFront\FrontOfficeBundle;
   class image  {
       
       public function getimage()
       {
       
       
       
       
$conn = mysql_connect("localhost", "root", "root") 
  OR DIE (mysql_error()); 
mysql_select_db ("sosanimaux", $conn) OR DIE (mysql_error()); 
$sql    = "SELECT id,photo FROM animal "; 
$result = mysql_query ($sql, $conn); 
$ch='';
 while ( $row = mysql_fetch_array ($result)){
 $ch= 'C:\\wamp\\www\\SosAnimauxBackOffice\\web\\images\\'+$row['id'].".jpg" ;
 echo $ch ;
 echo "<br>";

      //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['photo'] ).'"/>';

      file_put_contents($ch, $row['photo']); 
      echo "file cree"; echo "<br>" ;
     
      } 
  
 
  
   }
   }
?>
