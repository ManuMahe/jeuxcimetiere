<?php
$pdo = new PDO('mysql:host=localhost;','root','');
$sql = "CREATE DATABASE IF NOT EXISTS `jeux_cimetiere` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
$pdo->exec($sql);




try{
    $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    $sql = "CREATE TABLE IF NOT EXISTS `jeux_cimetiere`.`utilisateur` ( 
       `id_utilisateur` INT NOT NULL AUTO_INCREMENT , 
       `nom_utilisateur` VARCHAR(250) NOT NULL , 
       `prenom_utilisateur` VARCHAR(250) NOT NULL ,
       `mdp_utilisateur` VARCHAR(100) NOT NULL ,
       `courriel_utilisateur` VARCHAR(100) NOT NULL , 
       `image_utilisateur` VARCHAR(250) ,
       PRIMARY KEY (`id_utilisateur`)) ENGINE = InnoDB;";
 
    $pdo->exec($sql);
    echo 'Félicitations, la table a bien été créée !<br/>'; 
}
  catch (PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
 }

 try{
   $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', ''); 
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

   $sql = "CREATE TABLE IF NOT EXISTS `jeux_cimetiere`.`jeu` ( 
      `id_jeu` INT NOT NULL AUTO_INCREMENT , 
      `nom_jeu` VARCHAR(250) NOT NULL , 
      `nbre_joueurs` INT ,
      `duree_jeu` INT ,
      `description_jeu` VARCHAR(500) ,
      `prix_jeu` INT ,
      `image_jeu` VARCHAR(250) ,
      `type_id` INT ,    
      PRIMARY KEY (`id_jeu`)) ENGINE = InnoDB;";


   $pdo->exec($sql);
   echo 'Félicitations, la table a bien été créée !<br/>'; 
}
 catch (PDOException $e){
   print "Erreur !: " . $e->getMessage() . "<br/>";
   die();
}


try{
    $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 
    $sql = "CREATE TABLE IF NOT EXISTS `jeux_cimetiere`.`type_jeu` ( 
       `id_type` INT NOT NULL AUTO_INCREMENT , 
       `nom_type` VARCHAR(250) NOT NULL , 
       PRIMARY KEY (`id_type`)) ENGINE = InnoDB;";
 
 
    $pdo->exec($sql);
    echo 'Félicitations, la table a bien été créée !<br/>'; 
 }
  catch (PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
 }
 ?>

 