-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: apps_demo
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

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
-- Table structure for table `t_demo_acl_group`
--

DROP TABLE IF EXISTS `t_demo_acl_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_demo_acl_group` (
  `group_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_com_guest` smallint(5) unsigned NOT NULL DEFAULT '0',
  `group_com_user` smallint(5) unsigned NOT NULL DEFAULT '0',
  `group_com_user_group` smallint(5) unsigned NOT NULL DEFAULT '0',
  `_rec_status` varchar(45) NOT NULL DEFAULT 'SHOW',
  `_rec_created_on` datetime DEFAULT NULL,
  `_rec_created_by` varchar(45) DEFAULT NULL,
  `_rec_modified_on` datetime DEFAULT NULL,
  `_rec_modified_by` varchar(45) DEFAULT NULL,
  `_rec_deleted_on` datetime DEFAULT NULL,
  `_rec_deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_demo_acl_group`
--

LOCK TABLES `t_demo_acl_group` WRITE;
/*!40000 ALTER TABLE `t_demo_acl_group` DISABLE KEYS */;
INSERT INTO `t_demo_acl_group` VALUES (1,3,3,3,'SHOW','2018-08-27 17:13:57','55','2018-08-27 17:13:57','55',NULL,NULL),(2,3,3,3,'SHOW','2018-08-27 17:15:11','55','2018-08-27 17:15:11','55',NULL,NULL),(3,3,3,3,'SHOW','2018-08-27 17:15:35','55','2018-08-27 17:15:35','55',NULL,NULL),(4,3,3,3,'SHOW','2018-08-27 17:20:34','55','2018-08-27 17:20:34','55',NULL,NULL),(5,1,1,1,'SHOW','2018-08-27 17:21:53','55','2018-08-28 15:18:55','55',NULL,NULL),(6,15,15,15,'SHOW','2018-08-28 09:54:28','55','2019-07-09 16:28:36','55',NULL,NULL),(7,1,1,1,'DELETED','2018-08-28 11:50:48','55','2018-08-28 11:51:04','55','2019-04-12 11:27:14','55'),(8,0,3,3,'DELETED','2019-04-11 15:11:47','55','2019-04-11 15:12:01','55','2019-04-12 11:27:24','55'),(9,0,9,9,'DELETED','2019-07-09 16:33:25','55','2019-07-09 16:34:11','55','2019-07-10 09:40:54','55');
/*!40000 ALTER TABLE `t_demo_acl_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_demo_acl_group_lbl`
--

DROP TABLE IF EXISTS `t_demo_acl_group_lbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_demo_acl_group_lbl` (
  `kwd_code` int(10) unsigned NOT NULL DEFAULT '0',
  `kwd_lang` varchar(45) NOT NULL DEFAULT '',
  `kwd_value` varchar(1000) NOT NULL DEFAULT '',
  `_rec_status` varchar(45) NOT NULL DEFAULT 'SHOW',
  `_rec_created_by` varchar(45) DEFAULT NULL,
  `_rec_created_on` datetime DEFAULT NULL,
  `_rec_modified_by` varchar(45) DEFAULT NULL,
  `_rec_modified_on` datetime DEFAULT NULL,
  `_rec_deleted_by` varchar(45) DEFAULT NULL,
  `_rec_deleted_on` datetime DEFAULT NULL,
  PRIMARY KEY (`kwd_code`,`kwd_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_demo_acl_group_lbl`
--

LOCK TABLES `t_demo_acl_group_lbl` WRITE;
/*!40000 ALTER TABLE `t_demo_acl_group_lbl` DISABLE KEYS */;
INSERT INTO `t_demo_acl_group_lbl` VALUES (5,'bm','Read Only','SHOW','55','2018-08-28 15:18:55','55','2018-08-28 15:18:55',NULL,NULL),(5,'en','Read Only','SHOW','55','2018-08-28 15:18:55','55','2018-08-28 15:18:55',NULL,NULL),(6,'bm','Pentadbir','SHOW','55','2019-07-09 16:28:36','55','2019-07-09 16:28:36',NULL,NULL),(6,'en','Admin','SHOW','55','2019-07-09 16:28:36','55','2019-07-09 16:28:36',NULL,NULL),(7,'bm','Cubaan 22','SHOW','55','2018-08-28 11:51:04','55','2018-08-28 11:51:04',NULL,NULL),(7,'en','Test 22','SHOW','55','2018-08-28 11:51:04','55','2018-08-28 11:51:04',NULL,NULL),(8,'bm','cuba','SHOW','55','2019-04-11 15:12:02','55','2019-04-11 15:12:02',NULL,NULL),(8,'en','test','SHOW','55','2019-04-11 15:12:02','55','2019-04-11 15:12:02',NULL,NULL),(9,'bm','test','SHOW','55','2019-07-09 16:34:11','55','2019-07-09 16:34:11',NULL,NULL),(9,'en','test','SHOW','55','2019-07-09 16:34:11','55','2019-07-09 16:34:11',NULL,NULL);
/*!40000 ALTER TABLE `t_demo_acl_group_lbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_demo_acl_user_group`
--

DROP TABLE IF EXISTS `t_demo_acl_user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_demo_acl_user_group` (
  `usr_id` varchar(50) NOT NULL DEFAULT '',
  `group_id` int(10) unsigned DEFAULT NULL,
  `usr_news_notification` smallint(5) unsigned NOT NULL DEFAULT '0',
  `_rec_status` varchar(45) NOT NULL DEFAULT 'SHOW',
  `_rec_created_on` datetime DEFAULT NULL,
  `_rec_created_by` varchar(45) DEFAULT NULL,
  `_rec_modified_on` datetime DEFAULT NULL,
  `_rec_modified_by` varchar(45) DEFAULT NULL,
  `_rec_deleted_on` datetime DEFAULT NULL,
  `_rec_deleted_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_demo_acl_user_group`
--

LOCK TABLES `t_demo_acl_user_group` WRITE;
/*!40000 ALTER TABLE `t_demo_acl_user_group` DISABLE KEYS */;
INSERT INTO `t_demo_acl_user_group` VALUES ('55',6,0,'SHOW','2018-08-28 09:41:46','55','2019-07-09 16:34:32','55',NULL,NULL),('57',5,0,'SHOW','2018-08-28 15:19:51','55','2019-07-15 12:45:19','55',NULL,NULL);
/*!40000 ALTER TABLE `t_demo_acl_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_demo_guest`
--

DROP TABLE IF EXISTS `t_demo_guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_demo_guest` (
  `guest_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `guest_full_name` varchar(100) NOT NULL DEFAULT '',
  `guest_email` varchar(45) NOT NULL DEFAULT '',
  `guest_remark` varchar(255) NOT NULL DEFAULT '',
  `guest_mobile_no` varchar(15) NOT NULL DEFAULT '',
  `_rec_status` varchar(45) NOT NULL DEFAULT 'SHOW',
  `_rec_created_by` varchar(45) DEFAULT NULL,
  `_rec_created_on` datetime DEFAULT NULL,
  `_rec_modified_by` varchar(45) DEFAULT NULL,
  `_rec_modified_on` datetime DEFAULT NULL,
  `_rec_deleted_by` varchar(45) DEFAULT NULL,
  `_rec_deleted_on` datetime DEFAULT NULL,
  PRIMARY KEY (`guest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_demo_guest`
--

LOCK TABLES `t_demo_guest` WRITE;
/*!40000 ALTER TABLE `t_demo_guest` DISABLE KEYS */;
INSERT INTO `t_demo_guest` VALUES (7,'Guest One','guest_1@mail.com','','','SHOW','55','2018-07-31 10:59:20','ANONYMOUS','2018-08-28 17:18:29',NULL,NULL),(8,'abc','abc@mail.com','','','SHOW','ANONYMOUS','2018-08-28 16:38:29','ANONYMOUS','2018-08-28 16:38:29',NULL,NULL);
/*!40000 ALTER TABLE `t_demo_guest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_demo_log`
--

DROP TABLE IF EXISTS `t_demo_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_demo_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ag_id` varchar(11) DEFAULT NULL,
  `ad_id` varchar(11) DEFAULT NULL,
  `usr_id` varchar(50) DEFAULT NULL,
  `usr_full_name` varchar(100) DEFAULT NULL,
  `log_ip` varchar(30) DEFAULT NULL,
  `log_module` varchar(50) DEFAULT NULL,
  `log_item` varchar(255) DEFAULT NULL,
  `log_item_old` varchar(255) DEFAULT NULL,
  `log_event` varchar(30) DEFAULT NULL COMMENT 'INSERT, UPDATE, DELETE',
  `log_action` varchar(255) DEFAULT NULL COMMENT 'UPDATE_IC, UPDATE_COUNTRY, etc',
  `log_id_1` varchar(45) DEFAULT NULL,
  `log_id_1_key` varchar(255) DEFAULT NULL,
  `log_id_2` varchar(45) DEFAULT NULL,
  `log_id_2_key` varchar(255) DEFAULT NULL,
  `log_id_3` varchar(45) DEFAULT NULL,
  `log_id_3_key` varchar(255) DEFAULT NULL,
  `log_id_4` varchar(45) DEFAULT NULL,
  `log_id_4_key` varchar(255) DEFAULT NULL,
  `log_id_5` varchar(45) DEFAULT NULL,
  `log_id_5_key` varchar(255) DEFAULT NULL,
  `log_id_6` varchar(45) DEFAULT NULL,
  `log_id_6_key` varchar(255) DEFAULT NULL,
  `log_id_7` varchar(45) DEFAULT NULL,
  `log_id_7_key` varchar(255) DEFAULT NULL,
  `_rec_status` varchar(20) DEFAULT 'SHOW',
  `_rec_created_on` datetime DEFAULT NULL,
  `_rec_created_by` varchar(50) DEFAULT NULL,
  `_rec_modified_on` datetime DEFAULT NULL,
  `_rec_modified_by` varchar(50) DEFAULT NULL,
  `_rec_deleted_on` datetime DEFAULT NULL,
  `_rec_deleted_by` varchar(50) DEFAULT NULL,
  `_rec_offline` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `Index_2` (`log_module`,`log_event`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_demo_log`
--

LOCK TABLES `t_demo_log` WRITE;
/*!40000 ALTER TABLE `t_demo_log` DISABLE KEYS */;
INSERT INTO `t_demo_log` VALUES (1,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'INSERT','INSERT_USER','56','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-27 14:47:53','55','2018-08-27 14:47:53','55',NULL,NULL,NULL),(2,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','56','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-27 15:36:57','55','2018-08-27 15:36:57','55',NULL,NULL,NULL),(3,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','56','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-27 15:39:38','55','2018-08-27 15:39:38','55',NULL,NULL,NULL),(4,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','56','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-27 15:43:01','55','2018-08-27 15:43:01','55',NULL,NULL,NULL),(5,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'DELETE','DELETE_USER','56','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-27 15:54:17','55','2018-08-27 15:54:17','55',NULL,NULL,NULL),(6,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-28 09:41:32','55','2018-08-28 09:41:32','55',NULL,NULL,NULL),(7,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-28 09:41:46','55','2018-08-28 09:41:46','55',NULL,NULL,NULL),(8,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-28 09:55:09','55','2018-08-28 09:55:09','55',NULL,NULL,NULL),(9,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-28 10:31:25','55','2018-08-28 10:31:25','55',NULL,NULL,NULL),(10,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-28 13:02:30','55','2018-08-28 13:02:30','55',NULL,NULL,NULL),(11,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-28 15:14:52','55','2018-08-28 15:14:52','55',NULL,NULL,NULL),(12,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'INSERT','INSERT_USER','57','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2018-08-28 15:19:51','55','2018-08-28 15:19:51','55',NULL,NULL,NULL),(13,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-04-11 12:09:48','55','2019-04-11 12:09:48','55',NULL,NULL,NULL),(14,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'INSERT','INSERT_USER','58','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-04-11 15:22:49','55','2019-04-11 15:22:49','55',NULL,NULL,NULL),(15,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'DELETE','DELETE_USER','58','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-04-11 15:24:24','55','2019-04-11 15:24:24','55',NULL,NULL,NULL),(16,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'INSERT','INSERT_USER','59','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-04-11 15:25:46','55','2019-04-11 15:25:46','55',NULL,NULL,NULL),(17,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','59','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-04-11 15:26:10','55','2019-04-11 15:26:10','55',NULL,NULL,NULL),(18,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-04-12 11:26:41','55','2019-04-12 11:26:41','55',NULL,NULL,NULL),(19,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-05-02 13:02:06','55','2019-05-02 13:02:06','55',NULL,NULL,NULL),(20,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','55','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-07-09 16:34:32','55','2019-07-09 16:34:32','55',NULL,NULL,NULL),(21,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'INSERT','INSERT_USER','60','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-07-10 10:11:51','55','2019-07-10 10:11:51','55',NULL,NULL,NULL),(22,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'INSERT','INSERT_USER','61','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-07-10 10:48:32','55','2019-07-10 10:48:32','55',NULL,NULL,NULL),(23,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','61','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-07-10 10:54:53','55','2019-07-10 10:54:53','55',NULL,NULL,NULL),(24,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','57','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-07-10 10:56:14','55','2019-07-10 10:56:14','55',NULL,NULL,NULL),(25,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','57','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-07-15 12:45:08','55','2019-07-15 12:45:08','55',NULL,NULL,NULL),(26,NULL,NULL,'55','Admin','::1','demo',NULL,NULL,'UPDATE','UPDATE_USER','57','USER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SHOW','2019-07-15 12:45:19','55','2019-07-15 12:45:19','55',NULL,NULL,NULL);
/*!40000 ALTER TABLE `t_demo_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_demo_project`
--

DROP TABLE IF EXISTS `t_demo_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_demo_project` (
  `prj_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prj_name` varchar(250) NOT NULL DEFAULT '',
  `prj_code` varchar(45) NOT NULL DEFAULT '',
  `prj_manager` varchar(200) DEFAULT NULL,
  `prj_ba` varchar(45) DEFAULT NULL,
  `prj_tl` varchar(45) DEFAULT NULL,
  `_rec_created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `_rec_created_by` varchar(45) NOT NULL DEFAULT '',
  `_rec_modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `_rec_modified_by` varchar(45) NOT NULL DEFAULT '',
  `_rec_deleted_on` datetime DEFAULT NULL,
  `_rec_deleted_by` varchar(45) DEFAULT NULL,
  `_rec_status` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`prj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_demo_project`
--

LOCK TABLES `t_demo_project` WRITE;
/*!40000 ALTER TABLE `t_demo_project` DISABLE KEYS */;
INSERT INTO `t_demo_project` VALUES (1,'Project A','Code-1234',NULL,NULL,NULL,'0000-00-00 00:00:00','','0000-00-00 00:00:00','',NULL,NULL,'SHOW'),(2,'Project BBBB','Code-9090',NULL,NULL,NULL,'0000-00-00 00:00:00','','0000-00-00 00:00:00','',NULL,NULL,'SHOW');
/*!40000 ALTER TABLE `t_demo_project` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-20 12:09:59
