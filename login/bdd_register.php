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
    $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('clement', 'clement@gmail.com', 'clm') ";
//    $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('".$pseudo."', '".$email."', '".$mdp."') ";
   
    $verification = $bdd->query("SELECT COUNT(pseudo) FROM User WHERE pseudo='".$pseudo."'");
   
    $count =  $bdd->exec($sql); 
    
    try{
        while($data = $verification->fetch()) {
            echo $data['pseudo'];
            if ($data['pseudo'] == 1) {
                echo "Compte existant\n";
        
            }
            elseif ($data['pseudo'] == 0) {
                echo "Nouveau compte crée\n";
                sleep(1);
                header("Location: ../Sokoban/Sokoban.html");
            }
        };
    }
    catch (Exception $e) {
        die('Erreur: '.$e->getMessage());
    }
    
?>

