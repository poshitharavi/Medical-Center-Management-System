CREATE DATABASE  IF NOT EXISTS `medical_center_management_system` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `medical_center_management_system`;
-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: medical_center_management_system
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.10-MariaDB

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
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (5,1,'2020-01-22 22:53:41',1),(6,1,'2020-01-23 23:56:33',1),(7,1,'2020-01-24 00:10:41',2),(8,4,'2020-01-24 14:45:42',4);
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `doctor_shedule`
--

LOCK TABLES `doctor_shedule` WRITE;
/*!40000 ALTER TABLE `doctor_shedule` DISABLE KEYS */;
INSERT INTO `doctor_shedule` VALUES (1,'17:00','Monday','Cardiology',1,1),(2,'17:00','Monday','OPD',2,1),(3,'13:00','Saturday','Cardiology',3,1),(4,'06:00','Saturday','Cardiology',4,1),(5,'12:00','Wednesday','Cardiology',5,1),(6,'06:00','Sunday','OPD',6,1);
/*!40000 ALTER TABLE `doctor_shedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'DR Kalukumara','Marawila','0770145214','PHD'),(2,'DR Siriwardhana','Lunuwila','0773254795','PHD'),(3,'DR Wimalaweera','Kandy','0770220354','POD'),(4,'DR Fernando','Marawila','0115845625','PHD'),(5,'Dr Naveen Silva','Colombo','0110456254','PHD'),(6,'Dr Buddika Silva','Jayawardhanapura','0778451236','PHD');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Perera',NULL,'670b14728ad9902aecba32e22fa4f6bd','077012346','perera@g.com',1),(2,'MR Fernando',NULL,'670b14728ad9902aecba32e22fa4f6bd','077012346','fernando@gmail.com',1),(3,'Sunil Fernando',NULL,'670b14728ad9902aecba32e22fa4f6bd','077012346','sunil@gmail.com',1),(4,'Admin',NULL,'670b14728ad9902aecba32e22fa4f6bd','077012346','admin@gmail.com',2),(5,'Nimal Admin',NULL,'670b14728ad9902aecba32e22fa4f6bd','077012346','nadmin@gmail.com',2),(6,'Kamal',NULL,'670b14728ad9902aecba32e22fa4f6bd','077012346','kamal@gmail.com',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user_type`
--

LOCK TABLES `user_type` WRITE;
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT INTO `user_type` VALUES (1,'Patient'),(2,'Admin');
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-24 19:25:27
