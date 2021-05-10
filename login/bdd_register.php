<?php

// Importation des fichiers nécessaires 


    include 'bdd.php';
    include 'register.php';

 // Enregistrement des informations dans la table lors de la première connexcion

   $pseudo = $_POST['pseudo'];
   $email =  $_POST['email'];
   $mdp = $_POST['password'];
    
// Vérification des doublons dans la base de données

    $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('clement', 'clement@gmail.com', 'clm') ";
//    $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('".$pseudo."', '".$email."', '".$mdp."') ";

//  Commande SQL vérifiant la présence du pseudo dans la base de donnée.
// Si la commande renvoie 1, alors le pseudo existe déjà
// Si la commande renvoie 0, alors le pseudo n'existe pas
    $verification = $bdd->query("SELECT COUNT(pseudo) FROM User WHERE pseudo='clement'");
   
    $count =  $bdd->exec($sql); 
// essai de la sélection de la colonne pseudo, avec le pseudo renseigné par l'utilisateur
    try{
        while($data = $verification->fetch()) {
            echo $data['pseudo'];
            if ($data['pseudo'] == 1) { // Si le pseudo existe déjà
                echo "Compte existant\n";
        
            }
            elseif ($data['pseudo'] == 0) { // Si le pseudo n'existe pas 
                echo "Nouveau compte crée\n"; 
                sleep(1);
                header("Location: ../Sokoban/Sokoban.html");
            }
        };
    }
// Si le test ne marche pas, renvoie un message d'erreur et arrête l'exécution du programme
    catch (Exception $e) {
        die('Erreur: '.$e->getMessage());
    }
    
?>

