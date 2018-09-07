<?php
// date du 16 mai 2016
$oldDate = new DateTime('2016-05-15');
// date actuelle
$nowDate = new Datetime();
// différence des dates
$interval = date_diff($oldDate, $nowDate);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <!-- Affiche  la variable $interval formatée -->
        <p><?php echo $interval->format('%a') . ' Jours écoulés depuis le 16 mai 2016'; ?></p>
    </body>
</html>
