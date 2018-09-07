<?php
// Stocke le timestamp(nombre de secondes écoulées) du mardi 2 août 2016 à 15h
$date = new DateTime('2016-08-02 15:00:00');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <!-- Affiche le timestamp du jour actuel -->
        <p><?php echo time(); ?></p>
        <!-- Affiche le timestamp du mardi 2 août 2016 à 15h -->
        <p><?php echo date_timestamp_get($date); ?></p>
    </body>
</html>
