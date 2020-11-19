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


        $sth = $pdo->prepare("SELECT * FROM type_jeu WHERE id_type= $_GET[id_type]");
        $sth->execute();


        $resultat = $sth->fetchAll();


        foreach ($resultat as $key => $value) {
    ?>

<div class="row barrenav">
            <form class="formulaire formType" action="../traitement/traitement_type.php" method="post">
                <div class="row">
                    <label class="col-md-4 nouveauType" for="nom_type">Modifier un type de jeu</label>
                    <input type="text" class="form-control col-md-4" id="nom_type" name="nom_type" required placeholder="Type" value="<?php echo $value['nom_type'] ?>">
                    <div class="col-md-1"></div>
                    <input name="modifier" type="submit" class="btn btn-info col-md-2" value="Modifier">
                    <div class="col-md-1"></div>
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