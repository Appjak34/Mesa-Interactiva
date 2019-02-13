-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2019 a las 06:19:40
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mesa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id` int(11) NOT NULL,
  `Imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Precio` double NOT NULL,
  `Marca` text COLLATE utf8_spanish_ci NOT NULL,
  `Modelo` text COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Color` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id`, `Imagen`, `Nombre`, `Precio`, `Marca`, `Modelo`, `Descripcion`, `Color`) VALUES
(1, 'motog7.jpeg', 'Moto G7', 5500, 'Motorola', 'XT1952-2', 'Experimenta el rendimiento súper rápido con el procesador Qualcomm® Snapdragon™ 632 octa-core que cuenta con 4GB de RAM y 64GB de ROM.\r\n\r\nPantalla\r\nLa pantalla Max Vision va más allá de las pantallas tradicionales, \r\nproporcionando una visualización máxima con formato 19: 9, \r\npara que te sientas inmerso en tus juegos y series favoritas.', 'Negro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
