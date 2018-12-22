-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2018 at 10:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_raskin`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_fuzzy`
--

CREATE TABLE `hasil_fuzzy` (
  `id` int(5) NOT NULL,
  `id_himpunan` varchar(5) NOT NULL,
  `id_calon_penerima` varchar(10) NOT NULL,
  `f` float(2,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hasil_fuzzy`
--

INSERT INTO `hasil_fuzzy` (`id`, `id_himpunan`, `id_calon_penerima`, `f`) VALUES
(183, '3', '33', 0.99),
(182, '2', '33', 0.00),
(181, '1', '33', 0.99),
(180, '10', '32', 0.99),
(179, '9', '32', 0.00),
(178, '8', '32', 0.00),
(177, '7', '32', 0.15),
(176, '6', '32', 0.45),
(175, '5', '32', 0.70),
(174, '4', '32', 0.60),
(173, '3', '32', 0.00),
(172, '2', '32', 0.00),
(171, '1', '32', 0.70),
(170, '10', '31', 0.33),
(169, '9', '31', 0.00),
(168, '8', '31', 0.00),
(167, '7', '31', 0.70),
(166, '6', '31', 0.00),
(165, '5', '31', 0.00),
(164, '4', '31', 0.00),
(163, '3', '31', 0.80),
(162, '2', '31', 0.00),
(161, '1', '31', 0.90),
(160, '10', '30', 0.00),
(159, '9', '30', 0.50),
(158, '8', '30', 0.00),
(157, '7', '30', 0.30),
(156, '6', '30', 0.30),
(155, '5', '30', 0.00),
(154, '4', '30', 0.00),
(153, '3', '30', 0.99),
(151, '1', '30', 0.99),
(152, '2', '30', 0.00),
(184, '4', '33', 0.00),
(185, '5', '33', 0.00),
(186, '6', '33', 0.00),
(187, '7', '33', 0.99),
(188, '8', '33', 0.00),
(189, '9', '33', 0.00),
(190, '10', '33', 0.33),
(191, '1', '34', 0.50),
(192, '2', '34', 0.00),
(193, '3', '34', 0.20),
(194, '4', '34', 0.30),
(195, '5', '34', 0.00),
(196, '6', '34', 0.10),
(197, '7', '34', 0.50),
(198, '8', '34', 0.00),
(199, '9', '34', 0.00),
(200, '10', '34', 0.67),
(201, '1', '35', 0.30),
(202, '2', '35', 0.13),
(203, '3', '35', 0.00),
(204, '4', '35', 0.00),
(205, '5', '35', 0.99),
(206, '6', '35', 0.50),
(207, '7', '35', 0.10),
(208, '8', '35', 0.00),
(209, '9', '35', 0.00),
(210, '10', '35', 0.99),
(211, '1', '36', 0.60),
(212, '2', '36', 0.00),
(213, '3', '36', 0.00),
(214, '4', '36', 0.80),
(215, '5', '36', 0.30),
(216, '6', '36', 0.00),
(217, '7', '36', 0.60),
(218, '8', '36', 0.20),
(219, '9', '36', 0.50),
(220, '10', '36', 0.00),
(221, '1', '37', 0.90),
(222, '2', '37', 0.00),
(223, '3', '37', 0.30),
(224, '4', '37', 0.20),
(225, '5', '37', 0.00),
(226, '6', '37', 0.00),
(227, '7', '37', 0.30),
(228, '8', '37', 0.35),
(229, '9', '37', 0.00),
(230, '10', '37', 0.33),
(231, '1', '38', 0.99),
(232, '2', '38', 0.00),
(233, '3', '38', 0.00),
(234, '4', '38', 0.90),
(235, '5', '38', 0.40),
(236, '6', '38', 0.00),
(237, '7', '38', 0.00),
(238, '8', '38', 0.99),
(239, '9', '38', 0.00),
(240, '10', '38', 0.33),
(241, '1', '39', 0.99),
(242, '2', '39', 0.00),
(243, '3', '39', 0.99),
(244, '4', '39', 0.00),
(245, '5', '39', 0.00),
(246, '6', '39', 0.00),
(247, '7', '39', 0.80),
(248, '8', '39', 0.10),
(249, '9', '39', 0.50),
(250, '10', '39', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `masa_kerja` int(2) DEFAULT NULL,
  `usia` int(3) DEFAULT NULL,
  `gaji` int(7) DEFAULT NULL,
  `jumlah_tanggungan` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `nama`, `masa_kerja`, `usia`, `gaji`, `jumlah_tanggungan`) VALUES
(34, 'Novri Maizon', 10, 38, 750000, 3),
(33, 'Saipul', 2, 21, 1000000, 2),
(32, 'Rajulis', 8, 47, 575000, 4),
(31, 'Nofrizal Saputra', 6, 32, 850000, 2),
(30, 'Masril', 4, 28, 650000, 1),
(35, 'Atin', 12, 56, 550000, 4),
(36, 'Armis', 9, 43, 1200000, 1),
(37, 'Deno Satrio', 6, 37, 1350000, 2),
(38, 'Budawar', 5, 44, 2100000, 2),
(39, 'Syahrul', 4, 26, 1100000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_himpunan`
--

CREATE TABLE `tbl_himpunan` (
  `id` int(10) NOT NULL,
  `nama_himpunan` varchar(30) DEFAULT NULL,
  `bawah` float(10,2) DEFAULT NULL,
  `tengah` float(10,2) DEFAULT NULL,
  `atas` float(10,2) DEFAULT NULL,
  `kelompok` tinyint(2) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_himpunan`
--

INSERT INTO `tbl_himpunan` (`id`, `nama_himpunan`, `bawah`, `tengah`, `atas`, `kelompok`, `keterangan`) VALUES
(1, 'Baru', 5.00, 10.00, 15.00, 1, NULL),
(2, 'Lama', 10.00, 15.00, 25.00, 1, NULL),
(3, 'Muda', 30.00, 35.00, 40.00, 2, NULL),
(4, 'Parobaya', 35.00, 45.00, 50.00, 2, NULL),
(5, 'Tua', 40.00, 45.00, 50.00, 2, NULL),
(6, 'Rendah', 300000.00, 500000.00, 800000.00, 3, NULL),
(7, 'Sedang', 500000.00, 1000000.00, 1500000.00, 3, NULL),
(8, 'Tinggi', 1000000.00, 1500000.00, 2000000.00, 3, NULL),
(9, 'Sedikit', 0.00, 1.00, 2.00, 4, NULL),
(10, 'Banyak', 1.00, 2.00, 4.00, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_variabel`
--

CREATE TABLE `tbl_variabel` (
  `id` int(10) NOT NULL,
  `nama_variabel` varchar(25) DEFAULT NULL,
  `field_akses` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_variabel`
--

INSERT INTO `tbl_variabel` (`id`, `nama_variabel`, `field_akses`) VALUES
(1, 'Masa Kerja', 'masa_kerja'),
(2, 'Usia', 'usia'),
(3, 'Gaji', 'gaji'),
(4, 'Jumlah Tanggungan', 'jumlah _tanggungan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_fuzzy`
--
ALTER TABLE `hasil_fuzzy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_himpunan`
--
ALTER TABLE `tbl_himpunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_variabel`
--
ALTER TABLE `tbl_variabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_fuzzy`
--
ALTER TABLE `hasil_fuzzy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_himpunan`
--
ALTER TABLE `tbl_himpunan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_variabel`
--
ALTER TABLE `tbl_variabel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
