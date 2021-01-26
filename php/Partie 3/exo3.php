<?php

class Personnage {

    private $_pseudo;
    private $_vie = 100;

    public function __construct($pseudo, $vie) {
        $this->_pseudo = $pseudo;
        $this->_vie = $vie;
    }

    function personnage() {
        echo "Bonjour je m'appel ".$this->_pseudo;
        echo ", j'ai " . $this->_vie . " vie(s)</br>";
    }

}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Exercices 3</title>
</head>

<body>

    <?php 

$personnage = new personnage("Vincent", 100); 
$personnage->personnage();

?>


</body>

</html>

<?php 
// code source de la page 
highlight_file(__FILE__); 
?>