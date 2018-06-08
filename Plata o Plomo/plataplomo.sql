-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2016 a las 18:54:27
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plataplomo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorios`
--

CREATE TABLE `accesorios` (
  `idproducto` int(4) NOT NULL COMMENT 'ID del producto',
  `idarticulo` int(2) NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Marca del Producto',
  `ref` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Referencia del Producto',
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto',
  `origen` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Origen del Producto',
  `pvd` float NOT NULL COMMENT 'Precio Distribución',
  `pvp` float NOT NULL COMMENT 'Precio Recomendado',
  `cantidad` int(3) NOT NULL COMMENT 'Cantidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Accesorios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idarticulo` int(4) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `nombre`) VALUES
(1, 'Tablas'),
(2, 'Ejes'),
(3, 'Ruedas'),
(4, 'Cojinetes'),
(5, 'Camisetas'),
(6, 'Gorras'),
(7, 'Calcetines'),
(8, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calcetines`
--

CREATE TABLE `calcetines` (
  `idproducto` int(4) NOT NULL COMMENT 'ID del producto',
  `idarticulo` int(2) NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Marca del Producto',
  `ref` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Referencia del Producto',
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto',
  `medida` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Color del Producto',
  `origen` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Origen del Producto',
  `pvd` float NOT NULL COMMENT 'Precio Distribución',
  `pvp` float NOT NULL COMMENT 'Precio Recomendado',
  `cantidad` int(3) NOT NULL COMMENT 'Cantidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Calcetines/Socks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camisetas`
--

CREATE TABLE `camisetas` (
  `idproducto` int(4) NOT NULL COMMENT 'ID del producto',
  `idarticulo` int(2) NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Marca del Producto',
  `ref` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Referencia del Producto',
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto',
  `talla` varchar(4) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Talla',
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Género del Producto',
  `color` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Color de la Camiseta',
  `origen` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Origen del Producto',
  `pvd` float NOT NULL COMMENT 'Precio de Distribución',
  `pvp` float NOT NULL COMMENT 'Precio Recomendado',
  `cantidad` int(3) NOT NULL COMMENT 'Cantidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Camisetas/T-Shirts';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejes`
--

CREATE TABLE `ejes` (
  `idproducto` int(4) NOT NULL COMMENT 'ID del producto',
  `idarticulo` int(2) NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Marca del Producto',
  `ref` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Referencia del Producto',
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto',
  `medida` float NOT NULL COMMENT 'Ancho del Eje',
  `color` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Color del Eje',
  `origen` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Origen del Producto',
  `pvd` float NOT NULL COMMENT 'Precio de Distribución',
  `pvp` float NOT NULL COMMENT 'Precio Recomendado',
  `cantidad` int(3) NOT NULL COMMENT 'Cantidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Ejes/Trucks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gorras`
--

CREATE TABLE `gorras` (
  `idproducto` int(4) NOT NULL COMMENT 'ID del producto',
  `idarticulo` int(2) NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Marca del Producto',
  `ref` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Referencia del Producto',
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto',
  `color` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Color del Producto',
  `origen` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Origen de la Gorra',
  `pvd` float NOT NULL COMMENT 'Precio Distribución',
  `pvp` float NOT NULL COMMENT 'Precio Recomendado',
  `cantidad` int(3) NOT NULL COMMENT 'Cantidad del Producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Gorras/Caps';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `idarticulo` int(2) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto',
  `ref` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rodamientos`
--

CREATE TABLE `rodamientos` (
  `idproducto` int(4) NOT NULL,
  `idarticulo` int(2) NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Marca del Producto',
  `ref` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Referencia del Producto',
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto',
  `origen` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Origen del Producto',
  `pvd` float NOT NULL COMMENT 'Precio Distribución',
  `pvp` float NOT NULL COMMENT 'Precio Recomendado',
  `cantidad` int(3) NOT NULL COMMENT 'Cantidad del Producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Rodamientos/Bearings';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruedas`
--

CREATE TABLE `ruedas` (
  `idproducto` int(4) NOT NULL COMMENT 'ID del producto',
  `idarticulo` int(2) NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Marca del Producto',
  `ref` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Referencia del Producto',
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto',
  `medida` float NOT NULL COMMENT 'Medida de la Rueda',
  `color` varchar(15) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Color de la Rueda',
  `origen` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Origen del Producto',
  `pvd` float NOT NULL COMMENT 'Precio de Distribución',
  `pvp` float NOT NULL COMMENT 'Precio Recomendado',
  `cantidad` int(3) NOT NULL COMMENT 'Cantidad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Ruedas/Wheels';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablas`
--

CREATE TABLE `tablas` (
  `idproducto` int(4) NOT NULL COMMENT 'ID del producto',
  `idarticulo` int(2) NOT NULL,
  `marca` varchar(25) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Marca del Producto',
  `ref` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Referencia del Producto',
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del Producto',
  `medida` float NOT NULL COMMENT 'Medida de la Tabla',
  `origen` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Origen de la Tabla',
  `pvd` float NOT NULL COMMENT 'Precio Distribución',
  `pvp` float NOT NULL COMMENT 'Precio Recomendado',
  `cantidad` int(3) NOT NULL COMMENT 'Cantidad del Producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tablas/Decks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventa` int(3) NOT NULL,
  `idproducto` int(4) NOT NULL,
  `idarticulo` int(2) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `ref` varchar(40) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `precio` float NOT NULL,
  `beneficio` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD KEY `idproducto` (`idproducto`,`idarticulo`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `idarticulo_2` (`idarticulo`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`,`nombre`),
  ADD UNIQUE KEY `idarticulo` (`idarticulo`),
  ADD UNIQUE KEY `idarticulo_3` (`idarticulo`),
  ADD UNIQUE KEY `idarticulo_4` (`idarticulo`),
  ADD UNIQUE KEY `idarticulo_5` (`idarticulo`),
  ADD UNIQUE KEY `idarticulo_9` (`idarticulo`,`nombre`),
  ADD UNIQUE KEY `idarticulo_10` (`idarticulo`,`nombre`),
  ADD KEY `idarticulo_2` (`idarticulo`),
  ADD KEY `idarticulo_6` (`idarticulo`),
  ADD KEY `idarticulo_7` (`idarticulo`),
  ADD KEY `idarticulo_8` (`idarticulo`),
  ADD KEY `idarticulo_11` (`idarticulo`,`nombre`),
  ADD KEY `idarticulo_12` (`idarticulo`,`nombre`),
  ADD KEY `idarticulo_13` (`idarticulo`);

--
-- Indices de la tabla `calcetines`
--
ALTER TABLE `calcetines`
  ADD KEY `idproducto` (`idproducto`,`idarticulo`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  ADD KEY `idproducto` (`idproducto`,`idarticulo`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `ejes`
--
ALTER TABLE `ejes`
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `gorras`
--
ALTER TABLE `gorras`
  ADD KEY `idproducto` (`idproducto`,`idarticulo`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `ref` (`ref`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `idarticulo_2` (`idarticulo`);

--
-- Indices de la tabla `rodamientos`
--
ALTER TABLE `rodamientos`
  ADD KEY `idproducto` (`idproducto`,`idarticulo`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `ruedas`
--
ALTER TABLE `ruedas`
  ADD KEY `idproducto` (`idproducto`,`idarticulo`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `nombre_2` (`nombre`);

--
-- Indices de la tabla `tablas`
--
ALTER TABLE `tablas`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `idarticulo` (`idarticulo`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `ref` (`ref`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idventa`),
  ADD UNIQUE KEY `idventa` (`idventa`),
  ADD KEY `idproducto` (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calcetines`
--
ALTER TABLE `calcetines`
  MODIFY `idproducto` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID del producto';
--
-- AUTO_INCREMENT de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  MODIFY `idproducto` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID del producto';
--
-- AUTO_INCREMENT de la tabla `ejes`
--
ALTER TABLE `ejes`
  MODIFY `idproducto` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID del producto';
--
-- AUTO_INCREMENT de la tabla `gorras`
--
ALTER TABLE `gorras`
  MODIFY `idproducto` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID del producto';
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rodamientos`
--
ALTER TABLE `rodamientos`
  MODIFY `idproducto` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ruedas`
--
ALTER TABLE `ruedas`
  MODIFY `idproducto` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID del producto';
--
-- AUTO_INCREMENT de la tabla `tablas`
--
ALTER TABLE `tablas`
  MODIFY `idproducto` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID del producto';
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idventa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD CONSTRAINT `accesorios_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accesorios_ibfk_2` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accesorios_ibfk_3` FOREIGN KEY (`nombre`) REFERENCES `productos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `calcetines`
--
ALTER TABLE `calcetines`
  ADD CONSTRAINT `calcetines_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calcetines_ibfk_2` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calcetines_ibfk_3` FOREIGN KEY (`nombre`) REFERENCES `productos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `camisetas`
--
ALTER TABLE `camisetas`
  ADD CONSTRAINT `camisetas_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camisetas_ibfk_2` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `camisetas_ibfk_3` FOREIGN KEY (`nombre`) REFERENCES `productos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ejes`
--
ALTER TABLE `ejes`
  ADD CONSTRAINT `ejes_ibfk_1` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ejes_ibfk_2` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ejes_ibfk_3` FOREIGN KEY (`nombre`) REFERENCES `productos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gorras`
--
ALTER TABLE `gorras`
  ADD CONSTRAINT `gorras_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gorras_ibfk_2` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gorras_ibfk_3` FOREIGN KEY (`nombre`) REFERENCES `productos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rodamientos`
--
ALTER TABLE `rodamientos`
  ADD CONSTRAINT `rodamientos_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rodamientos_ibfk_2` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rodamientos_ibfk_3` FOREIGN KEY (`nombre`) REFERENCES `productos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ruedas`
--
ALTER TABLE `ruedas`
  ADD CONSTRAINT `ruedas_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ruedas_ibfk_2` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ruedas_ibfk_3` FOREIGN KEY (`nombre`) REFERENCES `productos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tablas`
--
ALTER TABLE `tablas`
  ADD CONSTRAINT `tablas_ibfk_4` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tablas_ibfk_5` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tablas_ibfk_6` FOREIGN KEY (`nombre`) REFERENCES `productos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
