-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 31, 2016 at 10:19 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `fuzzy_tahani`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `hasil_fuzzy`
-- 

CREATE TABLE `hasil_fuzzy` (
  `id` int(5) NOT NULL auto_increment,
  `idhimpunan` varchar(5) NOT NULL,
  `idsiswa` varchar(10) NOT NULL,
  `f` float(2,2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `hasil_fuzzy`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_data`
-- 

CREATE TABLE `tbl_data` (
  `id` int(10) NOT NULL auto_increment,
  `nama` varchar(50) default NULL,
  `nilai` int(3) default NULL,
  `minat_belajar` int(3) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tbl_data`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_himpunan`
-- 

CREATE TABLE `tbl_himpunan` (
  `id` int(10) NOT NULL auto_increment,
  `nama_himpunan` varchar(30) default NULL,
  `bawah` float(10,2) default NULL,
  `tengah` float(10,2) default NULL,
  `atas` float(10,2) default NULL,
  `kelompok` tinyint(2) default NULL,
  `keterangan` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `tbl_himpunan`
-- 

INSERT INTO `tbl_himpunan` (`id`, `nama_himpunan`, `bawah`, `tengah`, `atas`, `kelompok`, `keterangan`) VALUES 
(1, 'Rendah', 0.00, 20.00, 40.00, 1, NULL),
(2, 'Sedang', 30.00, 50.00, 70.00, 1, NULL),
(3, 'Tinggi', 60.00, 80.00, 100.00, 1, NULL),
(4, 'Rendah', 0.00, 35.00, 70.00, 2, NULL),
(5, 'Sedang', 50.00, 75.00, 100.00, 2, NULL),
(6, 'Tinggi', 80.00, 115.00, 150.00, 2, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_variabel`
-- 

CREATE TABLE `tbl_variabel` (
  `id` int(10) NOT NULL auto_increment,
  `nama_variabel` varchar(25) default NULL,
  `field_akses` varchar(25) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `tbl_variabel`
-- 

INSERT INTO `tbl_variabel` (`id`, `nama_variabel`, `field_akses`) VALUES 
(1, 'Nilai', 'nilai'),
(2, 'Minat Belajar', 'minat_belajar');
