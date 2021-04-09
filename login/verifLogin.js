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

var pseudoVerif = document.getElementById("pseudoEntry");
var passVerif = document.getElementById("psswdEntry");    


