-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2020 a las 19:10:39
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

--
-- Volcado de datos para la tabla `albumnes`
--

INSERT INTO `albumnes` (`album_id`, `album_titulo`, `album_portada_principal`, `tipo_portada`) VALUES
(1, 'Album 1 EDITADO', 'https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/1fb0e031-54e4-4318-839a-dd33656b8b29___a616a6b4f195d08518b5d97bc3e9d223.svg', 'ie'),
(2, 'Album 1', 'plantilla_back/img/multimedia/logo.png', 'ii');

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
(5, 'Banner modificado', 'https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/1fb0e031-54e4-4318-839a-dd33656b8b29___a616a6b4f195d08518b5d97bc3e9d223.svg', 'ie'),
(7, 'Segundo banner', 'https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/1fb0e031-54e4-4318-839a-dd33656b8b29___a616a6b4f195d08518b5d97bc3e9d223.svg', 'ie');

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

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`blog_id`, `titulo_pub`, `contenido_pub`, `autor_pub`, `fecha_pub`, `portada_pub`, `tipo_portada`) VALUES
(1, 'Publicacion 1', 'Contenido de la publicacion 1', 'Administrador', '2020-09-30 15:24:19', 'plantilla_back/img/multimedia/logo.png', 'ii'),
(2, 'Publicacion 1 EDITADA', 'Publicacion 1 EDITADA', 'Administrador', '2020-10-01 14:33:38', 'plantilla_back/img/multimedia/logo.png', 'ii');

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

--
-- Volcado de datos para la tabla `contenido_galeria`
--

INSERT INTO `contenido_galeria` (`contenido_galeria_id`, `contenido_galeria_nombre`, `album_id`, `contenido_galeria_foto`, `tipo_portada`) VALUES
(1, 'Elemento galeria', 1, 'https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/1fb0e031-54e4-4318-839a-dd33656b8b29___a616a6b4f195d08518b5d97bc3e9d223.svg', 'ie'),
(2, 'Elemento galeria editadorferfer', 1, 'plantilla_back/img/multimedia/logo.png', 'ii');

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

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`personal_id`, `personal_nombre`, `personal_cargo`, `perfil_profesional`, `personal_foto`, `link_facebook`, `link_instagram`, `link_twitter`, `tipo_portada`) VALUES
(1, 'Jesus david duran modificado', 'Coordinador tics modificado', 'Tecnólogo en análisis y desarrollo de sistemas de información modificado', 'plantilla_back/img/multimedia/logo.png', 'enlace facebook modificado', 'enlace facebook modificado', 'enlace facebook modificado', 'ii'),
(2, 'Jesus david duran', 'Coordinador tics', 'Tecnólogo en análisis y desarrollo de sistemas de información', 'plantilla_back/img/multimedia/logo.png', 'enlace facebook', 'enlace facebook', 'enlace facebook', 'ii');

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
(1, 'Programa 1 modificado', 'Contenido del programa 1 modificado', 'plantilla_back/img/multimedia/logo.png', 'ii'),
(2, 'Programa 1', 'Contenido del programa 1', 'https://exitocol.vtexassets.com/assets/vtex.file-manager-graphql/images/1fb0e031-54e4-4318-839a-dd33656b8b29___a616a6b4f195d08518b5d97bc3e9d223.svg', 'ie'),
(3, 'Programa 2', 'Contenido del programa numero 2', 'plantilla_back/img/multimedia/logo.png', 'ii');

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
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contenido_galeria`
--
ALTER TABLE `contenido_galeria`
  MODIFY `contenido_galeria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `programa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
