<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SokoWeb</title>
</head>
<body>
    <div id="content">
        <form action="bdd_register.php" method="post" name="formEntry" onsubmit="return verifRegister()">
            <h1>Inscription</h1>
            <hr>
            <div class="pseudoNoValide">Pseudo non renseigné</div>
            <input type="text" name="pseudo" id="pseudoEntry" placeholder="Entrez votre pseudo... ">
            <br>
            <div class="emailNoValide">Adresse mail non renseigné</div>
            <input type="text" name="email" id="emailEntry" placeholder="Entrez votre adresse mail...">
            <br>
            <div class="mdpNoSame">Les mots de passes ne correspondent pas</div>
            <input type="password" name="password" id="psswdEntry" placeholder="Entrez votre mot de passe... ">
            <br>
            <input type="password" name="passwordbis" id="psswdAgain" placeholder="Confirmez votre mot de passe...">
            <a href="login.php">Déjà un compte ? Connectez-vous !</a>

            <input type="submit" name="registery" id="connectionBtn" value="S'inscrire">
        </form>
    </div>

   


<script type="text/javascript" src="verifLogin.js"></script>
</body>
</html>
