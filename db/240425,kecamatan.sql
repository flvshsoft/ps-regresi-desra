-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2024 pada 06.22
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kode_kecamatan` varchar(20) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `y` varchar(10) DEFAULT NULL,
  `m` varchar(10) DEFAULT NULL,
  `b` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`kode_kecamatan`, `nama_kecamatan`, `y`, `m`, `b`) VALUES
('14.06', 'Rokan Hulu', NULL, NULL, NULL),
('14.06.01', 'Ujung Batu', NULL, NULL, NULL),
('14.06.02', 'Rokan IV Koto', NULL, NULL, NULL),
('14.06.03', 'Rambah', NULL, NULL, NULL),
('14.06.04', 'Tambusai', NULL, NULL, NULL),
('14.06.05', 'Kepenuhan', NULL, NULL, NULL),
('14.06.06', 'Kunto Darussalam', NULL, NULL, NULL),
('14.06.07', 'Rambah Samo', NULL, NULL, NULL),
('14.06.08', 'Rambah Hilir', NULL, NULL, NULL),
('14.06.09', 'Tambusai Utara', NULL, NULL, NULL),
('14.06.10', 'Bangun Purba', NULL, NULL, NULL),
('14.06.11', 'Tandun', NULL, NULL, NULL),
('14.06.12', 'Kabun', NULL, NULL, NULL),
('14.06.13', 'Bonai Darussalam', NULL, NULL, NULL),
('14.06.14', 'Pagaran Tapah Darussalam', NULL, NULL, NULL),
('14.06.15', 'Kepenuhan Hulu', NULL, NULL, NULL),
('14.06.16', 'Pendalian IV Koto', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kode_kecamatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
