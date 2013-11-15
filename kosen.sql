SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `kosen` DEFAULT CHARACTER SET utf8 ;
USE `kosen` ;

-- -----------------------------------------------------
-- Table `kosen`.`groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosen`.`groups` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `group_name` VARCHAR(45) NOT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `deleted` TINYINT(1) NULL DEFAULT FALSE ,
  `extra1` TEXT NULL ,
  `extra2` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `group_name_UNIQUE` (`group_name` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kosen`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosen`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `first_name` VARCHAR(45) NOT NULL ,
  `last_name` VARCHAR(45) NOT NULL ,
  `gender` VARCHAR(1) NOT NULL ,
  `birthday` DATE NOT NULL ,
  `status` VARCHAR(256) NULL ,
  `kosen_year` INT NOT NULL ,
  `major` VARCHAR(256) NOT NULL ,
  `kosen` VARCHAR(256) NOT NULL ,
  `fb_acc` VARCHAR(45) NULL ,
  `email1` VARCHAR(45) NOT NULL ,
  `email2` VARCHAR(45) NULL DEFAULT NULL ,
  `high_school` VARCHAR(256) NULL ,
  `university1` VARCHAR(256) NULL ,
  `university2` VARCHAR(256) NULL DEFAULT NULL ,
  `university3` VARCHAR(256) NULL DEFAULT NULL ,
  `work1` VARCHAR(45) NULL DEFAULT NULL ,
  `work2` VARCHAR(45) NULL ,
  `address` VARCHAR(256) NULL DEFAULT NULL ,
  `country` VARCHAR(45) NOT NULL ,
  `city` VARCHAR(45) NOT NULL ,
  `phone_number1` VARCHAR(20) NULL DEFAULT NULL ,
  `phone_number2` VARCHAR(20) NULL DEFAULT NULL ,
  `profile_pic` VARCHAR(256) NULL ,
  `last_login` DATETIME NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  `deleted` TINYINT(1) NULL DEFAULT FALSE ,
  `group_id` INT UNSIGNED NOT NULL ,
  `extra1` TEXT NULL ,
  `extra2` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `user_name_UNIQUE` (`username` ASC) ,
  INDEX `fk_users_groups1_idx` (`group_id` ASC) ,
  CONSTRAINT `fk_users_groups1`
    FOREIGN KEY (`group_id` )
    REFERENCES `kosen`.`groups` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kosen`.`events`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosen`.`events` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(256) NOT NULL ,
  `description` LONGTEXT NOT NULL ,
  `picture` VARCHAR(256) NULL ,
  `start_time` DATETIME NOT NULL ,
  `end_time` DATETIME NULL ,
  `country` VARCHAR(45) NULL ,
  `city` VARCHAR(45) NULL ,
  `address` VARCHAR(256) NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `created` DATETIME NOT NULL ,
  `deleted` TINYINT(1) NULL DEFAULT FALSE ,
  `user_id` INT UNSIGNED NOT NULL ,
  `extra1` TEXT NULL ,
  `extra2` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_events_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_events_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `kosen`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kosen`.`photos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosen`.`photos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(256) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `path` VARCHAR(256) NOT NULL ,
  `height` INT NULL ,
  `width` INT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `deleted` TINYINT(1) NULL DEFAULT FALSE ,
  `user_id` INT UNSIGNED NOT NULL ,
  `extra1` TEXT NULL ,
  `extra2` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_photos_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_photos_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `kosen`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kosen`.`videos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosen`.`videos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(256) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `path` VARCHAR(256) NOT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `deleted` TINYINT(1) NULL DEFAULT FALSE ,
  `user_id` INT UNSIGNED NOT NULL ,
  `extra1` TEXT NULL ,
  `extra2` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_videos_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_videos_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `kosen`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kosen`.`posts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosen`.`posts` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(256) NOT NULL ,
  `text` LONGTEXT NOT NULL ,
  `path` VARCHAR(256) NULL ,
  `height` INT NULL ,
  `width` INT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  `deleted` TINYINT(1) NULL DEFAULT FALSE ,
  `user_id` INT UNSIGNED NOT NULL ,
  `extra1` TEXT NULL ,
  `extra2` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_posts_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_posts_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `kosen`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kosen`.`comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosen`.`comments` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `message` VARCHAR(256) NOT NULL ,
  `type` VARCHAR(45) NOT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `deleted` TINYINT(1) NULL DEFAULT FALSE ,
  `type_num` INT UNSIGNED NOT NULL ,
  `user_id` INT UNSIGNED NOT NULL ,
  `extra1` TEXT NULL ,
  `extra2` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_comments_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_comments_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `kosen`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `kosen` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
