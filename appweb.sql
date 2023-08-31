-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230516.e7d1ecbeae
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 04:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(50) DEFAULT NULL,
  `id_penerbit` int(11) DEFAULT NULL,
  `nama_penerbit` varchar(50) DEFAULT NULL,
  `buku` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_penulis`, `nama_penulis`, `id_penerbit`, `nama_penerbit`, `buku`, `link`) VALUES
(1, 'P. H. Solomon', 1, 'Gramedia', 'The Black Bag', 'https://manybooks.net/books/get/261071/6'),
(2, 'Kirk Alex', 2, 'Vorgizen', 'Paycheck to Paycheck', 'https://manybooks.net/books/get/376431/6'),
(3, 'Summer Cooper', 4, 'Frenklin', 'Dark Desire', 'https://manybooks.net/books/get/260981/6'),
(4, 'May Freighter', 2, 'Vorgizen', 'Russian Roulette', 'https://manybooks.net/books/get/376651/6');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `nama`, `username`, `email`, `password`) VALUES
(2, 'Al Hilaluddin', 'Exoream', 'shiigetsu1@gmail.com', 'kazekage12'),
(3, 'Albert', 'albergagah123', 'albert@gmail.com', '123456asd'),
(4, 'Budi Raharjo', 'budi123', 'budi@gmail.com', '123456asd'),
(5, 'John Doe', 'john0203', 'johndoe@gmail.com', 'haloha'),
(6, 'Tamrin', 'tamrin021', 'tamrinjago@gmail.com', 'ayamkrispy'),
(7, 'Agus', 'user', 'user@gmail.com', 'user'),
(8, 'Gege', 'gege12', 'gege@gmail.com', '123456asd'),
(9, 'dsa', '123', '123@gmial.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `kota`) VALUES
(1, 'Gramedia', 'Makassar'),
(2, 'Vorgizen', 'Tokyo'),
(4, 'Frenklin', 'London');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(50) DEFAULT NULL,
  `nama_pena` varchar(50) DEFAULT NULL,
  `buku` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `nama_pena`, `buku`) VALUES
(1, 'May Freighter', 'May', 'Russian Roulette'),
(2, 'Kirk Alex', 'Rets', 'Paycheck to Paycheck'),
(3, 'P. H. Solomon', 'PH', 'The Black Bag'),
(4, 'Gerald Knight', 'Knight', 'The Legend Is Born'),
(5, 'Summer Cooper', 'Scoop', 'Dark Desire');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_penulis`),
  ADD KEY `id_penerbit` (`id_penerbit`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`),
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
