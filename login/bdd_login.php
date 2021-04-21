<?php 
    include 'bdd.php';
    include 'login.php';

    $pseudo = $_POST['pseudo'];
    $pass = $_POST['password'];

    $userInfo = $bdd -> query("SELECT mdp FROM User WHERE pseudo ='$pseudo';");
    $donnee = $userInfo -> fetch();
    if ($pass == $donnee) {
        header("Location: ../Sokoban/Sokoban.html");
    
    }
    else {
        header("Location: ./login.php");
    };

?>