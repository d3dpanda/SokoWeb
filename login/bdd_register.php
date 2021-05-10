<?php

// Importation des fichiers nécessaires 


    include 'bdd.php';
    include 'register.php';
 // Enregistrement des informations dans la table lors de la première connexcion

    $pseudo = $_POST['pseudo'];
    $email =  $_POST['email'];
    $mdp = $_POST['password'];
    
// Vérification des doublons dans la base de données
// A COMPLÉTER !!!!!!
    $results = $bdd->query("SELECT EXISTS (SELECT mdp FROM User WHERE pseudo='".$pseudo.") AS test;");
    while ($content = $results->fetch()) {
        $row = $content['pseudo'];
        $sql = "INSERT INTO User(pseudo) VALUES ('".$results."');";
//        if ($row == TRUE) {
//            header("Location: ./register.php");
//        }
//        else {
//            $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('".$pseudo."', '".$email."', '".$mdp."') ";
//            $count =  $bdd->exec($sql); 
//            sleep(2);
//            header("Location: ../Sokoban/Sokoban.html");    
//        };
    }

    
    
?>

