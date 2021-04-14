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
