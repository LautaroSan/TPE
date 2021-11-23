-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 00:20:43
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
  `edad` int(11) NOT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gimnastas`
--

INSERT INTO `gimnastas` (`id_gimnasta`, `nombre`, `nacionalidad`, `id_aparato`, `altura`, `edad`, `img`) VALUES
(1, 'Kohei Uchimura', 'Japon', 1, 1.6, 32, 'images/61969b5b68d4e1.38033373.jpg'),
(2, 'Oleg Verniaiev', 'Ucrania', 1, 1.6, 27, 'images/61969bf3db80f1.26795321.jpg'),
(4, 'Federico Molinari', 'Argentina', 4, 1.65, 37, 'images/61969c4cc0a950.65407574.jpg'),
(30, 'Fabian Hambüchen', 'Alemania', 13, 1.63, 34, 'images/61969c7ee6ee35.20719866.jpg'),
(31, 'Max Whitlock', 'Gran Bretaña', 3, 1.67, 28, 'images/61969ca3931df7.38511684.jpg'),
(32, 'Artiom Dolgopiat', 'Israel', 2, 1.62, 24, 'images/61969d3918e4d4.83177625.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gimnastas`
--
ALTER TABLE `gimnastas`
  ADD PRIMARY KEY (`id_gimnasta`),
  ADD KEY `FK_TempSales_SalesReason` (`id_aparato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gimnastas`
--
ALTER TABLE `gimnastas`
  MODIFY `id_gimnasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gimnastas`
--
ALTER TABLE `gimnastas`
  ADD CONSTRAINT `FK_TempSales_SalesReason` FOREIGN KEY (`id_aparato`) REFERENCES `aparatos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
