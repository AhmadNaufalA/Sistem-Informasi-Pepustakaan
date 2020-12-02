-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 09:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `norak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`judul`, `penerbit`, `kode`, `norak`) VALUES
('buku1', 'penerbit1', '001', 1),
('buku2', 'penerbit2', '002', 1),
('buku3', 'penerbit3', '003', 1),
('buku4', 'penerbit4', '004', 1),
('buku5', 'penerbit5', '005', 1),
('buku6', 'penerbit6', '006', 2),
('buku7', 'penerbit7', '007', 2),
('buku8', 'penerbit8', '008', 2),
('buku9', 'penerbit9', '009', 2),
('buku10', 'penerbit10', '010', 2),
('dska', 'dosen', '032', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `norak` int(11) NOT NULL,
  `nomrak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`norak`, `nomrak`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rak1`
--

CREATE TABLE `rak1` (
  `judul` varchar(50) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `norak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rak2`
--

CREATE TABLE `rak2` (
  `judul` varchar(50) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `norak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nim` int(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `kode`, `nim`, `alamat`, `mobile`) VALUES
('user1', '001', 1, 'tuagapat', '0812'),
('user2', '002', 2, 'depan', '08213'),
('user5', '005', 5, 'belakangan', '081231'),
('nopal', '033', 32, 'tanjung', 'avanzaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`norak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
