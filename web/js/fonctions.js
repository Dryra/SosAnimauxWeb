//Fonction d'instance permettant de v�rifier si le navigateur supporte l'objet XMLHTTPRequest
function objet_XMLHttpRequest()
{
//On d�clare une variable "mavariable" � null
var mavariable = null;
//Teste si le navigateur prend en charge les XMLHttpRequest
if (window.XMLHttpRequest || window.ActiveXObject){
// Si Internet Explorer alors on utilise les ActiveX
if(window.ActiveXObject){
//On teste IE7 ou sup�rieur
try{
mavariable = new ActiveXObject("Msxml2.XMLHTTP");
}
//Si une erreur est lev�e, alors c'est IE 6 ou inf�rieur
catch(e){
mavariable = new ActiveXObject("Microsoft.XMLHTTP");
}
}
//Navigateurs r�cents (Firefox, Op�ra, Chrome, Safari, ...)
else{
mavariable = new XMLHttpRequest();
}
}
//XMLHttpRequest non support� par le navigateur
else{
alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
return null;
}
//On retourne l'objet mavariable
return mavariable;
}


function teste_ajax(){
 
//On d�clare une variable
var mavariable = objet_XMLHttpRequest();
 
//r�cup�ration des donn�es
var pseudo = encodeURIComponent(document.getElementById("pseudo").value);
var message = encodeURIComponent(document.getElementById("message").value);
 
//Si le pseudo est vide
if(pseudo == ''){
//On lance une alert
alert('Pseudo vide!');
//On stop tout
return false;
}
//idem pour le message
if(message == ''){
alert('Message vide!');
return false;
}
 
//On assigne une fonction � la propri�t� onreadystatechange
mavariable.onreadystatechange = function(){
//Si l'attribut readyState renvoie 4 et que l'attribut status renvoie 200
if(mavariable.readyState == 4 && mavariable.status == 200){
//On affiche le r�sultat charg� dans l'attribut responseText qui est affich� dans un div nomm� "mondiv"
document.getElementById("mondiv").innerHTML="lolla";
//On vide le champ message
document.getElementById("message").value='';
}
};
 
 //On d�clare la m�thode d'envoie 
mavariable.open("POST","C:\wamp\www\SosAnimauxBackOffice\src\SosAnimauxFront\FrontOfficeBundle\Controller\traitement.php",true); 
//On assigne un header 
mavariable.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
//On envoie 
mavariable.send("pseudo="+pseudo+"&message="+message);
}