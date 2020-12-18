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
    <title>PHP_Partie1_Exo3</title>
</head>

<body>
    <div>
        <?php
        $tab0 = array ('NOM ', 'PRENOM ', 'MDP');
        $tab1 = array ('Caudron ', 'Clement ', '123');
        $tab2 = array ('Cauet ', 'Clement ', '456');
        $tab3 = array ('De Almeda ', 'Nicolas ', '789');

        echo '<table><tr>'; //Creation d'un tableau
        
        for ($numero = 0; $numero < 3; $numero++){
            echo '<td>'.$tab0[$numero].'</td>';
        }

        echo '</tr>';
        echo '<tr>';

        for ($numero = 0; $numero < 3; $numero++){
            echo '<td>'.$tab1[$numero].'</td>';
        }

        echo '</tr>';
        echo '<tr>';

        for ($numero = 0; $numero < 3; $numero++){
            echo '<td>'.$tab2[$numero].'</td>';
        }

        echo '</tr>';
        echo '<tr>';

        for ($numero = 0; $numero < 3; $numero++){
            echo '<td>'.$tab3[$numero].'</td>';
        }

        echo '</tr>';
        echo '</table>';
        
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