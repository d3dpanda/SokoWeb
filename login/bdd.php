<?php
    $bdd = new PDO('mysql:host=localhost;dbname=utilisateur', 'd3dpanda', 'Programmingislife_18072003');
    $test = "CREATE DATABASE `Test`";
    $sql = "CREATE TABLE User (`id` INT PRIMARY KEY AUTO_INCREMENT, `pseudo` VARCHAR(60), `email` VARCHAR(60), `mdp` VARCHAR(60));  INSERT INTO User (`pseudo`, `email`, `mdp`) VALUES ('test1', 'test1@gmail.com', '1234')";
    $bdd->exec($sql);
?>