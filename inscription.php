<?php
    require_once('./assets/scripts/inscription_bdd.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet">
    <title>Inscription</title>
</head>
<body>
    <form method="POST" class="form-inscription">
        <fieldset>
            <h1>Inscription</h1>
            <label>
                <span>Nom</span>
                <input type="text" name="firstname">
            </label>
            <label>
                <span>Prénom</span>
                <input type="text" name="lastname">
            </label>
            <label>
                <span>Nom d'utilisateur</span>
                <input type="text" name="username" required>
            </label>
            <label>
                <span>Mot de passe</span>
                <input type="password" name="pass" required>
            </label>
            <label>
                <span>Confirmation du mot de passe</span>
                <input type="password" name="repass" required>
            </label>
            <input type="submit" name="submit" value="S'inscrire" class="btn-submit">
            <span>Déja inscrit ?<a href="index.php">Login</a></span>
        </fieldset>
    </form>
</body>
</html>