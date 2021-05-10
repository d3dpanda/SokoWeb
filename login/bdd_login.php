<?php 

// Importations des différents fichiers nécessaires

    include 'login.php';
    include 'bdd.php';

// Définition des variables 

    $pseudo = $_POST['pseudo'];
    $pass = $_POST['password'];
 

// Ajout de la commande SQL sélectionnant le mot de passe selon l'utilisateur  
    echo "--------------------------------------------------\n";
    try{
        $sql = $bdd -> query("SELECT mdp FROM User WHERE pseudo = '$pseudo'");
        $verification = $bdd -> query("SELECT COUNT(pseudo) FROM User WHERE pseudo = '".$pseudo."'; ");
        $motDePasseVerif = $bdd ->query("SELECT mdp FROM User WHERE pseudo='".$pseudo."'; ");
        
        
        while ($data = $verification->fetch()) {
            echo "1...\n";
            if ($data[0] == 0) {
                echo "Compte inexistant..\n";
                header("Location: login.php");
            }
            else {
                echo "Compte trouvé !\n";
                while ($mdpConfirm = $motDePasseVerif->fetch()) {
                    echo "2...";
                    if ($mdpConfirm[0] == $pass) {
                        echo "Le mot de passe est correct !\n ";
                        header("Location: ../Sokoban/Sokoban.html");
                    }
                    else{
                        echo "Le mot de passe n'est pas correct...\n";
                        header("Location: login.php");
                    }
                } 
            };
        };
    


    }
    
    catch (Exception $e){
        echo "Erreur: ".$e->getMessage();
    };
// Verification des informations entrées par l'utilisateur

?>