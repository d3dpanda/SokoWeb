<?php
     session_start();

// Récupération de l'id de session

     $id_session = session_id();
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
// Si l'id de connexion est récupéré, l'affiché
    if ($id_session) {
        echo "ID de session récupéré: <br> ".$id_session;
    }
    else { // Sinon signaler le problème
    	header("Location: ../login/login.php");
    };
    

?>
</body>
</html>