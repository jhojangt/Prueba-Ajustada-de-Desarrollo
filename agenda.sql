-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2019 a las 11:01:04
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosagenda`
--

CREATE TABLE `datosagenda` (
  `id` int(11) NOT NULL,
  `nombre_Tarea` varchar(100) NOT NULL,
  `fecha_Inicio_tarea` datetime NOT NULL,
  `fecha_fin_tarea` datetime NOT NULL,
  `comentarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosagenda`
--

INSERT INTO `datosagenda` (`id`, `nombre_Tarea`, `fecha_Inicio_tarea`, `fecha_fin_tarea`, `comentarios`) VALUES
(1, 'citaewrwerwe', '2019-02-12 06:27:24', '2019-02-12 08:27:24', 'sdfsdfsdfasdasdq34'),
(25, 'cita asad', '2019-02-21 22:02:00', '2019-02-22 00:02:00', ''),
(26, 'cita', '2019-02-22 21:02:00', '2019-02-23 00:02:00', 'asdasd'),
(27, 'cita', '2019-02-22 21:02:00', '2019-02-23 00:02:00', 'asdasd'),
(28, 'cita', '2019-02-22 03:02:00', '2019-02-22 04:02:00', 'asdas'),
(29, 'cita asad', '2019-02-28 04:02:00', '2019-02-28 06:02:00', 'asd'),
(30, 'cita asad', '2019-02-28 04:02:00', '2019-02-28 06:02:00', 'asd'),
(31, 'cita asad', '2019-02-28 04:02:00', '2019-02-28 06:02:00', 'asd'),
(32, 'cita asad', '2019-02-23 04:02:00', '2019-02-23 06:02:00', 'asd'),
(33, 'cita asad', '2019-02-23 04:02:00', '2019-02-23 06:02:00', 'asd'),
(34, 'cita asad', '2019-02-23 04:02:00', '2019-02-23 06:02:00', 'asd'),
(35, 'cita', '2019-02-21 21:02:00', '2019-02-23 00:02:00', 'asdasd'),
(36, 'cita', '2019-02-21 21:02:00', '2019-02-23 00:02:00', 'asdasd'),
(37, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(38, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(39, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(40, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(41, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(42, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(43, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(44, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(45, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(46, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(47, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(48, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(49, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(50, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(51, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(52, 'asd', '2019-02-21 21:02:00', '2019-02-22 04:02:00', 'sad'),
(53, 'cita', '2019-02-21 21:02:00', '2019-02-27 22:02:00', 'sadasd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosagenda`
--
ALTER TABLE `datosagenda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosagenda`
--
ALTER TABLE `datosagenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
