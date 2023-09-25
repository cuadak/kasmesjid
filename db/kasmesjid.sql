-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 02:57 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasmesjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `agus`
--

CREATE TABLE `agus` (
  `id` int(31) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agus`
--

INSERT INTO `agus` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-08-01', '', '100000', '50000', '50000'),
(2, '2020-08-02', '', '150000', '200000', '-50000'),
(3, '2020-08-03', '', '300000', '0', '300000'),
(4, '2020-08-04', '', '0', '50000', '-50000'),
(5, '2020-08-05', '', '80000', '0', '80000'),
(6, '2020-08-06', '', '120000', '40000', '80000'),
(7, '2020-08-07', '', '170000', '0', '170000'),
(8, '2020-08-08', '', '0', '40000', '-40000');

-- --------------------------------------------------------

--
-- Table structure for table `apr`
--

CREATE TABLE `apr` (
  `id` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apr`
--

INSERT INTO `apr` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-04-01', '', '200000', '0', '200000'),
(2, '2020-04-02', '', '0', '30000', '-30000');

-- --------------------------------------------------------

--
-- Table structure for table `dese`
--

CREATE TABLE `dese` (
  `id` int(31) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dese`
--

INSERT INTO `dese` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-12-01', '', '400000', '0', '400000'),
(2, '2020-12-02', '', '450000', '60000', '390000');

-- --------------------------------------------------------

--
-- Table structure for table `feb`
--

CREATE TABLE `feb` (
  `id` int(29) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feb`
--

INSERT INTO `feb` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-02-01', '', '700000', '0', '700000'),
(2, '2020-02-02', '', '0', '800000', '-800000');

-- --------------------------------------------------------

--
-- Table structure for table `jan`
--

CREATE TABLE `jan` (
  `id` int(31) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jan`
--

INSERT INTO `jan` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-01-01', '', '500000', '0', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `jul`
--

CREATE TABLE `jul` (
  `id` int(31) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jul`
--

INSERT INTO `jul` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-07-01', '', '900000', '0', '900000'),
(2, '2020-07-02', '', '0', '200000', '-200000');

-- --------------------------------------------------------

--
-- Table structure for table `jun`
--

CREATE TABLE `jun` (
  `id` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jun`
--

INSERT INTO `jun` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-06-01', '', '600000', '150000', '450000'),
(2, '2020-05-02', '', '900000', '120000', '780000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mar`
--

CREATE TABLE `mar` (
  `id` int(31) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mar`
--

INSERT INTO `mar` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-03-01', '', '285000', '20000', '265000'),
(2, '2020-03-02', '', '400000', '500000', '-100000');

-- --------------------------------------------------------

--
-- Table structure for table `mei`
--

CREATE TABLE `mei` (
  `id` int(31) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mei`
--

INSERT INTO `mei` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-05-01', '', '625000', '35000', '590000'),
(2, '2020-05-02', '', '800000', '0', '800000');

-- --------------------------------------------------------

--
-- Table structure for table `nov`
--

CREATE TABLE `nov` (
  `id` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nov`
--

INSERT INTO `nov` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-11-01', '', '425500', '80000', '345500'),
(2, '2020-11-02', '', '50000', '0', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `okt`
--

CREATE TABLE `okt` (
  `id` int(31) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `okt`
--

INSERT INTO `okt` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-10-01', '', '300000', '425000', '-125000'),
(2, '2020-10-02', '', '50000', '100000', '-50000');

-- --------------------------------------------------------

--
-- Table structure for table `sep`
--

CREATE TABLE `sep` (
  `id` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `masuk` decimal(15,0) NOT NULL,
  `keluar` decimal(15,0) NOT NULL,
  `saldo` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sep`
--

INSERT INTO `sep` (`id`, `tanggal`, `uraian`, `masuk`, `keluar`, `saldo`) VALUES
(1, '2020-09-01', '', '78000', '50000', '28000'),
(2, '2020-09-02', '', '90000', '36000', '54000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agus`
--
ALTER TABLE `agus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apr`
--
ALTER TABLE `apr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dese`
--
ALTER TABLE `dese`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feb`
--
ALTER TABLE `feb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jan`
--
ALTER TABLE `jan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jul`
--
ALTER TABLE `jul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jun`
--
ALTER TABLE `jun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mar`
--
ALTER TABLE `mar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mei`
--
ALTER TABLE `mei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nov`
--
ALTER TABLE `nov`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `okt`
--
ALTER TABLE `okt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sep`
--
ALTER TABLE `sep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agus`
--
ALTER TABLE `agus`
  MODIFY `id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `apr`
--
ALTER TABLE `apr`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dese`
--
ALTER TABLE `dese`
  MODIFY `id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feb`
--
ALTER TABLE `feb`
  MODIFY `id` int(29) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jan`
--
ALTER TABLE `jan`
  MODIFY `id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jul`
--
ALTER TABLE `jul`
  MODIFY `id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jun`
--
ALTER TABLE `jun`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mar`
--
ALTER TABLE `mar`
  MODIFY `id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mei`
--
ALTER TABLE `mei`
  MODIFY `id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nov`
--
ALTER TABLE `nov`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `okt`
--
ALTER TABLE `okt`
  MODIFY `id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sep`
--
ALTER TABLE `sep`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
