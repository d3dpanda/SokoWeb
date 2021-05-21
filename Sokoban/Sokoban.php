<?php
     session_start();
     $id_session = session_id();
     require "header.php";

     echo "<h1>Bienvenue ".$_SESSION['pseudo']."</h1>";
    
?>

<!-- 
-------------------------
	NE FAIS PAS ATTENTION À CE PROGRAMME, C'EST POUR QUE JE PUISSE TRAVAILLER SUR LES SESSIONS 
-------------------------
-->

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	
	<title>Sokoban</title>
	<meta name="description" content="Jeu Sokoban">
	<meta name="auteur" content="Clément et Steven">
	
	<link rel="stylesheet" href="./css/style.css">

</head>
<body onkeyup="AppuisTouche(event)">
<?php

	
	$_SESSION["user_score"] = 0;

?>
	<h1> Sokoban </h1>
	<div><h3>Nombre de pas:<span id="Compteurdepas">0</span></div></h3>
	<div class="score">Votre score: <?php echo </div>
	<button onclick="printtableau()">Lancer la partie</button>
	
	<table id="tbltableau"></table>

<script>
Mur = "Mur"
Sol	= "Sol"
Objectif = "Objectif"
Joueur = "Joueur"
Boite = "Boite"
var PosiJoueur = {i: 2, j:9};
var stableau = Consttableau();

function Consttableau() {
	//Creation du terrain
	var tableau = new Array(12);
	for (var i=0; i<tableau.length; i++) {
		tableau[i] = new Array(12);
	}
	//Creation du Sol et des Murs
	for (var i=0; i<tableau.length; i++) {
		for (var j=0; j<tableau.length; j++) {
			var cell = {type: Sol, ElementduJeu: null};
			//Si c'est sur les cotés alors on met des murs
			if (i == 0 || i == tableau.length-1 || j == 0|| j == tableau[0].length-1) {
				cell.type = Mur;
			}
			tableau[i][j] = cell

		}
	}
	//Faire apparaitres les Objectifs
	tableau[3][3].type = Objectif;
	tableau[8][8].type = Objectif;
	//Faire apparaitres le Joueur
	tableau[PosiJoueur.i][PosiJoueur.j].ElementduJeu = Joueur;
	//Faire apparaitres le Joueur
	tableau[7][2].ElementduJeu = Boite;
	tableau[2][7].ElementduJeu = Boite;

	console.log(tableau);
	return tableau;
}
function printtableau() {
	var tbltableau = document.getElementById('tbltableau');
	var strHTLM = '';
	for (var i=0; i<stableau.length; i++) {
		strHTLM += "<tr>";
		//console.log(stableau[i]);
		for (var j=0; j<stableau.length; j++) {
			var laCell = stableau[i][j];
			var Cellule;
			if (laCell.type == Sol) {
				Cellule = "Sol";
			}else if (laCell.type == Mur) {
				Cellule = "Mur";
			}else if (laCell.type == Objectif) {
				Cellule = "Objectif";
			}
			strHTLM += "<td class='cell"+ Cellule +"' onclick='appuis("+i+","+j+")' >";
			if (laCell.ElementduJeu == Joueur) {
				strHTLM += "<img src='./Sans.png'>";
			} else if (laCell.ElementduJeu == Boite) {
				strHTLM += "<img src='./Boite.png'>";
			}
			strHTLM += "</td>";
		}
		strHTLM += "</tr>";	
	}
	tbltableau.innerHTML = strHTLM;
}

function appuis(i,j){
	console.log(i,j)
	var iDiff = i - PosiJoueur.i;
	var jDiff = j - PosiJoueur.j;
	var DiffAbsoDei = Math.abs(i - PosiJoueur.i);
	var DiffAbsoDej = Math.abs(j - PosiJoueur.j);
	//Si la case est à coté du joueur alors il peut bouger
	if ((DiffAbsoDei == 1 && DiffAbsoDej == 0) || (DiffAbsoDej == 1 && DiffAbsoDei == 0 )) {
		if (stableau[i][j].type !== Mur) {
			var PeuxBouger = true;
			if (stableau[i][j].ElementduJeu == Boite) {
				if (stableau[i+iDiff][j+jDiff].type != Mur && stableau[i+iDiff][j+jDiff].ElementduJeu == null) {
					stableau[i][j].ElementduJeu = null;
					stableau[i+iDiff][j+jDiff].ElementduJeu = Boite;
				} else {
					console.log("Il y a un mur dernière la boite");
					PeuxBouger = false;
				}
			}
			if (PeuxBouger) {
				stableau[PosiJoueur.i][PosiJoueur.j].ElementduJeu = null;
				PosiJoueur.i = i;
				PosiJoueur.j = j;
				stableau[PosiJoueur.i][PosiJoueur.j].ElementduJeu = Joueur;

				var Compteurdepas = document.getElementById('Compteurdepas');
				Compteurdepas.innerHTML++;

				printtableau();
			
			}
		} else console.log(DiffAbsoDei, DiffAbsoDej,"Il y a un mur");
	}else console.log(DiffAbsoDei, DiffAbsoDej,"est trop loin");
	VictoireOuPas();
}

function VictoireOuPas() {
	var laVictoire = true;
	for (var i=0; i<stableau.length; i++) {
		for (var j=0; j<stableau[0].length; j++) {
			var laCell = stableau[i][j];
			if (laCell.type == Objectif && laCell.ElementduJeu != Boite) laVictoire = false;
		}
	}
	if (laVictoire) alert("Bravo, vous avez réussi ce niveau")
}
function AppuisTouche(event) {
	//console.log(event);
	switch (event.keyCode){
	case 37:
		appuis(PosiJoueur.i, PosiJoueur.j-1)
		break;
	case 38:
		appuis(PosiJoueur.i-1, PosiJoueur.j)
		break;
	case 39:
		appuis(PosiJoueur.i, PosiJoueur.j+1)
		break;
	case 40:
		appuis(PosiJoueur.i+1, PosiJoueur.j)
		break;
	}
}
</script>

	<script src="js/scripts.js"></script>

</body>

</html>
