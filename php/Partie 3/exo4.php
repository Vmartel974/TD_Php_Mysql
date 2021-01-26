<?php

class Personnage {

    private $_pseudo;
    private $_vie=100;
    private $_attaque=50;

    // Dans la fonction suivante on construit l'objet et on rentre les valeurs suivantes :
    // pseudo : String
    // vie : Nombre
    public function __construct($pseudo, $vie) {
        $this->_pseudo = $pseudo;
        $this->_vie = $vie;
    }

    // Dans la fonction suivante nous affichons les informations du personnage sur la page web
    public function personnage() {
        echo "Bonjour je m'appel ".$this->_pseudo;
        echo ", j'ai " . $this->_vie . " vie(s)</br>";
    }

    // Dans la fonction suivante on récupère le pseudo du personnage
    public function getPseudo() {
        return $this->_pseudo;
    }

    // Dans la fonction suivante on retire la vie au joueur
    public function getAttaque() {
        return $this->_attaque;
    }

    // Dans la fonction suivante nous créeons une attaque
    // $pseudo = pseudo du personnage à attaquer
    // $degat = degat à donner au personnage
    public function attaque($pseudo) {
        echo "<p>".$pseudo->getpseudo()." attaque ".$this->_pseudo;
        $this->defense($pseudo->getAttaque());
        echo " il lui reste ".$this->_vie." points de vie</p>";
    }

    // Dans la fonction suivante nous allons défendre, on rentre les valeurs suivantes :
    // $valeur = valeur de l'attaque
    public function defense($valeur) {
        $this->_vie = $this->_vie - $valeur;
    }

}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Exercices 4</title>
</head>

<body>

    <?php 

// On créer les objets des personnages
$personnage = new personnage("Vincent", 200); 
$personnage->personnage();
$personnage2 = new personnage("Julien", 100); 
$personnage2->personnage();

// On attaque 
$personnage->attaque($personnage2);
$personnage2->attaque($personnage);

?>


</body>

</html>

<?php 
// code source de la page 
highlight_file(__FILE__); 
?>