<?php 


// Importations des différents fichiers nécessaires

    include 'login.php';
    include 'bdd.php';

// Définition des variables 

    $pseudo = $_POST['pseudo'];
    $pass = $_POST['password'];

// Ajout de la commande SQL sélectionnant le mot de passe selon l'utilisateur

    $sql = $bdd -> query("SELECT mdp FROM User WHERE pseudo = '$pseudo'");

// Verification des informations entrées par l'utilisateur

    while ($userInfo = $sql->fetch()){
        if ($pass == $userInfo['mdp']){
            header("Location: ../Sokoban/Sokoban.html");
        }
        else {
            header("Location: ./login.php");
            
        };
    }    
?>