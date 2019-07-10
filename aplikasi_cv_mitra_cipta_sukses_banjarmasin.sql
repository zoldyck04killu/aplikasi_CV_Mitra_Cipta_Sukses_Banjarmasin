-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2019 at 07:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_cv_mitra_cipta_sukses_banjarmasin`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bahan`
--

CREATE TABLE `jenis_bahan` (
  `kode_jenis_bahan` int(50) NOT NULL,
  `harga_bahan` int(25) NOT NULL,
  `jenis_bahan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketarangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran_bahan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_bahan`
--

INSERT INTO `jenis_bahan` (`kode_jenis_bahan`, `harga_bahan`, `jenis_bahan`, `ketarangan`, `ukuran_bahan`) VALUES
(3, 90000, 'Kertas', 'ok', 2),
(4, 100, 'tes', 'tes', 10);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(50) NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Digital Printing'),
(3, 'Percetakan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_admin`, `password`) VALUES
('01', '$2y$10$Z6YJCvY1dxm1HKRt2.ki..sLfCA0c7SjFST8xp1JmH0pDDYkUO2Jm');

-- --------------------------------------------------------

--
-- Table structure for table `nama_barang`
--

CREATE TABLE `nama_barang` (
  `kode_barang` int(50) NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nama_barang`
--

INSERT INTO `nama_barang` (`kode_barang`, `nama_barang`, `gambar_barang`, `type_barang`, `kategori`, `harga`, `keterangan`) VALUES
(23, 'Baliho', 'Img-156198376469.png', '3', 2, 5000000, 'baliho adalah barang oke siapa');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pemesanan` int(50) NOT NULL,
  `nama_pemesan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang` int(50) NOT NULL,
  `ukuran` int(10) NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pemesanan`, `nama_pemesan`, `alamat`, `barang`, `ukuran`, `no_hp`) VALUES
(1, 'aldi', 'jl mahligai', 3, 3, '0812343435'),
(3, 'syarif', 'jln', 10, 5, '0816261213'),
(4, 'Tes', 'jalan oke', 10, 1, '11'),
(5, 'coba', 'asd', 11, 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_bahan`
--
ALTER TABLE `jenis_bahan`
  ADD PRIMARY KEY (`kode_jenis_bahan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `nama_barang`
--
ALTER TABLE `nama_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_bahan`
--
ALTER TABLE `jenis_bahan`
  MODIFY `kode_jenis_bahan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nama_barang`
--
ALTER TABLE `nama_barang`
  MODIFY `kode_barang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `kode_pemesanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
