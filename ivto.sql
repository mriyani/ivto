-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2016 at 03:44 PM
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
-- Table structure for table `negeri`
--

CREATE TABLE IF NOT EXISTS `negeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `kodpb` varchar(6) NOT NULL,
  `namapb` varchar(50) NOT NULL,
  `alamatpb` varchar(11) NOT NULL,
  `notel` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `negeri` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pb`
--

INSERT INTO `pb` (`id`, `kodpb`, `namapb`, `alamatpb`, `notel`, `email`, `negeri`) VALUES
(10, 'K00101', 'CIAST', 'PHG', '123456789', 'a@b.com', 'PAHANG'),
(11, 'B00210', 'ILP', 'TRG', '123456789', 'pendaftaran@ciast.gov.my', 'TERENGGANU'),
(12, 'B00210', 'ILP', 'TRG', '123456789', 'pendaftaran@ciast.gov.my', 'TERENGGANU'),
(13, 'B00210', 'ILP', 'TRG', '123456789', 'pendaftaran@ciast.gov.my', 'TERENGGANU'),
(14, 'B00210', 'ILP', 'TRG', '123456789', 'pendaftaran@ciast.gov.my', 'TERENGGANU'),
(15, 'B00210', 'ILP', 'TRG', '123456789', 'pendaftaran@ciast.gov.my', 'TERENGGANU'),
(16, 'B00210', 'ILP', 'TRG', '123456789', 'pendaftaran@ciast.gov.my', 'TERENGGANU'),
(17, 'B00210', 'ILP', 'TRG', '123456789', 'pendaftaran@ciast.gov.my', 'TERENGGANU'),
(18, 'B00210', 'ILP', 'TRG', '123456789', 'pendaftaran@ciast.gov.my', 'TERENGGANU'),
(19, 'B00210', 'ILP', 'TRG', '123456789', 'pendaftaran@ciast.gov.my', 'TERENGGANU'),
(20, '', '', '', '0', '', ''),
(21, '', '', '', '0', '', ''),
(22, 'B00210', 'adteC', 'SLGR', '0123456789', 'a@b.com', 'SARAWAK'),
(23, 'M20133', 'TEst', 'mlk', '0123456789', 'pendaftaran@ciast.gov.my', 'MELAKA'),
(24, 'SAD234', 'ADTEC', 'PERLIS', '0123456789', 'pendaftaran@ciast.gov.my', 'PERLIS'),
(25, 'SAD234', 'ADTEC', 'PERLIS', '0123456789', 'pendaftaran@ciast.gov.my', 'PERLIS'),
(26, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pb_jenis`
--

CREATE TABLE IF NOT EXISTS `pb_jenis` (
  `id` int(11) NOT NULL,
  `pb_kod_jenis` int(1) NOT NULL,
  `pb_jenis` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pb_jenis`
--

INSERT INTO `pb_jenis` (`id`, `pb_kod_jenis`, `pb_jenis`) VALUES
(1, 1, 'INDUSTRI'),
(2, 2, 'KERAJAAN'),
(3, 3, 'PERSATUAN/PERTUBUHAN'),
(4, 4, 'SWASTA');

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
  `id` int(11) NOT NULL,
  `pb_kod` char(6) NOT NULL,
  `noss` varchar(50) NOT NULL,
  `tahap` int(11) NOT NULL,
  `tarikh_mula` date NOT NULL,
  `tarikh_tamat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ndp` varchar(10) NOT NULL,
  `nkp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `negeri`
--
ALTER TABLE `negeri`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pb_jenis`
--
ALTER TABLE `pb_jenis`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `negeri`
--
ALTER TABLE `negeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `noss`
--
ALTER TABLE `noss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pb`
--
ALTER TABLE `pb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `pb_jenis`
--
ALTER TABLE `pb_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
