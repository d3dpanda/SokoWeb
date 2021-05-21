<?php 
    session_start();
    $_SESSION = array();
    echo "<h1>Vous êtes à présent déconnecter ! Au revoir !! </h1>";
    echo "<a href='../login/login.php'>Revenir à la page de connexion</a>";
    session_destroy();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
</head>
<body>
</body>
</html>