-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2018 a las 17:57:29
-- Versión del servidor: 5.7.22-0ubuntu18.04.1
-- Versión de PHP: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--
CREATE DATABASE IF NOT EXISTS `veterinaria` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `veterinaria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `duenios`
--

CREATE TABLE `duenios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `duenios`
--

INSERT INTO `duenios` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `direccion`) VALUES
(8, 'Enrique Miguel', 'López', '00000011', '0000000000', 'su casa'),
(9, 'Jose Fernando', 'Lopez Ortiz', '25887282', '04243375169', 'Avenida los llanos calle oasis'),
(10, 'kmk', 'mkmkm', '244141414', '112313123', 'kmkmkm'),
(11, 'uiqyeiuqwyeiqwyeiqwy', 'ywquyeqiuwyeiqwyeiquwyei', '132131231', '21631263182', 'yeqiueyqwuieyqiweiqqyeiqwyeiqwyei byewquyeiqwye');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `fecha_entrada` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_salida` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `veterinario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pulso` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `peso` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `temperatura` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `actitud` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cond_corporal` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hidratacion` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `observacion` text COLLATE utf8_spanish2_ci,
  `id_mascota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `fecha_entrada`, `fecha_salida`, `veterinario`, `pulso`, `peso`, `temperatura`, `actitud`, `cond_corporal`, `hidratacion`, `observacion`, `id_mascota`) VALUES
(8, '25/06/2018', '25/06/2018', 'jose', '20', '10', '50', 'Apoplético', 'Obeso', '0-5%', 'it\'s dead', 9),
(9, '25/06/2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10),
(12, '25/06/2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13),
(13, '25/06/2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `vacunas` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `raza` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `resumen` text COLLATE utf8_spanish2_ci NOT NULL,
  `deAlta` varchar(5) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'false',
  `id_duenio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombre`, `sexo`, `edad`, `tipo`, `color`, `vacunas`, `raza`, `resumen`, `deAlta`, `id_duenio`) VALUES
(9, 'mascota 1', 'macho', '2', 'perro', 'marrón', 'vacuna1, vacuna2', 'bulldog', 'el animal esta caliente', 'true', 8),
(10, 'bit', 'macho', '2', 'gato', 'gris', '', 'no se', 'tiene hambre', 'true', 9),
(13, 'misifu', 'hembra', '4', 'gato', 'negro', '', 'gatoasd', 'adadasndjsan naindiasndisandisnisandiasndi nasndisajndias nisadniasndaisnd iasnd iasnisan isadnsai dsa dias disa dias dais dsadasid said dasdad', 'true', 9),
(14, 'jerry', 'macho', '0.6', 'raton', 'gris', '', 'r4ton', 'bla bla bla bla bla bla bla bla bla bla', 'false', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  `respuesta` text COLLATE utf8_spanish2_ci NOT NULL,
  `visto_admin` tinyint(1) NOT NULL,
  `visto_usuario` tinyint(1) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `direccion`, `usuario`, `clave`) VALUES
(1, 'admin', 'admin', '00000000', '00000000000', 'direccion de la clinica', 'admin', 'admin'),
(5, 'Jose Fernando', 'Lopez Ortiz', '25887282', '04243375169', 'Avenida los llanos calle oasis', 'jose', 'jose');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `duenios`
--
ALTER TABLE `duenios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mascota_fk` (`id_mascota`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_duenio` (`id_duenio`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario_fk` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `duenios`
--
ALTER TABLE `duenios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `id_mascota_fk` FOREIGN KEY (`id_mascota`) REFERENCES `mascotas` (`id`);

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_1` FOREIGN KEY (`id_duenio`) REFERENCES `duenios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
