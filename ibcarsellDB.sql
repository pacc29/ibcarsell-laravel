-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 03:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibcarsell`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` longtext NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carroceria`
--

CREATE TABLE `carroceria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carroceria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carroceria`
--

INSERT INTO `carroceria` (`id`, `carroceria`) VALUES
(1, 'SEDÁN'),
(2, 'HATCHBACK'),
(3, 'SUV'),
(4, 'CROSSOVER'),
(5, 'COUPÉ'),
(6, 'PICK-UP'),
(7, 'ROADSTER'),
(8, 'MINIVAN'),
(9, 'MOTOCICLETA'),
(10, 'TURISMO'),
(11, 'BERLINA'),
(12, 'TODO TERRENO');

-- --------------------------------------------------------

--
-- Table structure for table `combustible`
--

CREATE TABLE `combustible` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `combustible` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `combustible`
--

INSERT INTO `combustible` (`id`, `combustible`) VALUES
(1, 'Gasolina'),
(2, 'Diesel'),
(3, 'GLP'),
(4, 'GNV'),
(5, 'Eléctrico'),
(6, 'Hibrido');

-- --------------------------------------------------------

--
-- Table structure for table `condicion`
--

CREATE TABLE `condicion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `condicion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `condicion`
--

INSERT INTO `condicion` (`id`, `condicion`) VALUES
(1, 'Nuevo'),
(2, 'Semi-Nuevo'),
(3, 'Usado');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`id`, `marca`) VALUES
(1, 'Audi'),
(2, 'TOYOTA'),
(3, 'KIA'),
(4, 'Hyundai'),
(5, 'Mazda'),
(6, 'BMW'),
(7, 'Nissan'),
(8, 'Volkswagen'),
(9, 'Subaru'),
(10, 'Honda'),
(11, 'Jeep'),
(12, 'Acura'),
(13, 'Alfa-romeo'),
(14, 'Aston Martin'),
(15, 'Baic Yinxiang'),
(16, 'Baic'),
(17, 'Bentley'),
(18, 'Brilliance'),
(19, 'Buick'),
(20, 'Byd'),
(21, 'Changan'),
(22, 'Changue'),
(23, 'Chery'),
(24, 'Chevrolet'),
(25, 'Chrysler'),
(26, 'Citroen'),
(27, 'Daewoo'),
(28, 'Daihatsu'),
(29, 'Datsun'),
(30, 'Dfsk'),
(31, 'Dodge'),
(32, 'Dongfeng'),
(33, 'Faw'),
(34, 'Fiat'),
(35, 'Ford'),
(36, 'Foton'),
(37, 'Geely'),
(38, 'Gmc'),
(39, 'Great wall'),
(40, 'Hafei'),
(41, 'Haima'),
(42, 'Haval'),
(43, 'Hummer'),
(44, 'Isuzu'),
(45, 'Jac'),
(46, 'Jaguar'),
(47, 'Jetour'),
(48, 'Jinbei'),
(49, 'Jmc'),
(50, 'Lada'),
(51, 'Lamborghini'),
(52, 'Land Rover'),
(53, 'Lexus'),
(54, 'Lifan'),
(55, 'Lincoln'),
(56, 'Mahindra'),
(57, 'Maserati'),
(58, 'Maxus'),
(59, 'Mc Laren'),
(60, 'Mercedes Benz'),
(61, 'Mercury'),
(62, 'Mg'),
(63, 'Mini'),
(64, 'Mitsubishi'),
(65, 'Morris Garages'),
(66, 'Oldsmobile'),
(67, 'Peugeot'),
(68, 'Plymouth'),
(69, 'Porsche'),
(70, 'Ram'),
(71, 'Renault'),
(72, 'Seat'),
(73, 'Shineray'),
(74, 'Skoda'),
(75, 'Soueast'),
(76, 'Ssangyong'),
(77, 'Suzuki'),
(78, 'Triumph'),
(79, 'Volvo');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_22_205503_create_marcas_table', 1),
(6, '2023_07_22_205756_create_modelos_table', 1),
(7, '2023_07_22_231416_create_traccion_table', 1),
(8, '2023_07_22_231421_create_carroceria_table', 1),
(9, '2023_07_22_231429_create_combustible_table', 1),
(10, '2023_07_22_231434_create_condicion_table', 1),
(11, '2023_07_22_231439_create_transmision_table', 1),
(12, '2023_07_22_231445_create_ubicacion_table', 1),
(13, '2023_07_22_231502_create_vehiculo_table', 1),
(14, '2023_07_24_142458_insert_timestamp_column_on_vehiculo', 2),
(15, '2023_08_03_133217_ventas', 3),
(16, '2023_08_03_161336_create_table_ventas', 4),
(17, '2023_08_04_163417_create_table_blogs', 5),
(18, '2023_08_04_163539_create_table_blogs', 6),
(19, '2023_08_04_164621_create_table_blogs', 7),
(20, '2023_08_04_164735_create_table_blogs', 8),
(21, '2023_09_06_150010_create_jobs_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `modelos`
--

CREATE TABLE `modelos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `marca_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modelos`
--

INSERT INTO `modelos` (`id`, `modelo`, `marca_id`) VALUES
(1, 'A4', 1),
(2, 'Q5', 1),
(3, 'Q7', 1),
(4, 'A6', 1),
(5, 'Q3', 1),
(6, 'A3 Sedan', 1),
(7, 'A3 Sportback', 1),
(8, 'A1 Sportback', 1),
(9, 'A3 Hb', 1),
(10, 'A5 Sportback', 1),
(11, 'A1', 1),
(12, 'A5', 1),
(13, 'A7', 1),
(14, 'A8', 1),
(15, 'Q2', 1),
(16, 'Q8', 1),
(17, 'R8', 1),
(18, 'Rs3', 1),
(19, 'S3 Hb', 1),
(20, 'S3 Sedan', 1),
(21, 'S5', 1),
(22, 'S6', 1),
(23, 'S7', 1),
(24, 'Tt', 1),
(25, 'Tt Coupe', 1),
(26, 'Tt Rs', 1),
(27, 'Hilux', 2),
(28, 'Rav4', 2),
(29, 'Yaris', 2),
(30, 'Corolla', 2),
(31, 'Land Cruiser Prado', 2),
(32, 'Fortuner', 2),
(33, 'Etios', 2),
(34, '4runner Limited', 2),
(35, '4runner', 2),
(36, 'Yaris Hb', 2),
(37, '86', 2),
(38, 'Agya', 2),
(39, 'Auris', 2),
(40, 'Avanza', 2),
(41, 'Avensis', 2),
(42, 'Camry', 2),
(43, 'Corolla Se-G Hibrido', 2),
(44, 'Corona', 2),
(45, 'Fj Cruiser', 2),
(46, 'Hiace', 2),
(47, 'Highlander', 2),
(48, 'Land Cruiser', 2),
(49, 'Land Cruiser 200', 2),
(50, 'Prius', 2),
(51, 'Prius C', 2),
(52, 'Raize', 2),
(53, 'Rush', 2),
(54, 'Tacoma', 2),
(55, 'Urban Cruiser', 2),
(56, 'Sportage', 3),
(57, 'Rio', 3),
(58, 'Sorento', 3),
(59, 'Cerato', 3),
(60, 'Picanto', 3),
(61, 'Soul', 3),
(62, 'Cerato Koup', 3),
(63, 'New Rio', 3),
(64, 'Picanto Cross', 3),
(65, 'Optima', 3),
(66, 'All new Picanto Cross', 3),
(67, 'Cadenza', 3),
(68, 'Cadenza Yg', 3),
(69, 'Carens', 3),
(70, 'Carnival', 3),
(71, 'Cerato Hb', 3),
(72, 'Cerato Hb Facelift', 3),
(73, 'Cerato Sedan Facelift', 3),
(74, 'Grand Carnival', 3),
(75, 'Koup', 3),
(76, 'Mohave', 3),
(77, 'New Carens', 3),
(78, 'New Cerato', 3),
(79, 'New Optima', 3),
(80, 'New Picanto', 3),
(81, 'New Rio Hb', 3),
(82, 'New Sorento', 3),
(83, 'New Soul', 3),
(84, 'New Sportage', 3),
(85, 'Rio Cross', 3),
(86, 'Rio Hb', 3),
(87, 'Rio Sedan', 3),
(88, 'Seltos', 3),
(89, 'Soluto', 3),
(90, 'Sportage Ql', 3),
(91, 'Stinger', 3),
(92, 'Towner', 3),
(93, 'Tucson', 4),
(94, 'Santa Fe', 4),
(95, 'Elantra', 4),
(96, 'Creta', 4),
(97, 'I30', 4),
(98, 'Accent Hb', 4),
(99, 'New Tucson', 4),
(100, 'Accent', 4),
(101, 'I20', 4),
(102, 'All New Tucson', 4),
(103, 'Accent Glp', 4),
(104, 'All New Elandra Ad', 4),
(105, 'Atos', 4),
(106, 'Avante', 4),
(107, 'Azera', 4),
(108, 'Genesis Coupe', 4),
(109, 'Grand I10', 4),
(110, 'Grand I10 Sedan', 4),
(111, 'Grand Santa Fe', 4),
(112, 'H-1', 4),
(113, 'H-1 3 Van', 4),
(114, 'H1', 4),
(115, 'Hd', 4),
(116, 'I10', 4),
(117, 'I20 Active', 4),
(118, 'New Creta', 4),
(119, 'New Elantra', 4),
(120, 'New Elantra Ad', 4),
(121, 'New Santa Fe', 4),
(122, 'Palisade', 4),
(123, 'Sonata', 4),
(124, 'Starex', 4),
(125, 'Veloster', 4),
(126, 'Venue', 4),
(127, 'Veracruz', 4),
(128, 'Verna', 4),
(129, '3', 5),
(130, 'Cx-5', 5),
(131, '3 Sport', 5),
(132, 'Cx-9', 5),
(133, 'Cx-3', 5),
(134, '2 Sport', 5),
(135, '3 Sedan', 5),
(136, '6', 5),
(137, 'Bt-50', 5),
(138, 'Cx-30', 5),
(139, '121', 5),
(140, '2', 5),
(141, '2 Sedan', 5),
(142, '5', 5),
(143, 'All New Mazda 3', 5),
(144, 'Cx-7', 5),
(145, 'Mx 5', 5),
(146, 'Mx-5 Rf', 5),
(147, '318i', 6),
(148, '120i', 6),
(149, 'X3 20i', 6),
(150, 'X6 35i', 6),
(151, '520-I', 6),
(152, '320i', 6),
(153, '118i', 6),
(154, 'X5 35i', 6),
(155, '316i', 6),
(156, '218i Gran Coupe', 6),
(157, '114i', 6),
(158, '116i', 6),
(159, '128i', 6),
(160, '135i', 6),
(161, '220i', 6),
(162, '316', 6),
(163, '318', 6),
(164, '318is', 6),
(165, '320', 6),
(166, '325i', 6),
(167, '328-I', 6),
(168, '335i', 6),
(169, '418i Gci', 6),
(170, '420i', 6),
(171, '420i Gran Coupe', 6),
(172, '428i', 6),
(173, '430i Coupe', 6),
(174, '520', 6),
(175, '523-I', 6),
(176, '525i', 6),
(177, '528-I', 6),
(178, '530i', 6),
(179, '540-I', 6),
(180, '640i Coupe', 6),
(181, '740li', 6),
(182, '750i', 6),
(183, '750li', 6),
(184, 'M135i', 6),
(185, 'M2 Coupe', 6),
(186, 'M235i', 6),
(187, 'M235i Xdrive Grand Coupe', 6),
(188, 'M3', 6),
(189, 'M3 Sedan', 6),
(190, 'M340i Xdrive', 6),
(191, 'M4', 6),
(192, 'M5', 6),
(193, 'M6', 6),
(194, 'M8', 6),
(195, 'X-3', 6),
(196, 'X-5', 6),
(197, 'X1', 6),
(198, 'X1 18i', 6),
(199, 'X1 20i', 6),
(200, 'X2 20i', 6),
(201, 'X3', 6),
(202, 'X3 28i', 6),
(203, 'X3 30i', 6),
(204, 'X3 35i', 6),
(205, 'X4', 6),
(206, 'X4 20i', 6),
(207, 'X5', 6),
(208, 'X5 30d', 6),
(209, 'X5 40i', 6),
(210, 'X5 50i', 6),
(211, 'X5-25d', 6),
(212, 'X6', 6),
(213, 'X6 30d', 6),
(214, 'X6 40i', 6),
(215, 'X6 50i', 6),
(216, 'X6 M', 6),
(217, 'X7 40i', 6),
(218, 'X7 M50i', 6),
(219, 'X-Trail', 7),
(220, 'Qashqai', 7),
(221, 'Sentra', 7),
(222, 'Versa', 7),
(223, 'Tiida', 7),
(224, 'Kicks', 7),
(225, 'Np300 Frontier', 7),
(226, 'Np300', 7),
(227, 'Pathfinder', 7),
(228, '300c', 7),
(229, 'Almera', 7),
(230, 'Altima', 7),
(231, 'Armada', 7),
(232, 'Juke', 7),
(233, 'March', 7),
(234, 'Murano', 7),
(235, 'Navara', 7),
(236, 'New Sentra', 7),
(237, 'New Versa', 7),
(238, 'Patrol', 7),
(239, 'Qashqai +2', 7),
(240, 'Rogue', 7),
(241, 'Sentra 2.0', 7),
(242, 'Sentra Se-R', 7),
(243, 'Sentra V16', 7),
(244, 'Sentra V16i', 7),
(245, 'Teana', 7),
(246, 'Titan', 7),
(247, 'Urvan', 7),
(248, 'Versa Sense', 7),
(249, 'X-Trail Extreme', 7),
(250, 'Jetta', 8),
(251, 'Gol', 8),
(252, 'Tiguan', 8),
(253, 'Amarok', 8),
(254, 'Crossfox', 8),
(255, 'Bora', 8),
(256, 'Tiguan Allspace', 8),
(257, 'Jetta Gli', 8),
(258, 'T-Cross', 8),
(259, 'Gol Comfort 1.6', 8),
(260, 'Beetle', 8),
(261, 'Caddy', 8),
(262, 'Cc', 8),
(263, 'Gol Comfort Sedan', 8),
(264, 'Gol Power', 8),
(265, 'Gol Sedan', 8),
(266, 'Gol Station', 8),
(267, 'Golf', 8),
(268, 'Golf Gti', 8),
(269, 'Hatchback', 8),
(270, 'Multivan', 8),
(271, 'Passat', 8),
(272, 'Passat Cc', 8),
(273, 'Polo', 8),
(274, 'Saveiro', 8),
(275, 'Space Fox', 8),
(276, 'Taos', 8),
(277, 'Touareg', 8),
(278, 'Transporter', 8),
(279, 'Up', 8),
(280, 'Virtus', 8),
(281, 'Voyage', 8),
(282, 'Forester', 9),
(283, 'New Xv', 9),
(284, 'Impreza', 9),
(285, 'Impreza Sport', 9),
(286, 'Outback', 9),
(287, 'Xv', 9),
(288, 'Legacy', 9),
(289, 'All New Forester', 9),
(290, 'Impreza Sedan', 9),
(291, 'All New Legacy', 9),
(292, 'All New Forester 2019', 9),
(293, 'All New Outback', 9),
(294, 'Evoltis', 9),
(295, 'Forester Turbo', 9),
(296, 'Impreza Wrx', 9),
(297, 'Impreza Wrx-Sti', 9),
(298, 'Svx', 9),
(299, 'Tribeca', 9),
(300, 'Wrx', 9),
(301, 'Pilot', 10),
(302, 'Cr-V', 10),
(303, 'Accord', 10),
(304, 'Civic', 10),
(305, 'Wr-V', 10),
(306, 'Hr-V', 10),
(307, 'Hrv', 10),
(308, 'Odyssey', 10),
(309, 'Civic Si Sedan', 10),
(310, 'Civic Si', 10),
(311, 'Accord Coupe', 10),
(312, 'City', 10),
(313, 'City Sport', 10),
(314, 'Civic Coupe', 10),
(315, 'Civic Turbo', 10),
(316, 'Ridgeline', 10),
(317, 'Grand Cherokee Laredo', 11),
(318, 'Compass', 11),
(319, 'Cherokee Limited', 11),
(320, 'Grand Cherokee Limited', 11),
(321, 'Renegade', 11),
(322, 'Cherokee Longitude', 11),
(323, 'Patriot', 11),
(324, 'Compass Sport', 11),
(325, 'Cherokee Laredo', 11),
(326, 'Cherokee Sport', 11),
(327, 'Cherokee', 11),
(328, 'Gladiator', 11),
(329, 'Grand Cherokee', 11),
(330, 'Grand Cherokee Overland', 11),
(331, 'Grand Cherokee Srt', 11),
(332, 'Wrangler', 11),
(333, 'Wrangler Rubicon', 11),
(334, 'Wrangler Unlimited Rubicon', 11),
(335, 'Wrangler Unlimited Sahara', 11),
(336, 'Integra', 12),
(337, 'Spider', 13),
(338, 'Giulia', 13),
(339, 'Giulietta ', 13),
(340, 'Stelvio ', 13),
(341, 'Db 11', 14),
(342, 'Db 9', 14),
(343, 'Rapide', 14),
(344, 'Vanquish', 14),
(345, 'Vantage S', 14),
(346, 'Dbs Superleggera', 14),
(347, 'DBX', 14),
(348, 'Valhalla', 14),
(349, 'Grand Plus', 16),
(350, 'x25', 16),
(351, 'x55', 16),
(352, 'Bentayga', 17),
(353, 'Continental GT', 17),
(354, 'Flying Spur', 17),
(355, 'H230', 18),
(356, 'H530', 18),
(357, 'H220', 18),
(358, 'F3r', 20),
(359, 'F3', 20),
(360, 'S6', 20),
(361, 'E6', 20),
(362, 'Alsvin', 21),
(363, 'CS 15', 21),
(364, 'CS 35 ', 21),
(365, 'CS 75', 21),
(366, 'CX 70', 21),
(367, 'EADO', 21),
(368, 'Pick up', 21),
(369, 'Honor', 21),
(370, 'CH6391C4', 22),
(371, 'Freedom', 22),
(372, 'Arrizo 3', 23),
(373, 'Arrizo 5', 23),
(374, 'Fulwin', 23),
(375, 'K60', 23),
(376, 'Tiggo 2', 23),
(377, 'q22', 23),
(378, 'Qq', 23),
(379, 'S21', 23),
(380, 'TIGGO 2 PRO', 23),
(381, 'TIGGO 3', 23),
(382, 'TIGGO 7 PRO', 23),
(383, 'TIGGO 7', 23),
(384, 'TIGGO 8', 23),
(385, 'TIGGO', 23),
(386, 'Captiva ', 24),
(417, 'Joy Hatchback', 24),
(418, 'Joy', 24),
(419, 'ONIX', 24),
(420, 'Aveo', 24),
(421, 'Blazer', 24),
(422, 'Camaro', 24),
(423, 'Captiva', 24),
(424, 'Cobalt', 24),
(425, 'Colorado', 24),
(426, 'Corvette', 24),
(427, 'Cruze Hatchback', 24),
(428, 'Cruze', 24),
(429, 'Equinox', 24),
(430, 'Groove', 24),
(431, 'Hhr', 24),
(432, 'Impala', 24),
(433, 'Onix ', 24),
(434, 'Optra', 24),
(435, 'Orlando', 24),
(436, 'Prisma', 24),
(437, 'Sail', 24),
(438, 'Silverado', 24),
(439, 'Sonic', 24),
(440, 'Spark Gt', 24),
(441, 'Spark ', 24),
(442, 'Spin', 24),
(443, 'Suburban', 24),
(444, 'Tahoe', 24),
(445, 'Tracker', 24),
(446, 'Traverse', 24),
(447, 'Caravan', 25),
(448, 'Pacifica', 25),
(449, 'PT Cruiser', 25),
(450, 'Sebring ', 25),
(451, 'Town & Country', 25),
(452, 'C-3', 26),
(453, 'C-4', 26),
(454, 'C-5', 26),
(455, 'C-Elysée ', 26),
(456, 'C4-Cactus', 26),
(457, 'C5 Aircross', 26),
(458, 'DS3', 26),
(459, 'DS5 Sport', 26),
(460, 'DS5', 26),
(461, 'Grand C4 Picasso', 26),
(462, 'Korando', 27),
(463, 'Terios', 28),
(464, 'Glory 330', 30),
(465, 'Glory 560', 30),
(466, 'Glory 580', 30),
(467, 'Callenger', 31),
(468, 'Caliber', 31),
(469, 'Durango', 31),
(470, 'Journey', 31),
(471, 'Nitro', 31),
(472, 'RAM 1500', 31),
(473, 'RAM 2500', 31),
(474, 'RAM', 31),
(475, 'AX4', 32),
(476, 'JOYEAR S500', 32),
(477, 'JOYEAR Sx6', 32),
(478, 'SX6', 32),
(479, 'X3', 32),
(480, 'Lingzhi', 32),
(481, 'T5 EVO', 32),
(482, '175', 34),
(483, '500 ', 34),
(484, '500 POP', 34),
(485, 'Argo', 34),
(486, 'Fiorino', 34),
(487, 'Fullback', 34),
(488, 'Mobi', 34),
(489, 'Palio Adventure', 34),
(490, 'Palio Weekend', 34),
(491, 'Punto', 34),
(492, 'Siena', 34),
(493, 'Uno Way', 34),
(494, 'Bronco', 35),
(495, 'EcoSport', 35),
(496, 'Edge Sel', 35),
(497, 'Edge Titanium', 35),
(498, 'Escape', 35),
(499, 'Expedition', 35),
(500, 'Explorer', 35),
(501, 'F-150', 35),
(502, 'Fiesta', 35),
(503, 'Freestyle', 35),
(504, 'Focus', 35),
(505, 'Fusion', 35),
(506, 'Mondeo', 35),
(507, 'Mondeo Berlina', 35),
(508, 'Mustang', 35),
(509, 'Mustang GT', 35),
(510, 'Edge', 35),
(511, 'Expedition', 35),
(512, 'Ranger Limited', 35),
(513, 'Ranger', 35),
(514, 'Raptor', 35),
(515, 'Taurus', 35),
(516, 'Territory', 35),
(517, 'MP-X', 36),
(518, 'Tunland', 36),
(519, 'FT-500', 36),
(520, 'Minivan PX', 36),
(521, 'CK', 37),
(522, 'Coolray', 37),
(523, 'GS', 37),
(524, 'GX3', 37),
(525, 'Lc', 37),
(526, 'MK', 37),
(527, 'C-Max', 35),
(528, 'B-Max', 35),
(529, 'Kuga ', 35),
(530, 'Suburban', 38),
(531, '3', 39),
(532, 'Cowly', 39),
(533, 'Florid', 39),
(534, 'H3', 39),
(535, 'Haval H3', 39),
(536, 'H5', 39),
(537, 'Haval H5', 39),
(538, 'Hover', 39),
(539, 'M4', 39),
(540, 'Voleex C30', 39),
(541, 'Wingle 5', 39),
(542, 'Wingle 7', 39),
(543, 'Haima 7', 41),
(544, 'H6', 42),
(545, 'H1', 42),
(546, 'H2', 42),
(547, 'H3', 42),
(548, 'H1', 43),
(549, 'H2', 43),
(550, 'H2H', 43),
(551, 'H3', 43),
(552, 'Bighorn', 44),
(553, 'DMAX', 44),
(554, 'B-Cross', 45),
(555, 'Spazio', 45),
(556, 'J2', 45),
(557, 'JS2', 45),
(558, 'J3', 45),
(559, 'J4', 45),
(560, 'J6', 45),
(561, 'Rein', 45),
(562, 'S1', 45),
(563, 'S2', 45),
(564, 'S3', 45),
(565, 'S4', 45),
(566, 'JS3', 45),
(567, 'JS4', 45),
(568, 'T8', 45),
(569, 'E-PACE', 46),
(570, 'F-pace', 46),
(571, 'Xe', 46),
(572, 'Xj-6', 46),
(573, 'X70', 47),
(574, 'Konect', 48),
(575, 'Boarding', 49),
(576, 'Landwind x2', 49),
(577, 'Vigus', 49),
(578, 'Urus', 51),
(579, 'Huracán Evo ', 51),
(580, 'Aventador  ', 51),
(581, 'Murciélago', 51),
(582, 'Defender ', 52),
(583, 'Discovery ', 52),
(584, 'Discovery II', 52),
(585, 'Discovery 4', 52),
(586, 'Discovery Sport', 52),
(587, 'Evoque ', 52),
(588, 'Range Rover Velar', 52),
(589, 'Range Rover Evoque ', 52),
(590, 'Range Rover Vogue', 52),
(591, 'Range Rover Sport', 52),
(592, 'CT 200h', 53),
(593, 'ES 250', 53),
(594, 'IS 250', 53),
(595, 'ES 350', 53),
(596, 'Gs 350 f-sport', 53),
(597, 'Gs 350', 53),
(598, 'GX 460', 53),
(599, 'IS 200T ', 53),
(600, 'IS 200T F Sport ', 53),
(601, 'IS 250T', 53),
(602, ' IS 250 F Sport', 53),
(603, 'IS 300 Sport', 53),
(604, 'IS 300', 53),
(605, 'LC 500h', 53),
(606, 'Lx 470', 53),
(607, 'Lx 570', 53),
(608, 'Lx 570 plus', 53),
(609, 'NX 200 T Plus', 53),
(610, 'Nx 200t f-sport ', 53),
(611, 'Nx 200t', 53),
(612, 'NX 300h F Sport', 53),
(613, 'Nx 300h', 53),
(614, 'RC F', 53),
(615, 'Rx 350', 53),
(616, 'Rx 350 f-sport', 53),
(617, 'Rx 450h', 53),
(618, 'Rx 450 f-sport', 53),
(619, '320', 54),
(620, '330', 54),
(621, 'Town Car', 55),
(622, 'Pickup', 56),
(623, 'Scorpio', 56),
(624, 'XUV 500', 56),
(625, 'Ghibli ', 57),
(626, 'GranTurismo', 57),
(627, 'Levante ', 57),
(628, 'Levante GTS', 57),
(629, 'Levante S GranSport ', 57),
(630, 'Quattroporte ', 57),
(631, 'MC 20', 57),
(632, 'GranCabrio ', 57),
(633, 'D60', 58),
(634, 'T60', 58),
(635, 'MP4/12C', 59),
(636, 'GT ', 59),
(637, 'Speedtail ', 59),
(638, 'Senna ', 59),
(639, '720S ', 59),
(640, '600LT ', 59),
(641, '570S ', 59),
(642, '570GT ', 59),
(643, '540C ', 59),
(644, 'Artura ', 59),
(645, '765LT  ', 59),
(646, '675LT', 59),
(647, 'P1 ', 59),
(648, '650S  ', 59),
(649, 'A200', 60),
(650, 'CLA 200', 60),
(651, 'CLA 180', 60);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traccion`
--

CREATE TABLE `traccion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `traccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traccion`
--

INSERT INTO `traccion` (`id`, `traccion`) VALUES
(1, '4x4'),
(2, 'Delantera'),
(3, 'Delantera 4x2'),
(4, 'AWD'),
(5, 'Trasera'),
(6, 'Trasera 4x2');

-- --------------------------------------------------------

--
-- Table structure for table `transmision`
--

CREATE TABLE `transmision` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transmision` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transmision`
--

INSERT INTO `transmision` (`id`, `transmision`) VALUES
(1, 'Mecánico'),
(2, 'Automatico'),
(3, 'Automático / Secuencial');

-- --------------------------------------------------------

--
-- Table structure for table `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ubicacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `ubicacion`) VALUES
(1, 'Amazonas'),
(2, 'Ancash'),
(3, 'Apurimac'),
(4, 'Arequipa'),
(5, 'Ayacucho'),
(6, 'Cajamarca'),
(7, 'Callao'),
(8, 'Cusco'),
(9, 'Huancavelica'),
(10, 'Huanuco'),
(11, 'Ica'),
(12, 'Junín'),
(13, 'La Libertad'),
(14, 'Lambayeque'),
(15, 'Lima'),
(16, 'Loreto'),
(17, 'Madre De Dios'),
(18, 'Moquegua'),
(19, 'Pasco'),
(20, 'Piura'),
(21, 'Puno'),
(22, 'San Martín'),
(23, 'Tacna'),
(24, 'Tumbes'),
(25, 'Ucayali');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `placa` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `motor` varchar(255) DEFAULT NULL,
  `cilindros` int(11) NOT NULL,
  `cilindrada` int(11) NOT NULL,
  `puertas` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `kilometraje` int(11) NOT NULL,
  `fecha_fabricacion` year(4) NOT NULL,
  `fecha_modelo` year(4) NOT NULL,
  `marca_id` bigint(20) UNSIGNED NOT NULL,
  `modelo_id` bigint(20) UNSIGNED NOT NULL,
  `carroceria_id` bigint(20) UNSIGNED NOT NULL,
  `transmision_id` bigint(20) UNSIGNED NOT NULL,
  `combustible_id` bigint(20) UNSIGNED NOT NULL,
  `traccion_id` bigint(20) UNSIGNED NOT NULL,
  `condicion_id` bigint(20) UNSIGNED NOT NULL,
  `ubicacion_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `placa`, `descripcion`, `color`, `motor`, `cilindros`, `cilindrada`, `puertas`, `precio`, `kilometraje`, `fecha_fabricacion`, `fecha_modelo`, `marca_id`, `modelo_id`, `carroceria_id`, `transmision_id`, `combustible_id`, `traccion_id`, `condicion_id`, `ubicacion_id`, `created_at`, `updated_at`) VALUES
(17, 'AZK-071', 'BMW', NULL, NULL, 4, 1998, 5, 25950, 38000, '2016', '2017', 6, 148, 2, 1, 1, 5, 2, 15, '2023-07-24 14:38:37', '2023-08-18 19:35:02'),
(18, 'AZK-070', 'AUDIA5SLINE', NULL, NULL, 4, 1800, 2, 17600, 51000, '2012', '2013', 1, 12, 11, 3, 1, 6, 2, 15, '2023-07-24 14:38:37', '2023-07-24 14:38:37'),
(19, 'AZK-077', 'BMW320i', NULL, NULL, 4, 1997, 5, 25000, 57000, '2012', '2013', 6, 165, 10, 1, 1, 5, 2, 15, '2023-07-24 14:38:37', '2023-07-24 14:38:37'),
(21, 'AZK-301', 'mercedes', NULL, NULL, 4, 1595, 4, 19300, 54000, '2015', '2015', 60, 650, 5, 3, 1, 2, 2, 15, '2023-07-24 14:38:37', '2023-07-24 14:38:37'),
(22, 'AZK-010', 'JAGUAR', NULL, NULL, 4, 1997, 5, 50000, 45000, '2019', '2019', 46, 570, 12, 2, 1, 1, 2, 15, '2023-07-24 14:38:37', '2023-09-07 19:22:49'),
(23, 'AZK-011', 'MERCEDESBENZ', NULL, NULL, 4, 1300, 5, 35000, 32000, '2020', '2020', 60, 649, 2, 3, 1, 2, 2, 15, '2023-07-24 14:38:37', '2023-07-24 14:38:37'),
(25, 'AZK-012', 'NISSANSENTRA', NULL, NULL, 4, 1800, 5, 17000, 29000, '2019', '2019', 7, 221, 1, 2, 1, 6, 2, 15, '2023-07-24 14:38:37', '2023-07-24 14:38:37'),
(26, 'AZK-013', 'MBENZA200N', NULL, NULL, 4, 1600, 5, 25000, 36000, '2017', '2018', 60, 649, 2, 3, 1, 2, 3, 15, '2023-07-24 14:38:37', '2023-07-24 14:38:37'),
(83, 'WEW-WWW', 'DDD', NULL, NULL, 2, 2, 4, 5000, 2000, '2010', '2015', 3, 60, 4, 2, 2, 2, 2, 19, '2023-10-31 19:32:43', '2023-11-07 20:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `kilometraje` int(11) NOT NULL,
  `fecha_fabricacion` year(4) NOT NULL,
  `placa` varchar(255) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `carroceria`
--
ALTER TABLE `carroceria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combustible`
--
ALTER TABLE `combustible`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `condicion`
--
ALTER TABLE `condicion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modelos_marca_id_foreign` (`marca_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `traccion`
--
ALTER TABLE `traccion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transmision`
--
ALTER TABLE `transmision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehiculo_placa_unique` (`placa`),
  ADD KEY `vehiculo_marca_id_foreign` (`marca_id`),
  ADD KEY `vehiculo_modelo_id_foreign` (`modelo_id`),
  ADD KEY `vehiculo_carroceria_id_foreign` (`carroceria_id`),
  ADD KEY `vehiculo_transmision_id_foreign` (`transmision_id`),
  ADD KEY `vehiculo_combustible_id_foreign` (`combustible_id`),
  ADD KEY `vehiculo_traccion_id_foreign` (`traccion_id`),
  ADD KEY `vehiculo_condicion_id_foreign` (`condicion_id`),
  ADD KEY `vehiculo_ubicacion_id_foreign` (`ubicacion_id`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ventas_placa_unique` (`placa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `carroceria`
--
ALTER TABLE `carroceria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `combustible`
--
ALTER TABLE `combustible`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `condicion`
--
ALTER TABLE `condicion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=652;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traccion`
--
ALTER TABLE `traccion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transmision`
--
ALTER TABLE `transmision`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `modelos_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`);

--
-- Constraints for table `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_carroceria_id_foreign` FOREIGN KEY (`carroceria_id`) REFERENCES `carroceria` (`id`),
  ADD CONSTRAINT `vehiculo_combustible_id_foreign` FOREIGN KEY (`combustible_id`) REFERENCES `combustible` (`id`),
  ADD CONSTRAINT `vehiculo_condicion_id_foreign` FOREIGN KEY (`condicion_id`) REFERENCES `condicion` (`id`),
  ADD CONSTRAINT `vehiculo_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`),
  ADD CONSTRAINT `vehiculo_modelo_id_foreign` FOREIGN KEY (`modelo_id`) REFERENCES `modelos` (`id`),
  ADD CONSTRAINT `vehiculo_traccion_id_foreign` FOREIGN KEY (`traccion_id`) REFERENCES `traccion` (`id`),
  ADD CONSTRAINT `vehiculo_transmision_id_foreign` FOREIGN KEY (`transmision_id`) REFERENCES `transmision` (`id`),
  ADD CONSTRAINT `vehiculo_ubicacion_id_foreign` FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicacion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
