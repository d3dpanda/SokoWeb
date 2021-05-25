<?php
	session_start();
	include "../../login/bdd.php";
	require "../header.php";
//	$pseudo = $_SESSION['pseudo'];
	$pseudo = "admin";
	$_SESSION['pseudo'] = "admin";
echo "<h1>Bienvenue ".$pseudo."</h1>";
// Sélection du score du joueur par rapport à son pseudo
	try{
		$scoreUser = $bdd -> query('SELECT score FROM User WHERE pseudo = "'.$_SESSION['pseudo'].'";');
		while ($scoreDuJoueur = $scoreUser->fetch()) {
			$_SESSION['score'] = $scoreDuJoueur;
			echo "Votre score est de ".$_SESSION['score'];
		};
	}
	catch(Exception $e) {
		die("Erreur: ".$e->getMessage());
	};


?>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<!--Création des "informations" de la page-->
	<title>Sokoban</title>
	<meta name="description" content="Jeu Sokoban">
	<meta name="auteur" content="Clément et Steven">
	
	<link rel="stylesheet" href="css/style.css">

<body>
<div>
	</head>
	<!--Titre de l'accueil-->
	<h1> Sokoban </h1>	
	<table id="tbltableau"></table>
        <div id="content">
	<p><strong>Niveau de difficulté:</strong></p>
	<!--Selection d'un niveau facile-->	
	<p>Facile:</p>
	<select name="lvl" id="Choixdulvl">
		<!--Selection du niveau dans la difficulté Facile-->	
		<option  value="0" onclick="">Choisissez un niveau</option>
		<!--Selection du niveau Facile1-->	
		<option value="1" onclick="window.location='niveau1.html'"><a href="niveau1.html">Niveau-1</a></option>
		<!--Selection du niveau Facile2-->
		<option value="2" onclick="window.location='niveau2.html'">Niveau-2</option>
		
	</select>
	<!--Selection d'un niveau Normal-->	
	<p>Normal:</p>
	<select name="lvl" id="Choixdulvl">
		<!--Selection du niveau dans la difficulté Normal-->	
		<option  value="0" disabled>Choisissez un niveau</option>
		<!--Selection du niveau Normal1-->	
		<option value="1" onclick="window.location='NiveauNormal1.html'">Niveau-1</option>
		<!--Selection du niveau Normal2-->	
		<option value="2" onclick="window.location='NiveauNormal2.html'">Niveau-2</option>
		
	</select>
	</select>
	<!--Selection d'un niveau Difficile-->	
	<p>Difficile:</p>
	<select name="lvl" id="Choixdulvl">
		<!--Selection du niveau dans la difficulté Difficile-->	
		<option  value="0" onclick="">Choisissez un niveau</option>
		<!--Selection du niveau Difficile1-->	
		<option value="1" onclick="window.location='NiveauDifficile1.html'">Niveau-1</option>
		<!--Selection du niveau Difficile2-->	
		<option value="2" onclick="window.location='NiveauDifficile2.html'">Niveau-2</option>
		
	</select>
	</select>
	<!--Selection d'un niveau Impossible-->	
	<p>Impossible:</p>
	<select name="lvl" id="Choixdulvl">
		<!--Selection du niveau dans la difficulté Impossible-->	
		<option  value="0" onclick="">Choisissez un niveau</option>
		<!--Selection du niveau Impossible1-->	
		<option value="1" onclick="window.location='NiveauIMPOSSIBLE1.html'">Niveau-1</option>
		<!--Selection du niveau Impossible2-->	
		<option value="2" onclick="window.location='NiveauIMPOSSIBLE2.html'">Niveau-2</option>
</div>
</div>   
</select>

</body>

</html>
