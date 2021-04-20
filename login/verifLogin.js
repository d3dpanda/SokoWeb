
// fonction de vérification pour le formulaire de connexion

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

// fonction de vérification pour le formulaire d'inscription

function verifRegister() {

// Définition de variables


// Vérification du remplissage des champs 
   
    if (pseudoRegister.value === "") {
        alert("Vous avez oublié de renseigner un pseudo");
        
    }
    else if (emailRegister.value === "") {
        alert("Vous avez oublié de renseigner une adresse mail valide");
        
    }
    else if (psswdRegister.value === "") {
        alert("Vous avez oublié de renseigner un mot de passe ");
        
    }
    else if (confirmPsswdRegister.value ==="") {
        alert("Vous n'avez pas confirmé votre mot de passe");
        
    }
    else if (confirmPsswdRegister.value !== psswdRegister.value) {
        alert("Les deux mots de passe ne correspondent pas");
    }

    else{
        window.location = "bdd_register.php";
        
    };
 

}

// definition de variable pour les deux fonctions


var pseudoRegister = document.getElementById("pseudoEntry");
var emailRegister = document.getElementById("emailEntry");
var psswdRegister = document.getElementById("psswdEntry");
var confirmPsswdRegister = document.getElementById("psswdAgain");
var btn = document.getElementById("connectionBtn");
btn.addEventListener("click", false, verifRegister);