/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.16-MariaDB : Database - cms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cms`;

/*Table structure for table `autenticate` */

DROP TABLE IF EXISTS `autenticate`;

CREATE TABLE `autenticate` (
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(10) NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `w_platform` varchar(60) NOT NULL COMMENT 'work platform only  for GCmember',
  PRIMARY KEY (`email`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `autenticate` */

insert  into `autenticate`(`name`,`password`,`email`,`number`,`type`,`status`,`w_platform`) values ('admin','Admin123','admin@yahoo.com','8975203693','admin',1,''),('kishore','Kishore123','kishorepepalla07@gmail.com','9695939291','student',1,''),('rohith','Rohith123','rohith@hotmail.com','9695929391','parent',1,''),('saiteja','Teja@123','saitejamalaga@gmail.com','8977605407','grievancecellmember',1,'Internet');

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(60) NOT NULL,
  `comp_type` varchar(60) NOT NULL,
  `comp_title` varchar(200) NOT NULL,
  `comp_desc` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'open',
  `gcm_name` varchar(60) NOT NULL,
  `gcm_comment` varchar(300) NOT NULL,
  `create_date` datetime NOT NULL,
  `assigned_date` datetime NOT NULL,
  `close_date` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='complaints table';

/*Data for the table `complaints` */

insert  into `complaints`(`cid`,`cust_name`,`comp_type`,`comp_title`,`comp_desc`,`status`,`gcm_name`,`gcm_comment`,`create_date`,`assigned_date`,`close_date`) values (8,'kishore','Software Installation/ Upgradation','Android Studio ','Android Studio is not working In Lab9','working','saiteja','successfully completed','2018-08-30 11:47:12','2018-08-30 11:51:26','0000-00-00 00:00:00'),(9,'kishore','Network / LAN / Internet Probelm','Lan Problem','no Internet Connection In College','Assigned','vamsi','','2018-08-30 12:00:11','2018-08-30 12:01:26','0000-00-00 00:00:00'),(10,'rohith','Network / LAN / Internet Probelm','network connection problem','I am unable to connect for the net ','closed','saiteja','completed','2018-11-05 15:35:14','2018-11-05 16:15:45','2018-11-05 16:21:04'),(11,'rohith','Hardware/ Replacement','I cpu problem','my cpu is not working ....','Assigned','saiteja','','2018-11-05 15:37:13','2018-11-05 16:30:35','0000-00-00 00:00:00'),(12,'rohith','Hardware/ Replacement','computers are not working','In lab 4 some computers are not working','Assigned','saiteja','','2019-07-02 22:04:19','2019-07-02 22:05:49','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
