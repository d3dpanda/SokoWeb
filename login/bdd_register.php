<?php session_start();
    $id_de_session = session_id();
    $_SESSION['id'] = $id_de_session;

// Importation des fichiers nécessaires 


    include 'bdd.php';
    include 'register.php';
// Enregistrement des informations dans la table lors de la première connexcion

  $pseudo = $_POST['pseudo'];
  $email =  $_POST['email'];
  $mdp = $_POST['password'];


 //   $pseudo = "clement";
 //   $email = "cleml97430@gmail.com";
 //   $mdp = "123abc";
   
    $_SESSION["pseudo"] = $pseudo;
    $_SESSION["email"] = $email;
    
// Vérification des doublons dans la base de données

    $sql = "INSERT INTO User (pseudo, email, mdp) VALUES ('".$pseudo."', '".$email."', '".$mdp."') ";

// Commande SQL vérifiant la présence du pseudo dans la base de donnée.
// Si la commande renvoie 1, alors le pseudo existe déjà
// Si la commande renvoie 0, alors le pseudo n'existe pas

    $verification = $bdd->query("SELECT COUNT(pseudo) FROM User WHERE pseudo='".$pseudo."'");
    $count =  $bdd->exec($sql); 
// essai de la sélection de la colonne pseudo, avec le pseudo renseigné par l'utilisateur
    try{
        while($data = $verification->fetch()) {
            echo $data[0]."\n";
            if ($data[0] == 1) { // Si le pseudo existe déjà
                //echo "<script>alert('Ce pseudo n'est pas disponible')</script>\n";
                $_SESSION = array();
                session_destroy();
                header("Location: register.php");
                
            }   
            elseif ($data[0] == 0) { // Si le pseudo n'existe pas 
                echo "Nouveau compte crée\n"; 
                sleep(1);
                header("Location: ../Sokoban/Sokoban.php");
            }
        
        
        };
       
    }
// Si le test ne marche pas, renvoie un message d'erreur et arrête l'exécution du programme
    catch (Exception $e) {
        die('Erreur: '.$e->getMessage());
    }
    
?>