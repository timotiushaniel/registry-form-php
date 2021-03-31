DROP DATABASE IF EXISTS MyDatabase;
CREATE DATABASE IF NOT EXISTS MyDatabase;
USE MyDatabase;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

CREATE TABLE IF NOT EXISTS `user` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`fullname` varchar(50) NOT NULL,
  	`email` varchar(100) NOT NULL,
    `address` varchar(100) NOT NULL,
    `phone_number` varchar(15) NOT NULL,
    `department` varchar(40) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;