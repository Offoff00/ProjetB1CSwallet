CREATE DATABASE b1cswallet;
USE b1cswallet;

CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(100),
    nom VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    mot_de_passe VARCHAR(255)
);

CREATE TABLE quizz (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT,
    reponse_a TEXT,
    reponse_b TEXT,
    reponse_c TEXT,
    bonne_reponse CHAR(1)
);
