<?php 
    session_start();

    $pseudo = "clement";
    $email = "cleml97430@gmail.com";
    $score = 0;

    $_SESSION["a1"] = 1;
    $_SESSION["pseudo"] = $pseudo;
    $_SESSION["score"] = $score;
    $_SESSION["email"] = $email;   
    try{
        echo "Valeur de la session: ".$_SESSION["a1"].PHP_EOL;
        echo "Status de la session: ".session_status().PHP_EOL;
// OUTPUT = "LOGGED"

        echo "Pseudo de l'utilisateur: ".$_SESSION["pseudo"].PHP_EOL;
// OUTPUT = "Clement"
        
        echo "Score de l'utilisateur: ".$_SESSION["score"].PHP_EOL;
// OUTPUT = Score de l'utilisateur
    }
    catch (Exception $e){
        echo("Error : ".$e);
        unset($_SESSION["a1"]);
        exit;
    };
?>






<!-- 
    ------------------------------------------------------
    PAS TOUCHE À CE CODE NON PLUS XD

    ------------------------------------------------------
-->
