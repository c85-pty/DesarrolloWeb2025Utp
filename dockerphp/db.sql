
use my_database;

DROP TABLE IF EXISTS MyGuests;
 
CREATE TABLE MyGuests (
id INT AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
 
 
INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jorge', 'Gonzalez', 'john@example.com');
 
SELECT id, firstname, lastname FROM MyGuests;


