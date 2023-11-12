-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2023 a las 15:06:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pt05_angel_tarensi`
--
DROP DATABASE IF EXISTS `pt05_angel_tarensi`;
CREATE DATABASE IF NOT EXISTS `pt05_angel_tarensi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pt05_angel_tarensi`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article` text NOT NULL,
  `id_usuari` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `fk_id_usuari_id` (`id_usuari`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `article`, `id_usuari`) VALUES
(1, 'Csgo', NULL),
(2, 'Csgo2', NULL),
(3, 'Valorant', NULL),
(4, 'League of legends', NULL),
(5, 'Overwatch', NULL),
(6, 'World of Warcraft', NULL),
(7, 'The simpsons hit and run', NULL),
(8, 'Team fight tactics', NULL),
(9, 'Team fortress 2', NULL),
(10, 'Pokemon verde', NULL),
(11, 'Pokemon amarillo', NULL),
(12, 'Pokemon diamante', NULL),
(13, 'Pokemon esmeralada', NULL),
(14, 'Pokemon platino', NULL),
(15, 'Pokemon negro', NULL),
(16, 'Pokemon blanco', NULL),
(17, 'Pokmeong go', NULL),
(18, 'Brawlhalla', NULL),
(19, 'osu!', NULL),
(20, 'Tetris', NULL),
(21, 'Ajedrez', NULL),
(22, 'Monopoly', NULL),
(23, 'Buscaminas', NULL),
(24, 'Dota 2', NULL),
(25, 'Smite', NULL),
(26, 'Mario kart', NULL),
(27, 'Super smash bros', NULL),
(28, 'Super smash bros ultimate', NULL),
(29, 'Mario galaxy', NULL),
(30, 'Mario maker', NULL),
(31, 'Sonic', NULL),
(32, 'pac-man', NULL),
(33, 'Sea of thieves', NULL),
(34, 'Black desert', NULL),
(35, 'Lost ark', NULL),
(36, 'Cookie clicker', NULL),
(37, 'Realm of the mad god', NULL),
(38, 'Assetto corsa', NULL),
(39, 'Monster hunter rise', NULL),
(40, 'Monster hunter world', NULL),
(41, 'Batman arkham', NULL),
(42, 'Ark survival evolved', NULL),
(43, 'Baloons TD battles', NULL),
(44, 'Trove', NULL),
(45, 'Elsword', NULL),
(46, 'Nostale', NULL),
(47, 'Albion online', NULL),
(48, '7 days to die', NULL),
(49, 'Dead cells', NULL),
(50, 'Hollow knight', NULL),
(51, 'Deceit', NULL),
(52, 'Destiny 2', NULL),
(53, 'Don\'t starve together', NULL),
(54, 'Grand theft auto: san andres', NULL),
(55, 'Grand theft auto V', NULL),
(56, 'Grand theft auto: vice city', NULL),
(57, 'Grand theft auto III', NULL),
(58, 'Grand theft auto IV', NULL),
(59, 'Gran turismo', NULL),
(60, 'Half-life', NULL),
(61, 'Limbo', NULL),
(62, 'Paladins', NULL),
(63, 'Payday 2', NULL),
(64, 'Payday 3', NULL),
(65, 'Terraria', NULL),
(66, 'Minecraft', NULL),
(67, 'Roblox', NULL),
(68, 'Uno', NULL),
(69, 'Unturned', NULL),
(70, 'War thunder', NULL),
(71, 'Aimlab', NULL),
(72, 'Dark souls', NULL),
(73, 'Demon souls', NULL),
(74, 'The witcher III', NULL),
(75, 'Dead red redemption 2', NULL),
(76, 'Bloodborne', NULL),
(77, 'Sekiro', NULL),
(78, 'Elden ring', NULL),
(79, 'Apex legends', NULL),
(80, 'Among us', NULL),
(81, 'Beyond two souls', NULL),
(82, 'Bioshock', NULL),
(83, 'Call of Duty', NULL),
(84, 'Black ops 2', NULL),
(85, 'Cube world', NULL),
(86, 'No man\'s sky', NULL),
(87, 'Starfield', NULL),
(88, 'God of war ragnarok', NULL),
(89, 'Dead by daylight', NULL),
(90, 'Defiance', NULL),
(91, 'Dc universe online', NULL),
(92, 'Dungeon fighter online', NULL),
(93, 'Eternal return', NULL),
(94, 'Euro truck simulator', NULL),
(95, 'Fallout', NULL),
(96, 'Fallout shelter', NULL),
(97, 'Hacknet', NULL),
(98, 'Helltaker', NULL),
(99, 'Himno', NULL),
(100, 'Iron snout', NULL),
(101, 'Lethal league', NULL),
(102, 'Sifu', NULL),
(103, 'Left 4 dead 2', NULL),
(104, 'L.A noire', NULL),
(105, 'Battlefield 3', NULL),
(106, 'Naraka bladepoint', NULL),
(107, 'Omega strikers', NULL),
(108, 'Multiversus', NULL),
(159, 'prova', 10),
(160, 'prova2', 10),
(161, 'prova2', 10),
(162, 'prova3', 10),
(163, 'prova3', 10),
(164, 'prova3', 10),
(165, 'prova3', 10),
(166, 'provaOAUTH', 11),
(167, 'provaOAUTH2', 11),
(168, 'provaOAUTH2', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
CREATE TABLE IF NOT EXISTS `usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `google_id` text DEFAULT NULL,
  `token` text NOT NULL,
  `token_time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `google_id` (`google_id`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`id`, `username`, `email`, `password`, `google_id`, `token`, `token_time`) VALUES
(8, 'prova', 'atarensi@gmail.com', '$2y$10$1AsuL8i6z/mDTrkfPiCs7eOTPMwOZ7TyqBH7bndqD18Vj6Hw6twM6', NULL, '588a66dca54dbc7cd5778b3df55d1d06', '2023-11-06 17:47:25'),
(9, 'prova2', 'testdevirusyprovas@gmail.com', '$2y$10$Z4Bm.Zqvz24OFQ7tXdiQ.e0qlzdWccPbhwhQzvDCHMTYHx97DhVlq', NULL, '', '2023-10-29 23:00:00'),
(10, 'atarensi', 'a.tarensi2@sapalomera.cat', '$2y$10$fa6..Sxh/TPetfqxXWFjh.OyHltAYdhqLGIiuh33tIdiTNuxq..n2', NULL, '798028624d2efab46d72d9df2e1f27d2', '2023-11-12 14:02:02'),
(11, '', 'xz1kkx@gmail.com', '', '110032496376064467562', '', '2023-11-10 15:39:39');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_id_usuari_id` FOREIGN KEY (`id_usuari`) REFERENCES `usuaris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
