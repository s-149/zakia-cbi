-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Agu 2021 pada 05.40
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpembelian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbarang`
--

CREATE TABLE `tbarang` (
  `Kd_barang` varchar(15) NOT NULL,
  `Nama_barang` varchar(20) DEFAULT NULL,
  `Jumlah_barang` varchar(15) DEFAULT NULL,
  `Satuan` varchar(6) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbarang`
--

INSERT INTO `tbarang` (`Kd_barang`, `Nama_barang`, `Jumlah_barang`, `Satuan`, `Harga`) VALUES
('A00002', 'buku', '75', 'set', 13000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `level` enum('admin','user') COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin.jpg'),
(2, 'user', 'user', 'user', 'user', '24_Aug_2021_07_31_17_user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpembeliandetail`
--

CREATE TABLE `tpembeliandetail` (
  `No` int(11) NOT NULL,
  `No_faktur` varchar(15) DEFAULT NULL,
  `Kd_barang` varchar(15) DEFAULT NULL,
  `Jumlah_barang` int(11) DEFAULT NULL,
  `Jumlah_bayar` int(11) DEFAULT NULL,
  `PPN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tpembeliandetail`
--

INSERT INTO `tpembeliandetail` (`No`, `No_faktur`, `Kd_barang`, `Jumlah_barang`, `Jumlah_bayar`, `PPN`) VALUES
(2, 'qw121', 'A00002', 2, 2000, 2860),
(3, 'qw121', 'A00002', 10, 30000, 14300),
(4, 'qw121', 'A00002', 10, 30000, 14300),
(5, 'qw121', 'A00002', 5, 65000, 7150);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpembelianmaster`
--

CREATE TABLE `tpembelianmaster` (
  `No_faktur` varchar(15) NOT NULL,
  `Kd_supplier` varchar(15) NOT NULL,
  `Tgl_beli` date DEFAULT NULL,
  `Total_beli` int(11) DEFAULT NULL,
  `Total_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tpembelianmaster`
--

INSERT INTO `tpembelianmaster` (`No_faktur`, `Kd_supplier`, `Tgl_beli`, `Total_beli`, `Total_bayar`) VALUES
('qw121', 'A123', '2021-08-24', 200000, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsupplier`
--

CREATE TABLE `tsupplier` (
  `Kd_supplier` varchar(15) NOT NULL,
  `Nama_supplier` varchar(20) DEFAULT NULL,
  `Alamat` varchar(25) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Tlp` varchar(14) DEFAULT NULL,
  `Website` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tsupplier`
--

INSERT INTO `tsupplier` (`Kd_supplier`, `Nama_supplier`, `Alamat`, `Email`, `Tlp`, `Website`) VALUES
('A123', 'sabar', 'BOJONG KOKOSAN', '123', '123456', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbarang`
--
ALTER TABLE `tbarang`
  ADD PRIMARY KEY (`Kd_barang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpembeliandetail`
--
ALTER TABLE `tpembeliandetail`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tpembelianmaster`
--
ALTER TABLE `tpembelianmaster`
  ADD PRIMARY KEY (`No_faktur`,`Kd_supplier`);

--
-- Indexes for table `tsupplier`
--
ALTER TABLE `tsupplier`
  ADD PRIMARY KEY (`Kd_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tpembeliandetail`
--
ALTER TABLE `tpembeliandetail`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
