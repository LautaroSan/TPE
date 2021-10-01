-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2021 a las 01:00:47
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
-- Estructura de tabla para la tabla `aparatos`
--

CREATE TABLE `aparatos` (
  `id` int(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `orden_olimpico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aparatos`
--

INSERT INTO `aparatos` (`id`, `nombre`, `descripcion`, `orden_olimpico`) VALUES
(1, 'All-Around', '       Comprende los 6 aparatos individuales', NULL),
(2, 'Suelo', 'se realiza sobre una superficie de 12x12 metros(pedana), construida de un material elástico para amortiguar las caídas. Los ejercicios tienen una duración de 50 a 70 s, para los hombres. Durante la prueba se realizan movimientos acrobáticos y gimnásticos.', 1),
(3, 'Arzones', 'Compuesto por un lomo elevado sobre el que están ensamblados dos arcos transversales. Posee las siguientes dimensiones: 1,15 m de altura por 1,60 m de longitud y un ancho de 35 cm. La altura de los arcos es de 12 cm y la distancia entre ambos arcos es ajustable entre 40 cm y 45 cm. Una serie típica del caballo con arcos se basa en el movimiento de las piernas, que el gimnasta debe mover circularmente (molinos) tomado con las manos de las anillas, aunque es requisito ejecutar también movimientos pendulares (tijeras). Los movimientos deben ejecutarse sin interrupciones y sin que las piernas toquen el aparato', 2),
(4, 'Anillas', 'Está construido por una estructura de donde cuelgan dos anillas, a 2,75 m del suelo. La distancia entre ellas es de 50 cm y su diámetro interno es de 18 cm. La prueba consiste en una serie de ejercicios de fuerza, balance y equilibrio. El jurado valora el control del aparato y la dificultad de los elementos de la coreografía. Cuanto menos tiemble la estructura de la que penden las anillas, mejor será la puntuación de la ejecución del gimnasta. Es el aparato de fuerza por excelencia de la gimnasia.', 3),
(5, 'Salto', 'Se trata de saltar sobre una plataforma impulsado por un trampolín. Es la prueba de menor duración de la gimnasia artística. Cada gimnasta tiene derecho a dos saltos. La pista tiene 25 metros y termina en el trampolín en el que el gimnasta debe tomar impulso para saltar hacia un potro colocado a 1,35 metros de altura. El salto debe realizarse con los dos pies juntos y apoyar simultáneamente ambas manos sobre el potro.', 4),
(6, 'Paralelas', 'Se trata de dos barras de 3,5 metros, colocadas a 1,75 m de altura y en forma paralela, distanciadas entre sí por una distancia de entre 42 cm y 52 cm. La prueba consiste en ejercicios de equilibrio —giros y paradas de manos— y de fuerza, donde el gimnasta debe utilizar obligatoriamente las dos barras.', 5),
(10, 'Barra Fija', '     se trata de una barra de 2,40 m de largo, colocada paralela al suelo sobre una estructura de metal a 2,80 m de altura. La prueba consiste en movimientos de fuerza y equilibrio. El gimnasta debe hacer movimientos giratorios en una rutina acrobática, que incluye los giros propiamente dichos, sueltas, retomas y piruetas. Una de las características principales en este aparato es la fluidez con la que se desarrolla la rutina. Un elemento debe estar ligado a otro sin detención y manteniendo la continuidad y la dirección del movimiento inicial. Para tal efecto, cualquier interrupción o cambio injustificado de la dirección del movimiento es motivo de deducción. Otro elemento definitivo a calificar, es el ángulo donde se inicia o se finaliza cada ejercicio, tomando como referencia líneas imaginarias que nos marcan desde los 0º hasta los 360º', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aparatos`
--
ALTER TABLE `aparatos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aparatos`
--
ALTER TABLE `aparatos`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
