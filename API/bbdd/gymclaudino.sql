-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-03-2023 a las 18:48:42
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymclaudino`
--
CREATE DATABASE IF NOT EXISTS `gymclaudino` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci;
USE `gymclaudino`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_clase`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_evento`
--

DROP TABLE IF EXISTS `alumno_evento`;
CREATE TABLE IF NOT EXISTS `alumno_evento` (
  `idAlumno_evento` int NOT NULL AUTO_INCREMENT,
  `idAlumno` int NOT NULL,
  `idEvento` int NOT NULL,
  PRIMARY KEY (`idAlumno_evento`),
  KEY `idAlumno` (`idAlumno`),
  KEY `idEvento` (`idEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

DROP TABLE IF EXISTS `clase`;
CREATE TABLE IF NOT EXISTS `clase` (
  `idClase` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `sala` varchar(25) COLLATE utf8mb3_spanish2_ci NOT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

DROP TABLE IF EXISTS `ejercicio`;
CREATE TABLE IF NOT EXISTS `ejercicio` (
  `idEjercicio` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `video` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`idEjercicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `idEvento` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `titular` varchar(100) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `fecha_inicio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` int NOT NULL,
  PRIMARY KEY (`idEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

DROP TABLE IF EXISTS `rutina`;
CREATE TABLE IF NOT EXISTS `rutina` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `fecha_inicio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` datetime NOT NULL,
  `idAlumno` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAlumno` (`idAlumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_ejercicio`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_clase`
--

DROP TABLE IF EXISTS `tipo_clase`;
CREATE TABLE IF NOT EXISTS `tipo_clase` (
  `idTipo` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `activo` tinyint(1) NOT NULL,
  `user` varchar(25) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `contrasena` varchar(25) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `rol` varchar(13) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `telefono` varchar(9) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_clase`
--
ALTER TABLE `alumno_clase`
  ADD CONSTRAINT `alumno_clase_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `alumno_clase_ibfk_2` FOREIGN KEY (`idClase`) REFERENCES `clase` (`idClase`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `alumno_evento`
--
ALTER TABLE `alumno_evento`
  ADD CONSTRAINT `alumno_evento_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `alumno_evento_ibfk_2` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`idEvento`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `clase`
--
ALTER TABLE `clase`
  ADD CONSTRAINT `clase_ibfk_1` FOREIGN KEY (`idMonitor`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `clase_ibfk_2` FOREIGN KEY (`idTipo`) REFERENCES `tipo_clase` (`idTipo`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD CONSTRAINT `rutina_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `rutina_ejercicio`
--
ALTER TABLE `rutina_ejercicio`
  ADD CONSTRAINT `rutina_ejercicio_ibfk_1` FOREIGN KEY (`idRutina`) REFERENCES `rutina` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rutina_ejercicio_ibfk_2` FOREIGN KEY (`idEjercicio`) REFERENCES `ejercicio` (`idEjercicio`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;