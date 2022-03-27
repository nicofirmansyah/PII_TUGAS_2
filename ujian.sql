-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 02:17 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ujian`
--

CREATE TABLE `nilai_ujian` (
  `nim` int(20) NOT NULL,
  `nama_mahasiswa` varchar(200) DEFAULT NULL,
  `jurusan` varchar(200) DEFAULT NULL,
  `mata_kuliahh` varchar(200) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_ujian`
--

INSERT INTO `nilai_ujian` (`nim`, `nama_mahasiswa`, `jurusan`, `mata_kuliahh`, `nilai`) VALUES
(424, 'iqhsuhs', 'ssu', 'ass', 322);

-- --------------------------------------------------------

--
-- Table structure for table `ujian_mahasiswa`
--

CREATE TABLE `ujian_mahasiswa` (
  `kode_mk` int(11) NOT NULL,
  `mata_kuliah` varchar(200) DEFAULT NULL,
  `prodi` varchar(200) DEFAULT NULL,
  `hari_ujian` varchar(100) DEFAULT NULL,
  `jam` varchar(20) DEFAULT NULL,
  `dosen_mk` varchar(100) DEFAULT NULL,
  `jumlah_mahasiswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian_mahasiswa`
--

INSERT INTO `ujian_mahasiswa` (`kode_mk`, `mata_kuliah`, `prodi`, `hari_ujian`, `jam`, `dosen_mk`, `jumlah_mahasiswa`) VALUES
(8787, 'PROGRAM', 'Sistem Informasi', 'rabuuuuuuu', '10', 'Reza', 202);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_ujian`
--
ALTER TABLE `nilai_ujian`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `ujian_mahasiswa`
--
ALTER TABLE `ujian_mahasiswa`
  ADD PRIMARY KEY (`kode_mk`),
  ADD UNIQUE KEY `kode_mk` (`kode_mk`),
  ADD UNIQUE KEY `kode_mk_2` (`kode_mk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
