-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: db-pdo
-- Tiempo de generación: 19-02-2022 a las 02:53:53
-- Versión del servidor: 8.0.28
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tarefa`
--
CREATE DATABASE IF NOT EXISTS `tarefa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `tarefa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aluga`
--

CREATE TABLE IF NOT EXISTS `aluga` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idProducto` int NOT NULL,
  `idCliente` int NOT NULL,
  `dataInicio` datetime NOT NULL,
  `dataFin` datetime NOT NULL,
  `prezoTotal` int NOT NULL,
  `devolto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `aluga`
--

INSERT INTO `aluga` (`id`, `idProducto`, `idCliente`, `dataInicio`, `dataFin`, `prezoTotal`, `devolto`) VALUES
(1, 1, 2, '2022-02-15 00:00:00', '2022-02-23 00:00:00', 3000, 0),
(2, 1, 2, '2022-02-17 00:00:00', '2022-02-23 00:00:00', 3000, 0),
(3, 1, 2, '2022-02-17 00:00:00', '2022-02-23 00:00:00', 3000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `comments` text NOT NULL,
  `data` datetime NOT NULL,
  `idProducto` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `user`, `comments`, `data`, `idProducto`) VALUES
(1, 'javi', ' lugar increible', '2022-02-19 01:44:54', 1),
(2, 'javi', ' lugar increible', '2022-02-19 01:44:55', 1),
(3, 'javi', ' lugar increible', '2022-02-19 01:44:55', 1),
(4, 'javi', ' lugar increible', '2022-02-19 01:53:29', 1),
(5, 'javi', ' increible', '2022-02-19 01:55:18', 1),
(6, 'javi', ' increible', '2022-02-19 01:59:48', 1),
(7, 'javi', ' increible', '2022-02-19 02:02:22', 1),
(8, 'javi', ' increible', '2022-02-19 02:02:36', 1),
(9, 'javi', ' increible', '2022-02-19 02:02:38', 1),
(10, 'javi', ' increible', '2022-02-19 02:02:38', 1),
(11, 'javi', ' increible', '2022-02-19 02:02:38', 1),
(12, 'javi', ' increible', '2022-02-19 02:02:38', 1),
(13, 'javi', ' increible', '2022-02-19 02:02:38', 1),
(14, 'javi', ' increible', '2022-02-19 02:02:39', 1),
(15, 'javi', ' increible', '2022-02-19 02:02:39', 1),
(16, 'javi', ' increible', '2022-02-19 02:02:39', 1),
(17, 'javi', ' increible', '2022-02-19 02:02:46', 1),
(18, 'javi', ' increible', '2022-02-19 02:02:46', 1),
(19, 'javi', ' increible', '2022-02-19 02:02:46', 1),
(20, 'javi', ' increible', '2022-02-19 02:02:53', 1),
(21, 'javi', ' increible', '2022-02-19 02:03:14', 1),
(22, 'javi', ' increible', '2022-02-19 02:03:15', 1),
(23, 'javi', ' increible', '2022-02-19 02:03:15', 1),
(24, 'javi', ' increible', '2022-02-19 02:03:15', 1),
(25, 'javi', ' increible', '2022-02-19 02:03:15', 1),
(26, 'javi', ' increible', '2022-02-19 02:03:56', 1),
(27, 'javi', ' increible', '2022-02-19 02:03:57', 1),
(28, 'javi', ' increible', '2022-02-19 02:03:57', 1),
(29, 'javi', ' increible', '2022-02-19 02:03:57', 1),
(30, 'javi', ' increible', '2022-02-19 02:03:57', 1),
(31, 'javi', ' increible', '2022-02-19 02:04:43', 1),
(32, 'javi', ' increible', '2022-02-19 02:04:43', 1),
(33, 'javi', ' increible', '2022-02-19 02:04:44', 1),
(34, 'javi', ' increible', '2022-02-19 02:04:44', 1),
(35, 'javi', ' increible', '2022-02-19 02:04:44', 1),
(36, 'javi', ' increible', '2022-02-19 02:04:45', 1),
(37, 'javi', ' increible', '2022-02-19 02:04:45', 1),
(38, 'javi', ' increible', '2022-02-19 02:04:45', 1),
(39, 'javi', ' increible', '2022-02-19 02:04:45', 1),
(40, 'javi', ' increible', '2022-02-19 02:04:45', 1),
(41, 'javi', ' increible', '2022-02-19 02:04:46', 1),
(42, 'javi', ' increible', '2022-02-19 02:04:46', 1),
(43, 'javi', ' increible', '2022-02-19 02:04:46', 1),
(44, 'javi', ' increible', '2022-02-19 02:04:46', 1),
(45, 'javi', ' increible', '2022-02-19 02:04:46', 1),
(46, 'javi', ' increible', '2022-02-19 02:04:47', 1),
(47, 'javi', ' increible', '2022-02-19 02:04:47', 1),
(48, 'javi', ' increible', '2022-02-19 02:04:47', 1),
(49, 'javi', ' increible', '2022-02-19 02:04:47', 1),
(50, 'javi', ' increible', '2022-02-19 02:04:48', 1),
(51, 'javi', ' increible', '2022-02-19 02:04:48', 1),
(52, 'javi', ' increible', '2022-02-19 02:04:48', 1),
(53, 'javi', ' increible', '2022-02-19 02:04:48', 1),
(54, 'javi', ' increible', '2022-02-19 02:04:48', 1),
(55, 'javi', ' increible', '2022-02-19 02:05:23', 1),
(56, 'javi', ' increible', '2022-02-19 02:05:23', 1),
(57, 'javi', ' increible', '2022-02-19 02:05:24', 1),
(58, 'javi', ' increible', '2022-02-19 02:05:24', 1),
(59, 'javi', ' increible', '2022-02-19 02:05:24', 1),
(60, 'javi', ' increible', '2022-02-19 02:05:35', 1),
(61, 'javi', ' increible', '2022-02-19 02:05:35', 1),
(62, 'javi', ' increible', '2022-02-19 02:05:36', 1),
(63, 'javi', ' increible', '2022-02-19 02:05:36', 1),
(64, 'javi', ' increible', '2022-02-19 02:05:36', 1),
(65, 'javi', ' increible', '2022-02-19 02:06:15', 7),
(66, 'javi', ' increible', '2022-02-19 02:06:27', 7),
(67, 'javi', ' increible', '2022-02-19 02:06:27', 7),
(68, 'javi', ' increible', '2022-02-19 02:06:28', 7),
(69, 'javi', ' increible', '2022-02-19 02:06:28', 7),
(70, 'javi', ' uiohyauigb', '2022-02-19 02:11:37', 7),
(71, 'javi', ' uiohyauigb', '2022-02-19 02:12:39', 7),
(72, 'javi', ' uiohyauigb', '2022-02-19 02:13:18', 7),
(73, 'javi', ' uiohyauigb', '2022-02-19 02:13:21', 7),
(74, 'javi', ' uiohyauigb', '2022-02-19 02:13:29', 7),
(75, 'javi', 'ewyweuyh', '2022-02-19 02:35:20', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `descripcion` text NOT NULL,
  `imaxe` text NOT NULL,
  `prezo_dia` int NOT NULL,
  `alugado` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nome`, `descripcion`, `imaxe`, `prezo_dia`, `alugado`) VALUES
(1, 'Lugo', 'Lugo, a muralla e toda a provincia', 'img/muralla_lugo.jpg', 300, 0),
(2, 'Villarquide', 'Lugar na montaña lucense', 'img/muralla_lugo.jpg', 500, 0),
(7, 'Villarquide', 'Lugar na montaña lucense', 'img/muralla_lugo.jpg', 500, 0),
(8, 'coruña', 'coruña, a torre de hercules e toda a provincia', 'img/muralla_lugo.jpg', 300, 0),
(9, 'santiago de compostela', 'a catedral', 'img/muralla_lugo.jpg', 500, 0),
(10, 'vigo', 'Lugar na montaña lucense', 'img/muralla_lugo.jpg', 500, 0),
(11, 'ourense', 'a catedral', 'img/muralla_lugo.jpg', 500, 0),
(12, 'vilalba', 'a catedral', 'img/muralla_lugo.jpg', 500, 0),
(13, 'ribadeo', 'a catedral', 'img/muralla_lugo.jpg', 500, 0),
(14, 'padrón', 'a catedral', 'img/muralla_lugo.jpg', 500, 0),
(15, 'Muros', 'a catedral', 'img/muralla_lugo.jpg', 500, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int NOT NULL AUTO_INCREMENT,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `data` datetime NOT NULL,
  `rol` text NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUsers`, `usuario`, `password`, `data`, `rol`) VALUES
(1, 'javier', '$2y$10$bas6n35vb.8/nqiX1qGrCO7wtfoOP38NuywvfUwejRi2vNaSP.FJ6', '2022-02-08 22:39:34', 'admin'),
(2, 'javi', '$2y$10$5wYgI2TQFO7jh.ZijL99ZONO13ZzJU1tlE.jyNNVF7LYkPeIc42dC', '2022-02-08 22:39:53', 'usuario');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
