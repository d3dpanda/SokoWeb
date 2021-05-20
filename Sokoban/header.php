<?php
     session_start();

     $id_session = session_id();
     $_SESSION["pseudo"] = "pseudo1";
     $_SESSION["score"] = 0;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

    if ($id_session) {
        echo "ID de session récupéré: <br> ".$id_session;
    }
    else {
    	echo "Aucun ID de session";
    };
    

?>