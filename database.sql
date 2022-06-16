CREATE DATABASE IF NOT EXISTS `mechanic_part` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `mechanic_part`;
CREATE DATABASE IF NOT EXISTS `register` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `register`;
CREATE TABLE `register`.`employee` ( `ID` INT(100) NULL AUTO_INCREMENT , `user_id` VARCHAR(45) NULL , `password` VARCHAR(45) NULL , PRIMARY KEY (`id`, `user_id`, `password`)) ENGINE = InnoDB;
CREATE TABLE `mechanic_part`.`mechanic_all_part` ( `id` INT(100) NULL AUTO_INCREMENT , `part_id` VARCHAR(45) NULL , `part_making_date` DATE NOT NULL , `part_raw_materials` VARCHAR(45) NOT NULL , `part_country` VARCHAR(45) NOT NULL , `part_status` VARCHAR(45) NOT NULL , PRIMARY KEY (`id`, `part_id`)) ENGINE = InnoDB;
CREATE TABLE `mechanic_part`.`faulty_mechanic_part` ( `id` INT(100) NULL AUTO_INCREMENT , `part_id` VARCHAR(45) NULL , `part_making_date` DATE NOT NULL , `part_raw_materials` VARCHAR(45) NOT NULL , `part_country` VARCHAR(45) NOT NULL , `part_status` VARCHAR(45) NOT NULL , PRIMARY KEY (`id`, `part_id`)) ENGINE = InnoDB;