CREATE DATABASE  IF NOT EXISTS `entities-labs-coop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `entities-labs-coop`;
-- MySQL dump 10.13  Distrib 5.6.27, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: entities-labs-coop
-- ------------------------------------------------------
-- Server version	5.6.27-0ubuntu1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `entities`
--

DROP TABLE IF EXISTS `entities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entities` (
  `entity-id` varchar(32) NOT NULL DEFAULT '',
  `peer-id` varchar(32) NOT NULL DEFAULT '',
  `import-id` varchar(32) NOT NULL DEFAULT '',
  `type` enum('Company','Organisation','Individual','Unknown') NOT NULL DEFAULT 'Unknown',
  `avatar` varchar(32) NOT NULL DEFAULT 'blank.gif',
  `title` varchar(45) DEFAULT '',
  `first-name` varchar(100) DEFAULT '',
  `middle-name` varchar(100) DEFAULT '',
  `last-name` varchar(100) DEFAULT '',
  `suffix` varchar(45) DEFAULT '',
  `company` varchar(200) DEFAULT '',
  `department` varchar(100) DEFAULT '',
  `job-title` varchar(100) DEFAULT '',
  `instant-messaging-one-id` varchar(32) DEFAULT '',
  `instant-messaging-two-id` varchar(32) DEFAULT '',
  `business-address-id` varchar(32) DEFAULT '',
  `home-address-id` varchar(32) DEFAULT '',
  `other-address-id` varchar(32) DEFAULT '',
  `assistant-phone-id` varchar(32) DEFAULT '',
  `business-fax-id` varchar(32) DEFAULT '',
  `business-phone-one-id` varchar(32) DEFAULT '',
  `business-phone-two-id` varchar(32) DEFAULT '',
  `callback-id` varchar(32) DEFAULT '',
  `car-phone-id` varchar(32) DEFAULT '',
  `business-switch-id` varchar(32) DEFAULT '',
  `home-fax-id` varchar(32) DEFAULT '',
  `home-phone-one-id` varchar(32) DEFAULT '',
  `home-phone-two-id` varchar(32) DEFAULT '',
  `isdn-id` varchar(32) DEFAULT '',
  `mobile-phone-id` varchar(32) DEFAULT '',
  `other-phone-id` varchar(32) DEFAULT '',
  `other-fax-id` varchar(32) DEFAULT '',
  `pager-id` varchar(32) DEFAULT '',
  `primary-phone-id` varchar(32) DEFAULT '',
  `radio-phone-id` varchar(32) DEFAULT '',
  `tty-tdd-phone-id` varchar(32) DEFAULT '',
  `telex` varchar(64) DEFAULT '',
  `account` varchar(64) DEFAULT '',
  `anniversary` int(12) DEFAULT '0',
  `assistants-name` varchar(150) DEFAULT '',
  `billing-information` tinytext,
  `birthday` int(12) DEFAULT '0',
  `children` varchar(250) DEFAULT '',
  `email-address-one-id` varchar(32) DEFAULT '',
  `email-address-two-id` varchar(32) DEFAULT '',
  `email-address-three-id` varchar(32) DEFAULT '',
  `gender` enum('Male','Female','Transexual','Other','Unknown') DEFAULT 'Unknown',
  `government-id-number` varchar(35) DEFAULT '',
  `hobby` varchar(150) DEFAULT '',
  `intials` varchar(8) DEFAULT '',
  `languages` varchar(250) DEFAULT '',
  `country-id` varchar(32) DEFAULT '',
  `place-id` varchar(32) DEFAULT '',
  `milage` int(11) DEFAULT '0',
  `notes` tinytext,
  `office-country-id` varchar(32) DEFAULT '',
  `office-place-id` varchar(32) DEFAULT '',
  `business-id-number` varchar(45) DEFAULT '',
  `profession-id` varchar(32) DEFAULT '',
  `refereed-by` varchar(100) DEFAULT '',
  `spouse` varchar(100) DEFAULT '',
  `web-page-primary` varchar(190) DEFAULT '',
  `web-page-blog` varchar(190) DEFAULT '',
  `web-page-facebook` varchar(190) DEFAULT '',
  `web-page-twitter` varchar(190) DEFAULT '',
  `web-page-linkedin` varchar(190) DEFAULT '',
  `web-page-googleplus` varchar(190) DEFAULT '',
  `web-page-other` varchar(190) DEFAULT '',
  `created` int(12) NOT NULL DEFAULT '0',
  `updated` int(12) NOT NULL DEFAULT '0',
  `offlined` int(12) NOT NULL DEFAULT '0',
  `view-protected` enum('Yes','No') NOT NULL DEFAULT 'No',
  `view-password` varchar(32) NOT NULL DEFAULT '',
  `edit-protected` enum('Yes','No') NOT NULL DEFAULT 'No',
  `edit-password` varchar(32) NOT NULL DEFAULT '',
  `hash-referer` varchar(10) NOT NULL DEFAULT '',
  `edits` int(8) NOT NULL DEFAULT '0',
  `views` int(8) NOT NULL DEFAULT '0',
  `vcfs` int(8) NOT NULL DEFAULT '0',
  `lists` int(8) NOT NULL DEFAULT '0',
  `data` longtext,
  PRIMARY KEY (`entity-id`),
  KEY `fk_entities_1_idx` (`business-address-id`,`home-address-id`),
  KEY `SEARCH` (`first-name`,`middle-name`,`last-name`,`company`,`business-phone-one-id`,`business-switch-id`,`home-phone-one-id`,`mobile-phone-id`,`primary-phone-id`,`account`,`email-address-one-id`,`gender`,`intials`,`type`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-30 18:15:07