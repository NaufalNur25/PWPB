-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2022 pada 07.02
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
-- Database: `pwpb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurursan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_lengkap`, `jenis_kelamin`, `kelas`, `jurursan`) VALUES
(2021118504, 'Fajri Zhahiran Wiriadinata', 'L', 'XI RPL 1', 'REKAYASA PERANGKAT LUNAK'),
(2021118508, 'Luthfi Satrio Wicaksono', 'L', 'XI RPL 1', 'REKAYASA PERANGKAT LUNAK'),
(2021118546, 'Ali Nur Rohman', 'L', 'XI RPL 1', 'REKAYASA PERANGKAT LUNAK'),
(2021118589, 'Rangga Ramadhan', 'L', 'XI RPL 1', 'REKAYASA PERANGKAT LUNAK'),
(2021118606, 'Daiva Raditya', 'L', 'XI RPL 1', 'REKAYASA PERANGKAT LUNAK'),
(2021118651, 'Mochamad Daffa', 'L', 'XI RPL 1', 'REKAYASA PERANGKAT LUNAK'),
(2021118659, 'Naufal Nur Hafizh', 'L', 'XI RPL 1', 'REKAYASA PERANGKAT LUNAK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
