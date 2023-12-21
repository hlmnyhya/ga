-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2023 at 03:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ga`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbm`
--

CREATE TABLE `bbm` (
  `id_bbm` int NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Jenis_bbm` enum('Dexlite','Pertamina Dex','Pertamax','Pertalite') COLLATE utf8mb4_general_ci NOT NULL,
  `harga_bbm` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_harga_bbm` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `no_lambung` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bbm`
--

INSERT INTO `bbm` (`id_bbm`, `tanggal`, `nama`, `keterangan`, `Jenis_bbm`, `harga_bbm`, `jumlah_harga_bbm`, `no_lambung`) VALUES
(6, '0000-00-00', 'Maida', 'g', 'Pertamina Dex', 'Rp.14.000', 'Rp.28.000', 'OOWLI 02-001'),
(7, '2023-11-09', 'Anisa', 'g', 'Pertamina Dex', 'Rp.14.000', 'Rp.28.000', 'OOWLI 02-004'),
(8, '2023-11-08', 'Ica', 'g', 'Pertalite', 'Rp.14.000', 'Rp.28.000', 'OOWLI 02-003');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id_inventory` int NOT NULL,
  `nama_peminjam` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi/departement` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi/cabang` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_barang` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `qty` int NOT NULL,
  `kondisi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `paraf` blob NOT NULL,
  `keterangan` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status` enum('Dipinjam','Dikembalikan') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id_inventory`, `nama_peminjam`, `divisi/departement`, `lokasi/cabang`, `nama_barang`, `qty`, `kondisi`, `paraf`, `keterangan`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status`) VALUES
(18, 'g', 'djw', 's', 'ss', 5, 'g', '', 'f', '2023-11-28', '2024-04-23', 'Dikembalikan'),
(19, 'g', 'djw', 's', 'ss', 5, 'g', '', 'f', '2023-11-22', '2023-11-15', 'Dikembalikan'),
(20, 'g', 'djw', 's', 'ss', 5, 'g', '', 'e', '2024-01-05', '2023-12-30', 'Dikembalikan'),
(21, 'e', 'e', '', 'buku', 0, '', 0x65, 'e', '2023-11-29', '0000-00-00', ''),
(22, 'v', 'v', '', 'v', 0, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(23, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(24, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(25, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(26, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(27, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(28, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(29, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(30, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(31, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(32, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(33, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(34, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(35, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(36, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(37, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(38, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(39, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(40, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(41, 'v', 'v', '', 'v', 5, '', 0x76, 'v', '2023-12-05', '0000-00-00', ''),
(42, 'D', 'D', '', 'S', 5, '', 0x44, 'D', '2023-12-12', '0000-00-00', ''),
(43, 'a', 'a', '', 'a', 0, '', 0x61, 'a', '2023-12-18', '0000-00-00', ''),
(44, 'qwe', 'qwe', '', 'a', 132, '', 0x717765, 'tes', '2023-12-19', '0000-00-00', ''),
(45, 'qwe', 'qwe', '', 'a', 132, '', 0x717765, 'tes', '2023-12-19', '0000-00-00', ''),
(46, 'qwe', 'qwe', '', 'a', 132, '', 0x717765, 'tes', '2023-12-19', '0000-00-00', ''),
(47, 'qwe', 'qwe', '', 'a', 132, '', 0x717765, 'tes', '2023-12-19', '0000-00-00', ''),
(48, 'qwe', 'qwe', '', 'qwerty', 132, '', 0x717765, 'tes', '2023-12-19', '0000-00-00', ''),
(49, '7e892866db962024da18c9e03f54bb86.png', 'ARC', '', 'BOLTJOIN BOX', 44, '', 0x63613465363532646563633436356530323838616539663865653033613131392e706e67, 'qerwr\r\nerqwreuti\r\noiyoio', '2023-12-21', '0000-00-00', ''),
(50, '5dfbd5c24ef96078eddd8227264ba164.png', 'ANALYST', '', 'BOLTJOIN BOX', 44, '', 0x66626666626166326538366431326432356630646565656134663564333530332e706e67, 'qwertyuiop\r\nasdfghjkl;\r\nxzcvxcbnvmb', '2023-12-21', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `loogbok`
--

CREATE TABLE `loogbok` (
  `id_loogbok` int NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_mulai` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_selesai` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `nopol` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `km_awal` int NOT NULL,
  `km_akhir` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loogbok`
--

INSERT INTO `loogbok` (`id_loogbok`, `tanggal`, `nama`, `waktu_mulai`, `waktu_selesai`, `tujuan`, `nopol`, `km_awal`, `km_akhir`) VALUES
(2, '2023-11-07', 'Ica', '123', 's', '-', 'DA 8559 XP', 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `lpb`
--

CREATE TABLE `lpb` (
  `id_lpb` int NOT NULL,
  `tanggal_terima` date NOT NULL,
  `penyerah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi/departement_penyerah` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `penerima` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi/departement_penerima` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int NOT NULL,
  `keterangan` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `ttd_penyerah` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ttd_penerima` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_usulan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_barang` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lpb`
--

INSERT INTO `lpb` (`id_lpb`, `tanggal_terima`, `penyerah`, `divisi/departement_penyerah`, `penerima`, `divisi/departement_penerima`, `jumlah`, `keterangan`, `ttd_penyerah`, `ttd_penerima`, `data_usulan`, `kode_barang`) VALUES
(1, '2023-12-21', 'Agus Nurmansyah', 'ANALYST', 'Agus Nurmansyah', 'BRANCH MANAGER', 44, 'qwertyuiop\r\nasdfghjkl;\r\nxzcvxcbnvmb', '5dfbd5c24ef96078eddd8227264ba164.png', 'fbffbaf2e86d12d25f0deeea4f5d3503.png', '1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `id_barang` int NOT NULL,
  `kode_barang` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_barang` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `satuan` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `qty` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id_barang`, `kode_barang`, `nama_barang`, `jenis_barang`, `satuan`, `kategori`, `qty`) VALUES
(1, 'ATK-01', 'KERTAS A4 SIDU 80G', 'ATK', 'RIM', 'NON ASSET', 46),
(2, 'ATK-02', 'KERTAS A4 SIDU 70G', 'ATK', 'RIM', 'NON ASSET', 5),
(3, 'ATK-03', 'PULPEN SNOWMAN V-1 0.7', 'ATK', 'PCS', 'NON ASSET', 0),
(4, 'ATK-04', 'PULPEN SNOWMAN V-3 0.5', 'ATK', 'PCS', 'NON ASSET', 0),
(5, 'ATK-05', 'BUKU AKUTANSI BESAR', 'ATK', 'PCS', 'NON ASSET', 0),
(6, 'ATK-06\r\n', 'BUKU AKUTANSI KECIL', 'ATK', 'PCS', 'NON ASSET', 0),
(7, 'ATK-07', 'MAP BLANKO', 'ATK', 'PCS', 'NON ASSET', 0),
(8, 'ATK-08', 'ORDNER', 'ATK', 'PCS', 'NON ASSET', 0),
(9, 'ATK-09', 'MATERAI 10.000', 'ATK', 'PCS', 'NON ASSET', 0),
(10, 'ATK-010', 'KETAS STIKER A4 CAMEL', 'ATK', 'PCS', 'NON ASSET', 0),
(11, 'ATK-011', 'TINTA EPSON L120 HITAM', 'ATK', 'PCS', 'NON ASSET', 0),
(12, 'ATK-012', 'TINTA EPSON L120 BIRU', 'ATK', 'PCS', 'NON ASSET', 0),
(13, 'ATK-013', 'TINTA EPSON L120 KUNING', 'ATK', 'PCS', 'NON ASSET', 0),
(14, 'ATK-014', 'TINTA EPSON L120 MERAH', 'ATK', 'PCS', 'NON ASSET', 0),
(15, 'ATK-015', 'TINTA EPSON L3110 HITAM', 'ATK', 'PCS', 'NON ASSET', 0),
(16, 'ATK-016', 'TINTA EPSON L3110 BIRU', 'ATK', 'PCS', 'NON ASSET', 0),
(17, 'ATK-017', 'TINTA EPSON L3110 KUNING', 'ATK', 'PCS', 'NON ASSET', 0),
(18, 'ATK-018', 'TINTA EPSON L3110 MERAH', 'ATK', 'PCS', 'NON ASSET', 0),
(19, 'ATK-019', 'TINTA HP 119 A HITAM', 'ATK', 'PCS', 'NON ASSET', 0),
(20, 'ATK-020', 'TINTA HP 119 A BIRU', 'ATK', 'PCS', 'NON ASSET', 0),
(21, 'ATK-021', 'TINTA HP 119 A KUNING', 'ATK', 'PCS', 'NON ASSET', 0),
(22, 'ATK-022', 'TINTA HP 119 A MERAH', 'ATK', 'PCS', 'NON ASSET', 0),
(23, 'ATK-023', 'TINTA HP 416 A HITAM', 'ATK', 'PCS', 'NON ASSET', 0),
(24, 'ATK-024', 'TINTA HP 416 A BIRU', 'ATK', 'PCS', 'NON ASSET', 0),
(25, 'ATK-025', 'TINTA HP 416 A KUNING', 'ATK', 'PCS', 'NON ASSET', 0),
(26, 'ATK-026', 'TINTA HP 416 A MERAH', 'ATK', 'PCS', 'NON ASSET', 0),
(27, 'ATK-027', 'ISI ULANG STAPLES', 'ATK', 'PCS', 'NON ASSET', 0),
(28, 'ATK-028', 'MAP DIAMOND POCKET BIRU', 'ATK', 'PCS', 'NON ASSET', 0),
(29, 'ATK-029', 'MAP DIAMOND POCKET MERAH', 'ATK', 'PCS', 'NON ASSET', 0),
(30, 'LABORATORIUM-01', 'GAS O2', 'LABORATORIUM', 'LITER', 'NON ASSET', 0),
(31, 'LABORATORIUM-02', 'GAS O2 HP', 'LABORATORIUM', 'LITER', 'NON ASSET', 0),
(32, 'LABORATORIUM-03', 'GAS ARGON', 'LABORATORIUM', 'LITER', 'NON ASSET', 0),
(33, 'LABORATORIUM-04', 'GAS NITROGEN', 'LABORATORIUM', 'LITER', 'NON ASSET', 0),
(34, 'LABORATORIUM-05', 'AQUADEST', 'LABORATORIUM', 'LITER', 'NON ASSET', 0),
(35, 'LABORATORIUM-06', 'BOTOL SAMPEL 250ML', 'LABORATORIUM', 'LITER', 'NON ASSET', 0),
(36, 'PREPARASI-01', 'PLASTIK SAMPEL 50*30', 'PREPARASI', 'PCS', 'NON ASSET', 0),
(37, 'LAPANGAN-01', 'PLASTIK SAMPEL 70*50', 'LAPANGAN', 'PCS', 'NON ASSET', 0),
(38, 'LAPANGAN-02', 'LAKBAN WARNA', 'LAPANGAN', 'PCS', 'NON ASSET', 0),
(39, 'LAPANGAN-03', 'KARUNG 45*75', 'LAPANGAN', 'PCS', 'NON ASSET', 0),
(40, 'LAPANGAN-04', 'SPIDOL SNOWMAN PERMANEN', 'LAPANGAN', 'PCS', 'NON ASSET', 0),
(41, 'PANTRY-01', 'KANEBO', 'PANTRY', 'PCS', 'NON ASSET', 0),
(42, 'PAKAIAN-01', 'KEMEJA XXL', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(43, 'PAKAIAN-02', 'KEMEJA XL', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(44, 'PAKAIAN-03', 'KEMEJA L', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(45, 'PAKAIAN-04', 'KEMEJA M', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(46, 'PAKAIAN-05', 'KEMEJA S', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(47, 'PAKAIAN-06', 'KAOS XXL', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(48, 'PAKAIAN-07', 'KAOS XL', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(49, 'PAKAIAN-08', 'KAOS L', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(50, 'PAKAIAN-09', 'KAOS M', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(51, 'PAKAIAN-010', 'KAOS S', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(52, 'PAKAIAN-011', 'SARUNG TANGAN ANTI SELIP', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(53, 'PAKAIAN-012', 'KACAMATA SAVETY', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(54, 'PAKAIAN-013', 'SEPATU UK 6', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(55, 'PAKAIAN-014', 'SEPATU UK 7', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(56, 'PAKAIAN-015', 'SEPATU UK 8', 'PAKAIAN', 'PCS', 'NON ASSET', 0),
(57, 'PAKAIAN-016', 'SEPATU UK 9', 'PAKAIAN', 'PCS', 'NON ASSET', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_cabang`
--

CREATE TABLE `master_cabang` (
  `id_cabang` int NOT NULL,
  `nama_cabang` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_Cabang` int NOT NULL,
  `alamat_cabang` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_karyawan`
--

CREATE TABLE `master_karyawan` (
  `id_karyawan` int NOT NULL,
  `no_karyawan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_karyawan`
--

INSERT INTO `master_karyawan` (`id_karyawan`, `no_karyawan`, `nama`, `jabatan`, `email`, `divisi`) VALUES
(1, 'OI.0820.01.01', 'Muhammad Juni Eka Wardana', 'EXECUTIVE MANAGER ', 'junieka.orion@oowl-indonesia.com', 'EXECUTIVE MANAGER'),
(2, 'OI.0820.01.02', 'Sigit Ari Sulaksono', 'BRANCH MANAGER', 'sigit.ari@oowl-indonesia.com', 'BRANCH MANAGER'),
(3, 'OI.0820.01.03', 'Obaja Hasiholan Octoricharge S.', 'ADMIN GENERAL AFFAIR', 'baja.orion@oowl-indonesia.com', 'GENERAL AFFAIR'),
(4, 'OI.0820.01.04', 'Fauzan Rifaldie', 'SPV GENERAL AFFAIR', 'fauzan.orion@oowl-indonesia.com', 'GENERAL AFFAIR'),
(5, 'OI.1020.01.05', 'Ahmad Hibatullah Rusnadi', 'ADMIN OPERATIONS', 'adi.rusnadi@oowl-indonesia.com', 'OPERATIONS'),
(6, 'OI.0820.01.06', 'Yanto Ha Luy', 'HEAD MARKETING', '', 'MARKETING'),
(7, 'OI.0820.01.07', 'Muhammad Devi Surianto', 'MARKETING', 'devi.surianto@oowl-indonesia.com', 'MARKETING'),
(8, 'OI.0221.01.08', 'Yuliansyah', 'SPV ANALYST', 'yuliansyah.orion@oowl-indonesia.com', 'ANALYST'),
(9, 'OI.1220.01.09', 'Reza Nanda Pratama', 'SAMPLER', 'reza.nanda@oowl-indonesia.com', 'SAMPLER'),
(10, 'OI.0820.01.10', 'Nur Ifansyah', 'SPV PREPARATION & SAMPLER', 'nur.ifansyah@oowl-indonesia.com', 'SPV PREPARATION & SAMPLER'),
(11, 'OI.0121.01.11', 'Mahmud Al Faqih', 'SAMPLER', 'mahmud.alfaqih@oowl-indonesia.com', 'SAMPLER'),
(12, 'OI.0121.01.12', 'Muhammad Leo Agustian', 'SAMPLER', 'leo.agustian@oowl-indonesia.com', 'SAMPLER'),
(13, 'OI.1220.01.13', 'Ahmad Sayuti', 'SURVEYOR', 'ahmad.sayuti@oowl-indonesia.com', 'SURVEYOR'),
(14, 'OI.0121.01.14', 'Taufik Rakhman', 'SPV OPERATIONS', 'taufik.rakhman@oowl-indonesia.com', 'OPERATIONS'),
(15, 'OI.0522.01.15', 'Febryandeny Wirawan', 'SPV MARKETING', 'febry.wirawan@oowl-indonesia.com', 'MARKETING'),
(16, 'OI.0221.01.16', 'Dodi Susanto Raharjo', 'SAMPLER', 'dodi.susanto@oowl-indonesia.com', 'SAMPLER'),
(17, 'OI.0221.01.17', 'Muhammad Jayadi', 'SAMPLER', 'mhmd.jaya@oowl-indonesia.com', 'SAMPLER'),
(18, 'OI.0221.01.18', 'Hari Fitra', 'QUALITY MANAGER', 'harifitrakimia07@gmail.com', 'QUALITY MANAGER'),
(19, 'OI.0221.01.19', 'Jainul Abidin', 'SECURITY', 'jainulabidin298@gmail.com', 'SECURITY'),
(20, 'OI.0321.01.20', 'Devi Adlina Mazaya', 'ARC', 'deviadlina68@gmail.com', 'ARC'),
(21, 'OI.0521.01.21', 'Wahyu Imanda', 'SAMPLER', 'wahyu.imanda@oowl-indonesia.com', 'SAMPLER'),
(22, 'OI.0521.01.22', 'Yuni Safetri', 'DRIVER', 'ifitraziq@gmail.com', 'DRIVER'),
(23, 'OI.0621.01.23', 'Muhammad Syarif Fauzi', 'SAMPLER', 'syarif.fauzi@oowl-indonesia.com', 'SAMPLER'),
(24, 'OI.0621.01.24', 'Maulida Rahmawati', 'ANALYST', 'maulidarahmawati24@gmail.com', 'ANALYST'),
(25, 'OI.0821.01.25', 'Awin Fauzi', 'TECHNICAL MANAGER', 'awin.fauzi@oowl-indonesia.com', 'TECHNICAL MANAGER'),
(26, 'OI.0521.01.26', 'Wista Estrada', 'SURVEYOR', 'wista.orion@oowl-indonesia.com', 'SURVEYOR'),
(27, 'OI.0821.01.27', 'Nendy Susanty', 'ARC - HC', 'nendy.susanti@oowl-indonesia.com', 'ARC & HC'),
(28, 'OI.0721.01.28', 'Agus Nurmansyah', 'SURVEYOR', 'agus.nur@oowl-indonesia.com', 'SURVEYOR'),
(29, 'OI.0921.01.29', 'Aries Fajriyanor', 'PREPARATOR', 'aries.fajriyanor@oowl-indonesia.com', 'PREPARATOR'),
(30, 'PREPARATOR', 'Khairul Santoso', 'aster', 'khairulsnts157@gmail.com', 'DRIVER'),
(31, 'OI.1021.01.31', 'Haris', 'PREPARATOR', 'harisais112@gmail.com', 'PREPARATOR'),
(32, 'OI.1121.01.32', 'Hendrian Noor', 'DRIVER', 'hendriannoor30@gmail.com', 'DRIVER'),
(33, 'OI.1221.01.33', 'Nurizzati Ivone Afifah', 'RECEPTIONIST', 'afifahivone@gmail.com', 'RECEPTIONIST'),
(34, 'OI.1221.01.34', 'Zainal Abidin', 'SECURITY', 'za8197566@gmail.com', 'SECURITY'),
(35, 'OI.1221.01.35', 'Bakir Kariadi', 'SECURITY', 'zakirbatibati@gmail.com', 'SECURITY'),
(36, 'OI.0322.01.36', 'Pandu Madya Putra', 'DRIVER', 'pandumadya@gmail.com', 'DRIVER'),
(37, 'OI.0322.01.37', 'Heru Nugroho', 'FINANCE', 'heru.nugroho@oowl-indonesia.com', 'FINANCE'),
(38, 'OI.0322.01.38', 'Sandi', 'DRIVER', 'sandybtundan@gmail.com', 'DRIVER'),
(39, 'OI.0322.01.39', 'Jajang Budiyana', 'SAMPLER', 'jajang.budiyana@oowl-indonesia.com', 'SAMPLER'),
(40, 'OI.0322.01.40', 'Amry Surya Putra', 'SURVEYOR', 'amry.surya@oowl-indonesia.com', 'SURVEYOR'),
(41, 'OI.0422.01.41', 'Anton Dwi Setiyawan', 'PREPARATOR', 'antonsetiyawan609@gmail.com', 'PREPARATOR'),
(42, 'OI.0422.01.42', 'Yunita Zulkarna\'im', 'ANALYST', 'yunita030499@gmail.com', 'ANALYST'),
(43, 'OI.0522.01.43', 'Muhammad Noval', 'OFFICE BOY', 'naufalhusin2812@gmail.com', 'OFFICE BOY'),
(44, 'OI.0822.01.44', 'Ishak Jayadi Supardi Munthe', 'SPV GENERAL AFFAIR', 'ishak@oowl-indonesia.com', 'GENERAL AFFAIR'),
(45, 'OI.0522.01.45', 'Syaid Ibrahim', 'DRIVER', 'ahim.rosss@gmail.com', 'DRIVER'),
(46, 'OI.0822.01.46', 'Syarifah Mastora Sopia', 'ADMIN FINANCE', 'syarifahshpia04@gmail.com', 'FINANCE'),
(47, 'OI.0922.01.47', 'Wahyu Rachmadani', 'SAMPLER', 'wahyu.dani@oowl-indonesia.com', 'SAMPLER'),
(48, 'OI.0922.01.48', 'Muhammad Royani', 'PREPARATOR', 'royaniroy24051994@gmail.com', 'PREPARATOR'),
(49, 'OI.0922.01.49', 'Isan Nur Permadi', 'DRIVER', 'iksannurpermadi011@gmail.com', 'DRIVER'),
(50, 'OI.0922.01.50', 'Hairil', 'SAMPLER', 'hairil.orion@oowl-indonesia.com', 'SAMPLER'),
(51, 'OI.0922.01.51', 'Dimas Wahyu Indra Setiawan', 'PREPARATOR', 'dimaswahyuindras@gmail.com', 'PREPARATOR'),
(52, 'OI.1022.01.52', 'Muhammad Fajrianor Amir', 'SAMPLER', 'fajrianor.amir@oowl-indonesia.com', 'SAMPLER'),
(53, 'OI.1022.01.53', 'Muhammad Sanusi', 'ANALYST', 'madsa041@gmail.com', 'ANALYST'),
(54, 'OI.1222.01.54', 'Anggi Julian', 'SAMPLER', 'anggi.julian@oowl-indonesia.com', 'SURVEYOR'),
(55, 'OI.0322.00.09', 'Muslimin Mufty', 'SAMPLER', 'muslimin.mufti@oowl-indonesia.com', 'SAMPLER'),
(56, 'OI.0523.01.55', 'Mushawwir Sudirman', 'ADMIN OPERATION', 'mushawwir@oowl-indonesia.com', 'OPERATIONS');

-- --------------------------------------------------------

--
-- Table structure for table `master_kendaraan`
--

CREATE TABLE `master_kendaraan` (
  `id_mobil` int NOT NULL,
  `no_lambung` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `merk` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `no_rangka` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `no_mesin` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Tgl_STNK/SKPD` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `License_Plates` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `photo_unit` blob NOT NULL,
  `File_STNK/SKPD` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_kendaraan`
--

INSERT INTO `master_kendaraan` (`id_mobil`, `no_lambung`, `merk`, `model`, `no_rangka`, `no_mesin`, `Tgl_STNK/SKPD`, `color`, `License_Plates`, `photo_unit`, `File_STNK/SKPD`) VALUES
(1, 'OOWLI 02-001', 'TOYOTA', 'HILUX DOUBLE CABIN 2.4 G (4X4) DSL M/T', 'MR0KB8CD3N11376', '2GD1278835', '2022', 'Putih', 'DA 8559 XP', '', ''),
(2, 'OOWLI 02-002', 'MITSUBISHI', 'TRITON 2.4L DC GLS (4X4) M/T', 'TRITON 2.4L DC ', '4N15UHL738', '2021', 'Putih', 'DA 8438 PW\n', '', ''),
(3, 'OOWLI 02-003', 'MITSUBISHI', 'TRITON 2.4L DC EXCEED (4X4) M/T', 'TRITON 2.4L DC EXCEE', '4N15UHC1301', ' 2021', 'Putih', 'DA 8634 PV', '', ''),
(4, 'OOWLI 02-004', 'TOYOTA', 'AVANZA 1.3 G A/T (F653RM)', 'MHKM5EB3JMK035429', '1NRG146778', '2021', 'Putih', 'DA 1788 JK', '', ''),
(5, 'OOWLI 02-005', 'MITSUBISHI', 'TRITON 2.4L SC GLS (4X4) M/T', 'MMBEJKK10MH043545 MR', '4N1UHY3576', '2021', 'Putih', 'DA 8615 PX', '', ''),
(6, 'OOWLI 02-006', 'TOYOTA', 'HILUX 2.4 DOUBLE CABIN 4X4 M/T', 'HILUX 2.4 DOUBLE CABIN 4X4 M/T\n', '2GD1174294', '2022', 'Putih', 'DA 8783 PX', '', ''),
(7, 'OOWLI 02-007', 'MITSUBISHI', 'TRITON 2.4L DC ULTIMATE (4X4) M/T', 'MMBJLKL10NH070742', '4N15UJC3302', '2022', 'Putih', 'DA 8193 PY', '', ''),
(8, 'OOWLI 03-001', 'Mitsubishi', 'TRITON 2.4L DC EXCEED (4X4) M/T', 'TRITON 2.4L DC EXCEED (4X4) M/T', '4N15UJC9047', '2022', 'PUTIH SOLID', 'KT 8179 NT', '', ''),
(9, 'OOWLI 03-002', 'Mitsubishi', 'TRITON 2.4L DC EXCEED (4X4) M/T', 'MMBJJKL10NH072905', '4N15UJD9877', '2022', 'Putih SOLID', 'KT 8178 NT', '', ''),
(10, 'OOWLI 03-003', 'Mitsubishi', 'TRITON 2.4L DC ULTIMATE (4X4) M/T', 'MMBJLKL10NH072932', '4N15UJD2983', '2022', 'PUTIH SOLID', 'KT 8177 NT', '', ''),
(11, 'OOWLI 03-004', 'Mitsubishi', 'TRITON 2.4L DC ULTIMATE (4X4) M/T', 'MMBJKL10NH082420', '4N15UJJ6268', '2022', 'PUTIH SOLID', 'KT 8375 NT', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `master_lokasi`
--

CREATE TABLE `master_lokasi` (
  `id_lokasi` int NOT NULL,
  `nama_lokasi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_lokasi` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_supplier`
--

CREATE TABLE `master_supplier` (
  `id_penyedia` int NOT NULL,
  `nama_penyedia_eksternal` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `e-mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `no_telp` char(15) COLLATE utf8mb4_general_ci NOT NULL,
  `bidang_usaha` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan_terdaftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_supplier`
--

INSERT INTO `master_supplier` (`id_penyedia`, `nama_penyedia_eksternal`, `alamat`, `contact_person`, `e-mail`, `no_telp`, `bidang_usaha`, `keterangan_terdaftar`) VALUES
(1, 'PT. ARBIE SCIENTIFIC LABORATORY', 'Jl. Cemara III NO.7 Bandung 40161', 'Bpk. Arbie Yakub & Bpk. Rheza Wildan P', 'yak@bdg.centrin.net.id', '0222034016', 'Testing Sample Preparation For Coal Quality And Manufacturing Coal Preparation And Coal Laboratory Equipment', '2023-09-18'),
(2, 'PT. SYNERGINDO GUNA JAYA', 'Ruko Golden 8 Blok C NO. 17 Pakulonan Barat - Kelapa Dua, Tangerang - Banten 15810 Indonesia', 'Bpk. Anton Gunawan', 'sgy.anton@gmail.com', '0215473503', 'Distributor Untuk Alat, Bahan dan Part Laboratorium \r\n', '2023-10-09'),
(3, 'PT. MAGNA SARDO', 'Jl. Matraman Raya No. 17, Jakarta 13140\r\n', 'Bapak Delfitri ST', 'delfitri@sardo.co.id', '0813-7347-1616', 'Major Business In Industrial Supply And Services Especially In The Line Of Analytical Laboratory Equipment.\r\n', '2023-12-02'),
(4, 'PT. UNITAMA ANALITIKA PERKASA', 'Jl. Panjang No. 37C,Kebon Jeruk, Jakarta Barat 11530\r\n', 'Bapak Agus Haryono', 'unitama@unitamaanalitika.co.id', '02153660641', 'Distributor Untuk Alat dan Bahan Laboratorium \r\n', '2023-06-14'),
(5, 'PT. SPEKTRAKROM INDONESIA', 'Jl. Garuda NO. 31C Kemayoran. Jakarta Pusat - Indonesia\r\n', 'Bapak Adnan Kharisma Putra', 'adnan@spektrakrom.co.id', '0811132707', 'Distributor Untuk Alat dan Bahan Laboratorium \r\n', '2023-02-24'),
(6, 'PT. ROBUST MULTILAB SOLUSINDO', 'Jl. Bintaro Permai No. 3, Bintaro, Pesanggrahan, Jakarta Selatan 12330 - INDONESIA\r\n', 'Bapak Hanif', 'info.kaliman@yahoo.co.id; info@kaliman.co.id', '081381976350', 'Distributor Untuk Alat dan Bahan Laboratorium \r\n', '2023-04-27'),
(7, 'PT. TRUBUS GENERAL INSTRUMENT', 'Jl. Raya Merdeka No. 70, RT. 002 RW. 001Cimone, Karawaci, Tangerang - Banten\r\n', 'Bapak Waldiansyah', 'trubusgeneralinstrument@gmail.com', '082281073029', 'Distributor Untuk Alat dan Bahan Laboratorium \r\n', '2023-03-03'),
(8, 'PT. MEGA BAKTI TEKNIK', 'Jl. Tombokan NO.777 Desa Cipandeuy - Cimareme / Kab. Bandung Barat\n', 'Bpk. Rusyana. SE', ' russ.megabaktiteknik@gmail.com', '082118043453', 'Produk Alat Alat Mining Preparasi\r\n', '2023-01-05'),
(9, 'PT. NEW PRAKTIKA ALKESINDO', 'Jl. Ngagel Jaya Utara IV/19 Pucang Sewu, Gubeng Surabaya Jawa Timur 60283\r\n', 'Ibu Yuli', '-', '0315026968', 'Distributor untuk alat dan bahan laboratorium Merck, Sigma-Aldrich, Ohaus, Sartorius dan Daihan\r\n', '2023-01-01'),
(10, 'PT. GALA JAYA BANJARMASIN', 'Jl. Pramuka No. 19\r\n', 'Bapak Ryan', 'galajayabjm@gmail.com', '05113255166', 'Jual dan Rental / Sewa , Alat Berat , Sparepart Diesel Engine, Oli, Grease dan Ban Alat berat dan Truk\r\n', '2021-01-01'),
(11, 'CV. ERENBE PIPAKAT BANUA', 'Jl. Angkasa Blok P No.19 RT.24 Komp. Citra Raya Angkasa Landasan Ulin Banjarbaru \r\n', 'Bapak Sri Haryono', '-', '08125000616', 'Penyedia Tabung Gas dan Isi Ulang Tabung Gas\r\n', '2021-01-01'),
(12, 'TK. BETANIA', 'Jl. M.T. Haryono No.33, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70231\r\n', 'Admin', '-', '085346951475', 'Alat Pertanian, Teknik Kimia, Water Treatment, Teknik Perikanan, dan Mesin Pompa\r\n', '2021-01-01'),
(13, 'TK. D3 SAFETY & TOOLS ', 'Jl. A.Yani KM.9\r\n', 'Bapak H. Sofyan', 'd3safety@gmail.com', '081349679779', 'Penyedia Alat - Alat Safety\r\n', '2021-01-01'),
(14, 'YUNANI DIESEL', 'Jl. Mengtari Empat RT.24 RW.8 Martapura Kota. Banjar\r\n', 'Admin', 'https://www.yunanidiesel.co.id/', '082358558000', 'Penyediaan Jasa Atau Service Dan Penyedia Retail Spare Part Mesin dan Motor\r\n', '2021-10-01'),
(15, 'CV. UDESA', 'Jl. Cemara III NO.7 Bandung 40161\r\n', 'Bapak Arbie Yakub', 'yak@bdg.centrin.net.id', '08122145517', 'Preparation Equipment And Other Laboratory Equipment\r\n', '2021-01-01'),
(16, 'CV. BERKAH MULYA SENTANA', 'Jl. Cihanjuang Kp Cibaligo RT.003 RW.001, Kel. Cihanjuang, Kec. Parongpong, Kab. Bandung Jawa Barat 40559\r\n', 'Bapak Irwan Maulana', 'cvberkahmulyasentana@gmail.com', '082217258423', 'Equipment for Preparation Sample Mineral and Coal\r\n', '2021-01-01'),
(17, 'GLOBAL AC', 'Jl. Trikora Komp. Abaditama NO. 112 RT.39 Banjarbaru 70721\r\n', 'Admin', '-', '081349778691', 'Jasa Service AC\r\n', '2021-01-01'),
(18, 'PRINT BZB DIGITAL & OFFSET PRINTING', 'Jl. A.Yani Km. 34, Banjarbaru\r\n', 'Admin', 'bzbprint2020@gmail.com', '087846646580', 'Percetakan Digital\r\n', '2022-01-01'),
(19, 'PT. ENGGANG PERKASA MANDIRI', 'Jl. Trikora Komp. Galuh Marindu NO.17 RT.11 RW.02 Kel. Sungai Besar, Kec. Banjarbaru Selatan Kalsel 70714\r\n', 'Ibu Rita Wulandari', '-', '082150508104', 'Supplier dan Service isi ulang APAR\r\n', '2023-08-04'),
(20, 'DEPO GEMILANG BANJARBARU', 'Jl. A. Yani No.Km. 33, Guntung Payung, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan 70714\r\n', 'Admin', 'http://www.gemilang-store.com/', '082154089931', 'Distributor Peralatan Bahan Bangunan\r\n', '2021-01-01'),
(21, 'INFORMA BANJARBARU', 'Q Mall, Jl. A. Yani No.KM 36,5, Komet, Banjarbaru Utara, Banjarbaru City, South Kalimantan 70714\r\n\r\n', 'Ananda Ridha', 'ruparupa.com', '081649073006', 'Furnitur dan Aksesoris\r\n', '2021-01-01'),
(22, 'APOTEK CORDELIA FARMA', 'Jl. Panglima Batur No.19E, Loktabat Utara, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70714\r\n', 'Admin', '-', '081254740314', 'Supplier Obat dan Vitamin\r\n', '2021-01-01'),
(23, 'TOKOPEDIA', 'Jl. Prof.Dr. Satrio Kav 11, Prof. Dr. Satrio, Satrio, Jakarta Selatan.\r\n', '-', 'tokopedia.com', '-', 'Ecommerce\r\n', '2023-01-01'),
(24, 'SHOPEE', 'Wisma 77 Tower 2, Lantai 11, Jalan Letjen. S. Parman Kav. 77 Slipi, Palmerah, Jakarta Barat, 11410\r\n', '-', 'shopee.co.id', '-', 'Ecommerce\r\n', '2021-01-01'),
(25, 'MONOTARO', 'Kawasan Pergudangan SGLI, EJIP Industrial Park Plot 1E&2, Warehouse 2 Pintu C1,D1 Sukaresmi, Cikarang Selatan, Bekasi,17530, Jawa Barat.\r\n', '-', 'monotaro.id', '-', 'Ecommerce\r\n', '2022-09-20'),
(26, 'BUNG.KUS', 'Jl. Sultan Adam Komp. Arrahim I NO.46 RT.33 Kecamatan Banjarmasin Utara Kelurahan Sungai Miai Banjarmasin 70123\r\n', 'Bapak Anang', '-', '-', 'Supplier Plastik dan Karung\r\n', '2021-01-01'),
(27, 'ONYX', 'Jl.Sultan Adam No. 26  Banjarmasin\r\n', 'Bapak Aini', '-', '082255604740', 'Percetakan\r\n', '2021-01-01'),
(28, 'KBBP KONSTRUKSI', '\"Jl. A.Yani KM.23,700 / RT.007 RW.003 Kel. Landasan Ulin Tengah, Kec. Liang Anggang Banjarbaru, Kalimantan Selatan\r\n\"\r\n', 'Bapak Tri Satya', '-', '081349145601', 'Konstruksi\r\n', '2022-12-12'),
(29, 'PT. NAKATAMA SCIENTIFIC', 'Jl. Jingga Kusuma Kulon No. 40 Kota Baru Parahyangan - Padalarang, Bandung (40553) Indonesia\r\n', 'Bapak Insan Kamal', 'info.nakatama@yahoo.com', '0811225754', 'Equipment for Preparation Sample Mineral\r\n', '2021-06-08'),
(30, 'GO RENT SCAFFOLDING', 'Jl. Raya Beruntung Jaya NO.02, Jl. A.Yani KM.13 (Pergudangan NO.99 2Q)\r\n', 'Bapak Taufiq', '-', '081347150904', 'Scaffolding\r\n', '2022-04-05'),
(31, 'PT. ASTRA INTERNATIONAL Tbk - TOYOTA BANJARMASIN BRANCH', 'Jl. A. Yani Km.19 Landasan ulin Barat Liang Anggang Banjarbaru, Indonesia \r\n\r\n', 'Bapak Febriyadi Santosa', '-', '085349961036', 'Otomotif\r\n', '2021-01-01'),
(32, 'PT. METTLER TOLEDO INDONESIA\r\n', '\"GRHA Persada 1, 2nd floor , JL. KH. Noer Ali No. 3A\r\nKayuringin Jaya, Bekasi Selatan – 17144\"\r\n', 'Aprillia Kirana', 'Aprilia.Kirana@mt.com', '085733355114', 'Produsen Timbangan dan Instrumen Analitik\r\n', '2021-01-01'),
(34, 'CV. NEPA TECH \r\n', 'Perum Pondok Ungu Permai Sektor V Blok O.22 NO.03 RT 008 RW 027, Bahagia, Kab. Bekasi\r\n', 'Bapak Krishna Agung', 'nepatech1@gmail.com', '081267084525', 'Distributor Untuk Alat dan Bahan Laboratorium \r\n', '2021-12-08'),
(35, 'PT. GAMMA MITRA LESTARI\r\n', 'Bintaro Business Centre Jl. RC Veteran no 1-i , Bintaro, Jakarta Selatan 12330\r\n', 'Bapak Selamet Riyadi', 'sriyadi.el18@gmail.com', '081586888223', 'Proteksi dan instrumentasi radiasi, kedokteran nuklir, fisika nuklir, dan peralatan radiofarmasi\r\n', '2021-11-09'),
(36, 'KME SARANA GEMILANG\r\n', 'Jl.. Raya Cimindi NO.111/115 Cibiurem - Cimahi 40535 Jawa Barat\r\n', 'Bapak Ilham Saputra', 'info@kmengineering.co.id', '081223856125', 'Produsen Alat-Alat Preparasi Sampel\r\n', '2021-01-01'),
(37, 'PT. KALIBRASI INSTRUMENTASI MANDIRI (KALIMAN)\r\n', 'Komplek Great Western Resort Blok AA1-16;B1-18;B1-19 Jl. M.H Thamrin KM.7, Kebun Nanas, Panunggangan - Pinang Tangerang 15143\r\n', 'Bapak Dimas', 'www.kaliman.co.id', '083877902229', 'Kalibrasi Alat\r\n', '2021-01-01'),
(38, 'BALAI PENGUJIAN DAN SERTIFIKASI MUTU BARANG (BPSMB)\r\n', 'JL. Pangeran Batur, Banjarbaru, Loktabat Utara, Banjarbaru Utara, Banjarbaru City, South Kalimantan 70714\r\n', 'Admin', '-', '05114772237', 'Kalibrasi Alat\r\n', '2021-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `pp_harga`
--

CREATE TABLE `pp_harga` (
  `id_pph` int NOT NULL,
  `no_pph` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `lampiran` int NOT NULL,
  `perihal` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `id_penyedia` int DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_item` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `spesifikasi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int NOT NULL,
  `rincian_barang_jasa` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `daftar_harga` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `pembelian_pembayaran` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `estimasi_pengiriman` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `nmr_telp` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pp_harga`
--

INSERT INTO `pp_harga` (`id_pph`, `no_pph`, `lampiran`, `perihal`, `id_penyedia`, `email`, `nama_item`, `spesifikasi`, `jumlah`, `rincian_barang_jasa`, `daftar_harga`, `pembelian_pembayaran`, `estimasi_pengiriman`, `nmr_telp`) VALUES
(1, '1111111111111', 0, 'q', 3, 'hlmnyhya99@gmail.com', 'BOLTJOIN BOX', 'QWPOEPOWQSALKDACXXZ', 44, 'w', 'q', 'q', '33', '12');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id_po` int NOT NULL,
  `no_usulan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `no_po` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qou.no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `supplier` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat_supp` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ATTN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `e-mail_supp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_telp_supp` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `satuan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `h.satuan` int DEFAULT NULL,
  `t.harga` int DEFAULT NULL,
  `remarks` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_po` enum('Sesuai','Tidak Sesuai') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id_po`, `no_usulan`, `tanggal`, `no_po`, `qou.no`, `supplier`, `alamat_supp`, `ATTN`, `e-mail_supp`, `no_telp_supp`, `nama`, `deskripsi`, `qty`, `satuan`, `h.satuan`, `t.harga`, `remarks`, `status_po`) VALUES
(1, '1111111111111', '2023-12-21', NULL, NULL, 'PT. MAGNA SARDO', 'Jl. Matraman Raya No. 17, Jakarta 13140\r\n', 'Agus Nurmansyah', 'delfitri@sardo.co.id', '0813-7347-1616', 'BOLTJOIN BOX', 'w', 44, NULL, NULL, NULL, NULL, 'Sesuai');

-- --------------------------------------------------------

--
-- Table structure for table `spk`
--

CREATE TABLE `spk` (
  `id_spk` int NOT NULL,
  `tanggal` date NOT NULL,
  `nomor_spk` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_vendor` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_vendor` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `kebutuhan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rincian_biaya` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cara_pembayaran` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jangka_waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `Nama_lengkap` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` enum('Admin','kepala_cabang','karyawan','Driver') COLLATE utf8mb4_general_ci NOT NULL,
  `upload_foto` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `Nama_lengkap`, `username`, `password`, `email`, `level`, `upload_foto`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Admin', ''),
(2, 'maida', 'mai', '202cb962ac59075b964b07152d234b70', 'mai@gmail.com', 'karyawan', '????\0JFIF\0\0`\0`\0\0??\0C\0	\n\n			\n\n		\r\r\n??\0C'),
(11, 'yyyyy', 'yaya', '4409eae53c2e26a65cfc24b3a2359eb9', 'admin@gmail.com', 'Driver', 'aplikasi berjalan.png'),
(12, 'tes', 'te', 'c4ca4238a0b923820dcc509a6f75849b', 'admin@gmail.com', 'kepala_cabang', 'aplikasi berjalan.png');

-- --------------------------------------------------------

--
-- Table structure for table `usulan`
--

CREATE TABLE `usulan` (
  `id_usulan` int NOT NULL,
  `no_usulan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` enum('produk','jasa') COLLATE utf8mb4_general_ci NOT NULL,
  `nama_produk&jasa` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `spesifikasi` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int NOT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Diterima','Diproses','Ditolak') COLLATE utf8mb4_general_ci NOT NULL,
  `penyerah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi/departement_penyerah` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `penerima` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi/departement_penerima` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ttd_penerima` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ttd_penyerah` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_barang` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi/cabang` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pengembalian` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usulan`
--

INSERT INTO `usulan` (`id_usulan`, `no_usulan`, `tanggal`, `jenis`, `nama_produk&jasa`, `spesifikasi`, `jumlah`, `satuan`, `keterangan`, `status`, `penyerah`, `divisi/departement_penyerah`, `penerima`, `divisi/departement_penerima`, `ttd_penerima`, `ttd_penyerah`, `kode_barang`, `lokasi/cabang`, `tanggal_pengembalian`) VALUES
(1, '1111111111111', '2023-12-21', '', 'BOLTJOIN BOX', 'QWPOEPOWQSALKDACXXZ', 44, 'PCS', 'qwertyuiop\r\nasdfghjkl;\r\nxzcvxcbnvmb', 'Diterima', 'Agus Nurmansyah', 'ANALYST', 'Agus Nurmansyah', 'BRANCH MANAGER', 'fbffbaf2e86d12d25f0deeea4f5d3503.png', '5dfbd5c24ef96078eddd8227264ba164.png', '1234', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bbm`
--
ALTER TABLE `bbm`
  ADD PRIMARY KEY (`id_bbm`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`);

--
-- Indexes for table `loogbok`
--
ALTER TABLE `loogbok`
  ADD PRIMARY KEY (`id_loogbok`);

--
-- Indexes for table `lpb`
--
ALTER TABLE `lpb`
  ADD PRIMARY KEY (`id_lpb`);

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `master_karyawan`
--
ALTER TABLE `master_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `master_kendaraan`
--
ALTER TABLE `master_kendaraan`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `master_lokasi`
--
ALTER TABLE `master_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `master_supplier`
--
ALTER TABLE `master_supplier`
  ADD PRIMARY KEY (`id_penyedia`);

--
-- Indexes for table `pp_harga`
--
ALTER TABLE `pp_harga`
  ADD PRIMARY KEY (`id_pph`),
  ADD KEY `id_penyedia` (`id_penyedia`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `spk`
--
ALTER TABLE `spk`
  ADD PRIMARY KEY (`id_spk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id_usulan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bbm`
--
ALTER TABLE `bbm`
  MODIFY `id_bbm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `loogbok`
--
ALTER TABLE `loogbok`
  MODIFY `id_loogbok` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lpb`
--
ALTER TABLE `lpb`
  MODIFY `id_lpb` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `master_karyawan`
--
ALTER TABLE `master_karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `master_kendaraan`
--
ALTER TABLE `master_kendaraan`
  MODIFY `id_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `master_lokasi`
--
ALTER TABLE `master_lokasi`
  MODIFY `id_lokasi` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_supplier`
--
ALTER TABLE `master_supplier`
  MODIFY `id_penyedia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `pp_harga`
--
ALTER TABLE `pp_harga`
  MODIFY `id_pph` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id_po` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `id_spk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id_usulan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pp_harga`
--
ALTER TABLE `pp_harga`
  ADD CONSTRAINT `pp_harga_ibfk_1` FOREIGN KEY (`id_penyedia`) REFERENCES `master_supplier` (`id_penyedia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
