CREATE DATABASE db_Gamos;

use db_Gamos;

-- Table des utilisateurs mise à jour
CREATE TABLE Utilisateurs (
    id_utilisateur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    numero_telephone VARCHAR(15),
    numero_permis INT NOT NULL,
    age INT,
    role ENUM('admin', 'employe', 'utilisateur') NOT NULL
);

-- Table des employés (liée aux utilisateurs)
CREATE TABLE Employes (
    id_employe INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT,
    role ENUM('employe', 'utilisateur') NOT NULL,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateurs(id_utilisateur) ON DELETE CASCADE
);

-- Table des catégories pour stocker les caractéristiques de catégories de véhicules
CREATE TABLE Categories (
    id_categorie INT PRIMARY KEY AUTO_INCREMENT,
    marque VARCHAR(100) NOT NULL,
    modele VARCHAR(100) NOT NULL,
    annee INT NOT NULL,
    transmission ENUM('manuelle', 'automatique') NOT NULL,
    nombre_sieges INT NOT NULL,
    type_carburant ENUM('essence', 'diesel', 'electrique', 'hybride') NOT NULL,
    disponibilite DATE NOT NULL,
    prix_jour DECIMAL(10, 2) NOT NULL DEFAULT 10.00 
);

-- Table des voitures, qui fait référence à une catégorie spécifique
CREATE TABLE Voitures (
    id_voiture INT PRIMARY KEY AUTO_INCREMENT,
    id_categorie INT,  -- Relation avec la table Categories
    FOREIGN KEY (id_categorie) REFERENCES Categories(id_categorie) ON DELETE CASCADE
);

-- Table des villes
CREATE TABLE Ville (
    id_ville INT PRIMARY KEY AUTO_INCREMENT,
    nom_ville VARCHAR(100) NOT NULL,
    ville_depart VARCHAR(100) NOT NULL,
    ville_retour VARCHAR(100) NOT NULL
);

-- Table de liaison entre les voitures et les villes
CREATE TABLE Voiture_villes (
    id_voiture_villes INT PRIMARY KEY AUTO_INCREMENT,
    id_voiture INT,
    id_ville INT,
    FOREIGN KEY (id_voiture) REFERENCES Voitures(id_voiture) ON DELETE CASCADE,
    FOREIGN KEY (id_ville) REFERENCES Ville(id_ville) ON DELETE CASCADE
);

-- Table des disponibilités pour gérer les périodes de disponibilité des voitures
CREATE TABLE Disponibilites (
    id_disponibilite INT PRIMARY KEY AUTO_INCREMENT,
    id_voiture INT,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    statut ENUM('disponible', 'reserve') NOT NULL,
    FOREIGN KEY (id_voiture) REFERENCES Voitures(id_voiture) ON DELETE CASCADE
);

-- Table des réservations
CREATE TABLE Reservations (
    id_reservation INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT,
    id_voiture INT,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    prix_total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateurs(id_utilisateur) ON DELETE CASCADE,
    FOREIGN KEY (id_voiture) REFERENCES Voitures(id_voiture) ON DELETE CASCADE
);


