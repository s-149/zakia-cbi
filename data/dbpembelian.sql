-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2021 pada 08.36
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
-- Database: `dbpembelian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbarang`
--

CREATE TABLE `tbarang` (
  `Kd_barang` varchar(15) NOT NULL,
  `Nama_barang` varchar(20) DEFAULT NULL,
  `Jenis_barang` varchar(15) DEFAULT NULL,
  `Satuan` varchar(6) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpembeliandetail`
--

CREATE TABLE `tpembeliandetail` (
  `No` int(11) NOT NULL,
  `Jumlah_barang` int(11) DEFAULT NULL,
  `Jumlah_bayar` int(11) DEFAULT NULL,
  `No_faktur` varchar(15) DEFAULT NULL,
  `Kd_barang` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbarang`
--
ALTER TABLE `tbarang`
  ADD PRIMARY KEY (`Kd_barang`);

--
-- Indeks untuk tabel `tpembeliandetail`
--
ALTER TABLE `tpembeliandetail`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tpembelianmaster`
--
ALTER TABLE `tpembelianmaster`
  ADD PRIMARY KEY (`No_faktur`,`Kd_supplier`);

--
-- Indeks untuk tabel `tsupplier`
--
ALTER TABLE `tsupplier`
  ADD PRIMARY KEY (`Kd_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
