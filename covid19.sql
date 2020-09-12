-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 11:29 AM
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
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `deteksi`
--

CREATE TABLE `deteksi` (
  `id` int(11) NOT NULL,
  `teks` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deteksi`
--

INSERT INTO `deteksi` (`id`, `teks`, `gambar`) VALUES
(1, 'Tubuh demam', 'demam.svg'),
(2, 'Sesak nafas', 'sesak.svg'),
(3, 'Kepala pusing', 'pusing.svg'),
(4, 'Batuk', 'batuk.svg'),
(5, 'Tenggorokan sakit', 'tenggorokan-sakit.svg'),
(6, 'Suhu melebihi 40°C', 'temperatur.svg');

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pesan` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `nama`, `alamat`, `phone`, `email`, `pesan`, `date_created`) VALUES
(7, 'Bagus', 'bayeman', '09897223134', 'bagus@gmail.com', 'Tetangga saya positif!!', '12 September 2020'),
(8, 'Edo', 'Bonagung', '03771839', 'edo@gmail.com', 'Tetangga saya mengalami gejala covid19', '12 September 2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deteksi`
--
ALTER TABLE `deteksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deteksi`
--
ALTER TABLE `deteksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
