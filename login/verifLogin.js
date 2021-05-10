// fonction de vérification pour le formulaire de connexion "si vide, alors..."

function loginVerif() {
    if (pseudoVerif.value === "") {
//        alert("Vous avez oublié de renseigner un pseudo");
        pseudoLoginError.innerHTML = "<p class='pseudoLoginErreur'>Aucun compte n'a été trouvé</p>"
        return false;
    }
    else if (passVerif.value === "") {
// alert("Veuillez renseigner votre mot de passe");
        mdpLoginError.innerHTML = "<p class='mdpLoginErreur'>Le mot de passe est incorrect</p>";
        return false;
    }
    else {
        document.loginForm.submit();
    }
};




// fonction de vérification pour le formulaire d'inscription


function verifRegister() {
// Vérification du remplissage des champs 
    if (pseudoRegister.value === "") {
//        alert("Vous avez oublié de renseigner un pseudo");
        pseudoError.innerHTML = "<p class='pseudoErreur'>Pseudo non renseigné</p>";
        return false;
    }
    else if (emailRegister.value === "" ){
//        alert("Vous avez oublié de renseigner une adresse mail valide");
        emailError.innerHTML = "<p class='emailErreur'>Adresse mail non renseignée ou non valide</p>";
        return false;
    }
    else if (psswdRegister.value === "") {
//        alert("Vous avez oublié de renseigner un mot de passe ");
        mdpError.innerHTML = "<p class='mdpErreur'>Entrez un mot de passe</p>";
        return false;
    }
    else if (confirmPsswdRegister.value ==="") {
//        alert("Vous n'avez pas confirmé votre mot de passe");
        mdpBisError.innerHTML = "<p class='mdpBisErreur'>Veuillez confirmez votre mot de passe</p>";
        return false;
    }
    else if (confirmPsswdRegister.value !== psswdRegister.value) {
//        alert("Les deux mots de passe ne correspondent pas");
        mdpConfirmError.innerHTML = "<p class='mdpConfirmErreur'>Les mots de passes ne correspondent pas</p>";
        return false;
    }
    else{
        pseudoError.innerHTML = " ";
        emailError.innerHTML = " ";
        mdpError.innerHTML = " ";
        mdpBisError.innerHTML = " ";
        mdpConfirmError.innerHTML = " "; 

        document.formEntry.submit();
    };
 
   
};

// informations relatives à l'inscription

var pseudoRegister = document.getElementById("pseudoEntry");
var emailRegister = document.getElementById("emailEntry");
var psswdRegister = document.getElementById("psswdEntry");
var confirmPsswdRegister = document.getElementById("psswdAgain");
// Variables email valide 

// var emailValide = "/^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/";

// Variables de message d'erreur
// informations relatives à la connexion

var pseudoVerif = document.getElementById("pseudoEntry");
var passVerif = document.getElementById("psswdEntry");
// Message d'erreur formulaire d'inscription
var pseudoError = document.getElementById("pseudoNoValide");
var emailError = document.getElementById("emailNoValide");
var mdpError = document.getElementById("mdpNull");
var mdpBisError = document.getElementById("mdpBisNull");
var mdpConfirmError = document.getElementById("mdpNoSame");
// Message d'erreur formulaire connexion
var pseudoLoginError = document.getElementById("pseudoLoginError");
var mdpLoginError = document.getElementById("mdpLoginError");