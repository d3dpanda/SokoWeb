<?php 
// importation des fichiers php
    include 'bdd.php';
    include 'login.php';
// Définitions des variables
    $pseudo = $_POST['pseudo'];
    $pass = $_POST['password'];
// Sélection des éléments nécessaires
    $userInfo = $bdd -> query("SELECT (pseudo,mdp) FROM User WHERE pseudo ='$pseudo';");
// Comparaison formulaire/base de donnée
  
?> 
