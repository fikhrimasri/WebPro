-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 05:55 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kalibrr`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_jobseekers`
--

CREATE TABLE `akun_jobseekers` (
  `First` varchar(50) NOT NULL,
  `Last` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Id_AJ` int(2) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_jobseekers`
--

INSERT INTO `akun_jobseekers` (`First`, `Last`, `Email`, `Id_AJ`, `Pass`) VALUES
('fikhri', 'masri', 'masrifikhri@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `akun_perusahaan`
--

CREATE TABLE `akun_perusahaan` (
  `id_AP` int(2) NOT NULL,
  `First` varchar(50) NOT NULL,
  `Last` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Industry` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `com_size` varchar(50) NOT NULL,
  `work_email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

CREATE TABLE `jobseekers` (
  `Id_J` int(2) NOT NULL,
  `nama_J` varchar(50) NOT NULL,
  `alamat_J` varchar(50) NOT NULL,
  `no_telp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email`, `Pass`) VALUES
('masrifikhri@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_L` varchar(2) NOT NULL,
  `gaji_L` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_P` int(2) NOT NULL,
  `nama_P` varchar(50) NOT NULL,
  `alamat_P` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_jobseekers`
--
ALTER TABLE `akun_jobseekers`
  ADD PRIMARY KEY (`Id_AJ`);

--
-- Indexes for table `akun_perusahaan`
--
ALTER TABLE `akun_perusahaan`
  ADD PRIMARY KEY (`id_AP`);

--
-- Indexes for table `jobseekers`
--
ALTER TABLE `jobseekers`
  ADD PRIMARY KEY (`Id_J`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_L`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_P`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_jobseekers`
--
ALTER TABLE `akun_jobseekers`
  MODIFY `Id_AJ` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobseekers`
--
ALTER TABLE `jobseekers`
  MODIFY `Id_J` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
