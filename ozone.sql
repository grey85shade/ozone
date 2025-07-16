-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-12-2022 a las 22:58:42
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ozone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `url` varchar(150) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `grupo` int NOT NULL,
  `subgrupo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `position` int DEFAULT NULL,
  `shared` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `links`
--

INSERT INTO `links` (`id`, `id_user`, `url`, `domain`, `grupo`, `subgrupo`, `tags`, `name`, `image`, `date`, `position`, `shared`) VALUES
(1, 1, 'https://www.google.com', 'google.com', 1, 'buscador', 'search engine, buscador', 'finder', NULL, '2022-11-15', 1, NULL),
(3, 1, 'https://todotorrents.net/series/hd/letra-d/page/6', 'todotorrents.net', 3, 'torrents', 'series, torrent', 'Torrent series, todotorrent', NULL, '2022-11-16', 2, NULL),
(4, 1, 'https://rolandocaldas.com/php/css3-basico-1-php-paso-a-paso', 'rolandocaldas.com', 2, 'css', 'programing, css, guia', 'css3 basico', NULL, '2022-11-15', 3, NULL),
(5, 1, 'https://rolandocaldas.com/php/css3-basico-1-php-paso-a-paso', 'rolandocaldas.com', 2, 'css', 'programing, css, guia', 'css3 basico 2', NULL, '2022-11-15', 3, NULL),
(6, 1, 'https://www.google.com', 'google.com', 1, 'buscador 2', 'search engine, buscador', 'finder2', NULL, '2022-11-15', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `link_groups`
--

DROP TABLE IF EXISTS `link_groups`;
CREATE TABLE IF NOT EXISTS `link_groups` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `color` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `link_groups`
--

INSERT INTO `link_groups` (`id`, `id_user`, `nombre`, `color`) VALUES
(1, 1, 'General', 'pink'),
(2, 1, 'Programing', 'green'),
(3, 1, 'Downloads', 'black'),
(4, 1, 'Comics', 'blue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `name`, `surname`, `pass`, `mail`) VALUES
(1, 'grey', 'B', 'Caste', '$2y$10$q2hKNA1EntUD06OeNveAO.I4l2WjCxH/j4A8TOT1Vmuj99BNccEIO', NULL),
(2, 'blue', 'Cosa', 'Apellido de cosa', '$2y$10$q2hKNA1EntUD06OeNveAO.I4l2WjCxH/j4A8TOT1Vmuj99BNccEIO', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
