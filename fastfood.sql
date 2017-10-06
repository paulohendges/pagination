-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: fastfood
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `cardapio`
--

DROP TABLE IF EXISTS `cardapio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cardapio` (
  `cardapio_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `tempo_extimado` int(3) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`cardapio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cardapio`
--

LOCK TABLES `cardapio` WRITE;
/*!40000 ALTER TABLE `cardapio` DISABLE KEYS */;
INSERT INTO `cardapio` VALUES (1,'Lasanha ao prtao',30,20.00),(2,'Bife de Entrecot',30,20.00);
/*!40000 ALTER TABLE `cardapio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa`
--

DROP TABLE IF EXISTS `mesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa` (
  `mesa_id` int(11) NOT NULL AUTO_INCREMENT,
  `observacao` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`mesa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa`
--

LOCK TABLES `mesa` WRITE;
/*!40000 ALTER TABLE `mesa` DISABLE KEYS */;
INSERT INTO `mesa` VALUES (1,'mesa do corredor do lado'),(2,'mesa do corredor lateral');
/*!40000 ALTER TABLE `mesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos` (
  `pedidos_id` int(11) NOT NULL AUTO_INCREMENT,
  `valor_total` decimal(10,2) NOT NULL,
  `valor_total_acresc` decimal(10,2) NOT NULL,
  `mesa_mesa_id` int(11) NOT NULL,
  `pedidos_status_pedidos_status_id` int(11) NOT NULL,
  `pessoa_pessoa_id` int(11) NOT NULL,
  PRIMARY KEY (`pedidos_id`),
  KEY `fk_pedidos_mesa1_idx` (`mesa_mesa_id`),
  KEY `fk_pedidos_pedidos_status1_idx` (`pedidos_status_pedidos_status_id`),
  KEY `fk_pedidos_pessoa1_idx` (`pessoa_pessoa_id`),
  CONSTRAINT `fk_pedidos_mesa1` FOREIGN KEY (`mesa_mesa_id`) REFERENCES `mesa` (`mesa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_pedidos_status1` FOREIGN KEY (`pedidos_status_pedidos_status_id`) REFERENCES `pedidos_status` (`pedidos_status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_pessoa1` FOREIGN KEY (`pessoa_pessoa_id`) REFERENCES `pessoa` (`pessoa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,40.00,44.00,1,1,1),(2,40.00,44.00,1,2,1),(17,40.00,44.00,1,1,1),(18,40.00,44.00,1,1,1),(19,40.00,44.00,1,1,1),(20,40.00,44.00,1,2,1),(21,40.00,44.00,1,1,1),(22,40.00,44.00,1,1,1),(23,40.00,44.00,1,1,1),(24,40.00,44.00,1,2,1),(25,40.00,44.00,1,1,1),(26,40.00,44.00,1,1,1),(27,40.00,44.00,1,1,1),(28,40.00,44.00,1,1,1),(29,40.00,44.00,1,1,1),(30,40.00,44.00,1,1,1),(31,40.00,44.00,1,1,1),(32,40.00,44.00,1,1,1),(33,40.00,44.00,1,1,1),(34,40.00,44.00,1,1,1),(35,40.00,44.00,1,1,1),(36,40.00,44.00,1,1,1),(37,40.00,44.00,1,1,1),(38,40.00,44.00,1,2,1),(39,40.00,44.00,1,1,1),(40,40.00,44.00,1,1,1),(41,40.00,44.00,1,1,1),(42,40.00,44.00,1,2,1),(43,40.00,44.00,1,1,1),(44,40.00,44.00,1,1,1),(45,40.00,44.00,1,1,1);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos_cardapio`
--

DROP TABLE IF EXISTS `pedidos_cardapio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos_cardapio` (
  `pedidos_cardapio_id` int(11) NOT NULL AUTO_INCREMENT,
  `pedidos_pedidos_id` int(11) NOT NULL,
  `cardapio_cardapio_id` int(11) NOT NULL,
  PRIMARY KEY (`pedidos_cardapio_id`,`cardapio_cardapio_id`),
  KEY `fk_pedidos_cardapio_pedidos1_idx` (`pedidos_pedidos_id`),
  KEY `fk_pedidos_cardapio_cardapio1_idx` (`cardapio_cardapio_id`),
  CONSTRAINT `fk_pedidos_cardapio_cardapio1` FOREIGN KEY (`cardapio_cardapio_id`) REFERENCES `cardapio` (`cardapio_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_cardapio_pedidos1` FOREIGN KEY (`pedidos_pedidos_id`) REFERENCES `pedidos` (`pedidos_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos_cardapio`
--

LOCK TABLES `pedidos_cardapio` WRITE;
/*!40000 ALTER TABLE `pedidos_cardapio` DISABLE KEYS */;
INSERT INTO `pedidos_cardapio` VALUES (1,1,1),(2,1,2);
/*!40000 ALTER TABLE `pedidos_cardapio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos_status`
--

DROP TABLE IF EXISTS `pedidos_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos_status` (
  `pedidos_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`pedidos_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos_status`
--

LOCK TABLES `pedidos_status` WRITE;
/*!40000 ALTER TABLE `pedidos_status` DISABLE KEYS */;
INSERT INTO `pedidos_status` VALUES (1,'Aberto'),(2,'Cozinha'),(3,'Aberto no Caixa'),(4,'Finalizado');
/*!40000 ALTER TABLE `pedidos_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `perfil_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_perfil` varchar(60) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`perfil_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'ADMIN','Admin do restaurante'),(2,'GARCON','Garçon do restaurante'),(3,'COZINHA','Cozinheiros do restaurante');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoa` (
  `pessoa_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(160) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `perfil_perfil_id` int(11) NOT NULL,
  PRIMARY KEY (`pessoa_id`),
  KEY `fk_pessoa_perfil_idx` (`perfil_perfil_id`),
  CONSTRAINT `fk_pessoa_perfil` FOREIGN KEY (`perfil_perfil_id`) REFERENCES `perfil` (`perfil_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'paulo cesar santos hendges junior','phendges','$2a$08$1okOx8IuVd2ZyEAPEpLY9OEYYLosipmnitXguCvDce0cCmKOyqRV.',1,1);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'fastfood'
--

--
-- Dumping routines for database 'fastfood'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-06 14:02:09
