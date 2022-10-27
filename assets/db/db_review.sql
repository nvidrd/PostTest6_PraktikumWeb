-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 05:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitept`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_review`
--

CREATE TABLE `db_review` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `tempat_beli` varchar(50) NOT NULL,
  `submit_date` date NOT NULL,
  `rate` int(5) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_review`
--

INSERT INTO `db_review` (`id`, `nama`, `nama_produk`, `tempat_beli`, `submit_date`, `rate`, `konten`, `gambar`) VALUES
(8, 'Nopenul ajah', 'Skinaqua z', 'Toko paedi', '0000-00-00', 3, 'Kerenn', 'Nopenul ajah.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_review`
--
ALTER TABLE `db_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_review`
--
ALTER TABLE `db_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
