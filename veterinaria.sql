-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-06-2018 a las 09:18:46
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
(5, 'nueve', 'numeros', '9999999', '9999999999', 'asdsa dasd asdasdasdas das da'),
(6, 'Ulises Antonio', 'Medrano', '27345678', '0444444441', 'la villa');

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
(1, 'Sunday 17 June 2018 18:27:44', '20/06/2018', 'asdadveterinario nombre pedro', '9', '10', '23', 'Linfático', 'Caquéctico', '0-5%', 'esto es una pequeña observacion si', 2),
(2, 'Sunday 17 June 2018 20:19:00', '20/06/2018', 'asdadveterinario nombre pedro', '9', '10', '23', 'Linfático', 'Caquéctico', '0-5%', 'esto es una pequeña observacion si', 3),
(3, 'Sunday 17 June 2018 (20 - 1):4', '20/06/2018', 'asdadveterinario nombre pedro', '9', '10', '23', 'Linfático', 'Caquéctico', '0-5%', 'esto es una pequeña observacion si', 4),
(5, 'Tuesday 19 June 2018 (01 - 1):', '20/06/2018', 'asdadveterinario nombre pedro', '9', '10', '23', 'Linfático', 'Caquéctico', '0-5%', 'esto es una pequeña observacion si', 6);

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
(3, 'pag', 'macho', '1', 'perro', 'negro', 'rabia, moquillo, saranpion', 'pug', 'le falta una pata', 'true', 3),
(4, 'runner', 'macho', '4 años', 'dinosaurio', 'gris obscuro', '', 'velociraptor', 'ya no corre', 'true', 4),
(6, 'eltigre', 'macho', '3', 'tigre', 'anaranjado con negro', 'rabia, otadas, asdasd, asd, asdas, das, dasdasd', 'bengala', 'lises es homosexual, y le hgustan los tigres. ', 'true', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  `respuesta` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `mensaje`, `respuesta`, `id_usuario`) VALUES
(1, 'dfdfsdfsdfffsf dfsdfsjnlskdjsadjksajdsakl lkasjklasjsdlkasj dlkasjdlksjdlksjklas jdsdjldjlkjdlksjdlsj lkasjklasjlalss', 'respuistas', 2),
(6, 'hoal soy gibert\r\n', 'hola gibert soy el veterinario.', 3),
(7, 'hoal soy gibert\r\n', 'sadasdasdadsadasda', 3),
(8, 'hola soy asdasdsad', 'adasdkjsakldjasjdasjldkjalsjdlaskdjaslkdjaslkdjalsjdlasjd', 2),
(9, 'mensaje de prueba de parte de jose lopex\r\n', 'respueta de prueba de parte de l veterinario', 2);

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
(2, 'Jose', 'Lopez', '25887282', '04144444444', 'mi casa', 'jose', 'jose'),
(3, 'Gibert', 'Carrera', '23795320', '04144441111', 'Cagua', 'gibert', 'gibert');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
