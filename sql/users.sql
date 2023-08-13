-- This is to create the users table (registered users)
CREATE TABLE users (
	ID INT NOT NULL AUTO_INCREMENT,
	full_name VARCHAR(100),
    username VARCHAR(100),
    email VARCHAR(100),
    phone_number VARCHAR(100),
    age INT,
    password VARCHAR(200),
    PRIMARY KEY (ID)
);