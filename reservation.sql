-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: reservation
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `hotel_reservation`
--

DROP TABLE IF EXISTS `hotel_reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel_reservation` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  `guest` int(40) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `tablereservation` varchar(20) NOT NULL,
  `reservationtype` varchar(20) NOT NULL,
  `specify` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_reservation`
--

LOCK TABLES `hotel_reservation` WRITE;
/*!40000 ALTER TABLE `hotel_reservation` DISABLE KEYS */;
INSERT INTO `hotel_reservation` VALUES (1,'priyanka ','m','priyankamistri129@gmail.com',2147483647,2,'2021-02-20','03:24:00','','','','','Approved'),(2,'priyanka','sb','priyankamistri129@gmail.com',2147483647,16,'2021-03-05','09:29:00','','','','','Approved'),(3,'priyanka mistri','m','mistripayal17@gmail.com1234567890',2147483647,3,'2021-02-25','12:31:00','','','','','Approved'),(4,'one','lname','one@gmail.com',12356,2,'2021-02-24','14:53:00','','','','','Rejected'),(5,'one','lname','one@gmail.com',8902,4,'2021-02-25','15:56:00','','','','','Approved'),(6,'one','PPP','one@gmail.com',6789,3,'2021-02-25','13:58:00','YES','BIRTHDAY/ANNIVERSARY','none','none','Rejected'),(7,'one','PPP','one@gmail.com',7890,2,'2021-02-26','19:47:00','YES','DINNER','none','none','Approved'),(8,'prachi','Pawar','prachi@gmail.com',89033,4,'2021-02-26','21:13:00','YES','CORPORATE','none','none','Rejected'),(9,'priyu','mistri','priyanka12@gmail.com',2147483647,6,'2021-02-27','15:55:00','YES','WEDDING','no','no','New'),(10,'priyu','PPP','priyu@gmail.com',1234567890,12,'2021-02-27','16:04:00','YES','BIRTHDAY/ANNIVERSARY','none','none','New'),(11,'one','lname','one@gmail.com',777,5,'2021-02-27','21:20:00','YES','DINNER','none','none','New');
/*!40000 ALTER TABLE `hotel_reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'one','one@gmail.com','1234'),(2,'two','two@gmail.com','4321'),(3,'three','three@gmail.com','890'),(4,'four','four@gmail.com','789'),(5,'prachi','prachi@gmail.com','8989'),(8,'priyu','priyanka12@gmail.com','1234'),(9,'priyu','priyu@gmail.com','1234');
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

-- Dump completed on 2021-02-25 16:40:08
