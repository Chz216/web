-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2018 a las 20:17:37
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalago_reventon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `Id_articulo` int(11) NOT NULL,
  `Id_marca` int(11) NOT NULL,
  `Nom_producto` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Estilo` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Acabado` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Talla` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Precio` double NOT NULL,
  `Color` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Stock` int(11) NOT NULL,
  `imagen` varchar(600) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`Id_articulo`, `Id_marca`, `Nom_producto`, `Estilo`, `Acabado`, `Talla`, `Precio`, `Color`, `Stock`, `imagen`) VALUES
(15, 1, 'Tenis', '018', 'Sintetico', '22-26', 190, 'Blanco-Oro', 45, 'BA7666_04_standard.jpg'),
(16, 2, 'Zapato Escolar', '3010', 'Piel', '22-29', 210, 'Negro', 45, 'dandy.jpg'),
(17, 2, 'Zapato Casual', '4060', 'Piel', '25-29', 180, 'Negro', 10, 'dandy-escolar.jpg'),
(18, 3, 'Tenis Casual', '7500', 'Sintetico', '22-26', 200, 'Azul Marino', 10, 'hs.jpg'),
(20, 2, 'Tenis Casual para Dama', '018', 'Sintético', '22-26', 199, 'Blanco-Oro', 10, 'BA7666_04_standard.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Id_articulo` int(11) NOT NULL,
  `catidad_insertada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`Id_articulo`, `catidad_insertada`) VALUES
(2, 40),
(2, 120);

--
-- Disparadores `inventario`
--
DELIMITER $$
CREATE TRIGGER `sumar_articulos` AFTER INSERT ON `inventario` FOR EACH ROW UPDATE articulo SET articulo.Stock = articulo.Stock + new.catidad_insertada WHERE articulo.Id_articulo = new.Id_articulo
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `Id_marca` int(11) NOT NULL,
  `Marca` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`Id_marca`, `Marca`) VALUES
(1, 'Dolo'),
(2, 'Dandy'),
(3, 'Hs'),
(4, 'Braga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id_venta` int(11) NOT NULL,
  `Id_articulo` int(11) NOT NULL,
  `articulos_comprados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id_venta`, `Id_articulo`, `articulos_comprados`) VALUES
(1, 1, 1),
(2, 1, 15),
(3, 2, 1);

--
-- Disparadores `ventas`
--
DELIMITER $$
CREATE TRIGGER `restar_stock` AFTER INSERT ON `ventas` FOR EACH ROW UPDATE articulo SET articulo.Stock = articulo.Stock - new.articulos_comprados WHERE articulo.Id_articulo = new.Id_articulo
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`Id_articulo`),
  ADD KEY `Id_marca` (`Id_marca`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD KEY `Id_articulo` (`Id_articulo`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`Id_marca`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id_venta`),
  ADD KEY `Id_articulo` (`Id_articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `Id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `Id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`Id_articulo`) REFERENCES `articulo` (`Id_articulo`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`Id_articulo`) REFERENCES `articulo` (`Id_articulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
