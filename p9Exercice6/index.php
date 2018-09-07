<?php
// variable contenant le nombre de jour dans le mois de février 2016
$numberDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
    </head>
    <body>
        <!-- Affiche le contenu de la variable $numberDays -->
        <p><?php echo $numberDays . ' ' . 'jours'; ?></p>
    </body>
</html>
