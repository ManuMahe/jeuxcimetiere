<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu - Les Jeux du Cimetière</title>

    <!--Feuille de style-->
    <link rel="stylesheet" href="ressources/css/styles.css" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'structures/header.php';
    ?>
    <main>
        <?php
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sth = $pdo->prepare("SELECT * FROM jeu INNER JOIN type_jeu ON jeu.type_id=type_jeu.id_type WHERE id_jeu = $_GET[id_jeu]");
            $sth->execute();


            $resultat = $sth->fetchAll();

            foreach ($resultat as $key => $value) {
        ?>

                <div class="row listJeu">
                    <div class="col-md-4">
                        <div class="jeuIndex" style="background-image: url(<?php echo $value1['image_jeu']; ?>);">
                        </div>

                    </div>
                    <div class="col-md-8 caracIndex">
                        <a>
                            <h3><?php echo $value['nom_jeu']; ?></h3>
                        </a>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action list-group-item-info">Pour <?php echo $value['nbre_joueurs']; ?> joueur(s)</li>
                            <li class="list-group-item list-group-item-action list-group-item-info">Durée d'une partie : <?php echo $value['duree_jeu']; ?> minutes</li>
                            <li class="list-group-item list-group-item-action list-group-item-info">Jeu de <?php echo $value['nom_type']; ?></li>
                            <li class="list-group-item list-group-item-action list-group-item-info">
                                <h4><?php echo $value['prix_jeu']; ?> €</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <p class="list-group-item list-group-item-action list-group-item-info col-md-12"><?php echo $value['description_jeu'];?></p>
                </div>



        <?php

            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        ?>










    </main>



    <?php
    include 'structures/footer.php';
    ?>



    <!--Scripts bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>