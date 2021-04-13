// Vérification de la page de login

function verifLogin() {
    if (pseudo.value === "" || password.value === "") {
        alert("Veuillez remplir chaque champ");
    }
    else {
        return 1;
    };   
};

// Vérification de la page d'inscription

function verifRegister() {
    if (pseudo.value === "" || password.value === "" || email.value === "" ) {
        alert("Veuillez remplir chaque champ");
    }
    else {
        if (passbis.value !== password.value) {
            alert("Les deux mots de passes ne sont pas identiques...");
        }
        else {
            window.location.href = "http://clementlagier.dynv6.net/SokoWeb-main/login.php";
        };
    };
};

// définitions des variables
var pseudo = document.getElementById("pseudoEntry");
var password = document.getElementById("psswdEntry");
var passbis = document.getElementById("passAgain");
var email = document.getElementById("emailEntry");
var htmlRedirect = "bdd_register.php";