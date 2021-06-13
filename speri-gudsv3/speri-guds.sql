-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 10:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speri-guds`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `namaSparepart` varchar(50) NOT NULL,
  `kodeSparepart` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`uid`, `username`, `password`, `nama`, `alamat`, `telp`, `foto`) VALUES
(3, 'dendyandra', 'poi', 'Dendy Andra', 'Bandung', '08457389264', ''),
(5, 'agus', 'qwerty', 'Agus W', 'jakarta', '', ''),
(6, 'admin', '123', 'Admin', 'Jl. Tol Timur VII Blok E22', '084573892645', '');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `aktivitas` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `nik`, `aktivitas`, `tanggal`) VALUES
(1, '111', 'LOGIN', '2021-03-24'),
(2, '111', 'LOGOUT', '2021-03-24'),
(3, '113', 'LOGIN', '2021-03-25'),
(4, '113', 'CREATE DATA SPAREPART', '2021-03-25'),
(5, '115', 'EDIT SPAREPART 001', '2021-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `passwords` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`nik`, `nama`, `passwords`) VALUES
('121', 'DENDY ANDRA', 'ayaya'),
('122', 'AHMAD DILUC', 'ilovediluc'),
('123', 'QIQI ISTIQOMAH', 'qiqinana'),
('124', 'EULA NASUTION', 'eulaterms'),
('125', 'ISHIGAMI HOTARU ', 'hotachan');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `kodeBayar` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `manufaktur` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`kode`, `nama`, `jenis`, `manufaktur`, `jumlah`, `harga`, `foto`) VALUES
('1000', 'Ayaka Spion', 'Spion', 'Inazuma (Persero)', 2, 80500, 'test.jpg'),
('121', 'VELG WGS', 'VELG', 'BRIDGESTONE', 60, 10000, 'test.jpg'),
('122', 'RANCOUR VELG', 'VELG', 'MONDSTAD TBK', 39, 438000, 'test.jpg'),
('131', 'YAMALUBE', 'OLI MESIN', 'HONDA', 11, 900000, 'test.jpg'),
('141', 'YANFEI SHOCKBREAKER', 'SHOCKBREAKER', 'YANFEI', 67, 578000, 'test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff_gudang`
--

CREATE TABLE `staff_gudang` (
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `passwords` varchar(50) DEFAULT NULL,
  `hak_akses` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_gudang`
--

INSERT INTO `staff_gudang` (`nik`, `nama`, `passwords`, `hak_akses`) VALUES
('111', 'AQSHAL RAFLI', 'aqsol', 1),
('112', 'CLEMENT', 'clement11', 0),
('113', 'RUDI PECONG', 'rucong123', 0),
('114', 'KLEE SETIAWATI', 'poienak', 1),
('115', 'JEAN ARWANI', 'jeandka445', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `staff_gudang`
--
ALTER TABLE `staff_gudang`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
