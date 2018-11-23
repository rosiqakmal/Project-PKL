-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 03:08 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'roshiq akmal', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `siswa_id` int(11) DEFAULT NULL,
  `siswa_nis` int(8) NOT NULL,
  `siswa_nama` varchar(40) NOT NULL,
  `siswa_kelas` varchar(40) NOT NULL,
  `siswa_jurusan` varchar(40) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15402191 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `siswa_nis`, `siswa_nama`, `siswa_kelas`, `siswa_jurusan`, `tanggal_pendaftaran`) VALUES
(NULL, 99999, 'xiomi', 'XI', 'Perbankan', '2018-09-21'),
(NULL, 15402132, 'acuy', 'XI', 'Pemasaran', '2018-09-11'),
(NULL, 15402137, 'mamat', 'XII', 'Multimedia', '2018-09-10'),
(NULL, 15402150, 'husen', 'X', 'Multimedia', '2018-09-13'),
(NULL, 15402153, 'aan', 'XII', 'Perbankan', '2018-11-06'),
(NULL, 15402155, 'zark', 'XII', 'Multimedia', '2018-09-14'),
(NULL, 15402170, 'yusufarief', 'XI', 'Teknik Komputer dan Jaringan', '2018-10-17'),
(NULL, 15402190, 'yusufarief', 'XII', 'Pemasaran', '2018-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_nis` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15402191;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
