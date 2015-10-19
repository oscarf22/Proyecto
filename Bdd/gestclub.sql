-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2015 a las 00:04:00
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `id_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `id_provincia` int(11) NOT NULL,
  `nombre_ciudad` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_ciudad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubes`
--

CREATE TABLE IF NOT EXISTS `clubes` (
  `id_club` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_club` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fundacion` date NOT NULL,
  PRIMARY KEY (`id_club`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE IF NOT EXISTS `cuotas` (
  `id_cuotas` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `cuota_mes` int(11) NOT NULL,
  `cuota_anio` year(4) NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `id_tipo_cuota` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `monto_pagado` int(11) NOT NULL,
  `descuento` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cuotas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE IF NOT EXISTS `deportes` (
  `id_deporte` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_deporte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE IF NOT EXISTS `egresos` (
  `id_egresos` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `monto` float NOT NULL,
  `id_item` int(11) NOT NULL,
  PRIMARY KEY (`id_egresos`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE IF NOT EXISTS `ingresos` (
  `id_ingresos` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `monto` float NOT NULL,
  `id_item` int(11) NOT NULL,
  PRIMARY KEY (`id_ingresos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id_items` int(11) NOT NULL AUTO_INCREMENT,
  `item_descripcion` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`id_items`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_por_usuario`
--

CREATE TABLE IF NOT EXISTS `login_por_usuario` (
  `id_login_por_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_login_por_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `tel_fijo` varchar(15) COLLATE utf32_spanish_ci NOT NULL,
  `tel_movil` varchar(15) COLLATE utf32_spanish_ci NOT NULL,
  `direcion` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `mail` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `id_tipo_persona` int(11) NOT NULL,
  `fecha_nac` datetime NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL,
  `id_tipo_socio` int(11) NOT NULL,
  `id_tipo_cuota` int(11) NOT NULL,
  `descuento` float DEFAULT NULL,
  `id_deporte` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `id_provincia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_provincia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_provincia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE IF NOT EXISTS `recibos` (
  `id_recibos` int(11) NOT NULL AUTO_INCREMENT,
  `id_personas` int(11) NOT NULL,
  `id_tipo_cuotas` int(11) NOT NULL,
  `monto` float NOT NULL,
  `descuento` float NOT NULL,
  `total` float NOT NULL,
  `nro_copia` int(11) NOT NULL,
  `impreso` varchar(2) COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`id_recibos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id_test` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_test` int(11) NOT NULL,
  `id_tipo_medicion` int(11) NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cuotas`
--

CREATE TABLE IF NOT EXISTS `tipo_cuotas` (
  `id_tipo_cuotas` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_cuota` varchar(20) COLLATE utf32_spanish_ci NOT NULL,
  `monto` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo_cuotas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE IF NOT EXISTS `tipo_persona` (
  `id_tipo_persona` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo_persona`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_socios`
--

CREATE TABLE IF NOT EXISTS `tipo_socios` (
  `id_tipo_socios` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) COLLATE utf32_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo_socios`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_test`
--

CREATE TABLE IF NOT EXISTS `tipo_test` (
  `id_tipo_test` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_test` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `parametro1` int(11) NOT NULL,
  `parametro2` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo_test`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
