-- ----------------------------------------------------------------------------
-- MySQL Workbench Migration
-- Created: Tue Nov 22 23:01:40 2022
-- Workbench Version: 8.0.31
-- ----------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------------------------------------------------------
-- Schema agenda
-- ----------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `agenda` ;
CREATE SCHEMA IF NOT EXISTS `agenda` ;

-- ----------------------------------------------------------------------------
-- Table agenda.contacto
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`contacto` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `telefono` VARCHAR(16) NOT NULL,
  `nombre` VARCHAR(128) NOT NULL,
  `tipo` INT(11) NOT NULL,
  `observaciones` VARCHAR(128) NULL DEFAULT NULL,
  `estado` TINYINT(1) NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  INDEX `contacto_ibfk_1` (`tipo` ASC),
  CONSTRAINT `contacto_ibfk_1`
    FOREIGN KEY (`tipo`)
    REFERENCES `agenda`.`tipo_telefono` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;

-- ----------------------------------------------------------------------------
-- Table agenda.tipo_telefono
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`tipo_telefono` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(64) NULL DEFAULT NULL,
  `estado` TINYINT(1) NULL DEFAULT '1',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO `agenda`.`tipo_telefono` VALUES (1,'Personal',1); 
INSERT INTO `agenda`.`tipo_telefono` VALUES (2,'Referencia Laboral',1); 
INSERT INTO `agenda`.`tipo_telefono` VALUES (3,'Referencia Familiar',1); 