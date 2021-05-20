<?php 
    session_start();

    $pseudo = "clement";
    $email = "cleml97430@gmail.com";
    $mdp = "123";

    $_SESSION["a1"] = 1;
    $_SESSION["pseudo"] = $pseudo;
    $_SESSION["mdp"] = $mdp;
    $_SESSION["email"] = $email;   
    try{
        echo $_SESSION["a1"].PHP_EOL;
// OUTPUT = "LOGGED"

        echo $_SESSION["pseudo"].PHP_EOL;
// OUTPUT = "Clement"
        
        echo $_SESSION["mdp"].PHP_EOL;
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
