<?php

class Personnage {

    private $_pseudo;
    private $_vie = 100;

    private function __construct($pseudo, $vie) {
        $this->$_pseudo = $pseudo;
        $this->$_vie = $vie;
    }

}




?>
<!DOCTYPE html>
<html>

<head>
    <title>Exercices 2</title>
</head>

<body>


</body>

</html>
<?php // code source de la page 
highlight_file(__FILE__); 
?>