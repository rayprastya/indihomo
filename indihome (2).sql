-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2021 pada 23.13
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `kuota` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `layanansatu` varchar(25) NOT NULL,
  `layanandua` varchar(25) NOT NULL,
  `layanantiga` varchar(25) NOT NULL,
  `perangkat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `kuota`, `status`, `layanansatu`, `layanandua`, `layanantiga`, `perangkat`) VALUES
(1, '200 Mbps', 'Dual Play', 'Internet', 'TV', '', '1-3'),
(2, '300 Mbps', 'Triple Play', 'Internet', 'TV', 'Telepon', '3-5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(50) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'Apa yang di jual disini?', 'Kita menjual berbagai layanan yang membantu customer untuk hidup lebih baik lagi '),
(2, 'Apakah saya boleh daftar lomba balap karung?', 'Maaf ya kak kayanya kakak salah lapak deh :), kecuali kalau kakak mau daftar di website kita sih bisa banget.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketersediaan`
--

CREATE TABLE `ketersediaan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ketersediaan`
--

INSERT INTO `ketersediaan` (`id`, `id_user`, `alamat`, `email`, `jawaban`) VALUES
(1, 2, 'asdsad', 'rayhan.prastya@gmail.com', 'asd'),
(2, 2, 'asdasd', 'rayhan.prastya@gmail.com', 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `my_indihome`
--

CREATE TABLE `my_indihome` (
  `id` int(11) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `isi` varchar(25) NOT NULL,
  `judul` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `id` int(11) NOT NULL,
  `invoice` int(11) DEFAULT NULL,
  `datecreate` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orderan`
--

INSERT INTO `orderan` (`id`, `invoice`, `datecreate`, `id_user`, `id_barang`) VALUES
(1, 68365, '2021-01-05', 1, 5),
(2, 90998, '2021-01-05', 1, 5),
(3, 28432, '2021-01-05', 2, 5),
(4, 97030, '2021-01-05', 2, 5),
(5, 16921, '2021-01-05', 2, 5),
(6, 73373, '2021-01-05', 2, 5),
(7, 15713, '2021-01-05', 2, 5),
(8, 77862, '2021-01-05', 2, 5),
(9, 85755, '2021-01-05', 2, 2),
(10, 70701, '2021-01-05', 2, 2),
(11, 41768, '2021-01-05', 2, 5),
(12, 89425, '2021-01-05', 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderlog`
--

CREATE TABLE `orderlog` (
  `id` int(11) NOT NULL,
  `produkid` int(11) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `harga` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(25) NOT NULL,
  `logo_perusahaan` varchar(25) NOT NULL,
  `alamat_perusahaan` varchar(25) NOT NULL,
  `nomor_telp` varchar(25) NOT NULL,
  `email_perusahaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode_produk` int(11) DEFAULT NULL,
  `nama_produk` varchar(250) CHARACTER SET latin1 NOT NULL,
  `keterangan` varchar(250) CHARACTER SET latin1 NOT NULL,
  `harga` varchar(250) CHARACTER SET latin1 NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `internet` varchar(25) NOT NULL,
  `tv` int(11) NOT NULL,
  `paket` enum('Biasa','Promo','Lainnya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode_produk`, `nama_produk`, `keterangan`, `harga`, `telepon`, `internet`, `tv`, `paket`) VALUES
(1, 123123, 'wefwa', 'awfeq', '120000', '', '', 0, 'Biasa'),
(2, 123123, 'wefwa', 'awfe', '120000', '', '', 0, 'Biasa'),
(3, 123123, 'wefwa', 'awfe', '120000', '', '', 0, 'Biasa'),
(4, 123123, 'Bensin', 'ANANA', '150000', '', '', 0, 'Biasa'),
(5, 11111, 'Sendal', 'Odading Mang Oleh', '15000', '300', '20', 1, 'Biasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_indihome`
--

CREATE TABLE `tb_indihome` (
  `id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `stat` enum('aktif','tidak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_indihome`
--

INSERT INTO `tb_indihome` (`id`, `judul`, `isi`, `gambar`, `stat`) VALUES
(1, 'Indihome', 'Selamat Datang Di Website Indihome', '', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log`
--

CREATE TABLE `tb_log` (
  `log_id` int(10) NOT NULL,
  `log_user` varchar(100) NOT NULL,
  `log_type` varchar(100) NOT NULL,
  `log_date` date NOT NULL,
  `log_remarks` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_log`
--

INSERT INTO `tb_log` (`log_id`, `log_user`, `log_type`, `log_date`, `log_remarks`) VALUES
(1, '', 'login', '2021-01-04', ' '),
(2, '', 'login', '2021-01-04', ' '),
(3, '', 'login', '2021-01-04', ' '),
(4, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(5, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(6, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(7, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(8, 'RayhanPrastya', 'login', '2021-01-04', ' '),
(9, 'RayhanPrastya', 'login', '2021-01-04', ' '),
(10, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(11, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(12, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(13, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(14, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(15, 'RayhanYudaLesmana', 'login', '2021-01-04', ' '),
(16, 'RayhanPrastya', 'login', '2021-01-04', ' '),
(17, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(18, 'RayhanYudaLesmana', 'login', '2021-01-05', ' '),
(19, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(20, 'RayhanYudaLesmana', 'login', '2021-01-05', ' '),
(21, 'ray', 'login', '2021-01-05', ' '),
(22, 'yunusss', 'login', '2021-01-05', ' '),
(23, 'RayhanYudaLesmana', 'login', '2021-01-05', ' '),
(24, 'RayhanYudaLesmana', 'login', '2021-01-05', ' '),
(25, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(26, 'RayhanYudaLesmana', 'login', '2021-01-05', ' '),
(27, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(28, 'RayhanYudaLesmana', 'login', '2021-01-05', ' '),
(29, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(30, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(31, 'RayhanYudaLesmana', 'login', '2021-01-05', ' '),
(32, 'RayhanYudaLesmana', 'login', '2021-01-05', ' '),
(33, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(34, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(35, 'RayhanYudaLesmana', 'login', '2021-01-05', ' '),
(36, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(37, 'RayhanPrastya', 'login', '2021-01-05', ' '),
(38, 'RayhanYudaLesmana', 'login', '2021-01-05', ' ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tv_chn`
--

CREATE TABLE `tv_chn` (
  `id` int(11) NOT NULL,
  `channel` varchar(25) NOT NULL,
  `paket_channel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tv_chn`
--

INSERT INTO `tv_chn` (`id`, `channel`, `paket_channel`) VALUES
(1, 'indosiar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tv_paket`
--

CREATE TABLE `tv_paket` (
  `id` int(11) NOT NULL,
  `id_tvpaket` int(11) NOT NULL,
  `nama_tvpaket` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tv_paket`
--

INSERT INTO `tv_paket` (`id`, `id_tvpaket`, `nama_tvpaket`) VALUES
(1, 1, 'Lokal'),
(2, 0, 'Kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `foto`, `nama_user`, `email_user`, `nomorhp_user`, `jk_user`, `password`, `role`) VALUES
(1, 'rayhanyl', '', 'RayhanYudaLesmana', 'rayhanyuda13@gmailcom', '082112440715', 'Pria', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(2, 'rayhanp', NULL, 'RayhanPrastya', 'rayhanprastya@gmail.com', '082144556677', 'Pria', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(3, 'cika', NULL, 'Andi', 'andiuwawaw@gmail.com', '08212121212', 'Wanita', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(4, 'ssss', NULL, 'asaa', 'q@gmail.com', '098171', 'Pria', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(5, 'ra', NULL, 'ray', 'r@yahoo.com', '121212', 'Pria', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(6, 'yunus', NULL, 'yunusss', 'yunus@gmail.com', '010101', 'Pria', 'c4ca4238a0b923820dcc509a6f75849b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ketersediaan`
--
ALTER TABLE `ketersediaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `my_indihome`
--
ALTER TABLE `my_indihome`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orderlog`
--
ALTER TABLE `orderlog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_indihome`
--
ALTER TABLE `tb_indihome`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `tv_chn`
--
ALTER TABLE `tv_chn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tv_paket`
--
ALTER TABLE `tv_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ketersediaan`
--
ALTER TABLE `ketersediaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `my_indihome`
--
ALTER TABLE `my_indihome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `orderlog`
--
ALTER TABLE `orderlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_indihome`
--
ALTER TABLE `tb_indihome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tv_chn`
--
ALTER TABLE `tv_chn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tv_paket`
--
ALTER TABLE `tv_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
