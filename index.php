<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Accueil - Connexion</title>
</head>
<body>
    <div class="form-connexion">
        <form action="index.php" method="POST">
            <fieldset>
                <h2>Connexion</h2>
                <label>
                    <span>Nom d'utilisateur</span>
                    <input type="text" name="username">
                </label>
                <label>
                    <span>Mot de passe</span>
                    <input type="text" name="pass">
                </label>
                <input type="submit" name="submit" value="Connexion">
                <span>Pas encore inscript ?</span><a href="inscription.php">Inscription</a>
            </fieldset>
        </form>
    </div>
</body>
</html>