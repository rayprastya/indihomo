-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 01:20 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indihome`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `nama_produk` varchar(250) CHARACTER SET latin1 NOT NULL,
  `keterangan` varchar(250) CHARACTER SET latin1 NOT NULL,
  `harga` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode_produk`, `nama_produk`, `keterangan`, `harga`) VALUES
(1, '1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `log_id` int(10) NOT NULL,
  `log_user` varchar(100) NOT NULL,
  `log_type` varchar(100) NOT NULL,
  `log_date` date NOT NULL,
  `log_remarks` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`log_id`, `log_user`, `log_type`, `log_date`, `log_remarks`) VALUES
(1, '', 'login', '2021-01-04', ' '),
(2, '', 'login', '2021-01-04', ' '),
(3, '', 'login', '2021-01-04', ' '),
(4, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(5, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(6, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(7, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(8, 'RayhanPrastya', 'login', '2021-01-04', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `nama_user` varchar(25) CHARACTER SET latin1 NOT NULL,
  `email_user` varchar(25) CHARACTER SET latin1 NOT NULL,
  `nomorhp_user` varchar(15) NOT NULL,
  `jk_user` enum('Pria','Wanita','','') CHARACTER SET latin1 NOT NULL,
  `password` varchar(250) CHARACTER SET latin1 NOT NULL,
  `role` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `foto`, `nama_user`, `email_user`, `nomorhp_user`, `jk_user`, `password`, `role`) VALUES
(1, 'rayhanyl', '', 'RayhanYudaLesmana', 'rayhanyuda13@gmailcom', '082112440715', 'Pria', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(2, 'rayhanp', NULL, 'RayhanPrastya', 'rayhanprastya@gmail.com', '082144556677', 'Pria', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
