-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2022 pada 04.31
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_durkosjek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bike`
--

CREATE TABLE `tb_bike` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no` char(15) NOT NULL,
  `alamat_jemput` varchar(500) NOT NULL,
  `alamat_tujuan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_food`
--

CREATE TABLE `tb_food` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `makanan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rent`
--

CREATE TABLE `tb_rent` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_balik` date NOT NULL,
  `jaminan` varchar(255) NOT NULL,
  `jenismobil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_send`
--

CREATE TABLE `tb_send` (
  `id` int(11) NOT NULL,
  `namapengirim` varchar(255) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `namapenerima` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `barang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_shop`
--

CREATE TABLE `tb_shop` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `nohp` char(15) NOT NULL,
  `pengiriman` varchar(500) NOT NULL,
  `produk` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_travel`
--

CREATE TABLE `tb_travel` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `durasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bike`
--
ALTER TABLE `tb_bike`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_food`
--
ALTER TABLE `tb_food`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rent`
--
ALTER TABLE `tb_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_send`
--
ALTER TABLE `tb_send`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_shop`
--
ALTER TABLE `tb_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_travel`
--
ALTER TABLE `tb_travel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bike`
--
ALTER TABLE `tb_bike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_food`
--
ALTER TABLE `tb_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_rent`
--
ALTER TABLE `tb_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_send`
--
ALTER TABLE `tb_send`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_shop`
--
ALTER TABLE `tb_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_travel`
--
ALTER TABLE `tb_travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
