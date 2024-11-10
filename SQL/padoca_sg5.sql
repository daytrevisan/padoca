-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: padoca
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `sg5`
--

DROP TABLE IF EXISTS sg5;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE sg5 (
  G5_CONT int(11) NOT NULL AUTO_INCREMENT,
  G5_ORDEM varchar(6) NOT NULL,
  G5_SITUACAO varchar(15) NOT NULL,
  G5_TIPO varchar(15) NOT NULL,
  G5_PROD varchar(15) NOT NULL,
  G5_DESCR_PROD varchar(50) NOT NULL,
  G5_PAI varchar(15) NOT NULL,
  G5_DESCR_PAI varchar(50) NOT NULL,
  G5_ENTREGA date DEFAULT NULL,
  G5_LIBERACAO date DEFAULT NULL,
  G5_QTD_PLANEJ int(6) DEFAULT NULL,
  G5_QTD_BOAS int(6) DEFAULT NULL,
  G5_QTD_REFUGO int(6) DEFAULT NULL,
  G5_QTD_SUCATA int(6) DEFAULT NULL,
  G5_QTD_SALDO int(6) DEFAULT NULL,
  G5_ROTEIRO varchar(15) DEFAULT NULL,
  G5_BX_COMP varchar(3) NOT NULL,
  G5_APON_OPER varchar(3) NOT NULL,
  PRIMARY KEY (G5_CONT)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sg5`
--

LOCK TABLES sg5 WRITE;
/*!40000 ALTER TABLE sg5 DISABLE KEYS */;
INSERT INTO sg5 VALUES (1,'00001','5-Finalizada','1-Normal','PF-0001','PAO DOCE INDUSTRIALIZADO','PF-0001','PAO DOCE INDUSTRIALIZADO','2024-11-25','2024-10-30',500,535,25,20,0,'ROT-001','Sim','Sim'),(2,'00002','5-Finalizada','1-Normal','PF-0001','PAO DOCE INDUSTRIALIZADO','PF-0001','PAO DOCE INDUSTRIALIZADO','2024-11-26','2024-11-05',300,330,14,6,0,'ROT-001','NÃ£','Sim');
/*!40000 ALTER TABLE sg5 ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-07 13:30:34