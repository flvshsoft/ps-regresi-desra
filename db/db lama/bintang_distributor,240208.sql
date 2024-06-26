-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 06:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bintang_distributor`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id_area` int(100) NOT NULL,
  `id_nama_area` varchar(255) NOT NULL,
  `nama_area` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id_area`, `id_nama_area`, `nama_area`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'SIAKDRP', 'SIAKDROP', '2023-12-13', '2023-12-13', '0000-00-00'),
(3, 'BLSDRP', 'BELILAS DROP', '2023-12-13', '2023-12-13', '0000-00-00'),
(4, 'TLK', 'TALUK KUANTAN', '2024-02-01', '2024-02-01', '0000-00-00'),
(5, 'DUMAI', 'DUMAI', '2024-02-01', '2024-02-01', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `id_asset` int(200) NOT NULL,
  `nama_asset` varchar(255) NOT NULL,
  `jenis_asset` varchar(255) NOT NULL,
  `tahun_pembelian` year(4) NOT NULL,
  `no_plat` varchar(245) NOT NULL,
  `no_mesin` varchar(255) NOT NULL,
  `no_rangka` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `tgl_berakhir_kir` date NOT NULL,
  `tgl_berakhir_pajak_stnk` date NOT NULL,
  `tgl_berakhir_plat` date NOT NULL,
  `pic` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id_asset`, `nama_asset`, `jenis_asset`, `tahun_pembelian`, `no_plat`, `no_mesin`, `no_rangka`, `satuan`, `tgl_berakhir_kir`, `tgl_berakhir_pajak_stnk`, `tgl_berakhir_plat`, `pic`, `lokasi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(50000000, 'COLT DIESEL FE 84 (ORANGE)	', 'Kendaraan', 2024, 'BM 8924 QUA', 'shdx', 'shdx', 'Unit', '2023-12-15', '2023-12-15', '2023-12-15', 'Aku', 'OFFICE', '2023-12-13 08:24:24', '2023-12-15 10:02:29', '0000-00-00 00:00:00'),
(50000001, 'FUSO FIGHTER X FN62L HD 6x4', 'Kendaraan', 2024, 'BM 4339 RHY	', '6m60', '6m60 T3', 'Unit', '2024-02-10', '2024-02-10', '2024-02-10', 'Aku', 'SALES', '2023-12-13 10:05:38', '2023-12-15 10:04:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(200) NOT NULL,
  `payment_code` varchar(255) DEFAULT NULL,
  `created_by` int(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `payment_code`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'BANK BRI', NULL, 0, '2024-01-02 07:40:14', '2024-01-02 07:41:23', '2024-01-02 07:41:23'),
(2, 'BRANKAS KAS KECIL DI HEAD OFFICE	', NULL, 34551, '2024-01-02 07:41:15', '2024-01-02 07:41:15', '0000-00-00 00:00:00'),
(3, 'KAS', '1', 34551, '2024-01-02 07:44:14', '2024-01-02 07:44:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(100) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `alamat_customer` varchar(255) NOT NULL,
  `no_hp_customer` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat_customer`, `no_hp_customer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(300000, 'DEKOR 1', '-', '0', '2023-12-28 07:53:05', '2023-12-28 07:53:05', '0000-00-00 00:00:00'),
(300001, 'SRIWANGI', '  -', '0', '2023-12-28 07:53:25', '2023-12-28 07:55:47', '0000-00-00 00:00:00'),
(300002, 'DENI', 'UB', '0', '2023-12-28 07:53:43', '2023-12-28 07:53:43', '0000-00-00 00:00:00'),
(300003, 'YAHYA JAYA', 'KOTA GARO', '0', '2023-12-28 07:54:54', '2023-12-28 07:54:54', '0000-00-00 00:00:00'),
(300004, 'SEDERHANA', 'UJG BATU', '0', '2023-12-28 07:55:10', '2023-12-28 07:55:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `remark_cuti` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `remark_cuti`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CUTI PERNIKAHAN', 'System', '2024-01-03 07:03:47', '2024-01-03 07:03:47', '0000-00-00 00:00:00'),
(2, 'CUTI HAJI', 'System', '2024-01-03 07:05:02', '2024-01-03 07:05:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id_izin` int(11) NOT NULL,
  `remark_izin` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `izin`
--

INSERT INTO `izin` (`id_izin`, `remark_izin`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IZIN KELUARGA SAKIT', 'System', '2024-01-03 07:12:14', 2024, 0),
(2, 'IZIN TELAT', 'System', '2024-01-03 07:12:25', 2024, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_harga`
--

CREATE TABLE `jenis_harga` (
  `id_jenis_harga` int(11) NOT NULL,
  `remark_jenis_harga` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_harga`
--

INSERT INTO `jenis_harga` (`id_jenis_harga`, `remark_jenis_harga`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Extra', 34551, '2024-01-08 05:14:08', '2024-01-08 05:14:08', '0000-00-00 00:00:00'),
(2, 'Grosir', 34551, '2024-01-08 05:15:49', '2024-01-08 05:15:49', '0000-00-00 00:00:00'),
(3, 'Grosir (Extra)', 34551, '2024-01-08 05:16:12', '2024-01-08 05:16:12', '0000-00-00 00:00:00'),
(4, 'Kanvas', 34551, '2024-01-08 05:16:50', '2024-01-08 05:16:50', '0000-00-00 00:00:00'),
(5, 'Khusus', 34551, '2024-01-08 05:16:56', '2024-01-08 05:16:56', '0000-00-00 00:00:00'),
(6, 'Semi Grosir', 34551, '2024-02-01 04:47:46', '2024-02-01 04:47:46', '0000-00-00 00:00:00'),
(7, 'Semi (Extra)', 34551, '2024-02-01 04:48:34', '2024-02-01 04:48:34', '0000-00-00 00:00:00'),
(8, 'Pareto (Extra)', 34551, '2024-02-01 04:48:45', '2024-02-01 04:48:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `maps` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `maps`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'KANTOR BRM PKU', 'No49', 34551, '2024-01-02 08:13:53', '2024-01-02 08:13:53', '0000-00-00 00:00:00'),
(2, 'BRM Pekanbaru', 'CCX8+5FF', 34551, '2024-01-02 08:14:25', '2024-01-02 08:14:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `no_nota` varchar(200) NOT NULL,
  `id_sales` int(11) NOT NULL,
  `id_partner` int(11) NOT NULL,
  `weeks` int(2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_beli` varchar(255) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `pay` int(120) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `no_nota`, `id_sales`, `id_partner`, `weeks`, `payment_method`, `total_beli`, `id_customer`, `id_area`, `id_bank`, `tgl_bayar`, `pay`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(180000000, '', 3, 4000001, 1, 'KREDIT', '9835800', 300000, 3, 3, '2024-01-10', 2200000, 34551, '2024-01-10 06:58:20', '2024-01-10 06:58:20', '0000-00-00 00:00:00'),
(180000002, '', 3, 4000001, 1, 'KREDIT', '308800', 300000, 3, 3, '2024-01-10', 3200000, 34551, '2024-01-10 06:58:20', '2024-01-22 07:49:45', '0000-00-00 00:00:00'),
(180000003, '', 160000000, 4000001, 1, 'CASH', '110800', 300003, 2, 3, '2024-01-22', 110800, 34551, '2024-01-22 07:40:34', '2024-01-25 10:16:26', '0000-00-00 00:00:00'),
(180000004, '', 160000000, 4000001, 2, 'CASH', '0', 300004, 2, 3, '2024-01-26', NULL, 34551, '2024-01-26 13:52:11', '2024-01-26 13:54:06', '0000-00-00 00:00:00'),
(180000007, '2034', 5, 4000001, 0, 'KREDIT', '', 300000, 2, 3, '2024-02-02', NULL, 34551, '2024-02-02 10:21:19', '2024-02-02 10:21:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nota_detail`
--

CREATE TABLE `nota_detail` (
  `id_nota_detail` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_sales_detail` int(111) NOT NULL,
  `id_jenis_harga` int(11) NOT NULL,
  `satuan_penjualan` int(12) NOT NULL,
  `diskon_penjualan` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota_detail`
--

INSERT INTO `nota_detail` (`id_nota_detail`, `id_nota`, `id_product`, `id_sales_detail`, `id_jenis_harga`, `satuan_penjualan`, `diskon_penjualan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3000, 180000002, 0, 3, 0, 12, 0, '2024-01-11 06:03:31', '2024-01-11 06:03:31', '0000-00-00 00:00:00'),
(3002, 180000000, 0, 3, 0, 12, 1000, '2024-01-11 06:05:28', '2024-01-11 06:05:28', '0000-00-00 00:00:00'),
(3003, 180000000, 0, 5, 0, 12, 1000, '2024-01-11 06:05:28', '2024-01-11 06:05:28', '0000-00-00 00:00:00'),
(3004, 180000000, 0, 5, 0, 12, 1000, '2024-01-15 05:59:57', '2024-01-15 05:59:57', '0000-00-00 00:00:00'),
(3005, 180000000, 0, 3, 0, 10, 1000, '2024-01-22 07:33:33', '2024-01-22 07:33:33', '0000-00-00 00:00:00'),
(3006, 180000002, 0, 3, 0, 10, 20000, '2024-01-22 07:48:11', '2024-01-22 07:48:11', '0000-00-00 00:00:00'),
(3007, 180000002, 0, 3, 0, 10, 20000, '2024-01-22 07:49:44', '2024-01-22 07:49:44', '0000-00-00 00:00:00'),
(3008, 180000003, 0, 6, 0, 12, 20000, '2024-01-25 07:14:30', '2024-01-25 07:14:30', '0000-00-00 00:00:00'),
(3009, 180000004, 0, 8, 0, 8, 0, '2024-01-26 13:54:06', '2024-01-26 13:54:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(200) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_hp` varchar(17) NOT NULL,
  `alamat` text NOT NULL,
  `set_karyawan` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL,
  `nik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id_partner`, `nama_lengkap`, `no_hp`, `alamat`, `set_karyawan`, `created_at`, `updated_at`, `deleted_at`, `nik`) VALUES
(4000001, 'Maulana', ' 082390501251', '   PKU, Rumbe', 'Aku', '2023-12-13', '2023-12-15', '0000-00-00', '14711217'),
(4000002, 'Okta', '08969074921', '-', 'Aku', '2024-02-01', '2024-02-01', '0000-00-00', '1471189'),
(4000003, 'Hidayat', '081381152120', '-', 'Aku', '2024-02-01', '2024-02-01', '0000-00-00', '147118980'),
(4000004, 'Firman', '081234', '-', 'Aku', '2024-02-01', '2024-02-01', '0000-00-00', '14711'),
(4000005, 'Bobby', '081234', '-', 'Aku', '2024-02-01', '2024-02-01', '0000-00-00', '14711');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id_price` int(11) NOT NULL,
  `keterangan_price` varchar(225) NOT NULL,
  `tanggal_aktif` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id_price`, `keterangan_price`, `tanggal_aktif`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(500000000, 'Update Harga M BOLD', '2024-01-09 04:27:09', 34551, '2024-01-08 06:12:18', '2024-01-09 04:27:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `price_detail`
--

CREATE TABLE `price_detail` (
  `id_price_detail` int(11) NOT NULL,
  `id_price` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_jenis_harga` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price_detail`
--

INSERT INTO `price_detail` (`id_price_detail`, `id_price`, `id_product`, `id_jenis_harga`, `harga`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 500000000, 0, 5, '11150', '2024-01-08 07:48:19', '2024-01-08 07:48:19', '0000-00-00 00:00:00'),
(2, 500000000, 10000000, 2, '10900', '2024-01-08 07:49:49', '2024-01-09 04:26:50', '0000-00-00 00:00:00'),
(3, 500000000, 10000000, 5, '11100', '2024-01-08 07:55:16', '2024-01-09 04:26:14', '0000-00-00 00:00:00'),
(4, 500000000, 10000002, 3, '40000', '2024-01-09 04:30:39', '2024-01-09 04:30:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `satuan_product` varchar(100) NOT NULL,
  `stock_product` varchar(12) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `satuan_product`, `stock_product`, `id_supplier`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10000000, 'M. BOLD', 'Bungkus', '14000', 213000000, '2023-12-18', '2023-12-18', '0000-00-00'),
(10000001, 'M. BLUE', 'Bungkus', '158976', 213000000, '2023-12-18', '2023-12-18', '0000-00-00'),
(10000002, 'BLUWISS', 'Bungkus', '1200', 213000000, '2023-12-27', '2023-12-27', '0000-00-00'),
(10000003, 'HIMA', 'Bungkus', '110000', 213000001, '2023-12-27', '2023-12-27', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(200) NOT NULL,
  `id_partner` int(200) NOT NULL,
  `id_asset` int(200) NOT NULL,
  `id_area` int(200) NOT NULL,
  `km` int(200) NOT NULL,
  `week` varchar(2) NOT NULL,
  `tgl_do` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id_sales`, `id_partner`, `id_asset`, `id_area`, `km`, `week`, `tgl_do`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 4000001, 50000001, 3, 590000, '10', '2023-12-19 15:31:00', 'Ntah lha ya', '2023-12-19 07:34:23', '2023-12-19 07:36:41', '0000-00-00 00:00:00'),
(5, 4000001, 50000001, 2, 2000, '18', '2023-12-26 14:44:00', 'Penjuala', '2023-12-26 07:44:18', '2023-12-26 07:44:18', '0000-00-00 00:00:00'),
(6, 4000001, 50000001, 2, 580000, '30', '2023-12-27 16:26:00', 'Jual', '2023-12-27 09:26:46', '2024-01-26 11:01:33', '0000-00-00 00:00:00'),
(160000000, 4000001, 50000000, 2, 20000, '50', '2023-12-28 13:42:00', '03259', '2023-12-28 06:37:01', '2024-01-26 09:48:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sales_detail`
--

CREATE TABLE `sales_detail` (
  `id_sales_detail` int(111) NOT NULL,
  `id_sales` int(111) NOT NULL,
  `id_product` int(111) NOT NULL,
  `id_price_detail` int(133) NOT NULL,
  `satuan_sales_detail` int(111) NOT NULL,
  `jumlah_sales` int(123) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_detail`
--

INSERT INTO `sales_detail` (`id_sales_detail`, `id_sales`, `id_product`, `id_price_detail`, `satuan_sales_detail`, `jumlah_sales`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 3, 10000000, 2, 20, 0, '2023-12-26 07:43:41', '2023-12-26 07:43:41', '0000-00-00 00:00:00'),
(4, 6, 10000001, 3, 619, 0, '2023-12-27 09:59:48', '2023-12-27 09:59:48', '0000-00-00 00:00:00'),
(5, 3, 10000001, 4, 24, 0, '2024-01-08 07:12:07', '2024-01-08 07:12:07', '0000-00-00 00:00:00'),
(7, 160000000, 0, 3, 11, 0, '2024-01-25 06:30:30', '2024-01-25 06:30:30', '0000-00-00 00:00:00'),
(8, 160000000, 0, 4, 19, 0, '2024-01-26 11:04:18', '2024-01-26 11:13:08', '0000-00-00 00:00:00'),
(9, 160000000, 10000001, 0, 10, 0, '2024-02-06 07:35:07', '2024-02-06 07:35:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `id_product` int(100) NOT NULL,
  `jumlah_stock` varchar(123) NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id_stock`, `id_product`, `jumlah_stock`, `tanggal_masuk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10000002, '1200', '2027-12-23 08:17:35', '2023-12-27 08:17:35', '2023-12-27 08:17:35', '0000-00-00 00:00:00'),
(4, 10000000, '2000', '2027-12-23 08:28:29', '2023-12-27 08:28:29', '2023-12-27 08:28:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `no_hp_supplier` varchar(18) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_hp_supplier`, `alamat_supplier`, `created_at`, `updated_at`, `deleted_at`) VALUES
(213000000, 'MD PKU', '0821', '  PKU', '2023-12-18', '2023-12-18', '0000-00-00'),
(213000001, 'BR JAMBI', '0', 'JAMBI', '2023-12-18', '2023-12-18', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `password_hash`, `level_user`, `status_user`, `tanggal_akses`, `created_at`, `updated_at`, `deleted_at`, `gambar`) VALUES
(34544, 'coba123', 'coba12345', '$2y$10$Fm2jHOuNCINmlFaC7F.9KeKH8xzvuYwswi/JHgJ1zkZ7.cXpI.FmG', 'SPV', 1, NULL, '2022-09-06 22:18:58', '2022-09-28 03:07:05', '0000-00-00 00:00:00', '1664350570WhatsApp Image 2022-08-19 at 01.05.49 (2).jpeg'),
(34550, 'gudang', 'ALDO', '$2y$10$Fm2jHOuNCINmlFaC7F.9KeKH8xzvuYwswi/JHgJ1zkZ7.cXpI.FmG', 'Gudang', 1, NULL, '2022-09-06 22:18:58', '2022-09-28 03:07:05', '0000-00-00 00:00:00', '1664350570WhatsApp Image 2022-08-19 at 01.05.49 (2).jpeg'),
(34551, 'kaskecil', 'Mukmin', '$2y$10$Fm2jHOuNCINmlFaC7F.9KeKH8xzvuYwswi/JHgJ1zkZ7.cXpI.FmG', 'Kas Kecil', 1, NULL, '2022-09-06 22:18:58', '2022-09-28 03:07:05', '0000-00-00 00:00:00', '1664350570WhatsApp Image 2022-08-19 at 01.05.49 (2).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id_asset`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `jenis_harga`
--
ALTER TABLE `jenis_harga`
  ADD PRIMARY KEY (`id_jenis_harga`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `nota_detail`
--
ALTER TABLE `nota_detail`
  ADD PRIMARY KEY (`id_nota_detail`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id_price`);

--
-- Indexes for table `price_detail`
--
ALTER TABLE `price_detail`
  ADD PRIMARY KEY (`id_price_detail`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indexes for table `sales_detail`
--
ALTER TABLE `sales_detail`
  ADD PRIMARY KEY (`id_sales_detail`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `id_asset` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50000002;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300007;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_harga`
--
ALTER TABLE `jenis_harga`
  MODIFY `id_jenis_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180000008;

--
-- AUTO_INCREMENT for table `nota_detail`
--
ALTER TABLE `nota_detail`
  MODIFY `id_nota_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3010;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4000006;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id_price` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500000001;

--
-- AUTO_INCREMENT for table `price_detail`
--
ALTER TABLE `price_detail`
  MODIFY `id_price_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000004;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160000002;

--
-- AUTO_INCREMENT for table `sales_detail`
--
ALTER TABLE `sales_detail`
  MODIFY `id_sales_detail` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213000002;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34552;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
