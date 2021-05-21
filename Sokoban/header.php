<?php
    session_start();
    echo $_SESSION['id'];
    
// Récupération de l'id de session de bdd_register.php


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
        if ($_SESSION['id']) {
            $_SESSION["session"] = TRUE;
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