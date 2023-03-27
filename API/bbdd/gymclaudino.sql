SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `gymclaudino` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci;
USE `gymclaudino`;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO `alumno_evento` (`idAlumno_evento`, `idAlumno`, `idEvento`) VALUES
(1, 1, 1);

DROP TABLE IF EXISTS `alumno_rutina`;
CREATE TABLE IF NOT EXISTS `alumno_rutina` (
  `idAlumno_rutina` int NOT NULL AUTO_INCREMENT,
  `idAlumno` int NOT NULL,
  `idRutina` int NOT NULL,
  PRIMARY KEY (`idAlumno_rutina`),
  KEY `idAlumno` (`idAlumno`),
  KEY `idRutina` (`idRutina`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO `alumno_rutina` (`idAlumno_rutina`, `idAlumno`, `idRutina`) VALUES
(1, 1, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO `clase` (`idClase`, `activo`, `sala`, `plazas`, `plazas_ocupadas`, `fecha_inicio`, `fecha_fin`, `idTipo`, `idMonitor`) VALUES
(1, 1, 'Sala Zumba', 10, 1, '2023-03-27 23:22:48', '2023-03-31 20:00:00', 1, 1);

DROP TABLE IF EXISTS `ejercicio`;
CREATE TABLE IF NOT EXISTS `ejercicio` (
  `idEjercicio` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `tipo` varchar(25) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `video` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`idEjercicio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO `ejercicio` (`idEjercicio`, `activo`, `nombre`, `tipo`, `video`) VALUES
(1, 1, 'Zumba', 'Zumba', 'https://youtu.be/vi8nCWhfCHk');

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `idEvento` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `titular` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `fecha_inicio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` datetime NOT NULL,
  PRIMARY KEY (`idEvento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO `evento` (`idEvento`, `activo`, `titular`, `descripcion`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 1, 'Carrera contra el cáncer.', 'Carrera solidaria. Los fondos recaudados van destinados a la investigación contra el cáncer.', '2023-03-27 23:26:56', '2023-03-31 20:00:00');

DROP TABLE IF EXISTS `rutina`;
CREATE TABLE IF NOT EXISTS `rutina` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `fecha_inicio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO `rutina` (`id`, `activo`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 1, '2023-03-27 23:24:52', '2023-03-31 20:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO `rutina_ejercicio` (`idRutina_ejercicio`, `idRutina`, `idEjercicio`, `kilos`, `repeticiones`) VALUES
(1, 1, 1, 20, 10);

DROP TABLE IF EXISTS `tipo_clase`;
CREATE TABLE IF NOT EXISTS `tipo_clase` (
  `idTipo` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO `tipo_clase` (`idTipo`, `activo`, `nombre`, `descripcion`) VALUES
(1, 1, 'Zumba', 'Mejora el sistema circulatorio y cardiovascular. Con la realización de estos ejercicios mejoramos la coordinación. Aumenta la flexibilidad de nuestro cuerpo. Se quema una gran cantidad de calorías, por lo que permite la bajada de peso.');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO `usuario` (`idUsuario`, `activo`, `user`, `contrasena`, `rol`, `email`, `telefono`, `fecha_nacimiento`) VALUES
(1, 1, 'ejemplo', '1234', 'alumno', 'alumno@mail.com', '555123123', '1994-05-23');


ALTER TABLE `alumno_clase`
  ADD CONSTRAINT `alumno_clase_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `alumno_clase_ibfk_2` FOREIGN KEY (`idClase`) REFERENCES `clase` (`idClase`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `alumno_evento`
  ADD CONSTRAINT `alumno_evento_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `alumno_evento_ibfk_2` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`idEvento`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `alumno_rutina`
  ADD CONSTRAINT `alumno_rutina_ibfk_1` FOREIGN KEY (`idRutina`) REFERENCES `rutina` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `alumno_rutina_ibfk_2` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `clase`
  ADD CONSTRAINT `clase_ibfk_1` FOREIGN KEY (`idMonitor`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `clase_ibfk_2` FOREIGN KEY (`idTipo`) REFERENCES `tipo_clase` (`idTipo`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `rutina_ejercicio`
  ADD CONSTRAINT `rutina_ejercicio_ibfk_1` FOREIGN KEY (`idRutina`) REFERENCES `rutina` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rutina_ejercicio_ibfk_2` FOREIGN KEY (`idEjercicio`) REFERENCES `ejercicio` (`idEjercicio`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
