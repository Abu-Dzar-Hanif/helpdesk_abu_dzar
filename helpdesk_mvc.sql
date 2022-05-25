-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2022 pada 09.52
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk_mvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `kd_divisi` varchar(15) NOT NULL,
  `nama_div` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`kd_divisi`, `nama_div`) VALUES
('DIV001', 'Admin'),
('DIV002', 'IT'),
('DIV003', 'Akutansi'),
('DIV004', 'Humas'),
('DIV005', 'HRD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `kd_karyawan` varchar(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `kd_divisi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`kd_karyawan`, `nama`, `gender`, `no_telpon`, `kd_divisi`) VALUES
('202106001', 'abu dzar', 'Laki-Laki', '08123456789', 'DIV001'),
('202106002', 'admin Helpdesk', 'Laki-Laki', '08123456789', 'DIV002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `kd_tiket` varchar(11) NOT NULL,
  `kd_karyawan` varchar(15) NOT NULL,
  `keluhan` text NOT NULL,
  `foto` text NOT NULL,
  `tgl_buat` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `petugas` varchar(35) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `tgl_laporan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`kd_tiket`, `kd_karyawan`, `keluhan`, `foto`, `tgl_buat`, `tgl_selesai`, `status`, `petugas`, `unit`, `tgl_laporan`) VALUES
('IT0621001', '202106001', 'sd', 'Screenshot_(2)1.png', '2021-06-27 06:02:29', '2021-06-30 10:46:25', 'Done', 'admin', 'abu dzar', '2021-06-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `kd_karyawan` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `kd_karyawan`, `username`, `password`, `level`) VALUES
(1, '202106001', 'abu dzar', '12345', 'user'),
(2, '202106002', 'admin', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`kd_divisi`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kd_karyawan`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kd_tiket`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
