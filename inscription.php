<?php
    require_once('./assets/scripts/inscription_bdd.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <div class="form-inscription">
        <form method="POST">
            <fieldset>
                <h2>Inscription</h2>
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
                    <input type="text" name="username">
                </label>
                <label>
                    <span>Mot de passe</span>
                    <input type="password" name="pass">
                </label>
                <label>
                    <span>Confirmation du mot de passe</span>
                    <input type="password" name="repass">
                </label>
                <input type="submit" name="submit" value="S'inscrire">
                <span>Déja inscrit ?</span><a href="index.php">Login</a>
            </fieldset>
        </form>
    </div>
</body>
</html>