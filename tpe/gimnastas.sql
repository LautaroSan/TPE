-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2021 a las 01:01:11
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gimnastas`
--

CREATE TABLE `gimnastas` (
  `id_gimnasta` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `nacionalidad` varchar(200) NOT NULL,
  `id_aparato` int(200) NOT NULL,
  `altura` double NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gimnastas`
--

INSERT INTO `gimnastas` (`id_gimnasta`, `nombre`, `nacionalidad`, `id_aparato`, `altura`, `edad`) VALUES
(1, 'Kohei Uchimura', 'Japon', 1, 1.6, 32),
(2, 'Oleg Verniaiev', 'Ucrania', 1, 1.6, 27),
(4, 'Federico Molinari', 'Argentina', 4, 1.65, 37);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gimnastas`
--
ALTER TABLE `gimnastas`
  ADD PRIMARY KEY (`id_gimnasta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gimnastas`
--
ALTER TABLE `gimnastas`
  MODIFY `id_gimnasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
