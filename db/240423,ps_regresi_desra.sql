-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2024 pada 05.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `data_penduduk`
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
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`id_penduduk`, `kode_kecamatan`, `tahun`, `luas_wilayah`, `jumlah_penduduk`, `kepadatan_penduduk`, `bagi_data`) VALUES
(1, '123', 2011, 952.32, 20406, 21.428, 'Training'),
(2, '123', 2010, 952.32, 20406, 21.428, 'Training'),
(3, '123', 2012, 952.32, 20406, 21.428, 'Training'),
(4, '123', 2013, 952.32, 20406, 21.428, 'Training'),
(5, '123', 2014, 952.32, 20406, 21.428, 'Training'),
(6, '123', 2015, 952.32, 20406, 21.428, 'Training'),
(7, '123', 2016, 952.32, 20406, 21.428, 'Training'),
(8, '123', 2017, 952.32, 20406, 21.428, 'Training'),
(9, '123', 2020, 952.32, 20406, 21.428, 'Training'),
(10, '123', 2021, 952.32, 20406, 21.428, 'Training'),
(11, '123', 2022, 952.32, 20406, 21.428, 'Testing'),
(12, '123', 2023, 952.32, 20406, 21.428, 'Testing'),
(13, '124', 2010, 952.32, 20406, 21.428, 'Training');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kode_kecamatan` varchar(20) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kecamatan`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `password_hash` varchar(191) NOT NULL,
  `level_user` varchar(20) NOT NULL,
  `status_user` tinyint(1) NOT NULL,
  `tanggal_akses` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `password_hash`, `level_user`, `status_user`, `tanggal_akses`, `created_at`, `updated_at`, `deleted_at`, `gambar`) VALUES
(34544, 'coba123', 'coba12345', '$2y$10$Fm2jHOuNCINmlFaC7F.9KeKH8xzvuYwswi/JHgJ1zkZ7.cXpI.FmG', 'SPV', 1, NULL, '2022-09-06 22:18:58', '2022-09-28 03:07:05', '0000-00-00 00:00:00', '1664350570WhatsApp Image 2022-08-19 at 01.05.49 (2).jpeg'),
(34550, 'gudang', 'ALDO', '$2y$10$Fm2jHOuNCINmlFaC7F.9KeKH8xzvuYwswi/JHgJ1zkZ7.cXpI.FmG', 'Gudang', 1, NULL, '2022-09-06 22:18:58', '2022-09-28 03:07:05', '0000-00-00 00:00:00', '1664350570WhatsApp Image 2022-08-19 at 01.05.49 (2).jpeg'),
(34551, 'kaskecil', 'Mukmin', '$2y$10$Fm2jHOuNCINmlFaC7F.9KeKH8xzvuYwswi/JHgJ1zkZ7.cXpI.FmG', 'Kas Kecil', 1, NULL, '2022-09-06 22:18:58', '2022-09-28 03:07:05', '0000-00-00 00:00:00', '1664350570WhatsApp Image 2022-08-19 at 01.05.49 (2).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kode_kecamatan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34552;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
