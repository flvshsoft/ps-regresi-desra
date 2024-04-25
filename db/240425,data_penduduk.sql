-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 11:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ps_regresi_desra`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `kode_kecamatan` varchar(20) NOT NULL,
  `tahun` int(4) NOT NULL,
  `luas_wilayah` double NOT NULL,
  `jumlah_penduduk` double NOT NULL,
  `kepadatan_penduduk` double NOT NULL,
  `bagi_data` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id_penduduk`, `kode_kecamatan`, `tahun`, `luas_wilayah`, `jumlah_penduduk`, `kepadatan_penduduk`, `bagi_data`) VALUES
(4, '14.06.02', 2010, 952.32, 20406, 21.428, 'Training'),
(5, '14.06.02', 2011, 952.32, 21355, 22.424, 'Training'),
(6, '14.06.02', 2012, 952.32, 21713, 22.8, 'Training'),
(7, '14.06.02', 2013, 952.32, 22319, 23.436, 'Training'),
(8, '14.06.02', 2014, 952.32, 22925, 24.073, 'Training'),
(9, '14.06.02', 2015, 952.32, 23529, 24.707, 'Training'),
(10, '14.06.02', 2016, 952.32, 24125, 25.333, 'Training'),
(11, '14.06.02', 2017, 932.79, 24717, 26.498, 'Training'),
(12, '14.06.02', 2018, 953.11, 25297, 26.542, 'Training'),
(13, '14.06.02', 2019, 932.9, 25870, 27.731, 'Training'),
(14, '14.06.02', 2020, 952.31, 23011, 24.163, 'Testing'),
(15, '14.06.02', 2021, 952.31, 23269, 24.434, 'Testing'),
(16, '14.06.02', 2022, 952.31, 23610, 24.792, 'Testing'),
(17, '14.06.02', 2023, 952.31, 23947, 25.146, 'Testing'),
(18, '14.06.16', 2010, 216.9, 10730, 49.47, 'Training'),
(19, '14.06.16', 2011, 216.9, 11166, 51.48, 'Training'),
(20, '14.06.16', 2012, 216.9, 21714, 100.111, 'Training'),
(21, '14.06.16', 2013, 216.9, 11521, 53.117, 'Training'),
(22, '14.06.16', 2014, 216.9, 11756, 54.2, 'Training'),
(23, '14.06.16', 2015, 216.9, 11987, 55.265, 'Training'),
(24, '14.06.16', 2016, 216.9, 12211, 56.298, 'Training'),
(25, '14.06.16', 2017, 212.45, 12430, 58.508, 'Training'),
(26, '14.06.16', 2018, 204.41, 12639, 61.832, 'Training'),
(27, '14.06.16', 2019, 212.45, 12842, 60.447, 'Training'),
(28, '14.06.16', 2020, 204.24, 12774, 62.544, 'Testing'),
(29, '14.06.16', 2021, 204.24, 12984, 63.572, 'Testing'),
(30, '14.06.16', 2022, 204.24, 13242, 64.835, 'Testing'),
(31, '14.06.16', 2023, 204.24, 13501, 66.104, 'Testing'),
(32, '14.06.11', 2010, 322.4, 25931, 80.431, 'Training'),
(33, '14.06.11', 2011, 322.4, 27216, 84.417, 'Training'),
(34, '14.06.11', 2012, 322.4, 21716, 67.357, 'Training'),
(35, '14.06.11', 2013, 322.4, 24907, 77.255, 'Training'),
(36, '14.06.11', 2014, 322.4, 29507, 91.523, 'Training'),
(37, '14.06.11', 2015, 322.4, 30384, 94.243, 'Training'),
(38, '14.06.11', 2016, 322.4, 31258, 96.954, 'Training'),
(39, '14.06.11', 2017, 315.79, 32129, 101.742, 'Training'),
(40, '14.06.11', 2018, 277.86, 32993, 118.74, 'Training'),
(41, '14.06.11', 2019, 315.79, 33851, 107.195, 'Training'),
(42, '14.06.11', 2020, 277.63, 30770, 110.831, 'Testing'),
(43, '14.06.11', 2021, 277.63, 31270, 112.632, 'Testing'),
(44, '14.06.11', 2022, 277.63, 31886, 114.851, 'Testing'),
(45, '14.06.11', 2023, 277.63, 32503, 117.073, 'Testing'),
(46, '14.06.12', 2010, 374.66, 22318, 59.569, 'Training'),
(47, '14.06.12', 2011, 374.66, 23501, 62.726, 'Training'),
(48, '14.06.12', 2012, 374.66, 21716, 57.962, 'Training'),
(49, '14.06.12', 2013, 374.66, 24907, 66.479, 'Training'),
(50, '14.06.12', 2014, 374.66, 25763, 68.764, 'Training'),
(51, '14.06.12', 2015, 374.66, 26629, 71.075, 'Training'),
(52, '14.06.12', 2016, 374.66, 27495, 73.387, 'Training'),
(53, '14.06.12', 2017, 366.98, 28366, 77.296, 'Training'),
(54, '14.06.12', 2018, 362.71, 29237, 80.607, 'Training'),
(55, '14.06.12', 2019, 366.98, 30108, 82.043, 'Training'),
(56, '14.06.12', 2020, 355.46, 26281, 73.935, 'Testing'),
(57, '14.06.12', 2021, 355.46, 26689, 75.083, 'Testing'),
(58, '14.06.12', 2022, 355.46, 27196, 76.509, 'Testing'),
(59, '14.06.12', 2023, 355.46, 27703, 77.936, 'Testing'),
(60, '14.06.01', 2010, 79.48, 41243, 518.91, 'Training'),
(61, '14.06.01', 2011, 79.48, 44793, 563.576, 'Training'),
(62, '14.06.01', 2012, 79.48, 21717, 273.239, 'Training'),
(63, '14.06.01', 2013, 79.48, 50917, 640.627, 'Training'),
(64, '14.06.01', 2014, 79.48, 54542, 686.236, 'Training'),
(65, '14.06.01', 2015, 79.48, 58381, 0, NULL),
(66, '14.06.01', 2015, 79.48, 62427, 785.443, 'Training'),
(67, '14.06.01', 2017, 77.85, 66698, 856.75, 'Training'),
(68, '14.06.01', 2018, 99.35, 71197, 716.628, 'Training'),
(69, '14.06.01', 2019, 77.85, 75931, 975.35, 'Training'),
(70, '14.06.01', 2020, 99.27, 49251, 496.132, 'Testing'),
(71, '14.06.01', 2021, 99.27, 50103, 504.714, 'Testing'),
(72, '14.06.01', 2022, 99.27, 51144, 515.201, 'Testing'),
(73, '14.06.01', 2023, 99.27, 52188, 525.718, 'Testing'),
(74, '14.06.07', 2010, 370.99, 27398, 73.851, 'Training'),
(75, '14.06.07', 2011, 370.99, 28968, 78.083, 'Training'),
(76, '14.06.07', 2012, 370.99, 21718, 58.541, 'Training'),
(77, '14.06.07', 2013, 370.99, 30985, 83.52, 'Training'),
(78, '14.06.07', 2014, 370.99, 32198, 86.789, 'Training'),
(79, '14.06.07', 2015, 370.99, 33432, 90.116, 'Training'),
(80, '14.06.07', 2016, 370.99, 34680, 93.48, 'Training'),
(81, '14.06.07', 2017, 363.38, 35944, 98.916, 'Training'),
(82, '14.06.07', 2018, 352.62, 37218, 105.547, 'Training'),
(83, '14.06.07', 2019, 363.38, 38503, 105.958, 'Training'),
(84, '14.06.07', 2020, 352.33, 33937, 96.322, 'Testing'),
(85, '14.06.07', 2021, 352.33, 34635, 98.303, 'Testing'),
(86, '14.06.07', 2022, 352.33, 35468, 100.667, 'Testing'),
(87, '14.06.07', 2023, 352.33, 36307, 103.048, 'Testing'),
(88, '14.06.03', 2010, 341.12, 41648, 122.092, 'Training'),
(89, '14.06.03', 2011, 341.12, 43987, 128.949, 'Training'),
(90, '14.06.03', 2012, 341.12, 21719, 63.67, 'Training'),
(91, '14.06.03', 2013, 341.12, 46938, 137.6, 'Training'),
(92, '14.06.03', 2014, 341.12, 48717, 142.815, 'Training'),
(93, '14.06.03', 2015, 341.12, 50523, 148.109, 'Training'),
(94, '14.06.03', 2016, 341.12, 52345, 153.45, 'Training'),
(95, '14.06.03', 2017, 334.12, 54188, 162.181, 'Training'),
(96, '14.06.03', 2018, 343.51, 56041, 163.142, 'Training'),
(97, '14.06.03', 2019, 334.12, 57908, 173.315, 'Training'),
(98, '14.06.03', 2020, 343.23, 51047, 148.725, 'Testing'),
(99, '14.06.03', 2021, 343.23, 52043, 151.627, 'Testing'),
(100, '14.06.03', 2022, 343.51, 53239, 154.985, 'Testing'),
(101, '14.06.03', 2023, 343.23, 54444, 158.622, 'Testing'),
(102, '14.06.08', 2010, 260.85, 34594, 132.62, 'Training'),
(103, '14.06.08', 2011, 260.85, 36292, 139.13, 'Training'),
(104, '14.06.08', 2012, 260.85, 21720, 83.266, 'Training'),
(105, '14.06.08', 2013, 260.85, 38143, 146.226, 'Training'),
(106, '14.06.08', 2014, 260.85, 39288, 150.615, 'Training'),
(107, '14.06.08', 2015, 260.85, 40437, 155.02, 'Training'),
(108, '14.06.08', 2016, 260.85, 41578, 159.394, 'Training'),
(109, '14.06.08', 2017, 255.5, 42715, 167.182, 'Training'),
(111, '14.06.08', 2018, 279.4, 43843, 156.918, 'Training'),
(112, '14.06.08', 2019, 255.5, 44960, 175.969, 'Training'),
(113, '14.06.08', 2020, 279.16, 40444, 144.877, 'Testing'),
(114, '14.06.08', 2021, 279.16, 41041, 147.016, 'Testing'),
(115, '14.06.08', 2022, 279.16, 41790, 149.699, 'Testing'),
(116, '14.06.08', 2023, 279.16, 42536, 152.371, 'Testing'),
(117, '14.06.10', 2010, 159.49, 15701, 98.445, 'Training'),
(118, '14.06.10', 2011, 159.49, 16395, 102.796, 'Training'),
(119, '14.06.10', 2012, 159.49, 21721, 136.19, 'Training'),
(120, '14.06.10', 2013, 159.49, 17045, 106.872, 'Training'),
(121, '14.06.10', 2014, 159.49, 17462, 109.486, 'Training'),
(122, '14.06.10', 2015, 159.49, 17876, 112.082, 'Training'),
(123, '14.06.10', 2016, 159.49, 18282, 114.628, 'Training'),
(124, '14.06.10', 2017, 156.22, 18681, 119.581, 'Training'),
(125, '14.06.10', 2018, 150.27, 19070, 126.905, 'Training'),
(126, '14.06.10', 2019, 156.22, 19451, 124.51, 'Training'),
(127, '14.06.10', 2020, 150.15, 18889, 125.801, 'Testing'),
(128, '14.06.10', 2021, 150.15, 19220, 128.005, 'Testing'),
(129, '14.06.10', 2022, 150.15, 19623, 130.689, 'Testing'),
(131, '14.06.04', 2010, 678.19, 53451, 78.814, 'Training'),
(132, '14.06.04', 2011, 678.19, 56438, 83.219, 'Training'),
(133, '14.06.04', 2012, 678.19, 57964, 85.469, 'Training'),
(134, '14.06.04', 2013, 678.19, 60187, 88.747, 'Training'),
(135, '14.06.04', 2014, 678.19, 62449, 92.082, 'Training'),
(136, '14.06.04', 2015, 678.19, 64745, 95.467, 'Training'),
(137, '14.06.04', 2016, 678.19, 67060, 98.881, 'Training'),
(138, '14.06.04', 2017, 664.28, 69400, 104.474, 'Training'),
(139, '14.06.04', 2018, 677.9, 71752, 105.845, 'Training'),
(140, '14.06.04', 2019, 664.28, 74121, 111.581, 'Training'),
(141, '14.06.04', 2020, 775.16, 62017, 80.005, 'Testing'),
(142, '14.06.04', 2021, 775.16, 62892, 81.134, 'Testing'),
(144, '14.06.04', 2022, 775.16, 63997, 82.56, 'Testing'),
(145, '14.06.04', 2023, 775.16, 65098, 83.98, 'Testing'),
(146, '14.06.01', 2016, 79.48, 62427, 785.443, 'Training'),
(147, '14.06.10', 2023, 150.15, 20028, 133.387, 'Testing'),
(148, '14.06.09', 2010, 1.246, 74501, 59, 'Training'),
(149, '14.06.09', 2011, 1.246, 79410, 63, 'Training'),
(150, '14.06.09', 2012, 1.246, 82437, 66, 'Training'),
(151, '14.06.09', 2013, 1.246, 86519, 69, 'Training'),
(152, '14.06.09', 2014, 1.246, 90736, 72, 'Training'),
(153, '14.06.09', 2015, 1.246, 95083, 76, 'Training'),
(154, '14.06.09', 2016, 1.246, 99544, 79, 'Training'),
(155, '14.06.09', 2017, 1.22, 104125, 85, 'Training'),
(156, '14.06.09', 2018, 1.05, 108812, 103, 'Training'),
(157, '14.06.09', 2019, 1.22, 113613, 93, 'Training'),
(158, '14.06.09', 2020, 951.48, 85466, 89.824, 'Testing'),
(159, '14.06.09', 2021, 951.48, 86586, 91.001, 'Testing'),
(160, '14.06.09', 2022, 951.48, 88022, 92.511, 'Testing'),
(161, '14.06.09', 2023, 951.48, 89450, 94.011, 'Testing'),
(162, '14.06.05', 2010, 278.89, 20680, 74.151, 'Training'),
(163, '14.06.05', 2011, 278.89, 22090, 79.207, 'Training'),
(164, '14.06.05', 2012, 278.89, 22986, 82.42, 'Training'),
(165, '14.06.05', 2013, 278.89, 24183, 86.712, 'Training'),
(166, '14.06.05', 2014, 278.89, 25422, 91.154, 'Training'),
(167, '14.06.05', 2015, 278.89, 26705, 95.755, 'Training'),
(168, '14.06.05', 2016, 278.89, 28024, 100.484, 'Training'),
(169, '14.06.05', 2017, 273.17, 29385, 107.57, 'Training'),
(170, '14.06.05', 2018, 514.96, 30781, 59.774, 'Training'),
(171, '14.06.05', 2019, 273.17, 32217, 117.938, 'Training'),
(172, '14.06.05', 2020, 502.81, 26619, 52.94, 'Testing'),
(173, '14.06.05', 2021, 502.01, 27271, 54.324, 'Testing'),
(174, '14.06.05', 2022, 502.81, 28035, 55.757, 'Testing'),
(175, '14.06.05', 2023, 502.81, 28809, 57.296, 'Testing'),
(176, '14.06.15', 2010, 474.84, 15757, 33.184, 'Training'),
(177, '14.06.15', 2011, 474.84, 16595, 34.949, 'Training'),
(178, '14.06.15', 2012, 474.84, 16993, 35.787, 'Training'),
(179, '14.06.15', 2013, 474.84, 17591, 37.046, 'Training'),
(180, '14.06.15', 2014, 474.84, 18197, 38.322, 'Training'),
(181, '14.06.15', 2015, 474.84, 18810, 39.613, 'Training'),
(182, '14.06.15', 2016, 474.84, 19425, 40.909, 'Training'),
(183, '14.06.15', 2017, 465.1, 20042, 43.092, 'Training'),
(184, '14.06.15', 2018, 296.35, 20659, 69.711, 'Training'),
(185, '14.06.15', 2019, 465.1, 21277, 45.747, 'Training'),
(186, '14.06.15', 2020, 297.33, 18123, 60.952, 'Testing'),
(187, '14.06.15', 2021, 297.33, 18362, 61.756, 'Testing'),
(188, '14.06.15', 2022, 297.33, 18669, 62.789, 'Testing'),
(189, '14.06.15', 2023, 297.33, 18973, 63.811, 'Testing'),
(190, '14.06.06', 2010, 596.5, 39799, 66.721, 'Training'),
(191, '14.06.06', 2011, 596.5, 42741, 71.653, 'Training'),
(192, '14.06.06', 2012, 596.5, 44749, 75.019, 'Training'),
(193, '14.06.06', 2013, 596.5, 47365, 79.405, 'Training'),
(194, '14.06.06', 2014, 596.5, 50099, 83.988, 'Training'),
(195, '14.06.06', 2015, 596.5, 52948, 88.764, 'Training'),
(196, '14.06.06', 2016, 596.5, 55904, 0, NULL),
(197, '14.06.06', 2016, 584.27, 58976, 100.94, 'Training'),
(198, '14.06.06', 2018, 754.22, 62157, 82.412, 'Training'),
(199, '14.06.06', 2019, 584.27, 65453, 112.025, 'Training'),
(200, '14.06.06', 2020, 777.64, 44880, 57.713, 'Testing'),
(201, '14.06.06', 2021, 777.64, 45820, 58.922, 'Testing'),
(202, '14.06.06', 2022, 777.64, 46940, 60.362, 'Testing'),
(203, '14.06.06', 2023, 777.64, 48069, 61.814, 'Testing'),
(204, '14.06.14', 2010, 154.96, 14772, 95.328, 'Training'),
(205, '14.06.14', 2011, 154.96, 15462, 99.781, 'Training'),
(206, '14.06.14', 2012, 154.96, 15723, 101.465, 'Training'),
(207, '14.06.14', 2013, 154.96, 16166, 104.324, 'Training'),
(208, '14.06.14', 2014, 154.96, 16609, 107.182, 'Training'),
(209, '14.06.14', 2015, 154.96, 17049, 110.022, 'Training'),
(210, '14.06.14', 2016, 154.96, 17485, 112.836, 'Training'),
(211, '14.06.14', 2017, 151.78, 17917, 118.046, 'Training'),
(212, '14.06.14', 2018, 150.59, 18342, 121.801, 'Training'),
(213, '14.06.14', 2019, 151.78, 18760, 123.6, 'Training'),
(214, '14.06.14', 2020, 150.46, 11805, 78.459, 'Testing'),
(215, '14.06.14', 2021, 150.46, 11972, 79.569, 'Testing'),
(216, '14.06.14', 2022, 150.46, 12184, 80.978, 'Testing'),
(217, '14.06.14', 2023, 150.46, 12394, 82.374, 'Testing'),
(218, '14.06.13', 2010, 1.238, 19567, 15, 'Training'),
(219, '14.06.13', 2011, 1.238, 20670, 16, 'Training'),
(220, '14.06.13', 2012, 1.238, 21240, 17, 'Training'),
(221, '14.06.13', 2013, 1.238, 22065, 17, 'Training'),
(222, '14.06.13', 2014, 1.238, 22906, 18, 'Training'),
(223, '14.06.13', 2015, 1.238, 23760, 19, 'Training'),
(224, '14.06.13', 2016, 1.238, 24623, 19, 'Training'),
(225, '14.06.13', 2017, 1.213, 25495, 21, 'Training'),
(226, '14.06.13', 2018, 1.12, 26372, 23, 'Training'),
(227, '14.06.13', 2019, 1.213, 27255, 22, 'Training'),
(228, '14.06.13', 2020, 1.119, 26071, 23, 'Testing'),
(229, '14.06.13', 2021, 1.119, 26795, 23, 'Testing'),
(230, '14.06.13', 2022, 1.119, 27634, 24, 'Testing'),
(231, '14.06.13', 2023, 1.119, 28488, 25, 'Testing'),
(232, '14.06', 2010, 7.747, 478496, 61, 'Training'),
(233, '14.06', 2011, 7.747, 507079, 65, 'Training'),
(234, '14.06', 2012, 7.747, 523024, 67, 'Training'),
(235, '14.06', 2013, 7.747, 545483, 70, 'Training'),
(236, '14.06', 2014, 7.747, 568576, 73, 'Training'),
(237, '14.06', 2015, 7.747, 592278, 76, 'Training'),
(238, '14.06', 2016, 7.747, 616466, 79, 'Training'),
(239, '14.06', 2017, 7.588, 641208, 84, 'Training'),
(240, '14.06', 2018, 7.588, 666410, 87, 'Training'),
(241, '14.06', 2019, 7.588, 692120, 91, 'Training'),
(242, '14.06', 2020, 7.588, 561385, 73, 'Testing'),
(243, '14.06', 2021, 7.588, 570952, 75, 'Testing'),
(244, '14.06', 2022, 7.588, 582679, 76, 'Testing'),
(245, '14.06', 2023, 7.588, 594438, 78, 'Testing'),
(246, '14.06.06', 2017, 584.27, 58976, 100.94, 'Training');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
