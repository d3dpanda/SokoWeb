function Constlvl1() {
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
	//alert("contlvl1")
	return tableau;
}	
