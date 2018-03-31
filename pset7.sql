-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: pset7
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1-log

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
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `action` text COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(10) NOT NULL,
  `price` double(65,4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES ('BOUGHT','AAN',20,22.2000,'2015-12-18 14:44:53',14),('BOUGHT','FREE',200,0.0174,'2015-12-18 14:46:45',14),('BOUGHT','ABT',50,44.7800,'2015-12-18 14:59:15',14),('BOUGHT','FREE',200,0.0196,'2015-12-18 14:59:30',14),('BOUGHT','ABT',50,44.6300,'2015-12-18 15:37:40',14),('BOUGHT','FREE',200,0.0192,'2015-12-18 15:37:53',14),('BOUGHT','AAN',50,22.0600,'2015-12-18 15:38:10',14),('BOUGHT','FREE',500,0.0197,'2015-12-18 16:07:23',14),('BOUGHT','FREE',500,0.0197,'2015-12-18 16:09:45',14),('BOUGHT','FREE',100,0.0197,'2015-12-18 16:11:18',14),('BOUGHT','ABT',50,44.3999,'2015-12-18 16:11:28',14),('BOUGHT','AAN',10,22.0000,'2015-12-18 16:11:42',14),('BOUGHT','FREE',200,0.0200,'2015-12-18 17:05:38',14),('BOUGHT','ABT',50,43.7000,'2015-12-19 07:18:02',14),('BOUGHT','AAN',20,22.0800,'2015-12-19 07:18:43',14),('BOUGHT','ABT',50,43.7000,'2015-12-19 07:23:29',14),('BOUGHT','ABT',50,43.7000,'2015-12-19 07:23:30',14),('BOUGHT','AAN',100,22.0800,'2015-12-19 07:23:43',14),('BOUGHT','FREE',400,0.0173,'2015-12-19 07:24:01',14),('BOUGHT','ABT',100,43.7000,'2015-12-19 07:42:14',16),('BOUGHT','FREE',5000,0.0173,'2015-12-19 07:42:34',16);
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stockdata`
--

DROP TABLE IF EXISTS `stockdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stockdata` (
  `id` int(10) NOT NULL,
  `symbols` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(10) NOT NULL,
  PRIMARY KEY (`id`,`symbols`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stockdata`
--

LOCK TABLES `stockdata` WRITE;
/*!40000 ALTER TABLE `stockdata` DISABLE KEYS */;
INSERT INTO `stockdata` VALUES (13,'FREE',2050),(14,'AAN',100),(14,'ABT',100),(14,'FREE',400),(16,'ABT',100);
/*!40000 ALTER TABLE `stockdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CASH` decimal(65,4) unsigned DEFAULT '0.0000',
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,10000.0000,'belindazeng','$1$50$oxJEDBo9KDStnrhtnSzir0'),(2,10000.0000,'caesar','$1$50$GHABNWBNE/o4VL7QjmQ6x0'),(3,10000.0000,'jharvard','$1$50$RX3wnAMNrGIbgzbRYrxM1/'),(4,10000.0000,'malan','$1$50$lJS9HiGK6sphej8c4bnbX.'),(5,10000.0000,'rob','$1$HA$l5llES7AEaz8ndmSo5Ig41'),(6,10000.0000,'skroob','$1$50$euBi4ugiJmbpIbvTTfmfI.'),(7,10000.0000,'zamyla','$1$50$uwfqB45ANW.9.6qaQ.DcF.'),(13,10000.0000,'Rohan','$1$AR0WDv.c$WCcZWzWEsi7DpMt3rLMN.0'),(14,8625.0900,'mansi','$1$w.FhpFiG$5.HaIUkz1zTZR5RmZeF.9.'),(16,5630.0000,'rohanchadha','$1$cfzBbzWh$hwdFCAHAG9zDiurkL1GI01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-22  3:12:47
