<?php

// Importation des fichiers nécessaires 


    include 'bdd.php';
    include 'register.php';
// Enregistrement des informations dans la table lors de la première connexcion

    $pseudo = $_POST['pseudo'];
    $email =  $_POST['email'];
    $mdp = $_POST['password'];

// Vérification de l'adresse mail
    if ( preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $email ) ) {
// Si l'adresse mail est valide, insérer les éléments dans la table
        $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('$pseudo', '$email', '$mdp') ";
        $count =  $bdd->exec($sql); 
        sleep(2);
        header("Location: ../Sokoban/Sokoban.html");    
    }
// Sinon rafraîchir la page
    else{
        header
        echo "<script> emailInvalid();</script>";
  
?>

