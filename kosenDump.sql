-- MySQL dump 10.13  Distrib 5.5.32, for Win32 (x86)
--
-- Host: localhost    Database: kosen
-- ------------------------------------------------------
-- Server version	5.5.32

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
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,118),(2,1,NULL,NULL,'Comments',2,13),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(8,1,NULL,NULL,'Events',14,25),(9,8,NULL,NULL,'index',15,16),(10,8,NULL,NULL,'view',17,18),(11,8,NULL,NULL,'add',19,20),(12,8,NULL,NULL,'edit',21,22),(13,8,NULL,NULL,'delete',23,24),(14,1,NULL,NULL,'Groups',26,37),(15,14,NULL,NULL,'index',27,28),(16,14,NULL,NULL,'view',29,30),(17,14,NULL,NULL,'add',31,32),(18,14,NULL,NULL,'edit',33,34),(19,14,NULL,NULL,'delete',35,36),(20,1,NULL,NULL,'Pages',38,41),(21,20,NULL,NULL,'display',39,40),(22,1,NULL,NULL,'Photos',42,53),(23,22,NULL,NULL,'index',43,44),(24,22,NULL,NULL,'view',45,46),(25,22,NULL,NULL,'add',47,48),(26,22,NULL,NULL,'edit',49,50),(27,22,NULL,NULL,'delete',51,52),(28,1,NULL,NULL,'Posts',54,65),(29,28,NULL,NULL,'index',55,56),(30,28,NULL,NULL,'view',57,58),(31,28,NULL,NULL,'add',59,60),(32,28,NULL,NULL,'edit',61,62),(33,28,NULL,NULL,'delete',63,64),(34,1,NULL,NULL,'Users',66,95),(35,34,NULL,NULL,'login',67,68),(36,34,NULL,NULL,'logout',69,70),(37,34,NULL,NULL,'index',71,72),(38,34,NULL,NULL,'view',73,74),(39,34,NULL,NULL,'add',75,76),(40,34,NULL,NULL,'edit',77,78),(41,34,NULL,NULL,'delete',79,80),(42,1,NULL,NULL,'Videos',96,107),(43,42,NULL,NULL,'index',97,98),(44,42,NULL,NULL,'view',99,100),(45,42,NULL,NULL,'add',101,102),(46,42,NULL,NULL,'edit',103,104),(47,42,NULL,NULL,'delete',105,106),(48,1,NULL,NULL,'AclExtras',108,109),(49,1,NULL,NULL,'DebugKit',110,117),(50,49,NULL,NULL,'ToolbarAccess',111,116),(51,50,NULL,NULL,'history_state',112,113),(52,50,NULL,NULL,'sql_explain',114,115),(53,34,NULL,NULL,'initDB',81,82),(54,34,NULL,NULL,'hello',83,84),(55,34,NULL,NULL,'register',85,86),(56,34,NULL,NULL,'home',87,88),(57,34,NULL,NULL,'memberList',89,90),(58,34,NULL,NULL,'memberlist',91,92),(59,34,NULL,NULL,'member_list',93,94);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,8),(2,NULL,'Group',2,NULL,9,12),(3,NULL,'Group',3,NULL,13,24),(4,1,'User',1,NULL,2,3),(5,2,'User',2,NULL,10,11),(6,3,'User',3,NULL,14,15),(7,3,'User',4,NULL,16,17),(8,3,'User',5,NULL,18,19),(9,1,'User',6,NULL,4,5),(10,1,'User',7,NULL,6,7),(11,3,'User',10,NULL,20,21),(12,3,'User',11,NULL,22,23);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(2,2,1,'-1','-1','-1','-1'),(3,2,28,'1','1','1','1'),(4,3,1,'-1','-1','-1','-1'),(5,3,31,'1','1','1','1'),(6,3,32,'1','1','1','1'),(7,2,36,'1','1','1','1'),(8,3,36,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(256) NOT NULL,
  `type` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `type_num` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text,
  `extra2` text,
  PRIMARY KEY (`id`),
  KEY `fk_comments_users1_idx` (`user_id`),
  CONSTRAINT `fk_comments_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` longtext NOT NULL,
  `picture` varchar(256) DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text,
  `extra2` text,
  PRIMARY KEY (`id`),
  KEY `fk_events_users1_idx` (`user_id`),
  CONSTRAINT `fk_events_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `extra1` text,
  `extra2` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_name_UNIQUE` (`group_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','2013-08-21 23:53:49','2013-08-21 23:53:49',0,'',''),(2,'leader','2013-08-21 23:54:04','2013-08-21 23:54:04',0,'',''),(3,'user','2013-08-21 23:54:14','2013-08-21 23:54:14',0,'','');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` text,
  `path` varchar(256) NOT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text,
  `extra2` text,
  PRIMARY KEY (`id`),
  KEY `fk_photos_users1_idx` (`user_id`),
  CONSTRAINT `fk_photos_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `text` longtext NOT NULL,
  `path` varchar(256) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text,
  `extra2` text,
  PRIMARY KEY (`id`),
  KEY `fk_posts_users1_idx` (`user_id`),
  CONSTRAINT `fk_posts_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'','a','',NULL,NULL,'2013-08-23 11:50:11','2013-08-23 11:50:11',0,1,'',''),(2,'aas','asd','',NULL,NULL,'2013-08-23 11:50:43','2013-08-23 11:50:43',0,1,'','');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthday` date NOT NULL,
  `status` varchar(256) DEFAULT NULL,
  `major` varchar(256) NOT NULL,
  `kosen` varchar(256) NOT NULL,
  `fb_acc` varchar(45) DEFAULT NULL,
  `email1` varchar(45) NOT NULL,
  `email2` varchar(45) DEFAULT NULL,
  `high_school` varchar(256) DEFAULT NULL,
  `university1` varchar(256) DEFAULT NULL,
  `university2` varchar(256) DEFAULT NULL,
  `university3` varchar(256) DEFAULT NULL,
  `work1` varchar(45) DEFAULT NULL,
  `work2` varchar(45) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `country` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `phone_number1` varchar(20) DEFAULT NULL,
  `phone_number2` varchar(20) DEFAULT NULL,
  `profile_pic` varchar(256) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `group_id` int(10) unsigned NOT NULL,
  `extra1` text,
  `extra2` text,
  `kosen_year` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name_UNIQUE` (`username`),
  KEY `fk_users_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'amiraa','7fa2166069a0f9b4246118187c3c8a30653129cc','amiraa','amiraa','M','2013-08-21','','it','toba','','amiraa@mail','','','','','','','','','japan','tokyo','','','','2013-08-21 23:54:00','2013-08-21 23:55:00','2013-08-21 23:55:00',0,1,'','',0),(2,'sura','4fdaf1808221d39e56b4043da8da14375038bb9d','sura','sura','M','2013-08-21','','it','aomori','','sura@mail','','','','','','','','','japan','tokyo','','','','2013-08-21 23:55:00','2013-08-21 23:55:44','2013-08-21 23:55:44',0,2,'','',0),(3,'suga','32facf752045223b61aed98b5f703f8602721f39','suga','suga','F','2013-08-21','','ng','ng','','suga@mail','','','','','','','','','ng','ng','','','','2013-08-21 23:55:00','2013-08-21 23:56:28','2013-08-21 23:56:28',0,3,'','',0),(4,'aaa','59522ec466cfa481839d92249145a79745639ac6','aaa','aaa','ï','2013-08-23','','aaa','aaa','','aaa','','','','','','','','','aaa','aaa','','','',NULL,'2013-08-23 11:47:22','2013-08-23 11:47:22',0,3,'','',0),(5,'sdfg','b9062c887bd5dfc5b160abf8bb511598d1a25613','dg','dsfg','d','2013-08-23','','sdf','sdfg','','dsfg','','','','','','','','','dfg','sdfg','','',NULL,NULL,'2013-08-23 12:20:58','2013-08-23 12:20:58',0,3,'','',0),(6,'aaaa','3b58cd530ff84df2734855ccd7bb3848019f268b','aaaa','aaaa','B','2001-08-23','aaaa','aaaa','aaaa','','aaaa','','','','','','','','','aaaa','aaaa','','','','2013-08-23 18:50:00','2013-08-23 18:52:09','2013-08-23 18:52:09',0,1,'','',2200),(7,'Zebra','3f3677f59e0414a12fa55d8b29d90a5ad9f57f76','ÐÐ¼Ð°Ñ€Ð°Ð°','ÐÐ¼Ð¸Ñ€Ð°Ð°','M','2013-08-23','ÑÐ¸Ð½Ð³Ð»Ñ','Ð¸Ñ‚','Ð¢Ð¾Ð±Ð°','Ñ…Ð¸ Ð±Ð°Ð±Ñ','Ð°Ð¼Ð¸Ñ€Ð°','Ð°Ð¼Ð¸Ñ€Ð°','5','Ð´ÑÐ½Ñ‚ÑÑƒÑƒ','','','','','ÐºÐ¾Ð´Ð°Ð¸Ñ€Ð°hrhrhr','ÑƒÐ°Ð¿Ð°Ð½','Ñ‚Ð¾ÐºÑŽÐ¾','9089890809','','','2013-08-23 18:59:00','2013-08-23 18:56:25','2013-08-23 19:00:20',0,1,'','',2009),(10,'amiraa1','7fa2166069a0f9b4246118187c3c8a30653129cc','a','a','a','2013-08-23','','a','a','','a','a','','','','','','','','a','a','','',NULL,NULL,'2013-08-23 19:24:59','2013-08-23 19:24:59',0,3,'','',2009),(11,'kk','734b03a9bc80e5f14c0241b5d6c983355e740858','kk','kk','M','2013-08-23','','asdasd','a','','amiraa@yahoo.com','','','','','','','','','a','a','','',NULL,NULL,'2013-08-23 20:14:12','2013-08-23 20:14:12',0,3,'','',2009);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` text,
  `path` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text,
  `extra2` text,
  PRIMARY KEY (`id`),
  KEY `fk_videos_users1_idx` (`user_id`),
  CONSTRAINT `fk_videos_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-07 21:32:33
