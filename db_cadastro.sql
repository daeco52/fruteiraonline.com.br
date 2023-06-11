CREATE DATABASE  IF NOT EXISTS `cadastro` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci */;
USE `cadastro`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: cadastro
-- ------------------------------------------------------
-- Server version	5.7.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `telefone` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sexo` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `endereco` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Mel','89675-1234','mel@gmail.com','feminino','2012-01-02','Porto Alegre','Rio Grande do Sul','Rua Marechal Mesquita, 23'),(2,'Mel','89675-1234','mel@gmail.com','feminino','2012-01-02','Porto Alegre','Rio Grande do Sul','Rua Marechal Mesquita, 23'),(3,'Dainer Maciel','98763-1234','daemaci@gmail.com','masculino','1966-06-16','Porto Alegre','Rio Grande do Sul','Rua Otavio faria, 41'),(4,'Nina','98907-1234','nina@hotmail.com.br','feminino','2012-01-09','Porto Alegre','RGS','Rua Otavio de Faria,53'),(5,'Nina','98907-1234','nina@hotmail.com.br','feminino','2012-01-09','Porto Alegre','RGS','Rua Otavio de Faria,53'),(6,'Nina','98907-1234','nina@hotmail.com.br','feminino','2012-01-09','Porto Alegre','RGS','Rua Otavio de Faria,53'),(7,'Joao','98654-2221','jo@gmail.com','masculino','2023-06-07','Novo Hamburgo','RS','Rua da Varzea, 23/402'),(8,'Joao','98654-2221','jo@gmail.com','masculino','2023-06-07','Novo Hamburgo','RS','Rua da Varzea, 23/402');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-07 13:30:28
