<?php
	    if (!empty($_POST)) {
            if (isset($_POST['nom_jeu'])) {
              try{
                  $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 
                 //On prépare la requête et on l'exécute
                 if (strlen($_FILES["fileToUpload"]["name"])>0) {
                    $sth = $pdo->prepare("
                    UPDATE jeu
                    SET nom_jeu=$nom_jeu, nbre_joueurs=$nbre_joueurs, duree_jeu=$duree_jeu, description_jeu=$descrition_jeu, prix_jeu=$prix_jeu, image_jeu=$image_jeu
                    WHERE id_jeu=$id_jeu
                ");
                   }else{
                    $sth = $pdo->prepare("
                    UPDATE jeu
                    SET nom_jeu=$nom_jeu, nbre_joueurs=$nbre_joueurs, duree_jeu=$duree_jeu, description_jeu=$descrition_jeu, prix_jeu=$prix_jeu,
                    WHERE id_jeu=$id_jeu
                ");
                   }
                 
                 //On affiche le nombre d'entrées mise à jour
                  $count = $sth->rowCount();
                  print('Mise à jour de ' .$count. ' entrée(s)');
              }
                   
              catch(PDOException $e){
                  echo "Erreur : " . $e->getMessage();
              }
            }
        }

header("location: index.php");
?>


