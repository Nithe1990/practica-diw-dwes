SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `alumno_clase`;
CREATE TABLE IF NOT EXISTS `alumno_clase` (
  `idAlumno_clase` int NOT NULL AUTO_INCREMENT,
  `idAlumno` int NOT NULL,
  `idClase` int NOT NULL,
  `calificacion` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`idAlumno_clase`),
  KEY `idAlumno` (`idAlumno`),
  KEY `idClase` (`idClase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

DROP TABLE IF EXISTS `alumno_evento`;
CREATE TABLE IF NOT EXISTS `alumno_evento` (
  `idAlumno_evento` int NOT NULL AUTO_INCREMENT,
  `idAlumno` int NOT NULL,
  `idEvento` int NOT NULL,
  PRIMARY KEY (`idAlumno_evento`),
  KEY `idAlumno` (`idAlumno`),
  KEY `idEvento` (`idEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

DROP TABLE IF EXISTS `alumno_rutina`;
CREATE TABLE IF NOT EXISTS `alumno_rutina` (
  `idAlumno_rutina` int NOT NULL AUTO_INCREMENT,
  `idAlumno` int NOT NULL,
  `idRutina` int NOT NULL,
  PRIMARY KEY (`idAlumno_rutina`),
  KEY `idAlumno` (`idAlumno`),
  KEY `idRutina` (`idRutina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

DROP TABLE IF EXISTS `clase`;
CREATE TABLE IF NOT EXISTS `clase` (
  `idClase` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `sala` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `plazas` int NOT NULL,
  `plazas_ocupadas` int NOT NULL DEFAULT '0',
  `fecha_inicio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idTipo` int NOT NULL,
  `idMonitor` int NOT NULL,
  PRIMARY KEY (`idClase`),
  KEY `idTipo` (`idTipo`),
  KEY `idMonitor` (`idMonitor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

DROP TABLE IF EXISTS `ejercicio`;
CREATE TABLE IF NOT EXISTS `ejercicio` (
  `idEjercicio` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `tipo` varchar(25) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `video` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`idEjercicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `idEvento` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `titular` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `fecha_inicio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` int NOT NULL,
  PRIMARY KEY (`idEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

DROP TABLE IF EXISTS `rutina`;
CREATE TABLE IF NOT EXISTS `rutina` (
  `idRutina` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `fecha_inicio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` datetime NOT NULL,
  PRIMARY KEY (`idRutina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

DROP TABLE IF EXISTS `rutina_ejercicio`;
CREATE TABLE IF NOT EXISTS `rutina_ejercicio` (
  `idRutina_ejercicio` int NOT NULL AUTO_INCREMENT,
  `idRutina` int NOT NULL,
  `idEjercicio` int NOT NULL,
  `kilos` float NOT NULL,
  `repeticiones` int NOT NULL,
  PRIMARY KEY (`idRutina_ejercicio`),
  KEY `idRutina` (`idRutina`),
  KEY `idEjercicio` (`idEjercicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

DROP TABLE IF EXISTS `tipo_clase`;
CREATE TABLE IF NOT EXISTS `tipo_clase` (
  `idTipo` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `user` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `contrasena` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `rol` varchar(13) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `telefono` varchar(9) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;


ALTER TABLE `alumno_clase`
  ADD CONSTRAINT `alumno_clase_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `alumno_clase_ibfk_2` FOREIGN KEY (`idClase`) REFERENCES `clase` (`idClase`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `alumno_evento`
  ADD CONSTRAINT `alumno_evento_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `alumno_evento_ibfk_2` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`idEvento`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `alumno_rutina`
  ADD CONSTRAINT `alumno_rutina_ibfk_1` FOREIGN KEY (`idRutina`) REFERENCES `rutina` (`idRutina`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `alumno_rutina_ibfk_2` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `clase`
  ADD CONSTRAINT `clase_ibfk_1` FOREIGN KEY (`idMonitor`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `clase_ibfk_2` FOREIGN KEY (`idTipo`) REFERENCES `tipo_clase` (`idTipo`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `rutina_ejercicio`
  ADD CONSTRAINT `rutina_ejercicio_ibfk_1` FOREIGN KEY (`idRutina`) REFERENCES `rutina` (`idRutina`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rutina_ejercicio_ibfk_2` FOREIGN KEY (`idEjercicio`) REFERENCES `ejercicio` (`idEjercicio`) ON DELETE RESTRICT ON UPDATE RESTRICT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
