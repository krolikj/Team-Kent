-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: studint_services
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `name` char(60) NOT NULL,
  `next` int(11) DEFAULT NULL,
  `q_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES ('42nd Street Deli',24,4),('A Specific Building',8,1),('A Tutoring Center',2,1),('Accounting',9,2),('An ATM',7,1),('Argo Tea',38,5),('Bené',29,4),('Bleecker Street',23,4),('Center Plate',29,4),('Chemistry',10,2),('Ciao',28,4),('Computer Information Systems',11,2),('Corner Store',23,6),('Croutons',24,4),('Drinks/Smoothies',5,3),('ecoGrounds',29,5),('Economics',12,2),('Einstein Bros. Bagels',27,4),('Fifth Third Bank',21,7),('Finance',13,2),('Fresh Food Co.',23,4),('Freshens',23,4),('Full Meal',4,3),('Green Plate',24,4),('Grille Works',28,4),('Jump',23,4),('Kirkhof Center',28,21),('Kirkhof Center-',28,19),('Kirkhof Center.',28,20),('Kleiner Commons',29,19),('Lake Michigan Credit Union',19,7),('Lake Michigan Hall:154',32,16),('Lake Ontario Hall:120',33,10),('Late Night',24,4),('Lobby Shop',28,6),('Mackinac Hall:A-2-101',35,17),('Mackinac Hall:A-2-601',35,14),('Mackinac Hall:C-2-205',35,11),('Math',14,2),('Montague\'s Deli',29,4),('P.O.D.',35,6),('Padnos Hall of Science:312',39,18),('Panda Express',28,4),('Papa Johns',24,4),('Phone: 616-331-2084',0,14),('Phone: 616-331-2922',0,18),('Phone: 616-331-3317',0,10),('Phone: 616-331-3440',0,15),('Phone: 616-331-8969',0,17),('PNC',20,7),('Qdoba',29,4),('Science',15,2),('Seidman:2018',43,9),('Seidman:3025',43,13),('Seidman:3060',43,12),('Snacks',6,3),('Somewhere to Eat',3,1),('Speech',16,2),('Starbucks',37,5),('Stats',17,2),('Student Services:200',42,15),('Subway',28,4),('The Bistro',29,4),('The Commons',23,19),('The Connection.',24,20),('The Marketplace',37,19),('Which Wich',37,4),('Writing',18,2),('Zoca',28,4);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `atm_locations`
--

DROP TABLE IF EXISTS `atm_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atm_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locations` char(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atm_locations`
--

LOCK TABLES `atm_locations` WRITE;
/*!40000 ALTER TABLE `atm_locations` DISABLE KEYS */;
INSERT INTO `atm_locations` VALUES (1,'23,29,37,28'),(2,'28'),(3,'28,24');
/*!40000 ALTER TABLE `atm_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buildings` (
  `name` char(60) NOT NULL,
  `next` int(11) DEFAULT NULL,
  `latitude` char(25) DEFAULT NULL,
  `longitude` char(25) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buildings`
--

LOCK TABLES `buildings` WRITE;
/*!40000 ALTER TABLE `buildings` DISABLE KEYS */;
INSERT INTO `buildings` VALUES ('Au Sable',22,'42.963260','-85.885462'),('Henry Hall',26,'42.964459','-85.888828'),('Holton-Hooker',27,'42.966246','-85.885423'),('Kindschi Hall of Science',30,'42.965850','-85.889172'),('Kirkhof Center',28,'42.962730','-85.888634'),('Kleiner Commons',29,'42.968939','-85.885503'),('Lake Huron Hall',31,'42.962678','-85.885177'),('Lake Michigan Hall',32,'42.961387','-85.886107'),('Lake Ontario Hall',33,'42.961329','-85.885202'),('Lake Superior Hall',34,'42.962000','-85.886577'),('Mackinac Hall',35,'42.966644','-85.886862'),('Manitou Hall',36,'42.966208','-85.887291'),('Mary Idema Pew Library',38,'42.963001','-85.889750'),('Padnos Hall of Science',39,'42.965226','-85.887466'),('Performing Arts Center',40,'42.961536','-85.888024'),('Seidman',45,'42.962152','-85.885739'),('Student Services',42,'42.964459','-85.888828'),('The Commons',23,'42.965661','-85.886672'),('The Connection',24,'42.959734','-85.888516'),('The Fieldhouse',25,'42.966928','-85.889803'),('The Marketplace',37,'42.965907','-85.888854'),('Zumberge Hall',41,'42.962980','-85.886771');
/*!40000 ALTER TABLE `buildings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'What Are You Looking For?'),(2,'What Kind of Tutoring?'),(3,'What Kind of Food Are You Looking For?'),(4,'What Restaurant Would You Like?'),(5,'What Drink Location Are You Looking For?'),(6,'What Snack Location Are You Looking For?'),(7,'Which ATM Provider?'),(8,'Which Building Are You Looking For?'),(9,'Accounting Tutoring'),(10,'The Chemistry Success Center'),(11,'CIS Student Success Center'),(12,'Economics Tutoring'),(13,'Finance Tutoring'),(14,'The Math Center'),(15,'Science Tutoring'),(16,'The Speech Lab'),(17,'The Stats Center'),(18,'The Writing Center'),(19,'Lake Michigan Credit Union'),(20,'PNC'),(21,'Fifth Third Bank');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutoring_locations`
--

DROP TABLE IF EXISTS `tutoring_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutoring_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(60) DEFAULT NULL,
  `building` int(11) DEFAULT NULL,
  `room` char(25) DEFAULT NULL,
  `phone` char(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutoring_locations`
--

LOCK TABLES `tutoring_locations` WRITE;
/*!40000 ALTER TABLE `tutoring_locations` DISABLE KEYS */;
INSERT INTO `tutoring_locations` VALUES (1,'The Math Center',35,'A-2-601','616-331-2084'),(2,'The Stats Center',35,'A-2-101','616-331-8969'),(3,'Science Tutoring',42,'200','616-331-3440'),(4,'The Chemistry Success Center',33,'120','616-331-3317'),(5,'The Writing Center',39,'312','616-331-2922'),(6,'The Speech Lab',32,'154','-'),(7,'Accounting Tutoring',43,'2018','-'),(8,'CIS Student Success Center',35,'C-2-205','-'),(9,'Economics Tutoring',43,'3060','-'),(10,'Finance Tutoring',43,'3025','-');
/*!40000 ALTER TABLE `tutoring_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `name` char(20) NOT NULL,
  `password` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin',123123);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-01 15:26:10
