<?php session_start() ; ?>
<html>
 <head></head>
 <body>
 <p><h1>Mon TP</h1></p>
 <form method="POST" action="index.php">
 Nom : <input type="text" name="nom">
 <input type="submit" value="Valide">
 </form>
 <?php

 if(isset($_POST["nom"])){
 echo "Vous vous appelez".$_POST["nom"];
 $_SESSION["Toto"]= $_POST["nom"];
 }
 if(isset($_SESSION["Toto"])){
 echo "ma session est : ".$_SESSION["Toto"];
 }
 // TEST DE VARIABLE

 $MonChiffre = 12;
 $MonDeuxiemeChiffre = 2;
 $MonAge = 23;
 echo "<p>J'ai ".$MonAge." ans</p>" ;
 $MonAge = $MonAge + $MonDeuxiemeChiffre;
 echo "<p>J'ai ".$MonAge." ans</p>" ;
 //TEST DE CONDITION
 if( $MonAge > 35) {
 //Cas age est plus grand que 35
 echo "<p>tu es trop vieu</p>";
 }else{
 //cas en dessous de 35
 echo "<p>tu es bien Jeune</p>";
 }
 //TEST DE BOUCLE sur un tableau de taille 4
 $colors = array('Julien', 'Laure', 'Anette', 'cnudde');

 echo $colors[1];
 for ($i = 0; $i < 4; $i++) {
 echo "<p>";
 echo "Valeu de i :".$i;
 echo "Le nom : ".$colors[$i];
 echo "</p>";
 }
 echo "<p>exo2</p>";
 $MonTableau = array(1,2,3,4,5);
 echo $MonTableau[0];
 echo $MonTableau[4];
 for($i=0;$i<=4;$i++){

 echo " <p>à l'indice ".$i." la valeur est".$MonTableau[$i]."</p>";
 }
 $unTableay['maison']='coucou';
 echo $unTableay['maison'];
 ?>
 <p> $MonTableau = array(1,2,3,4,5);
 echo $MonTableau[0];
 echo $MonTableau[4];
 for($i=0;$i<=4;$i++){

 echo " à l'indice ".$i." la valeur est".$MonTableau[$i]."";
 }</p>
 <?php
 //exo 2
 $MonTableau = array("nom" => 'Langlace',"Prenom" => 'julien',"Age" =>
'12',"Mail" => 'julien@mail.com',"sex" => 'Homme');
 foreach ($MonTableau as $key => $value) {

 echo "{$key} => {$value} ";

 }


 ?>
 </body