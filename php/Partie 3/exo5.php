<?php
include "personnage.php";

try{
$pdo = new pdo('mysql:host=localhost;dbname=personnage;', 'pi', 'raspberry');
$p1 = new personnage(1,$pdo);
$p2 = new personnage(2,$pdo);

}
catch (exeption $e){
    die ('erreur : ' .$e->getmessage());
}
?>

<?php
$p1->affiche();
$p2->affiche();
?>

