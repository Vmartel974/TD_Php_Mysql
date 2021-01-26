<?php 

class Exo1 {

    private $_nom;
    private $_prenom;

    function afficheUser() {
        echo "Je suis un User";
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Exercices 1</title>
</head>

<body>

    <h1>User</h1>
    <hr>
    </hr>
    <p>-Nom : String</p>
    <p>-Prenom : String</p>
    <hr>
    </hr>
    <p>+AfficheUser() : void</p>

</body>

</html>
<?php // code source de la page 
highlight_file(__FILE__); 
?>