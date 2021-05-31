-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 09:26 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_software`
--

CREATE TABLE `tb_software` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `industri` varchar(250) NOT NULL,
  `pendiri` varchar(250) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_software`
--

INSERT INTO `tb_software` (`id`, `nama`, `industri`, `pendiri`, `tahun`) VALUES
(1, 'Facebook ', 'Media Sosial', 'Mark Zuckerberg', 2004),
(2, 'WhatsApp', 'Pesan Instan', 'Jan Koum dan Brian Acton', 2009),
(3, 'Google', 'Internet', 'Larry Page dan Sergey Brin', 1998),
(4, 'DuckDuckGo', 'Internet', 'Gabriel Weinberg', 2006);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_software`
--
ALTER TABLE `tb_software`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_software`
--
ALTER TABLE `tb_software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
