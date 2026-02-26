CREATE DATABASE  IF NOT EXISTS `casoestudio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `casoestudio`;
-- MySQL dump 10.13  Distrib 8.0.43, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: casoestudio
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
-- Table structure for table `ejercicios`
--

DROP TABLE IF EXISTS `ejercicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ejercicios` (
  `Consecutivo` int(11) NOT NULL AUTO_INCREMENT,
  `Identificacion` varchar(15) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Monto` decimal(18,2) NOT NULL,
  `TipoEjercicio` int(11) NOT NULL,
  PRIMARY KEY (`Consecutivo`),
  KEY `fk_ejercicios` (`TipoEjercicio`),
  CONSTRAINT `fk_ejercicios` FOREIGN KEY (`TipoEjercicio`) REFERENCES `tiposejercicio` (`TipoEjercicio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ejercicios`
--

LOCK TABLES `ejercicios` WRITE;
/*!40000 ALTER TABLE `ejercicios` DISABLE KEYS */;
INSERT INTO `ejercicios` VALUES (1,'800600076','2026-02-25 19:14:25',23000.00,1),(2,'116700557','2026-02-25 19:20:28',20000.00,2),(3,'116700558','2026-02-25 19:35:27',35000.00,4),(4,'116700557','2026-02-25 19:40:25',27000.00,3),(5,'800600076','2026-02-25 19:42:31',37000.00,1),(6,'80600076','2026-02-25 19:42:56',390000.00,2);
/*!40000 ALTER TABLE `ejercicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposejercicio`
--

DROP TABLE IF EXISTS `tiposejercicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiposejercicio` (
  `TipoEjercicio` int(11) NOT NULL,
  `DescripcionTipoEjercicio` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TipoEjercicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposejercicio`
--

LOCK TABLES `tiposejercicio` WRITE;
/*!40000 ALTER TABLE `tiposejercicio` DISABLE KEYS */;
INSERT INTO `tiposejercicio` VALUES (1,'Ejercicios de resistencia (aeróbicos)'),(2,'Ejercicios de fortalecimiento'),(3,'Ejercicios de equilibrio'),(4,'Ejercicios de flexibilidad');
/*!40000 ALTER TABLE `tiposejercicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'casoestudio'
--
/*!50003 DROP PROCEDURE IF EXISTS `sp_ConsultarEjercicios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ConsultarEjercicios`()
BEGIN
    SELECT
        e.Fecha,
        e.Monto,
        t.DescripcionTipoEjercicio,
        e.Identificacion
    FROM ejercicios e
    INNER JOIN tiposejercicio t ON t.TipoEjercicio = e.TipoEjercicio
    ORDER BY e.Fecha DESC;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_ConsultarTiposEjercicio` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ConsultarTiposEjercicio`()
BEGIN
	SELECT
		TipoEjercicio,
        DescripcionTipoEjercicio
	FROM tiposejercicio
    ORDER BY TipoEjercicio;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_RegistrarEjercicio` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_RegistrarEjercicio`(
	p_Identificacion VARCHAR(15),
    p_Monto DECIMAL(18,2),
    p_TipoEjercicio INT
)
BEGIN
    DECLARE v_Cantidad INT;
    SELECT COUNT(*) INTO v_Cantidad
    FROM ejercicios
    WHERE Identificacion = p_Identificacion;

    IF v_Cantidad >= 2 THEN
        SELECT 'No se pueden registrar más de 2 tipos de ejercicio por persona' AS Mensaje;
    ELSE
        INSERT INTO ejercicios (Identificacion,Fecha,Monto,TipoEjercicio)
        VALUES (p_Identificacion,NOW(),p_Monto,p_TipoEjercicio);

        SELECT 'Ejercicio registrado correctamente' AS Mensaje;

    END IF;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-25 19:45:39
