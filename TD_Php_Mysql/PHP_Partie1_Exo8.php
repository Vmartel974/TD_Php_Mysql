<?php
        include 'menu.php';
        menu()
    ?>


<!DOCTYPE html>
<html lang="fr">
<?php
    session_start ();
    if(isset($_POST['submit2'])) {
        session_unset();
        session_destroy();
    }   
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>PHP_Partie1_Exo8</title>
</head>

<body>
    <div>
        <form action="" method="post">
            <label for="name">Entrez votre nom :</label>
            <input type="text" name="name" id="name" required>
            <input type="submit" name="submit" value="Envoyer">
        </form>

        <form action="" method="post">
            <input type="submit" name="submit2" value="Deconnexion">
        </form>
        <?php

        if(isset($_POST['name'])){
            $_SESSION['name']=$_POST['name'];
        }

            
            
        if(isset($_SESSION['name'])){
            echo "Mon nom est : ".$_SESSION['name'];
        }
        else{
            echo "La session n'existe pas";
        }

        ?>
        <div>
            <?php
            //code source//
            echo '<p>Code Source :</p>';
            highlight_file((__FILE__));
        ?>
        </div>
    </div>
</body>

</html>