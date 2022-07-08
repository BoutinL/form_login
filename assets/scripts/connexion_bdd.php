<?php
    if (!empty($_POST['submit'])) {
        require_once("assets/scripts/link_bdd.php");

        $login = htmlspecialchars($_POST["username"]); 
        $pass = htmlspecialchars($_POST["pass"]);

        $res = $pdo -> prepare("SELECT * FROM users WHERE user_login = ?");
        $res -> setFetchMode(PDO::FETCH_ASSOC);
        $res -> execute(array($login));
        $tab = $res -> fetchAll();

        if(empty($tab)) {
            echo "L'utilisateur n'existe pas.";
        } else {
            if (password_verify($pass,  $tab[0]["user_password"])) {
                echo "L'utilisateur existe et le mot de passe est OK.";
                header('location:./espacePrive.php');
            } else {
                echo "L'utilisateur existe mais mot de passe est incorrect !";
            }
            session_start();
            $_SESSION["username"] = htmlspecialchars($_POST["username"]);
        }
    }
?>