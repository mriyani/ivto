-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2016 at 12:56 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivto`
--

-- --------------------------------------------------------

--
-- Table structure for table `noss`
--

CREATE TABLE IF NOT EXISTS `noss` (
  `id` int(11) NOT NULL,
  `noss_kod` varchar(20) NOT NULL,
  `noss_tahap` int(1) NOT NULL,
  `noss_nama` varchar(50) NOT NULL,
  `noss_tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pb`
--

CREATE TABLE IF NOT EXISTS `pb` (
  `id` int(10) NOT NULL,
  `jenispb` varchar(30) NOT NULL,
  `kodpb` varchar(6) NOT NULL,
  `namapb` varchar(50) NOT NULL,
  `alamatpb` varchar(100) NOT NULL,
  `notel` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `negeri` varchar(20) NOT NULL,
  `poskod` char(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pb`
--

INSERT INTO `pb` (`id`, `jenispb`, `kodpb`, `namapb`, `alamatpb`, `notel`, `email`, `negeri`, `poskod`) VALUES
(1, 'SWASTA', 'K01025', 'SDFSD', 'SDFSDFDSF', '0355214568', 'domain@email', 'NEGERI SEMBILAN', '587648'),
(2, 'SWASTA', 'K01025', 'SDFSD', 'SDFSDFDSF', '0355214568', 'domain@email', 'NEGERI SEMBILAN', '587648'),
(3, 'SWASTA', 'K01026', 'SDFSD', 'SDFSDFDSF', '0355214568', 'domain@email', 'NEGERI SEMBILAN', '587648'),
(4, 'KERAJAAN', 'K01001', 'CIAST', 'PHG', '0355214568', 'domain@email', 'PAHANG', '587648'),
(5, 'KERAJAAN', 'D00201', 'TEST PB', 'TEST PB', '2356846464', 'domain@email', 'PUTRAJAYA', ''),
(6, '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pb_prog`
--

CREATE TABLE IF NOT EXISTS `pb_prog` (
  `id` int(11) NOT NULL,
  `kod_pb` varchar(6) NOT NULL,
  `kod_prog` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE IF NOT EXISTS `permohonan` (
  `id` int(11) NOT NULL,
  `id_pemohon` int(15) NOT NULL,
  `kod_prog` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prog`
--

CREATE TABLE IF NOT EXISTS `prog` (
  `id_prog` int(11) NOT NULL,
  `pb_kod` char(6) NOT NULL,
  `kod_prog` varchar(50) NOT NULL,
  `nama_prog` varchar(50) NOT NULL,
  `tahap` int(11) NOT NULL,
  `tmula` date NOT NULL,
  `ttamat` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prog`
--

INSERT INTO `prog` (`id_prog`, `pb_kod`, `kod_prog`, `nama_prog`, `tahap`, `tmula`, `ttamat`) VALUES
(1, '', 'IT-020-5:2013', 'PENGURUSAN SISTEM KOMPUTER', 5, '2016-03-01', '2016-03-10'),
(6, '', 'IT-030-4:2013', 'PENGURUS RANGKAIAN KOMPUTER', 4, '2016-03-18', '2017-07-13'),
(7, '', 'IT-030-4:2013', 'PENGURUS RANGKAIAN KOMPUTER', 4, '2016-03-18', '2017-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ndp` varchar(10) NOT NULL,
  `nkp` char(12) NOT NULL,
  `id_prog` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `username`, `nama`, `ndp`, `nkp`, `id_prog`) VALUES
(1, 'password', 'riyani', 'MUHAMMAD RIYANI BIN MAKHTAR', '', '860505295087', 1),
(2, '123', 'test', 'testing', '', '12345789012', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noss`
--
ALTER TABLE `noss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pb`
--
ALTER TABLE `pb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pb_prog`
--
ALTER TABLE `pb_prog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prog`
--
ALTER TABLE `prog`
  ADD PRIMARY KEY (`id_prog`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noss`
--
ALTER TABLE `noss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pb`
--
ALTER TABLE `pb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pb_prog`
--
ALTER TABLE `pb_prog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prog`
--
ALTER TABLE `prog`
  MODIFY `id_prog` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
