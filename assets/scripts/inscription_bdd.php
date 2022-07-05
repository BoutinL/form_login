<?php
    if (!empty($_POST['submit'])) {
        require_once("assets/scripts/link_bdd.php");

        $nom = htmlspecialchars($_POST["firstname"]);
        $prenom = htmlspecialchars($_POST["lastname"]);
        $login = htmlspecialchars($_POST["username"]);
        $pass = htmlspecialchars($_POST["pass"]);
        $repass = htmlspecialchars($_POST["repass"]);

        if ($pass != $repass) {
            echo "Mots de passe non identiques !";
        }

        $req = $pdo->prepare("SELECT id FROM users WHERE user_login=?");
        $req -> setFetchMode(PDO::FETCH_ASSOC);
        $req -> execute(array($login));

        $tab = $req->fetchAll();

        if (!empty($tab)) {
            echo "Login existe déjà !";
        } else {
            $encrypted_password = password_hash($pass, PASSWORD_DEFAULT);
            $ins = $pdo -> prepare("INSERT INTO users(user_lastname,user_firstname,user_login,user_password,user_date) VALUES(?,?,?,?,now())");
            $ins -> execute(array($nom,$prenom,$login,$encrypted_password));
            header('location:./index.php');
        }
    }
?>