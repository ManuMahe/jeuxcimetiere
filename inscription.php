<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux du cimetière - Inscription</title>

    <!--Feuille de style-->
    <link rel="stylesheet" href="ressources/css/styles.css" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body class="bodyInscription">

    <form class="formulaire formInscription" action="upload.php" method="post" enctype="multipart/form-data">

        <fieldset>
            <h2 class="titreInscription">Inscription</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="nom_utilisateur" name="nom_utilisateur" required placeholder="Votre Nom">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="prenom_utilisateur" name="prenom_utilisateur" required placeholder="Votre Prenom">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="mdp_utilisateur" name="mdp_utilisateur" required placeholder="Votre Mot de Passe">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="courriel_utilisateur" name="courriel_utilisateur" required placeholder="Votre Courriel">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required placeholder="Votre photo">
            </div>
            
            <div class="form-group">
                <input name="ajouter" type="submit" class="btn btn-info btn-block" value="S'inscrire">
            </div>
        </fieldset>
    </form>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>