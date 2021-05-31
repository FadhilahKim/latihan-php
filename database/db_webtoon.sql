-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 09:27 AM
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
-- Database: `db_webtoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_webtoon`
--

CREATE TABLE `tb_webtoon` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `genre` varchar(15) NOT NULL,
  `author` varchar(250) NOT NULL,
  `platform` varchar(20) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_webtoon`
--

INSERT INTO `tb_webtoon` (`id`, `judul`, `genre`, `author`, `platform`, `gambar`) VALUES
(1, 'Extraordinary You', 'Drama', 'Muryu', 'Kakaopage', 'haru.png'),
(2, 'Nurul dan Numair', 'Slice of life', 'Fatharani Yasmin', 'Line Webtoon', 'numair.png'),
(12, 'Flawless', 'Romantis', 'Shinshinhye', 'Line Webtoon', 'flawless.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_webtoon`
--
ALTER TABLE `tb_webtoon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_webtoon`
--
ALTER TABLE `tb_webtoon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
