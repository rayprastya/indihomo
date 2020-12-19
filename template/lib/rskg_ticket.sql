-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 03:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rskg_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bagian`
--

CREATE TABLE `tb_bagian` (
  `id_bg` int(11) NOT NULL,
  `id_kode` int(11) NOT NULL,
  `nama_bg` varchar(225) NOT NULL,
  `date_bg` date NOT NULL,
  `username_bg` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bg`, `id_kode`, `nama_bg`, `date_bg`, `username_bg`) VALUES
(1, 1, 'Bagian Administrasi & Umum', '2020-05-25', ''),
(2, 1, 'Bagian Pengembangan RS', '2020-05-25', NULL),
(3, 1, 'Bidang Pelayanan Medis', '2020-05-25', NULL),
(4, 1, 'Bidang Keperawatan', '2020-05-25', NULL),
(5, 2, 'Instalasi Gawat Darurat', '2020-05-25', NULL),
(6, 2, 'Instalasi Rawat Jalan', '2020-05-25', NULL),
(7, 2, 'Instalasi Rawat Inap', '2020-05-25', NULL),
(8, 2, 'Instalasi Bedah', '2020-05-25', NULL),
(9, 2, 'Instalasi Care Unit', '2020-05-25', NULL),
(10, 2, 'Instalasi Laboratorium', '2020-05-25', NULL),
(11, 2, 'Instalasi Radiologi', '2020-05-25', NULL),
(12, 2, 'Instalasi Check Up', '2020-05-25', NULL),
(13, 2, 'Instalasi Gizi', '2020-05-25', NULL),
(14, 2, 'Instalasi Farmasi', '2020-05-25', NULL),
(15, 2, 'Instalasi Rekam Medis', '2020-05-25', NULL),
(16, 2, 'Instalasi Pemeliharaan Sarana RS', '2020-05-25', NULL),
(17, 3, 'Komite Medis', '2020-05-25', NULL),
(18, 3, 'Komite Etik', '2020-05-25', NULL),
(19, 3, 'Komite Keperawatan & Nakes Lain', '2020-05-25', NULL),
(20, 3, 'Komite PMKP', '2020-05-25', NULL),
(21, 3, 'Komite Rekam Medis', '2020-05-25', NULL),
(22, 4, 'wdw', '2020-06-22', 'RSKG Ny. R.A. Habibie');

-- --------------------------------------------------------

--
-- Table structure for table `tb_device`
--

CREATE TABLE `tb_device` (
  `id_device` int(11) NOT NULL,
  `nama_device` varchar(225) NOT NULL,
  `jenis_device` varchar(225) NOT NULL,
  `date_device` date NOT NULL,
  `id_perangkat` int(11) NOT NULL,
  `merek` varchar(225) NOT NULL,
  `remark_device` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_device`
--

INSERT INTO `tb_device` (`id_device`, `nama_device`, `jenis_device`, `date_device`, `id_perangkat`, `merek`, `remark_device`) VALUES
(1, 'Mouse', 'Mouse', '2020-06-16', 1, 'Lenovo', 'QDqsQS'),
(2, 'Key Board', 'Perangkat', '2021-12-31', 1, 'Logitec', 'kljklj');

-- --------------------------------------------------------

--
-- Table structure for table `tb_his_ticket`
--

CREATE TABLE `tb_his_ticket` (
  `id_his` int(11) NOT NULL,
  `no_tick` varchar(225) NOT NULL,
  `req_by` varchar(225) NOT NULL,
  `assign_to` varchar(225) NOT NULL,
  `progress` varchar(225) NOT NULL,
  `date_progress` date NOT NULL,
  `subject` varchar(225) NOT NULL,
  `detail` text NOT NULL,
  `id_perangkat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_his_ticket`
--

INSERT INTO `tb_his_ticket` (`id_his`, `no_tick`, `req_by`, `assign_to`, `progress`, `date_progress`, `subject`, `detail`, `id_perangkat`) VALUES
(1, 'ITRSKGSW00000000002', 'User Testing', 'Muhammad Amran', 'New', '2020-06-24', 'Perbaikan', 'Masalah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kode`
--

CREATE TABLE `tb_kode` (
  `id_kode` int(11) NOT NULL,
  `nama_kode` varchar(225) NOT NULL,
  `date_kode` date NOT NULL,
  `username_kode` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kode`
--

INSERT INTO `tb_kode` (`id_kode`, `nama_kode`, `date_kode`, `username_kode`) VALUES
(1, 'Bagian/Bidang', '2020-05-25', NULL),
(2, 'Instalasi', '2020-05-25', NULL),
(3, 'Komite/Tim', '2020-05-25', NULL),
(4, 'aaaaa', '2020-06-22', 'RSKG Ny. R.A. Habibie');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kritiksaran`
--

CREATE TABLE `tb_kritiksaran` (
  `id_ks` int(11) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kritiksaran`
--

INSERT INTO `tb_kritiksaran` (`id_ks`, `kritik`, `saran`, `user_id`) VALUES
(1, 'wdwdwdwd', 'wdwdwdw', 3);

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
(1, 'admin', 'login', '2020-05-30', ' '),
(2, 'admin', 'login', '2020-05-30', ' '),
(3, 'rskg', 'login', '2020-05-30', ' '),
(4, 'admin', 'login', '2020-05-31', ' '),
(5, 'rskg', 'login', '2020-05-31', ' '),
(6, 'rskg', 'login', '2020-05-31', ' '),
(7, 'admin', 'login', '2020-05-31', ' '),
(8, 'admin', 'login', '2020-05-31', ' '),
(9, 'rskg', 'login', '2020-05-31', ' '),
(10, 'rskg', 'login', '2020-05-31', ' '),
(11, 'rskg', 'login', '2020-05-31', ' '),
(12, 'amranhakim9@gmail.com', 'login', '2020-06-17', ' '),
(13, 'amranrskg@gmail.com', 'login', '2020-06-18', ' '),
(14, 'amranhakim9@gmail.com', 'login', '2020-06-19', ' '),
(15, 'amranrskg@gmail.com', 'login', '2020-06-19', ' '),
(16, 'amranrskg@gmail.com', 'login', '2020-06-19', ' '),
(17, 'amranhakim9@gmail.com', 'login', '2020-06-19', ' '),
(18, 'amranhakim9@gmail.com', 'login', '2020-06-20', ' '),
(19, 'amranrskg@gmail.com', 'login', '2020-06-20', ' '),
(20, 'amranrskg@gmail.com', 'login', '2020-06-20', ' '),
(21, 'amranhakim9@gmail.com', 'login', '2020-06-20', ' '),
(22, 'rskgitbandung@gmail.com', 'login', '2020-06-22', ' '),
(23, 'amranrskg@gmail.com', 'login', '2020-06-23', ' '),
(24, 'rskgitbandung@gmail.com', 'login', '2020-06-23', ' '),
(25, 'amranhakim9@gmail.com', 'login', '2020-06-24', ' '),
(26, 'amranhakim9@gmail.com', 'login', '2020-06-26', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perangkat`
--

CREATE TABLE `tb_perangkat` (
  `id_perangkat` int(11) NOT NULL,
  `no_perangkat` varchar(225) NOT NULL,
  `barcode` varchar(225) DEFAULT NULL,
  `kode_unit` varchar(225) NOT NULL,
  `nama_perangkat` varchar(225) NOT NULL,
  `sn` varchar(225) NOT NULL,
  `ip_address` varchar(225) DEFAULT NULL,
  `date_beli` date NOT NULL,
  `os` varchar(225) NOT NULL,
  `merek` varchar(225) NOT NULL,
  `RAM` varchar(225) NOT NULL,
  `remark` text,
  `username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perangkat`
--

INSERT INTO `tb_perangkat` (`id_perangkat`, `no_perangkat`, `barcode`, `kode_unit`, `nama_perangkat`, `sn`, `ip_address`, `date_beli`, `os`, `merek`, `RAM`, `remark`, `username`) VALUES
(1, '001', NULL, 'MEDREC', 'PC', '00090989898', '192.168.55.166', '2020-06-21', 'Windows 10', 'Lenovo', '8GB', 'Detail', 'rskgitbandung@gmail.com'),
(2, '002', NULL, 'MEDREC', 'PC', '000909898981', '192.168.55.168', '2019-12-31', 'Ubuntu 18.04 LTS', 'Lenovo', '8GB', '', 'rskgitbandung@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_singkatan`
--

CREATE TABLE `tb_singkatan` (
  `id_sing` int(11) NOT NULL,
  `id_bg` int(11) NOT NULL,
  `kode_sing` varchar(225) NOT NULL,
  `date_sing` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_singkatan`
--

INSERT INTO `tb_singkatan` (`id_sing`, `id_bg`, `kode_sing`, `date_sing`) VALUES
(1, 1, 'ADM', '2020-05-25'),
(2, 2, 'BPRS', '2020-05-25'),
(3, 3, 'YANMED', '2020-05-25'),
(4, 4, 'KEP', '2020-05-25'),
(5, 5, 'IGD', '2020-05-25'),
(6, 6, 'IRJ', '2020-05-25'),
(7, 7, 'IRNA', '2020-05-25'),
(8, 8, 'OKE', '2020-05-25'),
(9, 9, 'ICU', '2020-05-25'),
(10, 10, 'LAB', '2020-05-25'),
(11, 11, 'RAD', '2020-05-25'),
(12, 12, 'MCU', '2020-05-25'),
(13, 13, 'GIZI', '2020-05-25'),
(14, 14, 'FARM', '2020-05-25'),
(15, 15, 'IRM', '2020-05-25'),
(16, 16, 'IPSRS', '2020-05-25'),
(17, 17, 'KOMED', '2020-05-25'),
(18, 18, 'ETIK', '2020-05-25'),
(19, 19, 'KKNL', '2020-05-25'),
(20, 20, 'PMKP', '2020-05-25'),
(21, 21, 'KRM', '2020-05-25'),
(22, 22, 'ADMNAawd', '2020-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ticket`
--

CREATE TABLE `tb_ticket` (
  `id_tick` int(11) NOT NULL,
  `no_tick` varchar(255) NOT NULL,
  `req_date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `subject` varchar(500) NOT NULL,
  `detail` text,
  `url` varchar(255) DEFAULT NULL,
  `priority` varchar(50) NOT NULL,
  `trouble` varchar(50) NOT NULL,
  `req_by` varchar(255) NOT NULL,
  `assign_to` varchar(255) NOT NULL,
  `admin_assign` varchar(225) NOT NULL,
  `progress` varchar(50) NOT NULL,
  `date_progress` datetime DEFAULT NULL,
  `progress_by` varchar(255) DEFAULT NULL,
  `proof` varchar(255) DEFAULT NULL,
  `remark_it` text,
  `remark_file` text,
  `email_user` varchar(225) NOT NULL,
  `summary` varchar(225) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `id_perangkat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ticket`
--

INSERT INTO `tb_ticket` (`id_tick`, `no_tick`, `req_date`, `due_date`, `subject`, `detail`, `url`, `priority`, `trouble`, `req_by`, `assign_to`, `admin_assign`, `progress`, `date_progress`, `progress_by`, `proof`, `remark_it`, `remark_file`, `email_user`, `summary`, `unit`, `id_perangkat`) VALUES
(1, 'ITRSKGSW00000001001', '2020-06-13 10:26:00', '2020-06-20 16:40:00', 'Masalah Hardware', 'z', '', 'High', 'Software', 'User Testing', 'Muhammad Amran', 'amranrskg@gmail.com', 'Done', '2020-06-23 11:47:42', 'Muhammad Amran', 'Aplikasi Helpdesk untuk Pencatatan Masalah.pdf', 'juhbjbj', 'Capture.PNG', 'amranhakim9@gmail.com', 'Perbaikan', 'Bagian Administrasi & Umum', 0),
(2, 'ITRSKGSW00000000002', '2020-06-24 18:26:17', '2020-06-24 18:30:00', 'Masalah Software', 'Masalah', 'http://127.0.0.1/app-rskg/Repository-APP-Hospital/app-iticket/user_create_ticket.php?ntf=0', 'High', 'Software', 'User Testing', 'Muhammad Amran', 'amranrskg@gmail.com', 'New', NULL, NULL, '1.PNG', NULL, NULL, 'amranhakim9@gmail.com', 'Perbaikan', 'Bagian Administrasi & Umum', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` enum('superadmin','it_software','it_hardware','printer_task','user') NOT NULL,
  `full_name` varchar(225) NOT NULL,
  `foto` varchar(225) DEFAULT NULL,
  `jenis_kelamin` varchar(225) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `date_user` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `user_role`, `full_name`, `foto`, `jenis_kelamin`, `email`, `alamat`, `no_hp`, `jabatan`, `unit`, `date_user`) VALUES
(1, 'amranrskg@gmail.com', '123123', 'it_software', 'Muhammad Amran', 'comment_1.png', 'Pria', 'amranrskg@gmail.com', 'Bandung', '08780230909', 'Software Engineer', 'Bagian Administrasi & Umum', '2020-05-30'),
(2, 'rskgitbandung@gmail.com', '123123', 'superadmin', 'RSKG Ny. R.A. Habibie', 'header.png', 'Pria', 'rskgitbandung@gmail.com', 'Jl. Sekeloa, Kota Bandung, Jawa Barat', '098980', 'IT', 'Bagian Administrasi & Umum', '2020-05-30'),
(3, 'amranhakim9@gmail.com', 'user123123', 'user', 'User Testing', '1043946gd baru.png', 'Pria', 'amranhakim9@gmail.com', 'Bandung', '09097990898', 'IT', 'Bagian Administrasi & Umum', '2020-06-03'),
(4, 'eurapermanarskg@gmail.com', 'admin123123', 'printer_task', 'Yura', '', 'Pria', 'eurapermanarskg@gmail.com', '-', '08813077580', '-', 'Bagian Administrasi & Umum', '2020-06-03'),
(5, '6436a.40261@gmail.com', 'admin123123', 'it_hardware', 'Ari Rifan', '', 'Pria', '6436a.40261@gmail.com', '-', '08988548844', 'IT', 'Bagian Administrasi & Umum', '2020-06-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bagian`
--
ALTER TABLE `tb_bagian`
  ADD PRIMARY KEY (`id_bg`);

--
-- Indexes for table `tb_device`
--
ALTER TABLE `tb_device`
  ADD PRIMARY KEY (`id_device`);

--
-- Indexes for table `tb_his_ticket`
--
ALTER TABLE `tb_his_ticket`
  ADD PRIMARY KEY (`id_his`);

--
-- Indexes for table `tb_kode`
--
ALTER TABLE `tb_kode`
  ADD PRIMARY KEY (`id_kode`);

--
-- Indexes for table `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  ADD PRIMARY KEY (`id_ks`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tb_perangkat`
--
ALTER TABLE `tb_perangkat`
  ADD PRIMARY KEY (`id_perangkat`);

--
-- Indexes for table `tb_singkatan`
--
ALTER TABLE `tb_singkatan`
  ADD PRIMARY KEY (`id_sing`);

--
-- Indexes for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  ADD PRIMARY KEY (`id_tick`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bagian`
--
ALTER TABLE `tb_bagian`
  MODIFY `id_bg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_device`
--
ALTER TABLE `tb_device`
  MODIFY `id_device` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_his_ticket`
--
ALTER TABLE `tb_his_ticket`
  MODIFY `id_his` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kode`
--
ALTER TABLE `tb_kode`
  MODIFY `id_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_perangkat`
--
ALTER TABLE `tb_perangkat`
  MODIFY `id_perangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_singkatan`
--
ALTER TABLE `tb_singkatan`
  MODIFY `id_sing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  MODIFY `id_tick` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
