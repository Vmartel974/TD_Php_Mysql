<?php
        include 'menu.php';
        menu()
    ?>
<?php
    function tableau(){
        echo 
    "<table border=2px>
        <tr>
            <td>NOM</td>
            <td>AGE</td>
            <td>SEXE</td>
        </tr>
        <tr>
            <td>Robert</td>
            <td>65</td>
            <td>Homme</td>
        </tr>
        <tr>
            <td>Jaqueline</td>
            <td>39</td>
            <td>Femme</td>
        </tr>
        <tr>
            <td>Louison</td>
            <td>12</td>
            <td>Indéterminé</td>
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
    <title>PHP_Partie2_Exo1</title>
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