-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-03-2015 a las 23:26:14
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fafacisurvey`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos_encuesta`
--

CREATE TABLE IF NOT EXISTS `atributos_encuesta` (
  `id_atributo` int(11) NOT NULL AUTO_INCREMENT,
  `atributo_desc` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_atributo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `atributos_encuesta`
--

INSERT INTO `atributos_encuesta` (`id_atributo`, `atributo_desc`) VALUES
(1, 'SATISFACCION GENERAL'),
(2, 'PROFESIONALISMO'),
(3, 'ORGANIZACIÓN'),
(4, 'CALIDAD DEL PRODUCTO'),
(5, 'SERVICIO POST-VENTA'),
(6, 'SATISFACCIÓN DEL CLIENTE'),
(7, 'CALIDAD DEL SERVICIO'),
(8, 'HIGIENE Y SEGURIDAD'),
(9, 'RELACIÓN CALIDAD-PRECIO'),
(10, 'CAPACITACIÓN DEL PERSONAL'),
(11, 'EQUIPO Y HERRAMIENTA DE TRABAJO'),
(12, 'NOS RECOMIENDA'),
(13, 'COMENTARIOS DEL CLIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cte_encuesta`
--

CREATE TABLE IF NOT EXISTS `cte_encuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_encuesta` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cte_nombre` varchar(65) COLLATE utf8_spanish_ci NOT NULL,
  `cte_empresa` varchar(65) COLLATE utf8_spanish_ci NOT NULL,
  `cte_pedido` text COLLATE utf8_spanish_ci NOT NULL,
  `cte_email` varchar(65) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_encuesta` (`id_encuesta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `cte_encuesta`
--

INSERT INTO `cte_encuesta` (`id`, `id_encuesta`, `fecha`, `cte_nombre`, `cte_empresa`, `cte_pedido`, `cte_email`) VALUES
(1, 1, '2015-03-14 16:12:42', 'Igor Figueroa', 'CMINDUSTRIAL', 'Proyecto ficticio', 'ifigueroa@transmana.com'),
(2, 1, '2015-03-14 16:16:31', 'Igor Figueroa', 'CMINDUSTRIAL', 'Proyecto ficticio', 'ifigueroa@transmana.com'),
(3, 1, '2015-03-14 16:18:35', 'Igor Figueroa', 'CMINDUSTRIAL', 'Proyecto ficticio', 'ifigueroa@transmana.com'),
(4, 1, '2015-03-14 16:23:36', 'Igor Figueroa', 'CMINDUSTRIAL', 'Proyecto ficticio', 'ifigueroa@transmana.com'),
(5, 1, '2015-03-14 16:38:18', 'Igor Figueroa', 'CMINDUSTRIAL', 'Proyecto ficticio', 'ifigueroa@transmana.com'),
(6, 1, '2015-03-14 17:01:52', 'Igor Figueroa', 'CMINDUSTRIAL', 'Proyecto ficticio', 'ifigueroa@transmana.com'),
(7, 1, '2015-03-14 17:13:24', 'Igor Figueroa', 'CMINDUSTRIAL', 'Proyecto ficticio', 'ifigueroa@transmana.com'),
(8, 1, '2015-03-14 17:30:04', 'Igor Figueroa', 'CMINDUSTRIAL', 'Proyecto ficticio', 'ifigueroa@transmana.com'),
(9, 1, '2015-03-14 18:45:22', 'Igor Figueroa', 'CMINDUSTRIAL', 'Proyecto ficticio', 'ifigueroa@transmana.com'),
(10, 1, '2015-03-18 09:42:42', 'ANASTASIO ROSWELL', 'EMPRESA LA PALITA FELIZ', 'VALVULAS ROTATORIAS', 'ifigueroacalderon@gmail.com'),
(11, 1, '2015-03-18 09:47:04', 'Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±', 'Ã±Ã±Ã±Ã±Ã±Ã±Ã±', 'Ã±Ã±Ã±Ã±Ã±Ã±Ã±Ã±', 'ifigueroa@transmana.com'),
(12, 1, '2015-03-18 09:55:45', 'ññññññ', 'ññññññññññññ', 'ññññññññññññññññññ', 'asdsadasd@asdad.com'),
(13, 1, '2015-03-27 16:04:37', 'JOSE IGOR FIGUEROA CALDERON', 'TRANSPORTES MANA, S.A. DE C.V.', 'VALVULAS ROTATORIAS', 'igor.figueroa@transmana.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cte_encuesta`
--

CREATE TABLE IF NOT EXISTS `detalle_cte_encuesta` (
  `id_encuesta` int(11) NOT NULL,
  `id_atributo` int(2) NOT NULL,
  `atributos_cal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_cte_encuesta`
--

INSERT INTO `detalle_cte_encuesta` (`id_encuesta`, `id_atributo`, `atributos_cal`) VALUES
(1, 1, '5'),
(1, 2, '9'),
(1, 3, '9'),
(1, 4, '10'),
(1, 5, '10'),
(1, 6, '10'),
(1, 7, '10'),
(1, 8, '10'),
(1, 9, '10'),
(1, 10, '9'),
(1, 11, '9'),
(1, 12, 'No'),
(1, 13, 'Muy mal!'),
(2, 1, '10'),
(2, 2, '10'),
(2, 3, '10'),
(2, 4, '10'),
(2, 5, '10'),
(2, 6, '10'),
(2, 7, '10'),
(2, 8, '10'),
(2, 9, '10'),
(2, 10, '10'),
(2, 11, '10'),
(2, 12, 'Si'),
(2, 13, 'asdasdsadddsadsadsadsa'),
(3, 1, '10'),
(3, 2, '10'),
(3, 3, '10'),
(3, 4, '10'),
(3, 5, '10'),
(3, 6, '10'),
(3, 7, '10'),
(3, 8, '10'),
(3, 9, '10'),
(3, 10, '10'),
(3, 11, '10'),
(3, 12, 'Si'),
(3, 13, 'adada'),
(4, 1, '10'),
(4, 2, '10'),
(4, 3, '10'),
(4, 4, '10'),
(4, 5, '10'),
(4, 6, '10'),
(4, 7, '10'),
(4, 8, '10'),
(4, 9, '10'),
(4, 10, '10'),
(4, 11, '10'),
(4, 12, 'Si'),
(4, 13, ''),
(5, 1, '10'),
(5, 2, '10'),
(5, 3, '10'),
(5, 4, '10'),
(5, 5, '10'),
(5, 6, '10'),
(5, 7, '10'),
(5, 8, '10'),
(5, 9, '10'),
(5, 10, '10'),
(5, 11, '10'),
(5, 12, 'Si'),
(5, 13, 'ttt'),
(6, 1, '10'),
(6, 2, '10'),
(6, 3, '10'),
(6, 4, '10'),
(6, 5, '10'),
(6, 6, '10'),
(6, 7, '10'),
(6, 8, '10'),
(6, 9, '10'),
(6, 10, '10'),
(6, 11, '10'),
(6, 12, 'Si'),
(6, 13, 'qweqweq'),
(7, 1, '10'),
(7, 2, '10'),
(7, 3, '10'),
(7, 4, '10'),
(7, 5, '10'),
(7, 6, '10'),
(7, 7, '10'),
(7, 8, '10'),
(7, 9, '10'),
(7, 10, '10'),
(7, 11, '10'),
(7, 12, 'Si'),
(7, 13, 'Esto es un mensaje de prueba! Saludos.'),
(8, 1, '10'),
(8, 2, '10'),
(8, 3, '10'),
(8, 4, '10'),
(8, 5, '10'),
(8, 6, '10'),
(8, 7, '10'),
(8, 8, '10'),
(8, 9, '10'),
(8, 10, '10'),
(8, 11, '10'),
(8, 12, 'Si'),
(8, 13, 'qwerty'),
(9, 1, '10'),
(9, 2, '10'),
(9, 3, '10'),
(9, 4, '10'),
(9, 5, '10'),
(9, 6, '10'),
(9, 7, '10'),
(9, 8, '10'),
(9, 9, '10'),
(9, 10, '10'),
(9, 11, '10'),
(9, 12, 'Si'),
(9, 13, 'Esto es una prueba, todo bien?'),
(10, 1, '10'),
(10, 2, '9'),
(10, 3, '10'),
(10, 4, '9'),
(10, 5, '10'),
(10, 6, '9'),
(10, 7, '10'),
(10, 8, '9'),
(10, 9, '10'),
(10, 10, '9'),
(10, 11, '10'),
(10, 12, 'Si'),
(10, 13, 'Todo esta muy bien, la verdad cumplieron con mis expectativas pese a que en un inicio se tuvo problemas con su personal. Los recomiendo ampliamente. Saludos!'),
(11, 1, '10'),
(11, 2, '10'),
(11, 3, '10'),
(11, 4, '10'),
(11, 5, '10'),
(11, 6, '10'),
(11, 7, '10'),
(11, 8, '10'),
(11, 9, '10'),
(11, 10, '10'),
(11, 11, '10'),
(11, 12, 'Si'),
(11, 13, 'Ã±Ã±Ã±Ã±Ã±'),
(12, 1, '10'),
(12, 2, '10'),
(12, 3, '10'),
(12, 4, '10'),
(12, 5, '10'),
(12, 6, '10'),
(12, 7, '10'),
(12, 8, '10'),
(12, 9, '10'),
(12, 10, '10'),
(12, 11, '10'),
(12, 12, 'No'),
(12, 13, 'ñññññññ'),
(13, 1, '10'),
(13, 2, '10'),
(13, 3, '10'),
(13, 4, '10'),
(13, 5, '10'),
(13, 6, '10'),
(13, 7, '10'),
(13, 8, '10'),
(13, 9, '10'),
(13, 10, '10'),
(13, 11, '10'),
(13, 12, 'Si'),
(13, 13, 'Excelente servicio sigan asi!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE IF NOT EXISTS `encuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `encuesta_nombre` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`id`, `encuesta_nombre`) VALUES
(1, 'ENCUESTA DE SATISFACCION DE CLIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `password`) VALUES
(1, 'ifigueroa', 'figueroa00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
