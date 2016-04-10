-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2016 a las 16:06:45
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `id_libro` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `titulo` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `editorial` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_edicion` date NOT NULL,
  `SBN` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `autor`, `titulo`, `editorial`, `fecha_edicion`, `SBN`) VALUES
(1, 'Mao Zedong', 'Libro Rojo de Mao', 'Government of China', '1969-01-01', 'LL1'),
(2, 'J. K. Rowling', 'Harry Potter y la piedra filos', 'Salamandra', '1997-06-26', 'LL2'),
(4, 'J. R. R. Tolkien', 'El Señor de los Anillos', 'Minotauro', '1954-07-29', 'LL3'),
(5, 'Paulo Coelho', 'El Alquimista', 'Grijalbo', '1988-01-01', 'LL4'),
(6, 'Dan Brown', 'El Código da Vinci', 'Planeta', '2003-03-18', 'LL5'),
(18, 'jahahag', 'hahahag', 'kskajash', '1362-03-03', 'llj'),
(19, 'Paulo Coelho', 'El Alquimista', 'Grijalbo', '1988-01-01', 'LL4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
