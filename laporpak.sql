-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2021 pada 18.18
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporpak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `no_hp`, `email`, `username`, `password`) VALUES
(1, '', 'a@a.c', 'admin', 'd41ca9b3ff93b24da439c32ab28c24fd03220fbee13d3c4650f20125172ae72d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(20) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `email_pelapor` varchar(50) NOT NULL,
  `nohp_pelapor` varchar(13) NOT NULL,
  `kec&kel_pelapor` varchar(50) NOT NULL,
  `Kecamatan_laporan` varchar(20) NOT NULL,
  `Kelurahan_laporan` varchar(20) NOT NULL,
  `RW_laporan` varchar(2) NOT NULL,
  `RT_laporan` varchar(2) NOT NULL,
  `Jalan_laporan` varchar(20) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `Gambar` mediumblob NOT NULL,
  `status_laporan` int(1) NOT NULL,
  `id_prioritas_laporan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_status`
--

CREATE TABLE `laporan_status` (
  `id_laporan_status` int(1) NOT NULL,
  `status_laporan` enum('Terkirim','Diterima','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_status`
--

INSERT INTO `laporan_status` (`id_laporan_status`, `status_laporan`) VALUES
(1, 'Terkirim'),
(2, 'Diterima'),
(3, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prioritas_laporan`
--

CREATE TABLE `prioritas_laporan` (
  `id_prioritas` int(11) NOT NULL,
  `nama_prioritas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prioritas_laporan`
--

INSERT INTO `prioritas_laporan` (`id_prioritas`, `nama_prioritas`) VALUES
(1, 'Prioritas 1'),
(2, 'Prioritas 2'),
(3, 'Prioritas 3'),
(4, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `laporan_status`
--
ALTER TABLE `laporan_status`
  ADD PRIMARY KEY (`id_laporan_status`);

--
-- Indeks untuk tabel `prioritas_laporan`
--
ALTER TABLE `prioritas_laporan`
  ADD PRIMARY KEY (`id_prioritas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `laporan_status`
--
ALTER TABLE `laporan_status`
  MODIFY `id_laporan_status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `prioritas_laporan`
--
ALTER TABLE `prioritas_laporan`
  MODIFY `id_prioritas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
