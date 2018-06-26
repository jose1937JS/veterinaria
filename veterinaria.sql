-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-06-2018 a las 13:20:50
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
(9, 'José Fernando', 'López Ortiz', '25887282', '04243375169', 'Avenida los llanos calle oasis'),
(10, 'kmk', 'mkmkm', '244141414', '112313123', 'kmkmkm'),
(11, 'uiqyeiuqwyeiqwyeiqwy', 'ywquyeqiuwyeiqwyeiquwyei', '132131231', '21631263182', 'yeqiueyqwuieyqiweiqqyeiqwyeiqwyei byewquyeiqwye'),
(12, 'ugo Ratael', 'Chiabes Frias', '1000000', '0414111111', 'miraglores'),
(13, 'Iraida', 'Lopez', '10669419', '04144441141', 'su casa'),
(14, 'Gibert', 'Carrera Morey', '23795320', '04164376667', 'Cagua la haciendita'),
(15, 'Julio', 'Yánez', '26062083', '0555555551', 'la victoria');

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
(17, '26/06/2018', '26/06/2018', 'jose', '90', '3', '40', 'Asténico', 'Normal', '0-5%', 'esta grave, hay q aplicarle una cirugia reconstructiva en el ojo y en la cola', 18),
(18, '26/06/2018', '26/06/2018', 'jose', '90', '3', '40', 'Asténico', 'Normal', '0-5%', 'esta grave, hay q aplicarle una cirugia reconstructiva en el ojo y en la cola', 19),
(19, '26/06/2018', '26/06/2018', 'maduto', '90', '19', '10', 'Asténico', 'Caquéctico', 'Normal', 'is dead', 20);

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
(18, 'bit', 'hembra', '2', 'gato', 'negro', '', 'ñaa', 'blablabla blablablabla blablabla blabla bla bla bla bla bla bla bla', 'false', 14),
(19, 'misifu', 'macho', '10', 'gato', 'gris', 'no, tiene, vacuna, se va a moir', 'asdad', 'sdjasjaklsjdlkasjdlasjdlasjdasljd', 'true', 14),
(20, 'lucky', 'macho', '2', 'perro', 'gris, blanco, negro', 'rabia, todas, las, demas, esta, al, dia', 'lobo siberiano', 'esta verde', 'true', 15);

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

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `mensaje`, `respuesta`, `visto_admin`, `visto_usuario`, `id_usuario`) VALUES
(21, 'ola como stas ?', 'bien y tu ?', 1, 1, 7);

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
(5, 'José Fernando', 'López Ortiz', '25887282', '04243375169', 'Avenida los llanos calle oasis', 'jose', 'jose'),
(6, 'Iraida', 'Lopez', '10669419', '04144441141', 'su casa', 'iraida', 'lopez'),
(7, 'Gibert', 'Carrera Morey', '23795320', '04164376667', 'Cagua la haciendita', 'giber', 'giber');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
