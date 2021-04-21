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
        <form method="post" action="bdd_login.php">
            <h1>Connexion</h1>
            <hr>
            <input type="text" name="pseudo" id="pseudoEntry" placeholder="Entrez votre pseudo... ">
            <br>
            <input type="password" name="password" id="psswdEntry" placeholder="Entrez votre mot de passe... ">
            <br>
            <a href="register.php">Pas de compte ? Inscrivez-vous</a> 
            <br>
            <input type="submit" name="jouer" id="connectionBtn" value="Se Connecter">
        </form>
    </div>

<!-- Code Javascript -->
<script type="text/javascript" src="verifLogin.js"></script>
</body>
</html>
