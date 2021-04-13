
<?php
// Connexion à la bdd
    include 'bdd.php';
// Include le formulaire d'inscription





// Enregistrement des informations dans la table lors de la première connexcion
    $pseudo = $_POST['pseudo'];
    $email =  $_POST['email'];
    $mdp = $_POST['password'];
// Commande mysql
    $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('$pseudo', '$email', '$mdp') ";
    $count =  $bdd->exec($sql);
    

?>