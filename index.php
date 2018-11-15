<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <div>
            <?php
            $count1 = 100;
            $count2 = 15;
            while ($count1 >= 10)
            {
                $total = $count1*$count2;
                echo '<p>Résultat ' .$total. '</p>';
                $count1--;
            }
            ?>
        </div>
    </body>
</html>