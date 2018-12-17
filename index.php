<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 9 exercice 7</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <div align="center">
                        <h1 align="center">PHP Partie 9 exercice 7</h1>
                        <h3 align="center">Exercice 7</h3>
                        <p class="text">Afficher la date du jour + 20 jours.</p>     
                        <?php
                        $date = new DateTime('now');
                        // affichage de la date du jour
                        $date1 = new DateTime('now');
                        $date1->add(new DateInterval('P20D'));
                        // Première ligne c'est la date du jour, et la deuxième ligne c'est l'ajout de 20 jours à la date du jour
                        ?>
                        <p>Nous sommes le :<b><?= $date->format('d-m-Y') . "\n"; ?></b></p>
                        <p>+ 20 jours, nous serons le : <b><?= $date1->format('d-m-Y') . "\n"; ?></b></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
