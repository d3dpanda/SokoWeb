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
    try{
        
        $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('".$pseudo."', '".$email."', '".$mdp."') ";
        $count =  $bdd->exec($sql); 
        sleep(2);
        header("Location: ../Sokoban/Sokoban.html");    
    }
    catch (Exception $e) {
        echo "Erreur: ", $e -> getMessage(), "\n";

    };
    echo "test";
    
    
?>

