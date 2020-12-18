<?php
        include 'menu.php';
        menu()
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>PHP_Partie1_Exo2</title>
</head>

<body>
    <div>
        <?php
            //Partie 1//
            echo'<table><tr>'; //Creation d'un tableau
            
            $tab[4]=0;
            
            for($i=0; $i<=4; $i++){ //Tant que i est inferieur à 5 il va creer une valeur aleatoire et l'inserer dans le tableau
                $NombreAleatoire=rand(0,100);
                echo '<td>'.$NombreAleatoire.'</td>';
            }

            echo'</tr></table>';

            //Partie 2//
            echo '<table><tr>'; //Creation d'un tableau

            $tab[2]=0;
            $Nom[0]='Martel';
            $Prenom[0]='Vincent';
            $MDP[0]='MDP';
            
            echo '<td>'.$Nom[0].'</td>';
            echo '<td>'.$Prenom[0].'</td>';
            echo '<td>'.$MDP[0].'</td>';

            echo '</tr></table>';

            echo $Nom[0];
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