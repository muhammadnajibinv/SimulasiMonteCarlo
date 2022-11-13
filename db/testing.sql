-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 04:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `acak2021_2022`
--

CREATE TABLE `acak2021_2022` (
  `kd_bulan` varchar(10) NOT NULL,
  `bilangan_acak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acak2021_2022`
--

INSERT INTO `acak2021_2022` (`kd_bulan`, `bilangan_acak`) VALUES
('01', 8),
('02', 77),
('03', 2),
('04', 62),
('05', 14),
('06', 92);

-- --------------------------------------------------------

--
-- Table structure for table `acak2022_2023`
--

CREATE TABLE `acak2022_2023` (
  `kd_bulan` varchar(10) NOT NULL,
  `bilangan_acak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acak2022_2023`
--

INSERT INTO `acak2022_2023` (`kd_bulan`, `bilangan_acak`) VALUES
('01', 8),
('02', 77),
('03', 2),
('04', 62),
('05', 14),
('06', 92);

-- --------------------------------------------------------

--
-- Table structure for table `acak2023_2024`
--

CREATE TABLE `acak2023_2024` (
  `kd_bulan` varchar(10) NOT NULL,
  `bilangan_acak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acak2023_2024`
--

INSERT INTO `acak2023_2024` (`kd_bulan`, `bilangan_acak`) VALUES
('01', 8),
('02', 77),
('03', 2),
('04', 62),
('05', 14),
('06', 92);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `kd_bulan` varchar(10) NOT NULL,
  `nama_bulan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`kd_bulan`, `nama_bulan`) VALUES
('01', 'September'),
('02', 'Oktober'),
('03', 'November'),
('04', 'Desember'),
('05', 'Januari'),
('06', 'Februari');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar2021_2022`
--

CREATE TABLE `pendaftar2021_2022` (
  `kd_bulan` varchar(10) NOT NULL,
  `pendaftar` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar2021_2022`
--

INSERT INTO `pendaftar2021_2022` (`kd_bulan`, `pendaftar`) VALUES
('01', 20),
('02', 36),
('03', 20),
('04', 22),
('05', 19),
('06', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar2022_2023`
--

CREATE TABLE `pendaftar2022_2023` (
  `kd_bulan` varchar(10) NOT NULL,
  `pendaftar` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar2022_2023`
--

INSERT INTO `pendaftar2022_2023` (`kd_bulan`, `pendaftar`) VALUES
('01', 19),
('02', 22),
('03', 25),
('04', 23),
('05', 14),
('06', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar2023_2024`
--

CREATE TABLE `pendaftar2023_2024` (
  `kd_bulan` varchar(10) NOT NULL,
  `pendaftar` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar2023_2024`
--

INSERT INTO `pendaftar2023_2024` (`kd_bulan`, `pendaftar`) VALUES
('01', 17),
('02', 28),
('03', 32),
('04', 26),
('05', 17),
('06', 15);

-- --------------------------------------------------------

--
-- Table structure for table `range2021_2022`
--

CREATE TABLE `range2021_2022` (
  `pendaftar` int(5) NOT NULL,
  `awal` int(5) NOT NULL,
  `akhir` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `range2021_2022`
--

INSERT INTO `range2021_2022` (`pendaftar`, `awal`, `akhir`) VALUES
(20, 1, 16),
(36, 17, 45),
(20, 46, 61),
(22, 62, 79),
(19, 80, 94),
(7, 95, 100);

-- --------------------------------------------------------

--
-- Table structure for table `range2022_2023`
--

CREATE TABLE `range2022_2023` (
  `pendaftar` int(5) NOT NULL,
  `awal` int(5) NOT NULL,
  `akhir` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `range2022_2023`
--

INSERT INTO `range2022_2023` (`pendaftar`, `awal`, `akhir`) VALUES
(19, 1, 17),
(22, 18, 36),
(25, 37, 58),
(23, 59, 78),
(14, 79, 90),
(12, 91, 100);

-- --------------------------------------------------------

--
-- Table structure for table `range2023_2024`
--

CREATE TABLE `range2023_2024` (
  `pendaftar` int(5) NOT NULL,
  `awal` int(5) NOT NULL,
  `akhir` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `range2023_2024`
--

INSERT INTO `range2023_2024` (`pendaftar`, `awal`, `akhir`) VALUES
(17, 1, 13),
(28, 14, 34),
(32, 35, 58),
(26, 59, 77),
(17, 78, 90),
(15, 91, 101);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acak2021_2022`
--
ALTER TABLE `acak2021_2022`
  ADD PRIMARY KEY (`kd_bulan`);

--
-- Indexes for table `acak2022_2023`
--
ALTER TABLE `acak2022_2023`
  ADD PRIMARY KEY (`kd_bulan`);

--
-- Indexes for table `acak2023_2024`
--
ALTER TABLE `acak2023_2024`
  ADD PRIMARY KEY (`kd_bulan`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`kd_bulan`);

--
-- Indexes for table `pendaftar2021_2022`
--
ALTER TABLE `pendaftar2021_2022`
  ADD PRIMARY KEY (`kd_bulan`);

--
-- Indexes for table `pendaftar2022_2023`
--
ALTER TABLE `pendaftar2022_2023`
  ADD PRIMARY KEY (`kd_bulan`);

--
-- Indexes for table `pendaftar2023_2024`
--
ALTER TABLE `pendaftar2023_2024`
  ADD PRIMARY KEY (`kd_bulan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
