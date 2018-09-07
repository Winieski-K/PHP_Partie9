<?php
// Configure la langue en français
setlocale(LC_TIME, 'fr_FR.utf8');
// Stocke la date(formatée par rapport aux paramètres locaux) dans une variable
$date = strftime('%A %d %B %Y');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <!-- Affiche le contenu de la variable $date -->
        <p><?php echo 'Nous sommes le ' . $date ?></p>
    </body>
</html>
