SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `gymclaudino` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `gymclaudino`;

CREATE TABLE `alumno_clase` (
  `idAlumno_clase` int(11) NOT NULL,
  `idAlumno` int(11) NOT NULL,
  `idClase` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `alumno_evento` (
  `idAlumno_evento` int(11) NOT NULL,
  `idAlumno` int(11) NOT NULL,
  `idEvento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `alumno_rutina` (
  `idAlumnoRutina` int(11) NOT NULL,
  `idAlumno` int(11) NOT NULL,
  `idRutina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `clase` (
  `idClase` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `sala` varchar(25) NOT NULL,
  `plazas` int(11) NOT NULL,
  `plazas_ocupadas` int(11) NOT NULL DEFAULT 0,
  `fecha_inicio` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_fin` datetime NOT NULL DEFAULT current_timestamp(),
  `idTipo` int(11) NOT NULL,
  `idMonitor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `ejercicio` (
  `idEjercicio` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `evento` (
  `idEvento` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `titular` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha_inicio` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_fin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `rutina` (
  `id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `fecha_inicio` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_fin` datetime NOT NULL,
  `idAlumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `rutina_ejercicio` (
  `idRutina_ejercicio` int(11) NOT NULL,
  `idRutina` int(11) NOT NULL,
  `idEjercicio` int(11) NOT NULL,
  `kilos` float NOT NULL,
  `repeticiones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `tipo_clase` (
  `idTipo` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `user` varchar(25) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  `rol` varchar(13) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO `usuario` (`idUsuario`, `activo`, `user`, `contrasena`, `rol`, `email`, `telefono`, `fecha_nacimiento`) VALUES
(1, 1, 'ej1', 'AJ@95sjk', 'alumno', 'ej@mail.com', '555123123', '1994-05-02');


ALTER TABLE `alumno_clase`
  ADD PRIMARY KEY (`idAlumno_clase`),
  ADD KEY `idAlumno` (`idAlumno`),
  ADD KEY `idClase` (`idClase`);

ALTER TABLE `alumno_evento`
  ADD PRIMARY KEY (`idAlumno_evento`),
  ADD KEY `idAlumno` (`idAlumno`),
  ADD KEY `idEvento` (`idEvento`);

ALTER TABLE `alumno_rutina`
  ADD PRIMARY KEY (`idAlumnoRutina`);

ALTER TABLE `clase`
  ADD PRIMARY KEY (`idClase`),
  ADD KEY `idTipo` (`idTipo`),
  ADD KEY `idMonitor` (`idMonitor`);

ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`idEjercicio`);

ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`);

ALTER TABLE `rutina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAlumno` (`idAlumno`),
  ADD KEY `idAlumno_2` (`idAlumno`);

ALTER TABLE `rutina_ejercicio`
  ADD PRIMARY KEY (`idRutina_ejercicio`),
  ADD KEY `idRutina` (`idRutina`),
  ADD KEY `idEjercicio` (`idEjercicio`);

ALTER TABLE `tipo_clase`
  ADD PRIMARY KEY (`idTipo`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);


ALTER TABLE `alumno_clase`
  MODIFY `idAlumno_clase` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `alumno_evento`
  MODIFY `idAlumno_evento` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `alumno_rutina`
  MODIFY `idAlumnoRutina` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `clase`
  MODIFY `idClase` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `ejercicio`
  MODIFY `idEjercicio` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `evento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `rutina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `rutina_ejercicio`
  MODIFY `idRutina_ejercicio` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tipo_clase`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `alumno_clase`
  ADD CONSTRAINT `alumno_clase_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `alumno_clase_ibfk_2` FOREIGN KEY (`idClase`) REFERENCES `clase` (`idClase`);

ALTER TABLE `alumno_evento`
  ADD CONSTRAINT `alumno_evento_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `alumno_evento_ibfk_2` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`idEvento`);

ALTER TABLE `clase`
  ADD CONSTRAINT `clase_ibfk_1` FOREIGN KEY (`idMonitor`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `clase_ibfk_2` FOREIGN KEY (`idTipo`) REFERENCES `tipo_clase` (`idTipo`);

ALTER TABLE `rutina`
  ADD CONSTRAINT `rutina_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idUsuario`);

ALTER TABLE `rutina_ejercicio`
  ADD CONSTRAINT `rutina_ejercicio_ibfk_1` FOREIGN KEY (`idRutina`) REFERENCES `rutina` (`id`),
  ADD CONSTRAINT `rutina_ejercicio_ibfk_2` FOREIGN KEY (`idEjercicio`) REFERENCES `ejercicio` (`idEjercicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
