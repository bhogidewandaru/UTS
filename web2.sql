-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Apr 2020 pada 15.58
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `corona`
--

CREATE TABLE `corona` (
  `id` int(11) NOT NULL,
  `wilayah` varchar(10) NOT NULL,
  `positif` varchar(40) NOT NULL,
  `dirawat` varchar(40) NOT NULL,
  `sembuh` varchar(40) NOT NULL,
  `meninggal` varchar(40) NOT NULL,
  `operator` varchar(40) NOT NULL,
  `nim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `corona`
--

INSERT INTO `corona` (`id`, `wilayah`, `positif`, `dirawat`, `sembuh`, `meninggal`, `operator`, `nim`) VALUES
(5, 'DKI Jakart', '2902', '1769', '206', '257', 'Bhogi Dewandaru', '2016142124');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corona`
--
ALTER TABLE `corona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corona`
--
ALTER TABLE `corona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
