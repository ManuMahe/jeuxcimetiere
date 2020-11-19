<header>
    <div class="row">
        <div class="col-sm-5 barrenav"></div>
        <div class="col-sm-2 barrenav">
            <a class="btn btn-info btn-block" href="inscription.php">S'incrire</a>
        </div>
        <div class="col-sm-5 barrenav">
            <form class="formulaire formHeader" action="traitement.php" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="courriel_utilisateur" required placeholder="Votre Courriel">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" name="mdp_utilisateur" required placeholder="Votre Mot de Passe">
                    </div>
                    <div class="col">
                        <input name="connexion" type="submit"  class="btn btn-info" value="Se connecter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row fondHeader">
        <h1>Les Jeux du Cimetiere</h1>
    </div>
</header>