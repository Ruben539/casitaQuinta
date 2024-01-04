-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2024 a las 23:28:52
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
  `servicio_id` int(11) DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_eventos`
--

INSERT INTO `detalle_eventos` (`id`, `evento_id`, `servicio`, `precio`, `cantidad`, `monto_total`, `servicio_id`, `estatus`) VALUES
(2, 1, 'Sillas para el civil', 10000, 30, 300000, 39, 1),
(3, 1, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(4, 1, 'Bolsa de Hielo 25KG', 35000, 12, 420000, 6, 1),
(5, 1, 'Conservadora', 50000, 3, 150000, 7, 1),
(6, 1, 'Cantinero', 200000, 3, 600000, 4, 1),
(7, 1, 'Mozo Adicional', 200000, 1, 200000, 3, 1),
(8, 1, 'Mozo Incluye', 0, 1, 0, 2, 1),
(9, 1, 'Personas', 90000, 5, 450000, 1, 1),
(10, 2, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 5, 360000, 13, 1),
(11, 2, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 5, 360000, 13, 1),
(12, 2, 'Bolsa de Hielo 25KG', 35000, 15, 525000, 6, 1),
(13, 2, 'Pack de agua con gas', 24000, 3, 72000, 32, 1),
(14, 2, 'Pack de agua sin gas', 24000, 5, 120000, 33, 1),
(15, 2, 'Caja Hieneken X12 650ml', 175000, 3, 525000, 11, 1),
(16, 2, 'Caja de Pilsen X12 710ml', 115000, 13, 1495000, 12, 1),
(17, 2, 'Conservadora', 50000, 3, 150000, 7, 1),
(18, 2, 'Buffetier', 200000, 1, 200000, 8, 1),
(19, 2, 'Cantinero', 200000, 1, 200000, 4, 1),
(20, 2, 'Mozo Adicional', 200000, 4, 800000, 3, 1),
(21, 2, 'Mozo Incluye', 0, 1, 0, 2, 1),
(22, 2, 'Garantia', 500000, 1, 500000, 21, 1),
(23, 2, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(24, 2, 'Menores', 90000, 7, 630000, 20, 1),
(25, 2, 'Personas', 180000, 100, 18000000, 1, 1),
(26, 1, 'Anfitriona', 350000, 1, 350000, 27, 0),
(27, 3, 'Personas', 110000, 65, 7150000, 1, 1),
(28, 3, 'Mozo Incluye', 0, 1, 0, 1, 1),
(29, 3, 'Mozo Adicional', 200000, 1, 200000, 3, 1),
(30, 3, 'Cantinero', 200000, 2, 400000, 4, 1),
(31, 3, 'Conservadora', 50000, 1, 50000, 7, 1),
(32, 3, 'Bolsa de Hielo 25KG', 35000, 4, 140000, 6, 1),
(33, 3, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(34, 3, 'Garantia', 700000, 1, 700000, 21, 1),
(35, 3, '100 tragos Real Tragos', 1950000, 1, 1950000, 57, 1),
(36, 3, 'Personas', 110000, 65, 7150000, 1, 0),
(37, 4, 'Antipasto mas adicional', 45000, 75, 3375000, 58, 1),
(38, 4, 'Garantia', 700000, 1, 700000, 21, 1),
(39, 4, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(40, 4, 'Servicios de Chop Munich 30Lt.', 450000, 1, 450000, 17, 1),
(41, 4, 'Servicios de Chop Munich 50Lt.', 650000, 3, 1950000, 16, 1),
(42, 4, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 6, 432000, 13, 1),
(43, 4, 'Pack de agua con gas', 24000, 3, 72000, 32, 1),
(44, 4, 'Pack de agua sin gas', 24000, 10, 240000, 33, 1),
(45, 4, 'Buffetier', 200000, 1, 200000, 8, 1),
(46, 4, 'Conservadora', 50000, 2, 100000, 7, 1),
(47, 4, 'Bolsa de Hielo 25KG', 35000, 10, 350000, 6, 1),
(48, 4, 'Cantinero', 200000, 1, 200000, 4, 1),
(49, 4, 'Mozo Adicional', 200000, 6, 1200000, 3, 1),
(50, 4, 'Mozo Incluye', 0, 1, 0, 2, 1),
(51, 4, 'Menores', 90000, 5, 450000, 20, 1),
(52, 4, 'Personas', 180000, 138, 24840000, 1, 1),
(53, 5, 'Garantia', 700000, 1, 700000, 21, 1),
(54, 5, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(55, 5, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 5, 360000, 13, 1),
(56, 5, 'Pack de soda', 24000, 2, 48000, 31, 1),
(57, 5, 'Pack de agua sin gas', 24000, 9, 216000, 33, 1),
(58, 5, 'Caja Hieneken X12 650ml', 175000, 7, 1225000, 11, 1),
(59, 5, 'Conservadora', 50000, 2, 100000, 7, 1),
(60, 5, 'Bolsa de Hielo 25KG', 35000, 15, 525000, 6, 1),
(61, 5, 'Cantinero', 200000, 1, 200000, 4, 1),
(62, 5, 'Mozo Adicional', 200000, 3, 600000, 3, 1),
(63, 5, 'Mozo Incluye', 0, 1, 0, 2, 1),
(64, 5, 'Jovenes', 110000, 56, 6160000, 5, 1),
(65, 5, 'Personas', 180000, 55, 9900000, 1, 1),
(66, 6, 'Sillas para el civil', 10000, 12, 120000, 39, 1),
(67, 6, 'comida para proveedores', 40000, 6, 240000, 40, 1),
(68, 6, 'Tarima 6x4', 1080000, 1, 1080000, 36, 1),
(69, 6, 'piso 6x6', 1260000, 1, 1260000, 29, 1),
(70, 6, 'Garantia', 500000, 1, 500000, 21, 1),
(71, 6, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(72, 6, 'Caja Hieneken X12 650ml', 175000, 20, 3500000, 11, 1),
(73, 6, 'Pack de soda', 24000, 3, 72000, 31, 1),
(74, 6, 'Pack de agua sin gas', 24000, 10, 240000, 33, 1),
(75, 6, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 6, 432000, 13, 1),
(76, 6, 'Buffetier', 200000, 1, 200000, 8, 1),
(77, 6, 'Conservadora', 50000, 3, 150000, 7, 1),
(78, 6, 'Bolsa de Hielo 25KG', 35000, 25, 875000, 6, 1),
(79, 6, 'Cantinero', 200000, 1, 200000, 4, 1),
(80, 6, 'Mozo Adicional', 200000, 4, 800000, 3, 1),
(81, 6, 'Mozo Incluye', 0, 1, 0, 2, 1),
(82, 6, 'Jovenes', 90000, 4, 360000, 5, 1),
(83, 6, 'Personas', 180000, 98, 17640000, 1, 1),
(84, 7, 'Garantia', 500000, 1, 500000, 21, 1),
(85, 7, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(86, 7, 'Buffetier', 150000, 1, 150000, 8, 1),
(87, 7, 'Hora adicional', 500000, 1, 500000, 59, 1),
(88, 7, 'Hamburgeusas + papas adicional', 35000, 25, 875000, 60, 1),
(89, 7, 'Pernil de Cerdo', 400000, 1, 400000, 61, 1),
(90, 7, 'Mozo Incluye', 0, 1, 0, 2, 1),
(91, 7, 'Mozo Adicional', 200000, 3, 600000, 3, 1),
(92, 7, 'Tarima 3x4', 540000, 1, 540000, 23, 1),
(93, 7, 'Conservadora', 50000, 2, 100000, 7, 1),
(94, 7, 'Bolsa de Hielo 25KG', 35000, 12, 420000, 6, 1),
(95, 7, 'Jovenes', 110000, 75, 8250000, 5, 1),
(96, 7, 'Personas', 180000, 72, 12960000, 1, 1),
(97, 8, 'Garantia', 700000, 1, 700000, 21, 1),
(98, 8, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(99, 8, 'Pack de agua tónica', 30000, 1, 30000, 30, 1),
(100, 8, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 6, 432000, 13, 1),
(101, 8, 'Pack de soda', 24000, 2, 48000, 31, 1),
(102, 8, 'Pack de agua sin gas', 24000, 12, 288000, 33, 1),
(103, 8, 'Caja de Pilsen X12 710ml', 115000, 1, 115000, 12, 1),
(104, 8, 'Caja Hieneken X12 650ml', 175000, 14, 2450000, 11, 1),
(105, 8, 'Conservadora', 50000, 3, 150000, 7, 1),
(106, 8, 'Bolsa de Hielo 25KG', 35000, 20, 700000, 6, 1),
(107, 8, 'Cantinero', 200000, 1, 200000, 4, 1),
(108, 8, 'Sillas para el civil', 10000, 24, 240000, 39, 1),
(109, 8, 'Mozo Adicional', 200000, 4, 800000, 3, 1),
(110, 8, 'Mozo Incluye', 0, 1, 0, 2, 1),
(111, 8, 'Personas', 200000, 96, 19200000, 1, 1),
(112, 9, 'Mesa para proveedores p/12p', 0, 1, 0, 62, 1),
(113, 9, 'Hamburguesas adicionales', 40000, 30, 1200000, 63, 1),
(114, 9, 'Parrillitas para proveedores', 40000, 12, 480000, 64, 1),
(115, 9, 'Alquiler de la casa', 600000, 1, 600000, 65, 1),
(116, 9, 'Conservadora', 50000, 4, 200000, 7, 1),
(117, 9, 'Hora adicional', 500000, 2, 1000000, 59, 1),
(118, 9, 'Garantia', 700000, 1, 700000, 21, 1),
(119, 9, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(120, 9, 'Mozo Adicional', 200000, 9, 1800000, 3, 1),
(121, 9, 'Mozo Incluye', 0, 1, 0, 2, 1),
(122, 9, 'Jovenes', 110000, 104, 11440000, 5, 1),
(123, 9, 'Personas', 180000, 133, 23940000, 1, 1),
(124, 10, 'Bolsa de Hielo 25KG', 35000, 14, 490000, 6, 1),
(125, 10, 'Conservadora', 50000, 3, 150000, 7, 1),
(126, 10, 'Garantia', 700000, 1, 700000, 21, 1),
(127, 10, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(128, 10, 'Mozo Adicional', 200000, 2, 400000, 3, 1),
(129, 10, 'Mozo Incluye', 0, 1, 0, 2, 1),
(130, 10, 'Personas', 180000, 81, 14580000, 1, 1),
(131, 10, 'Cantinero', 200000, 1, 200000, 4, 1),
(132, 11, 'comida para proveedores', 40000, 9, 360000, 40, 1),
(133, 11, 'Sillas para el civil', 10000, 15, 150000, 39, 1),
(134, 11, 'piso 8x6', 1200000, 1, 1200000, 45, 1),
(135, 11, 'Conservadora', 50000, 3, 150000, 7, 1),
(136, 11, 'Bolsa de Hielo 25KG', 35000, 15, 525000, 6, 1),
(137, 11, 'Garantia', 700000, 1, 700000, 21, 1),
(138, 11, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(139, 11, 'Mozo Adicional', 200000, 8, 1600000, 3, 1),
(140, 11, 'Mozo Incluye', 0, 1, 0, 2, 1),
(141, 11, 'Menores', 90000, 4, 360000, 66, 1),
(142, 11, 'Personas', 180000, 181, 32580000, 1, 1),
(143, 12, 'Caja Hieneken X12 650ml', 175000, 10, 1750000, 11, 1),
(144, 12, 'comida para proveedores', 40000, 7, 280000, 40, 1),
(145, 12, 'Isla para 10 personas', 450000, 2, 900000, 48, 1),
(146, 12, 'Anfitriona', 350000, 1, 350000, 27, 1),
(147, 12, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(148, 12, 'Garantia', 700000, 1, 700000, 21, 1),
(149, 12, 'Pack de agua con gas', 24000, 2, 48000, 32, 1),
(150, 12, 'Pack de agua sin gas', 24000, 7, 168000, 14, 1),
(151, 12, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 4, 288000, 13, 1),
(152, 12, 'Bolsa de Hielo 25KG', 35000, 10, 350000, 6, 1),
(153, 12, 'Conservadora', 50000, 2, 100000, 7, 1),
(154, 12, 'Cantinero', 200000, 1, 200000, 4, 1),
(155, 12, 'Mozo Adicional', 200000, 3, 600000, 3, 1),
(156, 12, 'Mozo Incluye', 0, 1, 0, 2, 1),
(157, 12, 'Personas', 145000, 80, 11600000, 1, 1),
(158, 13, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 3, 216000, 13, 1),
(159, 13, 'Servicios de Chop Munich 50Lt.', 650000, 1, 650000, 16, 1),
(160, 13, 'Bolsa de Hielo 25KG', 35000, 4, 140000, 6, 1),
(161, 13, 'Conservadora', 50000, 1, 50000, 7, 1),
(162, 13, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(163, 13, 'Garantia', 700000, 1, 700000, 21, 1),
(164, 13, 'Buffetier', 200000, 1, 200000, 8, 1),
(165, 13, 'Mozo Adicional', 200000, 1, 200000, 3, 1),
(166, 13, 'Mozo Incluye', 0, 1, 0, 2, 1),
(167, 13, 'Personas', 145000, 50, 7250000, 1, 1),
(168, 13, 'Cantinero', 200000, 1, 200000, 4, 1),
(169, 14, 'Cantinero', 200000, 1, 200000, 4, 1),
(170, 14, 'Mozo Adicional', 200000, 9, 1800000, 3, 1),
(171, 14, 'Mozo Incluye', 0, 1, 0, 2, 1),
(172, 14, 'Personas', 180000, 200, 36000000, 1, 1),
(173, 14, 'Cantinero', 200000, 1, 200000, 4, 0),
(174, 15, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(175, 15, 'Garantia', 700000, 1, 700000, 21, 1),
(176, 15, 'Anfitriona', 350000, 1, 350000, 27, 1),
(177, 15, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 4, 288000, 13, 1),
(178, 15, 'Conservadora', 50000, 2, 100000, 7, 1),
(179, 15, 'Bolsa de Hielo 25KG', 35000, 10, 350000, 6, 1),
(180, 15, 'Cantinero', 200000, 1, 200000, 4, 1),
(181, 15, 'Mozo Adicional', 200000, 2, 400000, 3, 1),
(182, 15, 'Mozo Incluye', 0, 1, 0, 2, 1),
(183, 15, 'Personas', 180000, 68, 12240000, 1, 1),
(184, 16, 'Cantinero', 200000, 1, 200000, 4, 1),
(185, 16, 'Bolsa de Hielo 25KG', 35000, 5, 175000, 6, 1),
(186, 16, 'Pack de agua con gas', 24000, 2, 48000, 32, 1),
(187, 16, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 4, 288000, 13, 1),
(188, 16, 'Sillas para el civil', 10000, 12, 120000, 39, 1),
(189, 16, 'comida para proveedores', 40000, 7, 280000, 40, 1),
(190, 16, 'Garantia', 700000, 1, 700000, 21, 1),
(191, 16, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(192, 16, 'Mozo Adicional', 200000, 1, 200000, 3, 1),
(193, 16, 'Mozo Incluye', 0, 1, 0, 2, 1),
(194, 16, 'Personas', 180000, 64, 11520000, 1, 1),
(195, 17, 'Isla para 10 personas', 150000, 1, 150000, 48, 1),
(196, 17, 'Garantia', 700000, 1, 700000, 21, 1),
(197, 17, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(198, 17, 'Bolsa de Hielo 25KG', 35000, 8, 280000, 6, 1),
(199, 17, 'Conservadora', 50000, 2, 100000, 7, 1),
(200, 17, 'Cantinero', 200000, 1, 200000, 4, 1),
(201, 17, 'Mozo Adicional', 200000, 2, 400000, 3, 1),
(202, 17, 'Mozo Incluye', 0, 1, 0, 2, 1),
(203, 17, 'Personas', 170000, 62, 10540000, 1, 1),
(204, 18, 'Pista 8x8', 1600000, 1, 1600000, 37, 1),
(205, 18, 'Sillas para el civil', 10000, 24, 240000, 39, 1),
(206, 18, 'Apa mas de 100 personas', 1000000, 1, 1000000, 19, 1),
(207, 18, 'Garantia', 700000, 1, 700000, 21, 1),
(208, 18, 'Buffetier', 200000, 2, 400000, 8, 1),
(209, 18, 'Mozo Adicional', 200000, 9, 1800000, 3, 1),
(210, 18, 'Mozo Incluye', 0, 1, 0, 2, 1),
(211, 18, 'Cantinero', 200000, 1, 200000, 4, 1),
(212, 18, 'Menores', 90000, 1, 90000, 66, 1),
(213, 18, 'Personas', 180000, 178, 32040000, 1, 1),
(214, 19, 'Pista 6x8', 1200000, 1, 1200000, 24, 1),
(215, 19, 'Mozo Exclusivo Flia Santiago Ruiz', 200000, 1, 200000, 3, 1),
(216, 19, 'Mozo Exclusivo Flia Elea Gaona', 200000, 1, 200000, 3, 1),
(217, 19, 'Mozo Exclusivo Flia Orlando Britos', 200000, 1, 200000, 3, 1),
(218, 19, 'Mozo Exclusivo Angy Meza', 200000, 1, 200000, 3, 1),
(219, 19, 'Mozo Adicional', 200000, 4, 800000, 3, 1),
(220, 19, 'Mozo Incluye', 0, 1, 0, 2, 1),
(221, 19, 'Garantia', 700000, 1, 700000, 21, 1),
(222, 19, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(223, 19, 'menores exonerdos', 0, 3, 0, 51, 1),
(224, 19, '', 72500, 19, 1377500, 66, 1),
(225, 19, 'Personas', 145000, 260, 37700000, 1, 1),
(226, 20, 'Garantia', 700000, 1, 700000, 21, 1),
(227, 20, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(228, 20, 'Mozo Adicional', 200000, 1, 200000, 3, 1),
(229, 20, 'Mozo Incluye', 0, 1, 0, 2, 1),
(230, 20, 'Buffetier', 200000, 1, 200000, 8, 1),
(231, 20, 'Menores', 147500, 6, 885000, 66, 1),
(232, 20, 'Personas', 295000, 139, 41005000, 1, 1),
(233, 21, 'Anfitriona', 350000, 1, 350000, 27, 1),
(234, 21, 'Garantia', 700000, 1, 700000, 21, 1),
(235, 21, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(236, 21, 'Buffetier', 200000, 1, 200000, 8, 1),
(237, 21, 'Conservadora', 50000, 2, 100000, 7, 1),
(238, 21, 'Bolsa de Hielo 25KG', 35000, 10, 350000, 6, 1),
(239, 21, 'Cantinero', 200000, 1, 200000, 4, 1),
(240, 21, 'Mozo Adicional', 200000, 5, 1000000, 3, 1),
(241, 21, 'Mozo Incluye', 0, 1, 0, 2, 1),
(242, 21, 'Menores', 90000, 3, 270000, 66, 1),
(243, 21, 'Personas', 180000, 127, 22860000, 1, 1),
(244, 22, 'comida para proveedores', 30000, 5, 150000, 40, 1),
(245, 22, 'Tarima 3x4', 500000, 1, 500000, 23, 1),
(246, 22, 'Garantia', 700000, 1, 700000, 21, 1),
(247, 22, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(248, 22, 'Conservadora', 50000, 3, 150000, 7, 1),
(249, 22, 'Bolsa de Hielo 25KG', 35000, 10, 350000, 6, 1),
(250, 22, 'Mozo Adicional', 200000, 4, 800000, 3, 1),
(251, 22, 'Mozo Incluye', 0, 1, 0, 2, 1),
(252, 22, 'Menores', 55000, 11, 605000, 66, 1),
(253, 22, 'Jovenes', 110000, 63, 6930000, 5, 1),
(254, 22, 'Personas', 170000, 75, 12750000, 1, 1),
(255, 23, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(256, 23, 'Choperas', 5000, 30, 150000, 67, 1),
(257, 23, 'Bolsa de Hielo 25KG', 35000, 5, 175000, 6, 1),
(258, 23, 'Conservadora', 60000, 1, 60000, 7, 1),
(259, 23, 'Garantia', 700000, 1, 700000, 21, 1),
(260, 23, 'Mozo Adicional', 200000, 3, 600000, 3, 1),
(261, 23, 'Mozo Incluye', 0, 1, 0, 2, 1),
(262, 23, 'Jovenes', 135000, 50, 6750000, 5, 1),
(263, 23, 'Personas', 170000, 47, 7990000, 1, 1),
(264, 24, 'Tiffany Bar', 240000, 2, 480000, 68, 1),
(265, 24, 'Garantia', 700000, 1, 700000, 21, 1),
(266, 24, 'Anfitriona', 350000, 1, 350000, 27, 1),
(267, 24, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(268, 24, 'Bolsa de Hielo 25KG', 35000, 5, 175000, 6, 1),
(269, 24, 'Conservadora', 60000, 1, 60000, 7, 1),
(270, 24, 'Mozo Adicional', 200000, 2, 400000, 3, 1),
(271, 24, 'Mozo Incluye', 0, 1, 0, 2, 1),
(272, 24, 'Personas', 145000, 80, 11600000, 1, 1),
(273, 25, 'Cantinero', 200000, 1, 200000, 4, 1),
(274, 25, 'Mozo Adicional', 200000, 9, 1800000, 3, 1),
(275, 25, 'Mozo Incluye', 0, 1, 0, 2, 1),
(276, 25, 'Personas', 180000, 200, 36000000, 1, 1),
(277, 26, 'Apa mas de 100 personas', 670000, 1, 670000, 19, 1),
(278, 26, 'Garantia', 700000, 1, 700000, 21, 1),
(279, 26, 'Bolsa de Hielo 25KG', 35000, 15, 525000, 6, 1),
(280, 26, 'Conservadora', 50000, 3, 150000, 7, 1),
(281, 26, 'Cantinero', 200000, 1, 200000, 4, 1),
(282, 26, 'Mozo Adicional', 200000, 4, 800000, 3, 1),
(283, 26, 'Mozo Incluye', 0, 1, 0, 2, 1),
(284, 26, 'Jovenes', 135000, 40, 5400000, 5, 1),
(285, 26, 'Personas', 180000, 80, 14400000, 1, 1),
(286, 27, 'Hora adicional', 700000, 1, 700000, 59, 1),
(287, 27, 'Pack de agua sin gas', 24000, 6, 144000, 33, 1),
(288, 27, 'Caja de Gaseosa 1l Coca Cola x12', 72000, 5, 360000, 13, 1),
(289, 27, 'Garantia', 700000, 1, 700000, 21, 1),
(290, 27, 'Apa hasta 100 personas', 450000, 1, 450000, 18, 1),
(291, 27, 'Buffetier', 200000, 1, 200000, 8, 1),
(292, 27, 'Conservadora', 60000, 1, 60000, 7, 1),
(293, 27, 'Bolsa de Hielo 25KG', 35000, 4, 140000, 6, 1),
(294, 27, 'Cantinero', 200000, 1, 200000, 4, 1),
(295, 27, 'Mozo Adicional', 200000, 2, 400000, 3, 1),
(296, 27, 'Mozo Incluye', 0, 1, 0, 2, 1),
(297, 27, 'Personas', 165000, 79, 13035000, 1, 1),
(298, 28, 'Bolsa de Hielo 25KG', 35000, 20, 700000, 6, 1),
(299, 28, 'Conservadora', 60000, 5, 300000, 7, 1),
(300, 28, '3 mozos hora adicional', 150000, 3, 450000, 3, 1),
(301, 28, 'Buffetier', 200000, 2, 400000, 8, 1),
(302, 28, '3 horas adicionales', 1600000, 1, 1600000, 59, 1),
(303, 28, 'Mozo Adicional', 200000, 10, 2000000, 3, 1),
(304, 28, 'Mozo Incluye', 0, 1, 0, 2, 1),
(305, 28, 'Garantia', 700000, 1, 700000, 21, 1),
(306, 28, 'Pista 8x8', 1600000, 1, 1600000, 37, 1),
(307, 28, 'Cantinero', 200000, 1, 200000, 4, 1),
(308, 28, 'menores exonerdos', 0, 3, 0, 51, 1),
(309, 28, 'Menores', 85000, 4, 340000, 66, 1),
(310, 28, 'Personas', 170000, 214, 36380000, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `cliente_id` int(11) NOT NULL,
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
(1, '10001', 'Camila y Axel\n', 4, '2022-12-17', '22:00', 'Servicio de Asado', '2024-01-04 03:00:00', 1),
(2, '10002', 'Victoria y Aldo\r\n', 5, '2022-04-22', '21:00', 'Buffet de pastas con carne', '2024-01-01 15:00:30', 1),
(3, '10003', 'Cumple de Bianca', 6, '2023-03-11', '21:00', 'Hamburguesas con papas', '2024-01-04 15:06:38', 1),
(4, '10004', 'Gladys y Giuliano', 7, '2023-02-18', '21:00', 'Buffet de pastas con carne', '2024-01-04 15:29:14', 1),
(5, '10005', 'Luciana Ortega', 8, '2023-01-13', '21:00', 'Servicio de asado', '2024-01-04 15:50:47', 1),
(6, '10006', 'Liliana y Victor', 9, '2023-01-14', '21:00', 'Buffet de pastas con Carne', '2024-01-04 16:03:14', 1),
(7, '10007', 'Zulma', 10, '2023-01-15', '21:00', 'Buffet de pastas con carne', '2024-01-04 17:47:43', 1),
(8, '10008', 'Jessica y Dayrlem', 11, '2023-01-27', '21:00', 'Servicio de asado premium', '2024-01-04 17:58:18', 1),
(9, '10009', 'Andrea Karolina', 12, '2023-02-10', '21:00', 'Servicio de Asado', '2024-01-04 18:12:06', 1),
(10, '10010', 'Jaz y Huseyin', 13, '2023-01-28', '21:00', 'Servicio de Asado', '2024-01-04 18:25:34', 1),
(11, '10011', 'Giovanna y Cristhian', 14, '2023-02-03', '21:00', 'Buffet de pastas con carne', '2024-01-04 18:30:48', 1),
(12, '10012', 'Luis Recalde ', 15, '2023-02-15', '21:00', 'Servicio de Asado', '2024-01-04 18:36:58', 1),
(13, '10013', 'Elvira Rivas', 16, '2023-01-29', '21:00', 'Buffet de pastas con carne', '2024-01-04 18:45:38', 1),
(14, '10014', 'Estefi y Hugo', 17, '22023-04-02', '21:00', 'Servicio de Asado', '2024-01-04 19:23:54', 1),
(15, '10015', 'Noelia y Matias', 18, '2023-02-14', '21:00', 'Servicio de Asado', '2024-01-04 19:27:56', 1),
(16, '10016', 'Alex y Belén', 19, '2023-03-18', '21:00', 'Servicio de Asado', '2024-01-04 19:32:27', 1),
(17, '10017', 'Angelina Durand', 20, '2023-02-16', '21:00', 'Servicio de Asado', '2024-01-04 19:36:32', 1),
(18, '10018', 'Tatiana Calcena', 21, '2023-04-01', '21:00', 'Buffet de pastas con Carne', '2024-01-04 19:41:48', 1),
(19, '10019', 'Col. San José Apostolico', 22, '2023-12-01', '21:00', 'Servicio de Asado', '2024-01-04 19:47:22', 1),
(20, '10020', 'Colación Col. Dante Alhieri', 23, '2023-01-12', '21:00', 'Buffet de pastas con Carne', '2024-01-04 20:47:25', 1),
(21, '10021', 'Deisy y Luis', 24, '2023-03-03', '17:00', 'Buffet de pastas con carne', '2024-01-04 20:55:31', 1),
(22, '10022', 'Angelica Marlisse', 25, '2023-03-03', '21:00', 'Servicio de Asado', '2024-01-04 21:00:39', 1),
(23, '10023', 'Florencia Toledo', 26, '2023-11-03', '21:00', 'Servicio de Asado', '2024-01-04 21:07:56', 1),
(24, '10024', 'Empresa Atlántica de Inmuebles S.A', 27, '2023-12-03', '21:00', 'Servicio de Asado', '2024-01-04 21:12:09', 1),
(25, '10025', 'Estefi y Hugo', 28, '2023-02-04', '21:00', 'Servicio de Asado', '2024-01-04 21:21:10', 1),
(26, '10026', 'Fiorella Cabrera', 29, '2024-02-04', '21:00', 'Servicio de Asado', '2024-01-04 21:23:47', 1),
(27, '10027', 'Todegol S.Aa', 30, '2023-08-04', '21:00', 'Buffet de pastas con Carne', '2024-01-04 21:29:03', 1),
(28, '10028', 'Cynthia y Francisco', 31, '2023-11-04', '21:00', 'Buffet de pastas con Carne', '2024-01-04 22:14:28', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_eventos`
--

CREATE TABLE `lista_eventos` (
  `id` int(11) NOT NULL,
  `evento` varchar(20) NOT NULL,
  `fecha_evento` varchar(20) NOT NULL,
  `color_evento` varchar(30) NOT NULL,
  `estatus` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lista_eventos`
--

INSERT INTO `lista_eventos` (`id`, `evento`, `fecha_evento`, `color_evento`, `estatus`) VALUES
(1, 'Camila y Axel', '2022-12-17', ' #d63384', 1),
(2, 'Victoria y Aldo', '2022-04-22', ' #d63384', 1),
(3, 'Cumple de Bianca', '2023-03-11', ' #d63384', 1),
(4, 'Gladys y Giuliano', '2023-02-18', ' #d63384', 1),
(5, 'Luciana Ortega', '2023-01-13', ' #d63384', 1),
(6, 'Liliana y Victor', '2023-01-14', ' #d63384', 1),
(7, 'Zulma', '2023-01-15', ' #d63384', 1),
(8, 'Jessica y Dayrlem', '2023-01-27', ' #d63384', 1),
(9, 'Andrea Karolina', '2023-02-10', ' #d63384', 1),
(10, 'Jaz y Huseyin', '2023-01-28', ' #d63384', 1),
(11, 'Giovanna y Cristhian', '2023-02-03', ' #d63384', 1),
(12, 'Luis Recalde ', '2023-02-15', ' #d63384', 1),
(13, 'Elvira Rivas', '2023-01-29', ' #d63384', 1),
(14, 'Estefi y Hugo', '22023-04-02', ' #d63384', 1),
(15, 'Noelia y Matias', '2023-02-14', ' #d63384', 1),
(16, 'Alex y Belén', '2023-03-18', ' #d63384', 1),
(17, 'Angelina Durand', '2023-02-16', ' #d63384', 1),
(18, 'Tatiana Calcena', '2023-04-01', ' #d63384', 1),
(19, 'Col. San José Aposto', '2023-12-01', ' #d63384', 1),
(20, 'Colación Col. Dante ', '2023-01-13', ' #d63384', 1),
(21, 'Deisy y Luis', '2023-03-03', ' #d63384', 1),
(22, 'Angelica Marlisse', '2023-03-03', ' #d63384', 1),
(23, 'Florencia Toledo', '2023-11-03', ' #d63384', 1),
(24, 'Empresa Atlántica de', '2023-12-03', ' #d63384', 1),
(25, 'Estefi y Hugo', '2023-02-04', ' #d63384', 1),
(26, 'Fiorella Cabrera', '2024-02-04', ' #d63384', 1),
(27, 'Todegol S.Aa', '2023-08-04', ' #d63384', 1),
(28, 'Cynthia y Francisco', '2023-11-04', ' #d63384', 1);

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
(1, 1, 4, '300000', '2024-01-01 18:52:31', 1),
(2, 1, 4, '500000', '2024-01-03 23:57:42', 1);

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
(14, 'Pack de agua sin gas', 24000, '2023-12-31 21:58:24', 0),
(15, 'Tachos', 15000, '2023-12-31 21:58:35', 1),
(16, 'Servicios de Chop Munich 50Lt.', 690000, '2023-12-31 21:58:47', 1),
(17, 'Servicios de Chop Munich 30Lt.', 490000, '2023-12-31 21:59:00', 1),
(18, 'Apa hasta 100 personas', 450000, '2023-12-31 21:59:11', 1),
(19, 'Apa mas de 100 personas', 670000, '2023-12-31 21:59:52', 1),
(20, 'Menores', 90000, '2023-12-31 22:00:04', 0),
(21, 'Garantia', 700000, '2023-12-31 22:00:16', 1),
(22, 'Toldo 10x15', 3000000, '2023-12-31 22:00:29', 1),
(23, 'Tarima 3x4', 540000, '2023-12-31 22:00:42', 1),
(24, 'Pista 6x8', 1000000, '2023-12-31 22:00:57', 1),
(25, 'Pasarela', 350000, '2023-12-31 22:01:07', 1),
(26, 'jugos naturales', 650000, '2023-12-31 22:01:20', 1),
(27, 'Anfitriona', 350000, '2023-12-31 22:02:24', 1),
(28, 'mesa 1.20x 2.70', 220000, '2023-12-31 22:02:36', 1),
(29, 'pista 6x6', 1260000, '2023-12-31 22:02:46', 1),
(30, 'Pack de agua tónica', 30000, '2023-12-31 22:02:58', 1),
(31, 'Pack de soda', 30000, '2023-12-31 22:03:12', 1),
(32, 'Pack de agua con gas', 24000, '2023-12-31 22:03:22', 1),
(33, 'Pack de agua sin gas', 24000, '2023-12-31 22:03:35', 1),
(34, 'Pista 5x5', 625000, '2023-12-31 22:03:47', 1),
(35, 'Tarima 4.40 x 3.20', 550000, '2023-12-31 22:03:57', 1),
(36, 'Tarima 6x4', 1080000, '2023-12-31 22:04:11', 1),
(37, 'Pista 8x8', 1600000, '2023-12-31 22:04:22', 1),
(38, 'Sillas de plastico', 2500, '2023-12-31 22:04:38', 1),
(39, 'Sillas para el civil', 10000, '2023-12-31 22:04:47', 1),
(40, 'comida para proveedores', 40000, '2023-12-31 22:04:57', 1),
(41, 'Plancha de Smirnoff', 180000, '2023-12-31 22:05:07', 1),
(42, 'Apa Infantil hasta 50 personas', 150000, '2023-12-31 22:05:20', 1),
(43, 'Apa Infantil hasta 80 personas', 200000, '2023-12-31 22:05:34', 1),
(44, 'Apa Infantil hasta 100 personas', 270000, '2023-12-31 22:05:44', 1),
(45, 'pista 8x6', 1200000, '2023-12-31 22:06:22', 1),
(46, 'Caminero', 300000, '2023-12-31 22:06:32', 1),
(47, 'Pista 4x4', 400000, '2023-12-31 22:06:44', 1),
(48, 'Isla para 10 personas', 450000, '2023-12-31 22:06:59', 1),
(49, 'mesita para el civil', 150000, '2023-12-31 22:07:11', 1),
(50, 'Vino Malbec por Unidad', 60000, '2023-12-31 22:07:23', 1),
(51, 'menores exonerdos', 0, '2023-12-31 22:07:34', 1),
(52, 'pack de agua tónica', 30000, '2023-12-31 22:08:05', 1),
(53, 'vasos de wisky', 2000, '2023-12-31 22:08:18', 1),
(54, 'vasos normales', 1500, '2023-12-31 22:08:29', 1),
(55, 'copas multiuso', 1500, '2023-12-31 22:08:38', 1),
(56, 'Coca Zero pack de 2litos(4unidades)', 56000, '2023-12-31 22:08:50', 1),
(57, '100 tragos Real Tragos', 1950000, '2024-01-04 15:16:21', 1),
(58, 'Antipasto mas adicional', 45000, '2024-01-04 15:24:43', 1),
(59, 'Hora adicional', 700000, '2024-01-04 17:51:51', 1),
(60, 'Hamburgeusas + papas adicional', 35000, '2024-01-04 17:53:30', 1),
(61, 'Pernil de Cerdo', 400000, '2024-01-04 17:54:10', 1),
(62, 'Mesa para proveedores p/12p', 0, '2024-01-04 18:09:50', 1),
(63, 'Hamburguesas adicionales', 40000, '2024-01-04 18:10:42', 1),
(64, 'Parrillitas para proveedores', 40000, '2024-01-04 18:11:16', 1),
(65, 'Alquiler de la casa', 600000, '2024-01-04 18:11:29', 1),
(66, 'Menores', 90000, '2024-01-04 18:33:14', 1),
(67, 'Choperas', 5000, '2024-01-04 21:07:43', 1),
(68, 'Tiffany Bar', 240000, '2024-01-04 21:11:42', 1);

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
(5, 10002, 'Victoria y Aldo\n', NULL, NULL, 0, '2024-01-01 14:56:47', 1),
(6, 10003, 'Cumple de Bianca', NULL, NULL, 0, '2024-01-04 15:05:37', 1),
(7, 10004, 'Gladys y Giuliano', NULL, NULL, 0, '2024-01-04 15:23:45', 1),
(8, 10005, 'Luciana Ortega', NULL, NULL, 0, '2024-01-04 15:50:42', 1),
(9, 10006, 'Liliana y Victor', NULL, NULL, 0, '2024-01-04 16:02:30', 1),
(10, 10007, 'Zulma', NULL, NULL, 0, '2024-01-04 17:47:00', 1),
(11, 10008, 'Jessica y Dayrlem', NULL, NULL, 0, '2024-01-04 17:57:19', 1),
(12, 10009, 'Andrea Karolina', NULL, NULL, 0, '2024-01-04 18:08:33', 1),
(13, 10010, 'Jaz y Huseyin', NULL, NULL, 0, '2024-01-04 18:24:21', 1),
(14, 10011, 'Giovanna y Cristhian', NULL, NULL, 0, '2024-01-04 18:29:35', 1),
(15, 10012, 'Luis Recalde ', NULL, NULL, 0, '2024-01-04 18:35:22', 1),
(16, 10013, 'Elvira Rivas', NULL, NULL, 0, '2024-01-04 18:44:05', 1),
(17, 10014, 'Estefi y Hugo', NULL, NULL, 0, '2024-01-04 19:23:16', 1),
(18, 10015, 'Noelia y Matias', NULL, NULL, 0, '2024-01-04 19:26:24', 1),
(19, 10016, 'Alex y Belén', NULL, NULL, 0, '2024-01-04 19:31:52', 1),
(20, 10017, 'Angelina Durand', NULL, NULL, 0, '2024-01-04 19:35:57', 1),
(21, 10018, 'Tatiana Calcena', NULL, NULL, 0, '2024-01-04 19:40:45', 1),
(22, 10019, 'Col. San José Apostolico', NULL, NULL, 0, '2024-01-04 19:46:19', 1),
(23, 10020, 'Colación Col. Dante Alhieri', NULL, NULL, 0, '2024-01-04 20:47:19', 1),
(24, 10021, 'Deisy y Luis', NULL, NULL, 0, '2024-01-04 20:53:57', 1),
(25, 10022, 'Angelica Marlisse', NULL, NULL, 0, '2024-01-04 20:59:57', 1),
(26, 10023, 'Florencia Toledo', NULL, NULL, 0, '2024-01-04 21:06:06', 1),
(27, 10024, 'Empresa Atlántica de Inmuebles S.A', NULL, NULL, 0, '2024-01-04 21:11:18', 1),
(28, 10025, 'Estefi y Hugo', NULL, NULL, 0, '2024-01-04 21:20:34', 1),
(29, 10026, 'Fiorella Cabrera', NULL, NULL, 0, '2024-01-04 21:22:27', 1),
(30, 10027, 'Todegol S.Aa', NULL, NULL, 0, '2024-01-04 21:28:25', 1),
(31, 10028, 'Cynthia y Francisco', NULL, NULL, 0, '2024-01-04 21:32:34', 1);

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
-- Indices de la tabla `lista_eventos`
--
ALTER TABLE `lista_eventos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `lista_eventos`
--
ALTER TABLE `lista_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
