-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2016 at 03:35 PM
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
-- Table structure for table `noss`
--

CREATE TABLE IF NOT EXISTS `noss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noss_kod` varchar(20) NOT NULL,
  `noss_tahap` int(1) NOT NULL,
  `noss_nama` varchar(50) NOT NULL,
  `noss_tahun` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pb`
--

CREATE TABLE IF NOT EXISTS `pb` (
  `id_pb` int(10) NOT NULL AUTO_INCREMENT,
  `jenispb` varchar(30) NOT NULL,
  `kodpb` varchar(6) NOT NULL,
  `namapb` varchar(50) NOT NULL,
  `alamatpb` varchar(100) NOT NULL,
  `notel` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `negeri` varchar(20) NOT NULL,
  `poskod` char(6) NOT NULL,
  PRIMARY KEY (`id_pb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pb`
--

INSERT INTO `pb` (`id_pb`, `jenispb`, `kodpb`, `namapb`, `alamatpb`, `notel`, `email`, `negeri`, `poskod`) VALUES
(1, 'SWASTA', 'K01025', 'SDFSD', 'SDFSDFDSF', '0355214568', 'domain@email', 'NEGERI SEMBILAN', '587648'),
(2, 'SWASTA', 'K01025', 'SDFSD', 'SDFSDFDSF', '0355214568', 'domain@email', 'NEGERI SEMBILAN', '587648'),
(3, 'SWASTA', 'K01026', 'SDFSD', 'SDFSDFDSF', '0355214568', 'domain@email', 'NEGERI SEMBILAN', '587648'),
(4, 'KERAJAAN', 'K01001', 'CIAST', 'PHG', '0355214568', 'domain@email', 'PAHANG', '587648'),
(5, 'KERAJAAN', 'D00201', 'TEST PB', 'TEST PB', '2356846464', 'domain@email', 'PUTRAJAYA', ''),
(8, 'PERSATUAN / PERTUBUHAN', 'D01010', 'TUBUH', 'KEDAH MAI', '0192548494', 'email@tubuh', 'KEDAH', '099079'),
(9, 'SWASTA', 'Z08978', 'ZEBRA COLLEGE', 'PAHANG TOK GAJAH', '0960906789', 'email@zebra', 'PAHANG', '674867'),
(10, 'INDUSTRI', 'M08979', 'INDUSTRI KAPAL', 'PRAK YEOP', '0808979696', 'email@kapal', 'PERAK', '686833'),
(11, 'KERAJAAN', 'H45655', 'TEST', 'MAI DAH', '0607995686', 'email@test', 'KEDAH', '657676'),
(12, 'KERAJAAN', 'M04564', 'MY INSTITUT', 'PERLIS MAI CECK MAI', '0456456456', 'email@my', 'PERLIS', '567457'),
(13, 'INDUSTRI', 'K04544', 'KOLEJ MASAKAN', 'MELAKA BANDAR BERSEJARAH', '0979884545', 'email@masak', 'NEGERI SEMBILAN', '098797');

-- --------------------------------------------------------

--
-- Table structure for table `pb_prog`
--

CREATE TABLE IF NOT EXISTS `pb_prog` (
  `id_pb_prog` int(11) NOT NULL AUTO_INCREMENT,
  `id_pb` varchar(6) NOT NULL,
  `id_prog` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pb_prog`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pb_prog`
--

INSERT INTO `pb_prog` (`id_pb_prog`, `id_pb`, `id_prog`) VALUES
(1, '1', '1'),
(2, '2', '6');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE IF NOT EXISTS `permohonan` (
  `id_mohon` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemohon` int(15) NOT NULL,
  `kod_prog` varchar(15) NOT NULL,
  PRIMARY KEY (`id_mohon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prog`
--

CREATE TABLE IF NOT EXISTS `prog` (
  `id_prog` int(11) NOT NULL AUTO_INCREMENT,
  `id_pb` int(10) NOT NULL,
  `kod_prog` varchar(50) NOT NULL,
  `nama_prog` varchar(50) NOT NULL,
  `tahap` int(11) NOT NULL,
  `tmula` date NOT NULL,
  `ttamat` date NOT NULL,
  PRIMARY KEY (`id_prog`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `prog`
--

INSERT INTO `prog` (`id_prog`, `id_pb`, `kod_prog`, `nama_prog`, `tahap`, `tmula`, `ttamat`) VALUES
(1, 1, 'IT-020-5:2013', 'PENGURUSAN SISTEM KOMPUTER', 5, '2016-03-01', '2016-03-10'),
(6, 2, 'IT-030-4:2013', 'PENGURUS RANGKAIAN KOMPUTER', 4, '2016-03-18', '2017-07-13'),
(7, 4, 'IT-030-4:2013', 'PENGURUS RANGKAIAN KOMPUTER', 4, '2016-03-18', '2017-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ndp` varchar(10) NOT NULL,
  `nkp` char(12) NOT NULL,
  `id_prog` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `username`, `nama`, `ndp`, `nkp`, `id_prog`) VALUES
(1, 'password', 'riyani', 'MUHAMMAD RIYANI BIN MAKHTAR', '', '860505295087', 1),
(2, '123', 'test', 'testing', '', '12345789012', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
