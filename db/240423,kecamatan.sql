-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 05:41 AM
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
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kode_kecamatan` varchar(20) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kode_kecamatan`, `nama_kecamatan`) VALUES
('14.06', 'Rokan Hulu'),
('14.06.01', 'Ujung Batu'),
('14.06.02', 'Rokan IV Koto'),
('14.06.03', 'Rambah'),
('14.06.04', 'Tambusai'),
('14.06.05', 'Kepenuhan'),
('14.06.06', 'Kunto Darussalam'),
('14.06.07', 'Rambah Samo'),
('14.06.08', 'Rambah Hilir'),
('14.06.09', 'Tambusai Utara'),
('14.06.10', 'Bangun Purba'),
('14.06.11', 'Tandun'),
('14.06.12', 'Kabun'),
('14.06.13', 'Bonai Darussalam'),
('14.06.14', 'Pagaran Tapah Darussalam'),
('14.06.15', 'Kepenuhan Hulu'),
('14.06.16', 'Pendalian IV Koto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kode_kecamatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
