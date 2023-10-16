-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2023 a las 20:07:23
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
-- Base de datos: `pt03_angel_tarensi`
--
DROP DATABASE IF EXISTS `pt03_angel_tarensi`;
CREATE DATABASE IF NOT EXISTS `pt03_angel_tarensi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pt03_angel_tarensi`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `Id` int(11) NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`Id`, `article`) VALUES
(1, 'Csgo'),
(2, 'Csgo2'),
(3, 'Valorant'),
(4, 'League of legends'),
(5, 'Overwatch'),
(6, 'World of Warcraft'),
(7, 'The simpsons hit and run'),
(8, 'Team fight tactics'),
(9, 'Team fortress 2'),
(10, 'Pokemon verde'),
(11, 'Pokemon amarillo'),
(12, 'Pokemon diamante'),
(13, 'Pokemon esmeralada'),
(14, 'Pokemon platino'),
(15, 'Pokemon negro'),
(16, 'Pokemon blanco'),
(17, 'Pokmeong go'),
(18, 'Brawlhalla'),
(19, 'osu!'),
(20, 'Tetris'),
(21, 'Ajedrez'),
(22, 'Monopoly'),
(23, 'Buscaminas'),
(24, 'Dota 2'),
(25, 'Smite'),
(26, 'Mario kart'),
(27, 'Super smash bros'),
(28, 'Super smash bros ultimate'),
(29, 'Mario galaxy'),
(30, 'Mario maker'),
(31, 'Sonic'),
(32, 'pac-man'),
(33, 'Sea of thieves'),
(34, 'Black desert'),
(35, 'Lost ark'),
(36, 'Cookie clicker'),
(37, 'Realm of the mad god'),
(38, 'Assetto corsa'),
(39, 'Monster hunter rise'),
(40, 'Monster hunter world'),
(41, 'Batman arkham'),
(42, 'Ark survival evolved'),
(43, 'Baloons TD battles'),
(44, 'Trove'),
(45, 'Elsword'),
(46, 'Nostale'),
(47, 'Albion online'),
(48, '7 days to die'),
(49, 'Dead cells'),
(50, 'Hollow knight'),
(51, 'Deceit'),
(52, 'Destiny 2'),
(53, 'Don\'t starve together'),
(54, 'Grand theft auto: san andres'),
(55, 'Grand theft auto V'),
(56, 'Grand theft auto: vice city'),
(57, 'Grand theft auto III'),
(58, 'Grand theft auto IV'),
(59, 'Gran turismo'),
(60, 'Half-life'),
(61, 'Limbo'),
(62, 'Paladins'),
(63, 'Payday 2'),
(64, 'Payday 3'),
(65, 'Terraria'),
(66, 'Minecraft'),
(67, 'Roblox'),
(68, 'Uno'),
(69, 'Unturned'),
(70, 'War thunder'),
(71, 'Aimlab'),
(72, 'Dark souls'),
(73, 'Demon souls'),
(74, 'The witcher III'),
(75, 'Dead red redemption 2'),
(76, 'Bloodborne'),
(77, 'Sekiro'),
(78, 'Elden ring'),
(79, 'Apex legends'),
(80, 'Among us'),
(81, 'Beyond two souls'),
(82, 'Bioshock'),
(83, 'Call of Duty'),
(84, 'Black ops 2'),
(85, 'Cube world'),
(86, 'No man\'s sky'),
(87, 'Starfield'),
(88, 'God of war ragnarok'),
(89, 'Dead by daylight'),
(90, 'Defiance'),
(91, 'Dc universe online'),
(92, 'Dungeon fighter online'),
(93, 'Eternal return'),
(94, 'Euro truck simulator'),
(95, 'Fallout'),
(96, 'Fallout shelter'),
(97, 'Hacknet'),
(98, 'Helltaker'),
(99, 'Himno'),
(100, 'Iron snout'),
(101, 'Lethal league'),
(102, 'Sifu'),
(103, 'Left 4 dead 2'),
(104, 'L.A noire'),
(105, 'Battlefield 3'),
(106, 'Naraka bladepoint'),
(107, 'Omega strikers'),
(108, 'Multiversus');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
