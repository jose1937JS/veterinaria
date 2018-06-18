-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-06-2018 a las 23:27:12
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
(2, 'Jose Fernando', 'Lopez', '25887282', '04244444444', 'avenida los llanos calle oasis'),
(3, 'Juan Fernando', 'Lopez', '250000000', '00000000000', 'avenida los mandarinas calle nicolas maduro'),
(4, 'Iraida', 'Loepz', '10669419', '00000000000', 'asdsdas dasdasdsadasdsa das dsads dsadsadadsa'),
(5, 'nueve', 'numeros', '9999999', '9999999999', 'asdsa dasd asdasdasdas das da');

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
(1, 'Sunday 17 June 2018 18:27:44', 'Sunday 17 June 2018 23:04:19', 'asdasd', '4', '21', '12', 'Linfático', 'Obeso', '8-9%', 'sasdasdsadasd asdasd asd as dasd ', 2),
(2, 'Sunday 17 June 2018 20:19:00', 'Sunday 17 June 2018 23:04:19', 'asdasd', '4', '21', '12', 'Linfático', 'Obeso', '8-9%', 'sasdasdsadasd asdasd asd as dasd ', 3),
(3, 'Sunday 17 June 2018 (20 - 1):4', 'Sunday 17 June 2018 23:04:19', 'asdasd', '4', '21', '12', 'Linfático', 'Obeso', '8-9%', 'sasdasdsadasd asdasd asd as dasd ', 4),
(4, 'Sunday 17 June 2018 (22 - 1):2', 'Sunday 17 June 2018 23:04:19', 'asdasd', '4', '21', '12', 'Linfático', 'Obeso', '8-9%', 'sasdasdsadasd asdasd asd as dasd ', 5);

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
(2, 'Garfield', 'macho', '2', 'Gato', 'anaranjado con negro', 'rabia', 'specialcat', 'el gato se la pasa echado en algun sitio sin hacer nada y comiendo pasticho', 'true', 2),
(3, 'pag', 'macho', '1', 'perro', 'negro', 'rabia, moquillo, saranpion', 'pug', 'le falta una pata', 'false', 3),
(4, 'runner', 'macho', '4 años', 'dinosaurio', 'gris obscuro', '', 'velociraptor', 'ya no corre', 'false', 4),
(5, 'firulai', 'macho', '12', 'perro', 'marron', '', 'canilla', 'perro flaco', 'true', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('admin', 'admin');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `duenios`
--
ALTER TABLE `duenios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
