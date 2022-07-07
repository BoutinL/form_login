<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet">
    <title>Espace privé</title>
</head>
<body>
    <div class="espace-privé">
        <h1>Espace privé</h1>
        <span>Bienvenu(e)</span>
        <?php
            session_start();
            require('./assets/scripts/connexion_bdd.php');
            echo $_SESSION['username'];
        ?>
        <a href="index.php"><span>Deconnexion</span></a>
    </div>
</body>
</html>