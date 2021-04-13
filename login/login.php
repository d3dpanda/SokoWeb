<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SokoWeb</title>
</head>
<body>
<!-- Formulaire de connexion -->
    <div id="content">
        <form method="post" action="bdd.php" >
            <h1>Connexion</h1>
            <hr>
            <input type="text" name="pseudo" id="pseudoEntry" placeholder="Entrez votre pseudo... ">
            <br>
            <input type="password" name="password" id="psswdEntry" placeholder="Entrez votre mot de passe... ">
            <br>
            <a href="register.php">Pas de compte ? Inscrivez-vous</a> 
            <br>
            <input type="submit" name="jouer" id="connectionBtn" onclick="loginVerif()"  value="Se Connecter">
        </form>
    </div>
<?php

// A FINIR
// Comparaison des données reçues à celles de la bd
    $pseudo = $_POST['pseudo'];
    $pass = $_POST['pass'];
    
    include 'bdd.php';


?>

<!-- Code Javascript -->
<script type="text/javascript" src="verifLogin.js"></script>
</body>
</html>
