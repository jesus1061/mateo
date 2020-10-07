-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2020 a las 21:47:38
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
(7, 'Album 1', 'plantilla_back/img/multimedia/banner.jpg', 'ii');

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
(22, 'Banner1', 'plantilla_back/img/multimedia/banner.jpg', 'ii'),
(23, 'ghtgyhnh', 'https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://www.redepyme.co/inicio/wp-content/uploads/2020/03/3.jpg', 'ie');

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
(7, 'Publicacion 1 EDITADA', 'grgg', 'Administrador', '2020-10-07 16:02:05', 'plantilla_back/img/multimedia/banner.jpg', 'ii'),
(8, 'Publicación 1', 'cokdkmdfdf', 'Administrador', '2020-10-07 16:02:39', 'https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://www.redepyme.co/inicio/wp-content/uploads/2020/03/3.jpg', 'ie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `contacto_id` int(11) NOT NULL,
  `nombre_completo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `mensaje` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`contacto_id`, `nombre_completo`, `correo`, `mensaje`, `telefono`) VALUES
(1, 'Jesus David', 'jduran1061539548@gmail.com', 'Aqui va el mensaje', ''),
(2, 'Jesus david chaguendo duran', 'jduran1061539548@gmail.com', 'Aqui va el mensaje para comunicarse con el administrador de la pagina y con servicio al cliente', '3183058771'),
(3, 'Jesus david Duran', 'jduran1061539548@gmail.com', 'Aquí va el mensaje para comunicarse con servicio al cliente', '3183058771');

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
(27, 'd', 7, 'plantilla_back/img/multimedia/banner.jpg', 'ii');

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
(54, 'archivo prueba', 'ii', '<img src=\"../plantilla_back/img/multimedia/banner.jpg\" class=\"img-archivo\" id=\"ii\">'),
(55, 'archivo prueba', 'ie', '<img src=\"https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://www.redepyme.co/inicio/wp-content/uploads/2020/03/3.jpg\" class=\"img-archivo\" id=\"ie\">');

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
(8, 'dd', 'dd', 'dd', 'plantilla_back/img/multimedia/banner.jpg', 'enlace facebook modificaddo', 'enlace facebook modificadod', 'enlace facebook modificadod', 'ii');

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
(9, 'd', 'd', 'plantilla_back/img/multimedia/banner.jpg', 'ii');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `visita_id` int(11) NOT NULL,
  `visita_fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`visita_id`, `visita_fecha`) VALUES
(1, '2020-10-06 17:18:43'),
(2, '2020-10-06 17:28:47'),
(3, '2020-10-06 17:43:40'),
(4, '2020-10-06 17:49:20'),
(5, '2020-10-06 17:50:58'),
(6, '2020-10-06 17:52:01'),
(7, '2020-10-06 17:54:44'),
(8, '2020-10-06 18:04:54'),
(9, '2020-10-06 18:09:51'),
(10, '2020-10-06 18:10:07'),
(11, '2020-10-06 18:11:10'),
(12, '2020-10-06 18:11:31'),
(13, '2020-10-06 18:11:54'),
(14, '2020-10-06 18:13:36'),
(15, '2020-10-06 18:13:55'),
(16, '2020-10-06 18:16:52'),
(17, '2020-10-06 18:18:00'),
(18, '2020-10-06 18:22:53'),
(19, '2020-10-06 18:30:58'),
(20, '2020-10-06 18:34:28'),
(21, '2020-10-06 20:19:08'),
(22, '2020-10-06 20:34:05'),
(23, '2020-10-06 20:40:07'),
(24, '2020-10-06 20:51:16'),
(25, '2020-10-06 20:51:39'),
(26, '2020-10-06 20:54:16'),
(27, '2020-10-06 21:03:38'),
(28, '2020-10-06 21:48:49'),
(29, '2020-10-07 13:56:47'),
(30, '2020-10-07 15:39:20'),
(31, '2020-10-07 16:19:20'),
(32, '2020-10-07 17:40:43'),
(33, '2020-10-07 18:00:32'),
(34, '2020-10-07 19:45:06');

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
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`contacto_id`);

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
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`visita_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumnes`
--
ALTER TABLE `albumnes`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `contacto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contenido_galeria`
--
ALTER TABLE `contenido_galeria`
  MODIFY `contenido_galeria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `programa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios_administradores`
--
ALTER TABLE `usuarios_administradores`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `visita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
