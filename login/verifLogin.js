
// fonction de vérification pour le formulaire de connexion "si vide, alors..."

function loginVerif() {
    if (pseudoVerif.value === "") {
        alert("Vous avez oublié de renseigner un pseudo");
        return false;
    }
    else if (passVerif.value === "") {
        alert("Veuillez renseigner votre mot de passe");
        return false;
    }
    else {
        document.loginForm.submit();
    }
};




// Vérification mail
function emailInvalid() {
    emailInvalid.style.display = "block";
}
// fonction de vérification pour le formulaire d'inscription


function verifRegister() {
// Vérification du remplissage des champs 
    if (pseudoRegister.value === "") {
//       alert("Vous avez oublié de renseigner un pseudo");
        pseudoInvalid.style.display = "block";
        return false;
    }
    else if (emailRegister.value === "") {
//        alert("Vous avez oublié de renseigner une adresse mail valide");
        emailNoValide.style.display ="block";
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
    //    alert("Les deux mots de passe ne correspondent pas");
        psswdDiff.style.display = "block";
        return false;
    }

    else{
        document.formEntry.submit();
    };
 

};

// informations relatives à l'inscription

var pseudoRegister = document.getElementById("pseudoEntry");
var emailRegister = document.getElementById("emailEntry");
var psswdRegister = document.getElementById("psswdEntry");
var confirmPsswdRegister = document.getElementById("psswdAgain");


// Variables de message d'erreur
var pseudoInvalid = document.getElementById("pseudoNoValide");
var emailNoValide = document.getElementById("emailNoValide");
var psswdDiff = document.getElementById("mdpNoSame");

document.getElementById("pseudoNoValide").style.display = "none";
document.getElementById("emailNoValide").style.display = "none";
document.getElementById("mdpNoSame").style.display = "none";

// informations relatives à la connexion

var pseudoVerif = document.getElementById("pseudoEntry");
var passVerif = document.getElementById("psswdEntry");