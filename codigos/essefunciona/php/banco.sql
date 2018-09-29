CREATE DATABASE egressos;
USE egressos;

CREATE TABLE egresso (
  `idEgresso` INT NOT NULL AUTO_INCREMENT,
  `nomeEgresso` VARCHAR(100) NOT NULL,
  `cpfEgresso` INT NOT NULL,
  `dataNascimentoEgresso` DATE NOT NULL,
  `emailEgresso` VARCHAR(80) NOT NULL,
  `telefoneEgresso` INT NOT NULL,
  `sexoEgresso` VARCHAR(2) NOT NULL,
  `whatsappEgresso` INT NULL,
  `enderecoEgresso` VARCHAR(100) NOT NULL,
  `numeroEnderecoEgresso` INT(10) NOT NULL,
  `setorEnderecoEgresso` VARCHAR(50) NOT NULL,
  `complementoEgresso` VARCHAR(100) NULL,
  primary key (idEgresso)
);