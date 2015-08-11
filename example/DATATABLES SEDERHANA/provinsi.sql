-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2014 at 09:39 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kota_fk` int(11) DEFAULT NULL,
  `nama_kecamatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kota_fk`, `nama_kecamatan`) VALUES
(1, 1, 'Asemrowo'),
(2, 1, 'Kenjeran'),
(3, 1, 'Rungkut'),
(4, 1, 'Wonokromo'),
(5, 2, 'Arjosari'),
(6, 2, 'Donomulyo'),
(7, 2, 'Tulungrejo'),
(8, 2, 'Kasembon'),
(9, 3, 'Banyumanik'),
(10, 3, 'Genuk'),
(11, 3, 'Tembalang'),
(12, 3, 'Tugu'),
(13, 4, 'Ngadirejo'),
(14, 4, 'Selogiri'),
(15, 4, 'Manyaran'),
(16, 4, 'Bulukerto'),
(17, 5, 'Buahbatu'),
(18, 5, 'Gedebage'),
(19, 5, 'Ujungberung'),
(20, 5, 'Sukasari'),
(21, 6, 'Plered'),
(22, 6, 'Jatiluhur'),
(23, 6, 'Wanayasa'),
(24, 6, 'Cibatu');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `id_provinsi_fk` int(11) DEFAULT NULL,
  `nama_kota` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi_fk`, `nama_kota`) VALUES
(1, 1, 'Surabaya'),
(2, 1, 'Malang'),
(3, 2, 'Semarang'),
(4, 2, 'Wonogiri'),
(5, 3, 'Bandung'),
(6, 3, 'Purwakarta');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Jawa Timur'),
(2, 'Jawa Tengah'),
(3, 'Jawa Barat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
