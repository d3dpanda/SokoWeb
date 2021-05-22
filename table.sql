-- Commande à copier !

CREATE TABLE User (
    id INTEGER AUTO_INCREMENT UNIQUE NOT NULL,
    pseudo VARCHAR(60) NOT NULL UNIQUE,
    email VARCHAR (120) NOT NULL UNIQUE,
    mdp VARCHAR(120) NOT NULL,
    score INTEGER DEFAULT 0,
    lvl INTEGER DEFAULT 0,
    PRIMARY KEY(id)); 

--####################
