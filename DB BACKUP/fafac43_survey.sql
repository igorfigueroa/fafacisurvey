-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2014 at 04:48 PM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fafac43_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `nombre_admin` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` (`nombre_admin`, `password`) VALUES
('ifigueroa', 'figueroa00'),
('calidadf', 'fafaci123');

-- --------------------------------------------------------

--
-- Table structure for table `fafacisurvey`
--

CREATE TABLE IF NOT EXISTS `fafacisurvey` (
  `id_surv` int(5) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cliente` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `pedido` varchar(100) NOT NULL,
  `satisfaccion` int(2) NOT NULL,
  `profesionalismo` int(2) NOT NULL,
  `organizacion` int(2) NOT NULL,
  `calidad` int(2) NOT NULL,
  `servicio_post_venta` int(2) NOT NULL,
  `satis_cliente` int(2) NOT NULL,
  `calidad_servicio` int(2) NOT NULL,
  `higiene_seguridad` int(2) NOT NULL,
  `rel_calidad_precio` int(2) NOT NULL,
  `cap_personal` int(2) NOT NULL,
  `equipo_herramienta` int(2) NOT NULL,
  `promedio` int(2) NOT NULL,
  `recomendacion` varchar(2) NOT NULL,
  `comentarios` varchar(250) NOT NULL,
  PRIMARY KEY (`id_surv`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fafacisurvey`
--

INSERT INTO `fafacisurvey` (`id_surv`, `fecha`, `cliente`, `empresa`, `pedido`, `satisfaccion`, `profesionalismo`, `organizacion`, `calidad`, `servicio_post_venta`, `satis_cliente`, `calidad_servicio`, `higiene_seguridad`, `rel_calidad_precio`, `cap_personal`, `equipo_herramienta`, `promedio`, `recomendacion`, `comentarios`) VALUES
(3, '2014-06-13 21:37:24', 'felipe duron', 'servicios industriales fafaci', 'cilindros', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 'Si', 'excelente trabajo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
