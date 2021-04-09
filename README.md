# Projet NSI SokoWeb
## Description

...

## Solution retenu

...

## Cahier Journal de Bord

### Clément
#### Le 3/03:
* Ajout d'un login/interface utilisateur

#### Le 4/03
* Ajout d'un service d'inscription pour l'utilisateur

####  Le 27/03
* Amélioration de la page de login

#### Le 30/03
* Création de la base de donnée
* Liaison entre la base de donnée et `register.php`

### Steven

#### Vacances:
* Apprentissage du javascript
* Test de codage d’un tableau en javascript avec un peu d’htmlCode :
Code
```html
<html lang="fr">
<head>
	<meta charset="utf-8">
	
	<title>Sokotest</title>
	<meta name="description" content="Jeu Sokoban">
	<meta name="auteur" content="Clément et Steven">
	
	<link rel="stylesheet" href="css/style.css">

</head>
<body onkeyup="AppuisTouche(event)">
	<h1> Lvl-1 </h1>
	<div><h3>Nombre de pas:<span id="Compteurdepas">0</span></div></h3>

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
				strHTLM += "<img src='img/Sans.png'>";
			} else if (laCell.ElementduJeu == Boite) {
				strHTLM += "<img src='img/Boite.png'>";
			}
			strHTLM += "</td>";
		}
		strHTLM += "</tr>";	
	}
	tbltableau.innerHTML = strHTLM;
}
```



