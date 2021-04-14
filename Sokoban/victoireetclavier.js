function VictoireOuPas(stableau) {
	stableau = Constlvl1()
	console.log(stableau);
	var laVictoire = true;
	for (var i=0; i<stableau.length; i++) {
		for (var j=0; j<stableau[0].length; j++) {
			var laCell = stableau[i][j];
			if (laCell.type == Objectif && laCell.ElementduJeu != Boite) laVictoire = false;
		}
	}
	if (laVictoire) alert("Bravo, vous avez réussi ce niveau")
}
function AppuisTouche(event,stableau) {
	stableau = Constlvl1()
	console.log(stableau);
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
