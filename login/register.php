<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SokoWeb</title>
</head>
<body>
    <div id="content">
        <form  method="post">
            <h1>Inscription</h1>
            <hr>
            <input type="text" name="pseudo" id="pseudoEntry" placeholder="Entrez votre pseudo... ">
            <br>
            <input type="text" name="email" id="emailEntry" placeholder="Entrez votre adresse mail...">
            <br>
            <input type="password" name="password" id="psswdEntry" placeholder="Entrez votre mot de passe... ">
            <br>
            <input type="password" name="passAgain" id="passAgain" placeholder="Confirmez votre mot de passe...">
          
            <a class="loginlink" href="login.php">Déjà un compte ? Connectez vous</a>
            <hr>
            <input type="submit" name="registery" id="connectionBtn" onclick="verifRegister()" value="S'inscrire">
            </form>
    </div>
<script type="text/javascript" src="verifLogin.js"></script>
</body>
</html>