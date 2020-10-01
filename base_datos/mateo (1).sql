-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2020 a las 01:32:24
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
-- Estructura de tabla para la tabla `albumnes`
--

CREATE TABLE `albumnes` (
  `album_id` int(11) NOT NULL,
  `album_titulo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `album_portada_principal` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_portada` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `titulo_pub` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contenido_pub` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `autor_pub` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_pub` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `portada_pub` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_portada` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_galeria`
--

CREATE TABLE `contenido_galeria` (
  `contenido_galeria_id` int(11) NOT NULL,
  `contenido_galeria_nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `album_id` int(11) NOT NULL,
  `contenido_galeria_foto` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_portada` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
(43, 'Banner1', 'ii', '<img src=\"../plantilla_back/img/multimedia/banner.jpg\" class=\"img-archivo\" id=\"ii\">'),
(44, 'Banne2', 'ii', '<img src=\"../plantilla_back/img/multimedia/redepyme.jpg\" class=\"img-archivo\" id=\"ii\">'),
(45, 'Banner3', 'ie', '<img src=\"https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://www.redepyme.co/inicio/wp-content/uploads/2020/03/3.jpg\" class=\"img-archivo\" id=\"ie\">');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `personal_id` int(11) NOT NULL,
  `personal_nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `personal_cargo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `perfil_profesional` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `personal_foto` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `link_facebook` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `link_instagram` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `link_twitter` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_portada` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_administradores`
--

CREATE TABLE `usuarios_administradores` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios_administradores`
--

INSERT INTO `usuarios_administradores` (`usuario_id`, `usuario`, `clave`) VALUES
(1, 'david', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albumnes`
--
ALTER TABLE `albumnes`
  ADD PRIMARY KEY (`album_id`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indices de la tabla `contenido_galeria`
--
ALTER TABLE `contenido_galeria`
  ADD PRIMARY KEY (`contenido_galeria_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indices de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`programa_id`);

--
-- Indices de la tabla `usuarios_administradores`
--
ALTER TABLE `usuarios_administradores`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumnes`
--
ALTER TABLE `albumnes`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contenido_galeria`
--
ALTER TABLE `contenido_galeria`
  MODIFY `contenido_galeria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `programa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios_administradores`
--
ALTER TABLE `usuarios_administradores`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contenido_galeria`
--
ALTER TABLE `contenido_galeria`
  ADD CONSTRAINT `contenido_galeria_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albumnes` (`album_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
