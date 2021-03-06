<!-- 
    |-------------------------------------------------------------| 
    |                                                             | 
    |                       SOKOWEB                               | 
    |                                                             | 
    | Made By Clément & Steven | https://github.com/d3dpanda      | 
    |-------------------------------------------------------------| 
-->




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

            <div id="pseudoNoValide"></div>
            <input type="text" name="pseudo" id="pseudoEntry" placeholder="Entrez votre pseudo... ">
            <br>

            <div id="emailNoValide"></div>
            <input type="text" name="email" id="emailEntry" placeholder="Entrez votre adresse mail...">
            <br>
            
            <div id="mdpNoSame"></div>
            <div id="mdpNull"></div>
            <input type="password" name="password" id="psswdEntry" placeholder="Entrez votre mot de passe... ">
            <br>
            
            <div id="mdpBisNull" ></div>
            <input type="password" name="passwordbis" id="psswdAgain" placeholder="Confirmez votre mot de passe...">
            
            <a href="login.php">Déjà un compte ? Connectez-vous !</a>

            <input type="submit" name="registery" id="connectionBtn" value="S'inscrire">
        </form>
    </div>

   


<script type="text/javascript" src="verifLogin.js"></script>
</body>
</html>
