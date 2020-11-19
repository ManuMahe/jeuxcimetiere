<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Jeu</title>

    <!--Feuille de style-->
    <link rel="stylesheet" href="../ressources/css/styles.css" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sth = $pdo->prepare("SELECT * FROM jeu WHERE id_jeu= $_GET[id_jeu]");
        $sth->execute();


        $resultat = $sth->fetchAll();


        foreach ($resultat as $key => $value) {
    ?>

            <div class="row barrenav">
                <form class="formulaire formJeu" action="update_jeu_traitement.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5 flexForm">
                            <h2>Modifier un jeu</h2>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nom_jeu" name="nom_jeu" required placeholder="Nom du jeu" value="<?php echo $value['nom_jeu'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="nbre_joueurs" name="nbre_joueurs" required placeholder="Nombre de joueurs maximum" value="<?php echo $value['nbre_joueurs'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="duree_jeu" name="duree_jeu" required placeholder="Durée d'une partie" value="<?php echo $value['duree_jeu'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="prix_jeu" name="prix_jeu" required placeholder="Prix du jeu" value="<?php echo $value['prix_jeu'] ?>">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="type_id" name="type_id" placeholder="Type de jeu" value="<?php echo $value['type_id'] ?>">
                                    <option value="" disabled selected>-Type de jeu-</option>
                                    <?php


                                    $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                                    $sth2 = $pdo->prepare("SELECT * FROM type_jeu");
                                    $sth2->execute();


                                    $resultat2 = $sth2->fetchAll();


                                    foreach ($resultat2 as $key2 => $value2) {
                                    ?>
                                        <option value="<?php echo $value2['id_type']; ?>"><?php echo $value2['nom_type']; ?></option>
                                    <?php
                                    }


                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required placeholder="Votre photo" value="../<?php echo $value['image_jeu']; ?>">
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <textarea id="description_jeu" name="description_jeu" rows="5" cols="33" placeholder="Description du jeu" ><?php echo $value['description_jeu'] ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input name="ajouter" type="submit" class="btn btn-info btn-block" value="Modifier">
                        </div>
                    </div>
                </form>
            </div>
    <?php

        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>




<!--Scripts bootstrap-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>