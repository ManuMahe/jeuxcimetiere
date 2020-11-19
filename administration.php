<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Les Jeux du Cimetière</title>

    <!--Feuille de style-->
    <link rel="stylesheet" href="ressources/css/styles.css" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="row">
            <div class="col-sm-3 barrenav">
                <a class="btn btn-info btn-block" href="index.php">Revenir à la page principale</a>
            </div>
            <div class="col barrenav"></div>
        </div>
        <div class="row ensemble">
            <form class="formulaire formJeu" action="traitement/traitement_jeu.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5 flexForm">
                        <h2>Ajouter un nouveau jeu</h2>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nom_jeu" name="nom_jeu" required placeholder="Nom du jeu">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="nbre_joueurs" name="nbre_joueurs" required placeholder="Nombre de joueurs maximum">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="duree_jeu" name="duree_jeu" required placeholder="Durée d'une partie">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="prix_jeu" name="prix_jeu" required placeholder="Prix du jeu">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="type_id" name="type_id" placeholder="Type de jeu">
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
                            <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required placeholder="Votre photo">
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea id="description_jeu" name="description_jeu" rows="5" cols="33" placeholder="Description du jeu"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input name="ajouter" type="submit" class="btn btn-info btn-block" value="Ajouter">
                    </div>
                </div>
            </form>
        </div>
        <div class="row barrenav">
            <form class="formulaire formType" action="traitement/traitement_type.php" method="post">
                <div class="row">
                    <label class="col-md-4 nouveauType" for="nom_type">Ajouter un nouveau type de jeu</label>
                    <input type="text" class="form-control col-md-4" id="nom_type" name="nom_type" required placeholder="Type">
                    <div class="col-md-1"></div>
                    <input name="ajouter" type="submit" class="btn btn-info col-md-2" value="Ajouter">
                    <div class="col-md-1"></div>
                </div>
            </form>
        </div>
        <div class="row listeType">
            <div class="table-reponsive-md tableType">
                <table class="table table-sm">
                    <tr>
                        <?php

                        try {
                            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                            $sth1 = $pdo->prepare("SELECT * FROM type_jeu ");
                            $sth1->execute();


                            $resultat1 = $sth1->fetchAll();


                            foreach ($resultat1 as $key1 => $value1) {
                        ?>

                                <td scope="col" class="table-dark">
                                    <?php echo $value1['nom_type'] ?>
                                    <form action="update/update_type.php" method="get">
                                        <input type="hidden" name="id_type" value="<?php echo $value1['id_type']; ?>">
                                        <input name="modifier" type="submit" class="btn btn-info btn-sm btn-block" value="Modifier">
                                    </form>
                                
                                    <form action="delete/delete_type.php" method="get">
                                        <input type="hidden" name="id_type" value="<?php echo $value1['id_type']; ?>">
                                        <input name="supprimer" type="submit" class="btn btn-info btn-sm btn-block" value="Supprimer">
                                    </form>
                                </td>
                        <?php

                            }
                        } catch (PDOException $e) {
                            echo "Erreur : " . $e->getMessage();
                        }
                        ?>
                    </tr>
                </table>
            </div>

        </div>
        <div class="ensemble adminJeux">
            <ul class="list-group">
                <?php

                try {
                    $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                    $sth3 = $pdo->prepare("SELECT * FROM jeu ");
                    $sth3->execute();


                    $resultat3 = $sth3->fetchAll();


                    foreach ($resultat3 as $key3 => $value3) {
                ?>

                        <li class="list-group-item liJeu">
                            <div class="row">
                                <div class="col-md-8 titreLiJeu" style="background-image: url(<?php echo $value3['image_jeu'] ?>); background-position: center; padding:0; margin: 0 auto;">

                                    <h3><?php echo $value3['nom_jeu'] ?></h3>
                                </div>
                                <div class="col-md-4">
                                    <form action="update/update_jeu.php" method="get">
                                        <input type="hidden" name="id_jeu" value="<?php echo $value3['id_jeu']; ?>">
                                        <input name="modifier" type="submit" class="btn btn-info btn-block" value="Modifier">
                                    </form>
                                    <br />
                                    <form action="delete/delete_jeu.php" method="get">
                                        <input type="hidden" name="id_jeu" value="<?php echo $value3['id_jeu']; ?>">
                                        <input name="supprimer" type="submit" class="btn btn-info btn-block" value="Supprimer">
                                    </form>
                                </div>
                            </div>
                        </li>



                <?php

                    }
                } catch (PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                }
                ?>
            </ul>

        </div>
    </main>




    <!--Scripts bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>