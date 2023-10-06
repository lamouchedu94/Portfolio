CREATE TABLE Me(id INT PRIMARY KEY, firstname VARCHAR(20) NOT NULL, lastname VARCHAR(20) NOT NULL, email VARCHAR(30), phone INT, address VARCHAR(64), country VARCHAR(50), birth_date DATE, description VARCHAR(256));

INSERT INTO Me (id, firstname, lastname, email, phone, country, address,birth_date, description) VALUES (1, 'Paul', 'Cassan','paulcassan05@gmail.com',0698122325, 'France', 'Paris','2001-01-12' , "ceci est un test");

INSERT INTO Me (id, firstname, lastname, email, phone, country, address,birth_date, description) VALUES (2, 'Joan', 'Chenot','joan05@gmail.com',0698122312, 'France', 'Paris','2001-01-12' , "ceci est un test2");