<div class="container">
                <?php
                
                    if (!empty($_GET['prix_jeu'])) {
                        try {
                            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
                            $sth1 = $pdo->prepare("SELECT * FROM jeu INNER JOIN type_jeu ON jeu.type_id=type_jeu.id_type WHERE prix_jeu = $_GET[prix_jeu]");
                            $sth1->execute();
        
        
                            $resultat1 = $sth1->fetchAll(); 

                        foreach ($resultat1 as $key1 => $value1) {
                            ?>
            
                                    <div class="row listJeu">
                                        <div class="col-md-4">
                                            <div class="jeuIndex" style="background-image: url(<?php echo $value1['image_jeu']; ?>);">
                                            </div>
            
                                        </div>
                                        <div class="col-md-8 caracIndex">
                                        <a><h3><?php echo $value1['nom_jeu']; ?></h3></a>
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-action list-group-item-info">Pour <?php echo $value1['nbre_joueurs']; ?> joueur(s)</li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">Durée d'une partie : <?php echo $value1['duree_jeu']; ?> minutes</li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">Jeu de <?php echo $value1['nom_type']; ?></li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">
                                                    <h4><?php echo $value1['prix_jeu']; ?> €</h4>
                                                </li>
                                            </ul>
                                        </div>
            
                                    </div>
            
            
            
                            <?php
            
                                }
                    }
                    catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    }
                    elseif (!empty($_GET['nbre_joueurs'])) {
                        try {
                            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
                            $sth2 = $pdo->prepare("SELECT * FROM jeu INNER JOIN type_jeu ON jeu.type_id=type_jeu.id_type WHERE nbre_joueurs = $_GET[nbre_joueurs]");
                            $sth2->execute();
        
        
                            $resultat2 = $sth2->fetchAll(); 

                        foreach ($resultat2 as $key2 => $value2) {
                            ?>
            
                                    <div class="row listJeu">
                                        <div class="col-md-4">
                                            <div class="jeuIndex" style="background-image: url(<?php echo $value2['image_jeu']; ?>);">
                                            </div>
            
                                        </div>
                                        <div class="col-md-8 caracIndex">
                                        <a><h3><?php echo $value2['nom_jeu']; ?></h3></a>
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-action list-group-item-info">Pour <?php echo $value2['nbre_joueurs']; ?> joueur(s)</li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">Durée d'une partie : <?php echo $value2['duree_jeu']; ?> minutes</li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">Jeu de <?php echo $value2['nom_type']; ?></li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">
                                                    <h4><?php echo $value2['prix_jeu']; ?> €</h4>
                                                </li>
                                            </ul>
                                        </div>
            
                                    </div>
            
            
            
                            <?php
            
                                }
                    }
                    catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    }
                    elseif (!empty($_GET['duree_jeu'])) {
                        try {
                            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
                            $sth3 = $pdo->prepare("SELECT * FROM jeu INNER JOIN type_jeu ON jeu.type_id=type_jeu.id_type WHERE duree_jeu = $_GET[duree_jeu]");
                            $sth3->execute();
        
        
                            $resultat3 = $sth3->fetchAll(); 

                        foreach ($resultat3 as $key3 => $value3) {
                            ?>
            
                                    <div class="row listJeu">
                                        <div class="col-md-4">
                                            <div class="jeuIndex" style="background-image: url(<?php echo $value3['image_jeu']; ?>);">
                                            </div>
            
                                        </div>
                                        <div class="col-md-8 caracIndex">
                                        <a><h3><?php echo $value3['nom_jeu']; ?></h3></a>
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-action list-group-item-info">Pour <?php echo $value3['nbre_joueurs']; ?> joueur(s)</li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">Durée d'une partie : <?php echo $value3['duree_jeu']; ?> minutes</li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">Jeu de <?php echo $value3['nom_type']; ?></li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">
                                                    <h4><?php echo $value3['prix_jeu']; ?> €</h4>
                                                </li>
                                            </ul>
                                        </div>
            
                                    </div>
            
            
            
                            <?php
            
                                }
                    }
                    catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    }
                    elseif (!empty($_GET['nom_type'])) {
                        try {
                            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
                            $sth4 = $pdo->prepare("SELECT * FROM type_jeu INNER JOIN jeu ON jeu.type_id=type_jeu.id_type WHERE nom_type = $_GET[nom_type]");
                            $sth4->execute();
        
        
                            $resultat4 = $sth4->fetchAll(); 

                        foreach ($resultat4 as $key4 => $value4) {
                            ?>
            
                                    <div class="row listJeu">
                                        <div class="col-md-4">
                                            <div class="jeuIndex" style="background-image: url(<?php echo $value4['image_jeu']; ?>);">
                                            </div>
            
                                        </div>
                                        <div class="col-md-8 caracIndex">
                                        <a><h3><?php echo $value4['nom_jeu']; ?></h3></a>
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-action list-group-item-info">Pour <?php echo $value4['nbre_joueurs']; ?> joueur(s)</li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">Durée d'une partie : <?php echo $value4['duree_jeu']; ?> minutes</li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">Jeu de <?php echo $value4['nom_type']; ?></li>
                                                <li class="list-group-item list-group-item-action list-group-item-info">
                                                    <h4><?php echo $value4['prix_jeu']; ?> €</h4>
                                                </li>
                                            </ul>
                                        </div>
            
                                    </div>
            
            
            
                            <?php
            
                                }
                    }
                    catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
                    } 

                    else {
                        try {
                            $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
                            $sth = $pdo->prepare("SELECT * FROM jeu INNER JOIN type_jeu ON jeu.type_id=type_jeu.id_type");
                            $sth->execute();
        
        
                            $resultat = $sth->fetchAll(); 

                        foreach ($resultat as $key => $value) {
                            ?>
            
                                    <div class="row listJeu">
                                        <div class="col-md-4">
                                            <div class="jeuIndex" style="background-image: url(<?php echo $value['image_jeu']; ?>);">
                                            </div>
            
                                        </div>
                                        <div class="col-md-8 caracIndex">
                                        <a><h3><?php echo $value['nom_jeu']; ?></h3></a>
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
            
            
            
                            <?php
            
                                }
                    }
                    catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }


                } 
                ?>
            </div>