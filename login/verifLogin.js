
// fonction de vérification pour le formulaire de connexion

function loginVerif() {
    console.log();
};

// fonction de vérification pour le formulaire d'inscription

function verifRegister() {

    

// Définition de variables


// Vérification du remplissage des champs 
   
    if (pseudoRegister.value === "") {
        alert("Vous avez oublié de renseigner un pseudo");
        return false;
    }
    else if (emailRegister.value === "") {
        alert("Vous avez oublié de renseigner une adresse mail valide");
        return false;
    }
    else if (psswdRegister.value === "") {
        alert("Vous avez oublié de renseigner un mot de passe ");
        return false;
    }
    else if (confirmPsswdRegister.value ==="") {
        alert("Vous n'avez pas confirmé votre mot de passe");
        return false;
    }
    else if (confirmPsswdRegister.value !== psswdRegister.value) {
        alert("Les deux mots de passe ne correspondent pas");
        return false;
    }

    else{
        document.formEntry.submit();
    };
 

}

// informations relatives à l'inscription

var pseudoRegister = document.getElementById("pseudoEntry");
var emailRegister = document.getElementById("emailEntry");
var psswdRegister = document.getElementById("psswdEntry");
var confirmPsswdRegister = document.getElementById("psswdAgain");
// var btn = document.getElementById("connectionBtn");

// informations relatives à la connexion

var pseudoVerif = document.getElementById("pseudoEntry");
var passVerif = document.getElementById("psswdEntry");