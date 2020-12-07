drop database if exists UserDB;
CREATE DATABASE UserDB;
USE UserDB;


CREATE TABLE Users (
    id INT AUTO_INCREMENT,
    firstname VARCHAR(35),
    lastname VARCHAR(35),
    password VARCHAR(100),
    email VARCHAR(64),
    date_joined DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
    );

CREATE TABLE Issues (
    id INT AUTO_INCREMENT,
    title VARCHAR(64),
    description TEXT,
    type VARCHAR(24),
    priority VARCHAR(24),
    status VARCHAR(35) NOT NULL DEFAULT 'OPEN',
    assigned_to INT,
    created_by INT,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(id));

INSERT INTO Users (firstname, lastname, email, password) VALUES('admin', 'admin','admin@project2.com', '$2y$10$t8JSH01ndXOR72ZYCmj84OgNvIPJhQYnUgvJsaj/Y73vtd8u14PeG'); 

