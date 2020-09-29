-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2020 a las 00:19:17
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mateo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `banner_nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `banner_imagen` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_banner` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_nombre`, `banner_imagen`, `tipo_banner`) VALUES
(5, 'Banner 1', 'plantilla_back/img/multimedia/logo.png', 'ii'),
(7, 'Segundo banner', 'https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/1fb0e031-54e4-4318-839a-dd33656b8b29___a616a6b4f195d08518b5d97bc3e9d223.svg', 'ie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimedia`
--

CREATE TABLE `multimedia` (
  `id_archivo` int(11) NOT NULL,
  `nombre_archivo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_archivo` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `archivo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `multimedia`
--

INSERT INTO `multimedia` (`id_archivo`, `nombre_archivo`, `tipo_archivo`, `archivo`) VALUES
(40, 'Banner 1', 'ii', '<img src=\"../plantilla_back/img/multimedia/logo.png\" class=\"img-archivo\" id=\"ii\">'),
(41, 'Imagen externa', 'ie', '<img src=\"https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/1fb0e031-54e4-4318-839a-dd33656b8b29___a616a6b4f195d08518b5d97bc3e9d223.svg\" class=\"img-archivo\" id=\"ie\">'),
(42, 'Video externo', 've', '<iframe src=\"https://www.youtube.com/embed/CSslVENHKag\" class=\"img-archivo\" id=\"ve\"></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `programa_id` int(11) NOT NULL,
  `titulo_programa` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contenido_programa` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `portada_programa` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_portada` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`programa_id`, `titulo_programa`, `contenido_programa`, `portada_programa`, `tipo_portada`) VALUES
(1, 'Programa 1', 'Contenido del programa 1', 'https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/1fb0e031-54e4-4318-839a-dd33656b8b29___a616a6b4f195d08518b5d97bc3e9d223.svg', 'ie'),
(2, 'Programa 1', 'Contenido del programa 1', 'https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/1fb0e031-54e4-4318-839a-dd33656b8b29___a616a6b4f195d08518b5d97bc3e9d223.svg', 'ie'),
(3, 'Programa 2', 'Contenido del programa numero 2', 'plantilla_back/img/multimedia/logo.png', 'ii');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indices de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`programa_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `programa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
