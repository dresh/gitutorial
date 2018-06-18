-- MySQL dump 10.16  Distrib 10.2.14-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: drupaldb
-- ------------------------------------------------------
-- Server version	10.2.14-MariaDB

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
-- Table structure for table `flower`
--

DROP TABLE IF EXISTS `flower`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flower` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `color` varchar(15) NOT NULL,
  `qty` int(10) unsigned DEFAULT NULL,
  `flag` tinyint(1) DEFAULT 1,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flower`
--

LOCK TABLES `flower` WRITE;
/*!40000 ALTER TABLE `flower` DISABLE KEYS */;
INSERT INTO `flower` VALUES (1,'Rose','White',30,0,10),(2,'Rose','Red',30,0,10),(3,'Rose','Yellow',30,0,10),(4,'Lilly','white',30,0,10),(5,'Rose','Purple',30,0,10),(10,'Rose','Green',40,1,10),(11,'Rose','White',30,1,10),(12,'Rose','brown',30,0,10),(13,'Rose ','Orange',30,1,10),(14,'Lilly','Blue',30,1,10),(15,'Lilly','White',50,1,5);
/*!40000 ALTER TABLE `flower` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bouquet`
--

DROP TABLE IF EXISTS `bouquet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bouquet` (
  `bid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `uname` varchar(30) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `flag` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`bid`),
  UNIQUE KEY `bid` (`bid`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bouquet`
--

LOCK TABLES `bouquet` WRITE;
/*!40000 ALTER TABLE `bouquet` DISABLE KEYS */;
INSERT INTO `bouquet` VALUES (1,'B2','B2','Vijaya nagara',9844,'2018-06-15 05:19:24',0),(2,'B1','B1','Vijaya nagara',9844633501,'2018-06-15 08:19:29',0),(3,'B3','B3','Vijaya nagara',9844633502,'2018-06-14 06:55:12',1),(4,'B4','B4','Vijaya nagara',9844633500,'2018-06-14 06:55:12',1),(5,'B9','B9','Vijaya nagara',9844633505,'2018-06-14 06:55:12',1),(6,'B2','B2','Vijaya nagara',99999,'2018-06-12 09:12:37',1),(7,'B2','B2','Vijaya nagara',0,'2018-06-12 09:26:25',1),(8,'B2','B2','Vijaya nagara',9880,'2018-06-12 10:05:29',1),(9,'B2','B2','Vijaya nagara',9844633504,'2018-06-12 10:11:23',1),(10,'b6','b6','Vijaya nagara',987,'2018-06-12 10:23:12',1),(11,'B2','B2','Vijaya nagara',9844633507,'2018-06-12 10:29:53',1),(12,'B2','B2','Vijaya nagara',1,'2018-06-12 10:38:55',1),(13,'B2','B2','Vijaya nagara',2,'2018-06-12 10:40:59',1),(14,'B2','B2','Vijaya nagara',3,'2018-06-12 10:43:49',1),(15,'Bouq1','Bouq1','Vijaya nagara',988888,'2018-06-12 13:00:23',1),(16,'Bouq1','Bouq1','Vijaya nagara',9876,'2018-06-12 13:08:00',1),(17,'B2','B2','Vijaya nagara',123,'2018-06-12 13:40:08',1),(19,'B2','B2','Vijaya nagara',12309,'2018-06-13 11:32:16',1),(20,'BouqJohn','BouqJohn','Bengaluru',9844555555,'2018-06-15 07:52:57',1),(21,'BouqJohn','BouqJohn','Bengaluru',984455555,'2018-06-15 07:56:53',1);
/*!40000 ALTER TABLE `bouquet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bouquet_flower`
--

DROP TABLE IF EXISTS `bouquet_flower`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bouquet_flower` (
  `bflid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bid` bigint(20) unsigned NOT NULL,
  `id` bigint(20) unsigned NOT NULL,
  `qty` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`bflid`),
  KEY `id` (`id`),
  KEY `bid` (`bid`),
  CONSTRAINT `bouquet_flower_ibfk_1` FOREIGN KEY (`id`) REFERENCES `flower` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bouquet_flower`
--

LOCK TABLES `bouquet_flower` WRITE;
/*!40000 ALTER TABLE `bouquet_flower` DISABLE KEYS */;
INSERT INTO `bouquet_flower` VALUES (1,58,13,1),(2,1,1,10),(3,2,14,10),(4,14,11,12),(5,3,1,1),(6,3,13,1),(7,3,13,1),(8,3,11,1),(9,3,11,1),(10,3,11,1),(11,3,11,1),(12,3,10,12),(13,3,2,1),(14,3,14,12),(15,3,3,3),(16,1,1,1),(17,4,4,4),(18,1,1,1),(19,1,1,1),(20,1,1,1),(21,1,1,1),(22,5,5,5),(23,1,1,1),(24,1,1,1),(25,1,1,1),(26,1,1,1),(27,3,3,3),(28,1,1,1),(29,1,1,1),(30,4,13,13),(31,2,1,1),(32,2,12,12),(33,2,13,12),(34,2,1,12),(35,2,13,1),(36,1,13,10),(37,1,12,12),(38,1,2,10),(39,1,13,1),(40,1,14,12),(41,1,2,1),(42,1,13,12),(43,1,13,1),(44,1,13,1),(45,1,13,12),(46,1,14,1),(47,1,13,1),(48,1,10,12),(49,1,13,1),(50,1,5,1),(51,1,11,12),(52,1,13,1),(53,1,1,9),(54,1,10,12),(55,1,13,3),(56,1,12,6),(57,1,14,9),(58,1,14,1),(59,1,11,2),(60,1,11,12),(61,1,13,1),(62,1,10,1),(63,1,14,3),(64,1,3,12),(65,1,2,1),(66,1,14,1),(67,1,13,3),(68,1,14,30),(69,1,14,30),(70,1,14,30),(71,1,14,30),(72,1,14,30),(73,1,14,30),(74,1,14,30),(75,1,14,25),(76,1,14,25),(77,1,14,20),(78,1,14,20),(79,1,14,2),(80,1,12,1),(81,1,14,30),(82,1,13,1),(83,1,10,5),(84,1,10,5),(85,1,10,1),(86,1,10,4),(87,1,10,5),(88,1,10,5),(89,1,11,5),(90,1,1,10),(91,1,1,10),(92,1,1,10),(93,1,2,10),(94,1,2,10),(95,1,4,10),(96,1,3,20),(97,1,4,20),(98,1,5,20),(99,21,15,20);
/*!40000 ALTER TABLE `bouquet_flower` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-18 11:06:24
