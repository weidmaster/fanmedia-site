-- MySQL dump 10.11
--
-- Host: localhost    Database: horizonte
-- ------------------------------------------------------
-- Server version	5.0.38-Ubuntu_0ubuntu1.2-log

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
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(5) NOT NULL auto_increment,
  `titulo` varchar(250) NOT NULL,
  `data` datetime NOT NULL,
  `autor` varchar(250) NOT NULL,
  `new` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='novidades do site';

--
-- Dumping data for table `news`
--

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Teste de novidades','2008-02-23 17:21:16','Darksign','Este é simplesmente um teste para avaliar se as novidades são exibidas.'),(2,'Segundo teste','2008-02-22 17:21:56','Fastspeedy','Este é o segundo teste, para avaliar disposição de novidades quanto á data e hora.');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(5) NOT NULL auto_increment,
  `nome` varchar(255) NOT NULL,
  `nasc` date NOT NULL,
  `email` varchar(255) default NULL,
  `nick` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `permis` varchar(37) NOT NULL,
  `fp` int(7) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Darksign','1988-11-05','eduwb.horizonte@gmail.com','eduardowb','Herj1988','1.2.3.4.5.6.7.8.9.10.11.12.13.14',10000),(2,'Fastspeedy','1991-03-06','ttspeedy@hotmail.com','fastspeedy','ttsfoz','1.2.3.4.5.6.7.8.9.10.11.12.13.14',30533),(3,'Ze Mane','2008-02-15','ze@mane.com','zemane','123','0',10);
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

-- Dump completed on 2008-04-06 18:32:52
