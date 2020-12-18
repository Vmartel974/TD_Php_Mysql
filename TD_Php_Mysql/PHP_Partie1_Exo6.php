
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
    <title>PHP_Partie1_Exo6</title>
</head>

<body>
    <div>
        <form action="" method="get">
            <label for="name">Entrez votre nom :</label>
            <input type="text" name="name" id="name" required>
            <input type="submit" name="submit" value="Envoyer">
        </form>
        <?php
            
            if(isset($_GET['name'])){
                echo "Mon nom est : ".$_GET['name'];
            }
            else{
                echo "Remplir le formulaire";
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