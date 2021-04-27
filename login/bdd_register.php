<?php

// Importation des fichiers nécessaires 


    include 'bdd.php';
    include 'register.php';
 // Enregistrement des informations dans la table lors de la première connexcion

    $pseudo = $_POST['pseudo'];
    $email =  $_POST['email'];
    $mdp = $_POST['password'];

    $result = query("SELECT EXISTS (SELECT * FROM User WHERE pseudo='$pseudo') AS test");
    while ($line = $result -> fetch()) {
        if ($line['test'] == 1) {
            header("Location: login.php");
        }
        else {
            $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('".$pseudo."', '".$email."', '".$mdp."') ";
            $count =  $bdd->exec($sql); 
            sleep(2);
            header("Location: ../Sokoban/Sokoban.html");    
            
        };
    };

    
?>

