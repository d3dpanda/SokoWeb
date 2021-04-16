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
        <form method="post">
            <h1>Inscription</h1>
            <hr>
            <input type="text" name="pseudo" id="pseudoEntry" placeholder="Entrez votre pseudo... ">
            <br>
            <input type="text" name="email" id="emailEntry" placeholder="Entrez votre adresse mail...">
            <br>
            <input type="password" name="password" id="psswdEntry" placeholder="Entrez votre mot de passe... ">
            <br>
            <input type="password" name="password" id="psswdAgain" placeholder="Confirmez votre mot de passe...">
            <a href="login.php">Déjà un compte ? Connectez-vous !</a>

            <input type="submit" name="registery" id="connectionBtn" onclick="verifRegister()" value="S'inscrire">
        </form>
    </div>

   


<script type="text/javascript" >

function verifRegister() {

// Définition de variables


    let pseudoRegister = document.getElementById("pseudoEntry");
    let emailRegister = document.getElementById("emailEntry");
    let psswdRegister = document.getElementById("psswdEntry");
    let confirmPsswdRegister = document.getElementById("psswdAgain");

// Vérification du remplissage des champs 
   
    if (pseudoRegister.value =="") {
        alert("Vous avez oublié de renseigner un pseudo");
        
    }
    else if (emailRegister.value == "") {
        alert("Vous avez oublié de renseigner une adresse mail valide");
        
    }
    else if (psswdRegister.value == "") {
        alert("Vous avez oublié de renseigner un mot de passe ");
        
    }
    else if (confirmPsswdRegister.value =="") {
        alert("Vous n'avez pas confirmé votre mot de passe");
        
    }
    else if (confirmPsswdRegister.value != psswdRegister.value) {
        alert("Les deux mots de passe ne correspondent pas");
    }

 
    document.location ="http://clementlagier.dynv6.net/SokoWeb-main/login/bdd_register.php";
    console.log(document.location);

 

}

</script>
</body>
</html>
