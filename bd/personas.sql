CREATE TABLE `personas`.`t_personas` (
  `id_personas` INT NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NOT NULL,
  `aPaterno` TEXT NOT NULL,
  `aMaterno` TEXT NOT NULL,
  `fecha` DATETIME NOT NULL DEFAULT now(),
  `sexo` TEXT NOT NULL,
  PRIMARY KEY (`id_gasto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
