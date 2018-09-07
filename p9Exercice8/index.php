<?php
setlocale(LC_TIME, 'fr_FR.utf8');
// Affiche la date du jour -20 jours
$date = strtotime('-22 days');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8</title>
    </head>
    <body>
        <!-- Affiche le contenu de la variable $date au format jj/mm/aaaa -->
        <p><?php echo date('d/m/Y', $date); ?></p>
    </body>
</html>
