-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 12:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_tht`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id` int(2) NOT NULL,
  `kd_gejala` varchar(8) NOT NULL,
  `gejala` varchar(30) NOT NULL,
  `MB` double NOT NULL,
  `MD` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id`, `kd_gejala`, `gejala`, `MB`, `MD`) VALUES
(1, 'KG1', 'Telinga Tersumbat', 0, 0),
(2, 'KG2', 'Sakit Telinga', 0, 0),
(3, 'KG3', 'Ingus Encer', 0.7, 0.3),
(4, 'KG4', 'Telinga Mendengung', 0, 0),
(5, 'KG5', 'Hidung Tersumbat', 0.8, 0.2),
(6, 'KG6', 'Keluar Cairan Pada Telinga', 0, 0),
(7, 'KG7', 'Pendengaran Menurun (Berkurang', 0, 0),
(8, 'KG8', 'Bersin-Bersin', 0.8, 0.2),
(9, 'KG9', 'Batuk-Batuk', 0.1, 0.9),
(10, 'KG10', 'Mudah Beringus Dan Batuk', 0.7, 0.3),
(11, 'KG11', 'Selalu Pilek', 0, 0),
(12, 'KG12', 'Gangguan Pendengaran', 0, 0),
(13, 'KG13', 'Banyak Lendir Ditenggorokan', 0.7, 0.3),
(14, 'KG14', 'Pendengaran Bergemah', 0, 0),
(15, 'KG15', 'Keluar Ingus', 0.7, 0.3),
(16, 'KG16', 'Nyeri Telinga', 0, 0),
(17, 'KG17', 'Gangguan Penghidu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id` int(2) NOT NULL,
  `kd_penyakit` varchar(8) NOT NULL,
  `nm_penyakit` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id`, `kd_penyakit`, `nm_penyakit`) VALUES
(0, '', 'Rinofangitis Akut'),
(1, 'KP1', 'Otitis Media Supuratif Akut'),
(2, 'KP2', 'Laringo Faringeal Reflux'),
(3, 'KP3', 'Otitis Externa'),
(4, 'KP4', 'Miringitis'),
(5, 'KP5', 'Otitis Media Efusi'),
(6, 'KP6', 'Rhinitis Kronis Alergi'),
(7, 'KP7', 'Rhinitis Kronis'),
(8, 'KP8', 'Otitis Media Kronik'),
(9, 'KP9', 'Rhinitis Akut');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nm_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
