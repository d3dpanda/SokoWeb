function loginVerif() {
      if (pseudoVerif.value == "" | passVerif.value == "" ) {
        alert("Veuillez remplir chaque champ");
        return false;
    }
    else{
        alert("Connecté");
        return true;
    }; 
  
};

function verifRegister() {
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

    else {
        var confirmChoice = 1;
        if (confirmChoice == 1) {
            document.location.href ="./bdd_register.php";
        }
    };

}

var pseudoVerif = document.getElementById("pseudoEntry");
var passVerif = document.getElementById("psswdEntry");    


