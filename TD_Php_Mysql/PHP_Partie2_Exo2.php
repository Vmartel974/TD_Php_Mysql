<?php
        include 'menu.php';
        menu()
    ?>

<?php
    function tableau($nom="Philippe", $age="152", $sexe="Inconnu"){
        echo 
    "<table border=2px>
        <tr>
            <td>NOM</td>
            <td>AGE</td>
            <td>SEXE</td>
        </tr>
        <tr>
            <td>$nom</td>
            <td>$age</td>
            <td>$sexe</td>
        </tr>
    </table>";
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>PHP_Partie2_Exo2</title>
</head>

<body>
    <div>
        <?php
                tableau();
            ?>
        <?php
                tableau();
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