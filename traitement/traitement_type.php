<?php
    if (!empty($_POST)) {
        if (isset($_POST['nom_type'])) {
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $nom_type = $_POST['nom_type'];

    
    
                $sth = $pdo->prepare("
                           INSERT INTO type_jeu(nom_type)
                           VALUES (:nom_type)
                       ");
                $sth->execute(array(
                    ':nom_type' => $nom_type,
                    
    
                ));

            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }


    }
}

header("location: ../administration.php");
?>