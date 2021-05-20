<?php
     session_start();

// Récupération de l'id de session de bdd_register.php

     echo $_SESSION["pseudo"]."<br>".$_SESSION["email"]."<br>".$_SESSION["idSession"];
      


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
// Si l'id de connexion est récupéré, l'affiché
    try{
        if ($id_session) {
            echo "ID de session récupéré: <br> ".$id_session;
        }
        else { // Sinon signaler le problème
            header("Location: ../login/login.php");
        };
    }
    catch (Exception $e) {
         die("Error: ".$e->getMessage());
    };
?>
</body>
</html>