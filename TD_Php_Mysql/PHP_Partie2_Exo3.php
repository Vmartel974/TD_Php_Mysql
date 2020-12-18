<?php
        include 'menu.php';
        menu()
    ?>

<?php
    
    function tableau($note1, $note2, $note3){
             
        ?><table border=2px>
    <tr>
        <td><?php echo $note1; ?></td>
    </tr>
    <tr>
        <td><?php echo $note2;?></td>
    </tr>
    <tr>
        <td><?php echo $note3;?></td>
    </tr>
</table>

<?php
    
    }

    function moyenne($note1, $note2, $note3){
        $moy=($note1+$note2+$note3)/3;
        echo "La moyenne est de ".$moy;
        return $moy;
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>PHP_Partie2_Exo3</title>
</head>

<body>
    <div>
        <?php
                tableau(14, 15, 16);
            ?>
        <?php
                moyenne(14, 15, 16);
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