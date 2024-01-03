-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2024 a las 17:28:59
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casitaquinta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_eventos`
--

CREATE TABLE `detalle_eventos` (
  `id` int(11) NOT NULL,
  `evento_id` int(11) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `monto_total` int(11) NOT NULL,
  `servicio_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_eventos`
--

INSERT INTO `detalle_eventos` (`id`, `evento_id`, `servicio`, `precio`, `cantidad`, `monto_total`, `servicio_id`) VALUES
(1, 1, 'Anfitriona', 350000, 3, 1050000, 27),
(2, 1, 'Sillas para el civil', 10000, 20, 200000, 39),
(3, 1, 'Apa mas de 100 personas', 670000, 1, 670000, 19),
(4, 1, 'Bolsa de Hielo 25KG', 35000, 12, 420000, 6),
(5, 1, 'Conservadora', 50000, 3, 150000, 7),
(6, 1, 'Cantinero', 200000, 3, 600000, 4),
(7, 1, 'Mozo Adicional', 200000, 1, 200000, 3),
(8, 1, 'Mozo Incluye', 0, 1, 0, 2),
(9, 1, 'Personas', 90000, 5, 450000, 1),
(10, 2, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 5, 360000, 13),
(11, 2, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 5, 360000, 13),
(12, 2, 'Bolsa de Hielo 25KG', 35000, 15, 525000, 6),
(13, 2, 'Pack de agua con gas', 24000, 3, 72000, 32),
(14, 2, 'Pack de agua sin gas', 24000, 5, 120000, 33),
(15, 2, 'Caja Hieneken X12 650ml', 175000, 3, 525000, 11),
(16, 2, 'Caja de Pilsen X12 710ml', 115000, 13, 1495000, 12),
(17, 2, 'Conservadora', 50000, 3, 150000, 7),
(18, 2, 'Buffetier', 200000, 1, 200000, 8),
(19, 2, 'Cantinero', 200000, 1, 200000, 4),
(20, 2, 'Mozo Adicional', 200000, 4, 800000, 3),
(21, 2, 'Mozo Incluye', 0, 1, 0, 2),
(22, 2, 'Garantia', 500000, 1, 500000, 21),
(23, 2, 'Apa mas de 100 personas', 670000, 1, 670000, 19),
(24, 2, 'Menores', 90000, 7, 630000, 20),
(25, 2, 'Personas', 180000, 100, 18000000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `cliente_id` varchar(1) NOT NULL,
  `fecha_evento` varchar(20) NOT NULL,
  `hora_evento` varchar(20) DEFAULT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `cedula`, `cliente`, `cliente_id`, `fecha_evento`, `hora_evento`, `menu`, `created_at`, `estatus`) VALUES
(1, '10001', 'Camila y Axel\n', '4', '2022-12-17', '22:00', 'Servicio de Asado', '2024-01-01 22:18:40', 1),
(2, '10002', 'Victoria y Aldo\r\n', '5', '2022-04-22', '21:00', 'Buffet de pastas con carne', '2024-01-01 15:00:30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `evento_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `monto` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `evento_id`, `cliente_id`, `monto`, `created_at`, `estatus`) VALUES
(1, 1, 4, '300000', '2024-01-01 18:52:31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `descripcion`, `created_at`, `estatus`) VALUES
(1, 'Administrador', '2023-12-16 19:14:57', 1),
(2, 'Encargada', '2023-12-16 19:14:57', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `descripcion`, `precio`, `created_at`, `estatus`) VALUES
(1, 'Personas', 180000, '2023-12-16 20:33:58', 1),
(2, 'Mozo Incluye', 0, '2023-12-31 20:00:52', 1),
(3, 'Mozo Adicional', 200000, '2023-12-31 21:55:56', 1),
(4, 'Cantinero', 200000, '2023-12-31 21:56:20', 1),
(5, 'Jovenes', 135000, '2023-12-31 21:56:46', 1),
(6, 'Bolsa de Hielo 25KG', 35000, '2023-12-31 21:56:56', 1),
(7, 'Conservadora', 60000, '2023-12-31 21:57:06', 1),
(8, 'Buffetier', 200000, '2023-12-31 21:57:21', 1),
(9, 'Caja Corona x12 710ml', 185000, '2023-12-31 21:57:32', 1),
(10, 'Caja Miller X15 650ml', 185000, '2023-12-31 21:57:44', 1),
(11, 'Caja Hieneken X12 650ml', 175000, '2023-12-31 21:57:55', 1),
(12, 'Caja de Pilsen X12 710ml', 115000, '2023-12-31 21:58:04', 1),
(13, 'Caja de Gaseosa 1l Coca Cola x12', 78000, '2023-12-31 21:58:14', 1),
(14, 'Pack de agua sin gas', 24000, '2023-12-31 21:58:24', 1),
(15, 'Tachos', 15000, '2023-12-31 21:58:35', 1),
(16, 'Servicion de Chop Munich 50Lt.', 690000, '2023-12-31 21:58:47', 1),
(17, 'Servicion de Chop Munich 30Lt.', 490000, '2023-12-31 21:59:00', 1),
(18, 'Apa hasta 100 personas', 450000, '2023-12-31 21:59:11', 1),
(19, 'Apa mas de 100 personas', 670000, '2023-12-31 21:59:52', 1),
(20, 'Menores', 90000, '2023-12-31 22:00:04', 1),
(21, 'Garantia', 700000, '2023-12-31 22:00:16', 1),
(22, 'Toldo 10x15', 3000000, '2023-12-31 22:00:29', 1),
(23, 'Tarima 3x4', 540000, '2023-12-31 22:00:42', 1),
(24, 'Pista 6x8', 1000000, '2023-12-31 22:00:57', 1),
(25, 'Pasarela', 350000, '2023-12-31 22:01:07', 1),
(26, 'jugos naturales', 650000, '2023-12-31 22:01:20', 1),
(27, 'Anfitriona', 350000, '2023-12-31 22:02:24', 1),
(28, 'mesa 1.20x 2.70', 220000, '2023-12-31 22:02:36', 1),
(29, 'piso 6x6', 900000, '2023-12-31 22:02:46', 1),
(30, 'Pack de agua tónica', 30000, '2023-12-31 22:02:58', 1),
(31, 'Pack de soda', 30000, '2023-12-31 22:03:12', 1),
(32, 'Pack de agua con gas', 24000, '2023-12-31 22:03:22', 1),
(33, 'Pack de agua sin gas', 24000, '2023-12-31 22:03:35', 1),
(34, 'Piso 5x5', 625000, '2023-12-31 22:03:47', 1),
(35, 'Tarima 4.40 x 3.20', 550000, '2023-12-31 22:03:57', 1),
(36, 'Tarima 6x4', 1080000, '2023-12-31 22:04:11', 1),
(37, 'Piso 8x8', 1600000, '2023-12-31 22:04:22', 1),
(38, 'Sillas de plastico', 2500, '2023-12-31 22:04:38', 1),
(39, 'Sillas para el civil', 10000, '2023-12-31 22:04:47', 1),
(40, 'comida para proveedores', 40000, '2023-12-31 22:04:57', 1),
(41, 'Plancha de Smirnoff', 180000, '2023-12-31 22:05:07', 1),
(42, 'Apa Infantil hasta 50 personas', 150000, '2023-12-31 22:05:20', 1),
(43, 'Apa Infantil hasta 80 personas', 200000, '2023-12-31 22:05:34', 1),
(44, 'Apa Infantil hasta 100 personas', 270000, '2023-12-31 22:05:44', 1),
(45, 'piso 8x6', 1200000, '2023-12-31 22:06:22', 1),
(46, 'Caminero', 300000, '2023-12-31 22:06:32', 1),
(47, 'Pista 4x4', 400000, '2023-12-31 22:06:44', 1),
(48, 'Isla para 10 personas', 150000, '2023-12-31 22:06:59', 1),
(49, 'mesita para el civil', 150000, '2023-12-31 22:07:11', 1),
(50, 'Vino Malbec por Unidad', 60000, '2023-12-31 22:07:23', 1),
(51, 'menores exonerdos', 1, '2023-12-31 22:07:34', 1),
(52, 'pack de agua tónica', 30000, '2023-12-31 22:08:05', 1),
(53, 'vasos de wisky', 2000, '2023-12-31 22:08:18', 1),
(54, 'vasos normales', 1500, '2023-12-31 22:08:29', 1),
(55, 'copas multiuso', 1500, '2023-12-31 22:08:38', 1),
(56, 'Coca Zero pack de 2litos(4unidades)', 56000, '2023-12-31 22:08:50', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `cedula` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `cedula`, `nombre`, `usuario`, `pass`, `rol`, `created_at`, `estatus`) VALUES
(1, 5064083, 'Ruben Flores', 'ruben', 'c5a4e7e6882845ea7bb4d9462868219b', 1, '2023-12-18 19:17:19', 1),
(3, 5348207, 'Cynthia Fariña', 'cynthia', '4a3e00961a08879c34f91ca0070ea2f5', 2, '2023-12-18 23:14:39', 1),
(4, 10001, 'Camila y Axel\n', NULL, NULL, 0, '2023-12-31 22:16:12', 1),
(5, 10002, 'Victoria y Aldo\n', NULL, NULL, 0, '2024-01-01 14:56:47', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_eventos`
--
ALTER TABLE `detalle_eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_eventos`
--
ALTER TABLE `detalle_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
