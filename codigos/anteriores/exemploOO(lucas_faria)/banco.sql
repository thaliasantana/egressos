CREATE DATABASE agenda;
USE agenda;

CREATE TABLE contato (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    PRIMARY KEY(id)
);