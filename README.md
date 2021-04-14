# Projet NSI SokoWeb
## Description

**SokoWeb** est une application Web qui consiste en un jeu de Sokoban. Le but du jeu est de déplacer les caisses <br>
de sorte à ce qu'elles arrivent à des emplacements précis. Lorsque toutes les caisses sont placées, le joueur gagne la partie, <br>
il peut donc passer au niveau suivant.  
Afin de pouvoir jouer, l'utilisateur doit se créer un compte en y renseignant un pseudo, son adresse mail, ainsi qu'un mot de passe. La création d'un compte permet une sauvegarde de son score qui sera enregistrée dans une base de donnée. 

## To-Do list
### Côté serveur:
* Amélioration de la base de donnée:
* "Si champs vide, ne pas remplir la base"
* Communications js php

### Côté sokoban:
* Amélioration de la sélection de niveau:
* Regler le probleme de variable global/local avec i,j et stableau


## Solution retenu



## Cahier Journal de Bord

### Clément
#### Le 3/03:
* [Ajout d'un login/interface utilisateur](login/login.php)

#### Le 4/03
* [Ajout d'un service d'inscription pour l'utilisateur](login/register.php)

####  Le 27/03
* Amélioration de la page de login

#### Le 30/03
* Création de la base de donnée
* Liaison entre la base de donnée et `register.php`

#### Le 13/04
* Amélioration du [register.php](login/register.php)
* Amélioration de la communication back-end 

#### Le 14/04:
* [Réglage du problème d'insertion dans la bdd](login/register.php)



### Steven

#### Vacances de mars:
* Apprentissage du javascript
* Test de codage d’un tableau en javascript avec un peu d’htmlCode :
* Code:
* [Création du tableau](Sokoban/Début.html)

* Création des règles pour bouger:
* [Création des règles](Sokoban/regles.js)
* Création de la victoire et de la possibilitée de bouger avec les touches du clavier:
* [Création de la victoire et touche du clavier](Sokoban/victoireetclavier.js)

#### Le 30/03:
* Test d'insertion d'image dans les murs, résultat non concluant.
* Début de création de différents niveaux
* Déplacement de la partie "printtableau" dans d'autres script afin de pouvoir creer d'autre niveau en fonction du script sélèctionné:
* [Level1](Sokoban/lvl1.js)

#### Le 13/04:
* Test de sélection des niveaux, résultat non concluant, des soucis d'importation, exemple le niveau 3 est appelé à la place du niveau 1.

#### Le 14/04:
* Amélioration de la selection de niveau, mais soucis de déplacement
* [Amélioration](Sokoban/Sokotest2.html)

