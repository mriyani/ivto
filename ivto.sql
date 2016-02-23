-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2016 at 05:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ivto`
--

-- --------------------------------------------------------

--
-- Table structure for table `negeri`
--

CREATE TABLE IF NOT EXISTS `negeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `noss`
--

CREATE TABLE IF NOT EXISTS `noss` (
  `id_pk` int(11) NOT NULL AUTO_INCREMENT,
  `noss_kod` varchar(20) NOT NULL,
  `tahap` int(1) NOT NULL,
  `noss_nama` varchar(50) NOT NULL,
  `noss_tahun` int(4) NOT NULL,
  PRIMARY KEY (`id_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pb`
--

CREATE TABLE IF NOT EXISTS `pb` (
  `pb_id_pk` int(11) NOT NULL AUTO_INCREMENT,
  `kodpb` varchar(6) NOT NULL,
  `namapb` varchar(50) NOT NULL,
  `alamatpb` int(11) NOT NULL,
  `notel` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `negeri` varchar(20) NOT NULL,
  PRIMARY KEY (`pb_id_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prog`
--

CREATE TABLE IF NOT EXISTS `prog` (
  `id_pk` int(11) NOT NULL AUTO_INCREMENT,
  `pb_id_fk` int(11) NOT NULL,
  `noss` varchar(50) NOT NULL,
  `tarikh_mula` date NOT NULL,
  `tarikh_tamat` date NOT NULL,
  PRIMARY KEY (`id_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
