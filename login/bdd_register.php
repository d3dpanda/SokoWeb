<?php

// Importation des fichiers nécessaires 


    include 'bdd.php';
    include 'register.php';
    include 'BDDVerif.php';
// Enregistrement des informations dans la table lors de la première connexcion

    $pseudo = $_POST['pseudo'];
    $email =  $_POST['email'];
    $mdp = $_POST['password'];

// Commande mysql pour ajouter un utilisateur/ vérifier si il est déjà inscrit
    $userVerif = "SELECT pseudo FROM User";
    $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('$pseudo', '$email', '$mdp') ";
    
// Mise en array de la variable $userVerif
    $count =  $bdd->exec($sql); 
    sleep(2);
    header("Location: ../Sokoban/Sokoban.html");

// Injection des nouvelles données dans la bdd
    
    

// Attente de quelques seconde
  
?>

