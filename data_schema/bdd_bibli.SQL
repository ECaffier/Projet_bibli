DROP DATABASE IF EXISTS bdd_bibli;
CREATE DATABASE IF NOT EXISTS bdd_bibli
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

CREATE TABLE bdd_bibli.user
(
    userID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(100),
    lastname VARCHAR(100),
    birthdate DATE, 
    email VARCHAR(100),
    card_number INT(100)    
)
ENGINE = InnoDB;

CREATE TABLE bdd_bibli.book
(
    bookID INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(100),
    autor VARCHAR(100),
    publication DATE,
    category VARCHAR(100),
    summary VARCHAR(255),
    disponibility VARCHAR(100),
    userID INT UNSIGNED,
    PRIMARY KEY (bookID),
    FOREIGN KEY (userID) REFERENCES user(userID)
)
ENGINE = InnoDB;


USE bdd_bibli;
INSERT INTO `user` VALUES (NULL, 'Dampierre', 'Eric', '1989-05-17', 'EricDampierre@gmail.com', '123456789');
INSERT INTO `user` VALUES (NULL, 'Pluie', 'Serge', '1992-02-12', 'SergePluie@gmail.com', '987654321');
INSERT INTO `user` VALUES (NULL, 'Gossart', 'Thomas', '1992-04-28', 'ThomasGossart@gmail.com', '258369741');
INSERT INTO `book` VALUES (NULL, 'Le DEFERLEMENT', 'Christie Golden', '21-11-12', 'Roman', 'Mais des tensions grandissantes menacent de provoquer une guerre ouverte entre les deux factions.', 'Disponible', NULL);
INSERT INTO `book` VALUES (NULL, 'Le JOUR DU DRAGON', 'Richard A. Knaak', '01-02-03', 'Roman', 'Dans une des nuits du temps, la terre dAzeroth était peuplée de créatures extraordinaires.','Disponible', NULL);
INSERT INTO `book` VALUES (NULL, 'Le DERNIER GARDIEN', 'Christie Golden', '01-08-03', 'Roman', 'Dans le passé, le monde dAzeroth regorgeait de créatures merveilleuses de toutes sortes.', 'Disponible', NULL);
INSERT INTO `book` VALUES (NULL, "Le PUIT D'ETERNITE", 'Richard A. Knaak', '01-05-05', 'Roman', 'La légion Ardente a été bannie dAzeroth depuis déjà bien des mois.', 'Disponible', NULL);
