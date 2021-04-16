
<?php

    include 'bdd.php';
    include 'register.php';
    // Enregistrement des informations dans la table lors de la première connexcion
    $pseudo = $_POST['pseudo'];
    $email =  $_POST['email'];
    $mdp = $_POST['password'];
// Commande mysql
    $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('$pseudo', '$email', '$mdp') ";
// Condition "Si les champs sont vides, recharger la page, sinon ajouter dans la bdd"

    $count =  $bdd->exec($sql);    


?>
