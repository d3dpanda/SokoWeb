# Projet NSI SokoWeb
## Description

**SokoWeb** est une application Web qui consiste en un jeu de Sokoban. Le but du jeu est de déplacer les caisses <br>
de sorte à ce qu'elles arrivent à des emplacements précis. Lorsque toutes les caisses sont placées, le joueur gagne la partie, <br>
il peut donc passer au niveau suivant.  
Afin de pouvoir jouer, l'utilisateur doit se créer un compte en y renseignant un pseudo, son adresse mail, ainsi qu'un mot de passe. La création d'un compte permet une sauvegarde de son score qui sera enregistrée dans une base de donnée. 

## [Cliquer ici pour accéder au site](http://clementlagier.dynv6.net/SokoWeb-main/) 


## To-Do list
### Côté serveur:
* voir `session_start()` en php
* Enregistrement des niveaux du joueur dans la base de donnée

### Côté Sokoban:
* Faire fonctionner le bouton "Relancer".
* Ajouter d'autres niveaux pour les difficultées normales et impossibles.
* Rajouter du css pour le bien de nos yeux.


## Solution retenu
### Clément
* Méthode `fetch()` pour sélectionner une colonne en php
* `session_start()`, `unset()`pour commencer et arrêter une session en php
* `session_id()` pour récupérer un identifiant de session
* utilisation des variables de sessions
* `require()`permet d'arrêter l'exécution du script lorsqu'une erreur est rencontrée, alors que `include()` continue l'exécution


### Steven
* On peut recharger une page seulement avec la ligne `location = location` en javascript


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

#### Le 20/04:
* Résolution du problème de liaison bdd/formulaire

#### Le 21/04
* Finition du [register](login/register.php)
* Tests de comparaison des données du formulaire à la base de données [login.php](login/login.php)
* Tests de suppression des doublons dans la bdd lors de l'enregistrement

#### Le 22/04
* Comparaison des données de la base de donnée à celles envoyées par le formulaire [login.php](login/login.php) et [bdd_login.php](login/bdd_login.php)
* Ajout d'une page d'acceuil [index.html](index.html) 
* modification du [fichier css](Sokoban/css/styles.css)

#### Le 23/04
* Vérification de l'adresse mail valide ou pas 
* Tests de modifications de messages d'erreurs si informations mal renseignées
* Ajout de la colonne `score` dans la bdd (valeur 0 par défaut)

#### Le 27/04:
* Test de comparaison de donnée avec la fonction PHP `fetch()`
* Modifications des messages d'erreurs 
#### Le 6/05:
* Test de comparaison entre la tables et les informations entrées 

#### Le 10/05:
* Message d'erreur dans la base montrant que les informations sont déjà entrées
* Mot clé `UNIQUE` lors de la création de la base de donnée
* Correction de la prise de doublons dans la bdd
* Finition de la comparaison de doublons [bdd_register](login/bdd_register.php)
* Ajout de `try` et `catch` afin de faciliter la récupération d'erreur dans le programme
* Commande SQL "SELECT COUNT(pseudo) FROM User WHERE pseudo="[pseudo renseigné par l'utilisateur]". Renvoie un 1 si le pseudo est déjà utilisé et renvoie un 0 si il est disponible
* Finition de la page de connexion: lorsque l'utilisateur se connecte, vérifie les informations de la base de donnée et les informations renseignées par l'utilisateur. Si le pseudo ou le mot de passe ne correspond pas, rafraîchit la page, sinon, permet la connexion. 
* Le système d'inscription et de connexion sont fonctionnels [Page d'inscription](login/register.php) / [page de connexion](login/login.php)
* Ajout des messages d'erreur lors de l'inscription et de la connexion de l'utilisateur

#### Le 17/05:
* Apprentissage des sessions en php, avec `session_start()`
* Ajout des fichiers tests [session.php](Sokoban/session.php) et conversion en php du fichier [Sokoban.html](Sokoban/Sokoban.html) en [Sokoban.php](Sokoban/Sokoban.php)

#### Le 20/05: 
* essais des sessions en php, avec affichage du pseudo, du score et de l'email de l'utilisateur 
* ajout des id de sessions avec la fonction `session_id()`
* transfert des données utilisateurs avec les sessions avec les variables de sessions `$_SESSION["nomDeLaVariableDeSession"] = $variable`

#### Le 21/05:
* Finition de la mise en place des sessions 
* Affichage du pseudo de l'utilisateur sur la page de jeu 


### Steven

#### Vacances de mars:
* Apprentissage du javascript
* Test de codage d’un tableau en javascript avec un peu d’htmlCode: [Création du tableau](Sokoban/Début.html).

* Création des règles pour bouger: [Création des règles](Sokoban/regles.js).
* Création de la victoire et de la possibilitée de bouger avec les touches du clavier: [Création de la victoire et touche du clavier](Sokoban/victoireetclavier.js).

#### Le 30/03:
* Test d'insertion d'image dans les murs, résultat non concluant.
* Début de création de différents niveaux
* Déplacement de la partie "printtableau" dans d'autres script afin de pouvoir creer d'autre niveau en fonction du script sélèctionné:
* [Level1](Sokoban/lvl1.js)

#### Le 13/04:
* Test de sélection des niveaux, résultat non concluant, des soucis d'importation, exemple le niveau 3 est appelé à la place du niveau 1.

#### Le 14/04:
* Amélioration de la selection de niveau, mais soucis de déplacement
* [Amélioration du programme principale](Sokoban/Sokotest2.html)

#### Le 20/04:
* Ajout de commentaire à chaques parties du programme pour une meilleur compréhension
* [Commentaire](Sokoban/Sokodescription.html)
* Création d'un choix de niveau "Brut" temporaire pour avoir un choix de niveau et un sokoban qui fonctionne

#### Le 23 et 24/04:
* Création de la [sélèction de niveau](Sokoban/sokobrut/Sokobrut.html) d'une deuxième façons.
* Création d'un niveau [Facile "2"](Sokoban/sokobrut/niveau2.html)
* Création d'un niveau [Difficile "1"](Sokoban/sokobrut/NiveauDifficile1.html)

#### Le 27/04:
* Ajout du bouton relancer mais problème, la page recharge mais ne lance pas affichage du tableau, on est donc obligé d'appuyer à nouveau sur le bouton "Lancer la partie" aprés avoir appuyé sur "Relancer"
* Mise à jour du [script css](Sokoban/sokobrut/css/style.css)

#### Le 4/05/2021:
* Finition, simplification des programmes

#### Le 15/05/2021:
* Création d'un niveau impossible "personnalisé" (fait à la main)
