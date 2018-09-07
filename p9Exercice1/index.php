<?php
// Déclaration d'une variable contenant la date du jour
$date = date('d/m/Y'); // format jj/mm/aaaa (heure du serveur)
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <!-- Affiche le contenu de la variable $date -->
        <p><?php echo 'Nous sommes le ' . $date ?></p>
    </body>
</html>
