-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2024 a las 22:01:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `homedrop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_propiedades`
--

CREATE TABLE `tabla_propiedades` (
  `ID` int(11) NOT NULL,
  `ID_Reference` varchar(50) DEFAULT NULL,
  `m²` varchar(50) NOT NULL,
  `Fecha_Pub` date NOT NULL,
  `Habitaciones` int(11) NOT NULL,
  `Preu` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Baños` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_propiedades`
--

INSERT INTO `tabla_propiedades` (`ID`, `ID_Reference`, `m²`, `Fecha_Pub`, `Habitaciones`, `Preu`, `email`, `Direccion`, `Baños`) VALUES
(1, 'OM8YV', '80', '2020-10-04', 2, 75220, 'pasteleriamaria@gmail.com', 'Ctra. Eivissa-Sant Antoni, 07816 Sant Antoni de Portmany, Illes Balears', 1),
(2, '53JL8', '104', '2019-02-15', 3, 120730, 'manolopepe@gmail.com', 'C. Maestro Bonafonte, 03550 San Juan de Alicante, Alicante', 2),
(3, 'HL7DT', '228', '2012-11-30', 3, 153700, 'pasteleriamaria@gmail.com', 'C. Espronceda, 40, 03204 Elche, Alicante', 2),
(4, '3F6XX', '500', '2017-07-20', 5, 312100, 'walls@business.es', 'C. de Máiquez, 2-8, Salamanca, 28009 Madrid', 3),
(13, '15115GF', '120 : 300 : 400', '0000-00-00', 6, 381309, 'javiertomas@gmail.com', 'c. La amargura 32', 3),
(14, 'fsdf3', '50 : 90 : 120 : 180 : 220 : 300 : 400', '2010-01-14', 5, 232656, 'lasttestdatepicker@as.com', 'algo random for test', 3),
(20, 'sadw', '∀ : ~50 : ~90 : ~120 : ~180 : ~220 : 300+', '2024-01-13', 2, 222612, 'awd@asd', 'ads', 0),
(35, 'AD6QV', '~180', '2000-01-08', 3, 487776, 'as@as', '0', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_propiedades`
--
ALTER TABLE `tabla_propiedades`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_Reference` (`ID_Reference`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_propiedades`
--
ALTER TABLE `tabla_propiedades`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
