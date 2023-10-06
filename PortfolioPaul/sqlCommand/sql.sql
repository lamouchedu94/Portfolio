CREATE TABLE Me(id INT PRIMARY KEY AUTO_INCREMENT, firstname VARCHAR(20) NOT NULL, lastname VARCHAR(20) NOT NULL, email VARCHAR(30), phone INT, address VARCHAR(64), country VARCHAR(50), birth_date DATE, description VARCHAR(256));

INSERT INTO Me (firstname, lastname, email, phone, country, address,birth_date, description) VALUES ('Paul', 'Cassan','paulcassan05@gmail.com',0718192325, 'France', 'Paris','2005-12-06' , "ceci est un test");

INSERT INTO Me (firstname, lastname, email, phone, country, address,birth_date, description) VALUES ('Joan', 'Chenot','joan@gmail.com',0698122312, 'France', 'Paris','2005-01-12' , "ceci est un test2");



CREATE TABLE Projects(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, user_id INT NOT NULL, FOREIGN KEY (user_id) REFERENCES Me(id), title VARCHAR(64) NOT NULL, description VARCHAR(1024), picture VARCHAR(1024), date_created DATE, date_upade DATE, enable BOOLEAN);

INSERT INTO Projects(title, description, date_created,date_upade, enable, user_id) VALUES ('MyWordl', 'premier projet', CURDATE(), CURDATE(), true, 2);

INSERT INTO Projects(title, description, date_created,date_upade, enable, user_id) VALUES ('HyruleCastle', "C'est un jeu (un rpg) écrit en Typescript en groupe. Dans ce jeu nous pouvons combatre des monstres pour pouvoir monter plus haut dans le 'donjon'. Le tout se déroule dans l'univers de Zelda", CURDATE(), CURDATE(), true,2);

INSERT INTO Projects(title, description, date_created,date_upade, enable, user_id) VALUES ('HyruleCastle', "Il s'agit d'un rpg écrit en Typescript. Ce projet a été réalisé à 2. Dans ce jeu dans l'univers de Zelda, nous pouvons combatre des monstres pour monter de plus en plus haut dans un donjon. Bien entendu, plus on est haut dans le donjon, plus les ennemis sont puissant. Il y a une gestion de l'inventaire ainsi qu'une gestion des niveaux.", CURDATE(), CURDATE(), true, 1);
UPDATE Projects SET picture="./img/HyruleCastle/triforce.png" WHERE id=3;
UPDATE Projects SET picture="./img/MyWordle/Wordle.png" WHERE id=1;


CREATE TABLE Message(id INT PRIMARY KEY NOT NULL, subject VARCHAR(64), message VARCHAR(2048), from_name VARCHAR(64), from_email VARCHAR(64));