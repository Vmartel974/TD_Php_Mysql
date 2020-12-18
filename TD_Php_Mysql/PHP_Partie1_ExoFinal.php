<?php
        include 'menu.php';
        menu()
    ?>


<!DOCTYPE html>
<html lang="fr">
<?php
     session_start ();
     if(isset($_POST['destroy'])) {
         session_unset();
         session_destroy();
     }   
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>PHP_Partie1_ExoFinal</title>
</head>

<body>
    <div>
        <?php

    if($_SESSION['loged']==true){
        echo '<form action="" method="post">
                <label for="name">Entrez votre nom :</label>
                <input type="text" name="name" id="name" required>
                <label for="name">Entrez votre MDP :</label>
                <input type="text" name="MDP" id="MDP" required>
                <input type="submit" name="submit" value="Connexion">
            </form>';
    if(isset($_POST['name'])&&isset($_POST['MDP'])){
        $_SESSION['name']=$_POST['name'];
        $_SESSION['MDP']=$_POST['MDP'];
    }
        
    if(isset($_SESSION['name'])&&isset($_SESSION['MDP'])){
        if(($name!=$_POST['name'])){
            echo "Le login ".$_SESSION['name']." est inconnu.";
        }
    
        if(($MDP!=$_POST['MDP'])){
            echo "Le MDP ".$_SESSION['MDP']." est incorrect.";
        }
    
        if($MDP==$_POST['MDP']&&$name==$_POST['name']){
            $_SESSION['loged']=true;
        }
    }
    else{
        echo "La session n'existe pas";
    }

    $name = 'Langlace';
    $MDP = '1234';

    }
    else{
        echo '<h1>Salut la compagnie</h1>
        <form  action="" method="post">
            <input type="submit" name="destroy" value="Deconnexion">
        </form>';
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