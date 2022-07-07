<?php
    require("./assets/scripts/connexion_bdd.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet">
    <title>Accueil - Connexion</title>
</head>
<body>
    <form method="POST" class="form-connexion">
        <fieldset>
            <h1>Connexion</h1>
            <label>
                <span>Nom d'utilisateur</span>
                <input type="text" name="username">
            </label>
            <label>
                <span>Mot de passe</span>
                <input type="password" name="pass">
            </label>
            <input type="submit" name="submit" value="Connexion" class="btn-submit">
            <span>Pas encore inscrit ?<a href="inscription.php">Inscription</a></span>
        </fieldset>
    </form>
</body>
</html>