<div class="col-md-3">
    <form class="form-group" action="index.php" method="get">
        <select class="form-control" name="prix_jeu" placeholder="prix_jeu">
            <option value="" disabled selected>-Filtrer par prix-</option>
            <?php


            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sth1 = $pdo->prepare("SELECT DISTINCT prix_jeu FROM jeu");
            $sth1->execute();


            $resultat1 = $sth1->fetchAll();


            foreach ($resultat1 as $key1 => $value1) {
            ?>
                <option value="<?php echo $value1['prix_jeu']; ?>"><?php echo $value1['prix_jeu']; ?> €</option>
            <?php
            }


            ?>
        </select>
        <input name="filtrer" type="submit" class="btn btn-info btn-block" value="Filtrer">
    </form>
</div>
<div class="col-md-3">
    <form class="form-group" action="index.php" method="get">
        <select class="form-control" name="nbre_joueurs" placeholder="nbre_joueurs">
            <option value="" disabled selected>-Filtrer par nombre de joueurs-</option>
            <?php


            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sth2 = $pdo->prepare("SELECT DISTINCT nbre_joueurs FROM jeu");
            $sth2->execute();


            $resultat2 = $sth2->fetchAll();


            foreach ($resultat2 as $key2 => $value2) {
            ?>
                <option value="<?php echo $value2['nbre_joueurs']; ?>"><?php echo $value2['nbre_joueurs']; ?> joueur(s)</option>
            <?php
            }


            ?>
        </select>
        <input name="filtrer" type="submit" class="btn btn-info btn-block" value="Filtrer">
    </form>
</div>
<div class="col-md-3">
    <form class="form-group" action="index.php" method="get">
        <select class="form-control" name="duree_jeu" placeholder="duree_jeu">
            <option value="" disabled selected>-Filtrer par durée-</option>
            <?php


            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sth3 = $pdo->prepare("SELECT DISTINCT duree_jeu FROM jeu");
            $sth3->execute();


            $resultat3 = $sth3->fetchAll();


            foreach ($resultat3 as $key3 => $value3) {
            ?>
                <option value="<?php echo $value3['duree_jeu']; ?>"><?php echo $value3['duree_jeu']; ?> minutes</option>
            <?php
            }


            ?>
        </select>
        <input name="Filtrer" type="submit" class="btn btn-info btn-block" value="Filtrer">
    </form>
</div>

<div class="col-md-3">
    <form class="form-group" action="index.php" method="get">
        <select class="form-control" id="type_id" name="type_id" placeholder="Type de jeu">
            <option value="" disabled selected>-Filtrer par type-</option>
            <?php

            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sth4 = $pdo->prepare("SELECT * FROM type_jeu");
            $sth4->execute();

            $resultat4 = $sth4->fetchAll();

            foreach ($resultat4 as $key4 => $value4) {
            ?>
                <option value="<?php echo $value4['id_type']; ?>"><?php echo $value4['nom_type']; ?></option>
            <?php
            }


            ?>
        </select>
        <input name="Filtrer" type="submit" class="btn btn-info btn-block" value="Filtrer">
    </form>
</div>