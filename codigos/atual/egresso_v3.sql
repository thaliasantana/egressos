-- MySQL Script generated by MySQL Workbench
-- 11/09/18 22:09:54
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema dbegressos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbegressos` DEFAULT CHARACTER SET utf8;
USE `dbegressos`;

-- -----------------------------------------------------
-- Table `dbegressos`.`pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbegressos`.`pais` (
  `idPais` INT NOT NULL AUTO_INCREMENT,
  `nomePais` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idPais`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `dbegressos`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbegressos`.`estado` (
  `idEstado` INT NOT NULL AUTO_INCREMENT,
  `nomeEstado` VARCHAR(50) NOT NULL,
  `idPais` INT NOT NULL,
  PRIMARY KEY (`idEstado`),
  INDEX `fk_estado_pais1_idx` (`idPais` ASC),
  CONSTRAINT `fk_estado_pais1`
    FOREIGN KEY (`idPais`)
    REFERENCES `dbegressos`.`pais` (`idPais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `dbegressos`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbegressos`.`cidade` (
  `idCidade` INT NOT NULL AUTO_INCREMENT,
  `nomeCidade` VARCHAR(100) NOT NULL,
  `idEstado` INT NOT NULL,
  PRIMARY KEY (`idCidade`),
  INDEX `fk_cidade_estado1_idx` (`idEstado` ASC),
  CONSTRAINT `fk_cidade_estado1`
    FOREIGN KEY (`idEstado`)
    REFERENCES `dbegressos`.`estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `dbegressos`.`egresso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbegressos`.`egresso` (
  `idEgresso` INT NOT NULL AUTO_INCREMENT,
  `nomeEgresso` VARCHAR(100) NOT NULL,
  `cpfEgresso` CHAR(11) NOT NULL,
  `dataNascimentoEgresso` DATE NOT NULL,
  `emailEgresso` VARCHAR(80) NOT NULL,
  `telefoneEgresso` CHAR(11) NOT NULL,
  `whatsappEgresso` CHAR(11) NULL,
  `sexoEgresso` CHAR(1) NOT NULL,
  `enderecoEgresso` VARCHAR(100) NOT NULL,
  `numeroEnderecoEgresso` INT(10) NOT NULL,
  `setorEnderecoEgresso` VARCHAR(50) NOT NULL,
  `complementoEgresso` VARCHAR(100) NULL,
  `idCidade` INT NOT NULL,
  PRIMARY KEY (`idEgresso`),
  INDEX `fk_egresso_cidade1_idx` (`idCidade` ASC),
  UNIQUE INDEX `cpfEgresso_UNIQUE` (`cpfEgresso` ASC),
  CONSTRAINT `fk_egresso_cidade1`
    FOREIGN KEY (`idCidade`)
    REFERENCES `dbegressos`.`cidade` (`idCidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `dbegressos`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbegressos`.`curso` (
  `idCurso` INT NOT NULL AUTO_INCREMENT,
  `nomeCurso` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idCurso`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `dbegressos`.`cursoConcluido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbegressos`.`cursoConcluido` (
  `idCursoConcluido` INT NOT NULL,
  `anoFimCursoConcluido` INT NOT NULL,
  `anoInicioCursoConcluido` INT NOT NULL,
  `idCurso` INT NOT NULL,
  `idEgresso` INT NOT NULL,
  PRIMARY KEY (`idCursoConcluido`),
  INDEX `fk_curso_has_egresso_egresso1_idx` (`idEgresso` ASC),
  INDEX `fk_curso_has_egresso_curso_idx` (`idCurso` ASC),
  CONSTRAINT `fk_curso_has_egresso_curso`
    FOREIGN KEY (`idCurso`)
    REFERENCES `dbegressos`.`curso` (`idCurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_has_egresso_egresso1`
    FOREIGN KEY (`idEgresso`)
    REFERENCES `dbegressos`.`egresso` (`idEgresso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `dbegressos`.`pergunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbegressos`.`pergunta` (
  `idPergunta` INT NOT NULL AUTO_INCREMENT,
  `enunciadoPergunta` VARCHAR(300) NOT NULL,
  PRIMARY KEY (`idPergunta`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `dbegressos`.`opcao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbegressos`.`opcao` (
  `idOpcao` INT NOT NULL AUTO_INCREMENT,
  `idPergunta` INT NOT NULL,
  `texto` VARCHAR(45) NULL,
  PRIMARY KEY (`idOpcao`),
  INDEX `fk_opcao_pergunta1_idx` (`idPergunta` ASC),
  CONSTRAINT `fk_opcao_pergunta1`
    FOREIGN KEY (`idPergunta`)
    REFERENCES `dbegressos`.`pergunta` (`idPergunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `dbegressos`.`resposta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbegressos`.`resposta` (
  `idEgresso` INT NOT NULL,
  `idPergunta` INT NOT NULL,
  `idOpcao` INT NOT NULL,
  `anoResposta` INT NOT NULL,
  INDEX `fk_resposta_pergunta1_idx` (`idPergunta` ASC),
  INDEX `fk_resposta_opcao1_idx` (`idOpcao` ASC),
  PRIMARY KEY (`idEgresso`, `idPergunta`, `anoResposta`),
  CONSTRAINT `fk_resposta_egresso1`
    FOREIGN KEY (`idEgresso`)
    REFERENCES `dbegressos`.`egresso` (`idEgresso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resposta_pergunta1`
    FOREIGN KEY (`idPergunta`)
    REFERENCES `dbegressos`.`pergunta` (`idPergunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resposta_opcao1`
    FOREIGN KEY (`idOpcao`)
    REFERENCES `dbegressos`.`opcao` (`idOpcao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
