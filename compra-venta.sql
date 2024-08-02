-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2024 a las 16:21:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compra-venta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(10) NOT NULL,
  `nombre_prod` varchar(50) NOT NULL,
  `id_vendedor` int(10) NOT NULL,
  `foto_prod` varchar(100) NOT NULL,
  `precio_prod` int(20) NOT NULL,
  `tipo_prod` varchar(50) NOT NULL,
  `etiqueta_producto` varchar(50) NOT NULL,
  `descuento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nombre_prod`, `id_vendedor`, `foto_prod`, `precio_prod`, `tipo_prod`, `etiqueta_producto`, `descuento`) VALUES
(2, 'Sofá de Jardín', 1, 'sofa-jardin.png', 300000, 'jardin.', 'muebles.', 0),
(3, 'Mesa de Jardín', 1, 'mesa-jardin.png', 200000, 'jardin.', 'muebles.', 0),
(4, 'Sillón de Jardín', 1, 'sillon-jardin.png', 100000, 'jardin.', 'muebles.', 0),
(5, 'Conjunto de Jardín', 1, 'conjunto-jardin.png', 400000, 'jardin.', 'otros.', 0),
(6, 'Pergola Jardin', 1, 'pergola-jardin.png', 400000, 'jardin.', 'otros.', 0),
(7, 'Aire acondicionado Split', 2, 'aire-descuento.png', 2000000, 'aires.', 'otros.', 5),
(8, 'Ventilador de pie', 2, 'ventilador-descuento.png', 500000, 'aire.', 'otros.', 10),
(9, 'Ventilador Silencioso', 2, 'ventilador-silencioso-descuento.png', 1800000, 'aire.', 'otros.', 10),
(10, 'Aire acondicionado portatil', 2, 'aire-acon-portatli-descuento.png', 3000000, 'aires.', 'otros.', 8),
(11, 'Ventilador de techo', 2, 'ventilador-techo-descuento.png', 1500000, 'aires.', 'otros.', 5),
(13, 'Corta bananos', 1, 'cortador-bananos-cocina.png', 20000, 'cocina.', 'cocina.', 0),
(15, 'Exprimidor citricos', 1, 'exprimidor-citricos-cocina2.png', 20000, 'cocina.', 'cocina.', 0),
(16, 'Rallador con caja', 1, 'rallador-caja-cocina2.png', 70000, 'cocina.', 'cocina.', 0),
(17, 'Batidora manual', 1, 'batidora-manual-cocina2.png', 80000, 'cocina.', 'cocina.', 0),
(19, 'Corta manzanas', 1, 'corta-manzanas-cocina.png', 21000, 'moviles.', 'cocina.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(10) NOT NULL,
  `nombre_vendedor` varchar(50) NOT NULL,
  `doc_vendedor` varchar(12) NOT NULL,
  `telefono_vendedor` varchar(12) NOT NULL,
  `direc_vendedor` varchar(50) NOT NULL,
  `contrasenia_vendedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nombre_vendedor`, `doc_vendedor`, `telefono_vendedor`, `direc_vendedor`, `contrasenia_vendedor`) VALUES
(1, 'Valeria Martines', '2345789234', '3172893421', 'Cll 15 #2-33 ', '1234'),
(2, 'Camila Sandoval', '1099082345', '3267348234', 'Cll 10 #6-30', '1234'),
(5, 'Angie Suarez', '1823674534', '3172382904', 'Cll 9 # 7-50 Los pinos', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
