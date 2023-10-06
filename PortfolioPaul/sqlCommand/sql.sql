CREATE TABLE Me(id INT PRIMARY KEY, firstname VARCHAR(20) NOT NULL, lastname VARCHAR(20) NOT NULL, email VARCHAR(30), phone INT, address VARCHAR(64), country VARCHAR(50), birth_date DATE, description VARCHAR(256));

INSERT INTO Me (id, firstname, lastname, email, phone, country, address,birth_date, description) VALUES (1, 'Paul', 'Cassan','paulcassan05@gmail.com',0698122325, 'France', 'Paris','2001-01-12' , "ceci est un test");

INSERT INTO Me (id, firstname, lastname, email, phone, country, address,birth_date, description) VALUES (2, 'Joan', 'Chenot','joan05@gmail.com',0698122312, 'France', 'Paris','2001-01-12' , "ceci est un test2");



CREATE TABLE Projects(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, title VARCHAR(64) NOT NULL, description VARCHAR(1024), picture VARCHAR(1024), date_created DATE, date_upade DATE, enable BOOLEAN);

INSERT INTO Projects(title, description, date_created,date_upade, enable) VALUES ('MyWordl', 'premier projet', CURDATE(), CURDATE(), true);

CREATE TABLE Message(id INT PRIMARY KEY NOT NULL, subject VARCHAR(64), message VARCHAR(2048), from_name VARCHAR(64), from_email VARCHAR(64));