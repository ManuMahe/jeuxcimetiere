<?php
    if (!empty($_POST)) {
        if (isset($_POST['courriel_utilisateur']) && isset($_POST['mdp_utilisateur'])) {
            //  Récupération de l'utilisateur et de son pass hashé
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=jeux_cimetiere;port=3306', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $req = $pdo->prepare('SELECT * FROM utilisateur WHERE courriel_utilisateur = :courriel_utilisateur');
                $req->execute(array(
                    'courriel_utilisateur' => $_POST['courriel_utilisateur']
                ));

                $resultat = $req->fetchall();


                foreach ($resultat as $key => $value) {
                    // Comparaison du pass envoyé via le formulaire avec la base
                    $isPasswordCorrect = password_verify($_POST['mdp_utilisateur'], $value['mdp_utilisateur']);

                    if (!$value) {
                        echo 'Mauvais courriel ou mot de passe !';
                    } else {
                        if ($isPasswordCorrect) {
                            session_start();
                            $_SESSION['id_utilisateur'] = $value['id_utilisateur'];
                            $_SESSION['courriel_utilisateur'] = $courriel_utilisateur;
                            header("location: administration.php");
                        } else {
                            echo 'Mauvais courriel ou mot de passe ! 2';
                        }
                    }
                }
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }
    }
    ?>