CREATE DATABASE  IF NOT EXISTS `vacante_unitec` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `vacante_unitec`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: vacante_unitec
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.37-MariaDB

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
-- Table structure for table `cat_edo_civil`
--

DROP TABLE IF EXISTS `cat_edo_civil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_edo_civil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_edo_civil`
--

LOCK TABLES `cat_edo_civil` WRITE;
/*!40000 ALTER TABLE `cat_edo_civil` DISABLE KEYS */;
INSERT INTO `cat_edo_civil` VALUES (1,'Soltero/a'),(2,'Comprometido/a'),(3,'En relacion'),(4,'Casado/a'),(5,'Union Libre'),(6,'Separado/a'),(7,'Divorciado/a'),(8,'Viudo/a'),(9,'Noviazgo');
/*!40000 ALTER TABLE `cat_edo_civil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_genero`
--

DROP TABLE IF EXISTS `cat_genero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_genero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_genero`
--

LOCK TABLES `cat_genero` WRITE;
/*!40000 ALTER TABLE `cat_genero` DISABLE KEYS */;
INSERT INTO `cat_genero` VALUES (1,'Femenino'),(2,'Masculino'),(3,'Otro');
/*!40000 ALTER TABLE `cat_genero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_nivel_intereses`
--

DROP TABLE IF EXISTS `cat_nivel_intereses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_nivel_intereses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_nivel_intereses`
--

LOCK TABLES `cat_nivel_intereses` WRITE;
/*!40000 ALTER TABLE `cat_nivel_intereses` DISABLE KEYS */;
INSERT INTO `cat_nivel_intereses` VALUES (0,'Seleccionar opcion'),(1,'Preparatoria'),(2,'Licenciatura'),(3,'Posgrado');
/*!40000 ALTER TABLE `cat_nivel_intereses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_opc_nivel_intereses`
--

DROP TABLE IF EXISTS `cat_opc_nivel_intereses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_opc_nivel_intereses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_nivel_intereses` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_opc_nivel_intereses`
--

LOCK TABLES `cat_opc_nivel_intereses` WRITE;
/*!40000 ALTER TABLE `cat_opc_nivel_intereses` DISABLE KEYS */;
INSERT INTO `cat_opc_nivel_intereses` VALUES (0,1,'No aplica'),(1,2,'Lic. en Derecho'),(2,2,'Lic. en Finanzas'),(3,3,'Mtria. Admon de Negocios'),(4,3,'Mtria. Direccion de Proyectos');
/*!40000 ALTER TABLE `cat_opc_nivel_intereses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(80) NOT NULL,
  `apellido_p` varchar(80) DEFAULT NULL,
  `apellido_m` varchar(80) DEFAULT NULL,
  `genero` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `estado_civil` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `nivel_intereses` int(11) DEFAULT NULL,
  `opc_nivel_interes` int(11) DEFAULT NULL,
  `estatus` int(11) DEFAULT '1',
  `estatus_logico` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (3,'antonio','anzures','montecillo',2,31,4,'tono.anzzu@gmail.com','12345',1,2,1,1),(21,'jose','anzures','montecillo',2,24,1,'raza22@hotmail.com','12345',1,2,1,1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'vacante_unitec'
--

--
-- Dumping routines for database 'vacante_unitec'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-29 21:27:59
