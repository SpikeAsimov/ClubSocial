-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-11-2021 a las 17:44:43
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `titangym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` varchar(20) NOT NULL,
  `streetName` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `state` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `city` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `zipcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  KEY `userID` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `address`
--

INSERT INTO `address` (`id`, `streetName`, `state`, `city`, `zipcode`) VALUES
('1529336794', 'Calle 23 Carrera 54', 'AtlÃ¡ntico', 'Barranquilla', '080004'),
('1580392920', 'Calle 92 Carrera 7', 'Cundinamarca', 'BogotÃ¡', '110431'),
('1580393244', 'Calle 12 N 34-23', 'Cundinamarca', 'Bogota', '110611'),
('1636548430', 'a', 'La Rioja', 'La Rioja', '5300'),
('1636559547', '', 'La Rioja', 'La Rioja', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `pass_key` varchar(20) NOT NULL,
  `securekey` varchar(20) NOT NULL,
  `Full_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`username`, `pass_key`, `securekey`, `Full_name`) VALUES
('admin', 'admin', 'admin', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enrolls_to`
--

DROP TABLE IF EXISTS `enrolls_to`;
CREATE TABLE IF NOT EXISTS `enrolls_to` (
  `et_id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` varchar(8) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `paid_date` varchar(15) DEFAULT NULL,
  `expire` varchar(15) DEFAULT NULL,
  `renewal` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`et_id`) USING BTREE,
  KEY `user_ID` (`uid`) USING BTREE,
  KEY `plan_ID_idx` (`pid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `enrolls_to`
--

INSERT INTO `enrolls_to` (`et_id`, `pid`, `uid`, `paid_date`, `expire`, `renewal`) VALUES
(1, 'POQKJC', '1529336794', '2018-06-18', '2018-07-18', 'no'),
(2, 'POQKJC', '1529336794', '2020-01-30', '2020-03-01', 'yes'),
(3, 'POQKJC', '1580392920', '2020-01-30', '2020-03-01', 'yes'),
(4, 'POQKJC', '1580393244', '2020-01-30', '2020-03-01', 'yes'),
(5, 'POQKJC', '1636548430', '2021-11-10', '2021-12-10', 'no'),
(6, 'POQKJC', '1636548430', '2021-11-10', '2021-12-10', 'yes'),
(7, 'POQKJC', '1636559547', '2021-11-10', '2021-12-10', 'yes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `health_status`
--

DROP TABLE IF EXISTS `health_status`;
CREATE TABLE IF NOT EXISTS `health_status` (
  `hid` int(5) NOT NULL AUTO_INCREMENT,
  `calorie` varchar(8) DEFAULT NULL,
  `height` varchar(8) DEFAULT NULL,
  `weight` varchar(8) DEFAULT NULL,
  `fat` varchar(8) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `uid` varchar(20) NOT NULL,
  PRIMARY KEY (`hid`) USING BTREE,
  KEY `userID_idx` (`uid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `health_status`
--

INSERT INTO `health_status` (`hid`, `calorie`, `height`, `weight`, `fat`, `remarks`, `uid`) VALUES
(1, '8500', '1.80', '95', '26', 'Ninguna', '1529336794'),
(2, '8500', '1.80', '95', '26', '', '1580392920'),
(3, NULL, NULL, NULL, NULL, NULL, '1580393244'),
(4, NULL, NULL, NULL, NULL, NULL, '1636548430'),
(5, NULL, NULL, NULL, NULL, NULL, '1636559547');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `pid` varchar(8) NOT NULL,
  `planName` varchar(20) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `validity` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `active` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pid`) USING BTREE,
  KEY `pid` (`pid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`pid`, `planName`, `description`, `validity`, `amount`, `active`) VALUES
('CXYFBV', 'Funcional Trap', 'Rutinas de cardio que se basan en circuitos prolongados, donde se escala el esfuerzo, en 6 niveles y gradualmente se baja durante el lapso de 1 hora.', '4', 85000, 'yes'),
('KMARLQ', 'Funcional', 'Se realizan los movimientos, solo con el pesos del cuerpo en circuitos de 10 minutos con 1 minuto de descanso.', '1', 65000, 'no'),
('POQKJC', 'Plan Mensual', 'Una suscripciÃ³n mensual.', '1', 60000, 'yes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `tid` int(12) NOT NULL AUTO_INCREMENT,
  `tname` varchar(45) DEFAULT NULL,
  `day1` varchar(200) DEFAULT NULL,
  `day2` varchar(200) DEFAULT NULL,
  `day3` varchar(200) DEFAULT NULL,
  `day4` varchar(200) DEFAULT NULL,
  `day5` varchar(200) DEFAULT NULL,
  `day6` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `timetable`
--

INSERT INTO `timetable` (`tid`, `tname`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`) VALUES
(1, 'Zamba Jazz', 'Cardio 10 minutos, Flexiones de Pierna 50, Flexiones de Pecho 20', 'Cardio 10 minutos, Pesas, Pecho 50 Repeticiones', 'Abdomen 100, Trote 25 minutos, Pesas.', 'Cardio 10 minutos, Pesas, Pecho 50 Repeticiones', 'Cardio 10 minutos, Flexiones de Pierna 50, Flexiones de Pecho 20', 'Abdomen 100, Trote 25 minutos, Pesa.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `joining_date` varchar(10) NOT NULL,
  PRIMARY KEY (`userid`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE,
  KEY `userid` (`userid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`userid`, `username`, `gender`, `mobile`, `email`, `dob`, `joining_date`) VALUES
('1529336794', 'Juana Maren', 'Mujer', '3166549781', 'jmaren@cweb.com', '1994-06-15', '2020-01-30'),
('1580392920', 'Roberto Forero', 'Hombre', '3116759143', 'rforero@cweb.com', '1996-06-11', '2020-01-30'),
('1580393244', 'Johana Campos', 'Mujer', '3016749413', 'jcampos@cweb.com', '1993-02-20', '2020-01-30'),
('1636548430', 'Walter Arroyo', 'Hombre', '3804443867', 'hualterio@gmail.com', '1989-12-21', '2021-11-10'),
('1636559547', 'Walter Arroyo', 'Hombre', '3804443867', '', '1989-12-21', '2021-11-10');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `userID` FOREIGN KEY (`id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `enrolls_to`
--
ALTER TABLE `enrolls_to`
  ADD CONSTRAINT `plan_ID` FOREIGN KEY (`pid`) REFERENCES `plan` (`pid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`uid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `health_status`
--
ALTER TABLE `health_status`
  ADD CONSTRAINT `uID` FOREIGN KEY (`uid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
